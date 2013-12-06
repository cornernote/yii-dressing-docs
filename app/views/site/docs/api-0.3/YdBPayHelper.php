<?php
$this->pageTitle = $this->pageHeading = 'YdBPayHelper';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdBPayHelper';
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
  <td>class YdBPayHelper</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdBPayHelper.php">dressing/components/YdBPayHelper.php</a></td>
</tr>
</table>

<div id="classDescription">
Class YdBPayHelper</div>
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
<tr id="billerCode">
  <td><?php echo CHtml::link('billerCode', array('/site/doc', 'view' => 'YdBPayHelper', '#' => 'billerCode-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdBPayHelper</td>
</tr>
<tr id="heading">
  <td><?php echo CHtml::link('heading', array('/site/doc', 'view' => 'YdBPayHelper', '#' => 'heading-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdBPayHelper</td>
</tr>
<tr id="logo">
  <td><?php echo CHtml::link('logo', array('/site/doc', 'view' => 'YdBPayHelper', '#' => 'logo-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdBPayHelper</td>
</tr>
<tr id="text">
  <td><?php echo CHtml::link('text', array('/site/doc', 'view' => 'YdBPayHelper', '#' => 'text-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdBPayHelper</td>
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
<tr id="crn">
  <td><?php echo CHtml::link('crn()', array('/site/doc', 'view' => 'YdBPayHelper', '#' => 'crn-detail')); ?></td>
  <td></td>
  <td>YdBPayHelper</td>
</tr>
<tr id="crnLogo">
  <td><?php echo CHtml::link('crnLogo()', array('/site/doc', 'view' => 'YdBPayHelper', '#' => 'crnLogo-detail')); ?></td>
  <td></td>
  <td>YdBPayHelper</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdBPayHelper', '#' => 'init-detail')); ?></td>
  <td></td>
  <td>YdBPayHelper</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="billerCode-detail">
billerCode<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$billerCode</b>;</div>

<p></p>


<div class="detailHeader" id="heading-detail">
heading<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$heading</b>;</div>

<p></p>


<div class="detailHeader" id="logo-detail">
logo<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$logo</b>;</div>

<p></p>


<div class="detailHeader" id="text-detail">
text<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$text</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="crn-detail">
crn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>crn</b>($ref $ref, string $seperator='', int $crn_length=10)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$ref</td>
  <td class="paramTypeCol">$ref</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$seperator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$crn_length</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdBPayHelper.php#L41">dressing/components/YdBPayHelper.php#L41</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">crn</span><span style="color: #007700">(</span><span style="color: #0000BB">$ref</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$seperator&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$crn_length&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ref&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$ref&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">100000000</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$revstr&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strrev</span><span style="color: #007700">(</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$ref</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$total&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$revstr</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$multiplier&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">$multiplier&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sub_total&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$revstr</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">])&nbsp;*&nbsp;</span><span style="color: #0000BB">$multiplier</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$sub_total&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$temp&nbsp;</span><span style="color: #007700">=&nbsp;(string)</span><span style="color: #0000BB">$sub_total</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sub_total&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$temp</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])&nbsp;+&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$temp</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$total&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$sub_total</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$check_digit&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">10&nbsp;</span><span style="color: #007700">-&nbsp;(</span><span style="color: #0000BB">$total&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">))&nbsp;%&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$crn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$ref</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$crn_length&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$seperator&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$check_digit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$crn</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="crnLogo-detail">
crnLogo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>crnLogo</b>($crn $crn)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$crn</td>
  <td class="paramTypeCol">$crn</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdBPayHelper.php#L68">dressing/components/YdBPayHelper.php#L68</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">crnLogo</span><span style="color: #007700">(</span><span style="color: #0000BB">$crn</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderPartial</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing.views.misc.bpay'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bPay'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'crn'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$crn</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdBPayHelper.php#L30">dressing/components/YdBPayHelper.php#L30</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br /><br />}</span>
</span>
</code></div>
</div>
<p></p>


