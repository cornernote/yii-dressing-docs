<?php
$this->pageTitle = $this->pageHeading = 'CDbLogRoute';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbLogRoute';
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
  <td><?php echo CHtml::link('system.logging', array('/site/doc', '#' => 'system.logging')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CDbLogRoute &raquo;
<?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CDbLogRoute.php">yii/logging/CDbLogRoute.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbLogRoute stores log messages in a database table.
<br/><br/>
To specify the database table for storing log messages, set <?php echo CHtml::link('logTableName', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'logTableName')); ?> as
the name of the table and specify <?php echo CHtml::link('connectionID', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'connectionID')); ?> to be the ID of a <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?>
application component. If they are not set, a SQLite3 database named 'log-YiiVersion.db' will be created
and used under the application runtime directory.</div>
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
<tr id="autoCreateLogTable">
  <td><?php echo CHtml::link('autoCreateLogTable', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'autoCreateLogTable-detail')); ?></td>
  <td>boolean</td>
  <td>whether the log DB table should be automatically created if not exists.</td>
  <td>CDbLogRoute</td>
</tr>
<tr class="inherited" id="categories">
  <td><?php echo CHtml::link('categories', array('/site/doc', 'view' => 'CLogRoute', '#' => 'categories-detail')); ?></td>
  <td>mixed</td>
  <td>array of categories, or string list separated by comma or space.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr id="connectionID">
  <td><?php echo CHtml::link('connectionID', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'connectionID-detail')); ?></td>
  <td>string</td>
  <td>the ID of CDbConnection application component.</td>
  <td>CDbLogRoute</td>
</tr>
<tr class="inherited" id="enabled">
  <td><?php echo CHtml::link('enabled', array('/site/doc', 'view' => 'CLogRoute', '#' => 'enabled-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable this log route.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="except">
  <td><?php echo CHtml::link('except', array('/site/doc', 'view' => 'CLogRoute', '#' => 'except-detail')); ?></td>
  <td>mixed</td>
  <td>array of categories, or string list separated by comma or space, to EXCLUDE from logs.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="filter">
  <td><?php echo CHtml::link('filter', array('/site/doc', 'view' => 'CLogRoute', '#' => 'filter-detail')); ?></td>
  <td>mixed</td>
  <td>the additional filter (eg <?php echo CHtml::link('CLogFilter', array('/site/doc', 'view' => 'CLogFilter')); ?>) that can be applied to the log messages.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="levels">
  <td><?php echo CHtml::link('levels', array('/site/doc', 'view' => 'CLogRoute', '#' => 'levels-detail')); ?></td>
  <td>string</td>
  <td>list of levels separated by comma or space.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr id="logTableName">
  <td><?php echo CHtml::link('logTableName', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'logTableName-detail')); ?></td>
  <td>string</td>
  <td>the name of the DB table that stores log content.</td>
  <td>CDbLogRoute</td>
</tr>
<tr class="inherited" id="logs">
  <td><?php echo CHtml::link('logs', array('/site/doc', 'view' => 'CLogRoute', '#' => 'logs-detail')); ?></td>
  <td>array</td>
  <td>the logs that are collected so far by this log route.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
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
<tr id="dbConnection">
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>the DB connection instance</td>
  <td>CDbLogRoute</td>
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
<tr class="inherited" id="collectLogs">
  <td><?php echo CHtml::link('collectLogs()', array('/site/doc', 'view' => 'CLogRoute', '#' => 'collectLogs-detail')); ?></td>
  <td>Retrieves filtered log messages from logger for further processing.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'init-detail')); ?></td>
  <td>Initializes the route.</td>
  <td>CDbLogRoute</td>
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
<tr id="createLogTable">
  <td><?php echo CHtml::link('createLogTable()', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'createLogTable-detail')); ?></td>
  <td>Creates the DB table for storing log messages.</td>
  <td>CDbLogRoute</td>
</tr>
<tr class="inherited" id="formatLogMessage">
  <td><?php echo CHtml::link('formatLogMessage()', array('/site/doc', 'view' => 'CLogRoute', '#' => 'formatLogMessage-detail')); ?></td>
  <td>Formats a log message given different fields.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns the DB connection instance</td>
  <td>CDbLogRoute</td>
</tr>
<tr id="processLogs">
  <td><?php echo CHtml::link('processLogs()', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'processLogs-detail')); ?></td>
  <td>Stores log messages into database.</td>
  <td>CDbLogRoute</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="autoCreateLogTable-detail">
autoCreateLogTable<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$autoCreateLogTable</b>;</div>

<p>whether the log DB table should be automatically created if not exists. Defaults to true.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('logTableName', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'logTableName')); ?></li>
</ul>
</div>

<div class="detailHeader" id="connectionID-detail">
connectionID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$connectionID</b>;</div>

<p>the ID of CDbConnection application component. If not set, a SQLite database
will be automatically created and used. The SQLite database file is
<code>protected/runtime/log-YiiVersion.db</code>.</p>


<div class="detailHeader" id="dbConnection-detail">
dbConnection<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <?php echo CHtml::link('<b>getDbConnection</b>', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'getDbConnection')); ?>()</div>

<p>the DB connection instance</p>


<div class="detailHeader" id="logTableName-detail">
logTableName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$logTableName</b>;</div>

<p>the name of the DB table that stores log content. Defaults to 'YiiLog'.
If <?php echo CHtml::link('autoCreateLogTable', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'autoCreateLogTable')); ?> is false and you want to create the DB table manually by yourself,
you need to make sure the DB table is of the following structure:
<pre>
 (
	id       INTEGER NOT NULL PRIMARY KEY,
	level    VARCHAR(128),
	category VARCHAR(128),
	logtime  INTEGER,
	message  TEXT
  )
</pre>
Note, the 'id' column must be created as an auto-incremental column.
In MySQL, this means it should be <code>id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY</code>;
In PostgreSQL, it is <code>id SERIAL PRIMARY KEY</code>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('autoCreateLogTable', array('/site/doc', 'view' => 'CDbLogRoute', '#' => 'autoCreateLogTable')); ?></li>
</ul>
</div>

<h2>Method Details</h2>

<div class="detailHeader" id="createLogTable-detail">
createLogTable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>createLogTable</b>(<?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> $db, string $tableName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$db</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol">the database connection</td>
</tr>
<tr>
  <td class="paramNameCol">$tableName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the table to be created</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CDbLogRoute.php#L88">yii/logging/CDbLogRoute.php#L88</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createLogTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">,</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'pk'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'level'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'varchar(128)'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'category'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'varchar(128)'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'logtime'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'message'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>Creates the DB table for storing log messages.</p>


<div class="detailHeader" id="getDbConnection-detail">
getDbConnection()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <b>getDbConnection</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol">the DB connection instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CDbLogRoute.php#L103">yii/logging/CDbLogRoute.php#L103</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionID</span><span style="color: #007700">)!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">))&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">CDbConnection</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbLogRoute.connectionID&nbsp;"{id}"&nbsp;does&nbsp;not&nbsp;point&nbsp;to&nbsp;a&nbsp;valid&nbsp;CDbConnection&nbsp;application&nbsp;component.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{id}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dbFile</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRuntimePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'log-'</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getVersion</span><span style="color: #007700">().</span><span style="color: #DD0000">'.db'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDbConnection</span><span style="color: #007700">(</span><span style="color: #DD0000">'sqlite:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$dbFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CDbLogRoute.php#L65">yii/logging/CDbLogRoute.php#L65</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoCreateLogTable</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">logTableName</span><span style="color: #007700">,</span><span style="color: #DD0000">'0=1'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createLogTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">logTableName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the route.
This method is invoked after the route is created by the route manager.</p>


<div class="detailHeader" id="processLogs-detail">
processLogs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>processLogs</b>(array $logs)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$logs</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of log messages</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CDbLogRoute.php#L126">yii/logging/CDbLogRoute.php#L126</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">processLogs</span><span style="color: #007700">(</span><span style="color: #0000BB">$logs</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$logs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">logTableName</span><span style="color: #007700">,array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'level'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'category'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'logtime'</span><span style="color: #007700">=&gt;(int)</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'message'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Stores log messages into database.</p>


