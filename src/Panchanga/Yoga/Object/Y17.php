<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Panchanga\Yoga\Object;

use AstroApp\Tattva\Jiva\Nara\Deva;

/**
 * Class of yoga 17.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Y17 extends YogaObject
{
    /**
     * Yoga key
     * 
     * @var int
     */
    protected $yogaKey = 17;

    protected $yogaDeva = Deva::DEVA_AGNI;

    public function __construct($options = null) {
        parent::__construct($options);
    }
}