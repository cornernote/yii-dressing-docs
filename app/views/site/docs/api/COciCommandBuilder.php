<?php
$this->pageTitle = $this->pageHeading = 'COciCommandBuilder';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'COciCommandBuilder';
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
  <td><?php echo CHtml::link('system.db.schema.oci', array('/site/doc', '#' => 'system.db.schema.oci')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class COciCommandBuilder &raquo;
<?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/oci/COciCommandBuilder.php">yii/db/schema/oci/COciCommandBuilder.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Ricardo Grana &lt;rickgrana@yahoo.com.br&gt;</td>
</tr>
</table>

<div id="classDescription">
COciCommandBuilder provides basic methods to create query commands for tables.</div>
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
<tr class="inherited" id="dbConnection">
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>database connection.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr id="returnID">
  <td><?php echo CHtml::link('returnID', array('/site/doc', 'view' => 'COciCommandBuilder', '#' => 'returnID-detail')); ?></td>
  <td>integer</td>
  <td>the last insertion ID</td>
  <td>COciCommandBuilder</td>
</tr>
<tr class="inherited" id="schema">
  <td><?php echo CHtml::link('schema', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'schema-detail')); ?></td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
  <td>the schema for this command builder.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
</table>
</div>
<div class="summary docProperty">
<h2>Protected Properties</h2>

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
<tr class="inherited" id="integerPrimaryKeyDefaultValue">
  <td><?php echo CHtml::link('integerPrimaryKeyDefaultValue', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'integerPrimaryKeyDefaultValue-detail')); ?></td>
  <td>string</td>
  <td>Returns default value of the integer/serial primary key. Default value means that the next</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => '__construct-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
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
<tr class="inherited" id="applyCondition">
  <td><?php echo CHtml::link('applyCondition()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'applyCondition-detail')); ?></td>
  <td>Alters the SQL to apply WHERE clause.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="applyGroup">
  <td><?php echo CHtml::link('applyGroup()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'applyGroup-detail')); ?></td>
  <td>Alters the SQL to apply GROUP BY.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="applyHaving">
  <td><?php echo CHtml::link('applyHaving()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'applyHaving-detail')); ?></td>
  <td>Alters the SQL to apply HAVING.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="applyJoin">
  <td><?php echo CHtml::link('applyJoin()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'applyJoin-detail')); ?></td>
  <td>Alters the SQL to apply JOIN clause.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr id="applyLimit">
  <td><?php echo CHtml::link('applyLimit()', array('/site/doc', 'view' => 'COciCommandBuilder', '#' => 'applyLimit-detail')); ?></td>
  <td>Alters the SQL to apply LIMIT and OFFSET.</td>
  <td>COciCommandBuilder</td>
</tr>
<tr class="inherited" id="applyOrder">
  <td><?php echo CHtml::link('applyOrder()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'applyOrder-detail')); ?></td>
  <td>Alters the SQL to apply ORDER BY.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
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
<tr class="inherited" id="bindValues">
  <td><?php echo CHtml::link('bindValues()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'bindValues-detail')); ?></td>
  <td>Binds parameter values for an SQL command.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
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
<tr class="inherited" id="createColumnCriteria">
  <td><?php echo CHtml::link('createColumnCriteria()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createColumnCriteria-detail')); ?></td>
  <td>Creates a query criteria with the specified column values.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createCountCommand">
  <td><?php echo CHtml::link('createCountCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createCountCommand-detail')); ?></td>
  <td>Creates a COUNT(*) command for a single table.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createCriteria">
  <td><?php echo CHtml::link('createCriteria()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createCriteria-detail')); ?></td>
  <td>Creates a query criteria.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createDeleteCommand">
  <td><?php echo CHtml::link('createDeleteCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createDeleteCommand-detail')); ?></td>
  <td>Creates a DELETE command.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createFindCommand">
  <td><?php echo CHtml::link('createFindCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createFindCommand-detail')); ?></td>
  <td>Creates a SELECT command for a single table.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createInCondition">
  <td><?php echo CHtml::link('createInCondition()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createInCondition-detail')); ?></td>
  <td>Generates the expression for selecting rows of specified primary key values.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr id="createInsertCommand">
  <td><?php echo CHtml::link('createInsertCommand()', array('/site/doc', 'view' => 'COciCommandBuilder', '#' => 'createInsertCommand-detail')); ?></td>
  <td>Creates an INSERT command.</td>
  <td>COciCommandBuilder</td>
</tr>
<tr id="createMultipleInsertCommand">
  <td><?php echo CHtml::link('createMultipleInsertCommand()', array('/site/doc', 'view' => 'COciCommandBuilder', '#' => 'createMultipleInsertCommand-detail')); ?></td>
  <td>Creates a multiple INSERT command.</td>
  <td>COciCommandBuilder</td>
</tr>
<tr class="inherited" id="createPkCondition">
  <td><?php echo CHtml::link('createPkCondition()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createPkCondition-detail')); ?></td>
  <td>Generates the expression for selecting rows of specified primary key values.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createPkCriteria">
  <td><?php echo CHtml::link('createPkCriteria()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createPkCriteria-detail')); ?></td>
  <td>Creates a query criteria with the specified primary key.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createSearchCondition">
  <td><?php echo CHtml::link('createSearchCondition()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createSearchCondition-detail')); ?></td>
  <td>Generates the expression for searching the specified keywords within a list of columns.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createSqlCommand">
  <td><?php echo CHtml::link('createSqlCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createSqlCommand-detail')); ?></td>
  <td>Creates a command based on a given SQL statement.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createUpdateCommand">
  <td><?php echo CHtml::link('createUpdateCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createUpdateCommand-detail')); ?></td>
  <td>Creates an UPDATE command.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createUpdateCounterCommand">
  <td><?php echo CHtml::link('createUpdateCounterCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createUpdateCounterCommand-detail')); ?></td>
  <td>Creates an UPDATE command that increments/decrements certain columns.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
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
<tr class="inherited" id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns database connection.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getLastInsertID">
  <td><?php echo CHtml::link('getLastInsertID()', array('/site/doc', 'view' => 'COciCommandBuilder', '#' => 'getLastInsertID-detail')); ?></td>
  <td>Returns the last insertion ID for the specified table.</td>
  <td>COciCommandBuilder</td>
</tr>
<tr class="inherited" id="getSchema">
  <td><?php echo CHtml::link('getSchema()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'getSchema-detail')); ?></td>
  <td>Returns the schema for this command builder.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
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
<tr class="inherited" id="composeMultipleInsertCommand">
  <td><?php echo CHtml::link('composeMultipleInsertCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'composeMultipleInsertCommand-detail')); ?></td>
  <td>Creates a multiple INSERT command.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createCompositeInCondition">
  <td><?php echo CHtml::link('createCompositeInCondition()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createCompositeInCondition-detail')); ?></td>
  <td>Generates the expression for selecting rows with specified composite key values.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="ensureTable">
  <td><?php echo CHtml::link('ensureTable()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'ensureTable-detail')); ?></td>
  <td>Checks if the parameter is a valid table schema.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="getIntegerPrimaryKeyDefaultValue">
  <td><?php echo CHtml::link('getIntegerPrimaryKeyDefaultValue()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'getIntegerPrimaryKeyDefaultValue-detail')); ?></td>
  <td>Returns default value of the integer/serial primary key. Default value means that the next</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="returnID-detail">
returnID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$returnID</b>;</div>

<p>the last insertion ID</p>


<h2>Method Details</h2>

<div class="detailHeader" id="applyLimit-detail">
applyLimit()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>applyLimit</b>(string $sql, integer $limit, integer $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">SQL query string without LIMIT and OFFSET.</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">maximum number of rows, -1 to ignore limit.</td>
</tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">row offset, -1 to ignore offset.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">SQL with LIMIT and OFFSET</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/oci/COciCommandBuilder.php#L42">yii/db/schema/oci/COciCommandBuilder.php#L42</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">applyLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$limit</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$limit&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;and&nbsp;(</span><span style="color: #0000BB">$offset&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filters&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filters</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'rowNumId&nbsp;&gt;&nbsp;'</span><span style="color: #007700">.(int)</span><span style="color: #0000BB">$offset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$limit</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filters</span><span style="color: #007700">[]=&nbsp;</span><span style="color: #DD0000">'rownum&nbsp;&lt;=&nbsp;'</span><span style="color: #007700">.(int)</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$filters</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;and&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filters</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filter</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"&nbsp;WHERE&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$filter</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}else{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql&nbsp;</span><span style="color: #007700">=&nbsp;&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">WITH&nbsp;USER_SQL&nbsp;AS&nbsp;(</span><span style="color: #007700">{</span><span style="color: #0000BB">$sql</span><span style="color: #007700">}</span><span style="color: #DD0000">),<br />PAGINATION&nbsp;AS&nbsp;(SELECT&nbsp;USER_SQL.*,&nbsp;rownum&nbsp;as&nbsp;rowNumId&nbsp;FROM&nbsp;USER_SQL)<br />SELECT&nbsp;*<br />FROM&nbsp;PAGINATION<br /></span><span style="color: #007700">{</span><span style="color: #0000BB">$filter</span><span style="color: #007700">}</span><span style="color: #DD0000"><br /></span><span style="color: #007700">EOD;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Alters the SQL to apply LIMIT and OFFSET.
Default implementation is applicable for PostgreSQL, MySQL and SQLite.</p>


<div class="detailHeader" id="createInsertCommand-detail">
createInsertCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>createInsertCommand</b>(mixed $table, array $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the table schema (<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?>) or the table name (string).</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data to be inserted (column name=>column value). If a key is not a valid column name, the corresponding value will be ignored.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">insert command</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/oci/COciCommandBuilder.php#L80">yii/db/schema/oci/COciCommandBuilder.php#L80</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createInsertCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ensureTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fields</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$placeholders</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$column</span><span style="color: #007700">=</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$value</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowNull</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fields</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$placeholders</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">expression</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">$n</span><span style="color: #007700">]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$placeholders</span><span style="color: #007700">[]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">typecast</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;("</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$fields</span><span style="color: #007700">).</span><span style="color: #DD0000">')&nbsp;VALUES&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$placeholders</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$column</span><span style="color: #007700">=</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">!==</span><span style="color: #DD0000">'string'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;RETURNING&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;INTO&nbsp;:RETURN_ID'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #DD0000">':RETURN_ID'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">returnID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INT</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceName</span><span style="color: #007700">=</span><span style="color: #DD0000">'RETURN_ID'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates an INSERT command.</p>


<div class="detailHeader" id="createMultipleInsertCommand-detail">
createMultipleInsertCommand()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>createMultipleInsertCommand</b>(mixed $table, array $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the table schema (<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?>) or the table name (string).</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list data to be inserted, each value should be an array in format (column name=>column value).
If a key is not a valid column name, the corresponding value will be ignored.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">multiple insert command</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/oci/COciCommandBuilder.php#L135">yii/db/schema/oci/COciCommandBuilder.php#L135</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createMultipleInsertCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,array&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$templates</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'main'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'INSERT&nbsp;ALL&nbsp;{{rowInsertValues}}&nbsp;SELECT&nbsp;*&nbsp;FROM&nbsp;dual'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'columnInsertValue'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'{{value}}'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'columnInsertValueGlue'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rowInsertValue'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'INTO&nbsp;{{tableName}}&nbsp;({{columnInsertNames}})&nbsp;VALUES&nbsp;({{columnInsertValues}})'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rowInsertValueGlue'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'columnInsertNameGlue'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">composeMultipleInsertCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$templates</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a multiple INSERT command.
This method could be used to achieve better performance during insertion of the large
amount of data into the database tables.</p>


<div class="detailHeader" id="getLastInsertID-detail">
getLastInsertID()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getLastInsertID</b>(mixed $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the table schema (<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?>) or the table name (string).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">last insertion id. Null is returned if no sequence name.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/oci/COciCommandBuilder.php#L29">yii/db/schema/oci/COciCommandBuilder.php#L29</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLastInsertID</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">returnID</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the last insertion ID for the specified table.</p>


