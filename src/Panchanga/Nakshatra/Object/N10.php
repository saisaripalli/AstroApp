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
 * Class of nakshatra 10.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class N10 extends NakshatraObject
{
    /**
     * Nakshatra key
     * 
     * @var int
     */
    protected $nakshatraKey = 10;

    /**
     * Devanagari title 'magha' in transliteration.
     * 
     * @var array
     * @see AstroApp\Alphabet\Devanagari
     */
    protected $nakshatraTranslit = ['ma','gha','aa'];

    /**
    * The number of taras (stars) of the nakshatra.
    * 
    * @var int
    * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 1-3.
    */
    protected $nakshatraTara = 5;

    /**
     * Deva of nakshatra.
     * 
     * @var string
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 4-5.
     */
    protected $nakshatraDeva = Deva::DEVA_PITRU;

    /**
     * Type of nakshatra.
     * 
     * @var string
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 8.
     */
    protected $nakshatraType = Nakshatra::TYPE_UGRA;

    /**
     * Graha of nakshatra.
     * 
     * @var string
     * @see Satyacharya. Satya Jatakam. Chapter 1, Verse 9.
     */
    protected $nakshatraRuler = Graha::KEY_KE;

    protected $nakshatraEnergy = Nakshatra::ENERGY_SRISHTI;
    protected $nakshatraGana = Manusha::GANA_RAKSHASA;
    protected $nakshatraGender = Manusha::GENDER_FEMALE;
    protected $nakshatraGuna = Maha::GUNA_TAMA;
    protected $nakshatraPurushartha = Manusha::PURUSHARTHA_ARTHA;
    protected $nakshatraVarna = Manusha::VARNA_SHUDRA;
    protected $nakshatraPrakriti = Ayurveda::PRAKRITI_KAPHA;
    protected $nakshatraYoni = [
        'animal' => Pasu::ANIMAL_RAT,
        'gender' => Manusha::GENDER_MALE,
    ];
    protected $nakshatraRajju = [
        'lift' => Nakshatra::LIFT_AROHA,
        'limb' => Nakshatra::LIMB_PADA,
    ];

    public function __construct($options = null) {
        parent::__construct($options);
    }
}