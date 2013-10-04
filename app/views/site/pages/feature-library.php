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
$this->pageTitle = $this->pageHeading = t('Feature Library');
$this->pageSubheading = t('Learn how to use the awesome features in YiiDressing');

// menu
$this->menu = YdMenu::getItemsFromMenu('Help');

// breadcrumbs
//$this->breadcrumbs[] = t('Getting Started');
?>
<div class="row">

<!-- Left menu BEGIN -->
<div id="sidebar" class="span3">
    <ul class="nav nav-list bs-docs-sidenav affix-top">
        <li><a href="#base-controllers"><i class="icon-chevron-right"></i> Base Controllers</a></li>
        <li><a href="#base-models"><i class="icon-chevron-right"></i> Base Models</a></li>
        <li><a href="#attachment-management"><i class="icon-chevron-right"></i> Attachment Management</a></li>
        <li><a href="#contact-management"><i class="icon-chevron-right"></i> Contact Management</a></li>
        <li><a href="#menu-management"><i class="icon-chevron-right"></i> Menu Management</a></li>
        <li><a href="#setting-management"><i class="icon-chevron-right"></i> Settings Management</a></li>
        <li><a href="#user-management"><i class="icon-chevron-right"></i> User Management</a></li>
        <li><br/></li>
        <li><a href="#data-auditing"><i class="icon-chevron-right"></i> Data Auditing</a></li>
        <li><a href="#email-handling"><i class="icon-chevron-right"></i> Email Handling</a></li>
        <li><a href="#error-handling"><i class="icon-chevron-right"></i> Error Handling</a></li>
        <li><a href="#redirect-handling"><i class="icon-chevron-right"></i> Redirect Handling</a></li>
        <li><br/></li>
        <li><a href="#gii"><i class="icon-chevron-right"></i> Code Generation</a></li>
        <li><a href="#behaviors"><i class="icon-chevron-right"></i> Behaviors</a></li>
        <li><a href="#helpers"><i class="icon-chevron-right"></i> Helpers</a></li>
        <li><a href="#validators"><i class="icon-chevron-right"></i> Validators</a></li>
        <li><a href="#widgets"><i class="icon-chevron-right"></i> Widgets</a></li>
    </ul>
</div>
<!-- Left menu END -->

<div class="span9">
<section id="base-models">
    <?php
    echo '<div class="page-header"><h1>' . t('Base Models') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //                array('label' => t('controller'), 'url' => array('/site/doc', 'view' => 'controller')),
//                array('label' => t('crud'), 'url' => array('/site/doc', 'view' => 'crud')),
//                array('label' => t('form'), 'url' => array('/site/doc', 'view' => 'form')),
//                array('label' => t('model'), 'url' => array('/site/doc', 'view' => 'model')),
        ),
    ));
    ?>
</section>
<section id="base-controllers">
    <?php
    echo '<div class="page-header"><h1>' . t('Base Controllers') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //            array('label' => t('modal-responsive-fix'), 'url' => array('/site/doc', 'view' => 'modal-responsive-fix')),
//            array('label' => t('qtip2'), 'url' => array('/site/doc', 'view' => 'qtip2')),
//            array('label' => t('yii-dressing'), 'url' => array('/site/doc', 'view' => 'yii-dressing')),
        ),
    ));
    ?>
</section>
<section id="attachment-management">
    <?php
    echo '<div class="page-header"><h1>' . t('Attachment Management') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //array('label' => t('YdGeneratePropertiesAction'), 'url' => array('/site/doc', 'view' => 'YdGeneratePropertiesAction')),
        ),
    ));
    ?>
</section>
<section id="contact-management">
    <?php
    echo '<div class="page-header"><h1>' . t('Contact Management') . '</h1></div>';
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
<section id="menu-management">
    <?php
    echo '<div class="page-header"><h1>' . t('Menu Management') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array(),
    ));
    ?>
</section>
<section id="setting-management">
    <?php
    echo '<div class="page-header"><h1>' . t('Settings Management') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //                array('label' => t('YdReCaptchaValidator'), 'url' => array('/site/doc', 'view' => 'YdReCaptchaValidator')),
//                array('label' => t('YdRequiredOtherValidator'), 'url' => array('/site/doc', 'view' => 'YdRequiredOtherValidator')),
        ),
    ));
    ?>
</section>
<section id="user-management">
    <?php
    echo '<div class="page-header"><h1>' . t('User Management') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array(),
    ));
    ?>
</section>

<section id="data-auditing">
    <?php
    echo '<div class="page-header"><h1>' . t('Data Auditing') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //                array('label' => t('EmailSpoolCommand'), 'url' => array('/site/doc', 'view' => 'EmailSpoolCommand')),
//                array('label' => t('ErrorEmailCommand'), 'url' => array('/site/doc', 'view' => 'ErrorEmailCommand')),
        ),
    ));
    ?>
</section>
<section id="email-handling">
    <?php
    echo '<div class="page-header"><h1>' . t('Email Handling') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //                array('label' => t('YdActiveDataProvider'), 'url' => array('/site/doc', 'view' => 'YdActiveDataProvider')),
//                array('label' => t('YdActiveFormModel'), 'url' => array('/site/doc', 'view' => 'YdActiveFormModel')),
//                array('label' => t('YdActiveRecord'), 'url' => array('/site/doc', 'view' => 'YdActiveRecord')),
//                array('label' => t('YdApiController'), 'url' => array('/site/doc', 'view' => 'YdApiController')),
//                array('label' => t('YdClientScript'), 'url' => array('/site/doc', 'view' => 'YdClientScript')),
//                array('label' => t('YdConsoleCommand'), 'url' => array('/site/doc', 'view' => 'YdConsoleCommand')),
//                array('label' => t('YdController'), 'url' => array('/site/doc', 'view' => 'YdController')),
//                array('label' => t('YdDbMigration'), 'url' => array('/site/doc', 'view' => 'YdDbMigration')),
//                array('label' => t('YdErrorHandler'), 'url' => array('/site/doc', 'view' => 'YdErrorHandler')),
//                array('label' => t('YdFatalErrorCatch'), 'url' => array('/site/doc', 'view' => 'YdFatalErrorCatch')),
//                array('label' => t('YdFormModel'), 'url' => array('/site/doc', 'view' => 'YdFormModel')),
//                array('label' => t('YdProfileLogRoute'), 'url' => array('/site/doc', 'view' => 'YdProfileLogRoute')),
//                array('label' => t('YdReturnUrl'), 'url' => array('/site/doc', 'view' => 'YdReturnUrl')),
//                array('label' => t('YdUserIdentity'), 'url' => array('/site/doc', 'view' => 'YdUserIdentity')),
//                array('label' => t('YdWebController'), 'url' => array('/site/doc', 'view' => 'YdWebController')),
//                array('label' => t('YdWebUser'), 'url' => array('/site/doc', 'view' => 'YdWebUser')),
        ),
    ));
    ?>
</section>
<section id="error-handling">
    <?php
    echo '<div class="page-header"><h1>' . t('Error Handling') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //                array('label' => t('AccountController'), 'url' => array('/site/doc', 'view' => 'AccountController')),
//                array('label' => t('AttachmentController'), 'url' => array('/site/doc', 'view' => 'AttachmentController')),
//                array('label' => t('AuditController'), 'url' => array('/site/doc', 'view' => 'AuditController')),
//                array('label' => t('AuditTrailController'), 'url' => array('/site/doc', 'view' => 'AuditTrailController')),
//                array('label' => t('ContactUsController'), 'url' => array('/site/doc', 'view' => 'ContactUsController')),
//                array('label' => t('EmailSpoolController'), 'url' => array('/site/doc', 'view' => 'EmailSpoolController')),
//                array('label' => t('EmailTemplateController'), 'url' => array('/site/doc', 'view' => 'EmailTemplateController')),
//                array('label' => t('ErrorController'), 'url' => array('/site/doc', 'view' => 'ErrorController')),
//                array('label' => t('LookupController'), 'url' => array('/site/doc', 'view' => 'LookupController')),
//                array('label' => t('MenuController'), 'url' => array('/site/doc', 'view' => 'MenuController')),
//                array('label' => t('RoleController'), 'url' => array('/site/doc', 'view' => 'RoleController')),
//                array('label' => t('SettingController'), 'url' => array('/site/doc', 'view' => 'SettingController')),
//                array('label' => t('UserController'), 'url' => array('/site/doc', 'view' => 'UserController')),
        ),
    ));
    ?>
</section>
<section id="redirect-handling">
    <?php
    echo '<div class="page-header"><h1>' . t('Redirect Handling') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array( //                array('label' => t('YdAttachment'), 'url' => array('/site/doc', 'view' => 'YdAttachment')),
//                array('label' => t('YdAudit'), 'url' => array('/site/doc', 'view' => 'YdAudit')),
//                array('label' => t('YdAuditTrail'), 'url' => array('/site/doc', 'view' => 'YdAuditTrail')),
//                array('label' => t('YdContactUs'), 'url' => array('/site/doc', 'view' => 'YdContactUs')),
//                array('label' => t('YdEmailSpool'), 'url' => array('/site/doc', 'view' => 'YdEmailSpool')),
//                array('label' => t('YdEmailTemplate'), 'url' => array('/site/doc', 'view' => 'YdEmailTemplate')),
//                array('label' => t('YdLoginForm'), 'url' => array('/site/doc', 'view' => 'YdLoginForm')),
//                array('label' => t('YdLookup'), 'url' => array('/site/doc', 'view' => 'YdLookup')),
//                array('label' => t('YdMenu'), 'url' => array('/site/doc', 'view' => 'YdMenu')),
//                array('label' => t('YdRole'), 'url' => array('/site/doc', 'view' => 'YdRole')),
//                array('label' => t('YdSetting'), 'url' => array('/site/doc', 'view' => 'YdSetting')),
//                array('label' => t('YdToken'), 'url' => array('/site/doc', 'view' => 'YdToken')),
//                array('label' => t('YdUser'), 'url' => array('/site/doc', 'view' => 'YdUser')),
//                array('label' => t('YdUserLogin'), 'url' => array('/site/doc', 'view' => 'YdUserLogin')),
//                array('label' => t('YdUserPassword'), 'url' => array('/site/doc', 'view' => 'YdUserPassword')),
//                array('label' => t('YdUserRecover'), 'url' => array('/site/doc', 'view' => 'YdUserRecover')),
//                array('label' => t('YdUserSignup'), 'url' => array('/site/doc', 'view' => 'YdUserSignup')),
//                array('label' => t('YdUserToRole'), 'url' => array('/site/doc', 'view' => 'YdUserToRole')),
        ),
    ));
    ?>
</section>

<section id="gii">
    <?php
    echo '<div class="page-header"><h1>' . t('Code Generation') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array(),
    ));
    ?>
</section>
<section id="behaviors">
    <?php
    echo '<div class="page-header"><h1>' . t('Behaviors') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array(),
    ));
    ?>
</section>
<section id="helpers">
    <?php
    echo '<div class="page-header"><h1>' . t('Helpers') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array(
            array('label' => t('YdArray2Xml'), 'url' => array('/site/doc', 'view' => 'YdArray2Xml')),
            array('label' => t('YdCrypt'), 'url' => array('/site/doc', 'view' => 'YdCrypt')),
            array('label' => t('YdCsv'), 'url' => array('/site/doc', 'view' => 'YdCsv')),
            array('label' => t('YdEMailHelper'), 'url' => array('/site/doc', 'view' => 'YdEMailHelper')),
            array('label' => t('YdEncoding'), 'url' => array('/site/doc', 'view' => 'YdEncoding')),
            array('label' => t('YdFileHelper'), 'url' => array('/site/doc', 'view' => 'YdFileHelper')),
            array('label' => t('YdHelper'), 'url' => array('/site/doc', 'view' => 'YdHelper')),
            array('label' => t('YdMustache'), 'url' => array('/site/doc', 'view' => 'YdMustache')),
            array('label' => t('YdNumberHelper'), 'url' => array('/site/doc', 'view' => 'YdNumberHelper')),
            array('label' => t('YdPasswordHash'), 'url' => array('/site/doc', 'view' => 'YdPasswordHash')),
            array('label' => t('YdPayPalHelper'), 'url' => array('/site/doc', 'view' => 'YdPayPalHelper')),
            array('label' => t('YdSecureLink'), 'url' => array('/site/doc', 'view' => 'YdSecureLink')),
            array('label' => t('YdStringHelper'), 'url' => array('/site/doc', 'view' => 'YdStringHelper')),
            array('label' => t('YdSuid'), 'url' => array('/site/doc', 'view' => 'YdSuid')),
            array('label' => t('YdSwiftMailer'), 'url' => array('/site/doc', 'view' => 'YdSwiftMailer')),
            array('label' => t('YdTime'), 'url' => array('/site/doc', 'view' => 'YdTime')),
            array('label' => t('YdXml2Array'), 'url' => array('/site/doc', 'view' => 'YdXml2Array')),
        ),
    ));
    ?>
</section>
<section id="validators">
    <?php
    echo '<div class="page-header"><h1>' . t('Validators') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array(
            array('label' => t('YdRequiredOtherValidator'), 'url' => array('/site/doc', 'view' => 'YdRequiredOtherValidator')),
        ),
    ));
    ?>
</section>
<section id="widgets">
    <?php
    echo '<div class="page-header"><h1>' . t('Widgets') . '</h1></div>';
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'stacked' => true,
        'items' => array(
            array('label' => t('YdActiveForm'), 'url' => array('/site/doc', 'view' => 'YdActiveForm')),
            array('label' => t('YdAskToSaveWork'), 'url' => array('/site/doc', 'view' => 'YdAskToSaveWork')),
            array('label' => t('YdDatePicker'), 'url' => array('/site/doc', 'view' => 'YdDatePicker')),
            array('label' => t('YdDetailView'), 'url' => array('/site/doc', 'view' => 'YdDetailView')),
            array('label' => t('YdDropdownColumn'), 'url' => array('/site/doc', 'view' => 'YdDropdownColumn')),
            array('label' => t('YdGridView'), 'url' => array('/site/doc', 'view' => 'YdGridView')),
            array('label' => t('YdHighchartsWidget'), 'url' => array('/site/doc', 'view' => 'YdHighchartsWidget')),
            array('label' => t('YdJavaScriptWidget'), 'url' => array('/site/doc', 'view' => 'YdJavaScriptWidget')),
            array('label' => t('YdListView'), 'url' => array('/site/doc', 'view' => 'YdListView')),
            array('label' => t('YdModal'), 'url' => array('/site/doc', 'view' => 'YdModal')),
            array('label' => t('YdNavbar'), 'url' => array('/site/doc', 'view' => 'YdNavbar')),
            array('label' => t('YdQTip'), 'url' => array('/site/doc', 'view' => 'YdQTip')),
            array('label' => t('YdReCaptcha'), 'url' => array('/site/doc', 'view' => 'YdReCaptcha')),
        ),
    ));
    ?>
</section>

</div>
</div>