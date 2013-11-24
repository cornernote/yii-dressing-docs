<?php
$this->pageTitle = $this->pageHeading = 'CPgsqlSchema';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CPgsqlSchema';
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
  <td><?php echo CHtml::link('system.db.schema.pgsql', array('/site/doc', '#' => 'system.db.schema.pgsql')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CPgsqlSchema &raquo;
<?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php">yii/db/schema/pgsql/CPgsqlSchema.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CPgsqlSchema is the class for retrieving metadata information from a PostgreSQL database.</div>
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
<tr id="columnTypes">
  <td><?php echo CHtml::link('columnTypes', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'columnTypes-detail')); ?></td>
  <td>array</td>
  <td>the abstract column types mapped to physical column types.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr class="inherited" id="commandBuilder">
  <td><?php echo CHtml::link('commandBuilder', array('/site/doc', 'view' => 'CDbSchema', '#' => 'commandBuilder-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
  <td>the SQL command builder for this connection.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="dbConnection">
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CDbSchema', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>database connection.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="tableNames">
  <td><?php echo CHtml::link('tableNames', array('/site/doc', 'view' => 'CDbSchema', '#' => 'tableNames-detail')); ?></td>
  <td>array</td>
  <td>Returns all table names in the database.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="tables">
  <td><?php echo CHtml::link('tables', array('/site/doc', 'view' => 'CDbSchema', '#' => 'tables-detail')); ?></td>
  <td>array</td>
  <td>Returns the metadata for all tables in the database.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CDbSchema', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
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
<tr id="addColumn">
  <td><?php echo CHtml::link('addColumn()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'addColumn-detail')); ?></td>
  <td>Builds a SQL statement for adding a new DB column.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr class="inherited" id="addForeignKey">
  <td><?php echo CHtml::link('addForeignKey()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'addForeignKey-detail')); ?></td>
  <td>Builds a SQL statement for adding a foreign key constraint to an existing table.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="addPrimaryKey">
  <td><?php echo CHtml::link('addPrimaryKey()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'addPrimaryKey-detail')); ?></td>
  <td>Builds a SQL statement for adding a primary key constraint to an existing table.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr id="alterColumn">
  <td><?php echo CHtml::link('alterColumn()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'alterColumn-detail')); ?></td>
  <td>Builds a SQL statement for changing the definition of a column.</td>
  <td>CPgsqlSchema</td>
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
<tr id="checkIntegrity">
  <td><?php echo CHtml::link('checkIntegrity()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'checkIntegrity-detail')); ?></td>
  <td>Enables or disables integrity check.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr class="inherited" id="compareTableNames">
  <td><?php echo CHtml::link('compareTableNames()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'compareTableNames-detail')); ?></td>
  <td>Compares two table names.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="createIndex">
  <td><?php echo CHtml::link('createIndex()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'createIndex-detail')); ?></td>
  <td>Builds a SQL statement for creating a new index.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="createTable">
  <td><?php echo CHtml::link('createTable()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'createTable-detail')); ?></td>
  <td>Builds a SQL statement for creating a new DB table.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
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
<tr class="inherited" id="dropColumn">
  <td><?php echo CHtml::link('dropColumn()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'dropColumn-detail')); ?></td>
  <td>Builds a SQL statement for dropping a DB column.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="dropForeignKey">
  <td><?php echo CHtml::link('dropForeignKey()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'dropForeignKey-detail')); ?></td>
  <td>Builds a SQL statement for dropping a foreign key constraint.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr id="dropIndex">
  <td><?php echo CHtml::link('dropIndex()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'dropIndex-detail')); ?></td>
  <td>Builds a SQL statement for dropping an index.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr class="inherited" id="dropPrimaryKey">
  <td><?php echo CHtml::link('dropPrimaryKey()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'dropPrimaryKey-detail')); ?></td>
  <td>Builds a SQL statement for removing a primary key constraint to an existing table.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="dropTable">
  <td><?php echo CHtml::link('dropTable()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'dropTable-detail')); ?></td>
  <td>Builds a SQL statement for dropping a DB table.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
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
<tr class="inherited" id="getColumnType">
  <td><?php echo CHtml::link('getColumnType()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'getColumnType-detail')); ?></td>
  <td>Converts an abstract column type into a physical column type.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="getCommandBuilder">
  <td><?php echo CHtml::link('getCommandBuilder()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'getCommandBuilder-detail')); ?></td>
  <td>Returns the SQL command builder for this connection.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns database connection. The connection is active.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getTable">
  <td><?php echo CHtml::link('getTable()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'getTable-detail')); ?></td>
  <td>Obtains the metadata for the named table.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="getTableNames">
  <td><?php echo CHtml::link('getTableNames()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'getTableNames-detail')); ?></td>
  <td>Returns all table names in the database.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="getTables">
  <td><?php echo CHtml::link('getTables()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'getTables-detail')); ?></td>
  <td>Returns the metadata for all tables in the database.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
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
<tr class="inherited" id="quoteColumnName">
  <td><?php echo CHtml::link('quoteColumnName()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'quoteColumnName-detail')); ?></td>
  <td>Quotes a column name for use in a query.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="quoteSimpleColumnName">
  <td><?php echo CHtml::link('quoteSimpleColumnName()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'quoteSimpleColumnName-detail')); ?></td>
  <td>Quotes a simple column name for use in a query.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr id="quoteSimpleTableName">
  <td><?php echo CHtml::link('quoteSimpleTableName()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'quoteSimpleTableName-detail')); ?></td>
  <td>Quotes a table name for use in a query.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr class="inherited" id="quoteTableName">
  <td><?php echo CHtml::link('quoteTableName()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'quoteTableName-detail')); ?></td>
  <td>Quotes a table name for use in a query.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="refresh">
  <td><?php echo CHtml::link('refresh()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'refresh-detail')); ?></td>
  <td>Refreshes the schema.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr class="inherited" id="renameColumn">
  <td><?php echo CHtml::link('renameColumn()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'renameColumn-detail')); ?></td>
  <td>Builds a SQL statement for renaming a column.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
</tr>
<tr id="renameTable">
  <td><?php echo CHtml::link('renameTable()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'renameTable-detail')); ?></td>
  <td>Builds a SQL statement for renaming a DB table.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr id="resetSequence">
  <td><?php echo CHtml::link('resetSequence()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'resetSequence-detail')); ?></td>
  <td>Resets the sequence value of a table's primary key.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr class="inherited" id="truncateTable">
  <td><?php echo CHtml::link('truncateTable()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'truncateTable-detail')); ?></td>
  <td>Builds a SQL statement for truncating a DB table.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
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
<tr id="createColumn">
  <td><?php echo CHtml::link('createColumn()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'createColumn-detail')); ?></td>
  <td>Creates a table column.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr id="createCommandBuilder">
  <td><?php echo CHtml::link('createCommandBuilder()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'createCommandBuilder-detail')); ?></td>
  <td>Creates a command builder for the database.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr id="findColumns">
  <td><?php echo CHtml::link('findColumns()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'findColumns-detail')); ?></td>
  <td>Collects the table column metadata.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr id="findConstraints">
  <td><?php echo CHtml::link('findConstraints()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'findConstraints-detail')); ?></td>
  <td>Collects the primary and foreign key column details for the given table.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr id="findForeignKey">
  <td><?php echo CHtml::link('findForeignKey()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'findForeignKey-detail')); ?></td>
  <td>Collects foreign key information.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr id="findPrimaryKey">
  <td><?php echo CHtml::link('findPrimaryKey()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'findPrimaryKey-detail')); ?></td>
  <td>Collects primary key information.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr id="findTableNames">
  <td><?php echo CHtml::link('findTableNames()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'findTableNames-detail')); ?></td>
  <td>Returns all table names in the database.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr id="loadTable">
  <td><?php echo CHtml::link('loadTable()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'loadTable-detail')); ?></td>
  <td>Loads the metadata for the specified table.</td>
  <td>CPgsqlSchema</td>
</tr>
<tr id="resolveTableNames">
  <td><?php echo CHtml::link('resolveTableNames()', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'resolveTableNames-detail')); ?></td>
  <td>Generates various kinds of table names.</td>
  <td>CPgsqlSchema</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="columnTypes-detail">
columnTypes<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public array <b>$columnTypes</b>;</div>

<p>the abstract column types mapped to physical column types.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addColumn-detail">
addColumn()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>addColumn</b>(string $table, string $column, string $type)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table that the new column will be added to. The table name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the new column. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column type. The <?php echo CHtml::link('getColumnType', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'getColumnType')); ?> method will be invoked to convert abstract column type (if any)
into the physical one. Anything that is not recognized as abstract type will be kept in the generated SQL.
For example, 'string' will be turned into 'varchar(255)', while 'string not null' will become 'varchar(255) not null'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement for adding a new column.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L389">yii/db/schema/pgsql/CPgsqlSchema.php#L389</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">'ALTER&nbsp;TABLE&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;ADD&nbsp;COLUMN&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for adding a new DB column.</p>


<div class="detailHeader" id="alterColumn-detail">
alterColumn()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>alterColumn</b>(string $table, string $column, string $type)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table whose column is to be changed. The table name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the column to be changed. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the new column type. The <?php echo CHtml::link('getColumnType', array('/site/doc', 'view' => 'CPgsqlSchema', '#' => 'getColumnType')); ?> method will be invoked to convert abstract column type (if any)
into the physical one. Anything that is not recognized as abstract type will be kept in the generated SQL.
For example, 'string' will be turned into 'varchar(255)', while 'string not null' will become 'varchar(255) not null'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement for changing the definition of a column.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L408">yii/db/schema/pgsql/CPgsqlSchema.php#L408</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">alterColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">'ALTER&nbsp;TABLE&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;ALTER&nbsp;COLUMN&nbsp;'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;TYPE&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for changing the definition of a column.</p>


<div class="detailHeader" id="checkIntegrity-detail">
checkIntegrity()
<span class="detailHeaderTag">
method
(available since v1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>checkIntegrity</b>(boolean $check=true, string $schema='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$check</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to turn on or off the integrity check.</td>
</tr>
<tr>
  <td class="paramNameCol">$schema</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the schema of the tables. Defaults to empty string, meaning the current or default schema.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L88">yii/db/schema/pgsql/CPgsqlSchema.php#L88</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkIntegrity</span><span style="color: #007700">(</span><span style="color: #0000BB">$check</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$enable</span><span style="color: #007700">=</span><span style="color: #0000BB">$check&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'ENABLE'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'DISABLE'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableNames</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$tableNames&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">=</span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #DD0000">'"."'</span><span style="color: #007700">,</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"ALTER&nbsp;TABLE&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #DD0000">&nbsp;</span><span style="color: #0000BB">$enable</span><span style="color: #DD0000">&nbsp;TRIGGER&nbsp;ALL"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Enables or disables integrity check.</p>


<div class="detailHeader" id="createColumn-detail">
createColumn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbColumnSchema', array('/site/doc', 'view' => 'CDbColumnSchema')); ?> <b>createColumn</b>(array $column)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">column metadata</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbColumnSchema', array('/site/doc', 'view' => 'CDbColumnSchema')); ?></td>
  <td class="paramDescCol">normalized column metadata</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L204">yii/db/schema/pgsql/CPgsqlSchema.php#L204</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CPgsqlColumnSchema</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'attname'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowNull</span><span style="color: #007700">=!</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'attnotnull'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isPrimaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isForeignKey</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">comment</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'comment'</span><span style="color: #007700">]===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'comment'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">],</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'atthasdef'</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'adsrc'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a table column.</p>


<div class="detailHeader" id="createCommandBuilder-detail">
createCommandBuilder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CPgsqlCommandBuilder', array('/site/doc', 'view' => 'CPgsqlCommandBuilder')); ?> <b>createCommandBuilder</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CPgsqlCommandBuilder', array('/site/doc', 'view' => 'CPgsqlCommandBuilder')); ?></td>
  <td class="paramDescCol">command builder instance.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L433">yii/db/schema/pgsql/CPgsqlSchema.php#L433</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createCommandBuilder</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">CPgsqlCommandBuilder</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a command builder for the database.
This method may be overridden by child classes to create a DBMS-specific command builder.</p>


<div class="detailHeader" id="dropIndex-detail">
dropIndex()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>dropIndex</b>(string $name, string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the index to be dropped. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table whose index is to be dropped. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement for dropping an index.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L423">yii/db/schema/pgsql/CPgsqlSchema.php#L423</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'DROP&nbsp;INDEX&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for dropping an index.</p>


<div class="detailHeader" id="findColumns-detail">
findColumns()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>findColumns</b>(<?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?> $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the table exists in the database</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L164">yii/db/schema/pgsql/CPgsqlSchema.php#L164</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">findColumns</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">SELECT&nbsp;a.attname,&nbsp;LOWER(format_type(a.atttypid,&nbsp;a.atttypmod))&nbsp;AS&nbsp;type,&nbsp;d.adsrc,&nbsp;a.attnotnull,&nbsp;a.atthasdef,<br />pg_catalog.col_description(a.attrelid,&nbsp;a.attnum)&nbsp;AS&nbsp;comment<br />FROM&nbsp;pg_attribute&nbsp;a&nbsp;LEFT&nbsp;JOIN&nbsp;pg_attrdef&nbsp;d&nbsp;ON&nbsp;a.attrelid&nbsp;=&nbsp;d.adrelid&nbsp;AND&nbsp;a.attnum&nbsp;=&nbsp;d.adnum<br />WHERE&nbsp;a.attnum&nbsp;&gt;&nbsp;0&nbsp;AND&nbsp;NOT&nbsp;a.attisdropped<br />AND&nbsp;a.attrelid&nbsp;=&nbsp;(SELECT&nbsp;oid&nbsp;FROM&nbsp;pg_catalog.pg_class&nbsp;WHERE&nbsp;relname=:table<br />&nbsp;&nbsp;&nbsp;&nbsp;AND&nbsp;relnamespace&nbsp;=&nbsp;(SELECT&nbsp;oid&nbsp;FROM&nbsp;pg_catalog.pg_namespace&nbsp;WHERE&nbsp;nspname&nbsp;=&nbsp;:schema))<br />ORDER&nbsp;BY&nbsp;a.attnum<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':table'</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':schema'</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">schemaName</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$columns</span><span style="color: #007700">=</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">())===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$c</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">stripos</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'adsrc'</span><span style="color: #007700">],</span><span style="color: #DD0000">'nextval'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/nextval\([^\']*\'([^\']+)\'[^\)]*\)/i'</span><span style="color: #007700">,</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'adsrc'</span><span style="color: #007700">],</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #DD0000">'.'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">schemaName</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">DEFAULT_SCHEMA</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sequences</span><span style="color: #007700">[</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sequences</span><span style="color: #007700">[</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">schemaName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoIncrement</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Collects the table column metadata.</p>


<div class="detailHeader" id="findConstraints-detail">
findConstraints()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>findConstraints</b>(<?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?> $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L223">yii/db/schema/pgsql/CPgsqlSchema.php#L223</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">findConstraints</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">SELECT&nbsp;conname,&nbsp;consrc,&nbsp;contype,&nbsp;indkey&nbsp;FROM&nbsp;(<br />SELECT<br />&nbsp;&nbsp;&nbsp;&nbsp;conname,<br />&nbsp;&nbsp;&nbsp;&nbsp;CASE&nbsp;WHEN&nbsp;contype='f'&nbsp;THEN<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pg_catalog.pg_get_constraintdef(oid)<br />&nbsp;&nbsp;&nbsp;&nbsp;ELSE<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'CHECK&nbsp;('&nbsp;||&nbsp;consrc&nbsp;||&nbsp;')'<br />&nbsp;&nbsp;&nbsp;&nbsp;END&nbsp;AS&nbsp;consrc,<br />&nbsp;&nbsp;&nbsp;&nbsp;contype,<br />&nbsp;&nbsp;&nbsp;&nbsp;conrelid&nbsp;AS&nbsp;relid,<br />&nbsp;&nbsp;&nbsp;&nbsp;NULL&nbsp;AS&nbsp;indkey<br />FROM<br />&nbsp;&nbsp;&nbsp;&nbsp;pg_catalog.pg_constraint<br />WHERE<br />&nbsp;&nbsp;&nbsp;&nbsp;contype&nbsp;IN&nbsp;('f',&nbsp;'c')<br />UNION&nbsp;ALL<br />SELECT<br />&nbsp;&nbsp;&nbsp;&nbsp;pc.relname,<br />&nbsp;&nbsp;&nbsp;&nbsp;NULL,<br />&nbsp;&nbsp;&nbsp;&nbsp;CASE&nbsp;WHEN&nbsp;indisprimary&nbsp;THEN<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'p'<br />&nbsp;&nbsp;&nbsp;&nbsp;ELSE<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'u'<br />&nbsp;&nbsp;&nbsp;&nbsp;END,<br />&nbsp;&nbsp;&nbsp;&nbsp;pi.indrelid,<br />&nbsp;&nbsp;&nbsp;&nbsp;indkey<br />FROM<br />&nbsp;&nbsp;&nbsp;&nbsp;pg_catalog.pg_class&nbsp;pc,<br />&nbsp;&nbsp;&nbsp;&nbsp;pg_catalog.pg_index&nbsp;pi<br />WHERE<br />&nbsp;&nbsp;&nbsp;&nbsp;pc.oid=pi.indexrelid<br />&nbsp;&nbsp;&nbsp;&nbsp;AND&nbsp;EXISTS&nbsp;(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECT&nbsp;1&nbsp;FROM&nbsp;pg_catalog.pg_depend&nbsp;d&nbsp;JOIN&nbsp;pg_catalog.pg_constraint&nbsp;c<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ON&nbsp;(d.refclassid&nbsp;=&nbsp;c.tableoid&nbsp;AND&nbsp;d.refobjid&nbsp;=&nbsp;c.oid)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WHERE&nbsp;d.classid&nbsp;=&nbsp;pc.tableoid&nbsp;AND&nbsp;d.objid&nbsp;=&nbsp;pc.oid&nbsp;AND&nbsp;d.deptype&nbsp;=&nbsp;'i'&nbsp;AND&nbsp;c.contype&nbsp;IN&nbsp;('u',&nbsp;'p')<br />)<br />)&nbsp;AS&nbsp;sub<br />WHERE&nbsp;relid&nbsp;=&nbsp;(SELECT&nbsp;oid&nbsp;FROM&nbsp;pg_catalog.pg_class&nbsp;WHERE&nbsp;relname=:table<br />AND&nbsp;relnamespace&nbsp;=&nbsp;(SELECT&nbsp;oid&nbsp;FROM&nbsp;pg_catalog.pg_namespace<br />WHERE&nbsp;nspname=:schema))<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':table'</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':schema'</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">schemaName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'contype'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'p'</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;primary&nbsp;key<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'indkey'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'contype'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'f'</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;foreign&nbsp;key<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'consrc'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Collects the primary and foreign key column details for the given table.</p>


<div class="detailHeader" id="findForeignKey-detail">
findForeignKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>findForeignKey</b>(<?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?> $table, string $src)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
<tr>
  <td class="paramNameCol">$src</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">pgsql foreign key definition</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L320">yii/db/schema/pgsql/CPgsqlSchema.php#L320</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">findForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$src</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$brackets</span><span style="color: #007700">=</span><span style="color: #DD0000">'\(([^\)]+)\)'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">=</span><span style="color: #DD0000">"/FOREIGN\s+KEY\s+</span><span style="color: #007700">{</span><span style="color: #0000BB">$brackets</span><span style="color: #007700">}</span><span style="color: #DD0000">\s+REFERENCES\s+([^\(]+)</span><span style="color: #007700">{</span><span style="color: #0000BB">$brackets</span><span style="color: #007700">}</span><span style="color: #DD0000">/i"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'"'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$src</span><span style="color: #007700">),</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/,\s+/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fkeys</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/,\s+/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreignKeys</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=array(</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">,</span><span style="color: #0000BB">$fkeys</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">isForeignKey</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Collects foreign key information.</p>


<div class="detailHeader" id="findPrimaryKey-detail">
findPrimaryKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>findPrimaryKey</b>(<?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?> $table, string $indices)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
<tr>
  <td class="paramNameCol">$indices</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">pgsql primary key index list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L284">yii/db/schema/pgsql/CPgsqlSchema.php#L284</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">findPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$indices</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$indices</span><span style="color: #007700">=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$indices</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">SELECT&nbsp;attnum,&nbsp;attname&nbsp;FROM&nbsp;pg_catalog.pg_attribute&nbsp;WHERE<br />attrelid=(<br />&nbsp;&nbsp;&nbsp;&nbsp;SELECT&nbsp;oid&nbsp;FROM&nbsp;pg_catalog.pg_class&nbsp;WHERE&nbsp;relname=:table&nbsp;AND&nbsp;relnamespace=(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECT&nbsp;oid&nbsp;FROM&nbsp;pg_catalog.pg_namespace&nbsp;WHERE&nbsp;nspname=:schema<br />&nbsp;&nbsp;&nbsp;&nbsp;)<br />)<br />AND&nbsp;attnum&nbsp;IN&nbsp;(</span><span style="color: #007700">{</span><span style="color: #0000BB">$indices</span><span style="color: #007700">}</span><span style="color: #DD0000">)<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':table'</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':schema'</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">schemaName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'attname'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">isPrimaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Collects primary key information.</p>


<div class="detailHeader" id="findTableNames-detail">
findTableNames()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>findTableNames</b>(string $schema='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$schema</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the schema of the tables. Defaults to empty string, meaning the current or default schema.
If not empty, the returned table names will be prefixed with the schema name.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">all table names in the database.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L345">yii/db/schema/pgsql/CPgsqlSchema.php#L345</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">findTableNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">DEFAULT_SCHEMA</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">SELECT&nbsp;table_name,&nbsp;table_schema&nbsp;FROM&nbsp;information_schema.tables<br />WHERE&nbsp;table_schema=:schema&nbsp;AND&nbsp;table_type='BASE&nbsp;TABLE'<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #DD0000">':schema'</span><span style="color: #007700">,</span><span style="color: #0000BB">$schema</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rows</span><span style="color: #007700">=</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$rows&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">DEFAULT_SCHEMA</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'table_name'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'table_schema'</span><span style="color: #007700">].</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'table_name'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns all table names in the database.</p>


<div class="detailHeader" id="loadTable-detail">
loadTable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> <b>loadTable</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">table name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td class="paramDescCol">driver dependent table metadata.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L107">yii/db/schema/pgsql/CPgsqlSchema.php#L107</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">loadTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CPgsqlTableSchema</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveTableNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findColumns</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findConstraints</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sequences</span><span style="color: #007700">[</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sequences</span><span style="color: #007700">[</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$pk</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sequences</span><span style="color: #007700">[</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$pk</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sequences</span><span style="color: #007700">[</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$pk</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Loads the metadata for the specified table.</p>


<div class="detailHeader" id="quoteSimpleTableName-detail">
quoteSimpleTableName()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>quoteSimpleTableName</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">table name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the properly quoted table name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L51">yii/db/schema/pgsql/CPgsqlSchema.php#L51</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">quoteSimpleTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Quotes a table name for use in a query.
A simple table name does not schema prefix.</p>


<div class="detailHeader" id="renameTable-detail">
renameTable()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renameTable</b>(string $table, string $newName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be renamed. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$newName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the new table name. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement for renaming a DB table.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L374">yii/db/schema/pgsql/CPgsqlSchema.php#L374</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renameTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'ALTER&nbsp;TABLE&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;RENAME&nbsp;TO&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$newName</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for renaming a DB table.</p>


<div class="detailHeader" id="resetSequence-detail">
resetSequence()
<span class="detailHeaderTag">
method
(available since v1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>resetSequence</b>(<?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> $table, integer|null $value=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td class="paramDescCol">the table schema whose primary key sequence will be reset</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer|null</td>
  <td class="paramDescCol">the value for the primary key of the next new row inserted.
If this is not set, the next new row's primary key will have the max value of a primary
key plus one (i.e. sequence trimming).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L66">yii/db/schema/pgsql/CPgsqlSchema.php#L66</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">resetSequence</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceName</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sequence</span><span style="color: #007700">=</span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceName</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$sequence</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sequence</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #DD0000">'"."'</span><span style="color: #007700">,</span><span style="color: #0000BB">$sequence</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">"(SELECT&nbsp;COALESCE(MAX(\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">}</span><span style="color: #DD0000">\"),0)&nbsp;FROM&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">}</span><span style="color: #DD0000">)+1"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT&nbsp;SETVAL('</span><span style="color: #0000BB">$sequence</span><span style="color: #DD0000">',</span><span style="color: #0000BB">$value</span><span style="color: #DD0000">,false)"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Resets the sequence value of a table's primary key.
The sequence will be reset such that the primary key of the next new row inserted
will have the specified value or max value of a primary key plus one (i.e. sequence trimming).</p>


<div class="detailHeader" id="resolveTableNames-detail">
resolveTableNames()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>resolveTableNames</b>(<?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?> $table, string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CPgsqlTableSchema', array('/site/doc', 'view' => 'CPgsqlTableSchema')); ?></td>
  <td class="paramDescCol">the table instance</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the unquoted table name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/pgsql/CPgsqlSchema.php#L137">yii/db/schema/pgsql/CPgsqlSchema.php#L137</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveTableNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parts</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'"'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">=</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">=</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">DEFAULT_SCHEMA</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">=</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">=</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">schemaName</span><span style="color: #007700">=</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">DEFAULT_SCHEMA</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates various kinds of table names.</p>


