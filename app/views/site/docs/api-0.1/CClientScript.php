<?php
$this->pageTitle = $this->pageHeading = 'CClientScript';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CClientScript';
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
  <td>class CClientScript &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdClientScript', array('/site/doc', 'view' => 'YdClientScript')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php">yii/web/CClientScript.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CClientScript manages JavaScript and CSS stylesheets for views.</div>
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
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="corePackages">
  <td><?php echo CHtml::link('corePackages', array('/site/doc', 'view' => 'CClientScript', '#' => 'corePackages-detail')); ?></td>
  <td>array</td>
  <td>list of core script packages (name=>package spec).</td>
  <td>CClientScript</td>
</tr>
<tr id="coreScriptPosition">
  <td><?php echo CHtml::link('coreScriptPosition', array('/site/doc', 'view' => 'CClientScript', '#' => 'coreScriptPosition-detail')); ?></td>
  <td>integer</td>
  <td>Where the scripts registered using <?php echo CHtml::link('registerCoreScript', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerCoreScript')); ?> or <?php echo CHtml::link('registerPackage', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerPackage')); ?>
will be inserted in the page.</td>
  <td>CClientScript</td>
</tr>
<tr id="coreScriptUrl">
  <td><?php echo CHtml::link('coreScriptUrl', array('/site/doc', 'view' => 'CClientScript', '#' => 'coreScriptUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the base URL of all core javascript files.</td>
  <td>CClientScript</td>
</tr>
<tr id="defaultScriptFilePosition">
  <td><?php echo CHtml::link('defaultScriptFilePosition', array('/site/doc', 'view' => 'CClientScript', '#' => 'defaultScriptFilePosition-detail')); ?></td>
  <td>integer</td>
  <td>Where the scripts registered using <?php echo CHtml::link('registerScriptFile', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerScriptFile')); ?> will be inserted in the page.</td>
  <td>CClientScript</td>
</tr>
<tr id="defaultScriptPosition">
  <td><?php echo CHtml::link('defaultScriptPosition', array('/site/doc', 'view' => 'CClientScript', '#' => 'defaultScriptPosition-detail')); ?></td>
  <td>integer</td>
  <td>Where the scripts registered using <?php echo CHtml::link('registerScript', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerScript')); ?> will be inserted in the page.</td>
  <td>CClientScript</td>
</tr>
<tr id="enableJavaScript">
  <td><?php echo CHtml::link('enableJavaScript', array('/site/doc', 'view' => 'CClientScript', '#' => 'enableJavaScript-detail')); ?></td>
  <td>boolean</td>
  <td>whether JavaScript should be enabled.</td>
  <td>CClientScript</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="packages">
  <td><?php echo CHtml::link('packages', array('/site/doc', 'view' => 'CClientScript', '#' => 'packages-detail')); ?></td>
  <td>array</td>
  <td>list of custom script packages (name=>package spec).</td>
  <td>CClientScript</td>
</tr>
<tr id="scriptMap">
  <td><?php echo CHtml::link('scriptMap', array('/site/doc', 'view' => 'CClientScript', '#' => 'scriptMap-detail')); ?></td>
  <td>array</td>
  <td>the mapping between script file names and the corresponding script URLs.</td>
  <td>CClientScript</td>
</tr>
<tr id="scripts">
  <td><?php echo CHtml::link('scripts', array('/site/doc', 'view' => 'CClientScript', '#' => 'scripts-detail')); ?></td>
  <td>array</td>
  <td>the registered JavaScript code blocks (position, key => code)</td>
  <td>CClientScript</td>
</tr>
</table>
</div>
<div class="summary docProperty">
<h2>Protected Properties</h2>

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
<tr id="coreScripts">
  <td><?php echo CHtml::link('coreScripts', array('/site/doc', 'view' => 'CClientScript', '#' => 'coreScripts-detail')); ?></td>
  <td>array</td>
  <td>the registered script packages (name => package spec)</td>
  <td>CClientScript</td>
</tr>
<tr id="css">
  <td><?php echo CHtml::link('css', array('/site/doc', 'view' => 'CClientScript', '#' => 'css-detail')); ?></td>
  <td>array</td>
  <td>the registered css code blocks (key => array(CSS code, media type)).</td>
  <td>CClientScript</td>
</tr>
<tr id="cssFiles">
  <td><?php echo CHtml::link('cssFiles', array('/site/doc', 'view' => 'CClientScript', '#' => 'cssFiles-detail')); ?></td>
  <td>array</td>
  <td>the registered CSS files (CSS URL=>media type).</td>
  <td>CClientScript</td>
</tr>
<tr id="hasScripts">
  <td><?php echo CHtml::link('hasScripts', array('/site/doc', 'view' => 'CClientScript', '#' => 'hasScripts-detail')); ?></td>
  <td>boolean</td>
  <td>whether there are any javascript or css to be rendered.</td>
  <td>CClientScript</td>
</tr>
<tr id="linkTags">
  <td><?php echo CHtml::link('linkTags', array('/site/doc', 'view' => 'CClientScript', '#' => 'linkTags-detail')); ?></td>
  <td>array</td>
  <td>the registered head link tags.</td>
  <td>CClientScript</td>
</tr>
<tr id="metaTags">
  <td><?php echo CHtml::link('metaTags', array('/site/doc', 'view' => 'CClientScript', '#' => 'metaTags-detail')); ?></td>
  <td>array</td>
  <td>the registered head meta tags.</td>
  <td>CClientScript</td>
</tr>
<tr id="scriptFiles">
  <td><?php echo CHtml::link('scriptFiles', array('/site/doc', 'view' => 'CClientScript', '#' => 'scriptFiles-detail')); ?></td>
  <td>array</td>
  <td>the registered JavaScript files (position, key => URL)</td>
  <td>CClientScript</td>
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
<tr class="inherited" id="__get">
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CComponent', '#' => '__get-detail')); ?></td>
  <td>Returns a property value, an event handler list or a behavior based on its name.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CComponent', '#' => '__isset-detail')); ?></td>
  <td>Checks if a property value is null.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
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
<tr id="addPackage">
  <td><?php echo CHtml::link('addPackage()', array('/site/doc', 'view' => 'CClientScript', '#' => 'addPackage-detail')); ?></td>
  <td>Adds a package to packages list.</td>
  <td>CClientScript</td>
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
<tr id="getCoreScriptUrl">
  <td><?php echo CHtml::link('getCoreScriptUrl()', array('/site/doc', 'view' => 'CClientScript', '#' => 'getCoreScriptUrl-detail')); ?></td>
  <td>Returns the base URL of all core javascript files.</td>
  <td>CClientScript</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="getPackageBaseUrl">
  <td><?php echo CHtml::link('getPackageBaseUrl()', array('/site/doc', 'view' => 'CClientScript', '#' => 'getPackageBaseUrl-detail')); ?></td>
  <td>Returns the base URL for a registered package with the specified name.</td>
  <td>CClientScript</td>
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
<tr class="inherited" id="hasProperty">
  <td><?php echo CHtml::link('hasProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasProperty-detail')); ?></td>
  <td>Determines whether a property is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="isCssFileRegistered">
  <td><?php echo CHtml::link('isCssFileRegistered()', array('/site/doc', 'view' => 'CClientScript', '#' => 'isCssFileRegistered-detail')); ?></td>
  <td>Checks whether the CSS file has been registered.</td>
  <td>CClientScript</td>
</tr>
<tr id="isCssRegistered">
  <td><?php echo CHtml::link('isCssRegistered()', array('/site/doc', 'view' => 'CClientScript', '#' => 'isCssRegistered-detail')); ?></td>
  <td>Checks whether the CSS code has been registered.</td>
  <td>CClientScript</td>
</tr>
<tr id="isScriptFileRegistered">
  <td><?php echo CHtml::link('isScriptFileRegistered()', array('/site/doc', 'view' => 'CClientScript', '#' => 'isScriptFileRegistered-detail')); ?></td>
  <td>Checks whether the JavaScript file has been registered.</td>
  <td>CClientScript</td>
</tr>
<tr id="isScriptRegistered">
  <td><?php echo CHtml::link('isScriptRegistered()', array('/site/doc', 'view' => 'CClientScript', '#' => 'isScriptRegistered-detail')); ?></td>
  <td>Checks whether the JavaScript code has been registered.</td>
  <td>CClientScript</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerCoreScript">
  <td><?php echo CHtml::link('registerCoreScript()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerCoreScript-detail')); ?></td>
  <td>Registers a script package that is listed in <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'CClientScript', '#' => 'packages')); ?>.</td>
  <td>CClientScript</td>
</tr>
<tr id="registerCss">
  <td><?php echo CHtml::link('registerCss()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerCss-detail')); ?></td>
  <td>Registers a piece of CSS code.</td>
  <td>CClientScript</td>
</tr>
<tr id="registerCssFile">
  <td><?php echo CHtml::link('registerCssFile()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerCssFile-detail')); ?></td>
  <td>Registers a CSS file</td>
  <td>CClientScript</td>
</tr>
<tr id="registerLinkTag">
  <td><?php echo CHtml::link('registerLinkTag()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerLinkTag-detail')); ?></td>
  <td>Registers a link tag that will be inserted in the head section (right before the title element) of the resulting page.</td>
  <td>CClientScript</td>
</tr>
<tr id="registerMetaTag">
  <td><?php echo CHtml::link('registerMetaTag()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerMetaTag-detail')); ?></td>
  <td>Registers a meta tag that will be inserted in the head section (right before the title element) of the resulting page.</td>
  <td>CClientScript</td>
</tr>
<tr id="registerPackage">
  <td><?php echo CHtml::link('registerPackage()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerPackage-detail')); ?></td>
  <td>Registers a script package that is listed in <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'CClientScript', '#' => 'packages')); ?>.</td>
  <td>CClientScript</td>
</tr>
<tr id="registerScript">
  <td><?php echo CHtml::link('registerScript()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerScript-detail')); ?></td>
  <td>Registers a piece of javascript code.</td>
  <td>CClientScript</td>
</tr>
<tr id="registerScriptFile">
  <td><?php echo CHtml::link('registerScriptFile()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerScriptFile-detail')); ?></td>
  <td>Registers a javascript file.</td>
  <td>CClientScript</td>
</tr>
<tr id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CClientScript', '#' => 'render-detail')); ?></td>
  <td>Renders the registered scripts.</td>
  <td>CClientScript</td>
</tr>
<tr id="renderBodyBegin">
  <td><?php echo CHtml::link('renderBodyBegin()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderBodyBegin-detail')); ?></td>
  <td>Inserts the scripts at the beginning of the body section.</td>
  <td>CClientScript</td>
</tr>
<tr id="renderBodyEnd">
  <td><?php echo CHtml::link('renderBodyEnd()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderBodyEnd-detail')); ?></td>
  <td>Inserts the scripts at the end of the body section.</td>
  <td>CClientScript</td>
</tr>
<tr id="renderCoreScripts">
  <td><?php echo CHtml::link('renderCoreScripts()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderCoreScripts-detail')); ?></td>
  <td>Renders the specified core javascript library.</td>
  <td>CClientScript</td>
</tr>
<tr id="renderHead">
  <td><?php echo CHtml::link('renderHead()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderHead-detail')); ?></td>
  <td>Inserts the scripts in the head section.</td>
  <td>CClientScript</td>
</tr>
<tr id="reset">
  <td><?php echo CHtml::link('reset()', array('/site/doc', 'view' => 'CClientScript', '#' => 'reset-detail')); ?></td>
  <td>Cleans all registered scripts.</td>
  <td>CClientScript</td>
</tr>
<tr id="setCoreScriptUrl">
  <td><?php echo CHtml::link('setCoreScriptUrl()', array('/site/doc', 'view' => 'CClientScript', '#' => 'setCoreScriptUrl-detail')); ?></td>
  <td>Sets the base URL of all core javascript files.</td>
  <td>CClientScript</td>
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
<tr id="recordCachingAction">
  <td><?php echo CHtml::link('recordCachingAction()', array('/site/doc', 'view' => 'CClientScript', '#' => 'recordCachingAction-detail')); ?></td>
  <td>Records a method call when an output cache is in effect.</td>
  <td>CClientScript</td>
</tr>
<tr id="remapScripts">
  <td><?php echo CHtml::link('remapScripts()', array('/site/doc', 'view' => 'CClientScript', '#' => 'remapScripts-detail')); ?></td>
  <td>Uses <?php echo CHtml::link('scriptMap', array('/site/doc', 'view' => 'CClientScript', '#' => 'scriptMap')); ?> to re-map the registered scripts.</td>
  <td>CClientScript</td>
</tr>
<tr id="renderScriptBatch">
  <td><?php echo CHtml::link('renderScriptBatch()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderScriptBatch-detail')); ?></td>
  <td>Composes script HTML block from the given script values,</td>
  <td>CClientScript</td>
</tr>
<tr id="unifyScripts">
  <td><?php echo CHtml::link('unifyScripts()', array('/site/doc', 'view' => 'CClientScript', '#' => 'unifyScripts-detail')); ?></td>
  <td>Removes duplicated scripts from <?php echo CHtml::link('scriptFiles', array('/site/doc', 'view' => 'CClientScript', '#' => 'scriptFiles')); ?>.</td>
  <td>CClientScript</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="corePackages-detail">
corePackages<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public array <b>$corePackages</b>;</div>

<p>list of core script packages (name=>package spec).
Please refer to <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'CClientScript', '#' => 'packages')); ?> for details about package spec.
<br/><br/>
By default, the core script packages are specified in 'framework/web/js/packages.php'.
You may configure this property to customize the core script packages.
<br/><br/>
When calling <?php echo CHtml::link('registerPackage', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerPackage')); ?> to register a script package,
<?php echo CHtml::link('packages', array('/site/doc', 'view' => 'CClientScript', '#' => 'packages')); ?> will be checked first followed by this property.
If a package is found, it will be registered for rendering later on.</p>


<div class="detailHeader" id="coreScriptPosition-detail">
coreScriptPosition<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public integer <b>$coreScriptPosition</b>;</div>

<p>Where the scripts registered using <?php echo CHtml::link('registerCoreScript', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerCoreScript')); ?> or <?php echo CHtml::link('registerPackage', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerPackage')); ?>
will be inserted in the page. This can be one of the CClientScript::POS_* constants.
Defaults to CClientScript::POS_HEAD.</p>


<div class="detailHeader" id="coreScriptUrl-detail">
coreScriptUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getCoreScriptUrl</b>', array('/site/doc', 'view' => 'CClientScript', '#' => 'getCoreScriptUrl')); ?>()<br/>public void <?php echo CHtml::link('<b>setCoreScriptUrl</b>', array('/site/doc', 'view' => 'CClientScript', '#' => 'setCoreScriptUrl')); ?>(string $value)</div>

<p>Returns the base URL of all core javascript files.
If the base URL is not explicitly set, this method will publish the whole directory
'framework/web/js/source' and return the corresponding URL.</p>


<div class="detailHeader" id="coreScripts-detail">
coreScripts<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
protected array <b>$coreScripts</b>;</div>

<p>the registered script packages (name => package spec)</p>


<div class="detailHeader" id="css-detail">
css<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
protected array <b>$css</b>;</div>

<p>the registered css code blocks (key => array(CSS code, media type)).</p>


<div class="detailHeader" id="cssFiles-detail">
cssFiles<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$cssFiles</b>;</div>

<p>the registered CSS files (CSS URL=>media type).</p>


<div class="detailHeader" id="defaultScriptFilePosition-detail">
defaultScriptFilePosition<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public integer <b>$defaultScriptFilePosition</b>;</div>

<p>Where the scripts registered using <?php echo CHtml::link('registerScriptFile', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerScriptFile')); ?> will be inserted in the page.
This can be one of the CClientScript::POS_* constants.
Defaults to CClientScript::POS_HEAD.</p>


<div class="detailHeader" id="defaultScriptPosition-detail">
defaultScriptPosition<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public integer <b>$defaultScriptPosition</b>;</div>

<p>Where the scripts registered using <?php echo CHtml::link('registerScript', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerScript')); ?> will be inserted in the page.
This can be one of the CClientScript::POS_* constants.
Defaults to CClientScript::POS_READY.</p>


<div class="detailHeader" id="enableJavaScript-detail">
enableJavaScript<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$enableJavaScript</b>;</div>

<p>whether JavaScript should be enabled. Defaults to true.</p>


<div class="detailHeader" id="hasScripts-detail">
hasScripts<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
protected boolean <b>$hasScripts</b>;</div>

<p>whether there are any javascript or css to be rendered.</p>


<div class="detailHeader" id="linkTags-detail">
linkTags<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
protected array <b>$linkTags</b>;</div>

<p>the registered head link tags. Each array element represents an option array
that will be passed as the last parameter of <?php echo CHtml::link('CHtml::linkTag', array('/site/doc', 'view' => 'CHtml', '#' => 'linkTag')); ?>.</p>


<div class="detailHeader" id="metaTags-detail">
metaTags<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
protected array <b>$metaTags</b>;</div>

<p>the registered head meta tags. Each array element represents an option array
that will be passed as the last parameter of <?php echo CHtml::link('CHtml::metaTag', array('/site/doc', 'view' => 'CHtml', '#' => 'metaTag')); ?>.</p>


<div class="detailHeader" id="packages-detail">
packages<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public array <b>$packages</b>;</div>

<p>list of custom script packages (name=>package spec).
This property keeps a list of named script packages, each of which can contain
a set of CSS and/or JavaScript script files, and their dependent package names.
By calling <?php echo CHtml::link('registerPackage', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerPackage')); ?>, one can register a whole package of client
scripts together with their dependent packages and render them in the HTML output.
<br/><br/>
The array structure is as follows:
<pre>
array(
  'package-name'=&gt;array(
    'basePath'=&gt;'alias of the directory containing the script files',
    'baseUrl'=&gt;'base URL for the script files',
    'js'=&gt;array(list of js files relative to basePath/baseUrl),
    'css'=&gt;array(list of css files relative to basePath/baseUrl),
    'depends'=&gt;array(list of dependent packages),
  ),
  ......
)
</pre>
<br/><br/>
The JS and CSS files listed are relative to 'basePath'.
For example, if 'basePath' is 'application.assets', a script named 'comments.js'
will refer to the file 'protected/assets/comments.js'.
<br/><br/>
When a script is being rendered in HTML, it will be prefixed with 'baseUrl'.
For example, if 'baseUrl' is '/assets', the 'comments.js' script will be rendered
using URL '/assets/comments.js'.
<br/><br/>
If 'baseUrl' does not start with '/', the relative URL of the application entry
script will be inserted at the beginning. For example, if 'baseUrl' is 'assets'
and the current application runs with the URL 'http://localhost/demo/index.php',
then the 'comments.js' script will be rendered using URL '/demo/assets/comments.js'.
<br/><br/>
If 'baseUrl' is not set, the script will be published by <?php echo CHtml::link('CAssetManager', array('/site/doc', 'view' => 'CAssetManager')); ?>
and the corresponding published URL will be used.
<br/><br/>
When calling <?php echo CHtml::link('registerPackage', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerPackage')); ?> to register a script package,
this property will be checked first followed by <?php echo CHtml::link('corePackages', array('/site/doc', 'view' => 'CClientScript', '#' => 'corePackages')); ?>.
If a package is found, it will be registered for rendering later on.</p>


<div class="detailHeader" id="scriptFiles-detail">
scriptFiles<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$scriptFiles</b>;</div>

<p>the registered JavaScript files (position, key => URL)</p>


<div class="detailHeader" id="scriptMap-detail">
scriptMap<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$scriptMap</b>;</div>

<p>the mapping between script file names and the corresponding script URLs.
The array keys are script file names (without directory part) and the array values are the corresponding URLs.
If an array value is false, the corresponding script file will not be rendered.
If an array key is '*.js' or '*.css', the corresponding URL will replace all
JavaScript files or CSS files, respectively.
<br/><br/>
This property is mainly used to optimize the generated HTML pages
by merging different scripts files into fewer and optimized script files.</p>


<div class="detailHeader" id="scripts-detail">
scripts<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$scripts</b>;</div>

<p>the registered JavaScript code blocks (position, key => code)</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addPackage-detail">
addPackage()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CClientScript <b>addPackage</b>(string $name, array $definition)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the script package.</td>
</tr>
<tr>
  <td class="paramNameCol">$definition</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the definition array of the script package,</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.10).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L836">yii/web/CClientScript.php#L836</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addPackage</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$definition</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">packages</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$definition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Adds a package to packages list.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>CClientScript::packages.</li>
</ul>
</div>

<div class="detailHeader" id="getCoreScriptUrl-detail">
getCoreScriptUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getCoreScriptUrl</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the base URL of all core javascript files</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L505">yii/web/CClientScript.php#L505</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCoreScriptUrl</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getAssetManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">publish</span><span style="color: #007700">(</span><span style="color: #0000BB">YII_PATH</span><span style="color: #007700">.</span><span style="color: #DD0000">'/web/js/source'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the base URL of all core javascript files.
If the base URL is not explicitly set, this method will publish the whole directory
'framework/web/js/source' and return the corresponding URL.</p>


<div class="detailHeader" id="getPackageBaseUrl-detail">
getPackageBaseUrl()
<span class="detailHeaderTag">
method
(available since v1.1.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPackageBaseUrl</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the package name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the base URL for the named package. False is returned if the package is not registered yet.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L532">yii/web/CClientScript.php#L532</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPackageBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScripts</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$package</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScripts</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseUrl'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseUrl'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]!==</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">,</span><span style="color: #DD0000">'://'</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'basePath'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getAssetManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">publish</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'basePath'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCoreScriptUrl</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScripts</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">][</span><span style="color: #DD0000">'baseUrl'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the base URL for a registered package with the specified name.
If needed, this method may publish the assets of the package and returns the published base URL.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('registerPackage', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerPackage')); ?></li>
</ul>
</div>

<div class="detailHeader" id="isCssFileRegistered-detail">
isCssFileRegistered()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isCssFileRegistered</b>(string $url)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">URL of the CSS file</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the CSS file is already registered</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L761">yii/web/CClientScript.php#L761</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isCssFileRegistered</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$url</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Checks whether the CSS file has been registered.</p>


<div class="detailHeader" id="isCssRegistered-detail">
isCssRegistered()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isCssRegistered</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">ID that uniquely identifies the CSS code</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the CSS code is already registered</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L771">yii/web/CClientScript.php#L771</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isCssRegistered</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">css</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Checks whether the CSS code has been registered.</p>


<div class="detailHeader" id="isScriptFileRegistered-detail">
isScriptFileRegistered()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isScriptFileRegistered</b>(string $url, integer $position=0)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">URL of the javascript file</td>
</tr>
<tr>
  <td class="paramNameCol">$position</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the position of the JavaScript code. Valid values include the following:
<ul>
<li>CClientScript::POS_HEAD : the script is inserted in the head section right before the title element.</li>
<li>CClientScript::POS_BEGIN : the script is inserted at the beginning of the body section.</li>
<li>CClientScript::POS_END : the script is inserted at the end of the body section.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the javascript file is already registered</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L787">yii/web/CClientScript.php#L787</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isScriptFileRegistered</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$position</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">][</span><span style="color: #0000BB">$url</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Checks whether the JavaScript file has been registered.</p>


<div class="detailHeader" id="isScriptRegistered-detail">
isScriptRegistered()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isScriptRegistered</b>(string $id, integer $position=4)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">ID that uniquely identifies the JavaScript code</td>
</tr>
<tr>
  <td class="paramNameCol">$position</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the position of the JavaScript code. Valid values include the following:
<ul>
<li>CClientScript::POS_HEAD : the script is inserted in the head section right before the title element.</li>
<li>CClientScript::POS_BEGIN : the script is inserted at the beginning of the body section.</li>
<li>CClientScript::POS_END : the script is inserted at the end of the body section.</li>
<li>CClientScript::POS_LOAD : the script is inserted in the window.onload() function.</li>
<li>CClientScript::POS_READY : the script is inserted in the jQuery's ready function.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the javascript code is already registered</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L805">yii/web/CClientScript.php#L805</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isScriptRegistered</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$position</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">][</span><span style="color: #0000BB">$id</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Checks whether the JavaScript code has been registered.</p>


<div class="detailHeader" id="recordCachingAction-detail">
recordCachingAction()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>recordCachingAction</b>(string $context, string $method, array $params)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$context</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a property name of the controller. It refers to an object
whose method is being called. If empty it means the controller itself.</td>
</tr>
<tr>
  <td class="paramNameCol">$method</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the method name</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters passed to the method</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L820">yii/web/CClientScript.php#L820</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$context</span><span style="color: #007700">,</span><span style="color: #0000BB">$method</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$controller</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$context</span><span style="color: #007700">,</span><span style="color: #0000BB">$method</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Records a method call when an output cache is in effect.
This is a shortcut to Yii::app()->controller->recordCachingAction.
In case when controller is absent, nothing is recorded.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('COutputCache', array('/site/doc', 'view' => 'COutputCache')); ?></li>
</ul>
</div>

<div class="detailHeader" id="registerCoreScript-detail">
registerCoreScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CClientScript <b>registerCoreScript</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the script package.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L571">yii/web/CClientScript.php#L571</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScripts</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">packages</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$package</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">packages</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">corePackages</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">corePackages</span><span style="color: #007700">=require(</span><span style="color: #0000BB">YII_PATH</span><span style="color: #007700">.</span><span style="color: #DD0000">'/web/js/packages.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">corePackages</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$package</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">corePackages</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$package</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'depends'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'depends'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$p</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScripts</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$package</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">,</span><span style="color: #DD0000">'registerCoreScript'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Registers a script package that is listed in <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'CClientScript', '#' => 'packages')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>renderCoreScript</li>
</ul>
</div>

<div class="detailHeader" id="registerCss-detail">
registerCss()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CClientScript <b>registerCss</b>(string $id, string $css, string $media='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">ID that uniquely identifies this piece of CSS code</td>
</tr>
<tr>
  <td class="paramNameCol">$css</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS code</td>
</tr>
<tr>
  <td class="paramNameCol">$media</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">media that the CSS code should be applied to. If empty, it means all media types.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L621">yii/web/CClientScript.php#L621</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$css</span><span style="color: #007700">,</span><span style="color: #0000BB">$media</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">css</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]=array(</span><span style="color: #0000BB">$css</span><span style="color: #007700">,</span><span style="color: #0000BB">$media</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">,</span><span style="color: #DD0000">'registerCss'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Registers a piece of CSS code.</p>


<div class="detailHeader" id="registerCssFile-detail">
registerCssFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CClientScript <b>registerCssFile</b>(string $url, string $media='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">URL of the CSS file</td>
</tr>
<tr>
  <td class="paramNameCol">$media</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">media that the CSS file should be applied to. If empty, it means all media types.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L605">yii/web/CClientScript.php#L605</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$media</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$url</span><span style="color: #007700">]=</span><span style="color: #0000BB">$media</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">,</span><span style="color: #DD0000">'registerCssFile'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Registers a CSS file</p>


<div class="detailHeader" id="registerLinkTag-detail">
registerLinkTag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CClientScript <b>registerLinkTag</b>(string $relation=NULL, string $type=NULL, string $href=NULL, string $media=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$relation</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">rel attribute of the link tag. If null, the attribute will not be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">type attribute of the link tag. If null, the attribute will not be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">$href</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">href attribute of the link tag. If null, the attribute will not be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">$media</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">media attribute of the link tag. If null, the attribute will not be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">other options in name-value pairs</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L739">yii/web/CClientScript.php#L739</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerLinkTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$href</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$media</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'rel'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$relation</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$type</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$href</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'href'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$href</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$media</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'media'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$media</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">linkTags</span><span style="color: #007700">[</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)]=</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">,</span><span style="color: #DD0000">'registerLinkTag'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Registers a link tag that will be inserted in the head section (right before the title element) of the resulting page.</p>


<div class="detailHeader" id="registerMetaTag-detail">
registerMetaTag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CClientScript <b>registerMetaTag</b>(string $content, string $name=NULL, string $httpEquiv=NULL, array $options=array (
), string $id=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$content</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">content attribute of the meta tag</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name attribute of the meta tag. If null, the attribute will not be generated</td>
</tr>
<tr>
  <td class="paramNameCol">$httpEquiv</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">http-equiv attribute of the meta tag. If null, the attribute will not be generated</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">other options in name-value pairs (e.g. 'scheme', 'lang')</td>
</tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Optional id of the meta tag to avoid duplicates</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L716">yii/web/CClientScript.php#L716</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerMetaTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$httpEquiv</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$name</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$httpEquiv</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'http-equiv'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$httpEquiv</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'content'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$content</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">metaTags</span><span style="color: #007700">[</span><span style="color: #0000BB">null</span><span style="color: #007700">===</span><span style="color: #0000BB">$id</span><span style="color: #007700">?</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">metaTags</span><span style="color: #007700">):</span><span style="color: #0000BB">$id</span><span style="color: #007700">]=</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">,</span><span style="color: #DD0000">'registerMetaTag'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Registers a meta tag that will be inserted in the head section (right before the title element) of the resulting page.
<br/><br/>
<b>Note:</b>
Each call of this method will cause a rendering of new meta tag, even if their attributes are equal.
<br/><br/>
<b>Example:</b>
<pre>
   $cs-&gt;registerMetaTag('example', 'description', null, array('lang' =&gt; 'en'));
   $cs-&gt;registerMetaTag('beispiel', 'description', null, array('lang' =&gt; 'de'));
</pre></p>


<div class="detailHeader" id="registerPackage-detail">
registerPackage()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CClientScript <b>registerPackage</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the script package.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L560">yii/web/CClientScript.php#L560</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a script package that is listed in <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'CClientScript', '#' => 'packages')); ?>.
This method is the same as <?php echo CHtml::link('registerCoreScript', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerCoreScript')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>renderCoreScript</li>
</ul>
</div>

<div class="detailHeader" id="registerScript-detail">
registerScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CClientScript <b>registerScript</b>(string $id, string $script, integer $position=NULL, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">ID that uniquely identifies this piece of JavaScript code</td>
</tr>
<tr>
  <td class="paramNameCol">$script</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the javascript code</td>
</tr>
<tr>
  <td class="paramNameCol">$position</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the position of the JavaScript code. Valid values include the following:
<ul>
<li>CClientScript::POS_HEAD : the script is inserted in the head section right before the title element.</li>
<li>CClientScript::POS_BEGIN : the script is inserted at the beginning of the body section.</li>
<li>CClientScript::POS_END : the script is inserted at the end of the body section.</li>
<li>CClientScript::POS_LOAD : the script is inserted in the window.onload() function.</li>
<li>CClientScript::POS_READY : the script is inserted in the jQuery's ready function.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes
Note: HTML attributes are not allowed for script positions "CClientScript::POS_LOAD" and "CClientScript::POS_READY".</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L676">yii/web/CClientScript.php#L676</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$script</span><span style="color: #007700">,</span><span style="color: #0000BB">$position</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,array&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$position</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultScriptPosition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">=</span><span style="color: #0000BB">$script</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$position</span><span style="color: #007700">==</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_LOAD&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">==</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Script&nbsp;HTML&nbsp;options&nbsp;are&nbsp;not&nbsp;allowed&nbsp;for&nbsp;"CClientScript::POS_LOAD"&nbsp;and&nbsp;"CClientScript::POS_READY".'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">[</span><span style="color: #DD0000">'content'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$script</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">][</span><span style="color: #0000BB">$id</span><span style="color: #007700">]=</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$position</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_LOAD</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">,</span><span style="color: #DD0000">'registerScript'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Registers a piece of javascript code.</p>


<div class="detailHeader" id="registerScriptFile-detail">
registerScriptFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CClientScript <b>registerScriptFile</b>(string $url, integer $position=NULL, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">URL of the javascript file</td>
</tr>
<tr>
  <td class="paramNameCol">$position</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the position of the JavaScript code. Valid values include the following:
<ul>
<li>CClientScript::POS_HEAD : the script is inserted in the head section right before the title element.</li>
<li>CClientScript::POS_BEGIN : the script is inserted at the beginning of the body section.</li>
<li>CClientScript::POS_END : the script is inserted at the end of the body section.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L642">yii/web/CClientScript.php#L642</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$position</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,array&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$position</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultScriptFilePosition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'src'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">][</span><span style="color: #0000BB">$url</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">,</span><span style="color: #DD0000">'registerScriptFile'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Registers a javascript file.</p>


<div class="detailHeader" id="remapScripts-detail">
remapScripts()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>remapScripts</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L259">yii/web/CClientScript.php#L259</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">remapScripts</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$media</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]]=</span><span style="color: #0000BB">$media</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #DD0000">'*.css'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #DD0000">'*.css'</span><span style="color: #007700">]!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #DD0000">'*.css'</span><span style="color: #007700">]]=</span><span style="color: #0000BB">$media</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$url</span><span style="color: #007700">]=</span><span style="color: #0000BB">$media</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles</span><span style="color: #007700">=</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$scriptFiles</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">]=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$scriptFiles&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$scriptFile</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">][</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #DD0000">'*.js'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #DD0000">'*.js'</span><span style="color: #007700">]!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">][</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #DD0000">'*.js'</span><span style="color: #007700">]]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #DD0000">'*.js'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">][</span><span style="color: #0000BB">$scriptFile</span><span style="color: #007700">]=</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">=</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Uses <?php echo CHtml::link('scriptMap', array('/site/doc', 'view' => 'CClientScript', '#' => 'scriptMap')); ?> to re-map the registered scripts.</p>


<div class="detailHeader" id="render-detail">
render()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>render</b>(string &$output)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$output</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the existing output that needs to be inserted with script tags</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L203">yii/web/CClientScript.php#L203</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderCoreScripts</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">remapScripts</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">unifyScripts</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderHead</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableJavaScript</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderBodyBegin</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderBodyEnd</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the registered scripts.
This method is called in <?php echo CHtml::link('CController::render', array('/site/doc', 'view' => 'CController', '#' => 'render')); ?> when it finishes
rendering content. CClientScript thus gets a chance to insert script tags
at <code>head</code> and <code>body</code> sections in the HTML output.</p>


<div class="detailHeader" id="renderBodyBegin-detail">
renderBodyBegin()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderBodyBegin</b>(string &$output)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$output</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the output to be inserted with scripts.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L425">yii/web/CClientScript.php#L425</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderBodyBegin</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_BEGIN</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_BEGIN</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$scriptFileUrl</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">scriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFileUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">scriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFileUrl</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_BEGIN</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderScriptBatch</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_BEGIN</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$html</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(&lt;body\b[^&gt;]*&gt;)/is'</span><span style="color: #007700">,</span><span style="color: #DD0000">'$1&lt;###begin###&gt;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$count</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;###begin###&gt;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$html</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">$html</span><span style="color: #007700">.</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Inserts the scripts at the beginning of the body section.</p>


<div class="detailHeader" id="renderBodyEnd-detail">
renderBodyEnd()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderBodyEnd</b>(string &$output)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$output</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the output to be inserted with scripts.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L456">yii/web/CClientScript.php#L456</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderBodyEnd</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_LOAD</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fullPage</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(&lt;\\/body\s*&gt;)/is'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;###end###&gt;$1'</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$fullPage</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$scriptFileUrl</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">scriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFileUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">scriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFileUrl</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">]&nbsp;:&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$fullPage</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"jQuery(function($)&nbsp;{\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">]).</span><span style="color: #DD0000">"\n});"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">[]=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_LOAD</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$fullPage</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"jQuery(window).on('load',function()&nbsp;{\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_LOAD</span><span style="color: #007700">]).</span><span style="color: #DD0000">"\n});"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">[]=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_LOAD</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderScriptBatch</span><span style="color: #007700">(</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$fullPage</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;###end###&gt;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$html</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">$output</span><span style="color: #007700">.</span><span style="color: #0000BB">$html</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Inserts the scripts at the end of the body section.</p>


<div class="detailHeader" id="renderCoreScripts-detail">
renderCoreScripts()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderCoreScripts</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L340">yii/web/CClientScript.php#L340</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderCoreScripts</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScripts</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScripts&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$package</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPackageBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'js'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'js'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$js</span><span style="color: #007700">]=</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$js</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'css'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$package</span><span style="color: #007700">[</span><span style="color: #DD0000">'css'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$css</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$css</span><span style="color: #007700">]=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;merge&nbsp;in&nbsp;place<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$cssFile</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$media</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$cssFile</span><span style="color: #007700">]=</span><span style="color: #0000BB">$media</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles</span><span style="color: #007700">=</span><span style="color: #0000BB">$cssFiles</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScriptPosition</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScriptPosition</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$url</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScriptPosition</span><span style="color: #007700">]=</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the specified core javascript library.</p>


<div class="detailHeader" id="renderHead-detail">
renderHead()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderHead</b>(string &$output)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$output</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the output to be inserted with scripts.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L382">yii/web/CClientScript.php#L382</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderHead</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">metaTags&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$meta</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">metaTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$meta</span><span style="color: #007700">[</span><span style="color: #DD0000">'content'</span><span style="color: #007700">],</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$meta</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">linkTags&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$link</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">linkTag</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$link</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$media</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$media</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">css&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$css</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">css</span><span style="color: #007700">(</span><span style="color: #0000BB">$css</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$css</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableJavaScript</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$scriptFileValueUrl</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">scriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFileValueUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">scriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptFileValueUrl</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderScriptBatch</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$html</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(&lt;title\b[^&gt;]*&gt;|&lt;\\/head\s*&gt;)/is'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;###head###&gt;$1'</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$count</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;###head###&gt;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$html</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">$html</span><span style="color: #007700">.</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Inserts the scripts in the head section.</p>


<div class="detailHeader" id="renderScriptBatch-detail">
renderScriptBatch()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>renderScriptBatch</b>(array $scripts)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$scripts</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">script values to process.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">HTML output</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L310">yii/web/CClientScript.php#L310</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderScriptBatch</span><span style="color: #007700">(array&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptBatches&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$scripts&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptContent&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">[</span><span style="color: #DD0000">'content'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">[</span><span style="color: #DD0000">'content'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptHtmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptContent&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$scriptValue</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptHtmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">ksort</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptHtmlOptions</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptBatches</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">][</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$scriptHtmlOptions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptBatches</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">][</span><span style="color: #DD0000">'scripts'</span><span style="color: #007700">][]=</span><span style="color: #0000BB">$scriptContent</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$scriptBatches&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$scriptBatch</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$scriptBatch</span><span style="color: #007700">[</span><span style="color: #DD0000">'scripts'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">script</span><span style="color: #007700">(</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$scriptBatch</span><span style="color: #007700">[</span><span style="color: #DD0000">'scripts'</span><span style="color: #007700">]),</span><span style="color: #0000BB">$scriptBatch</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Composes script HTML block from the given script values,
attempting to group scripts at single 'script' tag if possible.</p>


<div class="detailHeader" id="reset-detail">
reset()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>reset</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L182">yii/web/CClientScript.php#L182</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">reset</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreScripts</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">css</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">metaTags</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">linkTags</span><span style="color: #007700">=array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCachingAction</span><span style="color: #007700">(</span><span style="color: #DD0000">'clientScript'</span><span style="color: #007700">,</span><span style="color: #DD0000">'reset'</span><span style="color: #007700">,array());<br />}</span>
</span>
</code></div>
</div>
<p>Cleans all registered scripts.</p>


<div class="detailHeader" id="setCoreScriptUrl-detail">
setCoreScriptUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCoreScriptUrl</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the base URL of all core javascript files.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L519">yii/web/CClientScript.php#L519</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCoreScriptUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the base URL of all core javascript files.
This setter is provided in case when core javascript files are manually published
to a pre-specified location. This may save asset publishing time for large-scale applications.</p>


<div class="detailHeader" id="unifyScripts-detail">
unifyScripts()
<span class="detailHeaderTag">
method
(available since v1.1.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>unifyScripts</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CClientScript.php#L227">yii/web/CClientScript.php#L227</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">unifyScripts</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableJavaScript</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$map</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$map</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_BEGIN</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_BEGIN</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$scriptFile</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$scriptFileValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$scriptFile</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_BEGIN</span><span style="color: #007700">][</span><span style="color: #0000BB">$scriptFile</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$scriptFile</span><span style="color: #007700">]=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$scriptFile</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">][</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Removes duplicated scripts from <?php echo CHtml::link('scriptFiles', array('/site/doc', 'view' => 'CClientScript', '#' => 'scriptFiles')); ?>.</p>


