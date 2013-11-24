<?php
$this->pageTitle = $this->pageHeading = 'ICache';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'ICache';
?>
<div id="nav">
<a href="#methods">Methods</a></div>

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
  <td>interface ICache</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CApcCache', array('/site/doc', 'view' => 'CApcCache')); ?>, <?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?>, <?php echo CHtml::link('CDbCache', array('/site/doc', 'view' => 'CDbCache')); ?>, <?php echo CHtml::link('CDummyCache', array('/site/doc', 'view' => 'CDummyCache')); ?>, <?php echo CHtml::link('CEAcceleratorCache', array('/site/doc', 'view' => 'CEAcceleratorCache')); ?>, <?php echo CHtml::link('CFileCache', array('/site/doc', 'view' => 'CFileCache')); ?>, <?php echo CHtml::link('CMemCache', array('/site/doc', 'view' => 'CMemCache')); ?>, <?php echo CHtml::link('CRedisCache', array('/site/doc', 'view' => 'CRedisCache')); ?>, <?php echo CHtml::link('CWinCache', array('/site/doc', 'view' => 'CWinCache')); ?>, <?php echo CHtml::link('CXCache', array('/site/doc', 'view' => 'CXCache')); ?>, <?php echo CHtml::link('CZendDataCache', array('/site/doc', 'view' => 'CZendDataCache')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php">yii/base/interfaces.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
ICache is the interface that must be implemented by cache components.
<br/><br/>
This interface must be implemented by classes supporting caching feature.</div>
<a name="properties"></a>

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
<tr id="add">
  <td><?php echo CHtml::link('add()', array('/site/doc', 'view' => 'ICache', '#' => 'add-detail')); ?></td>
  <td>Stores a value identified by a key into cache if the cache does not contain this key.</td>
  <td>ICache</td>
</tr>
<tr id="delete">
  <td><?php echo CHtml::link('delete()', array('/site/doc', 'view' => 'ICache', '#' => 'delete-detail')); ?></td>
  <td>Deletes a value with the specified key from cache</td>
  <td>ICache</td>
</tr>
<tr id="flush">
  <td><?php echo CHtml::link('flush()', array('/site/doc', 'view' => 'ICache', '#' => 'flush-detail')); ?></td>
  <td>Deletes all values from cache.</td>
  <td>ICache</td>
</tr>
<tr id="get">
  <td><?php echo CHtml::link('get()', array('/site/doc', 'view' => 'ICache', '#' => 'get-detail')); ?></td>
  <td>Retrieves a value from cache with a specified key.</td>
  <td>ICache</td>
</tr>
<tr id="mget">
  <td><?php echo CHtml::link('mget()', array('/site/doc', 'view' => 'ICache', '#' => 'mget-detail')); ?></td>
  <td>Retrieves multiple values from cache with the specified keys.</td>
  <td>ICache</td>
</tr>
<tr id="set">
  <td><?php echo CHtml::link('set()', array('/site/doc', 'view' => 'ICache', '#' => 'set-detail')); ?></td>
  <td>Stores a value identified by a key into cache.</td>
  <td>ICache</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="add-detail">
add()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>add</b>(string $id, mixed $value, integer $expire=0, <?php echo CHtml::link('ICacheDependency', array('/site/doc', 'view' => 'ICacheDependency')); ?> $dependency=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the key identifying the value to be cached</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be cached</td>
</tr>
<tr>
  <td class="paramNameCol">$expire</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds in which the cached value will expire. 0 means never expire.</td>
</tr>
<tr>
  <td class="paramNameCol">$dependency</td>
  <td class="paramTypeCol"><?php echo CHtml::link('ICacheDependency', array('/site/doc', 'view' => 'ICacheDependency')); ?></td>
  <td class="paramDescCol">dependency of the cached item. If the dependency changes, the item is labelled invalid.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if the value is successfully stored into cache, false otherwise</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L83">yii/base/interfaces.php#L83</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$dependency</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Stores a value identified by a key into cache if the cache does not contain this key.
Nothing will be done if the cache already contains the key.</p>


<div class="detailHeader" id="delete-detail">
delete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>delete</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the key of the value to be deleted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the deletion is successful</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L89">yii/base/interfaces.php#L89</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Deletes a value with the specified key from cache</p>


<div class="detailHeader" id="flush-detail">
flush()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>flush</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the flush operation was successful.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L95">yii/base/interfaces.php#L95</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">flush</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Deletes all values from cache.
Be careful of performing this operation if the cache is shared by multiple applications.</p>


<div class="detailHeader" id="get-detail">
get()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public mixed <b>get</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a key identifying the cached value</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value stored in cache, false if the value is not in the cache or expired.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L50">yii/base/interfaces.php#L50</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Retrieves a value from cache with a specified key.</p>


<div class="detailHeader" id="mget-detail">
mget()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public array <b>mget</b>(array $ids)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$ids</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of keys identifying the cached values</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of cached values corresponding to the specified keys. The array
is returned in terms of (key,value) pairs.
If a value is not cached or expired, the corresponding array value will be false.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L61">yii/base/interfaces.php#L61</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">mget</span><span style="color: #007700">(</span><span style="color: #0000BB">$ids</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Retrieves multiple values from cache with the specified keys.
Some caches (such as memcache, apc) allow retrieving multiple cached values at one time,
which may improve the performance since it reduces the communication cost.
In case a cache doesn't support this feature natively, it will be simulated by this method.</p>


<div class="detailHeader" id="set-detail">
set()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>set</b>(string $id, mixed $value, integer $expire=0, <?php echo CHtml::link('ICacheDependency', array('/site/doc', 'view' => 'ICacheDependency')); ?> $dependency=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the key identifying the value to be cached</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be cached</td>
</tr>
<tr>
  <td class="paramNameCol">$expire</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds in which the cached value will expire. 0 means never expire.</td>
</tr>
<tr>
  <td class="paramNameCol">$dependency</td>
  <td class="paramTypeCol"><?php echo CHtml::link('ICacheDependency', array('/site/doc', 'view' => 'ICacheDependency')); ?></td>
  <td class="paramDescCol">dependency of the cached item. If the dependency changes, the item is labelled invalid.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if the value is successfully stored into cache, false otherwise</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L73">yii/base/interfaces.php#L73</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$expire</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$dependency</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Stores a value identified by a key into cache.
If the cache already contains such a key, the existing value and
expiration time will be replaced with the new ones.</p>


