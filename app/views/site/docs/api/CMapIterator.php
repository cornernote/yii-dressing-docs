<?php
$this->pageTitle = $this->pageHeading = 'CMapIterator';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CMapIterator';
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
  <td><?php echo CHtml::link('system.collections', array('/site/doc', '#' => 'system.collections')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CMapIterator</td>
</tr>
<tr>
  <th>Implements</th>
  <td>Iterator, Traversable</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMapIterator.php">yii/collections/CMapIterator.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CMapIterator implements an iterator for <?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?>.
<br/><br/>
It allows CMap to return a new iterator for traversing the items in the map.</div>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CMapIterator', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CMapIterator</td>
</tr>
<tr id="current">
  <td><?php echo CHtml::link('current()', array('/site/doc', 'view' => 'CMapIterator', '#' => 'current-detail')); ?></td>
  <td>Returns the current array element.</td>
  <td>CMapIterator</td>
</tr>
<tr id="key">
  <td><?php echo CHtml::link('key()', array('/site/doc', 'view' => 'CMapIterator', '#' => 'key-detail')); ?></td>
  <td>Returns the key of the current array element.</td>
  <td>CMapIterator</td>
</tr>
<tr id="next">
  <td><?php echo CHtml::link('next()', array('/site/doc', 'view' => 'CMapIterator', '#' => 'next-detail')); ?></td>
  <td>Moves the internal pointer to the next array element.</td>
  <td>CMapIterator</td>
</tr>
<tr id="rewind">
  <td><?php echo CHtml::link('rewind()', array('/site/doc', 'view' => 'CMapIterator', '#' => 'rewind-detail')); ?></td>
  <td>Rewinds internal array pointer.</td>
  <td>CMapIterator</td>
</tr>
<tr id="valid">
  <td><?php echo CHtml::link('valid()', array('/site/doc', 'view' => 'CMapIterator', '#' => 'valid-detail')); ?></td>
  <td>Returns whether there is an element at current position.</td>
  <td>CMapIterator</td>
</tr>
</table>
</div>
<a name="events"></a>

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
public void <b>__construct</b>(array &$data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the data to be iterated through</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMapIterator.php#L39">yii/collections/CMapIterator.php#L39</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">=&amp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keys</span><span style="color: #007700">=</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_key</span><span style="color: #007700">=</span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keys</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="current-detail">
current()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>current</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the current array element</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMapIterator.php#L70">yii/collections/CMapIterator.php#L70</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">current</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_d</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_key</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the current array element.
This method is required by the interface Iterator.</p>


<div class="detailHeader" id="key-detail">
key()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>key</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the key of the current array element</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMapIterator.php#L60">yii/collections/CMapIterator.php#L60</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">key</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_key</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the key of the current array element.
This method is required by the interface Iterator.</p>


<div class="detailHeader" id="next-detail">
next()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>next</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMapIterator.php#L79">yii/collections/CMapIterator.php#L79</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">next</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_key</span><span style="color: #007700">=</span><span style="color: #0000BB">next</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keys</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Moves the internal pointer to the next array element.
This method is required by the interface Iterator.</p>


<div class="detailHeader" id="rewind-detail">
rewind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>rewind</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMapIterator.php#L50">yii/collections/CMapIterator.php#L50</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">rewind</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_key</span><span style="color: #007700">=</span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keys</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Rewinds internal array pointer.
This method is required by the interface Iterator.</p>


<div class="detailHeader" id="valid-detail">
valid()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>valid</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/collections/CMapIterator.php#L89">yii/collections/CMapIterator.php#L89</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">valid</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_key</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether there is an element at current position.
This method is required by the interface Iterator.</p>


