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
$this->pageTitle = $this->pageHeading = t('Error Handling');
$this->pageSubheading = t('Always know when there is a problem');

// menu
$this->menu = YdSiteMenu::getItemsFromMenu('Help');

// breadcrumbs
//$this->breadcrumbs[] = t('Getting Started');
?>
<div class="row">

<!-- Left menu BEGIN -->
<div id="sidebar" class="span3">
    <ul class="nav nav-list bs-docs-sidenav affix-top">
        <li><a href="#error-handler"><i class="icon-chevron-right"></i> Error Handler</a></li>
        <li><a href="#fatal-error-catch"><i class="icon-chevron-right"></i> Fatal Error Catch</a></li>
    </ul>
</div>
<!-- Left menu END -->

<div class="span9">
<section id="error-handler">
    <?php
    echo '<div class="page-header"><h1>' . t('Error Handler') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //array('label' => t('YdGeneratePropertiesAction'), 'url' => array('/site/doc', 'view' => 'YdGeneratePropertiesAction')),
        ),
    ));
    ?>
</section>
<section id="fatal-error-catch">
    <?php
    echo '<div class="page-header"><h1>' . t('Fatal Error Catch') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //            array('label' => t('YdAuditBehavior'), 'url' => array('/site/doc', 'view' => 'YdAuditBehavior')),
//            array('label' => t('YdCacheBehavior'), 'url' => array('/site/doc', 'view' => 'YdCacheBehavior')),
//            array('label' => t('YdEavBehavior'), 'url' => array('/site/doc', 'view' => 'YdEavBehavior')),
//            array('label' => t('YdSoftDeleteBehavior'), 'url' => array('/site/doc', 'view' => 'YdSoftDeleteBehavior')),
//            array('label' => t('YdTimestampBehavior'), 'url' => array('/site/doc', 'view' => 'YdTimestampBehavior')),
        ),
    ));
    ?>
</section>

</div>
</div>