<?php
$this->pageTitle = $this->pageHeading = 'CActiveForm';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CActiveForm';
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
  <td><?php echo CHtml::link('system.web.widgets', array('/site/doc', '#' => 'system.web.widgets')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CActiveForm &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbActiveForm', array('/site/doc', 'view' => 'TbActiveForm')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php">yii\web\widgets\CActiveForm.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CActiveForm provides a set of methods that can help to simplify the creation
of complex and interactive HTML forms that are associated with data models.
<br/><br/>
The 'beginWidget' and 'endWidget' call of CActiveForm widget will render
the open and close form tags. Most other methods of CActiveForm are wrappers
of the corresponding 'active' methods in <?php echo CHtml::link('CHtml', array('/site/doc', 'view' => 'CHtml')); ?>. Calling them in between
the 'beginWidget' and 'endWidget' calls will render text labels, input fields,
etc. For example, calling <?php echo CHtml::link('CActiveForm::textField', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField')); ?>
would generate an input field for a specified model attribute.
<br/><br/>
What makes CActiveForm extremely useful is its support for data validation.
CActiveForm supports data validation at three levels:
<ul>
<li>server-side validation: the validation is performed at server side after
the whole page containing the form is submitted. If there is any validation error,
CActiveForm will render the error in the page back to user.</li>
<li>AJAX-based validation: when the user enters data into an input field,
an AJAX request is triggered which requires server-side validation. The validation
result is sent back in AJAX response and the input field changes its appearance
accordingly.</li>
<li>client-side validation (available since version 1.1.7):
when the user enters data into an input field,
validation is performed on the client side using JavaScript. No server contact
will be made, which reduces the workload on the server.</li>
</ul>
<br/><br/>
All these validations share the same set of validation rules declared in
the associated model class. CActiveForm is designed in such a way that
all these validations will lead to the same user interface changes and error
message content.
<br/><br/>
To ensure data validity, server-side validation is always performed.
By setting <?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableAjaxValidation')); ?> to true, one can enable AJAX-based validation;
and by setting <?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableClientValidation')); ?> to true, one can enable client-side validation.
Note that in order to make the latter two validations work, the user's browser
must has its JavaScript enabled. If not, only the server-side validation will
be performed.
<br/><br/>
The AJAX-based validation and client-side validation may be used together
or separately. For example, in a user registration form, one may use AJAX-based
validation to check if the user has picked a unique username, and use client-side
validation to ensure all required fields are entered with data.
Because the AJAX-based validation may bring extra workload on the server,
if possible, one should mainly use client-side validation.
<br/><br/>
The AJAX-based validation has a few limitations. First, it does not work
with file upload fields. Second, it should not be used to perform validations that
may cause server-side state changes. Third, it is not designed
to work with tabular data input for the moment.
<br/><br/>
Support for client-side validation varies for different validators. A validator
will support client-side validation only if it implements <?php echo CHtml::link('CValidator::clientValidateAttribute', array('/site/doc', 'view' => 'CValidator', '#' => 'clientValidateAttribute')); ?>
and has its <?php echo CHtml::link('CValidator::enableClientValidation', array('/site/doc', 'view' => 'CValidator', '#' => 'enableClientValidation')); ?> property set true.
At this moment, the following core validators support client-side validation:
<ul>
<li><?php echo CHtml::link('CBooleanValidator', array('/site/doc', 'view' => 'CBooleanValidator')); ?></li>
<li><?php echo CHtml::link('CCaptchaValidator', array('/site/doc', 'view' => 'CCaptchaValidator')); ?></li>
<li><?php echo CHtml::link('CCompareValidator', array('/site/doc', 'view' => 'CCompareValidator')); ?></li>
<li><?php echo CHtml::link('CEmailValidator', array('/site/doc', 'view' => 'CEmailValidator')); ?></li>
<li><?php echo CHtml::link('CNumberValidator', array('/site/doc', 'view' => 'CNumberValidator')); ?></li>
<li><?php echo CHtml::link('CRangeValidator', array('/site/doc', 'view' => 'CRangeValidator')); ?></li>
<li><?php echo CHtml::link('CRegularExpressionValidator', array('/site/doc', 'view' => 'CRegularExpressionValidator')); ?></li>
<li><?php echo CHtml::link('CRequiredValidator', array('/site/doc', 'view' => 'CRequiredValidator')); ?></li>
<li><?php echo CHtml::link('CStringValidator', array('/site/doc', 'view' => 'CStringValidator')); ?></li>
<li><?php echo CHtml::link('CUrlValidator', array('/site/doc', 'view' => 'CUrlValidator')); ?></li>
</ul>
<br/><br/>
CActiveForm relies on CSS to customize the appearance of input fields
which are in different validation states. In particular, each input field
may be one of the four states: initial (not validated),
validating, error and success. To differentiate these states, CActiveForm
automatically assigns different CSS classes for the last three states
to the HTML element containing the input field.
By default, these CSS classes are named as 'validating', 'error' and 'success',
respectively. We may customize these CSS classes by configuring the
<?php echo CHtml::link('clientOptions', array('/site/doc', 'view' => 'CActiveForm', '#' => 'clientOptions')); ?> property or specifying in the <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?> method.
<br/><br/>
The following is a piece of sample view code showing how to use CActiveForm:
<br/><br/>
<pre>
&lt;?php $form = $this-&gt;beginWidget('CActiveForm', array(
    'id'=&gt;'user-form',
    'enableAjaxValidation'=&gt;true,
    'enableClientValidation'=&gt;true,
    'focus'=&gt;array($model,'firstName'),
)); ?&gt;

&lt;?php echo $form-&gt;errorSummary($model); ?&gt;

&lt;div class=&quot;row&quot;&gt;
    &lt;?php echo $form-&gt;labelEx($model,'firstName'); ?&gt;
    &lt;?php echo $form-&gt;textField($model,'firstName'); ?&gt;
    &lt;?php echo $form-&gt;error($model,'firstName'); ?&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;?php echo $form-&gt;labelEx($model,'lastName'); ?&gt;
    &lt;?php echo $form-&gt;textField($model,'lastName'); ?&gt;
    &lt;?php echo $form-&gt;error($model,'lastName'); ?&gt;
&lt;/div&gt;

&lt;?php $this-&gt;endWidget(); ?&gt;
</pre>
<br/><br/>
To respond to the AJAX validation requests, we need the following class code:
<pre>
public function actionCreate()
{
    $model=new User;
    $this-&gt;performAjaxValidation($model);
    if(isset($_POST['User']))
    {
        $model-&gt;attributes=$_POST['User'];
        if($model-&gt;save())
            $this-&gt;redirect('index');
    }
    $this-&gt;render('create',array('model'=&gt;$model));
}

protected function performAjaxValidation($model)
{
    if(isset($_POST['ajax']) &amp;&amp; $_POST['ajax']==='user-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()-&gt;end();
    }
}
</pre>
<br/><br/>
In the above code, if we do not enable the AJAX-based validation, we can remove
the <code>performAjaxValidation</code> method and its invocation.</div>
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
<tr id="action">
  <td><?php echo CHtml::link('action', array('/site/doc', 'view' => 'CActiveForm', '#' => 'action-detail')); ?></td>
  <td>mixed</td>
  <td>the form action URL (see <?php echo CHtml::link('CHtml::normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter).</td>
  <td>CActiveForm</td>
</tr>
<tr class="inherited" id="actionPrefix">
  <td><?php echo CHtml::link('actionPrefix', array('/site/doc', 'view' => 'CWidget', '#' => 'actionPrefix-detail')); ?></td>
  <td>string</td>
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'CActiveForm', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="clientOptions">
  <td><?php echo CHtml::link('clientOptions', array('/site/doc', 'view' => 'CActiveForm', '#' => 'clientOptions-detail')); ?></td>
  <td>array</td>
  <td>the options to be passed to the javascript validation plugin.</td>
  <td>CActiveForm</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="enableAjaxValidation">
  <td><?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableAjaxValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable data validation via AJAX.</td>
  <td>CActiveForm</td>
</tr>
<tr id="enableClientValidation">
  <td><?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableClientValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable client-side data validation.</td>
  <td>CActiveForm</td>
</tr>
<tr id="errorMessageCssClass">
  <td><?php echo CHtml::link('errorMessageCssClass', array('/site/doc', 'view' => 'CActiveForm', '#' => 'errorMessageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for error messages.</td>
  <td>CActiveForm</td>
</tr>
<tr id="focus">
  <td><?php echo CHtml::link('focus', array('/site/doc', 'view' => 'CActiveForm', '#' => 'focus-detail')); ?></td>
  <td>mixed</td>
  <td>form element to get initial input focus on page load.</td>
  <td>CActiveForm</td>
</tr>
<tr id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CActiveForm', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>additional HTML attributes that should be rendered for the form tag.</td>
  <td>CActiveForm</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="method">
  <td><?php echo CHtml::link('method', array('/site/doc', 'view' => 'CActiveForm', '#' => 'method-detail')); ?></td>
  <td>string</td>
  <td>the form submission method.</td>
  <td>CActiveForm</td>
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
<tr id="stateful">
  <td><?php echo CHtml::link('stateful', array('/site/doc', 'view' => 'CActiveForm', '#' => 'stateful-detail')); ?></td>
  <td>boolean</td>
  <td>whether to generate a stateful form (See <?php echo CHtml::link('CHtml::statefulForm', array('/site/doc', 'view' => 'CHtml', '#' => 'statefulForm')); ?>).</td>
  <td>CActiveForm</td>
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
<tr id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CActiveForm', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>the javascript options for model attributes (input ID => options)</td>
  <td>CActiveForm</td>
</tr>
<tr id="summaryID">
  <td><?php echo CHtml::link('summaryID', array('/site/doc', 'view' => 'CActiveForm', '#' => 'summaryID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the container element for error summary</td>
  <td>CActiveForm</td>
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
<tr id="checkBox">
  <td><?php echo CHtml::link('checkBox()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBox-detail')); ?></td>
  <td>Renders a checkbox for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="checkBoxList">
  <td><?php echo CHtml::link('checkBoxList()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'checkBoxList-detail')); ?></td>
  <td>Renders a checkbox list for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr class="inherited" id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a widget and initializes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr id="dateField">
  <td><?php echo CHtml::link('dateField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dateField-detail')); ?></td>
  <td>Renders a date field for a model attribute.</td>
  <td>CActiveForm</td>
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
<tr id="dropDownList">
  <td><?php echo CHtml::link('dropDownList()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'dropDownList-detail')); ?></td>
  <td>Renders a dropdown list for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="emailField">
  <td><?php echo CHtml::link('emailField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'emailField-detail')); ?></td>
  <td>Renders an email field for a model attribute.</td>
  <td>CActiveForm</td>
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
<tr id="error">
  <td><?php echo CHtml::link('error()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error-detail')); ?></td>
  <td>Displays the first validation error for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="errorSummary">
  <td><?php echo CHtml::link('errorSummary()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'errorSummary-detail')); ?></td>
  <td>Displays a summary of validation errors for one or several models.</td>
  <td>CActiveForm</td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="fileField">
  <td><?php echo CHtml::link('fileField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'fileField-detail')); ?></td>
  <td>Renders a file field for a model attribute.</td>
  <td>CActiveForm</td>
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
<tr id="hiddenField">
  <td><?php echo CHtml::link('hiddenField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'hiddenField-detail')); ?></td>
  <td>Renders a hidden field for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'init-detail')); ?></td>
  <td>Initializes the widget.</td>
  <td>CActiveForm</td>
</tr>
<tr id="label">
  <td><?php echo CHtml::link('label()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'label-detail')); ?></td>
  <td>Renders an HTML label for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="labelEx">
  <td><?php echo CHtml::link('labelEx()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'labelEx-detail')); ?></td>
  <td>Renders an HTML label for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="listBox">
  <td><?php echo CHtml::link('listBox()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'listBox-detail')); ?></td>
  <td>Renders a list box for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="numberField">
  <td><?php echo CHtml::link('numberField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'numberField-detail')); ?></td>
  <td>Renders a number field for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="passwordField">
  <td><?php echo CHtml::link('passwordField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'passwordField-detail')); ?></td>
  <td>Renders a password field for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="radioButton">
  <td><?php echo CHtml::link('radioButton()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButton-detail')); ?></td>
  <td>Renders a radio button for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="radioButtonList">
  <td><?php echo CHtml::link('radioButtonList()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'radioButtonList-detail')); ?></td>
  <td>Renders a radio button list for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="rangeField">
  <td><?php echo CHtml::link('rangeField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'rangeField-detail')); ?></td>
  <td>Generates a range field for a model attribute.</td>
  <td>CActiveForm</td>
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
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'run-detail')); ?></td>
  <td>Runs the widget.</td>
  <td>CActiveForm</td>
</tr>
<tr id="searchField">
  <td><?php echo CHtml::link('searchField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'searchField-detail')); ?></td>
  <td>Renders a search field for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CWidget', '#' => 'setId-detail')); ?></td>
  <td>Sets the ID of the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="telField">
  <td><?php echo CHtml::link('telField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'telField-detail')); ?></td>
  <td>Renders a time field for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="textArea">
  <td><?php echo CHtml::link('textArea()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textArea-detail')); ?></td>
  <td>Renders a text area for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="textField">
  <td><?php echo CHtml::link('textField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'textField-detail')); ?></td>
  <td>Renders a text field for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="timeField">
  <td><?php echo CHtml::link('timeField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'timeField-detail')); ?></td>
  <td>Renders a time field for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="urlField">
  <td><?php echo CHtml::link('urlField()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'urlField-detail')); ?></td>
  <td>Renders a url field for a model attribute.</td>
  <td>CActiveForm</td>
</tr>
<tr id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'validate-detail')); ?></td>
  <td>Validates one or several models and returns the results in JSON format.</td>
  <td>CActiveForm</td>
</tr>
<tr id="validateTabular">
  <td><?php echo CHtml::link('validateTabular()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'validateTabular-detail')); ?></td>
  <td>Validates an array of model instances and returns the results in JSON format.</td>
  <td>CActiveForm</td>
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
<div class="detailHeader" id="action-detail">
action<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$action</b>;</div>

<p>the form action URL (see <?php echo CHtml::link('CHtml::normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter).
If not set, the current page URL is used.</p>


<div class="detailHeader" id="attributes-detail">
attributes<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
protected array <b>$attributes</b>;</div>

<p>the javascript options for model attributes (input ID => options)</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?></li>
</ul>
</div>

<div class="detailHeader" id="clientOptions-detail">
clientOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$clientOptions</b>;</div>

<p>the options to be passed to the javascript validation plugin.
The following options are supported:
<ul>
<li>ajaxVar: string, the name of the parameter indicating the request is an AJAX request.
When the AJAX validation is triggered, a parameter named as this property will be sent
together with the other form data to the server. The parameter value is the form ID.
The server side can then detect who triggers the AJAX validation and react accordingly.
Defaults to 'ajax'.</li>
<li>validationUrl: string, the URL that performs the AJAX validations.
If not set, it will take the value of <?php echo CHtml::link('action', array('/site/doc', 'view' => 'CActiveForm', '#' => 'action')); ?>.</li>
<li>validationDelay: integer, the number of milliseconds that an AJAX validation should be
delayed after an input is changed. A value 0 means the validation will be triggered immediately
when an input is changed. A value greater than 0 means changing several inputs may only
trigger a single validation if they happen fast enough, which may help reduce the server load.
Defaults to 200 (0.2 second).</li>
<li>validateOnSubmit: boolean, whether to perform AJAX validation when the form is being submitted.
If there are any validation errors, the form submission will be stopped.
Defaults to false.</li>
<li>validateOnChange: boolean, whether to trigger an AJAX validation
each time when an input's value is changed.	You may want to turn this off
if it causes too much performance impact, because each AJAX validation request
will submit the data of the whole form. Defaults to true.</li>
<li>validateOnType: boolean, whether to trigger an AJAX validation each time when the user
presses a key. When setting this property to be true, you should tune up the 'validationDelay'
option to avoid triggering too many AJAX validations. Defaults to false.</li>
<li>hideErrorMessage: boolean, whether to hide the error message even if there is an error.
Defaults to false, which means the error message will show up whenever the input has an error.</li>
<li>inputContainer: string, the jQuery selector for the HTML element containing the input field.
During the validation process, CActiveForm will set different CSS class for the container element
to indicate the state change. If not set, it means the closest 'div' element that contains the input field.</li>
<li>errorCssClass: string, the CSS class to be assigned to the container whose associated input
has AJAX validation error. Defaults to 'error'.</li>
<li>successCssClass: string, the CSS class to be assigned to the container whose associated input
passes AJAX validation without any error. Defaults to 'success'.</li>
<li>validatingCssClass: string, the CSS class to be assigned to the container whose associated input
is currently being validated via AJAX. Defaults to 'validating'.</li>
<li>errorMessageCssClass: string, the CSS class assigned to the error messages returned
by AJAX validations. Defaults to 'errorMessage'.</li>
<li>beforeValidate: function, the function that will be invoked before performing ajax-based validation
triggered by form submission action (available only when validateOnSubmit is set true).
The expected function signature should be <code>beforeValidate(form) {...}</code>, where 'form' is
the jquery representation of the form object. If the return value of this function is NOT true, the validation
will be cancelled.
<br/><br/>
Note that because this option refers to a js function, you should wrap the value with <?php echo CHtml::link('CJavaScriptExpression', array('/site/doc', 'view' => 'CJavaScriptExpression')); ?> to prevent it
from being encoded as a string. This option has been available since version 1.1.3.</li>
<li>afterValidate: function, the function that will be invoked after performing ajax-based validation
triggered by form submission action (available only when validateOnSubmit is set true).
The expected function signature should be <code>afterValidate(form, data, hasError) {...}</code>, where 'form' is
the jquery representation of the form object; 'data' is the JSON response from the server-side validation; 'hasError'
is a boolean value indicating whether there is any validation error. If the return value of this function is NOT true,
the normal form submission will be cancelled.
<br/><br/>
Note that because this option refers to a js function, you should wrap the value with <?php echo CHtml::link('CJavaScriptExpression', array('/site/doc', 'view' => 'CJavaScriptExpression')); ?> to prevent it
from being encoded as a string. This option has been available since version 1.1.3.</li>
<li>beforeValidateAttribute: function, the function that will be invoked before performing ajax-based validation
triggered by a single attribute input change. The expected function signature should be
<code>beforeValidateAttribute(form, attribute) {...}</code>, where 'form' is the jquery representation of the form object
and 'attribute' refers to the js options for the triggering attribute (see <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?>).
If the return value of this function is NOT true, the validation will be cancelled.
<br/><br/>
Note that because this option refers to a js function, you should wrap the value with <?php echo CHtml::link('CJavaScriptExpression', array('/site/doc', 'view' => 'CJavaScriptExpression')); ?> to prevent it
from being encoded as a string. This option has been available since version 1.1.3.</li>
<li>afterValidateAttribute: function, the function that will be invoked after performing ajax-based validation
triggered by a single attribute input change. The expected function signature should be
<code>afterValidateAttribute(form, attribute, data, hasError) {...}</code>, where 'form' is the jquery
representation of the form object; 'attribute' refers to the js options for the triggering attribute (see <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?>);
'data' is the JSON response from the server-side validation; 'hasError' is a boolean value indicating whether
there is any validation error.
<br/><br/>
Note that because this option refers to a js function, you should wrap the value with <?php echo CHtml::link('CJavaScriptExpression', array('/site/doc', 'view' => 'CJavaScriptExpression')); ?> to prevent it
from being encoded as a string. This option has been available since version 1.1.3.</li>
</ul>
<br/><br/>
Some of the above options may be overridden in individual calls of <?php echo CHtml::link('error()', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?>.
They include: validationDelay, validateOnChange, validateOnType, hideErrorMessage,
inputContainer, errorCssClass, successCssClass, validatingCssClass, beforeValidateAttribute, afterValidateAttribute.</p>


<div class="detailHeader" id="enableAjaxValidation-detail">
enableAjaxValidation<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$enableAjaxValidation</b>;</div>

<p>whether to enable data validation via AJAX. Defaults to false.
When this property is set true, you should respond to the AJAX validation request on the server side as shown below:
<pre>
public function actionCreate()
{
    $model=new User;
    if(isset($_POST['ajax']) &amp;&amp; $_POST['ajax']==='user-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()-&gt;end();
    }
    ......
}
</pre></p>


<div class="detailHeader" id="enableClientValidation-detail">
enableClientValidation<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public boolean <b>$enableClientValidation</b>;</div>

<p>whether to enable client-side data validation. Defaults to false.
<br/><br/>
When this property is set true, client-side validation will be performed by validators
that support it (see <?php echo CHtml::link('CValidator::enableClientValidation', array('/site/doc', 'view' => 'CValidator', '#' => 'enableClientValidation')); ?> and <?php echo CHtml::link('CValidator::clientValidateAttribute', array('/site/doc', 'view' => 'CValidator', '#' => 'clientValidateAttribute')); ?>).</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?></li>
</ul>
</div>

<div class="detailHeader" id="errorMessageCssClass-detail">
errorMessageCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$errorMessageCssClass</b>;</div>

<p>the CSS class name for error messages. 
Since 1.1.14 this defaults to 'errorMessage' defined in CHtml::$errorMessageCss.
Individual <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CActiveForm', '#' => 'error')); ?> call may override this value by specifying the 'class' HTML option.</p>


<div class="detailHeader" id="focus-detail">
focus<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public mixed <b>$focus</b>;</div>

<p>form element to get initial input focus on page load.
<br/><br/>
Defaults to null meaning no input field has a focus.
If set as array, first element should be model and second element should be the attribute.
If set as string any jQuery selector can be used
<br/><br/>
Example - set input focus on page load to:
<ul>
<li>'focus'=>array($model,'username') - $model->username input filed</li>
<li>'focus'=>'#'.CHtml::activeId($model,'username') - $model->username input field</li>
<li>'focus'=>'#LoginForm_username' - input field with ID LoginForm_username</li>
<li>'focus'=>'input[type="text"]:first' - first input element of type text</li>
<li>'focus'=>'input:visible:enabled:first' - first visible and enabled input element</li>
<li>'focus'=>'input:text[value=""]:first' - first empty input</li>
</ul></p>


<div class="detailHeader" id="htmlOptions-detail">
htmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$htmlOptions</b>;</div>

<p>additional HTML attributes that should be rendered for the form tag.</p>


<div class="detailHeader" id="method-detail">
method<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$method</b>;</div>

<p>the form submission method. This should be either 'post' or 'get'.
Defaults to 'post'.</p>


<div class="detailHeader" id="stateful-detail">
stateful<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$stateful</b>;</div>

<p>whether to generate a stateful form (See <?php echo CHtml::link('CHtml::statefulForm', array('/site/doc', 'view' => 'CHtml', '#' => 'statefulForm')); ?>). Defaults to false.</p>


<div class="detailHeader" id="summaryID-detail">
summaryID<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
protected string <b>$summaryID</b>;</div>

<p>the ID of the container element for error summary</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('errorSummary', array('/site/doc', 'view' => 'CActiveForm', '#' => 'errorSummary')); ?></li>
</ul>
</div>

<h2>Method Details</h2>

<div class="detailHeader" id="checkBox-detail">
checkBox()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBox</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated check box</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L829">yii\web\widgets\CActiveForm.php#L829</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeCheckBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a checkbox for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeCheckBox', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBox')); ?>.
Please check <?php echo CHtml::link('CHtml::activeCheckBox', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBox')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="checkBoxList-detail">
checkBoxList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>checkBoxList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the check box list.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">addtional HTML options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated check box list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L877">yii\web\widgets\CActiveForm.php#L877</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeCheckBoxList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a checkbox list for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeCheckBoxList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBoxList')); ?>.
Please check <?php echo CHtml::link('CHtml::activeCheckBoxList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBoxList')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="dateField-detail">
dateField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>dateField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L675">yii\web\widgets\CActiveForm.php#L675</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dateField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeDateField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a date field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeDateField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeDateField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeDateField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeDateField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="dropDownList-detail">
dropDownList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>dropDownList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data for generating the list options (value=>display)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated drop down list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L845">yii\web\widgets\CActiveForm.php#L845</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropDownList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeDropDownList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a dropdown list for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeDropDownList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeDropDownList')); ?>.
Please check <?php echo CHtml::link('CHtml::activeDropDownList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeDropDownList')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="emailField-detail">
emailField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>emailField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L627">yii\web\widgets\CActiveForm.php#L627</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">emailField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeEmailField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders an email field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeEmailField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeEmailField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeEmailField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeEmailField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="error-detail">
error()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>error</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
), boolean $enableAjaxValidation=true, boolean $enableClientValidation=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes to be rendered in the container div tag.
Besides all those options available in <?php echo CHtml::link('CHtml::error', array('/site/doc', 'view' => 'CHtml', '#' => 'error')); ?>, the following options are recognized in addition:
<ul>
<li>validationDelay</li>
<li>validateOnChange</li>
<li>validateOnType</li>
<li>hideErrorMessage</li>
<li>inputContainer</li>
<li>errorCssClass</li>
<li>successCssClass</li>
<li>validatingCssClass</li>
<li>beforeValidateAttribute</li>
<li>afterValidateAttribute</li>
</ul>
These options override the corresponding options as declared in options for this
particular model attribute. For more details about these options, please refer to <?php echo CHtml::link('clientOptions', array('/site/doc', 'view' => 'CActiveForm', '#' => 'clientOptions')); ?>.
Note that these options are only used when <?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableAjaxValidation')); ?> or <?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableClientValidation')); ?>
is set true.
<ul>
<li>inputID</li>
</ul>
When an CActiveForm input field uses a custom ID, for ajax/client validation to work properly 
inputID should be set to the same ID
<br/><br/>
Example:
<pre>
&lt;div class=&quot;form-element&quot;&gt;
   &lt;?php echo $form-&gt;labelEx($model,'attribute'); ?&gt;
   &lt;?php echo $form-&gt;textField($model,'attribute', array('id'=&gt;'custom-id')); ?&gt;
   &lt;?php echo $form-&gt;error($model,'attribute',array('inputID'=&gt;'custom-id')); ?&gt;
&lt;/div&gt;
</pre>
<br/><br/>
When client-side validation is enabled, an option named "clientValidation" is also recognized.
This option should take a piece of JavaScript code to perform client-side validation. In the code,
the variables are predefined:
<ul>
<li>value: the current input value associated with this attribute.</li>
<li>messages: an array that may be appended with new error messages for the attribute.</li>
<li>attribute: a data structure keeping all client-side options for the attribute</li>
</ul>
This should NOT be a function but just the code, Yii will enclose the code you provide inside the
actual JS function.</td>
</tr>
<tr>
  <td class="paramNameCol">$enableAjaxValidation</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to enable AJAX validation for the specified attribute.
Note that in order to enable AJAX validation, both <?php echo CHtml::link('enableAjaxValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableAjaxValidation')); ?> and this parameter
must be true.</td>
</tr>
<tr>
  <td class="paramNameCol">$enableClientValidation</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to enable client-side validation for the specified attribute.
Note that in order to enable client-side validation, both <?php echo CHtml::link('enableClientValidation', array('/site/doc', 'view' => 'CActiveForm', '#' => 'enableClientValidation')); ?> and this parameter
must be true. This parameter has been available since version 1.1.7.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the validation result (error display or success message).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L444">yii\web\widgets\CActiveForm.php#L444</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">error</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$enableAjaxValidation</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$enableClientValidation</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableAjaxValidation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$enableAjaxValidation</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableClientValidation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$enableClientValidation</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessageCssClass</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$enableAjaxValidation&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$enableClientValidation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">error</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeId</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$inputID</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inputID'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inputID'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'inputID'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$inputID</span><span style="color: #007700">.</span><span style="color: #DD0000">'_em_'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'inputID'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$inputID</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorID'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'model'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'enableAjaxValidation'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$enableAjaxValidation</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$optionNames</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'validationDelay'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'validateOnChange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'validateOnType'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'hideErrorMessage'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'inputContainer'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorCssClass'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'successCssClass'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'validatingCssClass'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'beforeValidateAttribute'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'afterValidateAttribute'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$optionNames&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CActiveRecord&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isNewRecord</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">[</span><span style="color: #DD0000">'status'</span><span style="color: #007700">]=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$enableClientValidation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validators</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidation'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidation'</span><span style="color: #007700">])&nbsp;:&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidation'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributeName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #DD0000">']'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$pos</span><span style="color: #007700">!==</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;e.g.&nbsp;[a]name<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributeName</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValidators</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributeName</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableClientValidation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$js</span><span style="color: #007700">=</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clientValidateAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributeName</span><span style="color: #007700">))!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validators</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$js</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$validators</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">[</span><span style="color: #DD0000">'clientValidation'</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #DD0000">"function(value,&nbsp;messages,&nbsp;attribute)&nbsp;{\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$validators</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n}"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">error</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$html</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">],</span><span style="color: #DD0000">';'</span><span style="color: #007700">).</span><span style="color: #DD0000">';display:none'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'display:none'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorContainerTag</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$inputID</span><span style="color: #007700">]=</span><span style="color: #0000BB">$option</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Displays the first validation error for a model attribute.
This is similar to <?php echo CHtml::link('CHtml::error', array('/site/doc', 'view' => 'CHtml', '#' => 'error')); ?> except that it registers the model attribute
so that if its value is changed by users, an AJAX validation may be triggered.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CHtml::error', array('/site/doc', 'view' => 'CHtml', '#' => 'error')); ?></li>
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
  <td class="paramDescCol">the models whose input errors are to be displayed. This can be either
a single model or an array of models.</td>
</tr>
<tr>
  <td class="paramNameCol">$header</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a piece of HTML code that appears in front of the errors</td>
</tr>
<tr>
  <td class="paramNameCol">$footer</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a piece of HTML code that appears at the end of the errors</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes to be rendered in the container div tag.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error summary. Empty if no errors are found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L544">yii\web\widgets\CActiveForm.php#L544</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">errorSummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,</span><span style="color: #0000BB">$header</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$footer</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableAjaxValidation&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableClientValidation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">errorSummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,</span><span style="color: #0000BB">$header</span><span style="color: #007700">,</span><span style="color: #0000BB">$footer</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">.</span><span style="color: #DD0000">'_es_'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">errorSummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,</span><span style="color: #0000BB">$header</span><span style="color: #007700">,</span><span style="color: #0000BB">$footer</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$html</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$header</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$header</span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;p&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Please&nbsp;fix&nbsp;the&nbsp;following&nbsp;input&nbsp;errors:'</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorSummaryCss</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">],</span><span style="color: #DD0000">';'</span><span style="color: #007700">).</span><span style="color: #DD0000">';display:none'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'display:none'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$header</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n&lt;ul&gt;&lt;li&gt;dummy&lt;/li&gt;&lt;/ul&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$footer</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">summaryID</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$models&nbsp;</span><span style="color: #007700">:&nbsp;array(</span><span style="color: #0000BB">$models</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSafeAttributeNames</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_summaryAttributes</span><span style="color: #007700">[]=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeId</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Displays a summary of validation errors for one or several models.
This method is very similar to <?php echo CHtml::link('CHtml::errorSummary', array('/site/doc', 'view' => 'CHtml', '#' => 'errorSummary')); ?> except that it also works
when AJAX validation is performed.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CHtml::errorSummary', array('/site/doc', 'view' => 'CHtml', '#' => 'errorSummary')); ?></li>
</ul>
</div>

<div class="detailHeader" id="fileField-detail">
fileField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>fileField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L799">yii\web\widgets\CActiveForm.php#L799</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">fileField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeFileField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a file field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeFileField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeFileField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeFileField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeFileField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="hiddenField-detail">
hiddenField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>hiddenField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L754">yii\web\widgets\CActiveForm.php#L754</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeHiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a hidden field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeHiddenField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeHiddenField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeHiddenField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeHiddenField')); ?> for detailed information
about the parameters for this method.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L323">yii\web\widgets\CActiveForm.php#L323</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stateful</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">statefulForm</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">action</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">method</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">beginForm</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">action</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">method</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessageCssClass</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessageCssClass</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorMessageCss</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the widget.
This renders the form open tag.</p>


<div class="detailHeader" id="label-detail">
label()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>label</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated label tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L580">yii\web\widgets\CActiveForm.php#L580</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders an HTML label for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'activeLabel')); ?>.
Please check <?php echo CHtml::link('CHtml::activeLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'activeLabel')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="labelEx-detail">
labelEx()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>labelEx</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated label tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L595">yii\web\widgets\CActiveForm.php#L595</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">labelEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeLabelEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders an HTML label for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeLabelEx', array('/site/doc', 'view' => 'CHtml', '#' => 'activeLabelEx')); ?>.
Please check <?php echo CHtml::link('CHtml::activeLabelEx', array('/site/doc', 'view' => 'CHtml', '#' => 'activeLabelEx')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="listBox-detail">
listBox()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>listBox</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data for generating the list options (value=>display)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated list box</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L861">yii\web\widgets\CActiveForm.php#L861</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">listBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeListBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a list box for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeListBox', array('/site/doc', 'view' => 'CHtml', '#' => 'activeListBox')); ?>.
Please check <?php echo CHtml::link('CHtml::activeListBox', array('/site/doc', 'view' => 'CHtml', '#' => 'activeListBox')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="numberField-detail">
numberField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>numberField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L643">yii\web\widgets\CActiveForm.php#L643</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">numberField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeNumberField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a number field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeNumberField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeNumberField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeNumberField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeNumberField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="passwordField-detail">
passwordField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>passwordField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L769">yii\web\widgets\CActiveForm.php#L769</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">passwordField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activePasswordField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a password field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activePasswordField', array('/site/doc', 'view' => 'CHtml', '#' => 'activePasswordField')); ?>.
Please check <?php echo CHtml::link('CHtml::activePasswordField', array('/site/doc', 'view' => 'CHtml', '#' => 'activePasswordField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="radioButton-detail">
radioButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButton</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated radio button</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L814">yii\web\widgets\CActiveForm.php#L814</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeRadioButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a radio button for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeRadioButton', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButton')); ?>.
Please check <?php echo CHtml::link('CHtml::activeRadioButton', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButton')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="radioButtonList-detail">
radioButtonList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>radioButtonList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the radio button list.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">addtional HTML options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated radio button list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L893">yii\web\widgets\CActiveForm.php#L893</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeRadioButtonList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a radio button list for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeRadioButtonList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButtonList')); ?>.
Please check <?php echo CHtml::link('CHtml::activeRadioButtonList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButtonList')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="rangeField-detail">
rangeField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>rangeField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L659">yii\web\widgets\CActiveForm.php#L659</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">rangeField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeRangeField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a range field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeRangeField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRangeField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeRangeField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRangeField')); ?> for detailed information
about the parameters for this method.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L343">yii\web\widgets\CActiveForm.php#L343</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">focus</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">focus</span><span style="color: #007700">=</span><span style="color: #DD0000">"#"</span><span style="color: #007700">.</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeId</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">focus</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">focus</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">endForm</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clientScript</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableAjaxValidation&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableClientValidation&nbsp;</span><span style="color: #007700">||&nbsp;empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">focus</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'CActiveForm#focus'</span><span style="color: #007700">,</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!window.location.hash)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jQuery('"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">focus</span><span style="color: #007700">.</span><span style="color: #DD0000">"').focus();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clientOptions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clientOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'validationUrl'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clientOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'validationUrl'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'validationUrl'</span><span style="color: #007700">]=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clientOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'validationUrl'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_summaryAttributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">][</span><span style="color: #DD0000">'summary'</span><span style="color: #007700">]=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'attributes'</span><span style="color: #007700">]=</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">summaryID</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'summaryID'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">summaryID</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">focus</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'focus'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">focus</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorCss</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'errorCss'</span><span style="color: #007700">]=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorCss</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'yiiactiveform'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">.</span><span style="color: #DD0000">'#'</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #DD0000">"jQuery('#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">').yiiactiveform(</span><span style="color: #0000BB">$options</span><span style="color: #DD0000">);"</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Runs the widget.
This registers the necessary javascript code and renders the form close tag.</p>


<div class="detailHeader" id="searchField-detail">
searchField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>searchField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L739">yii\web\widgets\CActiveForm.php#L739</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">searchField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeSearchField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a search field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeSearchField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeSearchField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeSearchField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeSearchField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="telField-detail">
telField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>telField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L708">yii\web\widgets\CActiveForm.php#L708</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">telField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeTelField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a time field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeTimeField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTimeField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeTimeField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTimeField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="textArea-detail">
textArea()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>textArea</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated text area</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L784">yii\web\widgets\CActiveForm.php#L784</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">textArea</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeTextArea</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a text area for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeTextArea', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTextArea')); ?>.
Please check <?php echo CHtml::link('CHtml::activeTextArea', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTextArea')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="textField-detail">
textField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>textField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L723">yii\web\widgets\CActiveForm.php#L723</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">textField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeTextField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a text field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeTextField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTextField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeTextField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTextField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="timeField-detail">
timeField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>timeField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L692">yii\web\widgets\CActiveForm.php#L692</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">timeField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeTimeField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a time field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeTimeField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTimeField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeTimeField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTimeField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="urlField-detail">
urlField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>urlField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L611">yii\web\widgets\CActiveForm.php#L611</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">urlField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeUrlField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a url field for a model attribute.
This method is a wrapper of <?php echo CHtml::link('CHtml::activeUrlField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeUrlField')); ?>.
Please check <?php echo CHtml::link('CHtml::activeUrlField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeUrlField')); ?> for detailed information
about the parameters for this method.</p>


<div class="detailHeader" id="validate-detail">
validate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>validate</b>(mixed $models, array $attributes=NULL, boolean $loadInput=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$models</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">a single model instance or an array of models.</td>
</tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attributes that should be validated. Defaults to null,
meaning any attribute listed in the applicable validation rules of the models should be
validated. If this parameter is given as a list of attributes, only
the listed attributes will be validated.</td>
</tr>
<tr>
  <td class="paramNameCol">$loadInput</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to load the data from $_POST array in this method.
If this is true, the model will be populated from <code>$_POST[ModelClass]</code>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the JSON representation of the validation error messages.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L910">yii\web\widgets\CActiveForm.php#L910</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">validate</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$loadInput</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$models</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$models</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$models&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">modelName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$loadInput&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validate</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getErrors</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$errors</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeId</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)]=</span><span style="color: #0000BB">$errors</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'json_encode'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">CJSON</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Validates one or several models and returns the results in JSON format.
This is a helper method that simplifies the way of writing AJAX validation code.</p>


<div class="detailHeader" id="validateTabular-detail">
validateTabular()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>validateTabular</b>(mixed $models, array $attributes=NULL, boolean $loadInput=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$models</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">an array of model instances.</td>
</tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attributes that should be validated. Defaults to null,
meaning any attribute listed in the applicable validation rules of the models should be
validated. If this parameter is given as a list of attributes, only
the listed attributes will be validated.</td>
</tr>
<tr>
  <td class="paramNameCol">$loadInput</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to load the data from $_POST array in this method.
If this is true, the model will be populated from <code>$_POST[ModelClass][$i]</code>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the JSON representation of the validation error messages.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CActiveForm.php#L939">yii\web\widgets\CActiveForm.php#L939</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">validateTabular</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$loadInput</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$models</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$models</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$models&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">modelName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$loadInput&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validate</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getErrors</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$errors</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">activeId</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #DD0000">'['</span><span style="color: #007700">.</span><span style="color: #0000BB">$i</span><span style="color: #007700">.</span><span style="color: #DD0000">']'</span><span style="color: #007700">.</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)]=</span><span style="color: #0000BB">$errors</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'json_encode'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">CJSON</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Validates an array of model instances and returns the results in JSON format.
This is a helper method that simplifies the way of writing AJAX validation code for tabular input.</p>


