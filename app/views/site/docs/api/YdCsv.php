<?php
$this->pageTitle = $this->pageHeading = 'YdCsv';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdCsv';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdCsv</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdCsv.php">dressing\components\YdCsv.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdCsv</div>
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
<tr id="csvToArray">
  <td><?php echo CHtml::link('csvToArray()', array('/site/doc', 'view' => 'YdCsv', '#' => 'csvToArray-detail')); ?></td>
  <td></td>
  <td>YdCsv</td>
</tr>
<tr id="escapeCSVElement">
  <td><?php echo CHtml::link('escapeCSVElement()', array('/site/doc', 'view' => 'YdCsv', '#' => 'escapeCSVElement-detail')); ?></td>
  <td></td>
  <td>YdCsv</td>
</tr>
<tr id="getCSVString">
  <td><?php echo CHtml::link('getCSVString()', array('/site/doc', 'view' => 'YdCsv', '#' => 'getCSVString-detail')); ?></td>
  <td></td>
  <td>YdCsv</td>
</tr>
<tr id="outputCSVFromKeyValueArray">
  <td><?php echo CHtml::link('outputCSVFromKeyValueArray()', array('/site/doc', 'view' => 'YdCsv', '#' => 'outputCSVFromKeyValueArray-detail')); ?></td>
  <td></td>
  <td>YdCsv</td>
</tr>
<tr id="putCaptionsOnCSVArray">
  <td><?php echo CHtml::link('putCaptionsOnCSVArray()', array('/site/doc', 'view' => 'YdCsv', '#' => 'putCaptionsOnCSVArray-detail')); ?></td>
  <td></td>
  <td>YdCsv</td>
</tr>
<tr id="sendCSVInHeader">
  <td><?php echo CHtml::link('sendCSVInHeader()', array('/site/doc', 'view' => 'YdCsv', '#' => 'sendCSVInHeader-detail')); ?></td>
  <td></td>
  <td>YdCsv</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="csvToArray-detail">
csvToArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>csvToArray</b>($fileName $fileName, string $delimiter=',')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fileName</td>
  <td class="paramTypeCol">$fileName</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$delimiter</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdCsv.php#L150">dressing\components\YdCsv.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">csvToArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">","</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="escapeCSVElement-detail">
escapeCSVElement()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>escapeCSVElement</b>($dataElement $dataElement, string $delimiter=',', string $enclosure='"')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dataElement</td>
  <td class="paramTypeCol">$dataElement</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$delimiter</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$enclosure</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdCsv.php#L36">dressing\components\YdCsv.php#L36</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">escapeCSVElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$dataElement</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">","</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$enclosure&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"\""</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getCSVString-detail">
getCSVString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getCSVString</b>($dataArray $dataArray, string $delimiter=',', string $enclosure='"')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dataArray</td>
  <td class="paramTypeCol">$dataArray</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$delimiter</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$enclosure</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdCsv.php#L50">dressing\components\YdCsv.php#L50</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">getCSVString</span><span style="color: #007700">(</span><span style="color: #0000BB">$dataArray</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">","</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$enclosure&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"\""</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="outputCSVFromKeyValueArray-detail">
outputCSVFromKeyValueArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>outputCSVFromKeyValueArray</b>($keyValueArray $keyValueArray, string $delimiter=',', string $enclosure='"', string $filename='csvreport.csv')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$keyValueArray</td>
  <td class="paramTypeCol">$keyValueArray</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$delimiter</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$enclosure</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$filename</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdCsv.php#L136">dressing\components\YdCsv.php#L136</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">outputCSVFromKeyValueArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$keyValueArray</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">","</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$enclosure&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"\""</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"csvreport.csv"</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="putCaptionsOnCSVArray-detail">
putCaptionsOnCSVArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>putCaptionsOnCSVArray</b>($rows $rows)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$rows</td>
  <td class="paramTypeCol">$rows</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdCsv.php#L107">dressing\components\YdCsv.php#L107</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">putCaptionsOnCSVArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$rows</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="sendCSVInHeader-detail">
sendCSVInHeader()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>sendCSVInHeader</b>($cvsString $cvsString, string $filename='csvreport.csv')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cvsString</td>
  <td class="paramTypeCol">$cvsString</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$filename</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdCsv.php#L93">dressing\components\YdCsv.php#L93</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">sendCSVInHeader</span><span style="color: #007700">(</span><span style="color: #0000BB">$cvsString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"csvreport.csv"</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>

