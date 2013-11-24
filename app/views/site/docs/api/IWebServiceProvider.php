<?php
$this->pageTitle = $this->pageHeading = 'IWebServiceProvider';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IWebServiceProvider';
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
  <td>interface IWebServiceProvider</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php">yii\base\interfaces.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
IWebServiceProvider interface may be implemented by Web service provider classes.
<br/><br/>
If this interface is implemented, the provider instance will be able
to intercept the remote method invocation (e.g. for logging or authentication purpose).</div>
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
<tr id="afterWebMethod">
  <td><?php echo CHtml::link('afterWebMethod()', array('/site/doc', 'view' => 'IWebServiceProvider', '#' => 'afterWebMethod-detail')); ?></td>
  <td>This method is invoked after the requested remote method is invoked.</td>
  <td>IWebServiceProvider</td>
</tr>
<tr id="beforeWebMethod">
  <td><?php echo CHtml::link('beforeWebMethod()', array('/site/doc', 'view' => 'IWebServiceProvider', '#' => 'beforeWebMethod-detail')); ?></td>
  <td>This method is invoked before the requested remote method is invoked.</td>
  <td>IWebServiceProvider</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="afterWebMethod-detail">
afterWebMethod()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public void <b>afterWebMethod</b>(<?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> $service)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$service</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?></td>
  <td class="paramDescCol">the currently requested Web service.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L207">yii\base\interfaces.php#L207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterWebMethod</span><span style="color: #007700">(</span><span style="color: #0000BB">$service</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>This method is invoked after the requested remote method is invoked.</p>


<div class="detailHeader" id="beforeWebMethod-detail">
beforeWebMethod()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>beforeWebMethod</b>(<?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> $service)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$service</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?></td>
  <td class="paramDescCol">the currently requested Web service.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the remote method should be executed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L202">yii\base\interfaces.php#L202</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeWebMethod</span><span style="color: #007700">(</span><span style="color: #0000BB">$service</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>This method is invoked before the requested remote method is invoked.</p>


