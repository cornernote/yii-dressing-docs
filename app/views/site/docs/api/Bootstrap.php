<?php
$this->pageTitle = $this->pageHeading = 'Bootstrap';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'Bootstrap';
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
  <td><?php echo CHtml::link('booster.components', array('/site/doc', '#' => 'booster.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class Bootstrap &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php">booster/components/Bootstrap.php</a></td>
</tr>
</table>

<div id="classDescription">
## Bootstrap application component.
<br/><br/>
This is the main YiiBooster component which you should attach to your Yii CWebApplication instance.
<br/><br/>
Almost all configuration options are meaningful only at the initialization time,
changing them after `Bootstrap` was attached to application will have no effect.
<br/><br/>
WARNING: to be renamed in future versions!</div>
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
<tr id="_assetsUrl">
  <td><?php echo CHtml::link('_assetsUrl', array('/site/doc', 'view' => 'Bootstrap', '#' => '_assetsUrl-detail')); ?></td>
  <td>string</td>
  <td>handles the assets folder path.</td>
  <td>Bootstrap</td>
</tr>
<tr id="ajaxCssLoad">
  <td><?php echo CHtml::link('ajaxCssLoad', array('/site/doc', 'view' => 'Bootstrap', '#' => 'ajaxCssLoad-detail')); ?></td>
  <td>boolean</td>
  <td>to register Bootstrap CSS files in AJAX requests
Defaults to false and you probably have no reason to set it to true.</td>
  <td>Bootstrap</td>
</tr>
<tr id="ajaxJsLoad">
  <td><?php echo CHtml::link('ajaxJsLoad', array('/site/doc', 'view' => 'Bootstrap', '#' => 'ajaxJsLoad-detail')); ?></td>
  <td>boolean</td>
  <td>to register the Bootstrap JavaScript files in AJAX requests
Defaults to false and you probably have no reason to set it to true.</td>
  <td>Bootstrap</td>
</tr>
<tr id="assetsRegistry">
  <td><?php echo CHtml::link('assetsRegistry', array('/site/doc', 'view' => 'Bootstrap', '#' => 'assetsRegistry-detail')); ?></td>
  <td><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
  <td>Something which can register assets for later inclusion on page.</td>
  <td>Bootstrap</td>
</tr>
<tr id="assetsUrl">
  <td><?php echo CHtml::link('assetsUrl', array('/site/doc', 'view' => 'Bootstrap', '#' => 'assetsUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the URL to the published assets folder.</td>
  <td>Bootstrap</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="bootstrapCss">
  <td><?php echo CHtml::link('bootstrapCss', array('/site/doc', 'view' => 'Bootstrap', '#' => 'bootstrapCss-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to register the Bootstrap core CSS (bootstrap.</td>
  <td>Bootstrap</td>
</tr>
<tr id="coreCss">
  <td><?php echo CHtml::link('coreCss', array('/site/doc', 'view' => 'Bootstrap', '#' => 'coreCss-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to register any CSS at all.</td>
  <td>Bootstrap</td>
</tr>
<tr id="enableBootboxJS">
  <td><?php echo CHtml::link('enableBootboxJS', array('/site/doc', 'view' => 'Bootstrap', '#' => 'enableBootboxJS-detail')); ?></td>
  <td>bool</td>
  <td>Whether to enable bootbox messages or not.</td>
  <td>Bootstrap</td>
</tr>
<tr id="enableCdn">
  <td><?php echo CHtml::link('enableCdn', array('/site/doc', 'view' => 'Bootstrap', '#' => 'enableCdn-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to use CDN server URLs for assets.</td>
  <td>Bootstrap</td>
</tr>
<tr id="enableJS">
  <td><?php echo CHtml::link('enableJS', array('/site/doc', 'view' => 'Bootstrap', '#' => 'enableJS-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to register jQuery and the Bootstrap JavaScript.</td>
  <td>Bootstrap</td>
</tr>
<tr id="enableNotifierJS">
  <td><?php echo CHtml::link('enableNotifierJS', array('/site/doc', 'view' => 'Bootstrap', '#' => 'enableNotifierJS-detail')); ?></td>
  <td>bool</td>
  <td>Whether to enable bootstrap notifier.</td>
  <td>Bootstrap</td>
</tr>
<tr id="fontAwesomeCss">
  <td><?php echo CHtml::link('fontAwesomeCss', array('/site/doc', 'view' => 'Bootstrap', '#' => 'fontAwesomeCss-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to register the Font Awesome CSS (font-awesome.</td>
  <td>Bootstrap</td>
</tr>
<tr id="forceCopyAssets">
  <td><?php echo CHtml::link('forceCopyAssets', array('/site/doc', 'view' => 'Bootstrap', '#' => 'forceCopyAssets-detail')); ?></td>
  <td>bool|null</td>
  <td>Whether to republish assets on each request.</td>
  <td>Bootstrap</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="jqueryCss">
  <td><?php echo CHtml::link('jqueryCss', array('/site/doc', 'view' => 'Bootstrap', '#' => 'jqueryCss-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to register the JQuery-specific CSS missing from Bootstrap.</td>
  <td>Bootstrap</td>
</tr>
<tr id="minify">
  <td><?php echo CHtml::link('minify', array('/site/doc', 'view' => 'Bootstrap', '#' => 'minify-detail')); ?></td>
  <td>bool</td>
  <td>Whether to use minified CSS and Javascript files.</td>
  <td>Bootstrap</td>
</tr>
<tr id="packages">
  <td><?php echo CHtml::link('packages', array('/site/doc', 'view' => 'Bootstrap', '#' => 'packages-detail')); ?></td>
  <td>array</td>
  <td>list of script packages (name=>package spec).</td>
  <td>Bootstrap</td>
</tr>
<tr id="plugins">
  <td><?php echo CHtml::link('plugins', array('/site/doc', 'view' => 'Bootstrap', '#' => 'plugins-detail')); ?></td>
  <td>array</td>
  <td>plugin initial options (name=>options).</td>
  <td>Bootstrap</td>
</tr>
<tr id="popoverSelector">
  <td><?php echo CHtml::link('popoverSelector', array('/site/doc', 'view' => 'Bootstrap', '#' => 'popoverSelector-detail')); ?></td>
  <td>string</td>
  <td>Default popover target CSS selector.</td>
  <td>Bootstrap</td>
</tr>
<tr id="responsiveCss">
  <td><?php echo CHtml::link('responsiveCss', array('/site/doc', 'view' => 'Bootstrap', '#' => 'responsiveCss-detail')); ?></td>
  <td>boolean</td>
  <td>whether to register the Bootstrap responsive CSS (bootstrap-responsive.</td>
  <td>Bootstrap</td>
</tr>
<tr id="tooltipSelector">
  <td><?php echo CHtml::link('tooltipSelector', array('/site/doc', 'view' => 'Bootstrap', '#' => 'tooltipSelector-detail')); ?></td>
  <td>string</td>
  <td>default tooltip CSS selector.</td>
  <td>Bootstrap</td>
</tr>
<tr id="uniqueScriptId">
  <td><?php echo CHtml::link('uniqueScriptId', array('/site/doc', 'view' => 'Bootstrap', '#' => 'uniqueScriptId-detail')); ?></td>
  <td>string</td>
  <td>Generates a "somewhat" random id string.</td>
  <td>Bootstrap</td>
</tr>
<tr id="version">
  <td><?php echo CHtml::link('version', array('/site/doc', 'view' => 'Bootstrap', '#' => 'version-detail')); ?></td>
  <td>string</td>
  <td>Returns the extension version number.</td>
  <td>Bootstrap</td>
</tr>
<tr id="yiiCss">
  <td><?php echo CHtml::link('yiiCss', array('/site/doc', 'view' => 'Bootstrap', '#' => 'yiiCss-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to register YiiBooster custom CSS overrides
providing compatibility between various parts of the system.</td>
  <td>Bootstrap</td>
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
<tr id="getAssetsUrl">
  <td><?php echo CHtml::link('getAssetsUrl()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'getAssetsUrl-detail')); ?></td>
  <td>Returns the URL to the published assets folder.</td>
  <td>Bootstrap</td>
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
<tr id="getUniqueScriptId">
  <td><?php echo CHtml::link('getUniqueScriptId()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'getUniqueScriptId-detail')); ?></td>
  <td>Generates a "somewhat" random id string.</td>
  <td>Bootstrap</td>
</tr>
<tr id="getVersion">
  <td><?php echo CHtml::link('getVersion()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'getVersion-detail')); ?></td>
  <td>Returns the extension version number.</td>
  <td>Bootstrap</td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'init-detail')); ?></td>
  <td>Initializes the component.</td>
  <td>Bootstrap</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerAffix">
  <td><?php echo CHtml::link('registerAffix()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerAffix-detail')); ?></td>
  <td>Registers the affix plugin</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerAlert">
  <td><?php echo CHtml::link('registerAlert()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerAlert-detail')); ?></td>
  <td>Registers the Bootstrap alert plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerAssetCss">
  <td><?php echo CHtml::link('registerAssetCss()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerAssetCss-detail')); ?></td>
  <td>Registers a CSS file in the asset's css folder</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerAssetJs">
  <td><?php echo CHtml::link('registerAssetJs()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerAssetJs-detail')); ?></td>
  <td>Register a javascript file in the asset's js folder</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerBootstrapCss">
  <td><?php echo CHtml::link('registerBootstrapCss()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerBootstrapCss-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="registerButton">
  <td><?php echo CHtml::link('registerButton()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerButton-detail')); ?></td>
  <td>Registers the Bootstrap buttons plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerCarousel">
  <td><?php echo CHtml::link('registerCarousel()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerCarousel-detail')); ?></td>
  <td>Registers the Bootstrap carousel plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerCollapse">
  <td><?php echo CHtml::link('registerCollapse()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerCollapse-detail')); ?></td>
  <td>Registers the Bootstrap collapse plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerColorPicker">
  <td><?php echo CHtml::link('registerColorPicker()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerColorPicker-detail')); ?></td>
  <td>Registers the Bootstrap-colorpicker plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerDatePicker">
  <td><?php echo CHtml::link('registerDatePicker()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerDatePicker-detail')); ?></td>
  <td>Register the Bootstrap datepicker plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerDateRangePlugin">
  <td><?php echo CHtml::link('registerDateRangePlugin()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerDateRangePlugin-detail')); ?></td>
  <td>Registers the Bootstrap daterange plugin</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerDateTimePicker">
  <td><?php echo CHtml::link('registerDateTimePicker()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerDateTimePicker-detail')); ?></td>
  <td>Register the Bootstrap datetimepicker plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerDropdown">
  <td><?php echo CHtml::link('registerDropdown()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerDropdown-detail')); ?></td>
  <td>Registers the Bootstrap dropdowns plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerFontAwesomeCss">
  <td><?php echo CHtml::link('registerFontAwesomeCss()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerFontAwesomeCss-detail')); ?></td>
  <td>Registers the Font Awesome CSS.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerHtml5Editor">
  <td><?php echo CHtml::link('registerHtml5Editor()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerHtml5Editor-detail')); ?></td>
  <td>Registers the Bootstrap-whysihtml5 plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerJQueryCss">
  <td><?php echo CHtml::link('registerJQueryCss()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerJQueryCss-detail')); ?></td>
  <td>Register the compatibility layer for jQuery UI + Twitter Bootstrap 2.3 combo</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerModal">
  <td><?php echo CHtml::link('registerModal()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerModal-detail')); ?></td>
  <td>Registers the Bootstrap modal plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerModalManager">
  <td><?php echo CHtml::link('registerModalManager()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerModalManager-detail')); ?></td>
  <td>Registers the Modal manager plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerPackage">
  <td><?php echo CHtml::link('registerPackage()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerPackage-detail')); ?></td>
  <td>Registers a script package that is listed in <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'Bootstrap', '#' => 'packages')); ?>.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerPlugin">
  <td><?php echo CHtml::link('registerPlugin()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerPlugin-detail')); ?></td>
  <td>Registers a Bootstrap plugin using the given selector and options.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerPopover">
  <td><?php echo CHtml::link('registerPopover()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerPopover-detail')); ?></td>
  <td>Registers the Bootstrap popover plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerRedactor">
  <td><?php echo CHtml::link('registerRedactor()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerRedactor-detail')); ?></td>
  <td>Registers the RedactorJS plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerScrollSpy">
  <td><?php echo CHtml::link('registerScrollSpy()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerScrollSpy-detail')); ?></td>
  <td>Registers the Bootstrap scrollspy plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerTabs">
  <td><?php echo CHtml::link('registerTabs()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerTabs-detail')); ?></td>
  <td>Registers the Bootstrap tabs plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerTooltip">
  <td><?php echo CHtml::link('registerTooltip()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerTooltip-detail')); ?></td>
  <td>Registers the Bootstrap tooltip plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerTypeahead">
  <td><?php echo CHtml::link('registerTypeahead()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerTypeahead-detail')); ?></td>
  <td>Registers the Bootstrap typeahead plugin.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerYiiCss">
  <td><?php echo CHtml::link('registerYiiCss()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerYiiCss-detail')); ?></td>
  <td>Register our overrides for jQuery UI + Twitter Bootstrap 2.3 combo</td>
  <td>Bootstrap</td>
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
<tr id="addOurPackagesToYii">
  <td><?php echo CHtml::link('addOurPackagesToYii()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'addOurPackagesToYii-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="appendUserSuppliedPackagesToOurs">
  <td><?php echo CHtml::link('appendUserSuppliedPackagesToOurs()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'appendUserSuppliedPackagesToOurs-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="includeAssets">
  <td><?php echo CHtml::link('includeAssets()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'includeAssets-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="isInConsoleMode">
  <td><?php echo CHtml::link('isInConsoleMode()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'isInConsoleMode-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="isInTests">
  <td><?php echo CHtml::link('isInTests()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'isInTests-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="makeBootstrapCssPackage">
  <td><?php echo CHtml::link('makeBootstrapCssPackage()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'makeBootstrapCssPackage-detail')); ?></td>
  <td>We use the values of $this->responsiveCss, $this->fontAwesomeCss,</td>
  <td>Bootstrap</td>
</tr>
<tr id="makeSelect2Package">
  <td><?php echo CHtml::link('makeSelect2Package()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'makeSelect2Package-detail')); ?></td>
  <td>Make select2 package definition</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerCssPackagesIfEnabled">
  <td><?php echo CHtml::link('registerCssPackagesIfEnabled()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerCssPackagesIfEnabled-detail')); ?></td>
  <td>If we did not disabled registering CSS packages, register them.</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerJsPackagesIfEnabled">
  <td><?php echo CHtml::link('registerJsPackagesIfEnabled()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerJsPackagesIfEnabled-detail')); ?></td>
  <td>If `enableJS` is not `false`, register our Javascript packages</td>
  <td>Bootstrap</td>
</tr>
<tr id="registerMetadataForResponsive">
  <td><?php echo CHtml::link('registerMetadataForResponsive()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerMetadataForResponsive-detail')); ?></td>
  <td>Required metadata for responsive CSS to work.</td>
  <td>Bootstrap</td>
</tr>
<tr id="setAssetsRegistryIfNotDefined">
  <td><?php echo CHtml::link('setAssetsRegistryIfNotDefined()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'setAssetsRegistryIfNotDefined-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="setRootAliasIfUndefined">
  <td><?php echo CHtml::link('setRootAliasIfUndefined()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'setRootAliasIfUndefined-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="tryGetInfoForPlugin">
  <td><?php echo CHtml::link('tryGetInfoForPlugin()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'tryGetInfoForPlugin-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="tryGetOptionsForPlugin">
  <td><?php echo CHtml::link('tryGetOptionsForPlugin()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'tryGetOptionsForPlugin-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
<tr id="tryGetSelectorForPlugin">
  <td><?php echo CHtml::link('tryGetSelectorForPlugin()', array('/site/doc', 'view' => 'Bootstrap', '#' => 'tryGetSelectorForPlugin-detail')); ?></td>
  <td></td>
  <td>Bootstrap</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="_assetsUrl-detail">
_assetsUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$_assetsUrl</b>;</div>

<p>handles the assets folder path.</p>


<div class="detailHeader" id="ajaxCssLoad-detail">
ajaxCssLoad<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$ajaxCssLoad</b>;</div>

<p>to register Bootstrap CSS files in AJAX requests
Defaults to false and you probably have no reason to set it to true.</p>


<div class="detailHeader" id="ajaxJsLoad-detail">
ajaxJsLoad<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$ajaxJsLoad</b>;</div>

<p>to register the Bootstrap JavaScript files in AJAX requests
Defaults to false and you probably have no reason to set it to true.</p>


<div class="detailHeader" id="assetsRegistry-detail">
assetsRegistry<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?> <b>$assetsRegistry</b>;</div>

<p>Something which can register assets for later inclusion on page.
For now it's just the `Yii::app()->clientScript`</p>


<div class="detailHeader" id="assetsUrl-detail">
assetsUrl<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getAssetsUrl</b>', array('/site/doc', 'view' => 'Bootstrap', '#' => 'getAssetsUrl')); ?>()</div>

<p>Returns the URL to the published assets folder.</p>


<div class="detailHeader" id="bootstrapCss-detail">
bootstrapCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$bootstrapCss</b>;</div>

<p>Whether to register the Bootstrap core CSS (bootstrap.min.css).
Defaults to true.</p>


<div class="detailHeader" id="coreCss-detail">
coreCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$coreCss</b>;</div>

<p>Whether to register any CSS at all.
Defaults to true.</p>


<div class="detailHeader" id="enableBootboxJS-detail">
enableBootboxJS<span class="detailHeaderTag">
property
 (available since v1.0.5)
</span>
</div>

<div class="signature">
public bool <b>$enableBootboxJS</b>;</div>

<p>Whether to enable bootbox messages or not. Default value is true.</p>


<div class="detailHeader" id="enableCdn-detail">
enableCdn<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$enableCdn</b>;</div>

<p>Whether to use CDN server URLs for assets.
Note that not all assets will be served from CDN and we are using several public CDN servers,
not some single private one.
<br/><br/>
Consult with the packages configuration to discover precisely which assets will be served from CDN.</p>


<div class="detailHeader" id="enableJS-detail">
enableJS<span class="detailHeaderTag">
property
 (available since v0.9.10)
</span>
</div>

<div class="signature">
public boolean <b>$enableJS</b>;</div>

<p>Whether to register jQuery and the Bootstrap JavaScript.</p>


<div class="detailHeader" id="enableNotifierJS-detail">
enableNotifierJS<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$enableNotifierJS</b>;</div>

<p>Whether to enable bootstrap notifier.
Defaults to true.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>https://github.com/Nijikokun/bootstrap-notify</li>
</ul>
</div>

<div class="detailHeader" id="fontAwesomeCss-detail">
fontAwesomeCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$fontAwesomeCss</b>;</div>

<p>Whether to register the Font Awesome CSS (font-awesome.min.css).
Defaults to false.
<br/><br/>
Note that FontAwesome does not include some of the Twitter Bootstrap built-in icons!</p>


<div class="detailHeader" id="forceCopyAssets-detail">
forceCopyAssets<span class="detailHeaderTag">
property
 (available since vYiiBooster 1.0.6)
</span>
</div>

<div class="signature">
public bool|null <b>$forceCopyAssets</b>;</div>

<p>Whether to republish assets on each request.
If set to true, all YiiBooster assets will be republished on each request.
Passing null to this option restores the default handling of CAssetManager of YiiBooster assets.</p>


<div class="detailHeader" id="jqueryCss-detail">
jqueryCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$jqueryCss</b>;</div>

<p>Whether to register the JQuery-specific CSS missing from Bootstrap.</p>


<div class="detailHeader" id="minify-detail">
minify<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$minify</b>;</div>

<p>Whether to use minified CSS and Javascript files. Default to true.</p>


<div class="detailHeader" id="packages-detail">
packages<span class="detailHeaderTag">
property
 (available since v1.0.7)
</span>
</div>

<div class="signature">
public array <b>$packages</b>;</div>

<p>list of script packages (name=>package spec).
This property keeps a list of named script packages, each of which can contain
a set of CSS and/or JavaScript script files, and their dependent package names.
By calling <?php echo CHtml::link('registerPackage', array('/site/doc', 'view' => 'Bootstrap', '#' => 'registerPackage')); ?>, one can register a whole package of client
scripts together with their dependent packages and render them in the HTML output.</p>


<div class="detailHeader" id="plugins-detail">
plugins<span class="detailHeaderTag">
property
 (available since v0.9.8)
</span>
</div>

<div class="signature">
public array <b>$plugins</b>;</div>

<p>plugin initial options (name=>options).
Each array key-value pair represents the initial options for a single plugin class,
with the array key being the plugin name, and array value being the initial options array.</p>


<div class="detailHeader" id="popoverSelector-detail">
popoverSelector<span class="detailHeaderTag">
property
 (available since v1.1.0 NOTE: this parameter changed its logic completely!
Previously it was the selector from which to start delegating the popovers.
Now the popovers are always being bound to specific elements.
According to the documentation: http://twitter.github.io/bootstrap/javascript.html#popovers)
</span>
</div>

<div class="signature">
public string <b>$popoverSelector</b>;</div>

<p>Default popover target CSS selector.</p>


<div class="detailHeader" id="responsiveCss-detail">
responsiveCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$responsiveCss</b>;</div>

<p>whether to register the Bootstrap responsive CSS (bootstrap-responsive.min.css).
Defaults to false.</p>


<div class="detailHeader" id="tooltipSelector-detail">
tooltipSelector<span class="detailHeaderTag">
property
 (available since v1.1.0 NOTE: this parameter changed its logic completely!
Previously it was the selector from which to start delegating the tooltips.
Now the tooltips always start spreading from `body`, and this parameter controls
what elements will actually receive the tooltip behavior.
According to the documentation: http://twitter.github.io/bootstrap/javascript.html#tooltips
previously it was the direct selector to which to apply the `tooltip` plugin,
now it is the value for `selector` plugin option.)
</span>
</div>

<div class="signature">
public string <b>$tooltipSelector</b>;</div>

<p>default tooltip CSS selector.</p>


<div class="detailHeader" id="uniqueScriptId-detail">
uniqueScriptId<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.0)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getUniqueScriptId</b>', array('/site/doc', 'view' => 'Bootstrap', '#' => 'getUniqueScriptId')); ?>()</div>

<p>Generates a "somewhat" random id string.</p>


<div class="detailHeader" id="version-detail">
version<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getVersion</b>', array('/site/doc', 'view' => 'Bootstrap', '#' => 'getVersion')); ?>()</div>

<p>Returns the extension version number.</p>


<div class="detailHeader" id="yiiCss-detail">
yiiCss<span class="detailHeaderTag">
property
 (available since v0.9.12)
</span>
</div>

<div class="signature">
public boolean <b>$yiiCss</b>;</div>

<p>Whether to register YiiBooster custom CSS overrides
providing compatibility between various parts of the system.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addOurPackagesToYii-detail">
addOurPackagesToYii()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>addOurPackagesToYii</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L254">booster/components/Bootstrap.php#L254</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addOurPackagesToYii</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">packages&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$definition</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addPackage</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$definition</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="appendUserSuppliedPackagesToOurs-detail">
appendUserSuppliedPackagesToOurs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>appendUserSuppliedPackagesToOurs</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L239">booster/components/Bootstrap.php#L239</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">appendUserSuppliedPackagesToOurs</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bootstrapPackages&nbsp;</span><span style="color: #007700">=&nbsp;require(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.components'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'/packages.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bootstrapPackages&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">makeBootstrapCssPackage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bootstrapPackages&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">makeSelect2Package</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">packages&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bootstrapPackages</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">packages<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getAssetsUrl-detail">
getAssetsUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getAssetsUrl</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">an absolute URL to the published asset</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L384">booster/components/Bootstrap.php#L384</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAssetsUrl</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assetsUrl</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assetsUrl</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assetsUrl&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getAssetManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">publish</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.assets'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">forceCopyAssets<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Returns the URL to the published assets folder.</p>


<div class="detailHeader" id="getUniqueScriptId-detail">
getUniqueScriptId()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getUniqueScriptId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L873">booster/components/Bootstrap.php#L873</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUniqueScriptId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">uniqid</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a "somewhat" random id string.</p>


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
  <td class="paramDescCol">the version</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L335">booster/components/Bootstrap.php#L335</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getVersion</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'2.0.0'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the extension version number.</p>


<div class="detailHeader" id="includeAssets-detail">
includeAssets()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>includeAssets</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L225">booster/components/Bootstrap.php#L225</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">includeAssets</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendUserSuppliedPackagesToOurs</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addOurPackagesToYii</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCssPackagesIfEnabled</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerJsPackagesIfEnabled</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L185">booster/components/Bootstrap.php#L185</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Prevents&nbsp;the&nbsp;extension&nbsp;from&nbsp;registering&nbsp;scripts&nbsp;and&nbsp;publishing&nbsp;assets&nbsp;when&nbsp;ran&nbsp;from&nbsp;the&nbsp;command&nbsp;line.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isInConsoleMode</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isInTests</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAssetsRegistryIfNotDefined</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setRootAliasIfUndefined</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">includeAssets</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the component.</p>


<div class="detailHeader" id="isInConsoleMode-detail">
isInConsoleMode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected bool <b>isInConsoleMode</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">*</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L201">booster/components/Bootstrap.php#L201</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isInConsoleMode</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">CConsoleApplication&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">PHP_SAPI&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'cli'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isInTests-detail">
isInTests()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected bool <b>isInTests</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">*</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L207">booster/components/Bootstrap.php#L207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isInTests</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'IS_IN_TESTS'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">IS_IN_TESTS</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="makeBootstrapCssPackage-detail">
makeBootstrapCssPackage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>makeBootstrapCssPackage</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L419">booster/components/Bootstrap.php#L419</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">makeBootstrapCssPackage</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableCdn&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">responsiveCss&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minify</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{</span><span style="color: #FF8000">//&nbsp;CDN&nbsp;hosts&nbsp;only&nbsp;responsive&nbsp;minified&nbsp;versions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseUrl&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"css/bootstrap-combined"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseUrl&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAssetsUrl</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'/bootstrap/'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"css/bootstrap"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">responsiveCss</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'.no-responsive'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontAwesomeCss&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'.no-icons'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minify&nbsp;&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'.min.css'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'.css'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #DD0000">'bootstrap.css'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'baseUrl'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'css'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>We use the values of $this->responsiveCss, $this->fontAwesomeCss,
$this->minify and $this->enableCdn to construct the proper package definition
and install and register it.</p>


<div class="detailHeader" id="makeSelect2Package-detail">
makeSelect2Package()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>makeSelect2Package</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L447">booster/components/Bootstrap.php#L447</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">makeSelect2Package</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minify&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'select2.min.js'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'select2.js'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">language</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'en'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$locale&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'select2_locale_'</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">language</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">).&nbsp;</span><span style="color: #DD0000">'.js'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(@</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.assets.select2'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$locale&nbsp;</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$locale</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$locale&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'select2_locale_'</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">language&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'.js'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(@</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.assets.select2'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$locale&nbsp;</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$locale</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #DD0000">'select2'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'baseUrl'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAssetsUrl</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'/select2/'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'js'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$jsFiles</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'css'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'select2.css'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'depends'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>Make select2 package definition</p>


<div class="detailHeader" id="registerAffix-detail">
registerAffix()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerAffix</b>(null $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L764">booster/components/Bootstrap.php#L764</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerAffix</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_AFFIX</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the affix plugin</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#affix">http://twitter.github.com/bootstrap/javascript.html#affix</a></li>
</ul>
</div>

<div class="detailHeader" id="registerAlert-detail">
registerAlert()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerAlert</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L547">booster/components/Bootstrap.php#L547</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerAlert</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_ALERT</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap alert plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#alerts">http://twitter.github.com/bootstrap/javascript.html#alerts</a></li>
</ul>
</div>

<div class="detailHeader" id="registerAssetCss-detail">
registerAssetCss()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerAssetCss</b>(string $name, string $media='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the css file name to register</td>
</tr>
<tr>
  <td class="paramNameCol">$media</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">media that the CSS file should be applied to. If empty, it means all media types.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L362">booster/components/Bootstrap.php#L362</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerAssetCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAssetsUrl</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">"/css/</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$media</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a CSS file in the asset's css folder</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CClientScript::registerCssFile', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerCssFile')); ?></li>
</ul>
</div>

<div class="detailHeader" id="registerAssetJs-detail">
registerAssetJs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerAssetJs</b>(string $name, int $position=2)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the js file name to register</td>
</tr>
<tr>
  <td class="paramNameCol">$position</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">the position of the JavaScript code.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L375">booster/components/Bootstrap.php#L375</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAssetsUrl</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">"/js/</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$position</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Register a javascript file in the asset's js folder</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CClientScript::registerScriptFile', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerScriptFile')); ?></li>
</ul>
</div>

<div class="detailHeader" id="registerBootstrapCss-detail">
registerBootstrapCss()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerBootstrapCss</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L408">booster/components/Bootstrap.php#L408</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerBootstrapCss</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.css'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="registerButton-detail">
registerButton()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerButton</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L562">booster/components/Bootstrap.php#L562</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_BUTTON</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap buttons plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#buttons">http://twitter.github.com/bootstrap/javascript.html#buttons</a></li>
</ul>
</div>

<div class="detailHeader" id="registerCarousel-detail">
registerCarousel()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerCarousel</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L577">booster/components/Bootstrap.php#L577</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCarousel</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_CAROUSEL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap carousel plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#carousel">http://twitter.github.com/bootstrap/javascript.html#carousel</a></li>
</ul>
</div>

<div class="detailHeader" id="registerCollapse-detail">
registerCollapse()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerCollapse</b>(string $selector='.collapse', array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L592">booster/components/Bootstrap.php#L592</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCollapse</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'.collapse'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_COLLAPSE</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap collapse plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#collapse">http://twitter.github.com/bootstrap/javascript.html#collapse</a></li>
</ul>
</div>

<div class="detailHeader" id="registerColorPicker-detail">
registerColorPicker()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerColorPicker</b>(null $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L750">booster/components/Bootstrap.php#L750</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerColorPicker</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_COLORPICKER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap-colorpicker plugin.</p>


<div class="detailHeader" id="registerCssPackagesIfEnabled-detail">
registerCssPackagesIfEnabled()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>registerCssPackagesIfEnabled</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L264">booster/components/Bootstrap.php#L264</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCssPackagesIfEnabled</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">coreCss</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxCssLoad&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bootstrapCss</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerBootstrapCss</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontAwesomeCss</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerFontAwesomeCss</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">responsiveCss</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerMetadataForResponsive</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">yiiCss&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerYiiCss</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">jqueryCss&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerJQueryCss</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>If we did not disabled registering CSS packages, register them.</p>


<div class="detailHeader" id="registerDatePicker-detail">
registerDatePicker()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerDatePicker</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L698">booster/components/Bootstrap.php#L698</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerDatePicker</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_DATEPICKER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Register the Bootstrap datepicker plugin.
IMPORTANT: if you register a selector via this method you wont be able to attach events to the plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.eyecon.ro/bootstrap-datepicker/">http://www.eyecon.ro/bootstrap-datepicker/</a></li>
</ul>
</div>

<div class="detailHeader" id="registerDateRangePlugin-detail">
registerDateRangePlugin()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerDateRangePlugin</b>(string $selector, array $options=array (
), string $callback=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
<tr>
  <td class="paramNameCol">$callback</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the javascript callback function</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L780">booster/components/Bootstrap.php#L780</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerDateRangePlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$callback&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUniqueScriptId</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'$("'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'").daterangepicker('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)&nbsp;.&nbsp;(</span><span style="color: #0000BB">$callback<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$callback</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">');'<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap daterange plugin</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.dangrossman.info/2012/08/20/a-date-range-picker-for-twitter-bootstrap/">http://www.dangrossman.info/2012/08/20/a-date-range-picker-for-twitter-bootstrap/</a></li>
</ul>
</div>

<div class="detailHeader" id="registerDateTimePicker-detail">
registerDateTimePicker()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerDateTimePicker</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L714">booster/components/Bootstrap.php#L714</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerDateTimePicker</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_DATETIMEPICKER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Register the Bootstrap datetimepicker plugin.
IMPORTANT: if you register a selector via this method you wont be able to attach events to the plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.malot.fr/bootstrap-datetimepicker/">http://www.malot.fr/bootstrap-datetimepicker/</a></li>
</ul>
</div>

<div class="detailHeader" id="registerDropdown-detail">
registerDropdown()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerDropdown</b>(string $selector='.dropdown-toggle[data-dropdown="dropdown"]', array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L607">booster/components/Bootstrap.php#L607</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerDropdown</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'.dropdown-toggle[data-dropdown="dropdown"]'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_DROPDOWN</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap dropdowns plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#dropdowns">http://twitter.github.com/bootstrap/javascript.html#dropdowns</a></li>
</ul>
</div>

<div class="detailHeader" id="registerFontAwesomeCss-detail">
registerFontAwesomeCss()
<span class="detailHeaderTag">
method
(available since v1.0.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerFontAwesomeCss</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L483">booster/components/Bootstrap.php#L483</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerFontAwesomeCss</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'MSIE&nbsp;7.0'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #DD0000">'font-awesome'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #DD0000">'font-awesome-ie7'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #DD0000">'font-awesome'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Font Awesome CSS.</p>


<div class="detailHeader" id="registerHtml5Editor-detail">
registerHtml5Editor()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerHtml5Editor</b>(null $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L738">booster/components/Bootstrap.php#L738</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerHtml5Editor</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_HTML5EDITOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap-whysihtml5 plugin.</p>


<div class="detailHeader" id="registerJQueryCss-detail">
registerJQueryCss()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerJQueryCss</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L301">booster/components/Bootstrap.php#L301</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerJQueryCss</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery-css'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">scriptMap</span><span style="color: #007700">[</span><span style="color: #DD0000">'jquery-ui.css'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAssetsUrl</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;.&nbsp;</span><span style="color: #DD0000">'/css/jquery-ui-bootstrap.css'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Register the compatibility layer for jQuery UI + Twitter Bootstrap 2.3 combo</p>


<div class="detailHeader" id="registerJsPackagesIfEnabled-detail">
registerJsPackagesIfEnabled()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>registerJsPackagesIfEnabled</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L310">booster/components/Bootstrap.php#L310</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">registerJsPackagesIfEnabled</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableJS</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxJsLoad&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.js'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableBootboxJS</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootbox'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableNotifierJS</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #DD0000">'notify'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPopover</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerTooltip</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>If `enableJS` is not `false`, register our Javascript packages</p>


<div class="detailHeader" id="registerMetadataForResponsive-detail">
registerMetadataForResponsive()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>registerMetadataForResponsive</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L474">booster/components/Bootstrap.php#L474</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">registerMetadataForResponsive</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerMetaTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'width=device-width,&nbsp;initial-scale=1.0'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'viewport'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Required metadata for responsive CSS to work.</p>


<div class="detailHeader" id="registerModal-detail">
registerModal()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerModal</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L622">booster/components/Bootstrap.php#L622</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerModal</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_MODAL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap modal plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#modal">http://twitter.github.com/bootstrap/javascript.html#modal</a></li>
</ul>
</div>

<div class="detailHeader" id="registerModalManager-detail">
registerModalManager()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerModalManager</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L637">booster/components/Bootstrap.php#L637</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerModalManager</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_MODALMANAGER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Modal manager plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>https://github.com/jschr/bootstrap-modal/</li>
</ul>
</div>

<div class="detailHeader" id="registerPackage-detail">
registerPackage()
<span class="detailHeaderTag">
method
(available since v1.0.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?> <b>registerPackage</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the script package.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?></td>
  <td class="paramDescCol">the CClientScript object itself (to support method chaining, available since version 1.1.5).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L349">booster/components/Bootstrap.php#L349</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a script package that is listed in <?php echo CHtml::link('packages', array('/site/doc', 'view' => 'Bootstrap', '#' => 'packages')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CClientScript::registerPackage', array('/site/doc', 'view' => 'CClientScript', '#' => 'registerPackage')); ?></li>
</ul>
</div>

<div class="detailHeader" id="registerPlugin-detail">
registerPlugin()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerPlugin</b>(string $name, string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the plugin</td>
</tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the JavaScript options for the plugin.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L844">booster/components/Bootstrap.php#L844</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">InvalidArgumentException</span><span style="color: #007700">(</span><span style="color: #DD0000">'You&nbsp;cannot&nbsp;register&nbsp;a&nbsp;plugin&nbsp;without&nbsp;providing&nbsp;its&nbsp;name!'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$selector</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tryGetSelectorForPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$selector</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tryGetOptionsForPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&nbsp;</span><span style="color: #DD0000">''<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUniqueScriptId</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"jQuery('</span><span style="color: #007700">{</span><span style="color: #0000BB">$selector</span><span style="color: #007700">}</span><span style="color: #DD0000">').</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">(</span><span style="color: #007700">{</span><span style="color: #0000BB">$options</span><span style="color: #007700">}</span><span style="color: #DD0000">);"<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a Bootstrap plugin using the given selector and options.</p>


<div class="detailHeader" id="registerPopover-detail">
registerPopover()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerPopover</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The selector to which to apply the tooltips Bootstrap component.</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L802">booster/components/Bootstrap.php#L802</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerPopover</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$selector</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">popoverSelector</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_POPOVER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap popover plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#popover">http://twitter.github.com/bootstrap/javascript.html#popover</a></li>
</ul>
</div>

<div class="detailHeader" id="registerRedactor-detail">
registerRedactor()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerRedactor</b>(null $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L726">booster/components/Bootstrap.php#L726</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerRedactor</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_REDACTOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the RedactorJS plugin.</p>


<div class="detailHeader" id="registerScrollSpy-detail">
registerScrollSpy()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerScrollSpy</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L652">booster/components/Bootstrap.php#L652</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerScrollSpy</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_SCROLLSPY</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap scrollspy plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#scrollspy">http://twitter.github.com/bootstrap/javascript.html#scrollspy</a></li>
</ul>
</div>

<div class="detailHeader" id="registerTabs-detail">
registerTabs()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerTabs</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L667">booster/components/Bootstrap.php#L667</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerTabs</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_TAB</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap tabs plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#tabs">http://twitter.github.com/bootstrap/javascript.html#tabs</a></li>
</ul>
</div>

<div class="detailHeader" id="registerTooltip-detail">
registerTooltip()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerTooltip</b>(string $selector='body', array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The selector to which to apply the popovers Bootstrap component.
Please note that it's not the selector which describes the elements which will receive popovers.
We are doing some optimization here: tooltip plugin is being initialized on body,
and it will delegate real tooltips to whatever selected by the selector passed in plugin options.
See the Bootstrap documentation about tooltip plugin option `selector`.</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L824">booster/components/Bootstrap.php#L824</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerTooltip</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'body'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'selector'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'selector'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tooltipSelector</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_TOOLTIP</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap tooltip plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#tooltip">http://twitter.github.com/bootstrap/javascript.html#tooltip</a></li>
</ul>
</div>

<div class="detailHeader" id="registerTypeahead-detail">
registerTypeahead()
<span class="detailHeaderTag">
method
(available since v0.9.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerTypeahead</b>(string $selector=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selector</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS selector</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the plugin options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L682">booster/components/Bootstrap.php#L682</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerTypeahead</span><span style="color: #007700">(</span><span style="color: #0000BB">$selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PLUGIN_TYPEAHEAD</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$selector</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the Bootstrap typeahead plugin.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://twitter.github.com/bootstrap/javascript.html#typeahead">http://twitter.github.com/bootstrap/javascript.html#typeahead</a></li>
</ul>
</div>

<div class="detailHeader" id="registerYiiCss-detail">
registerYiiCss()
<span class="detailHeaderTag">
method
(available since v0.9.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerYiiCss</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L293">booster/components/Bootstrap.php#L293</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerYiiCss</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPackage</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap-yii'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Register our overrides for jQuery UI + Twitter Bootstrap 2.3 combo</p>


<div class="detailHeader" id="setAssetsRegistryIfNotDefined-detail">
setAssetsRegistryIfNotDefined()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>setAssetsRegistryIfNotDefined</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L401">booster/components/Bootstrap.php#L401</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">setAssetsRegistryIfNotDefined</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assetsRegistry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setRootAliasIfUndefined-detail">
setRootAliasIfUndefined()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>setRootAliasIfUndefined</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L215">booster/components/Bootstrap.php#L215</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">setRootAliasIfUndefined</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap'</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">setPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'/..'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="tryGetInfoForPlugin-detail">
tryGetInfoForPlugin()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>tryGetInfoForPlugin</b>($name $name, $key $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">$name</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">$key</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L903">booster/components/Bootstrap.php#L903</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">tryGetInfoForPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">plugins</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">plugins</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">plugins</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">][</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="tryGetOptionsForPlugin-detail">
tryGetOptionsForPlugin()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>tryGetOptionsForPlugin</b>($name $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">$name</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L892">booster/components/Bootstrap.php#L892</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">tryGetOptionsForPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tryGetInfoForPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'options'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="tryGetSelectorForPlugin-detail">
tryGetSelectorForPlugin()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>tryGetSelectorForPlugin</b>($name $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">$name</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/Bootstrap.php#L883">booster/components/Bootstrap.php#L883</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">tryGetSelectorForPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tryGetInfoForPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'selector'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


