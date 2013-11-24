<?php
$this->pageTitle = $this->pageHeading = 'CWebModule';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CWebModule';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a></div>

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
  <td>class CWebModule &raquo;
<?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php">yii\web\CWebModule.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CWebModule represents an application module.
<br/><br/>
An application module may be considered as a self-contained sub-application
that has its own controllers, models and views and can be reused in a different
project as a whole. Controllers inside a module must be accessed with routes
that are prefixed with the module ID.</div>
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
  <td><?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CModule', '#' => 'basePath-detail')); ?></td>
  <td>string</td>
  <td>Returns the root directory of the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CModule', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="components">
  <td><?php echo CHtml::link('components', array('/site/doc', 'view' => 'CModule', '#' => 'components-detail')); ?></td>
  <td>array</td>
  <td>Returns the application components.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="controllerMap">
  <td><?php echo CHtml::link('controllerMap', array('/site/doc', 'view' => 'CWebModule', '#' => 'controllerMap-detail')); ?></td>
  <td>array</td>
  <td>mapping from controller ID to controller configurations.</td>
  <td>CWebModule</td>
</tr>
<tr id="controllerNamespace">
  <td><?php echo CHtml::link('controllerNamespace', array('/site/doc', 'view' => 'CWebModule', '#' => 'controllerNamespace-detail')); ?></td>
  <td>string</td>
  <td>Namespace that should be used when loading controllers.</td>
  <td>CWebModule</td>
</tr>
<tr id="controllerPath">
  <td><?php echo CHtml::link('controllerPath', array('/site/doc', 'view' => 'CWebModule', '#' => 'controllerPath-detail')); ?></td>
  <td>string</td>
  <td>the directory that contains the controller classes.</td>
  <td>CWebModule</td>
</tr>
<tr id="defaultController">
  <td><?php echo CHtml::link('defaultController', array('/site/doc', 'view' => 'CWebModule', '#' => 'defaultController-detail')); ?></td>
  <td>string</td>
  <td>the ID of the default controller for this module.</td>
  <td>CWebModule</td>
</tr>
<tr id="description">
  <td><?php echo CHtml::link('description', array('/site/doc', 'view' => 'CWebModule', '#' => 'description-detail')); ?></td>
  <td>string</td>
  <td>Returns the description of this module.</td>
  <td>CWebModule</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CModule', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the module ID.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="layout">
  <td><?php echo CHtml::link('layout', array('/site/doc', 'view' => 'CWebModule', '#' => 'layout-detail')); ?></td>
  <td>mixed</td>
  <td>the layout that is shared by the controllers inside this module.</td>
  <td>CWebModule</td>
</tr>
<tr id="layoutPath">
  <td><?php echo CHtml::link('layoutPath', array('/site/doc', 'view' => 'CWebModule', '#' => 'layoutPath-detail')); ?></td>
  <td>string</td>
  <td>the root directory of layout files.</td>
  <td>CWebModule</td>
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
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CWebModule', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>Returns the name of this module.</td>
  <td>CWebModule</td>
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
<tr id="version">
  <td><?php echo CHtml::link('version', array('/site/doc', 'view' => 'CWebModule', '#' => 'version-detail')); ?></td>
  <td>string</td>
  <td>Returns the version of this module.</td>
  <td>CWebModule</td>
</tr>
<tr id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CWebModule', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>the root directory of view files.</td>
  <td>CWebModule</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CModule', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
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
  <td><?php echo CHtml::link('afterControllerAction()', array('/site/doc', 'view' => 'CWebModule', '#' => 'afterControllerAction-detail')); ?></td>
  <td>The post-filter for controller actions.</td>
  <td>CWebModule</td>
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
  <td><?php echo CHtml::link('beforeControllerAction()', array('/site/doc', 'view' => 'CWebModule', '#' => 'beforeControllerAction-detail')); ?></td>
  <td>The pre-filter for controller actions.</td>
  <td>CWebModule</td>
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
<tr class="inherited" id="configure">
  <td><?php echo CHtml::link('configure()', array('/site/doc', 'view' => 'CModule', '#' => 'configure-detail')); ?></td>
  <td>Configures the module with the specified configuration.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
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
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getBasePath">
  <td><?php echo CHtml::link('getBasePath()', array('/site/doc', 'view' => 'CModule', '#' => 'getBasePath-detail')); ?></td>
  <td>Returns the root directory of the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
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
<tr id="getControllerPath">
  <td><?php echo CHtml::link('getControllerPath()', array('/site/doc', 'view' => 'CWebModule', '#' => 'getControllerPath-detail')); ?></td>
  <td>Returns the directory that contains the controller classes. Defaults to 'moduleDir/controllers' where
moduleDir is the directory containing the module class.</td>
  <td>CWebModule</td>
</tr>
<tr id="getDescription">
  <td><?php echo CHtml::link('getDescription()', array('/site/doc', 'view' => 'CWebModule', '#' => 'getDescription-detail')); ?></td>
  <td>Returns the description of this module.</td>
  <td>CWebModule</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CModule', '#' => 'getId-detail')); ?></td>
  <td>Returns the module ID.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="getLayoutPath">
  <td><?php echo CHtml::link('getLayoutPath()', array('/site/doc', 'view' => 'CWebModule', '#' => 'getLayoutPath-detail')); ?></td>
  <td>Returns the root directory of layout files. Defaults to 'moduleDir/views/layouts' where
moduleDir is the directory containing the module class.</td>
  <td>CWebModule</td>
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
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'CWebModule', '#' => 'getName-detail')); ?></td>
  <td>Returns the name of this module.</td>
  <td>CWebModule</td>
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
<tr id="getVersion">
  <td><?php echo CHtml::link('getVersion()', array('/site/doc', 'view' => 'CWebModule', '#' => 'getVersion-detail')); ?></td>
  <td>Returns the version of this module.</td>
  <td>CWebModule</td>
</tr>
<tr id="getViewPath">
  <td><?php echo CHtml::link('getViewPath()', array('/site/doc', 'view' => 'CWebModule', '#' => 'getViewPath-detail')); ?></td>
  <td>Returns the root directory of view files. Defaults to 'moduleDir/views' where
moduleDir is the directory containing the module class.</td>
  <td>CWebModule</td>
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
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="setAliases">
  <td><?php echo CHtml::link('setAliases()', array('/site/doc', 'view' => 'CModule', '#' => 'setAliases-detail')); ?></td>
  <td>Defines the root aliases.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="setBasePath">
  <td><?php echo CHtml::link('setBasePath()', array('/site/doc', 'view' => 'CModule', '#' => 'setBasePath-detail')); ?></td>
  <td>Sets the root directory of the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
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
<tr id="setControllerPath">
  <td><?php echo CHtml::link('setControllerPath()', array('/site/doc', 'view' => 'CWebModule', '#' => 'setControllerPath-detail')); ?></td>
  <td>Sets the directory that contains the controller classes.</td>
  <td>CWebModule</td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CModule', '#' => 'setId-detail')); ?></td>
  <td>Sets the module ID.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr class="inherited" id="setImport">
  <td><?php echo CHtml::link('setImport()', array('/site/doc', 'view' => 'CModule', '#' => 'setImport-detail')); ?></td>
  <td>Sets the aliases that are used in the module.</td>
  <td><?php echo CHtml::link('CModule', array('/site/doc', 'view' => 'CModule')); ?></td>
</tr>
<tr id="setLayoutPath">
  <td><?php echo CHtml::link('setLayoutPath()', array('/site/doc', 'view' => 'CWebModule', '#' => 'setLayoutPath-detail')); ?></td>
  <td>Sets the root directory of layout files.</td>
  <td>CWebModule</td>
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
<tr id="setViewPath">
  <td><?php echo CHtml::link('setViewPath()', array('/site/doc', 'view' => 'CWebModule', '#' => 'setViewPath-detail')); ?></td>
  <td>Sets the root directory of view files.</td>
  <td>CWebModule</td>
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
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="controllerMap-detail">
controllerMap<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$controllerMap</b>;</div>

<p>mapping from controller ID to controller configurations.
Pleaser refer to <?php echo CHtml::link('CWebApplication::controllerMap', array('/site/doc', 'view' => 'CWebApplication', '#' => 'controllerMap')); ?> for more details.</p>


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
public string <?php echo CHtml::link('<b>getControllerPath</b>', array('/site/doc', 'view' => 'CWebModule', '#' => 'getControllerPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setControllerPath</b>', array('/site/doc', 'view' => 'CWebModule', '#' => 'setControllerPath')); ?>(string $value)</div>

<p>the directory that contains the controller classes. Defaults to 'moduleDir/controllers' where
moduleDir is the directory containing the module class.</p>


<div class="detailHeader" id="defaultController-detail">
defaultController<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$defaultController</b>;</div>

<p>the ID of the default controller for this module. Defaults to 'default'.</p>


<div class="detailHeader" id="description-detail">
description<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getDescription</b>', array('/site/doc', 'view' => 'CWebModule', '#' => 'getDescription')); ?>()</div>

<p>Returns the description of this module.
The default implementation returns an empty string.
You may override this method to customize the description of this module.</p>


<div class="detailHeader" id="layout-detail">
layout<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$layout</b>;</div>

<p>the layout that is shared by the controllers inside this module.
If a controller has explicitly declared its own <?php echo CHtml::link('layout', array('/site/doc', 'view' => 'CController', '#' => 'layout')); ?>,
this property will be ignored.
If this is null (default), the application's layout or the parent module's layout (if available)
will be used. If this is false, then no layout will be used.</p>


<div class="detailHeader" id="layoutPath-detail">
layoutPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLayoutPath</b>', array('/site/doc', 'view' => 'CWebModule', '#' => 'getLayoutPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setLayoutPath</b>', array('/site/doc', 'view' => 'CWebModule', '#' => 'setLayoutPath')); ?>(string $path)</div>

<p>the root directory of layout files. Defaults to 'moduleDir/views/layouts' where
moduleDir is the directory containing the module class.</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getName</b>', array('/site/doc', 'view' => 'CWebModule', '#' => 'getName')); ?>()</div>

<p>Returns the name of this module.
The default implementation simply returns <?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWebModule', '#' => 'id')); ?>.
You may override this method to customize the name of this module.</p>


<div class="detailHeader" id="version-detail">
version<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getVersion</b>', array('/site/doc', 'view' => 'CWebModule', '#' => 'getVersion')); ?>()</div>

<p>Returns the version of this module.
The default implementation returns '1.0'.
You may override this method to customize the version of this module.</p>


<div class="detailHeader" id="viewPath-detail">
viewPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getViewPath</b>', array('/site/doc', 'view' => 'CWebModule', '#' => 'getViewPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setViewPath</b>', array('/site/doc', 'view' => 'CWebModule', '#' => 'setViewPath')); ?>(string $path)</div>

<p>the root directory of view files. Defaults to 'moduleDir/views' where
moduleDir is the directory containing the module class.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L196">yii\web\CWebModule.php#L196</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterControllerAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$parent</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParentModule</span><span style="color: #007700">())===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parent</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterControllerAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>The post-filter for controller actions.
This method is invoked after the currently requested controller action and all its filters
are executed. If you override this method, make sure you call the parent implementation at the end.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L182">yii\web\CWebModule.php#L182</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeControllerAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$parent</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParentModule</span><span style="color: #007700">())===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parent</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$parent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeControllerAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>The pre-filter for controller actions.
This method is invoked before the currently requested controller action and all its filters
are executed. You may override this method in the following way:
<pre>
if(parent::beforeControllerAction($controller,$action))
{
    // your code
    return true;
}
else
    return false;
</pre></p>


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
  <td class="paramDescCol">the directory that contains the controller classes. Defaults to 'moduleDir/controllers' where
moduleDir is the directory containing the module class.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L100">yii\web\CWebModule.php#L100</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getControllerPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controllerPath</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controllerPath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_controllerPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'controllers'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getDescription-detail">
getDescription()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getDescription</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the description of this module.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L80">yii\web\CWebModule.php#L80</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDescription</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the description of this module.
The default implementation returns an empty string.
You may override this method to customize the description of this module.</p>


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
  <td class="paramDescCol">the root directory of layout files. Defaults to 'moduleDir/views/layouts' where
moduleDir is the directory containing the module class.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L146">yii\web\CWebModule.php#L146</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLayoutPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getViewPath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'layouts'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getName-detail">
getName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of this module.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L69">yii\web\CWebModule.php#L69</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Returns the name of this module.
The default implementation simply returns <?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWebModule', '#' => 'id')); ?>.
You may override this method to customize the name of this module.</p>


<div class="detailHeader" id="getVersion-detail">
getVersion()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getVersion</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the version of this module.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L91">yii\web\CWebModule.php#L91</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getVersion</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the version of this module.
The default implementation returns '1.0'.
You may override this method to customize the version of this module.</p>


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
  <td class="paramDescCol">the root directory of view files. Defaults to 'moduleDir/views' where
moduleDir is the directory containing the module class.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L123">yii\web\CWebModule.php#L123</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getViewPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'views'</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L112">yii\web\CWebModule.php#L112</a> (<b><a href="#" class="show">show</a></b>)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L158">yii\web\CWebModule.php#L158</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setLayoutPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_layoutPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;layout&nbsp;path&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)));<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWebModule.php#L135">yii\web\CWebModule.php#L135</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setViewPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;view&nbsp;path&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


