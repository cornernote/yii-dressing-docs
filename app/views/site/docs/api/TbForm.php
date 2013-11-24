<?php
$this->pageTitle = $this->pageHeading = 'TbForm';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbForm';
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
  <td>class TbForm &raquo;
<?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?> &raquo;
<?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>ArrayAccess</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbForm.php">booster/widgets/TbForm.php</a></td>
</tr>
</table>

<div id="classDescription">
TbForm is adaptation of CFrom class for fast form building with bootstrap.
Its public interface does not differs from original CFrom class.
Please refer to CFrom for further information.</div>
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
  <td><?php echo CHtml::link('action', array('/site/doc', 'view' => 'CForm', '#' => 'action-detail')); ?></td>
  <td>mixed</td>
  <td>the form action URL (see <?php echo CHtml::link('CHtml::normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr id="activeForm">
  <td><?php echo CHtml::link('activeForm', array('/site/doc', 'view' => 'TbForm', '#' => 'activeForm-detail')); ?></td>
  <td>array</td>
  <td>The configuration used to create the active form widget.</td>
  <td>TbForm</td>
</tr>
<tr class="inherited" id="activeFormWidget">
  <td><?php echo CHtml::link('activeFormWidget', array('/site/doc', 'view' => 'CForm', '#' => 'activeFormWidget-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
  <td>the active form widget associated with this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CForm', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>HTML attribute values for the form tag.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr id="buttonElementClass">
  <td><?php echo CHtml::link('buttonElementClass', array('/site/doc', 'view' => 'TbForm', '#' => 'buttonElementClass-detail')); ?></td>
  <td>string</td>
  <td>The name of the class for representing a form button element. Defaults to 'TbFormButtonElement'.</td>
  <td>TbForm</td>
</tr>
<tr class="inherited" id="buttons">
  <td><?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons-detail')); ?></td>
  <td><?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?></td>
  <td>Returns the button elements of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="description">
  <td><?php echo CHtml::link('description', array('/site/doc', 'view' => 'CForm', '#' => 'description-detail')); ?></td>
  <td>string</td>
  <td>the description of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="elements">
  <td><?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements-detail')); ?></td>
  <td><?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?></td>
  <td>Returns the input elements of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr id="inputElementClass">
  <td><?php echo CHtml::link('inputElementClass', array('/site/doc', 'view' => 'TbForm', '#' => 'inputElementClass-detail')); ?></td>
  <td>string</td>
  <td>The name of the class for representing a form input element. Defaults to 'TbFormInputElement'.</td>
  <td>TbForm</td>
</tr>
<tr class="inherited" id="method">
  <td><?php echo CHtml::link('method', array('/site/doc', 'view' => 'CForm', '#' => 'method-detail')); ?></td>
  <td>string</td>
  <td>the submission method of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'CForm', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td>Returns the model that this form is associated with.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="models">
  <td><?php echo CHtml::link('models', array('/site/doc', 'view' => 'CForm', '#' => 'models-detail')); ?></td>
  <td>array</td>
  <td>Returns all models that are associated with this form or its sub-forms.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CForm', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>the owner of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="parent">
  <td><?php echo CHtml::link('parent', array('/site/doc', 'view' => 'CFormElement', '#' => 'parent-detail')); ?></td>
  <td>mixed</td>
  <td>the direct parent of this element.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="root">
  <td><?php echo CHtml::link('root', array('/site/doc', 'view' => 'CForm', '#' => 'root-detail')); ?></td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
  <td>the top-level form object</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="showErrorSummary">
  <td><?php echo CHtml::link('showErrorSummary', array('/site/doc', 'view' => 'CForm', '#' => 'showErrorSummary-detail')); ?></td>
  <td>boolean</td>
  <td>whether to show error summary.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="showErrors">
  <td><?php echo CHtml::link('showErrors', array('/site/doc', 'view' => 'CForm', '#' => 'showErrors-detail')); ?></td>
  <td>boolean|null</td>
  <td>whether error elements of the form attributes should be rendered.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="title">
  <td><?php echo CHtml::link('title', array('/site/doc', 'view' => 'CForm', '#' => 'title-detail')); ?></td>
  <td>string</td>
  <td>the title for this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="visible">
  <td><?php echo CHtml::link('visible', array('/site/doc', 'view' => 'CFormElement', '#' => 'visible-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr class="inherited" id="uniqueId">
  <td><?php echo CHtml::link('uniqueId', array('/site/doc', 'view' => 'CForm', '#' => 'uniqueId-detail')); ?></td>
  <td>string</td>
  <td>Returns a unique ID that identifies this form in the current page.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CForm', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
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
<tr class="inherited" id="addedElement">
  <td><?php echo CHtml::link('addedElement()', array('/site/doc', 'view' => 'CForm', '#' => 'addedElement-detail')); ?></td>
  <td>This method is called after an element is added to the element collection.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
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
<tr class="inherited" id="clicked">
  <td><?php echo CHtml::link('clicked()', array('/site/doc', 'view' => 'CForm', '#' => 'clicked-detail')); ?></td>
  <td>Returns a value indicating whether the specified button is clicked.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
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
<tr class="inherited" id="getActiveFormWidget">
  <td><?php echo CHtml::link('getActiveFormWidget()', array('/site/doc', 'view' => 'CForm', '#' => 'getActiveFormWidget-detail')); ?></td>
  <td>Returns the active form widget associated with this form.
This method will return the active form widget as specified by <?php echo CHtml::link('activeForm', array('/site/doc', 'view' => 'TbForm', '#' => 'activeForm')); ?>.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="getButtons">
  <td><?php echo CHtml::link('getButtons()', array('/site/doc', 'view' => 'CForm', '#' => 'getButtons-detail')); ?></td>
  <td>Returns the button elements of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="getElements">
  <td><?php echo CHtml::link('getElements()', array('/site/doc', 'view' => 'CForm', '#' => 'getElements-detail')); ?></td>
  <td>Returns the input elements of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getModel">
  <td><?php echo CHtml::link('getModel()', array('/site/doc', 'view' => 'CForm', '#' => 'getModel-detail')); ?></td>
  <td>Returns the model that this form is associated with.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="getModels">
  <td><?php echo CHtml::link('getModels()', array('/site/doc', 'view' => 'CForm', '#' => 'getModels-detail')); ?></td>
  <td>Returns all models that are associated with this form or its sub-forms.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="getOwner">
  <td><?php echo CHtml::link('getOwner()', array('/site/doc', 'view' => 'CForm', '#' => 'getOwner-detail')); ?></td>
  <td>Returns the owner of this form. This refers to either a controller or a widget
by which the form is created and rendered.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="getParent">
  <td><?php echo CHtml::link('getParent()', array('/site/doc', 'view' => 'CFormElement', '#' => 'getParent-detail')); ?></td>
  <td>Returns the direct parent of this element. This could be either a <?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?> object or a <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> object
(a controller or a widget).</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="getRoot">
  <td><?php echo CHtml::link('getRoot()', array('/site/doc', 'view' => 'CForm', '#' => 'getRoot-detail')); ?></td>
  <td>Returns the top-level form object</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
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
<tr class="inherited" id="loadData">
  <td><?php echo CHtml::link('loadData()', array('/site/doc', 'view' => 'CForm', '#' => 'loadData-detail')); ?></td>
  <td>Loads the submitted data into the associated model(s) to the form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CForm', '#' => 'offsetExists-detail')); ?></td>
  <td>Returns whether there is an element at the specified offset.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CForm', '#' => 'offsetGet-detail')); ?></td>
  <td>Returns the element at the specified offset.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CForm', '#' => 'offsetSet-detail')); ?></td>
  <td>Sets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CForm', '#' => 'offsetUnset-detail')); ?></td>
  <td>Unsets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="removedElement">
  <td><?php echo CHtml::link('removedElement()', array('/site/doc', 'view' => 'CForm', '#' => 'removedElement-detail')); ?></td>
  <td>This method is called after an element is removed from the element collection.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CForm', '#' => 'render-detail')); ?></td>
  <td>Renders the form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr id="renderBegin">
  <td><?php echo CHtml::link('renderBegin()', array('/site/doc', 'view' => 'TbForm', '#' => 'renderBegin-detail')); ?></td>
  <td>Renders the open tag of the form. The default implementation will render the open form tag.</td>
  <td>TbForm</td>
</tr>
<tr class="inherited" id="renderBody">
  <td><?php echo CHtml::link('renderBody()', array('/site/doc', 'view' => 'CForm', '#' => 'renderBody-detail')); ?></td>
  <td>Renders the body content of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr id="renderButtons">
  <td><?php echo CHtml::link('renderButtons()', array('/site/doc', 'view' => 'TbForm', '#' => 'renderButtons-detail')); ?></td>
  <td>Renders the <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'TbForm', '#' => 'buttons')); ?> in this form.</td>
  <td>TbForm</td>
</tr>
<tr id="renderElement">
  <td><?php echo CHtml::link('renderElement()', array('/site/doc', 'view' => 'TbForm', '#' => 'renderElement-detail')); ?></td>
  <td>Renders a single element which could be an input element, a sub-form, a string, or a button.</td>
  <td>TbForm</td>
</tr>
<tr class="inherited" id="renderElements">
  <td><?php echo CHtml::link('renderElements()', array('/site/doc', 'view' => 'CForm', '#' => 'renderElements-detail')); ?></td>
  <td>Renders the <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'TbForm', '#' => 'elements')); ?> in this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="renderEnd">
  <td><?php echo CHtml::link('renderEnd()', array('/site/doc', 'view' => 'CForm', '#' => 'renderEnd-detail')); ?></td>
  <td>Renders the close tag of the form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="setButtons">
  <td><?php echo CHtml::link('setButtons()', array('/site/doc', 'view' => 'CForm', '#' => 'setButtons-detail')); ?></td>
  <td>Configures the buttons of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="setElements">
  <td><?php echo CHtml::link('setElements()', array('/site/doc', 'view' => 'CForm', '#' => 'setElements-detail')); ?></td>
  <td>Configures the input elements of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="setModel">
  <td><?php echo CHtml::link('setModel()', array('/site/doc', 'view' => 'CForm', '#' => 'setModel-detail')); ?></td>
  <td>Sets the model to be associated with this form</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="setVisible">
  <td><?php echo CHtml::link('setVisible()', array('/site/doc', 'view' => 'CFormElement', '#' => 'setVisible-detail')); ?></td>
  <td>Sets whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="submitted">
  <td><?php echo CHtml::link('submitted()', array('/site/doc', 'view' => 'CForm', '#' => 'submitted-detail')); ?></td>
  <td>Returns a value indicating whether this form is submitted.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CForm', '#' => 'validate-detail')); ?></td>
  <td>Validates the models associated with this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
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
  <td><?php echo CHtml::link('evaluateVisible()', array('/site/doc', 'view' => 'CForm', '#' => 'evaluateVisible-detail')); ?></td>
  <td>Evaluates the visibility of this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="getUniqueId">
  <td><?php echo CHtml::link('getUniqueId()', array('/site/doc', 'view' => 'CForm', '#' => 'getUniqueId-detail')); ?></td>
  <td>Returns a unique ID that identifies this form in the current page.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CForm', '#' => 'init-detail')); ?></td>
  <td>Initializes this form.</td>
  <td><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="activeForm-detail">
activeForm<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$activeForm</b>;</div>

<p>The configuration used to create the active form widget.
The widget will be used to render the form tag and the error messages.
The 'class' option is required, which specifies the class of the widget.
The rest of the options will be passed to <?php echo CHtml::link('CBaseController::beginWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginWidget')); ?> call.
Defaults to array('class'=>'TbActiveForm').</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></li>
</ul>
</div>

<div class="detailHeader" id="buttonElementClass-detail">
buttonElementClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$buttonElementClass</b>;</div>

<p>The name of the class for representing a form button element. Defaults to 'TbFormButtonElement'.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbFormButtonElement', array('/site/doc', 'view' => 'TbFormButtonElement')); ?></li>
</ul>
</div>

<div class="detailHeader" id="inputElementClass-detail">
inputElementClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$inputElementClass</b>;</div>

<p>The name of the class for representing a form input element. Defaults to 'TbFormInputElement'.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbFormInputElement', array('/site/doc', 'view' => 'TbFormInputElement')); ?></li>
</ul>
</div>

<h2>Method Details</h2>

<div class="detailHeader" id="renderBegin-detail">
renderBegin()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderBegin</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The rendering result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbForm.php#L63">booster/widgets/TbForm.php#L63</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderBegin</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">)&nbsp;and&nbsp;!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activeForm</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activeForm</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'TbActiveForm'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">renderBegin</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders the open tag of the form. The default implementation will render the open form tag.</p>


<div class="detailHeader" id="renderButtons-detail">
renderButtons()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderButtons</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The rendering result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbForm.php#L45">booster/widgets/TbForm.php#L45</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderButtons</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getButtons</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activeFormWidget</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">TbActiveForm</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_INLINE</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;class=\"form-actions\"&gt;\n"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"&lt;/div&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'TbForm', '#' => 'buttons')); ?> in this form.</p>


<div class="detailHeader" id="renderElement-detail">
renderElement()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderElement</b>(mixed $element)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$element</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">The form element to be rendered. This can be either a <?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> instance
or a string representing the name of the form element.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The rendering result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbForm.php#L78">booster/widgets/TbForm.php#L78</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$e&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">[</span><span style="color: #0000BB">$element</span><span style="color: #007700">])&nbsp;===&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$e&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getButtons</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">))&nbsp;===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getVisible</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$element&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">TbFormInputElement</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #DD0000">'hidden'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;style=\"visibility:hidden\"&gt;\n"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;/div&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$element&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">TbFormButtonElement</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders a single element which could be an input element, a sub-form, a string, or a button.</p>


