<?php
$this->pageTitle = $this->pageHeading = 'YdSuid';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdSuid';
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
  <td>class YdSuid</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdSuid.php">dressing/components/YdSuid.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdSuid
<br/><br/>
Encodes and Decodes a Short Unique Identifier based on an Integer
<br/><br/>
IDEAS TAKEN FROM
http://www.pgregg.com/projects/php/base_conversion/base_conversion.inc.phps
<br/><br/>
KNOWN LIMITS
encode cannot be larger than 99999999999999</div>
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
<tr id="chars">
  <td><?php echo CHtml::link('chars', array('/site/doc', 'view' => 'YdSuid', '#' => 'chars-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdSuid</td>
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
<tr id="decode">
  <td><?php echo CHtml::link('decode()', array('/site/doc', 'view' => 'YdSuid', '#' => 'decode-detail')); ?></td>
  <td>Suid::decode()</td>
  <td>YdSuid</td>
</tr>
<tr id="decode2">
  <td><?php echo CHtml::link('decode2()', array('/site/doc', 'view' => 'YdSuid', '#' => 'decode2-detail')); ?></td>
  <td></td>
  <td>YdSuid</td>
</tr>
<tr id="encode">
  <td><?php echo CHtml::link('encode()', array('/site/doc', 'view' => 'YdSuid', '#' => 'encode-detail')); ?></td>
  <td>Suid::encode()</td>
  <td>YdSuid</td>
</tr>
<tr id="encode2">
  <td><?php echo CHtml::link('encode2()', array('/site/doc', 'view' => 'YdSuid', '#' => 'encode2-detail')); ?></td>
  <td></td>
  <td>YdSuid</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="chars-detail">
chars<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static <b>$chars</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="decode-detail">
decode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static int <b>decode</b>(string $suid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$suid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">$id</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdSuid.php#L52">dressing/components/YdSuid.php#L52</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$suid</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$suid</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">--)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$chars</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$suid</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">bcadd</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">bcmul</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">bcpow</span><span style="color: #007700">(</span><span style="color: #0000BB">34</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Suid::decode()
<br/><br/>
Decodes a Short Universally Unique Identifier into an Integer</p>


<div class="detailHeader" id="decode2-detail">
decode2()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static int <b>decode2</b>($id $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">$id</td>
  <td class="paramDescCol">string</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdSuid.php#L76">dressing/components/YdSuid.php#L76</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">decode2</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$md5_8&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$real_id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">hexdec</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$md5_8&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hash2</span><span style="color: #007700">(</span><span style="color: #0000BB">$real_id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">))&nbsp;?&nbsp;</span><span style="color: #0000BB">$real_id&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}</span>
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
public static string <b>encode</b>(int $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">$suid</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdSuid.php#L33">dressing/components/YdSuid.php#L33</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$suid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">bccomp</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rem&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">bcmod</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">34</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">bcdiv</span><span style="color: #007700">(</span><span style="color: #0000BB">bcsub</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rem</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">34</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$suid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$chars</span><span style="color: #007700">[</span><span style="color: #0000BB">$rem</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #0000BB">$suid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$suid</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Suid::encode()
<br/><br/>
Encodes an Integer into a Short Unique Identifier</p>


<div class="detailHeader" id="encode2-detail">
encode2()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>encode2</b>($id $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">$id</td>
  <td class="paramDescCol">int</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdSuid.php#L67">dressing/components/YdSuid.php#L67</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">encode2</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hash2</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">dechex</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


