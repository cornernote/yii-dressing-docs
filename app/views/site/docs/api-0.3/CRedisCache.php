<?php
$this->pageTitle = $this->pageHeading = 'CRedisCache';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CRedisCache';
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
  <td>class CRedisCache &raquo;
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
  <td>1.1.14</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CRedisCache.php">yii/caching/CRedisCache.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Carsten Brandt &lt;mail@cebe.cc&gt;</td>
</tr>
</table>

<div id="classDescription">
CRedisCache implements a cache application component based on <a href="http://redis.io/">redis</a>.
<br/><br/>
CRedisCache needs to be configured with <?php echo CHtml::link('hostname', array('/site/doc', 'view' => 'CRedisCache', '#' => 'hostname')); ?>, <?php echo CHtml::link('port', array('/site/doc', 'view' => 'CRedisCache', '#' => 'port')); ?> and <?php echo CHtml::link('database', array('/site/doc', 'view' => 'CRedisCache', '#' => 'database')); ?> of the server
to connect to. By default CRedisCache assumes there is a redis server running on localhost at
port 6379 and uses the database number 0.
<br/><br/>
CRedisCache also supports <a href="http://redis.io/commands/auth">the AUTH command</a> of redis.
When the server needs authentication, you can set the <?php echo CHtml::link('password', array('/site/doc', 'view' => 'CRedisCache', '#' => 'password')); ?> property to
authenticate with the server after connect.
<br/><br/>
See <?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?> manual for common cache operations that are supported by CRedisCache.
<br/><br/>
To use CRedisCache as the cache application component, configure the application as follows,
<pre>
array(
    'components'=&gt;array(
        'cache'=&gt;array(
            'class'=&gt;'CRedisCache',
            'hostname'=&gt;'localhost',
            'port'=&gt;6379,
            'database'=&gt;0,
        ),
    ),
)
</pre>
<br/><br/>
The minimum required redis version is 2.0.0.</div>
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
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="database">
  <td><?php echo CHtml::link('database', array('/site/doc', 'view' => 'CRedisCache', '#' => 'database-detail')); ?></td>
  <td>int</td>
  <td>the redis database to use.</td>
  <td>CRedisCache</td>
</tr>
<tr class="inherited" id="hashKey">
  <td><?php echo CHtml::link('hashKey', array('/site/doc', 'view' => 'CCache', '#' => 'hashKey-detail')); ?></td>
  <td>boolean</td>
  <td>whether to md5-hash the cache key for normalization purposes.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr id="hostname">
  <td><?php echo CHtml::link('hostname', array('/site/doc', 'view' => 'CRedisCache', '#' => 'hostname-detail')); ?></td>
  <td>string</td>
  <td>hostname to use for connecting to the redis server.</td>
  <td>CRedisCache</td>
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
<tr id="password">
  <td><?php echo CHtml::link('password', array('/site/doc', 'view' => 'CRedisCache', '#' => 'password-detail')); ?></td>
  <td>string</td>
  <td>the password to use to authenticate with the redis server.</td>
  <td>CRedisCache</td>
</tr>
<tr id="port">
  <td><?php echo CHtml::link('port', array('/site/doc', 'view' => 'CRedisCache', '#' => 'port-detail')); ?></td>
  <td>int</td>
  <td>the port to use for connecting to the redis server.</td>
  <td>CRedisCache</td>
</tr>
<tr class="inherited" id="serializer">
  <td><?php echo CHtml::link('serializer', array('/site/doc', 'view' => 'CCache', '#' => 'serializer-detail')); ?></td>
  <td>array|boolean</td>
  <td>the functions used to serialize and unserialize cached data.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr id="timeout">
  <td><?php echo CHtml::link('timeout', array('/site/doc', 'view' => 'CRedisCache', '#' => 'timeout-detail')); ?></td>
  <td>float</td>
  <td>timeout to use for connection to redis.</td>
  <td>CRedisCache</td>
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
<tr id="executeCommand">
  <td><?php echo CHtml::link('executeCommand()', array('/site/doc', 'view' => 'CRedisCache', '#' => 'executeCommand-detail')); ?></td>
  <td>Executes a redis command.</td>
  <td>CRedisCache</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CCache', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
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
  <td><?php echo CHtml::link('addValue()', array('/site/doc', 'view' => 'CRedisCache', '#' => 'addValue-detail')); ?></td>
  <td>Stores a value identified by a key into cache if the cache does not contain this key.</td>
  <td>CRedisCache</td>
</tr>
<tr id="connect">
  <td><?php echo CHtml::link('connect()', array('/site/doc', 'view' => 'CRedisCache', '#' => 'connect-detail')); ?></td>
  <td>Establishes a connection to the redis server.</td>
  <td>CRedisCache</td>
</tr>
<tr id="deleteValue">
  <td><?php echo CHtml::link('deleteValue()', array('/site/doc', 'view' => 'CRedisCache', '#' => 'deleteValue-detail')); ?></td>
  <td>Deletes a value with the specified key from cache</td>
  <td>CRedisCache</td>
</tr>
<tr id="flushValues">
  <td><?php echo CHtml::link('flushValues()', array('/site/doc', 'view' => 'CRedisCache', '#' => 'flushValues-detail')); ?></td>
  <td>Deletes all values from cache.</td>
  <td>CRedisCache</td>
</tr>
<tr class="inherited" id="generateUniqueKey">
  <td><?php echo CHtml::link('generateUniqueKey()', array('/site/doc', 'view' => 'CCache', '#' => 'generateUniqueKey-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr id="getValue">
  <td><?php echo CHtml::link('getValue()', array('/site/doc', 'view' => 'CRedisCache', '#' => 'getValue-detail')); ?></td>
  <td>Retrieves a value from cache with a specified key.</td>
  <td>CRedisCache</td>
</tr>
<tr id="getValues">
  <td><?php echo CHtml::link('getValues()', array('/site/doc', 'view' => 'CRedisCache', '#' => 'getValues-detail')); ?></td>
  <td>Retrieves multiple values from cache with the specified keys.</td>
  <td>CRedisCache</td>
</tr>
<tr id="setValue">
  <td><?php echo CHtml::link('setValue()', array('/site/doc', 'view' => 'CRedisCache', '#' => 'setValue-detail')); ?></td>
  <td>Stores a value identified by a key in cache.</td>
  <td>CRedisCache</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="database-detail">
database<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public int <b>$database</b>;</div>

<p>the redis database to use. This is an integer value starting from 0. Defaults to 0.</p>


<div class="detailHeader" id="hostname-detail">
hostname<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$hostname</b>;</div>

<p>hostname to use for connecting to the redis server. Defaults to 'localhost'.</p>


<div class="detailHeader" id="password-detail">
password<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$password</b>;</div>

<p>the password to use to authenticate with the redis server. If not set, no AUTH command will be sent.</p>


<div class="detailHeader" id="port-detail">
port<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public int <b>$port</b>;</div>

<p>the port to use for connecting to the redis server. Default port is 6379.</p>


<div class="detailHeader" id="timeout-detail">
timeout<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public float <b>$timeout</b>;</div>

<p>timeout to use for connection to redis. If not set the timeout set in php.ini will be used: ini_get("default_socket_timeout")</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CRedisCache.php#L223">yii/caching/CRedisCache.php#L223</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$expire&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(bool)</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'SETNX'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'SETNX'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'EXPIRE'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Stores a value identified by a key into cache if the cache does not contain this key.
This is the implementation of the method declared in the parent class.</p>


<div class="detailHeader" id="connect-detail">
connect()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>connect</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CRedisCache.php#L76">yii/caching/CRedisCache.php#L76</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">connect</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_socket</span><span style="color: #007700">=@</span><span style="color: #0000BB">stream_socket_client</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hostname</span><span style="color: #007700">.</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">port</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errorNumber</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errorDescription</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeout&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeout&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">"default_socket_timeout"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_socket</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'AUTH'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">database</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;connect&nbsp;to&nbsp;redis:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$errorDescription</span><span style="color: #007700">,(int)</span><span style="color: #0000BB">$errorNumber</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Establishes a connection to the redis server.
It does nothing if the connection has already been established.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CRedisCache.php#L243">yii/caching/CRedisCache.php#L243</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">deleteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(bool)</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'DEL'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$key</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Deletes a value with the specified key from cache
This is the implementation of the method declared in the parent class.</p>


<div class="detailHeader" id="executeCommand-detail">
executeCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array|bool|null|string <b>executeCommand</b>(string $name, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the command</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of parameters for the command</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array|bool|null|string</td>
  <td class="paramDescCol">Dependend on the executed command this method
will return different data types:
<ul>
  <li><code>true</code> for commands that return "status reply".</li>
  <li><code>string</code> for commands that return "integer reply"
      as the value is in the range of a signed 64 bit integer.</li>
  <li><code>string</code> or <code>null</code> for commands that return "bulk reply".</li>
  <li><code>array</code> for commands that return "Multi-bulk replies".</li>
</ul>
See <a href="http://redis.io/topics/protocol">redis protocol description</a>
for details on the mentioned reply types.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CRedisCache.php#L113">yii/caching/CRedisCache.php#L113</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_socket</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_unshift</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #DD0000">'*'</span><span style="color: #007700">.</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">).</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$arg</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">.=</span><span style="color: #DD0000">'$'</span><span style="color: #007700">.</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg</span><span style="color: #007700">).</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$arg</span><span style="color: #007700">.</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_socket</span><span style="color: #007700">,</span><span style="color: #0000BB">$command</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parseResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Executes a redis command.
For a list of available commands and their parameters see <a href="http://redis.io/commands">http://redis.io/commands</a>.</p>


<div class="detailHeader" id="flushValues-detail">
flushValues()
<span class="detailHeaderTag">
method
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CRedisCache.php#L253">yii/caching/CRedisCache.php#L253</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">flushValues</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'FLUSHDB'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Deletes all values from cache.
This is the implementation of the method declared in the parent class.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CRedisCache.php#L178">yii/caching/CRedisCache.php#L178</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'GET'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$key</span><span style="color: #007700">));<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CRedisCache.php#L188">yii/caching/CRedisCache.php#L188</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getValues</span><span style="color: #007700">(</span><span style="color: #0000BB">$keys</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'MGET'</span><span style="color: #007700">,</span><span style="color: #0000BB">$keys</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">$response</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">++];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves multiple values from cache with the specified keys.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/CRedisCache.php#L207">yii/caching/CRedisCache.php#L207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$expire</span><span style="color: #007700">==</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(bool)</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'SET'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(bool)</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'SETEX'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Stores a value identified by a key in cache.
This is the implementation of the method declared in the parent class.</p>


