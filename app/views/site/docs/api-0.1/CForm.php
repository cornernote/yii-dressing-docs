<?php
$this->pageTitle = $this->pageHeading = 'CForm';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CForm';
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
  <td>class CForm &raquo;
<?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>ArrayAccess</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbForm', array('/site/doc', 'view' => 'TbForm')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php">yii/web/form/CForm.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CForm represents a form object that contains form input specifications.
<br/><br/>
The main purpose of introducing the abstraction of form objects is to enhance the
reusability of forms. In particular, we can divide a form in two parts: those
that specify each individual form inputs, and those that decorate the form inputs.
A CForm object represents the former part. It relies on the rendering process to
accomplish form input decoration. Reusability is mainly achieved in the rendering process.
That is, a rendering process can be reused to render different CForm objects.
<br/><br/>
A form can be rendered in different ways. One can call the <?php echo CHtml::link('render', array('/site/doc', 'view' => 'CForm', '#' => 'render')); ?> method
to get a quick form rendering without writing any HTML code; one can also override
<?php echo CHtml::link('render', array('/site/doc', 'view' => 'CForm', '#' => 'render')); ?> to render the form in a different layout; and one can use an external
view template to render each form element explicitly. In these ways, the <?php echo CHtml::link('render', array('/site/doc', 'view' => 'CForm', '#' => 'render')); ?>
method can be applied to all kinds of forms and thus achieves maximum reusability;
while the external view template keeps maximum flexibility in rendering complex forms.
<br/><br/>
Form input specifications are organized in terms of a form element hierarchy.
At the root of the hierarchy, it is the root CForm object. The root form object maintains
its children in two collections: <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?> and <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons')); ?>.
The former contains non-button form elements (<?php echo CHtml::link('CFormStringElement', array('/site/doc', 'view' => 'CFormStringElement')); ?>,
<?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?> and CForm); while the latter mainly contains
button elements (<?php echo CHtml::link('CFormButtonElement', array('/site/doc', 'view' => 'CFormButtonElement')); ?>). When a CForm object is embedded in the
<?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?> collection, it is called a sub-form which can have its own <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?>
and <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons')); ?> collections and thus form the whole form hierarchy.
<br/><br/>
Sub-forms are mainly used to handle multiple models. For example, in a user
registration form, we can have the root form to collect input for the user
table while a sub-form to collect input for the profile table. Sub-form is also
a good way to partition a lengthy form into shorter ones, even though all inputs
may belong to the same model.
<br/><br/>
Form input specifications are given in terms of a configuration array which is
used to initialize the property values of a CForm object. The <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?> and
<?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons')); ?> properties need special attention as they are the main properties
to be configured. To configure <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?>, we should give it an array like
the following:
<pre>
'elements'=&gt;array(
    'username'=&gt;array('type'=&gt;'text', 'maxlength'=&gt;80),
    'password'=&gt;array('type'=&gt;'password', 'maxlength'=&gt;80),
)
</pre>
The above code specifies two input elements: 'username' and 'password'. Note the model
object must have exactly the same attributes 'username' and 'password'. Each element
has a type which specifies what kind of input should be used. The rest of the array elements
(e.g. 'maxlength') in an input specification are rendered as HTML element attributes
when the input field is rendered. The <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons')); ?> property is configured similarly.
<br/><br/>
If you're going to use AJAX and/or client form validation with the enabled error summary
you have to set $showErrors property to true. Please refer to it's documentation
for more details.
<br/><br/>
For more details about configuring form elements, please refer to <?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?>
and <?php echo CHtml::link('CFormButtonElement', array('/site/doc', 'view' => 'CFormButtonElement')); ?>.</div>
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
<tr id="action">
  <td><?php echo CHtml::link('action', array('/site/doc', 'view' => 'CForm', '#' => 'action-detail')); ?></td>
  <td>mixed</td>
  <td>the form action URL (see <?php echo CHtml::link('CHtml::normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter.</td>
  <td>CForm</td>
</tr>
<tr id="activeForm">
  <td><?php echo CHtml::link('activeForm', array('/site/doc', 'view' => 'CForm', '#' => 'activeForm-detail')); ?></td>
  <td>array</td>
  <td>the configuration used to create the active form widget.</td>
  <td>CForm</td>
</tr>
<tr id="activeFormWidget">
  <td><?php echo CHtml::link('activeFormWidget', array('/site/doc', 'view' => 'CForm', '#' => 'activeFormWidget-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
  <td>the active form widget associated with this form.</td>
  <td>CForm</td>
</tr>
<tr id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CForm', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>HTML attribute values for the form tag.</td>
  <td>CForm</td>
</tr>
<tr id="buttonElementClass">
  <td><?php echo CHtml::link('buttonElementClass', array('/site/doc', 'view' => 'CForm', '#' => 'buttonElementClass-detail')); ?></td>
  <td>string</td>
  <td>the name of the class for representing a form button element.</td>
  <td>CForm</td>
</tr>
<tr id="buttons">
  <td><?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons-detail')); ?></td>
  <td><?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?></td>
  <td>Returns the button elements of this form.</td>
  <td>CForm</td>
</tr>
<tr id="description">
  <td><?php echo CHtml::link('description', array('/site/doc', 'view' => 'CForm', '#' => 'description-detail')); ?></td>
  <td>string</td>
  <td>the description of this form.</td>
  <td>CForm</td>
</tr>
<tr id="elements">
  <td><?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements-detail')); ?></td>
  <td><?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?></td>
  <td>Returns the input elements of this form.</td>
  <td>CForm</td>
</tr>
<tr id="inputElementClass">
  <td><?php echo CHtml::link('inputElementClass', array('/site/doc', 'view' => 'CForm', '#' => 'inputElementClass-detail')); ?></td>
  <td>string</td>
  <td>the name of the class for representing a form input element.</td>
  <td>CForm</td>
</tr>
<tr id="method">
  <td><?php echo CHtml::link('method', array('/site/doc', 'view' => 'CForm', '#' => 'method-detail')); ?></td>
  <td>string</td>
  <td>the submission method of this form.</td>
  <td>CForm</td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'CForm', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td>Returns the model that this form is associated with.</td>
  <td>CForm</td>
</tr>
<tr id="models">
  <td><?php echo CHtml::link('models', array('/site/doc', 'view' => 'CForm', '#' => 'models-detail')); ?></td>
  <td>array</td>
  <td>Returns all models that are associated with this form or its sub-forms.</td>
  <td>CForm</td>
</tr>
<tr id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CForm', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>the owner of this form.</td>
  <td>CForm</td>
</tr>
<tr class="inherited" id="parent">
  <td><?php echo CHtml::link('parent', array('/site/doc', 'view' => 'CFormElement', '#' => 'parent-detail')); ?></td>
  <td>mixed</td>
  <td>the direct parent of this element.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="root">
  <td><?php echo CHtml::link('root', array('/site/doc', 'view' => 'CForm', '#' => 'root-detail')); ?></td>
  <td>CForm</td>
  <td>the top-level form object</td>
  <td>CForm</td>
</tr>
<tr id="showErrorSummary">
  <td><?php echo CHtml::link('showErrorSummary', array('/site/doc', 'view' => 'CForm', '#' => 'showErrorSummary-detail')); ?></td>
  <td>boolean</td>
  <td>whether to show error summary.</td>
  <td>CForm</td>
</tr>
<tr id="showErrors">
  <td><?php echo CHtml::link('showErrors', array('/site/doc', 'view' => 'CForm', '#' => 'showErrors-detail')); ?></td>
  <td>boolean|null</td>
  <td>whether error elements of the form attributes should be rendered.</td>
  <td>CForm</td>
</tr>
<tr id="title">
  <td><?php echo CHtml::link('title', array('/site/doc', 'view' => 'CForm', '#' => 'title-detail')); ?></td>
  <td>string</td>
  <td>the title for this form.</td>
  <td>CForm</td>
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
<tr id="uniqueId">
  <td><?php echo CHtml::link('uniqueId', array('/site/doc', 'view' => 'CForm', '#' => 'uniqueId-detail')); ?></td>
  <td>string</td>
  <td>Returns a unique ID that identifies this form in the current page.</td>
  <td>CForm</td>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CForm', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CForm</td>
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
<tr id="addedElement">
  <td><?php echo CHtml::link('addedElement()', array('/site/doc', 'view' => 'CForm', '#' => 'addedElement-detail')); ?></td>
  <td>This method is called after an element is added to the element collection.</td>
  <td>CForm</td>
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
<tr id="clicked">
  <td><?php echo CHtml::link('clicked()', array('/site/doc', 'view' => 'CForm', '#' => 'clicked-detail')); ?></td>
  <td>Returns a value indicating whether the specified button is clicked.</td>
  <td>CForm</td>
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
<tr id="getActiveFormWidget">
  <td><?php echo CHtml::link('getActiveFormWidget()', array('/site/doc', 'view' => 'CForm', '#' => 'getActiveFormWidget-detail')); ?></td>
  <td>Returns the active form widget associated with this form.
This method will return the active form widget as specified by <?php echo CHtml::link('activeForm', array('/site/doc', 'view' => 'CForm', '#' => 'activeForm')); ?>.</td>
  <td>CForm</td>
</tr>
<tr id="getButtons">
  <td><?php echo CHtml::link('getButtons()', array('/site/doc', 'view' => 'CForm', '#' => 'getButtons-detail')); ?></td>
  <td>Returns the button elements of this form.</td>
  <td>CForm</td>
</tr>
<tr id="getElements">
  <td><?php echo CHtml::link('getElements()', array('/site/doc', 'view' => 'CForm', '#' => 'getElements-detail')); ?></td>
  <td>Returns the input elements of this form.</td>
  <td>CForm</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getModel">
  <td><?php echo CHtml::link('getModel()', array('/site/doc', 'view' => 'CForm', '#' => 'getModel-detail')); ?></td>
  <td>Returns the model that this form is associated with.</td>
  <td>CForm</td>
</tr>
<tr id="getModels">
  <td><?php echo CHtml::link('getModels()', array('/site/doc', 'view' => 'CForm', '#' => 'getModels-detail')); ?></td>
  <td>Returns all models that are associated with this form or its sub-forms.</td>
  <td>CForm</td>
</tr>
<tr id="getOwner">
  <td><?php echo CHtml::link('getOwner()', array('/site/doc', 'view' => 'CForm', '#' => 'getOwner-detail')); ?></td>
  <td>Returns the owner of this form. This refers to either a controller or a widget
by which the form is created and rendered.</td>
  <td>CForm</td>
</tr>
<tr class="inherited" id="getParent">
  <td><?php echo CHtml::link('getParent()', array('/site/doc', 'view' => 'CFormElement', '#' => 'getParent-detail')); ?></td>
  <td>Returns the direct parent of this element. This could be either a <?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?> object or a <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> object
(a controller or a widget).</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="getRoot">
  <td><?php echo CHtml::link('getRoot()', array('/site/doc', 'view' => 'CForm', '#' => 'getRoot-detail')); ?></td>
  <td>Returns the top-level form object</td>
  <td>CForm</td>
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
<tr id="loadData">
  <td><?php echo CHtml::link('loadData()', array('/site/doc', 'view' => 'CForm', '#' => 'loadData-detail')); ?></td>
  <td>Loads the submitted data into the associated model(s) to the form.</td>
  <td>CForm</td>
</tr>
<tr id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CForm', '#' => 'offsetExists-detail')); ?></td>
  <td>Returns whether there is an element at the specified offset.</td>
  <td>CForm</td>
</tr>
<tr id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CForm', '#' => 'offsetGet-detail')); ?></td>
  <td>Returns the element at the specified offset.</td>
  <td>CForm</td>
</tr>
<tr id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CForm', '#' => 'offsetSet-detail')); ?></td>
  <td>Sets the element at the specified offset.</td>
  <td>CForm</td>
</tr>
<tr id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CForm', '#' => 'offsetUnset-detail')); ?></td>
  <td>Unsets the element at the specified offset.</td>
  <td>CForm</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="removedElement">
  <td><?php echo CHtml::link('removedElement()', array('/site/doc', 'view' => 'CForm', '#' => 'removedElement-detail')); ?></td>
  <td>This method is called after an element is removed from the element collection.</td>
  <td>CForm</td>
</tr>
<tr id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CForm', '#' => 'render-detail')); ?></td>
  <td>Renders the form.</td>
  <td>CForm</td>
</tr>
<tr id="renderBegin">
  <td><?php echo CHtml::link('renderBegin()', array('/site/doc', 'view' => 'CForm', '#' => 'renderBegin-detail')); ?></td>
  <td>Renders the open tag of the form.</td>
  <td>CForm</td>
</tr>
<tr id="renderBody">
  <td><?php echo CHtml::link('renderBody()', array('/site/doc', 'view' => 'CForm', '#' => 'renderBody-detail')); ?></td>
  <td>Renders the body content of this form.</td>
  <td>CForm</td>
</tr>
<tr id="renderButtons">
  <td><?php echo CHtml::link('renderButtons()', array('/site/doc', 'view' => 'CForm', '#' => 'renderButtons-detail')); ?></td>
  <td>Renders the <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons')); ?> in this form.</td>
  <td>CForm</td>
</tr>
<tr id="renderElement">
  <td><?php echo CHtml::link('renderElement()', array('/site/doc', 'view' => 'CForm', '#' => 'renderElement-detail')); ?></td>
  <td>Renders a single element which could be an input element, a sub-form, a string, or a button.</td>
  <td>CForm</td>
</tr>
<tr id="renderElements">
  <td><?php echo CHtml::link('renderElements()', array('/site/doc', 'view' => 'CForm', '#' => 'renderElements-detail')); ?></td>
  <td>Renders the <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?> in this form.</td>
  <td>CForm</td>
</tr>
<tr id="renderEnd">
  <td><?php echo CHtml::link('renderEnd()', array('/site/doc', 'view' => 'CForm', '#' => 'renderEnd-detail')); ?></td>
  <td>Renders the close tag of the form.</td>
  <td>CForm</td>
</tr>
<tr id="setButtons">
  <td><?php echo CHtml::link('setButtons()', array('/site/doc', 'view' => 'CForm', '#' => 'setButtons-detail')); ?></td>
  <td>Configures the buttons of this form.</td>
  <td>CForm</td>
</tr>
<tr id="setElements">
  <td><?php echo CHtml::link('setElements()', array('/site/doc', 'view' => 'CForm', '#' => 'setElements-detail')); ?></td>
  <td>Configures the input elements of this form.</td>
  <td>CForm</td>
</tr>
<tr id="setModel">
  <td><?php echo CHtml::link('setModel()', array('/site/doc', 'view' => 'CForm', '#' => 'setModel-detail')); ?></td>
  <td>Sets the model to be associated with this form</td>
  <td>CForm</td>
</tr>
<tr class="inherited" id="setVisible">
  <td><?php echo CHtml::link('setVisible()', array('/site/doc', 'view' => 'CFormElement', '#' => 'setVisible-detail')); ?></td>
  <td>Sets whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="submitted">
  <td><?php echo CHtml::link('submitted()', array('/site/doc', 'view' => 'CForm', '#' => 'submitted-detail')); ?></td>
  <td>Returns a value indicating whether this form is submitted.</td>
  <td>CForm</td>
</tr>
<tr id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CForm', '#' => 'validate-detail')); ?></td>
  <td>Validates the models associated with this form.</td>
  <td>CForm</td>
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
  <td><?php echo CHtml::link('evaluateVisible()', array('/site/doc', 'view' => 'CForm', '#' => 'evaluateVisible-detail')); ?></td>
  <td>Evaluates the visibility of this form.</td>
  <td>CForm</td>
</tr>
<tr id="getUniqueId">
  <td><?php echo CHtml::link('getUniqueId()', array('/site/doc', 'view' => 'CForm', '#' => 'getUniqueId-detail')); ?></td>
  <td>Returns a unique ID that identifies this form in the current page.</td>
  <td>CForm</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CForm', '#' => 'init-detail')); ?></td>
  <td>Initializes this form.</td>
  <td>CForm</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="action-detail">
action<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$action</b>;</div>

<p>the form action URL (see <?php echo CHtml::link('CHtml::normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter.)
Defaults to an empty string, meaning the current request URL.
This property is ignored when this form is a sub-form.</p>


<div class="detailHeader" id="activeForm-detail">
activeForm<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public array <b>$activeForm</b>;</div>

<p>the configuration used to create the active form widget.
The widget will be used to render the form tag and the error messages.
The 'class' option is required, which specifies the class of the widget.
The rest of the options will be passed to <?php echo CHtml::link('CBaseController::beginWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginWidget')); ?> call.
Defaults to array('class'=>'CActiveForm').</p>


<div class="detailHeader" id="activeFormWidget-detail">
activeFormWidget<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.1)
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?> <?php echo CHtml::link('<b>getActiveFormWidget</b>', array('/site/doc', 'view' => 'CForm', '#' => 'getActiveFormWidget')); ?>()</div>

<p>the active form widget associated with this form.
This method will return the active form widget as specified by <?php echo CHtml::link('activeForm', array('/site/doc', 'view' => 'CForm', '#' => 'activeForm')); ?>.</p>


<div class="detailHeader" id="attributes-detail">
attributes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$attributes</b>;</div>

<p>HTML attribute values for the form tag. When the form is embedded within another form,
this property will be used to render the HTML attribute values for the fieldset enclosing the child form.</p>


<div class="detailHeader" id="buttonElementClass-detail">
buttonElementClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$buttonElementClass</b>;</div>

<p>the name of the class for representing a form button element. Defaults to 'CFormButtonElement'.</p>


<div class="detailHeader" id="buttons-detail">
buttons<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?> <?php echo CHtml::link('<b>getButtons</b>', array('/site/doc', 'view' => 'CForm', '#' => 'getButtons')); ?>()<br/>public void <?php echo CHtml::link('<b>setButtons</b>', array('/site/doc', 'view' => 'CForm', '#' => 'setButtons')); ?>(array $buttons)</div>

<p>Returns the button elements of this form.
Note that the returned result is a <?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?> object, which
means you can use it like an array. For more details, see <?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?>.</p>


<div class="detailHeader" id="description-detail">
description<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$description</b>;</div>

<p>the description of this form.</p>


<div class="detailHeader" id="elements-detail">
elements<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?> <?php echo CHtml::link('<b>getElements</b>', array('/site/doc', 'view' => 'CForm', '#' => 'getElements')); ?>()<br/>public void <?php echo CHtml::link('<b>setElements</b>', array('/site/doc', 'view' => 'CForm', '#' => 'setElements')); ?>(array $elements)</div>

<p>Returns the input elements of this form.
This includes text strings, input elements and sub-forms.
Note that the returned result is a <?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?> object, which
means you can use it like an array. For more details, see <?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?>.</p>


<div class="detailHeader" id="inputElementClass-detail">
inputElementClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$inputElementClass</b>;</div>

<p>the name of the class for representing a form input element. Defaults to 'CFormInputElement'.</p>


<div class="detailHeader" id="method-detail">
method<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$method</b>;</div>

<p>the submission method of this form. Defaults to 'post'.
This property is ignored when this form is a sub-form.</p>


<div class="detailHeader" id="model-detail">
model<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> <?php echo CHtml::link('<b>getModel</b>', array('/site/doc', 'view' => 'CForm', '#' => 'getModel')); ?>(boolean $checkParent=true)<br/>public void <?php echo CHtml::link('<b>setModel</b>', array('/site/doc', 'view' => 'CForm', '#' => 'setModel')); ?>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model)</div>

<p>Returns the model that this form is associated with.</p>


<div class="detailHeader" id="models-detail">
models<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getModels</b>', array('/site/doc', 'view' => 'CForm', '#' => 'getModels')); ?>()</div>

<p>Returns all models that are associated with this form or its sub-forms.</p>


<div class="detailHeader" id="owner-detail">
owner<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> <?php echo CHtml::link('<b>getOwner</b>', array('/site/doc', 'view' => 'CForm', '#' => 'getOwner')); ?>()</div>

<p>the owner of this form. This refers to either a controller or a widget
by which the form is created and rendered.</p>


<div class="detailHeader" id="root-detail">
root<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public CForm <?php echo CHtml::link('<b>getRoot</b>', array('/site/doc', 'view' => 'CForm', '#' => 'getRoot')); ?>()</div>

<p>the top-level form object</p>


<div class="detailHeader" id="showErrorSummary-detail">
showErrorSummary<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$showErrorSummary</b>;</div>

<p>whether to show error summary. Defaults to false.</p>


<div class="detailHeader" id="showErrors-detail">
showErrors<span class="detailHeaderTag">
property
 (available since v1.1.14)
</span>
</div>

<div class="signature">
public boolean|null <b>$showErrors</b>;</div>

<p>whether error elements of the form attributes should be rendered. There are three possible
valid values: null, true and false.
<br/><br/>
Defaults to null meaning that $showErrorSummary will be used as value. This is done mainly to keep
backward compatibility with existing applications. If you want to use error summary with AJAX and/or client
validation you have to set this property to true (recall that <?php echo CHtml::link('CActiveForm::error()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?> should be called
for each attribute that is going to be AJAX and/or client validated).
<br/><br/>
False value means that the error elements of the form attributes shall not be displayed. True value means that
the error elements of the form attributes will be rendered.</p>


<div class="detailHeader" id="title-detail">
title<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$title</b>;</div>

<p>the title for this form. By default, if this is set, a fieldset may be rendered
around the form body using the title as its legend. Defaults to null.</p>


<div class="detailHeader" id="uniqueId-detail">
uniqueId<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected string <?php echo CHtml::link('<b>getUniqueId</b>', array('/site/doc', 'view' => 'CForm', '#' => 'getUniqueId')); ?>()</div>

<p>Returns a unique ID that identifies this form in the current page.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>(mixed $config, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model=NULL, mixed $parent=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the configuration for this form. It can be a configuration array
or the path alias of a PHP script file that returns a configuration array.
The configuration array consists of name-value pairs that are used to initialize
the properties of this form.</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the model object associated with this form. If it is null,
the parent's model will be used instead.</td>
</tr>
<tr>
  <td class="paramNameCol">$parent</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the direct parent of this form. This could be either a <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?>
object (a controller or a widget), or a <?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?> object.
If the former, it means the form is a top-level form; if the latter, it means this form is a sub-form.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L165">yii/web/form/CForm.php#L165</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$parent</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$parent</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parent</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">,</span><span style="color: #0000BB">$parent</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showErrors</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showErrors</span><span style="color: #007700">=!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showErrorSummary</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.
If you override this method, make sure you do not modify the method
signature, and also make sure you call the parent implementation.</p>


<div class="detailHeader" id="addedElement-detail">
addedElement()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addedElement</b>(string $name, <?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> $element, boolean $forButtons)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the element</td>
</tr>
<tr>
  <td class="paramNameCol">$element</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
  <td class="paramDescCol">the element that is added</td>
</tr>
<tr>
  <td class="paramNameCol">$forButtons</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the element is added to the <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons')); ?> collection.
If false, it means the element is added to the <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?> collection.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L552">yii/web/form/CForm.php#L552</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addedElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$element</span><span style="color: #007700">,</span><span style="color: #0000BB">$forButtons</span><span style="color: #007700">)<br />{<br />}</span>
</span>
</code></div>
</div>
<p>This method is called after an element is added to the element collection.</p>


<div class="detailHeader" id="clicked-detail">
clicked()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>clicked</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the button name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the button is clicked.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L207">yii/web/form/CForm.php#L207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clicked</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRoot</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">method</span><span style="color: #007700">,</span><span style="color: #DD0000">'get'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the specified button is clicked.</p>


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
  <td class="paramDescCol">whether this form is visible.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L573">yii/web/form/CForm.php#L573</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">evaluateVisible</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getVisible</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Evaluates the visibility of this form.
This method will check the visibility of the <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?>.
If any one of them is visible, the form is considered as visible. Otherwise, it is invisible.</p>


<div class="detailHeader" id="getActiveFormWidget-detail">
getActiveFormWidget()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?> <b>getActiveFormWidget</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
  <td class="paramDescCol">the active form widget associated with this form.
This method will return the active form widget as specified by <?php echo CHtml::link('activeForm', array('/site/doc', 'view' => 'CForm', '#' => 'activeForm')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L272">yii/web/form/CForm.php#L272</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_activeForm</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_activeForm</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRoot</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">_activeForm</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getButtons-detail">
getButtons()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?> <b>getButtons</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?></td>
  <td class="paramDescCol">the form elements.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L369">yii/web/form/CForm.php#L369</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getButtons</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_buttons</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_buttons</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CFormElementCollection</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_buttons</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the button elements of this form.
Note that the returned result is a <?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?> object, which
means you can use it like an array. For more details, see <?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?>.</p>


<div class="detailHeader" id="getElements-detail">
getElements()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?> <b>getElements</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?></td>
  <td class="paramDescCol">the form elements.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L340">yii/web/form/CForm.php#L340</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_elements</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_elements</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CFormElementCollection</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_elements</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the input elements of this form.
This includes text strings, input elements and sub-forms.
Note that the returned result is a <?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?> object, which
means you can use it like an array. For more details, see <?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?>.</p>


<div class="detailHeader" id="getModel-detail">
getModel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> <b>getModel</b>(boolean $checkParent=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$checkParent</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to return parent's model if this form doesn't have model by itself.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the model associated with this form. If this form does not have a model,
it will look for a model in its ancestors.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L298">yii/web/form/CForm.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$checkParent</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$checkParent</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$form</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;while(</span><span style="color: #0000BB">$form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$form</span><span style="color: #007700">=</span><span style="color: #0000BB">$form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the model that this form is associated with.</p>


<div class="detailHeader" id="getModels-detail">
getModels()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getModels</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the models that are associated with this form or its sub-forms.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L320">yii/web/form/CForm.php#L320</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getModels</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$models</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$models</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$element&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$models</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModels</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$models</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns all models that are associated with this form or its sub-forms.</p>


<div class="detailHeader" id="getOwner-detail">
getOwner()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> <b>getOwner</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td class="paramDescCol">the owner of this form. This refers to either a controller or a widget
by which the form is created and rendered.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L284">yii/web/form/CForm.php#L284</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$owner</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;while(</span><span style="color: #0000BB">$owner&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$owner</span><span style="color: #007700">=</span><span style="color: #0000BB">$owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$owner</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getRoot-detail">
getRoot()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CForm <b>getRoot</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CForm</td>
  <td class="paramDescCol">the top-level form object</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L259">yii/web/form/CForm.php#L259</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRoot</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$root</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;while(</span><span style="color: #0000BB">$root</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$root</span><span style="color: #007700">=</span><span style="color: #0000BB">$root</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$root</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getUniqueId-detail">
getUniqueId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getUniqueId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the unique ID identifying this form</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L585">yii/web/form/CForm.php#L585</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getUniqueId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'yform_'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'yform_'</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%x'</span><span style="color: #007700">,</span><span style="color: #0000BB">crc32</span><span style="color: #007700">(</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">()))));<br />}</span>
</span>
</code></div>
</div>
<p>Returns a unique ID that identifies this form in the current page.</p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L182">yii/web/form/CForm.php#L182</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />}</span>
</span>
</code></div>
</div>
<p>Initializes this form.
This method is invoked at the end of the constructor.
You may override this method to provide customized initialization (such as
configuring the form object).</p>


<div class="detailHeader" id="loadData-detail">
loadData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>loadData</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L236">yii/web/form/CForm.php#L236</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">loadData</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">modelName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRoot</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">method</span><span style="color: #007700">,</span><span style="color: #DD0000">'get'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$class</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$class</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$class</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$class</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$element&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Loads the submitted data into the associated model(s) to the form.
This method will go through all models associated with this form and its sub-forms
and massively assign the submitted data to the models.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('submitted', array('/site/doc', 'view' => 'CForm', '#' => 'submitted')); ?></li>
</ul>
</div>

<div class="detailHeader" id="offsetExists-detail">
offsetExists()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>offsetExists</b>(mixed $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the offset to check on</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L599">yii/web/form/CForm.php#L599</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">contains</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether there is an element at the specified offset.
This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="offsetGet-detail">
offsetGet()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>offsetGet</b>(integer $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the offset to retrieve element.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the element at the offset, null if no element is found at the offset</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L610">yii/web/form/CForm.php#L610</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetGet</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the element at the specified offset.
This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="offsetSet-detail">
offsetSet()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>offsetSet</b>(integer $offset, mixed $item)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the offset to set element</td>
</tr>
<tr>
  <td class="paramNameCol">$item</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the element value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L621">yii/web/form/CForm.php#L621</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetSet</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the element at the specified offset.
This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="offsetUnset-detail">
offsetUnset()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>offsetUnset</b>(mixed $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the offset to unset element</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L631">yii/web/form/CForm.php#L631</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetUnset</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Unsets the element at the specified offset.
This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="removedElement-detail">
removedElement()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>removedElement</b>(string $name, <?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> $element, boolean $forButtons)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the element</td>
</tr>
<tr>
  <td class="paramNameCol">$element</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
  <td class="paramDescCol">the element that is removed</td>
</tr>
<tr>
  <td class="paramNameCol">$forButtons</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the element is removed from the <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons')); ?> collection
If false, it means the element is removed from the <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?> collection.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L563">yii/web/form/CForm.php#L563</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removedElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$element</span><span style="color: #007700">,</span><span style="color: #0000BB">$forButtons</span><span style="color: #007700">)<br />{<br />}</span>
</span>
</code></div>
</div>
<p>This method is called after an element is removed from the element collection.</p>


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
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L395">yii/web/form/CForm.php#L395</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderBegin</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderBody</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderEnd</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders the form.
The default implementation simply calls <?php echo CHtml::link('renderBegin', array('/site/doc', 'view' => 'CForm', '#' => 'renderBegin')); ?>, <?php echo CHtml::link('renderBody', array('/site/doc', 'view' => 'CForm', '#' => 'renderBody')); ?> and <?php echo CHtml::link('renderEnd', array('/site/doc', 'view' => 'CForm', '#' => 'renderEnd')); ?>.</p>


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
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L405">yii/web/form/CForm.php#L405</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderBegin</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activeForm</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #DD0000">'CActiveForm'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">action</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'method'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">method</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_activeForm</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">beginWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;style=\"visibility:hidden\"&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUniqueID</span><span style="color: #007700">(),</span><span style="color: #0000BB">1</span><span style="color: #007700">).</span><span style="color: #DD0000">"&lt;/div&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the open tag of the form.
The default implementation will render the open form tag.</p>


<div class="detailHeader" id="renderBody-detail">
renderBody()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderBody</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L460">yii/web/form/CForm.php#L460</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderBody</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">title</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">],</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'fieldset'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">).</span><span style="color: #DD0000">"&lt;legend&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">title</span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;/legend&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #DD0000">"&lt;fieldset&gt;\n&lt;legend&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">title</span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;/legend&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">description</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">.=</span><span style="color: #DD0000">"&lt;div&nbsp;class=\"description\"&gt;\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">description</span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;/div&gt;\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showErrorSummary&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$model</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFormWidget</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">errorSummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderElements</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderButtons</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">title</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">.=</span><span style="color: #DD0000">"&lt;/fieldset&gt;\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the body content of this form.
This method mainly renders <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?> and <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons')); ?>.
If <?php echo CHtml::link('title', array('/site/doc', 'view' => 'CForm', '#' => 'title')); ?> or <?php echo CHtml::link('description', array('/site/doc', 'view' => 'CForm', '#' => 'description')); ?> is specified, they will be rendered as well.
And if the associated model contains error, the error summary may also be displayed.
The form tag will not be rendered. Please call <?php echo CHtml::link('renderBegin', array('/site/doc', 'view' => 'CForm', '#' => 'renderBegin')); ?> and <?php echo CHtml::link('renderEnd', array('/site/doc', 'view' => 'CForm', '#' => 'renderEnd')); ?>
to render the open and close tags of the form.
You may override this method to customize the rendering of the form.</p>


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
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L505">yii/web/form/CForm.php#L505</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderButtons</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getButtons</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">!==</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;class=\"row&nbsp;buttons\"&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$output</span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;/div&gt;\n"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CForm', '#' => 'buttons')); ?> in this form.</p>


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
  <td class="paramDescCol">the form element to be rendered. This can be either a <?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> instance
or a string representing the name of the form element.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L519">yii/web/form/CForm.php#L519</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$e</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">[</span><span style="color: #0000BB">$element</span><span style="color: #007700">])===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$e</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getButtons</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">))===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">=</span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getVisible</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$element&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CFormInputElement</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">===</span><span style="color: #DD0000">'hidden'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;style=\"visibility:hidden\"&gt;\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">().</span><span style="color: #DD0000">"&lt;/div&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;class=\"row&nbsp;field_</span><span style="color: #007700">{</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">}</span><span style="color: #DD0000">\"&gt;\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">().</span><span style="color: #DD0000">"&lt;/div&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$element&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CFormButtonElement</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders a single element which could be an input element, a sub-form, a string, or a button.</p>


<div class="detailHeader" id="renderElements-detail">
renderElements()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderElements</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L493">yii/web/form/CForm.php#L493</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderElements</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the <?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CForm', '#' => 'elements')); ?> in this form.</p>


<div class="detailHeader" id="renderEnd-detail">
renderEnd()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderEnd</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L438">yii/web/form/CForm.php#L438</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderEnd</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">endWidget</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the close tag of the form.</p>


<div class="detailHeader" id="setButtons-detail">
setButtons()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setButtons</b>(array $buttons)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$buttons</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the button configurations</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L383">yii/web/form/CForm.php#L383</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setButtons</span><span style="color: #007700">(</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$collection</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getButtons</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$buttons&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$config</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$collection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Configures the buttons of this form.
The configuration must be an array of button configuration array indexed by button name.
Each button configuration array consists of name-value pairs that are used to initialize
a <?php echo CHtml::link('CFormButtonElement', array('/site/doc', 'view' => 'CFormButtonElement')); ?> object.</p>


<div class="detailHeader" id="setElements-detail">
setElements()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setElements</b>(array $elements)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$elements</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the elements configurations</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L356">yii/web/form/CForm.php#L356</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setElements</span><span style="color: #007700">(</span><span style="color: #0000BB">$elements</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$collection</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getElements</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$elements&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$config</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$collection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Configures the input elements of this form.
The configuration must be an array of input configuration array indexed by input name.
Each input configuration array consists of name-value pairs that are used to initialize
a <?php echo CHtml::link('CFormStringElement', array('/site/doc', 'view' => 'CFormStringElement')); ?> object (when 'type' is 'string'), a <?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> object
(when 'type' is a string ending with 'Form'), or a <?php echo CHtml::link('CFormInputElement', array('/site/doc', 'view' => 'CFormInputElement')); ?> object in
all other cases.</p>


<div class="detailHeader" id="setModel-detail">
setModel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setModel</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the model to be associated with this form</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L311">yii/web/form/CForm.php#L311</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_model</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="submitted-detail">
submitted()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>submitted</b>(string $buttonName='submit', boolean $loadData=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$buttonName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the submit button</td>
</tr>
<tr>
  <td class="paramNameCol">$loadData</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to call <?php echo CHtml::link('loadData', array('/site/doc', 'view' => 'CForm', '#' => 'loadData')); ?> if the form is submitted so that
the submitted data can be populated to the associated models.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this form is submitted.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L194">yii/web/form/CForm.php#L194</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">submitted</span><span style="color: #007700">(</span><span style="color: #0000BB">$buttonName</span><span style="color: #007700">=</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,</span><span style="color: #0000BB">$loadData</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clicked</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUniqueId</span><span style="color: #007700">())&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clicked</span><span style="color: #007700">(</span><span style="color: #0000BB">$buttonName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$loadData</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether this form is submitted.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('loadData', array('/site/doc', 'view' => 'CForm', '#' => 'loadData')); ?></li>
</ul>
</div>

<div class="detailHeader" id="validate-detail">
validate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>validate</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether all models are valid</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CForm.php#L222">yii/web/form/CForm.php#L222</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">validate</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModels</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validate</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Validates the models associated with this form.
All models, including those associated with sub-forms, will perform
the validation. You may use <?php echo CHtml::link('CModel::getErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'getErrors')); ?> to retrieve the validation
error messages.</p>


