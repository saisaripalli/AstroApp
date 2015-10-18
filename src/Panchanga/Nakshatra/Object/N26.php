<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Panchanga\Nakshatra\Object;

use AstroApp\Panchanga\Nakshatra\Nakshatra;
use AstroApp\Graha\Graha;
use AstroApp\Tattva\Jiva\Nara\Deva;
use AstroApp\Tattva\Jiva\Nara\Manusha;
use AstroApp\Tattva\Jiva\Pasu;
use AstroApp\Tattva\Maha;
use AstroApp\Tattva\Ayurveda;

/**
 * Class of nakshatra 26.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class N26 extends NakshatraObject
{
    /**
     * Nakshatra key
     * 
     * @var int
     */
    protected $nakshatraKey = 26;

    /**
     * Devanagari title 'uttara bhadrapada' in transliteration.
     * 
     * @var array
     * @see Jyotish\Alphabet\Devanagari
     */
    protected $nakshatraTranslit = ['_u','ta','virama','ta','ra',' ','bha','aa','da','virama','ra','pa','da','aa'];
    
    /**
     * The number of taras (stars) of the nakshatra.
     * 
     * @var int
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 1-3.
     */
    protected $nakshatraTara = 8;

    /**
     * Deva of nakshatra.
     * 
     * @var string
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 4-5.
     */
    protected $nakshatraDeva = Deva::DEVA_AHIRBUDHYANA;

    /**
     * Type of nakshatra.
     * 
     * @var string
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 6.
     */
    protected $nakshatraType = Nakshatra::TYPE_DHRUVA;

    /**
     * Graha of nakshatra.
     * 
     * @var string
     * @see Satyacharya. Satya Jatakam. Chapter 1, Verse 9.
     */
    protected $nakshatraRuler = Graha::KEY_SA;

    protected $nakshatraEnergy = Nakshatra::ENERGY_STHITI;
    protected $nakshatraGana = Manusha::GANA_MANUSHA;
    protected $nakshatraGender = Manusha::GENDER_MALE;
    protected $nakshatraGuna = Maha::GUNA_TAMA;
    protected $nakshatraPurushartha = Manusha::PURUSHARTHA_ARTHA;
    protected $nakshatraVarna = Manusha::VARNA_KSHATRIYA;
    protected $nakshatraPrakriti = Ayurveda::PRAKRITI_PITTA;
    protected $nakshatraYoni = [
        'animal' => Pasu::ANIMAL_COW,
        'gender' => Manusha::GENDER_FEMALE,
    ];
    protected $nakshatraRajju = [
        'lift' => Nakshatra::LIFT_AVAROHA,
        'limb' => Nakshatra::LIMB_KATI,
    ];

    public function __construct($options = null) {
        parent::__construct($options);
    }
}