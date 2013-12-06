<?php
/**
 * @var $this SiteController
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Brett O'Donnell <cornernote@gmail.com>, Zain Ul abidin <zainengineer@gmail.com>
 * @link https://github.com/cornernote/yii-skeleton
 * @license http://www.gnu.org/copyleft/gpl.html
 */

$this->pageTitle = $this->pageHeading = Yii::app()->name;

echo '<h1>' . t('Features') . '</h1>';
$this->widget('bootstrap.widgets.TbMenu', array(
    'type' => 'pills',
    //'stacked' => true,
    'items' => array(
        array('label' => t('Audit Tracking'), 'url' => array('/site/page', 'view' => 'audit-tracking')),
        array('label' => t('Code Generation'), 'url' => array('/site/page', 'view' => 'code-generation')),
        array('label' => t('Error Handling'), 'url' => array('/site/page', 'view' => 'error-handling')),
        array('label' => t('Email Handling'), 'url' => array('/site/page', 'view' => 'email-handling')),
    ),
));

echo '<h1>' . t('Needs Documentation') . '</h1>';
$this->widget('bootstrap.widgets.TbMenu', array(
    'type' => 'pills',
    //'stacked' => true,
    'items' => array(
        array('label' => t('Attachment Management'), 'url' => array('/site/page', 'view' => 'attachment-management')),
        array('label' => t('Contact Us Management'), 'url' => array('/site/page', 'view' => 'contact-us-management')),
        array('label' => t('Model Behaviors'), 'url' => array('/site/page', 'view' => 'model-behaviors')),
        array('label' => t('Model Extras'), 'url' => array('/site/page', 'view' => 'model-extras')),
        array('label' => t('Return URL'), 'url' => array('/site/page', 'view' => 'return-url')),
        array('label' => t('Settings Management'), 'url' => array('/site/page', 'view' => 'settings-management')),
        array('label' => t('Site Menu'), 'url' => array('/site/page', 'view' => 'site-menu')),
        array('label' => t('User Management'), 'url' => array('/site/page', 'view' => 'user-management')),
        array('label' => t('Yii Loader'), 'url' => array('/site/page', 'view' => 'yii-loader')),
    ),
));