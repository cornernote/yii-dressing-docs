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
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdAuditTracker.php">dressing/components/YdAuditTracker.php</a></td>
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
<tr id="audit">
  <td><?php echo CHtml::link('audit', array('/site/doc', 'view' => 'YdAuditTracker', '#' => 'audit-detail')); ?></td>
  <td><?php echo CHtml::link('YdAudit', array('/site/doc', 'view' => 'YdAudit')); ?></td>
  <td></td>
  <td>YdAuditTracker</td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'YdAuditTracker', '#' => 'id-detail')); ?></td>
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
<div class="detailHeader" id="audit-detail">
audit<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('YdAudit', array('/site/doc', 'view' => 'YdAudit')); ?> <b>audit</b>;</div>

<p></p>


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
int <b>id</b>;</div>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdAuditTracker.php#L109">dressing/components/YdAuditTracker.php#L109</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">endAudit</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$audit&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAudit</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$headers&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">headers_list</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$headers&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$header</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$header</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'location:'</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">redirect&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$header</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">9</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">memory_usage&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">memory_get_usage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">memory_peak&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">memory_get_peak_usage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">end_time&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">audit_trail_count&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">auditTrailCount</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">total_time&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">end_time&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">start_time</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdAuditTracker.php#L36">dressing/components/YdAuditTracker.php#L36</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAudit</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;existing&nbsp;Audit<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_audit</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_audit</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;create&nbsp;new&nbsp;Audit<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_audit&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">YdAudit</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;cache&nbsp;not&nbsp;working&nbsp;so&nbsp;it&nbsp;could&nbsp;not&nbsp;get&nbsp;schema&nbsp;for&nbsp;audits<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;an&nbsp;event&nbsp;callback&nbsp;to&nbsp;update&nbsp;the&nbsp;audit&nbsp;at&nbsp;the&nbsp;end<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordAudit</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">onEndRequest&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'endAudit'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_audit</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdAuditTracker.php#L59">dressing/components/YdAuditTracker.php#L59</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_audit&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_audit</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdAuditTracker.php#L181">dressing/components/YdAuditTracker.php#L181</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getShrinkedSession</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$serialized&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$serialized&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$serialized</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">64000</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sessionCopy&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ignoredKeys&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$_SESSION&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$size&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">1000</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$sessionCopy</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ignoredKeys</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sessionCopy</span><span style="color: #007700">[</span><span style="color: #DD0000">'__ignored_keys_in_audit'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$ignoredKeys</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$serialized&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$sessionCopy</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$serialized</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdAuditTracker.php#L27">dressing/components/YdAuditTracker.php#L27</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAudit</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


