<?php
$this->pageTitle = $this->pageHeading = 'YdClientScript';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdClientScript';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdClientScript &raquo;
<?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php">dressing\components\YdClientScript.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdClientScript</div>
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
<tr class="inherited" id="corePackages">
  <td><?php echo CHtml::link('corePackages', array('/site/doc', 'view' => 'CClientScript', '#' => 'corePackages-detail')); ?></td>
  <td>array</td>
  <td>list of core script packages (name=>package spec).</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="coreScriptPosition">
  <td><?php echo CHtml::link('coreScriptPosition', array('/site/doc', 'view' => 'CClientScript', '#' => 'coreScriptPosition-detail')); ?></td>
  <td>integer</td>
  <td>Where the scripts registered using <?php echo CHtml::link('registerCoreScript', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerCoreScript')); ?> or <?php echo CHtml::link('registerPackage', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerPackage')); ?>
will be inserted in the page.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="coreScriptUrl">
  <td><?php echo CHtml::link('coreScriptUrl', array('/site/doc', 'view' => 'CClientScript', '#' => 'coreScriptUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the base URL of all core javascript files.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="defaultScriptFilePosition">
  <td><?php echo CHtml::link('defaultScriptFilePosition', array('/site/doc', 'view' => 'CClientScript', '#' => 'defaultScriptFilePosition-detail')); ?></td>
  <td>integer</td>
  <td>Where the scripts registered using <?php echo CHtml::link('registerScriptFile', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerScriptFile')); ?> will be inserted in the page.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="defaultScriptPosition">
  <td><?php echo CHtml::link('defaultScriptPosition', array('/site/doc', 'view' => 'CClientScript', '#' => 'defaultScriptPosition-detail')); ?></td>
  <td>integer</td>
  <td>Where the scripts registered using <?php echo CHtml::link('registerScript', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerScript')); ?> will be inserted in the page.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="enableJavaScript">
  <td><?php echo CHtml::link('enableJavaScript', array('/site/doc', 'view' => 'CClientScript', '#' => 'enableJavaScript-detail')); ?></td>
  <td>boolean</td>
  <td>whether JavaScript should be enabled.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="packages">
  <td><?php echo CHtml::link('packages', array('/site/doc', 'view' => 'CClientScript', '#' => 'packages-detail')); ?></td>
  <td>array</td>
  <td>list of custom script packages (name=>package spec).</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="scriptMap">
  <td><?php echo CHtml::link('scriptMap', array('/site/doc', 'view' => 'CClientScript', '#' => 'scriptMap-detail')); ?></td>
  <td>array</td>
  <td>the mapping between script file names and the corresponding script URLs.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr id="scripts">
  <td><?php echo CHtml::link('scripts', array('/site/doc', 'view' => 'YdClientScript', '#' => 'scripts-detail')); ?></td>
  <td>array</td>
  <td>the registered JavaScript code blocks (position, key => code)</td>
  <td>YdClientScript</td>
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
<tr class="inherited" id="coreScripts">
  <td><?php echo CHtml::link('coreScripts', array('/site/doc', 'view' => 'CClientScript', '#' => 'coreScripts-detail')); ?></td>
  <td>array</td>
  <td>the registered script packages (name => package spec)</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr id="css">
  <td><?php echo CHtml::link('css', array('/site/doc', 'view' => 'YdClientScript', '#' => 'css-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdClientScript</td>
</tr>
<tr id="cssFiles">
  <td><?php echo CHtml::link('cssFiles', array('/site/doc', 'view' => 'YdClientScript', '#' => 'cssFiles-detail')); ?></td>
  <td>array</td>
  <td>the registered CSS files (CSS URL=>media type).</td>
  <td>YdClientScript</td>
</tr>
<tr id="cssFilesOrder">
  <td><?php echo CHtml::link('cssFilesOrder', array('/site/doc', 'view' => 'YdClientScript', '#' => 'cssFilesOrder-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdClientScript</td>
</tr>
<tr id="cssOrder">
  <td><?php echo CHtml::link('cssOrder', array('/site/doc', 'view' => 'YdClientScript', '#' => 'cssOrder-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdClientScript</td>
</tr>
<tr class="inherited" id="hasScripts">
  <td><?php echo CHtml::link('hasScripts', array('/site/doc', 'view' => 'CClientScript', '#' => 'hasScripts-detail')); ?></td>
  <td>boolean</td>
  <td>whether there are any javascript or css to be rendered.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="linkTags">
  <td><?php echo CHtml::link('linkTags', array('/site/doc', 'view' => 'CClientScript', '#' => 'linkTags-detail')); ?></td>
  <td>array</td>
  <td>the registered head link tags.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="metaTags">
  <td><?php echo CHtml::link('metaTags', array('/site/doc', 'view' => 'CClientScript', '#' => 'metaTags-detail')); ?></td>
  <td>array</td>
  <td>the registered head meta tags.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr id="scriptFiles">
  <td><?php echo CHtml::link('scriptFiles', array('/site/doc', 'view' => 'YdClientScript', '#' => 'scriptFiles-detail')); ?></td>
  <td>array</td>
  <td>the registered JavaScript files (position, key => URL)</td>
  <td>YdClientScript</td>
</tr>
<tr id="scriptFilesOrder">
  <td><?php echo CHtml::link('scriptFilesOrder', array('/site/doc', 'view' => 'YdClientScript', '#' => 'scriptFilesOrder-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdClientScript</td>
</tr>
<tr id="scriptsOrder">
  <td><?php echo CHtml::link('scriptsOrder', array('/site/doc', 'view' => 'YdClientScript', '#' => 'scriptsOrder-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdClientScript</td>
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
<tr class="inherited" id="addPackage">
  <td><?php echo CHtml::link('addPackage()', array('/site/doc', 'view' => 'CClientScript', '#' => 'addPackage-detail')); ?></td>
  <td>Adds a package to packages list.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
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
<tr class="inherited" id="getCoreScriptUrl">
  <td><?php echo CHtml::link('getCoreScriptUrl()', array('/site/doc', 'view' => 'CClientScript', '#' => 'getCoreScriptUrl-detail')); ?></td>
  <td>Returns the base URL of all core javascript files.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
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
<tr class="inherited" id="getPackageBaseUrl">
  <td><?php echo CHtml::link('getPackageBaseUrl()', array('/site/doc', 'view' => 'CClientScript', '#' => 'getPackageBaseUrl-detail')); ?></td>
  <td>Returns the base URL for a registered package with the specified name.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
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
<tr class="inherited" id="isCssFileRegistered">
  <td><?php echo CHtml::link('isCssFileRegistered()', array('/site/doc', 'view' => 'CClientScript', '#' => 'isCssFileRegistered-detail')); ?></td>
  <td>Checks whether the CSS file has been registered.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="isCssRegistered">
  <td><?php echo CHtml::link('isCssRegistered()', array('/site/doc', 'view' => 'CClientScript', '#' => 'isCssRegistered-detail')); ?></td>
  <td>Checks whether the CSS code has been registered.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="isScriptFileRegistered">
  <td><?php echo CHtml::link('isScriptFileRegistered()', array('/site/doc', 'view' => 'CClientScript', '#' => 'isScriptFileRegistered-detail')); ?></td>
  <td>Checks whether the JavaScript file has been registered.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="isScriptRegistered">
  <td><?php echo CHtml::link('isScriptRegistered()', array('/site/doc', 'view' => 'CClientScript', '#' => 'isScriptRegistered-detail')); ?></td>
  <td>Checks whether the JavaScript code has been registered.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerCoreScript">
  <td><?php echo CHtml::link('registerCoreScript()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerCoreScript-detail')); ?></td>
  <td>Registers a script package that is listed in <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'YdClientScript', '#' => 'packages')); ?>.</td>
  <td>YdClientScript</td>
</tr>
<tr id="registerCss">
  <td><?php echo CHtml::link('registerCss()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerCss-detail')); ?></td>
  <td></td>
  <td>YdClientScript</td>
</tr>
<tr id="registerCssFile">
  <td><?php echo CHtml::link('registerCssFile()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerCssFile-detail')); ?></td>
  <td>Registers a CSS file</td>
  <td>YdClientScript</td>
</tr>
<tr id="registerCssFileOrder">
  <td><?php echo CHtml::link('registerCssFileOrder()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerCssFileOrder-detail')); ?></td>
  <td>Registers a CSS file</td>
  <td>YdClientScript</td>
</tr>
<tr id="registerCssOrder">
  <td><?php echo CHtml::link('registerCssOrder()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerCssOrder-detail')); ?></td>
  <td></td>
  <td>YdClientScript</td>
</tr>
<tr class="inherited" id="registerLinkTag">
  <td><?php echo CHtml::link('registerLinkTag()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerLinkTag-detail')); ?></td>
  <td>Registers a link tag that will be inserted in the head section (right before the title element) of the resulting page.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="registerMetaTag">
  <td><?php echo CHtml::link('registerMetaTag()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerMetaTag-detail')); ?></td>
  <td>Registers a meta tag that will be inserted in the head section (right before the title element) of the resulting page.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="registerPackage">
  <td><?php echo CHtml::link('registerPackage()', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerPackage-detail')); ?></td>
  <td>Registers a script package that is listed in <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'YdClientScript', '#' => 'packages')); ?>.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr id="registerScript">
  <td><?php echo CHtml::link('registerScript()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerScript-detail')); ?></td>
  <td>Registers a piece of javascript code.</td>
  <td>YdClientScript</td>
</tr>
<tr id="registerScriptFile">
  <td><?php echo CHtml::link('registerScriptFile()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerScriptFile-detail')); ?></td>
  <td>Registers a javascript file.</td>
  <td>YdClientScript</td>
</tr>
<tr id="registerScriptFileOrder">
  <td><?php echo CHtml::link('registerScriptFileOrder()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerScriptFileOrder-detail')); ?></td>
  <td>Registers a javascript file.</td>
  <td>YdClientScript</td>
</tr>
<tr id="registerScriptOrder">
  <td><?php echo CHtml::link('registerScriptOrder()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'registerScriptOrder-detail')); ?></td>
  <td>Registers a piece of javascript code.</td>
  <td>YdClientScript</td>
</tr>
<tr id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'render-detail')); ?></td>
  <td>Renders the registered scripts.</td>
  <td>YdClientScript</td>
</tr>
<tr class="inherited" id="renderBodyBegin">
  <td><?php echo CHtml::link('renderBodyBegin()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderBodyBegin-detail')); ?></td>
  <td>Inserts the scripts at the beginning of the body section.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="renderBodyEnd">
  <td><?php echo CHtml::link('renderBodyEnd()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderBodyEnd-detail')); ?></td>
  <td>Inserts the scripts at the end of the body section.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="renderCoreScripts">
  <td><?php echo CHtml::link('renderCoreScripts()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderCoreScripts-detail')); ?></td>
  <td>Renders the specified core javascript library.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="renderHead">
  <td><?php echo CHtml::link('renderHead()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderHead-detail')); ?></td>
  <td>Inserts the scripts in the head section.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr id="reorderScriptSet">
  <td><?php echo CHtml::link('reorderScriptSet()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'reorderScriptSet-detail')); ?></td>
  <td></td>
  <td>YdClientScript</td>
</tr>
<tr id="reorderScripts">
  <td><?php echo CHtml::link('reorderScripts()', array('/site/doc', 'view' => 'YdClientScript', '#' => 'reorderScripts-detail')); ?></td>
  <td></td>
  <td>YdClientScript</td>
</tr>
<tr class="inherited" id="reset">
  <td><?php echo CHtml::link('reset()', array('/site/doc', 'view' => 'CClientScript', '#' => 'reset-detail')); ?></td>
  <td>Cleans all registered scripts.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="setCoreScriptUrl">
  <td><?php echo CHtml::link('setCoreScriptUrl()', array('/site/doc', 'view' => 'CClientScript', '#' => 'setCoreScriptUrl-detail')); ?></td>
  <td>Sets the base URL of all core javascript files.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
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
<tr class="inherited" id="recordCachingAction">
  <td><?php echo CHtml::link('recordCachingAction()', array('/site/doc', 'view' => 'CClientScript', '#' => 'recordCachingAction-detail')); ?></td>
  <td>Records a method call when an output cache is in effect.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="remapScripts">
  <td><?php echo CHtml::link('remapScripts()', array('/site/doc', 'view' => 'CClientScript', '#' => 'remapScripts-detail')); ?></td>
  <td>Uses <?php echo CHtml::link('scriptMap', array('/site/doc', 'view' => 'YdClientScript', '#' => 'scriptMap')); ?> to re-map the registered scripts.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="renderScriptBatch">
  <td><?php echo CHtml::link('renderScriptBatch()', array('/site/doc', 'view' => 'CClientScript', '#' => 'renderScriptBatch-detail')); ?></td>
  <td>Composes script HTML block from the given script values,</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
<tr class="inherited" id="unifyScripts">
  <td><?php echo CHtml::link('unifyScripts()', array('/site/doc', 'view' => 'CClientScript', '#' => 'unifyScripts-detail')); ?></td>
  <td>Removes duplicated scripts from <?php echo CHtml::link('scriptFiles', array('/site/doc', 'view' => 'YdClientScript', '#' => 'scriptFiles')); ?>.</td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="css-detail">
css<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$css</b>;</div>

<p></p>


<div class="detailHeader" id="cssFiles-detail">
cssFiles<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$cssFiles</b>;</div>

<p>the registered CSS files (CSS URL=>media type).</p>


<div class="detailHeader" id="cssFilesOrder-detail">
cssFilesOrder<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$cssFilesOrder</b>;</div>

<p></p>


<div class="detailHeader" id="cssOrder-detail">
cssOrder<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$cssOrder</b>;</div>

<p></p>


<div class="detailHeader" id="scriptFiles-detail">
scriptFiles<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$scriptFiles</b>;</div>

<p>the registered JavaScript files (position, key => URL)</p>


<div class="detailHeader" id="scriptFilesOrder-detail">
scriptFilesOrder<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$scriptFilesOrder</b>;</div>

<p></p>


<div class="detailHeader" id="scripts-detail">
scripts<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$scripts</b>;</div>

<p>the registered JavaScript code blocks (position, key => code)</p>


<div class="detailHeader" id="scriptsOrder-detail">
scriptsOrder<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$scriptsOrder</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="registerCoreScript-detail">
registerCoreScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public YdClientScript <b>registerCoreScript</b>(string $name, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the script package.</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">YdClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L300">dressing\components\YdClientScript.php#L300</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;do&nbsp;not&nbsp;load&nbsp;these&nbsp;scripts&nbsp;on&nbsp;ajax<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ignoreAjax&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'yiiactiveform'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap-yii'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jquery-css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'notify'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.js'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ignoreAjax</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a script package that is listed in <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'YdClientScript', '#' => 'packages')); ?>.</p>

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
public YdClientScript <b>registerCss</b>(string $id, string $css, string $media='', array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$css</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$media</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">YdClientScript</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L109">dressing\components\YdClientScript.php#L109</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$css</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'order'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssOrder</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">registerCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$css</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="registerCssFile-detail">
registerCssFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public YdClientScript <b>registerCssFile</b>(string $url, string $media='')</div>
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
  <td class="paramTypeCol">YdClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L57">dressing\components\YdClientScript.php#L57</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;do&nbsp;not&nbsp;load&nbsp;these&nbsp;scripts&nbsp;on&nbsp;ajax<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ignoreAjax&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'yii.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap-yii.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap-yii.min.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap-responsive.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap-responsive.min.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.no-responsive.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.no-responsive.min.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.min.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'font-awesome.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'font-awesome.min.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jquery-ui-bootstrap.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jquery-ui-bootstrap.min.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap-notify.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap-notify.min.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jquery.qtip.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'app.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'yii-dressing.css'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$ignoreAjax&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$ignore</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">endsWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ignore</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a CSS file</p>


<div class="detailHeader" id="registerCssFileOrder-detail">
registerCssFileOrder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public YdClientScript <b>registerCssFileOrder</b>(string $url, string $media='', int $order=0)</div>
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
  <td class="paramNameCol">$order</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">YdClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L96">dressing\components\YdClientScript.php#L96</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCssFileOrder</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$order&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFilesOrder</span><span style="color: #007700">[</span><span style="color: #0000BB">$url</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a CSS file</p>


<div class="detailHeader" id="registerCssOrder-detail">
registerCssOrder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public YdClientScript <b>registerCssOrder</b>(string $id, string $css, string $media='', int $order=0)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$css</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$media</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$order</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">YdClientScript</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L125">dressing\components\YdClientScript.php#L125</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCssOrder</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$css</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$order&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssOrder</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$css</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="registerScript-detail">
registerScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?> <b>registerScript</b>(string $id, string $script, integer $position=NULL, array $htmlOptions=array (
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
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L265">dressing\components\YdClientScript.php#L265</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$script</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;array&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$script</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
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
public YdClientScript <b>registerScriptFile</b>(string $url, int|null $position=NULL, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">URL of the javascript file</td>
</tr>
<tr>
  <td class="paramNameCol">$position</td>
  <td class="paramTypeCol">int|null</td>
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
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">YdClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L209">dressing\components\YdClientScript.php#L209</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;array&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;do&nbsp;not&nbsp;load&nbsp;these&nbsp;scripts&nbsp;on&nbsp;ajax<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ignoreAjax&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jquery-ui.min.js'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jquery-ui.js'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jquery-ui-i18n.min.js'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jquery-ui-i18n.js'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.min.js'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.js'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$ignoreAjax&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$ignore</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">endsWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ignore</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a javascript file.</p>


<div class="detailHeader" id="registerScriptFileOrder-detail">
registerScriptFileOrder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public YdClientScript <b>registerScriptFileOrder</b>(string $url, int|null $position=0, int $order=0)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">URL of the javascript file</td>
</tr>
<tr>
  <td class="paramNameCol">$position</td>
  <td class="paramTypeCol">int|null</td>
  <td class="paramDescCol">the position of the JavaScript code. Valid values include the following:
<ul>
<li>CClientScript::POS_HEAD : the script is inserted in the head section right before the title element.</li>
<li>CClientScript::POS_BEGIN : the script is inserted at the beginning of the body section.</li>
<li>CClientScript::POS_END : the script is inserted at the end of the body section.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">$order</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">YdClientScript</td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L242">dressing\components\YdClientScript.php#L242</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerScriptFileOrder</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$order&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$position&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$position&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultScriptFilePosition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFilesOrder</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">][</span><span style="color: #0000BB">$url</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a javascript file.</p>


<div class="detailHeader" id="registerScriptOrder-detail">
registerScriptOrder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?> <b>registerScriptOrder</b>(string $id, string $script, integer $position=NULL, int $order=0)</div>
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
  <td class="paramNameCol">$order</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L285">dressing\components\YdClientScript.php#L285</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerScriptOrder</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$script</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$order&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$position&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$position&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultScriptPosition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptsOrder</span><span style="color: #007700">[</span><span style="color: #0000BB">$position</span><span style="color: #007700">][</span><span style="color: #0000BB">$id</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$script</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a piece of javascript code.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L138">dressing\components\YdClientScript.php#L138</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasScripts</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderCoreScripts</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">remapScripts</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">unifyScripts</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">reorderScripts</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderHead</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableJavaScript</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderBodyBegin</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderBodyEnd</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the registered scripts.
This method is called in <?php echo CHtml::link('CController::render', array('/site/doc', 'view' => 'CController', '#' => 'render')); ?> when it finishes
rendering content. CClientScript thus gets a chance to insert script tags
at <code>head</code> and <code>body</code> sections in the HTML output.</p>


<div class="detailHeader" id="reorderScriptSet-detail">
reorderScriptSet()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>reorderScriptSet</b>($files $files, $order $order)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$files</td>
  <td class="paramTypeCol">$files</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$order</td>
  <td class="paramTypeCol">$order</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L178">dressing\components\YdClientScript.php#L178</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">reorderScriptSet</span><span style="color: #007700">(</span><span style="color: #0000BB">$files</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$order</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$order</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">asort</span><span style="color: #007700">(</span><span style="color: #0000BB">$order</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newFiles&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$order&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$_</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$files</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$files</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$files</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$newFiles&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$files</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$files</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="reorderScripts-detail">
reorderScripts()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>reorderScripts</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdClientScript.php#L161">dressing\components\YdClientScript.php#L161</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">reorderScripts</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">reorderScriptSet</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFiles</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFilesOrder</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">css&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">reorderScriptSet</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">css</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssOrder</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">reorderScriptSet</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFiles</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">],&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFilesOrder</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptFilesOrder</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">]&nbsp;:&nbsp;array());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">reorderScriptSet</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scripts</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">],&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptsOrder</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scriptsOrder</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">]&nbsp;:&nbsp;array());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


