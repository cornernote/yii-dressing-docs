<?php
$this->pageTitle = $this->pageHeading = 'TbFormButtonElement';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbFormButtonElement';
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
  <td><?php echo CHtml::link('booster.widgets.forms.buttons', array('/site/doc', '#' => 'booster.widgets.forms.buttons')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbFormButtonElement &raquo;
<?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormButtonElement.php">booster/widgets/TbFormButtonElement.php</a></td>
</tr>
</table>

<div id="classDescription">
## The buttonElementClass for TbForm
<br/><br/>
Support for Yii formbuilder</div>
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
<tr id="TbButtonTypes">
  <td><?php echo CHtml::link('TbButtonTypes', array('/site/doc', 'view' => 'TbFormButtonElement', '#' => 'TbButtonTypes-detail')); ?></td>
  <td>array</td>
  <td>Core button types (alias=>CHtml method name)</td>
  <td>TbFormButtonElement</td>
</tr>
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CFormElement', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>list of attributes (name=>value) for the HTML element represented by this object.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="layoutType">
  <td><?php echo CHtml::link('layoutType', array('/site/doc', 'view' => 'TbFormButtonElement', '#' => 'layoutType-detail')); ?></td>
  <td>string</td>
  <td>the button layout: set as TbButton->type in function render()
Valid values are 'primary', 'info', 'success', 'warning', 'danger' and 'inverse'.</td>
  <td>TbFormButtonElement</td>
</tr>
<tr class="inherited" id="parent">
  <td><?php echo CHtml::link('parent', array('/site/doc', 'view' => 'CFormElement', '#' => 'parent-detail')); ?></td>
  <td>mixed</td>
  <td>the direct parent of this element.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="visible">
  <td><?php echo CHtml::link('visible', array('/site/doc', 'view' => 'CFormElement', '#' => 'visible-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CFormElement', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="__get">
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CFormElement', '#' => '__get-detail')); ?></td>
  <td>Returns a property value or an attribute value.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CComponent', '#' => '__isset-detail')); ?></td>
  <td>Checks if a property value is null.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__set">
  <td><?php echo CHtml::link('__set()', array('/site/doc', 'view' => 'CFormElement', '#' => '__set-detail')); ?></td>
  <td>Sets value of a property or attribute.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="__toString">
  <td><?php echo CHtml::link('__toString()', array('/site/doc', 'view' => 'CFormElement', '#' => '__toString-detail')); ?></td>
  <td>Converts the object to a string.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr class="inherited" id="configure">
  <td><?php echo CHtml::link('configure()', array('/site/doc', 'view' => 'CFormElement', '#' => 'configure-detail')); ?></td>
  <td>Configures this object with property initial values.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr class="inherited" id="getParent">
  <td><?php echo CHtml::link('getParent()', array('/site/doc', 'view' => 'CFormElement', '#' => 'getParent-detail')); ?></td>
  <td>Returns the direct parent of this element. This could be either a <?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?> object or a <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> object
(a controller or a widget).</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr class="inherited" id="getVisible">
  <td><?php echo CHtml::link('getVisible()', array('/site/doc', 'view' => 'CFormElement', '#' => 'getVisible-detail')); ?></td>
  <td>Returns a value indicating whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'TbFormButtonElement', '#' => 'render-detail')); ?></td>
  <td>Run TbButton widget</td>
  <td>TbFormButtonElement</td>
</tr>
<tr class="inherited" id="setVisible">
  <td><?php echo CHtml::link('setVisible()', array('/site/doc', 'view' => 'CFormElement', '#' => 'setVisible-detail')); ?></td>
  <td>Sets whether this element is visible and should be rendered.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
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
<tr class="inherited" id="evaluateVisible">
  <td><?php echo CHtml::link('evaluateVisible()', array('/site/doc', 'view' => 'CFormElement', '#' => 'evaluateVisible-detail')); ?></td>
  <td>Evaluates the visibility of this element.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="prepareWidgetOptions">
  <td><?php echo CHtml::link('prepareWidgetOptions()', array('/site/doc', 'view' => 'TbFormButtonElement', '#' => 'prepareWidgetOptions-detail')); ?></td>
  <td>Prepare the options before running the TbButton widget</td>
  <td>TbFormButtonElement</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="TbButtonTypes-detail">
TbButtonTypes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static array <b>$TbButtonTypes</b>;</div>

<p>Core button types (alias=>CHtml method name)</p>


<div class="detailHeader" id="layoutType-detail">
layoutType<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$layoutType</b>;</div>

<p>the button layout: set as TbButton->type in function render()
Valid values are 'primary', 'info', 'success', 'warning', 'danger' and 'inverse'.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="prepareWidgetOptions-detail">
prepareWidgetOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>prepareWidgetOptions</b>(array $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormButtonElement.php#L54">booster/widgets/TbFormButtonElement.php#L54</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">prepareWidgetOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//map&nbsp;$this-&gt;type&nbsp;to&nbsp;attribute&nbsp;buttonType&nbsp;of&nbsp;TbButton<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'buttonType'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$TbButtonTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//map&nbsp;layoutType&nbsp;to&nbsp;attribute&nbsp;type&nbsp;of&nbsp;TbButton<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layoutType</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layoutType</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//move&nbsp;$options['name']&nbsp;to&nbsp;htmlOptions<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Prepare the options before running the TbButton widget
<br/><br/>
Map Yii formBuilder compatible:
$this->type => TbButton->buttonType
$this->layoutType => TbButton->type</p>


<div class="detailHeader" id="render-detail">
render()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>render</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbFormButtonElement.php#L77">booster/widgets/TbFormButtonElement.php#L77</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$TbButtonTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepareWidgetOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #DD0000">'TbButton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">render</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Run TbButton widget</p>


