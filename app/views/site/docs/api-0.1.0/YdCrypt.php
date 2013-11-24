<?php
$this->pageTitle = $this->pageHeading = 'YdCrypt';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdCrypt';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdCrypt</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdCrypt.php">dressing/components/YdCrypt.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdCrypt</div>
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
<tr id="decrypt">
  <td><?php echo CHtml::link('decrypt()', array('/site/doc', 'view' => 'YdCrypt', '#' => 'decrypt-detail')); ?></td>
  <td></td>
  <td>YdCrypt</td>
</tr>
<tr id="encrypt">
  <td><?php echo CHtml::link('encrypt()', array('/site/doc', 'view' => 'YdCrypt', '#' => 'encrypt-detail')); ?></td>
  <td></td>
  <td>YdCrypt</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="decrypt-detail">
decrypt()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>decrypt</b>(string $encrypted, bool $lowSecurity=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$encrypted</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$lowSecurity</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdCrypt.php#L43">dressing/components/YdCrypt.php#L43</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">decrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">$encrypted</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$lowSecurity&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$lowSecurity</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">mcrypt_decrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_256</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">safe_base64_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$encrypted</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))),&nbsp;</span><span style="color: #DD0000">"\0"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$iv_size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cipher&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">safe_base64_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$encrypted</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$iv&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$cipher</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cipher&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$cipher</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">mcrypt_decrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$cipher</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$iv</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="encrypt-detail">
encrypt()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>encrypt</b>(string $decrypted, bool $lowSecurity=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$decrypted</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$lowSecurity</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdCrypt.php#L26">dressing/components/YdCrypt.php#L26</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">encrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">$decrypted</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$lowSecurity&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$lowSecurity</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">safe_base64_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">mcrypt_encrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_256</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$decrypted</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$iv_size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$iv&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MCRYPT_RAND</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$plain_utf8&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">utf8_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$decrypted</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cipher&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mcrypt_encrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$plain_utf8</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$iv</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">safe_base64_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$iv&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$cipher</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


