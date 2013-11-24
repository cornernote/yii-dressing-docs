<?php
$this->pageTitle = $this->pageHeading = 'CUploadedFile';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CUploadedFile';
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
  <td><?php echo CHtml::link('system.web', array('/site/doc', '#' => 'system.web')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CUploadedFile &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php">yii/web/CUploadedFile.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CUploadedFile represents the information for an uploaded file.
<br/><br/>
Call <?php echo CHtml::link('getInstance', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstance')); ?> to retrieve the instance of an uploaded file,
and then use <?php echo CHtml::link('saveAs', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'saveAs')); ?> to save it on the server.
You may also query other information about the file, including <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'name')); ?>,
<?php echo CHtml::link('tempName', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'tempName')); ?>, <?php echo CHtml::link('type', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'type')); ?>, <?php echo CHtml::link('size', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'size')); ?> and <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'error')); ?>.</div>
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
<tr id="error">
  <td><?php echo CHtml::link('error', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'error-detail')); ?></td>
  <td>integer</td>
  <td>Returns an error code describing the status of this file uploading.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="extensionName">
  <td><?php echo CHtml::link('extensionName', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'extensionName-detail')); ?></td>
  <td>string</td>
  <td>the file extension name for <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'name')); ?>.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="hasError">
  <td><?php echo CHtml::link('hasError', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'hasError-detail')); ?></td>
  <td>boolean</td>
  <td>whether there is an error with the uploaded file.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the original name of the file being uploaded</td>
  <td>CUploadedFile</td>
</tr>
<tr id="size">
  <td><?php echo CHtml::link('size', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'size-detail')); ?></td>
  <td>integer</td>
  <td>the actual size of the uploaded file in bytes</td>
  <td>CUploadedFile</td>
</tr>
<tr id="tempName">
  <td><?php echo CHtml::link('tempName', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'tempName-detail')); ?></td>
  <td>string</td>
  <td>the path of the uploaded file on the server.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>the MIME-type of the uploaded file (such as "image/gif").</td>
  <td>CUploadedFile</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CUploadedFile', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CUploadedFile</td>
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
<tr id="__toString">
  <td><?php echo CHtml::link('__toString()', array('/site/doc', 'view' => 'CUploadedFile', '#' => '__toString-detail')); ?></td>
  <td>String output.</td>
  <td>CUploadedFile</td>
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
<tr id="getError">
  <td><?php echo CHtml::link('getError()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getError-detail')); ?></td>
  <td>Returns an error code describing the status of this file uploading.</td>
  <td>CUploadedFile</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getExtensionName">
  <td><?php echo CHtml::link('getExtensionName()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getExtensionName-detail')); ?></td>
  <td>Returns the file extension name for <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'name')); ?>.
The extension name does not include the dot character. An empty string
is returned if <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'name')); ?> does not have an extension name.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="getHasError">
  <td><?php echo CHtml::link('getHasError()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getHasError-detail')); ?></td>
  <td>Returns whether there is an error with the uploaded file.
Check <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'error')); ?> for detailed error code information.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="getInstance">
  <td><?php echo CHtml::link('getInstance()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstance-detail')); ?></td>
  <td>Returns an instance of the specified uploaded file.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="getInstanceByName">
  <td><?php echo CHtml::link('getInstanceByName()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstanceByName-detail')); ?></td>
  <td>Returns an instance of the specified uploaded file.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="getInstances">
  <td><?php echo CHtml::link('getInstances()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstances-detail')); ?></td>
  <td>Returns all uploaded files for the given model attribute.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="getInstancesByName">
  <td><?php echo CHtml::link('getInstancesByName()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstancesByName-detail')); ?></td>
  <td>Returns an array of instances starting with specified array name.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getName-detail')); ?></td>
  <td>Returns the original name of the file being uploaded</td>
  <td>CUploadedFile</td>
</tr>
<tr id="getSize">
  <td><?php echo CHtml::link('getSize()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getSize-detail')); ?></td>
  <td>Returns the actual size of the uploaded file in bytes</td>
  <td>CUploadedFile</td>
</tr>
<tr id="getTempName">
  <td><?php echo CHtml::link('getTempName()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getTempName-detail')); ?></td>
  <td>Returns the path of the uploaded file on the server.
Note, this is a temporary file which will be automatically deleted by PHP
after the current request is processed.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="getType">
  <td><?php echo CHtml::link('getType()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getType-detail')); ?></td>
  <td>Returns the MIME-type of the uploaded file (such as "image/gif").
Since this MIME type is not checked on the server side, do not take this value for granted.
Instead, use <?php echo CHtml::link('CFileHelper::getMimeType', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getMimeType')); ?> to determine the exact MIME type.</td>
  <td>CUploadedFile</td>
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
<tr id="reset">
  <td><?php echo CHtml::link('reset()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'reset-detail')); ?></td>
  <td>Cleans up the loaded CUploadedFile instances.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="saveAs">
  <td><?php echo CHtml::link('saveAs()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'saveAs-detail')); ?></td>
  <td>Saves the uploaded file.</td>
  <td>CUploadedFile</td>
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
<tr id="collectFilesRecursive">
  <td><?php echo CHtml::link('collectFilesRecursive()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'collectFilesRecursive-detail')); ?></td>
  <td>Processes incoming files for <?php echo CHtml::link('getInstanceByName', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstanceByName')); ?>.</td>
  <td>CUploadedFile</td>
</tr>
<tr id="prefetchFiles">
  <td><?php echo CHtml::link('prefetchFiles()', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'prefetchFiles-detail')); ?></td>
  <td>Initially processes $_FILES superglobal for easier use.</td>
  <td>CUploadedFile</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="error-detail">
error<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getError</b>', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getError')); ?>()</div>

<p>Returns an error code describing the status of this file uploading.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/features.file-upload.errors.php">http://www.php.net/manual/en/features.file-upload.errors.php</a></li>
</ul>
</div>

<div class="detailHeader" id="extensionName-detail">
extensionName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getExtensionName</b>', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getExtensionName')); ?>()</div>

<p>the file extension name for <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'name')); ?>.
The extension name does not include the dot character. An empty string
is returned if <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'name')); ?> does not have an extension name.</p>


<div class="detailHeader" id="hasError-detail">
hasError<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getHasError</b>', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getHasError')); ?>()</div>

<p>whether there is an error with the uploaded file.
Check <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'error')); ?> for detailed error code information.</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getName</b>', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getName')); ?>()</div>

<p>the original name of the file being uploaded</p>


<div class="detailHeader" id="size-detail">
size<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getSize</b>', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getSize')); ?>()</div>

<p>the actual size of the uploaded file in bytes</p>


<div class="detailHeader" id="tempName-detail">
tempName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getTempName</b>', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getTempName')); ?>()</div>

<p>the path of the uploaded file on the server.
Note, this is a temporary file which will be automatically deleted by PHP
after the current request is processed.</p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getType</b>', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getType')); ?>()</div>

<p>the MIME-type of the uploaded file (such as "image/gif").
Since this MIME type is not checked on the server side, do not take this value for granted.
Instead, use <?php echo CHtml::link('CFileHelper::getMimeType', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getMimeType')); ?> to determine the exact MIME type.</p>


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
public void <b>__construct</b>(string $name, string $tempName, string $type, integer $size, integer $error)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the original name of the file being uploaded</td>
</tr>
<tr>
  <td class="paramNameCol">$tempName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the path of the uploaded file on the server.</td>
</tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the MIME-type of the uploaded file (such as "image/gif").</td>
</tr>
<tr>
  <td class="paramNameCol">$size</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the actual size of the uploaded file in bytes</td>
</tr>
<tr>
  <td class="paramNameCol">$error</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the error code</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L164">yii/web/CUploadedFile.php#L164</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$tempName</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$size</span><span style="color: #007700">,</span><span style="color: #0000BB">$error</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tempName</span><span style="color: #007700">=</span><span style="color: #0000BB">$tempName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_type</span><span style="color: #007700">=</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_size</span><span style="color: #007700">=</span><span style="color: #0000BB">$size</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_error</span><span style="color: #007700">=</span><span style="color: #0000BB">$error</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.
Use <?php echo CHtml::link('getInstance', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstance')); ?> to get an instance of an uploaded file.</p>


<div class="detailHeader" id="__toString-detail">
__toString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>__toString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the string representation of the object</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L179">yii/web/CUploadedFile.php#L179</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__toString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>String output.
This is PHP magic method that returns string representation of an object.
The implementation here returns the uploaded file's name.</p>


<div class="detailHeader" id="collectFilesRecursive-detail">
collectFilesRecursive()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static void <b>collectFilesRecursive</b>(string $key, mixed $names, mixed $tmp_names, mixed $types, mixed $sizes, mixed $errors)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">key for identifiing uploaded file: class name and subarray indexes</td>
</tr>
<tr>
  <td class="paramNameCol">$names</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">file names provided by PHP</td>
</tr>
<tr>
  <td class="paramNameCol">$tmp_names</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">temporary file names provided by PHP</td>
</tr>
<tr>
  <td class="paramNameCol">$types</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">filetypes provided by PHP</td>
</tr>
<tr>
  <td class="paramNameCol">$sizes</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">file sizes provided by PHP</td>
</tr>
<tr>
  <td class="paramNameCol">$errors</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">uploading issues provided by PHP</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L144">yii/web/CUploadedFile.php#L144</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">collectFilesRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tmp_names</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$sizes</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errors</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$names</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$names&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">collectFilesRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">.</span><span style="color: #DD0000">'['</span><span style="color: #007700">.</span><span style="color: #0000BB">$item</span><span style="color: #007700">.</span><span style="color: #DD0000">']'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">[</span><span style="color: #0000BB">$item</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$tmp_names</span><span style="color: #007700">[</span><span style="color: #0000BB">$item</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">[</span><span style="color: #0000BB">$item</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$sizes</span><span style="color: #007700">[</span><span style="color: #0000BB">$item</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$errors</span><span style="color: #007700">[</span><span style="color: #0000BB">$item</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;new&nbsp;</span><span style="color: #0000BB">CUploadedFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$names</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tmp_names</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$sizes</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errors</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Processes incoming files for <?php echo CHtml::link('getInstanceByName', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstanceByName')); ?>.</p>


<div class="detailHeader" id="getError-detail">
getError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getError</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the error code</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L249">yii/web/CUploadedFile.php#L249</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getError</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_error</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns an error code describing the status of this file uploading.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/features.file-upload.errors.php">http://www.php.net/manual/en/features.file-upload.errors.php</a></li>
</ul>
</div>

<div class="detailHeader" id="getExtensionName-detail">
getExtensionName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getExtensionName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the file extension name for <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'name')); ?>.
The extension name does not include the dot character. An empty string
is returned if <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'name')); ?> does not have an extension name.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L268">yii/web/CUploadedFile.php#L268</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getExtensionName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(string)</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getHasError-detail">
getHasError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getHasError</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether there is an error with the uploaded file.
Check <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'error')); ?> for detailed error code information.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L258">yii/web/CUploadedFile.php#L258</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHasError</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_error</span><span style="color: #007700">!=</span><span style="color: #0000BB">UPLOAD_ERR_OK</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getInstance-detail">
getInstance()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static CUploadedFile <b>getInstance</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the model instance</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name. For tabular file uploading, this can be in the format of "[$i]attributeName", where $i stands for an integer index.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CUploadedFile</td>
  <td class="paramDescCol">the instance of the uploaded file.
Null is returned if no file is uploaded for the specified model attribute.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L57">yii/web/CUploadedFile.php#L57</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstanceByName</span><span style="color: #007700">(</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Returns an instance of the specified uploaded file.
The file should be uploaded using <?php echo CHtml::link('CHtml::activeFileField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeFileField')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getInstanceByName', array('/site/doc', 'view' => 'CUploadedFile', '#' => 'getInstanceByName')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getInstanceByName-detail">
getInstanceByName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static CUploadedFile <b>getInstanceByName</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the file input field.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CUploadedFile</td>
  <td class="paramDescCol">the instance of the uploaded file.
Null is returned if no file is uploaded for the specified name.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L81">yii/web/CUploadedFile.php#L81</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getInstanceByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">null</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">prefetchFiles</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getError</span><span style="color: #007700">()!=</span><span style="color: #0000BB">UPLOAD_ERR_NO_FILE&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns an instance of the specified uploaded file.
The name can be a plain string or a string like an array element (e.g. 'Post[imageFile]', or 'Post[0][imageFile]').</p>


<div class="detailHeader" id="getInstances-detail">
getInstances()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static CUploadedFile[] <b>getInstances</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the model instance</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name. For tabular file uploading, this can be in the format of "[$i]attributeName", where $i stands for an integer index.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CUploadedFile[]</td>
  <td class="paramDescCol">array of CUploadedFile objects.
Empty array is returned if no available file was found for the given attribute.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L69">yii/web/CUploadedFile.php#L69</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getInstances</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstancesByName</span><span style="color: #007700">(</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Returns all uploaded files for the given model attribute.</p>


<div class="detailHeader" id="getInstancesByName-detail">
getInstancesByName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static CUploadedFile[] <b>getInstancesByName</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the array of files</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CUploadedFile[]</td>
  <td class="paramDescCol">the array of CUploadedFile objects. Empty array is returned
if no adequate upload was found. Please note that this array will contain
all files from all subarrays regardless how deeply nested they are.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L99">yii/web/CUploadedFile.php#L99</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getInstancesByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">null</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">prefetchFiles</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">0</span><span style="color: #007700">===</span><span style="color: #0000BB">strncmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'['</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getError</span><span style="color: #007700">()!=</span><span style="color: #0000BB">UPLOAD_ERR_NO_FILE</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns an array of instances starting with specified array name.
<br/><br/>
If multiple files were uploaded and saved as 'Files[0]', 'Files[1]',
'Files[n]'..., you can have them all by passing 'Files' as array name.</p>


<div class="detailHeader" id="getName-detail">
getName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the original name of the file being uploaded</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L211">yii/web/CUploadedFile.php#L211</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSize-detail">
getSize()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getSize</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the actual size of the uploaded file in bytes</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L239">yii/web/CUploadedFile.php#L239</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSize</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_size</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getTempName-detail">
getTempName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getTempName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the path of the uploaded file on the server.
Note, this is a temporary file which will be automatically deleted by PHP
after the current request is processed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L221">yii/web/CUploadedFile.php#L221</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTempName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tempName</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getType-detail">
getType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getType</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the MIME-type of the uploaded file (such as "image/gif").
Since this MIME type is not checked on the server side, do not take this value for granted.
Instead, use <?php echo CHtml::link('CFileHelper::getMimeType', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getMimeType')); ?> to determine the exact MIME type.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L231">yii/web/CUploadedFile.php#L231</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getType</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_type</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="prefetchFiles-detail">
prefetchFiles()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static void <b>prefetchFiles</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L126">yii/web/CUploadedFile.php#L126</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">prefetchFiles</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$_FILES&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$info</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">collectFilesRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'tmp_name'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'size'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'error'</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Initially processes $_FILES superglobal for easier use.
Only for internal usage.</p>


<div class="detailHeader" id="reset-detail">
reset()
<span class="detailHeaderTag">
method
(available since v1.1.4)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>reset</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L117">yii/web/CUploadedFile.php#L117</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">reset</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_files</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Cleans up the loaded CUploadedFile instances.
This method is mainly used by test scripts to set up a fixture.</p>


<div class="detailHeader" id="saveAs-detail">
saveAs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>saveAs</b>(string $file, boolean $deleteTempFile=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the file path used to save the uploaded file</td>
</tr>
<tr>
  <td class="paramNameCol">$deleteTempFile</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to delete the temporary file after saving.
If true, you will not be able to save the uploaded file again in the current request.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true whether the file is saved successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUploadedFile.php#L193">yii/web/CUploadedFile.php#L193</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">saveAs</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$deleteTempFile</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_error</span><span style="color: #007700">==</span><span style="color: #0000BB">UPLOAD_ERR_OK</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$deleteTempFile</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">move_uploaded_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tempName</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_uploaded_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tempName</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">copy</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tempName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Saves the uploaded file.
Note: this method uses php's move_uploaded_file() method. As such, if the target file ($file) 
already exists it is overwritten.</p>


