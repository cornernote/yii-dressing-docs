<?php
$this->pageTitle = $this->pageHeading = 'CAutoComplete';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CAutoComplete';
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
  <td>class CAutoComplete &raquo;
<?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CAutoComplete.php">yii\web\widgets\CAutoComplete.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CAutoComplete generates an auto-complete text field.
<br/><br/>
CAutoComplete is based on the <a href="http://plugins.jquery.com/project/autocompletex">jQuery Autocomplete</a>.
<br/><br/>
This class is deprecated since Yii 1.1.3. Consider using CJuiAutoComplete.
There is <a href="http://www.learningjquery.com/2010/06/autocomplete-migration-guide">a good migration guide from the author of both JavaScript solutions</a>.</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="attribute">
  <td><?php echo CHtml::link('attribute', array('/site/doc', 'view' => 'CInputWidget', '#' => 'attribute-detail')); ?></td>
  <td>string</td>
  <td>the attribute associated with this widget.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr id="autoFill">
  <td><?php echo CHtml::link('autoFill', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'autoFill-detail')); ?></td>
  <td>boolean</td>
  <td>fill the textinput while still selecting a value, replacing the value
if more is typed or something else is selected.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="cacheLength">
  <td><?php echo CHtml::link('cacheLength', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'cacheLength-detail')); ?></td>
  <td>integer</td>
  <td>the number of backend query results to store in cache.</td>
  <td>CAutoComplete</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="cssFile">
  <td><?php echo CHtml::link('cssFile', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'cssFile-detail')); ?></td>
  <td>mixed</td>
  <td>the CSS file used for the widget.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="data">
  <td><?php echo CHtml::link('data', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'data-detail')); ?></td>
  <td>array</td>
  <td>data that would be saved as client-side data to provide candidate selections.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="delay">
  <td><?php echo CHtml::link('delay', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'delay-detail')); ?></td>
  <td>integer</td>
  <td>the delay in milliseconds the autocompleter waits after
a keystroke to activate itself.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="extraParams">
  <td><?php echo CHtml::link('extraParams', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'extraParams-detail')); ?></td>
  <td>array</td>
  <td>extra parameters for the backend.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="formatItem">
  <td><?php echo CHtml::link('formatItem', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'formatItem-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that provides advanced markup for an item.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="formatMatch">
  <td><?php echo CHtml::link('formatMatch', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'formatMatch-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that can be used to limit the data that autocomplete
searches for matches.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="formatResult">
  <td><?php echo CHtml::link('formatResult', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'formatResult-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that provides the formatting for the value to be
put into the input field.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="highlight">
  <td><?php echo CHtml::link('highlight', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'highlight-detail')); ?></td>
  <td>boolean|string</td>
  <td>Whether and how to highlight matches in the select box.</td>
  <td>CAutoComplete</td>
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
<tr id="inputClass">
  <td><?php echo CHtml::link('inputClass', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'inputClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the input element.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="loadingClass">
  <td><?php echo CHtml::link('loadingClass', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'loadingClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class used when the data is being loaded from backend.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="matchCase">
  <td><?php echo CHtml::link('matchCase', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'matchCase-detail')); ?></td>
  <td>boolean</td>
  <td>whether or not the comparison is case sensitive.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="matchContains">
  <td><?php echo CHtml::link('matchContains', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'matchContains-detail')); ?></td>
  <td>boolean</td>
  <td>whether or not the comparison looks inside
(i.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="matchSubset">
  <td><?php echo CHtml::link('matchSubset', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'matchSubset-detail')); ?></td>
  <td>boolean</td>
  <td>whether or not the autocompleter can use a cache for more
specific queries.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="max">
  <td><?php echo CHtml::link('max', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'max-detail')); ?></td>
  <td>integer</td>
  <td>limit the number of items in the select box.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="methodChain">
  <td><?php echo CHtml::link('methodChain', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'methodChain-detail')); ?></td>
  <td>string</td>
  <td>the chain of method calls that would be appended at the end of the autocomplete constructor.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="minChars">
  <td><?php echo CHtml::link('minChars', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'minChars-detail')); ?></td>
  <td>integer</td>
  <td>the minimum number of characters a user has to type before
the autocompleter activates.</td>
  <td>CAutoComplete</td>
</tr>
<tr class="inherited" id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'CInputWidget', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td>the data model associated with this widget.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr id="multiple">
  <td><?php echo CHtml::link('multiple', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'multiple-detail')); ?></td>
  <td>boolean</td>
  <td>whether to allow more than one autocompleted-value to enter.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="multipleSeparator">
  <td><?php echo CHtml::link('multipleSeparator', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'multipleSeparator-detail')); ?></td>
  <td>string</td>
  <td>seperator to put between values when using multiple option.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="mustMatch">
  <td><?php echo CHtml::link('mustMatch', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'mustMatch-detail')); ?></td>
  <td>boolean</td>
  <td>if set to true, the autocompleter will only allow results that
are presented by the backend.</td>
  <td>CAutoComplete</td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CInputWidget', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the input name.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr id="options">
  <td><?php echo CHtml::link('options', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'options-detail')); ?></td>
  <td>array</td>
  <td>additional options that can be passed to the constructor of the autocomplete js object.</td>
  <td>CAutoComplete</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="resultsClass">
  <td><?php echo CHtml::link('resultsClass', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'resultsClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the dropdown list.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="scroll">
  <td><?php echo CHtml::link('scroll', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'scroll-detail')); ?></td>
  <td>boolean</td>
  <td>whether to scroll when more results than configured via scrollHeight are available.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="scrollHeight">
  <td><?php echo CHtml::link('scrollHeight', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'scrollHeight-detail')); ?></td>
  <td>integer</td>
  <td>height of scrolled autocomplete control in pixels.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="selectFirst">
  <td><?php echo CHtml::link('selectFirst', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'selectFirst-detail')); ?></td>
  <td>boolean</td>
  <td>if this is set to true, the first autocomplete value will
be automatically selected on tab/return, even if it has not been handpicked
by keyboard or mouse action.</td>
  <td>CAutoComplete</td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="textArea">
  <td><?php echo CHtml::link('textArea', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'textArea-detail')); ?></td>
  <td>boolean</td>
  <td>whether to show the autocomplete using a text area.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="url">
  <td><?php echo CHtml::link('url', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'url-detail')); ?></td>
  <td>string|array</td>
  <td>the URL that can return the candidate selections.</td>
  <td>CAutoComplete</td>
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
<tr id="width">
  <td><?php echo CHtml::link('width', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'width-detail')); ?></td>
  <td>integer</td>
  <td>specify a custom width for the select box.</td>
  <td>CAutoComplete</td>
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
<tr id="clientOptions">
  <td><?php echo CHtml::link('clientOptions', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'clientOptions-detail')); ?></td>
  <td>array</td>
  <td>the javascript options</td>
  <td>CAutoComplete</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'init-detail')); ?></td>
  <td>Initializes the widget.</td>
  <td>CAutoComplete</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers the needed CSS and JavaScript.</td>
  <td>CAutoComplete</td>
</tr>
<tr id="registerCssFile">
  <td><?php echo CHtml::link('registerCssFile()', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'registerCssFile-detail')); ?></td>
  <td>Registers the needed CSS file.</td>
  <td>CAutoComplete</td>
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
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CWidget', '#' => 'run-detail')); ?></td>
  <td>Executes the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr id="getClientOptions">
  <td><?php echo CHtml::link('getClientOptions()', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'getClientOptions-detail')); ?></td>
  <td>Returns the javascript options</td>
  <td>CAutoComplete</td>
</tr>
<tr class="inherited" id="hasModel">
  <td><?php echo CHtml::link('hasModel()', array('/site/doc', 'view' => 'CInputWidget', '#' => 'hasModel-detail')); ?></td>
  <td>Determines whether this widget is associated with a data model.</td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
<tr class="inherited" id="resolveNameID">
  <td><?php echo CHtml::link('resolveNameID()', array('/site/doc', 'view' => 'CInputWidget', '#' => 'resolveNameID-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CInputWidget', array('/site/doc', 'view' => 'CInputWidget')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="autoFill-detail">
autoFill<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$autoFill</b>;</div>

<p>fill the textinput while still selecting a value, replacing the value
if more is typed or something else is selected. Defaults to false.</p>


<div class="detailHeader" id="cacheLength-detail">
cacheLength<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$cacheLength</b>;</div>

<p>the number of backend query results to store in cache.
If set to 1 (the current result), no caching will happen. Must be >= 1. Defaults to 10.</p>


<div class="detailHeader" id="clientOptions-detail">
clientOptions<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected array <?php echo CHtml::link('<b>getClientOptions</b>', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'getClientOptions')); ?>()</div>

<p>the javascript options</p>


<div class="detailHeader" id="cssFile-detail">
cssFile<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$cssFile</b>;</div>

<p>the CSS file used for the widget. Defaults to null, meaning
using the default CSS file included together with the widget.
If false, no CSS file will be used. Otherwise, the specified CSS file
will be included when using this widget.</p>


<div class="detailHeader" id="data-detail">
data<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$data</b>;</div>

<p>data that would be saved as client-side data to provide candidate selections.
Each array element can be string or an associative array.
The <?php echo CHtml::link('url', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'url')); ?> property will be ignored if this property is set.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('url', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'url')); ?></li>
</ul>
</div>

<div class="detailHeader" id="delay-detail">
delay<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$delay</b>;</div>

<p>the delay in milliseconds the autocompleter waits after
a keystroke to activate itself. Defaults to 400.</p>


<div class="detailHeader" id="extraParams-detail">
extraParams<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$extraParams</b>;</div>

<p>extra parameters for the backend. If you were to specify
array('bar'=>4), the autocompleter would call the backend with a GET
parameter 'bar' 4. The param can be a function that is called to calculate
the param before each request.</p>


<div class="detailHeader" id="formatItem-detail">
formatItem<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$formatItem</b>;</div>

<p>a javascript function that provides advanced markup for an item.
For each row of results, this function will be called. The returned value will
be displayed inside an LI element in the results list. Autocompleter will
provide 4 parameters: the results row, the position of the row in the list of
results (starting at 1), the number of items in the list of results and the search term.
The default behavior assumes that a single row contains a single value.</p>


<div class="detailHeader" id="formatMatch-detail">
formatMatch<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$formatMatch</b>;</div>

<p>a javascript function that can be used to limit the data that autocomplete
searches for matches. For example, there may be items you want displayed to the user,
but don't want included in the data that's searched. The function is called with the same arguments
as <?php echo CHtml::link('formatItem', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'formatItem')); ?>. Defaults to formatItem.</p>


<div class="detailHeader" id="formatResult-detail">
formatResult<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$formatResult</b>;</div>

<p>a javascript function that provides the formatting for the value to be
put into the input field. Again three arguments: Data, position (starting with one) and
total number of data. The default behavior assumes either plain data to use as result
or uses the same value as provided by formatItem.</p>


<div class="detailHeader" id="highlight-detail">
highlight<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean|string <b>$highlight</b>;</div>

<p>Whether and how to highlight matches in the select box.
Set to false to disable. Set to a javascript function to customize.
The function gets the value as the first argument and the search term as the
second and must return the formatted value. Defaults to Wraps the search term in a &lt;strong&gt; element.</p>


<div class="detailHeader" id="inputClass-detail">
inputClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$inputClass</b>;</div>

<p>the CSS class for the input element. Defaults to "ac_input".</p>


<div class="detailHeader" id="loadingClass-detail">
loadingClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$loadingClass</b>;</div>

<p>the CSS class used when the data is being loaded from backend. Defaults to "ac_loading".</p>


<div class="detailHeader" id="matchCase-detail">
matchCase<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$matchCase</b>;</div>

<p>whether or not the comparison is case sensitive. Important
only if you use caching. Defaults to false.</p>


<div class="detailHeader" id="matchContains-detail">
matchContains<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$matchContains</b>;</div>

<p>whether or not the comparison looks inside
(i.e. does "ba" match "foo bar") the search results. Important only if
you use caching. Don't mix with autofill. Defaults to false.</p>


<div class="detailHeader" id="matchSubset-detail">
matchSubset<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$matchSubset</b>;</div>

<p>whether or not the autocompleter can use a cache for more
specific queries. This means that all matches of "foot" are a subset
of all matches for "foo". Usually this is true, and using this options
decreases server load and increases performance. Only useful with
cacheLength settings bigger than one, like 10. Defaults to true.</p>


<div class="detailHeader" id="max-detail">
max<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$max</b>;</div>

<p>limit the number of items in the select box. Is also sent as
a "limit" parameter with a remote request. Defaults to 10.</p>


<div class="detailHeader" id="methodChain-detail">
methodChain<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$methodChain</b>;</div>

<p>the chain of method calls that would be appended at the end of the autocomplete constructor.
For example, ".result(function(...){})" would cause the specified js function to execute
when the user selects an option.</p>


<div class="detailHeader" id="minChars-detail">
minChars<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$minChars</b>;</div>

<p>the minimum number of characters a user has to type before
the autocompleter activates. Defaults to 1.</p>


<div class="detailHeader" id="multiple-detail">
multiple<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$multiple</b>;</div>

<p>whether to allow more than one autocompleted-value to enter. Defaults to false.</p>


<div class="detailHeader" id="multipleSeparator-detail">
multipleSeparator<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$multipleSeparator</b>;</div>

<p>seperator to put between values when using multiple option. Defaults to ", ".</p>


<div class="detailHeader" id="mustMatch-detail">
mustMatch<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$mustMatch</b>;</div>

<p>if set to true, the autocompleter will only allow results that
are presented by the backend. Note that illegal values result in an empty
input box. Defaults to false.</p>


<div class="detailHeader" id="options-detail">
options<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$options</b>;</div>

<p>additional options that can be passed to the constructor of the autocomplete js object.
This allows you to override existing functions of the autocomplete js class (e.g. the parse() function)
<br/><br/>
If you want to provide JavaScript native code, you have to wrap the string with <?php echo CHtml::link('CJavaScriptExpression', array('/site/doc', 'view' => 'CJavaScriptExpression')); ?> otherwise it will
be enclosed by quotes.</p>


<div class="detailHeader" id="resultsClass-detail">
resultsClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$resultsClass</b>;</div>

<p>the CSS class for the dropdown list. Defaults to "ac_results".</p>


<div class="detailHeader" id="scroll-detail">
scroll<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$scroll</b>;</div>

<p>whether to scroll when more results than configured via scrollHeight are available. Defaults to true.</p>


<div class="detailHeader" id="scrollHeight-detail">
scrollHeight<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$scrollHeight</b>;</div>

<p>height of scrolled autocomplete control in pixels. Defaults to 180.</p>


<div class="detailHeader" id="selectFirst-detail">
selectFirst<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$selectFirst</b>;</div>

<p>if this is set to true, the first autocomplete value will
be automatically selected on tab/return, even if it has not been handpicked
by keyboard or mouse action. If there is a handpicked (highlighted) result,
that result will take precedence. Defaults to true.</p>


<div class="detailHeader" id="textArea-detail">
textArea<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$textArea</b>;</div>

<p>whether to show the autocomplete using a text area. Defaults to false,
meaning a text field is used.</p>


<div class="detailHeader" id="url-detail">
url<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string|array <b>$url</b>;</div>

<p>the URL that can return the candidate selections.
A 'q' GET parameter will be sent with the URL which contains what the user has entered so far.
If the URL is given as an array, it is considered as a route to a controller action and will
be used to generate a URL using <?php echo CHtml::link('CController::createUrl', array('/site/doc', 'view' => 'CController', '#' => 'createUrl')); ?>;
If the URL is an empty string, the currently requested URL is used.
This property will be ignored if <?php echo CHtml::link('data', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'data')); ?> is set.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('data', array('/site/doc', 'view' => 'CAutoComplete', '#' => 'data')); ?></li>
</ul>
</div>

<div class="detailHeader" id="width-detail">
width<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$width</b>;</div>

<p>specify a custom width for the select box. Defaults to the width of the input element.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getClientOptions-detail">
getClientOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>getClientOptions</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the javascript options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CAutoComplete.php#L265">yii\web\widgets\CAutoComplete.php#L265</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getClientOptions</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'minChars'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'delay'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'cacheLength'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'matchSubset'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'matchCase'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'matchContains'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'mustMatch'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'selectFirst'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'extraParams'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'multiple'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'multipleSeparator'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'width'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'autoFill'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'max'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'scroll'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'scrollHeight'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'inputClass'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'resultsClass'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'loadingClass'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$functions</span><span style="color: #007700">=array(</span><span style="color: #DD0000">'formatItem'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'formatMatch'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'formatResult'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'highlight'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$properties&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$property</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$property</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$property</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$property</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$functions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$func</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$func</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$func&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$func</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$func</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$func</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$func</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CAutoComplete.php#L201">yii\web\widgets\CAutoComplete.php#L201</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$id</span><span style="color: #007700">)=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasModel</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">textArea&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'activeTextArea'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'activeTextField'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$field</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">textArea&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'textArea'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'textField'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">$field</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the widget.
This method registers all needed client scripts and renders
the autocomplete input.</p>


<div class="detailHeader" id="registerClientScript-detail">
registerClientScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerClientScript</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CAutoComplete.php#L228">yii\web\widgets\CAutoComplete.php#L228</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$acOptions</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getClientOptions</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">$acOptions</span><span style="color: #007700">===array()?</span><span style="color: #DD0000">'{}'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$acOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'autocomplete'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">url</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$url</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'Yii.CAutoComplete#'</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #DD0000">"jQuery(\"#</span><span style="color: #007700">{</span><span style="color: #0000BB">$id</span><span style="color: #007700">}</span><span style="color: #DD0000">\").legacyautocomplete(</span><span style="color: #0000BB">$data</span><span style="color: #DD0000">,</span><span style="color: #007700">{</span><span style="color: #0000BB">$options</span><span style="color: #007700">}</span><span style="color: #DD0000">)</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">methodChain</span><span style="color: #007700">}</span><span style="color: #DD0000">;"</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the needed CSS and JavaScript.</p>


<div class="detailHeader" id="registerCssFile-detail">
registerCssFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>registerCssFile</b>(string $url=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS URL. If null, a default CSS URL will be used.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\widgets\CAutoComplete.php#L254">yii\web\widgets\CAutoComplete.php#L254</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$url</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCoreScriptUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">'/autocomplete/jquery.autocomplete.css'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the needed CSS file.</p>


