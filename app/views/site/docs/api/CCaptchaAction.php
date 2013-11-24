<?php
$this->pageTitle = $this->pageHeading = 'CCaptchaAction';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CCaptchaAction';
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
  <td><?php echo CHtml::link('system.web.widgets.captcha', array('/site/doc', '#' => 'system.web.widgets.captcha')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CCaptchaAction &raquo;
<?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IAction', array('/site/doc', 'view' => 'IAction')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php">yii\web\widgets\captcha\CCaptchaAction.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CCaptchaAction renders a CAPTCHA image.
<br/><br/>
CCaptchaAction is used together with <?php echo CHtml::link('CCaptcha', array('/site/doc', 'view' => 'CCaptcha')); ?> and <?php echo CHtml::link('CCaptchaValidator', array('/site/doc', 'view' => 'CCaptchaValidator')); ?>
to provide the <a href="http://en.wikipedia.org/wiki/Captcha">CAPTCHA</a> feature.
<br/><br/>
You must configure properties of CCaptchaAction to customize the appearance of
the generated image.
<br/><br/>
Note, CCaptchaAction requires PHP GD2 extension.
<br/><br/>
Using CAPTCHA involves the following steps:
<ol>
<li>Override <?php echo CHtml::link('CController::actions()', array('/site/doc', 'view' => 'CController', '#' => 'actions')); ?> and register an action of class CCaptchaAction with ID 'captcha'.</li>
<li>In the form model, declare an attribute to store user-entered verification code, and declare the attribute
to be validated by the 'captcha' validator.</li>
<li>In the controller view, insert a <?php echo CHtml::link('CCaptcha', array('/site/doc', 'view' => 'CCaptcha')); ?> widget in the form.</li>
</ol></div>
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
<tr id="backColor">
  <td><?php echo CHtml::link('backColor', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'backColor-detail')); ?></td>
  <td>integer</td>
  <td>the background color.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="backend">
  <td><?php echo CHtml::link('backend', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'backend-detail')); ?></td>
  <td>string</td>
  <td>the graphic extension that will be used to draw CAPTCHA image.</td>
  <td>CCaptchaAction</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CAction', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>the controller who owns this action.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="fixedVerifyCode">
  <td><?php echo CHtml::link('fixedVerifyCode', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'fixedVerifyCode-detail')); ?></td>
  <td>string</td>
  <td>the fixed verification code.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="fontFile">
  <td><?php echo CHtml::link('fontFile', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'fontFile-detail')); ?></td>
  <td>string</td>
  <td>the TrueType font file.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="foreColor">
  <td><?php echo CHtml::link('foreColor', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'foreColor-detail')); ?></td>
  <td>integer</td>
  <td>the font color.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="height">
  <td><?php echo CHtml::link('height', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'height-detail')); ?></td>
  <td>integer</td>
  <td>the height of the generated CAPTCHA image.</td>
  <td>CCaptchaAction</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CAction', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>id of this action</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="maxLength">
  <td><?php echo CHtml::link('maxLength', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'maxLength-detail')); ?></td>
  <td>integer</td>
  <td>the maximum length for randomly generated word.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="minLength">
  <td><?php echo CHtml::link('minLength', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'minLength-detail')); ?></td>
  <td>integer</td>
  <td>the minimum length for randomly generated word.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="offset">
  <td><?php echo CHtml::link('offset', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'offset-detail')); ?></td>
  <td>integer</td>
  <td>the offset between characters.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="padding">
  <td><?php echo CHtml::link('padding', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'padding-detail')); ?></td>
  <td>integer</td>
  <td>padding around the text.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="testLimit">
  <td><?php echo CHtml::link('testLimit', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'testLimit-detail')); ?></td>
  <td>integer</td>
  <td>how many times should the same CAPTCHA be displayed.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="transparent">
  <td><?php echo CHtml::link('transparent', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'transparent-detail')); ?></td>
  <td>boolean</td>
  <td>whether to use transparent background.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="verifyCode">
  <td><?php echo CHtml::link('verifyCode', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'verifyCode-detail')); ?></td>
  <td>string</td>
  <td>Gets the verification code.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="width">
  <td><?php echo CHtml::link('width', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'width-detail')); ?></td>
  <td>integer</td>
  <td>the width of the generated CAPTCHA image.</td>
  <td>CCaptchaAction</td>
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
<tr id="sessionKey">
  <td><?php echo CHtml::link('sessionKey', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'sessionKey-detail')); ?></td>
  <td>string</td>
  <td>Returns the session variable name used to store verification code.</td>
  <td>CCaptchaAction</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CAction', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
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
<tr id="generateValidationHash">
  <td><?php echo CHtml::link('generateValidationHash()', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'generateValidationHash-detail')); ?></td>
  <td>Generates a hash code that can be used for client side validation.</td>
  <td>CCaptchaAction</td>
</tr>
<tr class="inherited" id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CAction', '#' => 'getController-detail')); ?></td>
  <td>Returns the controller who owns this action.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CAction', '#' => 'getId-detail')); ?></td>
  <td>Returns id of this action</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="getVerifyCode">
  <td><?php echo CHtml::link('getVerifyCode()', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'getVerifyCode-detail')); ?></td>
  <td>Gets the verification code.</td>
  <td>CCaptchaAction</td>
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
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'run-detail')); ?></td>
  <td>Runs the action.</td>
  <td>CCaptchaAction</td>
</tr>
<tr class="inherited" id="runWithParams">
  <td><?php echo CHtml::link('runWithParams()', array('/site/doc', 'view' => 'CAction', '#' => 'runWithParams-detail')); ?></td>
  <td>Runs the action with the supplied request parameters.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'validate-detail')); ?></td>
  <td>Validates the input to see if it matches the generated code.</td>
  <td>CCaptchaAction</td>
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
<tr id="generateVerifyCode">
  <td><?php echo CHtml::link('generateVerifyCode()', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'generateVerifyCode-detail')); ?></td>
  <td>Generates a new verification code.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="getSessionKey">
  <td><?php echo CHtml::link('getSessionKey()', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'getSessionKey-detail')); ?></td>
  <td>Returns the session variable name used to store verification code.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="renderImage">
  <td><?php echo CHtml::link('renderImage()', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'renderImage-detail')); ?></td>
  <td>Renders the CAPTCHA image based on the code using library specified in the $backend property.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="renderImageGD">
  <td><?php echo CHtml::link('renderImageGD()', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'renderImageGD-detail')); ?></td>
  <td>Renders the CAPTCHA image based on the code using GD library.</td>
  <td>CCaptchaAction</td>
</tr>
<tr id="renderImageImagick">
  <td><?php echo CHtml::link('renderImageImagick()', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'renderImageImagick-detail')); ?></td>
  <td>Renders the CAPTCHA image based on the code using ImageMagick library.</td>
  <td>CCaptchaAction</td>
</tr>
<tr class="inherited" id="runWithParamsInternal">
  <td><?php echo CHtml::link('runWithParamsInternal()', array('/site/doc', 'view' => 'CAction', '#' => 'runWithParamsInternal-detail')); ?></td>
  <td>Executes a method of an object with the supplied named parameters.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="backColor-detail">
backColor<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$backColor</b>;</div>

<p>the background color. For example, 0x55FF00.
Defaults to 0xFFFFFF, meaning white color.</p>


<div class="detailHeader" id="backend-detail">
backend<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public string <b>$backend</b>;</div>

<p>the graphic extension that will be used to draw CAPTCHA image. Possible values
are 'gd', 'imagick' and null. Null value means that fallback mode will be used: ImageMagick
is preferred over GD. Default value is null.</p>


<div class="detailHeader" id="fixedVerifyCode-detail">
fixedVerifyCode<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public string <b>$fixedVerifyCode</b>;</div>

<p>the fixed verification code. When this is property is set,
<?php echo CHtml::link('getVerifyCode', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'getVerifyCode')); ?> will always return this value.
This is mainly used in automated tests where we want to be able to reproduce
the same verification code each time we run the tests.
Defaults to null, meaning the verification code will be randomly generated.</p>


<div class="detailHeader" id="fontFile-detail">
fontFile<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$fontFile</b>;</div>

<p>the TrueType font file. Defaults to SpicyRice.ttf which is provided with the Yii release.
Note that non-free Duality.ttf has been changed to open/free SpicyRice.ttf since 1.1.14.</p>


<div class="detailHeader" id="foreColor-detail">
foreColor<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$foreColor</b>;</div>

<p>the font color. For example, 0x55FF00. Defaults to 0x2040A0 (blue color).</p>


<div class="detailHeader" id="height-detail">
height<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$height</b>;</div>

<p>the height of the generated CAPTCHA image. Defaults to 50.</p>


<div class="detailHeader" id="maxLength-detail">
maxLength<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$maxLength</b>;</div>

<p>the maximum length for randomly generated word. Defaults to 7.</p>


<div class="detailHeader" id="minLength-detail">
minLength<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$minLength</b>;</div>

<p>the minimum length for randomly generated word. Defaults to 6.</p>


<div class="detailHeader" id="offset-detail">
offset<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public integer <b>$offset</b>;</div>

<p>the offset between characters. Defaults to -2. You can adjust this property
in order to decrease or increase the readability of the captcha.</p>


<div class="detailHeader" id="padding-detail">
padding<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$padding</b>;</div>

<p>padding around the text. Defaults to 2.</p>


<div class="detailHeader" id="sessionKey-detail">
sessionKey<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected string <?php echo CHtml::link('<b>getSessionKey</b>', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'getSessionKey')); ?>()</div>

<p>Returns the session variable name used to store verification code.</p>


<div class="detailHeader" id="testLimit-detail">
testLimit<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$testLimit</b>;</div>

<p>how many times should the same CAPTCHA be displayed. Defaults to 3.
A value less than or equal to 0 means the test is unlimited (available since version 1.1.2).</p>


<div class="detailHeader" id="transparent-detail">
transparent<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$transparent</b>;</div>

<p>whether to use transparent background. Defaults to false.</p>


<div class="detailHeader" id="verifyCode-detail">
verifyCode<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getVerifyCode</b>', array('/site/doc', 'view' => 'CCaptchaAction', '#' => 'getVerifyCode')); ?>(boolean $regenerate=false)</div>

<p>Gets the verification code.</p>


<div class="detailHeader" id="width-detail">
width<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$width</b>;</div>

<p>the width of the generated CAPTCHA image. Defaults to 120.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="generateValidationHash-detail">
generateValidationHash()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>generateValidationHash</b>(string $code)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CAPTCHA code</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a hash code generated from the CAPTCHA code</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php#L140">yii\web\widgets\captcha\CCaptchaAction.php#L140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">generateValidationHash</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$h</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">;--</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$h</span><span style="color: #007700">+=</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$h</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates a hash code that can be used for client side validation.</p>


<div class="detailHeader" id="generateVerifyCode-detail">
generateVerifyCode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>generateVerifyCode</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated verification code</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php#L191">yii\web\widgets\captcha\CCaptchaAction.php#L191</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">generateVerifyCode</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minLength&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxLength</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxLength&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minLength</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minLength&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minLength&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxLength&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">20</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxLength&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">20</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$length&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minLength</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxLength</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$letters&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'bcdfghjklmnpqrstvwxyz'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$vowels&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'aeiou'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$code&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$length</span><span style="color: #007700">;&nbsp;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">||&nbsp;!(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">9</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$code</span><span style="color: #007700">.=</span><span style="color: #0000BB">$vowels</span><span style="color: #007700">[</span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">)];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$code</span><span style="color: #007700">.=</span><span style="color: #0000BB">$letters</span><span style="color: #007700">[</span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">20</span><span style="color: #007700">)];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$code</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates a new verification code.</p>


<div class="detailHeader" id="getSessionKey-detail">
getSessionKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getSessionKey</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the session variable name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php#L219">yii\web\widgets\captcha\CCaptchaAction.php#L219</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSessionKey</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">SESSION_VAR_PREFIX&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'.'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getUniqueId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'.'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the session variable name used to store verification code.</p>


<div class="detailHeader" id="getVerifyCode-detail">
getVerifyCode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getVerifyCode</b>(boolean $regenerate=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$regenerate</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the verification code should be regenerated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the verification code.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php#L152">yii\web\widgets\captcha\CCaptchaAction.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getVerifyCode</span><span style="color: #007700">(</span><span style="color: #0000BB">$regenerate</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fixedVerifyCode&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fixedVerifyCode</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$session&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">session</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$session</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSessionKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$session</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;===&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$regenerate</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$session</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateVerifyCode</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$session</span><span style="color: #007700">[</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'count'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$session</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Gets the verification code.</p>


<div class="detailHeader" id="renderImage-detail">
renderImage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderImage</b>(string $code)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the verification code</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php#L228">yii\web\widgets\captcha\CCaptchaAction.php#L228</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">backend</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">CCaptcha</span><span style="color: #007700">::</span><span style="color: #0000BB">checkRequirements</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagick'</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">backend</span><span style="color: #007700">===</span><span style="color: #DD0000">'imagick'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderImageImagick</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">backend</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">CCaptcha</span><span style="color: #007700">::</span><span style="color: #0000BB">checkRequirements</span><span style="color: #007700">(</span><span style="color: #DD0000">'gd'</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">backend</span><span style="color: #007700">===</span><span style="color: #DD0000">'gd'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderImageGD</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders the CAPTCHA image based on the code using library specified in the $backend property.</p>


<div class="detailHeader" id="renderImageGD-detail">
renderImageGD()
<span class="detailHeaderTag">
method
(available since v1.1.13)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderImageGD</b>(string $code)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the verification code</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php#L241">yii\web\widgets\captcha\CCaptchaAction.php#L241</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderImageGD</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$image&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$backColor&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int)(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">backColor&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">0x1000000&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">0x10000</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int)(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">backColor&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">0x10000&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">0x100</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">backColor&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">0x100</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagefilledrectangle</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height</span><span style="color: #007700">,</span><span style="color: #0000BB">$backColor</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagecolordeallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">,</span><span style="color: #0000BB">$backColor</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">transparent</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagecolortransparent</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">,</span><span style="color: #0000BB">$backColor</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$foreColor&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int)(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreColor&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">0x1000000&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">0x10000</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int)(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreColor&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">0x10000&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">0x100</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreColor&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">0x100</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontFile&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontFile&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'/SpicyRice.ttf'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$length&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$box&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagettfbbox</span><span style="color: #007700">(</span><span style="color: #0000BB">30</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$w&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$box</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]&nbsp;-&nbsp;</span><span style="color: #0000BB">$box</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset&nbsp;</span><span style="color: #007700">*&nbsp;(</span><span style="color: #0000BB">$length&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$h&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$box</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;-&nbsp;</span><span style="color: #0000BB">$box</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scale&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">min</span><span style="color: #007700">((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">padding&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">$w</span><span style="color: #007700">,(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">padding&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">$h</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">27&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">40</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$length</span><span style="color: #007700">;&nbsp;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fontSize&nbsp;</span><span style="color: #007700">=&nbsp;(int)(</span><span style="color: #0000BB">rand</span><span style="color: #007700">(</span><span style="color: #0000BB">26</span><span style="color: #007700">,</span><span style="color: #0000BB">32</span><span style="color: #007700">)&nbsp;*&nbsp;</span><span style="color: #0000BB">$scale&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">0.8</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$angle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">rand</span><span style="color: #007700">(-</span><span style="color: #0000BB">10</span><span style="color: #007700">,</span><span style="color: #0000BB">10</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$letter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$code</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$box&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagettftext</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">,</span><span style="color: #0000BB">$fontSize</span><span style="color: #007700">,</span><span style="color: #0000BB">$angle</span><span style="color: #007700">,</span><span style="color: #0000BB">$x</span><span style="color: #007700">,</span><span style="color: #0000BB">$y</span><span style="color: #007700">,</span><span style="color: #0000BB">$foreColor</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$letter</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$box</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]&nbsp;+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagecolordeallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">,</span><span style="color: #0000BB">$foreColor</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Pragma:&nbsp;public'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Expires:&nbsp;0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Cache-Control:&nbsp;must-revalidate,&nbsp;post-check=0,&nbsp;pre-check=0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Transfer-Encoding:&nbsp;binary'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type:&nbsp;image/png"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagepng</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagedestroy</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders the CAPTCHA image based on the code using GD library.</p>


<div class="detailHeader" id="renderImageImagick-detail">
renderImageImagick()
<span class="detailHeaderTag">
method
(available since v1.1.13)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderImageImagick</b>(string $code)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the verification code</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php#L295">yii\web\widgets\captcha\CCaptchaAction.php#L295</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderImageImagick</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$backColor</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">transparent&nbsp;</span><span style="color: #007700">?&nbsp;new&nbsp;</span><span style="color: #0000BB">ImagickPixel</span><span style="color: #007700">(</span><span style="color: #DD0000">'transparent'</span><span style="color: #007700">)&nbsp;:&nbsp;new&nbsp;</span><span style="color: #0000BB">ImagickPixel</span><span style="color: #007700">(</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'#%06x'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">backColor</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$foreColor</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ImagickPixel</span><span style="color: #007700">(</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'#%06x'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreColor</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$image</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">Imagick</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$image</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height</span><span style="color: #007700">,</span><span style="color: #0000BB">$backColor</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontFile</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontFile</span><span style="color: #007700">=</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">).</span><span style="color: #DD0000">'/SpicyRice.ttf'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$draw</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ImagickDraw</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFont</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFontSize</span><span style="color: #007700">(</span><span style="color: #0000BB">30</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fontMetrics</span><span style="color: #007700">=</span><span style="color: #0000BB">$image</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryFontMetrics</span><span style="color: #007700">(</span><span style="color: #0000BB">$draw</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$length</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$w</span><span style="color: #007700">=(int)(</span><span style="color: #0000BB">$fontMetrics</span><span style="color: #007700">[</span><span style="color: #DD0000">'textWidth'</span><span style="color: #007700">])-</span><span style="color: #0000BB">8</span><span style="color: #007700">+</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">*(</span><span style="color: #0000BB">$length</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$h</span><span style="color: #007700">=(int)(</span><span style="color: #0000BB">$fontMetrics</span><span style="color: #007700">[</span><span style="color: #DD0000">'textHeight'</span><span style="color: #007700">])-</span><span style="color: #0000BB">8</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scale</span><span style="color: #007700">=</span><span style="color: #0000BB">min</span><span style="color: #007700">((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width</span><span style="color: #007700">-</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">padding</span><span style="color: #007700">*</span><span style="color: #0000BB">2</span><span style="color: #007700">)/</span><span style="color: #0000BB">$w</span><span style="color: #007700">,(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height</span><span style="color: #007700">-</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">padding</span><span style="color: #007700">*</span><span style="color: #0000BB">2</span><span style="color: #007700">)/</span><span style="color: #0000BB">$h</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">=</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">=</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height</span><span style="color: #007700">*</span><span style="color: #0000BB">27</span><span style="color: #007700">/</span><span style="color: #0000BB">40</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$length</span><span style="color: #007700">;&nbsp;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$draw</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ImagickDraw</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFont</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fontFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFontSize</span><span style="color: #007700">((int)(</span><span style="color: #0000BB">rand</span><span style="color: #007700">(</span><span style="color: #0000BB">26</span><span style="color: #007700">,</span><span style="color: #0000BB">32</span><span style="color: #007700">)*</span><span style="color: #0000BB">$scale</span><span style="color: #007700">*</span><span style="color: #0000BB">0.8</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$draw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFillColor</span><span style="color: #007700">(</span><span style="color: #0000BB">$foreColor</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$image</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">annotateImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$draw</span><span style="color: #007700">,</span><span style="color: #0000BB">$x</span><span style="color: #007700">,</span><span style="color: #0000BB">$y</span><span style="color: #007700">,</span><span style="color: #0000BB">rand</span><span style="color: #007700">(-</span><span style="color: #0000BB">10</span><span style="color: #007700">,</span><span style="color: #0000BB">10</span><span style="color: #007700">),</span><span style="color: #0000BB">$code</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fontMetrics</span><span style="color: #007700">=</span><span style="color: #0000BB">$image</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryFontMetrics</span><span style="color: #007700">(</span><span style="color: #0000BB">$draw</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">+=(int)(</span><span style="color: #0000BB">$fontMetrics</span><span style="color: #007700">[</span><span style="color: #DD0000">'textWidth'</span><span style="color: #007700">])+</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Pragma:&nbsp;public'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Expires:&nbsp;0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Cache-Control:&nbsp;must-revalidate,&nbsp;post-check=0,&nbsp;pre-check=0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Transfer-Encoding:&nbsp;binary'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type:&nbsp;image/png"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$image</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setImageFormat</span><span style="color: #007700">(</span><span style="color: #DD0000">'png'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$image</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the CAPTCHA image based on the code using ImageMagick library.</p>


<div class="detailHeader" id="run-detail">
run()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>run</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php#L116">yii\web\widgets\captcha\CCaptchaAction.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REFRESH_GET_VAR</span><span style="color: #007700">]))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;AJAX&nbsp;request&nbsp;for&nbsp;regenerating&nbsp;code<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$code</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getVerifyCode</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CJSON</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'hash1'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateValidationHash</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'hash2'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateValidationHash</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;we&nbsp;add&nbsp;a&nbsp;random&nbsp;'v'&nbsp;parameter&nbsp;so&nbsp;that&nbsp;FireFox&nbsp;can&nbsp;refresh&nbsp;the&nbsp;image<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;when&nbsp;src&nbsp;attribute&nbsp;of&nbsp;image&nbsp;tag&nbsp;is&nbsp;changed<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'url'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">(),array(</span><span style="color: #DD0000">'v'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">uniqid</span><span style="color: #007700">())),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getVerifyCode</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Runs the action.</p>


<div class="detailHeader" id="validate-detail">
validate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>validate</b>(string $input, boolean $caseSensitive)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$input</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">user input</td>
</tr>
<tr>
  <td class="paramNameCol">$caseSensitive</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the comparison should be case-sensitive</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the input is valid</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\captcha\CCaptchaAction.php#L174">yii\web\widgets\captcha\CCaptchaAction.php#L174</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">validate</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">,</span><span style="color: #0000BB">$caseSensitive</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$code&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getVerifyCode</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$valid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$caseSensitive&nbsp;</span><span style="color: #007700">?&nbsp;(</span><span style="color: #0000BB">$input&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">$code</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$session&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">session</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$session</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSessionKey</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'count'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$session</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$session</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$session</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">testLimit&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">testLimit&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getVerifyCode</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$valid</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Validates the input to see if it matches the generated code.</p>


