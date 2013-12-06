<?php
defined('YII_DRESSING_PATH') or define('YII_DRESSING_PATH', str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, dirname(__FILE__) . '/vendor/mrphp/yii-dressing/yii-dressing'));
require_once(YII_DRESSING_PATH . '/YdConfig.php');

/**
 * Config is a helper class serving pre-application configuration.
 *
 * It encapsulates {@link YdConfig} which provides the actual implementation.
 * By writing your own Config class, you can customize some functionalities of YdConfig.
 */
class Config extends YdConfig
{

    /**
     * Force loading config.json
     * @param null $file
     */
    public function __construct($file = null)
    {
        parent::__construct(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'config.json');
    }

    /**
     * Defines any constant that has not yet been defined.
     */
    protected function initConstants()
    {
        //defined('YII_DEBUG') or define('YII_DEBUG', true);
        defined('DS') or define('DS', DIRECTORY_SEPARATOR);
        defined('APP_PATH') or define('APP_PATH', str_replace(array('\\', '/'), DS, dirname(__FILE__) . '/app'));
        defined('PUBLIC_PATH') or define('PUBLIC_PATH', self::cleanPath(dirname(APP_PATH) . DS . 'public'));
        defined('PORTELA_SHIPPING_PATH') or define('PORTELASHIP_PATH', str_replace(array('\\', '/'), DS, dirname(dirname(__FILE__)) . '/portelaship'));
        parent::initConstants();
    }

}