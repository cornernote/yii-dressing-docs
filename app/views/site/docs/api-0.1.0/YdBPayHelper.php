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
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdBPayHelper.php">dressing/components/YdBPayHelper.php</a></td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdBPayHelper.php#L33">dressing/components/YdBPayHelper.php#L33</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">crn</span><span style="color: #007700">(</span><span style="color: #0000BB">$ref</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$seperator&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$crn_length&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdBPayHelper.php#L60">dressing/components/YdBPayHelper.php#L60</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">crnLogo</span><span style="color: #007700">(</span><span style="color: #0000BB">$crn</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>

