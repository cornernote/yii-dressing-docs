<?php
$this->pageTitle = $this->pageHeading = 'ICacheDependency';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'ICacheDependency';
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
  <td>interface ICacheDependency</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?>, <?php echo CHtml::link('CChainedCacheDependency', array('/site/doc', 'view' => 'CChainedCacheDependency')); ?>, <?php echo CHtml::link('CDbCacheDependency', array('/site/doc', 'view' => 'CDbCacheDependency')); ?>, <?php echo CHtml::link('CDirectoryCacheDependency', array('/site/doc', 'view' => 'CDirectoryCacheDependency')); ?>, <?php echo CHtml::link('CExpressionDependency', array('/site/doc', 'view' => 'CExpressionDependency')); ?>, <?php echo CHtml::link('CFileCacheDependency', array('/site/doc', 'view' => 'CFileCacheDependency')); ?>, <?php echo CHtml::link('CGlobalStateCacheDependency', array('/site/doc', 'view' => 'CGlobalStateCacheDependency')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\interfaces.php">yii\base\interfaces.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
ICacheDependency is the interface that must be implemented by cache dependency classes.
<br/><br/>
This interface must be implemented by classes meant to be used as
cache dependencies.
<br/><br/>
Objects implementing this interface must be able to be serialized and unserialized.</div>
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
<tr id="evaluateDependency">
  <td><?php echo CHtml::link('evaluateDependency()', array('/site/doc', 'view' => 'ICacheDependency', '#' => 'evaluateDependency-detail')); ?></td>
  <td>Evaluates the dependency by generating and saving the data related with dependency.</td>
  <td>ICacheDependency</td>
</tr>
<tr id="getHasChanged">
  <td><?php echo CHtml::link('getHasChanged()', array('/site/doc', 'view' => 'ICacheDependency', '#' => 'getHasChanged-detail')); ?></td>
  <td>Returns whether the dependency has changed.</td>
  <td>ICacheDependency</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="evaluateDependency-detail">
evaluateDependency()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public void <b>evaluateDependency</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\interfaces.php#L116">yii\base\interfaces.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">evaluateDependency</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Evaluates the dependency by generating and saving the data related with dependency.
This method is invoked by cache before writing data into it.</p>


<div class="detailHeader" id="getHasChanged-detail">
getHasChanged()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>getHasChanged</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the dependency has changed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\interfaces.php#L120">yii\base\interfaces.php#L120</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHasChanged</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p></p>


