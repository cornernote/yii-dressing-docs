<?php
$this->pageTitle = $this->pageHeading = 'CSoapObjectWrapper';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CSoapObjectWrapper';
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
  <td><?php echo CHtml::link('system.web.services', array('/site/doc', '#' => 'system.web.services')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CSoapObjectWrapper</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/services/CWebService.php">yii/web/services/CWebService.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CSoapObjectWrapper is a wrapper class internally used when SoapServer::setObject() is not defined.</div>
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
<tr id="object">
  <td><?php echo CHtml::link('object', array('/site/doc', 'view' => 'CSoapObjectWrapper', '#' => 'object-detail')); ?></td>
  <td>object</td>
  <td>the service provider</td>
  <td>CSoapObjectWrapper</td>
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
<tr id="__call">
  <td><?php echo CHtml::link('__call()', array('/site/doc', 'view' => 'CSoapObjectWrapper', '#' => '__call-detail')); ?></td>
  <td>PHP __call magic method.</td>
  <td>CSoapObjectWrapper</td>
</tr>
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CSoapObjectWrapper', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CSoapObjectWrapper</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="object-detail">
object<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public object <b>$object</b>;</div>

<p>the service provider</p>


<h2>Method Details</h2>

<div class="detailHeader" id="__call-detail">
__call()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>__call</b>(string $name, array $arguments)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">method name</td>
</tr>
<tr>
  <td class="paramNameCol">$arguments</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">method arguments</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">method return value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/services/CWebService.php#L286">yii/web/services/CWebService.php#L286</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__call</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$arguments</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">object</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">),</span><span style="color: #0000BB">$arguments</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>PHP __call magic method.
This method calls the service provider to execute the actual logic.</p>


<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>(object $object)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$object</td>
  <td class="paramTypeCol">object</td>
  <td class="paramDescCol">the service provider</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/services/CWebService.php#L274">yii/web/services/CWebService.php#L274</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$object</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">object</span><span style="color: #007700">=</span><span style="color: #0000BB">$object</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


