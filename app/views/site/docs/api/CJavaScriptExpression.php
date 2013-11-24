<?php
$this->pageTitle = $this->pageHeading = 'CJavaScriptExpression';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CJavaScriptExpression';
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
  <td><?php echo CHtml::link('system.web.helpers', array('/site/doc', '#' => 'system.web.helpers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CJavaScriptExpression</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.11</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\helpers\CJavaScriptExpression.php">yii\web\helpers\CJavaScriptExpression.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Alexander Makarov &lt;sam@rmcreative.ru&gt;</td>
</tr>
</table>

<div id="classDescription">
CJavaScriptExpression represents a JavaScript expression that does not need escaping.
It can be passed to <?php echo CHtml::link('CJavaScript::encode()', array('/site/doc', 'view' => 'CJavaScript', '#' => 'encode')); ?> and the code will stay as is.</div>
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
<tr id="code">
  <td><?php echo CHtml::link('code', array('/site/doc', 'view' => 'CJavaScriptExpression', '#' => 'code-detail')); ?></td>
  <td>string</td>
  <td>the javascript expression wrapped by this object</td>
  <td>CJavaScriptExpression</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CJavaScriptExpression', '#' => '__construct-detail')); ?></td>
  <td></td>
  <td>CJavaScriptExpression</td>
</tr>
<tr id="__toString">
  <td><?php echo CHtml::link('__toString()', array('/site/doc', 'view' => 'CJavaScriptExpression', '#' => '__toString-detail')); ?></td>
  <td>String magic method</td>
  <td>CJavaScriptExpression</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="code-detail">
code<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$code</b>;</div>

<p>the javascript expression wrapped by this object</p>


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
public void <b>__construct</b>(string $code)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a javascript expression that is to be wrapped by this object</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\helpers\CJavaScriptExpression.php#L30">yii\web\helpers\CJavaScriptExpression.php#L30</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Value&nbsp;passed&nbsp;to&nbsp;CJavaScriptExpression&nbsp;should&nbsp;be&nbsp;a&nbsp;string.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'js:'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$code</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$code</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">code</span><span style="color: #007700">=</span><span style="color: #0000BB">$code</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="__toString-detail">
__toString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>__toString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the javascript expression wrapped by this object</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\helpers\CJavaScriptExpression.php#L43">yii\web\helpers\CJavaScriptExpression.php#L43</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__toString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">code</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>String magic method</p>


