<?php
$this->pageTitle = $this->pageHeading = 'CHttpException';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CHttpException';
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
  <td><?php echo CHtml::link('system.base', array('/site/doc', '#' => 'system.base')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CHttpException &raquo;
<?php echo CHtml::link('CException', array('/site/doc', 'view' => 'CException')); ?> &raquo;
Exception</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CHttpException.php">yii/base/CHttpException.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CHttpException represents an exception caused by invalid operations of end-users.
<br/><br/>
The HTTP error code can be obtained via <?php echo CHtml::link('statusCode', array('/site/doc', 'view' => 'CHttpException', '#' => 'statusCode')); ?>.
Error handlers may use this status code to decide how to format the error page.</div>
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
<tr id="statusCode">
  <td><?php echo CHtml::link('statusCode', array('/site/doc', 'view' => 'CHttpException', '#' => 'statusCode-detail')); ?></td>
  <td>integer</td>
  <td>HTTP status code, such as 403, 404, 500, etc.</td>
  <td>CHttpException</td>
</tr>
</table>
</div>
<div class="summary docProperty">
<h2>Protected Properties</h2>

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
<tr class="inherited" id="code">
  <td>code</td>
  <td></td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="file">
  <td>file</td>
  <td></td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="line">
  <td>line</td>
  <td></td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="message">
  <td>message</td>
  <td></td>
  <td></td>
  <td>Exception</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CHttpException', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CHttpException</td>
</tr>
<tr class="inherited" id="__toString">
  <td>__toString()</td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="getCode">
  <td>getCode()</td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="getFile">
  <td>getFile()</td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="getLine">
  <td>getLine()</td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="getMessage">
  <td>getMessage()</td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="getPrevious">
  <td>getPrevious()</td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="getTrace">
  <td>getTrace()</td>
  <td></td>
  <td>Exception</td>
</tr>
<tr class="inherited" id="getTraceAsString">
  <td>getTraceAsString()</td>
  <td></td>
  <td>Exception</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="statusCode-detail">
statusCode<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$statusCode</b>;</div>

<p>HTTP status code, such as 403, 404, 500, etc.</p>


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
public void <b>__construct</b>(integer $status, string $message=NULL, integer $code=0)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$status</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">HTTP status code, such as 404, 500, etc.</td>
</tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">error message</td>
</tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">error code</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/CHttpException.php#L34">yii/base/CHttpException.php#L34</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$status</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">statusCode</span><span style="color: #007700">=</span><span style="color: #0000BB">$status</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


