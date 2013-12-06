<?php
$this->pageTitle = $this->pageHeading = 'CFormElementCollection';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CFormElementCollection';
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
  <td>class CFormElementCollection &raquo;
<?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>Countable, ArrayAccess, Traversable, IteratorAggregate</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CFormElementCollection.php">yii/web/form/CFormElementCollection.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CFormElementCollection implements the collection for storing form elements.
<br/><br/>
Because CFormElementCollection extends from <?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?>, it can be used like an associative array.
For example,
<pre>
$element=$collection['username'];
$collection['username']=array('type'=&gt;'text', 'maxlength'=&gt;128);
$collection['password']=new CFormInputElement(array('type'=&gt;'password'),$form);
$collection[]='some string';
</pre>
<br/><br/>
CFormElementCollection can store three types of value: a configuration array, a <?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?>
object, or a string, as shown in the above example. Internally, these values will be converted
to <?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> objects.</div>
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
<tr class="inherited" id="count">
  <td><?php echo CHtml::link('count', array('/site/doc', 'view' => 'CMap', '#' => 'count-detail')); ?></td>
  <td>integer</td>
  <td>Returns the number of items in the map.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="iterator">
  <td><?php echo CHtml::link('iterator', array('/site/doc', 'view' => 'CMap', '#' => 'iterator-detail')); ?></td>
  <td><?php echo CHtml::link('CMapIterator', array('/site/doc', 'view' => 'CMapIterator')); ?></td>
  <td>Returns an iterator for traversing the items in the list.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="keys">
  <td><?php echo CHtml::link('keys', array('/site/doc', 'view' => 'CMap', '#' => 'keys-detail')); ?></td>
  <td>array</td>
  <td>the key list</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="readOnly">
  <td><?php echo CHtml::link('readOnly', array('/site/doc', 'view' => 'CMap', '#' => 'readOnly-detail')); ?></td>
  <td>boolean</td>
  <td>whether this map is read-only or not.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CFormElementCollection', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CFormElementCollection</td>
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
  <td><?php echo CHtml::link('add()', array('/site/doc', 'view' => 'CFormElementCollection', '#' => 'add-detail')); ?></td>
  <td>Adds an item to the collection.</td>
  <td>CFormElementCollection</td>
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
<tr class="inherited" id="clear">
  <td><?php echo CHtml::link('clear()', array('/site/doc', 'view' => 'CMap', '#' => 'clear-detail')); ?></td>
  <td>Removes all items in the map.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="contains">
  <td><?php echo CHtml::link('contains()', array('/site/doc', 'view' => 'CMap', '#' => 'contains-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="copyFrom">
  <td><?php echo CHtml::link('copyFrom()', array('/site/doc', 'view' => 'CMap', '#' => 'copyFrom-detail')); ?></td>
  <td>Copies iterable data into the map.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="count()">
  <td><?php echo CHtml::link('count()', array('/site/doc', 'view' => 'CMap', '#' => 'count()-detail')); ?></td>
  <td>Returns the number of items in the map.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
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
<tr class="inherited" id="getCount">
  <td><?php echo CHtml::link('getCount()', array('/site/doc', 'view' => 'CMap', '#' => 'getCount-detail')); ?></td>
  <td>Returns the number of items in the map.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getIterator">
  <td><?php echo CHtml::link('getIterator()', array('/site/doc', 'view' => 'CMap', '#' => 'getIterator-detail')); ?></td>
  <td>Returns an iterator for traversing the items in the list.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="getKeys">
  <td><?php echo CHtml::link('getKeys()', array('/site/doc', 'view' => 'CMap', '#' => 'getKeys-detail')); ?></td>
  <td>Returns the key list</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="getReadOnly">
  <td><?php echo CHtml::link('getReadOnly()', array('/site/doc', 'view' => 'CMap', '#' => 'getReadOnly-detail')); ?></td>
  <td>Returns whether this map is read-only or not. Defaults to false.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
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
<tr class="inherited" id="itemAt">
  <td><?php echo CHtml::link('itemAt()', array('/site/doc', 'view' => 'CMap', '#' => 'itemAt-detail')); ?></td>
  <td>Returns the item with the specified key.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="mergeArray">
  <td><?php echo CHtml::link('mergeArray()', array('/site/doc', 'view' => 'CMap', '#' => 'mergeArray-detail')); ?></td>
  <td>Merges two or more arrays into one recursively.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="mergeWith">
  <td><?php echo CHtml::link('mergeWith()', array('/site/doc', 'view' => 'CMap', '#' => 'mergeWith-detail')); ?></td>
  <td>Merges iterable data into the map.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CMap', '#' => 'offsetExists-detail')); ?></td>
  <td>Returns whether there is an element at the specified offset.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CMap', '#' => 'offsetGet-detail')); ?></td>
  <td>Returns the element at the specified offset.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CMap', '#' => 'offsetSet-detail')); ?></td>
  <td>Sets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CMap', '#' => 'offsetUnset-detail')); ?></td>
  <td>Unsets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="remove">
  <td><?php echo CHtml::link('remove()', array('/site/doc', 'view' => 'CFormElementCollection', '#' => 'remove-detail')); ?></td>
  <td>Removes the specified element by key.</td>
  <td>CFormElementCollection</td>
</tr>
<tr class="inherited" id="toArray">
  <td><?php echo CHtml::link('toArray()', array('/site/doc', 'view' => 'CMap', '#' => 'toArray-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
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
<tr class="inherited" id="setReadOnly">
  <td><?php echo CHtml::link('setReadOnly()', array('/site/doc', 'view' => 'CMap', '#' => 'setReadOnly-detail')); ?></td>
  <td>Sets whether this list is read-only or not</td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

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
public void <b>__construct</b>(<?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?> $form, boolean $forButtons=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$form</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CForm', array('/site/doc', 'view' => 'CForm')); ?></td>
  <td class="paramDescCol">the form object that owns this collection</td>
</tr>
<tr>
  <td class="paramNameCol">$forButtons</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this collection is used to store buttons.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CFormElementCollection.php#L41">yii/web/form/CFormElementCollection.php#L41</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$form</span><span style="color: #007700">,</span><span style="color: #0000BB">$forButtons</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__construct</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">=</span><span style="color: #0000BB">$form</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_forButtons</span><span style="color: #007700">=</span><span style="color: #0000BB">$forButtons</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CFormElementCollection.php#L57">yii/web/form/CFormElementCollection.php#L57</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_forButtons</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttonElementClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'text'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'string'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">],</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CFormStringElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">],-</span><span style="color: #0000BB">4</span><span style="color: #007700">),</span><span style="color: #DD0000">'form'</span><span style="color: #007700">))&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;a&nbsp;form<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'form'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">inputElementClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CFormElement</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #DD0000">'name'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">=</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CFormStringElement</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'content'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">),</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$element</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addedElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$element</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_forButtons</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Adds an item to the collection.
This method overrides the parent implementation to ensure
only configuration arrays, strings, or <?php echo CHtml::link('CFormElement', array('/site/doc', 'view' => 'CFormElement')); ?> objects
can be stored in this collection.</p>


<div class="detailHeader" id="remove-detail">
remove()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>remove</b>(string $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the element to be removed from the collection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/form/CFormElementCollection.php#L106">yii/web/form/CFormElementCollection.php#L106</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$item</span><span style="color: #007700">=</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_form</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">removedElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_forButtons</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Removes the specified element by key.</p>


