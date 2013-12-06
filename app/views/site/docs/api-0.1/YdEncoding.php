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
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php">dressing/components/YdEncoding.php</a></td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php#L281">dressing/components/YdEncoding.php#L281</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">UTF8FixWin1252Chars</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">){
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php#L319">dressing/components/YdEncoding.php#L319</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$encodingLabel</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php#L264">dressing/components/YdEncoding.php#L264</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">fixUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">){
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php#L296">dressing/components/YdEncoding.php#L296</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">normalizeEncoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$encodingLabel</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php#L289">dressing/components/YdEncoding.php#L289</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">removeBOM</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">=</span><span style="color: #DD0000">""</span><span style="color: #007700">){
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php#L256">dressing/components/YdEncoding.php#L256</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">toISO8859</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)&nbsp;{
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php#L260">dressing/components/YdEncoding.php#L260</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">toLatin1</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)&nbsp;{
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php#L150">dressing/components/YdEncoding.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">toUTF8</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">){
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdEncoding.php#L243">dressing/components/YdEncoding.php#L243</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">toWin1252</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)&nbsp;{
</span>
</code></div>
</div>
<p></p>

