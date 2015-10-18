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
 * Class of nakshatra 27.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class N27 extends NakshatraObject
{
    /**
     * Nakshatra key
     * 
     * @var int
     */
    protected $nakshatraKey = 27;

    /**
     * Devanagari title 'revati' in transliteration.
     * 
     * @var array
     * @see Jyotish\Alphabet\Devanagari
     */
    protected $nakshatraTranslit = ['ra','e','va','ta','ii'];
    
    /**
     * The number of taras (stars) of the nakshatra.
     * 
     * @var int
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 1-3.
     */
    protected $nakshatraTara = 32;

    /**
     * Deva of nakshatra.
     * 
     * @var string
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 4-5.
     */
    protected $nakshatraDeva = Deva::DEVA_PUSHA;

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
    protected $nakshatraRuler = Graha::KEY_BU;

    protected $nakshatraEnergy = Nakshatra::ENERGY_LAYA;
    protected $nakshatraGana = Manusha::GANA_DEVA;
    protected $nakshatraGender = Manusha::GENDER_FEMALE;
    protected $nakshatraGuna = Maha::GUNA_SATTVA;
    protected $nakshatraPurushartha = Manusha::PURUSHARTHA_MOKSHA;
    protected $nakshatraVarna = Manusha::VARNA_SHUDRA;
    protected $nakshatraPrakriti = Ayurveda::PRAKRITI_KAPHA;
    protected $nakshatraYoni = [
        'animal' => Pasu::ANIMAL_ELEPHANT,
        'gender' => Manusha::GENDER_FEMALE,
    ];
    protected $nakshatraRajju = [
        'lift' => Nakshatra::LIFT_AVAROHA,
        'limb' => Nakshatra::LIMB_PADA,
    ];

    public function __construct($options = null) {
        parent::__construct($options);
    }
}