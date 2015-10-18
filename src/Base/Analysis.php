<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Base;

use AstroApp\Base\Data;
use AstroApp\Base\Biblio;
use AstroApp\Graha\Graha;
use AstroApp\Rashi\Rashi;
use AstroApp\Tattva\Karaka;

/**
 * Main class for analysis of horoscopes.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Analysis
{
    
    use \AstroApp\Base\Traits\DataTrait;

    /**
     * Constructor
     * 
     * @param \Jyotish\Base\Data $Data
     */
    public function __construct(\AstroApp\Base\Data $Data) {
        $this->setData($Data);
    }

    /**
     * Get chara karaka.
     * 
     * @param bool $reverse
     * @param string $system Jyotish system
     * @return array
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 32, Verse 13-17.
     * @see Maharishi Jaimini. Jaimini Upadesha Sutras. Chapter 1, Quarter 1, Verse 11-18
     */
    public function getCharaKaraka($reverse = false, $system = Biblio::AUTHOR_PARASHARA)
    {
        $grahas = $this->getData()['graha'];
        unset($grahas[Graha::KEY_KE]);
        switch ($system) {
            case Biblio::AUTHOR_JAIMINI:
            case Biblio::BOOK_US:
                unset($grahas[Graha::KEY_RA]);
                break;
            case Biblio::AUTHOR_PARASHARA:
            case Biblio::BOOK_BPHS:
            default:
                $grahas[Graha::KEY_RA]['degree'] = 30 - $grahas[Graha::KEY_RA]['degree'];
        }

        uasort($grahas, 
            function ($d1, $d2) {
                if ($d1['degree'] == $d2['degree']) {
                    return 0;
                } else {
                    return ($d1['degree'] < $d2['degree']) ? 1 : -1;
                }
            }
        );
        
        $karakas = Karaka::listKaraka($system);
        reset($karakas);
        foreach ($grahas as $key => $data) {
            $grahaKaraka[$key] = current($karakas);
            next($karakas);
        }

        if ($reverse) {
            return array_flip($grahaKaraka);
        } else {
            return $grahaKaraka;
        }
    }

    /**
     * Get karakamsha.
     * 
     * @return int
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 33, Verse 1.
     */
    public function getKarakamsha()
    {
        $d9Data = $this->getVargaData('D9');
        $atmaKaraka = $this->getCharaKaraka(true)[Karaka::NAME_ATMA];

        return $d9Data['graha'][$atmaKaraka]['rashi'];
    }

    /**
     * Get lagnamsha.
     * 
     * @return int
     */
    public function getLagnamsha()
    {
        $d9Data = $this->getVargaData('D9');

        return $d9Data['lagna'][Graha::KEY_LG]['rashi'];
    }

    /**
     * Get varga data.
     * 
     * @param string $vargaKey Varga key
     * @return array
     */
    public function getVargaData($vargaKey)
    {
        $v = strtoupper($vargaKey);
        if (!isset($this->getData()['varga'][$v])) {
            $this->Data->calcVargaData([$vargaKey]);
        }
        return $this->getData()['varga'][$v];
    }
    
    /**
     * Get rulers of bhavas.
     * 
     * @param array $bhavas
     * @return array
     */
    public function getBhavaRulers(array $bhavas)
    {
        foreach ($bhavas as $bhava) {
            $Rashi = Rashi::getInstance($this->getData()['bhava'][$bhava]['rashi']);
            $rulers[] = $Rashi->rashiRuler;
        }
        $rulers = array_unique($rulers);
        return $rulers;
    }
    
    /**
     * Get rashi in bhava.
     * 
     * @return array
     */
    public function getRashiInBhava() {
        if (is_null($this->temp['rashiInBhava'])) {
            foreach ($this->getData()['bhava'] as $bhava => $params) {
                $rashi = $params['rashi'];
                $this->temp['rashiInBhava'][$rashi] = $bhava;
            }
        }
        return $this->temp['rashiInBhava'];
    }

    /**
     * Get bodies in bhava.
     * 
     * @return array
     */
    public function getBodyInBhava() {
        foreach ([Data::BLOCK_GRAHA, Data::BLOCK_LAGNA, Data::BLOCK_UPAGRAHA] as $block) {
            if (!isset($this->getData()[$block])) continue;
            
            foreach ($this->getData()[$block] as $body => $params) {
                $rashi = $params['rashi'];
                $bhava = $this->getRashiInBhava()[$rashi];

                $bodyInBhava[$body] = $bhava;
            }
        }
        return $bodyInBhava;
    }

    /**
     * Get bodies in rashi.
     * 
     * @return array
     */
    public function getBodyInRashi() {
        foreach ([Data::BLOCK_GRAHA, Data::BLOCK_LAGNA, Data::BLOCK_UPAGRAHA] as $block) {
            if (!isset($this->getData()[$block])) continue;
            
            foreach ($this->getData()[$block] as $body => $params) {
                $rashi = $params['rashi'];

                $bodyInRashi[$body] = $rashi;
            }
        }
        return $bodyInRashi;
    }
}
