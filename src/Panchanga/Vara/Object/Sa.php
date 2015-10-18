<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Panchanga\Vara\Object;

use AstroApp\Graha\Graha;

/**
 * Shanivar class.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Sa extends VaraObject
{
    /**
     * Vara key.
     * 
     * @var string
     */
    protected $varaKey = Graha::KEY_SA;

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }
}