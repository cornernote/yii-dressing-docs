<?php
/**
 * Application Web Entry Script
 */

/**
 * Gets the application start timestamp.
 */
defined('YII_BEGIN_TIME') or define('YII_BEGIN_TIME', microtime(true));

/**
 * Setup the environment
 */
require_once(dirname(dirname(__FILE__)) . '/config.php');
$config = Config::createInstance();

/**
 * run the Yii app (Yii-Haw!)
 */
require_once(APP_PATH . DS . 'globals.php');
require_once(APP_PATH . DS . 'yii.php');
Yii::createWebApplication($config->getAppConfig())->run();