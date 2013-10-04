<?php
$this->pageTitle = $this->pageHeading = 'CSqlDataProvider';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CSqlDataProvider';
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
  <td>class CSqlDataProvider &raquo;
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
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CSqlDataProvider.php">yii/web/CSqlDataProvider.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CSqlDataProvider implements a data provider based on a plain SQL statement.
<br/><br/>
CSqlDataProvider provides data in terms of arrays, each representing a row of query result.
<br/><br/>
Like other data providers, CSqlDataProvider also supports sorting and pagination.
It does so by modifying the given <?php echo CHtml::link('sql', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'sql')); ?> statement with "ORDER BY" and "LIMIT"
clauses. You may configure the <?php echo CHtml::link('sort', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'sort')); ?> and <?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'pagination')); ?> properties to
customize sorting and pagination behaviors.
<br/><br/>
CSqlDataProvider may be used in the following way:
<pre>
$count=Yii::app()-&gt;db-&gt;createCommand('SELECT COUNT(*) FROM tbl_user')-&gt;queryScalar();
$sql='SELECT * FROM tbl_user';
$dataProvider=new CSqlDataProvider($sql, array(
    'totalItemCount'=&gt;$count,
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
Note: if you want to use the pagination feature, you must configure the <?php echo CHtml::link('totalItemCount', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'totalItemCount')); ?> property
to be the total number of rows (without pagination). And if you want to use the sorting feature,
you must configure <?php echo CHtml::link('sort', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'sort')); ?> property so that the provider knows which columns can be sorted.</div>
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
<tr class="inherited" id="data">
  <td><?php echo CHtml::link('data', array('/site/doc', 'view' => 'CDataProvider', '#' => 'data-detail')); ?></td>
  <td>array</td>
  <td>Returns the data items currently available.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr id="db">
  <td><?php echo CHtml::link('db', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'db-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>the database connection to be used in the queries.</td>
  <td>CSqlDataProvider</td>
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
  <td><?php echo CHtml::link('keyField', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'keyField-detail')); ?></td>
  <td>string</td>
  <td>the name of key field.</td>
  <td>CSqlDataProvider</td>
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
<tr id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'params-detail')); ?></td>
  <td>array</td>
  <td>parameters (name=>value) to be bound to the SQL statement.</td>
  <td>CSqlDataProvider</td>
</tr>
<tr class="inherited" id="sort">
  <td><?php echo CHtml::link('sort', array('/site/doc', 'view' => 'CDataProvider', '#' => 'sort-detail')); ?></td>
  <td>CSort|false</td>
  <td>Returns the sort object.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr id="sql">
  <td><?php echo CHtml::link('sql', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'sql-detail')); ?></td>
  <td>string|CDbCommand</td>
  <td>the SQL statement to be used for fetching data rows.</td>
  <td>CSqlDataProvider</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CSqlDataProvider</td>
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
  <td><?php echo CHtml::link('calculateTotalItemCount()', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'calculateTotalItemCount-detail')); ?></td>
  <td>Calculates the total number of data items.</td>
  <td>CSqlDataProvider</td>
</tr>
<tr id="fetchData">
  <td><?php echo CHtml::link('fetchData()', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'fetchData-detail')); ?></td>
  <td>Fetches the data from the persistent data storage.</td>
  <td>CSqlDataProvider</td>
</tr>
<tr id="fetchKeys">
  <td><?php echo CHtml::link('fetchKeys()', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'fetchKeys-detail')); ?></td>
  <td>Fetches the data item keys from the persistent data storage.</td>
  <td>CSqlDataProvider</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="db-detail">
db<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <b>$db</b>;</div>

<p>the database connection to be used in the queries.
Defaults to null, meaning using Yii::app()->db.</p>


<div class="detailHeader" id="keyField-detail">
keyField<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$keyField</b>;</div>

<p>the name of key field. Defaults to 'id'.</p>


<div class="detailHeader" id="params-detail">
params<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$params</b>;</div>

<p>parameters (name=>value) to be bound to the SQL statement.</p>


<div class="detailHeader" id="sql-detail">
sql<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string|CDbCommand <b>$sql</b>;</div>

<p>the SQL statement to be used for fetching data rows.
Since version 1.1.13 this can also be an instance of <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?>.</p>


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
public void <b>__construct</b>(string|CDbCommand $sql, array $config=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">string|CDbCommand</td>
  <td class="paramDescCol">the SQL statement to be used for fetching data rows. Since version 1.1.13 this can also be an instance of <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">configuration (name=>value) to be applied as the initial property values of this class.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CSqlDataProvider.php#L64">yii/web/CSqlDataProvider.php#L64</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sql</span><span style="color: #007700">=</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CSqlDataProvider.php#L138">yii/web/CSqlDataProvider.php#L138</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">calculateTotalItemCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Calculates the total number of data items.
This method is invoked when <?php echo CHtml::link('getTotalItemCount()', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'getTotalItemCount')); ?> is invoked
and <?php echo CHtml::link('totalItemCount', array('/site/doc', 'view' => 'CSqlDataProvider', '#' => 'totalItemCount')); ?> is not set previously.
The default implementation simply returns 0.
You may override this method to return accurate total number of data items.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CSqlDataProvider.php#L75">yii/web/CSqlDataProvider.php#L75</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">fetchData</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sql&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbCommand</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">db&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=clone&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sql</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$sort</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSort</span><span style="color: #007700">())!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$order</span><span style="color: #007700">=</span><span style="color: #0000BB">$sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOrderBy</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$order</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s+order\s+by\s+[\w\s,\.]+$/i'</span><span style="color: #007700">,</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">text</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">text</span><span style="color: #007700">.=</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">text</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;ORDER&nbsp;BY&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">())!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTotalItemCount</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLimit</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">=</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOffset</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">text</span><span style="color: #007700">=</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">applyLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">text</span><span style="color: #007700">,</span><span style="color: #0000BB">$limit</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">();<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CSqlDataProvider.php#L115">yii/web/CSqlDataProvider.php#L115</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">fetchKeys</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyField</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyField</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Fetches the data item keys from the persistent data storage.</p>


