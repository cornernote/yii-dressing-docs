<?php
$this->pageTitle = $this->pageHeading = 'CConsoleApplication';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CConsoleApplication';
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
  <td><?php echo CHtml::link('system.console', array('/site/doc', '#' => 'system.console')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CConsoleApplication &raquo;
<?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?> &raquo;
<?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php">yii/console/CConsoleApplication.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CConsoleApplication represents a console application.
<br/><br/>
CConsoleApplication extends <?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?> by providing functionalities
specific to console requests. In particular, it deals with console requests
through a command-based approach:
<ul>
<li>A console application consists of one or several possible user commands;</li>
<li>Each user command is implemented as a class extending <?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?>;</li>
<li>User specifies which command to run on the command line;</li>
<li>The command processes the user request with the specified parameters.</li>
</ul>
<br/><br/>
The command classes reside in the directory <?php echo CHtml::link('commandPath', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'getCommandPath')); ?>.
The name of the class follows the pattern: &lt;command-name&gt;Command, and its
file name is the same as the class name. For example, the 'ShellCommand' class defines
a 'shell' command and the class file name is 'ShellCommand.php'.
<br/><br/>
To run the console application, enter the following on the command line:
<pre>
php path/to/entry_script.php &lt;command name&gt; [param 1] [param 2] ...
</pre>
<br/><br/>
You may use the following to see help instructions about a command:
<pre>
php path/to/entry_script.php help &lt;command name&gt;
</pre></div>
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
<tr class="inherited" id="basePath">
  <td><?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CApplication', '#' => 'basePath-detail')); ?></td>
  <td>string</td>
  <td>Returns the root path of the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="baseUrl">
  <td><?php echo CHtml::link('baseUrl', array('/site/doc', 'view' => 'CApplication', '#' => 'baseUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the relative URL for the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CModule', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="cache">
  <td><?php echo CHtml::link('cache', array('/site/doc', 'view' => 'CApplication', '#' => 'cache-detail')); ?></td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
  <td>Returns the cache component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="charset">
  <td><?php echo CHtml::link('charset', array('/site/doc', 'view' => 'CApplication', '#' => 'charset-detail')); ?></td>
  <td>string</td>
  <td>the charset currently used for the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr id="command">
  <td><?php echo CHtml::link('command', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'command-detail')); ?></td>
  <td>CConsoleCommand|null</td>
  <td>Returns the currently running command.</td>
  <td>CConsoleApplication</td>
</tr>
<tr id="commandMap">
  <td><?php echo CHtml::link('commandMap', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'commandMap-detail')); ?></td>
  <td>array</td>
  <td>mapping from command name to command configurations.</td>
  <td>CConsoleApplication</td>
</tr>
<tr id="commandPath">
  <td><?php echo CHtml::link('commandPath', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'commandPath-detail')); ?></td>
  <td>string</td>
  <td>the directory that contains the command classes.</td>
  <td>CConsoleApplication</td>
</tr>
<tr id="commandRunner">
  <td><?php echo CHtml::link('commandRunner', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'commandRunner-detail')); ?></td>
  <td><?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?></td>
  <td>Returns the command runner.</td>
  <td>CConsoleApplication</td>
</tr>
<tr class="inherited" id="components">
  <td><?php echo CHtml::link('components', array('/site/doc', 'view' => 'CModule', '#' => 'components-detail')); ?></td>
  <td>array</td>
  <td>Returns the application components.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CApplication', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>the currently active controller.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="coreMessages">
  <td><?php echo CHtml::link('coreMessages', array('/site/doc', 'view' => 'CApplication', '#' => 'coreMessages-detail')); ?></td>
  <td><?php echo CHtml::link('CPhpMessageSource', array('/site/doc', 'view' => 'CPhpMessageSource')); ?></td>
  <td>Returns the core message translations component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="dateFormatter">
  <td><?php echo CHtml::link('dateFormatter', array('/site/doc', 'view' => 'CApplication', '#' => 'dateFormatter-detail')); ?></td>
  <td><?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?></td>
  <td>Returns the locale-dependent date formatter.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="db">
  <td><?php echo CHtml::link('db', array('/site/doc', 'view' => 'CApplication', '#' => 'db-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>Returns the database connection component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="errorHandler">
  <td><?php echo CHtml::link('errorHandler', array('/site/doc', 'view' => 'CApplication', '#' => 'errorHandler-detail')); ?></td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
  <td>Returns the error handler component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="extensionPath">
  <td><?php echo CHtml::link('extensionPath', array('/site/doc', 'view' => 'CApplication', '#' => 'extensionPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the root directory that holds all third-party extensions.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="homeUrl">
  <td><?php echo CHtml::link('homeUrl', array('/site/doc', 'view' => 'CApplication', '#' => 'homeUrl-detail')); ?></td>
  <td>string</td>
  <td>the homepage URL</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CApplication', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the unique identifier for the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="language">
  <td><?php echo CHtml::link('language', array('/site/doc', 'view' => 'CApplication', '#' => 'language-detail')); ?></td>
  <td>string</td>
  <td>Returns the language that the user is using and the application should be targeted to.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="locale">
  <td><?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CApplication', '#' => 'locale-detail')); ?></td>
  <td><?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?></td>
  <td>Returns the locale instance.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="localeDataPath">
  <td><?php echo CHtml::link('localeDataPath', array('/site/doc', 'view' => 'CApplication', '#' => 'localeDataPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory that contains the locale data.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="messages">
  <td><?php echo CHtml::link('messages', array('/site/doc', 'view' => 'CApplication', '#' => 'messages-detail')); ?></td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
  <td>Returns the application message translations component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CApplication', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the application name.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="numberFormatter">
  <td><?php echo CHtml::link('numberFormatter', array('/site/doc', 'view' => 'CApplication', '#' => 'numberFormatter-detail')); ?></td>
  <td><?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?></td>
  <td>the locale-dependent number formatter.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="request">
  <td><?php echo CHtml::link('request', array('/site/doc', 'view' => 'CApplication', '#' => 'request-detail')); ?></td>
  <td><?php echo CHtml::link('CHttpRequest', array('/site/doc', 'view' => 'CHttpRequest')); ?></td>
  <td>Returns the request component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="runtimePath">
  <td><?php echo CHtml::link('runtimePath', array('/site/doc', 'view' => 'CApplication', '#' => 'runtimePath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory that stores runtime files.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="securityManager">
  <td><?php echo CHtml::link('securityManager', array('/site/doc', 'view' => 'CApplication', '#' => 'securityManager-detail')); ?></td>
  <td><?php echo CHtml::link('CSecurityManager', array('/site/doc', 'view' => 'CSecurityManager')); ?></td>
  <td>Returns the security manager component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="sourceLanguage">
  <td><?php echo CHtml::link('sourceLanguage', array('/site/doc', 'view' => 'CApplication', '#' => 'sourceLanguage-detail')); ?></td>
  <td>string</td>
  <td>the language that the application is written in.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="statePersister">
  <td><?php echo CHtml::link('statePersister', array('/site/doc', 'view' => 'CApplication', '#' => 'statePersister-detail')); ?></td>
  <td><?php echo CHtml::link('CStatePersister', array('/site/doc', 'view' => 'CStatePersister')); ?></td>
  <td>Returns the state persister component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="timeZone">
  <td><?php echo CHtml::link('timeZone', array('/site/doc', 'view' => 'CApplication', '#' => 'timeZone-detail')); ?></td>
  <td>string</td>
  <td>Returns the time zone used by this application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="urlManager">
  <td><?php echo CHtml::link('urlManager', array('/site/doc', 'view' => 'CApplication', '#' => 'urlManager-detail')); ?></td>
  <td><?php echo CHtml::link('CUrlManager', array('/site/doc', 'view' => 'CUrlManager')); ?></td>
  <td>Returns the URL manager component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CApplication', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="clearGlobalState">
  <td><?php echo CHtml::link('clearGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'clearGlobalState-detail')); ?></td>
  <td>Clears a global value.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="configure">
  <td><?php echo CHtml::link('configure()', array('/site/doc', 'view' => 'CModule', '#' => 'configure-detail')); ?></td>
  <td>Configures the module with the specified configuration.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="createAbsoluteUrl">
  <td><?php echo CHtml::link('createAbsoluteUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'createAbsoluteUrl-detail')); ?></td>
  <td>Creates an absolute URL based on the given controller and action information.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="createUrl">
  <td><?php echo CHtml::link('createUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'createUrl-detail')); ?></td>
  <td>Creates a relative URL based on the given controller and action information.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
  <td><?php echo CHtml::link('displayError()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'displayError-detail')); ?></td>
  <td>Displays the captured PHP error.</td>
  <td>CConsoleApplication</td>
</tr>
<tr id="displayException">
  <td><?php echo CHtml::link('displayException()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'displayException-detail')); ?></td>
  <td>Displays the uncaught PHP exception.</td>
  <td>CConsoleApplication</td>
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
<tr class="inherited" id="end">
  <td><?php echo CHtml::link('end()', array('/site/doc', 'view' => 'CApplication', '#' => 'end-detail')); ?></td>
  <td>Terminates the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="findLocalizedFile">
  <td><?php echo CHtml::link('findLocalizedFile()', array('/site/doc', 'view' => 'CApplication', '#' => 'findLocalizedFile-detail')); ?></td>
  <td>Returns the localized version of a specified file.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getBasePath">
  <td><?php echo CHtml::link('getBasePath()', array('/site/doc', 'view' => 'CApplication', '#' => 'getBasePath-detail')); ?></td>
  <td>Returns the root path of the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getBaseUrl">
  <td><?php echo CHtml::link('getBaseUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'getBaseUrl-detail')); ?></td>
  <td>Returns the relative URL for the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getCache">
  <td><?php echo CHtml::link('getCache()', array('/site/doc', 'view' => 'CApplication', '#' => 'getCache-detail')); ?></td>
  <td>Returns the cache component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr id="getCommand">
  <td><?php echo CHtml::link('getCommand()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'getCommand-detail')); ?></td>
  <td>Returns the currently running command.</td>
  <td>CConsoleApplication</td>
</tr>
<tr id="getCommandPath">
  <td><?php echo CHtml::link('getCommandPath()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'getCommandPath-detail')); ?></td>
  <td>Returns the directory that contains the command classes. Defaults to 'protected/commands'.</td>
  <td>CConsoleApplication</td>
</tr>
<tr id="getCommandRunner">
  <td><?php echo CHtml::link('getCommandRunner()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'getCommandRunner-detail')); ?></td>
  <td>Returns the command runner.</td>
  <td>CConsoleApplication</td>
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
<tr class="inherited" id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CApplication', '#' => 'getController-detail')); ?></td>
  <td>Returns the currently active controller. Null is returned in this base class.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getCoreMessages">
  <td><?php echo CHtml::link('getCoreMessages()', array('/site/doc', 'view' => 'CApplication', '#' => 'getCoreMessages-detail')); ?></td>
  <td>Returns the core message translations component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getDateFormatter">
  <td><?php echo CHtml::link('getDateFormatter()', array('/site/doc', 'view' => 'CApplication', '#' => 'getDateFormatter-detail')); ?></td>
  <td>Returns the locale-dependent date formatter.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getDb">
  <td><?php echo CHtml::link('getDb()', array('/site/doc', 'view' => 'CApplication', '#' => 'getDb-detail')); ?></td>
  <td>Returns the database connection component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getErrorHandler">
  <td><?php echo CHtml::link('getErrorHandler()', array('/site/doc', 'view' => 'CApplication', '#' => 'getErrorHandler-detail')); ?></td>
  <td>Returns the error handler component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getExtensionPath">
  <td><?php echo CHtml::link('getExtensionPath()', array('/site/doc', 'view' => 'CApplication', '#' => 'getExtensionPath-detail')); ?></td>
  <td>Returns the root directory that holds all third-party extensions.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getGlobalState">
  <td><?php echo CHtml::link('getGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'getGlobalState-detail')); ?></td>
  <td>Returns a global value.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getHomeUrl">
  <td><?php echo CHtml::link('getHomeUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'getHomeUrl-detail')); ?></td>
  <td>Returns the homepage URL</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CApplication', '#' => 'getId-detail')); ?></td>
  <td>Returns the unique identifier for the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getLanguage">
  <td><?php echo CHtml::link('getLanguage()', array('/site/doc', 'view' => 'CApplication', '#' => 'getLanguage-detail')); ?></td>
  <td>Returns the language that the user is using and the application should be targeted to.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getLocale">
  <td><?php echo CHtml::link('getLocale()', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocale-detail')); ?></td>
  <td>Returns the locale instance.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getLocaleDataPath">
  <td><?php echo CHtml::link('getLocaleDataPath()', array('/site/doc', 'view' => 'CApplication', '#' => 'getLocaleDataPath-detail')); ?></td>
  <td>Returns the directory that contains the locale data.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getMessages">
  <td><?php echo CHtml::link('getMessages()', array('/site/doc', 'view' => 'CApplication', '#' => 'getMessages-detail')); ?></td>
  <td>Returns the application message translations component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="getNumberFormatter">
  <td><?php echo CHtml::link('getNumberFormatter()', array('/site/doc', 'view' => 'CApplication', '#' => 'getNumberFormatter-detail')); ?></td>
  <td>Returns the locale-dependent number formatter.
The current <?php echo CHtml::link('application locale', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'getLocale')); ?> will be used.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="getRequest">
  <td><?php echo CHtml::link('getRequest()', array('/site/doc', 'view' => 'CApplication', '#' => 'getRequest-detail')); ?></td>
  <td>Returns the request component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getRuntimePath">
  <td><?php echo CHtml::link('getRuntimePath()', array('/site/doc', 'view' => 'CApplication', '#' => 'getRuntimePath-detail')); ?></td>
  <td>Returns the directory that stores runtime files.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getSecurityManager">
  <td><?php echo CHtml::link('getSecurityManager()', array('/site/doc', 'view' => 'CApplication', '#' => 'getSecurityManager-detail')); ?></td>
  <td>Returns the security manager component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getStatePersister">
  <td><?php echo CHtml::link('getStatePersister()', array('/site/doc', 'view' => 'CApplication', '#' => 'getStatePersister-detail')); ?></td>
  <td>Returns the state persister component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getTimeZone">
  <td><?php echo CHtml::link('getTimeZone()', array('/site/doc', 'view' => 'CApplication', '#' => 'getTimeZone-detail')); ?></td>
  <td>Returns the time zone used by this application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="getUrlManager">
  <td><?php echo CHtml::link('getUrlManager()', array('/site/doc', 'view' => 'CApplication', '#' => 'getUrlManager-detail')); ?></td>
  <td>Returns the URL manager component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="handleError">
  <td><?php echo CHtml::link('handleError()', array('/site/doc', 'view' => 'CApplication', '#' => 'handleError-detail')); ?></td>
  <td>Handles PHP execution errors such as warnings, notices.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="handleException">
  <td><?php echo CHtml::link('handleException()', array('/site/doc', 'view' => 'CApplication', '#' => 'handleException-detail')); ?></td>
  <td>Handles uncaught PHP exceptions.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="loadGlobalState">
  <td><?php echo CHtml::link('loadGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'loadGlobalState-detail')); ?></td>
  <td>Loads the global state data from persistent storage.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="onBeginRequest">
  <td><?php echo CHtml::link('onBeginRequest()', array('/site/doc', 'view' => 'CApplication', '#' => 'onBeginRequest-detail')); ?></td>
  <td>Raised right BEFORE the application processes the request.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="onEndRequest">
  <td><?php echo CHtml::link('onEndRequest()', array('/site/doc', 'view' => 'CApplication', '#' => 'onEndRequest-detail')); ?></td>
  <td>Raised right AFTER the application processes the request.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="onError">
  <td><?php echo CHtml::link('onError()', array('/site/doc', 'view' => 'CApplication', '#' => 'onError-detail')); ?></td>
  <td>Raised when a PHP execution error occurs.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="onException">
  <td><?php echo CHtml::link('onException()', array('/site/doc', 'view' => 'CApplication', '#' => 'onException-detail')); ?></td>
  <td>Raised when an uncaught PHP exception occurs.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr id="processRequest">
  <td><?php echo CHtml::link('processRequest()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'processRequest-detail')); ?></td>
  <td>Processes the user request.</td>
  <td>CConsoleApplication</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CApplication', '#' => 'run-detail')); ?></td>
  <td>Runs the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="saveGlobalState">
  <td><?php echo CHtml::link('saveGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'saveGlobalState-detail')); ?></td>
  <td>Saves the global state data into persistent storage.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="setAliases">
  <td><?php echo CHtml::link('setAliases()', array('/site/doc', 'view' => 'CModule', '#' => 'setAliases-detail')); ?></td>
  <td>Defines the root aliases.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="setBasePath">
  <td><?php echo CHtml::link('setBasePath()', array('/site/doc', 'view' => 'CApplication', '#' => 'setBasePath-detail')); ?></td>
  <td>Sets the root directory of the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr id="setCommand">
  <td><?php echo CHtml::link('setCommand()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'setCommand-detail')); ?></td>
  <td>This is shortcut method for <?php echo CHtml::link('CConsoleCommandRunner::setCommand()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'setCommand')); ?>.</td>
  <td>CConsoleApplication</td>
</tr>
<tr id="setCommandPath">
  <td><?php echo CHtml::link('setCommandPath()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'setCommandPath-detail')); ?></td>
  <td>Sets the directory that contains the command classes.</td>
  <td>CConsoleApplication</td>
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
<tr class="inherited" id="setExtensionPath">
  <td><?php echo CHtml::link('setExtensionPath()', array('/site/doc', 'view' => 'CApplication', '#' => 'setExtensionPath-detail')); ?></td>
  <td>Sets the root directory that holds all third-party extensions.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="setGlobalState">
  <td><?php echo CHtml::link('setGlobalState()', array('/site/doc', 'view' => 'CApplication', '#' => 'setGlobalState-detail')); ?></td>
  <td>Sets a global value.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="setHomeUrl">
  <td><?php echo CHtml::link('setHomeUrl()', array('/site/doc', 'view' => 'CApplication', '#' => 'setHomeUrl-detail')); ?></td>
  <td>Sets the homepage URL</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CApplication', '#' => 'setId-detail')); ?></td>
  <td>Sets the unique identifier for the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="setImport">
  <td><?php echo CHtml::link('setImport()', array('/site/doc', 'view' => 'CModule', '#' => 'setImport-detail')); ?></td>
  <td>Sets the aliases that are used in the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="setLanguage">
  <td><?php echo CHtml::link('setLanguage()', array('/site/doc', 'view' => 'CApplication', '#' => 'setLanguage-detail')); ?></td>
  <td>Specifies which language the application is targeted to.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="setLocaleDataPath">
  <td><?php echo CHtml::link('setLocaleDataPath()', array('/site/doc', 'view' => 'CApplication', '#' => 'setLocaleDataPath-detail')); ?></td>
  <td>Sets the directory that contains the locale data.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="setRuntimePath">
  <td><?php echo CHtml::link('setRuntimePath()', array('/site/doc', 'view' => 'CApplication', '#' => 'setRuntimePath-detail')); ?></td>
  <td>Sets the directory that stores runtime files.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="setTimeZone">
  <td><?php echo CHtml::link('setTimeZone()', array('/site/doc', 'view' => 'CApplication', '#' => 'setTimeZone-detail')); ?></td>
  <td>Sets the time zone used by this application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr id="createCommandRunner">
  <td><?php echo CHtml::link('createCommandRunner()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'createCommandRunner-detail')); ?></td>
  <td>Creates the command runner instance.</td>
  <td>CConsoleApplication</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'init-detail')); ?></td>
  <td>Initializes the application by creating the command runner.</td>
  <td>CConsoleApplication</td>
</tr>
<tr class="inherited" id="initSystemHandlers">
  <td><?php echo CHtml::link('initSystemHandlers()', array('/site/doc', 'view' => 'CApplication', '#' => 'initSystemHandlers-detail')); ?></td>
  <td>Initializes the class autoloader and error handlers.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="registerCoreComponents">
  <td><?php echo CHtml::link('registerCoreComponents()', array('/site/doc', 'view' => 'CApplication', '#' => 'registerCoreComponents-detail')); ?></td>
  <td>Registers the core application components.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr class="inherited" id="onBeginRequest">
  <td><?php echo CHtml::link('onBeginRequest', array('/site/doc', 'view' => 'CApplication', '#' => 'onBeginRequest-detail')); ?></td>
  <td>Raised right BEFORE the application processes the request.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="onEndRequest">
  <td><?php echo CHtml::link('onEndRequest', array('/site/doc', 'view' => 'CApplication', '#' => 'onEndRequest-detail')); ?></td>
  <td>Raised right AFTER the application processes the request.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="onException">
  <td><?php echo CHtml::link('onException', array('/site/doc', 'view' => 'CApplication', '#' => 'onException-detail')); ?></td>
  <td>Raised when an uncaught PHP exception occurs.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="onError">
  <td><?php echo CHtml::link('onError', array('/site/doc', 'view' => 'CApplication', '#' => 'onError-detail')); ?></td>
  <td>Raised when a PHP execution error occurs.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="command-detail">
command<span class="detailHeaderTag">
property
 (available since v1.1.14)
</span>
</div>

<div class="signature">
public CConsoleCommand|null <?php echo CHtml::link('<b>getCommand</b>', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'getCommand')); ?>()<br/>public void <?php echo CHtml::link('<b>setCommand</b>', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'setCommand')); ?>(<?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?> $value)</div>

<p>Returns the currently running command.
This is shortcut method for <?php echo CHtml::link('CConsoleCommandRunner::getCommand()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'getCommand')); ?>.</p>


<div class="detailHeader" id="commandMap-detail">
commandMap<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$commandMap</b>;</div>

<p>mapping from command name to command configurations.
Each command configuration can be either a string or an array.
If the former, the string should be the file path of the command class.
If the latter, the array must contain a 'class' element which specifies
the command's class name or <?php echo CHtml::link('class path alias', array('/site/doc', 'view' => 'YiiBase', '#' => 'getPathOfAlias')); ?>.
The rest name-value pairs in the array are used to initialize
the corresponding command properties. For example,
<pre>
array(
  'email'=&gt;array(
     'class'=&gt;'path.to.Mailer',
     'interval'=&gt;3600,
  ),
  'log'=&gt;'path/to/LoggerCommand.php',
)
</pre></p>


<div class="detailHeader" id="commandPath-detail">
commandPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getCommandPath</b>', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'getCommandPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setCommandPath</b>', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'setCommandPath')); ?>(string $value)</div>

<p>the directory that contains the command classes. Defaults to 'protected/commands'.</p>


<div class="detailHeader" id="commandRunner-detail">
commandRunner<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?> <?php echo CHtml::link('<b>getCommandRunner</b>', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'getCommandRunner')); ?>()</div>

<p>Returns the command runner.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="createCommandRunner-detail">
createCommandRunner()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?> <b>createCommandRunner</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?></td>
  <td class="paramDescCol">the command runner</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L101">yii/console/CConsoleApplication.php#L101</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createCommandRunner</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">CConsoleCommandRunner</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates the command runner instance.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L115">yii/console/CConsoleApplication.php#L115</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">displayError</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$line</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"PHP&nbsp;Error[</span><span style="color: #0000BB">$code</span><span style="color: #DD0000">]:&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;in&nbsp;file&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #DD0000">&nbsp;at&nbsp;line&nbsp;</span><span style="color: #0000BB">$line</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">debug_backtrace</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;skip&nbsp;the&nbsp;first&nbsp;4&nbsp;stacks&nbsp;as&nbsp;they&nbsp;do&nbsp;not&nbsp;tell&nbsp;the&nbsp;error&nbsp;position<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">4</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$trace&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$t</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"#</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]}</span><span style="color: #DD0000">(</span><span style="color: #007700">{</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]}</span><span style="color: #DD0000">):&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]).</span><span style="color: #DD0000">'-&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]}</span><span style="color: #DD0000">()\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Displays the captured PHP error.
This method displays the error in console mode when there is
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L144">yii/console/CConsoleApplication.php#L144</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">displayException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$exception</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Displays the uncaught PHP exception.
This method displays the exception in console mode when there is
no active error handler.</p>


<div class="detailHeader" id="getCommand-detail">
getCommand()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CConsoleCommand|null <b>getCommand</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CConsoleCommand|null</td>
  <td class="paramDescCol">the currently active command.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L186">yii/console/CConsoleApplication.php#L186</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCommand</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandRunner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getCommand</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the currently running command.
This is shortcut method for <?php echo CHtml::link('CConsoleCommandRunner::getCommand()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'getCommand')); ?>.</p>


<div class="detailHeader" id="getCommandPath-detail">
getCommandPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getCommandPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that contains the command classes. Defaults to 'protected/commands'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L152">yii/console/CConsoleApplication.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCommandPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$applicationCommandPath&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'commands'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_commandPath</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$applicationCommandPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setCommandPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$applicationCommandPath</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_commandPath</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getCommandRunner-detail">
getCommandRunner()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?> <b>getCommandRunner</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?></td>
  <td class="paramDescCol">the command runner.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L175">yii/console/CConsoleApplication.php#L175</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCommandRunner</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runner</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the command runner.</p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L75">yii/console/CConsoleApplication.php#L75</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'argv'</span><span style="color: #007700">]))&nbsp;</span><span style="color: #FF8000">//&nbsp;||&nbsp;strncasecmp(php_sapi_name(),'cli',3))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">die(</span><span style="color: #DD0000">'This&nbsp;script&nbsp;must&nbsp;be&nbsp;run&nbsp;from&nbsp;the&nbsp;command&nbsp;line.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runner</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommandRunner</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commands</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commandMap</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCommands</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandPath</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application by creating the command runner.</p>


<div class="detailHeader" id="processRequest-detail">
processRequest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>processRequest</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L90">yii/console/CConsoleApplication.php#L90</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">processRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'argv'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_int</span><span style="color: #007700">(</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">(</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Processes the user request.
This method uses a console command runner to handle the particular user command.
Since version 1.1.11 this method will exit application with an exit code if one is returned by the user command.</p>


<div class="detailHeader" id="setCommand-detail">
setCommand()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCommand</b>(<?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?> $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
  <td class="paramDescCol">the currently active command.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L196">yii/console/CConsoleApplication.php#L196</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandRunner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">setCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This is shortcut method for <?php echo CHtml::link('CConsoleCommandRunner::setCommand()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'setCommand')); ?>.</p>


<div class="detailHeader" id="setCommandPath-detail">
setCommandPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCommandPath</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that contains the command classes.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleApplication.php#L164">yii/console/CConsoleApplication.php#L164</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCommandPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_commandPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_commandPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;command&nbsp;path&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


