<?php
$this->pageTitle = $this->pageHeading = 'CJoinQuery';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CJoinQuery';
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
  <td><?php echo CHtml::link('system.db.ar', array('/site/doc', '#' => 'system.db.ar')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CJoinQuery</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveFinder.php">yii/db/ar/CActiveFinder.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CJoinQuery represents a JOIN SQL statement.</div>
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
<tr id="conditions">
  <td><?php echo CHtml::link('conditions', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'conditions-detail')); ?></td>
  <td>array</td>
  <td>list of WHERE clauses</td>
  <td>CJoinQuery</td>
</tr>
<tr id="distinct">
  <td><?php echo CHtml::link('distinct', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'distinct-detail')); ?></td>
  <td>boolean</td>
  <td>whether to select distinct result set</td>
  <td>CJoinQuery</td>
</tr>
<tr id="elements">
  <td><?php echo CHtml::link('elements', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'elements-detail')); ?></td>
  <td>array</td>
  <td>list of join element IDs (id=>true)</td>
  <td>CJoinQuery</td>
</tr>
<tr id="groups">
  <td><?php echo CHtml::link('groups', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'groups-detail')); ?></td>
  <td>array</td>
  <td>list of GROUP BY clauses</td>
  <td>CJoinQuery</td>
</tr>
<tr id="havings">
  <td><?php echo CHtml::link('havings', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'havings-detail')); ?></td>
  <td>array</td>
  <td>list of HAVING clauses</td>
  <td>CJoinQuery</td>
</tr>
<tr id="joins">
  <td><?php echo CHtml::link('joins', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'joins-detail')); ?></td>
  <td>array</td>
  <td>list of join statement</td>
  <td>CJoinQuery</td>
</tr>
<tr id="limit">
  <td><?php echo CHtml::link('limit', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'limit-detail')); ?></td>
  <td>integer</td>
  <td>row limit</td>
  <td>CJoinQuery</td>
</tr>
<tr id="offset">
  <td><?php echo CHtml::link('offset', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'offset-detail')); ?></td>
  <td>integer</td>
  <td>row offset</td>
  <td>CJoinQuery</td>
</tr>
<tr id="orders">
  <td><?php echo CHtml::link('orders', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'orders-detail')); ?></td>
  <td>array</td>
  <td>list of ORDER BY clauses</td>
  <td>CJoinQuery</td>
</tr>
<tr id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'params-detail')); ?></td>
  <td>array</td>
  <td>list of query parameters</td>
  <td>CJoinQuery</td>
</tr>
<tr id="selects">
  <td><?php echo CHtml::link('selects', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'selects-detail')); ?></td>
  <td>array</td>
  <td>list of column selections</td>
  <td>CJoinQuery</td>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CJoinQuery', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CJoinQuery</td>
</tr>
<tr id="createCommand">
  <td><?php echo CHtml::link('createCommand()', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'createCommand-detail')); ?></td>
  <td>Creates the SQL statement.</td>
  <td>CJoinQuery</td>
</tr>
<tr id="join">
  <td><?php echo CHtml::link('join()', array('/site/doc', 'view' => 'CJoinQuery', '#' => 'join-detail')); ?></td>
  <td>Joins with another join element</td>
  <td>CJoinQuery</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="conditions-detail">
conditions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$conditions</b>;</div>

<p>list of WHERE clauses</p>


<div class="detailHeader" id="distinct-detail">
distinct<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$distinct</b>;</div>

<p>whether to select distinct result set</p>


<div class="detailHeader" id="elements-detail">
elements<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$elements</b>;</div>

<p>list of join element IDs (id=>true)</p>


<div class="detailHeader" id="groups-detail">
groups<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$groups</b>;</div>

<p>list of GROUP BY clauses</p>


<div class="detailHeader" id="havings-detail">
havings<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$havings</b>;</div>

<p>list of HAVING clauses</p>


<div class="detailHeader" id="joins-detail">
joins<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$joins</b>;</div>

<p>list of join statement</p>


<div class="detailHeader" id="limit-detail">
limit<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$limit</b>;</div>

<p>row limit</p>


<div class="detailHeader" id="offset-detail">
offset<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$offset</b>;</div>

<p>row offset</p>


<div class="detailHeader" id="orders-detail">
orders<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$orders</b>;</div>

<p>list of ORDER BY clauses</p>


<div class="detailHeader" id="params-detail">
params<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$params</b>;</div>

<p>list of query parameters</p>


<div class="detailHeader" id="selects-detail">
selects<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$selects</b>;</div>

<p>list of column selections</p>


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
public void <b>__construct</b>(<?php echo CHtml::link('CJoinElement', array('/site/doc', 'view' => 'CJoinElement')); ?> $joinElement, <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$joinElement</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CJoinElement', array('/site/doc', 'view' => 'CJoinElement')); ?></td>
  <td class="paramDescCol">The root join tree.</td>
</tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveFinder.php#L1257">yii/db/ar/CActiveFinder.php#L1257</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$joinElement</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selects</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$joinElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnSelect</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joins</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$joinElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableNameWithAlias</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joins</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">conditions</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">orders</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">groups</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">havings</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">distinct&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">distinct</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">distinct</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selects</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$joinElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKeySelect</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joins</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$joinElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableNameWithAlias</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">conditions</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$joinElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKeyRange</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">elements</span><span style="color: #007700">[</span><span style="color: #0000BB">$joinElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">]=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="createCommand-detail">
createCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>createCommand</b>(<?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?> $builder)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$builder</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
  <td class="paramDescCol">the command builder</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">DB command instance representing the SQL statement</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveFinder.php#L1315">yii/db/ar/CActiveFinder.php#L1315</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$builder</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">distinct&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'SELECT&nbsp;DISTINCT&nbsp;'</span><span style="color: #007700">:</span><span style="color: #DD0000">'SELECT&nbsp;'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selects</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;FROM&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joins</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">conditions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$condition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;WHERE&nbsp;('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">')&nbsp;AND&nbsp;('</span><span style="color: #007700">,</span><span style="color: #0000BB">$conditions</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$groups</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">groups&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$group</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$group</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$groups</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$group</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$groups</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;GROUP&nbsp;BY&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$groups</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$havings</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">havings&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$having</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$having</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$havings</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$having</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$havings</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;HAVING&nbsp;('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">')&nbsp;AND&nbsp;('</span><span style="color: #007700">,</span><span style="color: #0000BB">$havings</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$orders</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">orders&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$order</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$order</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$orders</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$orders</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;ORDER&nbsp;BY&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$orders</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValues</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates the SQL statement.</p>


<div class="detailHeader" id="join-detail">
join()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>join</b>(<?php echo CHtml::link('CJoinElement', array('/site/doc', 'view' => 'CJoinElement')); ?> $element)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$element</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CJoinElement', array('/site/doc', 'view' => 'CJoinElement')); ?></td>
  <td class="paramDescCol">the element to be joined</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveFinder.php#L1287">yii/db/ar/CActiveFinder.php#L1287</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">join</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">slave</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">slave</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selects</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnSelect</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">conditions</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">orders</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joins</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getJoinCondition</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joins</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">groups</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">havings</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">elements</span><span style="color: #007700">[</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">]=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Joins with another join element</p>


