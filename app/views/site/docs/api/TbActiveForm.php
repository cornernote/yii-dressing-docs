<?php
$this->pageTitle = $this->pageHeading = 'TbActiveForm';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbActiveForm';
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
  <td>class TbActiveForm &raquo;
<?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdActiveForm', array('/site/doc', 'view' => 'YdActiveForm')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php">booster/widgets/TbActiveForm.php</a></td>
</tr>
</table>

<div id="classDescription">
This class is extended version of <?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?>, that allows you fully take advantage of bootstrap forms.
Basically form consists of rows with label, field, error info, hint text and other useful stuff.
TbActiveForm brings together all of these things to quickly build custom forms even with non-standard fields.
<br/><br/>
Each field method has $rowOptions for customizing rendering appearance.
<ul>
<li>'label' - Custom label text</li>
<li>'labelOptions' - HTML options for label tag or passed to <?php echo CHtml::link('CActiveForm::labelEx', array('/site/doc', 'view' => 'CActiveForm', '#' => 'labelEx')); ?> call if 'label' is not set</li>
<li>'errorOptions' - HTML options for <?php echo CHtml::link('CActiveForm::error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?> call</li>
<li>'prepend' - Custom text/HTML-code rendered before field</li>
<li>'prependOptions' - HTML options for prepend wrapper tag</li>
<li>'append' - Custom text/HTML-code rendered after field</li>
<li>'appendOptions' - HTML options for append wrapper tag</li>
<li>'hint' - Hint text rendered below the field</li>
<li>'hintOptions' - HTML options for hint wrapper tag</li>
<li>'enableAjaxValidation' - passed to <?php echo CHtml::link('CActiveForm::error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?> call</li>
<li>'enableClientValidation' - passed to <?php echo CHtml::link('CActiveForm::error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?> call</li>
</ul>
<br/><br/>
Here's simple example how to build login form using this class:
<pre>
&lt;?php $form = $this-&gt;beginWidget('bootstrap.widgets.TbActiveForm', array(
    'type' =&gt; 'horizontal',
    'htmlOptions' =&gt; array('class' =&gt; 'well'),
)); ?&gt;

&lt;?php echo $form-&gt;errorSummary($model); ?&gt;

&lt;?php echo $form-&gt;textFieldRow($model, 'username'); ?&gt;
&lt;?php echo $form-&gt;passwordFieldRow($model, 'password', array(), array(
    'hint' =&gt; 'Check keyboard layout'
)); ?&gt;
&lt;?php echo $form-&gt;checkBoxRow($model, 'rememberMe'); ?&gt;
&lt;div class=&quot;form-actions&quot;&gt;
    &lt;?php echo CHtml::submitButton('Login', array('class'=&gt;'btn')); ?&gt;
&lt;/div&gt;

&lt;?php $this-&gt;endWidget(); ?&gt;
</pre>
<br/><br/>
Additionally this class provides two additional ways to render custom widget or field or even everything you want
with <?php echo CHtml::link('TbActiveForm::widgetRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'widgetRow')); ?> and <?php echo CHtml::link('TbActiveForm::customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Examples are simply clear:
<code>
$form->widgetRow(
    'my.super.cool.widget',
    array('model' => $model, 'attribute' => $attribute, 'data' => $mydata),
    array('hint' => 'Hint text here!')
);
<br/><br/>
// suppose that field is rendered via SomeClass::someMethod($model, $attribute) call.
$form->customFieldRow(
    array(array('SomeClass', 'someMethod'), array($model, $attribute)),
    $mode,
    $attribute,
    array(...)
);
</code></div>
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
<tr class="inherited" id="action">
  <td><?php echo CHtml::link('action', array('/site/doc', 'view' => 'CActiveForm', '#' => 'action-detail')); ?></td>
  <td>mixed</td>
  <td>the form action URL (see <?php echo CHtml::link('CHtml::normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter).</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="actionPrefix">
  <td><?php echo CHtml::link('actionPrefix', array('/site/doc', 'view' => 'CWidget', '#' => 'actionPrefix-detail')); ?></td>
  <td>string</td>
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="addOnCssClass">
  <td><?php echo CHtml::link('addOnCssClass', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'addOnCssClass-detail')); ?></td>
  <td>string</td>
  <td>Add-on CSS class.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="addOnTag">
  <td><?php echo CHtml::link('addOnTag', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'addOnTag-detail')); ?></td>
  <td>string</td>
  <td>Add-on wrapper tag.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="addOnWrapperTag">
  <td><?php echo CHtml::link('addOnWrapperTag', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'addOnWrapperTag-detail')); ?></td>
  <td>string</td>
  <td>Tag for wrapping field with prepended and/or appended data.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="appendCssClass">
  <td><?php echo CHtml::link('appendCssClass', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'appendCssClass-detail')); ?></td>
  <td>string</td>
  <td>Append wrapper CSS class.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="clientOptions">
  <td><?php echo CHtml::link('clientOptions', array('/site/doc', 'view' => 'CActiveForm', '#' => 'clientOptions-detail')); ?></td>
  <td>array</td>
  <td>the options to be passed to the javascript validation plugin.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="enableAjaxValidation">
  <td><?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableAjaxValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable data validation via AJAX.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="enableClientValidation">
  <td><?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableClientValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable client-side data validation.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="errorMessageCssClass">
  <td><?php echo CHtml::link('errorMessageCssClass', array('/site/doc', 'view' => 'CActiveForm', '#' => 'errorMessageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for error messages.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="focus">
  <td><?php echo CHtml::link('focus', array('/site/doc', 'view' => 'CActiveForm', '#' => 'focus-detail')); ?></td>
  <td>mixed</td>
  <td>form element to get initial input focus on page load.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="hintCssClass">
  <td><?php echo CHtml::link('hintCssClass', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'hintCssClass-detail')); ?></td>
  <td>string</td>
  <td>Hint CSS class.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="hintTag">
  <td><?php echo CHtml::link('hintTag', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'hintTag-detail')); ?></td>
  <td>string</td>
  <td>Hint wrapper tag.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CActiveForm', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>additional HTML attributes that should be rendered for the form tag.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="inlineErrors">
  <td><?php echo CHtml::link('inlineErrors', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'inlineErrors-detail')); ?></td>
  <td>bool</td>
  <td>Whether to render errors inline.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="method">
  <td><?php echo CHtml::link('method', array('/site/doc', 'view' => 'CActiveForm', '#' => 'method-detail')); ?></td>
  <td>string</td>
  <td>the form submission method.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="prependCssClass">
  <td><?php echo CHtml::link('prependCssClass', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'prependCssClass-detail')); ?></td>
  <td>string</td>
  <td>Prepend wrapper CSS class.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="showErrors">
  <td><?php echo CHtml::link('showErrors', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'showErrors-detail')); ?></td>
  <td>bool</td>
  <td>Whether to render field error after input. Only for vertical and horizontal types.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="stateful">
  <td><?php echo CHtml::link('stateful', array('/site/doc', 'view' => 'CActiveForm', '#' => 'stateful-detail')); ?></td>
  <td>boolean</td>
  <td>whether to generate a stateful form (See <?php echo CHtml::link('CHtml::statefulForm', array('/site/doc', 'view' => 'CHtml', '#' => 'statefulForm')); ?>).</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>The form type. Allowed types are in `TYPE_*` constants.</td>
  <td>TbActiveForm</td>
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
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CActiveForm', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>the javascript options for model attributes (input ID => options)</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="summaryID">
  <td><?php echo CHtml::link('summaryID', array('/site/doc', 'view' => 'CActiveForm', '#' => 'summaryID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the container element for error summary</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
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
<tr id="captchaRow">
  <td><?php echo CHtml::link('captchaRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'captchaRow-detail')); ?></td>
  <td>Generates a color picker field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="checkBox">
  <td><?php echo CHtml::link('checkBox()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBox-detail')); ?></td>
  <td>Renders a checkbox for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="checkBoxList">
  <td><?php echo CHtml::link('checkBoxList()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBoxList-detail')); ?></td>
  <td>Renders a checkbox list for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="checkBoxListRow">
  <td><?php echo CHtml::link('checkBoxListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxListRow-detail')); ?></td>
  <td>Generates a checkbox list row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="checkBoxRow">
  <td><?php echo CHtml::link('checkBoxRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'checkBoxRow-detail')); ?></td>
  <td>Generates a checkbox row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="ckEditorRow">
  <td><?php echo CHtml::link('ckEditorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'ckEditorRow-detail')); ?></td>
  <td>Generates a CKEditor row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="colorPickerRow">
  <td><?php echo CHtml::link('colorPickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'colorPickerRow-detail')); ?></td>
  <td>Generates a color picker field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a widget and initializes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr id="customFieldRow">
  <td><?php echo CHtml::link('customFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow-detail')); ?></td>
  <td>Generates a custom field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="dateField">
  <td><?php echo CHtml::link('dateField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dateField-detail')); ?></td>
  <td>Renders a date field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="dateFieldRow">
  <td><?php echo CHtml::link('dateFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dateFieldRow-detail')); ?></td>
  <td>Generates a date field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="datePickerRow">
  <td><?php echo CHtml::link('datePickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'datePickerRow-detail')); ?></td>
  <td>Generates a date picker row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="dateRangeRow">
  <td><?php echo CHtml::link('dateRangeRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dateRangeRow-detail')); ?></td>
  <td>Generates a date range picker row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="dateTimePickerRow">
  <td><?php echo CHtml::link('dateTimePickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dateTimePickerRow-detail')); ?></td>
  <td>Generates a date-time picker row for a model attribute.</td>
  <td>TbActiveForm</td>
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
<tr class="inherited" id="dropDownList">
  <td><?php echo CHtml::link('dropDownList()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dropDownList-detail')); ?></td>
  <td>Renders a dropdown list for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="dropDownListRow">
  <td><?php echo CHtml::link('dropDownListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'dropDownListRow-detail')); ?></td>
  <td>Generates a dropdown list row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="emailField">
  <td><?php echo CHtml::link('emailField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'emailField-detail')); ?></td>
  <td>Renders an email field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="emailFieldRow">
  <td><?php echo CHtml::link('emailFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'emailFieldRow-detail')); ?></td>
  <td>Generates an email field row for a model attribute.</td>
  <td>TbActiveForm</td>
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
<tr class="inherited" id="error">
  <td><?php echo CHtml::link('error()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error-detail')); ?></td>
  <td>Displays the first validation error for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="errorSummary">
  <td><?php echo CHtml::link('errorSummary()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'errorSummary-detail')); ?></td>
  <td>Displays a summary of validation errors for one or several models.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="fileField">
  <td><?php echo CHtml::link('fileField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'fileField-detail')); ?></td>
  <td>Renders a file field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="fileFieldRow">
  <td><?php echo CHtml::link('fileFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'fileFieldRow-detail')); ?></td>
  <td>Generates a file field row for a model attribute.</td>
  <td>TbActiveForm</td>
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
<tr class="inherited" id="hiddenField">
  <td><?php echo CHtml::link('hiddenField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'hiddenField-detail')); ?></td>
  <td>Renders a hidden field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="html5EditorRow">
  <td><?php echo CHtml::link('html5EditorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'html5EditorRow-detail')); ?></td>
  <td>Generates a html5 editor row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'init-detail')); ?></td>
  <td>Initializes the widget.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="label">
  <td><?php echo CHtml::link('label()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'label-detail')); ?></td>
  <td>Renders an HTML label for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="labelEx">
  <td><?php echo CHtml::link('labelEx()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'labelEx-detail')); ?></td>
  <td>Renders an HTML label for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="listBox">
  <td><?php echo CHtml::link('listBox()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'listBox-detail')); ?></td>
  <td>Renders a list box for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="listBoxRow">
  <td><?php echo CHtml::link('listBoxRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'listBoxRow-detail')); ?></td>
  <td>Generates a list box row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="markdownEditorRow">
  <td><?php echo CHtml::link('markdownEditorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'markdownEditorRow-detail')); ?></td>
  <td>Generates a markdown editor row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="maskedTextFieldRow">
  <td><?php echo CHtml::link('maskedTextFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'maskedTextFieldRow-detail')); ?></td>
  <td>Generates a masked text field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="numberField">
  <td><?php echo CHtml::link('numberField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'numberField-detail')); ?></td>
  <td>Renders a number field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="numberFieldRow">
  <td><?php echo CHtml::link('numberFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'numberFieldRow-detail')); ?></td>
  <td>Generates a number field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="passFieldRow">
  <td><?php echo CHtml::link('passFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'passFieldRow-detail')); ?></td>
  <td>Generates a Pass*Field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="passwordField">
  <td><?php echo CHtml::link('passwordField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'passwordField-detail')); ?></td>
  <td>Renders a password field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="passwordFieldRow">
  <td><?php echo CHtml::link('passwordFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'passwordFieldRow-detail')); ?></td>
  <td>Generates a password field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="radioButton">
  <td><?php echo CHtml::link('radioButton()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButton-detail')); ?></td>
  <td>Renders a radio button for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="radioButtonList">
  <td><?php echo CHtml::link('radioButtonList()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButtonList-detail')); ?></td>
  <td>Renders a radio button list for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="radioButtonListRow">
  <td><?php echo CHtml::link('radioButtonListRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonListRow-detail')); ?></td>
  <td>Generates a radio button list row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="radioButtonRow">
  <td><?php echo CHtml::link('radioButtonRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'radioButtonRow-detail')); ?></td>
  <td>Generates a radio button row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="rangeField">
  <td><?php echo CHtml::link('rangeField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'rangeField-detail')); ?></td>
  <td>Generates a range field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="rangeFieldRow">
  <td><?php echo CHtml::link('rangeFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'rangeFieldRow-detail')); ?></td>
  <td>Generates a range field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="redactorRow">
  <td><?php echo CHtml::link('redactorRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'redactorRow-detail')); ?></td>
  <td>Generates a redactor editor row for a model attribute.</td>
  <td>TbActiveForm</td>
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
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'run-detail')); ?></td>
  <td>Runs the widget.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="searchField">
  <td><?php echo CHtml::link('searchField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'searchField-detail')); ?></td>
  <td>Renders a search field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="searchFieldRow">
  <td><?php echo CHtml::link('searchFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'searchFieldRow-detail')); ?></td>
  <td>Generates a search field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="select2Row">
  <td><?php echo CHtml::link('select2Row()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'select2Row-detail')); ?></td>
  <td>Generates a select2 row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CWidget', '#' => 'setId-detail')); ?></td>
  <td>Sets the ID of the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="telField">
  <td><?php echo CHtml::link('telField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'telField-detail')); ?></td>
  <td>Renders a time field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="telFieldRow">
  <td><?php echo CHtml::link('telFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'telFieldRow-detail')); ?></td>
  <td>Generates a tel field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="textArea">
  <td><?php echo CHtml::link('textArea()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textArea-detail')); ?></td>
  <td>Renders a text area for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="textAreaRow">
  <td><?php echo CHtml::link('textAreaRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'textAreaRow-detail')); ?></td>
  <td>Generates a text area row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="textField">
  <td><?php echo CHtml::link('textField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField-detail')); ?></td>
  <td>Renders a text field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="textFieldRow">
  <td><?php echo CHtml::link('textFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'textFieldRow-detail')); ?></td>
  <td>Generates a text field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="timeField">
  <td><?php echo CHtml::link('timeField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'timeField-detail')); ?></td>
  <td>Renders a time field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="timeFieldRow">
  <td><?php echo CHtml::link('timeFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'timeFieldRow-detail')); ?></td>
  <td>Generates a time field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="timePickerRow">
  <td><?php echo CHtml::link('timePickerRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'timePickerRow-detail')); ?></td>
  <td>Generates a time picker row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="toggleButtonRow">
  <td><?php echo CHtml::link('toggleButtonRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'toggleButtonRow-detail')); ?></td>
  <td>Generates a toggle button row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="typeAheadRow">
  <td><?php echo CHtml::link('typeAheadRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'typeAheadRow-detail')); ?></td>
  <td>Generates a type-ahead row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="urlField">
  <td><?php echo CHtml::link('urlField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'urlField-detail')); ?></td>
  <td>Renders a url field for a model attribute.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr id="urlFieldRow">
  <td><?php echo CHtml::link('urlFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'urlFieldRow-detail')); ?></td>
  <td>Generates a url field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr class="inherited" id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'validate-detail')); ?></td>
  <td>Validates one or several models and returns the results in JSON format.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="validateTabular">
  <td><?php echo CHtml::link('validateTabular()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'validateTabular-detail')); ?></td>
  <td>Validates an array of model instances and returns the results in JSON format.</td>
  <td><?php echo CHtml::link('CActiveForm', array('/site/doc', 'view' => 'CActiveForm')); ?></td>
</tr>
<tr class="inherited" id="widget">
  <td><?php echo CHtml::link('widget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget-detail')); ?></td>
  <td>Creates a widget and executes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr id="widgetRow">
  <td><?php echo CHtml::link('widgetRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'widgetRow-detail')); ?></td>
  <td>Generates a widget row for a model attribute.</td>
  <td>TbActiveForm</td>
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
<tr id="addCssClass">
  <td><?php echo CHtml::link('addCssClass()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'addCssClass-detail')); ?></td>
  <td>Utility function for appending class names for a generic $htmlOptions array.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="customFieldRowInternal">
  <td><?php echo CHtml::link('customFieldRowInternal()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRowInternal-detail')); ?></td>
  <td>Generates a custom field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="horizontalFieldRow">
  <td><?php echo CHtml::link('horizontalFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'horizontalFieldRow-detail')); ?></td>
  <td>Renders a horizontal custom field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="initRowOptions">
  <td><?php echo CHtml::link('initRowOptions()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'initRowOptions-detail')); ?></td>
  <td></td>
  <td>TbActiveForm</td>
</tr>
<tr id="inlineFieldRow">
  <td><?php echo CHtml::link('inlineFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'inlineFieldRow-detail')); ?></td>
  <td>Renders a inline custom field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="renderAddOnBegin">
  <td><?php echo CHtml::link('renderAddOnBegin()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'renderAddOnBegin-detail')); ?></td>
  <td>Renders add-on begin.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="renderAddOnEnd">
  <td><?php echo CHtml::link('renderAddOnEnd()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'renderAddOnEnd-detail')); ?></td>
  <td>Renders add-on end.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="verticalFieldRow">
  <td><?php echo CHtml::link('verticalFieldRow()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'verticalFieldRow-detail')); ?></td>
  <td>Renders a vertical custom field row for a model attribute.</td>
  <td>TbActiveForm</td>
</tr>
<tr id="widgetRowInternal">
  <td><?php echo CHtml::link('widgetRowInternal()', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'widgetRowInternal-detail')); ?></td>
  <td>This is a intermediate method for widget-based row methods.</td>
  <td>TbActiveForm</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="addOnCssClass-detail">
addOnCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$addOnCssClass</b>;</div>

<p>Add-on CSS class.</p>


<div class="detailHeader" id="addOnTag-detail">
addOnTag<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$addOnTag</b>;</div>

<p>Add-on wrapper tag.</p>


<div class="detailHeader" id="addOnWrapperTag-detail">
addOnWrapperTag<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$addOnWrapperTag</b>;</div>

<p>Tag for wrapping field with prepended and/or appended data.</p>


<div class="detailHeader" id="appendCssClass-detail">
appendCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$appendCssClass</b>;</div>

<p>Append wrapper CSS class.</p>


<div class="detailHeader" id="hintCssClass-detail">
hintCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$hintCssClass</b>;</div>

<p>Hint CSS class.</p>


<div class="detailHeader" id="hintTag-detail">
hintTag<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$hintTag</b>;</div>

<p>Hint wrapper tag.</p>


<div class="detailHeader" id="inlineErrors-detail">
inlineErrors<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$inlineErrors</b>;</div>

<p>Whether to render errors inline.</p>


<div class="detailHeader" id="prependCssClass-detail">
prependCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$prependCssClass</b>;</div>

<p>Prepend wrapper CSS class.</p>


<div class="detailHeader" id="showErrors-detail">
showErrors<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$showErrors</b>;</div>

<p>Whether to render field error after input. Only for vertical and horizontal types.</p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$type</b>;</div>

<p>The form type. Allowed types are in `TYPE_*` constants.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addCssClass-detail">
addCssClass()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static void <b>addCssClass</b>(array &$htmlOptions, string $class)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$class</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1315">booster/widgets/TbActiveForm.php#L1315</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$class</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Utility function for appending class names for a generic $htmlOptions array.</p>


<div class="detailHeader" id="captchaRow-detail">
captchaRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>captchaRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes for captcha text field.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the CCaptcha widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated color picker row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L985">booster/widgets/TbActiveForm.php#L985</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">captchaRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">textField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="captcha"&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #DD0000">'CCaptcha'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a color picker field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CCaptcha', array('/site/doc', 'view' => 'CCaptcha')); ?> widget, <?php echo CHtml::link('textField', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'textField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CCaptcha', array('/site/doc', 'view' => 'CCaptcha')); ?> documentation for detailed information about $widgetOptions.
Read detailed information about $htmlOptions in <?php echo CHtml::link('CActiveForm::textField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField')); ?> method.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CCaptcha', array('/site/doc', 'view' => 'CCaptcha')); ?></li>
	<li><?php echo CHtml::link('CActiveForm::textField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="checkBoxListRow-detail">
checkBoxListRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBoxListRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Value-label pairs used to generate the check box list.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated checkbox list row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L638">booster/widgets/TbActiveForm.php#L638</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxListRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'{beginLabel}{input}{labelTitle}{endLabel}'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'checkBoxList'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a checkbox list row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::checkBoxList', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBoxList')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::checkBoxList', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBoxList')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::checkBoxList', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBoxList')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="checkBoxRow-detail">
checkBoxRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBoxRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated checkbox row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L540">booster/widgets/TbActiveForm.php#L540</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_INLINE</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'inline'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$field&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((!</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)&nbsp;||&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\&lt;input.*?type="hidden".*?\&gt;/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenField&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$field&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$hiddenField</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$realAttribute&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$realAttribute</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$hiddenField</span><span style="color: #007700">))&nbsp;echo&nbsp;</span><span style="color: #0000BB">$hiddenField</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$realAttribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a checkbox row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::checkBox', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBox')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::checkBox', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBox')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::checkBox', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBox')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="ckEditorRow-detail">
ckEditorRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>ckEditorRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated CKEditor row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L902">booster/widgets/TbActiveForm.php#L902</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">ckEditorRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbCKEditor'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a CKEditor row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbCKEditor', array('/site/doc', 'view' => 'TbCKEditor')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbCKEditor', array('/site/doc', 'view' => 'TbCKEditor')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbCKEditor', array('/site/doc', 'view' => 'TbCKEditor')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="colorPickerRow-detail">
colorPickerRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>colorPickerRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated color picker row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L962">booster/widgets/TbActiveForm.php#L962</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">colorPickerRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbColorPicker'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a color picker field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbColorPicker', array('/site/doc', 'view' => 'TbColorPicker')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbColorPicker', array('/site/doc', 'view' => 'TbColorPicker')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbColorPicker', array('/site/doc', 'view' => 'TbColorPicker')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="customFieldRow-detail">
customFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>customFieldRow</b>(array|string $fieldData, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fieldData</td>
  <td class="paramTypeCol">array|string</td>
  <td class="paramDescCol">Pre-rendered field as string or array of arguments for call_user_func_array()
function.</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated custom filed row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1027">booster/widgets/TbActiveForm.php#L1027</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">customFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a custom field row for a model attribute.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>call_user_func_array</li>
</ul>
</div>

<div class="detailHeader" id="customFieldRowInternal-detail">
customFieldRowInternal()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>customFieldRowInternal</b>(array|string &$fieldData, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> &$model, string &$attribute, array &$rowOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fieldData</td>
  <td class="paramTypeCol">array|string</td>
  <td class="paramDescCol">Pre-rendered field as string or array of arguments for call_user_func_array() function.</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated custom filed row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1091">booster/widgets/TbActiveForm.php#L1091</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_HORIZONTAL</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">horizontalFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_VERTICAL</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">verticalFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_INLINE</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_SEARCH</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inlineFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Invalid&nbsp;form&nbsp;type'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Generates a custom field row for a model attribute.
<br/><br/>
It's base function for generating row with field.</p>


<div class="detailHeader" id="dateFieldRow-detail">
dateFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>dateFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated date field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L297">booster/widgets/TbActiveForm.php#L297</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dateFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dateField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a date field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::dateField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dateField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::dateField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dateField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::dateField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dateField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="datePickerRow-detail">
datePickerRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>datePickerRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated date picker row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L731">booster/widgets/TbActiveForm.php#L731</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">datePickerRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbDatePicker'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a date picker row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbDatePicker', array('/site/doc', 'view' => 'TbDatePicker')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbDatePicker', array('/site/doc', 'view' => 'TbDatePicker')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbDatePicker', array('/site/doc', 'view' => 'TbDatePicker')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="dateRangeRow-detail">
dateRangeRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>dateRangeRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated date range picker row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L751">booster/widgets/TbActiveForm.php#L751</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dateRangeRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbDateRangePicker'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a date range picker row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbDateRangePicker', array('/site/doc', 'view' => 'TbDateRangePicker')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbDateRangePicker', array('/site/doc', 'view' => 'TbDateRangePicker')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbDateRangePicker', array('/site/doc', 'view' => 'TbDateRangePicker')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="dateTimePickerRow-detail">
dateTimePickerRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>dateTimePickerRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated date-time picker row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L791">booster/widgets/TbActiveForm.php#L791</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dateTimePickerRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbDateTimePicker'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a date-time picker row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbDateTimePicker', array('/site/doc', 'view' => 'TbDateTimePicker')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbDateTimePicker', array('/site/doc', 'view' => 'TbDateTimePicker')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbDateTimePicker', array('/site/doc', 'view' => 'TbDateTimePicker')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="dropDownListRow-detail">
dropDownListRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>dropDownListRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Data for generating the list options (value=>display).</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated drop down list row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L588">booster/widgets/TbActiveForm.php#L588</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropDownListRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dropDownList'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a dropdown list row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::dropDownList', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dropDownList')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::dropDownList', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dropDownList')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::dropDownList', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dropDownList')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="emailFieldRow-detail">
emailFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>emailFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated email field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L225">booster/widgets/TbActiveForm.php#L225</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">emailFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'emailField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates an email field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::emailField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'emailField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::emailField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'emailField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::emailField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'emailField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="errorSummary-detail">
errorSummary()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>errorSummary</b>(mixed $models, string $header=NULL, string $footer=NULL, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$models</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">The models whose input errors are to be displayed. This can be either a single model or an array of models.</td>
</tr>
<tr>
  <td class="paramNameCol">$header</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">A piece of HTML code that appears in front of the errors</td>
</tr>
<tr>
  <td class="paramNameCol">$footer</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">A piece of HTML code that appears at the end of the errors</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes to be rendered in the container div tag.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The error summary. Empty if no errors are found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L177">booster/widgets/TbActiveForm.php#L177</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">errorSummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$header&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$footer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'alert&nbsp;alert-block&nbsp;alert-error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">errorSummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$header</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$footer</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Displays a summary of validation errors for one or several models.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::errorSummary', array('/site/doc', 'view' => 'CActiveForm', '#' => 'errorSummary')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::errorSummary', array('/site/doc', 'view' => 'CActiveForm', '#' => 'errorSummary')); ?></li>
</ul>
</div>

<div class="detailHeader" id="fileFieldRow-detail">
fileFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>fileFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated file field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L469">booster/widgets/TbActiveForm.php#L469</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">fileFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'fileField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a file field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::fileField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'fileField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::fileField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'fileField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::fileField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'fileField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="horizontalFieldRow-detail">
horizontalFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>horizontalFieldRow</b>(array|string &$fieldData, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> &$model, string &$attribute, array &$rowOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fieldData</td>
  <td class="paramTypeCol">array|string</td>
  <td class="paramDescCol">Pre-rendered field as string or array of arguments for call_user_func_array() function.</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row options.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1123">booster/widgets/TbActiveForm.php#L1123</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">horizontalFieldRow</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controlGroupHtmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'control-group'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasErrors</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$controlGroupHtmlOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorCss</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$controlGroupHtmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'control-label'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeId</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">labelEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="controls"&gt;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">])&nbsp;||&nbsp;!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderAddOnBegin</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prependOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">])&nbsp;||&nbsp;!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderAddOnEnd</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'appendOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showErrors&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'errorOptions'</span><span style="color: #007700">]&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">error</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'errorOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'enableAjaxValidation'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'enableClientValidation'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'hint'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'hintOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hintCssClass</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hintTag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'hintOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'hint'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;&lt;/div&gt;'</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;controls,&nbsp;control-group<br /></span><span style="color: #007700">}</span>
</span>
</code></div>
</div>
<p>Renders a horizontal custom field row for a model attribute.</p>


<div class="detailHeader" id="html5EditorRow-detail">
html5EditorRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>html5EditorRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated html5 editor row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L851">booster/widgets/TbActiveForm.php#L851</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">html5EditorRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbHtml5Editor'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a html5 editor row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbHtml5Editor', array('/site/doc', 'view' => 'TbHtml5Editor')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbHtml5Editor', array('/site/doc', 'view' => 'TbHtml5Editor')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbHtml5Editor', array('/site/doc', 'view' => 'TbHtml5Editor')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L143">booster/widgets/TbActiveForm.php#L143</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'form-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inlineErrors</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inlineErrors&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_HORIZONTAL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessageCssClass</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inlineErrors</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessageCssClass&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'help-inline&nbsp;error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessageCssClass&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'help-block&nbsp;error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_HORIZONTAL&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clientOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inputContainer'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clientOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inputContainer'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'div.control-group'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the widget.
This renders the form open tag.</p>


<div class="detailHeader" id="initRowOptions-detail">
initRowOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>initRowOptions</b>(array &$options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row options.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1282">booster/widgets/TbActiveForm.php#L1282</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'errorOptions'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'errorOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'prependOptions'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'prependOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'appendOptions'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'appendOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'enableAjaxValidation'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'enableAjaxValidation'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'enableClientValidation'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'enableClientValidation'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="inlineFieldRow-detail">
inlineFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>inlineFieldRow</b>(array|string &$fieldData, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> &$model, string &$attribute, array &$rowOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fieldData</td>
  <td class="paramTypeCol">array|string</td>
  <td class="paramDescCol">Pre-rendered field as string or array of arguments for call_user_func_array() function.</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row options.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1218">booster/widgets/TbActiveForm.php#L1218</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">inlineFieldRow</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">])&nbsp;||&nbsp;!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderAddOnBegin</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prependOptions'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">])&nbsp;||&nbsp;!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderAddOnEnd</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'appendOptions'</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a inline custom field row for a model attribute.</p>


<div class="detailHeader" id="listBoxRow-detail">
listBoxRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>listBoxRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated list box row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L613">booster/widgets/TbActiveForm.php#L613</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">listBoxRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'listBox'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a list box row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::listBox', array('/site/doc', 'view' => 'CActiveForm', '#' => 'listBox')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::listBox', array('/site/doc', 'view' => 'CActiveForm', '#' => 'listBox')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::listBox', array('/site/doc', 'view' => 'CActiveForm', '#' => 'listBox')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="markdownEditorRow-detail">
markdownEditorRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>markdownEditorRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated markdown editor row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L871">booster/widgets/TbActiveForm.php#L871</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">markdownEditorRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;TODO:&nbsp;rewrite&nbsp;TbMarkdownEditorJs&nbsp;and&nbsp;this&nbsp;method!<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="wmd-panel"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;id="wmd-button-bar"&nbsp;class="btn-toolbar"&gt;&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbMarkdownEditorJs'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;id="wmd-preview"&nbsp;class="wmd-panel&nbsp;wmd-preview"&nbsp;style="width:100%"&gt;&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;wmd-panel<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a markdown editor row for a model attribute.
<br/><br/>
This method is a wrapper for TbMarkdownEditorJs widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check TbMarkdownEditorJs documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>TbMarkdownEditorJs</li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="maskedTextFieldRow-detail">
maskedTextFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>maskedTextFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated masked text field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L942">booster/widgets/TbActiveForm.php#L942</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">maskedTextFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'CMaskedTextField'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a masked text field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CMaskedTextField', array('/site/doc', 'view' => 'CMaskedTextField')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CMaskedTextField', array('/site/doc', 'view' => 'CMaskedTextField')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CMaskedTextField', array('/site/doc', 'view' => 'CMaskedTextField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="numberFieldRow-detail">
numberFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>numberFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated number filed row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L249">booster/widgets/TbActiveForm.php#L249</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">numberFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'numberField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a number field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::numberField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'numberField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::numberField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'numberField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::numberField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'numberField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="passFieldRow-detail">
passFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>passFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated color picker row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1010">booster/widgets/TbActiveForm.php#L1010</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">passFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbPassfield'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a Pass*Field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbPassfield', array('/site/doc', 'view' => 'TbPassfield')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbPassfield', array('/site/doc', 'view' => 'TbPassfield')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbPassfield', array('/site/doc', 'view' => 'TbPassfield')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="passwordFieldRow-detail">
passwordFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>passwordFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated password field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L421">booster/widgets/TbActiveForm.php#L421</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">passwordFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'passwordField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a password field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::passwordField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'passwordField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::passwordField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'passwordField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::passwordField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'passwordField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="radioButtonListRow-detail">
radioButtonListRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButtonListRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Value-label pairs used to generate the radio button list.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated radio button list row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L672">booster/widgets/TbActiveForm.php#L672</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonListRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'{beginLabel}{input}{labelTitle}{endLabel}'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'radioButtonList'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a radio button list row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::radioButtonList', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButtonList')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::radioButtonList', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButtonList')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::radioButtonList', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButtonList')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="radioButtonRow-detail">
radioButtonRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButtonRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated radio button row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L493">booster/widgets/TbActiveForm.php#L493</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_INLINE</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'inline'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$field&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">radioButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((!</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)&nbsp;||&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\&lt;input.*?type="hidden".*?\&gt;/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenField&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$field&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$hiddenField</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$realAttribute&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$realAttribute</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$hiddenField</span><span style="color: #007700">))&nbsp;echo&nbsp;</span><span style="color: #0000BB">$hiddenField</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$realAttribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a radio button row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::radioButton', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButton')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::radioButton', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButton')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::radioButton', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButton')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="rangeFieldRow-detail">
rangeFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>rangeFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated range field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L273">booster/widgets/TbActiveForm.php#L273</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">rangeFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'rangeField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a range field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::rangeField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'rangeField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::rangeField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'rangeField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::rangeField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'rangeField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="redactorRow-detail">
redactorRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>redactorRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated redactor editor row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L831">booster/widgets/TbActiveForm.php#L831</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">redactorRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbRedactorJs'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a redactor editor row for a model attribute.
<br/><br/>
This method is a wrapper for TbRedactorJs widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check TbRedactorJs documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>TbRedactorJs</li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="renderAddOnBegin-detail">
renderAddOnBegin()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderAddOnBegin</b>(string $prependText, string $appendText, array $prependOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$prependText</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Prepended text.</td>
</tr>
<tr>
  <td class="paramNameCol">$appendText</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Appended text.</td>
</tr>
<tr>
  <td class="paramNameCol">$prependOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Prepend options.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1240">booster/widgets/TbActiveForm.php#L1240</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderAddOnBegin</span><span style="color: #007700">(</span><span style="color: #0000BB">$prependText</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$appendText</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$prependOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$wrapperCssClass&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$prependText</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$wrapperCssClass</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prependCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$appendText</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$wrapperCssClass</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendCssClass</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addOnWrapperTag</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$wrapperCssClass</span><span style="color: #007700">)),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$prependText</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$prependOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'isRaw'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$prependOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'isRaw'</span><span style="color: #007700">])&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$prependText</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$prependOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addOnCssClass</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addOnTag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$prependOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$prependText</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders add-on begin.</p>


<div class="detailHeader" id="renderAddOnEnd-detail">
renderAddOnEnd()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderAddOnEnd</b>(string $appendText, array $appendOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$appendText</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Appended text.</td>
</tr>
<tr>
  <td class="paramNameCol">$appendOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Append options.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1265">booster/widgets/TbActiveForm.php#L1265</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderAddOnEnd</span><span style="color: #007700">(</span><span style="color: #0000BB">$appendText</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$appendOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$appendText</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$appendOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'isRaw'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$appendOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'isRaw'</span><span style="color: #007700">])&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$appendText</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$appendOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addOnCssClass</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addOnTag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$appendOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$appendText</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addOnWrapperTag</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders add-on end.</p>


<div class="detailHeader" id="searchFieldRow-detail">
searchFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>searchFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated text field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L393">booster/widgets/TbActiveForm.php#L393</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">searchFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_SEARCH</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'search-query'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'searchField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a search field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::searchField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'searchField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::searchField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'searchField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::searchField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'searchField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="select2Row-detail">
select2Row()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>select2Row</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated select2 row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L811">booster/widgets/TbActiveForm.php#L811</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">select2Row</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbSelect2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a select2 row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbSelect2', array('/site/doc', 'view' => 'TbSelect2')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbSelect2', array('/site/doc', 'view' => 'TbSelect2')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbSelect2', array('/site/doc', 'view' => 'TbSelect2')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="telFieldRow-detail">
telFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>telFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated date field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L345">booster/widgets/TbActiveForm.php#L345</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">telFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'telField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a tel field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::telField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'telField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::telField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'telField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::telField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'telField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="textAreaRow-detail">
textAreaRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>textAreaRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated text area row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L445">booster/widgets/TbActiveForm.php#L445</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">textAreaRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'textArea'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a text area row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::textArea', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textArea')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::textArea', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textArea')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::textArea', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textArea')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="textFieldRow-detail">
textFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>textFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated text field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L369">booster/widgets/TbActiveForm.php#L369</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">textFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'textField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a text field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::textField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::textField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::textField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="timeFieldRow-detail">
timeFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>timeFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated date field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L321">booster/widgets/TbActiveForm.php#L321</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">timeFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'timeField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a time field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::timeField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'timeField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::timeField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'timeField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::timeField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'timeField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="timePickerRow-detail">
timePickerRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>timePickerRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated time picker row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L771">booster/widgets/TbActiveForm.php#L771</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">timePickerRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbTimePicker'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a time picker row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbTimePicker', array('/site/doc', 'view' => 'TbTimePicker')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbTimePicker', array('/site/doc', 'view' => 'TbTimePicker')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbTimePicker', array('/site/doc', 'view' => 'TbTimePicker')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="toggleButtonRow-detail">
toggleButtonRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>toggleButtonRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated toggle button row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L711">booster/widgets/TbActiveForm.php#L711</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">toggleButtonRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbToggleButton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a toggle button row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbToggleButton', array('/site/doc', 'view' => 'TbToggleButton')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbToggleButton', array('/site/doc', 'view' => 'TbToggleButton')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbToggleButton', array('/site/doc', 'view' => 'TbToggleButton')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="typeAheadRow-detail">
typeAheadRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>typeAheadRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated type-ahead row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L922">booster/widgets/TbActiveForm.php#L922</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">typeAheadRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbTypeahead'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a type-ahead row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('TbTypeahead', array('/site/doc', 'view' => 'TbTypeahead')); ?> widget and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('TbTypeahead', array('/site/doc', 'view' => 'TbTypeahead')); ?> documentation for detailed information about $widgetOptions.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('TbTypeahead', array('/site/doc', 'view' => 'TbTypeahead')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="urlFieldRow-detail">
urlFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>urlFieldRow</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated url field row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L201">booster/widgets/TbActiveForm.php#L201</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">urlFieldRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'urlField'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a url field row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CActiveForm::urlField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'urlField')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Please check <?php echo CHtml::link('CActiveForm::urlField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'urlField')); ?> for detailed information about $htmlOptions argument.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CActiveForm::urlField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'urlField')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="verticalFieldRow-detail">
verticalFieldRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>verticalFieldRow</b>(array|string &$fieldData, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> &$model, string &$attribute, array &$rowOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fieldData</td>
  <td class="paramTypeCol">array|string</td>
  <td class="paramDescCol">Pre-rendered field as string or array of arguments for call_user_func_array() function.</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row options.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1176">booster/widgets/TbActiveForm.php#L1176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">verticalFieldRow</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeId</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">labelEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">])&nbsp;||&nbsp;!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderAddOnBegin</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prependOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prepend'</span><span style="color: #007700">])&nbsp;||&nbsp;!empty(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderAddOnEnd</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'append'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'appendOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showErrors&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'errorOptions'</span><span style="color: #007700">]&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">error</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'errorOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'enableAjaxValidation'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'enableClientValidation'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'hint'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addCssClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'hintOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hintCssClass</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hintTag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'hintOptions'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'hint'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders a vertical custom field row for a model attribute.</p>


<div class="detailHeader" id="widgetRow-detail">
widgetRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>widgetRow</b>(string $className, array $widgetOptions=array (
), array $rowOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The widget class name or class in dot syntax (e.g. application.widgets.MyWidget).</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated widget row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1049">booster/widgets/TbActiveForm.php#L1049</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">widgetRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$rowOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'widget'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a widget row for a model attribute.
<br/><br/>
This method is a wrapper for <?php echo CHtml::link('CBaseController::widget', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget')); ?> and <?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?>.
Read detailed information about $widgetOptions in $properties argument of <?php echo CHtml::link('CBaseController::widget', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget')); ?> method.
About $rowOptions argument parameters see <?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?> documentation.
This method relies that widget have $model and $attribute properties.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CBaseController::widget', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget')); ?></li>
	<li><?php echo CHtml::link('customFieldRow', array('/site/doc', 'view' => 'TbActiveForm', '#' => 'customFieldRow')); ?></li>
</ul>
</div>

<div class="detailHeader" id="widgetRowInternal-detail">
widgetRowInternal()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>widgetRowInternal</b>(string $className, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> &$model, string &$attribute, array &$widgetOptions, array &$rowOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The widget class name or class in dot syntax (e.g. application.widgets.MyWidget).</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">The data model.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The attribute.</td>
</tr>
<tr>
  <td class="paramNameCol">$widgetOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">List of initial property values for the widget (Property Name => Property Value).</td>
</tr>
<tr>
  <td class="paramNameCol">$rowOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Row attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The generated widget row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbActiveForm.php#L1068">booster/widgets/TbActiveForm.php#L1068</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">widgetRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initRowOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fieldData&nbsp;</span><span style="color: #007700">=&nbsp;array(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'widget'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$widgetOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">customFieldRowInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$fieldData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rowOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This is a intermediate method for widget-based row methods.</p>


