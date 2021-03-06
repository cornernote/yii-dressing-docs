<?php
$this->pageTitle = $this->pageHeading = 'YdAccountSignup';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdAccountSignup';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a> | <a href="#events">Events</a></div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>Package</th>
  <td><?php echo CHtml::link('dressing.models', array('/site/doc', '#' => 'dressing.models')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdAccountSignup &raquo;
<?php echo CHtml::link('YdFormModel', array('/site/doc', 'view' => 'YdFormModel')); ?> &raquo;
<?php echo CHtml::link('CFormModel', array('/site/doc', 'view' => 'CFormModel')); ?> &raquo;
<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>ArrayAccess, Traversable, IteratorAggregate</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/models/YdAccountSignup.php">dressing/models/YdAccountSignup.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdAccountSignup is the data structure for keeping account registration form data.
It is used by the 'signup' action of 'AccountController'.</div>
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
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CModel', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>Returns all attribute values.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="confirm_password">
  <td><?php echo CHtml::link('confirm_password', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'confirm_password-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdAccountSignup</td>
</tr>
<tr id="email">
  <td><?php echo CHtml::link('email', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'email-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdAccountSignup</td>
</tr>
<tr class="inherited" id="errorString">
  <td><?php echo CHtml::link('errorString', array('/site/doc', 'view' => 'YdFormModel', '#' => 'errorString-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td><?php echo CHtml::link('YdFormModel', array('/site/doc', 'view' => 'YdFormModel')); ?></td>
</tr>
<tr class="inherited" id="errors">
  <td><?php echo CHtml::link('errors', array('/site/doc', 'view' => 'CModel', '#' => 'errors-detail')); ?></td>
  <td>array</td>
  <td>Returns the errors for all attribute or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="first_name">
  <td><?php echo CHtml::link('first_name', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'first_name-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdAccountSignup</td>
</tr>
<tr class="inherited" id="iterator">
  <td><?php echo CHtml::link('iterator', array('/site/doc', 'view' => 'CModel', '#' => 'iterator-detail')); ?></td>
  <td><?php echo CHtml::link('CMapIterator', array('/site/doc', 'view' => 'CMapIterator')); ?></td>
  <td>Returns an iterator for traversing the attributes in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="last_name">
  <td><?php echo CHtml::link('last_name', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'last_name-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdAccountSignup</td>
</tr>
<tr id="password">
  <td><?php echo CHtml::link('password', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'password-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdAccountSignup</td>
</tr>
<tr id="remember_me">
  <td><?php echo CHtml::link('remember_me', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'remember_me-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdAccountSignup</td>
</tr>
<tr class="inherited" id="safeAttributeNames">
  <td><?php echo CHtml::link('safeAttributeNames', array('/site/doc', 'view' => 'CModel', '#' => 'safeAttributeNames-detail')); ?></td>
  <td>array</td>
  <td>Returns the attribute names that are safe to be massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="scenario">
  <td><?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'CModel', '#' => 'scenario-detail')); ?></td>
  <td>string</td>
  <td>Returns the scenario that this model is used in.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="username">
  <td><?php echo CHtml::link('username', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'username-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdAccountSignup</td>
</tr>
<tr class="inherited" id="validatorList">
  <td><?php echo CHtml::link('validatorList', array('/site/doc', 'view' => 'CModel', '#' => 'validatorList-detail')); ?></td>
  <td><?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?></td>
  <td>Returns all the validators declared in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="validators">
  <td><?php echo CHtml::link('validators', array('/site/doc', 'view' => 'CModel', '#' => 'validators-detail')); ?></td>
  <td>array</td>
  <td>Returns the validators applicable to the current <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'scenario')); ?>.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CFormModel', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CFormModel', array('/site/doc', 'view' => 'CFormModel')); ?></td>
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
<tr class="inherited" id="addError">
  <td><?php echo CHtml::link('addError()', array('/site/doc', 'view' => 'CModel', '#' => 'addError-detail')); ?></td>
  <td>Adds a new error to the specified attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="addErrors">
  <td><?php echo CHtml::link('addErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'addErrors-detail')); ?></td>
  <td>Adds a list of errors.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
<tr id="attributeLabels">
  <td><?php echo CHtml::link('attributeLabels()', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'attributeLabels-detail')); ?></td>
  <td>Declares attribute labels.</td>
  <td>YdAccountSignup</td>
</tr>
<tr class="inherited" id="attributeNames">
  <td><?php echo CHtml::link('attributeNames()', array('/site/doc', 'view' => 'CFormModel', '#' => 'attributeNames-detail')); ?></td>
  <td>Returns the list of attribute names.</td>
  <td><?php echo CHtml::link('CFormModel', array('/site/doc', 'view' => 'CFormModel')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors()', array('/site/doc', 'view' => 'CModel', '#' => 'behaviors-detail')); ?></td>
  <td>Returns a list of behaviors that this model should behave as.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
<tr class="inherited" id="clearErrors">
  <td><?php echo CHtml::link('clearErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'clearErrors-detail')); ?></td>
  <td>Removes errors for all attributes or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="createValidators">
  <td><?php echo CHtml::link('createValidators()', array('/site/doc', 'view' => 'CModel', '#' => 'createValidators-detail')); ?></td>
  <td>Creates validator objects based on the specification in <?php echo CHtml::link('rules', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'rules')); ?>.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
<tr class="inherited" id="generateAttributeLabel">
  <td><?php echo CHtml::link('generateAttributeLabel()', array('/site/doc', 'view' => 'CModel', '#' => 'generateAttributeLabel-detail')); ?></td>
  <td>Generates a user friendly attribute label.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getAttributeLabel">
  <td><?php echo CHtml::link('getAttributeLabel()', array('/site/doc', 'view' => 'CModel', '#' => 'getAttributeLabel-detail')); ?></td>
  <td>Returns the text label for the specified attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getAttributes">
  <td><?php echo CHtml::link('getAttributes()', array('/site/doc', 'view' => 'CModel', '#' => 'getAttributes-detail')); ?></td>
  <td>Returns all attribute values.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getError">
  <td><?php echo CHtml::link('getError()', array('/site/doc', 'view' => 'CModel', '#' => 'getError-detail')); ?></td>
  <td>Returns the first error of the specified attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getErrorString">
  <td><?php echo CHtml::link('getErrorString()', array('/site/doc', 'view' => 'YdFormModel', '#' => 'getErrorString-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdFormModel', array('/site/doc', 'view' => 'YdFormModel')); ?></td>
</tr>
<tr class="inherited" id="getErrors">
  <td><?php echo CHtml::link('getErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'getErrors-detail')); ?></td>
  <td>Returns the errors for all attribute or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getIterator">
  <td><?php echo CHtml::link('getIterator()', array('/site/doc', 'view' => 'CModel', '#' => 'getIterator-detail')); ?></td>
  <td>Returns an iterator for traversing the attributes in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getSafeAttributeNames">
  <td><?php echo CHtml::link('getSafeAttributeNames()', array('/site/doc', 'view' => 'CModel', '#' => 'getSafeAttributeNames-detail')); ?></td>
  <td>Returns the attribute names that are safe to be massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getScenario">
  <td><?php echo CHtml::link('getScenario()', array('/site/doc', 'view' => 'CModel', '#' => 'getScenario-detail')); ?></td>
  <td>Returns the scenario that this model is used in.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getValidatorList">
  <td><?php echo CHtml::link('getValidatorList()', array('/site/doc', 'view' => 'CModel', '#' => 'getValidatorList-detail')); ?></td>
  <td>Returns all the validators declared in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getValidators">
  <td><?php echo CHtml::link('getValidators()', array('/site/doc', 'view' => 'CModel', '#' => 'getValidators-detail')); ?></td>
  <td>Returns the validators applicable to the current <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'scenario')); ?>.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="hasErrors">
  <td><?php echo CHtml::link('hasErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'hasErrors-detail')); ?></td>
  <td>Returns a value indicating whether there is any validation error.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CFormModel', '#' => 'init-detail')); ?></td>
  <td>Initializes this model.</td>
  <td><?php echo CHtml::link('CFormModel', array('/site/doc', 'view' => 'CFormModel')); ?></td>
</tr>
<tr class="inherited" id="isAttributeRequired">
  <td><?php echo CHtml::link('isAttributeRequired()', array('/site/doc', 'view' => 'CModel', '#' => 'isAttributeRequired-detail')); ?></td>
  <td>Returns a value indicating whether the attribute is required.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="isAttributeSafe">
  <td><?php echo CHtml::link('isAttributeSafe()', array('/site/doc', 'view' => 'CModel', '#' => 'isAttributeSafe-detail')); ?></td>
  <td>Returns a value indicating whether the attribute is safe for massive assignments.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="login">
  <td><?php echo CHtml::link('login()', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'login-detail')); ?></td>
  <td>Logs in the user using the given username and password in the model.</td>
  <td>YdAccountSignup</td>
</tr>
<tr class="inherited" id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetExists-detail')); ?></td>
  <td>Returns whether there is an element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetGet-detail')); ?></td>
  <td>Returns the element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetSet-detail')); ?></td>
  <td>Sets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetUnset-detail')); ?></td>
  <td>Unsets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onAfterConstruct">
  <td><?php echo CHtml::link('onAfterConstruct()', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterConstruct-detail')); ?></td>
  <td>This event is raised after the model instance is created by new operator.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onAfterValidate">
  <td><?php echo CHtml::link('onAfterValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterValidate-detail')); ?></td>
  <td>This event is raised after the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onBeforeValidate">
  <td><?php echo CHtml::link('onBeforeValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'onBeforeValidate-detail')); ?></td>
  <td>This event is raised before the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onUnsafeAttribute">
  <td><?php echo CHtml::link('onUnsafeAttribute()', array('/site/doc', 'view' => 'CModel', '#' => 'onUnsafeAttribute-detail')); ?></td>
  <td>This method is invoked when an unsafe attribute is being massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="rules">
  <td><?php echo CHtml::link('rules()', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'rules-detail')); ?></td>
  <td>Declares the validation rules.</td>
  <td>YdAccountSignup</td>
</tr>
<tr id="save">
  <td><?php echo CHtml::link('save()', array('/site/doc', 'view' => 'YdAccountSignup', '#' => 'save-detail')); ?></td>
  <td></td>
  <td>YdAccountSignup</td>
</tr>
<tr class="inherited" id="setAttributes">
  <td><?php echo CHtml::link('setAttributes()', array('/site/doc', 'view' => 'CModel', '#' => 'setAttributes-detail')); ?></td>
  <td>Sets the attribute values in a massive way.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="setScenario">
  <td><?php echo CHtml::link('setScenario()', array('/site/doc', 'view' => 'CModel', '#' => 'setScenario-detail')); ?></td>
  <td>Sets the scenario for the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="unsetAttributes">
  <td><?php echo CHtml::link('unsetAttributes()', array('/site/doc', 'view' => 'CModel', '#' => 'unsetAttributes-detail')); ?></td>
  <td>Sets the attributes to be null.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CModel', '#' => 'validate-detail')); ?></td>
  <td>Performs the validation.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
<tr class="inherited" id="afterConstruct">
  <td><?php echo CHtml::link('afterConstruct()', array('/site/doc', 'view' => 'CModel', '#' => 'afterConstruct-detail')); ?></td>
  <td>This method is invoked after a model instance is created by new operator.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="afterValidate">
  <td><?php echo CHtml::link('afterValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'afterValidate-detail')); ?></td>
  <td>This method is invoked after validation ends.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="beforeValidate">
  <td><?php echo CHtml::link('beforeValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'beforeValidate-detail')); ?></td>
  <td>This method is invoked before validation starts.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<div class="summary docEvent">
<h2>Events</h2>

<p><a href="#" class="toggle">Hide inherited events</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-event" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Event</th><th>Description</th><th>Defined By</th>
</tr>
<tr class="inherited" id="onAfterConstruct">
  <td><?php echo CHtml::link('onAfterConstruct', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterConstruct-detail')); ?></td>
  <td>This event is raised after the model instance is created by new operator.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onBeforeValidate">
  <td><?php echo CHtml::link('onBeforeValidate', array('/site/doc', 'view' => 'CModel', '#' => 'onBeforeValidate-detail')); ?></td>
  <td>This event is raised before the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onAfterValidate">
  <td><?php echo CHtml::link('onAfterValidate', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterValidate-detail')); ?></td>
  <td>This event is raised after the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onUnsafeAttribute">
  <td><?php echo CHtml::link('onUnsafeAttribute', array('/site/doc', 'view' => 'CModel', '#' => 'onUnsafeAttribute-detail')); ?></td>
  <td>This method is invoked when an unsafe attribute is being massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="confirm_password-detail">
confirm_password<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$confirm_password</b>;</div>

<p></p>


<div class="detailHeader" id="email-detail">
email<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$email</b>;</div>

<p></p>


<div class="detailHeader" id="first_name-detail">
first_name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$first_name</b>;</div>

<p></p>


<div class="detailHeader" id="last_name-detail">
last_name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$last_name</b>;</div>

<p></p>


<div class="detailHeader" id="password-detail">
password<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$password</b>;</div>

<p></p>


<div class="detailHeader" id="remember_me-detail">
remember_me<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$remember_me</b>;</div>

<p></p>


<div class="detailHeader" id="username-detail">
username<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$username</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="attributeLabels-detail">
attributeLabels()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>attributeLabels</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/models/YdAccountSignup.php#L96">dressing/models/YdAccountSignup.php#L96</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">attributeLabels</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'username'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'first_name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'last_name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'email'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'password'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />}</span>
</span>
</code></div>
</div>
<p>Declares attribute labels.</p>


<div class="detailHeader" id="login-detail">
login()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>login</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether login is successful</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/models/YdAccountSignup.php#L139">dressing/models/YdAccountSignup.php#L139</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">login</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_identity&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_identity&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">YdUserIdentity</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">email</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_identity</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">authenticate</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$duration&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">remember_me&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">3600&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">24&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">30&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;30&nbsp;days<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">login</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_identity</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$duration</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Logs in the user using the given username and password in the model.</p>


<div class="detailHeader" id="rules-detail">
rules()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>rules</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/models/YdAccountSignup.php#L64">dressing/models/YdAccountSignup.php#L64</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">rules</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;required<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'username,&nbsp;email,&nbsp;password,&nbsp;confirm_password'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'required'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;first_name<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'first_name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'length'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'max'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;last_name<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'last_name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'length'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'max'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">255</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;email<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'length'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'max'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">255</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'unique'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'className'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'YdUser'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'criteria'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'condition'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'t.deleted&nbsp;IS&nbsp;NULL'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;username<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'username'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'length'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'max'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">255</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'username'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'unique'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'className'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'YdUser'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'criteria'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'condition'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'t.deleted&nbsp;IS&nbsp;NULL'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;confirm_password<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'confirm_password'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'compare'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'compareAttribute'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Declares the validation rules.
The rules state that email and password are required,
and password needs to be authenticated.</p>


<div class="detailHeader" id="save-detail">
save()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>save</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/models/YdAccountSignup.php#L110">dressing/models/YdAccountSignup.php#L110</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">save</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validate</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;create&nbsp;user<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">YdUser</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">first_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">first_name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">last_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">last_name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">email</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hashPassword</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">web_status&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">YdEMailHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">sendUserWelcome</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;login<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">login</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


