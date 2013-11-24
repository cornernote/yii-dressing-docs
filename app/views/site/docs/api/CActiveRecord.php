<?php
$this->pageTitle = $this->pageHeading = 'CActiveRecord';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CActiveRecord';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a> | <a href="#events">Events</a></div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>Package</th>
  <td><?php echo CHtml::link('system.db.ar', array('/site/doc', '#' => 'system.db.ar')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>abstract class CActiveRecord &raquo;
<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>ArrayAccess, Traversable, IteratorAggregate</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php">yii\db\ar\CActiveRecord.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CActiveRecord is the base class for classes representing relational data.
<br/><br/>
It implements the active record design pattern, a popular Object-Relational Mapping (ORM) technique.
Please check <a href="http://www.yiiframework.com/doc/guide/database.ar">the Guide</a> for more details
about this class.</div>
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
<tr id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>Returns all column attribute values.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="commandBuilder">
  <td><?php echo CHtml::link('commandBuilder', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'commandBuilder-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
  <td>Returns the command builder used by this AR.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="db">
  <td><?php echo CHtml::link('db', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'db-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>the default database connection for all active record classes.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="dbConnection">
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>Returns the database connection used by active record.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="dbCriteria">
  <td><?php echo CHtml::link('dbCriteria', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'dbCriteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td>Returns the query criteria associated with this model.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="errors">
  <td><?php echo CHtml::link('errors', array('/site/doc', 'view' => 'CModel', '#' => 'errors-detail')); ?></td>
  <td>array</td>
  <td>Returns the errors for all attribute or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="isNewRecord">
  <td><?php echo CHtml::link('isNewRecord', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'isNewRecord-detail')); ?></td>
  <td>boolean</td>
  <td>Returns if the current record is new.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="iterator">
  <td><?php echo CHtml::link('iterator', array('/site/doc', 'view' => 'CModel', '#' => 'iterator-detail')); ?></td>
  <td><?php echo CHtml::link('CMapIterator', array('/site/doc', 'view' => 'CMapIterator')); ?></td>
  <td>Returns an iterator for traversing the attributes in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="metaData">
  <td><?php echo CHtml::link('metaData', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'metaData-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRecordMetaData', array('/site/doc', 'view' => 'CActiveRecordMetaData')); ?></td>
  <td>Returns the meta-data for this AR</td>
  <td>CActiveRecord</td>
</tr>
<tr id="oldPrimaryKey">
  <td><?php echo CHtml::link('oldPrimaryKey', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'oldPrimaryKey-detail')); ?></td>
  <td>mixed</td>
  <td>Returns the old primary key value.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="primaryKey">
  <td><?php echo CHtml::link('primaryKey', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'primaryKey-detail')); ?></td>
  <td>mixed</td>
  <td>Returns the primary key value.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="safeAttributeNames">
  <td><?php echo CHtml::link('safeAttributeNames', array('/site/doc', 'view' => 'CModel', '#' => 'safeAttributeNames-detail')); ?></td>
  <td>array</td>
  <td>Returns the attribute names that are safe to be massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="scenario">
  <td><?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'CModel', '#' => 'scenario-detail')); ?></td>
  <td>string</td>
  <td>Returns the scenario that this model is used in.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="tableAlias">
  <td><?php echo CHtml::link('tableAlias', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'tableAlias-detail')); ?></td>
  <td>string</td>
  <td>Returns the table alias to be used by the find methods.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="tableSchema">
  <td><?php echo CHtml::link('tableSchema', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'tableSchema-detail')); ?></td>
  <td><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td>Returns the metadata of the table that this AR belongs to</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="validatorList">
  <td><?php echo CHtml::link('validatorList', array('/site/doc', 'view' => 'CModel', '#' => 'validatorList-detail')); ?></td>
  <td><?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?></td>
  <td>Returns all the validators declared in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="validators">
  <td><?php echo CHtml::link('validators', array('/site/doc', 'view' => 'CModel', '#' => 'validators-detail')); ?></td>
  <td>array</td>
  <td>Returns the validators applicable to the current <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'scenario')); ?>.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
<tr id="__call">
  <td><?php echo CHtml::link('__call()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__call-detail')); ?></td>
  <td>Calls the named method which is not a class method.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="__get">
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__get-detail')); ?></td>
  <td>PHP getter magic method.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__isset-detail')); ?></td>
  <td>Checks if a property value is null.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="__set">
  <td><?php echo CHtml::link('__set()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__set-detail')); ?></td>
  <td>PHP setter magic method.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="__sleep">
  <td><?php echo CHtml::link('__sleep()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__sleep-detail')); ?></td>
  <td>PHP sleep magic method.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="__unset">
  <td><?php echo CHtml::link('__unset()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__unset-detail')); ?></td>
  <td>Sets a component property to be null.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="addError">
  <td><?php echo CHtml::link('addError()', array('/site/doc', 'view' => 'CModel', '#' => 'addError-detail')); ?></td>
  <td>Adds a new error to the specified attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="addErrors">
  <td><?php echo CHtml::link('addErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'addErrors-detail')); ?></td>
  <td>Adds a list of errors.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="addRelatedRecord">
  <td><?php echo CHtml::link('addRelatedRecord()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'addRelatedRecord-detail')); ?></td>
  <td>Do not call this method. This method is used internally by <?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?> to populate</td>
  <td>CActiveRecord</td>
</tr>
<tr id="afterFindInternal">
  <td><?php echo CHtml::link('afterFindInternal()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterFindInternal-detail')); ?></td>
  <td>Calls <?php echo CHtml::link('afterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterFind')); ?>.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="applyScopes">
  <td><?php echo CHtml::link('applyScopes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'applyScopes-detail')); ?></td>
  <td>Applies the query scopes to the given criteria.</td>
  <td>CActiveRecord</td>
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
<tr class="inherited" id="attributeLabels">
  <td><?php echo CHtml::link('attributeLabels()', array('/site/doc', 'view' => 'CModel', '#' => 'attributeLabels-detail')); ?></td>
  <td>Returns the attribute labels.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="attributeNames">
  <td><?php echo CHtml::link('attributeNames()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'attributeNames-detail')); ?></td>
  <td>Returns the list of all attribute names of the model.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="beforeFindInternal">
  <td><?php echo CHtml::link('beforeFindInternal()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeFindInternal-detail')); ?></td>
  <td>Calls <?php echo CHtml::link('beforeFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeFind')); ?>.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors()', array('/site/doc', 'view' => 'CModel', '#' => 'behaviors-detail')); ?></td>
  <td>Returns a list of behaviors that this model should behave as.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="cache">
  <td><?php echo CHtml::link('cache()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'cache-detail')); ?></td>
  <td>Sets the parameters about query caching.</td>
  <td>CActiveRecord</td>
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
<tr class="inherited" id="clearErrors">
  <td><?php echo CHtml::link('clearErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'clearErrors-detail')); ?></td>
  <td>Removes errors for all attributes or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="count">
  <td><?php echo CHtml::link('count()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'count-detail')); ?></td>
  <td>Finds the number of rows satisfying the specified query condition.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="countByAttributes">
  <td><?php echo CHtml::link('countByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'countByAttributes-detail')); ?></td>
  <td>Finds the number of rows that have the specified attribute values.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="countBySql">
  <td><?php echo CHtml::link('countBySql()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'countBySql-detail')); ?></td>
  <td>Finds the number of rows using the given SQL statement.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="createValidators">
  <td><?php echo CHtml::link('createValidators()', array('/site/doc', 'view' => 'CModel', '#' => 'createValidators-detail')); ?></td>
  <td>Creates validator objects based on the specification in <?php echo CHtml::link('rules', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'rules')); ?>.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="defaultScope">
  <td><?php echo CHtml::link('defaultScope()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'defaultScope-detail')); ?></td>
  <td>Returns the default named scope that should be implicitly applied to all queries for this model.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="delete">
  <td><?php echo CHtml::link('delete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'delete-detail')); ?></td>
  <td>Deletes the row corresponding to this active record.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="deleteAll">
  <td><?php echo CHtml::link('deleteAll()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'deleteAll-detail')); ?></td>
  <td>Deletes rows with the specified condition.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="deleteAllByAttributes">
  <td><?php echo CHtml::link('deleteAllByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'deleteAllByAttributes-detail')); ?></td>
  <td>Deletes rows which match the specified attribute values.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="deleteByPk">
  <td><?php echo CHtml::link('deleteByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'deleteByPk-detail')); ?></td>
  <td>Deletes rows with the specified primary key.</td>
  <td>CActiveRecord</td>
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
<tr id="equals">
  <td><?php echo CHtml::link('equals()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'equals-detail')); ?></td>
  <td>Compares current active record with another one.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="exists">
  <td><?php echo CHtml::link('exists()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'exists-detail')); ?></td>
  <td>Checks whether there is row satisfying the specified condition.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="find">
  <td><?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find-detail')); ?></td>
  <td>Finds a single active record with the specified condition.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="findAll">
  <td><?php echo CHtml::link('findAll()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAll-detail')); ?></td>
  <td>Finds all active records satisfying the specified condition.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="findAllByAttributes">
  <td><?php echo CHtml::link('findAllByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByAttributes-detail')); ?></td>
  <td>Finds all active records that have the specified attribute values.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="findAllByPk">
  <td><?php echo CHtml::link('findAllByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByPk-detail')); ?></td>
  <td>Finds all active records with the specified primary keys.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="findAllBySql">
  <td><?php echo CHtml::link('findAllBySql()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllBySql-detail')); ?></td>
  <td>Finds all active records using the specified SQL statement.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="findByAttributes">
  <td><?php echo CHtml::link('findByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByAttributes-detail')); ?></td>
  <td>Finds a single active record that has the specified attribute values.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="findByPk">
  <td><?php echo CHtml::link('findByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByPk-detail')); ?></td>
  <td>Finds a single active record with the specified primary key.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="findBySql">
  <td><?php echo CHtml::link('findBySql()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findBySql-detail')); ?></td>
  <td>Finds a single active record with the specified SQL statement.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="generateAttributeLabel">
  <td><?php echo CHtml::link('generateAttributeLabel()', array('/site/doc', 'view' => 'CModel', '#' => 'generateAttributeLabel-detail')); ?></td>
  <td>Generates a user friendly attribute label.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="getActiveFinder">
  <td><?php echo CHtml::link('getActiveFinder()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getActiveFinder-detail')); ?></td>
  <td>Given 'with' options returns a new active finder instance.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getActiveRelation">
  <td><?php echo CHtml::link('getActiveRelation()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getActiveRelation-detail')); ?></td>
  <td>Returns the named relation declared for this AR class.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getAttribute">
  <td><?php echo CHtml::link('getAttribute()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getAttribute-detail')); ?></td>
  <td>Returns the named attribute value.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getAttributeLabel">
  <td><?php echo CHtml::link('getAttributeLabel()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getAttributeLabel-detail')); ?></td>
  <td>Returns the text label for the specified attribute.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getAttributes">
  <td><?php echo CHtml::link('getAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getAttributes-detail')); ?></td>
  <td>Returns all column attribute values.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getCommandBuilder">
  <td><?php echo CHtml::link('getCommandBuilder()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getCommandBuilder-detail')); ?></td>
  <td>Returns the command builder used by this AR.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns the database connection used by active record.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getDbCriteria">
  <td><?php echo CHtml::link('getDbCriteria()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getDbCriteria-detail')); ?></td>
  <td>Returns the query criteria associated with this model.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="getError">
  <td><?php echo CHtml::link('getError()', array('/site/doc', 'view' => 'CModel', '#' => 'getError-detail')); ?></td>
  <td>Returns the first error of the specified attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getErrors">
  <td><?php echo CHtml::link('getErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'getErrors-detail')); ?></td>
  <td>Returns the errors for all attribute or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getIsNewRecord">
  <td><?php echo CHtml::link('getIsNewRecord()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getIsNewRecord-detail')); ?></td>
  <td>Returns if the current record is new.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="getIterator">
  <td><?php echo CHtml::link('getIterator()', array('/site/doc', 'view' => 'CModel', '#' => 'getIterator-detail')); ?></td>
  <td>Returns an iterator for traversing the attributes in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="getMetaData">
  <td><?php echo CHtml::link('getMetaData()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getMetaData-detail')); ?></td>
  <td>Returns the meta-data for this AR</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getOldPrimaryKey">
  <td><?php echo CHtml::link('getOldPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getOldPrimaryKey-detail')); ?></td>
  <td>Returns the old primary key value.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getPrimaryKey">
  <td><?php echo CHtml::link('getPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getPrimaryKey-detail')); ?></td>
  <td>Returns the primary key value.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getRelated">
  <td><?php echo CHtml::link('getRelated()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getRelated-detail')); ?></td>
  <td>Returns the related record(s).</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="getSafeAttributeNames">
  <td><?php echo CHtml::link('getSafeAttributeNames()', array('/site/doc', 'view' => 'CModel', '#' => 'getSafeAttributeNames-detail')); ?></td>
  <td>Returns the attribute names that are safe to be massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getScenario">
  <td><?php echo CHtml::link('getScenario()', array('/site/doc', 'view' => 'CModel', '#' => 'getScenario-detail')); ?></td>
  <td>Returns the scenario that this model is used in.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="getTableAlias">
  <td><?php echo CHtml::link('getTableAlias()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getTableAlias-detail')); ?></td>
  <td>Returns the table alias to be used by the find methods.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="getTableSchema">
  <td><?php echo CHtml::link('getTableSchema()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getTableSchema-detail')); ?></td>
  <td>Returns the metadata of the table that this AR belongs to</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="getValidatorList">
  <td><?php echo CHtml::link('getValidatorList()', array('/site/doc', 'view' => 'CModel', '#' => 'getValidatorList-detail')); ?></td>
  <td>Returns all the validators declared in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getValidators">
  <td><?php echo CHtml::link('getValidators()', array('/site/doc', 'view' => 'CModel', '#' => 'getValidators-detail')); ?></td>
  <td>Returns the validators applicable to the current <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'scenario')); ?>.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="hasAttribute">
  <td><?php echo CHtml::link('hasAttribute()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'hasAttribute-detail')); ?></td>
  <td>Checks whether this AR has the named attribute</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="hasErrors">
  <td><?php echo CHtml::link('hasErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'hasErrors-detail')); ?></td>
  <td>Returns a value indicating whether there is any validation error.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
<tr id="hasRelated">
  <td><?php echo CHtml::link('hasRelated()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'hasRelated-detail')); ?></td>
  <td>Returns a value indicating whether the named related object(s) has been loaded.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'init-detail')); ?></td>
  <td>Initializes this model.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="insert">
  <td><?php echo CHtml::link('insert()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'insert-detail')); ?></td>
  <td>Inserts a row into the table based on this active record attributes.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="isAttributeRequired">
  <td><?php echo CHtml::link('isAttributeRequired()', array('/site/doc', 'view' => 'CModel', '#' => 'isAttributeRequired-detail')); ?></td>
  <td>Returns a value indicating whether the attribute is required.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="isAttributeSafe">
  <td><?php echo CHtml::link('isAttributeSafe()', array('/site/doc', 'view' => 'CModel', '#' => 'isAttributeSafe-detail')); ?></td>
  <td>Returns a value indicating whether the attribute is safe for massive assignments.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'model-detail')); ?></td>
  <td>Returns the static model of the specified AR class.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'offsetExists-detail')); ?></td>
  <td>Returns whether there is an element at the specified offset.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetGet-detail')); ?></td>
  <td>Returns the element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetSet-detail')); ?></td>
  <td>Sets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetUnset-detail')); ?></td>
  <td>Unsets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onAfterConstruct">
  <td><?php echo CHtml::link('onAfterConstruct()', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterConstruct-detail')); ?></td>
  <td>This event is raised after the model instance is created by new operator.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="onAfterDelete">
  <td><?php echo CHtml::link('onAfterDelete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterDelete-detail')); ?></td>
  <td>This event is raised after the record is deleted.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onAfterFind">
  <td><?php echo CHtml::link('onAfterFind()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterFind-detail')); ?></td>
  <td>This event is raised after the record is instantiated by a find method.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onAfterSave">
  <td><?php echo CHtml::link('onAfterSave()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterSave-detail')); ?></td>
  <td>This event is raised after the record is saved.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="onAfterValidate">
  <td><?php echo CHtml::link('onAfterValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterValidate-detail')); ?></td>
  <td>This event is raised after the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="onBeforeCount">
  <td><?php echo CHtml::link('onBeforeCount()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeCount-detail')); ?></td>
  <td>This event is raised before an AR finder performs a count call.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onBeforeDelete">
  <td><?php echo CHtml::link('onBeforeDelete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeDelete-detail')); ?></td>
  <td>This event is raised before the record is deleted.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onBeforeFind">
  <td><?php echo CHtml::link('onBeforeFind()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeFind-detail')); ?></td>
  <td>This event is raised before an AR finder performs a find call.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onBeforeSave">
  <td><?php echo CHtml::link('onBeforeSave()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeSave-detail')); ?></td>
  <td>This event is raised before the record is saved.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="onBeforeValidate">
  <td><?php echo CHtml::link('onBeforeValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'onBeforeValidate-detail')); ?></td>
  <td>This event is raised before the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onUnsafeAttribute">
  <td><?php echo CHtml::link('onUnsafeAttribute()', array('/site/doc', 'view' => 'CModel', '#' => 'onUnsafeAttribute-detail')); ?></td>
  <td>This method is invoked when an unsafe attribute is being massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="populateRecord">
  <td><?php echo CHtml::link('populateRecord()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'populateRecord-detail')); ?></td>
  <td>Creates an active record with the given attributes.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="populateRecords">
  <td><?php echo CHtml::link('populateRecords()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'populateRecords-detail')); ?></td>
  <td>Creates a list of active records based on the input data.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="primaryKey()">
  <td><?php echo CHtml::link('primaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'primaryKey()-detail')); ?></td>
  <td>Returns the primary key of the associated database table.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="refresh">
  <td><?php echo CHtml::link('refresh()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'refresh-detail')); ?></td>
  <td>Repopulates this active record with the latest data.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="refreshMetaData">
  <td><?php echo CHtml::link('refreshMetaData()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'refreshMetaData-detail')); ?></td>
  <td>Refreshes the meta data for this AR class.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="relations">
  <td><?php echo CHtml::link('relations()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'relations-detail')); ?></td>
  <td>This method should be overridden to declare related objects.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="resetScope">
  <td><?php echo CHtml::link('resetScope()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'resetScope-detail')); ?></td>
  <td>Resets all scopes and criterias applied.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="rules">
  <td><?php echo CHtml::link('rules()', array('/site/doc', 'view' => 'CModel', '#' => 'rules-detail')); ?></td>
  <td>Returns the validation rules for attributes.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="save">
  <td><?php echo CHtml::link('save()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'save-detail')); ?></td>
  <td>Saves the current record.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="saveAttributes">
  <td><?php echo CHtml::link('saveAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'saveAttributes-detail')); ?></td>
  <td>Saves a selected list of attributes.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="saveCounters">
  <td><?php echo CHtml::link('saveCounters()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'saveCounters-detail')); ?></td>
  <td>Saves one or several counter columns for the current AR object.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="scopes">
  <td><?php echo CHtml::link('scopes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'scopes-detail')); ?></td>
  <td>Returns the declaration of named scopes.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="setAttribute">
  <td><?php echo CHtml::link('setAttribute()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setAttribute-detail')); ?></td>
  <td>Sets the named attribute value.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="setAttributes">
  <td><?php echo CHtml::link('setAttributes()', array('/site/doc', 'view' => 'CModel', '#' => 'setAttributes-detail')); ?></td>
  <td>Sets the attribute values in a massive way.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="setDbCriteria">
  <td><?php echo CHtml::link('setDbCriteria()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setDbCriteria-detail')); ?></td>
  <td>Sets the query criteria for the current model.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="setIsNewRecord">
  <td><?php echo CHtml::link('setIsNewRecord()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setIsNewRecord-detail')); ?></td>
  <td>Sets if the record is new.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="setOldPrimaryKey">
  <td><?php echo CHtml::link('setOldPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setOldPrimaryKey-detail')); ?></td>
  <td>Sets the old primary key value.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="setPrimaryKey">
  <td><?php echo CHtml::link('setPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setPrimaryKey-detail')); ?></td>
  <td>Sets the primary key value.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="setScenario">
  <td><?php echo CHtml::link('setScenario()', array('/site/doc', 'view' => 'CModel', '#' => 'setScenario-detail')); ?></td>
  <td>Sets the scenario for the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="setTableAlias">
  <td><?php echo CHtml::link('setTableAlias()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setTableAlias-detail')); ?></td>
  <td>Sets the table alias to be used in queries.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="tableName">
  <td><?php echo CHtml::link('tableName()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'tableName-detail')); ?></td>
  <td>Returns the name of the associated database table.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="together">
  <td><?php echo CHtml::link('together()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'together-detail')); ?></td>
  <td>Sets <?php echo CHtml::link('CDbCriteria::together', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'together')); ?> property to be true.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="unsetAttributes">
  <td><?php echo CHtml::link('unsetAttributes()', array('/site/doc', 'view' => 'CModel', '#' => 'unsetAttributes-detail')); ?></td>
  <td>Sets the attributes to be null.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="update">
  <td><?php echo CHtml::link('update()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'update-detail')); ?></td>
  <td>Updates the row represented by this active record.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="updateAll">
  <td><?php echo CHtml::link('updateAll()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'updateAll-detail')); ?></td>
  <td>Updates records with the specified condition.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="updateByPk">
  <td><?php echo CHtml::link('updateByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'updateByPk-detail')); ?></td>
  <td>Updates records with the specified primary key(s).</td>
  <td>CActiveRecord</td>
</tr>
<tr id="updateCounters">
  <td><?php echo CHtml::link('updateCounters()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'updateCounters-detail')); ?></td>
  <td>Updates one or several counter columns.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CModel', '#' => 'validate-detail')); ?></td>
  <td>Performs the validation.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="with">
  <td><?php echo CHtml::link('with()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'with-detail')); ?></td>
  <td>Specifies which related objects should be eagerly loaded.</td>
  <td>CActiveRecord</td>
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
<tr class="inherited" id="afterConstruct">
  <td><?php echo CHtml::link('afterConstruct()', array('/site/doc', 'view' => 'CModel', '#' => 'afterConstruct-detail')); ?></td>
  <td>This method is invoked after a model instance is created by new operator.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="afterDelete">
  <td><?php echo CHtml::link('afterDelete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterDelete-detail')); ?></td>
  <td>This method is invoked after deleting a record.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="afterFind">
  <td><?php echo CHtml::link('afterFind()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterFind-detail')); ?></td>
  <td>This method is invoked after each record is instantiated by a find method.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="afterSave">
  <td><?php echo CHtml::link('afterSave()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterSave-detail')); ?></td>
  <td>This method is invoked after saving a record successfully.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="afterValidate">
  <td><?php echo CHtml::link('afterValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'afterValidate-detail')); ?></td>
  <td>This method is invoked after validation ends.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="beforeCount">
  <td><?php echo CHtml::link('beforeCount()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeCount-detail')); ?></td>
  <td>This method is invoked before an AR finder executes a count call.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="beforeDelete">
  <td><?php echo CHtml::link('beforeDelete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeDelete-detail')); ?></td>
  <td>This method is invoked before deleting a record.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="beforeFind">
  <td><?php echo CHtml::link('beforeFind()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeFind-detail')); ?></td>
  <td>This method is invoked before an AR finder executes a find call.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="beforeSave">
  <td><?php echo CHtml::link('beforeSave()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeSave-detail')); ?></td>
  <td>This method is invoked before saving a record (after validation, if any).</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="beforeValidate">
  <td><?php echo CHtml::link('beforeValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'beforeValidate-detail')); ?></td>
  <td>This method is invoked before validation starts.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="instantiate">
  <td><?php echo CHtml::link('instantiate()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'instantiate-detail')); ?></td>
  <td>Creates an active record instance.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="query">
  <td><?php echo CHtml::link('query()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'query-detail')); ?></td>
  <td>Performs the actual DB query and populates the AR objects with the query result.</td>
  <td>CActiveRecord</td>
</tr>
</table>
</div>
<a name="events"></a>

<div class="summary docEvent">
<h2>Events</h2>

<p><a href="#" class="toggle">Hide inherited events</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-event" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Event</th><th>Description</th><th>Defined By</th>
</tr>
<tr id="onBeforeSave">
  <td><?php echo CHtml::link('onBeforeSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeSave-detail')); ?></td>
  <td>This event is raised before the record is saved.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onAfterSave">
  <td><?php echo CHtml::link('onAfterSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterSave-detail')); ?></td>
  <td>This event is raised after the record is saved.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onBeforeDelete">
  <td><?php echo CHtml::link('onBeforeDelete', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeDelete-detail')); ?></td>
  <td>This event is raised before the record is deleted.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onAfterDelete">
  <td><?php echo CHtml::link('onAfterDelete', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterDelete-detail')); ?></td>
  <td>This event is raised after the record is deleted.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onBeforeFind">
  <td><?php echo CHtml::link('onBeforeFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeFind-detail')); ?></td>
  <td>This event is raised before an AR finder performs a find call.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onAfterFind">
  <td><?php echo CHtml::link('onAfterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterFind-detail')); ?></td>
  <td>This event is raised after the record is instantiated by a find method.</td>
  <td>CActiveRecord</td>
</tr>
<tr id="onBeforeCount">
  <td><?php echo CHtml::link('onBeforeCount', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeCount-detail')); ?></td>
  <td>This event is raised before an AR finder performs a count call.</td>
  <td>CActiveRecord</td>
</tr>
<tr class="inherited" id="onAfterConstruct">
  <td><?php echo CHtml::link('onAfterConstruct', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterConstruct-detail')); ?></td>
  <td>This event is raised after the model instance is created by new operator.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onBeforeValidate">
  <td><?php echo CHtml::link('onBeforeValidate', array('/site/doc', 'view' => 'CModel', '#' => 'onBeforeValidate-detail')); ?></td>
  <td>This event is raised before the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onAfterValidate">
  <td><?php echo CHtml::link('onAfterValidate', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterValidate-detail')); ?></td>
  <td>This event is raised after the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onUnsafeAttribute">
  <td><?php echo CHtml::link('onUnsafeAttribute', array('/site/doc', 'view' => 'CModel', '#' => 'onUnsafeAttribute-detail')); ?></td>
  <td>This method is invoked when an unsafe attribute is being massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="attributes-detail">
attributes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getAttributes</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getAttributes')); ?>(mixed $names=true)<br/>public void <?php echo CHtml::link('<b>setAttributes</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setAttributes')); ?>(array $values, boolean $safeOnly=true)</div>

<p>Returns all column attribute values.
Note, related objects are not returned.</p>


<div class="detailHeader" id="commandBuilder-detail">
commandBuilder<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?> <?php echo CHtml::link('<b>getCommandBuilder</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getCommandBuilder')); ?>()</div>

<p>Returns the command builder used by this AR.</p>


<div class="detailHeader" id="db-detail">
db<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <b>$db</b>;</div>

<p>the default database connection for all active record classes.
By default, this is the 'db' application component.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getDbConnection', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getDbConnection')); ?></li>
</ul>
</div>

<div class="detailHeader" id="dbConnection-detail">
dbConnection<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <?php echo CHtml::link('<b>getDbConnection</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getDbConnection')); ?>()</div>

<p>Returns the database connection used by active record.
By default, the "db" application component is used as the database connection.
You may override this method if you want to use a different database connection.</p>


<div class="detailHeader" id="dbCriteria-detail">
dbCriteria<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <?php echo CHtml::link('<b>getDbCriteria</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getDbCriteria')); ?>(boolean $createIfNull=true)<br/>public void <?php echo CHtml::link('<b>setDbCriteria</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setDbCriteria')); ?>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria)</div>

<p>Returns the query criteria associated with this model.</p>


<div class="detailHeader" id="isNewRecord-detail">
isNewRecord<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsNewRecord</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getIsNewRecord')); ?>()<br/>public void <?php echo CHtml::link('<b>setIsNewRecord</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setIsNewRecord')); ?>(boolean $value)</div>

<p>Returns if the current record is new.</p>


<div class="detailHeader" id="metaData-detail">
metaData<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveRecordMetaData', array('/site/doc', 'view' => 'CActiveRecordMetaData')); ?> <?php echo CHtml::link('<b>getMetaData</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getMetaData')); ?>()</div>

<p>Returns the meta-data for this AR</p>


<div class="detailHeader" id="oldPrimaryKey-detail">
oldPrimaryKey<span class="detailHeaderTag">
property
 (available since v1.1.0)
</span>
</div>

<div class="signature">
public mixed <?php echo CHtml::link('<b>getOldPrimaryKey</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getOldPrimaryKey')); ?>()<br/>public void <?php echo CHtml::link('<b>setOldPrimaryKey</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setOldPrimaryKey')); ?>(mixed $value)</div>

<p>Returns the old primary key value.
This refers to the primary key value that is populated into the record
after executing a find method (e.g. find(), findAll()).
The value remains unchanged even if the primary key attribute is manually assigned with a different value.</p>


<div class="detailHeader" id="primaryKey-detail">
primaryKey<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <?php echo CHtml::link('<b>getPrimaryKey</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getPrimaryKey')); ?>()<br/>public void <?php echo CHtml::link('<b>setPrimaryKey</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setPrimaryKey')); ?>(mixed $value)</div>

<p>Returns the primary key value.</p>


<div class="detailHeader" id="tableAlias-detail">
tableAlias<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getTableAlias</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getTableAlias')); ?>(boolean $quote=false, boolean $checkScopes=true)<br/>public void <?php echo CHtml::link('<b>setTableAlias</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setTableAlias')); ?>(string $alias)</div>

<p>Returns the table alias to be used by the find methods.
In relational queries, the returned table alias may vary according to
the corresponding relation declaration. Also, the default table alias
set by <?php echo CHtml::link('setTableAlias', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setTableAlias')); ?> may be overridden by the applied scopes.</p>


<div class="detailHeader" id="tableSchema-detail">
tableSchema<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> <?php echo CHtml::link('<b>getTableSchema</b>', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getTableSchema')); ?>()</div>

<p>Returns the metadata of the table that this AR belongs to</p>


<h2>Method Details</h2>

<div class="detailHeader" id="__call-detail">
__call()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>__call</b>(string $name, array $parameters)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the method name</td>
</tr>
<tr>
  <td class="paramNameCol">$parameters</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">method parameters</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the method return value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L210">yii\db\ar\CActiveRecord.php#L210</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__call</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$parameters</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$parameters</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRelated</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRelated</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$parameters</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__call</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$parameters</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Calls the named method which is not a class method.
Do not call this method. This is a PHP magic method that we override
to implement the named scope feature.</p>


<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>(string $scenario='insert')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$scenario</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">scenario name. See <?php echo CHtml::link('CModel::scenario', array('/site/doc', 'view' => 'CModel', '#' => 'scenario')); ?> for more details about this parameter.
Note: in order to setup initial model parameters use <?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'init')); ?> or <?php echo CHtml::link('afterConstruct()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterConstruct')); ?>.
Do NOT override the constructor unless it is absolutely necessary!</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L72">yii\db\ar\CActiveRecord.php#L72</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$scenario</span><span style="color: #007700">=</span><span style="color: #DD0000">'insert'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$scenario</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;internally&nbsp;used&nbsp;by&nbsp;populateRecord()&nbsp;and&nbsp;model()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setScenario</span><span style="color: #007700">(</span><span style="color: #0000BB">$scenario</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setIsNewRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">attributeDefaults</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attachBehaviors</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">behaviors</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterConstruct</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="__get-detail">
__get()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>__get</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">property name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">property value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L134">yii\db\ar\CActiveRecord.php#L134</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__get</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRelated</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__get</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>PHP getter magic method.
This method is overridden so that AR attributes can be accessed like properties.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getAttribute', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getAttribute')); ?></li>
</ul>
</div>

<div class="detailHeader" id="__isset-detail">
__isset()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>__isset</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the property name or the event name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the property value is null</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L172">yii\db\ar\CActiveRecord.php#L172</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__isset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRelated</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)!==</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__isset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Checks if a property value is null.
This method overrides the parent implementation by checking
if the named attribute is null or not.</p>


<div class="detailHeader" id="__set-detail">
__set()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__set</b>(string $name, mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">property name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">property value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L154">yii\db\ar\CActiveRecord.php#L154</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__set</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__set</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>PHP setter magic method.
This method is overridden so that AR attributes can be accessed like properties.</p>


<div class="detailHeader" id="__sleep-detail">
__sleep()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>__sleep</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L122">yii\db\ar\CActiveRecord.php#L122</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__sleep</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">((array)</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>PHP sleep magic method.
This method ensures that the model meta data reference is set to null.</p>


<div class="detailHeader" id="__unset-detail">
__unset()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__unset</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the property name or the event name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L192">yii\db\ar\CActiveRecord.php#L192</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__unset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__unset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets a component property to be null.
This method overrides the parent implementation by clearing
the specified attribute value.</p>


<div class="detailHeader" id="addRelatedRecord-detail">
addRelatedRecord()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addRelatedRecord</b>(string $name, mixed $record, mixed $index)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">$record</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the related record</td>
</tr>
<tr>
  <td class="paramNameCol">$index</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the index value in the related object collection.
If true, it means using zero-based integer index.
If false, it means a HAS_ONE or BELONGS_TO object and no index is needed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L727">yii\db\ar\CActiveRecord.php#L727</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addRelatedRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$record</span><span style="color: #007700">,</span><span style="color: #0000BB">$index</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$index</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$record&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CActiveRecord</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$index</span><span style="color: #007700">===</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">][]=</span><span style="color: #0000BB">$record</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">][</span><span style="color: #0000BB">$index</span><span style="color: #007700">]=</span><span style="color: #0000BB">$record</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$record</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Do not call this method. This method is used internally by <?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?> to populate
related objects. This method adds a related object to this record.</p>


<div class="detailHeader" id="afterDelete-detail">
afterDelete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>afterDelete</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L986">yii\db\ar\CActiveRecord.php#L986</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">afterDelete</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterDelete'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onAfterDelete</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked after deleting a record.
The default implementation raises the <?php echo CHtml::link('onAfterDelete', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterDelete')); ?> event.
You may override this method to do postprocessing after the record is deleted.
Make sure you call the parent implementation so that the event is raised properly.</p>


<div class="detailHeader" id="afterFind-detail">
afterFind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>afterFind</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1031">yii\db\ar\CActiveRecord.php#L1031</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">afterFind</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterFind'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onAfterFind</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked after each record is instantiated by a find method.
The default implementation raises the <?php echo CHtml::link('onAfterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterFind')); ?> event.
You may override this method to do postprocessing after each newly found record is instantiated.
Make sure you call the parent implementation so that the event is raised properly.</p>


<div class="detailHeader" id="afterFindInternal-detail">
afterFindInternal()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>afterFindInternal</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1050">yii\db\ar\CActiveRecord.php#L1050</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterFindInternal</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterFind</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Calls <?php echo CHtml::link('afterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterFind')); ?>.
This method is internally used.</p>


<div class="detailHeader" id="afterSave-detail">
afterSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>afterSave</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L955">yii\db\ar\CActiveRecord.php#L955</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterSave'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onAfterSave</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked after saving a record successfully.
The default implementation raises the <?php echo CHtml::link('onAfterSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterSave')); ?> event.
You may override this method to do postprocessing after record saving.
Make sure you call the parent implementation so that the event is raised properly.</p>


<div class="detailHeader" id="applyScopes-detail">
applyScopes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>applyScopes</b>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> &$criteria)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria. This parameter may be modified by merging <?php echo CHtml::link('dbCriteria', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'dbCriteria')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1366">yii\db\ar\CActiveRecord.php#L1366</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">applyScopes</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scs</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach((array)</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_integer</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$scs</span><span style="color: #007700">[</span><span style="color: #0000BB">$v</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$scs</span><span style="color: #007700">[</span><span style="color: #0000BB">$v</span><span style="color: #007700">],</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scope</span><span style="color: #007700">=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scope</span><span style="color: #007700">=</span><span style="color: #0000BB">key</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scope</span><span style="color: #007700">=</span><span style="color: #0000BB">$k</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$scope</span><span style="color: #007700">),(array)</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$c</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$c</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$c</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resetScope</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Applies the query scopes to the given criteria.
This method merges <?php echo CHtml::link('dbCriteria', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'dbCriteria')); ?> with the given criteria parameter.
It then resets <?php echo CHtml::link('dbCriteria', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'dbCriteria')); ?> to be null.</p>


<div class="detailHeader" id="attributeNames-detail">
attributeNames()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>attributeNames</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attribute names.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L581">yii\db\ar\CActiveRecord.php#L581</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">attributeNames</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the list of all attribute names of the model.
This would return all column names of the table associated with this AR class.</p>


<div class="detailHeader" id="beforeCount-detail">
beforeCount()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>beforeCount</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1019">yii\db\ar\CActiveRecord.php#L1019</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeCount'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onBeforeCount</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked before an AR finder executes a count call.
The count calls include <?php echo CHtml::link('count', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'count')); ?> and <?php echo CHtml::link('countByAttributes', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'countByAttributes')); ?>
The default implementation raises the <?php echo CHtml::link('onBeforeCount', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeCount')); ?> event.
If you override this method, make sure you call the parent implementation
so that the event is raised properly.</p>


<div class="detailHeader" id="beforeDelete-detail">
beforeDelete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>beforeDelete</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the record should be deleted. Defaults to true.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L968">yii\db\ar\CActiveRecord.php#L968</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeDelete</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeDelete'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CModelEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onBeforeDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isValid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked before deleting a record.
The default implementation raises the <?php echo CHtml::link('onBeforeDelete', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeDelete')); ?> event.
You may override this method to do any preparation work for record deletion.
Make sure you call the parent implementation so that the event is raised properly.</p>


<div class="detailHeader" id="beforeFind-detail">
beforeFind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>beforeFind</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1002">yii\db\ar\CActiveRecord.php#L1002</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeFind</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeFind'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CModelEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onBeforeFind</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked before an AR finder executes a find call.
The find calls include <?php echo CHtml::link('find', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?>, <?php echo CHtml::link('findAll', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAll')); ?>, <?php echo CHtml::link('findByPk', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByPk')); ?>,
<?php echo CHtml::link('findAllByPk', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByPk')); ?>, <?php echo CHtml::link('findByAttributes', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByAttributes')); ?>, <?php echo CHtml::link('findAllByAttributes', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByAttributes')); ?>,
<?php echo CHtml::link('findBySql', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findBySql')); ?> and <?php echo CHtml::link('findAllBySql', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllBySql')); ?>.
The default implementation raises the <?php echo CHtml::link('onBeforeFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeFind')); ?> event.
If you override this method, make sure you call the parent implementation
so that the event is raised properly.
For details on modifying query criteria see <?php echo CHtml::link('onBeforeFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeFind')); ?> event.</p>


<div class="detailHeader" id="beforeFindInternal-detail">
beforeFindInternal()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>beforeFindInternal</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1041">yii\db\ar\CActiveRecord.php#L1041</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeFindInternal</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeFind</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Calls <?php echo CHtml::link('beforeFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeFind')); ?>.
This method is internally used.</p>


<div class="detailHeader" id="beforeSave-detail">
beforeSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>beforeSave</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the saving should be executed. Defaults to true.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L937">yii\db\ar\CActiveRecord.php#L937</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeSave</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeSave'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CModelEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onBeforeSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isValid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked before saving a record (after validation, if any).
The default implementation raises the <?php echo CHtml::link('onBeforeSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeSave')); ?> event.
You may override this method to do any preparation work for record saving.
Use <?php echo CHtml::link('isNewRecord', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'isNewRecord')); ?> to determine whether the saving is
for inserting or updating record.
Make sure you call the parent implementation so that the event is raised properly.</p>


<div class="detailHeader" id="cache-detail">
cache()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord <b>cache</b>(integer $duration, CCacheDependency|ICacheDependency $dependency=NULL, integer $queryCount=1)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$duration</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds that query results may remain valid in cache.
If this is 0, the caching will be disabled.</td>
</tr>
<tr>
  <td class="paramNameCol">$dependency</td>
  <td class="paramTypeCol">CCacheDependency|ICacheDependency</td>
  <td class="paramDescCol">the dependency that will be used when saving
the query results into cache.</td>
</tr>
<tr>
  <td class="paramNameCol">$queryCount</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of SQL queries that need to be cached after calling this method. Defaults to 1,
meaning that the next SQL query will be cached.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">the active record instance itself.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L111">yii\db\ar\CActiveRecord.php#L111</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">cache</span><span style="color: #007700">(</span><span style="color: #0000BB">$duration</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dependency</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$queryCount</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">(</span><span style="color: #0000BB">$duration</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dependency</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$queryCount</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the parameters about query caching.
This is a shortcut method to <?php echo CHtml::link('CDbConnection::cache()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'cache')); ?>.
It changes the query caching parameter of the <?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'dbConnection')); ?> instance.</p>


<div class="detailHeader" id="count-detail">
count()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>count</b>(mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the number of rows satisfying the specified query condition. Note: type is string to keep max. precision.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1592">yii\db\ar\CActiveRecord.php#L1592</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.count()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeCount</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyScopes</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCountCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFinder</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Finds the number of rows satisfying the specified query condition.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="countByAttributes-detail">
countByAttributes()
<span class="detailHeaderTag">
method
(available since v1.1.4)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>countByAttributes</b>(array $attributes, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attribute values (indexed by attribute names) that the active records should match.
An attribute value can be an array which will be used to generate an IN condition.</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the number of rows satisfying the specified query condition. Note: type is string to keep max. precision.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1619">yii\db\ar\CActiveRecord.php#L1619</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">countByAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.countByAttributes()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeCount</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createColumnCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyScopes</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCountCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFinder</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Finds the number of rows that have the specified attribute values.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="countBySql-detail">
countBySql()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>countBySql</b>(string $sql, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to the SQL statement</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the number of rows using the given SQL statement. Note: type is string to keep max. precision.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1645">yii\db\ar\CActiveRecord.php#L1645</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">countBySql</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.countBySql()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeCount</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createSqlCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Finds the number of rows using the given SQL statement.
This is equivalent to calling <?php echo CHtml::link('CDbCommand::queryScalar', array('/site/doc', 'view' => 'CDbCommand', '#' => 'queryScalar')); ?> with the specified
SQL statement and the parameters.</p>


<div class="detailHeader" id="defaultScope-detail">
defaultScope()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>defaultScope</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the query criteria. This will be used as the parameter to the constructor
of <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L351">yii\db\ar\CActiveRecord.php#L351</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">defaultScope</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the default named scope that should be implicitly applied to all queries for this model.
Note, default scope only applies to SELECT queries. It is ignored for INSERT, UPDATE and DELETE queries.
The default implementation simply returns an empty array. You may override this method
if the model needs to be queried with some default criteria (e.g. only active records should be returned).</p>


<div class="detailHeader" id="delete-detail">
delete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>delete</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the deletion is successful.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1215">yii\db\ar\CActiveRecord.php#L1215</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">delete</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsNewRecord</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.delete()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeDelete</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">())&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterDelete</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;active&nbsp;record&nbsp;cannot&nbsp;be&nbsp;deleted&nbsp;because&nbsp;it&nbsp;is&nbsp;new.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Deletes the row corresponding to this active record.</p>


<div class="detailHeader" id="deleteAll-detail">
deleteAll()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>deleteAll</b>(mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of rows deleted</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1812">yii\db\ar\CActiveRecord.php#L1812</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">deleteAll</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.deleteAll()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createDeleteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Deletes rows with the specified condition.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="deleteAllByAttributes-detail">
deleteAllByAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>deleteAllByAttributes</b>(array $attributes, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attribute values (indexed by attribute names) that the active records should match.
An attribute value can be an array which will be used to generate an IN condition.</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1830">yii\db\ar\CActiveRecord.php#L1830</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">deleteAllByAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.deleteAllByAttributes()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createColumnCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createDeleteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Deletes rows which match the specified attribute values.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="deleteByPk-detail">
deleteByPk()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>deleteByPk</b>(mixed $pk, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pk</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">primary key value(s). Use array for multiple primary keys. For composite key, each key value must be an array (column name=>column value).</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of rows deleted</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1796">yii\db\ar\CActiveRecord.php#L1796</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">deleteByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$pk</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.deleteByPk()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$pk</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createDeleteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Deletes rows with the specified primary key.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="equals-detail">
equals()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>equals</b>(CActiveRecord $record)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$record</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">record to compare to</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the two active records refer to the same row in the database table.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1263">yii\db\ar\CActiveRecord.php#L1263</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">equals</span><span style="color: #007700">(</span><span style="color: #0000BB">$record</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">()===</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">()===</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Compares current active record with another one.
The comparison is made by comparing table name and the primary key values of the two active records.</p>


<div class="detailHeader" id="exists-detail">
exists()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>exists</b>(mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether there is row satisfying the specified condition.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1659">yii\db\ar\CActiveRecord.php#L1659</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.exists()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">=</span><span style="color: #DD0000">'1'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyScopes</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createFindCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">queryRow</span><span style="color: #007700">()!==</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">=</span><span style="color: #DD0000">'*'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFinder</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Checks whether there is row satisfying the specified condition.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="find-detail">
find()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord <b>find</b>(mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.
If a string, it is treated as query condition (the WHERE clause);
If an array, it is treated as the initial values for constructing a <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> object;
Otherwise, it should be an instance of <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.
This is only used when the first parameter is a string (query condition).
In other cases, please use <?php echo CHtml::link('CDbCriteria::params', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'params')); ?> to set parameters.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">the record found. Null if no record is found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1452">yii\db\ar\CActiveRecord.php#L1452</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">find</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.find()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Finds a single active record with the specified condition.</p>


<div class="detailHeader" id="findAll-detail">
findAll()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord[] <b>findAll</b>(mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord[]</td>
  <td class="paramDescCol">list of active records satisfying the specified condition. An empty array is returned if none is found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1466">yii\db\ar\CActiveRecord.php#L1466</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findAll</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.findAll()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Finds all active records satisfying the specified condition.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="findAllByAttributes-detail">
findAllByAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord[] <b>findAllByAttributes</b>(array $attributes, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attribute values (indexed by attribute names) that the active records should match.
An attribute value can be an array which will be used to generate an IN condition.</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord[]</td>
  <td class="paramDescCol">the records found. An empty array is returned if none is found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1531">yii\db\ar\CActiveRecord.php#L1531</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findAllByAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.findAllByAttributes()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createColumnCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Finds all active records that have the specified attribute values.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="findAllByPk-detail">
findAllByPk()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord[] <b>findAllByPk</b>(mixed $pk, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pk</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">primary key value(s). Use array for multiple primary keys. For composite key, each key value must be an array (column name=>column value).</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord[]</td>
  <td class="paramDescCol">the records found. An empty array is returned if none is found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1497">yii\db\ar\CActiveRecord.php#L1497</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findAllByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$pk</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.findAllByPk()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createPkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$pk</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Finds all active records with the specified primary keys.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="findAllBySql-detail">
findAllBySql()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord[] <b>findAllBySql</b>(string $sql, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to the SQL statement</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord[]</td>
  <td class="paramDescCol">the records found. An empty array is returned if none is found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1568">yii\db\ar\CActiveRecord.php#L1568</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findAllBySql</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.findAllBySql()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeFind</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resetScope</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFinder</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findAllBySql</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createSqlCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">populateRecords</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Finds all active records using the specified SQL statement.</p>


<div class="detailHeader" id="findByAttributes-detail">
findByAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord <b>findByAttributes</b>(array $attributes, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attribute values (indexed by attribute names) that the active records should match.
An attribute value can be an array which will be used to generate an IN condition.</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">the record found. Null if none is found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1514">yii\db\ar\CActiveRecord.php#L1514</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findByAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.findByAttributes()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createColumnCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Finds a single active record that has the specified attribute values.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="findByPk-detail">
findByPk()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord <b>findByPk</b>(mixed $pk, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pk</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">primary key value(s). Use array for multiple primary keys. For composite key, each key value must be an array (column name=>column value).</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">the record found. Null if none is found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1481">yii\db\ar\CActiveRecord.php#L1481</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$pk</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.findByPk()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createPkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$pk</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Finds a single active record with the specified primary key.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>


<div class="detailHeader" id="findBySql-detail">
findBySql()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord <b>findBySql</b>(string $sql, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to the SQL statement</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">the record found. Null if none is found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1545">yii\db\ar\CActiveRecord.php#L1545</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findBySql</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.findBySql()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeFind</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resetScope</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFinder</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findBySql</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createSqlCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">populateRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryRow</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Finds a single active record with the specified SQL statement.</p>


<div class="detailHeader" id="getActiveFinder-detail">
getActiveFinder()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?> <b>getActiveFinder</b>(mixed $with)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$with</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the relation names to be actively looked for</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?></td>
  <td class="paramDescCol">active finder for the operation</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L907">yii\db\ar\CActiveRecord.php#L907</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getActiveFinder</span><span style="color: #007700">(</span><span style="color: #0000BB">$with</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">CActiveFinder</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$with</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Given 'with' options returns a new active finder instance.</p>


<div class="detailHeader" id="getActiveRelation-detail">
getActiveRelation()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> <b>getActiveRelation</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the relation name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
  <td class="paramDescCol">the named relation declared for this AR class. Null if the relation does not exist.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L647">yii\db\ar\CActiveRecord.php#L647</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getActiveRelation</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the named relation declared for this AR class.</p>


<div class="detailHeader" id="getAttribute-detail">
getAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getAttribute</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute value. Null if the attribute is not set or does not exist.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L691">yii\db\ar\CActiveRecord.php#L691</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the named attribute value.
If this is a new record and the attribute is not set before,
the default column value will be returned.
If this record is the result of a query and the attribute is not loaded,
null will be returned.
You may also use $this->AttributeName to obtain the attribute value.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('hasAttribute', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'hasAttribute')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getAttributeLabel-detail">
getAttributeLabel()
<span class="detailHeaderTag">
method
(available since v1.1.4)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getAttributeLabel</b>(string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute label</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L597">yii\db\ar\CActiveRecord.php#L597</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$labels</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeLabels</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$labels</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$labels</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$segs</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$segs</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$segs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$seg</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relations</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$seg</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">=</span><span style="color: #0000BB">CActiveRecord</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$seg</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">className</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the text label for the specified attribute.
This method overrides the parent implementation by supporting
returning the label defined in relational object.
In particular, if the attribute name is in the form of "post.author.name",
then this method will derive the label from the "author" relation's "name" attribute.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('generateAttributeLabel', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'generateAttributeLabel')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getAttributes-detail">
getAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getAttributes</b>(mixed $names=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$names</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">names of attributes whose value needs to be returned.
If this is true (default), then all attribute values will be returned, including
those that are not loaded from DB (null will be returned for those attributes).
If this is null, all attributes except those that are not loaded from DB will be returned.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attribute values indexed by attribute names.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L754">yii\db\ar\CActiveRecord.php#L754</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$names</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$names</span><span style="color: #007700">===</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$names</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attrs</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$names&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attrs</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attrs</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=isset(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])?</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]:</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$attrs</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns all column attribute values.
Note, related objects are not returned.</p>


<div class="detailHeader" id="getCommandBuilder-detail">
getCommandBuilder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?> <b>getCommandBuilder</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
  <td class="paramDescCol">the command builder used by this AR</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L665">yii\db\ar\CActiveRecord.php#L665</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the command builder used by this AR.</p>


<div class="detailHeader" id="getDbConnection-detail">
getDbConnection()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <b>getDbConnection</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol">the database connection used by active record.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L628">yii\db\ar\CActiveRecord.php#L628</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$db</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$db</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getDb</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$db&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbConnection</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$db</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Active&nbsp;Record&nbsp;requires&nbsp;a&nbsp;"db"&nbsp;CDbConnection&nbsp;application&nbsp;component.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Returns the database connection used by active record.
By default, the "db" application component is used as the database connection.
You may override this method if you want to use a different database connection.</p>


<div class="detailHeader" id="getDbCriteria-detail">
getDbCriteria()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <b>getDbCriteria</b>(boolean $createIfNull=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$createIfNull</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to create a criteria instance if it does not exist. Defaults to true.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria that is associated with this model.
This criteria is mainly used by <?php echo CHtml::link('named scope', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'scopes')); ?> feature to accumulate
different criteria specifications.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L323">yii\db\ar\CActiveRecord.php#L323</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$createIfNull</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_c</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$c</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultScope</span><span style="color: #007700">())!==array()&nbsp;||&nbsp;</span><span style="color: #0000BB">$createIfNull</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_c</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_c</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the query criteria associated with this model.</p>


<div class="detailHeader" id="getIsNewRecord-detail">
getIsNewRecord()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsNewRecord</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the record is new and should be inserted when calling <?php echo CHtml::link('save', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'save')); ?>.
This property is automatically set in constructor and <?php echo CHtml::link('populateRecord', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'populateRecord')); ?>.
Defaults to false, but it will be set to true if the instance is created using
the new operator.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L818">yii\db\ar\CActiveRecord.php#L818</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsNewRecord</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_new</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns if the current record is new.</p>


<div class="detailHeader" id="getMetaData-detail">
getMetaData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveRecordMetaData', array('/site/doc', 'view' => 'CActiveRecordMetaData')); ?> <b>getMetaData</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecordMetaData', array('/site/doc', 'view' => 'CActiveRecordMetaData')); ?></td>
  <td class="paramDescCol">the meta for this AR class.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L405">yii\db\ar\CActiveRecord.php#L405</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_md</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_md</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]=</span><span style="color: #0000BB">null</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;preventing&nbsp;recursive&nbsp;invokes&nbsp;of&nbsp;{@link&nbsp;getMetaData()}&nbsp;via&nbsp;{@link&nbsp;__get()}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_md</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CActiveRecordMetaData</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_md</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the meta-data for this AR</p>


<div class="detailHeader" id="getOldPrimaryKey-detail">
getOldPrimaryKey()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getOldPrimaryKey</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the old primary key value. An array (column name=>column value) is returned if the primary key is composite.
If primary key is not defined, null will be returned.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1318">yii\db\ar\CActiveRecord.php#L1318</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOldPrimaryKey</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the old primary key value.
This refers to the primary key value that is populated into the record
after executing a find method (e.g. find(), findAll()).
The value remains unchanged even if the primary key attribute is manually assigned with a different value.</p>


<div class="detailHeader" id="getPrimaryKey-detail">
getPrimaryKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getPrimaryKey</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the primary key value. An array (column name=>column value) is returned if the primary key is composite.
If primary key is not defined, null will be returned.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1273">yii\db\ar\CActiveRecord.php#L1273</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the primary key value.</p>


<div class="detailHeader" id="getRelated-detail">
getRelated()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getRelated</b>(string $name, boolean $refresh=false, mixed $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the relation name (see <?php echo CHtml::link('relations', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'relations')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to reload the related objects from database. Defaults to false.
If the current record is not a new record and it does not have the related objects loaded they
will be retrieved from the database even if this is set to false.
If the current record is a new record and this value is false, the related objects will not be
retrieved from the database.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">array or CDbCriteria object with additional parameters that customize the query conditions as specified in the relation declaration.
If this is supplied the related record(s) will be retrieved from the database regardless of the value or $refresh.
The related record(s) retrieved when this is supplied will only be returned by this method and will not be loaded into the current record's relation.
The value of the relation prior to running this method will still be available for the current record if this is supplied.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the related object(s).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L250">yii\db\ar\CActiveRecord.php#L250</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRelated</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$refresh&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">===array()&nbsp;&amp;&amp;&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;||&nbsp;</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$md</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$md</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{class}&nbsp;does&nbsp;not&nbsp;have&nbsp;relation&nbsp;"{name}".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{class}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'{name}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #DD0000">'lazy&nbsp;loading&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">=</span><span style="color: #0000BB">$md</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsNewRecord</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$refresh&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHasOneRelation&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHasManyRelation</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHasOneRelation&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">:&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$params</span><span style="color: #007700">!==array())&nbsp;</span><span style="color: #FF8000">//&nbsp;dynamic&nbsp;query<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exists</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;||&nbsp;</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$exists</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$save</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFinder</span><span style="color: #007700">(</span><span style="color: #0000BB">$r</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lazyFind</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHasManyRelation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CStatRelation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultValue</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$params</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$exists</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$save</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the related record(s).
This method will return the related record(s) of the current record.
If the relation is HAS_ONE or BELONGS_TO, it will return a single object
or null if the object does not exist.
If the relation is HAS_MANY or MANY_MANY, it will return an array of objects
or an empty array.</p>


<div class="detailHeader" id="getTableAlias-detail">
getTableAlias()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getTableAlias</b>(boolean $quote=false, boolean $checkScopes=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$quote</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to quote the alias name</td>
</tr>
<tr>
  <td class="paramNameCol">$checkScopes</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to check if a table alias is defined in the applied scopes so far.
This parameter must be set false when calling this method in <?php echo CHtml::link('defaultScope', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'defaultScope')); ?>.
An infinite loop would be formed otherwise.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the default table alias</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1422">yii\db\ar\CActiveRecord.php#L1422</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$quote</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$checkScopes</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$checkScopes&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$quote&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the table alias to be used by the find methods.
In relational queries, the returned table alias may vary according to
the corresponding relation declaration. Also, the default table alias
set by <?php echo CHtml::link('setTableAlias', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setTableAlias')); ?> may be overridden by the applied scopes.</p>


<div class="detailHeader" id="getTableSchema-detail">
getTableSchema()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> <b>getTableSchema</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td class="paramDescCol">the metadata of the table that this AR belongs to</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L656">yii\db\ar\CActiveRecord.php#L656</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the metadata of the table that this AR belongs to</p>


<div class="detailHeader" id="hasAttribute-detail">
hasAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>hasAttribute</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this AR has the named attribute (table column).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L675">yii\db\ar\CActiveRecord.php#L675</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hasAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Checks whether this AR has the named attribute</p>


<div class="detailHeader" id="hasRelated-detail">
hasRelated()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>hasRelated</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the relation name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">a value indicating whether the named related object(s) has been loaded.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L311">yii\db\ar\CActiveRecord.php#L311</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hasRelated</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;||&nbsp;</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the named related object(s) has been loaded.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L94">yii\db\ar\CActiveRecord.php#L94</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />}</span>
</span>
</code></div>
</div>
<p>Initializes this model.
This method is invoked when an AR instance is newly created and has
its <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'scenario')); ?> set.
You may override this method to provide code that is needed to initialize the model (e.g. setting
initial property values.)</p>


<div class="detailHeader" id="insert-detail">
insert()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>insert</b>(array $attributes=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attributes that need to be saved. Defaults to null,
meaning all attributes that are loaded from DB will be saved.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the attributes are valid and the record is inserted successfully.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1067">yii\db\ar\CActiveRecord.php#L1067</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsNewRecord</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;active&nbsp;record&nbsp;cannot&nbsp;be&nbsp;inserted&nbsp;to&nbsp;database&nbsp;because&nbsp;it&nbsp;is&nbsp;not&nbsp;new.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeSave</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.insert()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createInsertCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$primaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceName</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$primaryKey</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$primaryKey</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$primaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLastInsertID</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$primaryKey&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$pk</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$pk</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$pk</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLastInsertID</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setIsNewRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setScenario</span><span style="color: #007700">(</span><span style="color: #DD0000">'update'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Inserts a row into the table based on this active record attributes.
If the table's primary key is auto-incremental and is null before insertion,
it will be populated with the actual value after insertion.
Note, validation is not performed in this method. You may call <?php echo CHtml::link('validate', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'validate')); ?> to perform the validation.
After the record is inserted to DB successfully, its <?php echo CHtml::link('isNewRecord', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'isNewRecord')); ?> property will be set false,
and its <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'scenario')); ?> property will be set to be 'update'.</p>


<div class="detailHeader" id="instantiate-detail">
instantiate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected CActiveRecord <b>instantiate</b>(array $attributes)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attribute values for the active records.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">the active record</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1908">yii\db\ar\CActiveRecord.php#L1908</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">instantiate</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates an active record instance.
This method is called by <?php echo CHtml::link('populateRecord', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'populateRecord')); ?> and <?php echo CHtml::link('populateRecords', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'populateRecords')); ?>.
You may override this method if the instance being created
depends the attributes that are to be populated to the record.
For example, by creating a record based on the value of a column,
you may implement the so-called single-table inheritance mapping.</p>


<div class="detailHeader" id="model-detail">
model()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static CActiveRecord <b>model</b>(string $className='CActiveRecord')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">active record class name.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">active record model instance.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L389">yii\db\ar\CActiveRecord.php#L389</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_models</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_models</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_models</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attachBehaviors</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">behaviors</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Returns the static model of the specified AR class.
The model returned is a static instance of the AR class.
It is provided for invoking class-level methods (something similar to static class methods.)
<br/><br/>
EVERY derived AR class must override this method as follows,
<pre>
public static function model($className=__CLASS__)
{
    return parent::model($className);
}
</pre></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1921">yii\db\ar\CActiveRecord.php#L1921</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__isset</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether there is an element at the specified offset.
This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="onAfterDelete-detail">
onAfterDelete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onAfterDelete</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L866">yii\db\ar\CActiveRecord.php#L866</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onAfterDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterDelete'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This event is raised after the record is deleted.</p>


<div class="detailHeader" id="onAfterFind-detail">
onAfterFind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onAfterFind</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L894">yii\db\ar\CActiveRecord.php#L894</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onAfterFind</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterFind'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This event is raised after the record is instantiated by a find method.</p>


<div class="detailHeader" id="onAfterSave-detail">
onAfterSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onAfterSave</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L847">yii\db\ar\CActiveRecord.php#L847</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onAfterSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterSave'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This event is raised after the record is saved.</p>


<div class="detailHeader" id="onBeforeCount-detail">
onBeforeCount()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onBeforeCount</b>(<?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L923">yii\db\ar\CActiveRecord.php#L923</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onBeforeCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeCount'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This event is raised before an AR finder performs a count call.
If you want to access or modify the query criteria used for the
count call, you can use <?php echo CHtml::link('getDbCriteria()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getDbCriteria')); ?> to customize it based on your needs.
When modifying criteria in beforeCount you have to make sure you are using the right
table alias which is different on normal count and relational call.
You can use <?php echo CHtml::link('getTableAlias()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getTableAlias')); ?> to get the alias used for the upcoming count call.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('beforeCount', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeCount')); ?></li>
</ul>
</div>

<div class="detailHeader" id="onBeforeDelete-detail">
onBeforeDelete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onBeforeDelete</b>(<?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L857">yii\db\ar\CActiveRecord.php#L857</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onBeforeDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeDelete'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This event is raised before the record is deleted.
By setting <?php echo CHtml::link('CModelEvent::isValid', array('/site/doc', 'view' => 'CModelEvent', '#' => 'isValid')); ?> to be false, the normal <?php echo CHtml::link('delete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'delete')); ?> process will be stopped.</p>


<div class="detailHeader" id="onBeforeFind-detail">
onBeforeFind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onBeforeFind</b>(<?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L885">yii\db\ar\CActiveRecord.php#L885</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onBeforeFind</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeFind'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This event is raised before an AR finder performs a find call.
This can be either a call to CActiveRecords find methods or a find call
when model is loaded in relational context via lazy or eager loading.
If you want to access or modify the query criteria used for the
find call, you can use <?php echo CHtml::link('getDbCriteria()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getDbCriteria')); ?> to customize it based on your needs.
When modifying criteria in beforeFind you have to make sure you are using the right
table alias which is different on normal find and relational call.
You can use <?php echo CHtml::link('getTableAlias()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getTableAlias')); ?> to get the alias used for the upcoming find call.
Please note that modification of criteria is fully supported as of version 1.1.13.
Earlier versions had some problems with relational context and applying changes correctly.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('beforeFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeFind')); ?></li>
</ul>
</div>

<div class="detailHeader" id="onBeforeSave-detail">
onBeforeSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onBeforeSave</b>(<?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L838">yii\db\ar\CActiveRecord.php#L838</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onBeforeSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeSave'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This event is raised before the record is saved.
By setting <?php echo CHtml::link('CModelEvent::isValid', array('/site/doc', 'view' => 'CModelEvent', '#' => 'isValid')); ?> to be false, the normal <?php echo CHtml::link('save()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'save')); ?> process will be stopped.</p>


<div class="detailHeader" id="populateRecord-detail">
populateRecord()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord <b>populateRecord</b>(array $attributes, boolean $callAfterFind=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attribute values (column name=>column value)</td>
</tr>
<tr>
  <td class="paramNameCol">$callAfterFind</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to call <?php echo CHtml::link('afterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterFind')); ?> after the record is populated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">the newly created active record. The class of the object is the same as the model class.
Null is returned if the input data is false.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1848">yii\db\ar\CActiveRecord.php#L1848</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">populateRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$callAfterFind</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">instantiate</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setScenario</span><span style="color: #007700">(</span><span style="color: #DD0000">'update'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$md</span><span style="color: #007700">=</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$record</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$md</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">=</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attachBehaviors</span><span style="color: #007700">(</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">behaviors</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$callAfterFind</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterFind</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates an active record with the given attributes.
This method is internally used by the find methods.</p>


<div class="detailHeader" id="populateRecords-detail">
populateRecords()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord[] <b>populateRecords</b>(array $data, boolean $callAfterFind=true, string $index=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attribute values for the active records.</td>
</tr>
<tr>
  <td class="paramNameCol">$callAfterFind</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to call <?php echo CHtml::link('afterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterFind')); ?> after each record is populated.</td>
</tr>
<tr>
  <td class="paramNameCol">$index</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the attribute whose value will be used as indexes of the query result array.
If null, it means the array will be indexed by zero-based integers.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord[]</td>
  <td class="paramDescCol">list of active records.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1882">yii\db\ar\CActiveRecord.php#L1882</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">populateRecords</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$callAfterFind</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$index</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$records</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$record</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">populateRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$callAfterFind</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$index</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$records</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$record</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$records</span><span style="color: #007700">[</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$index</span><span style="color: #007700">]=</span><span style="color: #0000BB">$record</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$records</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a list of active records based on the input data.
This method is internally used by the find methods.</p>


<div class="detailHeader" id="primaryKey()-detail">
primaryKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>primaryKey</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the primary key of the associated database table.
If the key is a single column, it should return the column name;
If the key is a composite one consisting of several columns, it should
return the array of the key column names.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L452">yii\db\ar\CActiveRecord.php#L452</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">()<br />{<br />}</span>
</span>
</code></div>
</div>
<p>Returns the primary key of the associated database table.
This method is meant to be overridden in case when the table is not defined with a primary key
(for some legency database). If the table is already defined with a primary key,
you do not need to override this method. The default implementation simply returns null,
meaning using the primary key defined in the database.</p>


<div class="detailHeader" id="query-detail">
query()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>query</b>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria, boolean $all=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
<tr>
  <td class="paramNameCol">$all</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to return all data</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the AR objects populated with the query result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1341">yii\db\ar\CActiveRecord.php#L1341</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$all</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeFind</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyScopes</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$all</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createFindCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$all&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">populateRecords</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">populateRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryRow</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActiveFinder</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$all</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Performs the actual DB query and populates the AR objects with the query result.
This method is mainly internally used by other AR query methods.</p>


<div class="detailHeader" id="refresh-detail">
refresh()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>refresh</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the row still exists in the database. If true, the latest data will be populated to this active record.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1237">yii\db\ar\CActiveRecord.php#L1237</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">refresh</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.refresh()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$record</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">()))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_related</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Repopulates this active record with the latest data.</p>


<div class="detailHeader" id="refreshMetaData-detail">
refreshMetaData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>refreshMetaData</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L423">yii\db\ar\CActiveRecord.php#L423</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">refreshMetaData</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_md</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_md</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Refreshes the meta data for this AR class.
By calling this method, this AR class will regenerate the meta data needed.
This is useful if the table schema has been changed and you want to use the latest
available table schema. Make sure you have called <?php echo CHtml::link('CDbSchema::refresh', array('/site/doc', 'view' => 'CDbSchema', '#' => 'refresh')); ?>
before you call this method. Otherwise, old table schema data will still be used.</p>


<div class="detailHeader" id="relations-detail">
relations()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>relations</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of related object declarations. Defaults to empty array.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L535">yii\db\ar\CActiveRecord.php#L535</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">relations</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />}</span>
</span>
</code></div>
</div>
<p>This method should be overridden to declare related objects.
<br/><br/>
There are four types of relations that may exist between two active record objects:
<ul>
<li>BELONGS_TO: e.g. a member belongs to a team;</li>
<li>HAS_ONE: e.g. a member has at most one profile;</li>
<li>HAS_MANY: e.g. a team has many members;</li>
<li>MANY_MANY: e.g. a member has many skills and a skill belongs to a member.</li>
</ul>
<br/><br/>
Besides the above relation types, a special relation called STAT is also supported
that can be used to perform statistical query (or aggregational query).
It retrieves the aggregational information about the related objects, such as the number
of comments for each post, the average rating for each product, etc.
<br/><br/>
Each kind of related objects is defined in this method as an array with the following elements:
<pre>
'varName'=&gt;array('relationType', 'className', 'foreignKey', ...additional options)
</pre>
where 'varName' refers to the name of the variable/property that the related object(s) can
be accessed through; 'relationType' refers to the type of the relation, which can be one of the
following four constants: self::BELONGS_TO, self::HAS_ONE, self::HAS_MANY and self::MANY_MANY;
'className' refers to the name of the active record class that the related object(s) is of;
and 'foreignKey' states the foreign key that relates the two kinds of active record.
Note, for composite foreign keys, they can be either listed together, separated by commas or specified as an array
in format of array('key1','key2'). In case you need to specify custom PK->FK association you can define it as
array('fk'=>'pk'). For composite keys it will be array('fk_c1'=>'pk_с1','fk_c2'=>'pk_c2').
For foreign keys used in MANY_MANY relation, the joining table must be declared as well
(e.g. 'join_table(fk1, fk2)').
<br/><br/>
Additional options may be specified as name-value pairs in the rest array elements:
<ul>
<li>'select': string|array, a list of columns to be selected. Defaults to '*', meaning all columns.
  Column names should be disambiguated if they appear in an expression (e.g. COUNT(relationName.name) AS name_count).</li>
<li>'condition': string, the WHERE clause. Defaults to empty. Note, column references need to
  be disambiguated with prefix 'relationName.' (e.g. relationName.age&gt;20)</li>
<li>'order': string, the ORDER BY clause. Defaults to empty. Note, column references need to
  be disambiguated with prefix 'relationName.' (e.g. relationName.age DESC)</li>
<li>'with': string|array, a list of child related objects that should be loaded together with this object.
  Note, this is only honored by lazy loading, not eager loading.</li>
<li>'joinType': type of join. Defaults to 'LEFT OUTER JOIN'.</li>
<li>'alias': the alias for the table associated with this relationship.
  It defaults to null,
  meaning the table alias is the same as the relation name.</li>
<li>'params': the parameters to be bound to the generated SQL statement.
  This should be given as an array of name-value pairs.</li>
<li>'on': the ON clause. The condition specified here will be appended
  to the joining condition using the AND operator.</li>
<li>'index': the name of the column whose values should be used as keys
  of the array that stores related objects. This option is only available to
  HAS_MANY and MANY_MANY relations.</li>
<li>'scopes': scopes to apply. In case of a single scope can be used like 'scopes'=>'scopeName',
  in case of multiple scopes can be used like 'scopes'=>array('scopeName1','scopeName2').
  This option has been available since version 1.1.9.</li>
</ul>
<br/><br/>
The following options are available for certain relations when lazy loading:
<ul>
<li>'group': string, the GROUP BY clause. Defaults to empty. Note, column references need to
  be disambiguated with prefix 'relationName.' (e.g. relationName.age). This option only applies to HAS_MANY and MANY_MANY relations.</li>
<li>'having': string, the HAVING clause. Defaults to empty. Note, column references need to
  be disambiguated with prefix 'relationName.' (e.g. relationName.age). This option only applies to HAS_MANY and MANY_MANY relations.</li>
<li>'limit': limit of the rows to be selected. This option does not apply to BELONGS_TO relation.</li>
<li>'offset': offset of the rows to be selected. This option does not apply to BELONGS_TO relation.</li>
<li>'through': name of the model's relation that will be used as a bridge when getting related data. Can be set only for HAS_ONE and HAS_MANY. This option has been available since version 1.1.7.</li>
</ul>
<br/><br/>
Below is an example declaring related objects for 'Post' active record class:
<pre>
return array(
    'author'=&gt;array(self::BELONGS_TO, 'User', 'author_id'),
    'comments'=&gt;array(self::HAS_MANY, 'Comment', 'post_id', 'with'=&gt;'author', 'order'=&gt;'create_time DESC'),
    'tags'=&gt;array(self::MANY_MANY, 'Tag', 'post_tag(post_id, tag_id)', 'order'=&gt;'name'),
);
</pre></p>


<div class="detailHeader" id="resetScope-detail">
resetScope()
<span class="detailHeaderTag">
method
(available since v1.1.2)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord <b>resetScope</b>(boolean $resetDefault=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$resetDefault</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">including default scope. This parameter available since 1.1.12</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L363">yii\db\ar\CActiveRecord.php#L363</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">resetScope</span><span style="color: #007700">(</span><span style="color: #0000BB">$resetDefault</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$resetDefault</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_c</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_c</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Resets all scopes and criterias applied.</p>


<div class="detailHeader" id="save-detail">
save()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>save</b>(boolean $runValidation=true, array $attributes=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$runValidation</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to perform validation before saving the record.
If the validation fails, the record will not be saved to database.</td>
</tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attributes that need to be saved. Defaults to null,
meaning all attributes that are loaded from DB will be saved.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the saving succeeds</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L803">yii\db\ar\CActiveRecord.php#L803</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">$runValidation</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$runValidation&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validate</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsNewRecord</span><span style="color: #007700">()&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">update</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Saves the current record.
<br/><br/>
The record is inserted as a row into the database table if its <?php echo CHtml::link('isNewRecord', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'isNewRecord')); ?>
property is true (usually the case when the record is created using the 'new'
operator). Otherwise, it will be used to update the corresponding row in the table
(usually the case if the record is obtained using one of those 'find' methods.)
<br/><br/>
Validation will be performed before saving the record. If the validation fails,
the record will not be saved. You can call <?php echo CHtml::link('getErrors()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getErrors')); ?> to retrieve the
validation errors.
<br/><br/>
If the record is saved via insertion, its <?php echo CHtml::link('isNewRecord', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'isNewRecord')); ?> property will be
set false, and its <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'scenario')); ?> property will be set to be 'update'.
And if its primary key is auto-incremental and is not set before insertion,
the primary key will be populated with the automatically generated key value.</p>


<div class="detailHeader" id="saveAttributes-detail">
saveAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>saveAttributes</b>(array $attributes)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes to be updated. Each element represents an attribute name
or an attribute value indexed by its name. If the latter, the record's
attribute will be changed accordingly before saving.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the update is successful</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1151">yii\db\ar\CActiveRecord.php#L1151</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">saveAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsNewRecord</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.saveAttributes()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_integer</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">$value</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOldPrimaryKey</span><span style="color: #007700">(),</span><span style="color: #0000BB">$values</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;active&nbsp;record&nbsp;cannot&nbsp;be&nbsp;updated&nbsp;because&nbsp;it&nbsp;is&nbsp;new.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Saves a selected list of attributes.
Unlike <?php echo CHtml::link('save', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'save')); ?>, this method only saves the specified attributes
of an existing row dataset and does NOT call either <?php echo CHtml::link('beforeSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeSave')); ?> or <?php echo CHtml::link('afterSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterSave')); ?>.
Also note that this method does neither attribute filtering nor validation.
So do not use this method with untrusted data (such as user posted data).
You may consider the following alternative if you want to do so:
<pre>
$postRecord=Post::model()-&gt;findByPk($postID);
$postRecord-&gt;attributes=$_POST['post'];
$postRecord-&gt;save();
</pre></p>


<div class="detailHeader" id="saveCounters-detail">
saveCounters()
<span class="detailHeaderTag">
method
(available since v1.1.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>saveCounters</b>(array $counters)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$counters</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the counters to be updated (column name=>increment value)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the saving is successful</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1193">yii\db\ar\CActiveRecord.php#L1193</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">saveCounters</span><span style="color: #007700">(</span><span style="color: #0000BB">$counters</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.saveCounters()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOldPrimaryKey</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUpdateCounterCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$counters</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$counters&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">+</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Saves one or several counter columns for the current AR object.
Note that this method differs from <?php echo CHtml::link('updateCounters', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'updateCounters')); ?> in that it only
saves the current AR object.
An example usage is as follows:
<pre>
$postRecord=Post::model()-&gt;findByPk($postID);
$postRecord-&gt;saveCounters(array('view_count'=&gt;1));
</pre>
Use negative values if you want to decrease the counters.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('updateCounters', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'updateCounters')); ?></li>
</ul>
</div>

<div class="detailHeader" id="scopes-detail">
scopes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>scopes</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the scope definition. The array keys are scope names; the array
values are the corresponding scope definitions. Each scope definition is represented
as an array whose keys must be properties of <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L571">yii\db\ar\CActiveRecord.php#L571</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the declaration of named scopes.
A named scope represents a query criteria that can be chained together with
other named scopes and applied to a query. This method should be overridden
by child classes to declare named scopes for the particular AR classes.
For example, the following code declares two named scopes: 'recently' and
'published'.
<pre>
return array(
    'published'=&gt;array(
          'condition'=&gt;'status=1',
    ),
    'recently'=&gt;array(
          'order'=&gt;'create_time DESC',
          'limit'=&gt;5,
    ),
);
</pre>
If the above scopes are declared in a 'Post' model, we can perform the following
queries:
<pre>
$posts=Post::model()-&gt;published()-&gt;findAll();
$posts=Post::model()-&gt;published()-&gt;recently()-&gt;findAll();
$posts=Post::model()-&gt;published()-&gt;with('comments')-&gt;findAll();
</pre>
Note that the last query is a relational query.</p>


<div class="detailHeader" id="setAttribute-detail">
setAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>setAttribute</b>(string $name, mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute value.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the attribute exists and the assignment is conducted successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L707">yii\db\ar\CActiveRecord.php#L707</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the named attribute value.
You may also use $this->AttributeName to set the attribute value.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('hasAttribute', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'hasAttribute')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setDbCriteria-detail">
setDbCriteria()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setDbCriteria</b>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L338">yii\db\ar\CActiveRecord.php#L338</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setDbCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_c</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the query criteria for the current model.</p>


<div class="detailHeader" id="setIsNewRecord-detail">
setIsNewRecord()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setIsNewRecord</b>(boolean $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the record is new and should be inserted when calling <?php echo CHtml::link('save', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'save')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L828">yii\db\ar\CActiveRecord.php#L828</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setIsNewRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_new</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets if the record is new.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getIsNewRecord', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getIsNewRecord')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setOldPrimaryKey-detail">
setOldPrimaryKey()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setOldPrimaryKey</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the old primary key value.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1328">yii\db\ar\CActiveRecord.php#L1328</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setOldPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the old primary key value.</p>


<div class="detailHeader" id="setPrimaryKey-detail">
setPrimaryKey()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setPrimaryKey</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the new primary key value. If the primary key is composite, the new value
should be provided as an array (column name=>column value).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1296">yii\db\ar\CActiveRecord.php#L1296</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMetaData</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">}=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Sets the primary key value.
After calling this method, the old primary key value can be obtained from <?php echo CHtml::link('oldPrimaryKey', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'oldPrimaryKey')); ?>.</p>


<div class="detailHeader" id="setTableAlias-detail">
setTableAlias()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setTableAlias</b>(string $alias)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$alias</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table alias to be used in queries. The alias should NOT be quoted.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1436">yii\db\ar\CActiveRecord.php#L1436</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setTableAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_alias</span><span style="color: #007700">=</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the table alias to be used in queries.</p>


<div class="detailHeader" id="tableName-detail">
tableName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>tableName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L436">yii\db\ar\CActiveRecord.php#L436</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the name of the associated database table.
By default this method returns the class name as the table name.
You may override this method if the table is not named after this convention.</p>


<div class="detailHeader" id="together-detail">
together()
<span class="detailHeaderTag">
method
(available since v1.1.4)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord <b>together</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">the AR object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1725">yii\db\ar\CActiveRecord.php#L1725</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">together</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">together</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets <?php echo CHtml::link('CDbCriteria::together', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'together')); ?> property to be true.
This is only used in relational AR query. Please refer to <?php echo CHtml::link('CDbCriteria::together', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'together')); ?>
for more details.</p>


<div class="detailHeader" id="update-detail">
update()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>update</b>(array $attributes=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attributes that need to be saved. Defaults to null,
meaning all attributes that are loaded from DB will be saved.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the update is successful</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1115">yii\db\ar\CActiveRecord.php#L1115</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">update</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsNewRecord</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;active&nbsp;record&nbsp;cannot&nbsp;be&nbsp;updated&nbsp;because&nbsp;it&nbsp;is&nbsp;new.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeSave</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.update()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOldPrimaryKey</span><span style="color: #007700">(),</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pk</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Updates the row represented by this active record.
All loaded attributes will be saved to the database.
Note, validation is not performed in this method. You may call <?php echo CHtml::link('validate', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'validate')); ?> to perform the validation.</p>


<div class="detailHeader" id="updateAll-detail">
updateAll()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>updateAll</b>(array $attributes, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attributes (name=>$value) to be updated</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of rows being updated</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1760">yii\db\ar\CActiveRecord.php#L1760</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">updateAll</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.updateAll()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUpdateCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Updates records with the specified condition.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.
Note, the attributes are not checked for safety and no validation is done.</p>


<div class="detailHeader" id="updateByPk-detail">
updateByPk()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>updateByPk</b>(mixed $pk, array $attributes, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pk</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">primary key value(s). Use array for multiple primary keys. For composite key, each key value must be an array (column name=>column value).</td>
</tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of attributes (name=>$value) to be updated</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of rows being updated</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1741">yii\db\ar\CActiveRecord.php#L1741</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">updateByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$pk</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.updateByPk()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$pk</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUpdateCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Updates records with the specified primary key(s).
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.
Note, the attributes are not checked for safety and validation is NOT performed.</p>


<div class="detailHeader" id="updateCounters-detail">
updateCounters()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>updateCounters</b>(array $counters, mixed $condition='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$counters</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the counters to be updated (column name=>increment value)</td>
</tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">query condition or criteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be bound to an SQL statement.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of rows being updated</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1779">yii\db\ar\CActiveRecord.php#L1779</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">updateCounters</span><span style="color: #007700">(</span><span style="color: #0000BB">$counters</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.updateCounters()'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.ar.CActiveRecord'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUpdateCounterCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$counters</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Updates one or several counter columns.
Note, this updates all rows of data unless a condition or criteria is specified.
See <?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?> for detailed explanation about $condition and $params.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('saveCounters', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'saveCounters')); ?></li>
</ul>
</div>

<div class="detailHeader" id="with-detail">
with()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CActiveRecord <b>with</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CActiveRecord</td>
  <td class="paramDescCol">the AR object itself.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveRecord.php#L1705">yii\db\ar\CActiveRecord.php#L1705</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">with</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">func_num_args</span><span style="color: #007700">()&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$with</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$with</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;the&nbsp;parameter&nbsp;is&nbsp;given&nbsp;as&nbsp;an&nbsp;array<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$with</span><span style="color: #007700">=</span><span style="color: #0000BB">$with</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$with</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'with'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$with</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Specifies which related objects should be eagerly loaded.
This method takes variable number of parameters. Each parameter specifies
the name of a relation or child-relation. For example,
<pre>
// find all posts together with their author and comments
Post::model()-&gt;with('author','comments')-&gt;findAll();
// find all posts together with their author and the author's profile
Post::model()-&gt;with('author','author.profile')-&gt;findAll();
</pre>
The relations should be declared in <?php echo CHtml::link('relations()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'relations')); ?>.
<br/><br/>
By default, the options specified in <?php echo CHtml::link('relations()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'relations')); ?> will be used
to do relational query. In order to customize the options on the fly,
we should pass an array parameter to the with() method. The array keys
are relation names, and the array values are the corresponding query options.
For example,
<pre>
Post::model()-&gt;with(array(
    'author'=&gt;array('select'=&gt;'id, name'),
    'comments'=&gt;array('condition'=&gt;'approved=1', 'order'=&gt;'create_time'),
))-&gt;findAll();
</pre></p>


