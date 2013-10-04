<?php
$this->pageTitle = $this->pageHeading = 'YdSecureLink';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdSecureLink';
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
  <td>class YdSecureLink</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdSecureLink.php">dressing/helpers/YdSecureLink.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdSecureLink</div>
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
<tr id="getUrl">
  <td><?php echo CHtml::link('getUrl()', array('/site/doc', 'view' => 'YdSecureLink', '#' => 'getUrl-detail')); ?></td>
  <td></td>
  <td>YdSecureLink</td>
</tr>
<tr id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'YdSecureLink', '#' => 'validate-detail')); ?></td>
  <td></td>
  <td>YdSecureLink</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="getUrl-detail">
getUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getUrl</b>($action $action, $params $params, $ttl $ttl)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol">$action</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">$params</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$ttl</td>
  <td class="paramTypeCol">$ttl</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdSecureLink.php#L23">dressing/helpers/YdSecureLink.php#L23</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ttl</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'ttl'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$ttl</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'rnd'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #DD0000">'hashKey'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'http://'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #DD0000">'website'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="validate-detail">
validate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>validate</b>($data $data, $paramNames $paramNames)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">$data</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$paramNames</td>
  <td class="paramTypeCol">$paramNames</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdSecureLink.php#L37">dressing/helpers/YdSecureLink.php#L37</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">validate</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$paramNames</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'ttl'</span><span style="color: #007700">])&nbsp;||&nbsp;!isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'rnd'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'ttl'</span><span style="color: #007700">]&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$paramNames&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'ttl'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'ttl'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'rnd'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'rnd'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #DD0000">'hashKey'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


