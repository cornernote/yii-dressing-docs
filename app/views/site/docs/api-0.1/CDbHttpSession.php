<?php
$this->pageTitle = $this->pageHeading = 'CDbHttpSession';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbHttpSession';
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
  <td><?php echo CHtml::link('system.web', array('/site/doc', '#' => 'system.web')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CDbHttpSession &raquo;
<?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>Countable, ArrayAccess, Traversable, IteratorAggregate, <?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php">yii/web/CDbHttpSession.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbHttpSession extends <?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?> by using database as session data storage.
<br/><br/>
CDbHttpSession stores session data in a DB table named 'YiiSession'. The table name
can be changed by setting <?php echo CHtml::link('sessionTableName', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'sessionTableName')); ?>. If the table does not exist,
it will be automatically created if <?php echo CHtml::link('autoCreateSessionTable', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'autoCreateSessionTable')); ?> is set true.
<br/><br/>
The following is the table structure:
<br/><br/>
<pre>
CREATE TABLE YiiSession
(
    id CHAR(32) PRIMARY KEY,
    expire INTEGER,
    data BLOB
)
</pre>
Where 'BLOB' refers to the BLOB-type of your preffered database.
<br/><br/>
Note that if your session IDs are more than 32 characters (can be changed via
session.hash_bits_per_character or session.hash_function) you should modify
SQL schema accordingly.
<br/><br/>
CDbHttpSession relies on <a href="http://www.php.net/manual/en/ref.pdo.php">PDO</a> to access database.
<br/><br/>
By default, it will use an SQLite3 database named 'session-YiiVersion.db' under the application runtime directory.
You can also specify <?php echo CHtml::link('connectionID', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'connectionID')); ?> so that it makes use of a DB application component to access database.
<br/><br/>
When using CDbHttpSession in a production server, we recommend you pre-create the session DB table
and set <?php echo CHtml::link('autoCreateSessionTable', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'autoCreateSessionTable')); ?> to be false. This will greatly improve the performance.
You may also create a DB index for the 'expire' column in the session table to further improve the performance.</div>
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
<tr id="autoCreateSessionTable">
  <td><?php echo CHtml::link('autoCreateSessionTable', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'autoCreateSessionTable-detail')); ?></td>
  <td>boolean</td>
  <td>whether the session DB table should be automatically created if not exists.</td>
  <td>CDbHttpSession</td>
</tr>
<tr class="inherited" id="autoStart">
  <td><?php echo CHtml::link('autoStart', array('/site/doc', 'view' => 'CHttpSession', '#' => 'autoStart-detail')); ?></td>
  <td>boolean</td>
  <td>whether the session should be automatically started when the session application component is initialized, defaults to true.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="connectionID">
  <td><?php echo CHtml::link('connectionID', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'connectionID-detail')); ?></td>
  <td>string</td>
  <td>the ID of a <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> application component.</td>
  <td>CDbHttpSession</td>
</tr>
<tr class="inherited" id="cookieMode">
  <td><?php echo CHtml::link('cookieMode', array('/site/doc', 'view' => 'CHttpSession', '#' => 'cookieMode-detail')); ?></td>
  <td>string</td>
  <td>how to use cookie to store session ID.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="cookieParams">
  <td><?php echo CHtml::link('cookieParams', array('/site/doc', 'view' => 'CHttpSession', '#' => 'cookieParams-detail')); ?></td>
  <td>array</td>
  <td>the session cookie parameters.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="count">
  <td><?php echo CHtml::link('count', array('/site/doc', 'view' => 'CHttpSession', '#' => 'count-detail')); ?></td>
  <td>integer</td>
  <td>Returns the number of items in the session.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="gCProbability">
  <td><?php echo CHtml::link('gCProbability', array('/site/doc', 'view' => 'CHttpSession', '#' => 'gCProbability-detail')); ?></td>
  <td>float</td>
  <td>the probability (percentage) that the gc (garbage collection) process is started on every session initialization, defaults to 1 meaning 1% chance.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="isStarted">
  <td><?php echo CHtml::link('isStarted', array('/site/doc', 'view' => 'CHttpSession', '#' => 'isStarted-detail')); ?></td>
  <td>boolean</td>
  <td>whether the session has started</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="iterator">
  <td><?php echo CHtml::link('iterator', array('/site/doc', 'view' => 'CHttpSession', '#' => 'iterator-detail')); ?></td>
  <td><?php echo CHtml::link('CHttpSessionIterator', array('/site/doc', 'view' => 'CHttpSessionIterator')); ?></td>
  <td>Returns an iterator for traversing the session variables.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="keys">
  <td><?php echo CHtml::link('keys', array('/site/doc', 'view' => 'CHttpSession', '#' => 'keys-detail')); ?></td>
  <td>array</td>
  <td>the list of session variable names</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="savePath">
  <td><?php echo CHtml::link('savePath', array('/site/doc', 'view' => 'CHttpSession', '#' => 'savePath-detail')); ?></td>
  <td>string</td>
  <td>the current session save path, defaults to {@link http://php.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="sessionID">
  <td><?php echo CHtml::link('sessionID', array('/site/doc', 'view' => 'CHttpSession', '#' => 'sessionID-detail')); ?></td>
  <td>string</td>
  <td>the current session ID</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="sessionName">
  <td><?php echo CHtml::link('sessionName', array('/site/doc', 'view' => 'CHttpSession', '#' => 'sessionName-detail')); ?></td>
  <td>string</td>
  <td>the current session name</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="sessionTableName">
  <td><?php echo CHtml::link('sessionTableName', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'sessionTableName-detail')); ?></td>
  <td>string</td>
  <td>the name of the DB table to store session content.</td>
  <td>CDbHttpSession</td>
</tr>
<tr class="inherited" id="timeout">
  <td><?php echo CHtml::link('timeout', array('/site/doc', 'view' => 'CHttpSession', '#' => 'timeout-detail')); ?></td>
  <td>integer</td>
  <td>the number of seconds after which data will be seen as 'garbage' and cleaned up, defaults to 1440 seconds.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="useCustomStorage">
  <td><?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'useCustomStorage-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether to use custom session storage.</td>
  <td>CDbHttpSession</td>
</tr>
<tr class="inherited" id="useTransparentSessionID">
  <td><?php echo CHtml::link('useTransparentSessionID', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useTransparentSessionID-detail')); ?></td>
  <td>boolean</td>
  <td>whether transparent sid support is enabled or not, defaults to false.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
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
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>the DB connection instance</td>
  <td>CDbHttpSession</td>
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
<tr class="inherited" id="add">
  <td><?php echo CHtml::link('add()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'add-detail')); ?></td>
  <td>Adds a session variable.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
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
<tr class="inherited" id="clear">
  <td><?php echo CHtml::link('clear()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'clear-detail')); ?></td>
  <td>Removes all session variables</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="close">
  <td><?php echo CHtml::link('close()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'close-detail')); ?></td>
  <td>Ends the current session and store session data.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="closeSession">
  <td><?php echo CHtml::link('closeSession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'closeSession-detail')); ?></td>
  <td>Session close handler.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="contains">
  <td><?php echo CHtml::link('contains()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'contains-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="count()">
  <td><?php echo CHtml::link('count()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'count()-detail')); ?></td>
  <td>Returns the number of items in the session.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="destroy">
  <td><?php echo CHtml::link('destroy()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'destroy-detail')); ?></td>
  <td>Frees all session variables and destroys all data registered to a session.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="destroySession">
  <td><?php echo CHtml::link('destroySession()', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'destroySession-detail')); ?></td>
  <td>Session destroy handler.</td>
  <td>CDbHttpSession</td>
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
<tr id="gcSession">
  <td><?php echo CHtml::link('gcSession()', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'gcSession-detail')); ?></td>
  <td>Session GC (garbage collection) handler.</td>
  <td>CDbHttpSession</td>
</tr>
<tr class="inherited" id="get">
  <td><?php echo CHtml::link('get()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'get-detail')); ?></td>
  <td>Returns the session variable value with the session variable name.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getCookieMode">
  <td><?php echo CHtml::link('getCookieMode()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCookieMode-detail')); ?></td>
  <td>Returns how to use cookie to store session ID. Defaults to 'Allow'.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getCookieParams">
  <td><?php echo CHtml::link('getCookieParams()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCookieParams-detail')); ?></td>
  <td>Returns the session cookie parameters.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getCount">
  <td><?php echo CHtml::link('getCount()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCount-detail')); ?></td>
  <td>Returns the number of items in the session.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getGCProbability">
  <td><?php echo CHtml::link('getGCProbability()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getGCProbability-detail')); ?></td>
  <td>Returns the probability (percentage) that the gc (garbage collection) process is started on every session initialization, defaults to 1 meaning 1% chance.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="getIsStarted">
  <td><?php echo CHtml::link('getIsStarted()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getIsStarted-detail')); ?></td>
  <td>Checks whether the session has started</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getIterator">
  <td><?php echo CHtml::link('getIterator()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getIterator-detail')); ?></td>
  <td>Returns an iterator for traversing the session variables.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getKeys">
  <td><?php echo CHtml::link('getKeys()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getKeys-detail')); ?></td>
  <td>Returns the list of session variable names</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getSavePath">
  <td><?php echo CHtml::link('getSavePath()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSavePath-detail')); ?></td>
  <td>Returns the current session save path, defaults to <a href="http://php.net/session.save_path">http://php.net/session.save_path</a>.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getSessionID">
  <td><?php echo CHtml::link('getSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSessionID-detail')); ?></td>
  <td>Returns the current session ID</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getSessionName">
  <td><?php echo CHtml::link('getSessionName()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSessionName-detail')); ?></td>
  <td>Returns the current session name</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getTimeout">
  <td><?php echo CHtml::link('getTimeout()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getTimeout-detail')); ?></td>
  <td>Returns the number of seconds after which data will be seen as 'garbage' and cleaned up, defaults to 1440 seconds.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="getUseCustomStorage">
  <td><?php echo CHtml::link('getUseCustomStorage()', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'getUseCustomStorage-detail')); ?></td>
  <td>Returns a value indicating whether to use custom session storage.</td>
  <td>CDbHttpSession</td>
</tr>
<tr class="inherited" id="getUseTransparentSessionID">
  <td><?php echo CHtml::link('getUseTransparentSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getUseTransparentSessionID-detail')); ?></td>
  <td>Returns whether transparent sid support is enabled or not, defaults to false.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="itemAt">
  <td><?php echo CHtml::link('itemAt()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'itemAt-detail')); ?></td>
  <td>Returns the session variable value with the session variable name.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetExists-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetGet-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetSet-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetUnset-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="open">
  <td><?php echo CHtml::link('open()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'open-detail')); ?></td>
  <td>Starts the session if it has not started yet.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="openSession">
  <td><?php echo CHtml::link('openSession()', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'openSession-detail')); ?></td>
  <td>Session open handler.</td>
  <td>CDbHttpSession</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="readSession">
  <td><?php echo CHtml::link('readSession()', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'readSession-detail')); ?></td>
  <td>Session read handler.</td>
  <td>CDbHttpSession</td>
</tr>
<tr id="regenerateID">
  <td><?php echo CHtml::link('regenerateID()', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'regenerateID-detail')); ?></td>
  <td>Updates the current session id with a newly generated one.</td>
  <td>CDbHttpSession</td>
</tr>
<tr class="inherited" id="remove">
  <td><?php echo CHtml::link('remove()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'remove-detail')); ?></td>
  <td>Removes a session variable.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setCookieMode">
  <td><?php echo CHtml::link('setCookieMode()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieMode-detail')); ?></td>
  <td>Sets how to use cookie to store session ID. Valid values include 'none', 'allow' and 'only'.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setCookieParams">
  <td><?php echo CHtml::link('setCookieParams()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieParams-detail')); ?></td>
  <td>Sets the session cookie parameters.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setGCProbability">
  <td><?php echo CHtml::link('setGCProbability()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setGCProbability-detail')); ?></td>
  <td>Sets the probability (percentage) that the gc (garbage collection) process is started on every session initialization.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setSavePath">
  <td><?php echo CHtml::link('setSavePath()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSavePath-detail')); ?></td>
  <td>Sets the current session save path</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setSessionID">
  <td><?php echo CHtml::link('setSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionID-detail')); ?></td>
  <td>Sets the session ID for the current session</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setSessionName">
  <td><?php echo CHtml::link('setSessionName()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionName-detail')); ?></td>
  <td>Sets the session name for the current session, must be an alphanumeric string, defaults to PHPSESSID</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setTimeout">
  <td><?php echo CHtml::link('setTimeout()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setTimeout-detail')); ?></td>
  <td>Sets the number of seconds after which data will be seen as 'garbage' and cleaned up</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setUseTransparentSessionID">
  <td><?php echo CHtml::link('setUseTransparentSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setUseTransparentSessionID-detail')); ?></td>
  <td>Sets whether transparent sid support is enabled or not.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="toArray">
  <td><?php echo CHtml::link('toArray()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'toArray-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="writeSession">
  <td><?php echo CHtml::link('writeSession()', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'writeSession-detail')); ?></td>
  <td>Session write handler.</td>
  <td>CDbHttpSession</td>
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
<tr id="createSessionTable">
  <td><?php echo CHtml::link('createSessionTable()', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'createSessionTable-detail')); ?></td>
  <td>Creates the session DB table.</td>
  <td>CDbHttpSession</td>
</tr>
<tr id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns the DB connection instance</td>
  <td>CDbHttpSession</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="autoCreateSessionTable-detail">
autoCreateSessionTable<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$autoCreateSessionTable</b>;</div>

<p>whether the session DB table should be automatically created if not exists. Defaults to true.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('sessionTableName', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'sessionTableName')); ?></li>
</ul>
</div>

<div class="detailHeader" id="connectionID-detail">
connectionID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$connectionID</b>;</div>

<p>the ID of a <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> application component. If not set, a SQLite database
will be automatically created and used. The SQLite database file is
is <code>protected/runtime/session-YiiVersion.db</code>.</p>


<div class="detailHeader" id="dbConnection-detail">
dbConnection<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <?php echo CHtml::link('<b>getDbConnection</b>', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'getDbConnection')); ?>()</div>

<p>the DB connection instance</p>


<div class="detailHeader" id="sessionTableName-detail">
sessionTableName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$sessionTableName</b>;</div>

<p>the name of the DB table to store session content.
Note, if <?php echo CHtml::link('autoCreateSessionTable', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'autoCreateSessionTable')); ?> is false and you want to create the DB table manually by yourself,
you need to make sure the DB table is of the following structure:
<pre>
(id CHAR(32) PRIMARY KEY, expire INTEGER, data BLOB)
</pre></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('autoCreateSessionTable', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'autoCreateSessionTable')); ?></li>
</ul>
</div>

<div class="detailHeader" id="useCustomStorage-detail">
useCustomStorage<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getUseCustomStorage</b>', array('/site/doc', 'view' => 'CDbHttpSession', '#' => 'getUseCustomStorage')); ?>()</div>

<p>Returns a value indicating whether to use custom session storage.
This method overrides the parent implementation and always returns true.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="createSessionTable-detail">
createSessionTable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>createSessionTable</b>(<?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> $db, string $tableName)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php#L139">yii/web/CDbHttpSession.php#L139</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createSessionTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">,</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'mysql'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$blob</span><span style="color: #007700">=</span><span style="color: #DD0000">'LONGBLOB'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'pgsql'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$blob</span><span style="color: #007700">=</span><span style="color: #DD0000">'BYTEA'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'sqlsrv'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'mssql'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'dblib'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$blob</span><span style="color: #007700">=</span><span style="color: #DD0000">'VARBINARY(MAX)'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$blob</span><span style="color: #007700">=</span><span style="color: #DD0000">'BLOB'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">,array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'CHAR(32)&nbsp;PRIMARY&nbsp;KEY'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'expire'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$blob</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>Creates the session DB table.</p>


<div class="detailHeader" id="destroySession-detail">
destroySession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>destroySession</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session ID</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether session is destroyed successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php#L279">yii/web/CDbHttpSession.php#L279</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">destroySession</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">,</span><span style="color: #DD0000">'id=:id'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">':id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session destroy handler.
Do not call this method directly.</p>


<div class="detailHeader" id="gcSession-detail">
gcSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>gcSession</b>(integer $maxLifetime)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$maxLifetime</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds after which data will be seen as 'garbage' and cleaned up.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether session is GCed successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php#L292">yii/web/CDbHttpSession.php#L292</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">gcSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$maxLifetime</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">,</span><span style="color: #DD0000">'expire&lt;:expire'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">':expire'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">time</span><span style="color: #007700">()));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session GC (garbage collection) handler.
Do not call this method directly.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php#L169">yii/web/CDbHttpSession.php#L169</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionID</span><span style="color: #007700">)!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">))&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">CDbConnection</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbHttpSession.connectionID&nbsp;"{id}"&nbsp;is&nbsp;invalid.&nbsp;Please&nbsp;make&nbsp;sure&nbsp;it&nbsp;refers&nbsp;to&nbsp;the&nbsp;ID&nbsp;of&nbsp;a&nbsp;CDbConnection&nbsp;application&nbsp;component.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{id}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dbFile</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRuntimePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'session-'</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getVersion</span><span style="color: #007700">().</span><span style="color: #DD0000">'.db'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDbConnection</span><span style="color: #007700">(</span><span style="color: #DD0000">'sqlite:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$dbFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getUseCustomStorage-detail">
getUseCustomStorage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getUseCustomStorage</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to use custom storage.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php#L83">yii/web/CDbHttpSession.php#L83</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUseCustomStorage</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether to use custom session storage.
This method overrides the parent implementation and always returns true.</p>


<div class="detailHeader" id="openSession-detail">
openSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>openSession</b>(string $savePath, string $sessionName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$savePath</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session save path</td>
</tr>
<tr>
  <td class="paramNameCol">$sessionName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether session is opened successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php#L195">yii/web/CDbHttpSession.php#L195</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">openSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$savePath</span><span style="color: #007700">,</span><span style="color: #0000BB">$sessionName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoCreateSessionTable</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setActive</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">,</span><span style="color: #DD0000">'expire&lt;:expire'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">':expire'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">time</span><span style="color: #007700">()));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createSessionTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session open handler.
Do not call this method directly.</p>


<div class="detailHeader" id="readSession-detail">
readSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>readSession</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session ID</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the session data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php#L219">yii/web/CDbHttpSession.php#L219</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">readSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">()==</span><span style="color: #DD0000">'sqlsrv'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">()==</span><span style="color: #DD0000">'mssql'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">()==</span><span style="color: #DD0000">'dblib'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$select</span><span style="color: #007700">=</span><span style="color: #DD0000">'CONVERT(VARCHAR(MAX),&nbsp;data)'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$select</span><span style="color: #007700">=</span><span style="color: #DD0000">'data'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">(</span><span style="color: #0000BB">$select</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">from</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">where</span><span style="color: #007700">(</span><span style="color: #DD0000">'expire&gt;:expire&nbsp;AND&nbsp;id=:id'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">':expire'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">time</span><span style="color: #007700">(),</span><span style="color: #DD0000">':id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">?</span><span style="color: #DD0000">''</span><span style="color: #007700">:</span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session read handler.
Do not call this method directly.</p>


<div class="detailHeader" id="regenerateID-detail">
regenerateID()
<span class="detailHeaderTag">
method
(available since v1.1.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>regenerateID</b>(boolean $deleteOldSession=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$deleteOldSession</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">Whether to delete the old associated session file or not.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php#L94">yii/web/CDbHttpSession.php#L94</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">regenerateID</span><span style="color: #007700">(</span><span style="color: #0000BB">$deleteOldSession</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oldID</span><span style="color: #007700">=</span><span style="color: #0000BB">session_id</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;no&nbsp;session&nbsp;is&nbsp;started,&nbsp;there&nbsp;is&nbsp;nothing&nbsp;to&nbsp;regenerate<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(empty(</span><span style="color: #0000BB">$oldID</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">regenerateID</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newID</span><span style="color: #007700">=</span><span style="color: #0000BB">session_id</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">from</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">where</span><span style="color: #007700">(</span><span style="color: #DD0000">'id=:id'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">':id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$oldID</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">queryRow</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$row</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$deleteOldSession</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">update</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">,array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$newID<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),</span><span style="color: #DD0000">'id=:oldID'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">':oldID'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$oldID</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$newID</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;shouldn't&nbsp;reach&nbsp;here&nbsp;normally<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$newID</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'expire'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTimeout</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Updates the current session id with a newly generated one.
Please refer to <a href="http://php.net/session_regenerate_id">http://php.net/session_regenerate_id</a> for more details.</p>


<div class="detailHeader" id="writeSession-detail">
writeSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>writeSession</b>(string $id, string $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session ID</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session data</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether session write is successful</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CDbHttpSession.php#L241">yii/web/CDbHttpSession.php#L241</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">writeSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;exception&nbsp;must&nbsp;be&nbsp;caught&nbsp;in&nbsp;session&nbsp;write&nbsp;handler<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;http://us.php.net/manual/en/function.session-set-save-handler.php<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">try<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expire</span><span style="color: #007700">=</span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTimeout</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">()==</span><span style="color: #DD0000">'sqlsrv'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">()==</span><span style="color: #DD0000">'mssql'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">()==</span><span style="color: #DD0000">'dblib'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDbExpression</span><span style="color: #007700">(</span><span style="color: #DD0000">'CONVERT(VARBINARY(MAX),&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">from</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">where</span><span style="color: #007700">(</span><span style="color: #DD0000">'id=:id'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">':id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">()===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">insert</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">,array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'expire'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$expire</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">update</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sessionTableName</span><span style="color: #007700">,array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'expire'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$expire<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),</span><span style="color: #DD0000">'id=:id'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">':id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;it&nbsp;is&nbsp;too&nbsp;late&nbsp;to&nbsp;log&nbsp;an&nbsp;error&nbsp;message&nbsp;here<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session write handler.
Do not call this method directly.</p>


