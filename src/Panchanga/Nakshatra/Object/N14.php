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
 * Class of nakshatra 14.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class N14 extends NakshatraObject
{
    /**
     * Nakshatra key
     * 
     * @var int
     */
    protected $nakshatraKey = 14;

    /**
     * Devanagari title 'chitra' in transliteration.
     * 
     * @var array
     * @see Jyotish\Alphabet\Devanagari
     */
    protected $nakshatraTranslit = ['ca','i','ta','virama','ra','aa'];
    
    /**
     * The number of taras (stars) of the nakshatra.
     * 
     * @var int
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 1-3.
     */
    protected $nakshatraTara = 1;

    /**
     * Deva of nakshatra.
     * 
     * @var string
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 4-5.
     */
    protected $nakshatraDeva = Deva::DEVA_TWASHTR;

    /**
     * Type of nakshatra.
     * 
     * @var string
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 10.
     */
    protected $nakshatraType = Nakshatra::TYPE_MRIDU;

    /**
     * Graha of nakshatra.
     * 
     * @var string
     * @see Satyacharya. Satya Jatakam. Chapter 1, Verse 9.
     */
    protected $nakshatraRuler = Graha::KEY_MA;

    protected $nakshatraEnergy = Nakshatra::ENERGY_STHITI;
    protected $nakshatraGana = Manusha::GANA_RAKSHASA;
    protected $nakshatraGender = Manusha::GENDER_FEMALE;
    protected $nakshatraGuna = Maha::GUNA_TAMA;
    protected $nakshatraPurushartha = Manusha::PURUSHARTHA_KAMA;
    protected $nakshatraVarna = Manusha::VARNA_DASYA;
    protected $nakshatraPrakriti = Ayurveda::PRAKRITI_PITTA;
    protected $nakshatraYoni = [
        'animal' => Pasu::ANIMAL_TIGER,
        'gender' => Manusha::GENDER_FEMALE,
    ];
    protected $nakshatraRajju = [
        'lift' => Nakshatra::LIFT_AROHA,
        'limb' => Nakshatra::LIMB_SHIRO,
    ];

    public function __construct($options = null) {
        parent::__construct($options);
    }
}