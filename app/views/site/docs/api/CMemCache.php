<?php
$this->pageTitle = $this->pageHeading = 'CMemCache';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CMemCache';
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
  <td>class CMemCache &raquo;
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
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php">yii\caching\CMemCache.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CMemCache implements a cache application component based on <a href="http://memcached.org/">memcached</a>.
<br/><br/>
CMemCache can be configured with a list of memcache servers by settings
its <?php echo CHtml::link('servers', array('/site/doc', 'view' => 'CMemCache', '#' => 'setServers')); ?> property. By default, CMemCache assumes
there is a memcache server running on localhost at port 11211.
<br/><br/>
See <?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?> manual for common cache operations that are supported by CMemCache.
<br/><br/>
Note, there is no security measure to protected data in memcache.
All data in memcache can be accessed by any process running in the system.
<br/><br/>
To use CMemCache as the cache application component, configure the application as follows,
<pre>
array(
    'components'=&gt;array(
        'cache'=&gt;array(
            'class'=&gt;'CMemCache',
            'servers'=&gt;array(
                array(
                    'host'=&gt;'server1',
                    'port'=&gt;11211,
                    'weight'=&gt;60,
                ),
                array(
                    'host'=&gt;'server2',
                    'port'=&gt;11211,
                    'weight'=&gt;40,
                ),
            ),
        ),
    ),
)
</pre>
In the above, two memcache servers are used: server1 and server2.
You can configure more properties of every server, including:
host, port, persistent, weight, timeout, retryInterval, status.
See <a href="http://www.php.net/manual/en/function.memcache-addserver.php">http://www.php.net/manual/en/function.memcache-addserver.php</a>
for more details.
<br/><br/>
CMemCache can also be used with <a href="http://pecl.php.net/package/memcached">memcached</a>.
To do so, set <?php echo CHtml::link('useMemcached', array('/site/doc', 'view' => 'CMemCache', '#' => 'useMemcached')); ?> to be true.</div>
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
<tr id="memCache">
  <td><?php echo CHtml::link('memCache', array('/site/doc', 'view' => 'CMemCache', '#' => 'memCache-detail')); ?></td>
  <td>Memcache|Memcached</td>
  <td>the memcache instance (or memcached if <?php echo CHtml::link('useMemcached', array('/site/doc', 'view' => 'CMemCache', '#' => 'useMemcached')); ?> is true) used by this component.</td>
  <td>CMemCache</td>
</tr>
<tr class="inherited" id="serializer">
  <td><?php echo CHtml::link('serializer', array('/site/doc', 'view' => 'CCache', '#' => 'serializer-detail')); ?></td>
  <td>array|boolean</td>
  <td>the functions used to serialize and unserialize cached data.</td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr id="servers">
  <td><?php echo CHtml::link('servers', array('/site/doc', 'view' => 'CMemCache', '#' => 'servers-detail')); ?></td>
  <td>array</td>
  <td>list of memcache server configurations.</td>
  <td>CMemCache</td>
</tr>
<tr id="useMemcached">
  <td><?php echo CHtml::link('useMemcached', array('/site/doc', 'view' => 'CMemCache', '#' => 'useMemcached-detail')); ?></td>
  <td>boolean</td>
  <td>whether to use memcached or memcache as the underlying caching extension.</td>
  <td>CMemCache</td>
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
<tr id="getMemCache">
  <td><?php echo CHtml::link('getMemCache()', array('/site/doc', 'view' => 'CMemCache', '#' => 'getMemCache-detail')); ?></td>
  <td>Returns the memcache instance (or memcached if <?php echo CHtml::link('useMemcached', array('/site/doc', 'view' => 'CMemCache', '#' => 'useMemcached')); ?> is true) used by this component.</td>
  <td>CMemCache</td>
</tr>
<tr id="getServers">
  <td><?php echo CHtml::link('getServers()', array('/site/doc', 'view' => 'CMemCache', '#' => 'getServers-detail')); ?></td>
  <td>Returns list of memcache server configurations. Each element is a <?php echo CHtml::link('CMemCacheServerConfiguration', array('/site/doc', 'view' => 'CMemCacheServerConfiguration')); ?>.</td>
  <td>CMemCache</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CMemCache', '#' => 'init-detail')); ?></td>
  <td>Initializes this application component.</td>
  <td>CMemCache</td>
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
<tr id="setServers">
  <td><?php echo CHtml::link('setServers()', array('/site/doc', 'view' => 'CMemCache', '#' => 'setServers-detail')); ?></td>
  <td>Sets list of memcache server configurations. Each element must be an array
with the following keys: host, port, persistent, weight, timeout, retryInterval, status.</td>
  <td>CMemCache</td>
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
  <td><?php echo CHtml::link('addValue()', array('/site/doc', 'view' => 'CMemCache', '#' => 'addValue-detail')); ?></td>
  <td>Stores a value identified by a key into cache if the cache does not contain this key.</td>
  <td>CMemCache</td>
</tr>
<tr id="deleteValue">
  <td><?php echo CHtml::link('deleteValue()', array('/site/doc', 'view' => 'CMemCache', '#' => 'deleteValue-detail')); ?></td>
  <td>Deletes a value with the specified key from cache</td>
  <td>CMemCache</td>
</tr>
<tr id="flushValues">
  <td><?php echo CHtml::link('flushValues()', array('/site/doc', 'view' => 'CMemCache', '#' => 'flushValues-detail')); ?></td>
  <td>Deletes all values from cache.</td>
  <td>CMemCache</td>
</tr>
<tr class="inherited" id="generateUniqueKey">
  <td><?php echo CHtml::link('generateUniqueKey()', array('/site/doc', 'view' => 'CCache', '#' => 'generateUniqueKey-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?></td>
</tr>
<tr id="getValue">
  <td><?php echo CHtml::link('getValue()', array('/site/doc', 'view' => 'CMemCache', '#' => 'getValue-detail')); ?></td>
  <td>Retrieves a value from cache with a specified key.</td>
  <td>CMemCache</td>
</tr>
<tr id="getValues">
  <td><?php echo CHtml::link('getValues()', array('/site/doc', 'view' => 'CMemCache', '#' => 'getValues-detail')); ?></td>
  <td>Retrieves multiple values from cache with the specified keys.</td>
  <td>CMemCache</td>
</tr>
<tr id="setValue">
  <td><?php echo CHtml::link('setValue()', array('/site/doc', 'view' => 'CMemCache', '#' => 'setValue-detail')); ?></td>
  <td>Stores a value identified by a key in cache.</td>
  <td>CMemCache</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="memCache-detail">
memCache<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public Memcache|Memcached <?php echo CHtml::link('<b>getMemCache</b>', array('/site/doc', 'view' => 'CMemCache', '#' => 'getMemCache')); ?>()</div>

<p>the memcache instance (or memcached if <?php echo CHtml::link('useMemcached', array('/site/doc', 'view' => 'CMemCache', '#' => 'useMemcached')); ?> is true) used by this component.</p>


<div class="detailHeader" id="servers-detail">
servers<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getServers</b>', array('/site/doc', 'view' => 'CMemCache', '#' => 'getServers')); ?>()<br/>public void <?php echo CHtml::link('<b>setServers</b>', array('/site/doc', 'view' => 'CMemCache', '#' => 'setServers')); ?>(array $config)</div>

<p>list of memcache server configurations. Each element is a <?php echo CHtml::link('CMemCacheServerConfiguration', array('/site/doc', 'view' => 'CMemCacheServerConfiguration')); ?>.</p>


<div class="detailHeader" id="useMemcached-detail">
useMemcached<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$useMemcached</b>;</div>

<p>whether to use memcached or memcache as the underlying caching extension.
If true <a href="http://pecl.php.net/package/memcached">memcached</a> will be used.
If false <a href="http://pecl.php.net/package/memcache">memcache</a>. will be used.
Defaults to false.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L190">yii\caching\CMemCache.php#L190</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$expire</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expire</span><span style="color: #007700">+=</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expire</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useMemcached&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Stores a value identified by a key into cache if the cache does not contain this key.
This is the implementation of the method declared in the parent class.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L206">yii\caching\CMemCache.php#L206</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">deleteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L217">yii\caching\CMemCache.php#L217</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">flushValues</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flush</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Deletes all values from cache.
This is the implementation of the method declared in the parent class.</p>


<div class="detailHeader" id="getMemCache-detail">
getMemCache()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public Memcache|Memcached <b>getMemCache</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">Memcache|Memcached</td>
  <td class="paramDescCol">the memcache instance (or memcached if <?php echo CHtml::link('useMemcached', array('/site/doc', 'view' => 'CMemCache', '#' => 'useMemcached')); ?> is true) used by this component.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L108">yii\caching\CMemCache.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMemCache</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$extension</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useMemcached&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'memcached'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'memcache'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">extension_loaded</span><span style="color: #007700">(</span><span style="color: #0000BB">$extension</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">"CMemCache&nbsp;requires&nbsp;PHP&nbsp;{extension}&nbsp;extension&nbsp;to&nbsp;be&nbsp;loaded."</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{extension}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$extension</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useMemcached&nbsp;</span><span style="color: #007700">?&nbsp;new&nbsp;</span><span style="color: #0000BB">Memcached&nbsp;</span><span style="color: #007700">:&nbsp;new&nbsp;</span><span style="color: #0000BB">Memcache</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getServers-detail">
getServers()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getServers</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of memcache server configurations. Each element is a <?php echo CHtml::link('CMemCacheServerConfiguration', array('/site/doc', 'view' => 'CMemCacheServerConfiguration')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L125">yii\caching\CMemCache.php#L125</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getServers</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_servers</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L147">yii\caching\CMemCache.php#L147</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L157">yii\caching\CMemCache.php#L157</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getValues</span><span style="color: #007700">(</span><span style="color: #0000BB">$keys</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useMemcached&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMulti</span><span style="color: #007700">(</span><span style="color: #0000BB">$keys</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$keys</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L85">yii\caching\CMemCache.php#L85</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$servers</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getServers</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMemCache</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$servers</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$servers&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$server</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useMemcached</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">host</span><span style="color: #007700">,</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">port</span><span style="color: #007700">,</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">weight</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">host</span><span style="color: #007700">,</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">port</span><span style="color: #007700">,</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">persistent</span><span style="color: #007700">,</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">weight</span><span style="color: #007700">,</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeout</span><span style="color: #007700">,</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">retryInterval</span><span style="color: #007700">,</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">status</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">,</span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Initializes this application component.
This method is required by the <?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?> interface.
It creates the memcache instance and adds memcache servers.</p>


<div class="detailHeader" id="setServers-detail">
setServers()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setServers</b>(array $config)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of memcache server configurations. Each element must be an array
with the following keys: host, port, persistent, weight, timeout, retryInterval, status.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L135">yii\caching\CMemCache.php#L135</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setServers</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_servers</span><span style="color: #007700">[]=new&nbsp;</span><span style="color: #0000BB">CMemCacheServerConfiguration</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.Memcache-addServer.php">http://www.php.net/manual/en/function.Memcache-addServer.php</a></li>
</ul>
</div>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\caching\CMemCache.php#L171">yii\caching\CMemCache.php#L171</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$expire</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expire</span><span style="color: #007700">+=</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expire</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useMemcached&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Stores a value identified by a key in cache.
This is the implementation of the method declared in the parent class.</p>


