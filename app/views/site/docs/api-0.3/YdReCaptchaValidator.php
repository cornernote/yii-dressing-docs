<?php
$this->pageTitle = $this->pageHeading = 'YdReCaptchaValidator';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdReCaptchaValidator';
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
  <td><?php echo CHtml::link('dressing.validators', array('/site/doc', '#' => 'dressing.validators')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdReCaptchaValidator &raquo;
<?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/validators/YdReCaptchaValidator.php">dressing/validators/YdReCaptchaValidator.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>MetaYii</td>
</tr>
</table>

<div id="classDescription">
ReCaptchaValidator validates that the attribute value is the same as the verification code displayed in the CAPTCHA.
The CAPTCHA is provided by reCAPTCHA <a href="http://recaptcha.net/">http://recaptcha.net/</a>. See LICENCE.txt for the terms of use for this service.
<br/><br/>
ReCaptchaValidator should be used together with ReCaptcha.</div>
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
<tr id="httpPost">
  <td><?php echo CHtml::link('httpPost()', array('/site/doc', 'view' => 'YdReCaptchaValidator', '#' => 'httpPost-detail')); ?></td>
  <td>Submits an HTTP POST to a reCAPTCHA server</td>
  <td>YdReCaptchaValidator</td>
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
<tr id="checkAnswer">
  <td><?php echo CHtml::link('checkAnswer()', array('/site/doc', 'view' => 'YdReCaptchaValidator', '#' => 'checkAnswer-detail')); ?></td>
  <td>Calls an HTTP POST function to verify if the user's guess was correct</td>
  <td>YdReCaptchaValidator</td>
</tr>
<tr class="inherited" id="isEmpty">
  <td><?php echo CHtml::link('isEmpty()', array('/site/doc', 'view' => 'CValidator', '#' => 'isEmpty-detail')); ?></td>
  <td>Checks if the given value is empty.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="qsEncode">
  <td><?php echo CHtml::link('qsEncode()', array('/site/doc', 'view' => 'YdReCaptchaValidator', '#' => 'qsEncode-detail')); ?></td>
  <td>Encodes the given data into a query string format</td>
  <td>YdReCaptchaValidator</td>
</tr>
<tr id="validateAttribute">
  <td><?php echo CHtml::link('validateAttribute()', array('/site/doc', 'view' => 'YdReCaptchaValidator', '#' => 'validateAttribute-detail')); ?></td>
  <td>Validates the attribute of the object.</td>
  <td>YdReCaptchaValidator</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="checkAnswer-detail">
checkAnswer()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected bool <b>checkAnswer</b>(string $challenge, string $response, array $extra_params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$challenge</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$response</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$extra_params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">an array of extra variables to post to the server</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/validators/YdReCaptchaValidator.php#L72">dressing/validators/YdReCaptchaValidator.php#L72</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">checkAnswer</span><span style="color: #007700">(</span><span style="color: #0000BB">$challenge</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$extra_params&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$reCaptcha&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">reCaptcha</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$challenge&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">$response</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">httpPost</span><span style="color: #007700">(</span><span style="color: #0000BB">$reCaptcha</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">verifyServer</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/recaptcha/api/verify'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'privatekey'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$reCaptcha</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">privateKey</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'remoteip'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REMOTE_ADDR'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'challenge'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$challenge</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'response'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$response<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">$extra_params</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$answers&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$answers</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])&nbsp;!=&nbsp;</span><span style="color: #DD0000">'true'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Calls an HTTP POST function to verify if the user's guess was correct</p>


<div class="detailHeader" id="httpPost-detail">
httpPost()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>httpPost</b>(string $host, string $path, array $data, int $port=80)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$host</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$port</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">response</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/validators/YdReCaptchaValidator.php#L100">dressing/validators/YdReCaptchaValidator.php#L100</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">httpPost</span><span style="color: #007700">(</span><span style="color: #0000BB">$host</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$path</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$port&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">80</span><span style="color: #007700">)<br />{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$req&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">qsEncode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$http_request&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"POST&nbsp;</span><span style="color: #0000BB">$path</span><span style="color: #DD0000">&nbsp;HTTP/1.0\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$http_request&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Host:&nbsp;</span><span style="color: #0000BB">$host</span><span style="color: #DD0000">\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$http_request&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Content-Type:&nbsp;application/x-www-form-urlencoded;\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$http_request&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Content-Length:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$http_request&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"User-Agent:&nbsp;reCAPTCHA/PHP\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$http_request&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$http_request&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$req</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">==&nbsp;(</span><span style="color: #0000BB">$fs&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fsockopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$host</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die&nbsp;(</span><span style="color: #DD0000">'Could&nbsp;not&nbsp;open&nbsp;socket&nbsp;to&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$host&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;on&nbsp;port&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fs</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$http_request</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fs</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">$fs</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1160</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;One&nbsp;TCP-IP&nbsp;packet<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fs</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\r\n\r\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Submits an HTTP POST to a reCAPTCHA server</p>


<div class="detailHeader" id="qsEncode-detail">
qsEncode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>qsEncode</b>($data $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">$data</td>
  <td class="paramDescCol">- array of string elements to be encoded</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">- encoded request</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/validators/YdReCaptchaValidator.php#L133">dressing/validators/YdReCaptchaValidator.php#L133</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">qsEncode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$req&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$req&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'='&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">stripslashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #DD0000">'&amp;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Cut&nbsp;the&nbsp;last&nbsp;'&amp;'<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$req&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$req</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$req</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Encodes the given data into a query string format</p>


<div class="detailHeader" id="validateAttribute-detail">
validateAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>validateAttribute</b>($object $object, $attribute $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$object</td>
  <td class="paramTypeCol">$object</td>
  <td class="paramDescCol">CModel the object being validated</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">$attribute</td>
  <td class="paramDescCol">string the attribute being validated</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/validators/YdReCaptchaValidator.php#L57">dressing/validators/YdReCaptchaValidator.php#L57</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">validateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkAnswer</span><span style="color: #007700">(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'recaptcha_challenge_field'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'recaptcha_response_field'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'The&nbsp;verification&nbsp;code&nbsp;is&nbsp;incorrect.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Validates the attribute of the object.
If there is any error, the error message is added to the object.</p>


