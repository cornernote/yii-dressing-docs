<?php
$this->pageTitle = $this->pageHeading = 'IDataProvider';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IDataProvider';
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
  <td><?php echo CHtml::link('system.web', array('/site/doc', '#' => 'system.web')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>interface IDataProvider</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?>, <?php echo CHtml::link('CArrayDataProvider', array('/site/doc', 'view' => 'CArrayDataProvider')); ?>, <?php echo CHtml::link('CDataProvider', array('/site/doc', 'view' => 'CDataProvider')); ?>, <?php echo CHtml::link('CSqlDataProvider', array('/site/doc', 'view' => 'CSqlDataProvider')); ?>, <?php echo CHtml::link('YdActiveDataProvider', array('/site/doc', 'view' => 'YdActiveDataProvider')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
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
IDataProvider is the interface that must be implemented by data provider classes.
<br/><br/>
Data providers are components that can feed data for widgets such as data grid, data list.
Besides providing data, they also support pagination and sorting.</div>
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
<tr id="getData">
  <td><?php echo CHtml::link('getData()', array('/site/doc', 'view' => 'IDataProvider', '#' => 'getData-detail')); ?></td>
  <td>Returns the data items currently available.</td>
  <td>IDataProvider</td>
</tr>
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'IDataProvider', '#' => 'getId-detail')); ?></td>
  <td>Returns the unique ID that identifies the data provider from other data providers.</td>
  <td>IDataProvider</td>
</tr>
<tr id="getItemCount">
  <td><?php echo CHtml::link('getItemCount()', array('/site/doc', 'view' => 'IDataProvider', '#' => 'getItemCount-detail')); ?></td>
  <td>Returns the number of data items in the current page.</td>
  <td>IDataProvider</td>
</tr>
<tr id="getKeys">
  <td><?php echo CHtml::link('getKeys()', array('/site/doc', 'view' => 'IDataProvider', '#' => 'getKeys-detail')); ?></td>
  <td>Returns the key values associated with the data items.</td>
  <td>IDataProvider</td>
</tr>
<tr id="getPagination">
  <td><?php echo CHtml::link('getPagination()', array('/site/doc', 'view' => 'IDataProvider', '#' => 'getPagination-detail')); ?></td>
  <td>Returns the pagination object. If this is false, it means the pagination is disabled.</td>
  <td>IDataProvider</td>
</tr>
<tr id="getSort">
  <td><?php echo CHtml::link('getSort()', array('/site/doc', 'view' => 'IDataProvider', '#' => 'getSort-detail')); ?></td>
  <td>Returns the sorting object. If this is false, it means the sorting is disabled.</td>
  <td>IDataProvider</td>
</tr>
<tr id="getTotalItemCount">
  <td><?php echo CHtml::link('getTotalItemCount()', array('/site/doc', 'view' => 'IDataProvider', '#' => 'getTotalItemCount-detail')); ?></td>
  <td>Returns the total number of data items.</td>
  <td>IDataProvider</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="getData-detail">
getData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public array <b>getData</b>(boolean $refresh=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the data should be re-fetched from persistent storage.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list of data items currently available in this data provider.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L587">yii/base/interfaces.php#L587</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getData</span><span style="color: #007700">(</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Returns the data items currently available.</p>


<div class="detailHeader" id="getId-detail">
getId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public string <b>getId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the unique ID that identifies the data provider from other data providers.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L566">yii/base/interfaces.php#L566</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getItemCount-detail">
getItemCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public integer <b>getItemCount</b>(boolean $refresh=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the number of data items should be re-calculated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of data items in the current page.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L574">yii/base/interfaces.php#L574</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Returns the number of data items in the current page.
This is equivalent to <code>count($provider->getData())</code>.
When <?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'IDataProvider', '#' => 'pagination')); ?> is set false, this returns the same value as <?php echo CHtml::link('totalItemCount', array('/site/doc', 'view' => 'IDataProvider', '#' => 'totalItemCount')); ?>.</p>


<div class="detailHeader" id="getKeys-detail">
getKeys()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public array <b>getKeys</b>(boolean $refresh=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the keys should be re-calculated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list of key values corresponding to <?php echo CHtml::link('data', array('/site/doc', 'view' => 'IDataProvider', '#' => 'data')); ?>. Each data item in <?php echo CHtml::link('data', array('/site/doc', 'view' => 'IDataProvider', '#' => 'data')); ?>
is uniquely identified by the corresponding key value in this array.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L594">yii/base/interfaces.php#L594</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getKeys</span><span style="color: #007700">(</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Returns the key values associated with the data items.</p>


<div class="detailHeader" id="getPagination-detail">
getPagination()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public <?php echo CHtml::link('CPagination', array('/site/doc', 'view' => 'CPagination')); ?> <b>getPagination</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CPagination', array('/site/doc', 'view' => 'CPagination')); ?></td>
  <td class="paramDescCol">the pagination object. If this is false, it means the pagination is disabled.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L602">yii/base/interfaces.php#L602</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSort-detail">
getSort()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public <?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?> <b>getSort</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?></td>
  <td class="paramDescCol">the sorting object. If this is false, it means the sorting is disabled.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L598">yii/base/interfaces.php#L598</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSort</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getTotalItemCount-detail">
getTotalItemCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public integer <b>getTotalItemCount</b>(boolean $refresh=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the total number of data items should be re-calculated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">total number of possible data items.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L581">yii/base/interfaces.php#L581</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTotalItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Returns the total number of data items.
When <?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'IDataProvider', '#' => 'pagination')); ?> is set false, this returns the same value as <?php echo CHtml::link('itemCount', array('/site/doc', 'view' => 'IDataProvider', '#' => 'itemCount')); ?>.</p>


