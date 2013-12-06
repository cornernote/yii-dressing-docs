<?php
$this->pageTitle = $this->pageHeading = 'CDbCache';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbCache';
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
  <td><?php echo CHtml::link('system.caching', array('/site/doc', '#' => 'system.caching')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CDbCache &raquo;
<?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>ArrayAccess, <?php echo CHtml::link('ICache', array('/site/doc', 'view' => 'ICache')); ?>, <?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php">yii/caching/CDbCache.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbCache implements a cache application component by storing cached data in a database.
<br/><br/>
CDbCache stores cache data in a DB table named <?php echo CHtml::link('cacheTableName', array('/site/doc', 'view' => 'CDbCache', '#' => 'cacheTableName')); ?>.
If the table does not exist, it will be automatically created.
By setting <?php echo CHtml::link('autoCreateCacheTable', array('/site/doc', 'view' => 'CDbCache', '#' => 'autoCreateCacheTable')); ?> to false, you can also manually create the DB table.
<br/><br/>
CDbCache relies on <a href="http://www.php.net/manual/en/ref.pdo.php">PDO</a> to access database.
By default, it will use a SQLite3 database under the application runtime directory.
You can also specify <?php echo CHtml::link('connectionID', array('/site/doc', 'view' => 'CDbCache', '#' => 'connectionID')); ?> so that it makes use of
a DB application component to access database.
<br/><br/>
See <?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?> manual for common cache operations that are supported by CDbCache.</div>
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
<tr id="autoCreateCacheTable">
  <td><?php echo CHtml::link('autoCreateCacheTable', array('/site/doc', 'view' => 'CDbCache', '#' => 'autoCreateCacheTable-detail')); ?></td>
  <td>boolean</td>
  <td>whether the cache DB table should be created automatically if it does not exist.</td>
  <td>CDbCache</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="cacheTableName">
  <td><?php echo CHtml::link('cacheTableName', array('/site/doc', 'view' => 'CDbCache', '#' => 'cacheTableName-detail')); ?></td>
  <td>string</td>
  <td>name of the DB table to store cache content.</td>
  <td>CDbCache</td>
</tr>
<tr id="connectionID">
  <td><?php echo CHtml::link('connectionID', array('/site/doc', 'view' => 'CDbCache', '#' => 'connectionID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> application component.</td>
  <td>CDbCache</td>
</tr>
<tr id="dbConnection">
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CDbCache', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>the DB connection instance</td>
  <td>CDbCache</td>
</tr>
<tr id="gCProbability">
  <td><?php echo CHtml::link('gCProbability', array('/site/doc', 'view' => 'CDbCache', '#' => 'gCProbability-detail')); ?></td>
  <td>integer</td>
  <td>the probability (parts per million) that garbage collection (GC) should be performed
when storing a piece of data in the cache.</td>
  <td>CDbCache</td>
</tr>
<tr class="inherited" id="hashKey">
  <td><?php echo CHtml::link('hashKey', array('/site/doc', 'view' => 'CCache', '#' => 'hashKey-detail')); ?></td>
  <td>boolean</td>
  <td>whether to md5-hash the cache key for normalization purposes.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="keyPrefix">
  <td><?php echo CHtml::link('keyPrefix', array('/site/doc', 'view' => 'CCache', '#' => 'keyPrefix-detail')); ?></td>
  <td>string</td>
  <td>a string prefixed to every cache key so that it is unique.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr class="inherited" id="serializer">
  <td><?php echo CHtml::link('serializer', array('/site/doc', 'view' => 'CCache', '#' => 'serializer-detail')); ?></td>
  <td>array|boolean</td>
  <td>the functions used to serialize and unserialize cached data.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
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
  <td><?php echo CHtml::link('add()', array('/site/doc', 'view' => 'CCache', '#' => 'add-detail')); ?></td>
  <td>Stores a value identified by a key into cache if the cache does not contain this key.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
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
<tr class="inherited" id="delete">
  <td><?php echo CHtml::link('delete()', array('/site/doc', 'view' => 'CCache', '#' => 'delete-detail')); ?></td>
  <td>Deletes a value with the specified key from cache</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
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
<tr class="inherited" id="flush">
  <td><?php echo CHtml::link('flush()', array('/site/doc', 'view' => 'CCache', '#' => 'flush-detail')); ?></td>
  <td>Deletes all values from cache.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr class="inherited" id="get">
  <td><?php echo CHtml::link('get()', array('/site/doc', 'view' => 'CCache', '#' => 'get-detail')); ?></td>
  <td>Retrieves a value from cache with a specified key.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CDbCache', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns the DB connection instance</td>
  <td>CDbCache</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getGCProbability">
  <td><?php echo CHtml::link('getGCProbability()', array('/site/doc', 'view' => 'CDbCache', '#' => 'getGCProbability-detail')); ?></td>
  <td>Returns the probability (parts per million) that garbage collection (GC) should be performed
when storing a piece of data in the cache. Defaults to 100, meaning 0.01% chance.</td>
  <td>CDbCache</td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CDbCache', '#' => 'init-detail')); ?></td>
  <td>Initializes this application component.</td>
  <td>CDbCache</td>
</tr>
<tr class="inherited" id="mget">
  <td><?php echo CHtml::link('mget()', array('/site/doc', 'view' => 'CCache', '#' => 'mget-detail')); ?></td>
  <td>Retrieves multiple values from cache with the specified keys.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr class="inherited" id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CCache', '#' => 'offsetExists-detail')); ?></td>
  <td>Returns whether there is a cache entry with a specified key.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr class="inherited" id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CCache', '#' => 'offsetGet-detail')); ?></td>
  <td>Retrieves the value from cache with a specified key.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr class="inherited" id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CCache', '#' => 'offsetSet-detail')); ?></td>
  <td>Stores the value identified by a key into cache.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr class="inherited" id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CCache', '#' => 'offsetUnset-detail')); ?></td>
  <td>Deletes the value with the specified key from cache</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="set">
  <td><?php echo CHtml::link('set()', array('/site/doc', 'view' => 'CCache', '#' => 'set-detail')); ?></td>
  <td>Stores a value identified by a key into cache.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr id="setDbConnection">
  <td><?php echo CHtml::link('setDbConnection()', array('/site/doc', 'view' => 'CDbCache', '#' => 'setDbConnection-detail')); ?></td>
  <td>Sets the DB connection used by the cache component.</td>
  <td>CDbCache</td>
</tr>
<tr id="setGCProbability">
  <td><?php echo CHtml::link('setGCProbability()', array('/site/doc', 'view' => 'CDbCache', '#' => 'setGCProbability-detail')); ?></td>
  <td>Sets the probability (parts per million) that garbage collection (GC) should be performed
when storing a piece of data in the cache. Defaults to 100, meaning 0.01% chance.
This number should be between 0 and 1000000. A value 0 meaning no GC will be performed at all.</td>
  <td>CDbCache</td>
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
<tr id="addValue">
  <td><?php echo CHtml::link('addValue()', array('/site/doc', 'view' => 'CDbCache', '#' => 'addValue-detail')); ?></td>
  <td>Stores a value identified by a key into cache if the cache does not contain this key.</td>
  <td>CDbCache</td>
</tr>
<tr id="createCacheTable">
  <td><?php echo CHtml::link('createCacheTable()', array('/site/doc', 'view' => 'CDbCache', '#' => 'createCacheTable-detail')); ?></td>
  <td>Creates the cache DB table.</td>
  <td>CDbCache</td>
</tr>
<tr id="deleteValue">
  <td><?php echo CHtml::link('deleteValue()', array('/site/doc', 'view' => 'CDbCache', '#' => 'deleteValue-detail')); ?></td>
  <td>Deletes a value with the specified key from cache</td>
  <td>CDbCache</td>
</tr>
<tr id="flushValues">
  <td><?php echo CHtml::link('flushValues()', array('/site/doc', 'view' => 'CDbCache', '#' => 'flushValues-detail')); ?></td>
  <td>Deletes all values from cache.</td>
  <td>CDbCache</td>
</tr>
<tr id="gc">
  <td><?php echo CHtml::link('gc()', array('/site/doc', 'view' => 'CDbCache', '#' => 'gc-detail')); ?></td>
  <td>Removes the expired data values.</td>
  <td>CDbCache</td>
</tr>
<tr class="inherited" id="generateUniqueKey">
  <td><?php echo CHtml::link('generateUniqueKey()', array('/site/doc', 'view' => 'CCache', '#' => 'generateUniqueKey-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr id="getValue">
  <td><?php echo CHtml::link('getValue()', array('/site/doc', 'view' => 'CDbCache', '#' => 'getValue-detail')); ?></td>
  <td>Retrieves a value from cache with a specified key.</td>
  <td>CDbCache</td>
</tr>
<tr id="getValues">
  <td><?php echo CHtml::link('getValues()', array('/site/doc', 'view' => 'CDbCache', '#' => 'getValues-detail')); ?></td>
  <td>Retrieves multiple values from cache with the specified keys.</td>
  <td>CDbCache</td>
</tr>
<tr id="setValue">
  <td><?php echo CHtml::link('setValue()', array('/site/doc', 'view' => 'CDbCache', '#' => 'setValue-detail')); ?></td>
  <td>Stores a value identified by a key in cache.</td>
  <td>CDbCache</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="autoCreateCacheTable-detail">
autoCreateCacheTable<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$autoCreateCacheTable</b>;</div>

<p>whether the cache DB table should be created automatically if it does not exist. Defaults to true.
If you already have the table created, it is recommended you set this property to be false to improve performance.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('cacheTableName', array('/site/doc', 'view' => 'CDbCache', '#' => 'cacheTableName')); ?></li>
</ul>
</div>

<div class="detailHeader" id="cacheTableName-detail">
cacheTableName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cacheTableName</b>;</div>

<p>name of the DB table to store cache content. Defaults to 'YiiCache'.
Note, if <?php echo CHtml::link('autoCreateCacheTable', array('/site/doc', 'view' => 'CDbCache', '#' => 'autoCreateCacheTable')); ?> is false and you want to create the DB table
manually by yourself, you need to make sure the DB table is of the following structure:
<pre>
(id CHAR(128) PRIMARY KEY, expire INTEGER, value BLOB)
</pre>
Note, some DBMS might not support BLOB type. In this case, replace 'BLOB' with a suitable
binary data type (e.g. LONGBLOB in MySQL, BYTEA in PostgreSQL.)</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('autoCreateCacheTable', array('/site/doc', 'view' => 'CDbCache', '#' => 'autoCreateCacheTable')); ?></li>
</ul>
</div>

<div class="detailHeader" id="connectionID-detail">
connectionID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$connectionID</b>;</div>

<p>the ID of the <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> application component. If not set,
a SQLite3 database will be automatically created and used. The SQLite database file
is <code>protected/runtime/cache-YiiVersion.db</code>.</p>


<div class="detailHeader" id="dbConnection-detail">
dbConnection<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <?php echo CHtml::link('<b>getDbConnection</b>', array('/site/doc', 'view' => 'CDbCache', '#' => 'getDbConnection')); ?>()<br/>public void <?php echo CHtml::link('<b>setDbConnection</b>', array('/site/doc', 'view' => 'CDbCache', '#' => 'setDbConnection')); ?>(<?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> $value)</div>

<p>the DB connection instance</p>


<div class="detailHeader" id="gCProbability-detail">
gCProbability<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getGCProbability</b>', array('/site/doc', 'view' => 'CDbCache', '#' => 'getGCProbability')); ?>()<br/>public void <?php echo CHtml::link('<b>setGCProbability</b>', array('/site/doc', 'view' => 'CDbCache', '#' => 'setGCProbability')); ?>(integer $value)</div>

<p>the probability (parts per million) that garbage collection (GC) should be performed
when storing a piece of data in the cache. Defaults to 100, meaning 0.01% chance.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addValue-detail">
addValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>addValue</b>(string $key, string $value, integer $expire)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the key identifying the value to be cached</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the value to be cached</td>
</tr>
<tr>
  <td class="paramNameCol">$expire</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds in which the cached value will expire. 0 means never expire.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if the value is successfully stored into cache, false otherwise</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L255">yii/caching/CDbCache.php#L255</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_gced&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">1000000</span><span style="color: #007700">)&lt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_gcProbability</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gc</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_gced</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$expire</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expire</span><span style="color: #007700">+=</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expire</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheTableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;(id,expire,value)&nbsp;VALUES&nbsp;('</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">',</span><span style="color: #0000BB">$expire</span><span style="color: #DD0000">,:value)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':value'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_LOB</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Stores a value identified by a key into cache if the cache does not contain this key.
This is the implementation of the method declared in the parent class.</p>


<div class="detailHeader" id="createCacheTable-detail">
createCacheTable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>createCacheTable</b>(<?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> $db, string $tableName)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L122">yii/caching/CDbCache.php#L122</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createCacheTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">,</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$driver</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$driver</span><span style="color: #007700">===</span><span style="color: #DD0000">'mysql'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$blob</span><span style="color: #007700">=</span><span style="color: #DD0000">'LONGBLOB'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$driver</span><span style="color: #007700">===</span><span style="color: #DD0000">'pgsql'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$blob</span><span style="color: #007700">=</span><span style="color: #DD0000">'BYTEA'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$blob</span><span style="color: #007700">=</span><span style="color: #DD0000">'BLOB'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">CREATE&nbsp;TABLE&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #DD0000"><br />(<br />id&nbsp;CHAR(128)&nbsp;PRIMARY&nbsp;KEY,<br />expire&nbsp;INTEGER,<br />value&nbsp;</span><span style="color: #0000BB">$blob</span><span style="color: #DD0000"><br />)<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Creates the cache DB table.</p>


<div class="detailHeader" id="deleteValue-detail">
deleteValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>deleteValue</b>(string $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the key of the value to be deleted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">if no error happens during deletion</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L287">yii/caching/CDbCache.php#L287</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">deleteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">"DELETE&nbsp;FROM&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheTableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;WHERE&nbsp;id='</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Deletes a value with the specified key from cache
This is the implementation of the method declared in the parent class.</p>


<div class="detailHeader" id="flushValues-detail">
flushValues()
<span class="detailHeaderTag">
method
(available since v1.1.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>flushValues</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the flush operation was successful.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L308">yii/caching/CDbCache.php#L308</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">flushValues</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"DELETE&nbsp;FROM&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheTableName</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Deletes all values from cache.
This is the implementation of the method declared in the parent class.</p>


<div class="detailHeader" id="gc-detail">
gc()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>gc</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L297">yii/caching/CDbCache.php#L297</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">gc</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"DELETE&nbsp;FROM&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheTableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;WHERE&nbsp;expire&gt;0&nbsp;AND&nbsp;expire&lt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">time</span><span style="color: #007700">())-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Removes the expired data values.</p>


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
  <td class="paramDescCol">the DB connection instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L146">yii/caching/CDbCache.php#L146</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionID</span><span style="color: #007700">)!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">))&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">CDbConnection</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbCache.connectionID&nbsp;"{id}"&nbsp;is&nbsp;invalid.&nbsp;Please&nbsp;make&nbsp;sure&nbsp;it&nbsp;refers&nbsp;to&nbsp;the&nbsp;ID&nbsp;of&nbsp;a&nbsp;CDbConnection&nbsp;application&nbsp;component.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{id}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dbFile</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRuntimePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'cache-'</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getVersion</span><span style="color: #007700">().</span><span style="color: #DD0000">'.db'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDbConnection</span><span style="color: #007700">(</span><span style="color: #DD0000">'sqlite:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$dbFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getGCProbability-detail">
getGCProbability()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getGCProbability</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the probability (parts per million) that garbage collection (GC) should be performed
when storing a piece of data in the cache. Defaults to 100, meaning 0.01% chance.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L97">yii/caching/CDbCache.php#L97</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getGCProbability</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_gcProbability</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getValue-detail">
getValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string|boolean <b>getValue</b>(string $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a unique key identifying the cached value</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string|boolean</td>
  <td class="paramDescCol">the value stored in cache, false if the value is not in the cache or expired.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L181">yii/caching/CDbCache.php#L181</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">"SELECT&nbsp;value&nbsp;FROM&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheTableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;WHERE&nbsp;id='</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">'&nbsp;AND&nbsp;(expire=0&nbsp;OR&nbsp;expire&gt;</span><span style="color: #0000BB">$time</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDuration</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$duration</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDuration</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDuration</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDuration</span><span style="color: #007700">=</span><span style="color: #0000BB">$duration</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves a value from cache with a specified key.
This is the implementation of the method declared in the parent class.</p>


<div class="detailHeader" id="getValues-detail">
getValues()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>getValues</b>(array $keys)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$keys</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">a list of keys identifying the cached values</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">a list of cached values indexed by the keys</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L203">yii/caching/CDbCache.php#L203</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getValues</span><span style="color: #007700">(</span><span style="color: #0000BB">$keys</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$keys</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ids</span><span style="color: #007700">=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"','"</span><span style="color: #007700">,</span><span style="color: #0000BB">$keys</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">"SELECT&nbsp;id,&nbsp;value&nbsp;FROM&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheTableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;WHERE&nbsp;id&nbsp;IN&nbsp;('</span><span style="color: #0000BB">$ids</span><span style="color: #DD0000">')&nbsp;AND&nbsp;(expire=0&nbsp;OR&nbsp;expire&gt;</span><span style="color: #0000BB">$time</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDuration</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$duration</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDuration</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDuration</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rows</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryCachingDuration</span><span style="color: #007700">=</span><span style="color: #0000BB">$duration</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rows</span><span style="color: #007700">=</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$rows&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]]=</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves multiple values from cache with the specified keys.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L73">yii/caching/CDbCache.php#L73</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setActive</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoCreateCacheTable</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">"DELETE&nbsp;FROM&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheTableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;WHERE&nbsp;expire&gt;0&nbsp;AND&nbsp;expire&lt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCacheTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheTableName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Initializes this application component.
<br/><br/>
This method is required by the <?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?> interface.
It ensures the existence of the cache DB table.
It also removes expired data items from the cache.</p>


<div class="detailHeader" id="setDbConnection-detail">
setDbConnection()
<span class="detailHeaderTag">
method
(available since v1.1.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setDbConnection</b>(<?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol">the DB connection instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L170">yii/caching/CDbCache.php#L170</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setDbConnection</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the DB connection used by the cache component.</p>


<div class="detailHeader" id="setGCProbability-detail">
setGCProbability()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setGCProbability</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the probability (parts per million) that garbage collection (GC) should be performed
when storing a piece of data in the cache. Defaults to 100, meaning 0.01% chance.
This number should be between 0 and 1000000. A value 0 meaning no GC will be performed at all.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L107">yii/caching/CDbCache.php#L107</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setGCProbability</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">1000000</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">1000000</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_gcProbability</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setValue-detail">
setValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>setValue</b>(string $key, string $value, integer $expire)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the key identifying the value to be cached</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the value to be cached</td>
</tr>
<tr>
  <td class="paramNameCol">$expire</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds in which the cached value will expire. 0 means never expire.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if the value is successfully stored into cache, false otherwise</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CDbCache.php#L240">yii/caching/CDbCache.php#L240</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Stores a value identified by a key in cache.
This is the implementation of the method declared in the parent class.</p>


