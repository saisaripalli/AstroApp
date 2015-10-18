<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Rashi\Object;

use AstroApp\Rashi\Rashi;
use AstroApp\Graha\Graha;
use AstroApp\Tattva\Jiva\Nara\Manusha;
use AstroApp\Tattva\Maha;
use AstroApp\Tattva\Ayurveda;

/**
 * Class of rashi 1.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class R1 extends RashiObject
{
    /**
     * Rashi key
     * 
     * @var int
     */
    protected $objectKey = 1;

    /**
     * Devanagari title 'mesha' in transliteration.
     * 
     * @var array
     * @see AstroApp\Alphabet\Devanagari
     */
    protected $rashiTranslit = ['ma','e','ssa'];

    /**
     * Unicode of rashi.
     * 
     * @var string
     */
    protected $rashiUnicode = '2648';
    
    /**
     * Names of the rashi.
     * 
     * @var array
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 8.
     */
    protected $objectNames = [
        'Kriya',
    ];

    /**
     * Limb of Kaal Purush.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 4-4 1/2.
     */
    protected $rashiLimb = Manusha::LIMB_HEAD;

    /**
     * Prakriti of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 5-5 1/2.
     */
    protected $rashiPrakriti = Ayurveda::PRAKRITI_PITTA;

    /**
     * Bala of rashi.
     * 
     * @var string
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 10.
     * @see Kalyana Varma. Saravali. Chapter 3, Verse 24.
     */
    protected $rashiBala = Rashi::BALA_RATRI;

    /**
     * Daya of rashi.
     * 
     * @var string
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 10.
     * @see Kalyana Varma. Saravali. Chapter 3, Verse 24.
     */
    protected $rashiDaya = Rashi::DAYA_PRUSHTA;

    /**
     * Type of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 6-7.
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 17.
     */
    protected $rashiType = Manusha::TYPE_PASU;

    /**
     * Bhuta of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 6-7.
     */
    protected $rashiBhuta = Maha::BHUTA_AGNI;

    /**
     * Ruler of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 6-7.
     * @see Kalyana Varma. Saravali. Chapter 3, Verse 11.
     */
    protected $rashiRuler = Graha::KEY_MA;

    /**
     * Varna of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 6-7.
     */
    protected $rashiVarna = Manusha::VARNA_KSHATRIYA;

    public function __construct($options = null)
    {
        parent::__construct($options);
    }
}