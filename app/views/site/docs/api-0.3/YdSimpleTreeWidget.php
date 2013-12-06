<?php
$this->pageTitle = $this->pageHeading = 'YdSimpleTreeWidget';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdSimpleTreeWidget';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a></div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>Inheritance</th>
  <td>class YdSimpleTreeWidget &raquo;
<?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php">dressing/widgets/YdSimpleTreeWidget.php</a></td>
</tr>
</table>

<div id="classDescription">
Class YdSimpleTreeWidget</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="ajaxUrl">
  <td><?php echo CHtml::link('ajaxUrl', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'ajaxUrl-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr class="inherited" id="attribute">
  <td><?php echo CHtml::link('attribute', array('/site/doc', 'view' => 'CInputWidget', '#' => 'attribute-detail')); ?></td>
  <td>string</td>
  <td>the attribute associated with this widget.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="environment">
  <td><?php echo CHtml::link('environment', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'environment-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CInputWidget', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>additional HTML options to be rendered in the input tag</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'model-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="modelId">
  <td><?php echo CHtml::link('modelId', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'modelId-detail')); ?></td>
  <td>int</td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="modelPropertyId">
  <td><?php echo CHtml::link('modelPropertyId', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'modelPropertyId-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="modelPropertyName">
  <td><?php echo CHtml::link('modelPropertyName', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'modelPropertyName-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="modelPropertyParentId">
  <td><?php echo CHtml::link('modelPropertyParentId', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'modelPropertyParentId-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="modelPropertyPosition">
  <td><?php echo CHtml::link('modelPropertyPosition', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'modelPropertyPosition-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="modelPropertyUrl">
  <td><?php echo CHtml::link('modelPropertyUrl', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'modelPropertyUrl-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CInputWidget', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the input name.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr id="onCreate">
  <td><?php echo CHtml::link('onCreate', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'onCreate-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="onMove">
  <td><?php echo CHtml::link('onMove', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'onMove-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="onRemove">
  <td><?php echo CHtml::link('onRemove', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'onRemove-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="onRename">
  <td><?php echo CHtml::link('onRename', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'onRename-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="onSelect">
  <td><?php echo CHtml::link('onSelect', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'onSelect-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="theme">
  <td><?php echo CHtml::link('theme', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'theme-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr class="inherited" id="value">
  <td><?php echo CHtml::link('value', array('/site/doc', 'view' => 'CInputWidget', '#' => 'value-detail')); ?></td>
  <td>string</td>
  <td>the input value</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CWidget', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr id="_copy_node">
  <td><?php echo CHtml::link('_copy_node()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => '_copy_node-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="_create_node">
  <td><?php echo CHtml::link('_create_node()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => '_create_node-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="_get_children">
  <td><?php echo CHtml::link('_get_children()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => '_get_children-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="_move_node">
  <td><?php echo CHtml::link('_move_node()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => '_move_node-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="_removeModelRecursively">
  <td><?php echo CHtml::link('_removeModelRecursively()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => '_removeModelRecursively-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="_remove_node">
  <td><?php echo CHtml::link('_remove_node()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => '_remove_node-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr id="_rename_node">
  <td><?php echo CHtml::link('_rename_node()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => '_rename_node-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
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
<tr id="getEnvironment">
  <td><?php echo CHtml::link('getEnvironment()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'getEnvironment-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
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
<tr id="getModelId">
  <td><?php echo CHtml::link('getModelId()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'getModelId-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr class="inherited" id="getOwner">
  <td><?php echo CHtml::link('getOwner()', array('/site/doc', 'view' => 'CWidget', '#' => 'getOwner-detail')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CWidget', '#' => 'init-detail')); ?></td>
  <td>Initializes the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="performAjax">
  <td><?php echo CHtml::link('performAjax()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'performAjax-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
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
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'run-detail')); ?></td>
  <td></td>
  <td>YdSimpleTreeWidget</td>
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
<tr class="inherited" id="hasModel">
  <td><?php echo CHtml::link('hasModel()', array('/site/doc', 'view' => 'CInputWidget', '#' => 'hasModel-detail')); ?></td>
  <td>Determines whether this widget is associated with a data model.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="resolveNameID">
  <td><?php echo CHtml::link('resolveNameID()', array('/site/doc', 'view' => 'CInputWidget', '#' => 'resolveNameID-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="ajaxUrl-detail">
ajaxUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$ajaxUrl</b>;</div>

<p></p>


<div class="detailHeader" id="environment-detail">
environment<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getEnvironment</b>', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'getEnvironment')); ?>()</div>

<p></p>


<div class="detailHeader" id="model-detail">
model<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$model</b>;</div>

<p></p>


<div class="detailHeader" id="modelId-detail">
modelId<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public int <?php echo CHtml::link('<b>getModelId</b>', array('/site/doc', 'view' => 'YdSimpleTreeWidget', '#' => 'getModelId')); ?>()</div>

<p></p>


<div class="detailHeader" id="modelPropertyId-detail">
modelPropertyId<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$modelPropertyId</b>;</div>

<p></p>


<div class="detailHeader" id="modelPropertyName-detail">
modelPropertyName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$modelPropertyName</b>;</div>

<p></p>


<div class="detailHeader" id="modelPropertyParentId-detail">
modelPropertyParentId<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$modelPropertyParentId</b>;</div>

<p></p>


<div class="detailHeader" id="modelPropertyPosition-detail">
modelPropertyPosition<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$modelPropertyPosition</b>;</div>

<p></p>


<div class="detailHeader" id="modelPropertyUrl-detail">
modelPropertyUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$modelPropertyUrl</b>;</div>

<p></p>


<div class="detailHeader" id="onCreate-detail">
onCreate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$onCreate</b>;</div>

<p></p>


<div class="detailHeader" id="onMove-detail">
onMove<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$onMove</b>;</div>

<p></p>


<div class="detailHeader" id="onRemove-detail">
onRemove<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$onRemove</b>;</div>

<p></p>


<div class="detailHeader" id="onRename-detail">
onRename<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$onRename</b>;</div>

<p></p>


<div class="detailHeader" id="onSelect-detail">
onSelect<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$onSelect</b>;</div>

<p></p>


<div class="detailHeader" id="theme-detail">
theme<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$theme</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="_copy_node-detail">
_copy_node()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>_copy_node</b>($Model $Model, $params $params, bool $inheritPosition=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$Model</td>
  <td class="paramTypeCol">$Model</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">$params</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$inheritPosition</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L421">dressing/widgets/YdSimpleTreeWidget.php#L421</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">_copy_node</span><span style="color: #007700">(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$inheritPosition&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$NewModel&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$NewModel</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//copy&nbsp;these,&nbsp;even&nbsp;if&nbsp;they're&nbsp;unsafe&nbsp;values<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$NewModel</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyName'</span><span style="color: #007700">]}&nbsp;=&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyName'</span><span style="color: #007700">]};<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$NewModel</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyParentId'</span><span style="color: #007700">]}&nbsp;=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'ref'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$NewModel</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyPosition'</span><span style="color: #007700">]}&nbsp;=&nbsp;</span><span style="color: #0000BB">$inheritPosition&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyPosition'</span><span style="color: #007700">]}&nbsp;:&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'position'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$NewModel</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//copy&nbsp;children<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$NewModel</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findAllByAttributes</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyParentId'</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyId'</span><span style="color: #007700">]}))&nbsp;AS&nbsp;</span><span style="color: #0000BB">$Child</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'ref'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$NewModel</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyId'</span><span style="color: #007700">]};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">_copy_node</span><span style="color: #007700">(</span><span style="color: #0000BB">$Child</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$NewModel</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="_create_node-detail">
_create_node()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>_create_node</b>($params $params)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">$params</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L335">dressing/widgets/YdSimpleTreeWidget.php#L335</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">_create_node</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyParentId'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyName'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'title'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyPosition'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'position'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'status'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyId'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getErrors</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="_get_children-detail">
_get_children()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>_get_children</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L276">dressing/widgets/YdSimpleTreeWidget.php#L276</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">_get_children</span><span style="color: #007700">()<br />{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findAllByAttributes</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyParentId'</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))&nbsp;AS&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyName'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'.'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$modelPropertyName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyName'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #DD0000">"data"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$modelPropertyName</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]}-&gt;{</span><span style="color: #0000BB">$modelPropertyName</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #DD0000">"data"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyName'</span><span style="color: #007700">]};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #DD0000">"attr"</span><span style="color: #007700">][</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"node_"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyId'</span><span style="color: #007700">]};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyUrl'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #DD0000">"attr"</span><span style="color: #007700">][</span><span style="color: #DD0000">"href"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyUrl'</span><span style="color: #007700">]};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readonly</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readonly</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #DD0000">"attr"</span><span style="color: #007700">][</span><span style="color: #DD0000">"rel"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"readonly"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #DD0000">"attr"</span><span style="color: #007700">][</span><span style="color: #DD0000">"rel"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"default"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//only&nbsp;add&nbsp;a&nbsp;closed&nbsp;symbol&nbsp;if&nbsp;the&nbsp;model&nbsp;has&nbsp;children<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findByAttributes</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyParentId'</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyId'</span><span style="color: #007700">]})))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #DD0000">"state"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"closed"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;};<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"data"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"root"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"attr"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"children"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"state"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$children&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'open'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"attr"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">"rel"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"readonly"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$children</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;die;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="_move_node-detail">
_move_node()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>_move_node</b>($params $params)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">$params</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L373">dressing/widgets/YdSimpleTreeWidget.php#L373</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">_move_node</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'ref'</span><span style="color: #007700">]&nbsp;=&nbsp;(int)</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'ref'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//get&nbsp;model<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//copy&nbsp;and&nbsp;die?<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'copy'</span><span style="color: #007700">])&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">_copy_node</span><span style="color: #007700">(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//get&nbsp;new&nbsp;siblings<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyPosition'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyParentId'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'='&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'ref'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;AND&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyId'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'!='&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$siblings&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findAll</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//if&nbsp;item&nbsp;is&nbsp;moved&nbsp;to&nbsp;a&nbsp;higher&nbsp;position&nbsp;ID&nbsp;in&nbsp;it's&nbsp;current&nbsp;folder,&nbsp;make&nbsp;sure&nbsp;to&nbsp;substract&nbsp;it's&nbsp;old&nbsp;position&nbsp;as&nbsp;the&nbsp;item&nbsp;only&nbsp;exists&nbsp;once<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyParentId'</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'ref'</span><span style="color: #007700">]&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyPosition'</span><span style="color: #007700">]&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'position'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'position'</span><span style="color: #007700">]--;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//save&nbsp;model<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyPosition'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'position'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyParentId'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'ref'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//assign&nbsp;positions&nbsp;to&nbsp;siblings<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$siblings&nbsp;</span><span style="color: #007700">AS&nbsp;</span><span style="color: #0000BB">$Sibling</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//params&nbsp;position&nbsp;is&nbsp;reserved,&nbsp;so&nbsp;iterate&nbsp;by&nbsp;it<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'position'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Sibling</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyPosition'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Sibling</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'status'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="_removeModelRecursively-detail">
_removeModelRecursively()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>_removeModelRecursively</b>($params $params)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">$params</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L445">dressing/widgets/YdSimpleTreeWidget.php#L445</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">_removeModelRecursively</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;||&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[^\d]/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'status'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findAllByAttributes</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyParentId'</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))&nbsp;AS&nbsp;</span><span style="color: #0000BB">$Child</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$Child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyId'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">_removeModelRecursively</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="_remove_node-detail">
_remove_node()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>_remove_node</b>($params $params)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">$params</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L351">dressing/widgets/YdSimpleTreeWidget.php#L351</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">_remove_node</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">_removeModelRecursively</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'status'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="_rename_node-detail">
_rename_node()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>_rename_node</b>($params $params)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">$params</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L360">dressing/widgets/YdSimpleTreeWidget.php#L360</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">_rename_node</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'modelPropertyName'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'title'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$Model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'status'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getEnvironment-detail">
getEnvironment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getEnvironment</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L238">dressing/widgets/YdSimpleTreeWidget.php#L238</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getEnvironment</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"model"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"modelPropertyId"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelPropertyId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"modelPropertyParentId"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelPropertyParentId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"modelPropertyPosition"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelPropertyPosition&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"modelPropertyName"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelPropertyName&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"modelPropertyUrl"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelPropertyUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getModelId-detail">
getModelId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public int <b>getModelId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L255">dressing/widgets/YdSimpleTreeWidget.php#L255</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getModelId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelPropertyId</span><span style="color: #007700">});<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="performAjax-detail">
performAjax()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>performAjax</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L318">dressing/widgets/YdSimpleTreeWidget.php#L318</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">performAjax</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Model&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$method&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'_'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'operation'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"HTTP/1.0&nbsp;200&nbsp;OK"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-type:&nbsp;text/json;&nbsp;charset=utf-8'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Cache-Control:&nbsp;no-cache,&nbsp;must-revalidate"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Expires:&nbsp;Mon,&nbsp;26&nbsp;Jul&nbsp;1997&nbsp;05:00:00&nbsp;GMT"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Pragma:&nbsp;no-cache"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">);<br /><br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdSimpleTreeWidget.php#L78">dressing/widgets/YdSimpleTreeWidget.php#L78</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//if&nbsp;this&nbsp;is&nbsp;an&nbsp;Ajax&nbsp;request,&nbsp;do&nbsp;Ajax&nbsp;and&nbsp;die.<br />&nbsp;&nbsp;&nbsp;&nbsp;//It&nbsp;is&nbsp;recommended&nbsp;to&nbsp;change&nbsp;$ajaxUrl&nbsp;to&nbsp;call&nbsp;SimpleTreeWidget::performAjax()&nbsp;directly&nbsp;from&nbsp;a&nbsp;controller.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'simpletree'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">performAjax</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//register&nbsp;assets<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAssetsUrl</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$clientScript&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/_lib/jquery.cookie.js'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/_lib/jquery.hotkeys.js'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/jquery.jstree.js'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">);<br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//create&nbsp;container&nbsp;node<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;id='</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #DD0000">'&gt;node&lt;/div&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'createJtree'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'jQuery("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'").jstree({<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"plugins"&nbsp;:&nbsp;[&nbsp;"themes",&nbsp;"json_data",&nbsp;"ui",&nbsp;"crrm",&nbsp;"cookies",&nbsp;"dnd",&nbsp;"types",&nbsp;"hotkeys",&nbsp;"contextmenu"&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"core"&nbsp;:&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"animation"&nbsp;:&nbsp;300<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"json_data"&nbsp;:&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"ajax"&nbsp;:&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;the&nbsp;URL&nbsp;to&nbsp;fetch&nbsp;the&nbsp;data<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"url"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"data"&nbsp;:&nbsp;function&nbsp;(n)&nbsp;{&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;{&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"operation"&nbsp;:&nbsp;"get_children",&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"id"&nbsp;:&nbsp;n.attr&nbsp;?&nbsp;n.attr("id").replace("node_","")&nbsp;:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEnvironment</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"themes"&nbsp;:&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"theme"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">theme&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"url"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/themes/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">theme&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/style.css"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"types"&nbsp;:&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"valid_children"&nbsp;:&nbsp;[],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"max_depth"&nbsp;:&nbsp;-2,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"max_children"&nbsp;:&nbsp;-2,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"types"&nbsp;:&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"readonly"&nbsp;:&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"delete_node"&nbsp;:&nbsp;false,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"icon"&nbsp;:&nbsp;{"image"&nbsp;:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/themes/readonly.png"},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;})<br />&nbsp;&nbsp;&nbsp;&nbsp;.bind("create.jstree",&nbsp;function&nbsp;(e,&nbsp;data)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.post(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"simpletree"&nbsp;:&nbsp;1,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"operation"&nbsp;:&nbsp;"create_node",&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"id"&nbsp;:&nbsp;data.rslt.parent.attr("id").replace("node_",""),&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"position"&nbsp;:&nbsp;data.rslt.position,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"title"&nbsp;:&nbsp;data.rslt.name,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"type"&nbsp;:&nbsp;data.rslt.obj.attr("rel"),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEnvironment</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;(r)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(r.status)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(data.rslt.obj).attr("id",&nbsp;"node_"&nbsp;+&nbsp;r.id);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onCreate&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.jstree.rollback(data.rlbk);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;})<br />&nbsp;&nbsp;&nbsp;&nbsp;.bind("remove.jstree",&nbsp;function&nbsp;(e,&nbsp;data)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data.rslt.obj.each(function&nbsp;()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(data.inst._get_type(this)&nbsp;==&nbsp;"readonly")<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.ajax({<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;async&nbsp;:&nbsp;false,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type:&nbsp;\'POST\',<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;url:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data&nbsp;:&nbsp;{&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"simpletree"&nbsp;:&nbsp;1,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"operation"&nbsp;:&nbsp;"remove_node",&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"id"&nbsp;:&nbsp;this.id.replace("node_",""),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEnvironment</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;success&nbsp;:&nbsp;function&nbsp;(r)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!r.status)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data.inst.refresh();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onRemove&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br />&nbsp;&nbsp;&nbsp;&nbsp;})<br />&nbsp;&nbsp;&nbsp;&nbsp;.bind("rename.jstree",&nbsp;function&nbsp;(e,&nbsp;data)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.post(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"simpletree"&nbsp;:&nbsp;1,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"operation"&nbsp;:&nbsp;"rename_node",&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"id"&nbsp;:&nbsp;data.rslt.obj.attr("id").replace("node_",""),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"title"&nbsp;:&nbsp;data.rslt.new_name,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEnvironment</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;(r)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!r.status)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.jstree.rollback(data.rlbk);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onRename&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;})<br />&nbsp;&nbsp;&nbsp;&nbsp;.bind("move_node.jstree",&nbsp;function&nbsp;(e,&nbsp;data)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data.rslt.o.each(function&nbsp;(i)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.ajax({<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;async&nbsp;:&nbsp;false,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type:&nbsp;\'POST\',<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;url:&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data&nbsp;:&nbsp;{&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"simpletree"&nbsp;:&nbsp;1,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"operation"&nbsp;:&nbsp;"move_node",&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"id"&nbsp;:&nbsp;$(this).attr("id").replace("node_",""),&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"ref"&nbsp;:&nbsp;data.rslt.np.attr("id").replace("node_",""),&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"position"&nbsp;:&nbsp;data.rslt.cp&nbsp;+&nbsp;i,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"title"&nbsp;:&nbsp;data.rslt.name,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"copy"&nbsp;:&nbsp;data.rslt.cy&nbsp;?&nbsp;1&nbsp;:&nbsp;0,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEnvironment</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;success&nbsp;:&nbsp;function&nbsp;(r)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!r.status)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.jstree.rollback(data.rlbk);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(data.rslt.oc).attr("id",&nbsp;"node_"&nbsp;+&nbsp;r.id);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(data.rslt.cy)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data.inst.refresh(data.inst._get_parent(data.rslt.oc));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onMove&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br />&nbsp;&nbsp;&nbsp;&nbsp;})<br />&nbsp;&nbsp;&nbsp;&nbsp;.bind("select_node.jstree",&nbsp;function&nbsp;(e,&nbsp;data){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onSelect&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;});'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


