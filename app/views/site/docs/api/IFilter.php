<?php
$this->pageTitle = $this->pageHeading = 'IFilter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IFilter';
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
  <td><?php echo CHtml::link('system.base', array('/site/doc', '#' => 'system.base')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>interface IFilter</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('BootstrapFilter', array('/site/doc', 'view' => 'BootstrapFilter')); ?>, <?php echo CHtml::link('CAccessControlFilter', array('/site/doc', 'view' => 'CAccessControlFilter')); ?>, <?php echo CHtml::link('CContentDecorator', array('/site/doc', 'view' => 'CContentDecorator')); ?>, <?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?>, <?php echo CHtml::link('CFilterWidget', array('/site/doc', 'view' => 'CFilterWidget')); ?>, <?php echo CHtml::link('CHtmlPurifier', array('/site/doc', 'view' => 'CHtmlPurifier')); ?>, <?php echo CHtml::link('CHttpCacheFilter', array('/site/doc', 'view' => 'CHttpCacheFilter')); ?>, <?php echo CHtml::link('CInlineFilter', array('/site/doc', 'view' => 'CInlineFilter')); ?>, <?php echo CHtml::link('CMarkdown', array('/site/doc', 'view' => 'CMarkdown')); ?>, <?php echo CHtml::link('COutputCache', array('/site/doc', 'view' => 'COutputCache')); ?>, <?php echo CHtml::link('COutputProcessor', array('/site/doc', 'view' => 'COutputProcessor')); ?>, <?php echo CHtml::link('CTextHighlighter', array('/site/doc', 'view' => 'CTextHighlighter')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php">yii\base\interfaces.php</a></td>
</tr>
</table>

<div id="classDescription">
IFilter is the interface that must be implemented by action filters.</div>
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
<tr id="filter">
  <td><?php echo CHtml::link('filter()', array('/site/doc', 'view' => 'IFilter', '#' => 'filter-detail')); ?></td>
  <td>Performs the filtering.</td>
  <td>IFilter</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="filter-detail">
filter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public void <b>filter</b>(<?php echo CHtml::link('CFilterChain', array('/site/doc', 'view' => 'CFilterChain')); ?> $filterChain)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$filterChain</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CFilterChain', array('/site/doc', 'view' => 'CFilterChain')); ?></td>
  <td class="paramDescCol">the filter chain that the filter is on.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L163">yii\base\interfaces.php#L163</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">filter</span><span style="color: #007700">(</span><span style="color: #0000BB">$filterChain</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Performs the filtering.
This method should be implemented to perform actual filtering.
If the filter wants to continue the action execution, it should call
<code>$filterChain->run()</code>.</p>


