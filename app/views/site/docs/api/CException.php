<?php
$this->pageTitle = $this->pageHeading = 'CException';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CException';
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
  <td>class CException &raquo;
Exception</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CDbException', array('/site/doc', 'view' => 'CDbException')); ?>, <?php echo CHtml::link('CHttpException', array('/site/doc', 'view' => 'CHttpException')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\CException.php">yii\base\CException.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CException represents a generic exception for all purposes.</div>
<a name="properties"></a>

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
<tr class="inherited" id="__construct">
  <td>__construct()</td>
  <td></td>
  <td>Exception</td>
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

