<?php
$this->pageTitle = $this->pageHeading = 'CFileValidator';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CFileValidator';
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
  <td>class CFileValidator &raquo;
<?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CFileValidator.php">yii\validators\CFileValidator.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CFileValidator verifies if an attribute is receiving a valid uploaded file.
<br/><br/>
It uses the model class and attribute name to retrieve the information
about the uploaded file. It then checks if a file is uploaded successfully,
if the file size is within the limit and if the file type is allowed.
<br/><br/>
This validator will attempt to fetch uploaded data if attribute is not
previously set. Please note that this cannot be done if input is tabular:
<pre>
 foreach($models as $i=&gt;$model)
    $model-&gt;attribute = CUploadedFile::getInstance($model, &quot;[$i]attribute&quot;);
</pre>
Please note that you must use <?php echo CHtml::link('CUploadedFile::getInstances', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstances')); ?> for multiple
file uploads.
<br/><br/>
When using CFileValidator with an active record, the following code is often used:
<pre>
 $model-&gt;attribute = CUploadedFile::getInstance($model, &quot;attribute&quot;);
 if($model-&gt;save())
 {
    // single upload
    $model-&gt;attribute-&gt;saveAs($path);
    // multiple upload
    foreach($model-&gt;attribute as $file)
       $file-&gt;saveAs($path);
 }
</pre>
<br/><br/>
You can use <?php echo CHtml::link('CFileValidator', array('/site/doc', 'view' => 'CFileValidator')); ?> to validate the file attribute.
<br/><br/>
In addition to the <?php echo CHtml::link('message', array('/site/doc', 'view' => 'CFileValidator', '#' => 'message')); ?> property for setting a custom error message,
CFileValidator has a few custom error messages you can set that correspond to different
validation scenarios. When the file is too large, you may use the <?php echo CHtml::link('tooLarge', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooLarge')); ?> property
to define a custom error message. Similarly for <?php echo CHtml::link('tooSmall', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooSmall')); ?>, <?php echo CHtml::link('wrongType', array('/site/doc', 'view' => 'CFileValidator', '#' => 'wrongType')); ?> and
<?php echo CHtml::link('tooMany', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooMany')); ?>. The messages may contain additional placeholders that will be replaced
with the actual content. In addition to the "{attribute}" placeholder, recognized by all
validators (see <?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?>), CFileValidator allows for the following placeholders
to be specified:
<ul>
<li>{file}: replaced with the name of the file.</li>
<li>{limit}: when using <?php echo CHtml::link('tooLarge', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooLarge')); ?>, replaced with <?php echo CHtml::link('maxSize', array('/site/doc', 'view' => 'CFileValidator', '#' => 'maxSize')); ?>;
when using <?php echo CHtml::link('tooSmall', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooSmall')); ?>, replaced with <?php echo CHtml::link('minSize', array('/site/doc', 'view' => 'CFileValidator', '#' => 'minSize')); ?>; and when using <?php echo CHtml::link('tooMany', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooMany')); ?>
replaced with <?php echo CHtml::link('maxFiles', array('/site/doc', 'view' => 'CFileValidator', '#' => 'maxFiles')); ?>.</li>
<li>{extensions}: when using <?php echo CHtml::link('wrongType', array('/site/doc', 'view' => 'CFileValidator', '#' => 'wrongType')); ?>, it will be replaced with the allowed extensions.</li>
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
<tr id="allowEmpty">
  <td><?php echo CHtml::link('allowEmpty', array('/site/doc', 'view' => 'CFileValidator', '#' => 'allowEmpty-detail')); ?></td>
  <td>boolean</td>
  <td>whether the attribute requires a file to be uploaded or not.</td>
  <td>CFileValidator</td>
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
<tr id="maxFiles">
  <td><?php echo CHtml::link('maxFiles', array('/site/doc', 'view' => 'CFileValidator', '#' => 'maxFiles-detail')); ?></td>
  <td>integer</td>
  <td>the maximum file count the given attribute can hold.</td>
  <td>CFileValidator</td>
</tr>
<tr id="maxSize">
  <td><?php echo CHtml::link('maxSize', array('/site/doc', 'view' => 'CFileValidator', '#' => 'maxSize-detail')); ?></td>
  <td>integer</td>
  <td>the maximum number of bytes required for the uploaded file.</td>
  <td>CFileValidator</td>
</tr>
<tr class="inherited" id="message">
  <td><?php echo CHtml::link('message', array('/site/doc', 'view' => 'CValidator', '#' => 'message-detail')); ?></td>
  <td>string</td>
  <td>the user-defined error message.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="mimeTypes">
  <td><?php echo CHtml::link('mimeTypes', array('/site/doc', 'view' => 'CFileValidator', '#' => 'mimeTypes-detail')); ?></td>
  <td>mixed</td>
  <td>a list of MIME-types of the file that are allowed to be uploaded.</td>
  <td>CFileValidator</td>
</tr>
<tr id="minSize">
  <td><?php echo CHtml::link('minSize', array('/site/doc', 'view' => 'CFileValidator', '#' => 'minSize-detail')); ?></td>
  <td>integer</td>
  <td>the minimum number of bytes required for the uploaded file.</td>
  <td>CFileValidator</td>
</tr>
<tr class="inherited" id="on">
  <td><?php echo CHtml::link('on', array('/site/doc', 'view' => 'CValidator', '#' => 'on-detail')); ?></td>
  <td>array</td>
  <td>list of scenarios that the validator should be applied.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="safe">
  <td><?php echo CHtml::link('safe', array('/site/doc', 'view' => 'CFileValidator', '#' => 'safe-detail')); ?></td>
  <td>boolean</td>
  <td>whether attributes listed with this validator should be considered safe for massive assignment.</td>
  <td>CFileValidator</td>
</tr>
<tr class="inherited" id="skipOnError">
  <td><?php echo CHtml::link('skipOnError', array('/site/doc', 'view' => 'CValidator', '#' => 'skipOnError-detail')); ?></td>
  <td>boolean</td>
  <td>whether this validation rule should be skipped when there is already a validation
error for the current attribute.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="tooLarge">
  <td><?php echo CHtml::link('tooLarge', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooLarge-detail')); ?></td>
  <td>string</td>
  <td>the error message used when the uploaded file is too large.</td>
  <td>CFileValidator</td>
</tr>
<tr id="tooMany">
  <td><?php echo CHtml::link('tooMany', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooMany-detail')); ?></td>
  <td>string</td>
  <td>the error message used if the count of multiple uploads exceeds
limit.</td>
  <td>CFileValidator</td>
</tr>
<tr id="tooSmall">
  <td><?php echo CHtml::link('tooSmall', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooSmall-detail')); ?></td>
  <td>string</td>
  <td>the error message used when the uploaded file is too small.</td>
  <td>CFileValidator</td>
</tr>
<tr id="types">
  <td><?php echo CHtml::link('types', array('/site/doc', 'view' => 'CFileValidator', '#' => 'types-detail')); ?></td>
  <td>mixed</td>
  <td>a list of file name extensions that are allowed to be uploaded.</td>
  <td>CFileValidator</td>
</tr>
<tr id="wrongMimeType">
  <td><?php echo CHtml::link('wrongMimeType', array('/site/doc', 'view' => 'CFileValidator', '#' => 'wrongMimeType-detail')); ?></td>
  <td>string</td>
  <td>the error message used when the uploaded file has a MIME-type
that is not listed among <?php echo CHtml::link('mimeTypes', array('/site/doc', 'view' => 'CFileValidator', '#' => 'mimeTypes')); ?>.</td>
  <td>CFileValidator</td>
</tr>
<tr id="wrongType">
  <td><?php echo CHtml::link('wrongType', array('/site/doc', 'view' => 'CFileValidator', '#' => 'wrongType-detail')); ?></td>
  <td>string</td>
  <td>the error message used when the uploaded file has an extension name
that is not listed among <?php echo CHtml::link('types', array('/site/doc', 'view' => 'CFileValidator', '#' => 'types')); ?>.</td>
  <td>CFileValidator</td>
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
<tr id="sizeLimit">
  <td><?php echo CHtml::link('sizeLimit', array('/site/doc', 'view' => 'CFileValidator', '#' => 'sizeLimit-detail')); ?></td>
  <td>integer</td>
  <td>Returns the maximum size allowed for uploaded files.</td>
  <td>CFileValidator</td>
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
<tr id="sizeToBytes">
  <td><?php echo CHtml::link('sizeToBytes()', array('/site/doc', 'view' => 'CFileValidator', '#' => 'sizeToBytes-detail')); ?></td>
  <td>Converts php.ini style size to bytes. Examples of size strings are: 150, 1g, 500k, 5M (size suffix</td>
  <td>CFileValidator</td>
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
<tr id="emptyAttribute">
  <td><?php echo CHtml::link('emptyAttribute()', array('/site/doc', 'view' => 'CFileValidator', '#' => 'emptyAttribute-detail')); ?></td>
  <td>Raises an error to inform end user about blank attribute.</td>
  <td>CFileValidator</td>
</tr>
<tr id="getSizeLimit">
  <td><?php echo CHtml::link('getSizeLimit()', array('/site/doc', 'view' => 'CFileValidator', '#' => 'getSizeLimit-detail')); ?></td>
  <td>Returns the maximum size allowed for uploaded files.</td>
  <td>CFileValidator</td>
</tr>
<tr class="inherited" id="isEmpty">
  <td><?php echo CHtml::link('isEmpty()', array('/site/doc', 'view' => 'CValidator', '#' => 'isEmpty-detail')); ?></td>
  <td>Checks if the given value is empty.</td>
  <td><?php echo CHtml::link('CValidator', array('/site/doc', 'view' => 'CValidator')); ?></td>
</tr>
<tr id="validateAttribute">
  <td><?php echo CHtml::link('validateAttribute()', array('/site/doc', 'view' => 'CFileValidator', '#' => 'validateAttribute-detail')); ?></td>
  <td>Set the attribute and then validates using <?php echo CHtml::link('validateFile', array('/site/doc', 'view' => 'CFileValidator', '#' => 'validateFile')); ?>.</td>
  <td>CFileValidator</td>
</tr>
<tr id="validateFile">
  <td><?php echo CHtml::link('validateFile()', array('/site/doc', 'view' => 'CFileValidator', '#' => 'validateFile-detail')); ?></td>
  <td>Internally validates a file object.</td>
  <td>CFileValidator</td>
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

<p>whether the attribute requires a file to be uploaded or not.
Defaults to false, meaning a file is required to be uploaded.</p>


<div class="detailHeader" id="maxFiles-detail">
maxFiles<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$maxFiles</b>;</div>

<p>the maximum file count the given attribute can hold.
It defaults to 1, meaning single file upload. By defining a higher number,
multiple uploads become possible.</p>


<div class="detailHeader" id="maxSize-detail">
maxSize<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$maxSize</b>;</div>

<p>the maximum number of bytes required for the uploaded file.
Defaults to null, meaning no limit.
Note, the size limit is also affected by 'upload_max_filesize' INI setting
and the 'MAX_FILE_SIZE' hidden field value.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('tooLarge', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooLarge')); ?></li>
</ul>
</div>

<div class="detailHeader" id="mimeTypes-detail">
mimeTypes<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public mixed <b>$mimeTypes</b>;</div>

<p>a list of MIME-types of the file that are allowed to be uploaded.
This can be either an array or a string consisting of MIME-types separated
by space or comma (e.g. "image/gif, image/jpeg"). MIME-types are
case-insensitive. Defaults to null, meaning all MIME-types are allowed.
In order to use this property fileinfo PECL extension should be installed.</p>


<div class="detailHeader" id="minSize-detail">
minSize<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$minSize</b>;</div>

<p>the minimum number of bytes required for the uploaded file.
Defaults to null, meaning no limit.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('tooSmall', array('/site/doc', 'view' => 'CFileValidator', '#' => 'tooSmall')); ?></li>
</ul>
</div>

<div class="detailHeader" id="safe-detail">
safe<span class="detailHeaderTag">
property
 (available since v1.1.12)
</span>
</div>

<div class="signature">
public boolean <b>$safe</b>;</div>

<p>whether attributes listed with this validator should be considered safe for massive assignment.
For this validator it defaults to false.</p>


<div class="detailHeader" id="sizeLimit-detail">
sizeLimit<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected integer <?php echo CHtml::link('<b>getSizeLimit</b>', array('/site/doc', 'view' => 'CFileValidator', '#' => 'getSizeLimit')); ?>()</div>

<p>Returns the maximum size allowed for uploaded files.
This is determined based on three factors:
<ul>
<li>'upload_max_filesize' in php.ini</li>
<li>'MAX_FILE_SIZE' hidden field</li>
<li><?php echo CHtml::link('maxSize', array('/site/doc', 'view' => 'CFileValidator', '#' => 'maxSize')); ?></li>
</ul></p>


<div class="detailHeader" id="tooLarge-detail">
tooLarge<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$tooLarge</b>;</div>

<p>the error message used when the uploaded file is too large.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('maxSize', array('/site/doc', 'view' => 'CFileValidator', '#' => 'maxSize')); ?></li>
</ul>
</div>

<div class="detailHeader" id="tooMany-detail">
tooMany<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$tooMany</b>;</div>

<p>the error message used if the count of multiple uploads exceeds
limit.</p>


<div class="detailHeader" id="tooSmall-detail">
tooSmall<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$tooSmall</b>;</div>

<p>the error message used when the uploaded file is too small.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('minSize', array('/site/doc', 'view' => 'CFileValidator', '#' => 'minSize')); ?></li>
</ul>
</div>

<div class="detailHeader" id="types-detail">
types<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$types</b>;</div>

<p>a list of file name extensions that are allowed to be uploaded.
This can be either an array or a string consisting of file extension names
separated by space or comma (e.g. "gif, jpg").
Extension names are case-insensitive. Defaults to null, meaning all file name
extensions are allowed.</p>


<div class="detailHeader" id="wrongMimeType-detail">
wrongMimeType<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public string <b>$wrongMimeType</b>;</div>

<p>the error message used when the uploaded file has a MIME-type
that is not listed among <?php echo CHtml::link('mimeTypes', array('/site/doc', 'view' => 'CFileValidator', '#' => 'mimeTypes')); ?>. In order to use this property
fileinfo PECL extension should be installed.</p>


<div class="detailHeader" id="wrongType-detail">
wrongType<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$wrongType</b>;</div>

<p>the error message used when the uploaded file has an extension name
that is not listed among <?php echo CHtml::link('types', array('/site/doc', 'view' => 'CFileValidator', '#' => 'types')); ?>.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="emptyAttribute-detail">
emptyAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>emptyAttribute</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $object, string $attribute)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CFileValidator.php#L252">yii\validators\CFileValidator.php#L252</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">emptyAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowEmpty</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{attribute}&nbsp;cannot&nbsp;be&nbsp;blank.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Raises an error to inform end user about blank attribute.</p>


<div class="detailHeader" id="getSizeLimit-detail">
getSizeLimit()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>getSizeLimit</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the size limit for uploaded files.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CFileValidator.php#L272">yii\validators\CFileValidator.php#L272</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSizeLimit</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'upload_max_filesize'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sizeToBytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$limit</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxSize</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxSize</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxSize</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'MAX_FILE_SIZE'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'MAX_FILE_SIZE'</span><span style="color: #007700">]&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'MAX_FILE_SIZE'</span><span style="color: #007700">]&lt;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'MAX_FILE_SIZE'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the maximum size allowed for uploaded files.
This is determined based on three factors:
<ul>
<li>'upload_max_filesize' in php.ini</li>
<li>'MAX_FILE_SIZE' hidden field</li>
<li><?php echo CHtml::link('maxSize', array('/site/doc', 'view' => 'CFileValidator', '#' => 'maxSize')); ?></li>
</ul></p>


<div class="detailHeader" id="sizeToBytes-detail">
sizeToBytes()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>sizeToBytes</b>(string $sizeStr)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sizeStr</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the size string to convert.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the byte count in the given size string.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CFileValidator.php#L294">yii\validators\CFileValidator.php#L294</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">sizeToBytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$sizeStr</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;the&nbsp;latest&nbsp;character<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">switch&nbsp;(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$sizeStr</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'m'</span><span style="color: #007700">:&nbsp;return&nbsp;(int)</span><span style="color: #0000BB">$sizeStr&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">1048576</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;1024&nbsp;*&nbsp;1024<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'k'</span><span style="color: #007700">:&nbsp;return&nbsp;(int)</span><span style="color: #0000BB">$sizeStr&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">1024</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;1024<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'g'</span><span style="color: #007700">:&nbsp;return&nbsp;(int)</span><span style="color: #0000BB">$sizeStr&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">1073741824</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;1024&nbsp;*&nbsp;1024&nbsp;*&nbsp;1024<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">default:&nbsp;return&nbsp;(int)</span><span style="color: #0000BB">$sizeStr</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;do&nbsp;nothing<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}</span>
</span>
</code></div>
</div>
<p>Converts php.ini style size to bytes. Examples of size strings are: 150, 1g, 500k, 5M (size suffix
is case insensitive). If you pass here the number with a fractional part, then everything after
the decimal point will be ignored (php.ini values common behavior). For example 1.5G value would be
treated as 1G and 1073741824 number will be returned as a result. This method is public
(was private before) since 1.1.11.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CFileValidator.php#L146">yii\validators\CFileValidator.php#L146</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">validateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxFiles&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$files</span><span style="color: #007700">=</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$files</span><span style="color: #007700">)&nbsp;||&nbsp;!isset(</span><span style="color: #0000BB">$files</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])&nbsp;||&nbsp;!</span><span style="color: #0000BB">$files</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">CUploadedFile</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$files&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CUploadedFile</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstances</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(array()===</span><span style="color: #0000BB">$files</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">emptyAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$files</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxFiles</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tooMany</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tooMany&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'{attribute}&nbsp;cannot&nbsp;accept&nbsp;more&nbsp;than&nbsp;{limit}&nbsp;files.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'{attribute}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'{limit}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxFiles</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$files&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CUploadedFile</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CUploadedFile</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">null</span><span style="color: #007700">===</span><span style="color: #0000BB">$file</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">emptyAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Set the attribute and then validates using <?php echo CHtml::link('validateFile', array('/site/doc', 'view' => 'CFileValidator', '#' => 'validateFile')); ?>.
If there is any error, the error message is added to the object.</p>


<div class="detailHeader" id="validateFile-detail">
validateFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>validateFile</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $object, string $attribute, <?php echo CHtml::link('CUploadedFile', array('/site/doc', 'view' => 'CUploadedFile')); ?> $file)</div>
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
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CUploadedFile', array('/site/doc', 'view' => 'CUploadedFile')); ?></td>
  <td class="paramDescCol">uploaded file passed to check against a set of rules</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\validators\CFileValidator.php#L184">yii\validators\CFileValidator.php#L184</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">validateFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">null</span><span style="color: #007700">===</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">||&nbsp;(</span><span style="color: #0000BB">$error</span><span style="color: #007700">=</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getError</span><span style="color: #007700">())==</span><span style="color: #0000BB">UPLOAD_ERR_NO_FILE</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">emptyAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$error</span><span style="color: #007700">==</span><span style="color: #0000BB">UPLOAD_ERR_INI_SIZE&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">==</span><span style="color: #0000BB">UPLOAD_ERR_FORM_SIZE&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxSize</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSize</span><span style="color: #007700">()&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxSize</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tooLarge</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tooLarge&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;file&nbsp;"{file}"&nbsp;is&nbsp;too&nbsp;large.&nbsp;Its&nbsp;size&nbsp;cannot&nbsp;exceed&nbsp;{limit}&nbsp;bytes.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'{limit}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSizeLimit</span><span style="color: #007700">()));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$error</span><span style="color: #007700">==</span><span style="color: #0000BB">UPLOAD_ERR_PARTIAL</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;file&nbsp;"{file}"&nbsp;was&nbsp;only&nbsp;partially&nbsp;uploaded.'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">())));<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$error</span><span style="color: #007700">==</span><span style="color: #0000BB">UPLOAD_ERR_NO_TMP_DIR</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Missing&nbsp;the&nbsp;temporary&nbsp;folder&nbsp;to&nbsp;store&nbsp;the&nbsp;uploaded&nbsp;file&nbsp;"{file}".'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">())));<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$error</span><span style="color: #007700">==</span><span style="color: #0000BB">UPLOAD_ERR_CANT_WRITE</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;write&nbsp;the&nbsp;uploaded&nbsp;file&nbsp;"{file}"&nbsp;to&nbsp;disk.'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">())));<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'UPLOAD_ERR_EXTENSION'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">==</span><span style="color: #0000BB">UPLOAD_ERR_EXTENSION</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;available&nbsp;for&nbsp;PHP&nbsp;5.2.0&nbsp;or&nbsp;above<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'A&nbsp;PHP&nbsp;extension&nbsp;stopped&nbsp;the&nbsp;file&nbsp;upload.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minSize</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSize</span><span style="color: #007700">()&lt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minSize</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tooSmall</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tooSmall&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;file&nbsp;"{file}"&nbsp;is&nbsp;too&nbsp;small.&nbsp;Its&nbsp;size&nbsp;cannot&nbsp;be&nbsp;smaller&nbsp;than&nbsp;{limit}&nbsp;bytes.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'{limit}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">minSize</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getExtensionName</span><span style="color: #007700">()),</span><span style="color: #0000BB">$types</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wrongType</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wrongType&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;file&nbsp;"{file}"&nbsp;cannot&nbsp;be&nbsp;uploaded.&nbsp;Only&nbsp;files&nbsp;with&nbsp;these&nbsp;extensions&nbsp;are&nbsp;allowed:&nbsp;{extensions}.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'{extensions}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$types</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mimeTypes</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'finfo_open'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$mimeType</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$info</span><span style="color: #007700">=</span><span style="color: #0000BB">finfo_open</span><span style="color: #007700">(</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'FILEINFO_MIME_TYPE'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">FILEINFO_MIME_TYPE&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">FILEINFO_MIME</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$mimeType</span><span style="color: #007700">=</span><span style="color: #0000BB">finfo_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$info</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTempName</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'mime_content_type'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$mimeType</span><span style="color: #007700">=</span><span style="color: #0000BB">mime_content_type</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTempName</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'In&nbsp;order&nbsp;to&nbsp;use&nbsp;MIME-type&nbsp;validation&nbsp;provided&nbsp;by&nbsp;CFileValidator&nbsp;fileinfo&nbsp;PECL&nbsp;extension&nbsp;should&nbsp;be&nbsp;installed.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mimeTypes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$mimeTypes</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mimeTypes</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$mimeTypes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mimeTypes</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$mimeType</span><span style="color: #007700">===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$mimeType</span><span style="color: #007700">),</span><span style="color: #0000BB">$mimeTypes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wrongMimeType</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wrongMimeType&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;file&nbsp;"{file}"&nbsp;cannot&nbsp;be&nbsp;uploaded.&nbsp;Only&nbsp;files&nbsp;of&nbsp;these&nbsp;MIME-types&nbsp;are&nbsp;allowed:&nbsp;{mimeTypes}.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addError</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'{mimeTypes}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$mimeTypes</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Internally validates a file object.</p>


