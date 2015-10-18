<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Panchanga\Tithi\Object;

use AstroApp\Panchanga\Karana\Karana;

/**
 * Class of tithi 1.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T1 extends TithiObject
{
    /**
     * Tithi key
     * 
     * @var int
     */
    protected $tithiKey = 1;

    /**
     * Devanagari number 1 in transliteration.
     * 
     * @var array
     * @see AstroApp\Alphabet\Devanagari
     */
    protected $tithiTranslit = ['d1'];

    /**
     * Karana of tithi.
     * 
     * @var string
     */
    protected $tithiKarana = [
        1 => Karana::NAME_KINSTUGNA,
        2 => Karana::NAME_BAVA
    ];

    public function __construct($options = null) {
        parent::__construct($options);
    }
}