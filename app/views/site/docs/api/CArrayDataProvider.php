<?php
$this->pageTitle = $this->pageHeading = 'CArrayDataProvider';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CArrayDataProvider';
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
  <td>class CArrayDataProvider &raquo;
<?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IDataProvider', array('/site/doc', 'view' => 'IDataProvider')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.4</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CArrayDataProvider.php">yii\web\CArrayDataProvider.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CArrayDataProvider implements a data provider based on a raw data array.
<br/><br/>
The <?php echo CHtml::link('rawData', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'rawData')); ?> property contains all data that may be sorted and/or paginated.
CArrayDataProvider will supply the data after sorting and/or pagination.
You may configure the <?php echo CHtml::link('sort', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'sort')); ?> and <?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'pagination')); ?> properties to
customize sorting and pagination behaviors.
<br/><br/>
Elements in the raw data array may be either objects (e.g. model objects)
or associative arrays (e.g. query results of DAO).
Make sure to set the <?php echo CHtml::link('keyField', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'keyField')); ?> property to the name of the field that uniquely
identifies a data record or false if you do not have such a field.
<br/><br/>
CArrayDataProvider may be used in the following way:
<pre>
$rawData=Yii::app()-&gt;db-&gt;createCommand('SELECT * FROM tbl_user')-&gt;queryAll();
// or using: $rawData=User::model()-&gt;findAll();
$dataProvider=new CArrayDataProvider($rawData, array(
    'id'=&gt;'user',
    'sort'=&gt;array(
        'attributes'=&gt;array(
             'id', 'username', 'email',
        ),
    ),
    'pagination'=&gt;array(
        'pageSize'=&gt;10,
    ),
));
// $dataProvider-&gt;getData() will return a list of arrays.
</pre>
<br/><br/>
Note: if you want to use the sorting feature, you must configure <?php echo CHtml::link('sort', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'sort')); ?> property
so that the provider knows which columns can be sorted.</div>
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
<tr id="caseSensitiveSort">
  <td><?php echo CHtml::link('caseSensitiveSort', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'caseSensitiveSort-detail')); ?></td>
  <td>boolean</td>
  <td>controls how sorting works.</td>
  <td>CArrayDataProvider</td>
</tr>
<tr class="inherited" id="data">
  <td><?php echo CHtml::link('data', array('/site/doc', 'view' => 'CDataProvider', '#' => 'data-detail')); ?></td>
  <td>array</td>
  <td>Returns the data items currently available.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CDataProvider', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID that uniquely identifies the data provider.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="itemCount">
  <td><?php echo CHtml::link('itemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'itemCount-detail')); ?></td>
  <td>integer</td>
  <td>Returns the number of data items in the current page.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr id="keyField">
  <td><?php echo CHtml::link('keyField', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'keyField-detail')); ?></td>
  <td>string</td>
  <td>the name of the key field.</td>
  <td>CArrayDataProvider</td>
</tr>
<tr class="inherited" id="keys">
  <td><?php echo CHtml::link('keys', array('/site/doc', 'view' => 'CDataProvider', '#' => 'keys-detail')); ?></td>
  <td>array</td>
  <td>Returns the key values associated with the data items.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="pagination">
  <td><?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CDataProvider', '#' => 'pagination-detail')); ?></td>
  <td>CPagination|false</td>
  <td>Returns the pagination object.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr id="rawData">
  <td><?php echo CHtml::link('rawData', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'rawData-detail')); ?></td>
  <td>array</td>
  <td>the data that is not paginated or sorted.</td>
  <td>CArrayDataProvider</td>
</tr>
<tr class="inherited" id="sort">
  <td><?php echo CHtml::link('sort', array('/site/doc', 'view' => 'CDataProvider', '#' => 'sort-detail')); ?></td>
  <td>CSort|false</td>
  <td>Returns the sort object.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="totalItemCount">
  <td><?php echo CHtml::link('totalItemCount', array('/site/doc', 'view' => 'CDataProvider', '#' => 'totalItemCount-detail')); ?></td>
  <td>integer</td>
  <td>Returns the total number of data items.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CArrayDataProvider</td>
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
<tr class="inherited" id="getData">
  <td><?php echo CHtml::link('getData()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getData-detail')); ?></td>
  <td>Returns the data items currently available.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getId-detail')); ?></td>
  <td>Returns the ID that uniquely identifies the data provider.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="getItemCount">
  <td><?php echo CHtml::link('getItemCount()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getItemCount-detail')); ?></td>
  <td>Returns the number of data items in the current page.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="getKeys">
  <td><?php echo CHtml::link('getKeys()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getKeys-detail')); ?></td>
  <td>Returns the key values associated with the data items.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="getPagination">
  <td><?php echo CHtml::link('getPagination()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getPagination-detail')); ?></td>
  <td>Returns the pagination object.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="getSort">
  <td><?php echo CHtml::link('getSort()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getSort-detail')); ?></td>
  <td>Returns the sort object.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="getTotalItemCount">
  <td><?php echo CHtml::link('getTotalItemCount()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'getTotalItemCount-detail')); ?></td>
  <td>Returns the total number of data items.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
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
<tr class="inherited" id="setData">
  <td><?php echo CHtml::link('setData()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setData-detail')); ?></td>
  <td>Sets the data items for this provider.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setId-detail')); ?></td>
  <td>Sets the provider ID.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="setKeys">
  <td><?php echo CHtml::link('setKeys()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setKeys-detail')); ?></td>
  <td>Sets the data item keys for this provider.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="setPagination">
  <td><?php echo CHtml::link('setPagination()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setPagination-detail')); ?></td>
  <td>Sets the pagination for this data provider.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="setSort">
  <td><?php echo CHtml::link('setSort()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setSort-detail')); ?></td>
  <td>Sets the sorting for this data provider.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="setTotalItemCount">
  <td><?php echo CHtml::link('setTotalItemCount()', array('/site/doc', 'view' => 'CDataProvider', '#' => 'setTotalItemCount-detail')); ?></td>
  <td>Sets the total number of data items.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
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
  <td><?php echo CHtml::link('calculateTotalItemCount()', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'calculateTotalItemCount-detail')); ?></td>
  <td>Calculates the total number of data items.</td>
  <td>CArrayDataProvider</td>
</tr>
<tr id="fetchData">
  <td><?php echo CHtml::link('fetchData()', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'fetchData-detail')); ?></td>
  <td>Fetches the data from the persistent data storage.</td>
  <td>CArrayDataProvider</td>
</tr>
<tr id="fetchKeys">
  <td><?php echo CHtml::link('fetchKeys()', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'fetchKeys-detail')); ?></td>
  <td>Fetches the data item keys from the persistent data storage.</td>
  <td>CArrayDataProvider</td>
</tr>
<tr id="getSortDirections">
  <td><?php echo CHtml::link('getSortDirections()', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'getSortDirections-detail')); ?></td>
  <td>Converts the "ORDER BY" clause into an array representing the sorting directions.</td>
  <td>CArrayDataProvider</td>
</tr>
<tr id="getSortingFieldValue">
  <td><?php echo CHtml::link('getSortingFieldValue()', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'getSortingFieldValue-detail')); ?></td>
  <td>Get field for sorting, using dot like delimiter in query.</td>
  <td>CArrayDataProvider</td>
</tr>
<tr id="sortData">
  <td><?php echo CHtml::link('sortData()', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'sortData-detail')); ?></td>
  <td>Sorts the raw data according to the specified sorting instructions.</td>
  <td>CArrayDataProvider</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="caseSensitiveSort-detail">
caseSensitiveSort<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public boolean <b>$caseSensitiveSort</b>;</div>

<p>controls how sorting works. True value means that case will be
taken into account. False value will lead to the case insensitive sort. Default
value is true.</p>


<div class="detailHeader" id="keyField-detail">
keyField<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$keyField</b>;</div>

<p>the name of the key field. This is a field that uniquely identifies a
data record. In database this would be the primary key.
Defaults to 'id'. If it's set to false, keys of <?php echo CHtml::link('rawData', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'rawData')); ?> array are used.</p>


<div class="detailHeader" id="rawData-detail">
rawData<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$rawData</b>;</div>

<p>the data that is not paginated or sorted. When pagination is enabled,
this property usually contains more elements than <?php echo CHtml::link('data', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'data')); ?>.
The array elements must use zero-based integer keys.</p>


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
public void <b>__construct</b>(array $rawData, array $config=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$rawData</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the data that is not paginated or sorted. The array elements must use zero-based integer keys.</td>
</tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">configuration (name=>value) to be applied as the initial property values of this class.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CArrayDataProvider.php#L76">yii\web\CArrayDataProvider.php#L76</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawData</span><span style="color: #007700">=</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="calculateTotalItemCount-detail">
calculateTotalItemCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>calculateTotalItemCount</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the total number of data items.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CArrayDataProvider.php#L120">yii\web\CArrayDataProvider.php#L120</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">calculateTotalItemCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawData</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Calculates the total number of data items.
This method simply returns the number of elements in <?php echo CHtml::link('rawData', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'rawData')); ?>.</p>


<div class="detailHeader" id="fetchData-detail">
fetchData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>fetchData</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of data items</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CArrayDataProvider.php#L87">yii\web\CArrayDataProvider.php#L87</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">fetchData</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$sort</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSort</span><span style="color: #007700">())!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$order</span><span style="color: #007700">=</span><span style="color: #0000BB">$sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOrderBy</span><span style="color: #007700">())!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortData</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSortDirections</span><span style="color: #007700">(</span><span style="color: #0000BB">$order</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">())!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTotalItemCount</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOffset</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLimit</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawData</span><span style="color: #007700">;<br />}</span>
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
protected array <b>fetchKeys</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of data item keys.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CArrayDataProvider.php#L105">yii\web\CArrayDataProvider.php#L105</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">fetchKeys</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyField</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawData</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyField</span><span style="color: #007700">}&nbsp;:&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyField</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Fetches the data item keys from the persistent data storage.</p>


<div class="detailHeader" id="getSortDirections-detail">
getSortDirections()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>getSortDirections</b>(string $order)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$order</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the "ORDER BY" clause.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the sorting directions (field name => whether it is descending sort)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CArrayDataProvider.php#L180">yii\web\CArrayDataProvider.php#L180</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSortDirections</span><span style="color: #007700">(</span><span style="color: #0000BB">$order</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$segs</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #0000BB">$order</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$directions</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$segs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$seg</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(.*?)(\s+(desc|asc))?$/i'</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$seg</span><span style="color: #007700">),</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$directions</span><span style="color: #007700">[</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]]=isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">],</span><span style="color: #DD0000">'desc'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$directions</span><span style="color: #007700">[</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$seg</span><span style="color: #007700">)]=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$directions</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts the "ORDER BY" clause into an array representing the sorting directions.</p>


<div class="detailHeader" id="getSortingFieldValue-detail">
getSortingFieldValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>getSortingFieldValue</b>(mixed $data, array $fields)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">array or object</td>
</tr>
<tr>
  <td class="paramNameCol">$fields</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">sorting fields in $data</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">$data sorting field value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CArrayDataProvider.php#L160">yii\web\CArrayDataProvider.php#L160</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSortingFieldValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$fields</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$fields&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$field</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$field&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$fields&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$field</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$field</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">caseSensitiveSort&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">mb_strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">charset</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get field for sorting, using dot like delimiter in query.</p>


<div class="detailHeader" id="sortData-detail">
sortData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>sortData</b>(array $directions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$directions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the sorting directions (field name => whether it is descending sort)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CArrayDataProvider.php#L130">yii\web\CArrayDataProvider.php#L130</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">sortData</span><span style="color: #007700">(</span><span style="color: #0000BB">$directions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$directions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dummy</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$directions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fields_array</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\.+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawData&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$index</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #0000BB">$index</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSortingFieldValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$fields_array</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[]=&amp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dummy</span><span style="color: #007700">[]=&amp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$column</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$direction</span><span style="color: #007700">=</span><span style="color: #0000BB">$descending&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">SORT_DESC&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">SORT_ASC</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[]=&amp;</span><span style="color: #0000BB">$direction</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dummy</span><span style="color: #007700">[]=&amp;</span><span style="color: #0000BB">$direction</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$direction</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[]=&amp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawData</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(</span><span style="color: #DD0000">'array_multisort'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sorts the raw data according to the specified sorting instructions.
After calling this method, <?php echo CHtml::link('rawData', array('/site/doc', 'view' => 'CArrayDataProvider', '#' => 'rawData')); ?> will be modified.</p>


