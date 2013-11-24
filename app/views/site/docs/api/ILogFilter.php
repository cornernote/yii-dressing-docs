<?php
$this->pageTitle = $this->pageHeading = 'ILogFilter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'ILogFilter';
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
  <td><?php echo CHtml::link('system.logging', array('/site/doc', '#' => 'system.logging')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>interface ILogFilter</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CChainedLogFilter', array('/site/doc', 'view' => 'CChainedLogFilter')); ?>, <?php echo CHtml::link('CLogFilter', array('/site/doc', 'view' => 'CLogFilter')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.11</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php">yii\base\interfaces.php</a></td>
</tr>
</table>

<div id="classDescription">
ILogFilter is the interface that must be implemented by log filters.
<br/><br/>
A log filter preprocesses the logged messages before they are handled by a log route.
You can attach classes that implement ILogFilter to CLogRoute::$filter.</div>
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
  <td><?php echo CHtml::link('filter()', array('/site/doc', 'view' => 'ILogFilter', '#' => 'filter-detail')); ?></td>
  <td>This method should be implemented to perform actual filtering of log messages</td>
  <td>ILogFilter</td>
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
abstract public void <b>filter</b>(array &$logs)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$logs</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of messages. Each array element represents one message
with the following structure:
array(
  [0] => message (string)
  [1] => level (string)
  [2] => category (string)
  [3] => timestamp (float, obtained by microtime(true));</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L629">yii\base\interfaces.php#L629</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">filter</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$logs</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>This method should be implemented to perform actual filtering of log messages
by working on the array given as the first parameter.
Implementation might reformat, remove or add information to logged messages.</p>


