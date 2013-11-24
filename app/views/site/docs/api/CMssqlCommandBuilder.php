<?php
$this->pageTitle = $this->pageHeading = 'CMssqlCommandBuilder';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CMssqlCommandBuilder';
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
  <td><?php echo CHtml::link('system.db.schema.mssql', array('/site/doc', '#' => 'system.db.schema.mssql')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CMssqlCommandBuilder &raquo;
<?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php">yii\db\schema\mssql\CMssqlCommandBuilder.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;, Christophe Boulain &lt;Christophe.Boulain@gmail.com&gt;, Wei Zhuo &lt;weizhuo[at]gmail[dot]com&gt;</td>
</tr>
</table>

<div id="classDescription">
CMssqlCommandBuilder provides basic methods to create query commands for tables for Mssql Servers.</div>
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
  <td><?php echo CHtml::link('applyLimit()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'applyLimit-detail')); ?></td>
  <td>This is a port from Prado Framework.</td>
  <td>CMssqlCommandBuilder</td>
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
<tr id="createCountCommand">
  <td><?php echo CHtml::link('createCountCommand()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'createCountCommand-detail')); ?></td>
  <td>Creates a COUNT(*) command for a single table.</td>
  <td>CMssqlCommandBuilder</td>
</tr>
<tr class="inherited" id="createCriteria">
  <td><?php echo CHtml::link('createCriteria()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createCriteria-detail')); ?></td>
  <td>Creates a query criteria.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr id="createDeleteCommand">
  <td><?php echo CHtml::link('createDeleteCommand()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'createDeleteCommand-detail')); ?></td>
  <td>Creates a DELETE command.</td>
  <td>CMssqlCommandBuilder</td>
</tr>
<tr id="createFindCommand">
  <td><?php echo CHtml::link('createFindCommand()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'createFindCommand-detail')); ?></td>
  <td>Creates a SELECT command for a single table.</td>
  <td>CMssqlCommandBuilder</td>
</tr>
<tr class="inherited" id="createInCondition">
  <td><?php echo CHtml::link('createInCondition()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createInCondition-detail')); ?></td>
  <td>Generates the expression for selecting rows of specified primary key values.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createInsertCommand">
  <td><?php echo CHtml::link('createInsertCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createInsertCommand-detail')); ?></td>
  <td>Creates an INSERT command.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr class="inherited" id="createMultipleInsertCommand">
  <td><?php echo CHtml::link('createMultipleInsertCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'createMultipleInsertCommand-detail')); ?></td>
  <td>Creates a multiple INSERT command.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
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
<tr id="createUpdateCommand">
  <td><?php echo CHtml::link('createUpdateCommand()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'createUpdateCommand-detail')); ?></td>
  <td>Creates an UPDATE command.</td>
  <td>CMssqlCommandBuilder</td>
</tr>
<tr id="createUpdateCounterCommand">
  <td><?php echo CHtml::link('createUpdateCounterCommand()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'createUpdateCounterCommand-detail')); ?></td>
  <td>Creates an UPDATE command that increments/decrements certain columns.</td>
  <td>CMssqlCommandBuilder</td>
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
<tr class="inherited" id="getLastInsertID">
  <td><?php echo CHtml::link('getLastInsertID()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'getLastInsertID-detail')); ?></td>
  <td>Returns the last insertion ID for the specified table.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
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
<tr id="checkCriteria">
  <td><?php echo CHtml::link('checkCriteria()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'checkCriteria-detail')); ?></td>
  <td>Checks if the criteria has an order by clause when using offset/limit.</td>
  <td>CMssqlCommandBuilder</td>
</tr>
<tr class="inherited" id="composeMultipleInsertCommand">
  <td><?php echo CHtml::link('composeMultipleInsertCommand()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'composeMultipleInsertCommand-detail')); ?></td>
  <td>Creates a multiple INSERT command.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr id="createCompositeInCondition">
  <td><?php echo CHtml::link('createCompositeInCondition()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'createCompositeInCondition-detail')); ?></td>
  <td>Generates the expression for selecting rows with specified composite key values.</td>
  <td>CMssqlCommandBuilder</td>
</tr>
<tr class="inherited" id="ensureTable">
  <td><?php echo CHtml::link('ensureTable()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'ensureTable-detail')); ?></td>
  <td>Checks if the parameter is a valid table schema.</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr id="findOrdering">
  <td><?php echo CHtml::link('findOrdering()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'findOrdering-detail')); ?></td>
  <td>Base on simplified syntax http://msdn2.microsoft.com/en-us/library/aa259187(SQL.80).aspx</td>
  <td>CMssqlCommandBuilder</td>
</tr>
<tr class="inherited" id="getIntegerPrimaryKeyDefaultValue">
  <td><?php echo CHtml::link('getIntegerPrimaryKeyDefaultValue()', array('/site/doc', 'view' => 'CDbCommandBuilder', '#' => 'getIntegerPrimaryKeyDefaultValue-detail')); ?></td>
  <td>Returns default value of the integer/serial primary key. Default value means that the next</td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
</tr>
<tr id="joinOrdering">
  <td><?php echo CHtml::link('joinOrdering()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'joinOrdering-detail')); ?></td>
  <td></td>
  <td>CMssqlCommandBuilder</td>
</tr>
<tr id="reverseDirection">
  <td><?php echo CHtml::link('reverseDirection()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'reverseDirection-detail')); ?></td>
  <td></td>
  <td>CMssqlCommandBuilder</td>
</tr>
<tr id="rewriteLimitOffsetSql">
  <td><?php echo CHtml::link('rewriteLimitOffsetSql()', array('/site/doc', 'view' => 'CMssqlCommandBuilder', '#' => 'rewriteLimitOffsetSql-detail')); ?></td>
  <td>Rewrite sql to apply $limit > and $offset > 0 for MSSQL database.</td>
  <td>CMssqlCommandBuilder</td>
</tr>
</table>
</div>
<a name="events"></a>

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
  <td class="paramDescCol">SQL query string.</td>
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
  <td class="paramDescCol">SQL with limit and offset.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L180">yii\db\schema\mssql\CMssqlCommandBuilder.php#L180</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">applyLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$limit&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;(int)</span><span style="color: #0000BB">$limit&nbsp;</span><span style="color: #007700">:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;(int)</span><span style="color: #0000BB">$offset&nbsp;</span><span style="color: #007700">:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$limit&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$offset&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//just&nbsp;limit<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^([\s(])*SELECT(&nbsp;DISTINCT)?(?!\s*TOP\s*\()/i'</span><span style="color: #007700">,</span><span style="color: #DD0000">"\\1SELECT\\2&nbsp;TOP&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #DD0000">"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$limit&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$offset&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rewriteLimitOffsetSql</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This is a port from Prado Framework.
<br/><br/>
Overrides parent implementation. Alters the sql to apply $limit and $offset.
The idea for limit with offset is done by modifying the sql on the fly
with numerous assumptions on the structure of the sql string.
The modification is done with reference to the notes from
http://troels.arvin.dk/db/rdbms/#select-limit-offset
<br/><br/>
<code>
SELECT * FROM (
 SELECT TOP n * FROM (
   SELECT TOP z columns      -- (z=n+skip)
   FROM tablename
   ORDER BY key ASC
 ) AS FOO ORDER BY key DESC -- ('FOO' may be anything)
) AS BAR ORDER BY key ASC    -- ('BAR' may be anything)
</code>
<br/><br/>
<b>Regular expressions are used to alter the SQL query. The resulting SQL query
may be malformed for complex queries.</b> The following restrictions apply
<br/><br/>
<ul>
  <li>
In particular, <b>commas</b> should <b>NOT</b>
be used as part of the ordering expression or identifier. Commas must only be
used for separating the ordering clauses.
  </li>
  <li>
In the ORDER BY clause, the column name should NOT be be qualified
with a table name or view name. Alias the column names or use column index.
  </li>
  <li>
No clauses should follow the ORDER BY clause, e.g. no COMPUTE or FOR clauses.
  </li>
</ul></p>


<div class="detailHeader" id="checkCriteria-detail">
checkCriteria()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <b>checkCriteria</b>(<?php echo CHtml::link('CMssqlTableSchema', array('/site/doc', 'view' => 'CMssqlTableSchema')); ?> $table, <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CMssqlTableSchema', array('/site/doc', 'view' => 'CMssqlTableSchema')); ?></td>
  <td class="paramDescCol">table schema</td>
</tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">criteria</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the modified criteria</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L310">yii\db\schema\mssql\CMssqlCommandBuilder.php#L310</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">checkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">=</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">)?</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">):</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks if the criteria has an order by clause when using offset/limit.
Override parent implementation to check if an orderby clause if specified when querying with an offset
If not, order it by pk.</p>


<div class="detailHeader" id="createCompositeInCondition-detail">
createCompositeInCondition()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>createCompositeInCondition</b>(<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> $table, array $values, string $prefix)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td class="paramDescCol">the table schema</td>
</tr>
<tr>
  <td class="paramNameCol">$values</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of primary key values to be selected within</td>
</tr>
<tr>
  <td class="paramNameCol">$prefix</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">column prefix (ended with dot)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the expression for selection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L326">yii\db\schema\mssql\CMssqlCommandBuilder.php#L326</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createCompositeInCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$values</span><span style="color: #007700">,</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$vs</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'='</span><span style="color: #007700">.</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$vs</span><span style="color: #007700">[]=</span><span style="color: #DD0000">'('</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;AND&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$c</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'('</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;OR&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$vs</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates the expression for selecting rows with specified composite key values.</p>


<div class="detailHeader" id="createCountCommand-detail">
createCountCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>createCountCommand</b>(<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> $table, <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria, string $alias='t')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
<tr>
  <td class="paramNameCol">$alias</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the alias name of the primary table. Defaults to 't'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">query command.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L31">yii\db\schema\mssql\CMssqlCommandBuilder.php#L31</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createCountCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$alias</span><span style="color: #007700">=</span><span style="color: #DD0000">'t'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">createCountCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$alias</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a COUNT(*) command for a single table.
Override parent implementation to remove the order clause of criteria if it exists</p>


<div class="detailHeader" id="createDeleteCommand-detail">
createDeleteCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>createDeleteCommand</b>(<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> $table, <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">delete command.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L115">yii\db\schema\mssql\CMssqlCommandBuilder.php#L115</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createDeleteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">createDeleteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a DELETE command.
Override parent implementation to check if an orderby clause if specified when querying with an offset</p>


<div class="detailHeader" id="createFindCommand-detail">
createFindCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>createFindCommand</b>(<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> $table, <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria, string $alias='t')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
<tr>
  <td class="paramNameCol">$alias</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the alias name of the primary table. Defaults to 't'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">query command.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L45">yii\db\schema\mssql\CMssqlCommandBuilder.php#L45</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createFindCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$alias</span><span style="color: #007700">=</span><span style="color: #DD0000">'t'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">createFindCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$alias</span><span style="color: #007700">);<br /><br />}</span>
</span>
</code></div>
</div>
<p>Creates a SELECT command for a single table.
Override parent implementation to check if an orderby clause if specified when querying with an offset</p>


<div class="detailHeader" id="createUpdateCommand-detail">
createUpdateCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>createUpdateCommand</b>(<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> $table, array $data, <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of columns to be updated (name=>value)</td>
</tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">update command.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L61">yii\db\schema\mssql\CMssqlCommandBuilder.php#L61</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createUpdateCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fields</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bindByPosition</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$column</span><span style="color: #007700">=</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceName&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isPrimaryKey&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbType&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #DD0000">'timestamp'</span><span style="color: #007700">)&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fields</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'='</span><span style="color: #007700">.</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">expression</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">$n</span><span style="color: #007700">]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$bindByPosition</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fields</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'=?'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">typecast</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fields</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'='</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">typecast</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$fields</span><span style="color: #007700">===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'No&nbsp;columns&nbsp;are&nbsp;being&nbsp;updated&nbsp;for&nbsp;table&nbsp;"{table}".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{table}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">"UPDATE&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;SET&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$fields</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyJoin</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyOrder</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValues</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">,</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates an UPDATE command.
Override parent implementation because mssql don't want to update an identity column</p>


<div class="detailHeader" id="createUpdateCounterCommand-detail">
createUpdateCounterCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>createUpdateCounterCommand</b>(<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> $table, <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $counters, array $criteria)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
<tr>
  <td class="paramNameCol">$counters</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">counters to be updated (counter increments/decrements indexed by column names.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">the created command</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L130">yii\db\schema\mssql\CMssqlCommandBuilder.php#L130</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createUpdateCounterCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$counters</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">createUpdateCounterCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$counters</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates an UPDATE command that increments/decrements certain columns.
Override parent implementation to check if an orderby clause if specified when querying with an offset</p>


<div class="detailHeader" id="findOrdering-detail">
findOrdering()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>findOrdering</b>(string $sql)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">$sql</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">ordering expression as key and ordering direction as value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L220">yii\db\schema\mssql\CMssqlCommandBuilder.php#L220</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">findOrdering</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/ORDER&nbsp;BY/i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ordering</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(ORDER&nbsp;BY)[\s"\[](.*)(ASC|DESC)?(?:[\s"\[]|$|COMPUTE|FOR)/i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">])&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parts&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$parts&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$part</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$subs</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(.*)[\s"\]](ASC|DESC)$/i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$part</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$subs</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$subs</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$subs</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">])&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$subs</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">])&nbsp;as&nbsp;</span><span style="color: #0000BB">$p</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$name</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">.=</span><span style="color: #DD0000">'.'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">.=</span><span style="color: #DD0000">'['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">']'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ordering</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$subs</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//else&nbsp;what?<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ordering</span><span style="color: #007700">[</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$part</span><span style="color: #007700">)]&nbsp;=&nbsp;</span><span style="color: #DD0000">'ASC'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;replacing&nbsp;column&nbsp;names&nbsp;with&nbsp;their&nbsp;alias&nbsp;names<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(</span><span style="color: #0000BB">$ordering&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$direction</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pattern&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'/\s+'</span><span style="color: #007700">.</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'['</span><span style="color: #007700">,</span><span style="color: #DD0000">']'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #DD0000">'\['</span><span style="color: #007700">,</span><span style="color: #DD0000">'\]'</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">).</span><span style="color: #DD0000">'\s+AS\s+(\[[^\]]+\])/i'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ordering</span><span style="color: #007700">[</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]]&nbsp;=&nbsp;</span><span style="color: #0000BB">$ordering</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$ordering</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ordering</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Base on simplified syntax http://msdn2.microsoft.com/en-us/library/aa259187(SQL.80).aspx</p>


<div class="detailHeader" id="joinOrdering-detail">
joinOrdering()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>joinOrdering</b>(array $orders, string $newPrefix)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$orders</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">ordering obtained from findOrdering()</td>
</tr>
<tr>
  <td class="paramNameCol">$newPrefix</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">new table prefix to the ordering columns</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">concat the orderings</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L276">yii\db\schema\mssql\CMssqlCommandBuilder.php#L276</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">joinOrdering</span><span style="color: #007700">(</span><span style="color: #0000BB">$orders</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newPrefix</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$orders</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$orders&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$direction</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$direction</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$orderBy&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'ORDER&nbsp;BY&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s+\[[^\]]+\]\.(\[[^\]]+\])/i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$newPrefix</span><span style="color: #007700">.</span><span style="color: #DD0000">'.\1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$orderBy</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="reverseDirection-detail">
reverseDirection()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>reverseDirection</b>(array $orders)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$orders</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">original ordering</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">ordering with reversed direction.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L294">yii\db\schema\mssql\CMssqlCommandBuilder.php#L294</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">reverseDirection</span><span style="color: #007700">(</span><span style="color: #0000BB">$orders</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$orders&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$direction</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$orders</span><span style="color: #007700">[</span><span style="color: #0000BB">$column</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$direction</span><span style="color: #007700">))===</span><span style="color: #DD0000">'desc'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'ASC'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'DESC'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$orders</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="rewriteLimitOffsetSql-detail">
rewriteLimitOffsetSql()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>rewriteLimitOffsetSql</b>(string $sql, integer $limit, integer $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">sql query</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">$limit > 0</td>
</tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">$offset > 0</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">modified sql query applied with limit and offset.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlCommandBuilder.php#L201">yii\db\schema\mssql\CMssqlCommandBuilder.php#L201</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">rewriteLimitOffsetSql</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fetch&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">+</span><span style="color: #0000BB">$offset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^([\s(])*SELECT(&nbsp;DISTINCT)?(?!\s*TOP\s*\()/i'</span><span style="color: #007700">,</span><span style="color: #DD0000">"\\1SELECT\\2&nbsp;TOP&nbsp;</span><span style="color: #0000BB">$fetch</span><span style="color: #DD0000">"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ordering&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findOrdering</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$orginalOrdering&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinOrdering</span><span style="color: #007700">(</span><span style="color: #0000BB">$ordering</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'[__outer__]'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$reverseOrdering&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinOrdering</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">reverseDirection</span><span style="color: #007700">(</span><span style="color: #0000BB">$ordering</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'[__inner__]'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;(SELECT&nbsp;TOP&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$limit</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;*&nbsp;FROM&nbsp;(</span><span style="color: #0000BB">$sql</span><span style="color: #DD0000">)&nbsp;as&nbsp;[__inner__]&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$reverseOrdering</span><span style="color: #007700">}</span><span style="color: #DD0000">)&nbsp;as&nbsp;[__outer__]&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$orginalOrdering</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Rewrite sql to apply $limit > and $offset > 0 for MSSQL database.
See http://troels.arvin.dk/db/rdbms/#select-limit-offset</p>


