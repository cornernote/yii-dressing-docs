<?php
$this->pageTitle = $this->pageHeading = 'YdActiveDataProvider';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdActiveDataProvider';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdActiveDataProvider &raquo;
<?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?> &raquo;
<?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IDataProvider', array('/site/doc', 'view' => 'IDataProvider')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdActiveDataProvider.php">dressing/components/YdActiveDataProvider.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdActiveDataProvider</div>
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
<tr class="inherited" id="countCriteria">
  <td><?php echo CHtml::link('countCriteria', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'countCriteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td>Returns the count query criteria.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
<tr class="inherited" id="criteria">
  <td><?php echo CHtml::link('criteria', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'criteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td>Returns the query criteria.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
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
<tr class="inherited" id="keyAttribute">
  <td><?php echo CHtml::link('keyAttribute', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'keyAttribute-detail')); ?></td>
  <td>string</td>
  <td>the name of key attribute for <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'YdActiveDataProvider', '#' => 'modelClass')); ?>.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
<tr class="inherited" id="keys">
  <td><?php echo CHtml::link('keys', array('/site/doc', 'view' => 'CDataProvider', '#' => 'keys-detail')); ?></td>
  <td>array</td>
  <td>Returns the key values associated with the data items.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr class="inherited" id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td>the AR finder instance (eg <code>Post::model()</code>).</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
<tr class="inherited" id="modelClass">
  <td><?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'modelClass-detail')); ?></td>
  <td>string</td>
  <td>the primary ActiveRecord class name.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
<tr class="inherited" id="pagination">
  <td><?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'CDataProvider', '#' => 'pagination-detail')); ?></td>
  <td>CPagination|false</td>
  <td>Returns the pagination object.</td>
  <td><?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?></td>
</tr>
<tr id="sort">
  <td><?php echo CHtml::link('sort', array('/site/doc', 'view' => 'YdActiveDataProvider', '#' => 'sort-detail')); ?></td>
  <td><?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?></td>
  <td></td>
  <td>YdActiveDataProvider</td>
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
<tr class="inherited" id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
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
<tr class="inherited" id="getCountCriteria">
  <td><?php echo CHtml::link('getCountCriteria()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getCountCriteria-detail')); ?></td>
  <td>Returns the count query criteria.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
<tr class="inherited" id="getCriteria">
  <td><?php echo CHtml::link('getCriteria()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getCriteria-detail')); ?></td>
  <td>Returns the query criteria.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
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
  <td><?php echo CHtml::link('getSort()', array('/site/doc', 'view' => 'YdActiveDataProvider', '#' => 'getSort-detail')); ?></td>
  <td></td>
  <td>YdActiveDataProvider</td>
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
<tr class="inherited" id="setCountCriteria">
  <td><?php echo CHtml::link('setCountCriteria()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'setCountCriteria-detail')); ?></td>
  <td>Sets the count query criteria.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
<tr class="inherited" id="setCriteria">
  <td><?php echo CHtml::link('setCriteria()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'setCriteria-detail')); ?></td>
  <td>Sets the query criteria.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
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
<tr class="inherited" id="calculateTotalItemCount">
  <td><?php echo CHtml::link('calculateTotalItemCount()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'calculateTotalItemCount-detail')); ?></td>
  <td>Calculates the total number of data items.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
<tr class="inherited" id="fetchData">
  <td><?php echo CHtml::link('fetchData()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'fetchData-detail')); ?></td>
  <td>Fetches the data from the persistent data storage.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
<tr class="inherited" id="fetchKeys">
  <td><?php echo CHtml::link('fetchKeys()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'fetchKeys-detail')); ?></td>
  <td>Fetches the data item keys from the persistent data storage.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
<tr class="inherited" id="getModel">
  <td><?php echo CHtml::link('getModel()', array('/site/doc', 'view' => 'CActiveDataProvider', '#' => 'getModel-detail')); ?></td>
  <td>Given active record class name returns new model instance.</td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="sort-detail">
sort<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?> <?php echo CHtml::link('<b>getSort</b>', array('/site/doc', 'view' => 'YdActiveDataProvider', '#' => 'getSort')); ?>()<br/>public void <?php echo CHtml::link('<b>setSort</b>', array('/site/doc', 'view' => 'YdActiveDataProvider', '#' => 'setSort')); ?>(mixed $value)</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="getSort-detail">
getSort()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?> <b>getSort</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdActiveDataProvider.php#L18">dressing/components/YdActiveDataProvider.php#L18</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSort</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$sort&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">getSort</span><span style="color: #007700">())&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultOrder</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiSort&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pk&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$pk&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$pk</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultOrder&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'t.'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$pk&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;DESC'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sort</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


