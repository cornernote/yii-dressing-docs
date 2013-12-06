<?php
$this->pageTitle = $this->pageHeading = 'TbActiveForm';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbActiveForm';
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
  <td><?php echo CHtml::link('booster.widgets.forms', array('/site/doc', '#' => 'booster.widgets.forms')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbActiveForm &raquo;
<?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdActiveForm', array('/site/doc', 'view' => 'YdActiveForm')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php">booster/widgets/TbActiveForm.php</a></td>
</tr>
</table>

<div id="classDescription">
## ActiveForm supporting cool inputs from Bootstrap</div>
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
<tr class="inherited" id="action">
  <td><?php echo CHtml::link('action', array('/site/doc', 'view' => 'CActiveForm', '#' => 'action-detail')); ?></td>
  <td>mixed</td>
  <td>the form action URL (see <?php echo CHtml::link('CHtml::normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter).</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="actionPrefix">
  <td><?php echo CHtml::link('actionPrefix', array('/site/doc', 'view' => 'CWidget', '#' => 'actionPrefix-detail')); ?></td>
  <td>string</td>
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="clientOptions">
  <td><?php echo CHtml::link('clientOptions', array('/site/doc', 'view' => 'CActiveForm', '#' => 'clientOptions-detail')); ?></td>
  <td>array</td>
  <td>the options to be passed to the javascript validation plugin.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="enableAjaxValidation">
  <td><?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableAjaxValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable data validation via AJAX.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="enableClientValidation">
  <td><?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableClientValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable client-side data validation.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="errorMessageCssClass">
  <td><?php echo CHtml::link('errorMessageCssClass', array('/site/doc', 'view' => 'CActiveForm', '#' => 'errorMessageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for error messages.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="focus">
  <td><?php echo CHtml::link('focus', array('/site/doc', 'view' => 'CActiveForm', '#' => 'focus-detail')); ?></td>
  <td>mixed</td>
  <td>form element to get initial input focus on page load.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CActiveForm', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>additional HTML attributes that should be rendered for the form tag.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="inlineErrors">
  <td><?php echo CHtml::link('inlineErrors', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'inlineErrors-detail')); ?></td>
  <td>boolean</td>
  <td>flag that indicates if the errors should be displayed as blocks.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="input">
  <td><?php echo CHtml::link('input', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'input-detail')); ?></td>
  <td>string</td>
  <td>input class.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="method">
  <td><?php echo CHtml::link('method', array('/site/doc', 'view' => 'CActiveForm', '#' => 'method-detail')); ?></td>
  <td>string</td>
  <td>the form submission method.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
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
<tr class="inherited" id="stateful">
  <td><?php echo CHtml::link('stateful', array('/site/doc', 'view' => 'CActiveForm', '#' => 'stateful-detail')); ?></td>
  <td>boolean</td>
  <td>whether to generate a stateful form (See <?php echo CHtml::link('CHtml::statefulForm', array('/site/doc', 'view' => 'CHtml', '#' => 'statefulForm')); ?>).</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>the form type.</td>
  <td>TbActiveForm</td>
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
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CActiveForm', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>the javascript options for model attributes (input ID => options)</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="inputClassName">
  <td><?php echo CHtml::link('inputClassName', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'inputClassName-detail')); ?></td>
  <td>string</td>
  <td>Returns the input widget class name suitable for the form.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="summaryID">
  <td><?php echo CHtml::link('summaryID', array('/site/doc', 'view' => 'CActiveForm', '#' => 'summaryID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the container element for error summary</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
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
<tr id="captchaRow">
  <td><?php echo CHtml::link('captchaRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'captchaRow-detail')); ?></td>
  <td>### .captchaRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="checkBox">
  <td><?php echo CHtml::link('checkBox()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBox-detail')); ?></td>
  <td>Renders a checkbox for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="checkBoxGroupsList">
  <td><?php echo CHtml::link('checkBoxGroupsList()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxGroupsList-detail')); ?></td>
  <td>### .checkBoxGroupsList()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="checkBoxGroupsListRow">
  <td><?php echo CHtml::link('checkBoxGroupsListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxGroupsListRow-detail')); ?></td>
  <td>### .checkBoxGroupsListRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="checkBoxList">
  <td><?php echo CHtml::link('checkBoxList()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxList-detail')); ?></td>
  <td>### .checkBoxList()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="checkBoxListInlineRow">
  <td><?php echo CHtml::link('checkBoxListInlineRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxListInlineRow-detail')); ?></td>
  <td>### .checkBoxListInlineRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="checkBoxListRow">
  <td><?php echo CHtml::link('checkBoxListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxListRow-detail')); ?></td>
  <td>### .checkBoxListRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="checkBoxRow">
  <td><?php echo CHtml::link('checkBoxRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxRow-detail')); ?></td>
  <td>### .checkBoxRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="ckEditorRow">
  <td><?php echo CHtml::link('ckEditorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'ckEditorRow-detail')); ?></td>
  <td>### .ckEditorRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="colorpickerRow">
  <td><?php echo CHtml::link('colorpickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'colorpickerRow-detail')); ?></td>
  <td>### .colorpickerRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a widget and initializes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr id="customRow">
  <td><?php echo CHtml::link('customRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customRow-detail')); ?></td>
  <td>Renders a pre-rendered custom field input row.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="dateField">
  <td><?php echo CHtml::link('dateField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dateField-detail')); ?></td>
  <td>Renders a date field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="dateRangeRow">
  <td><?php echo CHtml::link('dateRangeRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dateRangeRow-detail')); ?></td>
  <td>### .dateRangeRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="datepickerRow">
  <td><?php echo CHtml::link('datepickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'datepickerRow-detail')); ?></td>
  <td>### .datepickerRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="datetimepickerRow">
  <td><?php echo CHtml::link('datetimepickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'datetimepickerRow-detail')); ?></td>
  <td>### .datetimepickerRow()</td>
  <td>TbActiveForm</td>
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
<tr class="inherited" id="dropDownList">
  <td><?php echo CHtml::link('dropDownList()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dropDownList-detail')); ?></td>
  <td>Renders a dropdown list for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="dropDownListRow">
  <td><?php echo CHtml::link('dropDownListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dropDownListRow-detail')); ?></td>
  <td>### dropDownListRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="emailField">
  <td><?php echo CHtml::link('emailField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'emailField-detail')); ?></td>
  <td>Renders an email field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
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
<tr id="error">
  <td><?php echo CHtml::link('error()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'error-detail')); ?></td>
  <td>### .error()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="errorSummary">
  <td><?php echo CHtml::link('errorSummary()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'errorSummary-detail')); ?></td>
  <td>### .errorSummary()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="fileField">
  <td><?php echo CHtml::link('fileField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'fileField-detail')); ?></td>
  <td>Renders a file field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="fileFieldRow">
  <td><?php echo CHtml::link('fileFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'fileFieldRow-detail')); ?></td>
  <td>### .fileFieldRow()</td>
  <td>TbActiveForm</td>
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
<tr class="inherited" id="hiddenField">
  <td><?php echo CHtml::link('hiddenField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'hiddenField-detail')); ?></td>
  <td>Renders a hidden field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="html5EditorRow">
  <td><?php echo CHtml::link('html5EditorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'html5EditorRow-detail')); ?></td>
  <td>### .html5EditorRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'init-detail')); ?></td>
  <td>### .init()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="inputRow">
  <td><?php echo CHtml::link('inputRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'inputRow-detail')); ?></td>
  <td>### .inputRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="label">
  <td><?php echo CHtml::link('label()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'label-detail')); ?></td>
  <td>Renders an HTML label for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="labelEx">
  <td><?php echo CHtml::link('labelEx()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'labelEx-detail')); ?></td>
  <td>Renders an HTML label for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="listBox">
  <td><?php echo CHtml::link('listBox()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'listBox-detail')); ?></td>
  <td>Renders a list box for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="markdownEditorRow">
  <td><?php echo CHtml::link('markdownEditorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'markdownEditorRow-detail')); ?></td>
  <td>### .markdownEditorRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="maskedTextField">
  <td><?php echo CHtml::link('maskedTextField()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'maskedTextField-detail')); ?></td>
  <td>Renders a masked text field row</td>
  <td>TbActiveForm</td>
</tr>
<tr id="maskedTextFieldRow">
  <td><?php echo CHtml::link('maskedTextFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'maskedTextFieldRow-detail')); ?></td>
  <td>### .maskedTextFieldRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="numberField">
  <td><?php echo CHtml::link('numberField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'numberField-detail')); ?></td>
  <td>Renders a number field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="numberFieldRow">
  <td><?php echo CHtml::link('numberFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'numberFieldRow-detail')); ?></td>
  <td>Renders a number field input row.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="passfieldFieldRow">
  <td><?php echo CHtml::link('passfieldFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'passfieldFieldRow-detail')); ?></td>
  <td>### .passfieldFieldRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="passwordField">
  <td><?php echo CHtml::link('passwordField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'passwordField-detail')); ?></td>
  <td>Renders a password field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="passwordFieldRow">
  <td><?php echo CHtml::link('passwordFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'passwordFieldRow-detail')); ?></td>
  <td>### .passwordFieldRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="radioButton">
  <td><?php echo CHtml::link('radioButton()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButton-detail')); ?></td>
  <td>Renders a radio button for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="radioButtonGroupsList">
  <td><?php echo CHtml::link('radioButtonGroupsList()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonGroupsList-detail')); ?></td>
  <td>### .radioButtonGroupsList()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="radioButtonGroupsListRow">
  <td><?php echo CHtml::link('radioButtonGroupsListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonGroupsListRow-detail')); ?></td>
  <td>### .radioButtonGroupsListRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="radioButtonList">
  <td><?php echo CHtml::link('radioButtonList()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonList-detail')); ?></td>
  <td>### .radioButtonList()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="radioButtonListInlineRow">
  <td><?php echo CHtml::link('radioButtonListInlineRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonListInlineRow-detail')); ?></td>
  <td>### .radioButtonListInlineRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="radioButtonListRow">
  <td><?php echo CHtml::link('radioButtonListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonListRow-detail')); ?></td>
  <td>### .radioButtonListRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="radioButtonRow">
  <td><?php echo CHtml::link('radioButtonRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonRow-detail')); ?></td>
  <td>### .radioButtonRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="rangeField">
  <td><?php echo CHtml::link('rangeField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'rangeField-detail')); ?></td>
  <td>Generates a range field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="redactorRow">
  <td><?php echo CHtml::link('redactorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'redactorRow-detail')); ?></td>
  <td>### .redactorRow()</td>
  <td>TbActiveForm</td>
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
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'run-detail')); ?></td>
  <td>Runs the widget.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="searchField">
  <td><?php echo CHtml::link('searchField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'searchField-detail')); ?></td>
  <td>Renders a search field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="select2Row">
  <td><?php echo CHtml::link('select2Row()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'select2Row-detail')); ?></td>
  <td>### .select2Row()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CWidget', '#' => 'setId-detail')); ?></td>
  <td>Sets the ID of the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="telField">
  <td><?php echo CHtml::link('telField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'telField-detail')); ?></td>
  <td>Renders a time field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="textArea">
  <td><?php echo CHtml::link('textArea()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textArea-detail')); ?></td>
  <td>Renders a text area for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="textAreaRow">
  <td><?php echo CHtml::link('textAreaRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'textAreaRow-detail')); ?></td>
  <td>### .textAreaRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="textField">
  <td><?php echo CHtml::link('textField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField-detail')); ?></td>
  <td>Renders a text field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="textFieldRow">
  <td><?php echo CHtml::link('textFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'textFieldRow-detail')); ?></td>
  <td>### .textFieldRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="timeField">
  <td><?php echo CHtml::link('timeField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'timeField-detail')); ?></td>
  <td>Renders a time field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="timepickerRow">
  <td><?php echo CHtml::link('timepickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'timepickerRow-detail')); ?></td>
  <td>### .timepickerRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="toggleButtonRow">
  <td><?php echo CHtml::link('toggleButtonRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'toggleButtonRow-detail')); ?></td>
  <td>### .toggleButtonRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr id="typeAheadField">
  <td><?php echo CHtml::link('typeAheadField()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'typeAheadField-detail')); ?></td>
  <td>Renders a type ahead field row</td>
  <td>TbActiveForm</td>
</tr>
<tr id="typeAheadRow">
  <td><?php echo CHtml::link('typeAheadRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'typeAheadRow-detail')); ?></td>
  <td>Renders a typeAhead input row</td>
  <td>TbActiveForm</td>
</tr>
<tr id="uneditableRow">
  <td><?php echo CHtml::link('uneditableRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'uneditableRow-detail')); ?></td>
  <td>### .uneditableRow()</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="urlField">
  <td><?php echo CHtml::link('urlField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'urlField-detail')); ?></td>
  <td>Renders a url field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'validate-detail')); ?></td>
  <td>Validates one or several models and returns the results in JSON format.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="validateTabular">
  <td><?php echo CHtml::link('validateTabular()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'validateTabular-detail')); ?></td>
  <td>Validates an array of model instances and returns the results in JSON format.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
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
<tr id="getInputClassName">
  <td><?php echo CHtml::link('getInputClassName()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'getInputClassName-detail')); ?></td>
  <td>Returns the input widget class name suitable for the form.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="inputsList">
  <td><?php echo CHtml::link('inputsList()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'inputsList-detail')); ?></td>
  <td>Renders an input list.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="renderError">
  <td><?php echo CHtml::link('renderError()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'renderError-detail')); ?></td>
  <td>Creates the HTML code wrapping the error text for given model attribute.</td>
  <td>TbActiveForm</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="inlineErrors-detail">
inlineErrors<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$inlineErrors</b>;</div>

<p>flag that indicates if the errors should be displayed as blocks.</p>


<div class="detailHeader" id="input-detail">
input<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$input</b>;</div>

<p>input class.</p>


<div class="detailHeader" id="inputClassName-detail">
inputClassName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected string <?php echo CHtml::link('<b>getInputClassName</b>', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'getInputClassName')); ?>()</div>

<p>Returns the input widget class name suitable for the form.</p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$type</b>;</div>

<p>the form type. Allowed types are in `TYPE_*` constants</p>


<h2>Method Details</h2>

<div class="detailHeader" id="captchaRow-detail">
captchaRow()
<span class="detailHeaderTag">
method
(available since v0.9.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>captchaRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L413">booster/widgets/TbActiveForm.php#L413</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">captchaRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_CAPTCHA</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .captchaRow()
<br/><br/>
Renders a captcha row.</p>


<div class="detailHeader" id="checkBoxGroupsList-detail">
checkBoxGroupsList()
<span class="detailHeaderTag">
method
(available since v0.9.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBoxGroupsList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the checkbox list.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated checkbox list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L626">booster/widgets/TbActiveForm.php#L626</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxGroupsList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scripts&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttonType&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">value</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$btnId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">']['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">']'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$active&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'active'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$active</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$btnId</span><span style="color: #007700">,);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;event&nbsp;as&nbsp;ordinary&nbsp;input<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenFieldName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'][]'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenFieldId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">']['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'][hidden]'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"\$('#"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$btnId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"').click(function(){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(\$('#"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$hiddenFieldId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"').length&nbsp;&gt;&nbsp;0)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$('#"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$hiddenFieldId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"').remove();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;hidden&nbsp;=&nbsp;\$('&lt;input&nbsp;type=\"hidden\"&gt;')<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.attr('id',&nbsp;'"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$hiddenFieldId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"')<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.attr('name',&nbsp;'"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$hiddenFieldName&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"')<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.val('"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hidden.appendTo(\$('#"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$btnId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"'));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$active</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$hiddenFieldName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$hiddenFieldId</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbButtonGroup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttonType'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'toggle'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttons'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$buttonType</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'checkboxgrouplist-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>### .checkBoxGroupsList()
<br/><br/>
Renders a checkbox list for a model attribute using Button Groups.</p>


<div class="detailHeader" id="checkBoxGroupsListRow-detail">
checkBoxGroupsListRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBoxGroupsListRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list data</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L150">booster/widgets/TbActiveForm.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxGroupsListRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_CHECKBOXGROUPSLIST</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .checkBoxGroupsListRow()
<br/><br/>
Renders a checkbox list input row using Button Groups.</p>


<div class="detailHeader" id="checkBoxList-detail">
checkBoxList()
<span class="detailHeaderTag">
method
(available since v0.9.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBoxList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the check box list.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated check box list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L607">booster/widgets/TbActiveForm.php#L607</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputsList</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .checkBoxList()
<br/><br/>
Renders a checkbox list for a model attribute.
<br/><br/>
This method is a wrapper of <?php echo CHtml::link('CHtml::activeCheckBoxList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBoxList')); ?>.
Please check <?php echo CHtml::link('CHtml::activeCheckBoxList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBoxList')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="checkBoxListInlineRow-detail">
checkBoxListInlineRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBoxListInlineRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list data</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L133">booster/widgets/TbActiveForm.php#L133</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxListInlineRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_CHECKBOXLIST_INLINE</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .checkBoxListInlineRow()
<br/><br/>
Renders a checkbox list inline input row.</p>


<div class="detailHeader" id="checkBoxListRow-detail">
checkBoxListRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBoxListRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list data</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L116">booster/widgets/TbActiveForm.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxListRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_CHECKBOXLIST</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .checkBoxListRow()
<br/><br/>
Renders a checkbox list input row.</p>


<div class="detailHeader" id="checkBoxRow-detail">
checkBoxRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBoxRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L83">booster/widgets/TbActiveForm.php#L83</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_CHECKBOX</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .checkBoxRow()
<br/><br/>
Renders a checkbox input row.</p>


<div class="detailHeader" id="ckEditorRow-detail">
ckEditorRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>ckEditorRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L395">booster/widgets/TbActiveForm.php#L395</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">ckEditorRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_CKEDITOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .ckEditorRow()
<br/><br/>
Renders a WYSIWYG  ckeditor</p>


<div class="detailHeader" id="colorpickerRow-detail">
colorpickerRow()
<span class="detailHeaderTag">
method
(available since v1.0.3 Booster)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>colorpickerRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. 'events' and 'options' key specify the events
and configuration options of colorpicker respectively.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L488">booster/widgets/TbActiveForm.php#L488</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">colorpickerRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_COLORPICKER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .colorpickerRow()
<br/><br/>
Renders a colorpicker field row.</p>


<div class="detailHeader" id="customRow-detail">
customRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>customRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, string $input)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$input</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered input.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L582">booster/widgets/TbActiveForm.php#L582</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">customRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'input'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_CUSTOM</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a pre-rendered custom field input row.</p>


<div class="detailHeader" id="dateRangeRow-detail">
dateRangeRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>dateRangeRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">addition HTML attributes. In order to pass initialization parameters to dateRange, you
need to set the HTML 'options' key with an array of configuration options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L503">booster/widgets/TbActiveForm.php#L503</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dateRangeRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_DATERANGEPICKER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .dateRangeRow()</p>


<div class="detailHeader" id="datepickerRow-detail">
datepickerRow()
<span class="detailHeaderTag">
method
(available since v1.0.2 Booster)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>datepickerRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. 'events' and 'options' key specify the events
and configuration options of datepicker respectively.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L450">booster/widgets/TbActiveForm.php#L450</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">datepickerRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_DATEPICKER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .datepickerRow()
<br/><br/>
Renders a datepicker field row.</p>


<div class="detailHeader" id="datetimepickerRow-detail">
datetimepickerRow()
<span class="detailHeaderTag">
method
(available since v2.0.0 Booster)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>datetimepickerRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. 'events' and 'options' key specify the events
and configuration options of datepicker respectively.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L469">booster/widgets/TbActiveForm.php#L469</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">datetimepickerRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_DATETIMEPICKER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .datetimepickerRow()
<br/><br/>
Renders a datetimepicker field row.</p>


<div class="detailHeader" id="dropDownListRow-detail">
dropDownListRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>dropDownListRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list data</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L167">booster/widgets/TbActiveForm.php#L167</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropDownListRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_DROPDOWN</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### dropDownListRow()
<br/><br/>
Renders a drop-down list input row.</p>


<div class="detailHeader" id="error-detail">
error()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>error</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), boolean $enableAjaxValidation=true, boolean $enableClientValidation=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes to be rendered in the container div tag.</td>
</tr>
<tr>
  <td class="paramNameCol">$enableAjaxValidation</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to enable AJAX validation for the specified attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$enableClientValidation</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to enable client-side validation for the specified attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the validation result (error display or success message).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L996">booster/widgets/TbActiveForm.php#L996</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">error</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$enableAjaxValidation&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$enableClientValidation&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true<br /></span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableAjaxValidation</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$enableAjaxValidation&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableClientValidation</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$enableClientValidation&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessageCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$enableAjaxValidation&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$enableClientValidation</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderError</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeId</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$inputID&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inputID'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inputID'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inputID'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$inputID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'_em_'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'inputID'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$inputID</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorID'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'model'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'enableAjaxValidation'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$enableAjaxValidation</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'inputContainer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'div.control-group'</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;Bootstrap&nbsp;requires&nbsp;this<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$optionNames&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'validationDelay'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'validateOnChange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'validateOnType'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'hideErrorMessage'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'inputContainer'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorCssClass'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'successCssClass'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'validatingCssClass'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'beforeValidateAttribute'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'afterValidateAttribute'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$optionNames&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CActiveRecord&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isNewRecord</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">[</span><span style="color: #DD0000">'status'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$enableClientValidation</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validators&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidation'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidation'</span><span style="color: #007700">])&nbsp;:&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributeName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$pos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">']'</span><span style="color: #007700">))&nbsp;!==&nbsp;</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$pos&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;e.g.&nbsp;[a]name<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributeName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pos&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValidators</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributeName</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;$validator&nbsp;CValidator&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableClientValidation</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$js&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clientValidateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attributeName</span><span style="color: #007700">))&nbsp;!=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validators</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$validators&nbsp;</span><span style="color: #007700">!==&nbsp;array())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidation'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"js:function(value,&nbsp;messages,&nbsp;attribute)&nbsp;{\n"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validators<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"\n}"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderError</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">';'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">';&nbsp;display:&nbsp;none'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'display:&nbsp;none'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'span'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$inputID</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .error()
<br/><br/>
Displays the first validation error for a model attribute.</p>


<div class="detailHeader" id="errorSummary-detail">
errorSummary()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>errorSummary</b>(mixed $models, string $header=NULL, string $footer=NULL, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$models</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the models whose input errors are to be displayed. This can be either
a single model or an array of models.</td>
</tr>
<tr>
  <td class="paramNameCol">$header</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a piece of HTML code that appears in front of the errors</td>
</tr>
<tr>
  <td class="paramNameCol">$footer</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a piece of HTML code that appears at the end of the errors</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes to be rendered in the container div tag.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error summary. Empty if no errors are found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L974">booster/widgets/TbActiveForm.php#L974</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">errorSummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$header&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$footer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'alert&nbsp;alert-block&nbsp;alert-error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;</span><span style="color: #FF8000">//&nbsp;Bootstrap&nbsp;error&nbsp;class&nbsp;as&nbsp;default<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">errorSummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$header</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$footer</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .errorSummary()
<br/><br/>
Displays a summary of validation errors for one or several models.
<br/><br/>
This method is very similar to <?php echo CHtml::link('CHtml::errorSummary', array('/site/doc', 'view' => 'CHtml', '#' => 'errorSummary')); ?> except that it also works
when AJAX validation is performed.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CHtml::errorSummary', array('/site/doc', 'view' => 'CHtml', '#' => 'errorSummary')); ?></li>
</ul>
</div>

<div class="detailHeader" id="fileFieldRow-detail">
fileFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>fileFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L183">booster/widgets/TbActiveForm.php#L183</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">fileFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_FILE</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .fileFieldRow()
<br/><br/>
Renders a file field input row.</p>


<div class="detailHeader" id="getInputClassName-detail">
getInputClassName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getInputClassName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the class name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1162">booster/widgets/TbActiveForm.php#L1162</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getInputClassName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">input</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">input</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_HORIZONTAL</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">INPUT_HORIZONTAL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_INLINE</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">INPUT_INLINE</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_SEARCH</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">INPUT_SEARCH</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_VERTICAL</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">INPUT_VERTICAL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Returns the input widget class name suitable for the form.</p>


<div class="detailHeader" id="html5EditorRow-detail">
html5EditorRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>html5EditorRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L379">booster/widgets/TbActiveForm.php#L379</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">html5EditorRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_HTML5EDITOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .html5EditorRow()
<br/><br/>
Renders a WYSIWYG bootstrap editor</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L51">booster/widgets/TbActiveForm.php#L51</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'form-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;form-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inlineErrors</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inlineErrors&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_HORIZONTAL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inlineErrors</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessageCssClass&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'help-inline&nbsp;error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessageCssClass&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'help-block&nbsp;error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>### .init()
Initializes the widget.
This renders the form open tag.</p>


<div class="detailHeader" id="inputRow-detail">
inputRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>inputRow</b>(string $type, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data=NULL, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input type</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the data for list inputs</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1140">booster/widgets/TbActiveForm.php#L1140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInputClassName</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'model'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attribute'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>### .inputRow()
<br/><br/>
Creates an input row of a specific type.
<br/><br/>
This is a generic factory method. It is mainly called by various helper methods
 which pass correct type definitions to it.</p>


<div class="detailHeader" id="inputsList-detail">
inputsList()
<span class="detailHeaderTag">
method
(available since v0.9.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>inputsList</b>(boolean $checkbox, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$checkbox</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag that indicates if the list is a checkbox-list.</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the input list.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input list.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L839">booster/widgets/TbActiveForm.php#L839</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">inputsList</span><span style="color: #007700">(</span><span style="color: #0000BB">$checkbox</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$select&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasErrors</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorCss</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorCss</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenOptions&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$uncheck&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><span style="color: #DD0000">'&lt;label&nbsp;class="{labelCssClass}"&gt;{input}{label}&lt;/label&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$container&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'container'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'container'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'hint'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$checkbox&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">2</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checkAllLast&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAll'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checkAllLabel&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAll'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checkAllLast&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAllLast'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAllLast'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAll'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAllLast'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$labelOptions&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]&nbsp;:&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseID&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseID'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseID'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseID'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checkAll&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$method&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$checkbox&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'checkBox'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'radioButton'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$labelCssClass&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$checkbox&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'checkbox'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inline'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$labelCssClass&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&nbsp;inline'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inline'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checked&nbsp;</span><span style="color: #007700">=&nbsp;!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$select</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$select</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$select</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$select</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checkAll&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$checkAll&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$checked</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$baseID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'_'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$checked</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{labelCssClass}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$labelCssClass</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{input}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{label}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$checkAllLabel</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$baseID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'_all'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$checkAll</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$checkAllLabel</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{labelCssClass}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$labelCssClass</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{input}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{label}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$checkAllLast</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_unshift</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'['&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\\['</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">']'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\\]'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$js&nbsp;</span><span style="color: #007700">=&nbsp;&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">jQuery('#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">').click(function()&nbsp;{<br />$("input[name='</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">']").prop('checked',&nbsp;this.checked);<br />});<br />jQuery("input[name='</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">']").click(function()&nbsp;{<br />$('#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">').prop('checked',&nbsp;!jQuery("input[name='</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">']:not(:checked)").length);<br />});<br />jQuery('#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">').prop('checked',&nbsp;!jQuery("input[name='</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">']:not(:checked)").length);<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;$cs&nbsp;CClientScript&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$container</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$container</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$baseID</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders an input list.</p>


<div class="detailHeader" id="markdownEditorRow-detail">
markdownEditorRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>markdownEditorRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L363">booster/widgets/TbActiveForm.php#L363</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">markdownEditorRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_MARKDOWNEDITOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .markdownEditorRow()
<br/><br/>
Renders a WYSIWYG Markdown editor</p>


<div class="detailHeader" id="maskedTextField-detail">
maskedTextField()
<span class="detailHeaderTag">
method
(available since v0.9.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>maskedTextField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $mask, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$mask</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the mask (see <a href="http://digitalbush.com/projects/masked-input-plugin">http://digitalbush.com/projects/masked-input-plugin</a>)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated masked text field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L775">booster/widgets/TbActiveForm.php#L775</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">maskedTextField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$mask</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'CMaskedTextField'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'model'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attribute'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'mask'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$mask</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$htmlOptions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">true<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a masked text field row</p>


<div class="detailHeader" id="maskedTextFieldRow-detail">
maskedTextFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>maskedTextFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $mask, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$mask</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the mask (see <a href="http://digitalbush.com/projects/masked-input-plugin">http://digitalbush.com/projects/masked-input-plugin</a>)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L315">booster/widgets/TbActiveForm.php#L315</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">maskedTextFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$mask</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_MASKEDTEXT</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$mask</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .maskedTextFieldRow()
<br/><br/>
Renders a masked text field input row.</p>


<div class="detailHeader" id="numberFieldRow-detail">
numberFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>numberFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L568">booster/widgets/TbActiveForm.php#L568</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">numberFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_NUMBER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a number field input row.</p>


<div class="detailHeader" id="passfieldFieldRow-detail">
passfieldFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>passfieldFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L215">booster/widgets/TbActiveForm.php#L215</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">passfieldFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_PASSFIELD</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .passfieldFieldRow()
<br/><br/>
Renders a Pass*Field field input row.</p>


<div class="detailHeader" id="passwordFieldRow-detail">
passwordFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>passwordFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L199">booster/widgets/TbActiveForm.php#L199</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">passwordFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_PASSWORD</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .passwordFieldRow()
<br/><br/>
Renders a password field input row.</p>


<div class="detailHeader" id="radioButtonGroupsList-detail">
radioButtonGroupsList()
<span class="detailHeaderTag">
method
(available since v0.9.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButtonGroupsList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the radio button list.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated radio button list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L722">booster/widgets/TbActiveForm.php#L722</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonGroupsList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scripts&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenFieldId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">']'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttonType&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$btnId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">']['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">']'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$btnId</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;(isset(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;event&nbsp;as&nbsp;ordinary&nbsp;input<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"\$('#"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$btnId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"').click(function(){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\$('#"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$hiddenFieldId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"').val('"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"').trigger('change');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbButtonGroup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttonType'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'toggle'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttons'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$buttonType</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'radiobuttongrouplist-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$scripts</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>### .radioButtonGroupsList()
<br/><br/>
Renders a radio button list for a model attribute using Button Groups.</p>


<div class="detailHeader" id="radioButtonGroupsListRow-detail">
radioButtonGroupsListRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButtonGroupsListRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list data</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L282">booster/widgets/TbActiveForm.php#L282</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonGroupsListRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_RADIOBUTTONGROUPSLIST</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .radioButtonGroupsListRow()
<br/><br/>
Renders a radio button list input row using Button Groups.</p>


<div class="detailHeader" id="radioButtonList-detail">
radioButtonList()
<span class="detailHeaderTag">
method
(available since v0.9.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButtonList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the radio button list.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated radio button list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L703">booster/widgets/TbActiveForm.php#L703</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputsList</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .radioButtonList()
<br/><br/>
Renders a radio button list for a model attribute.
<br/><br/>
This method is a wrapper of <?php echo CHtml::link('CHtml::activeRadioButtonList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButtonList')); ?>.
Please check <?php echo CHtml::link('CHtml::activeRadioButtonList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButtonList')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="radioButtonListInlineRow-detail">
radioButtonListInlineRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButtonListInlineRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list data</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L265">booster/widgets/TbActiveForm.php#L265</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonListInlineRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_RADIOLIST_INLINE</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .radioButtonListInlineRow()
<br/><br/>
Renders a radio button list inline input row.</p>


<div class="detailHeader" id="radioButtonListRow-detail">
radioButtonListRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButtonListRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list data</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L248">booster/widgets/TbActiveForm.php#L248</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonListRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_RADIOLIST</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .radioButtonListRow()
<br/><br/>
Renders a radio button list input row.</p>


<div class="detailHeader" id="radioButtonRow-detail">
radioButtonRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButtonRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L231">booster/widgets/TbActiveForm.php#L231</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_RADIO</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .radioButtonRow()
<br/><br/>
Renders a radio button input row.</p>


<div class="detailHeader" id="redactorRow-detail">
redactorRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>redactorRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L347">booster/widgets/TbActiveForm.php#L347</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">redactorRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_REDACTOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .redactorRow()
<br/><br/>
Renders a WYSIWYG redactor editor</p>


<div class="detailHeader" id="renderError-detail">
renderError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static string <b>renderError</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes to be rendered in the container div tag.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error display. Empty if no errors are found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1115">booster/widgets/TbActiveForm.php#L1115</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">renderError</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;Using&nbsp;side&nbsp;effects&nbsp;of&nbsp;`resolveName`:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`$attribute`&nbsp;will&nbsp;be&nbsp;modified:&nbsp;`[a][b]attr`&nbsp;will&nbsp;be&nbsp;turned&nbsp;into&nbsp;`attr`&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getError</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'span'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates the HTML code wrapping the error text for given model attribute.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CModel::getErrors', array('/site/doc', 'view' => 'CModel', '#' => 'getErrors')); ?></li>
	<li>errorMessageCss</li>
</ul>
</div>

<div class="detailHeader" id="select2Row-detail">
select2Row()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>select2Row</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L539">booster/widgets/TbActiveForm.php#L539</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">select2Row</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_SELECT2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .select2Row()
<br/><br/>
TODO: WTF is a input of type `Select2`? Rename it to something more meaningful!
<br/><br/>
Renders a select2 field row</p>


<div class="detailHeader" id="textAreaRow-detail">
textAreaRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>textAreaRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L331">booster/widgets/TbActiveForm.php#L331</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">textAreaRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_TEXTAREA</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .textAreaRow()
<br/><br/>
Renders a text area input row.</p>


<div class="detailHeader" id="textFieldRow-detail">
textFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>textFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L298">booster/widgets/TbActiveForm.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">textFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_TEXT</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .textFieldRow()
<br/><br/>
Renders a text field input row.</p>


<div class="detailHeader" id="timepickerRow-detail">
timepickerRow()
<span class="detailHeaderTag">
method
(available since v0.10.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>timepickerRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L521">booster/widgets/TbActiveForm.php#L521</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">timepickerRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_TIMEPICKER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .timepickerRow()
<br/><br/>
Renders a timepicker field row.</p>


<div class="detailHeader" id="toggleButtonRow-detail">
toggleButtonRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>toggleButtonRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (options key sets the options for the toggle component)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L99">booster/widgets/TbActiveForm.php#L99</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">toggleButtonRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_TOGGLEBUTTON</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .toggleButtonRow()
<br/><br/>
Renders a toggle input row.</p>


<div class="detailHeader" id="typeAheadField-detail">
typeAheadField()
<span class="detailHeaderTag">
method
(available since v1.0.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>typeAheadField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">typeAhead options (see <a href="http://twitter.github.com/bootstrap/javascript.html#typeahead">http://twitter.github.com/bootstrap/javascript.html#typeahead</a>)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated typeahead field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L801">booster/widgets/TbActiveForm.php#L801</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">typeAheadField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'source'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':&nbsp;\'source\'&nbsp;parameter&nbsp;must&nbsp;be&nbsp;defined.&nbsp;'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">+=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'matcher'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'js:function(item)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;~item.toLowerCase().indexOf(this.query.toLowerCase());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}'<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbTypeahead'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'model'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attribute'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$htmlOptions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">true<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a type ahead field row</p>


<div class="detailHeader" id="typeAheadRow-detail">
typeAheadRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>typeAheadRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L554">booster/widgets/TbActiveForm.php#L554</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">typeAheadRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_TYPEAHEAD</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a typeAhead input row</p>


<div class="detailHeader" id="uneditableRow-detail">
uneditableRow()
<span class="detailHeaderTag">
method
(available since v0.9.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>uneditableRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L431">booster/widgets/TbActiveForm.php#L431</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">uneditableRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputRow</span><span style="color: #007700">(</span><span style="color: #0000BB">TbInput</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_UNEDITABLE</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .uneditableRow()
<br/><br/>
Renders an uneditable text field row.</p>


