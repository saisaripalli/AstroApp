<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Panchanga\Vara\Object;

/**
 * Parent class for vara objects.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class VaraObject extends \AstroApp\Panchanga\AngaObject
{
    use \AstroApp\Base\Traits\GetTrait;
    
    /**
     * Anga type.
     * 
     * @var string
     */
    protected $angaType = 'vara';
    
    /**
     * Vara key.
     * 
     * @var string
     */
    protected $varaKey;
    
    /**
     * Vara name.
     * 
     * @var string
     */
    protected $varaName;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }
}
