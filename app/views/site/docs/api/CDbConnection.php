<?php
$this->pageTitle = $this->pageHeading = 'CDbConnection';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbConnection';
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
  <td>class CDbConnection &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php">yii\db\CDbConnection.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbConnection represents a connection to a database.
<br/><br/>
CDbConnection works together with <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?>, <?php echo CHtml::link('CDbDataReader', array('/site/doc', 'view' => 'CDbDataReader')); ?>
and <?php echo CHtml::link('CDbTransaction', array('/site/doc', 'view' => 'CDbTransaction')); ?> to provide data access to various DBMS
in a common set of APIs. They are a thin wrapper of the <a href="http://www.php.net/manual/en/ref.pdo.php">PDO</a>
PHP extension.
<br/><br/>
To establish a connection, set <?php echo CHtml::link('active', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setActive')); ?> to true after
specifying <?php echo CHtml::link('connectionString', array('/site/doc', 'view' => 'CDbConnection', '#' => 'connectionString')); ?>, <?php echo CHtml::link('username', array('/site/doc', 'view' => 'CDbConnection', '#' => 'username')); ?> and <?php echo CHtml::link('password', array('/site/doc', 'view' => 'CDbConnection', '#' => 'password')); ?>.
<br/><br/>
The following example shows how to create a CDbConnection instance and establish
the actual connection:
<pre>
$connection=new CDbConnection($dsn,$username,$password);
$connection-&gt;active=true;
</pre>
<br/><br/>
After the DB connection is established, one can execute an SQL statement like the following:
<pre>
$command=$connection-&gt;createCommand($sqlStatement);
$command-&gt;execute();   // a non-query SQL statement execution
// or execute an SQL query and fetch the result set
$reader=$command-&gt;query();

// each $row is an array representing a row of data
foreach($reader as $row) ...
</pre>
<br/><br/>
One can do prepared SQL execution and bind parameters to the prepared SQL:
<pre>
$command=$connection-&gt;createCommand($sqlStatement);
$command-&gt;bindParam($name1,$value1);
$command-&gt;bindParam($name2,$value2);
$command-&gt;execute();
</pre>
<br/><br/>
To use transaction, do like the following:
<pre>
$transaction=$connection-&gt;beginTransaction();
try
{
   $connection-&gt;createCommand($sql1)-&gt;execute();
   $connection-&gt;createCommand($sql2)-&gt;execute();
   //.... other SQL executions
   $transaction-&gt;commit();
}
catch(Exception $e)
{
   $transaction-&gt;rollback();
}
</pre>
<br/><br/>
CDbConnection also provides a set of methods to support setting and querying
of certain DBMS attributes, such as <?php echo CHtml::link('nullConversion', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getNullConversion')); ?>.
<br/><br/>
Since CDbConnection implements the interface IApplicationComponent, it can
be used as an application component and be configured in application configuration,
like the following,
<pre>
array(
    'components'=&gt;array(
        'db'=&gt;array(
            'class'=&gt;'CDbConnection',
            'connectionString'=&gt;'sqlite:path/to/dbfile',
        ),
    ),
)
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
<tr id="active">
  <td><?php echo CHtml::link('active', array('/site/doc', 'view' => 'CDbConnection', '#' => 'active-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether the DB connection is established.</td>
  <td>CDbConnection</td>
</tr>
<tr id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CDbConnection', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>Returns the attributes that are previously explicitly set for the DB connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="autoCommit">
  <td><?php echo CHtml::link('autoCommit', array('/site/doc', 'view' => 'CDbConnection', '#' => 'autoCommit-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether creating or updating a DB record will be automatically committed.</td>
  <td>CDbConnection</td>
</tr>
<tr id="autoConnect">
  <td><?php echo CHtml::link('autoConnect', array('/site/doc', 'view' => 'CDbConnection', '#' => 'autoConnect-detail')); ?></td>
  <td>boolean</td>
  <td>whether the database connection should be automatically established
the component is being initialized.</td>
  <td>CDbConnection</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="charset">
  <td><?php echo CHtml::link('charset', array('/site/doc', 'view' => 'CDbConnection', '#' => 'charset-detail')); ?></td>
  <td>string</td>
  <td>the charset used for database connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="clientVersion">
  <td><?php echo CHtml::link('clientVersion', array('/site/doc', 'view' => 'CDbConnection', '#' => 'clientVersion-detail')); ?></td>
  <td>string</td>
  <td>Returns the version information of the DB driver.</td>
  <td>CDbConnection</td>
</tr>
<tr id="columnCase">
  <td><?php echo CHtml::link('columnCase', array('/site/doc', 'view' => 'CDbConnection', '#' => 'columnCase-detail')); ?></td>
  <td>mixed</td>
  <td>Returns the case of the column names</td>
  <td>CDbConnection</td>
</tr>
<tr id="commandBuilder">
  <td><?php echo CHtml::link('commandBuilder', array('/site/doc', 'view' => 'CDbConnection', '#' => 'commandBuilder-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
  <td>Returns the SQL command builder for the current DB connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="connectionStatus">
  <td><?php echo CHtml::link('connectionStatus', array('/site/doc', 'view' => 'CDbConnection', '#' => 'connectionStatus-detail')); ?></td>
  <td>string</td>
  <td>Returns the status of the connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="connectionString">
  <td><?php echo CHtml::link('connectionString', array('/site/doc', 'view' => 'CDbConnection', '#' => 'connectionString-detail')); ?></td>
  <td>string</td>
  <td>The Data Source Name, or DSN, contains the information required to connect to the database.</td>
  <td>CDbConnection</td>
</tr>
<tr id="currentTransaction">
  <td><?php echo CHtml::link('currentTransaction', array('/site/doc', 'view' => 'CDbConnection', '#' => 'currentTransaction-detail')); ?></td>
  <td><?php echo CHtml::link('CDbTransaction', array('/site/doc', 'view' => 'CDbTransaction')); ?></td>
  <td>Returns the currently active transaction.</td>
  <td>CDbConnection</td>
</tr>
<tr id="driverMap">
  <td><?php echo CHtml::link('driverMap', array('/site/doc', 'view' => 'CDbConnection', '#' => 'driverMap-detail')); ?></td>
  <td>array</td>
  <td>mapping between PDO driver and schema class name.</td>
  <td>CDbConnection</td>
</tr>
<tr id="driverName">
  <td><?php echo CHtml::link('driverName', array('/site/doc', 'view' => 'CDbConnection', '#' => 'driverName-detail')); ?></td>
  <td>string</td>
  <td>Returns the name of the DB driver</td>
  <td>CDbConnection</td>
</tr>
<tr id="emulatePrepare">
  <td><?php echo CHtml::link('emulatePrepare', array('/site/doc', 'view' => 'CDbConnection', '#' => 'emulatePrepare-detail')); ?></td>
  <td>boolean</td>
  <td>whether to turn on prepare emulation.</td>
  <td>CDbConnection</td>
</tr>
<tr id="enableParamLogging">
  <td><?php echo CHtml::link('enableParamLogging', array('/site/doc', 'view' => 'CDbConnection', '#' => 'enableParamLogging-detail')); ?></td>
  <td>boolean</td>
  <td>whether to log the values that are bound to a prepare SQL statement.</td>
  <td>CDbConnection</td>
</tr>
<tr id="enableProfiling">
  <td><?php echo CHtml::link('enableProfiling', array('/site/doc', 'view' => 'CDbConnection', '#' => 'enableProfiling-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable profiling the SQL statements being executed.</td>
  <td>CDbConnection</td>
</tr>
<tr id="initSQLs">
  <td><?php echo CHtml::link('initSQLs', array('/site/doc', 'view' => 'CDbConnection', '#' => 'initSQLs-detail')); ?></td>
  <td>array</td>
  <td>list of SQL statements that should be executed right after the DB connection is established.</td>
  <td>CDbConnection</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="lastInsertID">
  <td><?php echo CHtml::link('lastInsertID', array('/site/doc', 'view' => 'CDbConnection', '#' => 'lastInsertID-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the last inserted row or sequence value.</td>
  <td>CDbConnection</td>
</tr>
<tr id="nullConversion">
  <td><?php echo CHtml::link('nullConversion', array('/site/doc', 'view' => 'CDbConnection', '#' => 'nullConversion-detail')); ?></td>
  <td>mixed</td>
  <td>Returns how the null and empty strings are converted.</td>
  <td>CDbConnection</td>
</tr>
<tr id="password">
  <td><?php echo CHtml::link('password', array('/site/doc', 'view' => 'CDbConnection', '#' => 'password-detail')); ?></td>
  <td>string</td>
  <td>the password for establishing DB connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="pdoClass">
  <td><?php echo CHtml::link('pdoClass', array('/site/doc', 'view' => 'CDbConnection', '#' => 'pdoClass-detail')); ?></td>
  <td>string</td>
  <td>Custom PDO wrapper class.</td>
  <td>CDbConnection</td>
</tr>
<tr id="pdoInstance">
  <td><?php echo CHtml::link('pdoInstance', array('/site/doc', 'view' => 'CDbConnection', '#' => 'pdoInstance-detail')); ?></td>
  <td>PDO</td>
  <td>Returns the PDO instance.</td>
  <td>CDbConnection</td>
</tr>
<tr id="persistent">
  <td><?php echo CHtml::link('persistent', array('/site/doc', 'view' => 'CDbConnection', '#' => 'persistent-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether the connection is persistent or not.</td>
  <td>CDbConnection</td>
</tr>
<tr id="prefetch">
  <td><?php echo CHtml::link('prefetch', array('/site/doc', 'view' => 'CDbConnection', '#' => 'prefetch-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether the connection performs data prefetching.</td>
  <td>CDbConnection</td>
</tr>
<tr id="queryCacheID">
  <td><?php echo CHtml::link('queryCacheID', array('/site/doc', 'view' => 'CDbConnection', '#' => 'queryCacheID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the cache application component that is used for query caching.</td>
  <td>CDbConnection</td>
</tr>
<tr id="queryCachingCount">
  <td><?php echo CHtml::link('queryCachingCount', array('/site/doc', 'view' => 'CDbConnection', '#' => 'queryCachingCount-detail')); ?></td>
  <td>integer</td>
  <td>the number of SQL statements that need to be cached next.</td>
  <td>CDbConnection</td>
</tr>
<tr id="queryCachingDependency">
  <td><?php echo CHtml::link('queryCachingDependency', array('/site/doc', 'view' => 'CDbConnection', '#' => 'queryCachingDependency-detail')); ?></td>
  <td>CCacheDependency|ICacheDependency</td>
  <td>the dependency that will be used when saving query results into cache.</td>
  <td>CDbConnection</td>
</tr>
<tr id="queryCachingDuration">
  <td><?php echo CHtml::link('queryCachingDuration', array('/site/doc', 'view' => 'CDbConnection', '#' => 'queryCachingDuration-detail')); ?></td>
  <td>integer</td>
  <td>number of seconds that query results can remain valid in cache.</td>
  <td>CDbConnection</td>
</tr>
<tr id="schema">
  <td><?php echo CHtml::link('schema', array('/site/doc', 'view' => 'CDbConnection', '#' => 'schema-detail')); ?></td>
  <td><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
  <td>Returns the database schema for the current connection</td>
  <td>CDbConnection</td>
</tr>
<tr id="schemaCacheID">
  <td><?php echo CHtml::link('schemaCacheID', array('/site/doc', 'view' => 'CDbConnection', '#' => 'schemaCacheID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the cache application component that is used to cache the table metadata.</td>
  <td>CDbConnection</td>
</tr>
<tr id="schemaCachingDuration">
  <td><?php echo CHtml::link('schemaCachingDuration', array('/site/doc', 'view' => 'CDbConnection', '#' => 'schemaCachingDuration-detail')); ?></td>
  <td>integer</td>
  <td>number of seconds that table metadata can remain valid in cache.</td>
  <td>CDbConnection</td>
</tr>
<tr id="schemaCachingExclude">
  <td><?php echo CHtml::link('schemaCachingExclude', array('/site/doc', 'view' => 'CDbConnection', '#' => 'schemaCachingExclude-detail')); ?></td>
  <td>array</td>
  <td>list of tables whose metadata should NOT be cached.</td>
  <td>CDbConnection</td>
</tr>
<tr id="serverInfo">
  <td><?php echo CHtml::link('serverInfo', array('/site/doc', 'view' => 'CDbConnection', '#' => 'serverInfo-detail')); ?></td>
  <td>string</td>
  <td>Returns the information of DBMS server.</td>
  <td>CDbConnection</td>
</tr>
<tr id="serverVersion">
  <td><?php echo CHtml::link('serverVersion', array('/site/doc', 'view' => 'CDbConnection', '#' => 'serverVersion-detail')); ?></td>
  <td>string</td>
  <td>Returns the version information of DBMS server.</td>
  <td>CDbConnection</td>
</tr>
<tr id="stats">
  <td><?php echo CHtml::link('stats', array('/site/doc', 'view' => 'CDbConnection', '#' => 'stats-detail')); ?></td>
  <td>array</td>
  <td>Returns the statistical results of SQL executions.</td>
  <td>CDbConnection</td>
</tr>
<tr id="tablePrefix">
  <td><?php echo CHtml::link('tablePrefix', array('/site/doc', 'view' => 'CDbConnection', '#' => 'tablePrefix-detail')); ?></td>
  <td>string</td>
  <td>the default prefix for table names.</td>
  <td>CDbConnection</td>
</tr>
<tr id="timeout">
  <td><?php echo CHtml::link('timeout', array('/site/doc', 'view' => 'CDbConnection', '#' => 'timeout-detail')); ?></td>
  <td>integer</td>
  <td>Returns the timeout settings for the connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="username">
  <td><?php echo CHtml::link('username', array('/site/doc', 'view' => 'CDbConnection', '#' => 'username-detail')); ?></td>
  <td>string</td>
  <td>the username for establishing DB connection.</td>
  <td>CDbConnection</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CDbConnection', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CDbConnection</td>
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
  <td><?php echo CHtml::link('__sleep()', array('/site/doc', 'view' => 'CDbConnection', '#' => '__sleep-detail')); ?></td>
  <td>Close the connection when serializing.</td>
  <td>CDbConnection</td>
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
<tr id="beginTransaction">
  <td><?php echo CHtml::link('beginTransaction()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'beginTransaction-detail')); ?></td>
  <td>Starts a transaction.</td>
  <td>CDbConnection</td>
</tr>
<tr id="cache">
  <td><?php echo CHtml::link('cache()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'cache-detail')); ?></td>
  <td>Sets the parameters about query caching.</td>
  <td>CDbConnection</td>
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
<tr id="createCommand">
  <td><?php echo CHtml::link('createCommand()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'createCommand-detail')); ?></td>
  <td>Creates a command for execution.</td>
  <td>CDbConnection</td>
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
<tr id="getActive">
  <td><?php echo CHtml::link('getActive()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getActive-detail')); ?></td>
  <td>Returns whether the DB connection is established.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getAttribute">
  <td><?php echo CHtml::link('getAttribute()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getAttribute-detail')); ?></td>
  <td>Obtains a specific DB connection attribute information.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getAttributes">
  <td><?php echo CHtml::link('getAttributes()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getAttributes-detail')); ?></td>
  <td>Returns the attributes that are previously explicitly set for the DB connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getAutoCommit">
  <td><?php echo CHtml::link('getAutoCommit()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getAutoCommit-detail')); ?></td>
  <td>Returns whether creating or updating a DB record will be automatically committed.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getAvailableDrivers">
  <td><?php echo CHtml::link('getAvailableDrivers()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getAvailableDrivers-detail')); ?></td>
  <td>Returns a list of available PDO drivers.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getClientVersion">
  <td><?php echo CHtml::link('getClientVersion()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getClientVersion-detail')); ?></td>
  <td>Returns the version information of the DB driver.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getColumnCase">
  <td><?php echo CHtml::link('getColumnCase()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getColumnCase-detail')); ?></td>
  <td>Returns the case of the column names</td>
  <td>CDbConnection</td>
</tr>
<tr id="getCommandBuilder">
  <td><?php echo CHtml::link('getCommandBuilder()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getCommandBuilder-detail')); ?></td>
  <td>Returns the SQL command builder for the current DB connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getConnectionStatus">
  <td><?php echo CHtml::link('getConnectionStatus()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getConnectionStatus-detail')); ?></td>
  <td>Returns the status of the connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getCurrentTransaction">
  <td><?php echo CHtml::link('getCurrentTransaction()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getCurrentTransaction-detail')); ?></td>
  <td>Returns the currently active transaction.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getDriverName">
  <td><?php echo CHtml::link('getDriverName()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getDriverName-detail')); ?></td>
  <td>Returns the name of the DB driver</td>
  <td>CDbConnection</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="getLastInsertID">
  <td><?php echo CHtml::link('getLastInsertID()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getLastInsertID-detail')); ?></td>
  <td>Returns the ID of the last inserted row or sequence value.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getNullConversion">
  <td><?php echo CHtml::link('getNullConversion()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getNullConversion-detail')); ?></td>
  <td>Returns how the null and empty strings are converted.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getPdoInstance">
  <td><?php echo CHtml::link('getPdoInstance()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getPdoInstance-detail')); ?></td>
  <td>Returns the PDO instance.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getPdoType">
  <td><?php echo CHtml::link('getPdoType()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getPdoType-detail')); ?></td>
  <td>Determines the PDO type for the specified PHP type.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getPersistent">
  <td><?php echo CHtml::link('getPersistent()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getPersistent-detail')); ?></td>
  <td>Returns whether the connection is persistent or not.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getPrefetch">
  <td><?php echo CHtml::link('getPrefetch()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getPrefetch-detail')); ?></td>
  <td>Returns whether the connection performs data prefetching.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getSchema">
  <td><?php echo CHtml::link('getSchema()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getSchema-detail')); ?></td>
  <td>Returns the database schema for the current connection</td>
  <td>CDbConnection</td>
</tr>
<tr id="getServerInfo">
  <td><?php echo CHtml::link('getServerInfo()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getServerInfo-detail')); ?></td>
  <td>Returns the information of DBMS server.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getServerVersion">
  <td><?php echo CHtml::link('getServerVersion()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getServerVersion-detail')); ?></td>
  <td>Returns the version information of DBMS server.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getStats">
  <td><?php echo CHtml::link('getStats()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getStats-detail')); ?></td>
  <td>Returns the statistical results of SQL executions.</td>
  <td>CDbConnection</td>
</tr>
<tr id="getTimeout">
  <td><?php echo CHtml::link('getTimeout()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getTimeout-detail')); ?></td>
  <td>Returns the timeout settings for the connection.</td>
  <td>CDbConnection</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'init-detail')); ?></td>
  <td>Initializes the component.</td>
  <td>CDbConnection</td>
</tr>
<tr id="quoteColumnName">
  <td><?php echo CHtml::link('quoteColumnName()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'quoteColumnName-detail')); ?></td>
  <td>Quotes a column name for use in a query.</td>
  <td>CDbConnection</td>
</tr>
<tr id="quoteTableName">
  <td><?php echo CHtml::link('quoteTableName()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'quoteTableName-detail')); ?></td>
  <td>Quotes a table name for use in a query.</td>
  <td>CDbConnection</td>
</tr>
<tr id="quoteValue">
  <td><?php echo CHtml::link('quoteValue()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'quoteValue-detail')); ?></td>
  <td>Quotes a string value for use in a query.</td>
  <td>CDbConnection</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setActive">
  <td><?php echo CHtml::link('setActive()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setActive-detail')); ?></td>
  <td>Open or close the DB connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="setAttribute">
  <td><?php echo CHtml::link('setAttribute()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setAttribute-detail')); ?></td>
  <td>Sets an attribute on the database connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="setAttributes">
  <td><?php echo CHtml::link('setAttributes()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setAttributes-detail')); ?></td>
  <td>Sets a set of attributes on the database connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="setAutoCommit">
  <td><?php echo CHtml::link('setAutoCommit()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setAutoCommit-detail')); ?></td>
  <td>Sets whether creating or updating a DB record will be automatically committed.</td>
  <td>CDbConnection</td>
</tr>
<tr id="setColumnCase">
  <td><?php echo CHtml::link('setColumnCase()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setColumnCase-detail')); ?></td>
  <td>Sets the case of the column names.</td>
  <td>CDbConnection</td>
</tr>
<tr id="setNullConversion">
  <td><?php echo CHtml::link('setNullConversion()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setNullConversion-detail')); ?></td>
  <td>Sets how the null and empty strings are converted.</td>
  <td>CDbConnection</td>
</tr>
<tr id="setPersistent">
  <td><?php echo CHtml::link('setPersistent()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setPersistent-detail')); ?></td>
  <td>Sets whether the connection is persistent or not.</td>
  <td>CDbConnection</td>
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
<tr id="close">
  <td><?php echo CHtml::link('close()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'close-detail')); ?></td>
  <td>Closes the currently active DB connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="createPdoInstance">
  <td><?php echo CHtml::link('createPdoInstance()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'createPdoInstance-detail')); ?></td>
  <td>Creates the PDO instance.</td>
  <td>CDbConnection</td>
</tr>
<tr id="initConnection">
  <td><?php echo CHtml::link('initConnection()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'initConnection-detail')); ?></td>
  <td>Initializes the open db connection.</td>
  <td>CDbConnection</td>
</tr>
<tr id="open">
  <td><?php echo CHtml::link('open()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'open-detail')); ?></td>
  <td>Opens DB connection if it is currently not</td>
  <td>CDbConnection</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="active-detail">
active<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getActive</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getActive')); ?>()<br/>public void <?php echo CHtml::link('<b>setActive</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setActive')); ?>(boolean $value)</div>

<p>Returns whether the DB connection is established.</p>


<div class="detailHeader" id="attributes-detail">
attributes<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getAttributes</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getAttributes')); ?>()<br/>public void <?php echo CHtml::link('<b>setAttributes</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setAttributes')); ?>(array $values)</div>

<p>Returns the attributes that are previously explicitly set for the DB connection.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setAttributes', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setAttributes')); ?></li>
</ul>
</div>

<div class="detailHeader" id="autoCommit-detail">
autoCommit<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getAutoCommit</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getAutoCommit')); ?>()<br/>public void <?php echo CHtml::link('<b>setAutoCommit</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setAutoCommit')); ?>(boolean $value)</div>

<p>Returns whether creating or updating a DB record will be automatically committed.
Some DBMS (such as sqlite) may not support this feature.</p>


<div class="detailHeader" id="autoConnect-detail">
autoConnect<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$autoConnect</b>;</div>

<p>whether the database connection should be automatically established
the component is being initialized. Defaults to true. Note, this property is only
effective when the CDbConnection object is used as an application component.</p>


<div class="detailHeader" id="charset-detail">
charset<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$charset</b>;</div>

<p>the charset used for database connection. The property is only used
for MySQL and PostgreSQL databases. Defaults to null, meaning using default charset
as specified by the database.
<br/><br/>
Note that if you're using GBK or BIG5 then it's highly recommended to
update to PHP 5.3.6+ and to specify charset via DSN like
'mysql:dbname=mydatabase;host=127.0.0.1;charset=GBK;'.</p>


<div class="detailHeader" id="clientVersion-detail">
clientVersion<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getClientVersion</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getClientVersion')); ?>()</div>

<p>Returns the version information of the DB driver.</p>


<div class="detailHeader" id="columnCase-detail">
columnCase<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <?php echo CHtml::link('<b>getColumnCase</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getColumnCase')); ?>()<br/>public void <?php echo CHtml::link('<b>setColumnCase</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setColumnCase')); ?>(mixed $value)</div>

<p>Returns the case of the column names</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/pdo.setattribute.php">http://www.php.net/manual/en/pdo.setattribute.php</a></li>
</ul>
</div>

<div class="detailHeader" id="commandBuilder-detail">
commandBuilder<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?> <?php echo CHtml::link('<b>getCommandBuilder</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getCommandBuilder')); ?>()</div>

<p>Returns the SQL command builder for the current DB connection.</p>


<div class="detailHeader" id="connectionStatus-detail">
connectionStatus<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getConnectionStatus</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getConnectionStatus')); ?>()</div>

<p>Returns the status of the connection.
Some DBMS (such as sqlite) may not support this feature.</p>


<div class="detailHeader" id="connectionString-detail">
connectionString<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$connectionString</b>;</div>

<p>The Data Source Name, or DSN, contains the information required to connect to the database.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDO-construct.php">Note that if you're using GBK or BIG5 then it's highly recommended to
update to PHP 5.3.6+ and to specify charset via DSN like
'mysql:dbname=mydatabase;host=127.0.0.1;charset=GBK;'.</a></li>
</ul>
</div>

<div class="detailHeader" id="currentTransaction-detail">
currentTransaction<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbTransaction', array('/site/doc', 'view' => 'CDbTransaction')); ?> <?php echo CHtml::link('<b>getCurrentTransaction</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getCurrentTransaction')); ?>()</div>

<p>Returns the currently active transaction.</p>


<div class="detailHeader" id="driverMap-detail">
driverMap<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public array <b>$driverMap</b>;</div>

<p>mapping between PDO driver and schema class name.
A schema class can be specified using path alias.</p>


<div class="detailHeader" id="driverName-detail">
driverName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getDriverName</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getDriverName')); ?>()</div>

<p>Returns the name of the DB driver</p>


<div class="detailHeader" id="emulatePrepare-detail">
emulatePrepare<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$emulatePrepare</b>;</div>

<p>whether to turn on prepare emulation. Defaults to false, meaning PDO
will use the native prepare support if available. For some databases (such as MySQL),
this may need to be set true so that PDO can emulate the prepare support to bypass
the buggy native prepare support. Note, this property is only effective for PHP 5.1.3 or above.
The default value is null, which will not change the ATTR_EMULATE_PREPARES value of PDO.</p>


<div class="detailHeader" id="enableParamLogging-detail">
enableParamLogging<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$enableParamLogging</b>;</div>

<p>whether to log the values that are bound to a prepare SQL statement.
Defaults to false. During development, you may consider setting this property to true
so that parameter values bound to SQL statements are logged for debugging purpose.
You should be aware that logging parameter values could be expensive and have significant
impact on the performance of your application.</p>


<div class="detailHeader" id="enableProfiling-detail">
enableProfiling<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$enableProfiling</b>;</div>

<p>whether to enable profiling the SQL statements being executed.
Defaults to false. This should be mainly enabled and used during development
to find out the bottleneck of SQL executions.</p>


<div class="detailHeader" id="initSQLs-detail">
initSQLs<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public array <b>$initSQLs</b>;</div>

<p>list of SQL statements that should be executed right after the DB connection is established.</p>


<div class="detailHeader" id="lastInsertID-detail">
lastInsertID<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLastInsertID</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getLastInsertID')); ?>(string $sequenceName='')</div>

<p>Returns the ID of the last inserted row or sequence value.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDO-lastInsertId.php">http://www.php.net/manual/en/function.PDO-lastInsertId.php</a></li>
</ul>
</div>

<div class="detailHeader" id="nullConversion-detail">
nullConversion<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <?php echo CHtml::link('<b>getNullConversion</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getNullConversion')); ?>()<br/>public void <?php echo CHtml::link('<b>setNullConversion</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setNullConversion')); ?>(mixed $value)</div>

<p>Returns how the null and empty strings are converted.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/pdo.setattribute.php">http://www.php.net/manual/en/pdo.setattribute.php</a></li>
</ul>
</div>

<div class="detailHeader" id="password-detail">
password<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$password</b>;</div>

<p>the password for establishing DB connection. Defaults to empty string.</p>


<div class="detailHeader" id="pdoClass-detail">
pdoClass<span class="detailHeaderTag">
property
 (available since v1.1.8)
</span>
</div>

<div class="signature">
public string <b>$pdoClass</b>;</div>

<p>Custom PDO wrapper class.</p>


<div class="detailHeader" id="pdoInstance-detail">
pdoInstance<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public PDO <?php echo CHtml::link('<b>getPdoInstance</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getPdoInstance')); ?>()</div>

<p>Returns the PDO instance.</p>


<div class="detailHeader" id="persistent-detail">
persistent<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getPersistent</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getPersistent')); ?>()<br/>public void <?php echo CHtml::link('<b>setPersistent</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setPersistent')); ?>(boolean $value)</div>

<p>Returns whether the connection is persistent or not.
Some DBMS (such as sqlite) may not support this feature.</p>


<div class="detailHeader" id="prefetch-detail">
prefetch<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getPrefetch</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getPrefetch')); ?>()</div>

<p>Returns whether the connection performs data prefetching.</p>


<div class="detailHeader" id="queryCacheID-detail">
queryCacheID<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public string <b>$queryCacheID</b>;</div>

<p>the ID of the cache application component that is used for query caching.
Defaults to 'cache' which refers to the primary cache application component.
Set this property to false if you want to disable query caching.</p>


<div class="detailHeader" id="queryCachingCount-detail">
queryCachingCount<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public integer <b>$queryCachingCount</b>;</div>

<p>the number of SQL statements that need to be cached next.
If this is 0, then even if query caching is enabled, no query will be cached.
Note that each time after executing a SQL statement (whether executed on DB server or fetched from
query cache), this property will be reduced by 1 until 0.</p>


<div class="detailHeader" id="queryCachingDependency-detail">
queryCachingDependency<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public CCacheDependency|ICacheDependency <b>$queryCachingDependency</b>;</div>

<p>the dependency that will be used when saving query results into cache.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('queryCachingDuration', array('/site/doc', 'view' => 'CDbConnection', '#' => 'queryCachingDuration')); ?></li>
</ul>
</div>

<div class="detailHeader" id="queryCachingDuration-detail">
queryCachingDuration<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public integer <b>$queryCachingDuration</b>;</div>

<p>number of seconds that query results can remain valid in cache.
Use 0 or negative value to indicate not caching query results (the default behavior).
<br/><br/>
In order to enable query caching, this property must be a positive
integer and <?php echo CHtml::link('queryCacheID', array('/site/doc', 'view' => 'CDbConnection', '#' => 'queryCacheID')); ?> must point to a valid cache component ID.
<br/><br/>
The method <?php echo CHtml::link('cache()', array('/site/doc', 'view' => 'CDbConnection', '#' => 'cache')); ?> is provided as a convenient way of setting this property
and <?php echo CHtml::link('queryCachingDependency', array('/site/doc', 'view' => 'CDbConnection', '#' => 'queryCachingDependency')); ?> on the fly.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('cache', array('/site/doc', 'view' => 'CDbConnection', '#' => 'cache')); ?></li>
	<li><?php echo CHtml::link('queryCachingDependency', array('/site/doc', 'view' => 'CDbConnection', '#' => 'queryCachingDependency')); ?></li>
	<li><?php echo CHtml::link('queryCacheID', array('/site/doc', 'view' => 'CDbConnection', '#' => 'queryCacheID')); ?></li>
</ul>
</div>

<div class="detailHeader" id="schema-detail">
schema<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?> <?php echo CHtml::link('<b>getSchema</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getSchema')); ?>()</div>

<p>Returns the database schema for the current connection</p>


<div class="detailHeader" id="schemaCacheID-detail">
schemaCacheID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$schemaCacheID</b>;</div>

<p>the ID of the cache application component that is used to cache the table metadata.
Defaults to 'cache' which refers to the primary cache application component.
Set this property to false if you want to disable caching table metadata.</p>


<div class="detailHeader" id="schemaCachingDuration-detail">
schemaCachingDuration<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$schemaCachingDuration</b>;</div>

<p>number of seconds that table metadata can remain valid in cache.
Use 0 or negative value to indicate not caching schema.
If greater than 0 and the primary cache is enabled, the table metadata will be cached.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('schemaCachingExclude', array('/site/doc', 'view' => 'CDbConnection', '#' => 'schemaCachingExclude')); ?></li>
</ul>
</div>

<div class="detailHeader" id="schemaCachingExclude-detail">
schemaCachingExclude<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$schemaCachingExclude</b>;</div>

<p>list of tables whose metadata should NOT be cached. Defaults to empty array.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('schemaCachingDuration', array('/site/doc', 'view' => 'CDbConnection', '#' => 'schemaCachingDuration')); ?></li>
</ul>
</div>

<div class="detailHeader" id="serverInfo-detail">
serverInfo<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getServerInfo</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getServerInfo')); ?>()</div>

<p>Returns the information of DBMS server.</p>


<div class="detailHeader" id="serverVersion-detail">
serverVersion<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getServerVersion</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getServerVersion')); ?>()</div>

<p>Returns the version information of DBMS server.</p>


<div class="detailHeader" id="stats-detail">
stats<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getStats</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getStats')); ?>()</div>

<p>Returns the statistical results of SQL executions.
The results returned include the number of SQL statements executed and
the total time spent.
In order to use this method, <?php echo CHtml::link('enableProfiling', array('/site/doc', 'view' => 'CDbConnection', '#' => 'enableProfiling')); ?> has to be set true.</p>


<div class="detailHeader" id="tablePrefix-detail">
tablePrefix<span class="detailHeaderTag">
property
 (available since v1.1.0)
</span>
</div>

<div class="signature">
public string <b>$tablePrefix</b>;</div>

<p>the default prefix for table names. Defaults to null, meaning no table prefix.
By setting this property, any token like '{{tableName}}' in <?php echo CHtml::link('CDbCommand::text', array('/site/doc', 'view' => 'CDbCommand', '#' => 'text')); ?> will
be replaced by 'prefixTableName', where 'prefix' refers to this property value.</p>


<div class="detailHeader" id="timeout-detail">
timeout<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getTimeout</b>', array('/site/doc', 'view' => 'CDbConnection', '#' => 'getTimeout')); ?>()</div>

<p>Returns the timeout settings for the connection.</p>


<div class="detailHeader" id="username-detail">
username<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$username</b>;</div>

<p>the username for establishing DB connection. Defaults to empty string.</p>


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
public void <b>__construct</b>(string $dsn='', string $username='', string $password='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dsn</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The Data Source Name, or DSN, contains the information required to connect to the database.</td>
</tr>
<tr>
  <td class="paramNameCol">$username</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The user name for the DSN string.</td>
</tr>
<tr>
  <td class="paramNameCol">$password</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The password for the DSN string.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L270">yii\db\CDbConnection.php#L270</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$username</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$password</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionString</span><span style="color: #007700">=</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">=</span><span style="color: #0000BB">$username</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">=</span><span style="color: #0000BB">$password</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.
Note, the DB connection is not established when this connection
instance is created. Set <?php echo CHtml::link('active', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setActive')); ?> property to true
to establish the connection.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDO-construct.php">http://www.php.net/manual/en/function.PDO-construct.php</a></li>
</ul>
</div>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L281">yii\db\CDbConnection.php#L281</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__sleep</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">get_object_vars</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Close the connection when serializing.</p>


<div class="detailHeader" id="beginTransaction-detail">
beginTransaction()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbTransaction', array('/site/doc', 'view' => 'CDbTransaction')); ?> <b>beginTransaction</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTransaction', array('/site/doc', 'view' => 'CDbTransaction')); ?></td>
  <td class="paramDescCol">the transaction initiated</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L502">yii\db\CDbConnection.php#L502</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beginTransaction</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #DD0000">'Starting&nbsp;transaction'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbConnection'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setActive</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beginTransaction</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_transaction</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDbTransaction</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Starts a transaction.</p>


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
public CDbConnection <b>cache</b>(integer $duration, CCacheDependency|ICacheDependency $dependency=NULL, integer $queryCount=1)</div>
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
  <td class="paramTypeCol">CDbConnection</td>
  <td class="paramDescCol">the connection instance itself.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L353">yii\db\CDbConnection.php#L353</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">cache</span><span style="color: #007700">(</span><span style="color: #0000BB">$duration</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dependency</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$queryCount</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDuration</span><span style="color: #007700">=</span><span style="color: #0000BB">$duration</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDependency</span><span style="color: #007700">=</span><span style="color: #0000BB">$dependency</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingCount</span><span style="color: #007700">=</span><span style="color: #0000BB">$queryCount</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the parameters about query caching.
This method can be used to enable or disable query caching.
By setting the $duration parameter to be 0, the query caching will be disabled.
Otherwise, query results of the new SQL statements executed next will be saved in cache
and remain valid for the specified duration.
If the same query is executed again, the result may be fetched from cache directly
without actually executing the SQL statement.</p>


<div class="detailHeader" id="close-detail">
close()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>close</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L398">yii\db\CDbConnection.php#L398</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">close</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #DD0000">'Closing&nbsp;DB&nbsp;connection'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbConnection'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_active</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_schema</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Closes the currently active DB connection.
It does nothing if the connection is already closed.</p>


<div class="detailHeader" id="createCommand-detail">
createCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>createCommand</b>(mixed $query=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$query</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the DB query to be executed. This can be either a string representing a SQL statement,
or an array representing different fragments of a SQL statement. Please refer to <?php echo CHtml::link('CDbCommand::__construct', array('/site/doc', 'view' => 'CDbCommand', '#' => '__construct')); ?>
for more details about how to pass an array as the query. If this parameter is not given,
you will have to call query builder methods of <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> to build the DB query.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">the DB command</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L478">yii\db\CDbConnection.php#L478</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setActive</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a command for execution.</p>


<div class="detailHeader" id="createPdoInstance-detail">
createPdoInstance()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected PDO <b>createPdoInstance</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">PDO</td>
  <td class="paramDescCol">the pdo instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L413">yii\db\CDbConnection.php#L413</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createPdoInstance</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pdoClass</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pdoClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionString</span><span style="color: #007700">,</span><span style="color: #DD0000">':'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$driver</span><span style="color: #007700">=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionString</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$driver</span><span style="color: #007700">===</span><span style="color: #DD0000">'mssql'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$driver</span><span style="color: #007700">===</span><span style="color: #DD0000">'dblib'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pdoClass</span><span style="color: #007700">=</span><span style="color: #DD0000">'CMssqlPdoAdapter'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$driver</span><span style="color: #007700">===</span><span style="color: #DD0000">'sqlsrv'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pdoClass</span><span style="color: #007700">=</span><span style="color: #DD0000">'CMssqlSqlsrvPdoAdapter'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$pdoClass</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbConnection&nbsp;is&nbsp;unable&nbsp;to&nbsp;find&nbsp;PDO&nbsp;class&nbsp;"{className}".&nbsp;Make&nbsp;sure&nbsp;PDO&nbsp;is&nbsp;installed&nbsp;correctly.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{className}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$pdoClass</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">$instance</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$pdoClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionString</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$instance</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbConnection&nbsp;failed&nbsp;to&nbsp;open&nbsp;the&nbsp;DB&nbsp;connection.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$instance</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates the PDO instance.
When some functionalities are missing in the pdo driver, we may use
an adapter class to provide them.</p>


<div class="detailHeader" id="getActive-detail">
getActive()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getActive</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the DB connection is established</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L315">yii\db\CDbConnection.php#L315</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getActive</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_active</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether the DB connection is established.</p>


<div class="detailHeader" id="getAttribute-detail">
getAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getAttribute</b>(integer $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the attribute to be queried</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the corresponding attribute information</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L761">yii\db\CDbConnection.php#L761</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setActive</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Obtains a specific DB connection attribute information.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDO-getAttribute.php">http://www.php.net/manual/en/function.PDO-getAttribute.php</a></li>
</ul>
</div>

<div class="detailHeader" id="getAttributes-detail">
getAttributes()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getAttributes</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes (name=>value) that are previously explicitly set for the DB connection.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L787">yii\db\CDbConnection.php#L787</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAttributes</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the attributes that are previously explicitly set for the DB connection.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setAttributes', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setAttributes')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getAutoCommit-detail">
getAutoCommit()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getAutoCommit</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether creating or updating a DB record will be automatically committed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L654">yii\db\CDbConnection.php#L654</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAutoCommit</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_AUTOCOMMIT</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether creating or updating a DB record will be automatically committed.
Some DBMS (such as sqlite) may not support this feature.</p>


<div class="detailHeader" id="getAvailableDrivers-detail">
getAvailableDrivers()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>getAvailableDrivers</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of available PDO drivers</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L292">yii\db\CDbConnection.php#L292</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getAvailableDrivers</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">getAvailableDrivers</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns a list of available PDO drivers.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDO-getAvailableDrivers.php">http://www.php.net/manual/en/function.PDO-getAvailableDrivers.php</a></li>
</ul>
</div>

<div class="detailHeader" id="getClientVersion-detail">
getClientVersion()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getClientVersion</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the version information of the DB driver</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L704">yii\db\CDbConnection.php#L704</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getClientVersion</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_CLIENT_VERSION</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the version information of the DB driver.</p>


<div class="detailHeader" id="getColumnCase-detail">
getColumnCase()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getColumnCase</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the case of the column names</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L614">yii\db\CDbConnection.php#L614</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getColumnCase</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_CASE</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the case of the column names</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/pdo.setattribute.php">http://www.php.net/manual/en/pdo.setattribute.php</a></li>
</ul>
</div>

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
  <td class="paramDescCol">the command builder</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L534">yii\db\CDbConnection.php#L534</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the SQL command builder for the current DB connection.</p>


<div class="detailHeader" id="getConnectionStatus-detail">
getConnectionStatus()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getConnectionStatus</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the status of the connection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L714">yii\db\CDbConnection.php#L714</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getConnectionStatus</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_CONNECTION_STATUS</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the status of the connection.
Some DBMS (such as sqlite) may not support this feature.</p>


<div class="detailHeader" id="getCurrentTransaction-detail">
getCurrentTransaction()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbTransaction', array('/site/doc', 'view' => 'CDbTransaction')); ?> <b>getCurrentTransaction</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbTransaction', array('/site/doc', 'view' => 'CDbTransaction')); ?></td>
  <td class="paramDescCol">the currently active transaction. Null if no active transaction.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L488">yii\db\CDbConnection.php#L488</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCurrentTransaction</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_transaction</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_transaction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getActive</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_transaction</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the currently active transaction.</p>


<div class="detailHeader" id="getDriverName-detail">
getDriverName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getDriverName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the DB driver</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L693">yii\db\CDbConnection.php#L693</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionString</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">':'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pos</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;return&nbsp;$this-&gt;getAttribute(PDO::ATTR_DRIVER_NAME);<br /></span><span style="color: #007700">}</span>
</span>
</code></div>
</div>
<p>Returns the name of the DB driver</p>


<div class="detailHeader" id="getLastInsertID-detail">
getLastInsertID()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLastInsertID</b>(string $sequenceName='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sequenceName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the sequence object (required by some DBMS)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the row ID of the last row inserted, or the last value retrieved from the sequence object</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L545">yii\db\CDbConnection.php#L545</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLastInsertID</span><span style="color: #007700">(</span><span style="color: #0000BB">$sequenceName</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setActive</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastInsertId</span><span style="color: #007700">(</span><span style="color: #0000BB">$sequenceName</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the ID of the last inserted row or sequence value.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDO-lastInsertId.php">http://www.php.net/manual/en/function.PDO-lastInsertId.php</a></li>
</ul>
</div>

<div class="detailHeader" id="getNullConversion-detail">
getNullConversion()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getNullConversion</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">how the null and empty strings are converted</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L634">yii\db\CDbConnection.php#L634</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getNullConversion</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_ORACLE_NULLS</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns how the null and empty strings are converted.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/pdo.setattribute.php">http://www.php.net/manual/en/pdo.setattribute.php</a></li>
</ul>
</div>

<div class="detailHeader" id="getPdoInstance-detail">
getPdoInstance()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public PDO <b>getPdoInstance</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">PDO</td>
  <td class="paramDescCol">the PDO instance, null if the connection is not established yet</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L465">yii\db\CDbConnection.php#L465</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPdoInstance</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the PDO instance.</p>


<div class="detailHeader" id="getPdoType-detail">
getPdoType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getPdoType</b>(string $type)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The PHP type (obtained by gettype() call).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the corresponding PDO type</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L596">yii\db\CDbConnection.php#L596</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPdoType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$map</span><span style="color: #007700">=array<br />&nbsp;&nbsp;&nbsp;&nbsp;(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'boolean'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_BOOL</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'string'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'resource'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_LOB</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'NULL'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_NULL</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Determines the PDO type for the specified PHP type.</p>


<div class="detailHeader" id="getPersistent-detail">
getPersistent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getPersistent</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the connection is persistent or not</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L674">yii\db\CDbConnection.php#L674</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPersistent</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_PERSISTENT</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether the connection is persistent or not.
Some DBMS (such as sqlite) may not support this feature.</p>


<div class="detailHeader" id="getPrefetch-detail">
getPrefetch()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getPrefetch</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the connection performs data prefetching</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L723">yii\db\CDbConnection.php#L723</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrefetch</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_PREFETCH</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether the connection performs data prefetching.</p>


<div class="detailHeader" id="getSchema-detail">
getSchema()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?> <b>getSchema</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbSchema', array('/site/doc', 'view' => 'CDbSchema')); ?></td>
  <td class="paramDescCol">the database schema for the current connection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L515">yii\db\CDbConnection.php#L515</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_schema</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_schema</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$driver</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">driverMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$driver</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_schema</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">driverMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$driver</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbConnection&nbsp;does&nbsp;not&nbsp;support&nbsp;reading&nbsp;schema&nbsp;for&nbsp;{driver}&nbsp;database.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{driver}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$driver</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Returns the database schema for the current connection</p>


<div class="detailHeader" id="getServerInfo-detail">
getServerInfo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getServerInfo</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the information of DBMS server</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L732">yii\db\CDbConnection.php#L732</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getServerInfo</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_SERVER_INFO</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the information of DBMS server.</p>


<div class="detailHeader" id="getServerVersion-detail">
getServerVersion()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getServerVersion</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the version information of DBMS server</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L741">yii\db\CDbConnection.php#L741</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getServerVersion</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_SERVER_VERSION</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the version information of DBMS server.</p>


<div class="detailHeader" id="getStats-detail">
getStats()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getStats</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the first element indicates the number of SQL statements executed,
and the second element the total time spent in SQL execution.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L812">yii\db\CDbConnection.php#L812</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getStats</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$logger</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getLogger</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$timings</span><span style="color: #007700">=</span><span style="color: #0000BB">$logger</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProfilingResults</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbCommand.query'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$timings</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">array_sum</span><span style="color: #007700">(</span><span style="color: #0000BB">$timings</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$timings</span><span style="color: #007700">=</span><span style="color: #0000BB">$logger</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProfilingResults</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbCommand.execute'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">+=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$timings</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">+=</span><span style="color: #0000BB">array_sum</span><span style="color: #007700">(</span><span style="color: #0000BB">$timings</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #0000BB">$count</span><span style="color: #007700">,</span><span style="color: #0000BB">$time</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the statistical results of SQL executions.
The results returned include the number of SQL statements executed and
the total time spent.
In order to use this method, <?php echo CHtml::link('enableProfiling', array('/site/doc', 'view' => 'CDbConnection', '#' => 'enableProfiling')); ?> has to be set true.</p>


<div class="detailHeader" id="getTimeout-detail">
getTimeout()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getTimeout</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">timeout settings for the connection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L750">yii\db\CDbConnection.php#L750</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTimeout</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_TIMEOUT</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the timeout settings for the connection.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L304">yii\db\CDbConnection.php#L304</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoConnect</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setActive</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the component.
This method is required by <?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?> and is invoked by application
when the CDbConnection is used as an application component.
If you override this method, make sure to call the parent implementation
so that the component can be marked as initialized.</p>


<div class="detailHeader" id="initConnection-detail">
initConnection()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>initConnection</b>(PDO $pdo)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pdo</td>
  <td class="paramTypeCol">PDO</td>
  <td class="paramDescCol">the PDO instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L443">yii\db\CDbConnection.php#L443</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initConnection</span><span style="color: #007700">(</span><span style="color: #0000BB">$pdo</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_ERRMODE</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ERRMODE_EXCEPTION</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">emulatePrepare</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #DD0000">'PDO::ATTR_EMULATE_PREPARES'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_EMULATE_PREPARES</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">emulatePrepare</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">charset</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$driver</span><span style="color: #007700">=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_DRIVER_NAME</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$driver</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'pgsql'</span><span style="color: #007700">,</span><span style="color: #DD0000">'mysql'</span><span style="color: #007700">,</span><span style="color: #DD0000">'mysqli'</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">'SET&nbsp;NAMES&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">charset</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initSQLs</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initSQLs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the open db connection.
This method is invoked right after the db connection is established.
The default implementation is to set the charset for MySQL and PostgreSQL database connections.</p>


<div class="detailHeader" id="open-detail">
open()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>open</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L365">yii\db\CDbConnection.php#L365</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">open</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionString</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #DD0000">'CDbConnection.connectionString&nbsp;cannot&nbsp;be&nbsp;empty.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #DD0000">'Opening&nbsp;DB&nbsp;connection'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.db.CDbConnection'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPdoInstance</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initConnection</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_active</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">PDOException&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #DD0000">'CDbConnection&nbsp;failed&nbsp;to&nbsp;open&nbsp;the&nbsp;DB&nbsp;connection:&nbsp;'</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(),(int)</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCode</span><span style="color: #007700">(),</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorInfo</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(),</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_ERROR</span><span style="color: #007700">,</span><span style="color: #DD0000">'exception.CDbException'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #DD0000">'CDbConnection&nbsp;failed&nbsp;to&nbsp;open&nbsp;the&nbsp;DB&nbsp;connection.'</span><span style="color: #007700">,(int)</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCode</span><span style="color: #007700">(),</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorInfo</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Opens DB connection if it is currently not</p>


<div class="detailHeader" id="quoteColumnName-detail">
quoteColumnName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>quoteColumnName</b>(string $name)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L586">yii\db\CDbConnection.php#L586</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Quotes a column name for use in a query.
If the column name contains prefix, the prefix will also be properly quoted.</p>


<div class="detailHeader" id="quoteTableName-detail">
quoteTableName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>quoteTableName</b>(string $name)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L575">yii\db\CDbConnection.php#L575</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Quotes a table name for use in a query.
If the table name contains schema prefix, the prefix will also be properly quoted.</p>


<div class="detailHeader" id="quoteValue-detail">
quoteValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>quoteValue</b>(string $str)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$str</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">string to be quoted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the properly quoted string</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L557">yii\db\CDbConnection.php#L557</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">quoteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_int</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">is_float</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setActive</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;the&nbsp;driver&nbsp;doesn't&nbsp;support&nbsp;quote&nbsp;(e.g.&nbsp;oci)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #DD0000">"'"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">addcslashes</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">"'"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"''"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"\000\n\r\\\032"</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"'"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Quotes a string value for use in a query.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDO-quote.php">http://www.php.net/manual/en/function.PDO-quote.php</a></li>
</ul>
</div>

<div class="detailHeader" id="setActive-detail">
setActive()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setActive</b>(boolean $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to open or close DB connection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L325">yii\db\CDbConnection.php#L325</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setActive</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">!=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_active</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Open or close the DB connection.</p>


<div class="detailHeader" id="setAttribute-detail">
setAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setAttribute</b>(integer $name, mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the attribute to be set</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L773">yii\db\CDbConnection.php#L773</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">PDO</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets an attribute on the database connection.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDO-setAttribute.php">http://www.php.net/manual/en/function.PDO-setAttribute.php</a></li>
</ul>
</div>

<div class="detailHeader" id="setAttributes-detail">
setAttributes()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setAttributes</b>(array $values)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$values</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes (name=>value) to be set.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L798">yii\db\CDbConnection.php#L798</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets a set of attributes on the database connection.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setAttribute', array('/site/doc', 'view' => 'CDbConnection', '#' => 'setAttribute')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setAutoCommit-detail">
setAutoCommit()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setAutoCommit</b>(boolean $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether creating or updating a DB record will be automatically committed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L664">yii\db\CDbConnection.php#L664</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setAutoCommit</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_AUTOCOMMIT</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets whether creating or updating a DB record will be automatically committed.
Some DBMS (such as sqlite) may not support this feature.</p>


<div class="detailHeader" id="setColumnCase-detail">
setColumnCase()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setColumnCase</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the case of the column names</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L624">yii\db\CDbConnection.php#L624</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setColumnCase</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_CASE</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the case of the column names.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/pdo.setattribute.php">http://www.php.net/manual/en/pdo.setattribute.php</a></li>
</ul>
</div>

<div class="detailHeader" id="setNullConversion-detail">
setNullConversion()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setNullConversion</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">how the null and empty strings are converted</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L644">yii\db\CDbConnection.php#L644</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setNullConversion</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_ORACLE_NULLS</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets how the null and empty strings are converted.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/pdo.setattribute.php">http://www.php.net/manual/en/pdo.setattribute.php</a></li>
</ul>
</div>

<div class="detailHeader" id="setPersistent-detail">
setPersistent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setPersistent</b>(boolean $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the connection is persistent or not</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\CDbConnection.php#L684">yii\db\CDbConnection.php#L684</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setPersistent</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_PERSISTENT</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets whether the connection is persistent or not.
Some DBMS (such as sqlite) may not support this feature.</p>


