<?php
$this->pageTitle = $this->pageHeading = 'CMap';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CMap';
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
  <td><?php echo CHtml::link('system.collections', array('/site/doc', '#' => 'system.collections')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CMap &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>IteratorAggregate, Traversable, ArrayAccess, Countable</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CAttributeCollection', array('/site/doc', 'view' => 'CAttributeCollection')); ?>, <?php echo CHtml::link('CConfiguration', array('/site/doc', 'view' => 'CConfiguration')); ?>, <?php echo CHtml::link('CCookieCollection', array('/site/doc', 'view' => 'CCookieCollection')); ?>, <?php echo CHtml::link('CFormElementCollection', array('/site/doc', 'view' => 'CFormElementCollection')); ?>, <?php echo CHtml::link('CTypedMap', array('/site/doc', 'view' => 'CTypedMap')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php">yii/collections/CMap.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CMap implements a collection that takes key-value pairs.
<br/><br/>
You can access, add or remove an item with a key by using
<?php echo CHtml::link('itemAt', array('/site/doc', 'view' => 'CMap', '#' => 'itemAt')); ?>, <?php echo CHtml::link('add', array('/site/doc', 'view' => 'CMap', '#' => 'add')); ?>, and <?php echo CHtml::link('remove', array('/site/doc', 'view' => 'CMap', '#' => 'remove')); ?>.
To get the number of the items in the map, use <?php echo CHtml::link('getCount', array('/site/doc', 'view' => 'CMap', '#' => 'getCount')); ?>.
CMap can also be used like a regular array as follows,
<pre>
$map[$key]=$value; // add a key-value pair
unset($map[$key]); // remove the value with the specified key
if(isset($map[$key])) // if the map contains the key
foreach($map as $key=&gt;$value) // traverse the items in the map
$n=count($map);  // returns the number of items in the map
</pre></div>
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
<tr id="count">
  <td><?php echo CHtml::link('count', array('/site/doc', 'view' => 'CMap', '#' => 'count-detail')); ?></td>
  <td>integer</td>
  <td>Returns the number of items in the map.</td>
  <td>CMap</td>
</tr>
<tr id="iterator">
  <td><?php echo CHtml::link('iterator', array('/site/doc', 'view' => 'CMap', '#' => 'iterator-detail')); ?></td>
  <td><?php echo CHtml::link('CMapIterator', array('/site/doc', 'view' => 'CMapIterator')); ?></td>
  <td>Returns an iterator for traversing the items in the list.</td>
  <td>CMap</td>
</tr>
<tr id="keys">
  <td><?php echo CHtml::link('keys', array('/site/doc', 'view' => 'CMap', '#' => 'keys-detail')); ?></td>
  <td>array</td>
  <td>the key list</td>
  <td>CMap</td>
</tr>
<tr id="readOnly">
  <td><?php echo CHtml::link('readOnly', array('/site/doc', 'view' => 'CMap', '#' => 'readOnly-detail')); ?></td>
  <td>boolean</td>
  <td>whether this map is read-only or not.</td>
  <td>CMap</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CMap', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CMap</td>
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
<tr id="add">
  <td><?php echo CHtml::link('add()', array('/site/doc', 'view' => 'CMap', '#' => 'add-detail')); ?></td>
  <td>Adds an item into the map.</td>
  <td>CMap</td>
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
<tr id="clear">
  <td><?php echo CHtml::link('clear()', array('/site/doc', 'view' => 'CMap', '#' => 'clear-detail')); ?></td>
  <td>Removes all items in the map.</td>
  <td>CMap</td>
</tr>
<tr id="contains">
  <td><?php echo CHtml::link('contains()', array('/site/doc', 'view' => 'CMap', '#' => 'contains-detail')); ?></td>
  <td></td>
  <td>CMap</td>
</tr>
<tr id="copyFrom">
  <td><?php echo CHtml::link('copyFrom()', array('/site/doc', 'view' => 'CMap', '#' => 'copyFrom-detail')); ?></td>
  <td>Copies iterable data into the map.</td>
  <td>CMap</td>
</tr>
<tr id="count()">
  <td><?php echo CHtml::link('count()', array('/site/doc', 'view' => 'CMap', '#' => 'count()-detail')); ?></td>
  <td>Returns the number of items in the map.</td>
  <td>CMap</td>
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
<tr id="getCount">
  <td><?php echo CHtml::link('getCount()', array('/site/doc', 'view' => 'CMap', '#' => 'getCount-detail')); ?></td>
  <td>Returns the number of items in the map.</td>
  <td>CMap</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getIterator">
  <td><?php echo CHtml::link('getIterator()', array('/site/doc', 'view' => 'CMap', '#' => 'getIterator-detail')); ?></td>
  <td>Returns an iterator for traversing the items in the list.</td>
  <td>CMap</td>
</tr>
<tr id="getKeys">
  <td><?php echo CHtml::link('getKeys()', array('/site/doc', 'view' => 'CMap', '#' => 'getKeys-detail')); ?></td>
  <td>Returns the key list</td>
  <td>CMap</td>
</tr>
<tr id="getReadOnly">
  <td><?php echo CHtml::link('getReadOnly()', array('/site/doc', 'view' => 'CMap', '#' => 'getReadOnly-detail')); ?></td>
  <td>Returns whether this map is read-only or not. Defaults to false.</td>
  <td>CMap</td>
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
<tr id="itemAt">
  <td><?php echo CHtml::link('itemAt()', array('/site/doc', 'view' => 'CMap', '#' => 'itemAt-detail')); ?></td>
  <td>Returns the item with the specified key.</td>
  <td>CMap</td>
</tr>
<tr id="mergeArray">
  <td><?php echo CHtml::link('mergeArray()', array('/site/doc', 'view' => 'CMap', '#' => 'mergeArray-detail')); ?></td>
  <td>Merges two or more arrays into one recursively.</td>
  <td>CMap</td>
</tr>
<tr id="mergeWith">
  <td><?php echo CHtml::link('mergeWith()', array('/site/doc', 'view' => 'CMap', '#' => 'mergeWith-detail')); ?></td>
  <td>Merges iterable data into the map.</td>
  <td>CMap</td>
</tr>
<tr id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CMap', '#' => 'offsetExists-detail')); ?></td>
  <td>Returns whether there is an element at the specified offset.</td>
  <td>CMap</td>
</tr>
<tr id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CMap', '#' => 'offsetGet-detail')); ?></td>
  <td>Returns the element at the specified offset.</td>
  <td>CMap</td>
</tr>
<tr id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CMap', '#' => 'offsetSet-detail')); ?></td>
  <td>Sets the element at the specified offset.</td>
  <td>CMap</td>
</tr>
<tr id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CMap', '#' => 'offsetUnset-detail')); ?></td>
  <td>Unsets the element at the specified offset.</td>
  <td>CMap</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="remove">
  <td><?php echo CHtml::link('remove()', array('/site/doc', 'view' => 'CMap', '#' => 'remove-detail')); ?></td>
  <td>Removes an item from the map by its key.</td>
  <td>CMap</td>
</tr>
<tr id="toArray">
  <td><?php echo CHtml::link('toArray()', array('/site/doc', 'view' => 'CMap', '#' => 'toArray-detail')); ?></td>
  <td></td>
  <td>CMap</td>
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
<tr id="setReadOnly">
  <td><?php echo CHtml::link('setReadOnly()', array('/site/doc', 'view' => 'CMap', '#' => 'setReadOnly-detail')); ?></td>
  <td>Sets whether this list is read-only or not</td>
  <td>CMap</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="count-detail">
count<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getCount</b>', array('/site/doc', 'view' => 'CMap', '#' => 'getCount')); ?>()</div>

<p>Returns the number of items in the map.</p>


<div class="detailHeader" id="iterator-detail">
iterator<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CMapIterator', array('/site/doc', 'view' => 'CMapIterator')); ?> <?php echo CHtml::link('<b>getIterator</b>', array('/site/doc', 'view' => 'CMap', '#' => 'getIterator')); ?>()</div>

<p>Returns an iterator for traversing the items in the list.
This method is required by the interface IteratorAggregate.</p>


<div class="detailHeader" id="keys-detail">
keys<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getKeys</b>', array('/site/doc', 'view' => 'CMap', '#' => 'getKeys')); ?>()</div>

<p>the key list</p>


<div class="detailHeader" id="readOnly-detail">
readOnly<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getReadOnly</b>', array('/site/doc', 'view' => 'CMap', '#' => 'getReadOnly')); ?>()<br/>protected void <?php echo CHtml::link('<b>setReadOnly</b>', array('/site/doc', 'view' => 'CMap', '#' => 'setReadOnly')); ?>(boolean $value)</div>

<p>whether this map is read-only or not. Defaults to false.</p>


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
public void <b>__construct</b>(array $data=NULL, boolean $readOnly=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the initial data. Default is null, meaning no initialization.</td>
</tr>
<tr>
  <td class="paramNameCol">$readOnly</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the list is read-only</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L53">yii/collections/CMap.php#L53</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$readOnly</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$data</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">copyFrom</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setReadOnly</span><span style="color: #007700">(</span><span style="color: #0000BB">$readOnly</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.
Initializes the list with an array or an iterable object.</p>


<div class="detailHeader" id="add-detail">
add()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>add</b>(mixed $key, mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">key</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L134">yii/collections/CMap.php#L134</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_r</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$key</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;map&nbsp;is&nbsp;read&nbsp;only.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Adds an item into the map.
Note, if the specified key already exists, the old value will be overwritten.</p>


<div class="detailHeader" id="clear-detail">
clear()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>clear</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L177">yii/collections/CMap.php#L177</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clear</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Removes all items in the map.</p>


<div class="detailHeader" id="contains-detail">
contains()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>contains</b>(mixed $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the key</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the map contains an item with the specified key</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L187">yii/collections/CMap.php#L187</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">contains</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">])&nbsp;||&nbsp;</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="copyFrom-detail">
copyFrom()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>copyFrom</b>(mixed $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the data to be copied from, must be an array or object implementing Traversable</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L206">yii/collections/CMap.php#L206</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">copyFrom</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">Traversable</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCount</span><span style="color: #007700">()&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clear</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$data</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Map&nbsp;data&nbsp;must&nbsp;be&nbsp;an&nbsp;array&nbsp;or&nbsp;an&nbsp;object&nbsp;implementing&nbsp;Traversable.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Copies iterable data into the map.
Note, existing data in the map will be cleared first.</p>


<div class="detailHeader" id="count()-detail">
count()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>count</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of items in the map.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L91">yii/collections/CMap.php#L91</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCount</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the number of items in the map.
This method is required by Countable interface.</p>


<div class="detailHeader" id="getCount-detail">
getCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getCount</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of items in the map</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L100">yii/collections/CMap.php#L100</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the number of items in the map.</p>


<div class="detailHeader" id="getIterator-detail">
getIterator()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CMapIterator', array('/site/doc', 'view' => 'CMapIterator')); ?> <b>getIterator</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CMapIterator', array('/site/doc', 'view' => 'CMapIterator')); ?></td>
  <td class="paramDescCol">an iterator for traversing the items in the list.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L81">yii/collections/CMap.php#L81</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIterator</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">CMapIterator</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns an iterator for traversing the items in the list.
This method is required by the interface IteratorAggregate.</p>


<div class="detailHeader" id="getKeys-detail">
getKeys()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getKeys</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the key list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L108">yii/collections/CMap.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getKeys</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getReadOnly-detail">
getReadOnly()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getReadOnly</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this map is read-only or not. Defaults to false.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L63">yii/collections/CMap.php#L63</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getReadOnly</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_r</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="itemAt-detail">
itemAt()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>itemAt</b>(mixed $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the key</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the element at the offset, null if no element is found at the offset</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L119">yii/collections/CMap.php#L119</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the item with the specified key.
This method is exactly the same as <?php echo CHtml::link('offsetGet', array('/site/doc', 'view' => 'CMap', '#' => 'offsetGet')); ?>.</p>


<div class="detailHeader" id="mergeArray-detail">
mergeArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>mergeArray</b>(array $a, array $b)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$a</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">array to be merged to</td>
</tr>
<tr>
  <td class="paramNameCol">$b</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">array to be merged from. You can specify additional
arrays via third argument, fourth argument etc.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the merged array (the original arrays are not changed.)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L280">yii/collections/CMap.php#L280</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$res</span><span style="color: #007700">=</span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;while(!empty(</span><span style="color: #0000BB">$args</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">=</span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$next&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_integer</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;isset(</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$res</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$v&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">],</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$res</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$res</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Merges two or more arrays into one recursively.
If each array has an element with the same string key value, the latter
will overwrite the former (different from array_merge_recursive).
Recursive merging will be conducted if both arrays have an element of array
type and are having the same key.
For integer-keyed elements, the elements from the latter array will
be appended to the former array.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('mergeWith', array('/site/doc', 'view' => 'CMap', '#' => 'mergeWith')); ?></li>
</ul>
</div>

<div class="detailHeader" id="mergeWith-detail">
mergeWith()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>mergeWith</b>(mixed $data, boolean $recursive=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the data to be merged with, must be an array or object implementing Traversable</td>
</tr>
<tr>
  <td class="paramNameCol">$recursive</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the merging should be recursive.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L238">yii/collections/CMap.php#L238</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$recursive</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">Traversable</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$recursive</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">Traversable</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">,</span><span style="color: #0000BB">$d</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$data</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Map&nbsp;data&nbsp;must&nbsp;be&nbsp;an&nbsp;array&nbsp;or&nbsp;an&nbsp;object&nbsp;implementing&nbsp;Traversable.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Merges iterable data into the map.
<br/><br/>
Existing elements in the map will be overwritten if their keys are the same as those in the source.
If the merge is recursive, the following algorithm is performed:
<ul>
<li>the map data is saved as $a, and the source data is saved as $b;</li>
<li>if $a and $b both have an array indexed at the same string key, the arrays will be merged using this algorithm;</li>
<li>any integer-indexed elements in $b will be appended to $a and reindexed accordingly;</li>
<li>any string-indexed elements in $b will overwrite elements in $a with the same index;</li>
</ul></p>


<div class="detailHeader" id="offsetExists-detail">
offsetExists()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>offsetExists</b>(mixed $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the offset to check on</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L306">yii/collections/CMap.php#L306</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">contains</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether there is an element at the specified offset.
This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="offsetGet-detail">
offsetGet()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>offsetGet</b>(integer $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the offset to retrieve element.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the element at the offset, null if no element is found at the offset</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L317">yii/collections/CMap.php#L317</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetGet</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the element at the specified offset.
This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="offsetSet-detail">
offsetSet()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>offsetSet</b>(integer $offset, mixed $item)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the offset to set element</td>
</tr>
<tr>
  <td class="paramNameCol">$item</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the element value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L328">yii/collections/CMap.php#L328</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetSet</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the element at the specified offset.
This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="offsetUnset-detail">
offsetUnset()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>offsetUnset</b>(mixed $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the offset to unset element</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L338">yii/collections/CMap.php#L338</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetUnset</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Unsets the element at the specified offset.
This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="remove-detail">
remove()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>remove</b>(mixed $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the key of the item to be removed</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the removed value, null if no such key exists.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L153">yii/collections/CMap.php#L153</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_r</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;it&nbsp;is&nbsp;possible&nbsp;the&nbsp;value&nbsp;is&nbsp;null,&nbsp;which&nbsp;is&nbsp;not&nbsp;detected&nbsp;by&nbsp;isset<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;map&nbsp;is&nbsp;read&nbsp;only.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Removes an item from the map by its key.</p>


<div class="detailHeader" id="setReadOnly-detail">
setReadOnly()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>setReadOnly</b>(boolean $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this list is read-only or not</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L71">yii/collections/CMap.php#L71</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">setReadOnly</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_r</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="toArray-detail">
toArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>toArray</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list of items in array</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMap.php#L195">yii/collections/CMap.php#L195</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


