<?php
$this->pageTitle = $this->pageHeading = 'TbFileUpload';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbFileUpload';
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
  <td><?php echo CHtml::link('booster.widgets.forms.inputs', array('/site/doc', '#' => 'booster.widgets.forms.inputs')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbFileUpload &raquo;
<?php echo CHtml::link('CJuiInputWidget', array('/site/doc', 'view' => 'CJuiInputWidget')); ?> &raquo;
<?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFileUpload.php">booster/widgets/TbFileUpload.php</a></td>
</tr>
</table>

<div id="classDescription">
Class TbFileUpload
<br/><br/>
Modified version from the great implementation of XUpload Yii Extension</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="attribute">
  <td><?php echo CHtml::link('attribute', array('/site/doc', 'view' => 'CJuiInputWidget', '#' => 'attribute-detail')); ?></td>
  <td>string</td>
  <td>the attribute associated with this widget.</td>
  <td><?php echo CHtml::link('CJuiInputWidget', array('/site/doc', 'view' => 'CJuiInputWidget')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="cssFile">
  <td><?php echo CHtml::link('cssFile', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'cssFile-detail')); ?></td>
  <td>mixed</td>
  <td>the theme CSS file name.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
<tr id="downloadTemplate">
  <td><?php echo CHtml::link('downloadTemplate', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'downloadTemplate-detail')); ?></td>
  <td></td>
  <td>The template id to display files available for download</td>
  <td>TbFileUpload</td>
</tr>
<tr id="downloadView">
  <td><?php echo CHtml::link('downloadView', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'downloadView-detail')); ?></td>
  <td>string</td>
  <td>name of the download view to be rendered</td>
  <td>TbFileUpload</td>
</tr>
<tr id="formView">
  <td><?php echo CHtml::link('formView', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'formView-detail')); ?></td>
  <td>string</td>
  <td>name of the form view to be rendered</td>
  <td>TbFileUpload</td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML attributes that should be rendered in the HTML tag representing the JUI widget.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="imageProcessing">
  <td><?php echo CHtml::link('imageProcessing', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'imageProcessing-detail')); ?></td>
  <td></td>
  <td>Whether or not to add the image processing pluing</td>
  <td>TbFileUpload</td>
</tr>
<tr class="inherited" id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'CJuiInputWidget', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td>the data model associated with this widget.</td>
  <td><?php echo CHtml::link('CJuiInputWidget', array('/site/doc', 'view' => 'CJuiInputWidget')); ?></td>
</tr>
<tr id="multiple">
  <td><?php echo CHtml::link('multiple', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'multiple-detail')); ?></td>
  <td>boolean</td>
  <td>set to true to use multiple file upload</td>
  <td>TbFileUpload</td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CJuiInputWidget', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the input name.</td>
  <td><?php echo CHtml::link('CJuiInputWidget', array('/site/doc', 'view' => 'CJuiInputWidget')); ?></td>
</tr>
<tr class="inherited" id="options">
  <td><?php echo CHtml::link('options', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'options-detail')); ?></td>
  <td>array</td>
  <td>the initial JavaScript options that should be passed to the JUI plugin.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="previewImages">
  <td><?php echo CHtml::link('previewImages', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'previewImages-detail')); ?></td>
  <td></td>
  <td>Wheter or not to preview image files before upload</td>
  <td>TbFileUpload</td>
</tr>
<tr id="previewImagesView">
  <td><?php echo CHtml::link('previewImagesView', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'previewImagesView-detail')); ?></td>
  <td>string</td>
  <td>name of the view to display images at bootstrap-slideshow</td>
  <td>TbFileUpload</td>
</tr>
<tr class="inherited" id="scriptFile">
  <td><?php echo CHtml::link('scriptFile', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'scriptFile-detail')); ?></td>
  <td>mixed</td>
  <td>the main JUI JavaScript file.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
<tr class="inherited" id="scriptUrl">
  <td><?php echo CHtml::link('scriptUrl', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'scriptUrl-detail')); ?></td>
  <td>string</td>
  <td>the root URL that contains all JUI JavaScript files.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="theme">
  <td><?php echo CHtml::link('theme', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'theme-detail')); ?></td>
  <td>string</td>
  <td>the JUI theme name.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
<tr class="inherited" id="themeUrl">
  <td><?php echo CHtml::link('themeUrl', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'themeUrl-detail')); ?></td>
  <td>string</td>
  <td>the root URL that contains all JUI theme folders.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
<tr id="uploadTemplate">
  <td><?php echo CHtml::link('uploadTemplate', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'uploadTemplate-detail')); ?></td>
  <td></td>
  <td>The upload template id to display files available for upload</td>
  <td>TbFileUpload</td>
</tr>
<tr id="uploadView">
  <td><?php echo CHtml::link('uploadView', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'uploadView-detail')); ?></td>
  <td>string</td>
  <td>name of the upload view to be rendered</td>
  <td>TbFileUpload</td>
</tr>
<tr id="url">
  <td><?php echo CHtml::link('url', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'url-detail')); ?></td>
  <td>string</td>
  <td>the url to the upload handler</td>
  <td>TbFileUpload</td>
</tr>
<tr class="inherited" id="value">
  <td><?php echo CHtml::link('value', array('/site/doc', 'view' => 'CJuiInputWidget', '#' => 'value-detail')); ?></td>
  <td>string</td>
  <td>the input value.</td>
  <td><?php echo CHtml::link('CJuiInputWidget', array('/site/doc', 'view' => 'CJuiInputWidget')); ?></td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'init-detail')); ?></td>
  <td>Widget initialization</td>
  <td>TbFileUpload</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers and publishes required scripts</td>
  <td>TbFileUpload</td>
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
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'run-detail')); ?></td>
  <td>Generates the required HTML and Javascript</td>
  <td>TbFileUpload</td>
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
<tr class="inherited" id="hasModel">
  <td><?php echo CHtml::link('hasModel()', array('/site/doc', 'view' => 'CJuiInputWidget', '#' => 'hasModel-detail')); ?></td>
  <td>Determines whether this widget is associated with a data model.</td>
  <td><?php echo CHtml::link('CJuiInputWidget', array('/site/doc', 'view' => 'CJuiInputWidget')); ?></td>
</tr>
<tr class="inherited" id="registerCoreScripts">
  <td><?php echo CHtml::link('registerCoreScripts()', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'registerCoreScripts-detail')); ?></td>
  <td>Registers the core script files.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
<tr class="inherited" id="registerScriptFile">
  <td><?php echo CHtml::link('registerScriptFile()', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'registerScriptFile-detail')); ?></td>
  <td>Registers a JavaScript file under <?php echo CHtml::link('scriptUrl', array('/site/doc', 'view' => 'TbFileUpload', '#' => 'scriptUrl')); ?>.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
<tr class="inherited" id="resolveNameID">
  <td><?php echo CHtml::link('resolveNameID()', array('/site/doc', 'view' => 'CJuiInputWidget', '#' => 'resolveNameID-detail')); ?></td>
  <td>Resolves name and ID of the input. Source property of the name and/or source property of the attribute</td>
  <td><?php echo CHtml::link('CJuiInputWidget', array('/site/doc', 'view' => 'CJuiInputWidget')); ?></td>
</tr>
<tr class="inherited" id="resolvePackagePath">
  <td><?php echo CHtml::link('resolvePackagePath()', array('/site/doc', 'view' => 'CJuiWidget', '#' => 'resolvePackagePath-detail')); ?></td>
  <td>Determine the JUI package installation path.</td>
  <td><?php echo CHtml::link('CJuiWidget', array('/site/doc', 'view' => 'CJuiWidget')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="downloadTemplate-detail">
downloadTemplate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$downloadTemplate</b>;</div>

<p>The template id to display files available for download
defaults to null, meaning using the built-in template</p>


<div class="detailHeader" id="downloadView-detail">
downloadView<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$downloadView</b>;</div>

<p>name of the download view to be rendered</p>


<div class="detailHeader" id="formView-detail">
formView<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$formView</b>;</div>

<p>name of the form view to be rendered</p>


<div class="detailHeader" id="imageProcessing-detail">
imageProcessing<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$imageProcessing</b>;</div>

<p>Whether or not to add the image processing pluing</p>


<div class="detailHeader" id="multiple-detail">
multiple<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$multiple</b>;</div>

<p>set to true to use multiple file upload</p>


<div class="detailHeader" id="previewImages-detail">
previewImages<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$previewImages</b>;</div>

<p>Wheter or not to preview image files before upload</p>


<div class="detailHeader" id="previewImagesView-detail">
previewImagesView<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$previewImagesView</b>;</div>

<p>name of the view to display images at bootstrap-slideshow</p>


<div class="detailHeader" id="uploadTemplate-detail">
uploadTemplate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$uploadTemplate</b>;</div>

<p>The upload template id to display files available for upload
defaults to null, meaning using the built-in template</p>


<div class="detailHeader" id="uploadView-detail">
uploadView<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$uploadView</b>;</div>

<p>name of the upload view to be rendered</p>


<div class="detailHeader" id="url-detail">
url<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$url</b>;</div>

<p>the url to the upload handler</p>


<h2>Method Details</h2>

<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFileUpload.php#L82">booster/widgets/TbFileUpload.php#L82</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">uploadTemplate&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">uploadTemplate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"#template-upload"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">downloadTemplate&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">downloadTemplate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"#template-download"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'enctype'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'enctype'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'multipart/form-data'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Widget initialization</p>


<div class="detailHeader" id="registerClientScript-detail">
registerClientScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerClientScript</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFileUpload.php#L152">booster/widgets/TbFileUpload.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetCss</span><span style="color: #007700">(</span><span style="color: #DD0000">'fileupload/jquery.fileupload-ui.css'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Upgrade&nbsp;widget&nbsp;factory<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;@todo&nbsp;remove&nbsp;when&nbsp;jquery.ui&nbsp;1.9+&nbsp;is&nbsp;fully&nbsp;integrated&nbsp;into&nbsp;stable&nbsp;Yii&nbsp;versions<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'fileupload/vendor/jquery.ui.widget.js'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//The&nbsp;Templates&nbsp;plugin&nbsp;is&nbsp;included&nbsp;to&nbsp;render&nbsp;the&nbsp;upload/download&nbsp;listings<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">"fileupload/tmpl.min.js"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">previewImages&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">imageProcessing</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">"fileupload/load-image.min.js"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">"fileupload/canvas-to-blob.min.js"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;gallery&nbsp;:)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetCss</span><span style="color: #007700">(</span><span style="color: #DD0000">"bootstrap-image-gallery.min.css"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">"bootstrap-image-gallery.min.js"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//The&nbsp;Iframe&nbsp;Transport&nbsp;is&nbsp;required&nbsp;for&nbsp;browsers&nbsp;without&nbsp;support&nbsp;for&nbsp;XHR&nbsp;file&nbsp;uploads<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'fileupload/jquery.iframe-transport.js'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'fileupload/jquery.fileupload.js'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;The&nbsp;File&nbsp;Upload&nbsp;image&nbsp;processing&nbsp;plugin<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">imageProcessing</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'fileupload/jquery.fileupload-ip.js'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;The&nbsp;File&nbsp;Upload&nbsp;file&nbsp;processing&nbsp;plugin<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">previewImages</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'fileupload/jquery.fileupload-fp.js'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;locale<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'fileupload/jquery.fileupload-locale.js'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//The&nbsp;File&nbsp;Upload&nbsp;user&nbsp;interface&nbsp;plugin<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'fileupload/jquery.fileupload-ui.js'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"jQuery('#</span><span style="color: #007700">{</span><span style="color: #0000BB">$id</span><span style="color: #007700">}</span><span style="color: #DD0000">').fileupload(</span><span style="color: #007700">{</span><span style="color: #0000BB">$options</span><span style="color: #007700">}</span><span style="color: #DD0000">);"</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers and publishes required scripts</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFileUpload.php#L102">booster/widgets/TbFileUpload.php#L102</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasModel</span><span style="color: #007700">()&nbsp;?&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">'fileupload'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'-form'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">url</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;acceptFileTypes&nbsp;is&nbsp;not&nbsp;set&nbsp;as&nbsp;option,&nbsp;try&nbsp;getting&nbsp;it&nbsp;from&nbsp;models&nbsp;rules<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">[</span><span style="color: #DD0000">'acceptFileTypes'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileTypes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFileValidatorProperty</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'types'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileTypes&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">':jpg:'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">':jpe:'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">':jpg:'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jpe?g'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileTypes<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">[</span><span style="color: #DD0000">'acceptFileTypes'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'js:/(\.)('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">':,:'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'|'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">')$/i'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;maxFileSize&nbsp;is&nbsp;not&nbsp;set&nbsp;as&nbsp;option,&nbsp;try&nbsp;getting&nbsp;it&nbsp;from&nbsp;models&nbsp;rules<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxFileSize'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileSize&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFileValidatorProperty</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'maxSize'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$fileSize</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxFileSize'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$fileSize</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiple</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">"multiple"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">uploadView</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">downloadView</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formView</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">previewImages&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">imageProcessing</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">previewImagesView</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Generates the required HTML and Javascript</p>


