<?php
$this->pageTitle = $this->pageHeading = 'CDbMigration';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbMigration';
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
  <td><?php echo CHtml::link('system.db', array('/site/doc', '#' => 'system.db')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>abstract class CDbMigration &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdDbMigration', array('/site/doc', 'view' => 'YdDbMigration')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.6</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php">yii\db\CDbMigration.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbMigration is the base class for representing a database migration.
<br/><br/>
CDbMigration is designed to be used together with the "yiic migrate" command.
<br/><br/>
Each child class of CDbMigration represents an individual database migration which
is identified by the child class name.
<br/><br/>
Within each migration, the <?php echo CHtml::link('up', array('/site/doc', 'view' => 'CDbMigration', '#' => 'up')); ?> method contains the logic for "upgrading"
the database used in an application; while the <?php echo CHtml::link('down', array('/site/doc', 'view' => 'CDbMigration', '#' => 'down')); ?> method contains "downgrading"
logic. The "yiic migrate" command manages all available migrations in an application.
<br/><br/>
By overriding <?php echo CHtml::link('safeUp', array('/site/doc', 'view' => 'CDbMigration', '#' => 'safeUp')); ?> or <?php echo CHtml::link('safeDown', array('/site/doc', 'view' => 'CDbMigration', '#' => 'safeDown')); ?> methods instead of <?php echo CHtml::link('up', array('/site/doc', 'view' => 'CDbMigration', '#' => 'up')); ?> and <?php echo CHtml::link('down', array('/site/doc', 'view' => 'CDbMigration', '#' => 'down')); ?>
the migration logic will be wrapped with a DB transaction.
<br/><br/>
CDbMigration provides a set of convenient methods for manipulating database data and schema.
For example, the <?php echo CHtml::link('insert', array('/site/doc', 'view' => 'CDbMigration', '#' => 'insert')); ?> method can be used to easily insert a row of data into
a database table; the <?php echo CHtml::link('createTable', array('/site/doc', 'view' => 'CDbMigration', '#' => 'createTable')); ?> method can be used to create a database table.
Compared with the same methods in <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?>, these methods will display extra
information showing the method parameters and execution time, which may be useful when
applying migrations.</div>
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
<tr id="dbConnection">
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>Returns the currently active database connection.</td>
  <td>CDbMigration</td>
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
<tr id="addColumn">
  <td><?php echo CHtml::link('addColumn()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'addColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for adding a new DB column.</td>
  <td>CDbMigration</td>
</tr>
<tr id="addForeignKey">
  <td><?php echo CHtml::link('addForeignKey()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'addForeignKey-detail')); ?></td>
  <td>Builds a SQL statement for adding a foreign key constraint to an existing table.</td>
  <td>CDbMigration</td>
</tr>
<tr id="addPrimaryKey">
  <td><?php echo CHtml::link('addPrimaryKey()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'addPrimaryKey-detail')); ?></td>
  <td>Builds and executes a SQL statement for creating a primary key, supports composite primary keys.</td>
  <td>CDbMigration</td>
</tr>
<tr id="alterColumn">
  <td><?php echo CHtml::link('alterColumn()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'alterColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for changing the definition of a column.</td>
  <td>CDbMigration</td>
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
<tr id="createIndex">
  <td><?php echo CHtml::link('createIndex()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'createIndex-detail')); ?></td>
  <td>Builds and executes a SQL statement for creating a new index.</td>
  <td>CDbMigration</td>
</tr>
<tr id="createTable">
  <td><?php echo CHtml::link('createTable()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'createTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for creating a new DB table.</td>
  <td>CDbMigration</td>
</tr>
<tr id="delete">
  <td><?php echo CHtml::link('delete()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'delete-detail')); ?></td>
  <td>Creates and executes a DELETE SQL statement.</td>
  <td>CDbMigration</td>
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
<tr id="down">
  <td><?php echo CHtml::link('down()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'down-detail')); ?></td>
  <td>This method contains the logic to be executed when removing this migration.</td>
  <td>CDbMigration</td>
</tr>
<tr id="dropColumn">
  <td><?php echo CHtml::link('dropColumn()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for dropping a DB column.</td>
  <td>CDbMigration</td>
</tr>
<tr id="dropForeignKey">
  <td><?php echo CHtml::link('dropForeignKey()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropForeignKey-detail')); ?></td>
  <td>Builds a SQL statement for dropping a foreign key constraint.</td>
  <td>CDbMigration</td>
</tr>
<tr id="dropIndex">
  <td><?php echo CHtml::link('dropIndex()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropIndex-detail')); ?></td>
  <td>Builds and executes a SQL statement for dropping an index.</td>
  <td>CDbMigration</td>
</tr>
<tr id="dropPrimaryKey">
  <td><?php echo CHtml::link('dropPrimaryKey()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropPrimaryKey-detail')); ?></td>
  <td>Builds and executes a SQL statement for removing a primary key, supports composite primary keys.</td>
  <td>CDbMigration</td>
</tr>
<tr id="dropTable">
  <td><?php echo CHtml::link('dropTable()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for dropping a DB table.</td>
  <td>CDbMigration</td>
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
<tr id="execute">
  <td><?php echo CHtml::link('execute()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'execute-detail')); ?></td>
  <td>Executes a SQL statement.</td>
  <td>CDbMigration</td>
</tr>
<tr id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns the currently active database connection.</td>
  <td>CDbMigration</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
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
<tr id="insert">
  <td><?php echo CHtml::link('insert()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'insert-detail')); ?></td>
  <td>Creates and executes an INSERT SQL statement.</td>
  <td>CDbMigration</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="refreshTableSchema">
  <td><?php echo CHtml::link('refreshTableSchema()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'refreshTableSchema-detail')); ?></td>
  <td>Refreshed schema cache for a table</td>
  <td>CDbMigration</td>
</tr>
<tr id="renameColumn">
  <td><?php echo CHtml::link('renameColumn()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'renameColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for renaming a column.</td>
  <td>CDbMigration</td>
</tr>
<tr id="renameTable">
  <td><?php echo CHtml::link('renameTable()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'renameTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for renaming a DB table.</td>
  <td>CDbMigration</td>
</tr>
<tr id="safeDown">
  <td><?php echo CHtml::link('safeDown()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'safeDown-detail')); ?></td>
  <td>This method contains the logic to be executed when removing this migration.</td>
  <td>CDbMigration</td>
</tr>
<tr id="safeUp">
  <td><?php echo CHtml::link('safeUp()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'safeUp-detail')); ?></td>
  <td>This method contains the logic to be executed when applying this migration.</td>
  <td>CDbMigration</td>
</tr>
<tr id="setDbConnection">
  <td><?php echo CHtml::link('setDbConnection()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'setDbConnection-detail')); ?></td>
  <td>Sets the currently active database connection.</td>
  <td>CDbMigration</td>
</tr>
<tr id="truncateTable">
  <td><?php echo CHtml::link('truncateTable()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'truncateTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for truncating a DB table.</td>
  <td>CDbMigration</td>
</tr>
<tr id="up">
  <td><?php echo CHtml::link('up()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'up-detail')); ?></td>
  <td>This method contains the logic to be executed when applying this migration.</td>
  <td>CDbMigration</td>
</tr>
<tr id="update">
  <td><?php echo CHtml::link('update()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'update-detail')); ?></td>
  <td>Creates and executes an UPDATE SQL statement.</td>
  <td>CDbMigration</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="dbConnection-detail">
dbConnection<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <?php echo CHtml::link('<b>getDbConnection</b>', array('/site/doc', 'view' => 'CDbMigration', '#' => 'getDbConnection')); ?>()<br/>public void <?php echo CHtml::link('<b>setDbConnection</b>', array('/site/doc', 'view' => 'CDbMigration', '#' => 'setDbConnection')); ?>(<?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> $db)</div>

<p>Returns the currently active database connection.
By default, the 'db' application component will be returned and activated.
You can call <?php echo CHtml::link('setDbConnection', array('/site/doc', 'view' => 'CDbMigration', '#' => 'setDbConnection')); ?> to switch to a different database connection.
Methods such as <?php echo CHtml::link('insert', array('/site/doc', 'view' => 'CDbMigration', '#' => 'insert')); ?>, <?php echo CHtml::link('createTable', array('/site/doc', 'view' => 'CDbMigration', '#' => 'createTable')); ?> will use this database connection
to perform DB queries.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addColumn-detail">
addColumn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addColumn</b>(string $table, string $column, string $type)</div>
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
  <td class="paramDescCol">the column type. The getColumnType method will be invoked to convert abstract column type (if any)
into the physical one. Anything that is not recognized as abstract type will be kept in the generated SQL.
For example, 'string' will be turned into 'varchar(255)', while 'string not null' will become 'varchar(255) not null'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L282">yii\db\CDbMigration.php#L282</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;add&nbsp;column&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #DD0000">&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #DD0000">&nbsp;to&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for adding a new DB column.</p>


<div class="detailHeader" id="addForeignKey-detail">
addForeignKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addForeignKey</b>(string $name, string $table, string $columns, string $refTable, string $refColumns, string $delete=NULL, string $update=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the foreign key constraint.</td>
</tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table that the foreign key constraint will be added to.</td>
</tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the column to that the constraint will be added on. If there are multiple columns, separate them with commas.</td>
</tr>
<tr>
  <td class="paramNameCol">$refTable</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table that the foreign key references to.</td>
</tr>
<tr>
  <td class="paramNameCol">$refColumns</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the column that the foreign key references to. If there are multiple columns, separate them with commas.</td>
</tr>
<tr>
  <td class="paramNameCol">$delete</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the ON DELETE option. Most DBMS support these options: RESTRICT, CASCADE, NO ACTION, SET DEFAULT, SET NULL</td>
</tr>
<tr>
  <td class="paramNameCol">$update</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the ON UPDATE option. Most DBMS support these options: RESTRICT, CASCADE, NO ACTION, SET DEFAULT, SET NULL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L344">yii\db\CDbMigration.php#L344</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$refTable</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$refColumns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delete</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$update</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;add&nbsp;foreign&nbsp;key&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">:&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;(</span><span style="color: #0000BB">$columns</span><span style="color: #DD0000">)&nbsp;references&nbsp;</span><span style="color: #0000BB">$refTable</span><span style="color: #DD0000">&nbsp;(</span><span style="color: #0000BB">$refColumns</span><span style="color: #DD0000">)&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$refTable</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$refColumns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delete</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$update</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for adding a foreign key constraint to an existing table.
The method will properly quote the table and column names.</p>


<div class="detailHeader" id="addPrimaryKey-detail">
addPrimaryKey()
<span class="detailHeaderTag">
method
(available since v1.1.13)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addPrimaryKey</b>(string $name, string $table, string $columns)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the primary key constraint to add</td>
</tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the table to add primary key to</td>
</tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the column to utilise as primary key. If there are multiple columns, separate them with commas.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L414">yii\db\CDbMigration.php#L414</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$columns</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;alter&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;add&nbsp;constraint&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">&nbsp;primary&nbsp;key&nbsp;(</span><span style="color: #0000BB">$columns</span><span style="color: #DD0000">)&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$columns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for creating a primary key, supports composite primary keys.</p>


<div class="detailHeader" id="alterColumn-detail">
alterColumn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>alterColumn</b>(string $table, string $column, string $type)</div>
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
  <td class="paramDescCol">the new column type. The getColumnType method will be invoked to convert abstract column type (if any)
into the physical one. Anything that is not recognized as abstract type will be kept in the generated SQL.
For example, 'string' will be turned into 'varchar(255)', while 'string not null' will become 'varchar(255) not null'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L325">yii\db\CDbMigration.php#L325</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">alterColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;alter&nbsp;column&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #DD0000">&nbsp;in&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;to&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">alterColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for changing the definition of a column.</p>


<div class="detailHeader" id="createIndex-detail">
createIndex()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>createIndex</b>(string $name, string $table, string $column, boolean $unique=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the index. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table that the new index will be created for. The table name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column(s) that should be included in the index. If there are multiple columns, please separate them
by commas. The column names will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$unique</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to add UNIQUE constraint on the created index.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L373">yii\db\CDbMigration.php#L373</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$unique</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;create"</span><span style="color: #007700">.(</span><span style="color: #0000BB">$unique&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'&nbsp;unique'</span><span style="color: #007700">:</span><span style="color: #DD0000">''</span><span style="color: #007700">).</span><span style="color: #DD0000">"&nbsp;index&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">&nbsp;on&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;(</span><span style="color: #0000BB">$column</span><span style="color: #DD0000">)&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$unique</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for creating a new index.</p>


<div class="detailHeader" id="createTable-detail">
createTable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>createTable</b>(string $table, array $columns, string $options=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the table to be created. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the columns (name=>definition) in the new table.</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">additional SQL fragment that will be appended to the generated SQL.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L229">yii\db\CDbMigration.php#L229</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;create&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for creating a new DB table.
<br/><br/>
The columns in the new  table should be specified as name-definition pairs (e.g. 'name'=>'string'),
where name stands for a column name which will be properly quoted by the method, and definition
stands for the column type which can contain an abstract DB type.
The getColumnType method will be invoked to convert any abstract type into a physical one.
<br/><br/>
If a column is specified with definition only (e.g. 'PRIMARY KEY (name, type)'), it will be directly
inserted into the generated SQL.</p>


<div class="detailHeader" id="delete-detail">
delete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>delete</b>(string $table, mixed $conditions='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table where the data will be deleted from.</td>
</tr>
<tr>
  <td class="paramNameCol">$conditions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the conditions that will be put in the WHERE part. Please
refer to <?php echo CHtml::link('CDbCommand::where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> on how to specify conditions.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters to be bound to the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L206">yii\db\CDbMigration.php#L206</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;delete&nbsp;from&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates and executes a DELETE SQL statement.</p>


<div class="detailHeader" id="down-detail">
down()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>down</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">Returning false means, the migration will not be applied.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L74">yii\db\CDbMigration.php#L74</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">down</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$transaction</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">beginTransaction</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">safeDown</span><span style="color: #007700">()===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$transaction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rollback</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$transaction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commit</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Exception:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">().</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLine</span><span style="color: #007700">().</span><span style="color: #DD0000">")\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$transaction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rollback</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>This method contains the logic to be executed when removing this migration.
Child classes may override this method if the corresponding migrations can be removed.</p>


<div class="detailHeader" id="dropColumn-detail">
dropColumn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>dropColumn</b>(string $table, string $column)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table whose column is to be dropped. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the column to be dropped. The name will be properly quoted by the method.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L295">yii\db\CDbMigration.php#L295</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;drop&nbsp;column&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #DD0000">&nbsp;from&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for dropping a DB column.</p>


<div class="detailHeader" id="dropForeignKey-detail">
dropForeignKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>dropForeignKey</b>(string $name, string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the foreign key constraint to be dropped. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table whose foreign is to be dropped. The name will be properly quoted by the method.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L357">yii\db\CDbMigration.php#L357</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;drop&nbsp;foreign&nbsp;key&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">&nbsp;from&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for dropping a foreign key constraint.</p>


<div class="detailHeader" id="dropIndex-detail">
dropIndex()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>dropIndex</b>(string $name, string $table)</div>
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
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L386">yii\db\CDbMigration.php#L386</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;drop&nbsp;index&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for dropping an index.</p>


<div class="detailHeader" id="dropPrimaryKey-detail">
dropPrimaryKey()
<span class="detailHeaderTag">
method
(available since v1.1.13)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>dropPrimaryKey</b>(string $name, string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the constraint to remove</td>
</tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the table to remove primary key from</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L428">yii\db\CDbMigration.php#L428</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;alter&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;drop&nbsp;primary&nbsp;key&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for removing a primary key, supports composite primary keys.</p>


<div class="detailHeader" id="dropTable-detail">
dropTable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>dropTable</b>(string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be dropped. The name will be properly quoted by the method.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L254">yii\db\CDbMigration.php#L254</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;drop&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for dropping a DB table.</p>


<div class="detailHeader" id="execute-detail">
execute()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>execute</b>(string $sql, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement to be executed</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">input parameters (name=>value) for the SQL execution. See <?php echo CHtml::link('CDbCommand::execute', array('/site/doc', 'view' => 'CDbCommand', '#' => 'execute')); ?> for more details.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L160">yii\db\CDbMigration.php#L160</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;execute&nbsp;SQL:&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Executes a SQL statement.
This method executes the specified SQL statement using <?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dbConnection')); ?>.</p>


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
  <td class="paramDescCol">the currently active database connection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L132">yii\db\CDbMigration.php#L132</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #DD0000">'db'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbConnection</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'The&nbsp;"db"&nbsp;application&nbsp;component&nbsp;must&nbsp;be&nbsp;configured&nbsp;to&nbsp;be&nbsp;a&nbsp;CDbConnection&nbsp;object.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the currently active database connection.
By default, the 'db' application component will be returned and activated.
You can call <?php echo CHtml::link('setDbConnection', array('/site/doc', 'view' => 'CDbMigration', '#' => 'setDbConnection')); ?> to switch to a different database connection.
Methods such as <?php echo CHtml::link('insert', array('/site/doc', 'view' => 'CDbMigration', '#' => 'insert')); ?>, <?php echo CHtml::link('createTable', array('/site/doc', 'view' => 'CDbMigration', '#' => 'createTable')); ?> will use this database connection
to perform DB queries.</p>


<div class="detailHeader" id="insert-detail">
insert()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>insert</b>(string $table, array $columns)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table that new rows will be inserted into.</td>
</tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the column data (name=>value) to be inserted into the table.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L174">yii\db\CDbMigration.php#L174</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;insert&nbsp;into&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates and executes an INSERT SQL statement.
The method will properly escape the column names, and bind the values to be inserted.</p>


<div class="detailHeader" id="refreshTableSchema-detail">
refreshTableSchema()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>refreshTableSchema</b>(string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the table to refresh</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L399">yii\db\CDbMigration.php#L399</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">refreshTableSchema</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;refresh&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;schema&nbsp;cache&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Refreshed schema cache for a table</p>


<div class="detailHeader" id="renameColumn-detail">
renameColumn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renameColumn</b>(string $table, string $name, string $newName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table whose column is to be renamed. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the old name of the column. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$newName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the new name of the column. The name will be properly quoted by the method.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L309">yii\db\CDbMigration.php#L309</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renameColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;rename&nbsp;column&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">&nbsp;in&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;to&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renameColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for renaming a column.</p>


<div class="detailHeader" id="renameTable-detail">
renameTable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renameTable</b>(string $table, string $newName)</div>
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
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L242">yii\db\CDbMigration.php#L242</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renameTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;rename&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;to&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renameTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for renaming a DB table.</p>


<div class="detailHeader" id="safeDown-detail">
safeDown()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>safeDown</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">Returning false means, the migration will not be applied and
the transaction will be rolled back.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L119">yii\db\CDbMigration.php#L119</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">safeDown</span><span style="color: #007700">()<br />{<br />}</span>
</span>
</code></div>
</div>
<p>This method contains the logic to be executed when removing this migration.
This method differs from <?php echo CHtml::link('down', array('/site/doc', 'view' => 'CDbMigration', '#' => 'down')); ?> in that the DB logic implemented here will
be enclosed within a DB transaction.
Child classes may implement this method instead of <?php echo CHtml::link('up', array('/site/doc', 'view' => 'CDbMigration', '#' => 'up')); ?> if the DB logic
needs to be within a transaction.</p>


<div class="detailHeader" id="safeUp-detail">
safeUp()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>safeUp</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">Returning false means, the migration will not be applied and
the transaction will be rolled back.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L105">yii\db\CDbMigration.php#L105</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">safeUp</span><span style="color: #007700">()<br />{<br />}</span>
</span>
</code></div>
</div>
<p>This method contains the logic to be executed when applying this migration.
This method differs from <?php echo CHtml::link('up', array('/site/doc', 'view' => 'CDbMigration', '#' => 'up')); ?> in that the DB logic implemented here will
be enclosed within a DB transaction.
Child classes may implement this method instead of <?php echo CHtml::link('up', array('/site/doc', 'view' => 'CDbMigration', '#' => 'up')); ?> if the DB logic
needs to be within a transaction.</p>


<div class="detailHeader" id="setDbConnection-detail">
setDbConnection()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setDbConnection</b>(<?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> $db)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$db</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol">the database connection component</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L148">yii\db\CDbMigration.php#L148</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setDbConnection</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the currently active database connection.
The database connection will be used by the methods such as <?php echo CHtml::link('insert', array('/site/doc', 'view' => 'CDbMigration', '#' => 'insert')); ?>, <?php echo CHtml::link('createTable', array('/site/doc', 'view' => 'CDbMigration', '#' => 'createTable')); ?>.</p>


<div class="detailHeader" id="truncateTable-detail">
truncateTable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>truncateTable</b>(string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be truncated. The name will be properly quoted by the method.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L266">yii\db\CDbMigration.php#L266</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">truncateTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;truncate&nbsp;table&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">truncateTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for truncating a DB table.</p>


<div class="detailHeader" id="up-detail">
up()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>up</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">Returning false means, the migration will not be applied.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L48">yii\db\CDbMigration.php#L48</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">up</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$transaction</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">beginTransaction</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">safeUp</span><span style="color: #007700">()===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$transaction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rollback</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$transaction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commit</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Exception:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">().</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">().</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLine</span><span style="color: #007700">().</span><span style="color: #DD0000">")\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$transaction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rollback</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>This method contains the logic to be executed when applying this migration.
Child classes may implement this method to provide actual migration logic.</p>


<div class="detailHeader" id="update-detail">
update()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>update</b>(string $table, array $columns, mixed $conditions='', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be updated.</td>
</tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the column data (name=>value) to be updated.</td>
</tr>
<tr>
  <td class="paramNameCol">$conditions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the conditions that will be put in the WHERE part. Please
refer to <?php echo CHtml::link('CDbCommand::where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> on how to specify conditions.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters to be bound to the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbMigration.php#L191">yii\db\CDbMigration.php#L191</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">update</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;update&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #DD0000">&nbsp;..."</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">update</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;done&nbsp;(time:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%.3f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">$time</span><span style="color: #007700">).</span><span style="color: #DD0000">"s)\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates and executes an UPDATE SQL statement.
The method will properly escape the column names and bind the values to be updated.</p>


