<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Panchanga\Vara\Object;

use AstroApp\Graha\Graha;

/**
 * Ravivar class.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Sy extends VaraObject
{
    /**
     * Vara key.
     * 
     * @var string
     */
    protected $varaKey = Graha::KEY_SY;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}