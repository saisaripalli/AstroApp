<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace AstroApp\Yoga;

/**
 * Data yoga class.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Yoga
{
    /**
     * Dhana yoga (wealth)
     */
    const TYPE_DHANA = 'dhana';
    /**
     * Mahapurusha yoga (great persons)
     */
    const TYPE_MAHAPURUSHA = 'mahapurusha';
    /**
     * Nabhasha yoga
     */
    const TYPE_NABHASHA = 'nabhasha';
    /**
     * Parivarthana yoga (bhava exchange)
     */
    const TYPE_PARIVARTHANA = 'parivarthana';
    /**
     * Raja yoga (royal association)
     */
    const TYPE_RAJA = 'raja';
    
    const MAHAPURUSHA_MAHA = 'maha';
    const MAHAPURUSHA_KHALA = 'khala';
    const MAHAPURUSHA_DAINYA = 'dainya';
    
    const INTERPLAY_PARIVARTHANA = 'parivarthana';
    const INTERPLAY_CONJUNCT = 'conjunct';
    const INTERPLAY_ASPECT = 'aspect';
    
    /**
     * List of yogas.
     * 
     * @var array
     */
    public static $type = [
        self::TYPE_DHANA,
        self::TYPE_MAHAPURUSHA,
        self::TYPE_NABHASHA,
        self::TYPE_PARIVARTHANA,
        self::TYPE_RAJA,
    ];
    
    /**
     * Returns the requested instance of yoga class.
     * 
     * @param string $type The type of yoga
     * @param null|array $options Options to set (optional)
     * @return the requested instance of yoga class
     * @throws Exception\InvalidArgumentException
     */
    public static function getInstance($type, array $options = null) {
        if (!in_array($type, self::$type)) {
            throw new Exception\InvalidArgumentException("Yoga '$type' is not defined.");
        }
        
        $yogaClass = 'AstroApp\Yoga\Type\\' . ucfirst($type);
        $yogaObject = new $yogaClass($options);

        return $yogaObject;
    }
}
