<?php
$this->pageTitle = $this->pageHeading = 'CDataProvider';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDataProvider';
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
  <td><?php echo CHtml::link('system.web', array('/site/doc', '#' => 'system.web')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>abstract class CDataProvider &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IDataProvider', array('/site/doc', 'view' => 'IDataProvider')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?>, <?php echo CHtml::link('CArrayDataProvider', array('/site/doc', 'view' => 'CArrayDataProvider')); ?>, <?php echo CHtml::link('CSqlDataProvider', array('/site/doc', 'view' => 'CSqlDataProvider')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php">yii\web\CDataProvider.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDataProvider is a base class that implements the <?php echo CHtml::link('IDataProvider', array('/site/doc', 'view' => 'IDataProvider')); ?> interface.
<br/><br/>
Derived classes mainly need to implement three methods: <?php echo CHtml::link('fetchData', array('/site/doc', 'view' => 'CDataProvider', '#' => 'fetchData')); ?>,
<?php echo CHtml::link('fetchKeys', array('/site/doc', 'view' => 'CDataProvider', '#' => 'fetchKeys')); ?> and <?php echo CHtml::link('calculateTotalItemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'calculateTotalItemCount')); ?>.</div>
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
<tr id="data">
  <td><?php echo CHtml::link('data', array('/site/doc', 'view' => 'CDataProvider', '#' => 'data-detail')); ?></td>
  <td>array</td>
  <td>Returns the data items currently available.</td>
  <td>CDataProvider</td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CDataProvider', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID that uniquely identifies the data provider.</td>
  <td>CDataProvider</td>
</tr>
<tr id="itemCount">
  <td><?php echo CHtml::link('itemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'itemCount-detail')); ?></td>
  <td>integer</td>
  <td>Returns the number of data items in the current page.</td>
  <td>CDataProvider</td>
</tr>
<tr id="keys">
  <td><?php echo CHtml::link('keys', array('/site/doc', 'view' => 'CDataProvider', '#' => 'keys-detail')); ?></td>
  <td>array</td>
  <td>Returns the key values associated with the data items.</td>
  <td>CDataProvider</td>
</tr>
<tr id="pagination">
  <td><?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CDataProvider', '#' => 'pagination-detail')); ?></td>
  <td>CPagination|false</td>
  <td>Returns the pagination object.</td>
  <td>CDataProvider</td>
</tr>
<tr id="sort">
  <td><?php echo CHtml::link('sort', array('/site/doc', 'view' => 'CDataProvider', '#' => 'sort-detail')); ?></td>
  <td>CSort|false</td>
  <td>Returns the sort object.</td>
  <td>CDataProvider</td>
</tr>
<tr id="totalItemCount">
  <td><?php echo CHtml::link('totalItemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'totalItemCount-detail')); ?></td>
  <td>integer</td>
  <td>Returns the total number of data items.</td>
  <td>CDataProvider</td>
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
<tr id="getData">
  <td><?php echo CHtml::link('getData()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getData-detail')); ?></td>
  <td>Returns the data items currently available.</td>
  <td>CDataProvider</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getId-detail')); ?></td>
  <td>Returns the ID that uniquely identifies the data provider.</td>
  <td>CDataProvider</td>
</tr>
<tr id="getItemCount">
  <td><?php echo CHtml::link('getItemCount()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getItemCount-detail')); ?></td>
  <td>Returns the number of data items in the current page.</td>
  <td>CDataProvider</td>
</tr>
<tr id="getKeys">
  <td><?php echo CHtml::link('getKeys()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getKeys-detail')); ?></td>
  <td>Returns the key values associated with the data items.</td>
  <td>CDataProvider</td>
</tr>
<tr id="getPagination">
  <td><?php echo CHtml::link('getPagination()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getPagination-detail')); ?></td>
  <td>Returns the pagination object.</td>
  <td>CDataProvider</td>
</tr>
<tr id="getSort">
  <td><?php echo CHtml::link('getSort()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getSort-detail')); ?></td>
  <td>Returns the sort object.</td>
  <td>CDataProvider</td>
</tr>
<tr id="getTotalItemCount">
  <td><?php echo CHtml::link('getTotalItemCount()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getTotalItemCount-detail')); ?></td>
  <td>Returns the total number of data items.</td>
  <td>CDataProvider</td>
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
<tr id="setData">
  <td><?php echo CHtml::link('setData()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setData-detail')); ?></td>
  <td>Sets the data items for this provider.</td>
  <td>CDataProvider</td>
</tr>
<tr id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setId-detail')); ?></td>
  <td>Sets the provider ID.</td>
  <td>CDataProvider</td>
</tr>
<tr id="setKeys">
  <td><?php echo CHtml::link('setKeys()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setKeys-detail')); ?></td>
  <td>Sets the data item keys for this provider.</td>
  <td>CDataProvider</td>
</tr>
<tr id="setPagination">
  <td><?php echo CHtml::link('setPagination()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setPagination-detail')); ?></td>
  <td>Sets the pagination for this data provider.</td>
  <td>CDataProvider</td>
</tr>
<tr id="setSort">
  <td><?php echo CHtml::link('setSort()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setSort-detail')); ?></td>
  <td>Sets the sorting for this data provider.</td>
  <td>CDataProvider</td>
</tr>
<tr id="setTotalItemCount">
  <td><?php echo CHtml::link('setTotalItemCount()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setTotalItemCount-detail')); ?></td>
  <td>Sets the total number of data items.</td>
  <td>CDataProvider</td>
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
<tr id="calculateTotalItemCount">
  <td><?php echo CHtml::link('calculateTotalItemCount()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'calculateTotalItemCount-detail')); ?></td>
  <td>Calculates the total number of data items.</td>
  <td>CDataProvider</td>
</tr>
<tr id="fetchData">
  <td><?php echo CHtml::link('fetchData()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'fetchData-detail')); ?></td>
  <td>Fetches the data from the persistent data storage.</td>
  <td>CDataProvider</td>
</tr>
<tr id="fetchKeys">
  <td><?php echo CHtml::link('fetchKeys()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'fetchKeys-detail')); ?></td>
  <td>Fetches the data item keys from the persistent data storage.</td>
  <td>CDataProvider</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="data-detail">
data<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getData</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getData')); ?>(boolean $refresh=false)<br/>public void <?php echo CHtml::link('<b>setData</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setData')); ?>(array $value)</div>

<p>Returns the data items currently available.</p>


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getId</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getId')); ?>()<br/>public void <?php echo CHtml::link('<b>setId</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setId')); ?>(string $value)</div>

<p>Returns the ID that uniquely identifies the data provider.</p>


<div class="detailHeader" id="itemCount-detail">
itemCount<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getItemCount</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getItemCount')); ?>(boolean $refresh=false)</div>

<p>Returns the number of data items in the current page.
This is equivalent to <code>count($provider->getData())</code>.
When <?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CDataProvider', '#' => 'pagination')); ?> is set false, this returns the same value as <?php echo CHtml::link('totalItemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'totalItemCount')); ?>.</p>


<div class="detailHeader" id="keys-detail">
keys<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getKeys</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getKeys')); ?>(boolean $refresh=false)<br/>public void <?php echo CHtml::link('<b>setKeys</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setKeys')); ?>(array $value)</div>

<p>Returns the key values associated with the data items.</p>


<div class="detailHeader" id="pagination-detail">
pagination<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public CPagination|false <?php echo CHtml::link('<b>getPagination</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getPagination')); ?>(string $className='CPagination')<br/>public void <?php echo CHtml::link('<b>setPagination</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setPagination')); ?>(mixed $value)</div>

<p>Returns the pagination object.</p>


<div class="detailHeader" id="sort-detail">
sort<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public CSort|false <?php echo CHtml::link('<b>getSort</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getSort')); ?>(string $className='CSort')<br/>public void <?php echo CHtml::link('<b>setSort</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setSort')); ?>(mixed $value)</div>

<p>Returns the sort object.</p>


<div class="detailHeader" id="totalItemCount-detail">
totalItemCount<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getTotalItemCount</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getTotalItemCount')); ?>(boolean $refresh=false)<br/>public void <?php echo CHtml::link('<b>setTotalItemCount</b>', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setTotalItemCount')); ?>(integer $value)</div>

<p>Returns the total number of data items.
When <?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CDataProvider', '#' => 'pagination')); ?> is set false, this returns the same value as <?php echo CHtml::link('itemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'itemCount')); ?>.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="calculateTotalItemCount-detail">
calculateTotalItemCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract protected integer <b>calculateTotalItemCount</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the total number of data items.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L44">yii\web\CDataProvider.php#L44</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">abstract&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">calculateTotalItemCount</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Calculates the total number of data items.</p>


<div class="detailHeader" id="fetchData-detail">
fetchData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract protected array <b>fetchData</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of data items</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L34">yii\web\CDataProvider.php#L34</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">abstract&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">fetchData</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Fetches the data from the persistent data storage.</p>


<div class="detailHeader" id="fetchKeys-detail">
fetchKeys()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract protected array <b>fetchKeys</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of data item keys.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L39">yii\web\CDataProvider.php#L39</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">abstract&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">fetchKeys</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Fetches the data item keys from the persistent data storage.</p>


<div class="detailHeader" id="getData-detail">
getData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getData</b>(boolean $refresh=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the data should be re-fetched from persistent storage.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list of data items currently available in this data provider.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L165">yii\web\CDataProvider.php#L165</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getData</span><span style="color: #007700">(</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the data items currently available.</p>


<div class="detailHeader" id="getId-detail">
getId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the unique ID that uniquely identifies the data provider among all data providers.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L50">yii\web\CDataProvider.php#L50</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_id</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the ID that uniquely identifies the data provider.</p>


<div class="detailHeader" id="getItemCount-detail">
getItemCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getItemCount</b>(boolean $refresh=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the number of data items should be re-calculated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of data items in the current page.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L210">yii\web\CDataProvider.php#L210</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">(</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Returns the number of data items in the current page.
This is equivalent to <code>count($provider->getData())</code>.
When <?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CDataProvider', '#' => 'pagination')); ?> is set false, this returns the same value as <?php echo CHtml::link('totalItemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'totalItemCount')); ?>.</p>


<div class="detailHeader" id="getKeys-detail">
getKeys()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getKeys</b>(boolean $refresh=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the keys should be re-calculated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list of key values corresponding to <?php echo CHtml::link('data', array('/site/doc', 'view' => 'CDataProvider', '#' => 'data')); ?>. Each data item in <?php echo CHtml::link('data', array('/site/doc', 'view' => 'CDataProvider', '#' => 'data')); ?>
is uniquely identified by the corresponding key value in this array.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L187">yii\web\CDataProvider.php#L187</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getKeys</span><span style="color: #007700">(</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keys</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keys</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchKeys</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keys</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the key values associated with the data items.</p>


<div class="detailHeader" id="getPagination-detail">
getPagination()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CPagination|false <b>getPagination</b>(string $className='CPagination')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the pagination object class name. Parameter is available since version 1.1.13.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CPagination|false</td>
  <td class="paramDescCol">the pagination object. If this is false, it means the pagination is disabled.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L69">yii\web\CDataProvider.php#L69</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #DD0000">'CPagination'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pagination</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pagination</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">())!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pageVar</span><span style="color: #007700">=</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'_page'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pagination</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the pagination object.</p>


<div class="detailHeader" id="getSort-detail">
getSort()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CSort|false <b>getSort</b>(string $className='CSort')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the sorting object class name. Parameter is available since version 1.1.13.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CSort|false</td>
  <td class="paramDescCol">the sorting object. If this is false, it means the sorting is disabled.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L117">yii\web\CDataProvider.php#L117</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSort</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #DD0000">'CSort'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sort</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sort</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">())!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortVar</span><span style="color: #007700">=</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'_sort'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sort</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the sort object.</p>


<div class="detailHeader" id="getTotalItemCount-detail">
getTotalItemCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getTotalItemCount</b>(boolean $refresh=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the total number of data items should be re-calculated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">total number of possible data items.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L221">yii\web\CDataProvider.php#L221</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTotalItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_totalItemCount</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_totalItemCount</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">calculateTotalItemCount</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_totalItemCount</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the total number of data items.
When <?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CDataProvider', '#' => 'pagination')); ?> is set false, this returns the same value as <?php echo CHtml::link('itemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'itemCount')); ?>.</p>


<div class="detailHeader" id="setData-detail">
setData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setData</b>(array $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">put the data items into this provider.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L176">yii\web\CDataProvider.php#L176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setData</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the data items for this provider.</p>


<div class="detailHeader" id="setId-detail">
setId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setId</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the unique ID that uniquely identifies the data provider among all data providers.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L59">yii\web\CDataProvider.php#L59</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setId</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_id</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the provider ID.</p>


<div class="detailHeader" id="setKeys-detail">
setKeys()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setKeys</b>(array $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">put the data item keys into this provider.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L198">yii\web\CDataProvider.php#L198</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setKeys</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keys</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the data item keys for this provider.</p>


<div class="detailHeader" id="setPagination-detail">
setPagination()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setPagination</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the pagination to be used by this data provider. This could be a <?php echo CHtml::link('CPagination', array('/site/doc', 'view' => 'CPagination')); ?> object
or an array used to configure the pagination object. If this is false, it means the pagination should be disabled.
<br/><br/>
You can configure this property same way as a component:
<pre>
array(
    'class' =&gt; 'MyPagination',
    'pageSize' =&gt; 20,
),
</pre></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L93">yii\web\CDataProvider.php#L93</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setPagination</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pagination</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the pagination for this data provider.</p>


<div class="detailHeader" id="setSort-detail">
setSort()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSort</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the sorting to be used by this data provider. This could be a <?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?> object
or an array used to configure the sorting object. If this is false, it means the sorting should be disabled.
<br/><br/>
You can configure this property same way as a component:
<pre>
array(
    'class' =&gt; 'MySort',
    'attributes' =&gt; array('name', 'weight'),
),
</pre></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L141">yii\web\CDataProvider.php#L141</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSort</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSort</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSort</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sort</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the sorting for this data provider.</p>


<div class="detailHeader" id="setTotalItemCount-detail">
setTotalItemCount()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setTotalItemCount</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the total number of data items.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CDataProvider.php#L234">yii\web\CDataProvider.php#L234</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setTotalItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_totalItemCount</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the total number of data items.
This method is provided in case when the total number cannot be determined by <?php echo CHtml::link('calculateTotalItemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'calculateTotalItemCount')); ?>.</p>


