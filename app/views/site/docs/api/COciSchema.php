<?php
$this->pageTitle = $this->pageHeading = 'COciSchema';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'COciSchema';
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
  <td>class COciSchema &raquo;
<?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php">yii\db\schema\oci\COciSchema.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Ricardo Grana &lt;rickgrana@yahoo.com.br&gt;</td>
</tr>
</table>

<div id="classDescription">
COciSchema is the class for retrieving metadata information from an Oracle database.</div>
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
  <td><?php echo CHtml::link('columnTypes', array('/site/doc', 'view' => 'COciSchema', '#' => 'columnTypes-detail')); ?></td>
  <td>array</td>
  <td>the abstract column types mapped to physical column types.</td>
  <td>COciSchema</td>
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
<tr id="defaultSchema">
  <td><?php echo CHtml::link('defaultSchema', array('/site/doc', 'view' => 'COciSchema', '#' => 'defaultSchema-detail')); ?></td>
  <td>string</td>
  <td>default schema.</td>
  <td>COciSchema</td>
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
<tr class="inherited" id="addColumn">
  <td><?php echo CHtml::link('addColumn()', array('/site/doc', 'view' => 'CDbSchema', '#' => 'addColumn-detail')); ?></td>
  <td>Builds a SQL statement for adding a new DB column.</td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
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
  <td><?php echo CHtml::link('alterColumn()', array('/site/doc', 'view' => 'COciSchema', '#' => 'alterColumn-detail')); ?></td>
  <td>Builds a SQL statement for changing the definition of a column.</td>
  <td>COciSchema</td>
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
  <td><?php echo CHtml::link('checkIntegrity()', array('/site/doc', 'view' => 'COciSchema', '#' => 'checkIntegrity-detail')); ?></td>
  <td>Enables or disables integrity check.</td>
  <td>COciSchema</td>
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
  <td><?php echo CHtml::link('dropIndex()', array('/site/doc', 'view' => 'COciSchema', '#' => 'dropIndex-detail')); ?></td>
  <td>Builds a SQL statement for dropping an index.</td>
  <td>COciSchema</td>
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
<tr id="getDefaultSchema">
  <td><?php echo CHtml::link('getDefaultSchema()', array('/site/doc', 'view' => 'COciSchema', '#' => 'getDefaultSchema-detail')); ?></td>
  <td>Returns default schema.</td>
  <td>COciSchema</td>
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
<tr id="quoteSimpleColumnName">
  <td><?php echo CHtml::link('quoteSimpleColumnName()', array('/site/doc', 'view' => 'COciSchema', '#' => 'quoteSimpleColumnName-detail')); ?></td>
  <td>Quotes a column name for use in a query.</td>
  <td>COciSchema</td>
</tr>
<tr id="quoteSimpleTableName">
  <td><?php echo CHtml::link('quoteSimpleTableName()', array('/site/doc', 'view' => 'COciSchema', '#' => 'quoteSimpleTableName-detail')); ?></td>
  <td>Quotes a table name for use in a query.</td>
  <td>COciSchema</td>
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
  <td><?php echo CHtml::link('renameTable()', array('/site/doc', 'view' => 'COciSchema', '#' => 'renameTable-detail')); ?></td>
  <td>Builds a SQL statement for renaming a DB table.</td>
  <td>COciSchema</td>
</tr>
<tr id="resetSequence">
  <td><?php echo CHtml::link('resetSequence()', array('/site/doc', 'view' => 'COciSchema', '#' => 'resetSequence-detail')); ?></td>
  <td>Resets the sequence value of a table's primary key.</td>
  <td>COciSchema</td>
</tr>
<tr id="setDefaultSchema">
  <td><?php echo CHtml::link('setDefaultSchema()', array('/site/doc', 'view' => 'COciSchema', '#' => 'setDefaultSchema-detail')); ?></td>
  <td>Sets default schema.</td>
  <td>COciSchema</td>
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
  <td><?php echo CHtml::link('createColumn()', array('/site/doc', 'view' => 'COciSchema', '#' => 'createColumn-detail')); ?></td>
  <td>Creates a table column.</td>
  <td>COciSchema</td>
</tr>
<tr id="createCommandBuilder">
  <td><?php echo CHtml::link('createCommandBuilder()', array('/site/doc', 'view' => 'COciSchema', '#' => 'createCommandBuilder-detail')); ?></td>
  <td>Creates a command builder for the database.</td>
  <td>COciSchema</td>
</tr>
<tr id="findColumns">
  <td><?php echo CHtml::link('findColumns()', array('/site/doc', 'view' => 'COciSchema', '#' => 'findColumns-detail')); ?></td>
  <td>Collects the table column metadata.</td>
  <td>COciSchema</td>
</tr>
<tr id="findConstraints">
  <td><?php echo CHtml::link('findConstraints()', array('/site/doc', 'view' => 'COciSchema', '#' => 'findConstraints-detail')); ?></td>
  <td>Collects the primary and foreign key column details for the given table.</td>
  <td>COciSchema</td>
</tr>
<tr id="findTableNames">
  <td><?php echo CHtml::link('findTableNames()', array('/site/doc', 'view' => 'COciSchema', '#' => 'findTableNames-detail')); ?></td>
  <td>Returns all table names in the database.</td>
  <td>COciSchema</td>
</tr>
<tr id="getSchemaTableName">
  <td><?php echo CHtml::link('getSchemaTableName()', array('/site/doc', 'view' => 'COciSchema', '#' => 'getSchemaTableName-detail')); ?></td>
  <td>Returns tuple as ($schemaName,$tableName)</td>
  <td>COciSchema</td>
</tr>
<tr id="loadTable">
  <td><?php echo CHtml::link('loadTable()', array('/site/doc', 'view' => 'COciSchema', '#' => 'loadTable-detail')); ?></td>
  <td>Loads the metadata for the specified table.</td>
  <td>COciSchema</td>
</tr>
<tr id="resolveTableNames">
  <td><?php echo CHtml::link('resolveTableNames()', array('/site/doc', 'view' => 'COciSchema', '#' => 'resolveTableNames-detail')); ?></td>
  <td>Generates various kinds of table names.</td>
  <td>COciSchema</td>
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


<div class="detailHeader" id="defaultSchema-detail">
defaultSchema<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getDefaultSchema</b>', array('/site/doc', 'view' => 'COciSchema', '#' => 'getDefaultSchema')); ?>()<br/>public void <?php echo CHtml::link('<b>setDefaultSchema</b>', array('/site/doc', 'view' => 'COciSchema', '#' => 'setDefaultSchema')); ?>(string $schema)</div>

<p>default schema.</p>


<h2>Method Details</h2>

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
  <td class="paramDescCol">the new column type. The <?php echo CHtml::link('getColumnType', array('/site/doc', 'view' => 'COciSchema', '#' => 'getColumnType')); ?> method will be invoked to convert abstract column type (if any)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L332">yii\db\schema\oci\COciSchema.php#L332</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">alterColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">'ALTER&nbsp;TABLE&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;MODIFY&nbsp;'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for changing the definition of a column.</p>


<div class="detailHeader" id="checkIntegrity-detail">
checkIntegrity()
<span class="detailHeaderTag">
method
(available since v1.1.14)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L395">yii\db\schema\oci\COciSchema.php#L395</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkIntegrity</span><span style="color: #007700">(</span><span style="color: #0000BB">$check</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDefaultSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$mode</span><span style="color: #007700">=</span><span style="color: #0000BB">$check&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'ENABLE'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'DISABLE'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$constraints</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT&nbsp;CONSTRAINT_NAME&nbsp;FROM&nbsp;USER_CONSTRAINTS&nbsp;WHERE&nbsp;TABLE_NAME=:t&nbsp;AND&nbsp;OWNER=:o"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">queryColumn</span><span style="color: #007700">(array(</span><span style="color: #DD0000">':t'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #DD0000">':o'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$constraints&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$constraint</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"ALTER&nbsp;TABLE&nbsp;\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$schema</span><span style="color: #007700">}</span><span style="color: #DD0000">\".\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">}</span><span style="color: #DD0000">\"&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$mode</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;CONSTRAINT&nbsp;\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$constraint</span><span style="color: #007700">}</span><span style="color: #DD0000">\""</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L226">yii\db\schema\oci\COciSchema.php#L226</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">COciColumnSchema</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'COLUMN_NAME'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowNull</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'NULLABLE'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isPrimaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'KEY'</span><span style="color: #007700">],</span><span style="color: #DD0000">'P'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isForeignKey</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'DATA_TYPE'</span><span style="color: #007700">],</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'DATA_DEFAULT'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">comment</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'COLUMN_COMMENT'</span><span style="color: #007700">]===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'COLUMN_COMMENT'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">;<br />}</span>
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
protected <?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?> <b>createCommandBuilder</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
  <td class="paramDescCol">command builder instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L72">yii\db\schema\oci\COciSchema.php#L72</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createCommandBuilder</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">COciCommandBuilder</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L348">yii\db\schema\oci\COciSchema.php#L348</a> (<b><a href="#" class="show">show</a></b>)
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
protected boolean <b>findColumns</b>(<?php echo CHtml::link('COciTableSchema', array('/site/doc', 'view' => 'COciTableSchema')); ?> $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('COciTableSchema', array('/site/doc', 'view' => 'COciTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the table exists in the database</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L160">yii\db\schema\oci\COciSchema.php#L160</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">findColumns</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">=</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">schemaName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">=</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">SELECT&nbsp;a.column_name,&nbsp;a.data_type&nbsp;||<br />case<br />&nbsp;&nbsp;&nbsp;&nbsp;when&nbsp;data_precision&nbsp;is&nbsp;not&nbsp;null<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;then&nbsp;'('&nbsp;||&nbsp;a.data_precision&nbsp;||<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;when&nbsp;a.data_scale&nbsp;&gt;&nbsp;0&nbsp;then&nbsp;','&nbsp;||&nbsp;a.data_scale&nbsp;else&nbsp;''&nbsp;end<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;')'<br />&nbsp;&nbsp;&nbsp;&nbsp;when&nbsp;data_type&nbsp;=&nbsp;'DATE'&nbsp;then&nbsp;''<br />&nbsp;&nbsp;&nbsp;&nbsp;when&nbsp;data_type&nbsp;=&nbsp;'NUMBER'&nbsp;then&nbsp;''<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;'('&nbsp;||&nbsp;to_char(a.data_length)&nbsp;||&nbsp;')'<br />end&nbsp;as&nbsp;data_type,<br />a.nullable,&nbsp;a.data_default,<br />(&nbsp;&nbsp;&nbsp;SELECT&nbsp;D.constraint_type<br />&nbsp;&nbsp;&nbsp;&nbsp;FROM&nbsp;ALL_CONS_COLUMNS&nbsp;C<br />&nbsp;&nbsp;&nbsp;&nbsp;inner&nbsp;join&nbsp;ALL_constraints&nbsp;D&nbsp;on&nbsp;D.OWNER&nbsp;=&nbsp;C.OWNER&nbsp;and&nbsp;D.constraint_name&nbsp;=&nbsp;C.constraint_name<br />&nbsp;&nbsp;&nbsp;&nbsp;WHERE&nbsp;C.OWNER&nbsp;=&nbsp;B.OWNER<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and&nbsp;C.table_name&nbsp;=&nbsp;B.object_name<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and&nbsp;C.column_name&nbsp;=&nbsp;A.column_name<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and&nbsp;D.constraint_type&nbsp;=&nbsp;'P')&nbsp;as&nbsp;Key,<br />com.comments&nbsp;as&nbsp;column_comment<br />FROM&nbsp;ALL_TAB_COLUMNS&nbsp;A<br />inner&nbsp;join&nbsp;ALL_OBJECTS&nbsp;B&nbsp;ON&nbsp;b.owner&nbsp;=&nbsp;a.owner&nbsp;and&nbsp;ltrim(B.OBJECT_NAME)&nbsp;=&nbsp;ltrim(A.TABLE_NAME)<br />LEFT&nbsp;JOIN&nbsp;user_col_comments&nbsp;com&nbsp;ON&nbsp;(A.table_name&nbsp;=&nbsp;com.table_name&nbsp;AND&nbsp;A.column_name&nbsp;=&nbsp;com.column_name)<br />WHERE<br />a.owner&nbsp;=&nbsp;'</span><span style="color: #007700">{</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">}</span><span style="color: #DD0000">'<br />and&nbsp;(b.object_type&nbsp;=&nbsp;'TABLE'&nbsp;or&nbsp;b.object_type&nbsp;=&nbsp;'VIEW')<br />and&nbsp;b.object_name&nbsp;=&nbsp;'</span><span style="color: #007700">{</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">}</span><span style="color: #DD0000">'<br />ORDER&nbsp;by&nbsp;a.column_id<br /></span><span style="color: #007700">EOD;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$columns</span><span style="color: #007700">=</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">())===array()){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$c</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isPrimaryKey</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">,</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceName</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoIncrement</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
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
protected void <b>findConstraints</b>(<?php echo CHtml::link('COciTableSchema', array('/site/doc', 'view' => 'COciTableSchema')); ?> $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('COciTableSchema', array('/site/doc', 'view' => 'COciTableSchema')); ?></td>
  <td class="paramDescCol">the table metadata</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L244">yii\db\schema\oci\COciSchema.php#L244</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">findConstraints</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">&nbsp;&nbsp;&nbsp;&nbsp;SELECT&nbsp;D.constraint_type&nbsp;as&nbsp;CONSTRAINT_TYPE,&nbsp;C.COLUMN_NAME,&nbsp;C.position,&nbsp;D.r_constraint_name,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E.table_name&nbsp;as&nbsp;table_ref,&nbsp;f.column_name&nbsp;as&nbsp;column_ref,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C.table_name<br />&nbsp;&nbsp;&nbsp;&nbsp;FROM&nbsp;ALL_CONS_COLUMNS&nbsp;C<br />&nbsp;&nbsp;&nbsp;&nbsp;inner&nbsp;join&nbsp;ALL_constraints&nbsp;D&nbsp;on&nbsp;D.OWNER&nbsp;=&nbsp;C.OWNER&nbsp;and&nbsp;D.constraint_name&nbsp;=&nbsp;C.constraint_name<br />&nbsp;&nbsp;&nbsp;&nbsp;left&nbsp;join&nbsp;ALL_constraints&nbsp;E&nbsp;on&nbsp;E.OWNER&nbsp;=&nbsp;D.r_OWNER&nbsp;and&nbsp;E.constraint_name&nbsp;=&nbsp;D.r_constraint_name<br />&nbsp;&nbsp;&nbsp;&nbsp;left&nbsp;join&nbsp;ALL_cons_columns&nbsp;F&nbsp;on&nbsp;F.OWNER&nbsp;=&nbsp;E.OWNER&nbsp;and&nbsp;F.constraint_name&nbsp;=&nbsp;E.constraint_name&nbsp;and&nbsp;F.position&nbsp;=&nbsp;c.position<br />&nbsp;&nbsp;&nbsp;&nbsp;WHERE&nbsp;C.OWNER&nbsp;=&nbsp;'</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">schemaName</span><span style="color: #007700">}</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and&nbsp;C.table_name&nbsp;=&nbsp;'</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">}</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and&nbsp;D.constraint_type&nbsp;&lt;&gt;&nbsp;'P'<br />&nbsp;&nbsp;&nbsp;&nbsp;order&nbsp;by&nbsp;d.constraint_name,&nbsp;c.position<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'CONSTRAINT_TYPE'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'R'</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;foreign&nbsp;key<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"COLUMN_NAME"</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreignKeys</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=array(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"TABLE_REF"</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"COLUMN_REF"</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">isForeignKey</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Collects the primary and foreign key column details for the given table.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L279">yii\db\schema\oci\COciSchema.php#L279</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">findTableNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">SELECT&nbsp;table_name,&nbsp;'</span><span style="color: #007700">{</span><span style="color: #0000BB">$schema</span><span style="color: #007700">}</span><span style="color: #DD0000">'&nbsp;as&nbsp;table_schema&nbsp;FROM&nbsp;user_tables<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">SELECT&nbsp;object_name&nbsp;as&nbsp;table_name,&nbsp;owner&nbsp;as&nbsp;table_schema&nbsp;FROM&nbsp;all_objects<br />WHERE&nbsp;object_type&nbsp;=&nbsp;'TABLE'&nbsp;AND&nbsp;owner=:schema<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #DD0000">':schema'</span><span style="color: #007700">,</span><span style="color: #0000BB">$schema</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rows</span><span style="color: #007700">=</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$rows&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDefaultSchema</span><span style="color: #007700">()&nbsp;||&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'TABLE_NAME'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'TABLE_SCHEMA'</span><span style="color: #007700">].</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'TABLE_NAME'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns all table names in the database.</p>


<div class="detailHeader" id="getDefaultSchema-detail">
getDefaultSchema()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getDefaultSchema</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">default schema.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L88">yii\db\schema\oci\COciSchema.php#L88</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDefaultSchema</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_defaultSchema</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setDefaultSchema</span><span style="color: #007700">(</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_defaultSchema</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSchemaTableName-detail">
getSchemaTableName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>getSchemaTableName</b>(string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">table name with optional schema name prefix, uses default schema name prefix is not provided.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">tuple as ($schemaName,$tableName)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L102">yii\db\schema\oci\COciSchema.php#L102</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSchemaTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$parts</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'"'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">)))&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDefaultSchema</span><span style="color: #007700">(),</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L116">yii\db\schema\oci\COciSchema.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">loadTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">COciTableSchema</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveTableNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findColumns</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findConstraints</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Loads the metadata for the specified table.</p>


<div class="detailHeader" id="quoteSimpleColumnName-detail">
quoteSimpleColumnName()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>quoteSimpleColumnName</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">column name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the properly quoted column name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L62">yii\db\schema\oci\COciSchema.php#L62</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">quoteSimpleColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Quotes a column name for use in a query.
A simple column name does not contain prefix.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L50">yii\db\schema\oci\COciSchema.php#L50</a> (<b><a href="#" class="show">show</a></b>)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L317">yii\db\schema\oci\COciSchema.php#L317</a> (<b><a href="#" class="show">show</a></b>)
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
(available since v1.1.13)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L367">yii\db\schema\oci\COciSchema.php#L367</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">resetSequence</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceName</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT&nbsp;MAX(\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">}</span><span style="color: #DD0000">\")&nbsp;FROM&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP&nbsp;SEQUENCE&nbsp;\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">}</span><span style="color: #DD0000">_SEQ\""</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE&nbsp;SEQUENCE&nbsp;\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">}</span><span style="color: #DD0000">_SEQ\"&nbsp;START&nbsp;WITH&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$value</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;INCREMENT&nbsp;BY&nbsp;1&nbsp;NOMAXVALUE&nbsp;NOCACHE"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Resets the sequence value of a table's primary key.
The sequence will be reset such that the primary key of the next new row inserted
will have the specified value or max value of a primary key plus one (i.e. sequence trimming).
<br/><br/>
Note, behavior of this method has changed since 1.1.14 release. Please refer to the following
issue for more details: https://github.com/yiisoft/yii/issues/2241</p>


<div class="detailHeader" id="resolveTableNames-detail">
resolveTableNames()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>resolveTableNames</b>(<?php echo CHtml::link('COciTableSchema', array('/site/doc', 'view' => 'COciTableSchema')); ?> $table, string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol"><?php echo CHtml::link('COciTableSchema', array('/site/doc', 'view' => 'COciTableSchema')); ?></td>
  <td class="paramDescCol">the table instance</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the unquoted table name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L133">yii\db\schema\oci\COciSchema.php#L133</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveTableNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parts</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'"'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">=</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">=</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDefaultSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">=</span><span style="color: #0000BB">$parts</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">=</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">schemaName</span><span style="color: #007700">=</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">===</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDefaultSchema</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$schemaName</span><span style="color: #007700">).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates various kinds of table names.</p>


<div class="detailHeader" id="setDefaultSchema-detail">
setDefaultSchema()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setDefaultSchema</b>(string $schema)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$schema</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">default schema.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\oci\COciSchema.php#L80">yii\db\schema\oci\COciSchema.php#L80</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setDefaultSchema</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_defaultSchema</span><span style="color: #007700">=</span><span style="color: #0000BB">$schema</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


