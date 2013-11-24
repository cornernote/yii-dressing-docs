<?php
$this->pageTitle = $this->pageHeading = 'TbInputInline';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbInputInline';
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
  <td>class TbInputInline &raquo;
<?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?> &raquo;
<?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?> &raquo;
<?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbInputSearch', array('/site/doc', 'view' => 'TbInputSearch')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>0.9.8</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php">booster/widgets/input/TbInputInline.php</a></td>
</tr>
</table>

<div id="classDescription">
## TbInputInline class
<br/><br/>
Bootstrap vertical form input widget.</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbInputInline', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="appendOptions">
  <td><?php echo CHtml::link('appendOptions', array('/site/doc', 'view' => 'TbInput', '#' => 'appendOptions-detail')); ?></td>
  <td>array</td>
  <td>append html attributes.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="appendText">
  <td><?php echo CHtml::link('appendText', array('/site/doc', 'view' => 'TbInput', '#' => 'appendText-detail')); ?></td>
  <td>string</td>
  <td>text to append.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="attribute">
  <td><?php echo CHtml::link('attribute', array('/site/doc', 'view' => 'CInputWidget', '#' => 'attribute-detail')); ?></td>
  <td>string</td>
  <td>the attribute associated with this widget.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="captchaOptions">
  <td><?php echo CHtml::link('captchaOptions', array('/site/doc', 'view' => 'TbInput', '#' => 'captchaOptions-detail')); ?></td>
  <td>array</td>
  <td>captcha html attributes.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="data">
  <td><?php echo CHtml::link('data', array('/site/doc', 'view' => 'TbInput', '#' => 'data-detail')); ?></td>
  <td>array</td>
  <td>the data for list inputs.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="enableAjaxValidation">
  <td><?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'TbInput', '#' => 'enableAjaxValidation-detail')); ?></td>
  <td>boolean</td>
  <td>This property allows you to disable AJAX valiadtion for certain fields within a form.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="enableClientValidation">
  <td><?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'TbInput', '#' => 'enableClientValidation-detail')); ?></td>
  <td>boolean</td>
  <td>This property allows you to disable client valiadtion for certain fields within a form.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="errorOptions">
  <td><?php echo CHtml::link('errorOptions', array('/site/doc', 'view' => 'TbInput', '#' => 'errorOptions-detail')); ?></td>
  <td>array</td>
  <td>error html attributes.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="form">
  <td><?php echo CHtml::link('form', array('/site/doc', 'view' => 'TbInput', '#' => 'form-detail')); ?></td>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
  <td>the associated form widget.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="hintOptions">
  <td><?php echo CHtml::link('hintOptions', array('/site/doc', 'view' => 'TbInput', '#' => 'hintOptions-detail')); ?></td>
  <td>array</td>
  <td>hint html attributes.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="hintText">
  <td><?php echo CHtml::link('hintText', array('/site/doc', 'view' => 'TbInput', '#' => 'hintText-detail')); ?></td>
  <td>string</td>
  <td>the hint text.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CInputWidget', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>additional HTML options to be rendered in the input tag</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="labelOptions">
  <td><?php echo CHtml::link('labelOptions', array('/site/doc', 'view' => 'TbInput', '#' => 'labelOptions-detail')); ?></td>
  <td>array</td>
  <td>label html attributes.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'CInputWidget', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td>the data model associated with this widget.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CInputWidget', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the input name.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="prependOptions">
  <td><?php echo CHtml::link('prependOptions', array('/site/doc', 'view' => 'TbInput', '#' => 'prependOptions-detail')); ?></td>
  <td>array</td>
  <td>prepend html attributes.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="prependText">
  <td><?php echo CHtml::link('prependText', array('/site/doc', 'view' => 'TbInput', '#' => 'prependText-detail')); ?></td>
  <td>string</td>
  <td>text to prepend.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'TbInput', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>the input type.</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="value">
  <td><?php echo CHtml::link('value', array('/site/doc', 'view' => 'CInputWidget', '#' => 'value-detail')); ?></td>
  <td>string</td>
  <td>the input value</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CWidget', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="addonCssClass">
  <td><?php echo CHtml::link('addonCssClass', array('/site/doc', 'view' => 'TbInput', '#' => 'addonCssClass-detail')); ?></td>
  <td>string</td>
  <td>### .getAddonCssClass()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="append">
  <td><?php echo CHtml::link('append', array('/site/doc', 'view' => 'TbInput', '#' => 'append-detail')); ?></td>
  <td>string</td>
  <td>### .getAppend()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="containerCssClass">
  <td><?php echo CHtml::link('containerCssClass', array('/site/doc', 'view' => 'TbInput', '#' => 'containerCssClass-detail')); ?></td>
  <td>string</td>
  <td>### .getContainerCssClass()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="error">
  <td><?php echo CHtml::link('error', array('/site/doc', 'view' => 'TbInput', '#' => 'error-detail')); ?></td>
  <td>string</td>
  <td>### .getError()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="hint">
  <td><?php echo CHtml::link('hint', array('/site/doc', 'view' => 'TbInput', '#' => 'hint-detail')); ?></td>
  <td>string</td>
  <td>### .getHint()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="label">
  <td><?php echo CHtml::link('label', array('/site/doc', 'view' => 'TbInput', '#' => 'label-detail')); ?></td>
  <td>string</td>
  <td>### .getLabel()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="prepend">
  <td><?php echo CHtml::link('prepend', array('/site/doc', 'view' => 'TbInput', '#' => 'prepend-detail')); ?></td>
  <td>string</td>
  <td>### .getPrepend()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="separatedSelectableInput">
  <td><?php echo CHtml::link('separatedSelectableInput', array('/site/doc', 'view' => 'TbInput', '#' => 'separatedSelectableInput-detail')); ?></td>
  <td>array</td>
  <td>Obtain separately hidden and visible field</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbInput', '#' => 'init-detail')); ?></td>
  <td>### .init()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
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
<tr class="inherited" id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'TbInput', '#' => 'run-detail')); ?></td>
  <td>### .run()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
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
<tr class="inherited" id="captcha">
  <td><?php echo CHtml::link('captcha()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'captcha-detail')); ?></td>
  <td>Renders a CAPTCHA.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="checkBox">
  <td><?php echo CHtml::link('checkBox()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'checkBox-detail')); ?></td>
  <td>Renders a checkbox.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="checkBoxGroupsList">
  <td><?php echo CHtml::link('checkBoxGroupsList()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'checkBoxGroupsList-detail')); ?></td>
  <td>Renders a list of checkboxes using Button Groups.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="checkBoxList">
  <td><?php echo CHtml::link('checkBoxList()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'checkBoxList-detail')); ?></td>
  <td>Renders a list of checkboxes.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="checkBoxListInline">
  <td><?php echo CHtml::link('checkBoxListInline()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'checkBoxListInline-detail')); ?></td>
  <td>Renders a list of inline checkboxes.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="ckEditor">
  <td><?php echo CHtml::link('ckEditor()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'ckEditor-detail')); ?></td>
  <td>Renders a ckEditor.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="colorpickerField">
  <td><?php echo CHtml::link('colorpickerField()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'colorpickerField-detail')); ?></td>
  <td>Renders a colorpicker field.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="customField">
  <td><?php echo CHtml::link('customField()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'customField-detail')); ?></td>
  <td>Renders a pre-rendered custom field</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="dateRangeField">
  <td><?php echo CHtml::link('dateRangeField()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'dateRangeField-detail')); ?></td>
  <td>Renders a daterange field.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr id="datepickerField">
  <td><?php echo CHtml::link('datepickerField()', array('/site/doc', 'view' => 'TbInputInline', '#' => 'datepickerField-detail')); ?></td>
  <td>Renders a datepicker field.</td>
  <td>TbInputInline</td>
</tr>
<tr id="datetimepickerField">
  <td><?php echo CHtml::link('datetimepickerField()', array('/site/doc', 'view' => 'TbInputInline', '#' => 'datetimepickerField-detail')); ?></td>
  <td>Renders a datetimepicker field.</td>
  <td>TbInputInline</td>
</tr>
<tr id="dropDownList">
  <td><?php echo CHtml::link('dropDownList()', array('/site/doc', 'view' => 'TbInputInline', '#' => 'dropDownList-detail')); ?></td>
  <td>Renders a drop down list (select).</td>
  <td>TbInputInline</td>
</tr>
<tr class="inherited" id="fileField">
  <td><?php echo CHtml::link('fileField()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'fileField-detail')); ?></td>
  <td>Renders a file field.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="getAddonCssClass">
  <td><?php echo CHtml::link('getAddonCssClass()', array('/site/doc', 'view' => 'TbInput', '#' => 'getAddonCssClass-detail')); ?></td>
  <td>### .getAddonCssClass()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="getAppend">
  <td><?php echo CHtml::link('getAppend()', array('/site/doc', 'view' => 'TbInput', '#' => 'getAppend-detail')); ?></td>
  <td>### .getAppend()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="getAttributeId">
  <td><?php echo CHtml::link('getAttributeId()', array('/site/doc', 'view' => 'TbInput', '#' => 'getAttributeId-detail')); ?></td>
  <td>### .getAppend()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="getContainerCssClass">
  <td><?php echo CHtml::link('getContainerCssClass()', array('/site/doc', 'view' => 'TbInput', '#' => 'getContainerCssClass-detail')); ?></td>
  <td>### .getContainerCssClass()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="getError">
  <td><?php echo CHtml::link('getError()', array('/site/doc', 'view' => 'TbInput', '#' => 'getError-detail')); ?></td>
  <td>### .getError()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="getHint">
  <td><?php echo CHtml::link('getHint()', array('/site/doc', 'view' => 'TbInput', '#' => 'getHint-detail')); ?></td>
  <td>### .getHint()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="getLabel">
  <td><?php echo CHtml::link('getLabel()', array('/site/doc', 'view' => 'TbInput', '#' => 'getLabel-detail')); ?></td>
  <td>### .getLabel()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="getPrepend">
  <td><?php echo CHtml::link('getPrepend()', array('/site/doc', 'view' => 'TbInput', '#' => 'getPrepend-detail')); ?></td>
  <td>### .getPrepend()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="getSeparatedSelectableInput">
  <td><?php echo CHtml::link('getSeparatedSelectableInput()', array('/site/doc', 'view' => 'TbInput', '#' => 'getSeparatedSelectableInput-detail')); ?></td>
  <td>Obtain separately hidden and visible field</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="hasAddOn">
  <td><?php echo CHtml::link('hasAddOn()', array('/site/doc', 'view' => 'TbInput', '#' => 'hasAddOn-detail')); ?></td>
  <td>### .hasAddOn()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="hasModel">
  <td><?php echo CHtml::link('hasModel()', array('/site/doc', 'view' => 'CInputWidget', '#' => 'hasModel-detail')); ?></td>
  <td>Determines whether this widget is associated with a data model.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="html5Editor">
  <td><?php echo CHtml::link('html5Editor()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'html5Editor-detail')); ?></td>
  <td>Renders a bootstrap wysihtml5 editor.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="markdownEditorJs">
  <td><?php echo CHtml::link('markdownEditorJs()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'markdownEditorJs-detail')); ?></td>
  <td>Renders a Markdown Editor.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr id="maskedTextField">
  <td><?php echo CHtml::link('maskedTextField()', array('/site/doc', 'view' => 'TbInputInline', '#' => 'maskedTextField-detail')); ?></td>
  <td>Renders a masked text field.</td>
  <td>TbInputInline</td>
</tr>
<tr class="inherited" id="numberField">
  <td><?php echo CHtml::link('numberField()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'numberField-detail')); ?></td>
  <td>Renders a number field.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="passfieldField">
  <td><?php echo CHtml::link('passfieldField()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'passfieldField-detail')); ?></td>
  <td>Renders a Pass*Field field.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr id="passwordField">
  <td><?php echo CHtml::link('passwordField()', array('/site/doc', 'view' => 'TbInputInline', '#' => 'passwordField-detail')); ?></td>
  <td>Renders a password field.</td>
  <td>TbInputInline</td>
</tr>
<tr class="inherited" id="processHtmlOptions">
  <td><?php echo CHtml::link('processHtmlOptions()', array('/site/doc', 'view' => 'TbInput', '#' => 'processHtmlOptions-detail')); ?></td>
  <td>### .processHtmlOptions()</td>
  <td><?php echo CHtml::link('TbInput', array('/site/doc', 'view' => 'TbInput')); ?></td>
</tr>
<tr class="inherited" id="radioButton">
  <td><?php echo CHtml::link('radioButton()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'radioButton-detail')); ?></td>
  <td>Renders a radio button.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="radioButtonGroupsList">
  <td><?php echo CHtml::link('radioButtonGroupsList()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'radioButtonGroupsList-detail')); ?></td>
  <td>Renders a list of radio buttons using Button Groups.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="radioButtonList">
  <td><?php echo CHtml::link('radioButtonList()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'radioButtonList-detail')); ?></td>
  <td>Renders a list of radio buttons.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="radioButtonListInline">
  <td><?php echo CHtml::link('radioButtonListInline()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'radioButtonListInline-detail')); ?></td>
  <td>Renders a list of inline radio buttons.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="redactorJs">
  <td><?php echo CHtml::link('redactorJs()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'redactorJs-detail')); ?></td>
  <td>Renders a redactorJs.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="resolveNameID">
  <td><?php echo CHtml::link('resolveNameID()', array('/site/doc', 'view' => 'CInputWidget', '#' => 'resolveNameID-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="select2Field">
  <td><?php echo CHtml::link('select2Field()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'select2Field-detail')); ?></td>
  <td>Renders a select2Field</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr id="setPlaceholder">
  <td><?php echo CHtml::link('setPlaceholder()', array('/site/doc', 'view' => 'TbInputInline', '#' => 'setPlaceholder-detail')); ?></td>
  <td></td>
  <td>TbInputInline</td>
</tr>
<tr id="textArea">
  <td><?php echo CHtml::link('textArea()', array('/site/doc', 'view' => 'TbInputInline', '#' => 'textArea-detail')); ?></td>
  <td>Renders a textarea.</td>
  <td>TbInputInline</td>
</tr>
<tr id="textField">
  <td><?php echo CHtml::link('textField()', array('/site/doc', 'view' => 'TbInputInline', '#' => 'textField-detail')); ?></td>
  <td>Renders a text field.</td>
  <td>TbInputInline</td>
</tr>
<tr class="inherited" id="timepickerField">
  <td><?php echo CHtml::link('timepickerField()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'timepickerField-detail')); ?></td>
  <td>Renders a timepicker field.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr class="inherited" id="toggleButton">
  <td><?php echo CHtml::link('toggleButton()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'toggleButton-detail')); ?></td>
  <td>Renders a toogle button</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
<tr id="typeAheadField">
  <td><?php echo CHtml::link('typeAheadField()', array('/site/doc', 'view' => 'TbInputInline', '#' => 'typeAheadField-detail')); ?></td>
  <td>Renders a masked text field.</td>
  <td>TbInputInline</td>
</tr>
<tr class="inherited" id="uneditableField">
  <td><?php echo CHtml::link('uneditableField()', array('/site/doc', 'view' => 'TbInputVertical', '#' => 'uneditableField-detail')); ?></td>
  <td>Renders an uneditable field.</td>
  <td><?php echo CHtml::link('TbInputVertical', array('/site/doc', 'view' => 'TbInputVertical')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="datepickerField-detail">
datepickerField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>datepickerField</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php#L95">booster/widgets/input/TbInputInline.php#L95</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">datepickerField</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'events'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$events&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'events'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'events'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPlaceholder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrepend</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbDatePicker'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'model'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attribute'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">:&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'events'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;isset(</span><span style="color: #0000BB">$events</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$events&nbsp;</span><span style="color: #007700">:&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAppend</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getError</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHint</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders a datepicker field.</p>


<div class="detailHeader" id="datetimepickerField-detail">
datetimepickerField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>datetimepickerField</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php#L128">booster/widgets/input/TbInputInline.php#L128</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">datetimepickerField</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'events'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$events&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'events'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'events'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPlaceholder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrepend</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbDateTimePicker'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'model'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attribute'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">:&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'events'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;isset(</span><span style="color: #0000BB">$events</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$events&nbsp;</span><span style="color: #007700">:&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAppend</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getError</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHint</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders a datetimepicker field.</p>


<div class="detailHeader" id="dropDownList-detail">
dropDownList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>dropDownList</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php#L26">booster/widgets/input/TbInputInline.php#L26</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">dropDownList</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLabel</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dropDownList</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a drop down list (select).</p>


<div class="detailHeader" id="maskedTextField-detail">
maskedTextField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>maskedTextField</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php#L70">booster/widgets/input/TbInputInline.php#L70</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">maskedTextField</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPlaceholder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrepend</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maskedTextField</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAppend</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders a masked text field.</p>


<div class="detailHeader" id="passwordField-detail">
passwordField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>passwordField</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php#L36">booster/widgets/input/TbInputInline.php#L36</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">passwordField</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPlaceholder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrepend</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">passwordField</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAppend</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders a password field.</p>


<div class="detailHeader" id="setPlaceholder-detail">
setPlaceholder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>setPlaceholder</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php#L156">booster/widgets/input/TbInputInline.php#L156</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">setPlaceholder</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'placeholder'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'placeholder'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="textArea-detail">
textArea()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>textArea</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php#L48">booster/widgets/input/TbInputInline.php#L48</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">textArea</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPlaceholder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">textArea</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a textarea.</p>


<div class="detailHeader" id="textField-detail">
textField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>textField</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php#L58">booster/widgets/input/TbInputInline.php#L58</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">textField</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPlaceholder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrepend</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">textField</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAppend</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders a text field.</p>


<div class="detailHeader" id="typeAheadField-detail">
typeAheadField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>typeAheadField</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/input/TbInputInline.php#L82">booster/widgets/input/TbInputInline.php#L82</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">typeAheadField</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPlaceholder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrepend</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">typeAheadField</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAppend</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders a masked text field.</p>


