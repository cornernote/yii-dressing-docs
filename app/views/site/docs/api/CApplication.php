<?php
$this->pageTitle = $this->pageHeading = 'CApplication';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CApplication';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a> | <a href="#events">Events</a></div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>Package</th>
  <td><?php echo CHtml::link('system.base', array('/site/doc', '#' => 'system.base')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>abstract class CApplication &raquo;
<?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CConsoleApplication', array('/site/doc', 'view' => 'CConsoleApplication')); ?>, <?php echo CHtml::link('CWebApplication', array('/site/doc', 'view' => 'CWebApplication')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php">yii/base/CApplication.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CApplication is the base class for all application classes.
<br/><br/>
An application serves as the global context that the user request
is being processed. It manages a set of application components that
provide specific functionalities to the whole application.
<br/><br/>
The core application components provided by CApplication are the following:
<ul>
<li><?php echo CHtml::link('errorHandler', array('/site/doc', 'view' => 'CApplication', '#' => 'getErrorHandler')); ?>: handles PHP errors and
  uncaught exceptions. This application component is dynamically loaded when needed.</li>
<li><?php echo CHtml::link('securityManager', array('/site/doc', 'view' => 'CApplication', '#' => 'getSecurityManager')); ?>: provides security-related
  services, such as hashing, encryption. This application component is dynamically
  loaded when needed.</li>
<li><?php echo CHtml::link('statePersister', array('/site/doc', 'view' => 'CApplication', '#' => 'getStatePersister')); ?>: provides global state
  persistence method. This application component is dynamically loaded when needed.</li>
<li><?php echo CHtml::link('cache', array('/site/doc', 'view' => 'CApplication', '#' => 'getCache')); ?>: provides caching feature. This application component is
  disabled by default.</li>
<li><?php echo CHtml::link('messages', array('/site/doc', 'view' => 'CApplication', '#' => 'getMessages')); ?>: provides the message source for translating
  application messages. This application component is dynamically loaded when needed.</li>
<li><?php echo CHtml::link('coreMessages', array('/site/doc', 'view' => 'CApplication', '#' => 'getCoreMessages')); ?>: provides the message source for translating
  Yii framework messages. This application component is dynamically loaded when needed.</li>
<li><?php echo CHtml::link('urlManager', array('/site/doc', 'view' => 'CApplication', '#' => 'getUrlManager')); ?>: provides URL construction as well as parsing functionality.
  This application component is dynamically loaded when needed.</li>
<li><?php echo CHtml::link('request', array('/site/doc', 'view' => 'CApplication', '#' => 'getRequest')); ?>: represents the current HTTP request by encapsulating
  the $_SERVER variable and managing cookies sent from and sent to the user.
  This application component is dynamically loaded when needed.</li>
<li>format: provides a set of commonly used data formatting methods.
  This application component is dynamically loaded when needed.</li>
</ul>
<br/><br/>
CApplication will undergo the following lifecycles when processing a user request:
<ol>
<li>load application configuration;</li>
<li>set up class autoloader and error handling;</li>
<li>load static application components;</li>
<li><?php echo CHtml::link('onBeginRequest', array('/site/doc', 'view' => 'CApplication', '#' => 'onBeginRequest')); ?>: preprocess the user request;</li>
<li><?php echo CHtml::link('processRequest', array('/site/doc', 'view' => 'CApplication', '#' => 'processRequest')); ?>: process the user request;</li>
<li><?php echo CHtml::link('onEndRequest', array('/site/doc', 'view' => 'CApplication', '#' => 'onEndRequest')); ?>: postprocess the user request;</li>
</ol>
<br/><br/>
Starting from lifecycle 3, if a PHP error or an uncaught exception occurs,
the application will switch to its error handling logic and jump to step 6 afterwards.</div>
<a name="properties"></a>

<div class="summary docProperty">
<h2>Public Properties</h2>

<p><a href="#" class="toggle">Hide inherited properties</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-property" />
	<col class="col-type" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Property</th><th>Type</th><th>Description</th><th>Defined By</th>
</tr>
<tr id="basePath">
  <td><?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CApplication', '#' => 'basePath-detail')); ?></td>
  <td>string</td>
  <td>Returns the root path of the application.</td>
  <td>CApplication</td>
</tr>
<tr id="baseUrl">
  <td><?php echo CHtml::link('baseUrl', array('/site/doc', 'view' => 'CApplication', '#' => 'baseUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the relative URL for the application.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CModule', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="cache">
  <td><?php echo CHtml::link('cache', array('/site/doc', 'view' => 'CApplication', '#' => 'cache-detail')); ?></td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
  <td>Returns the cache component.</td>
  <td>CApplication</td>
</tr>
<tr id="charset">
  <td><?php echo CHtml::link('charset', array('/site/doc', 'view' => 'CApplication', '#' => 'charset-detail')); ?></td>
  <td>string</td>
  <td>the charset currently used for the application.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="components">
  <td><?php echo CHtml::link('components', array('/site/doc', 'view' => 'CModule', '#' => 'components-detail')); ?></td>
  <td>array</td>
  <td>Returns the application components.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CApplication', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>the currently active controller.</td>
  <td>CApplication</td>
</tr>
<tr id="coreMessages">
  <td><?php echo CHtml::link('coreMessages', array('/site/doc', 'view' => 'CApplication', '#' => 'coreMessages-detail')); ?></td>
  <td><?php echo CHtml::link('CPhpMessageSource', array('/site/doc', 'view' => 'CPhpMessageSource')); ?></td>
  <td>Returns the core message translations component.</td>
  <td>CApplication</td>
</tr>
<tr id="dateFormatter">
  <td><?php echo CHtml::link('dateFormatter', array('/site/doc', 'view' => 'CApplication', '#' => 'dateFormatter-detail')); ?></td>
  <td><?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?></td>
  <td>Returns the locale-dependent date formatter.</td>
  <td>CApplication</td>
</tr>
<tr id="db">
  <td><?php echo CHtml::link('db', array('/site/doc', 'view' => 'CApplication', '#' => 'db-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>Returns the database connection component.</td>
  <td>CApplication</td>
</tr>
<tr id="errorHandler">
  <td><?php echo CHtml::link('errorHandler', array('/site/doc', 'view' => 'CApplication', '#' => 'errorHandler-detail')); ?></td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
  <td>Returns the error handler component.</td>
  <td>CApplication</td>
</tr>
<tr id="extensionPath">
  <td><?php echo CHtml::link('extensionPath', array('/site/doc', 'view' => 'CApplication', '#' => 'extensionPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the root directory that holds all third-party extensions.</td>
  <td>CApplication</td>
</tr>
<tr id="homeUrl">
  <td><?php echo CHtml::link('homeUrl', array('/site/doc', 'view' => 'CApplication', '#' => 'homeUrl-detail')); ?></td>
  <td>string</td>
  <td>the homepage URL</td>
  <td>CApplication</td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CApplication', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the unique identifier for the application.</td>
  <td>CApplication</td>
</tr>
<tr id="language">
  <td><?php echo CHtml::link('language', array('/site/doc', 'view' => 'CApplication', '#' => 'language-detail')); ?></td>
  <td>string</td>
  <td>Returns the language that the user is using and the application should be targeted to.</td>
  <td>CApplication</td>
</tr>
<tr id="locale">
  <td><?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CApplication', '#' => 'locale-detail')); ?></td>
  <td><?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?></td>
  <td>Returns the locale instance.</td>
  <td>CApplication</td>
</tr>
<tr id="localeDataPath">
  <td><?php echo CHtml::link('localeDataPath', array('/site/doc', 'view' => 'CApplication', '#' => 'localeDataPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory that contains the locale data.</td>
  <td>CApplication</td>
</tr>
<tr id="messages">
  <td><?php echo CHtml::link('messages', array('/site/doc', 'view' => 'CApplication', '#' => 'messages-detail')); ?></td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
  <td>Returns the application message translations component.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="modulePath">
  <td><?php echo CHtml::link('modulePath', array('/site/doc', 'view' => 'CModule', '#' => 'modulePath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory that contains the application modules.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="modules">
  <td><?php echo CHtml::link('modules', array('/site/doc', 'view' => 'CModule', '#' => 'modules-detail')); ?></td>
  <td>array</td>
  <td>Returns the configuration of the currently installed modules.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CApplication', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the application name.</td>
  <td>CApplication</td>
</tr>
<tr id="numberFormatter">
  <td><?php echo CHtml::link('numberFormatter', array('/site/doc', 'view' => 'CApplication', '#' => 'numberFormatter-detail')); ?></td>
  <td><?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?></td>
  <td>the locale-dependent number formatter.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'CModule', '#' => 'params-detail')); ?></td>
  <td><?php echo CHtml::link('CAttributeCollection', array('/site/doc', 'view' => 'CAttributeCollection')); ?></td>
  <td>Returns user-defined parameters.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="parentModule">
  <td><?php echo CHtml::link('parentModule', array('/site/doc', 'view' => 'CModule', '#' => 'parentModule-detail')); ?></td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
  <td>Returns the parent module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="preload">
  <td><?php echo CHtml::link('preload', array('/site/doc', 'view' => 'CModule', '#' => 'preload-detail')); ?></td>
  <td>array</td>
  <td>the IDs of the application components that should be preloaded.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="request">
  <td><?php echo CHtml::link('request', array('/site/doc', 'view' => 'CApplication', '#' => 'request-detail')); ?></td>
  <td><?php echo CHtml::link('CHttpRequest', array('/site/doc', 'view' => 'CHttpRequest')); ?></td>
  <td>Returns the request component.</td>
  <td>CApplication</td>
</tr>
<tr id="runtimePath">
  <td><?php echo CHtml::link('runtimePath', array('/site/doc', 'view' => 'CApplication', '#' => 'runtimePath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory that stores runtime files.</td>
  <td>CApplication</td>
</tr>
<tr id="securityManager">
  <td><?php echo CHtml::link('securityManager', array('/site/doc', 'view' => 'CApplication', '#' => 'securityManager-detail')); ?></td>
  <td><?php echo CHtml::link('CSecurityManager', array('/site/doc', 'view' => 'CSecurityManager')); ?></td>
  <td>Returns the security manager component.</td>
  <td>CApplication</td>
</tr>
<tr id="sourceLanguage">
  <td><?php echo CHtml::link('sourceLanguage', array('/site/doc', 'view' => 'CApplication', '#' => 'sourceLanguage-detail')); ?></td>
  <td>string</td>
  <td>the language that the application is written in.</td>
  <td>CApplication</td>
</tr>
<tr id="statePersister">
  <td><?php echo CHtml::link('statePersister', array('/site/doc', 'view' => 'CApplication', '#' => 'statePersister-detail')); ?></td>
  <td><?php echo CHtml::link('CStatePersister', array('/site/doc', 'view' => 'CStatePersister')); ?></td>
  <td>Returns the state persister component.</td>
  <td>CApplication</td>
</tr>
<tr id="timeZone">
  <td><?php echo CHtml::link('timeZone', array('/site/doc', 'view' => 'CApplication', '#' => 'timeZone-detail')); ?></td>
  <td>string</td>
  <td>Returns the time zone used by this application.</td>
  <td>CApplication</td>
</tr>
<tr id="urlManager">
  <td><?php echo CHtml::link('urlManager', array('/site/doc', 'view' => 'CApplication', '#' => 'urlManager-detail')); ?></td>
  <td><?php echo CHtml::link('CUrlManager', array('/site/doc', 'view' => 'CUrlManager')); ?></td>
  <td>Returns the URL manager component.</td>
  <td>CApplication</td>
</tr>
</table>
</div>
<a name="methods"></a>

<div class="summary docMethod">
<h2>Public Methods</h2>

<p><a href="#" class="toggle">Hide inherited methods</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-method" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Method</th><th>Description</th><th>Defined By</th>
</tr>
<tr class="inherited" id="__call">
  <td><?php echo CHtml::link('__call()', array('/site/doc', 'view' => 'CComponent', '#' => '__call-detail')); ?></td>
  <td>Calls the named method which is not a class method.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CApplication', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="__get">
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CModule', '#' => '__get-detail')); ?></td>
  <td>Getter magic method.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CModule', '#' => '__isset-detail')); ?></td>
  <td>Checks if a property value is null.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="__set">
  <td><?php echo CHtml::link('__set()', array('/site/doc', 'view' => 'CComponent', '#' => '__set-detail')); ?></td>
  <td>Sets value of a component property.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__unset">
  <td><?php echo CHtml::link('__unset()', array('/site/doc', 'view' => 'CComponent', '#' => '__unset-detail')); ?></td>
  <td>Sets a component property to be null.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="asa">
  <td><?php echo CHtml::link('asa()', array('/site/doc', 'view' => 'CComponent', '#' => 'asa-detail')); ?></td>
  <td>Returns the named behavior object.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attachBehavior">
  <td><?php echo CHtml::link('attachBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'attachBehavior-detail')); ?></td>
  <td>Attaches a behavior to this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attachBehaviors">
  <td><?php echo CHtml::link('attachBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'attachBehaviors-detail')); ?></td>
  <td>Attaches a list of behaviors to the component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attachEventHandler">
  <td><?php echo CHtml::link('attachEventHandler()', array('/site/doc', 'view' => 'CComponent', '#' => 'attachEventHandler-detail')); ?></td>
  <td>Attaches an event handler to an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="canGetProperty">
  <td><?php echo CHtml::link('canGetProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'canGetProperty-detail')); ?></td>
  <td>Determines whether a property can be read.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="canSetProperty">
  <td><?php echo CHtml::link('canSetProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'canSetProperty-detail')); ?></td>
  <td>Determines whether a property can be set.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="clearGlobalState">
  <td><?php echo CHtml::link('clearGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'clearGlobalState-detail')); ?></td>
  <td>Clears a global value.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="configure">
  <td><?php echo CHtml::link('configure()', array('/site/doc', 'view' => 'CModule', '#' => 'configure-detail')); ?></td>
  <td>Configures the module with the specified configuration.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="createAbsoluteUrl">
  <td><?php echo CHtml::link('createAbsoluteUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'createAbsoluteUrl-detail')); ?></td>
  <td>Creates an absolute URL based on the given controller and action information.</td>
  <td>CApplication</td>
</tr>
<tr id="createUrl">
  <td><?php echo CHtml::link('createUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'createUrl-detail')); ?></td>
  <td>Creates a relative URL based on the given controller and action information.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="detachBehavior">
  <td><?php echo CHtml::link('detachBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'detachBehavior-detail')); ?></td>
  <td>Detaches a behavior from the component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="detachBehaviors">
  <td><?php echo CHtml::link('detachBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'detachBehaviors-detail')); ?></td>
  <td>Detaches all behaviors from the component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="detachEventHandler">
  <td><?php echo CHtml::link('detachEventHandler()', array('/site/doc', 'view' => 'CComponent', '#' => 'detachEventHandler-detail')); ?></td>
  <td>Detaches an existing event handler.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="disableBehavior">
  <td><?php echo CHtml::link('disableBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'disableBehavior-detail')); ?></td>
  <td>Disables an attached behavior.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="disableBehaviors">
  <td><?php echo CHtml::link('disableBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'disableBehaviors-detail')); ?></td>
  <td>Disables all behaviors attached to this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="displayError">
  <td><?php echo CHtml::link('displayError()', array('/site/doc', 'view' => 'CApplication', '#' => 'displayError-detail')); ?></td>
  <td>Displays the captured PHP error.</td>
  <td>CApplication</td>
</tr>
<tr id="displayException">
  <td><?php echo CHtml::link('displayException()', array('/site/doc', 'view' => 'CApplication', '#' => 'displayException-detail')); ?></td>
  <td>Displays the uncaught PHP exception.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="enableBehavior">
  <td><?php echo CHtml::link('enableBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'enableBehavior-detail')); ?></td>
  <td>Enables an attached behavior.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="enableBehaviors">
  <td><?php echo CHtml::link('enableBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'enableBehaviors-detail')); ?></td>
  <td>Enables all behaviors attached to this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="end">
  <td><?php echo CHtml::link('end()', array('/site/doc', 'view' => 'CApplication', '#' => 'end-detail')); ?></td>
  <td>Terminates the application.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="findLocalizedFile">
  <td><?php echo CHtml::link('findLocalizedFile()', array('/site/doc', 'view' => 'CApplication', '#' => 'findLocalizedFile-detail')); ?></td>
  <td>Returns the localized version of a specified file.</td>
  <td>CApplication</td>
</tr>
<tr id="getBasePath">
  <td><?php echo CHtml::link('getBasePath()', array('/site/doc', 'view' => 'CApplication', '#' => 'getBasePath-detail')); ?></td>
  <td>Returns the root path of the application.</td>
  <td>CApplication</td>
</tr>
<tr id="getBaseUrl">
  <td><?php echo CHtml::link('getBaseUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'getBaseUrl-detail')); ?></td>
  <td>Returns the relative URL for the application.</td>
  <td>CApplication</td>
</tr>
<tr id="getCache">
  <td><?php echo CHtml::link('getCache()', array('/site/doc', 'view' => 'CApplication', '#' => 'getCache-detail')); ?></td>
  <td>Returns the cache component.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="getComponent">
  <td><?php echo CHtml::link('getComponent()', array('/site/doc', 'view' => 'CModule', '#' => 'getComponent-detail')); ?></td>
  <td>Retrieves the named application component.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="getComponents">
  <td><?php echo CHtml::link('getComponents()', array('/site/doc', 'view' => 'CModule', '#' => 'getComponents-detail')); ?></td>
  <td>Returns the application components.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CApplication', '#' => 'getController-detail')); ?></td>
  <td>Returns the currently active controller. Null is returned in this base class.</td>
  <td>CApplication</td>
</tr>
<tr id="getCoreMessages">
  <td><?php echo CHtml::link('getCoreMessages()', array('/site/doc', 'view' => 'CApplication', '#' => 'getCoreMessages-detail')); ?></td>
  <td>Returns the core message translations component.</td>
  <td>CApplication</td>
</tr>
<tr id="getDateFormatter">
  <td><?php echo CHtml::link('getDateFormatter()', array('/site/doc', 'view' => 'CApplication', '#' => 'getDateFormatter-detail')); ?></td>
  <td>Returns the locale-dependent date formatter.</td>
  <td>CApplication</td>
</tr>
<tr id="getDb">
  <td><?php echo CHtml::link('getDb()', array('/site/doc', 'view' => 'CApplication', '#' => 'getDb-detail')); ?></td>
  <td>Returns the database connection component.</td>
  <td>CApplication</td>
</tr>
<tr id="getErrorHandler">
  <td><?php echo CHtml::link('getErrorHandler()', array('/site/doc', 'view' => 'CApplication', '#' => 'getErrorHandler-detail')); ?></td>
  <td>Returns the error handler component.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getExtensionPath">
  <td><?php echo CHtml::link('getExtensionPath()', array('/site/doc', 'view' => 'CApplication', '#' => 'getExtensionPath-detail')); ?></td>
  <td>Returns the root directory that holds all third-party extensions.</td>
  <td>CApplication</td>
</tr>
<tr id="getGlobalState">
  <td><?php echo CHtml::link('getGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'getGlobalState-detail')); ?></td>
  <td>Returns a global value.</td>
  <td>CApplication</td>
</tr>
<tr id="getHomeUrl">
  <td><?php echo CHtml::link('getHomeUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'getHomeUrl-detail')); ?></td>
  <td>Returns the homepage URL</td>
  <td>CApplication</td>
</tr>
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CApplication', '#' => 'getId-detail')); ?></td>
  <td>Returns the unique identifier for the application.</td>
  <td>CApplication</td>
</tr>
<tr id="getLanguage">
  <td><?php echo CHtml::link('getLanguage()', array('/site/doc', 'view' => 'CApplication', '#' => 'getLanguage-detail')); ?></td>
  <td>Returns the language that the user is using and the application should be targeted to.</td>
  <td>CApplication</td>
</tr>
<tr id="getLocale">
  <td><?php echo CHtml::link('getLocale()', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocale-detail')); ?></td>
  <td>Returns the locale instance.</td>
  <td>CApplication</td>
</tr>
<tr id="getLocaleDataPath">
  <td><?php echo CHtml::link('getLocaleDataPath()', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocaleDataPath-detail')); ?></td>
  <td>Returns the directory that contains the locale data.</td>
  <td>CApplication</td>
</tr>
<tr id="getMessages">
  <td><?php echo CHtml::link('getMessages()', array('/site/doc', 'view' => 'CApplication', '#' => 'getMessages-detail')); ?></td>
  <td>Returns the application message translations component.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="getModule">
  <td><?php echo CHtml::link('getModule()', array('/site/doc', 'view' => 'CModule', '#' => 'getModule-detail')); ?></td>
  <td>Retrieves the named application module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="getModulePath">
  <td><?php echo CHtml::link('getModulePath()', array('/site/doc', 'view' => 'CModule', '#' => 'getModulePath-detail')); ?></td>
  <td>Returns the directory that contains the application modules.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="getModules">
  <td><?php echo CHtml::link('getModules()', array('/site/doc', 'view' => 'CModule', '#' => 'getModules-detail')); ?></td>
  <td>Returns the configuration of the currently installed modules.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="getNumberFormatter">
  <td><?php echo CHtml::link('getNumberFormatter()', array('/site/doc', 'view' => 'CApplication', '#' => 'getNumberFormatter-detail')); ?></td>
  <td>Returns the locale-dependent number formatter.
The current <?php echo CHtml::link('application locale', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocale')); ?> will be used.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="getParams">
  <td><?php echo CHtml::link('getParams()', array('/site/doc', 'view' => 'CModule', '#' => 'getParams-detail')); ?></td>
  <td>Returns user-defined parameters.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="getParentModule">
  <td><?php echo CHtml::link('getParentModule()', array('/site/doc', 'view' => 'CModule', '#' => 'getParentModule-detail')); ?></td>
  <td>Returns the parent module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="getRequest">
  <td><?php echo CHtml::link('getRequest()', array('/site/doc', 'view' => 'CApplication', '#' => 'getRequest-detail')); ?></td>
  <td>Returns the request component.</td>
  <td>CApplication</td>
</tr>
<tr id="getRuntimePath">
  <td><?php echo CHtml::link('getRuntimePath()', array('/site/doc', 'view' => 'CApplication', '#' => 'getRuntimePath-detail')); ?></td>
  <td>Returns the directory that stores runtime files.</td>
  <td>CApplication</td>
</tr>
<tr id="getSecurityManager">
  <td><?php echo CHtml::link('getSecurityManager()', array('/site/doc', 'view' => 'CApplication', '#' => 'getSecurityManager-detail')); ?></td>
  <td>Returns the security manager component.</td>
  <td>CApplication</td>
</tr>
<tr id="getStatePersister">
  <td><?php echo CHtml::link('getStatePersister()', array('/site/doc', 'view' => 'CApplication', '#' => 'getStatePersister-detail')); ?></td>
  <td>Returns the state persister component.</td>
  <td>CApplication</td>
</tr>
<tr id="getTimeZone">
  <td><?php echo CHtml::link('getTimeZone()', array('/site/doc', 'view' => 'CApplication', '#' => 'getTimeZone-detail')); ?></td>
  <td>Returns the time zone used by this application.</td>
  <td>CApplication</td>
</tr>
<tr id="getUrlManager">
  <td><?php echo CHtml::link('getUrlManager()', array('/site/doc', 'view' => 'CApplication', '#' => 'getUrlManager-detail')); ?></td>
  <td>Returns the URL manager component.</td>
  <td>CApplication</td>
</tr>
<tr id="handleError">
  <td><?php echo CHtml::link('handleError()', array('/site/doc', 'view' => 'CApplication', '#' => 'handleError-detail')); ?></td>
  <td>Handles PHP execution errors such as warnings, notices.</td>
  <td>CApplication</td>
</tr>
<tr id="handleException">
  <td><?php echo CHtml::link('handleException()', array('/site/doc', 'view' => 'CApplication', '#' => 'handleException-detail')); ?></td>
  <td>Handles uncaught PHP exceptions.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="hasComponent">
  <td><?php echo CHtml::link('hasComponent()', array('/site/doc', 'view' => 'CModule', '#' => 'hasComponent-detail')); ?></td>
  <td>Checks whether the named component exists.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="hasEvent">
  <td><?php echo CHtml::link('hasEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasEvent-detail')); ?></td>
  <td>Determines whether an event is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="hasEventHandler">
  <td><?php echo CHtml::link('hasEventHandler()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasEventHandler-detail')); ?></td>
  <td>Checks whether the named event has attached handlers.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="hasModule">
  <td><?php echo CHtml::link('hasModule()', array('/site/doc', 'view' => 'CModule', '#' => 'hasModule-detail')); ?></td>
  <td>Returns a value indicating whether the specified module is installed.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="hasProperty">
  <td><?php echo CHtml::link('hasProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasProperty-detail')); ?></td>
  <td>Determines whether a property is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="loadGlobalState">
  <td><?php echo CHtml::link('loadGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'loadGlobalState-detail')); ?></td>
  <td>Loads the global state data from persistent storage.</td>
  <td>CApplication</td>
</tr>
<tr id="onBeginRequest">
  <td><?php echo CHtml::link('onBeginRequest()', array('/site/doc', 'view' => 'CApplication', '#' => 'onBeginRequest-detail')); ?></td>
  <td>Raised right BEFORE the application processes the request.</td>
  <td>CApplication</td>
</tr>
<tr id="onEndRequest">
  <td><?php echo CHtml::link('onEndRequest()', array('/site/doc', 'view' => 'CApplication', '#' => 'onEndRequest-detail')); ?></td>
  <td>Raised right AFTER the application processes the request.</td>
  <td>CApplication</td>
</tr>
<tr id="onError">
  <td><?php echo CHtml::link('onError()', array('/site/doc', 'view' => 'CApplication', '#' => 'onError-detail')); ?></td>
  <td>Raised when a PHP execution error occurs.</td>
  <td>CApplication</td>
</tr>
<tr id="onException">
  <td><?php echo CHtml::link('onException()', array('/site/doc', 'view' => 'CApplication', '#' => 'onException-detail')); ?></td>
  <td>Raised when an uncaught PHP exception occurs.</td>
  <td>CApplication</td>
</tr>
<tr id="processRequest">
  <td><?php echo CHtml::link('processRequest()', array('/site/doc', 'view' => 'CApplication', '#' => 'processRequest-detail')); ?></td>
  <td>Processes the request.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CApplication', '#' => 'run-detail')); ?></td>
  <td>Runs the application.</td>
  <td>CApplication</td>
</tr>
<tr id="saveGlobalState">
  <td><?php echo CHtml::link('saveGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'saveGlobalState-detail')); ?></td>
  <td>Saves the global state data into persistent storage.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="setAliases">
  <td><?php echo CHtml::link('setAliases()', array('/site/doc', 'view' => 'CModule', '#' => 'setAliases-detail')); ?></td>
  <td>Defines the root aliases.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="setBasePath">
  <td><?php echo CHtml::link('setBasePath()', array('/site/doc', 'view' => 'CApplication', '#' => 'setBasePath-detail')); ?></td>
  <td>Sets the root directory of the application.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="setComponent">
  <td><?php echo CHtml::link('setComponent()', array('/site/doc', 'view' => 'CModule', '#' => 'setComponent-detail')); ?></td>
  <td>Puts a component under the management of the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="setComponents">
  <td><?php echo CHtml::link('setComponents()', array('/site/doc', 'view' => 'CModule', '#' => 'setComponents-detail')); ?></td>
  <td>Sets the application components.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="setExtensionPath">
  <td><?php echo CHtml::link('setExtensionPath()', array('/site/doc', 'view' => 'CApplication', '#' => 'setExtensionPath-detail')); ?></td>
  <td>Sets the root directory that holds all third-party extensions.</td>
  <td>CApplication</td>
</tr>
<tr id="setGlobalState">
  <td><?php echo CHtml::link('setGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'setGlobalState-detail')); ?></td>
  <td>Sets a global value.</td>
  <td>CApplication</td>
</tr>
<tr id="setHomeUrl">
  <td><?php echo CHtml::link('setHomeUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'setHomeUrl-detail')); ?></td>
  <td>Sets the homepage URL</td>
  <td>CApplication</td>
</tr>
<tr id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CApplication', '#' => 'setId-detail')); ?></td>
  <td>Sets the unique identifier for the application.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="setImport">
  <td><?php echo CHtml::link('setImport()', array('/site/doc', 'view' => 'CModule', '#' => 'setImport-detail')); ?></td>
  <td>Sets the aliases that are used in the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="setLanguage">
  <td><?php echo CHtml::link('setLanguage()', array('/site/doc', 'view' => 'CApplication', '#' => 'setLanguage-detail')); ?></td>
  <td>Specifies which language the application is targeted to.</td>
  <td>CApplication</td>
</tr>
<tr id="setLocaleDataPath">
  <td><?php echo CHtml::link('setLocaleDataPath()', array('/site/doc', 'view' => 'CApplication', '#' => 'setLocaleDataPath-detail')); ?></td>
  <td>Sets the directory that contains the locale data.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="setModulePath">
  <td><?php echo CHtml::link('setModulePath()', array('/site/doc', 'view' => 'CModule', '#' => 'setModulePath-detail')); ?></td>
  <td>Sets the directory that contains the application modules.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="setModules">
  <td><?php echo CHtml::link('setModules()', array('/site/doc', 'view' => 'CModule', '#' => 'setModules-detail')); ?></td>
  <td>Configures the sub-modules of this module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="setParams">
  <td><?php echo CHtml::link('setParams()', array('/site/doc', 'view' => 'CModule', '#' => 'setParams-detail')); ?></td>
  <td>Sets user-defined parameters.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="setRuntimePath">
  <td><?php echo CHtml::link('setRuntimePath()', array('/site/doc', 'view' => 'CApplication', '#' => 'setRuntimePath-detail')); ?></td>
  <td>Sets the directory that stores runtime files.</td>
  <td>CApplication</td>
</tr>
<tr id="setTimeZone">
  <td><?php echo CHtml::link('setTimeZone()', array('/site/doc', 'view' => 'CApplication', '#' => 'setTimeZone-detail')); ?></td>
  <td>Sets the time zone used by this application.</td>
  <td>CApplication</td>
</tr>
</table>
</div>
<div class="summary docMethod">
<h2>Protected Methods</h2>

<p><a href="#" class="toggle">Hide inherited methods</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-method" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Method</th><th>Description</th><th>Defined By</th>
</tr>
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CModule', '#' => 'init-detail')); ?></td>
  <td>Initializes the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="initSystemHandlers">
  <td><?php echo CHtml::link('initSystemHandlers()', array('/site/doc', 'view' => 'CApplication', '#' => 'initSystemHandlers-detail')); ?></td>
  <td>Initializes the class autoloader and error handlers.</td>
  <td>CApplication</td>
</tr>
<tr class="inherited" id="preinit">
  <td><?php echo CHtml::link('preinit()', array('/site/doc', 'view' => 'CModule', '#' => 'preinit-detail')); ?></td>
  <td>Preinitializes the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="preloadComponents">
  <td><?php echo CHtml::link('preloadComponents()', array('/site/doc', 'view' => 'CModule', '#' => 'preloadComponents-detail')); ?></td>
  <td>Loads static application components.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="registerCoreComponents">
  <td><?php echo CHtml::link('registerCoreComponents()', array('/site/doc', 'view' => 'CApplication', '#' => 'registerCoreComponents-detail')); ?></td>
  <td>Registers the core application components.</td>
  <td>CApplication</td>
</tr>
</table>
</div>
<a name="events"></a>

<div class="summary docEvent">
<h2>Events</h2>

<p><a href="#" class="toggle">Hide inherited events</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-event" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Event</th><th>Description</th><th>Defined By</th>
</tr>
<tr id="onBeginRequest">
  <td><?php echo CHtml::link('onBeginRequest', array('/site/doc', 'view' => 'CApplication', '#' => 'onBeginRequest-detail')); ?></td>
  <td>Raised right BEFORE the application processes the request.</td>
  <td>CApplication</td>
</tr>
<tr id="onEndRequest">
  <td><?php echo CHtml::link('onEndRequest', array('/site/doc', 'view' => 'CApplication', '#' => 'onEndRequest-detail')); ?></td>
  <td>Raised right AFTER the application processes the request.</td>
  <td>CApplication</td>
</tr>
<tr id="onException">
  <td><?php echo CHtml::link('onException', array('/site/doc', 'view' => 'CApplication', '#' => 'onException-detail')); ?></td>
  <td>Raised when an uncaught PHP exception occurs.</td>
  <td>CApplication</td>
</tr>
<tr id="onError">
  <td><?php echo CHtml::link('onError', array('/site/doc', 'view' => 'CApplication', '#' => 'onError-detail')); ?></td>
  <td>Raised when a PHP execution error occurs.</td>
  <td>CApplication</td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="basePath-detail">
basePath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getBasePath</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getBasePath')); ?>()<br/>public void <?php echo CHtml::link('<b>setBasePath</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'setBasePath')); ?>(string $path)</div>

<p>Returns the root path of the application.</p>


<div class="detailHeader" id="baseUrl-detail">
baseUrl<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getBaseUrl</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getBaseUrl')); ?>(boolean $absolute=false)</div>

<p>Returns the relative URL for the application.
This is a shortcut method to <?php echo CHtml::link('CHttpRequest::getBaseUrl()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getBaseUrl')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CHttpRequest::getBaseUrl()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getBaseUrl')); ?></li>
</ul>
</div>

<div class="detailHeader" id="cache-detail">
cache<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?> <?php echo CHtml::link('<b>getCache</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getCache')); ?>()</div>

<p>Returns the cache component.</p>


<div class="detailHeader" id="charset-detail">
charset<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$charset</b>;</div>

<p>the charset currently used for the application. Defaults to 'UTF-8'.</p>


<div class="detailHeader" id="controller-detail">
controller<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.8)
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> <?php echo CHtml::link('<b>getController</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getController')); ?>()</div>

<p>the currently active controller. Null is returned in this base class.</p>


<div class="detailHeader" id="coreMessages-detail">
coreMessages<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CPhpMessageSource', array('/site/doc', 'view' => 'CPhpMessageSource')); ?> <?php echo CHtml::link('<b>getCoreMessages</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getCoreMessages')); ?>()</div>

<p>Returns the core message translations component.</p>


<div class="detailHeader" id="dateFormatter-detail">
dateFormatter<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?> <?php echo CHtml::link('<b>getDateFormatter</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getDateFormatter')); ?>()</div>

<p>Returns the locale-dependent date formatter.</p>


<div class="detailHeader" id="db-detail">
db<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <?php echo CHtml::link('<b>getDb</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getDb')); ?>()</div>

<p>Returns the database connection component.</p>


<div class="detailHeader" id="errorHandler-detail">
errorHandler<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?> <?php echo CHtml::link('<b>getErrorHandler</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getErrorHandler')); ?>()</div>

<p>Returns the error handler component.</p>


<div class="detailHeader" id="extensionPath-detail">
extensionPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getExtensionPath</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getExtensionPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setExtensionPath</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'setExtensionPath')); ?>(string $path)</div>

<p>Returns the root directory that holds all third-party extensions.</p>


<div class="detailHeader" id="homeUrl-detail">
homeUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getHomeUrl</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getHomeUrl')); ?>()<br/>public void <?php echo CHtml::link('<b>setHomeUrl</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'setHomeUrl')); ?>(string $value)</div>

<p>the homepage URL</p>


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getId</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getId')); ?>()<br/>public void <?php echo CHtml::link('<b>setId</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'setId')); ?>(string $id)</div>

<p>Returns the unique identifier for the application.</p>


<div class="detailHeader" id="language-detail">
language<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLanguage</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getLanguage')); ?>()<br/>public void <?php echo CHtml::link('<b>setLanguage</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'setLanguage')); ?>(string $language)</div>

<p>Returns the language that the user is using and the application should be targeted to.</p>


<div class="detailHeader" id="locale-detail">
locale<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?> <?php echo CHtml::link('<b>getLocale</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocale')); ?>(string $localeID=NULL)</div>

<p>Returns the locale instance.</p>


<div class="detailHeader" id="localeDataPath-detail">
localeDataPath<span class="detailHeaderTag">
property
 (available since v1.1.0)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLocaleDataPath</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocaleDataPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setLocaleDataPath</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'setLocaleDataPath')); ?>(string $value)</div>

<p>Returns the directory that contains the locale data.</p>


<div class="detailHeader" id="messages-detail">
messages<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?> <?php echo CHtml::link('<b>getMessages</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getMessages')); ?>()</div>

<p>Returns the application message translations component.</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$name</b>;</div>

<p>the application name. Defaults to 'My Application'.</p>


<div class="detailHeader" id="numberFormatter-detail">
numberFormatter<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?> <?php echo CHtml::link('<b>getNumberFormatter</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getNumberFormatter')); ?>()</div>

<p>the locale-dependent number formatter.
The current <?php echo CHtml::link('application locale', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocale')); ?> will be used.</p>


<div class="detailHeader" id="request-detail">
request<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CHttpRequest', array('/site/doc', 'view' => 'CHttpRequest')); ?> <?php echo CHtml::link('<b>getRequest</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getRequest')); ?>()</div>

<p>Returns the request component.</p>


<div class="detailHeader" id="runtimePath-detail">
runtimePath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getRuntimePath</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getRuntimePath')); ?>()<br/>public void <?php echo CHtml::link('<b>setRuntimePath</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'setRuntimePath')); ?>(string $path)</div>

<p>Returns the directory that stores runtime files.</p>


<div class="detailHeader" id="securityManager-detail">
securityManager<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CSecurityManager', array('/site/doc', 'view' => 'CSecurityManager')); ?> <?php echo CHtml::link('<b>getSecurityManager</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getSecurityManager')); ?>()</div>

<p>Returns the security manager component.</p>


<div class="detailHeader" id="sourceLanguage-detail">
sourceLanguage<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$sourceLanguage</b>;</div>

<p>the language that the application is written in. This mainly refers to
the language that the messages and view files are in. Defaults to 'en_us' (US English).</p>


<div class="detailHeader" id="statePersister-detail">
statePersister<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CStatePersister', array('/site/doc', 'view' => 'CStatePersister')); ?> <?php echo CHtml::link('<b>getStatePersister</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getStatePersister')); ?>()</div>

<p>Returns the state persister component.</p>


<div class="detailHeader" id="timeZone-detail">
timeZone<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getTimeZone</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getTimeZone')); ?>()<br/>public void <?php echo CHtml::link('<b>setTimeZone</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'setTimeZone')); ?>(string $value)</div>

<p>Returns the time zone used by this application.
This is a simple wrapper of PHP function date_default_timezone_get().</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://php.net/manual/en/function.date-default-timezone-get.php">http://php.net/manual/en/function.date-default-timezone-get.php</a></li>
</ul>
</div>

<div class="detailHeader" id="urlManager-detail">
urlManager<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CUrlManager', array('/site/doc', 'view' => 'CUrlManager')); ?> <?php echo CHtml::link('<b>getUrlManager</b>', array('/site/doc', 'view' => 'CApplication', '#' => 'getUrlManager')); ?>()</div>

<p>Returns the URL manager component.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>(mixed $config=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">application configuration.
If a string, it is treated as the path of the file that contains the configuration;
If an array, it is the actual configuration information.
Please make sure you specify the <?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CApplication', '#' => 'getBasePath')); ?> property in the configuration,
which should point to the directory containing all application logic, template and data.
If not, the directory will be defaulted to 'protected'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L127">yii/base/CApplication.php#L127</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">setApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;set&nbsp;basePath&nbsp;at&nbsp;early&nbsp;as&nbsp;possible&nbsp;to&nbsp;avoid&nbsp;trouble<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">=require(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'basePath'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setBasePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'basePath'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'basePath'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setBasePath</span><span style="color: #007700">(</span><span style="color: #DD0000">'protected'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">setPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'application'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">setPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'webroot'</span><span style="color: #007700">,</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_FILENAME'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'extensionPath'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExtensionPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'extensionPath'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'extensionPath'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">setPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'ext'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'extensions'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'aliases'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAliases</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'aliases'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'aliases'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">preinit</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initSystemHandlers</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreComponents</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">configure</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attachBehaviors</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">behaviors</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">preloadComponents</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="clearGlobalState-detail">
clearGlobalState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>clearGlobalState</b>(string $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the value to be cleared</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L658">yii/base/CApplication.php#L658</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clearGlobalState</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setGlobalState</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Clears a global value.
<br/><br/>
The value cleared will no longer be available in this request and the following requests.</p>


<div class="detailHeader" id="createAbsoluteUrl-detail">
createAbsoluteUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>createAbsoluteUrl</b>(string $route, array $params=array (
), string $schema='', string $ampersand='&')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$route</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL route. This should be in the format of 'ControllerID/ActionID'.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional GET parameters (name=>value). Both the name and value will be URL-encoded.</td>
</tr>
<tr>
  <td class="paramNameCol">$schema</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">schema to use (e.g. http, https). If empty, the schema used for the current request will be used.</td>
</tr>
<tr>
  <td class="paramNameCol">$ampersand</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the token separating name-value pairs in the URL.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the constructed URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L554">yii/base/CApplication.php#L554</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createAbsoluteUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">=</span><span style="color: #DD0000">'&amp;'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #DD0000">'http'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getHostInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">).</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates an absolute URL based on the given controller and action information.</p>


<div class="detailHeader" id="createUrl-detail">
createUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>createUrl</b>(string $route, array $params=array (
), string $ampersand='&')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$route</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL route. This should be in the format of 'ControllerID/ActionID'.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional GET parameters (name=>value). Both the name and value will be URL-encoded.</td>
</tr>
<tr>
  <td class="paramNameCol">$ampersand</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the token separating name-value pairs in the URL.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the constructed URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L541">yii/base/CApplication.php#L541</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">=</span><span style="color: #DD0000">'&amp;'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrlManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a relative URL based on the given controller and action information.</p>


<div class="detailHeader" id="displayError-detail">
displayError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>displayError</b>(integer $code, string $message, string $file, string $line)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">error code</td>
</tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">error message</td>
</tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">error file</td>
</tr>
<tr>
  <td class="paramNameCol">$line</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">error line</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L883">yii/base/CApplication.php#L883</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">displayError</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$line</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;h1&gt;PHP&nbsp;Error&nbsp;[</span><span style="color: #0000BB">$code</span><span style="color: #DD0000">]&lt;/h1&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;p&gt;</span><span style="color: #0000BB">$message</span><span style="color: #DD0000">&nbsp;(</span><span style="color: #0000BB">$file</span><span style="color: #DD0000">:</span><span style="color: #0000BB">$line</span><span style="color: #DD0000">)&lt;/p&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;pre&gt;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">debug_backtrace</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;skip&nbsp;the&nbsp;first&nbsp;3&nbsp;stacks&nbsp;as&nbsp;they&nbsp;do&nbsp;not&nbsp;tell&nbsp;the&nbsp;error&nbsp;position<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">3</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$trace&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$t</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"#</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]}</span><span style="color: #DD0000">(</span><span style="color: #007700">{</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]}</span><span style="color: #DD0000">):&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]).</span><span style="color: #DD0000">'-&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]}</span><span style="color: #DD0000">()\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/pre&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;h1&gt;PHP&nbsp;Error&nbsp;[</span><span style="color: #0000BB">$code</span><span style="color: #DD0000">]&lt;/h1&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;p&gt;</span><span style="color: #0000BB">$message</span><span style="color: #DD0000">&lt;/p&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Displays the captured PHP error.
This method displays the error in HTML when there is
no active error handler.</p>


<div class="detailHeader" id="displayException-detail">
displayException()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>displayException</b>(Exception $exception)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$exception</td>
  <td class="paramTypeCol">Exception</td>
  <td class="paramDescCol">the uncaught exception</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L924">yii/base/CApplication.php#L924</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">displayException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;h1&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">).</span><span style="color: #DD0000">"&lt;/h1&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">().</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLine</span><span style="color: #007700">().</span><span style="color: #DD0000">')&lt;/p&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;pre&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">().</span><span style="color: #DD0000">'&lt;/pre&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;h1&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">).</span><span style="color: #DD0000">"&lt;/h1&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Displays the uncaught PHP exception.
This method displays the exception in HTML when there is
no active error handler.</p>


<div class="detailHeader" id="end-detail">
end()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>end</b>(integer $status=0, boolean $exit=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$status</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">exit status (value 0 means normal exit while other values mean abnormal exit).</td>
</tr>
<tr>
  <td class="paramNameCol">$exit</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to exit the current request. This parameter has been available since version 1.1.5.
It defaults to true, meaning the PHP's exit() function will be called at the end of this method.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L193">yii/base/CApplication.php#L193</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">end</span><span style="color: #007700">(</span><span style="color: #0000BB">$status</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$exit</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onEndRequest'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onEndRequest</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$exit</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(</span><span style="color: #0000BB">$status</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Terminates the application.
This method replaces PHP's exit() function by calling
<?php echo CHtml::link('onEndRequest', array('/site/doc', 'view' => 'CApplication', '#' => 'onEndRequest')); ?> before exiting.</p>


<div class="detailHeader" id="findLocalizedFile-detail">
findLocalizedFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>findLocalizedFile</b>(string $srcFile, string $srcLanguage=NULL, string $language=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$srcFile</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the original file</td>
</tr>
<tr>
  <td class="paramNameCol">$srcLanguage</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the language that the original file is in. If null, the application <?php echo CHtml::link('source language', array('/site/doc', 'view' => 'CApplication', '#' => 'sourceLanguage')); ?> is used.</td>
</tr>
<tr>
  <td class="paramNameCol">$language</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the desired language that the file should be localized to. If null, the <?php echo CHtml::link('application language', array('/site/doc', 'view' => 'CApplication', '#' => 'getLanguage')); ?> will be used.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the matching localized file. The original file is returned if no localized version is found
or if source language is the same as the desired language.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L383">yii/base/CApplication.php#L383</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findLocalizedFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$srcFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$srcLanguage</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$srcLanguage</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$srcLanguage</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sourceLanguage</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$language</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$language</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLanguage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$language</span><span style="color: #007700">===</span><span style="color: #0000BB">$srcLanguage</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$srcFile</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$desiredFile</span><span style="color: #007700">=</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$srcFile</span><span style="color: #007700">).</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$language</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$srcFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$desiredFile</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$desiredFile&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$srcFile</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the localized version of a specified file.
<br/><br/>
The searching is based on the specified language code. In particular,
a file with the same name will be looked for under the subdirectory
named as the locale ID. For example, given the file "path/to/view.php"
and locale ID "zh_cn", the localized file will be looked for as
"path/to/zh_cn/view.php". If the file is not found, the original file
will be returned.
<br/><br/>
For consistency, it is recommended that the locale ID is given
in lower case and in the format of LanguageID_RegionID (e.g. "en_us").</p>


<div class="detailHeader" id="getBasePath-detail">
getBasePath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getBasePath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory of the application. Defaults to 'protected'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L248">yii/base/CApplication.php#L248</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_basePath</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the root path of the application.</p>


<div class="detailHeader" id="getBaseUrl-detail">
getBaseUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getBaseUrl</b>(boolean $absolute=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$absolute</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to return an absolute URL. Defaults to false, meaning returning a relative one.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the relative URL for the application</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L570">yii/base/CApplication.php#L570</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$absolute</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$absolute</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the relative URL for the application.
This is a shortcut method to <?php echo CHtml::link('CHttpRequest::getBaseUrl()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getBaseUrl')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CHttpRequest::getBaseUrl()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getBaseUrl')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getCache-detail">
getCache()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?> <b>getCache</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
  <td class="paramDescCol">the cache application component. Null if the component is not enabled.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L484">yii/base/CApplication.php#L484</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCache</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'cache'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the cache component.</p>


<div class="detailHeader" id="getController-detail">
getController()
<span class="detailHeaderTag">
method
(available since v1.1.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> <b>getController</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td class="paramDescCol">the currently active controller. Null is returned in this base class.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L529">yii/base/CApplication.php#L529</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getController</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getCoreMessages-detail">
getCoreMessages()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CPhpMessageSource', array('/site/doc', 'view' => 'CPhpMessageSource')); ?> <b>getCoreMessages</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CPhpMessageSource', array('/site/doc', 'view' => 'CPhpMessageSource')); ?></td>
  <td class="paramDescCol">the core message translations</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L493">yii/base/CApplication.php#L493</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCoreMessages</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'coreMessages'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the core message translations component.</p>


<div class="detailHeader" id="getDateFormatter-detail">
getDateFormatter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?> <b>getDateFormatter</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?></td>
  <td class="paramDescCol">the locale-dependent date formatter.
The current <?php echo CHtml::link('application locale', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocale')); ?> will be used.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L439">yii/base/CApplication.php#L439</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDateFormatter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocale</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getDateFormatter</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the locale-dependent date formatter.</p>


<div class="detailHeader" id="getDb-detail">
getDb()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <b>getDb</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol">the database connection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L448">yii/base/CApplication.php#L448</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDb</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'db'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the database connection component.</p>


<div class="detailHeader" id="getErrorHandler-detail">
getErrorHandler()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?> <b>getErrorHandler</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
  <td class="paramDescCol">the error handler application component.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L457">yii/base/CApplication.php#L457</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getErrorHandler</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'errorHandler'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the error handler component.</p>


<div class="detailHeader" id="getExtensionPath-detail">
getExtensionPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getExtensionPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that contains all extensions. Defaults to the 'extensions' directory under 'protected'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L298">yii/base/CApplication.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getExtensionPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'ext'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the root directory that holds all third-party extensions.</p>


<div class="detailHeader" id="getGlobalState-detail">
getGlobalState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getGlobalState</b>(string $key, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the value to be returned</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default value. If the named global value is not found, this will be returned instead.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the named global value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L608">yii/base/CApplication.php#L608</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getGlobalState</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadGlobalState</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a global value.
<br/><br/>
A global value is one that is persistent across users sessions and requests.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setGlobalState', array('/site/doc', 'view' => 'CApplication', '#' => 'setGlobalState')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getHomeUrl-detail">
getHomeUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getHomeUrl</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the homepage URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L578">yii/base/CApplication.php#L578</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHomeUrl</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_homeUrl</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrlManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">showScriptName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getScriptUrl</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">'/'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_homeUrl</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getId-detail">
getId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the unique identifier for the application.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L227">yii/base/CApplication.php#L227</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_id</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_id</span><span style="color: #007700">=</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%x'</span><span style="color: #007700">,</span><span style="color: #0000BB">crc32</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Returns the unique identifier for the application.</p>


<div class="detailHeader" id="getLanguage-detail">
getLanguage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLanguage</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the language that the user is using and the application should be targeted to.
Defaults to the <?php echo CHtml::link('source language', array('/site/doc', 'view' => 'CApplication', '#' => 'sourceLanguage')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L321">yii/base/CApplication.php#L321</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLanguage</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_language</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sourceLanguage&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_language</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the language that the user is using and the application should be targeted to.</p>


<div class="detailHeader" id="getLocale-detail">
getLocale()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?> <b>getLocale</b>(string $localeID=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$localeID</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the locale ID (e.g. en_US). If null, the <?php echo CHtml::link('application language ID', array('/site/doc', 'view' => 'CApplication', '#' => 'getLanguage')); ?> will be used.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?></td>
  <td class="paramDescCol">the locale instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L400">yii/base/CApplication.php#L400</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLocale</span><span style="color: #007700">(</span><span style="color: #0000BB">$localeID</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CLocale</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$localeID</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLanguage</span><span style="color: #007700">():</span><span style="color: #0000BB">$localeID</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the locale instance.</p>


<div class="detailHeader" id="getLocaleDataPath-detail">
getLocaleDataPath()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLocaleDataPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that contains the locale data. It defaults to 'framework/i18n/data'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L410">yii/base/CApplication.php#L410</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLocaleDataPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CLocale</span><span style="color: #007700">::</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'system.i18n.data'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">CLocale</span><span style="color: #007700">::</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the directory that contains the locale data.</p>


<div class="detailHeader" id="getMessages-detail">
getMessages()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?> <b>getMessages</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
  <td class="paramDescCol">the application message translations</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L502">yii/base/CApplication.php#L502</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMessages</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'messages'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the application message translations component.</p>


<div class="detailHeader" id="getNumberFormatter-detail">
getNumberFormatter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?> <b>getNumberFormatter</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?></td>
  <td class="paramDescCol">the locale-dependent number formatter.
The current <?php echo CHtml::link('application locale', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocale')); ?> will be used.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L429">yii/base/CApplication.php#L429</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getNumberFormatter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocale</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getNumberFormatter</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getRequest-detail">
getRequest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CHttpRequest', array('/site/doc', 'view' => 'CHttpRequest')); ?> <b>getRequest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CHttpRequest', array('/site/doc', 'view' => 'CHttpRequest')); ?></td>
  <td class="paramDescCol">the request component</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L511">yii/base/CApplication.php#L511</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'request'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the request component.</p>


<div class="detailHeader" id="getRuntimePath-detail">
getRuntimePath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getRuntimePath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that stores runtime files. Defaults to 'protected/runtime'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L270">yii/base/CApplication.php#L270</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRuntimePath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runtimePath</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runtimePath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setRuntimePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'runtime'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runtimePath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Returns the directory that stores runtime files.</p>


<div class="detailHeader" id="getSecurityManager-detail">
getSecurityManager()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CSecurityManager', array('/site/doc', 'view' => 'CSecurityManager')); ?> <b>getSecurityManager</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CSecurityManager', array('/site/doc', 'view' => 'CSecurityManager')); ?></td>
  <td class="paramDescCol">the security manager application component.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L466">yii/base/CApplication.php#L466</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSecurityManager</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'securityManager'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the security manager component.</p>


<div class="detailHeader" id="getStatePersister-detail">
getStatePersister()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CStatePersister', array('/site/doc', 'view' => 'CStatePersister')); ?> <b>getStatePersister</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CStatePersister', array('/site/doc', 'view' => 'CStatePersister')); ?></td>
  <td class="paramDescCol">the state persister application component.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L475">yii/base/CApplication.php#L475</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getStatePersister</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'statePersister'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the state persister component.</p>


<div class="detailHeader" id="getTimeZone-detail">
getTimeZone()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getTimeZone</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the time zone used by this application.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L348">yii/base/CApplication.php#L348</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTimeZone</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date_default_timezone_get</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the time zone used by this application.
This is a simple wrapper of PHP function date_default_timezone_get().</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://php.net/manual/en/function.date-default-timezone-get.php">http://php.net/manual/en/function.date-default-timezone-get.php</a></li>
</ul>
</div>

<div class="detailHeader" id="getUrlManager-detail">
getUrlManager()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CUrlManager', array('/site/doc', 'view' => 'CUrlManager')); ?> <b>getUrlManager</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CUrlManager', array('/site/doc', 'view' => 'CUrlManager')); ?></td>
  <td class="paramDescCol">the URL manager component</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L520">yii/base/CApplication.php#L520</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrlManager</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'urlManager'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the URL manager component.</p>


<div class="detailHeader" id="handleError-detail">
handleError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>handleError</b>(integer $code, string $message, string $file, integer $line)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the level of the error raised</td>
</tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error message</td>
</tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the filename that the error was raised in</td>
</tr>
<tr>
  <td class="paramNameCol">$line</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the line number the error was raised at</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L777">yii/base/CApplication.php#L777</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">handleError</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$line</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$code&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">error_reporting</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;disable&nbsp;error&nbsp;capturing&nbsp;to&nbsp;avoid&nbsp;recursive&nbsp;errors<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">restore_error_handler</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">restore_exception_handler</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">=</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$message</span><span style="color: #DD0000">&nbsp;(</span><span style="color: #0000BB">$file</span><span style="color: #DD0000">:</span><span style="color: #0000BB">$line</span><span style="color: #DD0000">)\nStack&nbsp;trace:\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">debug_backtrace</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;skip&nbsp;the&nbsp;first&nbsp;3&nbsp;stacks&nbsp;as&nbsp;they&nbsp;do&nbsp;not&nbsp;tell&nbsp;the&nbsp;error&nbsp;position<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">3</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$trace&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$t</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">.=</span><span style="color: #DD0000">"#</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]}</span><span style="color: #DD0000">(</span><span style="color: #007700">{</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]}</span><span style="color: #DD0000">):&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">.=</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]).</span><span style="color: #DD0000">'-&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">.=</span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]}</span><span style="color: #DD0000">()\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_URI'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">.=</span><span style="color: #DD0000">'REQUEST_URI='</span><span style="color: #007700">.</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_URI'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$log</span><span style="color: #007700">,</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_ERROR</span><span style="color: #007700">,</span><span style="color: #DD0000">'php'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #DD0000">'CErrorEvent'</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CErrorEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$line</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onError</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handled</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;try&nbsp;an&nbsp;error&nbsp;handler<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if((</span><span style="color: #0000BB">$handler</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getErrorHandler</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handler</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handle</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayError</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$line</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayException</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;use&nbsp;the&nbsp;most&nbsp;primitive&nbsp;way&nbsp;to&nbsp;log&nbsp;error<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">).</span><span style="color: #DD0000">':&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">().</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLine</span><span style="color: #007700">().</span><span style="color: #DD0000">")\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Previous&nbsp;error:\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'$_SERVER='</span><span style="color: #007700">.</span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">error_log</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Handles PHP execution errors such as warnings, notices.
<br/><br/>
This method is implemented as a PHP error handler. It requires
that constant YII_ENABLE_ERROR_HANDLER be defined true.
<br/><br/>
This method will first raise an <?php echo CHtml::link('onError', array('/site/doc', 'view' => 'CApplication', '#' => 'onError')); ?> event.
If the error is not handled by any event handler, it will call
<?php echo CHtml::link('errorHandler', array('/site/doc', 'view' => 'CApplication', '#' => 'getErrorHandler')); ?> to process the error.
<br/><br/>
The application will be terminated by this method.</p>


<div class="detailHeader" id="handleException-detail">
handleException()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>handleException</b>(Exception $exception)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$exception</td>
  <td class="paramTypeCol">Exception</td>
  <td class="paramDescCol">exception that is not caught</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L706">yii/base/CApplication.php#L706</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">handleException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;disable&nbsp;error&nbsp;capturing&nbsp;to&nbsp;avoid&nbsp;recursive&nbsp;errors<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">restore_error_handler</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">restore_exception_handler</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$category</span><span style="color: #007700">=</span><span style="color: #DD0000">'exception.'</span><span style="color: #007700">.</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$exception&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$category</span><span style="color: #007700">.=</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">statusCode</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;php&nbsp;&lt;5.2&nbsp;doesn't&nbsp;support&nbsp;string&nbsp;conversion&nbsp;auto-magically<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__toString</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_URI'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\nREQUEST_URI="</span><span style="color: #007700">.</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_URI'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_REFERER'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\nHTTP_REFERER="</span><span style="color: #007700">.</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_REFERER'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\n---"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_ERROR</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CExceptionEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$exception</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onException</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handled</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;try&nbsp;an&nbsp;error&nbsp;handler<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if((</span><span style="color: #0000BB">$handler</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getErrorHandler</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handler</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handle</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayException</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;use&nbsp;the&nbsp;most&nbsp;primitive&nbsp;way&nbsp;to&nbsp;log&nbsp;error<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">).</span><span style="color: #DD0000">':&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">().</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLine</span><span style="color: #007700">().</span><span style="color: #DD0000">")\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Previous&nbsp;exception:\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">).</span><span style="color: #DD0000">':&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">().</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLine</span><span style="color: #007700">().</span><span style="color: #DD0000">")\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'$_SERVER='</span><span style="color: #007700">.</span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">error_log</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Handles uncaught PHP exceptions.
<br/><br/>
This method is implemented as a PHP exception handler. It requires
that constant YII_ENABLE_EXCEPTION_HANDLER be defined true.
<br/><br/>
This method will first raise an <?php echo CHtml::link('onException', array('/site/doc', 'view' => 'CApplication', '#' => 'onException')); ?> event.
If the exception is not handled by any event handler, it will call
<?php echo CHtml::link('errorHandler', array('/site/doc', 'view' => 'CApplication', '#' => 'getErrorHandler')); ?> to process the exception.
<br/><br/>
The application will be terminated by this method.</p>


<div class="detailHeader" id="initSystemHandlers-detail">
initSystemHandlers()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>initSystemHandlers</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L942">yii/base/CApplication.php#L942</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initSystemHandlers</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_ENABLE_EXCEPTION_HANDLER</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">set_exception_handler</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'handleException'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_ENABLE_ERROR_HANDLER</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">set_error_handler</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'handleError'</span><span style="color: #007700">),</span><span style="color: #0000BB">error_reporting</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the class autoloader and error handlers.</p>


<div class="detailHeader" id="loadGlobalState-detail">
loadGlobalState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>loadGlobalState</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L668">yii/base/CApplication.php#L668</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">loadGlobalState</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$persister</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStatePersister</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">=</span><span style="color: #0000BB">$persister</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">())===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_stateChanged</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">detachEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onEndRequest'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'saveGlobalState'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Loads the global state data from persistent storage.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getStatePersister', array('/site/doc', 'view' => 'CApplication', '#' => 'getStatePersister')); ?></li>
</ul>
</div>

<div class="detailHeader" id="onBeginRequest-detail">
onBeginRequest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onBeginRequest</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L205">yii/base/CApplication.php#L205</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onBeginRequest</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeginRequest'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Raised right BEFORE the application processes the request.</p>


<div class="detailHeader" id="onEndRequest-detail">
onEndRequest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onEndRequest</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L214">yii/base/CApplication.php#L214</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onEndRequest</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ended</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ended</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onEndRequest'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Raised right AFTER the application processes the request.</p>


<div class="detailHeader" id="onError-detail">
onError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onError</b>(<?php echo CHtml::link('CErrorEvent', array('/site/doc', 'view' => 'CErrorEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CErrorEvent', array('/site/doc', 'view' => 'CErrorEvent')); ?></td>
  <td class="paramDescCol">event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L869">yii/base/CApplication.php#L869</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onError</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onError'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Raised when a PHP execution error occurs.
<br/><br/>
An event handler can set the <?php echo CHtml::link('handled', array('/site/doc', 'view' => 'CErrorEvent', '#' => 'handled')); ?>
property of the event parameter to be true to indicate no further error
handling is needed. Otherwise, the <?php echo CHtml::link('errorHandler', array('/site/doc', 'view' => 'CApplication', '#' => 'getErrorHandler')); ?>
application component will continue processing the error.</p>


<div class="detailHeader" id="onException-detail">
onException()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onException</b>(<?php echo CHtml::link('CExceptionEvent', array('/site/doc', 'view' => 'CExceptionEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CExceptionEvent', array('/site/doc', 'view' => 'CExceptionEvent')); ?></td>
  <td class="paramDescCol">event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L854">yii/base/CApplication.php#L854</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onException</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onException'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Raised when an uncaught PHP exception occurs.
<br/><br/>
An event handler can set the <?php echo CHtml::link('handled', array('/site/doc', 'view' => 'CExceptionEvent', '#' => 'handled')); ?>
property of the event parameter to be true to indicate no further error
handling is needed. Otherwise, the <?php echo CHtml::link('errorHandler', array('/site/doc', 'view' => 'CApplication', '#' => 'getErrorHandler')); ?>
application component will continue processing the error.</p>


<div class="detailHeader" id="processRequest-detail">
processRequest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public void <b>processRequest</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L116">yii/base/CApplication.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">abstract&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">processRequest</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Processes the request.
This is the place where the actual request processing work is done.
Derived classes should override this method.</p>


<div class="detailHeader" id="registerCoreComponents-detail">
registerCoreComponents()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>registerCoreComponents</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L954">yii/base/CApplication.php#L954</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCoreComponents</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$components</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'coreMessages'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CPhpMessageSource'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'language'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'en_us'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'basePath'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">YII_PATH</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'messages'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'db'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CDbConnection'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'messages'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CPhpMessageSource'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorHandler'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CErrorHandler'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'securityManager'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CSecurityManager'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'statePersister'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CStatePersister'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'urlManager'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CUrlManager'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'request'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CHttpRequest'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'format'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CFormatter'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setComponents</span><span style="color: #007700">(</span><span style="color: #0000BB">$components</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the core application components.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setComponents', array('/site/doc', 'view' => 'CApplication', '#' => 'setComponents')); ?></li>
</ul>
</div>

<div class="detailHeader" id="run-detail">
run()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>run</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L175">yii/base/CApplication.php#L175</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeginRequest'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onBeginRequest</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">register_shutdown_function</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'end'</span><span style="color: #007700">),</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processRequest</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onEndRequest'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onEndRequest</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Runs the application.
This method loads static application components. Derived classes usually overrides this
method to do more application-specific tasks.
Remember to call the parent implementation so that static application components are loaded.</p>


<div class="detailHeader" id="saveGlobalState-detail">
saveGlobalState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>saveGlobalState</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L682">yii/base/CApplication.php#L682</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">saveGlobalState</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_stateChanged</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_stateChanged</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">detachEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onEndRequest'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'saveGlobalState'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStatePersister</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Saves the global state data into persistent storage.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getStatePersister', array('/site/doc', 'view' => 'CApplication', '#' => 'getStatePersister')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setBasePath-detail">
setBasePath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setBasePath</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory of the application.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L259">yii/base/CApplication.php#L259</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setBasePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_basePath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_basePath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Application&nbsp;base&nbsp;path&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Sets the root directory of the application.
This method can only be invoked at the begin of the constructor.</p>


<div class="detailHeader" id="setExtensionPath-detail">
setExtensionPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setExtensionPath</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that contains all third-party extensions.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L308">yii/base/CApplication.php#L308</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setExtensionPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$extensionPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$extensionPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Extension&nbsp;path&nbsp;"{path}"&nbsp;does&nbsp;not&nbsp;exist.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">setPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'ext'</span><span style="color: #007700">,</span><span style="color: #0000BB">$extensionPath</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the root directory that holds all third-party extensions.</p>


<div class="detailHeader" id="setGlobalState-detail">
setGlobalState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setGlobalState</b>(string $key, mixed $value, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the value to be saved</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the global value to be saved. It must be serializable.</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default value. If the named global value is the same as this value, it will be cleared from the current storage.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L628">yii/base/CApplication.php#L628</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setGlobalState</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadGlobalState</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$changed</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_stateChanged</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_stateChanged</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">])&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]!==</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_globalState</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_stateChanged</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_stateChanged</span><span style="color: #007700">!==</span><span style="color: #0000BB">$changed</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attachEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onEndRequest'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'saveGlobalState'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Sets a global value.
<br/><br/>
A global value is one that is persistent across users sessions and requests.
Make sure that the value is serializable and unserializable.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getGlobalState', array('/site/doc', 'view' => 'CApplication', '#' => 'getGlobalState')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setHomeUrl-detail">
setHomeUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setHomeUrl</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the homepage URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L594">yii/base/CApplication.php#L594</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setHomeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_homeUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setId-detail">
setId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setId</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the unique identifier for the application.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L239">yii/base/CApplication.php#L239</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setId</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_id</span><span style="color: #007700">=</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the unique identifier for the application.</p>


<div class="detailHeader" id="setLanguage-detail">
setLanguage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setLanguage</b>(string $language)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$language</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the user language (e.g. 'en_US', 'zh_CN').
If it is null, the <?php echo CHtml::link('sourceLanguage', array('/site/doc', 'view' => 'CApplication', '#' => 'sourceLanguage')); ?> will be used.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L337">yii/base/CApplication.php#L337</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setLanguage</span><span style="color: #007700">(</span><span style="color: #0000BB">$language</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_language</span><span style="color: #007700">=</span><span style="color: #0000BB">$language</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Specifies which language the application is targeted to.
<br/><br/>
This is the language that the application displays to end users.
If set null, it uses the <?php echo CHtml::link('source language', array('/site/doc', 'view' => 'CApplication', '#' => 'sourceLanguage')); ?>.
<br/><br/>
Unless your application needs to support multiple languages, you should always
set this language to null to maximize the application's performance.</p>


<div class="detailHeader" id="setLocaleDataPath-detail">
setLocaleDataPath()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setLocaleDataPath</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that contains the locale data.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L420">yii/base/CApplication.php#L420</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setLocaleDataPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">CLocale</span><span style="color: #007700">::</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the directory that contains the locale data.</p>


<div class="detailHeader" id="setRuntimePath-detail">
setRuntimePath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setRuntimePath</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that stores runtime files.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L286">yii/base/CApplication.php#L286</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setRuntimePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$runtimePath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$runtimePath</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">is_writable</span><span style="color: #007700">(</span><span style="color: #0000BB">$runtimePath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Application&nbsp;runtime&nbsp;path&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;valid.&nbsp;Please&nbsp;make&nbsp;sure&nbsp;it&nbsp;is&nbsp;a&nbsp;directory&nbsp;writable&nbsp;by&nbsp;the&nbsp;Web&nbsp;server&nbsp;process.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runtimePath</span><span style="color: #007700">=</span><span style="color: #0000BB">$runtimePath</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the directory that stores runtime files.</p>


<div class="detailHeader" id="setTimeZone-detail">
setTimeZone()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setTimeZone</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the time zone used by this application.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CApplication.php#L359">yii/base/CApplication.php#L359</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setTimeZone</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the time zone used by this application.
This is a simple wrapper of PHP function date_default_timezone_set().</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://php.net/manual/en/function.date-default-timezone-set.php">http://php.net/manual/en/function.date-default-timezone-set.php</a></li>
</ul>
</div>

