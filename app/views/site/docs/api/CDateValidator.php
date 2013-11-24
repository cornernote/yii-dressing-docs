<?php
$this->pageTitle = $this->pageHeading = 'CDateValidator';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDateValidator';
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
  <td>class CDateValidator &raquo;
<?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.7</td>
</tr>
<tr>
  <th>Version</th>
  <td>$Id: CDateValidator.php 2799 2011-01-01 19:31:13Z qiang.xue $</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CDateValidator.php">yii\validators\CDateValidator.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDateValidator verifies if the attribute represents a date, time or datetime.
<br/><br/>
By setting the <?php echo CHtml::link('format', array('/site/doc', 'view' => 'CDateValidator', '#' => 'format')); ?> property, one can specify what format the date value
must be in. If the given date value doesn't follow the format, the attribute is considered as invalid.</div>
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
  <td><?php echo CHtml::link('allowEmpty', array('/site/doc', 'view' => 'CDateValidator', '#' => 'allowEmpty-detail')); ?></td>
  <td>boolean</td>
  <td>whether the attribute value can be null or empty.</td>
  <td>CDateValidator</td>
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
<tr id="format">
  <td><?php echo CHtml::link('format', array('/site/doc', 'view' => 'CDateValidator', '#' => 'format-detail')); ?></td>
  <td>mixed</td>
  <td>the format pattern that the date value should follow.</td>
  <td>CDateValidator</td>
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
<tr id="timestampAttribute">
  <td><?php echo CHtml::link('timestampAttribute', array('/site/doc', 'view' => 'CDateValidator', '#' => 'timestampAttribute-detail')); ?></td>
  <td>string</td>
  <td>the name of the attribute to receive the parsing result.</td>
  <td>CDateValidator</td>
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
<tr class="inherited" id="clientValidateAttribute">
  <td><?php echo CHtml::link('clientValidateAttribute()', array('/site/doc', 'view' => 'CValidator', '#' => 'clientValidateAttribute-detail')); ?></td>
  <td>Returns the JavaScript needed for performing client-side validation.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
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
<tr class="inherited" id="isEmpty">
  <td><?php echo CHtml::link('isEmpty()', array('/site/doc', 'view' => 'CValidator', '#' => 'isEmpty-detail')); ?></td>
  <td>Checks if the given value is empty.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="validateAttribute">
  <td><?php echo CHtml::link('validateAttribute()', array('/site/doc', 'view' => 'CDateValidator', '#' => 'validateAttribute-detail')); ?></td>
  <td>Validates the attribute of the object.</td>
  <td>CDateValidator</td>
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


<div class="detailHeader" id="format-detail">
format<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$format</b>;</div>

<p>the format pattern that the date value should follow.
This can be either a string or an array representing multiple formats.
Defaults to 'MM/dd/yyyy'. Please see <?php echo CHtml::link('CDateTimeParser', array('/site/doc', 'view' => 'CDateTimeParser')); ?> for details
about how to specify a date format.</p>


<div class="detailHeader" id="timestampAttribute-detail">
timestampAttribute<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$timestampAttribute</b>;</div>

<p>the name of the attribute to receive the parsing result.
When this property is not null and the validation is successful, the named attribute will
receive the parsing result.</p>


<h2>Method Details</h2>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CDateValidator.php#L49">yii\validators\CDateValidator.php#L49</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">validateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowEmpty&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isEmpty</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$valid</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;reason&nbsp;of&nbsp;array&nbsp;checking&nbsp;is&nbsp;explained&nbsp;here:&nbsp;https://github.com/yiisoft/yii/issues/1955<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$formats</span><span style="color: #007700">=</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">)&nbsp;?&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$formats&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$timestamp</span><span style="color: #007700">=</span><span style="color: #0000BB">CDateTimeParser</span><span style="color: #007700">::</span><span style="color: #0000BB">parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$format</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'month'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #DD0000">'day'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #DD0000">'hour'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">'minute'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">'second'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$timestamp</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$valid</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestampAttribute</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestampAttribute</span><span style="color: #007700">}=</span><span style="color: #0000BB">$timestamp</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$valid</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;format&nbsp;of&nbsp;{attribute}&nbsp;is&nbsp;invalid.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Validates the attribute of the object.
If there is any error, the error message is added to the object.</p>


