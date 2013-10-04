<?php
$this->pageTitle = $this->pageHeading = 'YdNumberHelper';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdNumberHelper';
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
  <td><?php echo CHtml::link('dressing.helpers', array('/site/doc', '#' => 'dressing.helpers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdNumberHelper</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdNumberHelper.php">dressing/helpers/YdNumberHelper.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdNumberHelper</div>
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
<tr id="getAverage">
  <td><?php echo CHtml::link('getAverage()', array('/site/doc', 'view' => 'YdNumberHelper', '#' => 'getAverage-detail')); ?></td>
  <td></td>
  <td>YdNumberHelper</td>
</tr>
<tr id="getHigh">
  <td><?php echo CHtml::link('getHigh()', array('/site/doc', 'view' => 'YdNumberHelper', '#' => 'getHigh-detail')); ?></td>
  <td></td>
  <td>YdNumberHelper</td>
</tr>
<tr id="getLow">
  <td><?php echo CHtml::link('getLow()', array('/site/doc', 'view' => 'YdNumberHelper', '#' => 'getLow-detail')); ?></td>
  <td></td>
  <td>YdNumberHelper</td>
</tr>
<tr id="getMedian">
  <td><?php echo CHtml::link('getMedian()', array('/site/doc', 'view' => 'YdNumberHelper', '#' => 'getMedian-detail')); ?></td>
  <td></td>
  <td>YdNumberHelper</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="getAverage-detail">
getAverage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool|float <b>getAverage</b>(array $array=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$array</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool|float</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdNumberHelper.php#L35">dressing/helpers/YdNumberHelper.php#L35</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAverage</span><span style="color: #007700">(</span><span style="color: #0000BB">$array&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">)&nbsp;||&nbsp;empty(</span><span style="color: #0000BB">$array</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_sum</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getHigh-detail">
getHigh()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool|float <b>getHigh</b>(array $array=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$array</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool|float</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdNumberHelper.php#L45">dressing/helpers/YdNumberHelper.php#L45</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHigh</span><span style="color: #007700">(</span><span style="color: #0000BB">$array&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">)&nbsp;||&nbsp;empty(</span><span style="color: #0000BB">$array</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getLow-detail">
getLow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool|float <b>getLow</b>(array $array=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$array</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool|float</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdNumberHelper.php#L55">dressing/helpers/YdNumberHelper.php#L55</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLow</span><span style="color: #007700">(</span><span style="color: #0000BB">$array&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">)&nbsp;||&nbsp;empty(</span><span style="color: #0000BB">$array</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getMedian-detail">
getMedian()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool|float <b>getMedian</b>(array $array=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$array</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool|float</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdNumberHelper.php#L20">dressing/helpers/YdNumberHelper.php#L20</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMedian</span><span style="color: #007700">(</span><span style="color: #0000BB">$array&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">)&nbsp;||&nbsp;empty(</span><span style="color: #0000BB">$array</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$h&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;?&nbsp;(</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">$h</span><span style="color: #007700">]&nbsp;+&nbsp;</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">$h&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">])&nbsp;/&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">$h</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


