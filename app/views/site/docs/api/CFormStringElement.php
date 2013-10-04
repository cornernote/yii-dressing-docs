<?php
$this->pageTitle = $this->pageHeading = 'CFormStringElement';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CFormStringElement';
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
  <td><?php echo CHtml::link('system.web.form', array('/site/doc', '#' => 'system.web.form')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CFormStringElement &raquo;
<?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CFormStringElement.php">yii/web/form/CFormStringElement.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CFormStringElement represents a string in a form.</div>
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
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CFormElement', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>list of attributes (name=>value) for the HTML element represented by this object.</td>
  <td><?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?></td>
</tr>
<tr id="content">
  <td><?php echo CHtml::link('content', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'content-detail')); ?></td>
  <td>string</td>
  <td>the string content</td>
  <td>CFormStringElement</td>
</tr>
<tr id="on">
  <td><?php echo CHtml::link('on', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'on-detail')); ?></td>
  <td>string</td>
  <td>Returns a value indicating under which scenarios this string is visible.</td>
  <td>CFormStringElement</td>
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
<tr id="getOn">
  <td><?php echo CHtml::link('getOn()', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'getOn-detail')); ?></td>
  <td>Returns a value indicating under which scenarios this string is visible.</td>
  <td>CFormStringElement</td>
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
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'render-detail')); ?></td>
  <td>Renders this element.</td>
  <td>CFormStringElement</td>
</tr>
<tr id="setOn">
  <td><?php echo CHtml::link('setOn()', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'setOn-detail')); ?></td>
  <td>Sets scenario names separated by commas.</td>
  <td>CFormStringElement</td>
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
<tr id="evaluateVisible">
  <td><?php echo CHtml::link('evaluateVisible()', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'evaluateVisible-detail')); ?></td>
  <td>Evaluates the visibility of this element.</td>
  <td>CFormStringElement</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="content-detail">
content<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$content</b>;</div>

<p>the string content</p>


<div class="detailHeader" id="on-detail">
on<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getOn</b>', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'getOn')); ?>()<br/>public void <?php echo CHtml::link('<b>setOn</b>', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'setOn')); ?>(string $value)</div>

<p>Returns a value indicating under which scenarios this string is visible.
If the value is empty, it means the string is visible under all scenarios.
Otherwise, only when the model is in the scenario whose name can be found in
this value, will the string be visible. See <?php echo CHtml::link('CModel::scenario', array('/site/doc', 'view' => 'CModel', '#' => 'scenario')); ?> for more
information about model scenarios.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="evaluateVisible-detail">
evaluateVisible()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>evaluateVisible</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this element is visible.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CFormStringElement.php#L66">yii/web/form/CFormStringElement.php#L66</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">evaluateVisible</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_on</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getScenario</span><span style="color: #007700">(),</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_on</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Evaluates the visibility of this element.
This method will check the <?php echo CHtml::link('on', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'on')); ?> property to see if
the model is in a scenario that should have this string displayed.</p>


<div class="detailHeader" id="getOn-detail">
getOn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getOn</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">scenario names separated by commas. Defaults to null.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CFormStringElement.php#L37">yii/web/form/CFormStringElement.php#L37</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOn</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_on</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating under which scenarios this string is visible.
If the value is empty, it means the string is visible under all scenarios.
Otherwise, only when the model is in the scenario whose name can be found in
this value, will the string be visible. See <?php echo CHtml::link('CModel::scenario', array('/site/doc', 'view' => 'CModel', '#' => 'scenario')); ?> for more
information about model scenarios.</p>


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
  <td class="paramDescCol">the string content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CFormStringElement.php#L55">yii/web/form/CFormStringElement.php#L55</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">content</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders this element.
The default implementation simply returns <?php echo CHtml::link('content', array('/site/doc', 'view' => 'CFormStringElement', '#' => 'content')); ?>.</p>


<div class="detailHeader" id="setOn-detail">
setOn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setOn</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">scenario names separated by commas.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CFormStringElement.php#L45">yii/web/form/CFormStringElement.php#L45</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setOn</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_on</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


