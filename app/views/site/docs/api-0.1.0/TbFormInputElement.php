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
  <th>Inheritance</th>
  <td>class TbFormInputElement &raquo;
<?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormInputElement.php">booster/widgets/TbFormInputElement.php</a></td>
</tr>
</table>

<div id="classDescription">
</div>
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
<tr id="append">
  <td><?php echo CHtml::link('append', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'append-detail')); ?></td>
  <td>string</td>
  <td>Text/html appended to input field.</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="appendOptions">
  <td><?php echo CHtml::link('appendOptions', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'appendOptions-detail')); ?></td>
  <td>array</td>
  <td>The options used when rendering append part.</td>
  <td>TbFormInputElement</td>
</tr>
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CFormElement', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>list of attributes (name=>value) for the HTML element represented by this object.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="enableAjaxValidation">
  <td><?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'enableAjaxValidation-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to allow AJAX-based validation for this input. Note that in order to use</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="enableClientValidation">
  <td><?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'enableClientValidation-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to allow client-side validation for this input. Note that in order to use</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="errorOptions">
  <td><?php echo CHtml::link('errorOptions', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'errorOptions-detail')); ?></td>
  <td>array</td>
  <td>The options used when rendering the error part. This property will be passed</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="hint">
  <td><?php echo CHtml::link('hint', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'hint-detail')); ?></td>
  <td>string</td>
  <td>Hint text of this input.</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="hintOptions">
  <td><?php echo CHtml::link('hintOptions', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'hintOptions-detail')); ?></td>
  <td>array</td>
  <td>The options used when rendering hint part.</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="inputTypes">
  <td><?php echo CHtml::link('inputTypes', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'inputTypes-detail')); ?></td>
  <td>array</td>
  <td>Input types (alias => TbActiveForm method name).</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="items">
  <td><?php echo CHtml::link('items', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'items-detail')); ?></td>
  <td>array</td>
  <td>The options for this input when it is a list box, drop-down list, check box list, or radio button list.</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="label">
  <td><?php echo CHtml::link('label', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'label-detail')); ?></td>
  <td>string</td>
  <td>Label for this input.</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="labelOptions">
  <td><?php echo CHtml::link('labelOptions', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'labelOptions-detail')); ?></td>
  <td>array</td>
  <td>The options used when rendering label part. This property will be passed to the <?php echo CHtml::link('CActiveForm::labelEx', array('/site/doc', 'view' => 'CActiveForm', '#' => 'labelEx')); ?></td>
  <td>TbFormInputElement</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>Name of this input.</td>
  <td>TbFormInputElement</td>
</tr>
<tr class="inherited" id="parent">
  <td><?php echo CHtml::link('parent', array('/site/doc', 'view' => 'CFormElement', '#' => 'parent-detail')); ?></td>
  <td>mixed</td>
  <td>the direct parent of this element.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="prepend">
  <td><?php echo CHtml::link('prepend', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'prepend-detail')); ?></td>
  <td>string</td>
  <td>Text/html prepended to input field.</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="prependOptions">
  <td><?php echo CHtml::link('prependOptions', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'prependOptions-detail')); ?></td>
  <td>array</td>
  <td>The options used when rendering prepend part.</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>The type of this input. This can be a widget class name, a path alias of a widget class name,</td>
  <td>TbFormInputElement</td>
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
<tr class="inherited" id="getParent">
  <td><?php echo CHtml::link('getParent()', array('/site/doc', 'view' => 'CFormElement', '#' => 'getParent-detail')); ?></td>
  <td>Returns the direct parent of this element. This could be either a <?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?> object or a <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> object
(a controller or a widget).</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
  <td>Render this element.</td>
  <td>TbFormInputElement</td>
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
  <td><?php echo CHtml::link('evaluateVisible()', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'evaluateVisible-detail')); ?></td>
  <td>Evaluates the visibility of this element. This method will check if the attribute associated with this</td>
  <td>TbFormInputElement</td>
</tr>
<tr id="generateRowOptions">
  <td><?php echo CHtml::link('generateRowOptions()', array('/site/doc', 'view' => 'TbFormInputElement', '#' => 'generateRowOptions-detail')); ?></td>
  <td>Generates row options array from this class properties.</td>
  <td>TbFormInputElement</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="append-detail">
append<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$append</b>;</div>

<p>Text/html appended to input field.</p>


<div class="detailHeader" id="appendOptions-detail">
appendOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$appendOptions</b>;</div>

<p>The options used when rendering append part.
This property will be passed as $htmlOptions parameter for append wrapper tag.</p>


<div class="detailHeader" id="enableAjaxValidation-detail">
enableAjaxValidation<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$enableAjaxValidation</b>;</div>

<p>Whether to allow AJAX-based validation for this input. Note that in order to use
AJAX-based validation, <?php echo CHtml::link('CForm::activeForm', array('/site/doc', 'view' => 'CForm', '#' => 'activeForm')); ?> must be configured with 'enableAjaxValidation'=>true.
This property allows turning on or off  AJAX-based validation for individual input fields.
Defaults to true.</p>


<div class="detailHeader" id="enableClientValidation-detail">
enableClientValidation<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$enableClientValidation</b>;</div>

<p>Whether to allow client-side validation for this input. Note that in order to use
client-side validation, <?php echo CHtml::link('CForm::activeForm', array('/site/doc', 'view' => 'CForm', '#' => 'activeForm')); ?> must be configured with 'enableClientValidation'=>true.
This property allows turning on or off  client-side validation for individual input fields.
Defaults to true.</p>


<div class="detailHeader" id="errorOptions-detail">
errorOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$errorOptions</b>;</div>

<p>The options used when rendering the error part. This property will be passed
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

<p>Hint text of this input.</p>


<div class="detailHeader" id="hintOptions-detail">
hintOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$hintOptions</b>;</div>

<p>The options used when rendering hint part.
This property will be passed as $htmlOptions parameter for hint wrapper tag.</p>


<div class="detailHeader" id="inputTypes-detail">
inputTypes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static array <b>$inputTypes</b>;</div>

<p>Input types (alias => TbActiveForm method name).</p>


<div class="detailHeader" id="items-detail">
items<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$items</b>;</div>

<p>The options for this input when it is a list box, drop-down list, check box list, or radio button list.
Please see <?php echo CHtml::link('CHtml::listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?> for details of generating this property value.</p>


<div class="detailHeader" id="label-detail">
label<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$label</b>;</div>

<p>Label for this input.</p>


<div class="detailHeader" id="labelOptions-detail">
labelOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$labelOptions</b>;</div>

<p>The options used when rendering label part. This property will be passed to the <?php echo CHtml::link('CActiveForm::labelEx', array('/site/doc', 'view' => 'CActiveForm', '#' => 'labelEx')); ?>
or <?php echo CHtml::link('CHtml::label', array('/site/doc', 'view' => 'CHtml', '#' => 'label')); ?> if $label is defined, method call as its $htmlOptions parameter.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::labelEx', array('/site/doc', 'view' => 'CActiveForm', '#' => 'labelEx')); ?></li>
	<li><?php echo CHtml::link('CHtml::label', array('/site/doc', 'view' => 'CHtml', '#' => 'label')); ?></li>
</ul>
</div>

<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$name</b>;</div>

<p>Name of this input.</p>


<div class="detailHeader" id="prepend-detail">
prepend<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$prepend</b>;</div>

<p>Text/html prepended to input field.</p>


<div class="detailHeader" id="prependOptions-detail">
prependOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$prependOptions</b>;</div>

<p>The options used when rendering prepend part.
This property will be passed as $htmlOptions parameter for prepend wrapper tag.</p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$type</b>;</div>

<p>The type of this input. This can be a widget class name, a path alias of a widget class name,
or an input type alias (text, hidden, password, textarea, file, etc.).
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
protected bool <b>evaluateVisible</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">Whether this element is visible.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormInputElement.php#L210">booster/widgets/TbFormInputElement.php#L210</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">evaluateVisible</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">isAttributeSafe</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Evaluates the visibility of this element. This method will check if the attribute associated with this
input is safe for the current model scenario.</p>


<div class="detailHeader" id="generateRowOptions-detail">
generateRowOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>generateRowOptions</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">The row options.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormInputElement.php#L153">booster/widgets/TbFormInputElement.php#L153</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">generateRowOptions</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fields&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'errorOptions'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'hint'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'hintOptions'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'prependOptions'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'append'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'appendOptions'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'enableAjaxValidation'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'enableClientValidation'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$fields&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #0000BB">$prop</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates row options array from this class properties.</p>


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
  <td class="paramDescCol">The rendered element.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormInputElement.php#L172">booster/widgets/TbFormInputElement.php#L172</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateRowOptions</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$inputTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$method&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$inputTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$method</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'listBoxRow'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'dropDownListRow'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'checkBoxListRow'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'radioButtonListRow'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">items</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">customFieldRow</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'widget'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rowOptions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Render this element.</p>


