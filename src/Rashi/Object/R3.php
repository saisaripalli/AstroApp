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
 * Class of rashi 3.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class R3 extends RashiObject
{
    /**
     * Rashi key
     * 
     * @var int
     */
    protected $objectKey = 3;

    /**
     * Devanagari title 'mithuna' in transliteration.
     * 
     * @var array
     * @see AstroApp\Alphabet\Devanagari
     */
    protected $rashiTranslit = ['ma','i','tha','u','na'];

    /**
     * Unicode of rashi.
     * 
     * @var string
     */
    protected $rashiUnicode = '264A';
    
    /**
     * Names of the rashi.
     * 
     * @var array
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 8.
     */
    protected $objectNames = [
        'Jituma',
    ];

    /**
     * Limb of Kaal Purush.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 4-4 1/2.
     */
    protected $rashiLimb = Manusha::LIMB_ARMS;

    /**
     * Prakriti of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 5-5 1/2.
     */
    protected $rashiPrakriti = Ayurveda::PRAKRITI_MISHRA;

    /**
     * Bala of rashi.
     * 
     * @var string
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 10.
     * @see Kalyana Varma. Saravali. Chapter 3, Verse 24.
     */
    protected $rashiBala  = Rashi::BALA_RATRI;

    /**
     * Daya of rashi.
     * 
     * @var string
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 10.
     * @see Kalyana Varma. Saravali. Chapter 3, Verse 24.
     */
    protected $rashiDaya = Rashi::DAYA_SIRSHA;

    /**
     * Type of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 9-9 1/2.
     * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 17.
     */
    protected $rashiType = Manusha::TYPE_NARA;

    /**
     * Bhuta of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 9-9 1/2.
     */
    protected $rashiBhuta = Maha::BHUTA_VAYU;

    /**
     * Ruler of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 9-9 1/2.
     * @see Kalyana Varma. Saravali. Chapter 3, Verse 11.
     */
    protected $rashiRuler = Graha::KEY_BU;

    /**
     * Varna of rashi.
     * 
     * @var string
     * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 9-9 1/2.
     */
    protected $rashiVarna = Manusha::VARNA_SHUDRA;

    public function __construct($options = null)
    {
        parent::__construct($options);
    }
}