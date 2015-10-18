<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Panchanga\Tithi\Object;

use AstroApp\Panchanga\Karana\Karana;

/**
 * Class of tithi 10.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T10 extends TithiObject
{
    /**
     * Tithi key
     * 
     * @var int
     */
    protected $tithiKey = 10;

    /**
     * Devanagari number 10 in transliteration.
     * 
     * @var array
     * @see Jyotish\Alphabet\Devanagari
     */
    protected $tithiTranslit = ['d1', 'd0'];

    /**
     * Karana of tithi.
     * 
     * @var string
     */
    protected $tithiKarana = [
        1 => Karana::NAME_TAITILA,
        2 => Karana::NAME_GARA
    ];

    public function __construct($options = null) {
        parent::__construct($options);
    }
}