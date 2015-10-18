<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Panchanga\Tithi\Object;

use AstroApp\Panchanga\Karana\Karana;

/**
 * Class of tithi 4.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T4 extends TithiObject
{
    /**
     * Tithi key
     * 
     * @var int
     */
    protected $tithiKey = 4;

    /**
     * Devanagari number 4 in transliteration.
     * 
     * @var array
     * @see Jyotish\Alphabet\Devanagari
     */
    protected $tithiTranslit = ['d4'];

    /**
     * Karana of tithi.
     * 
     * @var string
     */
    protected $tithiKarana = [
        1 => Karana::NAME_VANIJA,
        2 => Karana::NAME_VISHTI
    ];

    public function __construct($options = null) {
        parent::__construct($options);
    }
}