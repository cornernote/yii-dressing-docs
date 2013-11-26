<?php
/**
 * @var $this YdWebController
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Brett O'Donnell <cornernote@gmail.com>, Zain Ul abidin <zainengineer@gmail.com>
 * @link https://github.com/cornernote/yii-skeleton
 * @license http://www.gnu.org/copyleft/gpl.html
 */
$this->pageTitle = $this->pageHeading = t('Return URL');
$this->pageSubheading = t('Return your visitors to the page they expect to return to');

// menu
$this->menu = YdSiteMenu::getItemsFromMenu('Help');

// breadcrumbs
//$this->breadcrumbs[] = t('Getting Started');
?>
