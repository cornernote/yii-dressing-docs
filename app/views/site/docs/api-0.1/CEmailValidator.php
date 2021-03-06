<?php
$this->pageTitle = $this->pageHeading = 'CEmailValidator';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CEmailValidator';
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
  <td>class CEmailValidator &raquo;
<?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/validators/CEmailValidator.php">yii/validators/CEmailValidator.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CEmailValidator validates that the attribute value is a valid email address.</div>
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
<tr id="allowEmpty">
  <td><?php echo CHtml::link('allowEmpty', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'allowEmpty-detail')); ?></td>
  <td>boolean</td>
  <td>whether the attribute value can be null or empty.</td>
  <td>CEmailValidator</td>
</tr>
<tr id="allowName">
  <td><?php echo CHtml::link('allowName', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'allowName-detail')); ?></td>
  <td>boolean</td>
  <td>whether to allow name in the email address (e.</td>
  <td>CEmailValidator</td>
</tr>
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CValidator', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>list of attributes to be validated.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr class="inherited" id="builtInValidators">
  <td><?php echo CHtml::link('builtInValidators', array('/site/doc', 'view' => 'CValidator', '#' => 'builtInValidators-detail')); ?></td>
  <td>array</td>
  <td>list of built-in validators (name=>class)</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="checkMX">
  <td><?php echo CHtml::link('checkMX', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'checkMX-detail')); ?></td>
  <td>boolean</td>
  <td>whether to check the MX record for the email address.</td>
  <td>CEmailValidator</td>
</tr>
<tr id="checkPort">
  <td><?php echo CHtml::link('checkPort', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'checkPort-detail')); ?></td>
  <td>boolean</td>
  <td>whether to check port 25 for the email address.</td>
  <td>CEmailValidator</td>
</tr>
<tr class="inherited" id="enableClientValidation">
  <td><?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CValidator', '#' => 'enableClientValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to perform client-side validation.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr class="inherited" id="except">
  <td><?php echo CHtml::link('except', array('/site/doc', 'view' => 'CValidator', '#' => 'except-detail')); ?></td>
  <td>array</td>
  <td>list of scenarios that the validator should not be applied to.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="fullPattern">
  <td><?php echo CHtml::link('fullPattern', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'fullPattern-detail')); ?></td>
  <td>string</td>
  <td>the regular expression used to validate email addresses with the name part.</td>
  <td>CEmailValidator</td>
</tr>
<tr class="inherited" id="message">
  <td><?php echo CHtml::link('message', array('/site/doc', 'view' => 'CValidator', '#' => 'message-detail')); ?></td>
  <td>string</td>
  <td>the user-defined error message.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr class="inherited" id="on">
  <td><?php echo CHtml::link('on', array('/site/doc', 'view' => 'CValidator', '#' => 'on-detail')); ?></td>
  <td>array</td>
  <td>list of scenarios that the validator should be applied.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="pattern">
  <td><?php echo CHtml::link('pattern', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'pattern-detail')); ?></td>
  <td>string</td>
  <td>the regular expression used to validate the attribute value.</td>
  <td>CEmailValidator</td>
</tr>
<tr class="inherited" id="safe">
  <td><?php echo CHtml::link('safe', array('/site/doc', 'view' => 'CValidator', '#' => 'safe-detail')); ?></td>
  <td>boolean</td>
  <td>whether attributes listed with this validator should be considered safe for massive assignment.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr class="inherited" id="skipOnError">
  <td><?php echo CHtml::link('skipOnError', array('/site/doc', 'view' => 'CValidator', '#' => 'skipOnError-detail')); ?></td>
  <td>boolean</td>
  <td>whether this validation rule should be skipped when there is already a validation
error for the current attribute.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="validateIDN">
  <td><?php echo CHtml::link('validateIDN', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'validateIDN-detail')); ?></td>
  <td>boolean</td>
  <td>whether validation process should care about IDN (internationalized domain names).</td>
  <td>CEmailValidator</td>
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
<tr class="inherited" id="applyTo">
  <td><?php echo CHtml::link('applyTo()', array('/site/doc', 'view' => 'CValidator', '#' => 'applyTo-detail')); ?></td>
  <td>Returns a value indicating whether the validator applies to the specified scenario.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
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
  <td><?php echo CHtml::link('clientValidateAttribute()', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'clientValidateAttribute-detail')); ?></td>
  <td>Returns the JavaScript needed for performing client-side validation.</td>
  <td>CEmailValidator</td>
</tr>
<tr class="inherited" id="createValidator">
  <td><?php echo CHtml::link('createValidator()', array('/site/doc', 'view' => 'CValidator', '#' => 'createValidator-detail')); ?></td>
  <td>Creates a validator object.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
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
<tr class="inherited" id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CValidator', '#' => 'validate-detail')); ?></td>
  <td>Validates the specified object.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="validateValue">
  <td><?php echo CHtml::link('validateValue()', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'validateValue-detail')); ?></td>
  <td>Validates a static value to see if it is a valid email.</td>
  <td>CEmailValidator</td>
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
<tr class="inherited" id="addError">
  <td><?php echo CHtml::link('addError()', array('/site/doc', 'view' => 'CValidator', '#' => 'addError-detail')); ?></td>
  <td>Adds an error about the specified attribute to the active record.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="checkMxPorts">
  <td><?php echo CHtml::link('checkMxPorts()', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'checkMxPorts-detail')); ?></td>
  <td>Retrieves the list of MX records for $domain and checks if port 25</td>
  <td>CEmailValidator</td>
</tr>
<tr class="inherited" id="isEmpty">
  <td><?php echo CHtml::link('isEmpty()', array('/site/doc', 'view' => 'CValidator', '#' => 'isEmpty-detail')); ?></td>
  <td>Checks if the given value is empty.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="mxSort">
  <td><?php echo CHtml::link('mxSort()', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'mxSort-detail')); ?></td>
  <td>Determines if one MX record has higher priority as another</td>
  <td>CEmailValidator</td>
</tr>
<tr id="validateAttribute">
  <td><?php echo CHtml::link('validateAttribute()', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'validateAttribute-detail')); ?></td>
  <td>Validates the attribute of the object.</td>
  <td>CEmailValidator</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="allowEmpty-detail">
allowEmpty<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$allowEmpty</b>;</div>

<p>whether the attribute value can be null or empty. Defaults to true,
meaning that if the attribute is empty, it is considered valid.</p>


<div class="detailHeader" id="allowName-detail">
allowName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$allowName</b>;</div>

<p>whether to allow name in the email address (e.g. "Qiang Xue <qiang.xue@gmail.com>"). Defaults to false.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('fullPattern', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'fullPattern')); ?></li>
</ul>
</div>

<div class="detailHeader" id="checkMX-detail">
checkMX<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$checkMX</b>;</div>

<p>whether to check the MX record for the email address.
Defaults to false. To enable it, you need to make sure the PHP function 'checkdnsrr'
exists in your PHP installation.
Please note that this check may fail due to temporary problems even if email is deliverable.</p>


<div class="detailHeader" id="checkPort-detail">
checkPort<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$checkPort</b>;</div>

<p>whether to check port 25 for the email address.
Defaults to false. To enable it, ensure that the PHP functions 'dns_get_record' and
'fsockopen' are available in your PHP installation.
Please note that this check may fail due to temporary problems even if email is deliverable.</p>


<div class="detailHeader" id="fullPattern-detail">
fullPattern<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$fullPattern</b>;</div>

<p>the regular expression used to validate email addresses with the name part.
This property is used only when <?php echo CHtml::link('allowName', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'allowName')); ?> is true.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('allowName', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'allowName')); ?></li>
</ul>
</div>

<div class="detailHeader" id="pattern-detail">
pattern<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$pattern</b>;</div>

<p>the regular expression used to validate the attribute value.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.regular-expressions.info/email.html">http://www.regular-expressions.info/email.html</a></li>
</ul>
</div>

<div class="detailHeader" id="validateIDN-detail">
validateIDN<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public boolean <b>$validateIDN</b>;</div>

<p>whether validation process should care about IDN (internationalized domain names). Default
value is false which means that validation of emails containing IDN will always fail.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="checkMxPorts-detail">
checkMxPorts()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>checkMxPorts</b>(string $domain)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$domain</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">domain to be checked</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if a reachable MX server has been found</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/validators/CEmailValidator.php#L150">yii/validators/CEmailValidator.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">checkMxPorts</span><span style="color: #007700">(</span><span style="color: #0000BB">$domain</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$records</span><span style="color: #007700">=</span><span style="color: #0000BB">dns_get_record</span><span style="color: #007700">(</span><span style="color: #0000BB">$domain</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">DNS_MX</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$records</span><span style="color: #007700">===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;empty(</span><span style="color: #0000BB">$records</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$records</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'mxSort'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$records&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handle</span><span style="color: #007700">=@</span><span style="color: #0000BB">fsockopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$record</span><span style="color: #007700">[</span><span style="color: #DD0000">'target'</span><span style="color: #007700">],</span><span style="color: #0000BB">25</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves the list of MX records for $domain and checks if port 25
is opened on any of these.</p>


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
  <td class="paramDescCol">the client-side validation script.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/validators/CEmailValidator.php#L111">yii/validators/CEmailValidator.php#L111</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clientValidateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateIDN</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'punycode'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;punycode.js&nbsp;works&nbsp;only&nbsp;with&nbsp;the&nbsp;domains&nbsp;-&nbsp;so&nbsp;we&nbsp;have&nbsp;to&nbsp;extract&nbsp;it&nbsp;before&nbsp;punycoding<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validateIDN</span><span style="color: #007700">=</span><span style="color: #DD0000">'<br />var&nbsp;info&nbsp;=&nbsp;value.match(/^(.[^@]+)@(.+)$/);<br />if&nbsp;(info)<br />value&nbsp;=&nbsp;info[1]&nbsp;+&nbsp;"@"&nbsp;+&nbsp;punycode.toASCII(info[2]);<br />'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validateIDN</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{attribute}&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;email&nbsp;address.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{attribute}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">"!value.match(</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pattern</span><span style="color: #007700">}</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">.=</span><span style="color: #DD0000">"&nbsp;&amp;&amp;&nbsp;!value.match(</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fullPattern</span><span style="color: #007700">}</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"<br /></span><span style="color: #0000BB">$validateIDN</span><span style="color: #DD0000"><br />if("</span><span style="color: #007700">.(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowEmpty&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">"jQuery.trim(value)!=''&nbsp;&amp;&amp;&nbsp;"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">).</span><span style="color: #0000BB">$condition</span><span style="color: #007700">.</span><span style="color: #DD0000">")&nbsp;{<br />messages.push("</span><span style="color: #007700">.</span><span style="color: #0000BB">CJSON</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">).</span><span style="color: #DD0000">");<br />}<br />"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the JavaScript needed for performing client-side validation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::enableClientValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableClientValidation')); ?></li>
</ul>
</div>

<div class="detailHeader" id="mxSort-detail">
mxSort()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>mxSort</b>(mixed $a, mixed $b)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$a</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">first item for comparison</td>
</tr>
<tr>
  <td class="paramNameCol">$b</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">second item for comparison</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/validators/CEmailValidator.php#L176">yii/validators/CEmailValidator.php#L176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">mxSort</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$b</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'pri'</span><span style="color: #007700">]==</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'pri'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'pri'</span><span style="color: #007700">]&lt;</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'pri'</span><span style="color: #007700">])?-</span><span style="color: #0000BB">1</span><span style="color: #007700">:</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Determines if one MX record has higher priority as another
(i.e. 'pri' is lower). Used by <?php echo CHtml::link('checkMxPorts', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'checkMxPorts')); ?>.</p>


<div class="detailHeader" id="validateAttribute-detail">
validateAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>validateAttribute</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $object, string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$object</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the object being validated</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute being validated</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/validators/CEmailValidator.php#L68">yii/validators/CEmailValidator.php#L68</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">validateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowEmpty&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isEmpty</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">:</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{attribute}&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;email&nbsp;address.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Validates the attribute of the object.
If there is any error, the error message is added to the object.</p>


<div class="detailHeader" id="validateValue-detail">
validateValue()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>validateValue</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be validated</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the value is a valid email</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/validators/CEmailValidator.php#L88">yii/validators/CEmailValidator.php#L88</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">validateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateIDN</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encodeIDN</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;sure&nbsp;string&nbsp;length&nbsp;is&nbsp;limited&nbsp;to&nbsp;avoid&nbsp;DOS&nbsp;attacks<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$valid</span><span style="color: #007700">=</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&lt;=</span><span style="color: #0000BB">254&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowName&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fullPattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$valid</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$domain</span><span style="color: #007700">=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #DD0000">'@'</span><span style="color: #007700">)+</span><span style="color: #0000BB">1</span><span style="color: #007700">),</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$valid&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkMX&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'checkdnsrr'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$valid</span><span style="color: #007700">=</span><span style="color: #0000BB">checkdnsrr</span><span style="color: #007700">(</span><span style="color: #0000BB">$domain</span><span style="color: #007700">,</span><span style="color: #DD0000">'MX'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$valid&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkPort&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'fsockopen'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'dns_get_record'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$valid</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkMxPorts</span><span style="color: #007700">(</span><span style="color: #0000BB">$domain</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$valid</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Validates a static value to see if it is a valid email.
Note that this method does not respect <?php echo CHtml::link('allowEmpty', array('/site/doc', 'view' => 'CEmailValidator', '#' => 'allowEmpty')); ?> property.
This method is provided so that you can call it directly without going through the model validation rule mechanism.</p>


