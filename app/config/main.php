<?php
/**
 * Application Configuration
 *
 * At this point in the runtime all constants have been defined and the environment has been configured.
 */
$app = Config::instance()->getValue('app');
$db = vd(Config::instance()->getValue('db'), array(
    'host' => 'localhost',
    'name' => 'test',
    'user' => 'root',
    'pass' => '',
));
return array(

    // yii settings
    'id' => vd($app['id'], 'yii-dressing'),
    'name' => vd($app['name'], 'YiiDressing'),
    'language' => vd($app['language'], 'en'),
    'theme' => vd($app['theme']),
    'params' => vd($app['params'], array()),

    // paths
    'basePath' => APP_PATH,
    'runtimePath' => dirname(APP_PATH) . DS . 'runtime',
    'aliases' => array(
        'public' => PUBLIC_PATH,
        'vendor' => VENDOR_PATH,
        'dressing' => Config::cleanPath(VENDOR_PATH . '/mrphp/yii-dressing/yii-dressing'),
        'bootstrap' => Config::cleanPath(VENDOR_PATH . '/clevertech/yii-booster/src'), // needs to be named bootstrap
    ),
    'import' => array(
        'application.models.*',
        'application.commands.*',
        'application.components.*',
    ),

    // libraries
    'components' => array(
        'cache' => array(
            'class' => 'CMemCache',
            'keyPrefix' => vd($app['id'], 'app') . '.',
            'servers' => array(
                array(
                    'host' => '127.0.0.1',
                    'port' => 11211,
                    'weight' => 10,
                ),
            ),
        ),
        'db' => array(
            'connectionString' => "mysql:host={$db['host']};dbname={$db['name']}",
            'emulatePrepare' => true,
            'username' => $db['user'],
            'password' => $db['pass'],
            'charset' => 'utf8',
            'schemaCachingDuration' => 3600,
            'enableProfiling' => (YII_DEBUG && YII_DEBUG_TOOLBAR),
            'enableParamLogging' => (YII_DEBUG && YII_DEBUG_TOOLBAR),
        ),
        'themeManager' => array(
            'basePath' => APP_PATH . DS . 'themes',
        ),
        'assetManager' => array(
            'class' => 'dressing.components.YdAssetManager',
            'basePath' => PUBLIC_PATH . DS . 'assets',
            'baseUrl' => PUBLIC_URL . '/assets',
            'linkAssets' => true,
        ),
    ),
    'preload' => array(
        'log',
        'fatalErrorCatch',
        'dressing',
        'auditTracker',
        'bootstrap',
    ),

);
