<?php
$this->pageTitle = $this->pageHeading = 'IBehavior';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IBehavior';
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
  <td>interface IBehavior</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?>, <?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?>, <?php echo CHtml::link('CConsoleCommandBehavior', array('/site/doc', 'view' => 'CConsoleCommandBehavior')); ?>, <?php echo CHtml::link('CModelBehavior', array('/site/doc', 'view' => 'CModelBehavior')); ?>, <?php echo CHtml::link('CTimestampBehavior', array('/site/doc', 'view' => 'CTimestampBehavior')); ?>, <?php echo CHtml::link('EEavBehavior', array('/site/doc', 'view' => 'EEavBehavior')); ?>, <?php echo CHtml::link('YdAuditBehavior', array('/site/doc', 'view' => 'YdAuditBehavior')); ?>, <?php echo CHtml::link('YdCacheBehavior', array('/site/doc', 'view' => 'YdCacheBehavior')); ?>, <?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?>, <?php echo CHtml::link('YdSoftDeleteBehavior', array('/site/doc', 'view' => 'YdSoftDeleteBehavior')); ?>, <?php echo CHtml::link('YdTimestampBehavior', array('/site/doc', 'view' => 'YdTimestampBehavior')); ?></td>
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
IBehavior interfaces is implemented by all behavior classes.
<br/><br/>
A behavior is a way to enhance a component with additional methods that
are defined in the behavior class and not available in the component class.</div>
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
<tr id="attach">
  <td><?php echo CHtml::link('attach()', array('/site/doc', 'view' => 'IBehavior', '#' => 'attach-detail')); ?></td>
  <td>Attaches the behavior object to the component.</td>
  <td>IBehavior</td>
</tr>
<tr id="detach">
  <td><?php echo CHtml::link('detach()', array('/site/doc', 'view' => 'IBehavior', '#' => 'detach-detail')); ?></td>
  <td>Detaches the behavior object from the component.</td>
  <td>IBehavior</td>
</tr>
<tr id="getEnabled">
  <td><?php echo CHtml::link('getEnabled()', array('/site/doc', 'view' => 'IBehavior', '#' => 'getEnabled-detail')); ?></td>
  <td>Returns whether this behavior is enabled</td>
  <td>IBehavior</td>
</tr>
<tr id="setEnabled">
  <td><?php echo CHtml::link('setEnabled()', array('/site/doc', 'view' => 'IBehavior', '#' => 'setEnabled-detail')); ?></td>
  <td>Sets whether this behavior is enabled</td>
  <td>IBehavior</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="attach-detail">
attach()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public void <b>attach</b>(<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?> $component)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$component</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
  <td class="paramDescCol">the component that this behavior is to be attached to.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L513">yii/base/interfaces.php#L513</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">attach</span><span style="color: #007700">(</span><span style="color: #0000BB">$component</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Attaches the behavior object to the component.</p>


<div class="detailHeader" id="detach-detail">
detach()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public void <b>detach</b>(<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?> $component)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$component</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
  <td class="paramDescCol">the component that this behavior is to be detached from.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L518">yii/base/interfaces.php#L518</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">detach</span><span style="color: #007700">(</span><span style="color: #0000BB">$component</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Detaches the behavior object from the component.</p>


<div class="detailHeader" id="getEnabled-detail">
getEnabled()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>getEnabled</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this behavior is enabled</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L522">yii/base/interfaces.php#L522</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getEnabled</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setEnabled-detail">
setEnabled()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public void <b>setEnabled</b>(boolean $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this behavior is enabled</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L526">yii/base/interfaces.php#L526</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setEnabled</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p></p>


