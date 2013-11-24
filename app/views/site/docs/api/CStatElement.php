<?php
$this->pageTitle = $this->pageHeading = 'CStatElement';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CStatElement';
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
  <td>class CStatElement</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\ar\CActiveFinder.php">yii\db\ar\CActiveFinder.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CStatElement represents STAT join element for <?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?>.</div>
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
<tr id="relation">
  <td><?php echo CHtml::link('relation', array('/site/doc', 'view' => 'CStatElement', '#' => 'relation-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
  <td>the relation represented by this tree node</td>
  <td>CStatElement</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CStatElement', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CStatElement</td>
</tr>
<tr id="query">
  <td><?php echo CHtml::link('query()', array('/site/doc', 'view' => 'CStatElement', '#' => 'query-detail')); ?></td>
  <td>Performs the STAT query.</td>
  <td>CStatElement</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="relation-detail">
relation<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> <b>$relation</b>;</div>

<p>the relation represented by this tree node</p>


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
public void <b>__construct</b>(<?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?> $finder, <?php echo CHtml::link('CStatRelation', array('/site/doc', 'view' => 'CStatRelation')); ?> $relation, <?php echo CHtml::link('CJoinElement', array('/site/doc', 'view' => 'CJoinElement')); ?> $parent)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$finder</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?></td>
  <td class="paramDescCol">the finder</td>
</tr>
<tr>
  <td class="paramNameCol">$relation</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CStatRelation', array('/site/doc', 'view' => 'CStatRelation')); ?></td>
  <td class="paramDescCol">the STAT relation</td>
</tr>
<tr>
  <td class="paramNameCol">$parent</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CJoinElement', array('/site/doc', 'view' => 'CJoinElement')); ?></td>
  <td class="paramDescCol">the join element owning this STAT element</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\ar\CActiveFinder.php#L1378">yii\db\ar\CActiveFinder.php#L1378</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$finder</span><span style="color: #007700">,</span><span style="color: #0000BB">$relation</span><span style="color: #007700">,</span><span style="color: #0000BB">$parent</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">=</span><span style="color: #0000BB">$finder</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_parent</span><span style="color: #007700">=</span><span style="color: #0000BB">$parent</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">=</span><span style="color: #0000BB">$relation</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stats</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="query-detail">
query()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>query</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\db\ar\CActiveFinder.php#L1389">yii\db\ar\CActiveFinder.php#L1389</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">query</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^\s*(.*?)\((.*)\)\s*$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreignKey</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryManyMany</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryOneMany</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Performs the STAT query.</p>


