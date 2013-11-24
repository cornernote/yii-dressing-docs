<?php
$this->pageTitle = $this->pageHeading = 'YdAuditTracker';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdAuditTracker';
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
  <td>class YdAuditTracker</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdAuditTracker.php">dressing/components/YdAuditTracker.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdAuditTracker</div>
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
<tr id="audit
  <td><?php echo CHtml::link('audit
  <td><?php echo CHtml::link('YdAudit', array('/site/doc', 'view' => 'YdAudit')); ?></td>
  <td></td>
  <td>YdAuditTracker</td>
</tr>
<tr id="id
  <td><?php echo CHtml::link('id
  <td>int</td>
  <td></td>
  <td>YdAuditTracker</td>
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
<tr id="endAudit">
  <td><?php echo CHtml::link('endAudit()', array('/site/doc', 'view' => 'YdAuditTracker', '#' => 'endAudit-detail')); ?></td>
  <td></td>
  <td>YdAuditTracker</td>
</tr>
<tr id="getAudit">
  <td><?php echo CHtml::link('getAudit()', array('/site/doc', 'view' => 'YdAuditTracker', '#' => 'getAudit-detail')); ?></td>
  <td></td>
  <td>YdAuditTracker</td>
</tr>
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'YdAuditTracker', '#' => 'getId-detail')); ?></td>
  <td></td>
  <td>YdAuditTracker</td>
</tr>
<tr id="getShrinkedSession">
  <td><?php echo CHtml::link('getShrinkedSession()', array('/site/doc', 'view' => 'YdAuditTracker', '#' => 'getShrinkedSession-detail')); ?></td>
  <td></td>
  <td>YdAuditTracker</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdAuditTracker', '#' => 'init-detail')); ?></td>
  <td></td>
  <td>YdAuditTracker</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="audit
audit
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('YdAudit', array('/site/doc', 'view' => 'YdAudit')); ?> <b>audit

<p></p>


<div class="detailHeader" id="id
id
property
</span>
</div>

<div class="signature">
int <b>id

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="endAudit-detail">
endAudit()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>endAudit</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdAuditTracker.php#L109">dressing/components/YdAuditTracker.php#L109</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">endAudit</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getAudit-detail">
getAudit()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('YdAudit', array('/site/doc', 'view' => 'YdAudit')); ?> <b>getAudit</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('YdAudit', array('/site/doc', 'view' => 'YdAudit')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdAuditTracker.php#L36">dressing/components/YdAuditTracker.php#L36</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAudit</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getId-detail">
getId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdAuditTracker.php#L59">dressing/components/YdAuditTracker.php#L59</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getShrinkedSession-detail">
getShrinkedSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getShrinkedSession</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdAuditTracker.php#L181">dressing/components/YdAuditTracker.php#L181</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getShrinkedSession</span><span style="color: #007700">()
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdAuditTracker.php#L27">dressing/components/YdAuditTracker.php#L27</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>

