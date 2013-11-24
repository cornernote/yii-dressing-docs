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
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdCsv.php">dressing/components/YdCsv.php</a></td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdCsv.php#L150">dressing/components/YdCsv.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">csvToArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">","</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rows&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$header&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fgetcsv</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;((</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fgetcsv</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter</span><span style="color: #007700">))&nbsp;!==&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$header&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$heading</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$heading&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$heading</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">$heading</span><span style="color: #007700">]&nbsp;=&nbsp;(isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))&nbsp;?&nbsp;</span><span style="color: #0000BB">Encoding</span><span style="color: #007700">::</span><span style="color: #0000BB">toUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">])&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rows</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rows</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdCsv.php#L36">dressing/components/YdCsv.php#L36</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">escapeCSVElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$dataElement</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">","</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$enclosure&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"\""</span><span style="color: #007700">)<br />{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dataElement&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">"\""</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\"\""</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dataElement</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$dataElement</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdCsv.php#L50">dressing/components/YdCsv.php#L50</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">getCSVString</span><span style="color: #007700">(</span><span style="color: #0000BB">$dataArray</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">","</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$enclosure&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"\""</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Write&nbsp;a&nbsp;line&nbsp;to&nbsp;a&nbsp;file<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;$filePointer&nbsp;=&nbsp;the&nbsp;file&nbsp;resource&nbsp;to&nbsp;write&nbsp;to<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;$dataArray&nbsp;=&nbsp;the&nbsp;data&nbsp;to&nbsp;write&nbsp;out<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;$delimeter&nbsp;=&nbsp;the&nbsp;field&nbsp;separator<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Build&nbsp;the&nbsp;string<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$string&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;for&nbsp;each&nbsp;array&nbsp;element,&nbsp;which&nbsp;represents&nbsp;a&nbsp;line&nbsp;in&nbsp;the&nbsp;csv&nbsp;file...<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$dataArray&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$line</span><span style="color: #007700">)&nbsp;{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;No&nbsp;leading&nbsp;delimiter<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$writeDelimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$line&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$dataElement</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Replaces&nbsp;a&nbsp;double&nbsp;quote&nbsp;with&nbsp;two&nbsp;double&nbsp;quotes<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dataElement&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">escapeCSVElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$dataElement</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$enclosure</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Adds&nbsp;a&nbsp;delimiter&nbsp;before&nbsp;each&nbsp;field&nbsp;(except&nbsp;the&nbsp;first)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$writeDelimiter</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$string&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$delimiter</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Encloses&nbsp;each&nbsp;field&nbsp;with&nbsp;$enclosure&nbsp;and&nbsp;adds&nbsp;it&nbsp;to&nbsp;the&nbsp;string<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$string&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$enclosure&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$dataElement&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$enclosure</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Delimiters&nbsp;are&nbsp;used&nbsp;every&nbsp;time&nbsp;except&nbsp;the&nbsp;first.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$writeDelimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Append&nbsp;new&nbsp;line<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$string&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;</span><span style="color: #FF8000">//&nbsp;end&nbsp;foreach($dataArray&nbsp;as&nbsp;$line)<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Write&nbsp;the&nbsp;string&nbsp;to&nbsp;the&nbsp;file<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$string</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdCsv.php#L136">dressing/components/YdCsv.php#L136</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">outputCSVFromKeyValueArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$keyValueArray</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">","</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$enclosure&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"\""</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"csvreport.csv"</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$arrayWithCaptions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">putCaptionsOnCSVArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$keyValueArray</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csvString&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getCVsString</span><span style="color: #007700">(</span><span style="color: #0000BB">$arrayWithCaptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$enclosure</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">SendCSVInHeader</span><span style="color: #007700">(</span><span style="color: #0000BB">$csvString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdCsv.php#L107">dressing/components/YdCsv.php#L107</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">putCaptionsOnCSVArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$rows</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$rows</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$FirstRow&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$rows</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Fields&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$FirstRow&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Fields</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$FieldsZero</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$Fields</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$RowsWithCaption&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$FieldsZero</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rows</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;printr($FieldsZero,"FieldsZero");<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;printr($rows,"rows");<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;printr($RowsWithCaption,"RowsWithCaption");<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$RowsWithCaption&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$rows</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$RowsWithCaption</span><span style="color: #007700">;<br /><br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdCsv.php#L93">dressing/components/YdCsv.php#L93</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">sendCSVInHeader</span><span style="color: #007700">(</span><span style="color: #0000BB">$cvsString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"csvreport.csv"</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type:&nbsp;application/vnd.ms-excel"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Expires:&nbsp;0"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Cache-Control:&nbsp;must-revalidate,&nbsp;post-check=0,&nbsp;pre-check=0"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Disposition:&nbsp;attachment;&nbsp;filename=</span><span style="color: #0000BB">$filename</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$cvsString</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


