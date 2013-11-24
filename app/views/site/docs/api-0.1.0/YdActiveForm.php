<?php
$this->pageTitle = $this->pageHeading = 'YdActiveForm';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdActiveForm';
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
  <td><?php echo CHtml::link('dressing.widgets', array('/site/doc', '#' => 'dressing.widgets')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdActiveForm &raquo;
<?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> &raquo;
<?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdActiveForm.php">dressing/widgets/YdActiveForm.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdActiveForm</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="addOnCssClass">
  <td><?php echo CHtml::link('addOnCssClass', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'addOnCssClass-detail')); ?></td>
  <td>string</td>
  <td>Add-on CSS class.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="addOnTag">
  <td><?php echo CHtml::link('addOnTag', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'addOnTag-detail')); ?></td>
  <td>string</td>
  <td>Add-on wrapper tag.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="addOnWrapperTag">
  <td><?php echo CHtml::link('addOnWrapperTag', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'addOnWrapperTag-detail')); ?></td>
  <td>string</td>
  <td>Tag for wrapping field with prepended and/or appended data.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="appendCssClass">
  <td><?php echo CHtml::link('appendCssClass', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'appendCssClass-detail')); ?></td>
  <td>string</td>
  <td>Append wrapper CSS class.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr id="askToSaveWork">
  <td><?php echo CHtml::link('askToSaveWork', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'askToSaveWork-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdActiveForm</td>
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
<tr class="inherited" id="hintCssClass">
  <td><?php echo CHtml::link('hintCssClass', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'hintCssClass-detail')); ?></td>
  <td>string</td>
  <td>Hint CSS class.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="hintTag">
  <td><?php echo CHtml::link('hintTag', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'hintTag-detail')); ?></td>
  <td>string</td>
  <td>Hint wrapper tag.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr class="inherited" id="inlineErrors">
  <td><?php echo CHtml::link('inlineErrors', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'inlineErrors-detail')); ?></td>
  <td>bool</td>
  <td>Whether to render errors inline.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="method">
  <td><?php echo CHtml::link('method', array('/site/doc', 'view' => 'CActiveForm', '#' => 'method-detail')); ?></td>
  <td>string</td>
  <td>the form submission method.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('YdActiveFormModel', array('/site/doc', 'view' => 'YdActiveFormModel')); ?></td>
  <td></td>
  <td>YdActiveForm</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="prependCssClass">
  <td><?php echo CHtml::link('prependCssClass', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'prependCssClass-detail')); ?></td>
  <td>string</td>
  <td>Prepend wrapper CSS class.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr id="returnUrl">
  <td><?php echo CHtml::link('returnUrl', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'returnUrl-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdActiveForm</td>
</tr>
<tr class="inherited" id="showErrors">
  <td><?php echo CHtml::link('showErrors', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'showErrors-detail')); ?></td>
  <td>bool</td>
  <td>Whether to render field error after input. Only for vertical and horizontal types.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr id="submitRowClass">
  <td><?php echo CHtml::link('submitRowClass', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'submitRowClass-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdActiveForm</td>
</tr>
<tr class="inherited" id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>The form type. Allowed types are in `TYPE_*` constants.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr id="beginModalWrap">
  <td><?php echo CHtml::link('beginModalWrap()', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'beginModalWrap-detail')); ?></td>
  <td></td>
  <td>YdActiveForm</td>
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
<tr class="inherited" id="captchaRow">
  <td><?php echo CHtml::link('captchaRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'captchaRow-detail')); ?></td>
  <td>Generates a color picker field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="checkBox">
  <td><?php echo CHtml::link('checkBox()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBox-detail')); ?></td>
  <td>Renders a checkbox for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="checkBoxList">
  <td><?php echo CHtml::link('checkBoxList()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBoxList-detail')); ?></td>
  <td>Renders a checkbox list for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="checkBoxListRow">
  <td><?php echo CHtml::link('checkBoxListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxListRow-detail')); ?></td>
  <td>Generates a checkbox list row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="checkBoxRow">
  <td><?php echo CHtml::link('checkBoxRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxRow-detail')); ?></td>
  <td>Generates a checkbox row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="ckEditorRow">
  <td><?php echo CHtml::link('ckEditorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'ckEditorRow-detail')); ?></td>
  <td>Generates a CKEditor row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="colorPickerRow">
  <td><?php echo CHtml::link('colorPickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'colorPickerRow-detail')); ?></td>
  <td>Generates a color picker field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a widget and initializes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="customFieldRow">
  <td><?php echo CHtml::link('customFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow-detail')); ?></td>
  <td>Generates a custom field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="dateField">
  <td><?php echo CHtml::link('dateField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dateField-detail')); ?></td>
  <td>Renders a date field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="dateFieldRow">
  <td><?php echo CHtml::link('dateFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dateFieldRow-detail')); ?></td>
  <td>Generates a date field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="datePickerRow">
  <td><?php echo CHtml::link('datePickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'datePickerRow-detail')); ?></td>
  <td>Generates a date picker row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="dateRangeRow">
  <td><?php echo CHtml::link('dateRangeRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dateRangeRow-detail')); ?></td>
  <td>Generates a date range picker row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="dateTimePickerRow">
  <td><?php echo CHtml::link('dateTimePickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dateTimePickerRow-detail')); ?></td>
  <td>Generates a date-time picker row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr class="inherited" id="dropDownListRow">
  <td><?php echo CHtml::link('dropDownListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dropDownListRow-detail')); ?></td>
  <td>Generates a dropdown list row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="emailField">
  <td><?php echo CHtml::link('emailField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'emailField-detail')); ?></td>
  <td>Renders an email field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="emailFieldRow">
  <td><?php echo CHtml::link('emailFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'emailFieldRow-detail')); ?></td>
  <td>Generates an email field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr id="endModalWrap">
  <td><?php echo CHtml::link('endModalWrap()', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'endModalWrap-detail')); ?></td>
  <td></td>
  <td>YdActiveForm</td>
</tr>
<tr class="inherited" id="endWidget">
  <td><?php echo CHtml::link('endWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endWidget-detail')); ?></td>
  <td>Ends the execution of the named widget.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="error">
  <td><?php echo CHtml::link('error()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error-detail')); ?></td>
  <td>Displays the first validation error for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="errorSummary">
  <td><?php echo CHtml::link('errorSummary()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'errorSummary-detail')); ?></td>
  <td>Displays a summary of validation errors for one or several models.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr class="inherited" id="fileFieldRow">
  <td><?php echo CHtml::link('fileFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'fileFieldRow-detail')); ?></td>
  <td>Generates a file field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr id="getGridIdHiddenFields">
  <td><?php echo CHtml::link('getGridIdHiddenFields()', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'getGridIdHiddenFields-detail')); ?></td>
  <td></td>
  <td>YdActiveForm</td>
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
<tr id="getSubmitButton">
  <td><?php echo CHtml::link('getSubmitButton()', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'getSubmitButton-detail')); ?></td>
  <td></td>
  <td>YdActiveForm</td>
</tr>
<tr id="getSubmitButtonRow">
  <td><?php echo CHtml::link('getSubmitButtonRow()', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'getSubmitButtonRow-detail')); ?></td>
  <td></td>
  <td>YdActiveForm</td>
</tr>
<tr id="getSubmitRowClass">
  <td><?php echo CHtml::link('getSubmitRowClass()', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'getSubmitRowClass-detail')); ?></td>
  <td></td>
  <td>YdActiveForm</td>
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
<tr class="inherited" id="html5EditorRow">
  <td><?php echo CHtml::link('html5EditorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'html5EditorRow-detail')); ?></td>
  <td>Generates a html5 editor row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'init-detail')); ?></td>
  <td>Initializes the widget.</td>
  <td>YdActiveForm</td>
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
<tr class="inherited" id="listBoxRow">
  <td><?php echo CHtml::link('listBoxRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'listBoxRow-detail')); ?></td>
  <td>Generates a list box row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="markdownEditorRow">
  <td><?php echo CHtml::link('markdownEditorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'markdownEditorRow-detail')); ?></td>
  <td>Generates a markdown editor row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="maskedTextFieldRow">
  <td><?php echo CHtml::link('maskedTextFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'maskedTextFieldRow-detail')); ?></td>
  <td>Generates a masked text field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="numberField">
  <td><?php echo CHtml::link('numberField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'numberField-detail')); ?></td>
  <td>Renders a number field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="numberFieldRow">
  <td><?php echo CHtml::link('numberFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'numberFieldRow-detail')); ?></td>
  <td>Generates a number field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="passFieldRow">
  <td><?php echo CHtml::link('passFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'passFieldRow-detail')); ?></td>
  <td>Generates a Pass*Field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="passwordField">
  <td><?php echo CHtml::link('passwordField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'passwordField-detail')); ?></td>
  <td>Renders a password field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="passwordFieldRow">
  <td><?php echo CHtml::link('passwordFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'passwordFieldRow-detail')); ?></td>
  <td>Generates a password field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="radioButton">
  <td><?php echo CHtml::link('radioButton()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButton-detail')); ?></td>
  <td>Renders a radio button for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="radioButtonList">
  <td><?php echo CHtml::link('radioButtonList()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButtonList-detail')); ?></td>
  <td>Renders a radio button list for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="radioButtonListRow">
  <td><?php echo CHtml::link('radioButtonListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonListRow-detail')); ?></td>
  <td>Generates a radio button list row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="radioButtonRow">
  <td><?php echo CHtml::link('radioButtonRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonRow-detail')); ?></td>
  <td>Generates a radio button row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr class="inherited" id="rangeFieldRow">
  <td><?php echo CHtml::link('rangeFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'rangeFieldRow-detail')); ?></td>
  <td>Generates a range field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="redactorRow">
  <td><?php echo CHtml::link('redactorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'redactorRow-detail')); ?></td>
  <td>Generates a redactor editor row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr class="inherited" id="searchFieldRow">
  <td><?php echo CHtml::link('searchFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'searchFieldRow-detail')); ?></td>
  <td>Generates a search field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr id="searchToggle">
  <td><?php echo CHtml::link('searchToggle()', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'searchToggle-detail')); ?></td>
  <td></td>
  <td>YdActiveForm</td>
</tr>
<tr class="inherited" id="select2Row">
  <td><?php echo CHtml::link('select2Row()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'select2Row-detail')); ?></td>
  <td>Generates a select2 row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr class="inherited" id="telFieldRow">
  <td><?php echo CHtml::link('telFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'telFieldRow-detail')); ?></td>
  <td>Generates a tel field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="textArea">
  <td><?php echo CHtml::link('textArea()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textArea-detail')); ?></td>
  <td>Renders a text area for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="textAreaRow">
  <td><?php echo CHtml::link('textAreaRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'textAreaRow-detail')); ?></td>
  <td>Generates a text area row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="textField">
  <td><?php echo CHtml::link('textField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField-detail')); ?></td>
  <td>Renders a text field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="textFieldRow">
  <td><?php echo CHtml::link('textFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'textFieldRow-detail')); ?></td>
  <td>Generates a text field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="timeField">
  <td><?php echo CHtml::link('timeField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'timeField-detail')); ?></td>
  <td>Renders a time field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="timeFieldRow">
  <td><?php echo CHtml::link('timeFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'timeFieldRow-detail')); ?></td>
  <td>Generates a time field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="timePickerRow">
  <td><?php echo CHtml::link('timePickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'timePickerRow-detail')); ?></td>
  <td>Generates a time picker row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="toggleButtonRow">
  <td><?php echo CHtml::link('toggleButtonRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'toggleButtonRow-detail')); ?></td>
  <td>Generates a toggle button row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="typeAheadRow">
  <td><?php echo CHtml::link('typeAheadRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'typeAheadRow-detail')); ?></td>
  <td>Generates a type-ahead row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="urlField">
  <td><?php echo CHtml::link('urlField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'urlField-detail')); ?></td>
  <td>Renders a url field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="urlFieldRow">
  <td><?php echo CHtml::link('urlFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'urlFieldRow-detail')); ?></td>
  <td>Generates a url field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr class="inherited" id="widgetRow">
  <td><?php echo CHtml::link('widgetRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'widgetRow-detail')); ?></td>
  <td>Generates a widget row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
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
<tr class="inherited" id="addCssClass">
  <td><?php echo CHtml::link('addCssClass()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'addCssClass-detail')); ?></td>
  <td>Utility function for appending class names for a generic $htmlOptions array.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="customFieldRowInternal">
  <td><?php echo CHtml::link('customFieldRowInternal()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRowInternal-detail')); ?></td>
  <td>Generates a custom field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="horizontalFieldRow">
  <td><?php echo CHtml::link('horizontalFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'horizontalFieldRow-detail')); ?></td>
  <td>Renders a horizontal custom field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="initRowOptions">
  <td><?php echo CHtml::link('initRowOptions()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'initRowOptions-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="inlineFieldRow">
  <td><?php echo CHtml::link('inlineFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'inlineFieldRow-detail')); ?></td>
  <td>Renders a inline custom field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="renderAddOnBegin">
  <td><?php echo CHtml::link('renderAddOnBegin()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'renderAddOnBegin-detail')); ?></td>
  <td>Renders add-on begin.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="renderAddOnEnd">
  <td><?php echo CHtml::link('renderAddOnEnd()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'renderAddOnEnd-detail')); ?></td>
  <td>Renders add-on end.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="verticalFieldRow">
  <td><?php echo CHtml::link('verticalFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'verticalFieldRow-detail')); ?></td>
  <td>Renders a vertical custom field row for a model attribute.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr class="inherited" id="widgetRowInternal">
  <td><?php echo CHtml::link('widgetRowInternal()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'widgetRowInternal-detail')); ?></td>
  <td>This is a intermediate method for widget-based row methods.</td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="askToSaveWork-detail">
askToSaveWork<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$askToSaveWork</b>;</div>

<p></p>


<div class="detailHeader" id="model-detail">
model<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('YdActiveFormModel', array('/site/doc', 'view' => 'YdActiveFormModel')); ?> <b>$model</b>;</div>

<p></p>


<div class="detailHeader" id="returnUrl-detail">
returnUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$returnUrl</b>;</div>

<p></p>


<div class="detailHeader" id="submitRowClass-detail">
submitRowClass<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getSubmitRowClass</b>', array('/site/doc', 'view' => 'YdActiveForm', '#' => 'getSubmitRowClass')); ?>()</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="beginModalWrap-detail">
beginModalWrap()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>beginModalWrap</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdActiveForm.php#L67">dressing/widgets/YdActiveForm.php#L67</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beginModalWrap</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;more&nbsp;modal&nbsp;stuff<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="modal-body"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="endModalWrap-detail">
endModalWrap()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>endModalWrap</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdActiveForm.php#L79">dressing/widgets/YdActiveForm.php#L79</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">endModalWrap</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;more&nbsp;modal&nbsp;stuff<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getGridIdHiddenFields-detail">
getGridIdHiddenFields()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getGridIdHiddenFields</b>(null $ids)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$ids</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdActiveForm.php#L119">dressing/widgets/YdActiveForm.php#L119</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getGridIdHiddenFields</span><span style="color: #007700">(</span><span style="color: #0000BB">$ids</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$inputs&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$ids&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$inputs</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #DD0000">'hidden-sf-grid_c0[]'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$inputs</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSubmitButton-detail">
getSubmitButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSubmitButton</b>(string $label, $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdActiveForm.php#L132">dressing/widgets/YdActiveForm.php#L132</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSubmitButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$defaultOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttonType'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'icon'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'ok&nbsp;white'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbButton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSubmitButtonRow-detail">
getSubmitButtonRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSubmitButtonRow</b>(string $label, $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdActiveForm.php#L150">dressing/widgets/YdActiveForm.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSubmitButtonRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSubmitRowClass</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSubmitButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSubmitRowClass-detail">
getSubmitRowClass()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSubmitRowClass</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdActiveForm.php#L91">dressing/widgets/YdActiveForm.php#L91</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSubmitRowClass</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">isAjaxRequest&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'modal-footer'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'form-actions'</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdActiveForm.php#L37">dressing/widgets/YdActiveForm.php#L37</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;modal-form&nbsp;for&nbsp;popups<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;modal-form'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;a&nbsp;model&nbsp;we&nbsp;can&nbsp;use&nbsp;for&nbsp;this&nbsp;form<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">:&nbsp;new&nbsp;</span><span style="color: #0000BB">YdActiveFormModel</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;init&nbsp;the&nbsp;parent&nbsp;(output&nbsp;&lt;form&gt;&nbsp;tag)<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;output&nbsp;the&nbsp;return&nbsp;url<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">returnUrl&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #DD0000">'returnUrl'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">returnUrl&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">returnUrl&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">returnUrl</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFormValue</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;ask&nbsp;to&nbsp;save&nbsp;work<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">askToSaveWork</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #DD0000">'widgets.AskToSaveWork'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'watchElement'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#setting-form&nbsp;:input'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'message'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Please&nbsp;save&nbsp;before&nbsp;leaving&nbsp;the&nbsp;page.'</span><span style="color: #007700">)));<br /><br />}</span>
</span>
</code></div>
</div>
<p>Initializes the widget.
This renders the form open tag.</p>


<div class="detailHeader" id="searchToggle-detail">
searchToggle()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>searchToggle</b>($buttonId $buttonClass, $hiderId $gridId=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$buttonClass</td>
  <td class="paramTypeCol">$buttonId</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$gridId</td>
  <td class="paramTypeCol">$hiderId</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdActiveForm.php#L100">dressing/widgets/YdActiveForm.php#L100</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">searchToggle</span><span style="color: #007700">(</span><span style="color: #0000BB">$buttonClass</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$gridId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$script&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"$('."&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$buttonClass&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"').click(function(){&nbsp;$('#"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"').toggle();&nbsp;});"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$gridId</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$script&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"').submit(function(){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.fn.yiiGridView.update('"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$gridId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"',&nbsp;{url:&nbsp;$(this).attr('action'),data:&nbsp;$(this).serialize()});<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;false;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'-searchToggle'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$script</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_READY</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


