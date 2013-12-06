<?php
$this->pageTitle = $this->pageHeading = 'TbEditableField';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbEditableField';
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
  <td><?php echo CHtml::link('booster.widgets.editable', array('/site/doc', '#' => 'booster.widgets.editable')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbEditableField &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php">booster/widgets/TbEditableField.php</a></td>
</tr>
</table>

<div id="classDescription">
## EditableField widget makes editable single attribute of model.</div>
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
<tr class="inherited" id="actionPrefix">
  <td><?php echo CHtml::link('actionPrefix', array('/site/doc', 'view' => 'CWidget', '#' => 'actionPrefix-detail')); ?></td>
  <td>string</td>
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbEditableField', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="apply">
  <td><?php echo CHtml::link('apply', array('/site/doc', 'view' => 'TbEditableField', '#' => 'apply-detail')); ?></td>
  <td>boolean</td>
  <td>whether to apply 'editable' js plugin to element.</td>
  <td>TbEditableField</td>
</tr>
<tr id="attribute">
  <td><?php echo CHtml::link('attribute', array('/site/doc', 'view' => 'TbEditableField', '#' => 'attribute-detail')); ?></td>
  <td>string</td>
  <td>Attribute name.</td>
  <td>TbEditableField</td>
</tr>
<tr id="combodate">
  <td><?php echo CHtml::link('combodate', array('/site/doc', 'view' => 'TbEditableField', '#' => 'combodate-detail')); ?></td>
  <td>array</td>
  <td>full config for **combodate** input.</td>
  <td>TbEditableField</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="disabled">
  <td><?php echo CHtml::link('disabled', array('/site/doc', 'view' => 'TbEditableField', '#' => 'disabled-detail')); ?></td>
  <td>boolean</td>
  <td>will editable be initially disabled.</td>
  <td>TbEditableField</td>
</tr>
<tr id="display">
  <td><?php echo CHtml::link('display', array('/site/doc', 'view' => 'TbEditableField', '#' => 'display-detail')); ?></td>
  <td>string</td>
  <td>A javascript function that will be invoked to custom display value.</td>
  <td>TbEditableField</td>
</tr>
<tr id="emptytext">
  <td><?php echo CHtml::link('emptytext', array('/site/doc', 'view' => 'TbEditableField', '#' => 'emptytext-detail')); ?></td>
  <td>string</td>
  <td>text shown on empty field.</td>
  <td>TbEditableField</td>
</tr>
<tr id="encode">
  <td><?php echo CHtml::link('encode', array('/site/doc', 'view' => 'TbEditableField', '#' => 'encode-detail')); ?></td>
  <td>boolean</td>
  <td>whether to HTML encode text on output</td>
  <td>TbEditableField</td>
</tr>
<tr id="format">
  <td><?php echo CHtml::link('format', array('/site/doc', 'view' => 'TbEditableField', '#' => 'format-detail')); ?></td>
  <td>string</td>
  <td>format to send date on server.</td>
  <td>TbEditableField</td>
</tr>
<tr id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'TbEditableField', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML options of element</td>
  <td>TbEditableField</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="inputclass">
  <td><?php echo CHtml::link('inputclass', array('/site/doc', 'view' => 'TbEditableField', '#' => 'inputclass-detail')); ?></td>
  <td>string</td>
  <td>css class of input.</td>
  <td>TbEditableField</td>
</tr>
<tr id="mode">
  <td><?php echo CHtml::link('mode', array('/site/doc', 'view' => 'TbEditableField', '#' => 'mode-detail')); ?></td>
  <td>string</td>
  <td>mode of input: `inline` | `popup`.</td>
  <td>TbEditableField</td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'TbEditableField', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td>ActiveRecord to be updated.</td>
  <td>TbEditableField</td>
</tr>
<tr id="onHidden">
  <td><?php echo CHtml::link('onHidden', array('/site/doc', 'view' => 'TbEditableField', '#' => 'onHidden-detail')); ?></td>
  <td>string</td>
  <td>A javascript function that will be invoked when editable form is hidden</td>
  <td>TbEditableField</td>
</tr>
<tr id="onInit">
  <td><?php echo CHtml::link('onInit', array('/site/doc', 'view' => 'TbEditableField', '#' => 'onInit-detail')); ?></td>
  <td>string</td>
  <td>A javascript function that will be invoked when editable element is initialized.</td>
  <td>TbEditableField</td>
</tr>
<tr id="onSave">
  <td><?php echo CHtml::link('onSave', array('/site/doc', 'view' => 'TbEditableField', '#' => 'onSave-detail')); ?></td>
  <td>string</td>
  <td>A javascript function that will be invoked when new value is saved</td>
  <td>TbEditableField</td>
</tr>
<tr id="onShown">
  <td><?php echo CHtml::link('onShown', array('/site/doc', 'view' => 'TbEditableField', '#' => 'onShown-detail')); ?></td>
  <td>string</td>
  <td>A javascript function that will be invoked when editable form is shown</td>
  <td>TbEditableField</td>
</tr>
<tr id="options">
  <td><?php echo CHtml::link('options', array('/site/doc', 'view' => 'TbEditableField', '#' => 'options-detail')); ?></td>
  <td>array</td>
  <td>all config options of x-editable.</td>
  <td>TbEditableField</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'TbEditableField', '#' => 'params-detail')); ?></td>
  <td>array</td>
  <td>additional params to send on server</td>
  <td>TbEditableField</td>
</tr>
<tr id="parentid">
  <td><?php echo CHtml::link('parentid', array('/site/doc', 'view' => 'TbEditableField', '#' => 'parentid-detail')); ?></td>
  <td>string</td>
  <td>HTML ID of the parent element, to restrict application of the plugin</td>
  <td>TbEditableField</td>
</tr>
<tr id="placement">
  <td><?php echo CHtml::link('placement', array('/site/doc', 'view' => 'TbEditableField', '#' => 'placement-detail')); ?></td>
  <td>string</td>
  <td>placement of popup.</td>
  <td>TbEditableField</td>
</tr>
<tr id="select2">
  <td><?php echo CHtml::link('select2', array('/site/doc', 'view' => 'TbEditableField', '#' => 'select2-detail')); ?></td>
  <td>array</td>
  <td>full config for **select2** input.</td>
  <td>TbEditableField</td>
</tr>
<tr id="selector">
  <td><?php echo CHtml::link('selector', array('/site/doc', 'view' => 'TbEditableField', '#' => 'selector-detail')); ?></td>
  <td></td>
  <td></td>
  <td>TbEditableField</td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="source">
  <td><?php echo CHtml::link('source', array('/site/doc', 'view' => 'TbEditableField', '#' => 'source-detail')); ?></td>
  <td>mixed</td>
  <td>source data for **select**, **checklist**.</td>
  <td>TbEditableField</td>
</tr>
<tr id="success">
  <td><?php echo CHtml::link('success', array('/site/doc', 'view' => 'TbEditableField', '#' => 'success-detail')); ?></td>
  <td>string</td>
  <td>A javascript function that will be invoked to process successful server response.</td>
  <td>TbEditableField</td>
</tr>
<tr id="template">
  <td><?php echo CHtml::link('template', array('/site/doc', 'view' => 'TbEditableField', '#' => 'template-detail')); ?></td>
  <td>string</td>
  <td>template for **combodate** input.</td>
  <td>TbEditableField</td>
</tr>
<tr id="text">
  <td><?php echo CHtml::link('text', array('/site/doc', 'view' => 'TbEditableField', '#' => 'text-detail')); ?></td>
  <td>string</td>
  <td>text to be shown as element content</td>
  <td>TbEditableField</td>
</tr>
<tr id="title">
  <td><?php echo CHtml::link('title', array('/site/doc', 'view' => 'TbEditableField', '#' => 'title-detail')); ?></td>
  <td>string</td>
  <td>title of popup.</td>
  <td>TbEditableField</td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'TbEditableField', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>type of editable widget.</td>
  <td>TbEditableField</td>
</tr>
<tr id="url">
  <td><?php echo CHtml::link('url', array('/site/doc', 'view' => 'TbEditableField', '#' => 'url-detail')); ?></td>
  <td>string</td>
  <td>url to submit value.</td>
  <td>TbEditableField</td>
</tr>
<tr id="validate">
  <td><?php echo CHtml::link('validate', array('/site/doc', 'view' => 'TbEditableField', '#' => 'validate-detail')); ?></td>
  <td>string</td>
  <td>A javascript function that will be invoked to validate value.</td>
  <td>TbEditableField</td>
</tr>
<tr id="value">
  <td><?php echo CHtml::link('value', array('/site/doc', 'view' => 'TbEditableField', '#' => 'value-detail')); ?></td>
  <td>mixed</td>
  <td>initial value.</td>
  <td>TbEditableField</td>
</tr>
<tr class="inherited" id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CWidget', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="viewformat">
  <td><?php echo CHtml::link('viewformat', array('/site/doc', 'view' => 'TbEditableField', '#' => 'viewformat-detail')); ?></td>
  <td>string</td>
  <td>format to display date in element.</td>
  <td>TbEditableField</td>
</tr>
<tr id="viewseparator">
  <td><?php echo CHtml::link('viewseparator', array('/site/doc', 'view' => 'TbEditableField', '#' => 'viewseparator-detail')); ?></td>
  <td>string</td>
  <td>separator used to display tags.</td>
  <td>TbEditableField</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CWidget', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="actions">
  <td><?php echo CHtml::link('actions()', array('/site/doc', 'view' => 'CWidget', '#' => 'actions-detail')); ?></td>
  <td>Returns a list of actions that are used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="beginCache">
  <td><?php echo CHtml::link('beginCache()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginCache-detail')); ?></td>
  <td>Begins fragment caching.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="beginClip">
  <td><?php echo CHtml::link('beginClip()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginClip-detail')); ?></td>
  <td>Begins recording a clip.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="beginContent">
  <td><?php echo CHtml::link('beginContent()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginContent-detail')); ?></td>
  <td>Begins the rendering of content that is to be decorated by the specified view.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="beginWidget">
  <td><?php echo CHtml::link('beginWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginWidget-detail')); ?></td>
  <td>Creates a widget and executes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr id="buildHtmlOptions">
  <td><?php echo CHtml::link('buildHtmlOptions()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'buildHtmlOptions-detail')); ?></td>
  <td></td>
  <td>TbEditableField</td>
</tr>
<tr id="buildJsOptions">
  <td><?php echo CHtml::link('buildJsOptions()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'buildJsOptions-detail')); ?></td>
  <td></td>
  <td>TbEditableField</td>
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
<tr class="inherited" id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a widget and initializes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
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
<tr class="inherited" id="endCache">
  <td><?php echo CHtml::link('endCache()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endCache-detail')); ?></td>
  <td>Ends fragment caching.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="endClip">
  <td><?php echo CHtml::link('endClip()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endClip-detail')); ?></td>
  <td>Ends recording a clip.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="endContent">
  <td><?php echo CHtml::link('endContent()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endContent-detail')); ?></td>
  <td>Ends the rendering of content.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="endWidget">
  <td><?php echo CHtml::link('endWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endWidget-detail')); ?></td>
  <td>Ends the execution of the named widget.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CWidget', '#' => 'getController-detail')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CWidget', '#' => 'getId-detail')); ?></td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getOwner">
  <td><?php echo CHtml::link('getOwner()', array('/site/doc', 'view' => 'CWidget', '#' => 'getOwner-detail')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="getSelector">
  <td><?php echo CHtml::link('getSelector()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'getSelector-detail')); ?></td>
  <td></td>
  <td>TbEditableField</td>
</tr>
<tr class="inherited" id="getViewFile">
  <td><?php echo CHtml::link('getViewFile()', array('/site/doc', 'view' => 'CWidget', '#' => 'getViewFile-detail')); ?></td>
  <td>Looks for the view script file according to the view name.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getViewPath">
  <td><?php echo CHtml::link('getViewPath()', array('/site/doc', 'view' => 'CWidget', '#' => 'getViewPath-detail')); ?></td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'init-detail')); ?></td>
  <td>### .init()</td>
  <td>TbEditableField</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerAssets">
  <td><?php echo CHtml::link('registerAssets()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'registerAssets-detail')); ?></td>
  <td></td>
  <td>TbEditableField</td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'registerClientScript-detail')); ?></td>
  <td></td>
  <td>TbEditableField</td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CWidget', '#' => 'render-detail')); ?></td>
  <td>Renders a view.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="renderInternal">
  <td><?php echo CHtml::link('renderInternal()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderInternal-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr id="renderLink">
  <td><?php echo CHtml::link('renderLink()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'renderLink-detail')); ?></td>
  <td></td>
  <td>TbEditableField</td>
</tr>
<tr id="renderText">
  <td><?php echo CHtml::link('renderText()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'renderText-detail')); ?></td>
  <td></td>
  <td>TbEditableField</td>
</tr>
<tr id="resolveModel">
  <td><?php echo CHtml::link('resolveModel()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'resolveModel-detail')); ?></td>
  <td></td>
  <td>TbEditableField</td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'TbEditableField', '#' => 'run-detail')); ?></td>
  <td></td>
  <td>TbEditableField</td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CWidget', '#' => 'setId-detail')); ?></td>
  <td>Sets the ID of the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="widget">
  <td><?php echo CHtml::link('widget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget-detail')); ?></td>
  <td>Creates a widget and executes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="apply-detail">
apply<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$apply</b>;</div>

<p>whether to apply 'editable' js plugin to element.
Only **safe** attributes become editable.</p>


<div class="detailHeader" id="attribute-detail">
attribute<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$attribute</b>;</div>

<p>Attribute name.</p>


<div class="detailHeader" id="combodate-detail">
combodate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$combodate</b>;</div>

<p>full config for **combodate** input. For details see http://vitalets.github.com/combodate/#docs</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="disabled-detail">
disabled<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$disabled</b>;</div>

<p>will editable be initially disabled. It means editable plugin will be applied to element,
but you should call `.editable('enable')` method to activate it.
To totally disable applying 'editable' to element use **apply** option.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="display-detail">
display<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$display</b>;</div>

<p>A javascript function that will be invoked to custom display value.
Example:
<pre>
'display' =&gt; 'js: function(value, sourceData) {
     var escapedValue = $(&quot;&amp;lt;div&amp;gt;&quot;).text(value).html();
     $(this).html(&quot;&amp;lt;b&amp;gt;&quot;+escapedValue+&quot;&amp;lt;/b&amp;gt;&quot;);
}'
</pre></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="emptytext-detail">
emptytext<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$emptytext</b>;</div>

<p>text shown on empty field.
If `null` - default X-editable value is used: `Empty`</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="encode-detail">
encode<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$encode</b>;</div>

<p>whether to HTML encode text on output</p>


<div class="detailHeader" id="format-detail">
format<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$format</b>;</div>

<p>format to send date on server. If `null` - default X-editable value is used: `yyyy-mm-dd`.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="htmlOptions-detail">
htmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$htmlOptions</b>;</div>

<p>HTML options of element</p>


<div class="detailHeader" id="inputclass-detail">
inputclass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$inputclass</b>;</div>

<p>css class of input. If `null` - default X-editable value is used: `input-medium`</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="mode-detail">
mode<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$mode</b>;</div>

<p>mode of input: `inline` | `popup`. If not set - default X-editable value is used: `popup`.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="model-detail">
model<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>$model</b>;</div>

<p>ActiveRecord to be updated.</p>


<div class="detailHeader" id="onHidden-detail">
onHidden<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onHidden</b>;</div>

<p>A javascript function that will be invoked when editable form is hidden
Example:
<pre>
'onHidden' =&gt; 'js: function(e, reason) {
   if (reason === &quot;save&quot; || reason === &quot;cancel&quot;) {
       //auto-open next editable
       $(this).closest(&quot;tr&quot;).next().find(&quot;.editable&quot;).editable(&quot;show&quot;);
   }
}'
</pre></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="onInit-detail">
onInit<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onInit</b>;</div>

<p>A javascript function that will be invoked when editable element is initialized.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="onSave-detail">
onSave<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onSave</b>;</div>

<p>A javascript function that will be invoked when new value is saved
Example:
<pre>
'onSave' =&gt; 'js: function(e, params) {
    alert(&quot;Saved value: &quot; + params.newValue);
}'
</pre></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="onShown-detail">
onShown<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onShown</b>;</div>

<p>A javascript function that will be invoked when editable form is shown
Example:
<pre>
'onShown' =&gt; 'js: function() {
    var $tip = $(this).data(&quot;editableContainer&quot;).tip();
    $tip.find(&quot;input&quot;).val(&quot;overwriting value of input.&quot;);
}'
</pre></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="options-detail">
options<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$options</b>;</div>

<p>all config options of x-editable.
See full list <a href="http://vitalets.github.com/x-editable/docs.html#editable">here</a>.</p>


<div class="detailHeader" id="params-detail">
params<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$params</b>;</div>

<p>additional params to send on server</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="parentid-detail">
parentid<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$parentid</b>;</div>

<p>HTML ID of the parent element, to restrict application of the plugin</p>


<div class="detailHeader" id="placement-detail">
placement<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$placement</b>;</div>

<p>placement of popup. Can be `left`, `top`, `right`, `bottom`.
If `null` - default X-editable value is used: `top`</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="select2-detail">
select2<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$select2</b>;</div>

<p>full config for **select2** input. For details see http://ivaynberg.github.com/select2</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="selector-detail">
selector<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public void <?php echo CHtml::link('<b>getSelector</b>', array('/site/doc', 'view' => 'TbEditableField', '#' => 'getSelector')); ?>()</div>

<p></p>


<div class="detailHeader" id="source-detail">
source<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$source</b>;</div>

<p>source data for **select**, **checklist**. Can be string (url) or array in format:
array( array("value" => 1, "text" => "abc"), ...)</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="success-detail">
success<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$success</b>;</div>

<p>A javascript function that will be invoked to process successful server response.
Example:
<pre>
'success' =&gt; 'js: function(response, newValue) {
    if (!response.success) return response.msg;
}'
</pre></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="template-detail">
template<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$template</b>;</div>

<p>template for **combodate** input. For details see http://vitalets.github.com/x-editable/docs.html#combodate.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="text-detail">
text<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$text</b>;</div>

<p>text to be shown as element content</p>


<div class="detailHeader" id="title-detail">
title<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$title</b>;</div>

<p>title of popup. If `null` - will be generated automatically from attribute label.
Can have token {label} inside that will be replaced with actual attribute label.</p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$type</b>;</div>

<p>type of editable widget. Can be `text`, `textarea`, `select`, `date`, `checklist`, etc.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="url-detail">
url<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$url</b>;</div>

<p>url to submit value. Can be string or array containing Yii route, e.g. `array('site/updateUser')`</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="validate-detail">
validate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$validate</b>;</div>

<p>A javascript function that will be invoked to validate value.
Example:
<pre>
'validate' =&gt; 'js: function(value) {
    if ($.trim(value) == &quot;&quot;) return &quot;This field is required&quot;;
}'
</pre></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="value-detail">
value<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$value</b>;</div>

<p>initial value. If not set - will be taken from text</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="viewformat-detail">
viewformat<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$viewformat</b>;</div>

<p>format to display date in element. If `null` - equals to **format** option.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<div class="detailHeader" id="viewseparator-detail">
viewseparator<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$viewseparator</b>;</div>

<p>separator used to display tags.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>x-editable</li>
</ul>
</div>

<h2>Method Details</h2>

<div class="detailHeader" id="buildHtmlOptions-detail">
buildHtmlOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>buildHtmlOptions</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L389">booster/widgets/TbEditableField.php#L389</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">buildHtmlOptions</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="buildJsOptions-detail">
buildJsOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>buildJsOptions</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L438">booster/widgets/TbEditableField.php#L438</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">buildJsOptions</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSelector-detail">
getSelector()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>getSelector</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L618">booster/widgets/TbEditableField.php#L618</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSelector</span><span style="color: #007700">()
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L308">booster/widgets/TbEditableField.php#L308</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p>### .init()
<br/><br/>
initialization of widget</p>


<div class="detailHeader" id="registerAssets-detail">
registerAssets()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerAssets</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L558">booster/widgets/TbEditableField.php#L558</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerAssets</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="registerClientScript-detail">
registerClientScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerClientScript</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L518">booster/widgets/TbEditableField.php#L518</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderLink-detail">
renderLink()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderLink</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L596">booster/widgets/TbEditableField.php#L596</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderLink</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderText-detail">
renderText()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderText</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L606">booster/widgets/TbEditableField.php#L606</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderText</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="resolveModel-detail">
resolveModel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>resolveModel</b>($model, $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L650">booster/widgets/TbEditableField.php#L650</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbEditableField.php#L583">booster/widgets/TbEditableField.php#L583</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>

