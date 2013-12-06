<?php
$this->pageTitle = $this->pageHeading = 'TbFormInputElement';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbFormInputElement';
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
  <td><?php echo CHtml::link('booster.widgets.forms.inputs', array('/site/doc', '#' => 'booster.widgets.forms.inputs')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbFormInputElement &raquo;
<?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?> &raquo;
<?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormInputElement.php">booster/widgets/TbFormInputElement.php</a></td>
</tr>
</table>

<div id="classDescription">
## The inputElementClass for TbForm
<br/><br/>
Support for Yii formbuilder</div>
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
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CFormElement', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>list of attributes (name=>value) for the HTML element represented by this object.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="coreTypes">
  <td><?php echo CHtml::link('coreTypes', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'coreTypes-detail')); ?></td>
  <td>array</td>
  <td>Core input types (alias=>CHtml method name)</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="enableAjaxValidation">
  <td><?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'enableAjaxValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to allow AJAX-based validation for this input.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="enableClientValidation">
  <td><?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'enableClientValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to allow client-side validation for this input.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="errorOptions">
  <td><?php echo CHtml::link('errorOptions', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'errorOptions-detail')); ?></td>
  <td>array</td>
  <td>the options used when rendering the error part.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="hint">
  <td><?php echo CHtml::link('hint', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'hint-detail')); ?></td>
  <td>string</td>
  <td>hint text of this input</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr id="htmlOptionTypes">
  <td><?php echo CHtml::link('htmlOptionTypes', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'htmlOptionTypes-detail')); ?></td>
  <td>array</td>
  <td>map the htmlOptions input type: not supported by YiiBooster yet</td>
  <td>TbFormInputElement</td>
</tr>
<tr class="inherited" id="items">
  <td><?php echo CHtml::link('items', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'items-detail')); ?></td>
  <td>array</td>
  <td>the options for this input when it is a list box, drop-down list, check box list, or radio button list.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="label">
  <td><?php echo CHtml::link('label', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'label-detail')); ?></td>
  <td>string</td>
  <td>the label for this input.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="layout">
  <td><?php echo CHtml::link('layout', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'layout-detail')); ?></td>
  <td>string</td>
  <td>the layout used to render label, input, hint and error.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>name of this input</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="parent">
  <td><?php echo CHtml::link('parent', array('/site/doc', 'view' => 'CFormElement', '#' => 'parent-detail')); ?></td>
  <td>mixed</td>
  <td>the direct parent of this element.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="required">
  <td><?php echo CHtml::link('required', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'required-detail')); ?></td>
  <td>boolean</td>
  <td>Gets the value indicating whether this input is required.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr id="tbActiveFormMethods">
  <td><?php echo CHtml::link('tbActiveFormMethods', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'tbActiveFormMethods-detail')); ?></td>
  <td>array</td>
  <td>Map element->type to TbActiveForm method</td>
  <td>TbFormInputElement</td>
</tr>
<tr class="inherited" id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>the type of this input.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="visible">
  <td><?php echo CHtml::link('visible', array('/site/doc', 'view' => 'CFormElement', '#' => 'visible-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="wrapBootstrapTags">
  <td><?php echo CHtml::link('wrapBootstrapTags', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'wrapBootstrapTags-detail')); ?></td>
  <td>bool</td>
  <td>Wrap control-group/controls tags around custom types (CInputWidget or CJuiInputWidget)</td>
  <td>TbFormInputElement</td>
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
<tr id="activeFormWidget">
  <td><?php echo CHtml::link('activeFormWidget', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'activeFormWidget-detail')); ?></td>
  <td>bool</td>
  <td>Get the TbActiveForm instance</td>
  <td>TbFormInputElement</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CFormElement', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="__get">
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CFormElement', '#' => '__get-detail')); ?></td>
  <td>Returns a property value or an attribute value.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CComponent', '#' => '__isset-detail')); ?></td>
  <td>Checks if a property value is null.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__set">
  <td><?php echo CHtml::link('__set()', array('/site/doc', 'view' => 'CFormElement', '#' => '__set-detail')); ?></td>
  <td>Sets value of a property or attribute.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="__toString">
  <td><?php echo CHtml::link('__toString()', array('/site/doc', 'view' => 'CFormElement', '#' => '__toString-detail')); ?></td>
  <td>Converts the object to a string.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr class="inherited" id="configure">
  <td><?php echo CHtml::link('configure()', array('/site/doc', 'view' => 'CFormElement', '#' => 'configure-detail')); ?></td>
  <td>Configures this object with property initial values.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getLabel">
  <td><?php echo CHtml::link('getLabel()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'getLabel-detail')); ?></td>
  <td>Returns the label for this input. If the label is not manually set,
this method will call <?php echo CHtml::link('CModel::getAttributeLabel', array('/site/doc', 'view' => 'CModel', '#' => 'getAttributeLabel')); ?> to determine the label.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="getParent">
  <td><?php echo CHtml::link('getParent()', array('/site/doc', 'view' => 'CFormElement', '#' => 'getParent-detail')); ?></td>
  <td>Returns the direct parent of this element. This could be either a <?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?> object or a <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> object
(a controller or a widget).</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="getRequired">
  <td><?php echo CHtml::link('getRequired()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'getRequired-detail')); ?></td>
  <td>Gets the value indicating whether this input is required.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="getVisible">
  <td><?php echo CHtml::link('getVisible()', array('/site/doc', 'view' => 'CFormElement', '#' => 'getVisible-detail')); ?></td>
  <td>Returns a value indicating whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'render-detail')); ?></td>
  <td>Render this element using the mapped method from $tbActiveFormMethods</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="renderControlLabel">
  <td><?php echo CHtml::link('renderControlLabel()', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'renderControlLabel-detail')); ?></td>
  <td>Render the label with class="control-label" for custom types</td>
  <td>TbFormInputElement</td>
</tr>
<tr class="inherited" id="renderError">
  <td><?php echo CHtml::link('renderError()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderError-detail')); ?></td>
  <td>Renders the error display of this input.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="renderHint">
  <td><?php echo CHtml::link('renderHint()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderHint-detail')); ?></td>
  <td>Renders the hint text for this input.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="renderInput">
  <td><?php echo CHtml::link('renderInput()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderInput-detail')); ?></td>
  <td>Renders the input field.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="renderLabel">
  <td><?php echo CHtml::link('renderLabel()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderLabel-detail')); ?></td>
  <td>Renders the label for this input.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="setLabel">
  <td><?php echo CHtml::link('setLabel()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'setLabel-detail')); ?></td>
  <td>Sets the label for this input</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="setRequired">
  <td><?php echo CHtml::link('setRequired()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'setRequired-detail')); ?></td>
  <td>Sets whether this input is required.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr class="inherited" id="setVisible">
  <td><?php echo CHtml::link('setVisible()', array('/site/doc', 'view' => 'CFormElement', '#' => 'setVisible-detail')); ?></td>
  <td>Sets whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr class="inherited" id="evaluateVisible">
  <td><?php echo CHtml::link('evaluateVisible()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'evaluateVisible-detail')); ?></td>
  <td>Evaluates the visibility of this element.</td>
  <td><?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?></td>
</tr>
<tr id="getActiveFormWidget">
  <td><?php echo CHtml::link('getActiveFormWidget()', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'getActiveFormWidget-detail')); ?></td>
  <td>Get the TbActiveForm instance</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="prepareHtmlOptions">
  <td><?php echo CHtml::link('prepareHtmlOptions()', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'prepareHtmlOptions-detail')); ?></td>
  <td>Prepare the htmlOptions before calling the TbActiveForm method</td>
  <td>TbFormInputElement</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="activeFormWidget-detail">
activeFormWidget<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected bool <?php echo CHtml::link('<b>getActiveFormWidget</b>', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'getActiveFormWidget')); ?>()</div>

<p>Get the TbActiveForm instance</p>


<div class="detailHeader" id="htmlOptionTypes-detail">
htmlOptionTypes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static array <b>$htmlOptionTypes</b>;</div>

<p>map the htmlOptions input type: not supported by YiiBooster yet</p>


<div class="detailHeader" id="tbActiveFormMethods-detail">
tbActiveFormMethods<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static array <b>$tbActiveFormMethods</b>;</div>

<p>Map element->type to TbActiveForm method</p>


<div class="detailHeader" id="wrapBootstrapTags-detail">
wrapBootstrapTags<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$wrapBootstrapTags</b>;</div>

<p>Wrap control-group/controls tags around custom types (CInputWidget or CJuiInputWidget)</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getActiveFormWidget-detail">
getActiveFormWidget()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected bool <b>getActiveFormWidget</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormInputElement.php#L74">booster/widgets/TbFormInputElement.php#L74</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Get the TbActiveForm instance</p>


<div class="detailHeader" id="prepareHtmlOptions-detail">
prepareHtmlOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>prepareHtmlOptions</b>(array $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormInputElement.php#L86">booster/widgets/TbFormInputElement.php#L86</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">prepareHtmlOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hint</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//restore&nbsp;hint&nbsp;from&nbsp;config&nbsp;as&nbsp;attribute<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'hint'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hint</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//HTML5&nbsp;types&nbsp;not&nbsp;supported&nbsp;in&nbsp;YiiBooster&nbsp;yet<br />&nbsp;&nbsp;&nbsp;&nbsp;//should&nbsp;be&nbsp;possible&nbsp;to&nbsp;set&nbsp;type="email",&nbsp;...&nbsp;in&nbsp;the&nbsp;htmlOptions<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$htmlOptionTypes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$htmlOptionTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Prepare the htmlOptions before calling the TbActiveForm method</p>


<div class="detailHeader" id="render-detail">
render()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>render</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormInputElement.php#L105">booster/widgets/TbFormInputElement.php#L105</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$tbActiveFormMethods</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$method&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$tbActiveFormMethods</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepareHtmlOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$method</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'checkBoxListRow'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'radioButtonListRow'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'dropDownListRow'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'radioButtonListInlineRow'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'checkBoxListInlineRow'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">items</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wrapBootstrapTags</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//wrap&nbsp;tags&nbsp;controls/control-group<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">showErrorSummary&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderError</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{label}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderControlLabel</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{input}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;class=\"controls\"&gt;\n"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderInput</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderHint</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{hint}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{error}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;class=\"control-group\"&gt;\n"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layout</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">render</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Render this element using the mapped method from $tbActiveFormMethods</p>


<div class="detailHeader" id="renderControlLabel-detail">
renderControlLabel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderControlLabel</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormInputElement.php#L143">booster/widgets/TbFormInputElement.php#L143</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderControlLabel</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLabel</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'required'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequired</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'control-label'<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'for'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Render the label with class="control-label" for custom types</p>


