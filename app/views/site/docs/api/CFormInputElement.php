<?php
$this->pageTitle = $this->pageHeading = 'CFormInputElement';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CFormInputElement';
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
  <td><?php echo CHtml::link('system.web.form', array('/site/doc', '#' => 'system.web.form')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CFormInputElement &raquo;
<?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php">yii\web\form\CFormInputElement.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CFormInputElement represents form input element.
<br/><br/>
CFormInputElement can represent the following types of form input based on <?php echo CHtml::link('type', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'type')); ?> property:
<ul>
<li>text: a normal text input generated using <?php echo CHtml::link('CHtml::activeTextField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTextField')); ?></li>
<li>hidden: a hidden input generated using <?php echo CHtml::link('CHtml::activeHiddenField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeHiddenField')); ?></li>
<li>password: a password input generated using <?php echo CHtml::link('CHtml::activePasswordField', array('/site/doc', 'view' => 'CHtml', '#' => 'activePasswordField')); ?></li>
<li>textarea: a text area generated using <?php echo CHtml::link('CHtml::activeTextArea', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTextArea')); ?></li>
<li>file: a file input generated using <?php echo CHtml::link('CHtml::activeFileField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeFileField')); ?></li>
<li>radio: a radio button generated using <?php echo CHtml::link('CHtml::activeRadioButton', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButton')); ?></li>
<li>checkbox: a check box generated using <?php echo CHtml::link('CHtml::activeCheckBox', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBox')); ?></li>
<li>listbox: a list box generated using <?php echo CHtml::link('CHtml::activeListBox', array('/site/doc', 'view' => 'CHtml', '#' => 'activeListBox')); ?></li>
<li>dropdownlist: a drop-down list generated using <?php echo CHtml::link('CHtml::activeDropDownList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeDropDownList')); ?></li>
<li>checkboxlist: a list of check boxes generated using <?php echo CHtml::link('CHtml::activeCheckBoxList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBoxList')); ?></li>
<li>radiolist: a list of radio buttons generated using <?php echo CHtml::link('CHtml::activeRadioButtonList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButtonList')); ?></li>
<li>url: an HTML5 url input generated using <?php echo CHtml::link('CHtml::activeUrlField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeUrlField')); ?></li>
<li>email: an HTML5 email input generated using <?php echo CHtml::link('CHtml::activeEmailField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeEmailField')); ?></li>
<li>number: an HTML5 number input generated using <?php echo CHtml::link('CHtml::activeNumberField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeNumberField')); ?></li>
<li>range: an HTML5 range input generated using <?php echo CHtml::link('CHtml::activeRangeField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRangeField')); ?></li>
<li>date: an HTML5 date input generated using <?php echo CHtml::link('CHtml::activeDateField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeDateField')); ?></li>
</ul>
The <?php echo CHtml::link('type', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'type')); ?> property can also be a class name or a path alias to the class. In this case,
the input is generated using a widget of the specified class. Note, the widget must
have a property called "model" which expects a model object, and a property called "attribute"
which expects the name of a model attribute.
<br/><br/>
Because CFormElement is an ancestor class of CFormInputElement, a value assigned to a non-existing property will be
stored in <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'attributes')); ?> which will be passed as HTML attribute values to the <?php echo CHtml::link('CHtml', array('/site/doc', 'view' => 'CHtml')); ?> method
generating the input or initial values of the widget properties.</div>
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
<tr id="coreTypes">
  <td><?php echo CHtml::link('coreTypes', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'coreTypes-detail')); ?></td>
  <td>array</td>
  <td>Core input types (alias=>CHtml method name)</td>
  <td>CFormInputElement</td>
</tr>
<tr id="enableAjaxValidation">
  <td><?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'enableAjaxValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to allow AJAX-based validation for this input.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="enableClientValidation">
  <td><?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'enableClientValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to allow client-side validation for this input.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="errorOptions">
  <td><?php echo CHtml::link('errorOptions', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'errorOptions-detail')); ?></td>
  <td>array</td>
  <td>the options used when rendering the error part.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="hint">
  <td><?php echo CHtml::link('hint', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'hint-detail')); ?></td>
  <td>string</td>
  <td>hint text of this input</td>
  <td>CFormInputElement</td>
</tr>
<tr id="items">
  <td><?php echo CHtml::link('items', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'items-detail')); ?></td>
  <td>array</td>
  <td>the options for this input when it is a list box, drop-down list, check box list, or radio button list.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="label">
  <td><?php echo CHtml::link('label', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'label-detail')); ?></td>
  <td>string</td>
  <td>the label for this input.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="layout">
  <td><?php echo CHtml::link('layout', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'layout-detail')); ?></td>
  <td>string</td>
  <td>the layout used to render label, input, hint and error.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>name of this input</td>
  <td>CFormInputElement</td>
</tr>
<tr class="inherited" id="parent">
  <td><?php echo CHtml::link('parent', array('/site/doc', 'view' => 'CFormElement', '#' => 'parent-detail')); ?></td>
  <td>mixed</td>
  <td>the direct parent of this element.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="required">
  <td><?php echo CHtml::link('required', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'required-detail')); ?></td>
  <td>boolean</td>
  <td>Gets the value indicating whether this input is required.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>the type of this input.</td>
  <td>CFormInputElement</td>
</tr>
<tr class="inherited" id="visible">
  <td><?php echo CHtml::link('visible', array('/site/doc', 'view' => 'CFormElement', '#' => 'visible-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr id="getLabel">
  <td><?php echo CHtml::link('getLabel()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'getLabel-detail')); ?></td>
  <td>Returns the label for this input. If the label is not manually set,
this method will call <?php echo CHtml::link('CModel::getAttributeLabel', array('/site/doc', 'view' => 'CModel', '#' => 'getAttributeLabel')); ?> to determine the label.</td>
  <td>CFormInputElement</td>
</tr>
<tr class="inherited" id="getParent">
  <td><?php echo CHtml::link('getParent()', array('/site/doc', 'view' => 'CFormElement', '#' => 'getParent-detail')); ?></td>
  <td>Returns the direct parent of this element. This could be either a <?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?> object or a <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> object
(a controller or a widget).</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="getRequired">
  <td><?php echo CHtml::link('getRequired()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'getRequired-detail')); ?></td>
  <td>Gets the value indicating whether this input is required.</td>
  <td>CFormInputElement</td>
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
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'render-detail')); ?></td>
  <td>Renders everything for this input.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="renderError">
  <td><?php echo CHtml::link('renderError()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderError-detail')); ?></td>
  <td>Renders the error display of this input.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="renderHint">
  <td><?php echo CHtml::link('renderHint()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderHint-detail')); ?></td>
  <td>Renders the hint text for this input.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="renderInput">
  <td><?php echo CHtml::link('renderInput()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderInput-detail')); ?></td>
  <td>Renders the input field.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="renderLabel">
  <td><?php echo CHtml::link('renderLabel()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderLabel-detail')); ?></td>
  <td>Renders the label for this input.</td>
  <td>CFormInputElement</td>
</tr>
<tr id="setLabel">
  <td><?php echo CHtml::link('setLabel()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'setLabel-detail')); ?></td>
  <td>Sets the label for this input</td>
  <td>CFormInputElement</td>
</tr>
<tr id="setRequired">
  <td><?php echo CHtml::link('setRequired()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'setRequired-detail')); ?></td>
  <td>Sets whether this input is required.</td>
  <td>CFormInputElement</td>
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
<tr id="evaluateVisible">
  <td><?php echo CHtml::link('evaluateVisible()', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'evaluateVisible-detail')); ?></td>
  <td>Evaluates the visibility of this element.</td>
  <td>CFormInputElement</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="coreTypes-detail">
coreTypes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static array <b>$coreTypes</b>;</div>

<p>Core input types (alias=>CHtml method name)</p>


<div class="detailHeader" id="enableAjaxValidation-detail">
enableAjaxValidation<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public boolean <b>$enableAjaxValidation</b>;</div>

<p>whether to allow AJAX-based validation for this input. Note that in order to use
AJAX-based validation, <?php echo CHtml::link('CForm::activeForm', array('/site/doc', 'view' => 'CForm', '#' => 'activeForm')); ?> must be configured with 'enableAjaxValidation'=>true.
This property allows turning on or off  AJAX-based validation for individual input fields.
Defaults to true.</p>


<div class="detailHeader" id="enableClientValidation-detail">
enableClientValidation<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public boolean <b>$enableClientValidation</b>;</div>

<p>whether to allow client-side validation for this input. Note that in order to use
client-side validation, <?php echo CHtml::link('CForm::activeForm', array('/site/doc', 'view' => 'CForm', '#' => 'activeForm')); ?> must be configured with 'enableClientValidation'=>true.
This property allows turning on or off  client-side validation for individual input fields.
Defaults to true.</p>


<div class="detailHeader" id="errorOptions-detail">
errorOptions<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public array <b>$errorOptions</b>;</div>

<p>the options used when rendering the error part. This property will be passed
to the <?php echo CHtml::link('CActiveForm::error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?> method call as its $htmlOptions parameter.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?></li>
</ul>
</div>

<div class="detailHeader" id="hint-detail">
hint<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$hint</b>;</div>

<p>hint text of this input</p>


<div class="detailHeader" id="items-detail">
items<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$items</b>;</div>

<p>the options for this input when it is a list box, drop-down list, check box list, or radio button list.
Please see <?php echo CHtml::link('CHtml::listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?> for details of generating this property value.</p>


<div class="detailHeader" id="label-detail">
label<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLabel</b>', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'getLabel')); ?>()<br/>public void <?php echo CHtml::link('<b>setLabel</b>', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'setLabel')); ?>(string $value)</div>

<p>the label for this input. If the label is not manually set,
this method will call <?php echo CHtml::link('CModel::getAttributeLabel', array('/site/doc', 'view' => 'CModel', '#' => 'getAttributeLabel')); ?> to determine the label.</p>


<div class="detailHeader" id="layout-detail">
layout<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$layout</b>;</div>

<p>the layout used to render label, input, hint and error. They correspond to the placeholders
"{label}", "{input}", "{hint}" and "{error}".</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$name</b>;</div>

<p>name of this input</p>


<div class="detailHeader" id="required-detail">
required<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getRequired</b>', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'getRequired')); ?>()<br/>public void <?php echo CHtml::link('<b>setRequired</b>', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'setRequired')); ?>(boolean $value)</div>

<p>Gets the value indicating whether this input is required.
If this property is not set explicitly, it will be determined by calling
<?php echo CHtml::link('CModel::isAttributeRequired', array('/site/doc', 'view' => 'CModel', '#' => 'isAttributeRequired')); ?> for the associated model and attribute of this input.</p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$type</b>;</div>

<p>the type of this input. This can be a widget class name, a path alias of a widget class name,
or an input type alias (text, hidden, password, textarea, file, radio, checkbox, listbox, dropdownlist, checkboxlist, or radiolist).
If a widget class, it must extend from <?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?> or (@link CJuiInputWidget).</p>


<h2>Method Details</h2>

<div class="detailHeader" id="evaluateVisible-detail">
evaluateVisible()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>evaluateVisible</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this element is visible.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L260">yii\web\form\CFormInputElement.php#L260</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">evaluateVisible</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">isAttributeSafe</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Evaluates the visibility of this element.
This method will check if the attribute associated with this input is safe for
the current model scenario.</p>


<div class="detailHeader" id="getLabel-detail">
getLabel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLabel</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the label for this input. If the label is not manually set,
this method will call <?php echo CHtml::link('CModel::getAttributeLabel', array('/site/doc', 'view' => 'CModel', '#' => 'getAttributeLabel')); ?> to determine the label.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L151">yii\web\form\CFormInputElement.php#L151</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLabel</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_label</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_label</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getRequired-detail">
getRequired()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getRequired</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this input is required.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L131">yii\web\form\CFormInputElement.php#L131</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRequired</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_required</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_required</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">isAttributeRequired</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Gets the value indicating whether this input is required.
If this property is not set explicitly, it will be determined by calling
<?php echo CHtml::link('CModel::isAttributeRequired', array('/site/doc', 'view' => 'CModel', '#' => 'isAttributeRequired')); ?> for the associated model and attribute of this input.</p>


<div class="detailHeader" id="render-detail">
render()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>render</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the complete rendering result for this input, including label, input field, hint, and error.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L174">yii\web\form\CFormInputElement.php#L174</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">===</span><span style="color: #DD0000">'hidden'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderInput</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{label}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderLabel</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{input}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderInput</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{hint}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderHint</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{error}'</span><span style="color: #007700">=&gt;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">showErrors&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderError</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layout</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders everything for this input.
The default implementation simply returns the result of <?php echo CHtml::link('renderLabel', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderLabel')); ?>, <?php echo CHtml::link('renderInput', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderInput')); ?>,
<?php echo CHtml::link('renderHint', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderHint')); ?>. When <?php echo CHtml::link('CForm::showErrorSummary', array('/site/doc', 'view' => 'CForm', '#' => 'showErrorSummary')); ?> is false, <?php echo CHtml::link('renderError', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'renderError')); ?> is also called
to show error messages after individual input fields.</p>


<div class="detailHeader" id="renderError-detail">
renderError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderError</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L238">yii\web\form\CFormInputElement.php#L238</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderError</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parent</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$parent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">error</span><span style="color: #007700">(</span><span style="color: #0000BB">$parent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableAjaxValidation</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableClientValidation</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders the error display of this input.
The default implementation returns the result of <?php echo CHtml::link('CHtml::error', array('/site/doc', 'view' => 'CHtml', '#' => 'error')); ?></p>


<div class="detailHeader" id="renderHint-detail">
renderHint()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderHint</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L249">yii\web\form\CFormInputElement.php#L249</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderHint</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hint</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="hint"&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hint</span><span style="color: #007700">.</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the hint text for this input.
The default implementation returns the <?php echo CHtml::link('hint', array('/site/doc', 'view' => 'CFormInputElement', '#' => 'hint')); ?> property enclosed in a paragraph HTML tag.</p>


<div class="detailHeader" id="renderInput-detail">
renderInput()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderInput</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L212">yii\web\form\CFormInputElement.php#L212</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderInput</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$coreTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$coreTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$method</span><span style="color: #007700">,</span><span style="color: #DD0000">'List'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">items</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the input field.
The default implementation returns the result of the appropriate CHtml method or the widget.</p>


<div class="detailHeader" id="renderLabel-detail">
renderLabel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderLabel</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L192">yii\web\form\CFormInputElement.php#L192</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderLabel</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLabel</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'required'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequired</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'for'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders the label for this input.
The default implementation returns the result of <?php echo CHtml::link('activeLabelEx', array('/site/doc', 'view' => 'CHtml')); ?>.</p>


<div class="detailHeader" id="setLabel-detail">
setLabel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setLabel</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the label for this input</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L162">yii\web\form\CFormInputElement.php#L162</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_label</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setRequired-detail">
setRequired()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setRequired</b>(boolean $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this input is required.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\form\CFormInputElement.php#L142">yii\web\form\CFormInputElement.php#L142</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setRequired</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_required</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


