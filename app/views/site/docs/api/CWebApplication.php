<?php
$this->pageTitle = $this->pageHeading = 'CWebApplication';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CWebApplication';
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
  <td><?php echo CHtml::link('system.web', array('/site/doc', '#' => 'system.web')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CWebApplication &raquo;
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
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php">yii/web/CWebApplication.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CWebApplication extends CApplication by providing functionalities specific to Web requests.
<br/><br/>
CWebApplication manages the controllers in MVC pattern, and provides the following additional
core application components:
<ul>
<li><?php echo CHtml::link('urlManager', array('/site/doc', 'view' => 'CWebApplication', '#' => 'urlManager')); ?>: provides URL parsing and constructing functionality;</li>
<li><?php echo CHtml::link('request', array('/site/doc', 'view' => 'CWebApplication', '#' => 'request')); ?>: encapsulates the Web request information;</li>
<li><?php echo CHtml::link('session', array('/site/doc', 'view' => 'CWebApplication', '#' => 'session')); ?>: provides the session-related functionalities;</li>
<li><?php echo CHtml::link('assetManager', array('/site/doc', 'view' => 'CWebApplication', '#' => 'assetManager')); ?>: manages the publishing of private asset files.</li>
<li><?php echo CHtml::link('user', array('/site/doc', 'view' => 'CWebApplication', '#' => 'user')); ?>: represents the user session information.</li>
<li><?php echo CHtml::link('themeManager', array('/site/doc', 'view' => 'CWebApplication', '#' => 'themeManager')); ?>: manages themes.</li>
<li><?php echo CHtml::link('authManager', array('/site/doc', 'view' => 'CWebApplication', '#' => 'authManager')); ?>: manages role-based access control (RBAC).</li>
<li><?php echo CHtml::link('clientScript', array('/site/doc', 'view' => 'CWebApplication', '#' => 'clientScript')); ?>: manages client scripts (javascripts and CSS).</li>
<li><?php echo CHtml::link('widgetFactory', array('/site/doc', 'view' => 'CWebApplication', '#' => 'widgetFactory')); ?>: creates widgets and supports widget skinning.</li>
</ul>
<br/><br/>
User requests are resolved as controller-action pairs and additional parameters.
CWebApplication creates the requested controller instance and let it to handle
the actual user request. If the user does not specify controller ID, it will
assume <?php echo CHtml::link('defaultController', array('/site/doc', 'view' => 'CWebApplication', '#' => 'defaultController')); ?> is requested (which defaults to 'site').
<br/><br/>
Controller class files must reside under the directory <?php echo CHtml::link('controllerPath', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getControllerPath')); ?>
(defaults to 'protected/controllers'). The file name and the class name must be
the same as the controller ID with the first letter in upper case and appended with 'Controller'.
For example, the controller 'article' is defined by the class 'ArticleController'
which is in the file 'protected/controllers/ArticleController.php'.</div>
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
<tr id="assetManager">
  <td><?php echo CHtml::link('assetManager', array('/site/doc', 'view' => 'CWebApplication', '#' => 'assetManager-detail')); ?></td>
  <td><?php echo CHtml::link('CAssetManager', array('/site/doc', 'view' => 'CAssetManager')); ?></td>
  <td>the asset manager component</td>
  <td>CWebApplication</td>
</tr>
<tr id="authManager">
  <td><?php echo CHtml::link('authManager', array('/site/doc', 'view' => 'CWebApplication', '#' => 'authManager-detail')); ?></td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
  <td>the authorization manager component</td>
  <td>CWebApplication</td>
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
<tr id="catchAllRequest">
  <td><?php echo CHtml::link('catchAllRequest', array('/site/doc', 'view' => 'CWebApplication', '#' => 'catchAllRequest-detail')); ?></td>
  <td>array</td>
  <td>the configuration specifying a controller which should handle
all user requests.</td>
  <td>CWebApplication</td>
</tr>
<tr class="inherited" id="charset">
  <td><?php echo CHtml::link('charset', array('/site/doc', 'view' => 'CApplication', '#' => 'charset-detail')); ?></td>
  <td>string</td>
  <td>the charset currently used for the application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr id="clientScript">
  <td><?php echo CHtml::link('clientScript', array('/site/doc', 'view' => 'CWebApplication', '#' => 'clientScript-detail')); ?></td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
  <td>Returns the client script manager.</td>
  <td>CWebApplication</td>
</tr>
<tr class="inherited" id="components">
  <td><?php echo CHtml::link('components', array('/site/doc', 'view' => 'CModule', '#' => 'components-detail')); ?></td>
  <td>array</td>
  <td>Returns the application components.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWebApplication', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>the currently active controller</td>
  <td>CWebApplication</td>
</tr>
<tr id="controllerMap">
  <td><?php echo CHtml::link('controllerMap', array('/site/doc', 'view' => 'CWebApplication', '#' => 'controllerMap-detail')); ?></td>
  <td>array</td>
  <td>mapping from controller ID to controller configurations.</td>
  <td>CWebApplication</td>
</tr>
<tr id="controllerNamespace">
  <td><?php echo CHtml::link('controllerNamespace', array('/site/doc', 'view' => 'CWebApplication', '#' => 'controllerNamespace-detail')); ?></td>
  <td>string</td>
  <td>Namespace that should be used when loading controllers.</td>
  <td>CWebApplication</td>
</tr>
<tr id="controllerPath">
  <td><?php echo CHtml::link('controllerPath', array('/site/doc', 'view' => 'CWebApplication', '#' => 'controllerPath-detail')); ?></td>
  <td>string</td>
  <td>the directory that contains the controller classes.</td>
  <td>CWebApplication</td>
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
<tr id="defaultController">
  <td><?php echo CHtml::link('defaultController', array('/site/doc', 'view' => 'CWebApplication', '#' => 'defaultController-detail')); ?></td>
  <td>string</td>
  <td>the route of the default controller, action or module.</td>
  <td>CWebApplication</td>
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
<tr id="layout">
  <td><?php echo CHtml::link('layout', array('/site/doc', 'view' => 'CWebApplication', '#' => 'layout-detail')); ?></td>
  <td>mixed</td>
  <td>the application-wide layout.</td>
  <td>CWebApplication</td>
</tr>
<tr id="layoutPath">
  <td><?php echo CHtml::link('layoutPath', array('/site/doc', 'view' => 'CWebApplication', '#' => 'layoutPath-detail')); ?></td>
  <td>string</td>
  <td>the root directory of layout files.</td>
  <td>CWebApplication</td>
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
<tr id="session">
  <td><?php echo CHtml::link('session', array('/site/doc', 'view' => 'CWebApplication', '#' => 'session-detail')); ?></td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
  <td>the session component</td>
  <td>CWebApplication</td>
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
<tr id="systemViewPath">
  <td><?php echo CHtml::link('systemViewPath', array('/site/doc', 'view' => 'CWebApplication', '#' => 'systemViewPath-detail')); ?></td>
  <td>string</td>
  <td>the root directory of system view files.</td>
  <td>CWebApplication</td>
</tr>
<tr id="theme">
  <td><?php echo CHtml::link('theme', array('/site/doc', 'view' => 'CWebApplication', '#' => 'theme-detail')); ?></td>
  <td><?php echo CHtml::link('CTheme', array('/site/doc', 'view' => 'CTheme')); ?></td>
  <td>the theme used currently.</td>
  <td>CWebApplication</td>
</tr>
<tr id="themeManager">
  <td><?php echo CHtml::link('themeManager', array('/site/doc', 'view' => 'CWebApplication', '#' => 'themeManager-detail')); ?></td>
  <td><?php echo CHtml::link('CThemeManager', array('/site/doc', 'view' => 'CThemeManager')); ?></td>
  <td>the theme manager.</td>
  <td>CWebApplication</td>
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
<tr id="user">
  <td><?php echo CHtml::link('user', array('/site/doc', 'view' => 'CWebApplication', '#' => 'user-detail')); ?></td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
  <td>the user session information</td>
  <td>CWebApplication</td>
</tr>
<tr id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CWebApplication', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>the root directory of view files.</td>
  <td>CWebApplication</td>
</tr>
<tr id="viewRenderer">
  <td><?php echo CHtml::link('viewRenderer', array('/site/doc', 'view' => 'CWebApplication', '#' => 'viewRenderer-detail')); ?></td>
  <td><?php echo CHtml::link('IViewRenderer', array('/site/doc', 'view' => 'IViewRenderer')); ?></td>
  <td>Returns the view renderer.</td>
  <td>CWebApplication</td>
</tr>
<tr id="widgetFactory">
  <td><?php echo CHtml::link('widgetFactory', array('/site/doc', 'view' => 'CWebApplication', '#' => 'widgetFactory-detail')); ?></td>
  <td><?php echo CHtml::link('IWidgetFactory', array('/site/doc', 'view' => 'IWidgetFactory')); ?></td>
  <td>Returns the widget factory.</td>
  <td>CWebApplication</td>
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
<tr id="afterControllerAction">
  <td><?php echo CHtml::link('afterControllerAction()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'afterControllerAction-detail')); ?></td>
  <td>The post-filter for controller actions.</td>
  <td>CWebApplication</td>
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
<tr id="beforeControllerAction">
  <td><?php echo CHtml::link('beforeControllerAction()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'beforeControllerAction-detail')); ?></td>
  <td>The pre-filter for controller actions.</td>
  <td>CWebApplication</td>
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
<tr id="createController">
  <td><?php echo CHtml::link('createController()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'createController-detail')); ?></td>
  <td>Creates a controller instance based on a route.</td>
  <td>CWebApplication</td>
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
<tr class="inherited" id="displayError">
  <td><?php echo CHtml::link('displayError()', array('/site/doc', 'view' => 'CApplication', '#' => 'displayError-detail')); ?></td>
  <td>Displays the captured PHP error.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr class="inherited" id="displayException">
  <td><?php echo CHtml::link('displayException()', array('/site/doc', 'view' => 'CApplication', '#' => 'displayException-detail')); ?></td>
  <td>Displays the uncaught PHP exception.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
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
<tr id="findModule">
  <td><?php echo CHtml::link('findModule()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'findModule-detail')); ?></td>
  <td>Do not call this method. This method is used internally to search for a module by its ID.</td>
  <td>CWebApplication</td>
</tr>
<tr id="getAssetManager">
  <td><?php echo CHtml::link('getAssetManager()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getAssetManager-detail')); ?></td>
  <td>Returns the asset manager component</td>
  <td>CWebApplication</td>
</tr>
<tr id="getAuthManager">
  <td><?php echo CHtml::link('getAuthManager()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getAuthManager-detail')); ?></td>
  <td>Returns the authorization manager component</td>
  <td>CWebApplication</td>
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
<tr id="getClientScript">
  <td><?php echo CHtml::link('getClientScript()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getClientScript-detail')); ?></td>
  <td>Returns the client script manager.</td>
  <td>CWebApplication</td>
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
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getController-detail')); ?></td>
  <td>Returns the currently active controller</td>
  <td>CWebApplication</td>
</tr>
<tr id="getControllerPath">
  <td><?php echo CHtml::link('getControllerPath()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getControllerPath-detail')); ?></td>
  <td>Returns the directory that contains the controller classes. Defaults to 'protected/controllers'.</td>
  <td>CWebApplication</td>
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
<tr id="getLayoutPath">
  <td><?php echo CHtml::link('getLayoutPath()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getLayoutPath-detail')); ?></td>
  <td>Returns the root directory of layout files. Defaults to 'protected/views/layouts'.</td>
  <td>CWebApplication</td>
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
The current <?php echo CHtml::link('application locale', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getLocale')); ?> will be used.</td>
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
<tr id="getSession">
  <td><?php echo CHtml::link('getSession()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getSession-detail')); ?></td>
  <td>Returns the session component</td>
  <td>CWebApplication</td>
</tr>
<tr class="inherited" id="getStatePersister">
  <td><?php echo CHtml::link('getStatePersister()', array('/site/doc', 'view' => 'CApplication', '#' => 'getStatePersister-detail')); ?></td>
  <td>Returns the state persister component.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr id="getSystemViewPath">
  <td><?php echo CHtml::link('getSystemViewPath()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getSystemViewPath-detail')); ?></td>
  <td>Returns the root directory of system view files. Defaults to 'protected/views/system'.</td>
  <td>CWebApplication</td>
</tr>
<tr id="getTheme">
  <td><?php echo CHtml::link('getTheme()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getTheme-detail')); ?></td>
  <td>Returns the theme used currently. Null if no theme is being used.</td>
  <td>CWebApplication</td>
</tr>
<tr id="getThemeManager">
  <td><?php echo CHtml::link('getThemeManager()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getThemeManager-detail')); ?></td>
  <td>Returns the theme manager.</td>
  <td>CWebApplication</td>
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
<tr id="getUser">
  <td><?php echo CHtml::link('getUser()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getUser-detail')); ?></td>
  <td>Returns the user session information</td>
  <td>CWebApplication</td>
</tr>
<tr id="getViewPath">
  <td><?php echo CHtml::link('getViewPath()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getViewPath-detail')); ?></td>
  <td>Returns the root directory of view files. Defaults to 'protected/views'.</td>
  <td>CWebApplication</td>
</tr>
<tr id="getViewRenderer">
  <td><?php echo CHtml::link('getViewRenderer()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getViewRenderer-detail')); ?></td>
  <td>Returns the view renderer.</td>
  <td>CWebApplication</td>
</tr>
<tr id="getWidgetFactory">
  <td><?php echo CHtml::link('getWidgetFactory()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getWidgetFactory-detail')); ?></td>
  <td>Returns the widget factory.</td>
  <td>CWebApplication</td>
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
  <td><?php echo CHtml::link('processRequest()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'processRequest-detail')); ?></td>
  <td>Processes the current request.</td>
  <td>CWebApplication</td>
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
<tr id="runController">
  <td><?php echo CHtml::link('runController()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'runController-detail')); ?></td>
  <td>Creates the controller and performs the specified action.</td>
  <td>CWebApplication</td>
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
<tr id="setController">
  <td><?php echo CHtml::link('setController()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setController-detail')); ?></td>
  <td>Sets the currently active controller</td>
  <td>CWebApplication</td>
</tr>
<tr id="setControllerPath">
  <td><?php echo CHtml::link('setControllerPath()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setControllerPath-detail')); ?></td>
  <td>Sets the directory that contains the controller classes.</td>
  <td>CWebApplication</td>
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
<tr id="setLayoutPath">
  <td><?php echo CHtml::link('setLayoutPath()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setLayoutPath-detail')); ?></td>
  <td>Sets the root directory of layout files.</td>
  <td>CWebApplication</td>
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
<tr id="setSystemViewPath">
  <td><?php echo CHtml::link('setSystemViewPath()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setSystemViewPath-detail')); ?></td>
  <td>Sets the root directory of system view files.</td>
  <td>CWebApplication</td>
</tr>
<tr id="setTheme">
  <td><?php echo CHtml::link('setTheme()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setTheme-detail')); ?></td>
  <td>Sets the theme name</td>
  <td>CWebApplication</td>
</tr>
<tr class="inherited" id="setTimeZone">
  <td><?php echo CHtml::link('setTimeZone()', array('/site/doc', 'view' => 'CApplication', '#' => 'setTimeZone-detail')); ?></td>
  <td>Sets the time zone used by this application.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr id="setViewPath">
  <td><?php echo CHtml::link('setViewPath()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setViewPath-detail')); ?></td>
  <td>Sets the root directory of view files.</td>
  <td>CWebApplication</td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'init-detail')); ?></td>
  <td>Initializes the application.</td>
  <td>CWebApplication</td>
</tr>
<tr class="inherited" id="initSystemHandlers">
  <td><?php echo CHtml::link('initSystemHandlers()', array('/site/doc', 'view' => 'CApplication', '#' => 'initSystemHandlers-detail')); ?></td>
  <td>Initializes the class autoloader and error handlers.</td>
  <td><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
</tr>
<tr id="parseActionParams">
  <td><?php echo CHtml::link('parseActionParams()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'parseActionParams-detail')); ?></td>
  <td>Parses a path info into an action ID and GET variables.</td>
  <td>CWebApplication</td>
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
  <td><?php echo CHtml::link('registerCoreComponents()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'registerCoreComponents-detail')); ?></td>
  <td>Registers the core application components.</td>
  <td>CWebApplication</td>
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
<div class="detailHeader" id="assetManager-detail">
assetManager<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CAssetManager', array('/site/doc', 'view' => 'CAssetManager')); ?> <?php echo CHtml::link('<b>getAssetManager</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getAssetManager')); ?>()</div>

<p>the asset manager component</p>


<div class="detailHeader" id="authManager-detail">
authManager<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?> <?php echo CHtml::link('<b>getAuthManager</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getAuthManager')); ?>()</div>

<p>the authorization manager component</p>


<div class="detailHeader" id="catchAllRequest-detail">
catchAllRequest<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$catchAllRequest</b>;</div>

<p>the configuration specifying a controller which should handle
all user requests. This is mainly used when the application is in maintenance mode
and we should use a controller to handle all incoming requests.
The configuration specifies the controller route (the first element)
and GET parameters (the rest name-value pairs). For example,
<pre>
array(
    'offline/notice',
    'param1'=&gt;'value1',
    'param2'=&gt;'value2',
)
</pre>
Defaults to null, meaning catch-all is not effective.</p>


<div class="detailHeader" id="clientScript-detail">
clientScript<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?> <?php echo CHtml::link('<b>getClientScript</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getClientScript')); ?>()</div>

<p>Returns the client script manager.</p>


<div class="detailHeader" id="controller-detail">
controller<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> <?php echo CHtml::link('<b>getController</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getController')); ?>()<br/>public void <?php echo CHtml::link('<b>setController</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setController')); ?>(<?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> $value)</div>

<p>the currently active controller</p>


<div class="detailHeader" id="controllerMap-detail">
controllerMap<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$controllerMap</b>;</div>

<p>mapping from controller ID to controller configurations.
Each name-value pair specifies the configuration for a single controller.
A controller configuration can be either a string or an array.
If the former, the string should be the class name or
<?php echo CHtml::link('class path alias', array('/site/doc', 'view' => 'YiiBase', '#' => 'getPathOfAlias')); ?> of the controller.
If the latter, the array must contain a 'class' element which specifies
the controller's class name or <?php echo CHtml::link('class path alias', array('/site/doc', 'view' => 'YiiBase', '#' => 'getPathOfAlias')); ?>.
The rest name-value pairs in the array are used to initialize
the corresponding controller properties. For example,
<pre>
array(
  'post'=&gt;array(
     'class'=&gt;'path.to.PostController',
     'pageTitle'=&gt;'something new',
  ),
  'user'=&gt;'path.to.UserController',
)
</pre>
<br/><br/>
Note, when processing an incoming request, the controller map will first be
checked to see if the request can be handled by one of the controllers in the map.
If not, a controller will be searched for under the <?php echo CHtml::link('default controller path', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getControllerPath')); ?>.</p>


<div class="detailHeader" id="controllerNamespace-detail">
controllerNamespace<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public string <b>$controllerNamespace</b>;</div>

<p>Namespace that should be used when loading controllers.
Default is to use global namespace.</p>


<div class="detailHeader" id="controllerPath-detail">
controllerPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getControllerPath</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getControllerPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setControllerPath</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setControllerPath')); ?>(string $value)</div>

<p>the directory that contains the controller classes. Defaults to 'protected/controllers'.</p>


<div class="detailHeader" id="defaultController-detail">
defaultController<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$defaultController</b>;</div>

<p>the route of the default controller, action or module. Defaults to 'site'.</p>


<div class="detailHeader" id="layout-detail">
layout<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$layout</b>;</div>

<p>the application-wide layout. Defaults to 'main' (relative to <?php echo CHtml::link('layoutPath', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getLayoutPath')); ?>).
If this is false, then no layout will be used.</p>


<div class="detailHeader" id="layoutPath-detail">
layoutPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLayoutPath</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getLayoutPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setLayoutPath</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setLayoutPath')); ?>(string $path)</div>

<p>the root directory of layout files. Defaults to 'protected/views/layouts'.</p>


<div class="detailHeader" id="session-detail">
session<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?> <?php echo CHtml::link('<b>getSession</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getSession')); ?>()</div>

<p>the session component</p>


<div class="detailHeader" id="systemViewPath-detail">
systemViewPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getSystemViewPath</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getSystemViewPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setSystemViewPath</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setSystemViewPath')); ?>(string $path)</div>

<p>the root directory of system view files. Defaults to 'protected/views/system'.</p>


<div class="detailHeader" id="theme-detail">
theme<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CTheme', array('/site/doc', 'view' => 'CTheme')); ?> <?php echo CHtml::link('<b>getTheme</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getTheme')); ?>()<br/>public void <?php echo CHtml::link('<b>setTheme</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setTheme')); ?>(string $value)</div>

<p>the theme used currently. Null if no theme is being used.</p>


<div class="detailHeader" id="themeManager-detail">
themeManager<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CThemeManager', array('/site/doc', 'view' => 'CThemeManager')); ?> <?php echo CHtml::link('<b>getThemeManager</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getThemeManager')); ?>()</div>

<p>the theme manager.</p>


<div class="detailHeader" id="user-detail">
user<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?> <?php echo CHtml::link('<b>getUser</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getUser')); ?>()</div>

<p>the user session information</p>


<div class="detailHeader" id="viewPath-detail">
viewPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getViewPath</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getViewPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setViewPath</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setViewPath')); ?>(string $path)</div>

<p>the root directory of view files. Defaults to 'protected/views'.</p>


<div class="detailHeader" id="viewRenderer-detail">
viewRenderer<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('IViewRenderer', array('/site/doc', 'view' => 'IViewRenderer')); ?> <?php echo CHtml::link('<b>getViewRenderer</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getViewRenderer')); ?>()</div>

<p>Returns the view renderer.
If this component is registered and enabled, the default
view rendering logic defined in <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> will
be replaced by this renderer.</p>


<div class="detailHeader" id="widgetFactory-detail">
widgetFactory<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1)
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('IWidgetFactory', array('/site/doc', 'view' => 'IWidgetFactory')); ?> <?php echo CHtml::link('<b>getWidgetFactory</b>', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getWidgetFactory')); ?>()</div>

<p>Returns the widget factory.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="afterControllerAction-detail">
afterControllerAction()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>afterControllerAction</b>(<?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> $controller, <?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?> $action)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$controller</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td class="paramDescCol">the controller</td>
</tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
  <td class="paramDescCol">the action</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L514">yii/web/CWebApplication.php#L514</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterControllerAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">)<br />{<br />}</span>
</span>
</code></div>
</div>
<p>The post-filter for controller actions.
This method is invoked after the currently requested controller action and all its filters
are executed. You may override this method with logic that needs to be done
after all controller actions.</p>


<div class="detailHeader" id="beforeControllerAction-detail">
beforeControllerAction()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>beforeControllerAction</b>(<?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> $controller, <?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?> $action)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$controller</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td class="paramDescCol">the controller</td>
</tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
  <td class="paramDescCol">the action</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the action should be executed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L501">yii/web/CWebApplication.php#L501</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeControllerAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>The pre-filter for controller actions.
This method is invoked before the currently requested controller action and all its filters
are executed. You may override this method with logic that needs to be done
before all controller actions.</p>


<div class="detailHeader" id="createController-detail">
createController()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>createController</b>(string $route, <?php echo CHtml::link('CWebModule', array('/site/doc', 'view' => 'CWebModule')); ?> $owner=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$route</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the route of the request.</td>
</tr>
<tr>
  <td class="paramNameCol">$owner</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebModule', array('/site/doc', 'view' => 'CWebModule')); ?></td>
  <td class="paramDescCol">the module that the new controller will belong to. Defaults to null, meaning the application
instance is the owner.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the controller instance and the action ID. Null if the controller class does not exist or the route is invalid.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L310">yii/web/CWebApplication.php#L310</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createController</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$owner</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$owner</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$owner</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$route</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">))===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">=</span><span style="color: #0000BB">$owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultController</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$caseSensitive</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrlManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">caseSensitive</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">.=</span><span style="color: #DD0000">'/'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;while((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^\w+$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$id</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$caseSensitive</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">=(string)</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$basePath</span><span style="color: #007700">))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;first&nbsp;segment<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controllerMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controllerMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">],</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$owner</span><span style="color: #007700">===</span><span style="color: #0000BB">$this</span><span style="color: #007700">?</span><span style="color: #0000BB">null</span><span style="color: #007700">:</span><span style="color: #0000BB">$owner</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parseActionParams</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$module</span><span style="color: #007700">=</span><span style="color: #0000BB">$owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModule</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createController</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$module</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$basePath</span><span style="color: #007700">=</span><span style="color: #0000BB">$owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getControllerPath</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controllerID</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controllerID</span><span style="color: #007700">.=</span><span style="color: #DD0000">'/'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">).</span><span style="color: #DD0000">'Controller'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$basePath</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$className</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controllerNamespace</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">$owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controllerNamespace</span><span style="color: #007700">.</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">.</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require(</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_subclass_of</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #DD0000">'CController'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">(</span><span style="color: #0000BB">$controllerID</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$owner</span><span style="color: #007700">===</span><span style="color: #0000BB">$this</span><span style="color: #007700">?</span><span style="color: #0000BB">null</span><span style="color: #007700">:</span><span style="color: #0000BB">$owner</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parseActionParams</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controllerID</span><span style="color: #007700">.=</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$basePath</span><span style="color: #007700">.=</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Creates a controller instance based on a route.
The route should contain the controller ID and the action ID.
It may also contain additional GET variables. All these must be concatenated together with slashes.
<br/><br/>
This method will attempt to create a controller in the following order:
<ol>
<li>If the first segment is found in <?php echo CHtml::link('controllerMap', array('/site/doc', 'view' => 'CWebApplication', '#' => 'controllerMap')); ?>, the corresponding
controller configuration will be used to create the controller;</li>
<li>If the first segment is found to be a module ID, the corresponding module
will be used to create the controller;</li>
<li>Otherwise, it will search under the <?php echo CHtml::link('controllerPath', array('/site/doc', 'view' => 'CWebApplication', '#' => 'controllerPath')); ?> to create
the corresponding controller. For example, if the route is "admin/user/create",
then the controller will be created using the class file "protected/controllers/admin/UserController.php".</li>
</ol></p>


<div class="detailHeader" id="findModule-detail">
findModule()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CWebModule', array('/site/doc', 'view' => 'CWebModule')); ?> <b>findModule</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">module ID</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebModule', array('/site/doc', 'view' => 'CWebModule')); ?></td>
  <td class="paramDescCol">the module that has the specified ID. Null if no module is found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L523">yii/web/CWebApplication.php#L523</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findModule</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$controller</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$module</span><span style="color: #007700">=</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModule</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$m</span><span style="color: #007700">=</span><span style="color: #0000BB">$module</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModule</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$m</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;while((</span><span style="color: #0000BB">$module</span><span style="color: #007700">=</span><span style="color: #0000BB">$module</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParentModule</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$m</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModule</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$m</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Do not call this method. This method is used internally to search for a module by its ID.</p>


<div class="detailHeader" id="getAssetManager-detail">
getAssetManager()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAssetManager', array('/site/doc', 'view' => 'CAssetManager')); ?> <b>getAssetManager</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAssetManager', array('/site/doc', 'view' => 'CAssetManager')); ?></td>
  <td class="paramDescCol">the asset manager component</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L191">yii/web/CWebApplication.php#L191</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAssetManager</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'assetManager'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getAuthManager-detail">
getAuthManager()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?> <b>getAuthManager</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
  <td class="paramDescCol">the authorization manager component</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L183">yii/web/CWebApplication.php#L183</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthManager</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'authManager'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getClientScript-detail">
getClientScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?> <b>getClientScript</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
  <td class="paramDescCol">the client script manager</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L228">yii/web/CWebApplication.php#L228</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the client script manager.</p>


<div class="detailHeader" id="getController-detail">
getController()
<span class="detailHeaderTag">
method
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
  <td class="paramDescCol">the currently active controller</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L391">yii/web/CWebApplication.php#L391</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getController</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controller</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getControllerPath-detail">
getControllerPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getControllerPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that contains the controller classes. Defaults to 'protected/controllers'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L407">yii/web/CWebApplication.php#L407</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getControllerPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controllerPath</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controllerPath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controllerPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'controllers'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getLayoutPath-detail">
getLayoutPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLayoutPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory of layout files. Defaults to 'protected/views/layouts'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L473">yii/web/CWebApplication.php#L473</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLayoutPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getViewPath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'layouts'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSession-detail">
getSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?> <b>getSession</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
  <td class="paramDescCol">the session component</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L199">yii/web/CWebApplication.php#L199</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSession</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'session'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSystemViewPath-detail">
getSystemViewPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSystemViewPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory of system view files. Defaults to 'protected/views/system'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L451">yii/web/CWebApplication.php#L451</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSystemViewPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_systemViewPath</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_systemViewPath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_systemViewPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getViewPath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'system'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getTheme-detail">
getTheme()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CTheme', array('/site/doc', 'view' => 'CTheme')); ?> <b>getTheme</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CTheme', array('/site/doc', 'view' => 'CTheme')); ?></td>
  <td class="paramDescCol">the theme used currently. Null if no theme is being used.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L254">yii/web/CWebApplication.php#L254</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTheme</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_theme</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_theme</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getThemeManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getTheme</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_theme</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_theme</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getThemeManager-detail">
getThemeManager()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CThemeManager', array('/site/doc', 'view' => 'CThemeManager')); ?> <b>getThemeManager</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CThemeManager', array('/site/doc', 'view' => 'CThemeManager')); ?></td>
  <td class="paramDescCol">the theme manager.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L246">yii/web/CWebApplication.php#L246</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getThemeManager</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'themeManager'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getUser-detail">
getUser()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?> <b>getUser</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
  <td class="paramDescCol">the user session information</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L207">yii/web/CWebApplication.php#L207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUser</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'user'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getViewPath-detail">
getViewPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getViewPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory of view files. Defaults to 'protected/views'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L429">yii/web/CWebApplication.php#L429</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getViewPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'views'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getViewRenderer-detail">
getViewRenderer()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('IViewRenderer', array('/site/doc', 'view' => 'IViewRenderer')); ?> <b>getViewRenderer</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IViewRenderer', array('/site/doc', 'view' => 'IViewRenderer')); ?></td>
  <td class="paramDescCol">the view renderer.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L219">yii/web/CWebApplication.php#L219</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getViewRenderer</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'viewRenderer'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the view renderer.
If this component is registered and enabled, the default
view rendering logic defined in <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> will
be replaced by this renderer.</p>


<div class="detailHeader" id="getWidgetFactory-detail">
getWidgetFactory()
<span class="detailHeaderTag">
method
(available since v1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('IWidgetFactory', array('/site/doc', 'view' => 'IWidgetFactory')); ?> <b>getWidgetFactory</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IWidgetFactory', array('/site/doc', 'view' => 'IWidgetFactory')); ?></td>
  <td class="paramDescCol">the widget factory</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L238">yii/web/CWebApplication.php#L238</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getWidgetFactory</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'widgetFactory'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the widget factory.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L541">yii/web/CWebApplication.php#L541</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;preload&nbsp;'request'&nbsp;so&nbsp;that&nbsp;it&nbsp;has&nbsp;chance&nbsp;to&nbsp;respond&nbsp;to&nbsp;onBeginRequest&nbsp;event.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application.
This method overrides the parent implementation by preloading the 'request' component.</p>


<div class="detailHeader" id="parseActionParams-detail">
parseActionParams()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>parseActionParams</b>(string $pathInfo)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pathInfo</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">path info</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">action ID</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L375">yii/web/CWebApplication.php#L375</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">parseActionParams</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$manager</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrlManager</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parsePathInfo</span><span style="color: #007700">((string)</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$actionID</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$manager</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">caseSensitive&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$actionID&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$actionID</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Parses a path info into an action ID and GET variables.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L131">yii/web/CWebApplication.php#L131</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">processRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">catchAllRequest</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">catchAllRequest</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">catchAllRequest</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">catchAllRequest</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrlManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">parseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">runController</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Processes the current request.
It first resolves the request into controller and action,
and then creates the controller to perform the action.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L149">yii/web/CWebApplication.php#L149</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCoreComponents</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">registerCoreComponents</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$components</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'session'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CHttpSession'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'assetManager'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CAssetManager'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'user'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CWebUser'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'themeManager'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CThemeManager'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'authManager'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CPhpAuthManager'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CClientScript'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'widgetFactory'</span><span style="color: #007700">=&gt;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CWidgetFactory'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setComponents</span><span style="color: #007700">(</span><span style="color: #0000BB">$components</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the core application components.
This method overrides the parent implementation by registering additional core components.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setComponents', array('/site/doc', 'view' => 'CWebApplication', '#' => 'setComponents')); ?></li>
</ul>
</div>

<div class="detailHeader" id="runController-detail">
runController()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>runController</b>(string $route)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$route</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the route of the current request. See <?php echo CHtml::link('createController', array('/site/doc', 'view' => 'CWebApplication', '#' => 'createController')); ?> for more details.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L274">yii/web/CWebApplication.php#L274</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">runController</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$ca</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createController</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$actionID</span><span style="color: #007700">)=</span><span style="color: #0000BB">$ca</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oldController</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controller</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controller</span><span style="color: #007700">=</span><span style="color: #0000BB">$controller</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">$actionID</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controller</span><span style="color: #007700">=</span><span style="color: #0000BB">$oldController</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">404</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unable&nbsp;to&nbsp;resolve&nbsp;the&nbsp;request&nbsp;"{route}".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{route}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$route</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultController</span><span style="color: #007700">:</span><span style="color: #0000BB">$route</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Creates the controller and performs the specified action.</p>


<div class="detailHeader" id="setController-detail">
setController()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setController</b>(<?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td class="paramDescCol">the currently active controller</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L399">yii/web/CWebApplication.php#L399</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setController</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controller</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setControllerPath-detail">
setControllerPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setControllerPath</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory that contains the controller classes.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L419">yii/web/CWebApplication.php#L419</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setControllerPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controllerPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controllerPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;controller&nbsp;path&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setLayoutPath-detail">
setLayoutPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setLayoutPath</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory of layout files.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L485">yii/web/CWebApplication.php#L485</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setLayoutPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;layout&nbsp;path&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setSystemViewPath-detail">
setSystemViewPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSystemViewPath</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory of system view files.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L463">yii/web/CWebApplication.php#L463</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSystemViewPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_systemViewPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_systemViewPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;system&nbsp;view&nbsp;path&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setTheme-detail">
setTheme()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setTheme</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the theme name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L264">yii/web/CWebApplication.php#L264</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setTheme</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_theme</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setViewPath-detail">
setViewPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setViewPath</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory of view files.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CWebApplication.php#L441">yii/web/CWebApplication.php#L441</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setViewPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;view&nbsp;path&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


