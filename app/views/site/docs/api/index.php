<?php
$this->pageTitle = $this->pageHeading = Yii::t('app', 'Class Documentation');
$this->breadcrumbs = array();
$this->breadcrumbs[] = Yii::t('app', 'Documentation');
?>

<div class="spacer"></div>

<h2>YiiDressing</h2>
<table class="table table-condensed">
<colgroup>
	<col class="col-package" />
	<col class="col-class" />
	<col class="col-description" />
</colgroup>
<tr>
  <th>Package</th><th>Class</th><th>Description</th>
</tr>
	<tr>
		  <td rowspan="1"><a name="dressing"></a>dressing</td>
		  <td><?php echo CHtml::link('YiiDressing', array('/site/doc', 'view' => 'YiiDressing')); ?></td>
	  <td>In configuration file main.php add this lines of code:</td>
	</tr>
		<tr>
		  <td rowspan="1"><a name="dressing.actions"></a>dressing.actions</td>
		  <td><?php echo CHtml::link('YdGeneratePropertiesAction', array('/site/doc', 'view' => 'YdGeneratePropertiesAction')); ?></td>
	  <td>Class YdGeneratePropertiesAction</td>
	</tr>
		<tr>
		  <td rowspan="5"><a name="dressing.behaviors"></a>dressing.behaviors</td>
		  <td><?php echo CHtml::link('YdAuditBehavior', array('/site/doc', 'view' => 'YdAuditBehavior')); ?></td>
	  <td>YdAuditBehavior</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdCacheBehavior', array('/site/doc', 'view' => 'YdCacheBehavior')); ?></td>
	  <td>YdCacheBehavior</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
	  <td></td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSoftDeleteBehavior', array('/site/doc', 'view' => 'YdSoftDeleteBehavior')); ?></td>
	  <td>YdSoftDeleteBehavior</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdTimestampBehavior', array('/site/doc', 'view' => 'YdTimestampBehavior')); ?></td>
	  <td>YdTimestampBehavior</td>
	</tr>
		<tr>
		  <td rowspan="2"><a name="dressing.commands"></a>dressing.commands</td>
		  <td><?php echo CHtml::link('EmailSpoolCommand', array('/site/doc', 'view' => 'EmailSpoolCommand')); ?></td>
	  <td>EmailSpoolCommand</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('ErrorEmailCommand', array('/site/doc', 'view' => 'ErrorEmailCommand')); ?></td>
	  <td>ErrorEmailCommand</td>
	</tr>
		<tr>
		  <td rowspan="16"><a name="dressing.components"></a>dressing.components</td>
		  <td><?php echo CHtml::link('YdActiveDataProvider', array('/site/doc', 'view' => 'YdActiveDataProvider')); ?></td>
	  <td>YdActiveDataProvider</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdActiveFormModel', array('/site/doc', 'view' => 'YdActiveFormModel')); ?></td>
	  <td>YdActiveFormModel provides a model for ActiveForm when you don't have a model</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
	  <td>YdActiveRecord</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdApiController', array('/site/doc', 'view' => 'YdApiController')); ?></td>
	  <td>YdApiController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdClientScript', array('/site/doc', 'view' => 'YdClientScript')); ?></td>
	  <td>YdClientScript</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdConsoleCommand', array('/site/doc', 'view' => 'YdConsoleCommand')); ?></td>
	  <td>YdConsoleCommand</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdController', array('/site/doc', 'view' => 'YdController')); ?></td>
	  <td>YdController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdDbMigration', array('/site/doc', 'view' => 'YdDbMigration')); ?></td>
	  <td>Class YdDbMigration</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdErrorHandler', array('/site/doc', 'view' => 'YdErrorHandler')); ?></td>
	  <td>Class YdErrorHandler</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdFatalErrorCatch', array('/site/doc', 'view' => 'YdFatalErrorCatch')); ?></td>
	  <td>Extension for catching FATAL errors</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdFormModel', array('/site/doc', 'view' => 'YdFormModel')); ?></td>
	  <td>Class YdFormModel</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdProfileLogRoute', array('/site/doc', 'view' => 'YdProfileLogRoute')); ?></td>
	  <td>Class YdProfileLogRoute</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdReturnUrl', array('/site/doc', 'view' => 'YdReturnUrl')); ?></td>
	  <td>Wrapper to maintain state of a Return URL</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdUserIdentity', array('/site/doc', 'view' => 'YdUserIdentity')); ?></td>
	  <td>Class YdUserIdentity</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
	  <td>Class YdWebController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdWebUser', array('/site/doc', 'view' => 'YdWebUser')); ?></td>
	  <td></td>
	</tr>
		<tr>
		  <td rowspan="13"><a name="dressing.controllers"></a>dressing.controllers</td>
		  <td><?php echo CHtml::link('AccountController', array('/site/doc', 'view' => 'AccountController')); ?></td>
	  <td>AccountController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('AttachmentController', array('/site/doc', 'view' => 'AttachmentController')); ?></td>
	  <td>AttachmentController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('AuditController', array('/site/doc', 'view' => 'AuditController')); ?></td>
	  <td>AuditController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('AuditTrailController', array('/site/doc', 'view' => 'AuditTrailController')); ?></td>
	  <td>AuditTrailController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('ContactUsController', array('/site/doc', 'view' => 'ContactUsController')); ?></td>
	  <td>Class ContactUsController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('EmailSpoolController', array('/site/doc', 'view' => 'EmailSpoolController')); ?></td>
	  <td>EmailSpoolController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('EmailTemplateController', array('/site/doc', 'view' => 'EmailTemplateController')); ?></td>
	  <td>EmailTemplateController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('ErrorController', array('/site/doc', 'view' => 'ErrorController')); ?></td>
	  <td>ErrorController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('LookupController', array('/site/doc', 'view' => 'LookupController')); ?></td>
	  <td>LookupController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('MenuController', array('/site/doc', 'view' => 'MenuController')); ?></td>
	  <td>MenuController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('RoleController', array('/site/doc', 'view' => 'RoleController')); ?></td>
	  <td>Class RoleController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('SettingController', array('/site/doc', 'view' => 'SettingController')); ?></td>
	  <td>SettingController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('UserController', array('/site/doc', 'view' => 'UserController')); ?></td>
	  <td>UserController</td>
	</tr>
		<tr>
		  <td rowspan="17"><a name="dressing.helpers"></a>dressing.helpers</td>
		  <td><?php echo CHtml::link('YdArray2Xml', array('/site/doc', 'view' => 'YdArray2Xml')); ?></td>
	  <td>Array2XML: A class to convert array in PHP to XML</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdCrypt', array('/site/doc', 'view' => 'YdCrypt')); ?></td>
	  <td>Class YdCrypt</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdCsv', array('/site/doc', 'view' => 'YdCsv')); ?></td>
	  <td>Class YdCsv</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEMailHelper', array('/site/doc', 'view' => 'YdEMailHelper')); ?></td>
	  <td>YdEMailHelper</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEncoding', array('/site/doc', 'view' => 'YdEncoding')); ?></td>
	  <td></td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdFileHelper', array('/site/doc', 'view' => 'YdFileHelper')); ?></td>
	  <td>Class YdFileHelper</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdHelper', array('/site/doc', 'view' => 'YdHelper')); ?></td>
	  <td></td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdMustache', array('/site/doc', 'view' => 'YdMustache')); ?></td>
	  <td>A Mustache implementation in PHP.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdNumberHelper', array('/site/doc', 'view' => 'YdNumberHelper')); ?></td>
	  <td>Class YdNumberHelper</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdPasswordHash', array('/site/doc', 'view' => 'YdPasswordHash')); ?></td>
	  <td>Portable PHP password hashing framework.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdPayPalHelper', array('/site/doc', 'view' => 'YdPayPalHelper')); ?></td>
	  <td>Sandbox Accounts:</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSecureLink', array('/site/doc', 'view' => 'YdSecureLink')); ?></td>
	  <td>Class YdSecureLink</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdStringHelper', array('/site/doc', 'view' => 'YdStringHelper')); ?></td>
	  <td>Class YdStringHelper</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSuid', array('/site/doc', 'view' => 'YdSuid')); ?></td>
	  <td>YdSuid</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSwiftMailer', array('/site/doc', 'view' => 'YdSwiftMailer')); ?></td>
	  <td>Swift Mailer wrapper class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdTime', array('/site/doc', 'view' => 'YdTime')); ?></td>
	  <td>Class YdTime</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdXml2Array', array('/site/doc', 'view' => 'YdXml2Array')); ?></td>
	  <td>XML2Array: A class to convert XML to array in PHP</td>
	</tr>
		<tr>
		  <td rowspan="18"><a name="dressing.models"></a>dressing.models</td>
		  <td><?php echo CHtml::link('YdAttachment', array('/site/doc', 'view' => 'YdAttachment')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdAudit', array('/site/doc', 'view' => 'YdAudit')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdAuditTrail', array('/site/doc', 'view' => 'YdAuditTrail')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdContactUs', array('/site/doc', 'view' => 'YdContactUs')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEmailSpool', array('/site/doc', 'view' => 'YdEmailSpool')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEmailTemplate', array('/site/doc', 'view' => 'YdEmailTemplate')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdLoginForm', array('/site/doc', 'view' => 'YdLoginForm')); ?></td>
	  <td>YdLoginForm class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdLookup', array('/site/doc', 'view' => 'YdLookup')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdMenu', array('/site/doc', 'view' => 'YdMenu')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdRole', array('/site/doc', 'view' => 'YdRole')); ?></td>
	  <td>--- BEGIN AutoGenerated by tool/generateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSetting', array('/site/doc', 'view' => 'YdSetting')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdToken', array('/site/doc', 'view' => 'YdToken')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdUser', array('/site/doc', 'view' => 'YdUser')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdUserLogin', array('/site/doc', 'view' => 'YdUserLogin')); ?></td>
	  <td>UserLogin is the data structure for keeping user login form data.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdUserPassword', array('/site/doc', 'view' => 'YdUserPassword')); ?></td>
	  <td>UserPassword class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdUserRecover', array('/site/doc', 'view' => 'YdUserRecover')); ?></td>
	  <td>UserRecover class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdUserSignup', array('/site/doc', 'view' => 'YdUserSignup')); ?></td>
	  <td>YdUserSignup is the data structure for keeping user registration form data.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdUserToRole', array('/site/doc', 'view' => 'YdUserToRole')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td rowspan="2"><a name="dressing.validators"></a>dressing.validators</td>
		  <td><?php echo CHtml::link('YdReCaptchaValidator', array('/site/doc', 'view' => 'YdReCaptchaValidator')); ?></td>
	  <td>ReCaptchaValidator validates that the attribute value is the same as the verification code displayed in the CAPTCHA.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdRequiredOtherValidator', array('/site/doc', 'view' => 'YdRequiredOtherValidator')); ?></td>
	  <td>YdRequiredOtherValidator</td>
	</tr>
		<tr>
		  <td rowspan="13"><a name="dressing.widgets"></a>dressing.widgets</td>
		  <td><?php echo CHtml::link('YdActiveForm', array('/site/doc', 'view' => 'YdActiveForm')); ?></td>
	  <td>Class YdActiveForm</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdAskToSaveWork', array('/site/doc', 'view' => 'YdAskToSaveWork')); ?></td>
	  <td>This extension ask for a confirmation to user before leaving the page</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdDatePicker', array('/site/doc', 'view' => 'YdDatePicker')); ?></td>
	  <td>Override CJuiDatePicker</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdDetailView', array('/site/doc', 'view' => 'YdDetailView')); ?></td>
	  <td>Class YdDetailView</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdDropdownColumn', array('/site/doc', 'view' => 'YdDropdownColumn')); ?></td>
	  <td>ItemPriceFieldColumn</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdGridView', array('/site/doc', 'view' => 'YdGridView')); ?></td>
	  <td>Class YdGridView</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdHighchartsWidget', array('/site/doc', 'view' => 'YdHighchartsWidget')); ?></td>
	  <td>HighchartsWidget encapsulates the <a href="http://www.highcharts.com/">Highcharts</a></td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdJavaScriptWidget', array('/site/doc', 'view' => 'YdJavaScriptWidget')); ?></td>
	  <td>Class YdJavaScriptWidget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdListView', array('/site/doc', 'view' => 'YdListView')); ?></td>
	  <td>Class YdListView</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdModal', array('/site/doc', 'view' => 'YdModal')); ?></td>
	  <td>Class YdModal</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdNavbar', array('/site/doc', 'view' => 'YdNavbar')); ?></td>
	  <td>Class Navbar</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdQTip', array('/site/doc', 'view' => 'YdQTip')); ?></td>
	  <td>Class YdQTip</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdReCaptcha', array('/site/doc', 'view' => 'YdReCaptcha')); ?></td>
	  <td>ReCaptcha generates a CAPTCHA using the service provided by reCAPTCHA <a href="http://recaptcha.net/">http://recaptcha.net/</a>.</td>
	</tr>
	</table>

<h2>YiiBooster</h2>
<table class="table table-condensed">
<colgroup>
	<col class="col-package" />
	<col class="col-class" />
	<col class="col-description" />
</colgroup>
<tr>
  <th>Package</th><th>Class</th><th>Description</th>
</tr>
	<tr>
		  <td rowspan="3"><a name="booster.actions"></a>booster.actions</td>
		  <td><?php echo CHtml::link('TbExtendedTooltipAction', array('/site/doc', 'view' => 'TbExtendedTooltipAction')); ?></td>
	  <td>## Class TbExtendedTooltipAction</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbSortableAction', array('/site/doc', 'view' => 'TbSortableAction')); ?></td>
	  <td>## TbSortableAction CAction Component</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbToggleAction', array('/site/doc', 'view' => 'TbToggleAction')); ?></td>
	  <td>## TbToggleAction CAction Component</td>
	</tr>
		<tr>
		  <td rowspan="2"><a name="booster.components"></a>booster.components</td>
		  <td><?php echo CHtml::link('Bootstrap', array('/site/doc', 'view' => 'Bootstrap')); ?></td>
	  <td>## Bootstrap application component.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('JSONStorage', array('/site/doc', 'view' => 'JSONStorage')); ?></td>
	  <td>## JSON Storage</td>
	</tr>
		<tr>
		  <td rowspan="1"><a name="booster.filters"></a>booster.filters</td>
		  <td><?php echo CHtml::link('BootstrapFilter', array('/site/doc', 'view' => 'BootstrapFilter')); ?></td>
	  <td>## Class BootstrapFilter</td>
	</tr>
		<tr>
		  <td rowspan="2"><a name="booster.widgets.charts"></a>booster.widgets.charts</td>
		  <td><?php echo CHtml::link('TbGoogleVisualizationChart', array('/site/doc', 'view' => 'TbGoogleVisualizationChart')); ?></td>
	  <td>## TbGoogleVisualizationChart widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbHighCharts', array('/site/doc', 'view' => 'TbHighCharts')); ?></td>
	  <td>## TbHighCharts widget class</td>
	</tr>
		<tr>
		  <td rowspan="5"><a name="booster.widgets.decoration"></a>booster.widgets.decoration</td>
		  <td><?php echo CHtml::link('TbAlert', array('/site/doc', 'view' => 'TbAlert')); ?></td>
	  <td>## Bootstrap alert widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbBadge', array('/site/doc', 'view' => 'TbBadge')); ?></td>
	  <td>## Bootstrap badge widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbHeroUnit', array('/site/doc', 'view' => 'TbHeroUnit')); ?></td>
	  <td>## Class TbHeroUnit</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbLabel', array('/site/doc', 'view' => 'TbLabel')); ?></td>
	  <td>## Bootstrap label widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbProgress', array('/site/doc', 'view' => 'TbProgress')); ?></td>
	  <td>## Bootstrap progress bar widget.</td>
	</tr>
		<tr>
		  <td rowspan="2"><a name="booster.widgets.editable"></a>booster.widgets.editable</td>
		  <td><?php echo CHtml::link('TbEditableDetailView', array('/site/doc', 'view' => 'TbEditableDetailView')); ?></td>
	  <td>EditableDetailView widget makes editable CDetailView (several attributes of single model shown as name-value table).</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbEditableField', array('/site/doc', 'view' => 'TbEditableField')); ?></td>
	  <td>## EditableField widget makes editable single attribute of model.</td>
	</tr>
		<tr>
		  <td rowspan="2"><a name="booster.widgets.forms"></a>booster.widgets.forms</td>
		  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
	  <td>## ActiveForm supporting cool inputs from Bootstrap</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbForm', array('/site/doc', 'view' => 'TbForm')); ?></td>
	  <td>## Enhanced CActiveForm</td>
	</tr>
		<tr>
		  <td rowspan="4"><a name="booster.widgets.forms.buttons"></a>booster.widgets.forms.buttons</td>
		  <td><?php echo CHtml::link('TbButton', array('/site/doc', 'view' => 'TbButton')); ?></td>
	  <td>Bootstrap button widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbButtonGroup', array('/site/doc', 'view' => 'TbButtonGroup')); ?></td>
	  <td>## Bootstrap button group widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbFormButtonElement', array('/site/doc', 'view' => 'TbFormButtonElement')); ?></td>
	  <td>## The buttonElementClass for TbForm</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbToggleButton', array('/site/doc', 'view' => 'TbToggleButton')); ?></td>
	  <td>## Class TbToggleButton</td>
	</tr>
		<tr>
		  <td rowspan="16"><a name="booster.widgets.forms.inputs"></a>booster.widgets.forms.inputs</td>
		  <td><?php echo CHtml::link('TbColorPicker', array('/site/doc', 'view' => 'TbColorPicker')); ?></td>
	  <td>## TbColorPicker widget class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbDatePicker', array('/site/doc', 'view' => 'TbDatePicker')); ?></td>
	  <td>Bootstrap DatePicker widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbDateRangePicker', array('/site/doc', 'view' => 'TbDateRangePicker')); ?></td>
	  <td>## A simple implementation for date range picker for Twitter Bootstrap</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbDateTimePicker', array('/site/doc', 'view' => 'TbDateTimePicker')); ?></td>
	  <td>Bootstrap DateTimePicker widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbFileUpload', array('/site/doc', 'view' => 'TbFileUpload')); ?></td>
	  <td>Class TbFileUpload</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbFormInputElement', array('/site/doc', 'view' => 'TbFormInputElement')); ?></td>
	  <td>## The inputElementClass for TbForm</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
	  <td>## Bootstrap input widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbInputHorizontal', array('/site/doc', 'view' => 'TbInputHorizontal')); ?></td>
	  <td>## TbInputHorizontal class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbInputInline', array('/site/doc', 'view' => 'TbInputInline')); ?></td>
	  <td>## TbInputInline class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbInputSearch', array('/site/doc', 'view' => 'TbInputSearch')); ?></td>
	  <td>## TbInputSearch class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
	  <td>## TbInputVertical class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbPassfield', array('/site/doc', 'view' => 'TbPassfield')); ?></td>
	  <td>Bootstrap Pass*Field widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbSelect2', array('/site/doc', 'view' => 'TbSelect2')); ?></td>
	  <td>## Select2 wrapper widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbTags', array('/site/doc', 'view' => 'TbTags')); ?></td>
	  <td>## TbTags class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbTimePicker', array('/site/doc', 'view' => 'TbTimePicker')); ?></td>
	  <td>## TbTimePicker widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbTypeahead', array('/site/doc', 'view' => 'TbTypeahead')); ?></td>
	  <td>## Bootstrap typeahead widget.</td>
	</tr>
		<tr>
		  <td rowspan="4"><a name="booster.widgets.forms.inputs.wysiwyg"></a>booster.widgets.forms.inputs.wysiwyg</td>
		  <td><?php echo CHtml::link('TbCKEditor', array('/site/doc', 'view' => 'TbCKEditor')); ?></td>
	  <td>## CKEditor 4 as a form input</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbHtml5Editor', array('/site/doc', 'view' => 'TbHtml5Editor')); ?></td>
	  <td>## TbHtml5Editor widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbMarkdownEditorJS', array('/site/doc', 'view' => 'TbMarkdownEditorJS')); ?></td>
	  <td>## Class TbMarkdownEditorJS</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbRedactorJS', array('/site/doc', 'view' => 'TbRedactorJS')); ?></td>
	  <td>## TbRedactorJs class</td>
	</tr>
		<tr>
		  <td rowspan="4"><a name="booster.widgets.grids"></a>booster.widgets.grids</td>
		  <td><?php echo CHtml::link('TbExtendedGridView', array('/site/doc', 'view' => 'TbExtendedGridView')); ?></td>
	  <td>## TbExtendedGridView is an extended version of TbGridView.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
	  <td>## Bootstrap Zii grid view.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbGroupGridView', array('/site/doc', 'view' => 'TbGroupGridView')); ?></td>
	  <td>## TbGroupGridView widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbJsonGridView', array('/site/doc', 'view' => 'TbJsonGridView')); ?></td>
	  <td>## Class TbJsonGridView</td>
	</tr>
		<tr>
		  <td rowspan="11"><a name="booster.widgets.grids.columns"></a>booster.widgets.grids.columns</td>
		  <td><?php echo CHtml::link('TbBulkActions', array('/site/doc', 'view' => 'TbBulkActions')); ?></td>
	  <td>Bulk actions widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbButtonColumn', array('/site/doc', 'view' => 'TbButtonColumn')); ?></td>
	  <td>## Bootstrap button column widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbButtonGroupColumn', array('/site/doc', 'view' => 'TbButtonGroupColumn')); ?></td>
	  <td>## Enhanced bootstrap button column widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?></td>
	  <td>## Bootstrap grid data column.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbEditableColumn', array('/site/doc', 'view' => 'TbEditableColumn')); ?></td>
	  <td>## EditableColumn widget makes editable one column in CGridView.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbGroupButtonColumn', array('/site/doc', 'view' => 'TbGroupButtonColumn')); ?></td>
	  <td>## Bootstrap button column widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbImageColumn', array('/site/doc', 'view' => 'TbImageColumn')); ?></td>
	  <td>TbImageColumn widget class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbPickerColumn', array('/site/doc', 'view' => 'TbPickerColumn')); ?></td>
	  <td>## Class TbPickerColumn</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbRelationalColumn', array('/site/doc', 'view' => 'TbRelationalColumn')); ?></td>
	  <td>## TbRelationalColumn class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbToggleColumn', array('/site/doc', 'view' => 'TbToggleColumn')); ?></td>
	  <td>## TbToggleColumn widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbTotalSumColumn', array('/site/doc', 'view' => 'TbTotalSumColumn')); ?></td>
	  <td>## TbTotalSumColumn widget class</td>
	</tr>
		<tr>
		  <td rowspan="5"><a name="booster.widgets.grids.columns.json"></a>booster.widgets.grids.columns.json</td>
		  <td><?php echo CHtml::link('TbJsonButtonColumn', array('/site/doc', 'view' => 'TbJsonButtonColumn')); ?></td>
	  <td>## JsonButtomColumn widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbJsonCheckBoxColumn', array('/site/doc', 'view' => 'TbJsonCheckBoxColumn')); ?></td>
	  <td>## TbJsonCheckBoxColumn class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbJsonDataColumn', array('/site/doc', 'view' => 'TbJsonDataColumn')); ?></td>
	  <td>## TbJsonDataColumn class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbJsonGridColumn', array('/site/doc', 'view' => 'TbJsonGridColumn')); ?></td>
	  <td>## TbJsonGridColumn class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbJsonPickerColumn', array('/site/doc', 'view' => 'TbJsonPickerColumn')); ?></td>
	  <td>## Class TbJsonPickerColumn</td>
	</tr>
		<tr>
		  <td rowspan="6"><a name="booster.widgets.grids.operations"></a>booster.widgets.grids.operations</td>
		  <td><?php echo CHtml::link('TbCountOfTypeOperation', array('/site/doc', 'view' => 'TbCountOfTypeOperation')); ?></td>
	  <td>TbCountOfTypeOperation class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?></td>
	  <td>## TbOperation class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbPercentOfTypeEasyPieOperation', array('/site/doc', 'view' => 'TbPercentOfTypeEasyPieOperation')); ?></td>
	  <td>## TbPercentOfTypeEasyPieOperation class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbPercentOfTypeGooglePieOperation', array('/site/doc', 'view' => 'TbPercentOfTypeGooglePieOperation')); ?></td>
	  <td>## TbPercentOfTypeGooglePieOperation class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbPercentOfTypeOperation', array('/site/doc', 'view' => 'TbPercentOfTypeOperation')); ?></td>
	  <td>## TbPercentOfTypeOperation class</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbSumOperation', array('/site/doc', 'view' => 'TbSumOperation')); ?></td>
	  <td>TbSumOperation class</td>
	</tr>
		<tr>
		  <td rowspan="10"><a name="booster.widgets.grouping"></a>booster.widgets.grouping</td>
		  <td><?php echo CHtml::link('TbBox', array('/site/doc', 'view' => 'TbBox')); ?></td>
	  <td>TbBox widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbCarousel', array('/site/doc', 'view' => 'TbCarousel')); ?></td>
	  <td>## Bootstrap carousel widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbCollapse', array('/site/doc', 'view' => 'TbCollapse')); ?></td>
	  <td>## Bootstrap collapse widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbDetailView', array('/site/doc', 'view' => 'TbDetailView')); ?></td>
	  <td>## Bootstrap Zii detail view.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbImageGallery', array('/site/doc', 'view' => 'TbImageGallery')); ?></td>
	  <td>## TbImageGallery widget</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbListView', array('/site/doc', 'view' => 'TbListView')); ?></td>
	  <td>Bootstrap Zii list view.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbTabView', array('/site/doc', 'view' => 'TbTabView')); ?></td>
	  <td>## Class TbTabView</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbTabs', array('/site/doc', 'view' => 'TbTabs')); ?></td>
	  <td>## Bootstrap Javascript tabs widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbThumbnails', array('/site/doc', 'view' => 'TbThumbnails')); ?></td>
	  <td>## Bootstrap thumbnails widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbWizard', array('/site/doc', 'view' => 'TbWizard')); ?></td>
	  <td>## Twitter Bootstrap Wizard widget</td>
	</tr>
		<tr>
		  <td rowspan="2"><a name="booster.widgets.modals"></a>booster.widgets.modals</td>
		  <td><?php echo CHtml::link('TbModal', array('/site/doc', 'view' => 'TbModal')); ?></td>
	  <td>## Bootstrap modal widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbModalManager', array('/site/doc', 'view' => 'TbModalManager')); ?></td>
	  <td>## Bootstrap modal master widget.</td>
	</tr>
		<tr>
		  <td rowspan="5"><a name="booster.widgets.navigation"></a>booster.widgets.navigation</td>
		  <td><?php echo CHtml::link('TbBaseMenu', array('/site/doc', 'view' => 'TbBaseMenu')); ?></td>
	  <td>## Base class for menu in Booster</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbBreadcrumbs', array('/site/doc', 'view' => 'TbBreadcrumbs')); ?></td>
	  <td>Bootstrap breadcrumb widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbDropdown', array('/site/doc', 'view' => 'TbDropdown')); ?></td>
	  <td>## Bootstrap dropdown menu.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
	  <td>Bootstrap menu.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbNavbar', array('/site/doc', 'view' => 'TbNavbar')); ?></td>
	  <td>## Bootstrap navigation bar widget.</td>
	</tr>
		<tr>
		  <td rowspan="5"><a name="booster.widgets.supplementary"></a>booster.widgets.supplementary</td>
		  <td><?php echo CHtml::link('TbEditableSaver', array('/site/doc', 'view' => 'TbEditableSaver')); ?></td>
	  <td>EditableSaver helps to update model by editable widget submit request.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbExtendedFilter', array('/site/doc', 'view' => 'TbExtendedFilter')); ?></td>
	  <td>## Extended filter for grids.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbJsonPager', array('/site/doc', 'view' => 'TbJsonPager')); ?></td>
	  <td>## Class TbJsonPager</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbPager', array('/site/doc', 'view' => 'TbPager')); ?></td>
	  <td>## Bootstrap pager.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbScrollSpy', array('/site/doc', 'view' => 'TbScrollSpy')); ?></td>
	  <td>## Bootstrap scrollspy widget.</td>
	</tr>
	</table>

<h2>Yii</h2>
<table class="table table-condensed">
<colgroup>
	<col class="col-package" />
	<col class="col-class" />
	<col class="col-description" />
</colgroup>
<tr>
  <th>Package</th><th>Class</th><th>Description</th>
</tr>
	<tr>
		  <td rowspan="2"><a name="system"></a>system</td>
		  <td><?php echo CHtml::link('Yii', array('/site/doc', 'view' => 'Yii')); ?></td>
	  <td>Yii is a helper class serving common framework functionalities.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
	  <td>YiiBase is a helper class serving common framework functionalities.</td>
	</tr>
		<tr>
		  <td rowspan="27"><a name="system.base"></a>system.base</td>
		  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
	  <td>CApplication is the base class for all application classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
	  <td>CApplicationComponent is the base class for application component classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
	  <td>CBehavior is a convenient base class for behavior classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
	  <td>CComponent is the base class for all components.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CEnumerable', array('/site/doc', 'view' => 'CEnumerable')); ?></td>
	  <td>CEnumerable is the base class for all enumerable types.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CErrorEvent', array('/site/doc', 'view' => 'CErrorEvent')); ?></td>
	  <td>CErrorEvent represents the parameter for the <?php echo CHtml::link('onError', array('/site/doc', 'view' => 'CApplication', '#' => 'onError')); ?> event.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
	  <td>CErrorHandler handles uncaught PHP errors and exceptions.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
	  <td>CEvent is the base class for all event classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CException', array('/site/doc', 'view' => 'CException')); ?></td>
	  <td>CException represents a generic exception for all purposes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CExceptionEvent', array('/site/doc', 'view' => 'CExceptionEvent')); ?></td>
	  <td>CExceptionEvent represents the parameter for the <?php echo CHtml::link('onException', array('/site/doc', 'view' => 'CApplication', '#' => 'onException')); ?> event.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHttpException', array('/site/doc', 'view' => 'CHttpException')); ?></td>
	  <td>CHttpException represents an exception caused by invalid operations of end-users.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
	  <td>CModel is the base class providing the common features needed by data model objects.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CModelBehavior', array('/site/doc', 'view' => 'CModelBehavior')); ?></td>
	  <td>CModelBehavior is a base class for behaviors that are attached to a model component.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?></td>
	  <td>CModelEvent class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
	  <td>CModule is the base class for module and application classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CSecurityManager', array('/site/doc', 'view' => 'CSecurityManager')); ?></td>
	  <td>CSecurityManager provides private keys, hashing and encryption functions.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CStatePersister', array('/site/doc', 'view' => 'CStatePersister')); ?></td>
	  <td>CStatePersister implements a file-based persistent data storage.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IAction', array('/site/doc', 'view' => 'IAction')); ?></td>
	  <td>IAction is the interface that must be implemented by controller actions.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
	  <td>IApplicationComponent is the interface that all application components must implement.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
	  <td>IAuthManager interface is implemented by an auth manager application component.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IBehavior', array('/site/doc', 'view' => 'IBehavior')); ?></td>
	  <td>IBehavior interfaces is implemented by all behavior classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IFilter', array('/site/doc', 'view' => 'IFilter')); ?></td>
	  <td>IFilter is the interface that must be implemented by action filters.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IStatePersister', array('/site/doc', 'view' => 'IStatePersister')); ?></td>
	  <td>IStatePersister is the interface that must be implemented by state persister classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?></td>
	  <td>IUserIdentity interface is implemented by a user identity class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IViewRenderer', array('/site/doc', 'view' => 'IViewRenderer')); ?></td>
	  <td>IViewRenderer interface is implemented by a view renderer class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IWebServiceProvider', array('/site/doc', 'view' => 'IWebServiceProvider')); ?></td>
	  <td>IWebServiceProvider interface may be implemented by Web service provider classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?></td>
	  <td>IWebUser interface is implemented by a <?php echo CHtml::link('user application component', array('/site/doc', 'view' => 'CWebApplication', '#' => 'user')); ?>.</td>
	</tr>
		<tr>
		  <td rowspan="14"><a name="system.caching"></a>system.caching</td>
		  <td><?php echo CHtml::link('CApcCache', array('/site/doc', 'view' => 'CApcCache')); ?></td>
	  <td>CApcCache provides APC caching in terms of an application component.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
	  <td>CCache is the base class for cache classes with different cache storage implementation.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbCache', array('/site/doc', 'view' => 'CDbCache')); ?></td>
	  <td>CDbCache implements a cache application component by storing cached data in a database.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDummyCache', array('/site/doc', 'view' => 'CDummyCache')); ?></td>
	  <td>CDummyCache is a placeholder cache component.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CEAcceleratorCache', array('/site/doc', 'view' => 'CEAcceleratorCache')); ?></td>
	  <td>CEAcceleratorCache implements a cache application module based on <a href="http://eaccelerator.net/">eaccelerator</a>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFileCache', array('/site/doc', 'view' => 'CFileCache')); ?></td>
	  <td>CFileCache provides a file-based caching mechanism.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMemCache', array('/site/doc', 'view' => 'CMemCache')); ?></td>
	  <td>CMemCache implements a cache application component based on <a href="http://memcached.org/">memcached</a>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMemCacheServerConfiguration', array('/site/doc', 'view' => 'CMemCacheServerConfiguration')); ?></td>
	  <td>CMemCacheServerConfiguration represents the configuration data for a single memcache server.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CRedisCache', array('/site/doc', 'view' => 'CRedisCache')); ?></td>
	  <td>CRedisCache implements a cache application component based on <a href="http://redis.io/">redis</a>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWinCache', array('/site/doc', 'view' => 'CWinCache')); ?></td>
	  <td>CWinCache implements a cache application component based on <a href="http://www.iis.net/expand/wincacheforphp">WinCache</a>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CXCache', array('/site/doc', 'view' => 'CXCache')); ?></td>
	  <td>CXCache implements a cache application module based on <a href="http://xcache.lighttpd.net/">xcache</a>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CZendDataCache', array('/site/doc', 'view' => 'CZendDataCache')); ?></td>
	  <td>CZendDataCache implements a cache application module based on the Zend Data Cache</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('ICache', array('/site/doc', 'view' => 'ICache')); ?></td>
	  <td>ICache is the interface that must be implemented by cache components.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('ICacheDependency', array('/site/doc', 'view' => 'ICacheDependency')); ?></td>
	  <td>ICacheDependency is the interface that must be implemented by cache dependency classes.</td>
	</tr>
		<tr>
		  <td rowspan="7"><a name="system.caching.dependencies"></a>system.caching.dependencies</td>
		  <td><?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?></td>
	  <td>CCacheDependency is the base class for cache dependency classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CChainedCacheDependency', array('/site/doc', 'view' => 'CChainedCacheDependency')); ?></td>
	  <td>CChainedCacheDependency represents a list of cache dependencies.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbCacheDependency', array('/site/doc', 'view' => 'CDbCacheDependency')); ?></td>
	  <td>CDbCacheDependency represents a dependency based on the query result of a SQL statement.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDirectoryCacheDependency', array('/site/doc', 'view' => 'CDirectoryCacheDependency')); ?></td>
	  <td>CDirectoryCacheDependency represents a dependency based on change of a directory.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CExpressionDependency', array('/site/doc', 'view' => 'CExpressionDependency')); ?></td>
	  <td>CExpressionDependency represents a dependency based on the result of a PHP expression.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFileCacheDependency', array('/site/doc', 'view' => 'CFileCacheDependency')); ?></td>
	  <td>CFileCacheDependency represents a dependency based on a file's last modification time.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CGlobalStateCacheDependency', array('/site/doc', 'view' => 'CGlobalStateCacheDependency')); ?></td>
	  <td>CGlobalStateCacheDependency represents a dependency based on a global state value.</td>
	</tr>
		<tr>
		  <td rowspan="12"><a name="system.collections"></a>system.collections</td>
		  <td><?php echo CHtml::link('CAttributeCollection', array('/site/doc', 'view' => 'CAttributeCollection')); ?></td>
	  <td>CAttributeCollection implements a collection for storing attribute names and values.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CConfiguration', array('/site/doc', 'view' => 'CConfiguration')); ?></td>
	  <td>CConfiguration represents an array-based configuration.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?></td>
	  <td>CList implements an integer-indexed collection class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CListIterator', array('/site/doc', 'view' => 'CListIterator')); ?></td>
	  <td>CListIterator implements an iterator for <?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
	  <td>CMap implements a collection that takes key-value pairs.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMapIterator', array('/site/doc', 'view' => 'CMapIterator')); ?></td>
	  <td>CMapIterator implements an iterator for <?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CQueue', array('/site/doc', 'view' => 'CQueue')); ?></td>
	  <td>CQueue implements a queue.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CQueueIterator', array('/site/doc', 'view' => 'CQueueIterator')); ?></td>
	  <td>CQueueIterator implements an iterator for <?php echo CHtml::link('CQueue', array('/site/doc', 'view' => 'CQueue')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CStack', array('/site/doc', 'view' => 'CStack')); ?></td>
	  <td>CStack implements a stack.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CStackIterator', array('/site/doc', 'view' => 'CStackIterator')); ?></td>
	  <td>CStackIterator implements an iterator for <?php echo CHtml::link('CStack', array('/site/doc', 'view' => 'CStack')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CTypedList', array('/site/doc', 'view' => 'CTypedList')); ?></td>
	  <td>CTypedList represents a list whose items are of the certain type.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CTypedMap', array('/site/doc', 'view' => 'CTypedMap')); ?></td>
	  <td>CTypedMap represents a map whose items are of the certain type.</td>
	</tr>
		<tr>
		  <td rowspan="6"><a name="system.console"></a>system.console</td>
		  <td><?php echo CHtml::link('CConsoleApplication', array('/site/doc', 'view' => 'CConsoleApplication')); ?></td>
	  <td>CConsoleApplication represents a console application.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
	  <td>CConsoleCommand represents an executable console command.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CConsoleCommandBehavior', array('/site/doc', 'view' => 'CConsoleCommandBehavior')); ?></td>
	  <td>CConsoleCommandBehavior is a base class for behaviors that are attached to a console command component.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CConsoleCommandEvent', array('/site/doc', 'view' => 'CConsoleCommandEvent')); ?></td>
	  <td>CConsoleCommandEvent class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?></td>
	  <td>CConsoleCommandRunner manages commands and executes the requested command.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHelpCommand', array('/site/doc', 'view' => 'CHelpCommand')); ?></td>
	  <td>CHelpCommand represents a console help command.</td>
	</tr>
		<tr>
		  <td rowspan="6"><a name="system.db"></a>system.db</td>
		  <td><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
	  <td>CDbCommand represents an SQL statement to execute against a database.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
	  <td>CDbConnection represents a connection to a database.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbDataReader', array('/site/doc', 'view' => 'CDbDataReader')); ?></td>
	  <td>CDbDataReader represents a forward-only stream of rows from a query result set.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbException', array('/site/doc', 'view' => 'CDbException')); ?></td>
	  <td>CDbException represents an exception that is caused by some DB-related operations.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
	  <td>CDbMigration is the base class for representing a database migration.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbTransaction', array('/site/doc', 'view' => 'CDbTransaction')); ?></td>
	  <td>CDbTransaction represents a DB transaction.</td>
	</tr>
		<tr>
		  <td rowspan="14"><a name="system.db.ar"></a>system.db.ar</td>
		  <td><?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?></td>
	  <td>CActiveFinder implements eager loading and lazy loading of related active records.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
	  <td>CActiveRecord is the base class for classes representing relational data.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?></td>
	  <td>CActiveRecordBehavior is the base class for behaviors that can be attached to <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CActiveRecordMetaData', array('/site/doc', 'view' => 'CActiveRecordMetaData')); ?></td>
	  <td>CActiveRecordMetaData represents the meta-data for an Active Record class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
	  <td>CActiveRelation is the base class for representing active relations that bring back related objects.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
	  <td>CBaseActiveRelation is the base class for all active relations.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CBelongsToRelation', array('/site/doc', 'view' => 'CBelongsToRelation')); ?></td>
	  <td>CBelongsToRelation represents the parameters specifying a BELONGS_TO relation.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHasManyRelation', array('/site/doc', 'view' => 'CHasManyRelation')); ?></td>
	  <td>CHasManyRelation represents the parameters specifying a HAS_MANY relation.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHasOneRelation', array('/site/doc', 'view' => 'CHasOneRelation')); ?></td>
	  <td>CHasOneRelation represents the parameters specifying a HAS_ONE relation.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJoinElement', array('/site/doc', 'view' => 'CJoinElement')); ?></td>
	  <td>CJoinElement represents a tree node in the join tree created by <?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJoinQuery', array('/site/doc', 'view' => 'CJoinQuery')); ?></td>
	  <td>CJoinQuery represents a JOIN SQL statement.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CManyManyRelation', array('/site/doc', 'view' => 'CManyManyRelation')); ?></td>
	  <td>CManyManyRelation represents the parameters specifying a MANY_MANY relation.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CStatElement', array('/site/doc', 'view' => 'CStatElement')); ?></td>
	  <td>CStatElement represents STAT join element for <?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CStatRelation', array('/site/doc', 'view' => 'CStatRelation')); ?></td>
	  <td>CStatRelation represents a statistical relational query.</td>
	</tr>
		<tr>
		  <td rowspan="6"><a name="system.db.schema"></a>system.db.schema</td>
		  <td><?php echo CHtml::link('CDbColumnSchema', array('/site/doc', 'view' => 'CDbColumnSchema')); ?></td>
	  <td>CDbColumnSchema class describes the column meta data of a database table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
	  <td>CDbCommandBuilder provides basic methods to create query commands for tables.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
	  <td>CDbCriteria represents a query criteria, such as conditions, ordering by, limit/offset.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbExpression', array('/site/doc', 'view' => 'CDbExpression')); ?></td>
	  <td>CDbExpression represents a DB expression that does not need escaping.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
	  <td>CDbSchema is the base class for retrieving metadata information.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
	  <td>CDbTableSchema is the base class for representing the metadata of a database table.</td>
	</tr>
		<tr>
		  <td rowspan="6"><a name="system.db.schema.mssql"></a>system.db.schema.mssql</td>
		  <td><?php echo CHtml::link('CMssqlColumnSchema', array('/site/doc', 'view' => 'CMssqlColumnSchema')); ?></td>
	  <td>CMssqlColumnSchema class describes the column meta data of a MSSQL table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMssqlCommandBuilder', array('/site/doc', 'view' => 'CMssqlCommandBuilder')); ?></td>
	  <td>CMssqlCommandBuilder provides basic methods to create query commands for tables for Mssql Servers.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMssqlPdoAdapter', array('/site/doc', 'view' => 'CMssqlPdoAdapter')); ?></td>
	  <td>This is an extension of default PDO class for mssql driver only</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMssqlSchema', array('/site/doc', 'view' => 'CMssqlSchema')); ?></td>
	  <td>CMssqlSchema is the class for retrieving metadata information from a MS SQL Server database.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMssqlSqlsrvPdoAdapter', array('/site/doc', 'view' => 'CMssqlSqlsrvPdoAdapter')); ?></td>
	  <td>This is an extension of default PDO class for MSSQL SQLSRV driver only.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMssqlTableSchema', array('/site/doc', 'view' => 'CMssqlTableSchema')); ?></td>
	  <td>CMssqlTableSchema represents the metadata for a MSSQL table.</td>
	</tr>
		<tr>
		  <td rowspan="4"><a name="system.db.schema.mysql"></a>system.db.schema.mysql</td>
		  <td><?php echo CHtml::link('CMysqlColumnSchema', array('/site/doc', 'view' => 'CMysqlColumnSchema')); ?></td>
	  <td>CMysqlColumnSchema class describes the column meta data of a MySQL table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMysqlCommandBuilder', array('/site/doc', 'view' => 'CMysqlCommandBuilder')); ?></td>
	  <td>CMysqlCommandBuilder provides basic methods to create query commands for tables.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMysqlSchema', array('/site/doc', 'view' => 'CMysqlSchema')); ?></td>
	  <td>CMysqlSchema is the class for retrieving metadata information from a MySQL database (version 4.1.x and 5.x).</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMysqlTableSchema', array('/site/doc', 'view' => 'CMysqlTableSchema')); ?></td>
	  <td>CMysqlTableSchema represents the metadata for a MySQL table.</td>
	</tr>
		<tr>
		  <td rowspan="4"><a name="system.db.schema.oci"></a>system.db.schema.oci</td>
		  <td><?php echo CHtml::link('COciColumnSchema', array('/site/doc', 'view' => 'COciColumnSchema')); ?></td>
	  <td>COciColumnSchema class describes the column meta data of an Oracle table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('COciCommandBuilder', array('/site/doc', 'view' => 'COciCommandBuilder')); ?></td>
	  <td>COciCommandBuilder provides basic methods to create query commands for tables.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('COciSchema', array('/site/doc', 'view' => 'COciSchema')); ?></td>
	  <td>COciSchema is the class for retrieving metadata information from an Oracle database.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('COciTableSchema', array('/site/doc', 'view' => 'COciTableSchema')); ?></td>
	  <td>COciTableSchema represents the metadata for an Oracle table.</td>
	</tr>
		<tr>
		  <td rowspan="4"><a name="system.db.schema.pgsql"></a>system.db.schema.pgsql</td>
		  <td><?php echo CHtml::link('CPgsqlColumnSchema', array('/site/doc', 'view' => 'CPgsqlColumnSchema')); ?></td>
	  <td>CPgsqlColumnSchema class describes the column meta data of a PostgreSQL table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CPgsqlCommandBuilder', array('/site/doc', 'view' => 'CPgsqlCommandBuilder')); ?></td>
	  <td>CPgsqlCommandBuilder provides basic methods to create query commands for tables.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CPgsqlSchema', array('/site/doc', 'view' => 'CPgsqlSchema')); ?></td>
	  <td>CPgsqlSchema is the class for retrieving metadata information from a PostgreSQL database.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?></td>
	  <td>CPgsqlTable represents the metadata for a PostgreSQL table.</td>
	</tr>
		<tr>
		  <td rowspan="3"><a name="system.db.schema.sqlite"></a>system.db.schema.sqlite</td>
		  <td><?php echo CHtml::link('CSqliteColumnSchema', array('/site/doc', 'view' => 'CSqliteColumnSchema')); ?></td>
	  <td>CSqliteColumnSchema class describes the column meta data of a SQLite table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CSqliteCommandBuilder', array('/site/doc', 'view' => 'CSqliteCommandBuilder')); ?></td>
	  <td>CSqliteCommandBuilder provides basic methods to create query commands for SQLite tables.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CSqliteSchema', array('/site/doc', 'view' => 'CSqliteSchema')); ?></td>
	  <td>CSqliteSchema is the class for retrieving metadata information from a SQLite (2/3) database.</td>
	</tr>
		<tr>
		  <td rowspan="9"><a name="system.i18n"></a>system.i18n</td>
		  <td><?php echo CHtml::link('CChoiceFormat', array('/site/doc', 'view' => 'CChoiceFormat')); ?></td>
	  <td>CChoiceFormat is a helper that chooses an appropriate message based on the specified number value.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?></td>
	  <td>CDateFormatter provides date/time localization functionalities.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbMessageSource', array('/site/doc', 'view' => 'CDbMessageSource')); ?></td>
	  <td>CDbMessageSource represents a message source that stores translated messages in database.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CGettextMessageSource', array('/site/doc', 'view' => 'CGettextMessageSource')); ?></td>
	  <td>CGettextMessageSource represents a message source that is based on GNU Gettext.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?></td>
	  <td>CLocale represents the data relevant to a locale.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
	  <td>CMessageSource is the base class for message translation repository classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMissingTranslationEvent', array('/site/doc', 'view' => 'CMissingTranslationEvent')); ?></td>
	  <td>CMissingTranslationEvent represents the parameter for the <?php echo CHtml::link('onMissingTranslation', array('/site/doc', 'view' => 'CMessageSource', '#' => 'onMissingTranslation')); ?> event.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?></td>
	  <td>CNumberFormatter provides number localization functionalities.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CPhpMessageSource', array('/site/doc', 'view' => 'CPhpMessageSource')); ?></td>
	  <td>CPhpMessageSource represents a message source that stores translated messages in PHP scripts.</td>
	</tr>
		<tr>
		  <td rowspan="3"><a name="system.i18n.gettext"></a>system.i18n.gettext</td>
		  <td><?php echo CHtml::link('CGettextFile', array('/site/doc', 'view' => 'CGettextFile')); ?></td>
	  <td>CGettextFile is the base class for representing a Gettext message file.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CGettextMoFile', array('/site/doc', 'view' => 'CGettextMoFile')); ?></td>
	  <td>CGettextMoFile represents an MO Gettext message file.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CGettextPoFile', array('/site/doc', 'view' => 'CGettextPoFile')); ?></td>
	  <td>CGettextPoFile represents a PO Gettext message file.</td>
	</tr>
		<tr>
		  <td rowspan="11"><a name="system.logging"></a>system.logging</td>
		  <td><?php echo CHtml::link('CChainedLogFilter', array('/site/doc', 'view' => 'CChainedLogFilter')); ?></td>
	  <td>CChainedLogFilter allows you to attach multiple log filters to a log route (See CLogRoute::$filter for details).</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbLogRoute', array('/site/doc', 'view' => 'CDbLogRoute')); ?></td>
	  <td>CDbLogRoute stores log messages in a database table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CEmailLogRoute', array('/site/doc', 'view' => 'CEmailLogRoute')); ?></td>
	  <td>CEmailLogRoute sends selected log messages to email addresses.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFileLogRoute', array('/site/doc', 'view' => 'CFileLogRoute')); ?></td>
	  <td>CFileLogRoute records log messages in files.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CLogFilter', array('/site/doc', 'view' => 'CLogFilter')); ?></td>
	  <td>CLogFilter preprocesses the logged messages before they are handled by a log route.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
	  <td>CLogRoute is the base class for all log route classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CLogRouter', array('/site/doc', 'view' => 'CLogRouter')); ?></td>
	  <td>CLogRouter manages log routes that record log messages in different media.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CLogger', array('/site/doc', 'view' => 'CLogger')); ?></td>
	  <td>CLogger records log messages in memory.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CProfileLogRoute', array('/site/doc', 'view' => 'CProfileLogRoute')); ?></td>
	  <td>CProfileLogRoute displays the profiling results in Web page.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWebLogRoute', array('/site/doc', 'view' => 'CWebLogRoute')); ?></td>
	  <td>CWebLogRoute shows the log content in Web page.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('ILogFilter', array('/site/doc', 'view' => 'ILogFilter')); ?></td>
	  <td>ILogFilter is the interface that must be implemented by log filters.</td>
	</tr>
		<tr>
		  <td rowspan="9"><a name="system.utils"></a>system.utils</td>
		  <td><?php echo CHtml::link('CDateTimeParser', array('/site/doc', 'view' => 'CDateTimeParser')); ?></td>
	  <td>CDateTimeParser converts a date/time string to a UNIX timestamp according to the specified pattern.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
	  <td>CFileHelper provides a set of helper methods for common file system operations.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
	  <td>CFormatter provides a set of commonly used data formatting methods.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CLocalizedFormatter', array('/site/doc', 'view' => 'CLocalizedFormatter')); ?></td>
	  <td>CLocalizedFormatter provides a set of commonly used data formatting methods based on the current locale settings.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMarkdownParser', array('/site/doc', 'view' => 'CMarkdownParser')); ?></td>
	  <td>CMarkdownParser is a wrapper of <a href="http://michelf.com/projects/php-markdown/extra/">MarkdownExtra_Parser</a>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CPasswordHelper', array('/site/doc', 'view' => 'CPasswordHelper')); ?></td>
	  <td>CPasswordHelper provides a simple API for secure password hashing and verification.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CPropertyValue', array('/site/doc', 'view' => 'CPropertyValue')); ?></td>
	  <td>CPropertyValue is a helper class that provides static methods to convert component property values to specific types.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CTimestamp', array('/site/doc', 'view' => 'CTimestamp')); ?></td>
	  <td>CTimestamp represents a timestamp.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CVarDumper', array('/site/doc', 'view' => 'CVarDumper')); ?></td>
	  <td>CVarDumper is intended to replace the buggy PHP function var_dump and print_r.</td>
	</tr>
		<tr>
		  <td rowspan="21"><a name="system.validators"></a>system.validators</td>
		  <td><?php echo CHtml::link('CBooleanValidator', array('/site/doc', 'view' => 'CBooleanValidator')); ?></td>
	  <td>CBooleanValidator validates that the attribute value is either <?php echo CHtml::link('trueValue', array('/site/doc', 'view' => 'CBooleanValidator', '#' => 'trueValue')); ?>  or <?php echo CHtml::link('falseValue', array('/site/doc', 'view' => 'CBooleanValidator', '#' => 'falseValue')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CCaptchaValidator', array('/site/doc', 'view' => 'CCaptchaValidator')); ?></td>
	  <td>CCaptchaValidator validates that the attribute value is the same as the verification code displayed in the CAPTCHA.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CCompareValidator', array('/site/doc', 'view' => 'CCompareValidator')); ?></td>
	  <td>CCompareValidator compares the specified attribute value with another value and validates if they are equal.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDateValidator', array('/site/doc', 'view' => 'CDateValidator')); ?></td>
	  <td>CDateValidator verifies if the attribute represents a date, time or datetime.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDefaultValueValidator', array('/site/doc', 'view' => 'CDefaultValueValidator')); ?></td>
	  <td>CDefaultValueValidator sets the attributes with the specified value.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CEmailValidator', array('/site/doc', 'view' => 'CEmailValidator')); ?></td>
	  <td>CEmailValidator validates that the attribute value is a valid email address.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CExistValidator', array('/site/doc', 'view' => 'CExistValidator')); ?></td>
	  <td>CExistValidator validates that the attribute value exists in a table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFileValidator', array('/site/doc', 'view' => 'CFileValidator')); ?></td>
	  <td>CFileValidator verifies if an attribute is receiving a valid uploaded file.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFilterValidator', array('/site/doc', 'view' => 'CFilterValidator')); ?></td>
	  <td>CFilterValidator transforms the data being validated based on a filter.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CInlineValidator', array('/site/doc', 'view' => 'CInlineValidator')); ?></td>
	  <td>CInlineValidator represents a validator which is defined as a method in the object being validated.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CNumberValidator', array('/site/doc', 'view' => 'CNumberValidator')); ?></td>
	  <td>CNumberValidator validates that the attribute value is a number.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CRangeValidator', array('/site/doc', 'view' => 'CRangeValidator')); ?></td>
	  <td>CRangeValidator validates that the attribute value is among the list (specified via <?php echo CHtml::link('range', array('/site/doc', 'view' => 'CRangeValidator', '#' => 'range')); ?>).</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CRegularExpressionValidator', array('/site/doc', 'view' => 'CRegularExpressionValidator')); ?></td>
	  <td>CRegularExpressionValidator validates that the attribute value matches to the specified <?php echo CHtml::link('regular expression', array('/site/doc', 'view' => 'CRegularExpressionValidator', '#' => 'pattern')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CRequiredValidator', array('/site/doc', 'view' => 'CRequiredValidator')); ?></td>
	  <td>CRequiredValidator validates that the specified attribute does not have null or empty value.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CSafeValidator', array('/site/doc', 'view' => 'CSafeValidator')); ?></td>
	  <td>CSafeValidator marks the associated attributes to be safe for massive assignments.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CStringValidator', array('/site/doc', 'view' => 'CStringValidator')); ?></td>
	  <td>CStringValidator validates that the attribute value is of certain length.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CTypeValidator', array('/site/doc', 'view' => 'CTypeValidator')); ?></td>
	  <td>CTypeValidator verifies if the attribute is of the type specified by <?php echo CHtml::link('type', array('/site/doc', 'view' => 'CTypeValidator', '#' => 'type')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CUniqueValidator', array('/site/doc', 'view' => 'CUniqueValidator')); ?></td>
	  <td>CUniqueValidator validates that the attribute value is unique in the corresponding database table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CUnsafeValidator', array('/site/doc', 'view' => 'CUnsafeValidator')); ?></td>
	  <td>CUnsafeValidator marks the associated attributes to be unsafe so that they cannot be massively assigned.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CUrlValidator', array('/site/doc', 'view' => 'CUrlValidator')); ?></td>
	  <td>CUrlValidator validates that the attribute value is a valid http or https URL.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
	  <td>CValidator is the base class for all validators.</td>
	</tr>
		<tr>
		  <td rowspan="32"><a name="system.web"></a>system.web</td>
		  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
	  <td>CActiveDataProvider implements a data provider based on ActiveRecord.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CArrayDataProvider', array('/site/doc', 'view' => 'CArrayDataProvider')); ?></td>
	  <td>CArrayDataProvider implements a data provider based on a raw data array.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CAssetManager', array('/site/doc', 'view' => 'CAssetManager')); ?></td>
	  <td>CAssetManager is a Web application component that manages private files (called assets) and makes them accessible by Web clients.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
	  <td>CBaseController is the base class for <?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> and <?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CBaseUrlRule', array('/site/doc', 'view' => 'CBaseUrlRule')); ?></td>
	  <td>CBaseUrlRule is the base class for a URL rule class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CCacheHttpSession', array('/site/doc', 'view' => 'CCacheHttpSession')); ?></td>
	  <td>CCacheHttpSession implements a session component using cache as storage medium.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
	  <td>CClientScript manages JavaScript and CSS stylesheets for views.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
	  <td>CController manages a set of actions which deal with the corresponding user requests.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CCookieCollection', array('/site/doc', 'view' => 'CCookieCollection')); ?></td>
	  <td>CCookieCollection implements a collection class to store cookies.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
	  <td>CDataProvider is a base class that implements the <?php echo CHtml::link('IDataProvider', array('/site/doc', 'view' => 'IDataProvider')); ?> interface.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDataProviderIterator', array('/site/doc', 'view' => 'CDataProviderIterator')); ?></td>
	  <td>CDataProviderIterator allows iteration over large data sets without holding the entire set in memory.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbHttpSession', array('/site/doc', 'view' => 'CDbHttpSession')); ?></td>
	  <td>CDbHttpSession extends <?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?> by using database as session data storage.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CExtController', array('/site/doc', 'view' => 'CExtController')); ?></td>
	  <td>CExtController is the base class for controllers distributed as extension.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFormModel', array('/site/doc', 'view' => 'CFormModel')); ?></td>
	  <td>CFormModel represents a data model that collects HTML form inputs.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHttpCookie', array('/site/doc', 'view' => 'CHttpCookie')); ?></td>
	  <td>A CHttpCookie instance stores a single cookie, including the cookie name, value, domain, path, expire, and secure.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHttpRequest', array('/site/doc', 'view' => 'CHttpRequest')); ?></td>
	  <td>CHttpRequest encapsulates the $_SERVER variable and resolves its inconsistency among different Web servers.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
	  <td>CHttpSession provides session-level data management and the related configurations.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHttpSessionIterator', array('/site/doc', 'view' => 'CHttpSessionIterator')); ?></td>
	  <td>CHttpSessionIterator implements an iterator for <?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('COutputEvent', array('/site/doc', 'view' => 'COutputEvent')); ?></td>
	  <td>COutputEvent represents the parameter for events related with output handling.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CPagination', array('/site/doc', 'view' => 'CPagination')); ?></td>
	  <td>CPagination represents information relevant to pagination.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?></td>
	  <td>CSort represents information relevant to sorting.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CSqlDataProvider', array('/site/doc', 'view' => 'CSqlDataProvider')); ?></td>
	  <td>CSqlDataProvider implements a data provider based on a plain SQL statement.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CTheme', array('/site/doc', 'view' => 'CTheme')); ?></td>
	  <td>CTheme represents an application theme.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CThemeManager', array('/site/doc', 'view' => 'CThemeManager')); ?></td>
	  <td>CThemeManager manages the themes for the Web application.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CUploadedFile', array('/site/doc', 'view' => 'CUploadedFile')); ?></td>
	  <td>CUploadedFile represents the information for an uploaded file.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CUrlManager', array('/site/doc', 'view' => 'CUrlManager')); ?></td>
	  <td>CUrlManager manages the URLs of Yii Web applications.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CUrlRule', array('/site/doc', 'view' => 'CUrlRule')); ?></td>
	  <td>CUrlRule represents a URL formatting/parsing rule.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWebApplication', array('/site/doc', 'view' => 'CWebApplication')); ?></td>
	  <td>CWebApplication extends CApplication by providing functionalities specific to Web requests.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWebModule', array('/site/doc', 'view' => 'CWebModule')); ?></td>
	  <td>CWebModule represents an application module.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWidgetFactory', array('/site/doc', 'view' => 'CWidgetFactory')); ?></td>
	  <td>CWidgetFactory creates new widgets to be used in views.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IDataProvider', array('/site/doc', 'view' => 'IDataProvider')); ?></td>
	  <td>IDataProvider is the interface that must be implemented by data provider classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('IWidgetFactory', array('/site/doc', 'view' => 'IWidgetFactory')); ?></td>
	  <td>IWidgetFactory is the interface that must be implemented by a widget factory class.</td>
	</tr>
		<tr>
		  <td rowspan="3"><a name="system.web.actions"></a>system.web.actions</td>
		  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
	  <td>CAction is the base class for all controller action classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CInlineAction', array('/site/doc', 'view' => 'CInlineAction')); ?></td>
	  <td>CInlineAction represents an action that is defined as a controller method.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CViewAction', array('/site/doc', 'view' => 'CViewAction')); ?></td>
	  <td>CViewAction represents an action that displays a view according to a user-specified parameter.</td>
	</tr>
		<tr>
		  <td rowspan="10"><a name="system.web.auth"></a>system.web.auth</td>
		  <td><?php echo CHtml::link('CAccessControlFilter', array('/site/doc', 'view' => 'CAccessControlFilter')); ?></td>
	  <td>CAccessControlFilter performs authorization checks for the specified actions.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CAccessRule', array('/site/doc', 'view' => 'CAccessRule')); ?></td>
	  <td>CAccessRule represents an access rule that is managed by <?php echo CHtml::link('CAccessControlFilter', array('/site/doc', 'view' => 'CAccessControlFilter')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?></td>
	  <td>CAuthAssignment represents an assignment of a role to a user.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?></td>
	  <td>CAuthItem represents an authorization item.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
	  <td>CAuthManager is the base class for authorization manager classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
	  <td>CBaseUserIdentity is a base class implementing <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDbAuthManager', array('/site/doc', 'view' => 'CDbAuthManager')); ?></td>
	  <td>CDbAuthManager represents an authorization manager that stores authorization information in database.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CPhpAuthManager', array('/site/doc', 'view' => 'CPhpAuthManager')); ?></td>
	  <td>CPhpAuthManager represents an authorization manager that stores authorization information in terms of a PHP script file.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CUserIdentity', array('/site/doc', 'view' => 'CUserIdentity')); ?></td>
	  <td>CUserIdentity is a base class for representing identities that are authenticated based on a username and a password.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
	  <td>CWebUser represents the persistent state for a Web application user.</td>
	</tr>
		<tr>
		  <td rowspan="4"><a name="system.web.filters"></a>system.web.filters</td>
		  <td><?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?></td>
	  <td>CFilter is the base class for all filters.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFilterChain', array('/site/doc', 'view' => 'CFilterChain')); ?></td>
	  <td>CFilterChain represents a list of filters being applied to an action.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHttpCacheFilter', array('/site/doc', 'view' => 'CHttpCacheFilter')); ?></td>
	  <td>CHttpCacheFilter implements http caching. It works a lot like <?php echo CHtml::link('COutputCache', array('/site/doc', 'view' => 'COutputCache')); ?></td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CInlineFilter', array('/site/doc', 'view' => 'CInlineFilter')); ?></td>
	  <td>CInlineFilter represents a filter defined as a controller method.</td>
	</tr>
		<tr>
		  <td rowspan="6"><a name="system.web.form"></a>system.web.form</td>
		  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
	  <td>CForm represents a form object that contains form input specifications.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFormButtonElement', array('/site/doc', 'view' => 'CFormButtonElement')); ?></td>
	  <td>CFormButtonElement represents a form button element.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
	  <td>CFormElement is the base class for presenting all kinds of form element.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?></td>
	  <td>CFormElementCollection implements the collection for storing form elements.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
	  <td>CFormInputElement represents form input element.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFormStringElement', array('/site/doc', 'view' => 'CFormStringElement')); ?></td>
	  <td>CFormStringElement represents a string in a form.</td>
	</tr>
		<tr>
		  <td rowspan="5"><a name="system.web.helpers"></a>system.web.helpers</td>
		  <td><?php echo CHtml::link('CGoogleApi', array('/site/doc', 'view' => 'CGoogleApi')); ?></td>
	  <td>CGoogleApi provides helper methods to easily access the Google API loader.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHtml', array('/site/doc', 'view' => 'CHtml')); ?></td>
	  <td>CHtml is a static class that provides a collection of helper methods for creating HTML views.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJSON', array('/site/doc', 'view' => 'CJSON')); ?></td>
	  <td>CJSON converts PHP data to and from JSON format.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJavaScript', array('/site/doc', 'view' => 'CJavaScript')); ?></td>
	  <td>CJavaScript is a helper class containing JavaScript-related handling functions.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJavaScriptExpression', array('/site/doc', 'view' => 'CJavaScriptExpression')); ?></td>
	  <td>CJavaScriptExpression represents a JavaScript expression that does not need escaping.</td>
	</tr>
		<tr>
		  <td rowspan="2"><a name="system.web.renderers"></a>system.web.renderers</td>
		  <td><?php echo CHtml::link('CPradoViewRenderer', array('/site/doc', 'view' => 'CPradoViewRenderer')); ?></td>
	  <td>CPradoViewRenderer implements a view renderer that allows users to use a template syntax similar to PRADO templates.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CViewRenderer', array('/site/doc', 'view' => 'CViewRenderer')); ?></td>
	  <td>CViewRenderer is the base class for view renderer classes.</td>
	</tr>
		<tr>
		  <td rowspan="4"><a name="system.web.services"></a>system.web.services</td>
		  <td><?php echo CHtml::link('CSoapObjectWrapper', array('/site/doc', 'view' => 'CSoapObjectWrapper')); ?></td>
	  <td>CSoapObjectWrapper is a wrapper class internally used when SoapServer::setObject() is not defined.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?></td>
	  <td>CWebService encapsulates SoapServer and provides a WSDL-based web service.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWebServiceAction', array('/site/doc', 'view' => 'CWebServiceAction')); ?></td>
	  <td>CWebServiceAction implements an action that provides Web services.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWsdlGenerator', array('/site/doc', 'view' => 'CWsdlGenerator')); ?></td>
	  <td>CWsdlGenerator generates the WSDL for a given service class.</td>
	</tr>
		<tr>
		  <td rowspan="18"><a name="system.web.widgets"></a>system.web.widgets</td>
		  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
	  <td>CActiveForm provides a set of methods that can help to simplify the creation</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CAutoComplete', array('/site/doc', 'view' => 'CAutoComplete')); ?></td>
	  <td>CAutoComplete generates an auto-complete text field.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CClipWidget', array('/site/doc', 'view' => 'CClipWidget')); ?></td>
	  <td>CClipWidget records its content and makes it available elsewhere.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CContentDecorator', array('/site/doc', 'view' => 'CContentDecorator')); ?></td>
	  <td>CContentDecorator decorates the content it encloses with the specified view.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFilterWidget', array('/site/doc', 'view' => 'CFilterWidget')); ?></td>
	  <td>CFilterWidget is the base class for widgets that can also be used as filters.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CFlexWidget', array('/site/doc', 'view' => 'CFlexWidget')); ?></td>
	  <td>CFlexWidget embeds a Flex 3.x application into a page.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CHtmlPurifier', array('/site/doc', 'view' => 'CHtmlPurifier')); ?></td>
	  <td>CHtmlPurifier is wrapper of <a href="http://htmlpurifier.org">HTML Purifier</a>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
	  <td>CInputWidget is the base class for widgets that collect user inputs.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMarkdown', array('/site/doc', 'view' => 'CMarkdown')); ?></td>
	  <td>CMarkdown converts the captured content from markdown syntax to HTML code.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMaskedTextField', array('/site/doc', 'view' => 'CMaskedTextField')); ?></td>
	  <td>CMaskedTextField generates a masked text field.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMultiFileUpload', array('/site/doc', 'view' => 'CMultiFileUpload')); ?></td>
	  <td>CMultiFileUpload generates a file input that can allow uploading multiple files at a time.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('COutputCache', array('/site/doc', 'view' => 'COutputCache')); ?></td>
	  <td>COutputCache enables caching the output generated by an action or a view fragment.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('COutputProcessor', array('/site/doc', 'view' => 'COutputProcessor')); ?></td>
	  <td>COutputProcessor transforms the content into a different format.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CStarRating', array('/site/doc', 'view' => 'CStarRating')); ?></td>
	  <td>CStarRating displays a star rating control that can collect user rating input.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CTabView', array('/site/doc', 'view' => 'CTabView')); ?></td>
	  <td>CTabView displays contents in multiple tabs.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CTextHighlighter', array('/site/doc', 'view' => 'CTextHighlighter')); ?></td>
	  <td>CTextHighlighter does syntax highlighting for its body content.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CTreeView', array('/site/doc', 'view' => 'CTreeView')); ?></td>
	  <td>CTreeView displays a tree view of hierarchical data.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
	  <td>CWidget is the base class for widgets.</td>
	</tr>
		<tr>
		  <td rowspan="2"><a name="system.web.widgets.captcha"></a>system.web.widgets.captcha</td>
		  <td><?php echo CHtml::link('CCaptcha', array('/site/doc', 'view' => 'CCaptcha')); ?></td>
	  <td>CCaptcha renders a CAPTCHA image element.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CCaptchaAction', array('/site/doc', 'view' => 'CCaptchaAction')); ?></td>
	  <td>CCaptchaAction renders a CAPTCHA image.</td>
	</tr>
		<tr>
		  <td rowspan="3"><a name="system.web.widgets.pagers"></a>system.web.widgets.pagers</td>
		  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
	  <td>CBasePager is the base class for all pagers.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
	  <td>CLinkPager displays a list of hyperlinks that lead to different pages of target.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CListPager', array('/site/doc', 'view' => 'CListPager')); ?></td>
	  <td>CListPager displays a dropdown list that contains options leading to different pages of target.</td>
	</tr>
		<tr>
		  <td rowspan="1"><a name="zii.behaviors"></a>zii.behaviors</td>
		  <td><?php echo CHtml::link('CTimestampBehavior', array('/site/doc', 'view' => 'CTimestampBehavior')); ?></td>
	  <td>CTimestampBehavior will automatically fill date and time related attributes.</td>
	</tr>
		<tr>
		  <td rowspan="6"><a name="zii.widgets"></a>zii.widgets</td>
		  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
	  <td>CBaseListView is the base class for <?php echo CHtml::link('CListView', array('/site/doc', 'view' => 'CListView')); ?> and <?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CBreadcrumbs', array('/site/doc', 'view' => 'CBreadcrumbs')); ?></td>
	  <td>CBreadcrumbs displays a list of links indicating the position of the current page in the whole website.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDetailView', array('/site/doc', 'view' => 'CDetailView')); ?></td>
	  <td>CDetailView displays the detail of a single data model.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CListView', array('/site/doc', 'view' => 'CListView')); ?></td>
	  <td>CListView displays a list of data items in terms of a list.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
	  <td>CMenu displays a multi-level menu using nested HTML lists.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CPortlet', array('/site/doc', 'view' => 'CPortlet')); ?></td>
	  <td>CPortlet is the base class for portlet widgets.</td>
	</tr>
		<tr>
		  <td rowspan="6"><a name="zii.widgets.grid"></a>zii.widgets.grid</td>
		  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
	  <td>CButtonColumn represents a grid view column that renders one or several buttons.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CCheckBoxColumn', array('/site/doc', 'view' => 'CCheckBoxColumn')); ?></td>
	  <td>CCheckBoxColumn represents a grid view column of checkboxes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
	  <td>CDataColumn represents a grid view column that is associated with a data attribute or PHP expression.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
	  <td>CGridColumn is the base class for all grid view column classes.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
	  <td>CGridView displays a list of data items in terms of a table.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CLinkColumn', array('/site/doc', 'view' => 'CLinkColumn')); ?></td>
	  <td>CLinkColumn represents a grid view column that renders a hyperlink in each of its data cells.</td>
	</tr>
		<tr>
		  <td rowspan="16"><a name="zii.widgets.jui"></a>zii.widgets.jui</td>
		  <td><?php echo CHtml::link('CJuiAccordion', array('/site/doc', 'view' => 'CJuiAccordion')); ?></td>
	  <td>CJuiAccordion displays an accordion widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiAutoComplete', array('/site/doc', 'view' => 'CJuiAutoComplete')); ?></td>
	  <td>CJuiAutoComplete displays an autocomplete field.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiButton', array('/site/doc', 'view' => 'CJuiButton')); ?></td>
	  <td>CJuiButton displays a button widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiDatePicker', array('/site/doc', 'view' => 'CJuiDatePicker')); ?></td>
	  <td>CJuiDatePicker displays a datepicker.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiDialog', array('/site/doc', 'view' => 'CJuiDialog')); ?></td>
	  <td>CJuiDialog displays a dialog widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiDraggable', array('/site/doc', 'view' => 'CJuiDraggable')); ?></td>
	  <td>CJuiDraggable displays a draggable widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiDroppable', array('/site/doc', 'view' => 'CJuiDroppable')); ?></td>
	  <td>CJuiDroppable displays a droppable widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiInputWidget', array('/site/doc', 'view' => 'CJuiInputWidget')); ?></td>
	  <td>CJuiInputWidget is the base class for JUI widgets that can collect user input.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiProgressBar', array('/site/doc', 'view' => 'CJuiProgressBar')); ?></td>
	  <td>CJuiProgressBar displays a progress bar widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiResizable', array('/site/doc', 'view' => 'CJuiResizable')); ?></td>
	  <td>CJuiResizable displays a resizable widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiSelectable', array('/site/doc', 'view' => 'CJuiSelectable')); ?></td>
	  <td>CJuiSelectable displays an accordion widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiSlider', array('/site/doc', 'view' => 'CJuiSlider')); ?></td>
	  <td>CJuiSlider displays a slider.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiSliderInput', array('/site/doc', 'view' => 'CJuiSliderInput')); ?></td>
	  <td>CJuiSliderInput displays a slider. It can be used in forms and post its value.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiSortable', array('/site/doc', 'view' => 'CJuiSortable')); ?></td>
	  <td>CJuiSortable makes selected elements sortable by dragging with the mouse.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiTabs', array('/site/doc', 'view' => 'CJuiTabs')); ?></td>
	  <td>CJuiTabs displays a tabs widget.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
	  <td>This is the base class for all JUI widget classes.</td>
	</tr>
	</table>

<h2>Other</h2>
<table class="table table-condensed">
<colgroup>
	<col class="col-package" />
	<col class="col-class" />
	<col class="col-description" />
</colgroup>
<tr>
  <th>Package</th><th>Class</th><th>Description</th>
</tr>
	<tr>
		  <td rowspan="4"><a name=""></a></td>
		  <td><?php echo CHtml::link('EEavBehavior', array('/site/doc', 'view' => 'EEavBehavior')); ?></td>
	  <td>EEavBehavior class file.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('MustacheException', array('/site/doc', 'view' => 'MustacheException')); ?></td>
	  <td>MustacheException class.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbHtml', array('/site/doc', 'view' => 'TbHtml')); ?></td>
	  <td>Bootstrap HTML helper.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('TbJsonToggleColumn', array('/site/doc', 'view' => 'TbJsonToggleColumn')); ?></td>
	  <td>Bootstrap toggle button column widget.</td>
	</tr>
	</table>
