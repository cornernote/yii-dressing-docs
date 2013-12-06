<?php
$this->pageTitle = $this->pageHeading = 'YdEncoding';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdEncoding';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdEncoding</td>
</tr>
<tr>
  <th>Version</th>
  <td>1.2</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php">dressing/components/YdEncoding.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>&quot;Sebastián Grignoli&quot; &lt;grignoli@framework2.com.ar&gt;</td>
</tr>
</table>

<div id="classDescription">
</div>
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
<tr id="brokenUtf8ToUtf8">
  <td><?php echo CHtml::link('brokenUtf8ToUtf8', array('/site/doc', 'view' => 'YdEncoding', '#' => 'brokenUtf8ToUtf8-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="utf8ToWin1252">
  <td><?php echo CHtml::link('utf8ToWin1252', array('/site/doc', 'view' => 'YdEncoding', '#' => 'utf8ToWin1252-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="win1252ToUtf8">
  <td><?php echo CHtml::link('win1252ToUtf8', array('/site/doc', 'view' => 'YdEncoding', '#' => 'win1252ToUtf8-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdEncoding</td>
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
<tr id="UTF8FixWin1252Chars">
  <td><?php echo CHtml::link('UTF8FixWin1252Chars()', array('/site/doc', 'view' => 'YdEncoding', '#' => 'UTF8FixWin1252Chars-detail')); ?></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="encode">
  <td><?php echo CHtml::link('encode()', array('/site/doc', 'view' => 'YdEncoding', '#' => 'encode-detail')); ?></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="fixUTF8">
  <td><?php echo CHtml::link('fixUTF8()', array('/site/doc', 'view' => 'YdEncoding', '#' => 'fixUTF8-detail')); ?></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="normalizeEncoding">
  <td><?php echo CHtml::link('normalizeEncoding()', array('/site/doc', 'view' => 'YdEncoding', '#' => 'normalizeEncoding-detail')); ?></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="removeBOM">
  <td><?php echo CHtml::link('removeBOM()', array('/site/doc', 'view' => 'YdEncoding', '#' => 'removeBOM-detail')); ?></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="toISO8859">
  <td><?php echo CHtml::link('toISO8859()', array('/site/doc', 'view' => 'YdEncoding', '#' => 'toISO8859-detail')); ?></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="toLatin1">
  <td><?php echo CHtml::link('toLatin1()', array('/site/doc', 'view' => 'YdEncoding', '#' => 'toLatin1-detail')); ?></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="toUTF8">
  <td><?php echo CHtml::link('toUTF8()', array('/site/doc', 'view' => 'YdEncoding', '#' => 'toUTF8-detail')); ?></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
<tr id="toWin1252">
  <td><?php echo CHtml::link('toWin1252()', array('/site/doc', 'view' => 'YdEncoding', '#' => 'toWin1252-detail')); ?></td>
  <td></td>
  <td>YdEncoding</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="brokenUtf8ToUtf8-detail">
brokenUtf8ToUtf8<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected static <b>$brokenUtf8ToUtf8</b>;</div>

<p></p>


<div class="detailHeader" id="utf8ToWin1252-detail">
utf8ToWin1252<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected static <b>$utf8ToWin1252</b>;</div>

<p></p>


<div class="detailHeader" id="win1252ToUtf8-detail">
win1252ToUtf8<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected static <b>$win1252ToUtf8</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="UTF8FixWin1252Chars-detail">
UTF8FixWin1252Chars()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>UTF8FixWin1252Chars</b>($text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php#L281">dressing/components/YdEncoding.php#L281</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">UTF8FixWin1252Chars</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">){<br /></span><span style="color: #FF8000">//&nbsp;If&nbsp;you&nbsp;received&nbsp;an&nbsp;UTF-8&nbsp;string&nbsp;that&nbsp;was&nbsp;converted&nbsp;from&nbsp;Windows-1252&nbsp;as&nbsp;it&nbsp;was&nbsp;ISO8859-1&nbsp;<br />//&nbsp;(ignoring&nbsp;Windows-1252&nbsp;chars&nbsp;from&nbsp;80&nbsp;to&nbsp;9F)&nbsp;use&nbsp;this&nbsp;function&nbsp;to&nbsp;fix&nbsp;it.<br />//&nbsp;See:&nbsp;http://en.wikipedia.org/wiki/Windows-1252<br /><br /></span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$brokenUtf8ToUtf8</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$brokenUtf8ToUtf8</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />&nbsp;&nbsp;}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="encode-detail">
encode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>encode</b>($encodingLabel, $text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$encodingLabel</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php#L319">dressing/components/YdEncoding.php#L319</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$encodingLabel</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">)<br />&nbsp;&nbsp;{<br /></span><span style="color: #0000BB">$encodingLabel&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeEncoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$encodingLabel</span><span style="color: #007700">);<br />if(</span><span style="color: #0000BB">$encodingLabel&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">)&nbsp;return&nbsp;</span><span style="color: #0000BB">Encoding</span><span style="color: #007700">::</span><span style="color: #0000BB">toUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />if(</span><span style="color: #0000BB">$encodingLabel&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">)&nbsp;return&nbsp;</span><span style="color: #0000BB">Encoding</span><span style="color: #007700">::</span><span style="color: #0000BB">toLatin1</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />&nbsp;&nbsp;}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="fixUTF8-detail">
fixUTF8()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>fixUTF8</b>($text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php#L264">dressing/components/YdEncoding.php#L264</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">fixUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">){<br />if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$text&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">fixUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;}<br />&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$last&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">;<br />while(</span><span style="color: #0000BB">$last&nbsp;</span><span style="color: #007700">&lt;&gt;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">){<br />&nbsp;&nbsp;</span><span style="color: #0000BB">$last&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />&nbsp;&nbsp;</span><span style="color: #0000BB">$text&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">toUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">utf8_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$utf8ToWin1252</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$utf8ToWin1252</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">)));<br />}<br /></span><span style="color: #0000BB">$text&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">toUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">utf8_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$utf8ToWin1252</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$utf8ToWin1252</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">)));<br />return&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />&nbsp;&nbsp;}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="normalizeEncoding-detail">
normalizeEncoding()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>normalizeEncoding</b>($encodingLabel)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$encodingLabel</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php#L296">dressing/components/YdEncoding.php#L296</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">normalizeEncoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$encodingLabel</span><span style="color: #007700">)<br />&nbsp;&nbsp;{<br /></span><span style="color: #0000BB">$encoding&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$encodingLabel</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$enc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[^a-zA-Z0-9\s]/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$equivalences&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'ISO88591'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'ISO8859'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'ISO'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'LATIN1'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'LATIN'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'UTF8'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'UTF'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'WIN1252'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'WINDOWS1252'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'ISO-8859-1'<br /></span><span style="color: #007700">);<br /><br />if(empty(</span><span style="color: #0000BB">$equivalences</span><span style="color: #007700">[</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">])){<br />&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">;<br />}<br />&nbsp;&nbsp;&nbsp;<br />return&nbsp;</span><span style="color: #0000BB">$equivalences</span><span style="color: #007700">[</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">];<br />&nbsp;&nbsp;}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="removeBOM-detail">
removeBOM()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>removeBOM</b>($str='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$str</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php#L289">dressing/components/YdEncoding.php#L289</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">removeBOM</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">=</span><span style="color: #DD0000">""</span><span style="color: #007700">){<br />if(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">"CCC"</span><span style="color: #007700">,</span><span style="color: #0000BB">0xef</span><span style="color: #007700">,</span><span style="color: #0000BB">0xbb</span><span style="color: #007700">,</span><span style="color: #0000BB">0xbf</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />}<br />return&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">;<br />&nbsp;&nbsp;}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="toISO8859-detail">
toISO8859()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>toISO8859</b>($text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php#L256">dressing/components/YdEncoding.php#L256</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">toISO8859</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)&nbsp;{<br />return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">toWin1252</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />&nbsp;&nbsp;}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="toLatin1-detail">
toLatin1()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>toLatin1</b>($text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php#L260">dressing/components/YdEncoding.php#L260</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">toLatin1</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)&nbsp;{<br />return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">toWin1252</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />&nbsp;&nbsp;}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="toUTF8-detail">
toUTF8()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>toUTF8</b>($text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php#L150">dressing/components/YdEncoding.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">toUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">){<br />&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;*&nbsp;Function&nbsp;Encoding::toUTF8<br />&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;*&nbsp;This&nbsp;function&nbsp;leaves&nbsp;UTF8&nbsp;characters&nbsp;alone,&nbsp;while&nbsp;converting&nbsp;almost&nbsp;all&nbsp;non-UTF8&nbsp;to&nbsp;UTF8.<br />&nbsp;&nbsp;&nbsp;*&nbsp;<br />&nbsp;&nbsp;&nbsp;*&nbsp;It&nbsp;assumes&nbsp;that&nbsp;the&nbsp;encoding&nbsp;of&nbsp;the&nbsp;original&nbsp;string&nbsp;is&nbsp;either&nbsp;Windows-1252&nbsp;or&nbsp;ISO&nbsp;8859-1.<br />&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;*&nbsp;It&nbsp;may&nbsp;fail&nbsp;to&nbsp;convert&nbsp;characters&nbsp;to&nbsp;UTF-8&nbsp;if&nbsp;they&nbsp;fall&nbsp;into&nbsp;one&nbsp;of&nbsp;these&nbsp;scenarios:<br />&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;*&nbsp;1)&nbsp;when&nbsp;any&nbsp;of&nbsp;these&nbsp;characters:&nbsp;&nbsp;&nbsp;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞß<br />&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;are&nbsp;followed&nbsp;by&nbsp;any&nbsp;of&nbsp;these:&nbsp;&nbsp;("group&nbsp;B")<br />&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¡¢£¤¥¦§¨©ª«¬­®¯°±²³´µ¶•¸¹º»¼½¾¿<br />&nbsp;&nbsp;&nbsp;*&nbsp;For&nbsp;example:&nbsp;&nbsp;&nbsp;%ABREPRESENT%C9%BB.&nbsp;«REPRESENTÉ»<br />&nbsp;&nbsp;&nbsp;*&nbsp;The&nbsp;"«"&nbsp;(%AB)&nbsp;character&nbsp;will&nbsp;be&nbsp;converted,&nbsp;but&nbsp;the&nbsp;"É"&nbsp;followed&nbsp;by&nbsp;"»"&nbsp;(%C9%BB)&nbsp;<br />&nbsp;&nbsp;&nbsp;*&nbsp;is&nbsp;also&nbsp;a&nbsp;valid&nbsp;unicode&nbsp;character,&nbsp;and&nbsp;will&nbsp;be&nbsp;left&nbsp;unchanged.<br />&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;*&nbsp;2)&nbsp;when&nbsp;any&nbsp;of&nbsp;these:&nbsp;àáâãäåæçèéêëìíîï&nbsp;&nbsp;are&nbsp;followed&nbsp;by&nbsp;TWO&nbsp;chars&nbsp;from&nbsp;group&nbsp;B,<br />&nbsp;&nbsp;&nbsp;*&nbsp;3)&nbsp;when&nbsp;any&nbsp;of&nbsp;these:&nbsp;ðñòó&nbsp;&nbsp;are&nbsp;followed&nbsp;by&nbsp;THREE&nbsp;chars&nbsp;from&nbsp;group&nbsp;B.<br />&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;*&nbsp;@name&nbsp;toUTF8<br />&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$text&nbsp;&nbsp;Any&nbsp;string.<br />&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;string&nbsp;&nbsp;The&nbsp;same&nbsp;string,&nbsp;UTF8&nbsp;encoded<br />&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;*/<br /><br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">))<br />{<br />&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$text&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">toUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;}<br />&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />}&nbsp;elseif(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">))&nbsp;{<br /><br />&nbsp;&nbsp;</span><span style="color: #0000BB">$max&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">;<br />&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$max</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">{</span><span style="color: #0000BB">$i</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">&gt;=</span><span style="color: #DD0000">"\xc0"</span><span style="color: #007700">){&nbsp;</span><span style="color: #FF8000">//Should&nbsp;be&nbsp;converted&nbsp;to&nbsp;UTF8,&nbsp;if&nbsp;it's&nbsp;not&nbsp;UTF8&nbsp;already<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$max</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">"\x00"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">{</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c3&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$max</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">"\x00"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">{</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">2</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c4&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$max</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">"\x00"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">{</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">3</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">"\xc0"&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #DD0000">"\xdf"</span><span style="color: #007700">){&nbsp;</span><span style="color: #FF8000">//looks&nbsp;like&nbsp;2&nbsp;bytes&nbsp;UTF8<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">"\x80"&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #DD0000">"\xbf"</span><span style="color: #007700">){&nbsp;</span><span style="color: #FF8000">//yeah,&nbsp;almost&nbsp;sure&nbsp;it's&nbsp;UTF8&nbsp;already<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$c2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{&nbsp;</span><span style="color: #FF8000">//not&nbsp;valid&nbsp;UTF8.&nbsp;&nbsp;Convert&nbsp;it.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">64</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\xc0"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc2&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #DD0000">"\x3f"</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\x80"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$cc2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif(</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">"\xe0"&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #DD0000">"\xef"</span><span style="color: #007700">){&nbsp;</span><span style="color: #FF8000">//looks&nbsp;like&nbsp;3&nbsp;bytes&nbsp;UTF8<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">"\x80"&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #DD0000">"\xbf"&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$c3&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">"\x80"&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$c3&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #DD0000">"\xbf"</span><span style="color: #007700">){&nbsp;</span><span style="color: #FF8000">//yeah,&nbsp;almost&nbsp;sure&nbsp;it's&nbsp;UTF8&nbsp;already<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$c3</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{&nbsp;</span><span style="color: #FF8000">//not&nbsp;valid&nbsp;UTF8.&nbsp;&nbsp;Convert&nbsp;it.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">64</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\xc0"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc2&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #DD0000">"\x3f"</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\x80"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$cc2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif(</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">"\xf0"&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #DD0000">"\xf7"</span><span style="color: #007700">){&nbsp;</span><span style="color: #FF8000">//looks&nbsp;like&nbsp;4&nbsp;bytes&nbsp;UTF8<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">"\x80"&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #DD0000">"\xbf"&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$c3&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">"\x80"&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$c3&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #DD0000">"\xbf"&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$c4&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">"\x80"&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$c4&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #DD0000">"\xbf"</span><span style="color: #007700">){&nbsp;</span><span style="color: #FF8000">//yeah,&nbsp;almost&nbsp;sure&nbsp;it's&nbsp;UTF8&nbsp;already<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$c3</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{&nbsp;</span><span style="color: #FF8000">//not&nbsp;valid&nbsp;UTF8.&nbsp;&nbsp;Convert&nbsp;it.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">64</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\xc0"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc2&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #DD0000">"\x3f"</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\x80"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$cc2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{&nbsp;</span><span style="color: #FF8000">//doesn't&nbsp;look&nbsp;like&nbsp;UTF8,&nbsp;but&nbsp;should&nbsp;be&nbsp;converted<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">64</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\xc0"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc2&nbsp;</span><span style="color: #007700">=&nbsp;((</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #DD0000">"\x3f"</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\x80"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$cc2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif((</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #DD0000">"\xc0"</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #DD0000">"\x80"</span><span style="color: #007700">){&nbsp;</span><span style="color: #FF8000">//&nbsp;needs&nbsp;conversion<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$win1252ToUtf8</span><span style="color: #007700">[</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">)]))&nbsp;{&nbsp;</span><span style="color: #FF8000">//found&nbsp;in&nbsp;Windows-1252&nbsp;special&nbsp;cases<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$win1252ToUtf8</span><span style="color: #007700">[</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">)];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">64</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\xc0"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cc2&nbsp;</span><span style="color: #007700">=&nbsp;((</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #DD0000">"\x3f"</span><span style="color: #007700">)&nbsp;|&nbsp;</span><span style="color: #DD0000">"\x80"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$cc1&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$cc2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{&nbsp;</span><span style="color: #FF8000">//&nbsp;it&nbsp;doesn't&nbsp;need&nbsp;convesion<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buf&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$c1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;}<br />&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$buf</span><span style="color: #007700">;<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />}<br />&nbsp;&nbsp;}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="toWin1252-detail">
toWin1252()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>toWin1252</b>($text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdEncoding.php#L243">dressing/components/YdEncoding.php#L243</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">toWin1252</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)&nbsp;{<br />if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$text&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">toWin1252</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;}<br />&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />}&nbsp;elseif(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">utf8_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$utf8ToWin1252</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$utf8ToWin1252</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">toUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)));<br />}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />}<br />&nbsp;&nbsp;}</span>
</span>
</code></div>
</div>
<p></p>


