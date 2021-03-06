<?php
$this->pageTitle = $this->pageHeading = 'YdDropzone';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdDropzone';
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
  <td>class YdDropzone &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdDropzone.php">dressing/widgets/YdDropzone.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Konstantinos Thermos</td>
</tr>
</table>

<div id="classDescription">
Yii extension to the drag n drop HTML5 file upload Dropzone.js
For more info, see @link http://www.dropzonejs.com/</div>
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
<tr class="inherited" id="actionPrefix">
  <td><?php echo CHtml::link('actionPrefix', array('/site/doc', 'view' => 'CWidget', '#' => 'actionPrefix-detail')); ?></td>
  <td>string</td>
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'YdDropzone', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="attribute">
  <td><?php echo CHtml::link('attribute', array('/site/doc', 'view' => 'YdDropzone', '#' => 'attribute-detail')); ?></td>
  <td>string</td>
  <td>The attribute of the model</td>
  <td>YdDropzone</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="mimeTypes">
  <td><?php echo CHtml::link('mimeTypes', array('/site/doc', 'view' => 'YdDropzone', '#' => 'mimeTypes-detail')); ?></td>
  <td>array</td>
  <td>An array of supported MIME types</td>
  <td>YdDropzone</td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'YdDropzone', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td>The model for the file field</td>
  <td>YdDropzone</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'YdDropzone', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>The name of the file field</td>
  <td>YdDropzone</td>
</tr>
<tr id="onAddedFile">
  <td><?php echo CHtml::link('onAddedFile', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onAddedFile-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdDropzone</td>
</tr>
<tr id="onCanceled">
  <td><?php echo CHtml::link('onCanceled', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onCanceled-detail')); ?></td>
  <td>string</td>
  <td>Called when a file upload gets canceled.</td>
  <td>YdDropzone</td>
</tr>
<tr id="onComplete">
  <td><?php echo CHtml::link('onComplete', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onComplete-detail')); ?></td>
  <td>string</td>
  <td>Called when the upload was either successful or erroneous.</td>
  <td>YdDropzone</td>
</tr>
<tr id="onError">
  <td><?php echo CHtml::link('onError', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onError-detail')); ?></td>
  <td>string</td>
  <td>An error occured.</td>
  <td>YdDropzone</td>
</tr>
<tr id="onMaxFilesExceeded">
  <td><?php echo CHtml::link('onMaxFilesExceeded', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onMaxFilesExceeded-detail')); ?></td>
  <td>string</td>
  <td>Called when the number of files accepted exceeds the maxFiles limit.</td>
  <td>YdDropzone</td>
</tr>
<tr id="onProcessing">
  <td><?php echo CHtml::link('onProcessing', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onProcessing-detail')); ?></td>
  <td>string</td>
  <td>When a file gets processed (since there is a queue not all files are processed immediately).</td>
  <td>YdDropzone</td>
</tr>
<tr id="onRemovedFile">
  <td><?php echo CHtml::link('onRemovedFile', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onRemovedFile-detail')); ?></td>
  <td>string</td>
  <td>Called whenever a file is removed from the list.</td>
  <td>YdDropzone</td>
</tr>
<tr id="onSelectedFiles">
  <td><?php echo CHtml::link('onSelectedFiles', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onSelectedFiles-detail')); ?></td>
  <td>string</td>
  <td>Receives an array of files and gets called whenever files are dropped or selected.</td>
  <td>YdDropzone</td>
</tr>
<tr id="onSending">
  <td><?php echo CHtml::link('onSending', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onSending-detail')); ?></td>
  <td>string</td>
  <td>Called just before each file is sent.</td>
  <td>YdDropzone</td>
</tr>
<tr id="onSuccess">
  <td><?php echo CHtml::link('onSuccess', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onSuccess-detail')); ?></td>
  <td>string</td>
  <td>The file has been uploaded successfully.</td>
  <td>YdDropzone</td>
</tr>
<tr id="onThumbnail">
  <td><?php echo CHtml::link('onThumbnail', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onThumbnail-detail')); ?></td>
  <td>string</td>
  <td>When the thumbnail has been generated.</td>
  <td>YdDropzone</td>
</tr>
<tr id="onUploadProgress">
  <td><?php echo CHtml::link('onUploadProgress', array('/site/doc', 'view' => 'YdDropzone', '#' => 'onUploadProgress-detail')); ?></td>
  <td>string</td>
  <td>Gets called periodically whenever the file upload progress changes.</td>
  <td>YdDropzone</td>
</tr>
<tr id="options">
  <td><?php echo CHtml::link('options', array('/site/doc', 'view' => 'YdDropzone', '#' => 'options-detail')); ?></td>
  <td>array</td>
  <td>An array of options that are supported by Dropzone</td>
  <td>YdDropzone</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="url">
  <td><?php echo CHtml::link('url', array('/site/doc', 'view' => 'YdDropzone', '#' => 'url-detail')); ?></td>
  <td>string</td>
  <td>The URL that handles the file upload</td>
  <td>YdDropzone</td>
</tr>
<tr class="inherited" id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CWidget', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CWidget', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="actions">
  <td><?php echo CHtml::link('actions()', array('/site/doc', 'view' => 'CWidget', '#' => 'actions-detail')); ?></td>
  <td>Returns a list of actions that are used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="beginCache">
  <td><?php echo CHtml::link('beginCache()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginCache-detail')); ?></td>
  <td>Begins fragment caching.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="beginClip">
  <td><?php echo CHtml::link('beginClip()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginClip-detail')); ?></td>
  <td>Begins recording a clip.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="beginContent">
  <td><?php echo CHtml::link('beginContent()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginContent-detail')); ?></td>
  <td>Begins the rendering of content that is to be decorated by the specified view.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="beginWidget">
  <td><?php echo CHtml::link('beginWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginWidget-detail')); ?></td>
  <td>Creates a widget and executes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
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
<tr class="inherited" id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a widget and initializes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
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
<tr class="inherited" id="endCache">
  <td><?php echo CHtml::link('endCache()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endCache-detail')); ?></td>
  <td>Ends fragment caching.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="endClip">
  <td><?php echo CHtml::link('endClip()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endClip-detail')); ?></td>
  <td>Ends recording a clip.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="endContent">
  <td><?php echo CHtml::link('endContent()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endContent-detail')); ?></td>
  <td>Ends the rendering of content.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="endWidget">
  <td><?php echo CHtml::link('endWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endWidget-detail')); ?></td>
  <td>Ends the execution of the named widget.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CWidget', '#' => 'getController-detail')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CWidget', '#' => 'getId-detail')); ?></td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getOwner">
  <td><?php echo CHtml::link('getOwner()', array('/site/doc', 'view' => 'CWidget', '#' => 'getOwner-detail')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getViewFile">
  <td><?php echo CHtml::link('getViewFile()', array('/site/doc', 'view' => 'CWidget', '#' => 'getViewFile-detail')); ?></td>
  <td>Looks for the view script file according to the view name.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getViewPath">
  <td><?php echo CHtml::link('getViewPath()', array('/site/doc', 'view' => 'CWidget', '#' => 'getViewPath-detail')); ?></td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CWidget', '#' => 'init-detail')); ?></td>
  <td>Initializes the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CWidget', '#' => 'render-detail')); ?></td>
  <td>Renders a view.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="renderInternal">
  <td><?php echo CHtml::link('renderInternal()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderInternal-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'YdDropzone', '#' => 'run-detail')); ?></td>
  <td>Create a div and the appropriate Javascript to make the div into the file upload area</td>
  <td>YdDropzone</td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CWidget', '#' => 'setId-detail')); ?></td>
  <td>Sets the ID of the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="widget">
  <td><?php echo CHtml::link('widget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget-detail')); ?></td>
  <td>Creates a widget and executes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="attribute-detail">
attribute<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$attribute</b>;</div>

<p>The attribute of the model</p>


<div class="detailHeader" id="mimeTypes-detail">
mimeTypes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$mimeTypes</b>;</div>

<p>An array of supported MIME types</p>


<div class="detailHeader" id="model-detail">
model<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> <b>$model</b>;</div>

<p>The model for the file field</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$name</b>;</div>

<p>The name of the file field</p>


<div class="detailHeader" id="onAddedFile-detail">
onAddedFile<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onAddedFile</b>;</div>

<p></p>


<div class="detailHeader" id="onCanceled-detail">
onCanceled<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onCanceled</b>;</div>

<p>Called when a file upload gets canceled.</p>


<div class="detailHeader" id="onComplete-detail">
onComplete<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onComplete</b>;</div>

<p>Called when the upload was either successful or erroneous.</p>


<div class="detailHeader" id="onError-detail">
onError<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onError</b>;</div>

<p>An error occured. Receives the errorMessage as second parameter and if the error was due to the XMLHttpRequest the xhr object as third.</p>


<div class="detailHeader" id="onMaxFilesExceeded-detail">
onMaxFilesExceeded<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onMaxFilesExceeded</b>;</div>

<p>Called when the number of files accepted exceeds the maxFiles limit.</p>


<div class="detailHeader" id="onProcessing-detail">
onProcessing<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onProcessing</b>;</div>

<p>When a file gets processed (since there is a queue not all files are processed immediately).</p>


<div class="detailHeader" id="onRemovedFile-detail">
onRemovedFile<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onRemovedFile</b>;</div>

<p>Called whenever a file is removed from the list. You can listen to this and delete the file from your server if you want to.</p>


<div class="detailHeader" id="onSelectedFiles-detail">
onSelectedFiles<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onSelectedFiles</b>;</div>

<p>Receives an array of files and gets called whenever files are dropped or selected.</p>


<div class="detailHeader" id="onSending-detail">
onSending<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onSending</b>;</div>

<p>Called just before each file is sent. Gets the xhr object and the formData objects as second and
third parameters, so you can modify them (for example to add a CSRF token) or add additional data.</p>


<div class="detailHeader" id="onSuccess-detail">
onSuccess<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onSuccess</b>;</div>

<p>The file has been uploaded successfully. Gets the server response as second argument.</p>


<div class="detailHeader" id="onThumbnail-detail">
onThumbnail<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onThumbnail</b>;</div>

<p>When the thumbnail has been generated. Receives the dataUrl as second parameter.</p>


<div class="detailHeader" id="onUploadProgress-detail">
onUploadProgress<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$onUploadProgress</b>;</div>

<p>Gets called periodically whenever the file upload progress changes.
Gets the progress parameter as second parameter which is a percentage (0-100) and the bytesSent parameter as
third which is the number of the bytes that have been sent to the server.  When an upload finishes dropzone
ensures that uploadprogress will be called with a percentage of 100 at least once.</p>


<div class="detailHeader" id="options-detail">
options<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$options</b>;</div>

<p>An array of options that are supported by Dropzone</p>


<div class="detailHeader" id="url-detail">
url<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$url</b>;</div>

<p>The URL that handles the file upload</p>


<h2>Method Details</h2>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdDropzone.php#L116">dressing/widgets/YdDropzone.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">url</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequestUri</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropzone'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CModel</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mimeTypes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mimeTypes</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$callbacks&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('addedfile',function(file){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onAddedFile</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('removedfile',function(file){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onRemovedFile</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('selectedfiles',function(files){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onSelectedFiles</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('thumbnail',function(file,&nbsp;dataUrl){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onThumbnail</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('error',function(file,&nbsp;errorMessage,&nbsp;xhr){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onError</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('processing',function(file){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onProcessing</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('uploadprogress',function(file,&nbsp;progress,&nbsp;bytesSent){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onUploadProgress</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('sending',function(file,&nbsp;xhr,&nbsp;formData){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onSending</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('success',function(file,&nbsp;response){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onSuccess</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('complete',function(file){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onComplete</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('canceled',function(file){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onCanceled</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"this.on('maxfilesexceeded',function(file){</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onMaxFilesExceeded</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'url'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">url</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'parallelUploads'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'paramName'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//'accept'&nbsp;=&gt;&nbsp;"js:function(file,&nbsp;done){if(jQuery.inArray(file.type,{$this-&gt;mimeTypes})&nbsp;==&nbsp;-1&nbsp;){done('File&nbsp;type&nbsp;not&nbsp;allowed.');}else{done();}}",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'init'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'js:function(){'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$callbacks</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'}'<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$script&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Dropzone.options.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$options</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssets</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$script</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Create a div and the appropriate Javascript to make the div into the file upload area</p>


