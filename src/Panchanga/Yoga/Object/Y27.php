<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Panchanga\Yoga\Object;

use AstroApp\Tattva\Jiva\Nara\Deva;

/**
 * Class of yoga 27.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Y27 extends YogaObject
{
    /**
     * Yoga key
     * 
     * @var int
     */
    protected $yogaKey = 27;

    protected $yogaDeva = Deva::DEVA_MARUTH;

    public function __construct($options = null) {
        parent::__construct($options);
    }
}