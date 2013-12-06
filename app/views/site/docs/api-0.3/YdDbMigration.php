<?php
$this->pageTitle = $this->pageHeading = 'YdDbMigration';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdDbMigration';
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
  <td>class YdDbMigration &raquo;
<?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdDbMigration.php">dressing/components/YdDbMigration.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdDbMigration</div>
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
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>Returns the currently active database connection.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
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
<tr class="inherited" id="addColumn">
  <td><?php echo CHtml::link('addColumn()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'addColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for adding a new DB column.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="addForeignKey">
  <td><?php echo CHtml::link('addForeignKey()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'addForeignKey-detail')); ?></td>
  <td>Builds a SQL statement for adding a foreign key constraint to an existing table.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="addPrimaryKey">
  <td><?php echo CHtml::link('addPrimaryKey()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'addPrimaryKey-detail')); ?></td>
  <td>Builds and executes a SQL statement for creating a primary key, supports composite primary keys.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="alterColumn">
  <td><?php echo CHtml::link('alterColumn()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'alterColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for changing the definition of a column.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
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
<tr class="inherited" id="createIndex">
  <td><?php echo CHtml::link('createIndex()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'createIndex-detail')); ?></td>
  <td>Builds and executes a SQL statement for creating a new index.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="createTable">
  <td><?php echo CHtml::link('createTable()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'createTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for creating a new DB table.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="delete">
  <td><?php echo CHtml::link('delete()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'delete-detail')); ?></td>
  <td>Creates and executes a DELETE SQL statement.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
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
<tr class="inherited" id="down">
  <td><?php echo CHtml::link('down()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'down-detail')); ?></td>
  <td>This method contains the logic to be executed when removing this migration.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="dropColumn">
  <td><?php echo CHtml::link('dropColumn()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for dropping a DB column.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="dropForeignKey">
  <td><?php echo CHtml::link('dropForeignKey()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropForeignKey-detail')); ?></td>
  <td>Builds a SQL statement for dropping a foreign key constraint.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="dropIndex">
  <td><?php echo CHtml::link('dropIndex()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropIndex-detail')); ?></td>
  <td>Builds and executes a SQL statement for dropping an index.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="dropPrimaryKey">
  <td><?php echo CHtml::link('dropPrimaryKey()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropPrimaryKey-detail')); ?></td>
  <td>Builds and executes a SQL statement for removing a primary key, supports composite primary keys.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="dropTable">
  <td><?php echo CHtml::link('dropTable()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'dropTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for dropping a DB table.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
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
<tr class="inherited" id="execute">
  <td><?php echo CHtml::link('execute()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'execute-detail')); ?></td>
  <td>Executes a SQL statement.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns the currently active database connection.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
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
<tr id="import">
  <td><?php echo CHtml::link('import()', array('/site/doc', 'view' => 'YdDbMigration', '#' => 'import-detail')); ?></td>
  <td></td>
  <td>YdDbMigration</td>
</tr>
<tr class="inherited" id="insert">
  <td><?php echo CHtml::link('insert()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'insert-detail')); ?></td>
  <td>Creates and executes an INSERT SQL statement.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="refreshTableSchema">
  <td><?php echo CHtml::link('refreshTableSchema()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'refreshTableSchema-detail')); ?></td>
  <td>Refreshed schema cache for a table</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="renameColumn">
  <td><?php echo CHtml::link('renameColumn()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'renameColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for renaming a column.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="renameTable">
  <td><?php echo CHtml::link('renameTable()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'renameTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for renaming a DB table.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="safeDown">
  <td><?php echo CHtml::link('safeDown()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'safeDown-detail')); ?></td>
  <td>This method contains the logic to be executed when removing this migration.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="safeUp">
  <td><?php echo CHtml::link('safeUp()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'safeUp-detail')); ?></td>
  <td>This method contains the logic to be executed when applying this migration.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="setDbConnection">
  <td><?php echo CHtml::link('setDbConnection()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'setDbConnection-detail')); ?></td>
  <td>Sets the currently active database connection.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="truncateTable">
  <td><?php echo CHtml::link('truncateTable()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'truncateTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for truncating a DB table.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="up">
  <td><?php echo CHtml::link('up()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'up-detail')); ?></td>
  <td>This method contains the logic to be executed when applying this migration.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
</tr>
<tr class="inherited" id="update">
  <td><?php echo CHtml::link('update()', array('/site/doc', 'view' => 'CDbMigration', '#' => 'update-detail')); ?></td>
  <td>Creates and executes an UPDATE SQL statement.</td>
  <td><?php echo CHtml::link('CDbMigration', array('/site/doc', 'view' => 'CDbMigration')); ?></td>
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
<tr id="q">
  <td><?php echo CHtml::link('q()', array('/site/doc', 'view' => 'YdDbMigration', '#' => 'q-detail')); ?></td>
  <td></td>
  <td>YdDbMigration</td>
</tr>
<tr id="qs">
  <td><?php echo CHtml::link('qs()', array('/site/doc', 'view' => 'YdDbMigration', '#' => 'qs-detail')); ?></td>
  <td></td>
  <td>YdDbMigration</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="import-detail">
import()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>import</b>(string $file)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdDbMigration.php#L52">dressing/components/YdDbMigration.php#L52</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">basePath&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/migrations/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pdo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pdoInstance</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'File&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;was&nbsp;not&nbsp;found'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sqlStream&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sqlStream&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$sqlStream</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newStream&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace_callback</span><span style="color: #007700">(</span><span style="color: #DD0000">"/\((.*)\)/"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$matches'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'return&nbsp;str_replace(";","&nbsp;$$$&nbsp;",$matches[0]);'</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$sqlStream</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sqlArray&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">";"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newStream</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$sqlArray&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">"&nbsp;$$$&nbsp;"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">";"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">";"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="q-detail">
q()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>q</b>($sql $sql)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">$sql</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdDbMigration.php#L21">dressing/components/YdDbMigration.php#L21</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">q</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbConnection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flush</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="qs-detail">
qs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>qs</b>($sql $sql, string $separator=';')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">$sql</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$separator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">of numbers of rows affected by the executions.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdDbMigration.php#L35">dressing/components/YdDbMigration.php#L35</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">qs</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$separator&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">';'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rs&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$qs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #0000BB">$separator</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$qs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$q</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$q</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rs</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">q</span><span style="color: #007700">(</span><span style="color: #0000BB">$q</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rs</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


