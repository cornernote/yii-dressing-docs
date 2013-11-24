<?php
$this->pageTitle = $this->pageHeading = 'CValidator';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CValidator';
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
  <td><?php echo CHtml::link('system.validators', array('/site/doc', '#' => 'system.validators')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>abstract class CValidator &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CBooleanValidator', array('/site/doc', 'view' => 'CBooleanValidator')); ?>, <?php echo CHtml::link('CCaptchaValidator', array('/site/doc', 'view' => 'CCaptchaValidator')); ?>, <?php echo CHtml::link('CCompareValidator', array('/site/doc', 'view' => 'CCompareValidator')); ?>, <?php echo CHtml::link('CDateValidator', array('/site/doc', 'view' => 'CDateValidator')); ?>, <?php echo CHtml::link('CDefaultValueValidator', array('/site/doc', 'view' => 'CDefaultValueValidator')); ?>, <?php echo CHtml::link('CEmailValidator', array('/site/doc', 'view' => 'CEmailValidator')); ?>, <?php echo CHtml::link('CExistValidator', array('/site/doc', 'view' => 'CExistValidator')); ?>, <?php echo CHtml::link('CFileValidator', array('/site/doc', 'view' => 'CFileValidator')); ?>, <?php echo CHtml::link('CFilterValidator', array('/site/doc', 'view' => 'CFilterValidator')); ?>, <?php echo CHtml::link('CInlineValidator', array('/site/doc', 'view' => 'CInlineValidator')); ?>, <?php echo CHtml::link('CNumberValidator', array('/site/doc', 'view' => 'CNumberValidator')); ?>, <?php echo CHtml::link('CRangeValidator', array('/site/doc', 'view' => 'CRangeValidator')); ?>, <?php echo CHtml::link('CRegularExpressionValidator', array('/site/doc', 'view' => 'CRegularExpressionValidator')); ?>, <?php echo CHtml::link('CRequiredValidator', array('/site/doc', 'view' => 'CRequiredValidator')); ?>, <?php echo CHtml::link('CSafeValidator', array('/site/doc', 'view' => 'CSafeValidator')); ?>, <?php echo CHtml::link('CStringValidator', array('/site/doc', 'view' => 'CStringValidator')); ?>, <?php echo CHtml::link('CTypeValidator', array('/site/doc', 'view' => 'CTypeValidator')); ?>, <?php echo CHtml::link('CUniqueValidator', array('/site/doc', 'view' => 'CUniqueValidator')); ?>, <?php echo CHtml::link('CUnsafeValidator', array('/site/doc', 'view' => 'CUnsafeValidator')); ?>, <?php echo CHtml::link('CUrlValidator', array('/site/doc', 'view' => 'CUrlValidator')); ?>, <?php echo CHtml::link('YdReCaptchaValidator', array('/site/doc', 'view' => 'YdReCaptchaValidator')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CValidator.php">yii\validators\CValidator.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CValidator is the base class for all validators.
<br/><br/>
Child classes must implement the <?php echo CHtml::link('validateAttribute', array('/site/doc', 'view' => 'CValidator', '#' => 'validateAttribute')); ?> method.
<br/><br/>
The following properties are defined in CValidator:
<ul>
<li><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CValidator', '#' => 'attributes')); ?>: array, list of attributes to be validated;</li>
<li><?php echo CHtml::link('message', array('/site/doc', 'view' => 'CValidator', '#' => 'message')); ?>: string, the customized error message. The message
  may contain placeholders that will be replaced with the actual content.
  For example, the "{attribute}" placeholder will be replaced with the label
  of the problematic attribute. Different validators may define additional
  placeholders.</li>
<li><?php echo CHtml::link('on', array('/site/doc', 'view' => 'CValidator', '#' => 'on')); ?>: string, in which scenario should the validator be in effect.
  This is used to match the 'on' parameter supplied when calling <?php echo CHtml::link('CModel::validate', array('/site/doc', 'view' => 'CModel', '#' => 'validate')); ?>.</li>
</ul>
<br/><br/>
When using <?php echo CHtml::link('createValidator', array('/site/doc', 'view' => 'CValidator', '#' => 'createValidator')); ?> to create a validator, the following aliases
are recognized as the corresponding built-in validator classes:
<ul>
<li>required: <?php echo CHtml::link('CRequiredValidator', array('/site/doc', 'view' => 'CRequiredValidator')); ?></li>
<li>filter: <?php echo CHtml::link('CFilterValidator', array('/site/doc', 'view' => 'CFilterValidator')); ?></li>
<li>match: <?php echo CHtml::link('CRegularExpressionValidator', array('/site/doc', 'view' => 'CRegularExpressionValidator')); ?></li>
<li>email: <?php echo CHtml::link('CEmailValidator', array('/site/doc', 'view' => 'CEmailValidator')); ?></li>
<li>url: <?php echo CHtml::link('CUrlValidator', array('/site/doc', 'view' => 'CUrlValidator')); ?></li>
<li>unique: <?php echo CHtml::link('CUniqueValidator', array('/site/doc', 'view' => 'CUniqueValidator')); ?></li>
<li>compare: <?php echo CHtml::link('CCompareValidator', array('/site/doc', 'view' => 'CCompareValidator')); ?></li>
<li>length: <?php echo CHtml::link('CStringValidator', array('/site/doc', 'view' => 'CStringValidator')); ?></li>
<li>in: <?php echo CHtml::link('CRangeValidator', array('/site/doc', 'view' => 'CRangeValidator')); ?></li>
<li>numerical: <?php echo CHtml::link('CNumberValidator', array('/site/doc', 'view' => 'CNumberValidator')); ?></li>
<li>captcha: <?php echo CHtml::link('CCaptchaValidator', array('/site/doc', 'view' => 'CCaptchaValidator')); ?></li>
<li>type: <?php echo CHtml::link('CTypeValidator', array('/site/doc', 'view' => 'CTypeValidator')); ?></li>
<li>file: <?php echo CHtml::link('CFileValidator', array('/site/doc', 'view' => 'CFileValidator')); ?></li>
<li>default: <?php echo CHtml::link('CDefaultValueValidator', array('/site/doc', 'view' => 'CDefaultValueValidator')); ?></li>
<li>exist: <?php echo CHtml::link('CExistValidator', array('/site/doc', 'view' => 'CExistValidator')); ?></li>
<li>boolean: <?php echo CHtml::link('CBooleanValidator', array('/site/doc', 'view' => 'CBooleanValidator')); ?></li>
<li>date: <?php echo CHtml::link('CDateValidator', array('/site/doc', 'view' => 'CDateValidator')); ?></li>
<li>safe: <?php echo CHtml::link('CSafeValidator', array('/site/doc', 'view' => 'CSafeValidator')); ?></li>
<li>unsafe: <?php echo CHtml::link('CUnsafeValidator', array('/site/doc', 'view' => 'CUnsafeValidator')); ?></li>
</ul></div>
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
<tr id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CValidator', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>list of attributes to be validated.</td>
  <td>CValidator</td>
</tr>
<tr id="builtInValidators">
  <td><?php echo CHtml::link('builtInValidators', array('/site/doc', 'view' => 'CValidator', '#' => 'builtInValidators-detail')); ?></td>
  <td>array</td>
  <td>list of built-in validators (name=>class)</td>
  <td>CValidator</td>
</tr>
<tr id="enableClientValidation">
  <td><?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CValidator', '#' => 'enableClientValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to perform client-side validation.</td>
  <td>CValidator</td>
</tr>
<tr id="except">
  <td><?php echo CHtml::link('except', array('/site/doc', 'view' => 'CValidator', '#' => 'except-detail')); ?></td>
  <td>array</td>
  <td>list of scenarios that the validator should not be applied to.</td>
  <td>CValidator</td>
</tr>
<tr id="message">
  <td><?php echo CHtml::link('message', array('/site/doc', 'view' => 'CValidator', '#' => 'message-detail')); ?></td>
  <td>string</td>
  <td>the user-defined error message.</td>
  <td>CValidator</td>
</tr>
<tr id="on">
  <td><?php echo CHtml::link('on', array('/site/doc', 'view' => 'CValidator', '#' => 'on-detail')); ?></td>
  <td>array</td>
  <td>list of scenarios that the validator should be applied.</td>
  <td>CValidator</td>
</tr>
<tr id="safe">
  <td><?php echo CHtml::link('safe', array('/site/doc', 'view' => 'CValidator', '#' => 'safe-detail')); ?></td>
  <td>boolean</td>
  <td>whether attributes listed with this validator should be considered safe for massive assignment.</td>
  <td>CValidator</td>
</tr>
<tr id="skipOnError">
  <td><?php echo CHtml::link('skipOnError', array('/site/doc', 'view' => 'CValidator', '#' => 'skipOnError-detail')); ?></td>
  <td>boolean</td>
  <td>whether this validation rule should be skipped when there is already a validation
error for the current attribute.</td>
  <td>CValidator</td>
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
<tr id="applyTo">
  <td><?php echo CHtml::link('applyTo()', array('/site/doc', 'view' => 'CValidator', '#' => 'applyTo-detail')); ?></td>
  <td>Returns a value indicating whether the validator applies to the specified scenario.</td>
  <td>CValidator</td>
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
<tr id="clientValidateAttribute">
  <td><?php echo CHtml::link('clientValidateAttribute()', array('/site/doc', 'view' => 'CValidator', '#' => 'clientValidateAttribute-detail')); ?></td>
  <td>Returns the JavaScript needed for performing client-side validation.</td>
  <td>CValidator</td>
</tr>
<tr id="createValidator">
  <td><?php echo CHtml::link('createValidator()', array('/site/doc', 'view' => 'CValidator', '#' => 'createValidator-detail')); ?></td>
  <td>Creates a validator object.</td>
  <td>CValidator</td>
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
<tr id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CValidator', '#' => 'validate-detail')); ?></td>
  <td>Validates the specified object.</td>
  <td>CValidator</td>
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
<tr id="addError">
  <td><?php echo CHtml::link('addError()', array('/site/doc', 'view' => 'CValidator', '#' => 'addError-detail')); ?></td>
  <td>Adds an error about the specified attribute to the active record.</td>
  <td>CValidator</td>
</tr>
<tr id="isEmpty">
  <td><?php echo CHtml::link('isEmpty()', array('/site/doc', 'view' => 'CValidator', '#' => 'isEmpty-detail')); ?></td>
  <td>Checks if the given value is empty.</td>
  <td>CValidator</td>
</tr>
<tr id="validateAttribute">
  <td><?php echo CHtml::link('validateAttribute()', array('/site/doc', 'view' => 'CValidator', '#' => 'validateAttribute-detail')); ?></td>
  <td>Validates a single attribute.</td>
  <td>CValidator</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="attributes-detail">
attributes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$attributes</b>;</div>

<p>list of attributes to be validated.</p>


<div class="detailHeader" id="builtInValidators-detail">
builtInValidators<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static array <b>$builtInValidators</b>;</div>

<p>list of built-in validators (name=>class)</p>


<div class="detailHeader" id="enableClientValidation-detail">
enableClientValidation<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public boolean <b>$enableClientValidation</b>;</div>

<p>whether to perform client-side validation. Defaults to true.
Please refer to <?php echo CHtml::link('CActiveForm::enableClientValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableClientValidation')); ?> for more details about client-side validation.</p>


<div class="detailHeader" id="except-detail">
except<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public array <b>$except</b>;</div>

<p>list of scenarios that the validator should not be applied to.
Each array value refers to a scenario name with the same name as its array key.</p>


<div class="detailHeader" id="message-detail">
message<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$message</b>;</div>

<p>the user-defined error message. Different validators may define various
placeholders in the message that are to be replaced with actual values. All validators
recognize "{attribute}" placeholder, which will be replaced with the label of the attribute.</p>


<div class="detailHeader" id="on-detail">
on<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$on</b>;</div>

<p>list of scenarios that the validator should be applied.
Each array value refers to a scenario name with the same name as its array key.</p>


<div class="detailHeader" id="safe-detail">
safe<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public boolean <b>$safe</b>;</div>

<p>whether attributes listed with this validator should be considered safe for massive assignment.
Defaults to true.</p>


<div class="detailHeader" id="skipOnError-detail">
skipOnError<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public boolean <b>$skipOnError</b>;</div>

<p>whether this validation rule should be skipped when there is already a validation
error for the current attribute. Defaults to false.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addError-detail">
addError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>addError</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $object, string $attribute, string $message, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$object</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data object being validated</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute being validated</td>
</tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error message</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">values for the placeholders in the error message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CValidator.php#L260">yii\validators\CValidator.php#L260</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'{attribute}'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Adds an error about the specified attribute to the active record.
This is a helper method that performs message selection and internationalization.</p>


<div class="detailHeader" id="applyTo-detail">
applyTo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>applyTo</b>(string $scenario)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$scenario</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">scenario name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the validator applies to the specified scenario.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CValidator.php#L245">yii\validators\CValidator.php#L245</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">applyTo</span><span style="color: #007700">(</span><span style="color: #0000BB">$scenario</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">except</span><span style="color: #007700">[</span><span style="color: #0000BB">$scenario</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">)&nbsp;||&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">[</span><span style="color: #0000BB">$scenario</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the validator applies to the specified scenario.
A validator applies to a scenario as long as any of the following conditions is met:
<ul>
<li>the validator's "on" property is empty</li>
<li>the validator's "on" property contains the specified scenario</li>
</ul></p>


<div class="detailHeader" id="clientValidateAttribute-detail">
clientValidateAttribute()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>clientValidateAttribute</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $object, string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$object</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data object being validated</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the attribute to be validated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the client-side validation script. Null if the validator does not support client-side validation.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CValidator.php#L231">yii\validators\CValidator.php#L231</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clientValidateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />}</span>
</span>
</code></div>
</div>
<p>Returns the JavaScript needed for performing client-side validation.
Do not override this method if the validator does not support client-side validation.
Two predefined JavaScript variables can be used:
<ul>
<li>value: the value to be validated</li>
<li>messages: an array used to hold the validation error messages for the value</li>
</ul></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::enableClientValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableClientValidation')); ?></li>
</ul>
</div>

<div class="detailHeader" id="createValidator-detail">
createValidator()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static CValidator <b>createValidator</b>(string $name, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $object, mixed $attributes, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name or class of the validator</td>
</tr>
<tr>
  <td class="paramNameCol">$object</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data object being validated that may contain the inline validation method</td>
</tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">list of attributes to be validated. This can be either an array of
the attribute names or a string of comma-separated attribute names.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">initial values to be applied to the validator properties</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CValidator</td>
  <td class="paramDescCol">the validator</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CValidator.php#L141">yii\validators\CValidator.php#L141</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createValidator</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$on</span><span style="color: #007700">=</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$on</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">],-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$on</span><span style="color: #007700">=array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'except'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'except'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$except</span><span style="color: #007700">=</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'except'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$except</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'except'</span><span style="color: #007700">],-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$except</span><span style="color: #007700">=array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">method_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CInlineValidator</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">method</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidate'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clientValidate</span><span style="color: #007700">=</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidate'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidate'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=</span><span style="color: #0000BB">$params</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'skipOnError'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skipOnError</span><span style="color: #007700">=</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'skipOnError'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'attributes'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$builtInValidators</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$builtInValidators</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">],</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">=empty(</span><span style="color: #0000BB">$on</span><span style="color: #007700">)&nbsp;?&nbsp;array()&nbsp;:&nbsp;</span><span style="color: #0000BB">array_combine</span><span style="color: #007700">(</span><span style="color: #0000BB">$on</span><span style="color: #007700">,</span><span style="color: #0000BB">$on</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">except</span><span style="color: #007700">=empty(</span><span style="color: #0000BB">$except</span><span style="color: #007700">)&nbsp;?&nbsp;array()&nbsp;:&nbsp;</span><span style="color: #0000BB">array_combine</span><span style="color: #007700">(</span><span style="color: #0000BB">$except</span><span style="color: #007700">,</span><span style="color: #0000BB">$except</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a validator object.</p>


<div class="detailHeader" id="isEmpty-detail">
isEmpty()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isEmpty</b>(mixed $value, boolean $trim=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be checked</td>
</tr>
<tr>
  <td class="paramNameCol">$trim</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to perform trimming before checking if the string is empty. Defaults to false.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the value is empty</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CValidator.php#L274">yii\validators\CValidator.php#L274</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isEmpty</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$trim</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">===array()&nbsp;||&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$trim&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_scalar</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)===</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks if the given value is empty.
A value is considered empty if it is null, an empty array, or the trimmed result is an empty string.
Note that this method is different from PHP empty(). It will return false when the value is 0.</p>


<div class="detailHeader" id="validate-detail">
validate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>validate</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $object, array $attributes=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$object</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data object being validated</td>
</tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list of attributes to be validated. Defaults to null,
meaning every attribute listed in <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CValidator', '#' => 'attributes')); ?> will be validated.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CValidator.php#L204">yii\validators\CValidator.php#L204</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">validate</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">array_intersect</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skipOnError&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasErrors</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Validates the specified object.</p>


<div class="detailHeader" id="validateAttribute-detail">
validateAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract protected void <b>validateAttribute</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $object, string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$object</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data object being validated</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the attribute to be validated.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CValidator.php#L129">yii\validators\CValidator.php#L129</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">abstract&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">validateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Validates a single attribute.
This method should be overridden by child classes.</p>


