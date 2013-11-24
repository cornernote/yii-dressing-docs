<?php
$this->pageTitle = $this->pageHeading = 'CActiveDataProvider';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CActiveDataProvider';
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
  <td>class CActiveDataProvider &raquo;
<?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IDataProvider', array('/site/doc', 'view' => 'IDataProvider')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdActiveDataProvider', array('/site/doc', 'view' => 'YdActiveDataProvider')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php">yii\web\CActiveDataProvider.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CActiveDataProvider implements a data provider based on ActiveRecord.
<br/><br/>
CActiveDataProvider provides data in terms of ActiveRecord objects which are
of class <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'modelClass')); ?>. It uses the AR <?php echo CHtml::link('CActiveRecord::findAll', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAll')); ?> method
to retrieve the data from database. The <?php echo CHtml::link('criteria', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'criteria')); ?> property can be used to
specify various query options.
<br/><br/>
CActiveDataProvider may be used in the following way:
<pre>
$dataProvider=new CActiveDataProvider('Post', array(
    'criteria'=&gt;array(
        'condition'=&gt;'status=1',
        'order'=&gt;'create_time DESC',
        'with'=&gt;array('author'),
    ),
    'countCriteria'=&gt;array(
        'condition'=&gt;'status=1',
        // 'order' and 'with' clauses have no meaning for the count query
    ),
    'pagination'=&gt;array(
        'pageSize'=&gt;20,
    ),
));
// $dataProvider-&gt;getData() will return a list of Post objects
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
<tr id="countCriteria">
  <td><?php echo CHtml::link('countCriteria', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'countCriteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td>Returns the count query criteria.</td>
  <td>CActiveDataProvider</td>
</tr>
<tr id="criteria">
  <td><?php echo CHtml::link('criteria', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'criteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td>Returns the query criteria.</td>
  <td>CActiveDataProvider</td>
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
<tr id="keyAttribute">
  <td><?php echo CHtml::link('keyAttribute', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'keyAttribute-detail')); ?></td>
  <td>string</td>
  <td>the name of key attribute for <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'modelClass')); ?>.</td>
  <td>CActiveDataProvider</td>
</tr>
<tr class="inherited" id="keys">
  <td><?php echo CHtml::link('keys', array('/site/doc', 'view' => 'CDataProvider', '#' => 'keys-detail')); ?></td>
  <td>array</td>
  <td>Returns the key values associated with the data items.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td>the AR finder instance (eg <code>Post::model()</code>).</td>
  <td>CActiveDataProvider</td>
</tr>
<tr id="modelClass">
  <td><?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'modelClass-detail')); ?></td>
  <td>string</td>
  <td>the primary ActiveRecord class name.</td>
  <td>CActiveDataProvider</td>
</tr>
<tr class="inherited" id="pagination">
  <td><?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CDataProvider', '#' => 'pagination-detail')); ?></td>
  <td>CPagination|false</td>
  <td>Returns the pagination object.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr id="sort">
  <td><?php echo CHtml::link('sort', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'sort-detail')); ?></td>
  <td><?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?></td>
  <td>Returns the sorting object.</td>
  <td>CActiveDataProvider</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CActiveDataProvider</td>
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
<tr id="getCountCriteria">
  <td><?php echo CHtml::link('getCountCriteria()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getCountCriteria-detail')); ?></td>
  <td>Returns the count query criteria.</td>
  <td>CActiveDataProvider</td>
</tr>
<tr id="getCriteria">
  <td><?php echo CHtml::link('getCriteria()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getCriteria-detail')); ?></td>
  <td>Returns the query criteria.</td>
  <td>CActiveDataProvider</td>
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
<tr id="getSort">
  <td><?php echo CHtml::link('getSort()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getSort-detail')); ?></td>
  <td>Returns the sorting object.</td>
  <td>CActiveDataProvider</td>
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
<tr id="setCountCriteria">
  <td><?php echo CHtml::link('setCountCriteria()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'setCountCriteria-detail')); ?></td>
  <td>Sets the count query criteria.</td>
  <td>CActiveDataProvider</td>
</tr>
<tr id="setCriteria">
  <td><?php echo CHtml::link('setCriteria()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'setCriteria-detail')); ?></td>
  <td>Sets the query criteria.</td>
  <td>CActiveDataProvider</td>
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
  <td><?php echo CHtml::link('calculateTotalItemCount()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'calculateTotalItemCount-detail')); ?></td>
  <td>Calculates the total number of data items.</td>
  <td>CActiveDataProvider</td>
</tr>
<tr id="fetchData">
  <td><?php echo CHtml::link('fetchData()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'fetchData-detail')); ?></td>
  <td>Fetches the data from the persistent data storage.</td>
  <td>CActiveDataProvider</td>
</tr>
<tr id="fetchKeys">
  <td><?php echo CHtml::link('fetchKeys()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'fetchKeys-detail')); ?></td>
  <td>Fetches the data item keys from the persistent data storage.</td>
  <td>CActiveDataProvider</td>
</tr>
<tr id="getModel">
  <td><?php echo CHtml::link('getModel()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getModel-detail')); ?></td>
  <td>Given active record class name returns new model instance.</td>
  <td>CActiveDataProvider</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="countCriteria-detail">
countCriteria<span class="detailHeaderTag">
property
 (available since v1.1.14)
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <?php echo CHtml::link('<b>getCountCriteria</b>', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getCountCriteria')); ?>()<br/>public void <?php echo CHtml::link('<b>setCountCriteria</b>', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'setCountCriteria')); ?>(CDbCriteria|array $value)</div>

<p>Returns the count query criteria.</p>


<div class="detailHeader" id="criteria-detail">
criteria<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <?php echo CHtml::link('<b>getCriteria</b>', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getCriteria')); ?>()<br/>public void <?php echo CHtml::link('<b>setCriteria</b>', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'setCriteria')); ?>(CDbCriteria|array $value)</div>

<p>Returns the query criteria.</p>


<div class="detailHeader" id="keyAttribute-detail">
keyAttribute<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$keyAttribute</b>;</div>

<p>the name of key attribute for <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'modelClass')); ?>. If not set,
it means the primary key of the corresponding database table will be used.</p>


<div class="detailHeader" id="model-detail">
model<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>$model</b>;</div>

<p>the AR finder instance (eg <code>Post::model()</code>).
This property can be set by passing the finder instance as the first parameter
to the constructor. For example, <code>Post::model()->published()</code>.</p>


<div class="detailHeader" id="modelClass-detail">
modelClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$modelClass</b>;</div>

<p>the primary ActiveRecord class name. The <?php echo CHtml::link('getData()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getData')); ?> method
will return a list of objects of this class.</p>


<div class="detailHeader" id="sort-detail">
sort<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?> <?php echo CHtml::link('<b>getSort</b>', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getSort')); ?>(string $className='CSort')<br/>public void <?php echo CHtml::link('<b>setSort</b>', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'setSort')); ?>(mixed $value)</div>

<p>Returns the sorting object.</p>


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
public void <b>__construct</b>(mixed $modelClass, array $config=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$modelClass</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the model class (e.g. 'Post') or the model finder instance
(e.g. <code>Post::model()</code>, <code>Post::model()->published()</code>).</td>
</tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">configuration (name=>value) to be applied as the initial property values of this class.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L82">yii\web\CActiveDataProvider.php#L82</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$modelClass</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$modelClass</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">=</span><span style="color: #0000BB">$modelClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$modelClass&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CActiveRecord</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">=</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$modelClass</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">=</span><span style="color: #0000BB">$modelClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setId</span><span style="color: #007700">(</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">modelName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L223">yii\web\CActiveDataProvider.php#L223</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">calculateTotalItemCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">=clone&nbsp;</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCountCriteria</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">;<br />}</span>
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
protected array <b>fetchData</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of data items</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L172">yii\web\CActiveDataProvider.php#L172</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">fetchData</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=clone&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCriteria</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">())!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTotalItemCount</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$sort</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSort</span><span style="color: #007700">())!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;set&nbsp;model&nbsp;criteria&nbsp;so&nbsp;that&nbsp;CSort&nbsp;can&nbsp;use&nbsp;its&nbsp;table&nbsp;alias&nbsp;setting<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">=clone&nbsp;</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyOrder</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;clone&nbsp;</span><span style="color: #0000BB">$baseCriteria&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findAll</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$baseCriteria</span><span style="color: #007700">);&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;restore&nbsp;original&nbsp;criteria<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L208">yii\web\CActiveDataProvider.php#L208</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">fetchKeys</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyAttribute</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">()&nbsp;:&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyAttribute</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Fetches the data item keys from the persistent data storage.</p>


<div class="detailHeader" id="getCountCriteria-detail">
getCountCriteria()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <b>getCountCriteria</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the count query criteria.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L125">yii\web\CActiveDataProvider.php#L125</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCountCriteria</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_countCriteria</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCriteria</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_countCriteria</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the count query criteria.</p>


<div class="detailHeader" id="getCriteria-detail">
getCriteria()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <b>getCriteria</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L103">yii\web\CActiveDataProvider.php#L103</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCriteria</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_criteria</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_criteria</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_criteria</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the query criteria.</p>


<div class="detailHeader" id="getModel-detail">
getModel()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>getModel</b>(string $className)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">active record class name.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol">active record model instance.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L163">yii\web\CActiveDataProvider.php#L163</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CActiveRecord</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Given active record class name returns new model instance.</p>


<div class="detailHeader" id="getSort-detail">
getSort()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?> <b>getSort</b>(string $className='CSort')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the sorting object class name. Parameter is available since version 1.1.13.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?></td>
  <td class="paramDescCol">the sorting object. If this is false, it means the sorting is disabled.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L148">yii\web\CActiveDataProvider.php#L148</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSort</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #DD0000">'CSort'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$sort</span><span style="color: #007700">=</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">getSort</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the sorting object.</p>


<div class="detailHeader" id="setCountCriteria-detail">
setCountCriteria()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCountCriteria</b>(CDbCriteria|array $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">CDbCriteria|array</td>
  <td class="paramDescCol">the count query criteria. This can be either a CDbCriteria object
or an array representing the query criteria.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L138">yii\web\CActiveDataProvider.php#L138</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCountCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_countCriteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbCriteria&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">:&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the count query criteria.</p>


<div class="detailHeader" id="setCriteria-detail">
setCriteria()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCriteria</b>(CDbCriteria|array $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">CDbCriteria|array</td>
  <td class="paramDescCol">the query criteria. This can be either a CDbCriteria object or an array
representing the query criteria.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CActiveDataProvider.php#L115">yii\web\CActiveDataProvider.php#L115</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbCriteria&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">:&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the query criteria.</p>


