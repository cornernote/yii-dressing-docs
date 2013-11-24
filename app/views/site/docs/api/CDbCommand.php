<?php
$this->pageTitle = $this->pageHeading = 'CDbCommand';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbCommand';
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
  <td>class CDbCommand &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php">yii\db\CDbCommand.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbCommand represents an SQL statement to execute against a database.
<br/><br/>
It is usually created by calling <?php echo CHtml::link('CDbConnection::createCommand', array('/site/doc', 'view' => 'CDbConnection', '#' => 'createCommand')); ?>.
The SQL statement to be executed may be set via <?php echo CHtml::link('Text', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setText')); ?>.
<br/><br/>
To execute a non-query SQL (such as insert, delete, update), call
<?php echo CHtml::link('execute', array('/site/doc', 'view' => 'CDbCommand', '#' => 'execute')); ?>. To execute an SQL statement that returns result data set
(such as SELECT), use <?php echo CHtml::link('query', array('/site/doc', 'view' => 'CDbCommand', '#' => 'query')); ?> or its convenient versions <?php echo CHtml::link('queryRow', array('/site/doc', 'view' => 'CDbCommand', '#' => 'queryRow')); ?>,
<?php echo CHtml::link('queryColumn', array('/site/doc', 'view' => 'CDbCommand', '#' => 'queryColumn')); ?>, or <?php echo CHtml::link('queryScalar', array('/site/doc', 'view' => 'CDbCommand', '#' => 'queryScalar')); ?>.
<br/><br/>
If an SQL statement returns results (such as a SELECT SQL), the results
can be accessed via the returned <?php echo CHtml::link('CDbDataReader', array('/site/doc', 'view' => 'CDbDataReader')); ?>.
<br/><br/>
CDbCommand supports SQL statement preparation and parameter binding.
Call <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> to bind a PHP variable to a parameter in SQL.
Call <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?> to bind a value to an SQL parameter.
When binding a parameter, the SQL statement is automatically prepared.
You may also call <?php echo CHtml::link('prepare', array('/site/doc', 'view' => 'CDbCommand', '#' => 'prepare')); ?> to explicitly prepare an SQL statement.
<br/><br/>
Starting from version 1.1.6, CDbCommand can also be used as a query builder
that builds a SQL statement from code fragments. For example,
<pre>
$user = Yii::app()-&gt;db-&gt;createCommand()
    -&gt;select('username, password')
    -&gt;from('tbl_user')
    -&gt;where('id=:id', array(':id'=&gt;1))
    -&gt;queryRow();
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
<tr id="connection">
  <td><?php echo CHtml::link('connection', array('/site/doc', 'view' => 'CDbCommand', '#' => 'connection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>the connection associated with this command</td>
  <td>CDbCommand</td>
</tr>
<tr id="distinct">
  <td><?php echo CHtml::link('distinct', array('/site/doc', 'view' => 'CDbCommand', '#' => 'distinct-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether SELECT DISTINCT should be used.</td>
  <td>CDbCommand</td>
</tr>
<tr id="from">
  <td><?php echo CHtml::link('from', array('/site/doc', 'view' => 'CDbCommand', '#' => 'from-detail')); ?></td>
  <td>string</td>
  <td>Returns the FROM part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="group">
  <td><?php echo CHtml::link('group', array('/site/doc', 'view' => 'CDbCommand', '#' => 'group-detail')); ?></td>
  <td>string</td>
  <td>Returns the GROUP BY part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="having">
  <td><?php echo CHtml::link('having', array('/site/doc', 'view' => 'CDbCommand', '#' => 'having-detail')); ?></td>
  <td>string</td>
  <td>Returns the HAVING part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="join">
  <td><?php echo CHtml::link('join', array('/site/doc', 'view' => 'CDbCommand', '#' => 'join-detail')); ?></td>
  <td>mixed</td>
  <td>Returns the join part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="limit">
  <td><?php echo CHtml::link('limit', array('/site/doc', 'view' => 'CDbCommand', '#' => 'limit-detail')); ?></td>
  <td>string</td>
  <td>Returns the LIMIT part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="offset">
  <td><?php echo CHtml::link('offset', array('/site/doc', 'view' => 'CDbCommand', '#' => 'offset-detail')); ?></td>
  <td>string</td>
  <td>Returns the OFFSET part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="order">
  <td><?php echo CHtml::link('order', array('/site/doc', 'view' => 'CDbCommand', '#' => 'order-detail')); ?></td>
  <td>string</td>
  <td>Returns the ORDER BY part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'CDbCommand', '#' => 'params-detail')); ?></td>
  <td>array</td>
  <td>the parameters (name=>value) to be bound to the current query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="pdoStatement">
  <td><?php echo CHtml::link('pdoStatement', array('/site/doc', 'view' => 'CDbCommand', '#' => 'pdoStatement-detail')); ?></td>
  <td>PDOStatement</td>
  <td>the underlying PDOStatement for this command
It could be null if the statement is not prepared yet.</td>
  <td>CDbCommand</td>
</tr>
<tr id="select">
  <td><?php echo CHtml::link('select', array('/site/doc', 'view' => 'CDbCommand', '#' => 'select-detail')); ?></td>
  <td>string</td>
  <td>Returns the SELECT part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="text">
  <td><?php echo CHtml::link('text', array('/site/doc', 'view' => 'CDbCommand', '#' => 'text-detail')); ?></td>
  <td>string</td>
  <td>the SQL statement to be executed</td>
  <td>CDbCommand</td>
</tr>
<tr id="union">
  <td><?php echo CHtml::link('union', array('/site/doc', 'view' => 'CDbCommand', '#' => 'union-detail')); ?></td>
  <td>mixed</td>
  <td>Returns the UNION part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="where">
  <td><?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where-detail')); ?></td>
  <td>string</td>
  <td>Returns the WHERE part in the query.</td>
  <td>CDbCommand</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CDbCommand', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CDbCommand</td>
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
<tr id="__sleep">
  <td><?php echo CHtml::link('__sleep()', array('/site/doc', 'view' => 'CDbCommand', '#' => '__sleep-detail')); ?></td>
  <td>Set the statement to null when serializing.</td>
  <td>CDbCommand</td>
</tr>
<tr class="inherited" id="__unset">
  <td><?php echo CHtml::link('__unset()', array('/site/doc', 'view' => 'CComponent', '#' => '__unset-detail')); ?></td>
  <td>Sets a component property to be null.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="addColumn">
  <td><?php echo CHtml::link('addColumn()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'addColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for adding a new DB column.</td>
  <td>CDbCommand</td>
</tr>
<tr id="addForeignKey">
  <td><?php echo CHtml::link('addForeignKey()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'addForeignKey-detail')); ?></td>
  <td>Builds a SQL statement for adding a foreign key constraint to an existing table.</td>
  <td>CDbCommand</td>
</tr>
<tr id="addPrimaryKey">
  <td><?php echo CHtml::link('addPrimaryKey()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'addPrimaryKey-detail')); ?></td>
  <td>Builds a SQL statement for creating a primary key constraint.</td>
  <td>CDbCommand</td>
</tr>
<tr id="alterColumn">
  <td><?php echo CHtml::link('alterColumn()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'alterColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for changing the definition of a column.</td>
  <td>CDbCommand</td>
</tr>
<tr id="andWhere">
  <td><?php echo CHtml::link('andWhere()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'andWhere-detail')); ?></td>
  <td>Appends given condition to the existing WHERE part of the query with 'AND' operator.</td>
  <td>CDbCommand</td>
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
<tr id="bindParam">
  <td><?php echo CHtml::link('bindParam()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam-detail')); ?></td>
  <td>Binds a parameter to the SQL statement to be executed.</td>
  <td>CDbCommand</td>
</tr>
<tr id="bindValue">
  <td><?php echo CHtml::link('bindValue()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue-detail')); ?></td>
  <td>Binds a value to a parameter.</td>
  <td>CDbCommand</td>
</tr>
<tr id="bindValues">
  <td><?php echo CHtml::link('bindValues()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValues-detail')); ?></td>
  <td>Binds a list of values to the corresponding parameters.</td>
  <td>CDbCommand</td>
</tr>
<tr id="buildQuery">
  <td><?php echo CHtml::link('buildQuery()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'buildQuery-detail')); ?></td>
  <td>Builds a SQL SELECT statement from the given query specification.</td>
  <td>CDbCommand</td>
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
<tr id="cancel">
  <td><?php echo CHtml::link('cancel()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'cancel-detail')); ?></td>
  <td>Cancels the execution of the SQL statement.</td>
  <td>CDbCommand</td>
</tr>
<tr id="createIndex">
  <td><?php echo CHtml::link('createIndex()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'createIndex-detail')); ?></td>
  <td>Builds and executes a SQL statement for creating a new index.</td>
  <td>CDbCommand</td>
</tr>
<tr id="createTable">
  <td><?php echo CHtml::link('createTable()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'createTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for creating a new DB table.</td>
  <td>CDbCommand</td>
</tr>
<tr id="crossJoin">
  <td><?php echo CHtml::link('crossJoin()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'crossJoin-detail')); ?></td>
  <td>Appends a CROSS JOIN part to the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="delete">
  <td><?php echo CHtml::link('delete()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'delete-detail')); ?></td>
  <td>Creates and executes a DELETE SQL statement.</td>
  <td>CDbCommand</td>
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
<tr id="dropColumn">
  <td><?php echo CHtml::link('dropColumn()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'dropColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for dropping a DB column.</td>
  <td>CDbCommand</td>
</tr>
<tr id="dropForeignKey">
  <td><?php echo CHtml::link('dropForeignKey()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'dropForeignKey-detail')); ?></td>
  <td>Builds a SQL statement for dropping a foreign key constraint.</td>
  <td>CDbCommand</td>
</tr>
<tr id="dropIndex">
  <td><?php echo CHtml::link('dropIndex()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'dropIndex-detail')); ?></td>
  <td>Builds and executes a SQL statement for dropping an index.</td>
  <td>CDbCommand</td>
</tr>
<tr id="dropPrimaryKey">
  <td><?php echo CHtml::link('dropPrimaryKey()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'dropPrimaryKey-detail')); ?></td>
  <td>Builds a SQL statement for dropping a primary key constraint.</td>
  <td>CDbCommand</td>
</tr>
<tr id="dropTable">
  <td><?php echo CHtml::link('dropTable()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'dropTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for dropping a DB table.</td>
  <td>CDbCommand</td>
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
  <td><?php echo CHtml::link('execute()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'execute-detail')); ?></td>
  <td>Executes the SQL statement.</td>
  <td>CDbCommand</td>
</tr>
<tr id="from()">
  <td><?php echo CHtml::link('from()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'from()-detail')); ?></td>
  <td>Sets the FROM part of the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getConnection">
  <td><?php echo CHtml::link('getConnection()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getConnection-detail')); ?></td>
  <td>Returns the connection associated with this command</td>
  <td>CDbCommand</td>
</tr>
<tr id="getDistinct">
  <td><?php echo CHtml::link('getDistinct()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getDistinct-detail')); ?></td>
  <td>Returns a value indicating whether SELECT DISTINCT should be used.</td>
  <td>CDbCommand</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getFrom">
  <td><?php echo CHtml::link('getFrom()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getFrom-detail')); ?></td>
  <td>Returns the FROM part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getGroup">
  <td><?php echo CHtml::link('getGroup()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getGroup-detail')); ?></td>
  <td>Returns the GROUP BY part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getHaving">
  <td><?php echo CHtml::link('getHaving()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getHaving-detail')); ?></td>
  <td>Returns the HAVING part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getJoin">
  <td><?php echo CHtml::link('getJoin()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getJoin-detail')); ?></td>
  <td>Returns the join part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getLimit">
  <td><?php echo CHtml::link('getLimit()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getLimit-detail')); ?></td>
  <td>Returns the LIMIT part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getOffset">
  <td><?php echo CHtml::link('getOffset()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getOffset-detail')); ?></td>
  <td>Returns the OFFSET part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getOrder">
  <td><?php echo CHtml::link('getOrder()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getOrder-detail')); ?></td>
  <td>Returns the ORDER BY part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getPdoStatement">
  <td><?php echo CHtml::link('getPdoStatement()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getPdoStatement-detail')); ?></td>
  <td>Returns the underlying PDOStatement for this command
It could be null if the statement is not prepared yet.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getSelect">
  <td><?php echo CHtml::link('getSelect()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getSelect-detail')); ?></td>
  <td>Returns the SELECT part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getText">
  <td><?php echo CHtml::link('getText()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getText-detail')); ?></td>
  <td>Returns the SQL statement to be executed</td>
  <td>CDbCommand</td>
</tr>
<tr id="getUnion">
  <td><?php echo CHtml::link('getUnion()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getUnion-detail')); ?></td>
  <td>Returns the UNION part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="getWhere">
  <td><?php echo CHtml::link('getWhere()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getWhere-detail')); ?></td>
  <td>Returns the WHERE part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="group()">
  <td><?php echo CHtml::link('group()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'group()-detail')); ?></td>
  <td>Sets the GROUP BY part of the query.</td>
  <td>CDbCommand</td>
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
<tr id="having()">
  <td><?php echo CHtml::link('having()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'having()-detail')); ?></td>
  <td>Sets the HAVING part of the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="insert">
  <td><?php echo CHtml::link('insert()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'insert-detail')); ?></td>
  <td>Creates and executes an INSERT SQL statement.</td>
  <td>CDbCommand</td>
</tr>
<tr id="join()">
  <td><?php echo CHtml::link('join()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'join()-detail')); ?></td>
  <td>Appends an INNER JOIN part to the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="leftJoin">
  <td><?php echo CHtml::link('leftJoin()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'leftJoin-detail')); ?></td>
  <td>Appends a LEFT OUTER JOIN part to the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="limit()">
  <td><?php echo CHtml::link('limit()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'limit()-detail')); ?></td>
  <td>Sets the LIMIT part of the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="naturalJoin">
  <td><?php echo CHtml::link('naturalJoin()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'naturalJoin-detail')); ?></td>
  <td>Appends a NATURAL JOIN part to the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="offset()">
  <td><?php echo CHtml::link('offset()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'offset()-detail')); ?></td>
  <td>Sets the OFFSET part of the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="orWhere">
  <td><?php echo CHtml::link('orWhere()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'orWhere-detail')); ?></td>
  <td>Appends given condition to the existing WHERE part of the query with 'OR' operator.</td>
  <td>CDbCommand</td>
</tr>
<tr id="order()">
  <td><?php echo CHtml::link('order()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'order()-detail')); ?></td>
  <td>Sets the ORDER BY part of the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="prepare">
  <td><?php echo CHtml::link('prepare()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'prepare-detail')); ?></td>
  <td>Prepares the SQL statement to be executed.</td>
  <td>CDbCommand</td>
</tr>
<tr id="query">
  <td><?php echo CHtml::link('query()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'query-detail')); ?></td>
  <td>Executes the SQL statement and returns query result.</td>
  <td>CDbCommand</td>
</tr>
<tr id="queryAll">
  <td><?php echo CHtml::link('queryAll()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'queryAll-detail')); ?></td>
  <td>Executes the SQL statement and returns all rows.</td>
  <td>CDbCommand</td>
</tr>
<tr id="queryColumn">
  <td><?php echo CHtml::link('queryColumn()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'queryColumn-detail')); ?></td>
  <td>Executes the SQL statement and returns the first column of the result.</td>
  <td>CDbCommand</td>
</tr>
<tr id="queryRow">
  <td><?php echo CHtml::link('queryRow()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'queryRow-detail')); ?></td>
  <td>Executes the SQL statement and returns the first row of the result.</td>
  <td>CDbCommand</td>
</tr>
<tr id="queryScalar">
  <td><?php echo CHtml::link('queryScalar()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'queryScalar-detail')); ?></td>
  <td>Executes the SQL statement and returns the value of the first column in the first row of data.</td>
  <td>CDbCommand</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="renameColumn">
  <td><?php echo CHtml::link('renameColumn()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'renameColumn-detail')); ?></td>
  <td>Builds and executes a SQL statement for renaming a column.</td>
  <td>CDbCommand</td>
</tr>
<tr id="renameTable">
  <td><?php echo CHtml::link('renameTable()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'renameTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for renaming a DB table.</td>
  <td>CDbCommand</td>
</tr>
<tr id="reset">
  <td><?php echo CHtml::link('reset()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'reset-detail')); ?></td>
  <td>Cleans up the command and prepares for building a new query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="rightJoin">
  <td><?php echo CHtml::link('rightJoin()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'rightJoin-detail')); ?></td>
  <td>Appends a RIGHT OUTER JOIN part to the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="select()">
  <td><?php echo CHtml::link('select()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'select()-detail')); ?></td>
  <td>Sets the SELECT part of the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="selectDistinct">
  <td><?php echo CHtml::link('selectDistinct()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'selectDistinct-detail')); ?></td>
  <td>Sets the SELECT part of the query with the DISTINCT flag turned on.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setDistinct">
  <td><?php echo CHtml::link('setDistinct()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setDistinct-detail')); ?></td>
  <td>Sets a value indicating whether SELECT DISTINCT should be used.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setFetchMode">
  <td><?php echo CHtml::link('setFetchMode()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setFetchMode-detail')); ?></td>
  <td>Set the default fetch mode for this statement</td>
  <td>CDbCommand</td>
</tr>
<tr id="setFrom">
  <td><?php echo CHtml::link('setFrom()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setFrom-detail')); ?></td>
  <td>Sets the FROM part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setGroup">
  <td><?php echo CHtml::link('setGroup()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setGroup-detail')); ?></td>
  <td>Sets the GROUP BY part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setHaving">
  <td><?php echo CHtml::link('setHaving()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setHaving-detail')); ?></td>
  <td>Sets the HAVING part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setJoin">
  <td><?php echo CHtml::link('setJoin()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setJoin-detail')); ?></td>
  <td>Sets the join part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setLimit">
  <td><?php echo CHtml::link('setLimit()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setLimit-detail')); ?></td>
  <td>Sets the LIMIT part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setOffset">
  <td><?php echo CHtml::link('setOffset()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setOffset-detail')); ?></td>
  <td>Sets the OFFSET part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setOrder">
  <td><?php echo CHtml::link('setOrder()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setOrder-detail')); ?></td>
  <td>Sets the ORDER BY part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setSelect">
  <td><?php echo CHtml::link('setSelect()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setSelect-detail')); ?></td>
  <td>Sets the SELECT part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setText">
  <td><?php echo CHtml::link('setText()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setText-detail')); ?></td>
  <td>Specifies the SQL statement to be executed.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setUnion">
  <td><?php echo CHtml::link('setUnion()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setUnion-detail')); ?></td>
  <td>Sets the UNION part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="setWhere">
  <td><?php echo CHtml::link('setWhere()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setWhere-detail')); ?></td>
  <td>Sets the WHERE part in the query.</td>
  <td>CDbCommand</td>
</tr>
<tr id="truncateTable">
  <td><?php echo CHtml::link('truncateTable()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'truncateTable-detail')); ?></td>
  <td>Builds and executes a SQL statement for truncating a DB table.</td>
  <td>CDbCommand</td>
</tr>
<tr id="union()">
  <td><?php echo CHtml::link('union()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'union()-detail')); ?></td>
  <td>Appends a SQL statement using UNION operator.</td>
  <td>CDbCommand</td>
</tr>
<tr id="update">
  <td><?php echo CHtml::link('update()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'update-detail')); ?></td>
  <td>Creates and executes an UPDATE SQL statement.</td>
  <td>CDbCommand</td>
</tr>
<tr id="where()">
  <td><?php echo CHtml::link('where()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where()-detail')); ?></td>
  <td>Sets the WHERE part of the query.</td>
  <td>CDbCommand</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="connection-detail">
connection<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <?php echo CHtml::link('<b>getConnection</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getConnection')); ?>()</div>

<p>the connection associated with this command</p>


<div class="detailHeader" id="distinct-detail">
distinct<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getDistinct</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getDistinct')); ?>()<br/>public void <?php echo CHtml::link('<b>setDistinct</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setDistinct')); ?>(boolean $value)</div>

<p>Returns a value indicating whether SELECT DISTINCT should be used.</p>


<div class="detailHeader" id="from-detail">
from<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getFrom</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getFrom')); ?>()<br/>public void <?php echo CHtml::link('<b>setFrom</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setFrom')); ?>(mixed $value)</div>

<p>Returns the FROM part in the query.</p>


<div class="detailHeader" id="group-detail">
group<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getGroup</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getGroup')); ?>()<br/>public void <?php echo CHtml::link('<b>setGroup</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setGroup')); ?>(mixed $value)</div>

<p>Returns the GROUP BY part in the query.</p>


<div class="detailHeader" id="having-detail">
having<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getHaving</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getHaving')); ?>()<br/>public void <?php echo CHtml::link('<b>setHaving</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setHaving')); ?>(mixed $value)</div>

<p>Returns the HAVING part in the query.</p>


<div class="detailHeader" id="join-detail">
join<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public mixed <?php echo CHtml::link('<b>getJoin</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getJoin')); ?>()<br/>public void <?php echo CHtml::link('<b>setJoin</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setJoin')); ?>(mixed $value)</div>

<p>Returns the join part in the query.</p>


<div class="detailHeader" id="limit-detail">
limit<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLimit</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getLimit')); ?>()<br/>public void <?php echo CHtml::link('<b>setLimit</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setLimit')); ?>(integer $value)</div>

<p>Returns the LIMIT part in the query.</p>


<div class="detailHeader" id="offset-detail">
offset<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getOffset</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getOffset')); ?>()<br/>public void <?php echo CHtml::link('<b>setOffset</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setOffset')); ?>(integer $value)</div>

<p>Returns the OFFSET part in the query.</p>


<div class="detailHeader" id="order-detail">
order<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getOrder</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getOrder')); ?>()<br/>public void <?php echo CHtml::link('<b>setOrder</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setOrder')); ?>(mixed $value)</div>

<p>Returns the ORDER BY part in the query.</p>


<div class="detailHeader" id="params-detail">
params<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public array <b>$params</b>;</div>

<p>the parameters (name=>value) to be bound to the current query.</p>


<div class="detailHeader" id="pdoStatement-detail">
pdoStatement<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public PDOStatement <?php echo CHtml::link('<b>getPdoStatement</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getPdoStatement')); ?>()</div>

<p>the underlying PDOStatement for this command
It could be null if the statement is not prepared yet.</p>


<div class="detailHeader" id="select-detail">
select<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getSelect</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getSelect')); ?>()<br/>public void <?php echo CHtml::link('<b>setSelect</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setSelect')); ?>(mixed $value)</div>

<p>Returns the SELECT part in the query.</p>


<div class="detailHeader" id="text-detail">
text<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getText</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getText')); ?>()<br/>public CDbCommand <?php echo CHtml::link('<b>setText</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setText')); ?>(string $value)</div>

<p>the SQL statement to be executed</p>


<div class="detailHeader" id="union-detail">
union<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public mixed <?php echo CHtml::link('<b>getUnion</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getUnion')); ?>()<br/>public void <?php echo CHtml::link('<b>setUnion</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setUnion')); ?>(mixed $value)</div>

<p>Returns the UNION part in the query.</p>


<div class="detailHeader" id="where-detail">
where<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getWhere</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'getWhere')); ?>()<br/>public void <?php echo CHtml::link('<b>setWhere</b>', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setWhere')); ?>(mixed $value)</div>

<p>Returns the WHERE part in the query.</p>


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
public void <b>__construct</b>(<?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> $connection, mixed $query=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$connection</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol">the database connection</td>
</tr>
<tr>
  <td class="paramNameCol">$query</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the DB query to be executed. This can be either
a string representing a SQL statement, or an array whose name-value pairs
will be used to set the corresponding properties of the created command object.
<br/><br/>
For example, you can pass in either <code>'SELECT * FROM tbl_user'</code>
or <code>array('select'=>'*', 'from'=>'tbl_user')</code>. They are equivalent
in terms of the final query result.
<br/><br/>
When passing the query as an array, the following properties are commonly set:
<?php echo CHtml::link('select', array('/site/doc', 'view' => 'CDbCommand', '#' => 'select')); ?>, <?php echo CHtml::link('distinct', array('/site/doc', 'view' => 'CDbCommand', '#' => 'distinct')); ?>, <?php echo CHtml::link('from', array('/site/doc', 'view' => 'CDbCommand', '#' => 'from')); ?>, <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?>, <?php echo CHtml::link('join', array('/site/doc', 'view' => 'CDbCommand', '#' => 'join')); ?>,
<?php echo CHtml::link('group', array('/site/doc', 'view' => 'CDbCommand', '#' => 'group')); ?>, <?php echo CHtml::link('having', array('/site/doc', 'view' => 'CDbCommand', '#' => 'having')); ?>, <?php echo CHtml::link('order', array('/site/doc', 'view' => 'CDbCommand', '#' => 'order')); ?>, <?php echo CHtml::link('limit', array('/site/doc', 'view' => 'CDbCommand', '#' => 'limit')); ?>, <?php echo CHtml::link('offset', array('/site/doc', 'view' => 'CDbCommand', '#' => 'offset')); ?> and
<?php echo CHtml::link('union', array('/site/doc', 'view' => 'CDbCommand', '#' => 'union')); ?>. Please refer to the setter of each of these properties for details
about valid property values. This feature has been available since version 1.1.6.
<br/><br/>
Since 1.1.7 it is possible to use a specific mode of data fetching by setting
<?php echo CHtml::link('FetchMode', array('/site/doc', 'view' => 'CDbCommand', '#' => 'setFetchMode')); ?>. See <a href="http://www.php.net/manual/en/function.PDOStatement-setFetchMode.php">http://www.php.net/manual/en/function.PDOStatement-setFetchMode.php</a>
for more details.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L100">yii\db\CDbCommand.php#L100</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">CDbConnection&nbsp;$connection</span><span style="color: #007700">,</span><span style="color: #0000BB">$query</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">=</span><span style="color: #0000BB">$connection</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$query&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L116">yii\db\CDbCommand.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__sleep</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">get_object_vars</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Set the statement to null when serializing.</p>


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
public integer <b>addColumn</b>(string $table, string $column, string $type)</div>
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
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1375">yii\db\CDbCommand.php#L1375</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for adding a new DB column.</p>


<div class="detailHeader" id="addForeignKey-detail">
addForeignKey()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>addForeignKey</b>(string $name, string $table, string $columns, string $refTable, string $refColumns, string $delete=NULL, string $update=NULL)</div>
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
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1433">yii\db\CDbCommand.php#L1433</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$refTable</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$refColumns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delete</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$update</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$refTable</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$refColumns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delete</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$update</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
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
public integer <b>addPrimaryKey</b>(string $name, string $table, string $columns)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the primary key constraint to be created. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table who will be inheriting the primary key. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column/s where the primary key will be effected. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1594">yii\db\CDbCommand.php#L1594</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$columns</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$columns</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for creating a primary key constraint.</p>


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
public integer <b>alterColumn</b>(string $table, string $column, string $type)</div>
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
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1415">yii\db\CDbCommand.php#L1415</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">alterColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">alterColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for changing the definition of a column.</p>


<div class="detailHeader" id="andWhere-detail">
andWhere()
<span class="detailHeaderTag">
method
(available since v1.1.13)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>andWhere</b>(mixed $conditions, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$conditions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the conditions that should be appended to the WHERE part.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters (name=>value) to be bound to the query.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L801">yii\db\CDbCommand.php#L801</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">andWhere</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processConditions</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">],</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processConditions</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Appends given condition to the existing WHERE part of the query with 'AND' operator.
<br/><br/>
This method works almost the same way as <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> except the fact that it appends condition
with 'AND' operator, but not replaces it with the new one. For more information on parameters
of this method refer to the <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> documentation.</p>


<div class="detailHeader" id="bindParam-detail">
bindParam()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>bindParam</b>(mixed $name, mixed &$value, integer $dataType=NULL, integer $length=NULL, mixed $driverOptions=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">Parameter identifier. For a prepared statement
using named placeholders, this will be a parameter name of
the form :name. For a prepared statement using question mark
placeholders, this will be the 1-indexed position of the parameter.</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">Name of the PHP variable to bind to the SQL statement parameter</td>
</tr>
<tr>
  <td class="paramNameCol">$dataType</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">SQL data type of the parameter. If null, the type is determined by the PHP type of the value.</td>
</tr>
<tr>
  <td class="paramNameCol">$length</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">length of the data type</td>
</tr>
<tr>
  <td class="paramNameCol">$driverOptions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the driver-specific options (this is available since version 1.1.6)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the current command being executed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L245">yii\db\CDbCommand.php#L245</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$length</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$driverOptions</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPdoType</span><span style="color: #007700">(</span><span style="color: #0000BB">gettype</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$length</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$driverOptions</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">,</span><span style="color: #0000BB">$driverOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_paramLog</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=&amp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Binds a parameter to the SQL statement to be executed.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDOStatement-bindParam.php">http://www.php.net/manual/en/function.PDOStatement-bindParam.php</a></li>
</ul>
</div>

<div class="detailHeader" id="bindValue-detail">
bindValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>bindValue</b>(mixed $name, mixed $value, integer $dataType=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">Parameter identifier. For a prepared statement
using named placeholders, this will be a parameter name of
the form :name. For a prepared statement using question mark
placeholders, this will be the 1-indexed position of the parameter.</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">The value to bind to the parameter</td>
</tr>
<tr>
  <td class="paramNameCol">$dataType</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">SQL data type of the parameter. If null, the type is determined by the PHP type of the value.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the current command being executed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L271">yii\db\CDbCommand.php#L271</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPdoType</span><span style="color: #007700">(</span><span style="color: #0000BB">gettype</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_paramLog</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Binds a value to a parameter.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDOStatement-bindValue.php">http://www.php.net/manual/en/function.PDOStatement-bindValue.php</a></li>
</ul>
</div>

<div class="detailHeader" id="bindValues-detail">
bindValues()
<span class="detailHeaderTag">
method
(available since v1.1.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>bindValues</b>(array $values)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$values</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the values to be bound. This must be given in terms of an associative
array with array keys being the parameter names, and array values the corresponding parameter values.
For example, <code>array(':name'=>'John', ':age'=>25)</code>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the current command being executed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L292">yii\db\CDbCommand.php#L292</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">bindValues</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPdoType</span><span style="color: #007700">(</span><span style="color: #0000BB">gettype</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_paramLog</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Binds a list of values to the corresponding parameters.
This is similar to <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?> except that it binds multiple values.
Note that the SQL data type of each value is determined by its PHP type.</p>


<div class="detailHeader" id="buildQuery-detail">
buildQuery()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>buildQuery</b>(array $query)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$query</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the query specification in name-value pairs. The following
query options are supported: <?php echo CHtml::link('select', array('/site/doc', 'view' => 'CDbCommand', '#' => 'select')); ?>, <?php echo CHtml::link('distinct', array('/site/doc', 'view' => 'CDbCommand', '#' => 'distinct')); ?>, <?php echo CHtml::link('from', array('/site/doc', 'view' => 'CDbCommand', '#' => 'from')); ?>,
<?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?>, <?php echo CHtml::link('join', array('/site/doc', 'view' => 'CDbCommand', '#' => 'join')); ?>, <?php echo CHtml::link('group', array('/site/doc', 'view' => 'CDbCommand', '#' => 'group')); ?>, <?php echo CHtml::link('having', array('/site/doc', 'view' => 'CDbCommand', '#' => 'having')); ?>, <?php echo CHtml::link('order', array('/site/doc', 'view' => 'CDbCommand', '#' => 'order')); ?>,
<?php echo CHtml::link('limit', array('/site/doc', 'view' => 'CDbCommand', '#' => 'limit')); ?>, <?php echo CHtml::link('offset', array('/site/doc', 'view' => 'CDbCommand', '#' => 'offset')); ?> and <?php echo CHtml::link('union', array('/site/doc', 'view' => 'CDbCommand', '#' => 'union')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L558">yii\db\CDbCommand.php#L558</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">buildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=!empty(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'distinct'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #DD0000">'SELECT&nbsp;DISTINCT'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'SELECT'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.(!empty(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">'*'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'from'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\nFROM&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'from'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;DB&nbsp;query&nbsp;must&nbsp;contain&nbsp;the&nbsp;"from"&nbsp;portion.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">.(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">])&nbsp;:&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\nWHERE&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\nGROUP&nbsp;BY&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\nHAVING&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\nUNION&nbsp;(\n"</span><span style="color: #007700">.(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n)&nbsp;UNION&nbsp;(\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">])&nbsp;:&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">])&nbsp;.&nbsp;</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\nORDER&nbsp;BY&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'limit'</span><span style="color: #007700">])&nbsp;?&nbsp;(int)</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'limit'</span><span style="color: #007700">]&nbsp;:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'offset'</span><span style="color: #007700">])&nbsp;?&nbsp;(int)</span><span style="color: #0000BB">$query</span><span style="color: #007700">[</span><span style="color: #DD0000">'offset'</span><span style="color: #007700">]&nbsp;:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$limit</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">applyLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$limit</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL SELECT statement from the given query specification.</p>


<div class="detailHeader" id="cancel-detail">
cancel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>cancel</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L227">yii\db\CDbCommand.php#L227</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">cancel</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Cancels the execution of the SQL statement.</p>


<div class="detailHeader" id="createIndex-detail">
createIndex()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>createIndex</b>(string $name, string $table, string $column, boolean $unique=false)</div>
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
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1460">yii\db\CDbCommand.php#L1460</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$unique</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$unique</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for creating a new index.</p>


<div class="detailHeader" id="createTable-detail">
createTable()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>createTable</b>(string $table, array $columns, string $options=NULL)</div>
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
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">0 is always returned. See <a href="http://php.net/manual/en/pdostatement.rowcount.php">http://php.net/manual/en/pdostatement.rowcount.php</a> for more information.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1322">yii\db\CDbCommand.php#L1322</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for creating a new DB table.
<br/><br/>
The columns in the new table should be specified as name-definition pairs (e.g. 'name'=>'string'),
where name stands for a column name which will be properly quoted by the method, and definition
stands for the column type which can contain an abstract DB type.
The getColumnType method will be invoked to convert any abstract type into a physical one.
<br/><br/>
If a column is specified with definition only (e.g. 'PRIMARY KEY (name, type)'), it will be directly
inserted into the generated SQL.</p>


<div class="detailHeader" id="crossJoin-detail">
crossJoin()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>crossJoin</b>(string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be joined.
Table name can contain schema prefix (e.g. 'public.tbl_user') and/or table alias (e.g. 'tbl_user u').
The method will automatically quote the table name unless it contains some parenthesis
(which means the table is given as a sub-query or DB expression).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L943">yii\db\CDbCommand.php#L943</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">crossJoin</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'cross&nbsp;join'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Appends a CROSS JOIN part to the query.
Note that not all DBMS support CROSS JOIN.</p>


<div class="detailHeader" id="delete-detail">
delete()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>delete</b>(string $table, mixed $conditions='', array $params=array (
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
refer to <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> on how to specify conditions.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters to be bound to the query.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1297">yii\db\CDbCommand.php#L1297</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">'DELETE&nbsp;FROM&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$where</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processConditions</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">))!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;WHERE&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$where</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates and executes a DELETE SQL statement.</p>


<div class="detailHeader" id="dropColumn-detail">
dropColumn()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>dropColumn</b>(string $table, string $column)</div>
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
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1387">yii\db\CDbCommand.php#L1387</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for dropping a DB column.</p>


<div class="detailHeader" id="dropForeignKey-detail">
dropForeignKey()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>dropForeignKey</b>(string $name, string $table)</div>
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
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1445">yii\db\CDbCommand.php#L1445</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropForeignKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for dropping a foreign key constraint.</p>


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
public integer <b>dropIndex</b>(string $name, string $table)</div>
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
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1472">yii\db\CDbCommand.php#L1472</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
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
public integer <b>dropPrimaryKey</b>(string $name, string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the primary key constraint to be dropped. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table that owns the primary key. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1606">yii\db\CDbCommand.php#L1606</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds a SQL statement for dropping a primary key constraint.</p>


<div class="detailHeader" id="dropTable-detail">
dropTable()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>dropTable</b>(string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be dropped. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">0 is always returned. See <a href="http://php.net/manual/en/pdostatement.rowcount.php">http://php.net/manual/en/pdostatement.rowcount.php</a> for more information.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1345">yii\db\CDbCommand.php#L1345</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dropTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dropTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for dropping a DB table.</p>


<div class="detailHeader" id="execute-detail">
execute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>execute</b>(array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">input parameters (name=>value) for the SQL execution. This is an alternative
to <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> and <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>. If you have multiple input parameters, passing
them in this way can improve the performance. Note that if you pass parameters in this way,
you cannot bind parameters or values using <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>, and vice versa.
Please also note that all values are treated as strings in this case, if you need them to be handled as
their real data types, you have to use <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?> instead.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L316">yii\db\CDbCommand.php#L316</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableParamLogging&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$pars</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_paramLog</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">))!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$p</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$pars&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'='</span><span style="color: #007700">.</span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$par</span><span style="color: #007700">=</span><span style="color: #DD0000">'.&nbsp;Bound&nbsp;with&nbsp;'&nbsp;</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$p</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$par</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #DD0000">'Executing&nbsp;SQL:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getText</span><span style="color: #007700">().</span><span style="color: #0000BB">$par</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbCommand'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableProfiling</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">beginProfile</span><span style="color: #007700">(</span><span style="color: #DD0000">'system.db.CDbCommand.execute('</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getText</span><span style="color: #007700">().</span><span style="color: #0000BB">$par</span><span style="color: #007700">.</span><span style="color: #DD0000">')'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbCommand.execute'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$params</span><span style="color: #007700">===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCount</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableProfiling</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">endProfile</span><span style="color: #007700">(</span><span style="color: #DD0000">'system.db.CDbCommand.execute('</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getText</span><span style="color: #007700">().</span><span style="color: #0000BB">$par</span><span style="color: #007700">.</span><span style="color: #DD0000">')'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbCommand.execute'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableProfiling</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">endProfile</span><span style="color: #007700">(</span><span style="color: #DD0000">'system.db.CDbCommand.execute('</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getText</span><span style="color: #007700">().</span><span style="color: #0000BB">$par</span><span style="color: #007700">.</span><span style="color: #DD0000">')'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbCommand.execute'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errorInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">$e&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">PDOException&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorInfo&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbCommand::execute()&nbsp;failed:&nbsp;{error}.&nbsp;The&nbsp;SQL&nbsp;statement&nbsp;executed&nbsp;was:&nbsp;{sql}.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{error}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$message</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'{sql}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getText</span><span style="color: #007700">().</span><span style="color: #0000BB">$par</span><span style="color: #007700">)),</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_ERROR</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbCommand'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.=</span><span style="color: #DD0000">'.&nbsp;The&nbsp;SQL&nbsp;statement&nbsp;executed&nbsp;was:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getText</span><span style="color: #007700">().</span><span style="color: #0000BB">$par</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbCommand&nbsp;failed&nbsp;to&nbsp;execute&nbsp;the&nbsp;SQL&nbsp;statement:&nbsp;{error}'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{error}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$message</span><span style="color: #007700">)),(int)</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCode</span><span style="color: #007700">(),</span><span style="color: #0000BB">$errorInfo</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Executes the SQL statement.
This method is meant only for executing non-query SQL statement.
No result set will be returned.</p>


<div class="detailHeader" id="from()-detail">
from()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>from</b>(mixed $tables)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tables</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the table(s) to be selected from. This can be either a string (e.g. 'tbl_user')
or an array (e.g. array('tbl_user', 'tbl_profile')) specifying one or several table names.
Table names can contain schema prefixes (e.g. 'public.tbl_user') and/or table aliases (e.g. 'tbl_user u').
The method will automatically quote the table names unless it contains some parenthesis
(which means the table is given as a sub-query or DB expression).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L698">yii\db\CDbCommand.php#L698</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">from</span><span style="color: #007700">(</span><span style="color: #0000BB">$tables</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$tables</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$tables</span><span style="color: #007700">,</span><span style="color: #DD0000">'('</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'from'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$tables</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$tables</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tables</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$tables</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$tables&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #DD0000">'('</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^(.*?)(?i:\s+as\s+|\s+)(.*)$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;with&nbsp;alias<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tables</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]).</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tables</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'from'</span><span style="color: #007700">]=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$tables</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the FROM part of the query.</p>


<div class="detailHeader" id="getConnection-detail">
getConnection()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <b>getConnection</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol">the connection associated with this command</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L183">yii\db\CDbCommand.php#L183</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getDistinct-detail">
getDistinct()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getDistinct</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">a value indicating whether SELECT DISTINCT should be used.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L673">yii\db\CDbCommand.php#L673</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDistinct</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'distinct'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'distinct'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether SELECT DISTINCT should be used.</p>


<div class="detailHeader" id="getFrom-detail">
getFrom()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getFrom</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the FROM part (without 'FROM' ) in the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L726">yii\db\CDbCommand.php#L726</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getFrom</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'from'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'from'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the FROM part in the query.</p>


<div class="detailHeader" id="getGroup-detail">
getGroup()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getGroup</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the GROUP BY part (without 'GROUP BY' ) in the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L997">yii\db\CDbCommand.php#L997</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getGroup</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the GROUP BY part in the query.</p>


<div class="detailHeader" id="getHaving-detail">
getHaving()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getHaving</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the HAVING part (without 'HAVING' ) in the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1034">yii\db\CDbCommand.php#L1034</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHaving</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the HAVING part in the query.</p>


<div class="detailHeader" id="getJoin-detail">
getJoin()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getJoin</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the join part in the query. This can be an array representing
multiple join fragments, or a string representing a single jojin fragment.
Each join fragment will contain the proper join operator (e.g. LEFT JOIN).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L882">yii\db\CDbCommand.php#L882</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getJoin</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the join part in the query.</p>


<div class="detailHeader" id="getLimit-detail">
getLimit()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLimit</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the LIMIT part (without 'LIMIT' ) in the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1132">yii\db\CDbCommand.php#L1132</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLimit</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'limit'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'limit'</span><span style="color: #007700">]&nbsp;:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the LIMIT part in the query.</p>


<div class="detailHeader" id="getOffset-detail">
getOffset()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getOffset</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the OFFSET part (without 'OFFSET' ) in the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1165">yii\db\CDbCommand.php#L1165</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOffset</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'offset'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'offset'</span><span style="color: #007700">]&nbsp;:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the OFFSET part in the query.</p>


<div class="detailHeader" id="getOrder-detail">
getOrder()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getOrder</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the ORDER BY part (without 'ORDER BY' ) in the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1096">yii\db\CDbCommand.php#L1096</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOrder</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the ORDER BY part in the query.</p>


<div class="detailHeader" id="getPdoStatement-detail">
getPdoStatement()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public PDOStatement <b>getPdoStatement</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">PDOStatement</td>
  <td class="paramDescCol">the underlying PDOStatement for this command
It could be null if the statement is not prepared yet.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L192">yii\db\CDbCommand.php#L192</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPdoStatement</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSelect-detail">
getSelect()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSelect</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SELECT part (without 'SELECT') in the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L639">yii\db\CDbCommand.php#L639</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSelect</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the SELECT part in the query.</p>


<div class="detailHeader" id="getText-detail">
getText()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getText</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement to be executed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L157">yii\db\CDbCommand.php#L157</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getText</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_text</span><span style="color: #007700">==</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_text</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getUnion-detail">
getUnion()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getUnion</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the UNION part (without 'UNION' ) in the query.
This can be either a string or an array representing multiple union parts.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1203">yii\db\CDbCommand.php#L1203</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUnion</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the UNION part in the query.</p>


<div class="detailHeader" id="getWhere-detail">
getWhere()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getWhere</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the WHERE part (without 'WHERE' ) in the query.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L842">yii\db\CDbCommand.php#L842</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getWhere</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the WHERE part in the query.</p>


<div class="detailHeader" id="group()-detail">
group()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>group</b>(mixed $columns)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the columns to be grouped by.
Columns can be specified in either a string (e.g. "id, name") or an array (e.g. array('id', 'name')).
The method will automatically quote the column names unless a column contains some parenthesis
(which means the column contains a DB expression).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L972">yii\db\CDbCommand.php#L972</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">group</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,</span><span style="color: #DD0000">'('</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$columns</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=(string)</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #DD0000">'('</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">]=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$columns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the GROUP BY part of the query.</p>


<div class="detailHeader" id="having()-detail">
having()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>having</b>(mixed $conditions, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$conditions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the conditions to be put after HAVING.
Please refer to <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> on how to specify conditions.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters (name=>value) to be bound to the query</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1021">yii\db\CDbCommand.php#L1021</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">having</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processConditions</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the HAVING part of the query.</p>


<div class="detailHeader" id="insert-detail">
insert()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>insert</b>(string $table, array $columns)</div>
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
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1227">yii\db\CDbCommand.php#L1227</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$placeholders</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$placeholders</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">expression</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$n</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$placeholders</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">'INSERT&nbsp;INTO&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$names</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">')&nbsp;VALUES&nbsp;('<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$placeholders</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates and executes an INSERT SQL statement.
The method will properly escape the column names, and bind the values to be inserted.</p>


<div class="detailHeader" id="join()-detail">
join()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>join</b>(string $table, mixed $conditions, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be joined.
Table name can contain schema prefix (e.g. 'public.tbl_user') and/or table alias (e.g. 'tbl_user u').
The method will automatically quote the table name unless it contains some parenthesis
(which means the table is given as a sub-query or DB expression).</td>
</tr>
<tr>
  <td class="paramNameCol">$conditions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the join condition that should appear in the ON part.
Please refer to <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> on how to specify conditions.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters (name=>value) to be bound to the query</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L870">yii\db\CDbCommand.php#L870</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">join</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'join'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Appends an INNER JOIN part to the query.</p>


<div class="detailHeader" id="leftJoin-detail">
leftJoin()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>leftJoin</b>(string $table, mixed $conditions, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be joined.
Table name can contain schema prefix (e.g. 'public.tbl_user') and/or table alias (e.g. 'tbl_user u').
The method will automatically quote the table name unless it contains some parenthesis
(which means the table is given as a sub-query or DB expression).</td>
</tr>
<tr>
  <td class="paramNameCol">$conditions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the join condition that should appear in the ON part.
Please refer to <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> on how to specify conditions.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters (name=>value) to be bound to the query</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L911">yii\db\CDbCommand.php#L911</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">leftJoin</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'left&nbsp;join'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Appends a LEFT OUTER JOIN part to the query.</p>


<div class="detailHeader" id="limit()-detail">
limit()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>limit</b>(integer $limit, integer $offset=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the limit</td>
</tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the offset</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1119">yii\db\CDbCommand.php#L1119</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">limit</span><span style="color: #007700">(</span><span style="color: #0000BB">$limit</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'limit'</span><span style="color: #007700">]=(int)</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the LIMIT part of the query.</p>


<div class="detailHeader" id="naturalJoin-detail">
naturalJoin()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>naturalJoin</b>(string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be joined.
Table name can contain schema prefix (e.g. 'public.tbl_user') and/or table alias (e.g. 'tbl_user u').
The method will automatically quote the table name unless it contains some parenthesis
(which means the table is given as a sub-query or DB expression).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L958">yii\db\CDbCommand.php#L958</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">naturalJoin</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'natural&nbsp;join'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Appends a NATURAL JOIN part to the query.
Note that not all DBMS support NATURAL JOIN.</p>


<div class="detailHeader" id="offset()-detail">
offset()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>offset</b>(integer $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the offset</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1154">yii\db\CDbCommand.php#L1154</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offset</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'offset'</span><span style="color: #007700">]=(int)</span><span style="color: #0000BB">$offset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the OFFSET part of the query.</p>


<div class="detailHeader" id="orWhere-detail">
orWhere()
<span class="detailHeaderTag">
method
(available since v1.1.13)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>orWhere</b>(mixed $conditions, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$conditions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the conditions that should be appended to the WHERE part.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters (name=>value) to be bound to the query.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L825">yii\db\CDbCommand.php#L825</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">orWhere</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processConditions</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'OR'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">],</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processConditions</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Appends given condition to the existing WHERE part of the query with 'OR' operator.
<br/><br/>
This method works almost the same way as <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> except the fact that it appends condition
with 'OR' operator, but not replaces it with the new one. For more information on parameters
of this method refer to the <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> documentation.</p>


<div class="detailHeader" id="order()-detail">
order()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>order</b>(mixed $columns)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the columns (and the directions) to be ordered by.
Columns can be specified in either a string (e.g. "id ASC, name DESC") or an array (e.g. array('id ASC', 'name DESC')).
The method will automatically quote the column names unless a column contains some parenthesis
(which means the column contains a DB expression).
<br/><br/>
For example, to get "ORDER BY 1" you should use
<br/><br/>
<pre>
$criteria-&gt;order('(1)');
</pre></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1066">yii\db\CDbCommand.php#L1066</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">order</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,</span><span style="color: #DD0000">'('</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$columns</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=(string)</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #DD0000">'('</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^(.*?)\s+(asc|desc)$/i'</span><span style="color: #007700">,</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]).</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">]=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$columns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the ORDER BY part of the query.</p>


<div class="detailHeader" id="prepare-detail">
prepare()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>prepare</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L205">yii\db\CDbCommand.php#L205</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getPdoInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getText</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_paramLog</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #DD0000">'Error&nbsp;in&nbsp;preparing&nbsp;SQL:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getText</span><span style="color: #007700">(),</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_ERROR</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbCommand'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errorInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">$e&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">PDOException&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorInfo&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbCommand&nbsp;failed&nbsp;to&nbsp;prepare&nbsp;the&nbsp;SQL&nbsp;statement:&nbsp;{error}'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{error}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">())),(int)</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCode</span><span style="color: #007700">(),</span><span style="color: #0000BB">$errorInfo</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Prepares the SQL statement to be executed.
For complex SQL statement that is to be executed multiple times,
this may improve performance.
For SQL statement with binding parameters, this method is invoked
automatically.</p>


<div class="detailHeader" id="query-detail">
query()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbDataReader', array('/site/doc', 'view' => 'CDbDataReader')); ?> <b>query</b>(array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">input parameters (name=>value) for the SQL execution. This is an alternative
to <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> and <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>. If you have multiple input parameters, passing
them in this way can improve the performance. Note that if you pass parameters in this way,
you cannot bind parameters or values using <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>, and vice versa.
Please also note that all values are treated as strings in this case, if you need them to be handled as
their real data types, you have to use <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?> instead.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbDataReader', array('/site/doc', 'view' => 'CDbDataReader')); ?></td>
  <td class="paramDescCol">the reader object for fetching the query result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L375">yii\db\CDbCommand.php#L375</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Executes the SQL statement and returns query result.
This method is for executing an SQL query that returns result set.</p>


<div class="detailHeader" id="queryAll-detail">
queryAll()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>queryAll</b>(boolean $fetchAssociative=true, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fetchAssociative</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether each row should be returned as an associated array with
column names as the keys or the array keys are column indexes (0-based).</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">input parameters (name=>value) for the SQL execution. This is an alternative
to <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> and <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>. If you have multiple input parameters, passing
them in this way can improve the performance. Note that if you pass parameters in this way,
you cannot bind parameters or values using <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>, and vice versa.
Please also note that all values are treated as strings in this case, if you need them to be handled as
their real data types, you have to use <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?> instead.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">all rows of the query result. Each array element is an array representing a row.
An empty array is returned if the query results in nothing.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L394">yii\db\CDbCommand.php#L394</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">(</span><span style="color: #0000BB">$fetchAssociative</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'fetchAll'</span><span style="color: #007700">,</span><span style="color: #0000BB">$fetchAssociative&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_fetchMode&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_NUM</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Executes the SQL statement and returns all rows.</p>


<div class="detailHeader" id="queryColumn-detail">
queryColumn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>queryColumn</b>(array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">input parameters (name=>value) for the SQL execution. This is an alternative
to <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> and <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>. If you have multiple input parameters, passing
them in this way can improve the performance. Note that if you pass parameters in this way,
you cannot bind parameters or values using <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>, and vice versa.
Please also note that all values are treated as strings in this case, if you need them to be handled as
their real data types, you have to use <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?> instead.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the first column of the query result. Empty array if no result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L453">yii\db\CDbCommand.php#L453</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">queryColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'fetchAll'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_COLUMN</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">),</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Executes the SQL statement and returns the first column of the result.
This is a convenient method of <?php echo CHtml::link('query', array('/site/doc', 'view' => 'CDbCommand', '#' => 'query')); ?> when only the first column of data is needed.
Note, the column returned will contain the first element in each row of result.</p>


<div class="detailHeader" id="queryRow-detail">
queryRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>queryRow</b>(boolean $fetchAssociative=true, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fetchAssociative</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the row should be returned as an associated array with
column names as the keys or the array keys are column indexes (0-based).</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">input parameters (name=>value) for the SQL execution. This is an alternative
to <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> and <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>. If you have multiple input parameters, passing
them in this way can improve the performance. Note that if you pass parameters in this way,
you cannot bind parameters or values using <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>, and vice versa.
Please also note that all values are treated as strings in this case, if you need them to be handled as
their real data types, you have to use <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?> instead.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the first row (in terms of an array) of the query result, false if no result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L413">yii\db\CDbCommand.php#L413</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">queryRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$fetchAssociative</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'fetch'</span><span style="color: #007700">,</span><span style="color: #0000BB">$fetchAssociative&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_fetchMode&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_NUM</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Executes the SQL statement and returns the first row of the result.
This is a convenient method of <?php echo CHtml::link('query', array('/site/doc', 'view' => 'CDbCommand', '#' => 'query')); ?> when only the first row of data is needed.</p>


<div class="detailHeader" id="queryScalar-detail">
queryScalar()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>queryScalar</b>(array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">input parameters (name=>value) for the SQL execution. This is an alternative
to <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> and <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>. If you have multiple input parameters, passing
them in this way can improve the performance. Note that if you pass parameters in this way,
you cannot bind parameters or values using <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?>, and vice versa.
Please also note that all values are treated as strings in this case, if you need them to be handled as
their real data types, you have to use <?php echo CHtml::link('bindParam', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindParam')); ?> or <?php echo CHtml::link('bindValue', array('/site/doc', 'view' => 'CDbCommand', '#' => 'bindValue')); ?> instead.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value of the first column in the first row of the query result. False is returned if there is no value.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L431">yii\db\CDbCommand.php#L431</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'fetchColumn'</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_resource</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">get_resource_type</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)===</span><span style="color: #DD0000">'stream'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">stream_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Executes the SQL statement and returns the value of the first column in the first row of data.
This is a convenient method of <?php echo CHtml::link('query', array('/site/doc', 'view' => 'CDbCommand', '#' => 'query')); ?> when only a single scalar
value is needed (e.g. obtaining the count of the records).</p>


<div class="detailHeader" id="renameColumn-detail">
renameColumn()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>renameColumn</b>(string $table, string $name, string $newName)</div>
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
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1400">yii\db\CDbCommand.php#L1400</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renameColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renameColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for renaming a column.</p>


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
public integer <b>renameTable</b>(string $table, string $newName)</div>
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
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">0 is always returned. See <a href="http://php.net/manual/en/pdostatement.rowcount.php">http://php.net/manual/en/pdostatement.rowcount.php</a> for more information.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1334">yii\db\CDbCommand.php#L1334</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renameTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renameTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for renaming a DB table.</p>


<div class="detailHeader" id="reset-detail">
reset()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>reset</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">this command instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L144">yii\db\CDbCommand.php#L144</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">reset</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_text</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_paramLog</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Cleans up the command and prepares for building a new query.
This method is mainly used when a command object is being reused
multiple times for building different queries.
Calling this method will clean up all internal states of the command object.</p>


<div class="detailHeader" id="rightJoin-detail">
rightJoin()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>rightJoin</b>(string $table, mixed $conditions, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be joined.
Table name can contain schema prefix (e.g. 'public.tbl_user') and/or table alias (e.g. 'tbl_user u').
The method will automatically quote the table name unless it contains some parenthesis
(which means the table is given as a sub-query or DB expression).</td>
</tr>
<tr>
  <td class="paramNameCol">$conditions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the join condition that should appear in the ON part.
Please refer to <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> on how to specify conditions.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters (name=>value) to be bound to the query</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L928">yii\db\CDbCommand.php#L928</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">rightJoin</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinInternal</span><span style="color: #007700">(</span><span style="color: #DD0000">'right&nbsp;join'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Appends a RIGHT OUTER JOIN part to the query.</p>


<div class="detailHeader" id="select()-detail">
select()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>select</b>(mixed $columns='*', string $option='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the columns to be selected. Defaults to '*', meaning all columns.
Columns can be specified in either a string (e.g. "id, name") or an array (e.g. array('id', 'name')).
Columns can contain table prefixes (e.g. "tbl_user.id") and/or column aliases (e.g. "tbl_user.id AS user_id").
The method will automatically quote the column names unless a column contains some parenthesis
(which means the column contains a DB expression).</td>
</tr>
<tr>
  <td class="paramNameCol">$option</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">additional option that should be appended to the 'SELECT' keyword. For example,
in MySQL, the option 'SQL_CALC_FOUND_ROWS' can be used. This parameter is supported since version 1.1.8.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L606">yii\db\CDbCommand.php#L606</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">select</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">=</span><span style="color: #DD0000">'*'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,</span><span style="color: #DD0000">'('</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$columns</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=(string)</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #DD0000">'('</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^(.*?)(?i:\s+as\s+|\s+)(.*)$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]).</span><span style="color: #DD0000">'&nbsp;AS&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">]=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$columns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$option</span><span style="color: #007700">!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$option</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the SELECT part of the query.</p>


<div class="detailHeader" id="selectDistinct-detail">
selectDistinct()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>selectDistinct</b>(mixed $columns='*')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the columns to be selected. See <?php echo CHtml::link('select', array('/site/doc', 'view' => 'CDbCommand', '#' => 'select')); ?> for more details.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L662">yii\db\CDbCommand.php#L662</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">selectDistinct</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">=</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'distinct'</span><span style="color: #007700">]=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the SELECT part of the query with the DISTINCT flag turned on.
This is the same as <?php echo CHtml::link('select', array('/site/doc', 'view' => 'CDbCommand', '#' => 'select')); ?> except that the DISTINCT flag is turned on.</p>


<div class="detailHeader" id="setDistinct-detail">
setDistinct()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setDistinct</b>(boolean $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">a value indicating whether SELECT DISTINCT should be used.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L683">yii\db\CDbCommand.php#L683</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setDistinct</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'distinct'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets a value indicating whether SELECT DISTINCT should be used.</p>


<div class="detailHeader" id="setFetchMode-detail">
setFetchMode()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>setFetchMode</b>(mixed $mode)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$mode</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">fetch mode</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L129">yii\db\CDbCommand.php#L129</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setFetchMode</span><span style="color: #007700">(</span><span style="color: #0000BB">$mode</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_fetchMode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Set the default fetch mode for this statement</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDOStatement-setFetchMode.php">http://www.php.net/manual/en/function.PDOStatement-setFetchMode.php</a></li>
</ul>
</div>

<div class="detailHeader" id="setFrom-detail">
setFrom()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setFrom</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the tables to be selected from. Please refer to <?php echo CHtml::link('from()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'from')); ?> for details
on how to specify this parameter.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L737">yii\db\CDbCommand.php#L737</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setFrom</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the FROM part in the query.</p>


<div class="detailHeader" id="setGroup-detail">
setGroup()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setGroup</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the GROUP BY part. Please refer to <?php echo CHtml::link('group()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'group')); ?> for details
on how to specify this parameter.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1008">yii\db\CDbCommand.php#L1008</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setGroup</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the GROUP BY part in the query.</p>


<div class="detailHeader" id="setHaving-detail">
setHaving()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setHaving</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the HAVING part. Please refer to <?php echo CHtml::link('having()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'having')); ?> for details
on how to specify this parameter.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1045">yii\db\CDbCommand.php#L1045</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setHaving</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the HAVING part in the query.</p>


<div class="detailHeader" id="setJoin-detail">
setJoin()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setJoin</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the join part in the query. This can be either a string or
an array representing multiple join parts in the query. Each part must contain
the proper join operator (e.g. 'LEFT JOIN tbl_profile ON tbl_user.id=tbl_profile.id')</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L894">yii\db\CDbCommand.php#L894</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setJoin</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the join part in the query.</p>


<div class="detailHeader" id="setLimit-detail">
setLimit()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setLimit</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the LIMIT part. Please refer to <?php echo CHtml::link('limit()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'limit')); ?> for details
on how to specify this parameter.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1143">yii\db\CDbCommand.php#L1143</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the LIMIT part in the query.</p>


<div class="detailHeader" id="setOffset-detail">
setOffset()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setOffset</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the OFFSET part. Please refer to <?php echo CHtml::link('offset()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'offset')); ?> for details
on how to specify this parameter.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1176">yii\db\CDbCommand.php#L1176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setOffset</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the OFFSET part in the query.</p>


<div class="detailHeader" id="setOrder-detail">
setOrder()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setOrder</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the ORDER BY part. Please refer to <?php echo CHtml::link('order()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'order')); ?> for details
on how to specify this parameter.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1107">yii\db\CDbCommand.php#L1107</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setOrder</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the ORDER BY part in the query.</p>


<div class="detailHeader" id="setSelect-detail">
setSelect()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSelect</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the data to be selected. Please refer to <?php echo CHtml::link('select()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'select')); ?> for details
on how to specify this parameter.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L650">yii\db\CDbCommand.php#L650</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSelect</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the SELECT part in the query.</p>


<div class="detailHeader" id="setText-detail">
setText()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>setText</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement to be executed</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">this command instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L170">yii\db\CDbCommand.php#L170</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tablePrefix</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_text</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/{{(.*?)}}/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tablePrefix</span><span style="color: #007700">.</span><span style="color: #DD0000">'\1'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_text</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cancel</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Specifies the SQL statement to be executed.
Any previous execution will be terminated or cancel.</p>


<div class="detailHeader" id="setUnion-detail">
setUnion()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setUnion</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the UNION part. This can be either a string or an array
representing multiple SQL statements to be unioned together.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1214">yii\db\CDbCommand.php#L1214</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setUnion</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the UNION part in the query.</p>


<div class="detailHeader" id="setWhere-detail">
setWhere()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setWhere</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the where part. Please refer to <?php echo CHtml::link('where()', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> for details
on how to specify this parameter.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L853">yii\db\CDbCommand.php#L853</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setWhere</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">where</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the WHERE part in the query.</p>


<div class="detailHeader" id="truncateTable-detail">
truncateTable()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>truncateTable</b>(string $table)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table to be truncated. The name will be properly quoted by the method.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1356">yii\db\CDbCommand.php#L1356</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">truncateTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">truncateTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">(),</span><span style="color: #DD0000">'sqlite'</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resetSequence</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds and executes a SQL statement for truncating a DB table.</p>


<div class="detailHeader" id="union()-detail">
union()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>union</b>(string $sql)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sql</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the SQL statement to be appended using UNION</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1187">yii\db\CDbCommand.php#L1187</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">union</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">]=array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'union'</span><span style="color: #007700">][]=</span><span style="color: #0000BB">$sql</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Appends a SQL statement using UNION operator.</p>


<div class="detailHeader" id="update-detail">
update()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>update</b>(string $table, array $columns, mixed $conditions='', array $params=array (
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
refer to <?php echo CHtml::link('where', array('/site/doc', 'view' => 'CDbCommand', '#' => 'where')); ?> on how to specify conditions.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters to be bound to the query.
Do not use column names as parameter names here. They are reserved for <code>$columns</code> parameter.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows affected by the execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L1265">yii\db\CDbCommand.php#L1265</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">update</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lines</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lines</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'='&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">expression</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$n</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lines</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'=:'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">'UPDATE&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;SET&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$lines</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$where</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processConditions</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">))!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;WHERE&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$where</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates and executes an UPDATE SQL statement.
The method will properly escape the column names and bind the values to be updated.</p>


<div class="detailHeader" id="where()-detail">
where()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCommand <b>where</b>(mixed $conditions, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$conditions</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the conditions that should be put in the WHERE part.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters (name=>value) to be bound to the query</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCommand</td>
  <td class="paramDescCol">the command object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\CDbCommand.php#L780">yii\db\CDbCommand.php#L780</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">where</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_query</span><span style="color: #007700">[</span><span style="color: #DD0000">'where'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processConditions</span><span style="color: #007700">(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the WHERE part of the query.
<br/><br/>
The method requires a $conditions parameter, and optionally a $params parameter
specifying the values to be bound to the query.
<br/><br/>
The $conditions parameter should be either a string (e.g. 'id=1') or an array.
If the latter, it must be of the format <code>array(operator, operand1, operand2, ...)</code>,
where the operator can be one of the followings, and the possible operands depend on the corresponding
operator:
<ul>
<li><code>and</code>: the operands should be concatenated together using AND. For example,
array('and', 'id=1', 'id=2') will generate 'id=1 AND id=2'. If an operand is an array,
it will be converted into a string using the same rules described here. For example,
array('and', 'type=1', array('or', 'id=1', 'id=2')) will generate 'type=1 AND (id=1 OR id=2)'.
The method will NOT do any quoting or escaping.</li>
<li><code>or</code>: similar as the <code>and</code> operator except that the operands are concatenated using OR.</li>
<li><code>in</code>: operand 1 should be a column or DB expression, and operand 2 be an array representing
the range of the values that the column or DB expression should be in. For example,
array('in', 'id', array(1,2,3)) will generate 'id IN (1,2,3)'.
The method will properly quote the column name and escape values in the range.</li>
<li><code>not in</code>: similar as the <code>in</code> operator except that IN is replaced with NOT IN in the generated condition.</li>
<li><code>like</code>: operand 1 should be a column or DB expression, and operand 2 be a string or an array representing
the values that the column or DB expression should be like.
For example, array('like', 'name', '%tester%') will generate "name LIKE '%tester%'".
When the value range is given as an array, multiple LIKE predicates will be generated and concatenated using AND.
For example, array('like', 'name', array('%test%', '%sample%')) will generate
"name LIKE '%test%' AND name LIKE '%sample%'".
The method will properly quote the column name and escape values in the range.</li>
<li><code>not like</code>: similar as the <code>like</code> operator except that LIKE is replaced with NOT LIKE in the generated condition.</li>
<li><code>or like</code>: similar as the <code>like</code> operator except that OR is used to concatenated the LIKE predicates.</li>
<li><code>or not like</code>: similar as the <code>not like</code> operator except that OR is used to concatenated the NOT LIKE predicates.</li>
</ul></p>


