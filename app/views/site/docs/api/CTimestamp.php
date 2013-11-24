<?php
$this->pageTitle = $this->pageHeading = 'CTimestamp';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CTimestamp';
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
  <td><?php echo CHtml::link('system.utils', array('/site/doc', '#' => 'system.utils')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CTimestamp</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php">yii\utils\CTimestamp.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Wei Zhuo &lt;weizhuo[at]gmail[dot]com&gt;</td>
</tr>
</table>

<div id="classDescription">
CTimestamp represents a timestamp.
<br/><br/>
Part of this class was adapted from the ADOdb Date Library
<a href="http://phplens.com/phpeverywhere/">ADOdb abstraction library</a>.
The original source code was released under both BSD and GNU Lesser GPL
library license, with the following copyright notice:
    Copyright (c) 2000, 2001, 2002, 2003, 2004 John Lim
    All rights reserved.
<br/><br/>
This class is provided to support UNIX timestamp that is beyond the range
of 1901-2038 on Unix and1970-2038 on Windows. Except <?php echo CHtml::link('getTimestamp', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getTimestamp')); ?>,
all other methods in this class can work with the extended timestamp range.
For <?php echo CHtml::link('getTimestamp', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getTimestamp')); ?>, because it is merely a wrapper of
http://php.net/manual/en/function.mktime.php, it may still
be subject to the limit of timestamp range on certain platforms. Please refer
to the PHP manual for more information.</div>
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
<tr id="formatDate">
  <td><?php echo CHtml::link('formatDate()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'formatDate-detail')); ?></td>
  <td>Formats a timestamp to a date string.</td>
  <td>CTimestamp</td>
</tr>
<tr id="get4DigitYear">
  <td><?php echo CHtml::link('get4DigitYear()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'get4DigitYear-detail')); ?></td>
  <td>Returns 4-digit representation of the year.</td>
  <td>CTimestamp</td>
</tr>
<tr id="getDate">
  <td><?php echo CHtml::link('getDate()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getDate-detail')); ?></td>
  <td>Returns the getdate() array.</td>
  <td>CTimestamp</td>
</tr>
<tr id="getDayofWeek">
  <td><?php echo CHtml::link('getDayofWeek()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getDayofWeek-detail')); ?></td>
  <td>Gets day of week, 0 = Sunday,... 6=Saturday.</td>
  <td>CTimestamp</td>
</tr>
<tr id="getGMTDiff">
  <td><?php echo CHtml::link('getGMTDiff()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getGMTDiff-detail')); ?></td>
  <td>Returns get local time zone offset from GMT</td>
  <td>CTimestamp</td>
</tr>
<tr id="getTimestamp">
  <td><?php echo CHtml::link('getTimestamp()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getTimestamp-detail')); ?></td>
  <td>Generates a timestamp.</td>
  <td>CTimestamp</td>
</tr>
<tr id="isLeapYear">
  <td><?php echo CHtml::link('isLeapYear()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'isLeapYear-detail')); ?></td>
  <td>Checks for leap year, returns true if it is. No 2-digit year check. Also</td>
  <td>CTimestamp</td>
</tr>
<tr id="isValidDate">
  <td><?php echo CHtml::link('isValidDate()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'isValidDate-detail')); ?></td>
  <td>Checks to see if the year, month, day are valid combination.</td>
  <td>CTimestamp</td>
</tr>
<tr id="isValidTime">
  <td><?php echo CHtml::link('isValidTime()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'isValidTime-detail')); ?></td>
  <td>Checks to see if the hour, minute and second are valid.</td>
  <td>CTimestamp</td>
</tr>
</table>
</div>
<div class="summary docMethod">
<h2>Protected Methods</h2>

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
<tr id="digitCheck">
  <td><?php echo CHtml::link('digitCheck()', array('/site/doc', 'view' => 'CTimestamp', '#' => 'digitCheck-detail')); ?></td>
  <td>Fix 2-digit years. Works for any century.</td>
  <td>CTimestamp</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="digitCheck-detail">
digitCheck()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static integer <b>digitCheck</b>(integer $y)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$y</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">year</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">change two digit year into multiple digits</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L112">yii\utils\CTimestamp.php#L112</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">digitCheck</span><span style="color: #007700">(</span><span style="color: #0000BB">$y</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$yr&nbsp;</span><span style="color: #007700">=&nbsp;(integer)&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$century&nbsp;</span><span style="color: #007700">=&nbsp;(integer)&nbsp;(</span><span style="color: #0000BB">$yr&nbsp;</span><span style="color: #007700">/</span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$yr</span><span style="color: #007700">%</span><span style="color: #0000BB">100&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">50</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$century&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c0&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$century</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$century</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c0&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$century&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">*=&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;2-digit&nbsp;year&nbsp;is&nbsp;less&nbsp;than&nbsp;30&nbsp;years&nbsp;in&nbsp;future,&nbsp;set&nbsp;it&nbsp;to&nbsp;this&nbsp;century<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;otherwise&nbsp;if&nbsp;more&nbsp;than&nbsp;30&nbsp;years&nbsp;in&nbsp;future,&nbsp;then&nbsp;we&nbsp;set&nbsp;2-digit&nbsp;year&nbsp;to&nbsp;the&nbsp;prev&nbsp;century.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$c1</span><span style="color: #007700">)&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">$yr</span><span style="color: #007700">+</span><span style="color: #0000BB">30</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$c1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$c0</span><span style="color: #007700">*</span><span style="color: #0000BB">100</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Fix 2-digit years. Works for any century.
Assumes that if 2-digit is more than 30 years in future, then previous century.</p>


<div class="detailHeader" id="formatDate-detail">
formatDate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>formatDate</b>(string $fmt, integer|boolean $d=false, boolean $is_gmt=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fmt</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">format pattern</td>
</tr>
<tr>
  <td class="paramNameCol">$d</td>
  <td class="paramTypeCol">integer|boolean</td>
  <td class="paramDescCol">timestamp</td>
</tr>
<tr>
  <td class="paramNameCol">$is_gmt</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is a GMT timestamp</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">formatted date based on timestamp $d</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L216">yii\utils\CTimestamp.php#L216</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDate</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">,</span><span style="color: #0000BB">$d</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$is_gmt</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$d&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$is_gmt</span><span style="color: #007700">)?&nbsp;@</span><span style="color: #0000BB">gmdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">):&nbsp;@</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;number&nbsp;in&nbsp;32-bit&nbsp;signed&nbsp;range<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">)&nbsp;&lt;=&nbsp;</span><span style="color: #0000BB">0x7FFFFFFF</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;windows,&nbsp;must&nbsp;be&nbsp;+ve&nbsp;integer<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$d&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$is_gmt</span><span style="color: #007700">)?&nbsp;@</span><span style="color: #0000BB">gmdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">,</span><span style="color: #0000BB">$d</span><span style="color: #007700">):&nbsp;@</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">,</span><span style="color: #0000BB">$d</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_day_power&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">86400</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$arr&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getDate</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$is_gmt</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'year'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$month&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'mon'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'mday'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hour&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$min&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'minutes'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$secs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'seconds'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$max&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at&nbsp;this&nbsp;point,&nbsp;we&nbsp;have&nbsp;the&nbsp;following&nbsp;integer&nbsp;vars&nbsp;to&nbsp;manipulate:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$year,&nbsp;$month,&nbsp;$day,&nbsp;$hour,&nbsp;$min,&nbsp;$secs<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">for&nbsp;(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$max</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'T'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'T'</span><span style="color: #007700">);break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;YEAR<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'L'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'leap'</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #DD0000">'1'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'r'</span><span style="color: #007700">:&nbsp;</span><span style="color: #FF8000">//&nbsp;Thu,&nbsp;21&nbsp;Dec&nbsp;2000&nbsp;16:01:07&nbsp;+0200<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;4.3.11&nbsp;uses&nbsp;'04&nbsp;Jun&nbsp;2004'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;4.3.8&nbsp;uses&nbsp;&nbsp;'&nbsp;4&nbsp;Jun&nbsp;2004'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">gmdate</span><span style="color: #007700">(</span><span style="color: #DD0000">'D'</span><span style="color: #007700">,</span><span style="color: #0000BB">$_day_power</span><span style="color: #007700">*(</span><span style="color: #0000BB">3</span><span style="color: #007700">+</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getDayOfWeek</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">,</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">$day</span><span style="color: #007700">))).</span><span style="color: #DD0000">',&nbsp;'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$day</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">10</span><span style="color: #007700">?</span><span style="color: #DD0000">'0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$day</span><span style="color: #007700">:</span><span style="color: #0000BB">$day</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'M'</span><span style="color: #007700">,</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">1971</span><span style="color: #007700">)).</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$year</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hour&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$min&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">':0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$min</span><span style="color: #007700">;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$min</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$secs&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">':0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$secs</span><span style="color: #007700">;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$secs</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getGMTDiff</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;%s%04d'</span><span style="color: #007700">,(</span><span style="color: #0000BB">$gmt</span><span style="color: #007700">&lt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">)?</span><span style="color: #DD0000">'+'</span><span style="color: #007700">:</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$gmt</span><span style="color: #007700">)/</span><span style="color: #0000BB">36</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$year</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'y'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">,</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">)-</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">);&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;MONTH<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'m'</span><span style="color: #007700">:&nbsp;if&nbsp;(</span><span style="color: #0000BB">$month</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$month</span><span style="color: #007700">;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$month</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'Q'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$month</span><span style="color: #007700">+</span><span style="color: #0000BB">3</span><span style="color: #007700">)&gt;&gt;</span><span style="color: #0000BB">2</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'n'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$month</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'M'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'M'</span><span style="color: #007700">,</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">1971</span><span style="color: #007700">));&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'F'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'F'</span><span style="color: #007700">,</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">1971</span><span style="color: #007700">));&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;DAY<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'t'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'ndays'</span><span style="color: #007700">];&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'z'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'yday'</span><span style="color: #007700">];&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'w'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getDayOfWeek</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">,</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">$day</span><span style="color: #007700">);&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'l'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">gmdate</span><span style="color: #007700">(</span><span style="color: #DD0000">'l'</span><span style="color: #007700">,</span><span style="color: #0000BB">$_day_power</span><span style="color: #007700">*(</span><span style="color: #0000BB">3</span><span style="color: #007700">+</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getDayOfWeek</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">,</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">$day</span><span style="color: #007700">)));&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'D'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">gmdate</span><span style="color: #007700">(</span><span style="color: #DD0000">'D'</span><span style="color: #007700">,</span><span style="color: #0000BB">$_day_power</span><span style="color: #007700">*(</span><span style="color: #0000BB">3</span><span style="color: #007700">+</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getDayOfWeek</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">,</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">$day</span><span style="color: #007700">)));&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'j'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$day</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'d'</span><span style="color: #007700">:&nbsp;if&nbsp;(</span><span style="color: #0000BB">$day</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$day</span><span style="color: #007700">;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$day</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'S'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$d10&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$d10&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'st'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$d10&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'nd'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$d10&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'rd'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;HOUR<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'Z'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$is_gmt</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">:&nbsp;-</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getGMTDiff</span><span style="color: #007700">();&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'O'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gmt&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$is_gmt</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getGMTDiff</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%s%04d'</span><span style="color: #007700">,(</span><span style="color: #0000BB">$gmt</span><span style="color: #007700">&lt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">)?</span><span style="color: #DD0000">'+'</span><span style="color: #007700">:</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$gmt</span><span style="color: #007700">)/</span><span style="color: #0000BB">36</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'H'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hour&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'h'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hour&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$hh&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$hour&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hour&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$hh&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">$hh&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hh&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$hh</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$hh</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'G'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'g'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hour&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$hh&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$hour&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hour&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$hh&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'12'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">$hh&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$hh</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;MINUTES<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'i'</span><span style="color: #007700">:&nbsp;if&nbsp;(</span><span style="color: #0000BB">$min&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$min</span><span style="color: #007700">;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$min</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;SECONDS<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'U'</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'s'</span><span style="color: #007700">:&nbsp;if&nbsp;(</span><span style="color: #0000BB">$secs&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">.</span><span style="color: #0000BB">$secs</span><span style="color: #007700">;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$secs</span><span style="color: #007700">;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;AM/PM<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Note&nbsp;00:00&nbsp;to&nbsp;11:59&nbsp;is&nbsp;AM,&nbsp;while&nbsp;12:00&nbsp;to&nbsp;23:59&nbsp;is&nbsp;PM<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'a'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hour</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">12</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'pm'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'am'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'A'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hour</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">12</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'PM'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'AM'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">];&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;ESCAPE<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">"\\"</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$max</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dates&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$fmt</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$dates</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Formats a timestamp to a date string.</p>


<div class="detailHeader" id="get4DigitYear-detail">
get4DigitYear()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static integer <b>get4DigitYear</b>(integer $y)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$y</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">year</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">4-digit representation of the year</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L139">yii\utils\CTimestamp.php#L139</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">get4DigitYear</span><span style="color: #007700">(</span><span style="color: #0000BB">$y</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">digitCheck</span><span style="color: #007700">(</span><span style="color: #0000BB">$y</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns 4-digit representation of the year.</p>


<div class="detailHeader" id="getDate-detail">
getDate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>getDate</b>(integer|boolean $d=false, boolean $fast=false, boolean $gmt=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$d</td>
  <td class="paramTypeCol">integer|boolean</td>
  <td class="paramDescCol">original date timestamp. False to use the current timestamp.</td>
</tr>
<tr>
  <td class="paramNameCol">$fast</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">false to compute the day of the week, default is true</td>
</tr>
<tr>
  <td class="paramNameCol">$gmt</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true to calculate the GMT dates</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">an array with date info.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L163">yii\utils\CTimestamp.php#L163</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getDate</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$fast</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$gmt</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$d</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">=</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$gmt</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tz&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date_default_timezone_get</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'GMT'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">getdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #0000BB">$tz</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">getdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the getdate() array.</p>


<div class="detailHeader" id="getDayofWeek-detail">
getDayofWeek()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static integer <b>getDayofWeek</b>(integer $year, integer $month, integer $day)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$year</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">year</td>
</tr>
<tr>
  <td class="paramNameCol">$month</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">month</td>
</tr>
<tr>
  <td class="paramNameCol">$day</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">day</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">day of week</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L43">yii\utils\CTimestamp.php#L43</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getDayofWeek</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$month</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$day</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*<br />&nbsp;&nbsp;&nbsp;&nbsp;Pope&nbsp;Gregory&nbsp;removed&nbsp;10&nbsp;days&nbsp;-&nbsp;October&nbsp;5&nbsp;to&nbsp;October&nbsp;14&nbsp;-&nbsp;from&nbsp;the&nbsp;year&nbsp;1582&nbsp;and<br />&nbsp;&nbsp;&nbsp;&nbsp;proclaimed&nbsp;that&nbsp;from&nbsp;that&nbsp;time&nbsp;onwards&nbsp;3&nbsp;days&nbsp;would&nbsp;be&nbsp;dropped&nbsp;from&nbsp;the&nbsp;calendar<br />&nbsp;&nbsp;&nbsp;&nbsp;every&nbsp;400&nbsp;years.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;Thursday,&nbsp;October&nbsp;4,&nbsp;1582&nbsp;(Julian)&nbsp;was&nbsp;followed&nbsp;immediately&nbsp;by&nbsp;Friday,&nbsp;October&nbsp;15,&nbsp;1582&nbsp;(Gregorian).<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">1582</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1582&nbsp;</span><span style="color: #007700">||<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1582&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$month&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">10&nbsp;</span><span style="color: #007700">||&nbsp;(</span><span style="color: #0000BB">$month&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">10&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">15</span><span style="color: #007700">))))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$greg_correction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$greg_correction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$greg_correction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$month&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$month&nbsp;</span><span style="color: #007700">-=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$month&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$year</span><span style="color: #007700">--;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">=&nbsp;&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">((</span><span style="color: #0000BB">13&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">$month&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">)&nbsp;+<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">+&nbsp;(</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">)&nbsp;+<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">((</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">)&nbsp;+<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">((</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">77&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$greg_correction</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">7&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Gets day of week, 0 = Sunday,... 6=Saturday.
Algorithm from PEAR::Date_Calc</p>


<div class="detailHeader" id="getGMTDiff-detail">
getGMTDiff()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static integer <b>getGMTDiff</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">get local time zone offset from GMT</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L147">yii\utils\CTimestamp.php#L147</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getGMTDiff</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$TZ</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$TZ</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">$TZ</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$TZ&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">1970</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">gmmktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">1970</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$TZ</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getTimestamp-detail">
getTimestamp()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static integer|float <b>getTimestamp</b>(integer $hr, integer $min, integer $sec, integer|boolean $mon=false, integer|boolean $day=false, integer|boolean $year=false, boolean $is_gmt=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$hr</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">hour</td>
</tr>
<tr>
  <td class="paramNameCol">$min</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">minute</td>
</tr>
<tr>
  <td class="paramNameCol">$sec</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">second</td>
</tr>
<tr>
  <td class="paramNameCol">$mon</td>
  <td class="paramTypeCol">integer|boolean</td>
  <td class="paramDescCol">month</td>
</tr>
<tr>
  <td class="paramNameCol">$day</td>
  <td class="paramTypeCol">integer|boolean</td>
  <td class="paramDescCol">day</td>
</tr>
<tr>
  <td class="paramNameCol">$year</td>
  <td class="paramTypeCol">integer|boolean</td>
  <td class="paramDescCol">year</td>
</tr>
<tr>
  <td class="paramNameCol">$is_gmt</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is GMT time. If true, gmmktime() will be used.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer|float</td>
  <td class="paramDescCol">a timestamp given a local time.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L370">yii\utils\CTimestamp.php#L370</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getTimestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$hr</span><span style="color: #007700">,</span><span style="color: #0000BB">$min</span><span style="color: #007700">,</span><span style="color: #0000BB">$sec</span><span style="color: #007700">,</span><span style="color: #0000BB">$mon</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$day</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$year</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$is_gmt</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$mon&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$is_gmt</span><span style="color: #007700">?&nbsp;@</span><span style="color: #0000BB">gmmktime</span><span style="color: #007700">(</span><span style="color: #0000BB">$hr</span><span style="color: #007700">,</span><span style="color: #0000BB">$min</span><span style="color: #007700">,</span><span style="color: #0000BB">$sec</span><span style="color: #007700">):&nbsp;@</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">$hr</span><span style="color: #007700">,</span><span style="color: #0000BB">$min</span><span style="color: #007700">,</span><span style="color: #0000BB">$sec</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$is_gmt&nbsp;</span><span style="color: #007700">?&nbsp;@</span><span style="color: #0000BB">gmmktime</span><span style="color: #007700">(</span><span style="color: #0000BB">$hr</span><span style="color: #007700">,</span><span style="color: #0000BB">$min</span><span style="color: #007700">,</span><span style="color: #0000BB">$sec</span><span style="color: #007700">,</span><span style="color: #0000BB">$mon</span><span style="color: #007700">,</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #0000BB">$year</span><span style="color: #007700">)&nbsp;:&nbsp;@</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">$hr</span><span style="color: #007700">,</span><span style="color: #0000BB">$min</span><span style="color: #007700">,</span><span style="color: #0000BB">$sec</span><span style="color: #007700">,</span><span style="color: #0000BB">$mon</span><span style="color: #007700">,</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #0000BB">$year</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a timestamp.
This is the same as the PHP function http://php.net/manual/en/function.mktime.php.</p>


<div class="detailHeader" id="isLeapYear-detail">
isLeapYear()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static boolean <b>isLeapYear</b>(integer $year)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$year</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">year to check</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if is leap year</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L92">yii\utils\CTimestamp.php#L92</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">isLeapYear</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">digitCheck</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">4&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">400&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;gregorian&nbsp;calendar&nbsp;(&gt;1582),&nbsp;century&nbsp;not-divisible&nbsp;by&nbsp;400&nbsp;is&nbsp;not&nbsp;leap<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">elseif&nbsp;(</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">1582&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$year&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">100&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks for leap year, returns true if it is. No 2-digit year check. Also
handles julian calendar correctly.</p>


<div class="detailHeader" id="isValidDate-detail">
isValidDate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static boolean <b>isValidDate</b>(integer $y, integer $m, integer $d)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$y</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">year</td>
</tr>
<tr>
  <td class="paramNameCol">$m</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">month</td>
</tr>
<tr>
  <td class="paramNameCol">$d</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">day</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if valid date, semantic check only.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L188">yii\utils\CTimestamp.php#L188</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">isValidDate</span><span style="color: #007700">(</span><span style="color: #0000BB">$y</span><span style="color: #007700">,</span><span style="color: #0000BB">$m</span><span style="color: #007700">,</span><span style="color: #0000BB">$d</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">checkdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$m</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Checks to see if the year, month, day are valid combination.</p>


<div class="detailHeader" id="isValidTime-detail">
isValidTime()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static boolean <b>isValidTime</b>(integer $h, integer $m, integer $s, boolean $hs24=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$h</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">hour</td>
</tr>
<tr>
  <td class="paramNameCol">$m</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">minute</td>
</tr>
<tr>
  <td class="paramNameCol">$s</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">second</td>
</tr>
<tr>
  <td class="paramNameCol">$hs24</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the hours should be 0 through 23 (default) or 1 through 12.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if valid date, semantic check only.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CTimestamp.php#L201">yii\utils\CTimestamp.php#L201</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">isValidTime</span><span style="color: #007700">(</span><span style="color: #0000BB">$h</span><span style="color: #007700">,</span><span style="color: #0000BB">$m</span><span style="color: #007700">,</span><span style="color: #0000BB">$s</span><span style="color: #007700">,</span><span style="color: #0000BB">$hs24</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$hs24&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$h&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$h&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">23</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">$hs24&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$h&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$h&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$m&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">59&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$m&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$s&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">59&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$s&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks to see if the hour, minute and second are valid.</p>


