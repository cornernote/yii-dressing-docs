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
		  <td rowspan="3"><a name="dressing"></a>dressing</td>
		  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
	  <td>YdBase is a helper class serving common framework functionalities.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdConfig', array('/site/doc', 'view' => 'YdConfig')); ?></td>
	  <td>YdConfig implements protocols for configuring the environment before the application is loaded.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdDressing', array('/site/doc', 'view' => 'YdDressing')); ?></td>
	  <td>In configuration file main.php add this lines of code:</td>
	</tr>
		<tr>
		  <td rowspan="1"><a name="dressing.actions"></a>dressing.actions</td>
		  <td><?php echo CHtml::link('YdGeneratePropertiesAction', array('/site/doc', 'view' => 'YdGeneratePropertiesAction')); ?></td>
	  <td>Class YdGeneratePropertiesAction</td>
	</tr>
		<tr>
		  <td rowspan="6"><a name="dressing.behaviors"></a>dressing.behaviors</td>
		  <td><?php echo CHtml::link('YdAuditBehavior', array('/site/doc', 'view' => 'YdAuditBehavior')); ?></td>
	  <td>YdAuditBehavior</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdCacheBehavior', array('/site/doc', 'view' => 'YdCacheBehavior')); ?></td>
	  <td>YdCacheBehavior</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEavBaseBehavior', array('/site/doc', 'view' => 'YdEavBaseBehavior')); ?></td>
	  <td>YdEavBaseBehavior class file.</td>
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
		  <td><?php echo CHtml::link('YdEmailSpoolCommand', array('/site/doc', 'view' => 'YdEmailSpoolCommand')); ?></td>
	  <td>YdEmailSpoolCommand</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdErrorEmailCommand', array('/site/doc', 'view' => 'YdErrorEmailCommand')); ?></td>
	  <td>YdErrorEmailCommand</td>
	</tr>
		<tr>
		  <td rowspan="40"><a name="dressing.components"></a>dressing.components</td>
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
		  <td><?php echo CHtml::link('YdArray2Xml', array('/site/doc', 'view' => 'YdArray2Xml')); ?></td>
	  <td>Array2XML: A class to convert array in PHP to XML</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdAssetManager', array('/site/doc', 'view' => 'YdAssetManager')); ?></td>
	  <td>YdAssetManager</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdBPayHelper', array('/site/doc', 'view' => 'YdBPayHelper')); ?></td>
	  <td>Class YdBPayHelper</td>
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
		  <td><?php echo CHtml::link('YdCrypt', array('/site/doc', 'view' => 'YdCrypt')); ?></td>
	  <td>Class YdCrypt</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdCsv', array('/site/doc', 'view' => 'YdCsv')); ?></td>
	  <td>Class YdCsv</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdDbMigration', array('/site/doc', 'view' => 'YdDbMigration')); ?></td>
	  <td>Class YdDbMigration</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEmail', array('/site/doc', 'view' => 'YdEmail')); ?></td>
	  <td>YdEmail</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEncoding', array('/site/doc', 'view' => 'YdEncoding')); ?></td>
	  <td></td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdErrorHandler', array('/site/doc', 'view' => 'YdErrorHandler')); ?></td>
	  <td>Class YdErrorHandler</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdExcelReader', array('/site/doc', 'view' => 'YdExcelReader')); ?></td>
	  <td></td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdFatalErrorCatch', array('/site/doc', 'view' => 'YdFatalErrorCatch')); ?></td>
	  <td>Extension for catching FATAL errors</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdFileHelper', array('/site/doc', 'view' => 'YdFileHelper')); ?></td>
	  <td>Class YdFileHelper</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdFormModel', array('/site/doc', 'view' => 'YdFormModel')); ?></td>
	  <td>Class YdFormModel</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdFormatter', array('/site/doc', 'view' => 'YdFormatter')); ?></td>
	  <td>Class YdFormatter</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdGifCreator', array('/site/doc', 'view' => 'YdGifCreator')); ?></td>
	  <td>Revision History</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdHelper', array('/site/doc', 'view' => 'YdHelper')); ?></td>
	  <td></td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdMailChimp', array('/site/doc', 'view' => 'YdMailChimp')); ?></td>
	  <td>Class YdMailChimp</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdMailChimpAPI', array('/site/doc', 'view' => 'YdMailChimpAPI')); ?></td>
	  <td>Class YdMailChimpAPI</td>
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
		  <td><?php echo CHtml::link('YdProfileLogRoute', array('/site/doc', 'view' => 'YdProfileLogRoute')); ?></td>
	  <td>Class YdProfileLogRoute</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdReturnUrl', array('/site/doc', 'view' => 'YdReturnUrl')); ?></td>
	  <td>Wrapper to maintain state of a Return URL</td>
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
		  <td><?php echo CHtml::link('YdUrlReader', array('/site/doc', 'view' => 'YdUrlReader')); ?></td>
	  <td>Class YdUrlReader</td>
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
		  <td><?php echo CHtml::link('YdXml2Array', array('/site/doc', 'view' => 'YdXml2Array')); ?></td>
	  <td>XML2Array: A class to convert XML to array in PHP</td>
	</tr>
		<tr>
		  <td rowspan="13"><a name="dressing.controllers"></a>dressing.controllers</td>
		  <td><?php echo CHtml::link('YdAccountController', array('/site/doc', 'view' => 'YdAccountController')); ?></td>
	  <td>AccountController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdAttachmentController', array('/site/doc', 'view' => 'YdAttachmentController')); ?></td>
	  <td>AttachmentController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdAuditController', array('/site/doc', 'view' => 'YdAuditController')); ?></td>
	  <td>AuditController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdAuditTrailController', array('/site/doc', 'view' => 'YdAuditTrailController')); ?></td>
	  <td>AuditTrailController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdContactUsController', array('/site/doc', 'view' => 'YdContactUsController')); ?></td>
	  <td>Class ContactUsController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEmailSpoolController', array('/site/doc', 'view' => 'YdEmailSpoolController')); ?></td>
	  <td>EmailSpoolController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdEmailTemplateController', array('/site/doc', 'view' => 'YdEmailTemplateController')); ?></td>
	  <td>EmailTemplateController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdErrorController', array('/site/doc', 'view' => 'YdErrorController')); ?></td>
	  <td>ErrorController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdLookupController', array('/site/doc', 'view' => 'YdLookupController')); ?></td>
	  <td>LookupController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdRoleController', array('/site/doc', 'view' => 'YdRoleController')); ?></td>
	  <td>Class RoleController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSettingController', array('/site/doc', 'view' => 'YdSettingController')); ?></td>
	  <td>SettingController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSiteMenuController', array('/site/doc', 'view' => 'YdSiteMenuController')); ?></td>
	  <td>MenuController</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdUserController', array('/site/doc', 'view' => 'YdUserController')); ?></td>
	  <td>UserController</td>
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
		  <td><?php echo CHtml::link('YdRole', array('/site/doc', 'view' => 'YdRole')); ?></td>
	  <td>--- BEGIN AutoGenerated by tool/generateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSetting', array('/site/doc', 'view' => 'YdSetting')); ?></td>
	  <td>--- BEGIN GenerateProperties ---</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSiteMenu', array('/site/doc', 'view' => 'YdSiteMenu')); ?></td>
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
		  <td rowspan="17"><a name="dressing.widgets"></a>dressing.widgets</td>
		  <td><?php echo CHtml::link('YdActiveForm', array('/site/doc', 'view' => 'YdActiveForm')); ?></td>
	  <td>Class YdActiveForm</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdAskToSaveWork', array('/site/doc', 'view' => 'YdAskToSaveWork')); ?></td>
	  <td>This extension ask for a confirmation to user before leaving the page</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdClueTip', array('/site/doc', 'view' => 'YdClueTip')); ?></td>
	  <td>Class YdClueTip</td>
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
		  <td><?php echo CHtml::link('YdHomeMenu', array('/site/doc', 'view' => 'YdHomeMenu')); ?></td>
	  <td>Class YdHomeMenu</td>
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
		  <td><?php echo CHtml::link('YdPager', array('/site/doc', 'view' => 'YdPager')); ?></td>
	  <td>Class YdPager</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdQTip', array('/site/doc', 'view' => 'YdQTip')); ?></td>
	  <td>Class YdQTip</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdReCaptcha', array('/site/doc', 'view' => 'YdReCaptcha')); ?></td>
	  <td>ReCaptcha generates a CAPTCHA using the service provided by reCAPTCHA <a href="http://recaptcha.net/">http://recaptcha.net/</a>.</td>
	</tr>
		<tr>
		  <td><?php echo CHtml::link('YdSignatureWidget', array('/site/doc', 'view' => 'YdSignatureWidget')); ?></td>
	  <td>YdSignatureWidget</td>
	</tr>
	</table>

