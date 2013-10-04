<?php
$this->pageTitle = $this->pageHeading = 'TbPercentOfTypeGooglePieOperation';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbPercentOfTypeGooglePieOperation';
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
  <td><?php echo CHtml::link('booster.widgets.grids.operations', array('/site/doc', '#' => 'booster.widgets.grids.operations')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbPercentOfTypeGooglePieOperation &raquo;
<?php echo CHtml::link('TbPercentOfTypeOperation', array('/site/doc', 'view' => 'TbPercentOfTypeOperation')); ?> &raquo;
<?php echo CHtml::link('TbCountOfTypeOperation', array('/site/doc', 'view' => 'TbCountOfTypeOperation')); ?> &raquo;
<?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php">booster/widgets/TbExtendedGridView.php</a></td>
</tr>
</table>

<div id="classDescription">
## TbPercentOfTypeGooglePieOperation class
<br/><br/>
Displays a Google visualization  pie chart based on the percentage count of type.</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbPercentOfTypeGooglePieOperation', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="chartCssClass">
  <td><?php echo CHtml::link('chartCssClass', array('/site/doc', 'view' => 'TbPercentOfTypeGooglePieOperation', '#' => 'chartCssClass-detail')); ?></td>
  <td>string</td>
  <td>$chartCssClass the class name of the layer holding the chart</td>
  <td>TbPercentOfTypeGooglePieOperation</td>
</tr>
<tr id="chartOptions">
  <td><?php echo CHtml::link('chartOptions', array('/site/doc', 'view' => 'TbPercentOfTypeGooglePieOperation', '#' => 'chartOptions-detail')); ?></td>
  <td>array</td>
  <td>The options</td>
  <td>TbPercentOfTypeGooglePieOperation</td>
</tr>
<tr class="inherited" id="column">
  <td><?php echo CHtml::link('column', array('/site/doc', 'view' => 'TbOperation', '#' => 'column-detail')); ?></td>
  <td><?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?></td>
  <td>$column</td>
  <td><?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="label">
  <td><?php echo CHtml::link('label', array('/site/doc', 'view' => 'TbOperation', '#' => 'label-detail')); ?></td>
  <td>string</td>
  <td>$label the label of the calculated value</td>
  <td><?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?></td>
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
<tr class="inherited" id="template">
  <td><?php echo CHtml::link('template', array('/site/doc', 'view' => 'TbCountOfTypeOperation', '#' => 'template-detail')); ?></td>
  <td>string</td>
  <td>$template</td>
  <td><?php echo CHtml::link('TbCountOfTypeOperation', array('/site/doc', 'view' => 'TbCountOfTypeOperation')); ?></td>
</tr>
<tr class="inherited" id="typeTemplate">
  <td><?php echo CHtml::link('typeTemplate', array('/site/doc', 'view' => 'TbPercentOfTypeOperation', '#' => 'typeTemplate-detail')); ?></td>
  <td>string</td>
  <td>$typeTemplate</td>
  <td><?php echo CHtml::link('TbPercentOfTypeOperation', array('/site/doc', 'view' => 'TbPercentOfTypeOperation')); ?></td>
</tr>
<tr class="inherited" id="types">
  <td><?php echo CHtml::link('types', array('/site/doc', 'view' => 'TbCountOfTypeOperation', '#' => 'types-detail')); ?></td>
  <td>array</td>
  <td>$types hold the configuration of types to calculate.</td>
  <td><?php echo CHtml::link('TbCountOfTypeOperation', array('/site/doc', 'view' => 'TbCountOfTypeOperation')); ?></td>
</tr>
<tr class="inherited" id="value">
  <td><?php echo CHtml::link('value', array('/site/doc', 'view' => 'TbOperation', '#' => 'value-detail')); ?></td>
  <td>int</td>
  <td>$value the resulted value of operation</td>
  <td><?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?></td>
</tr>
<tr class="inherited" id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CWidget', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="_total">
  <td><?php echo CHtml::link('_total', array('/site/doc', 'view' => 'TbPercentOfTypeOperation', '#' => '_total-detail')); ?></td>
  <td>integer</td>
  <td>$_total holds the total sum of the values.</td>
  <td><?php echo CHtml::link('TbPercentOfTypeOperation', array('/site/doc', 'view' => 'TbPercentOfTypeOperation')); ?></td>
</tr>
<tr id="data">
  <td><?php echo CHtml::link('data', array('/site/doc', 'view' => 'TbPercentOfTypeGooglePieOperation', '#' => 'data-detail')); ?></td>
  <td>array</td>
  <td>$data the configuration data of the chart</td>
  <td>TbPercentOfTypeGooglePieOperation</td>
</tr>
<tr class="inherited" id="total">
  <td><?php echo CHtml::link('total', array('/site/doc', 'view' => 'TbPercentOfTypeOperation', '#' => 'total-detail')); ?></td>
  <td>int</td>
  <td>Returns the total of types</td>
  <td><?php echo CHtml::link('TbPercentOfTypeOperation', array('/site/doc', 'view' => 'TbPercentOfTypeOperation')); ?></td>
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
<tr id="displaySummary">
  <td><?php echo CHtml::link('displaySummary()', array('/site/doc', 'view' => 'TbPercentOfTypeGooglePieOperation', '#' => 'displaySummary-detail')); ?></td>
  <td></td>
  <td>TbPercentOfTypeGooglePieOperation</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbCountOfTypeOperation', '#' => 'init-detail')); ?></td>
  <td>Widget's initialization</td>
  <td><?php echo CHtml::link('TbCountOfTypeOperation', array('/site/doc', 'view' => 'TbCountOfTypeOperation')); ?></td>
</tr>
<tr class="inherited" id="processValue">
  <td><?php echo CHtml::link('processValue()', array('/site/doc', 'view' => 'TbCountOfTypeOperation', '#' => 'processValue-detail')); ?></td>
  <td>(no phpDoc)</td>
  <td><?php echo CHtml::link('TbCountOfTypeOperation', array('/site/doc', 'view' => 'TbCountOfTypeOperation')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'TbPercentOfTypeGooglePieOperation', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers required scripts</td>
  <td>TbPercentOfTypeGooglePieOperation</td>
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
<tr class="inherited" id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'TbOperation', '#' => 'run-detail')); ?></td>
  <td>Widget's run method</td>
  <td><?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?></td>
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
<tr class="inherited" id="getTotal">
  <td><?php echo CHtml::link('getTotal()', array('/site/doc', 'view' => 'TbPercentOfTypeOperation', '#' => 'getTotal-detail')); ?></td>
  <td>Returns the total of types</td>
  <td><?php echo CHtml::link('TbPercentOfTypeOperation', array('/site/doc', 'view' => 'TbPercentOfTypeOperation')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="chartCssClass-detail">
chartCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$chartCssClass</b>;</div>

<p>$chartCssClass the class name of the layer holding the chart</p>


<div class="detailHeader" id="chartOptions-detail">
chartOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$chartOptions</b>;</div>

<p>The options</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>https://google-developers.appspot.com/chart/interactive/docs/gallery/piechart</li>
</ul>
</div>

<div class="detailHeader" id="data-detail">
data<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$data</b>;</div>

<p>$data the configuration data of the chart</p>


<h2>Method Details</h2>

<div class="detailHeader" id="displaySummary-detail">
displaySummary()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed|void <b>displaySummary</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed|void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L1150">booster/widgets/TbExtendedGridView.php#L1150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">displaySummary</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'Label'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Percent'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTotal</span><span style="color: #007700">()&nbsp;?&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(float)</span><span style="color: #0000BB">number_format</span><span style="color: #007700">((</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]&nbsp;/&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTotal</span><span style="color: #007700">())&nbsp;*&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;:&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">jsonEncode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">jsonEncode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;id='</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">'&nbsp;class='</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartCssClass</span><span style="color: #007700">}</span><span style="color: #DD0000">'&nbsp;data-data='</span><span style="color: #007700">{</span><span style="color: #0000BB">$data</span><span style="color: #007700">}</span><span style="color: #DD0000">'&nbsp;data-options='</span><span style="color: #007700">{</span><span style="color: #0000BB">$options</span><span style="color: #007700">}</span><span style="color: #DD0000">'&gt;&lt;/div&gt;"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?></li>
</ul>
</div>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L1174">booster/widgets/TbExtendedGridView.php#L1174</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chart&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbGoogleVisualizationChart'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'visualization'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'PieChart'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'containerId'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;create&nbsp;custom&nbsp;chart&nbsp;update&nbsp;by&nbsp;using&nbsp;the&nbsp;global&nbsp;chart&nbsp;variable<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@see&nbsp;TbGoogleVisualizationChart<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsAfterAjaxUpdate</span><span style="color: #007700">[</span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">]&nbsp;=<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'var&nbsp;$el&nbsp;=&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'");var&nbsp;data&nbsp;=&nbsp;$el.data("data");var&nbsp;opts&nbsp;=&nbsp;$el.data("options");<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data&nbsp;=&nbsp;google.visualization.arrayToDataTable(data);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$chart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'=new&nbsp;google.visualization.PieChart(document.getElementById("'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'"));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$chart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'.draw(data,opts);'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Registers required scripts</p>


