<?php
$this->pageTitle = $this->pageHeading = 'CJavaScript';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CJavaScript';
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
  <td><?php echo CHtml::link('system.web.helpers', array('/site/doc', '#' => 'system.web.helpers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CJavaScript</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\helpers\CJavaScript.php">yii\web\helpers\CJavaScript.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CJavaScript is a helper class containing JavaScript-related handling functions.</div>
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
<tr id="encode">
  <td><?php echo CHtml::link('encode()', array('/site/doc', 'view' => 'CJavaScript', '#' => 'encode-detail')); ?></td>
  <td>Encodes a PHP variable into javascript representation.</td>
  <td>CJavaScript</td>
</tr>
<tr id="jsonDecode">
  <td><?php echo CHtml::link('jsonDecode()', array('/site/doc', 'view' => 'CJavaScript', '#' => 'jsonDecode-detail')); ?></td>
  <td>Decodes a JSON string.</td>
  <td>CJavaScript</td>
</tr>
<tr id="jsonEncode">
  <td><?php echo CHtml::link('jsonEncode()', array('/site/doc', 'view' => 'CJavaScript', '#' => 'jsonEncode-detail')); ?></td>
  <td>Returns the JSON representation of the PHP data.</td>
  <td>CJavaScript</td>
</tr>
<tr id="quote">
  <td><?php echo CHtml::link('quote()', array('/site/doc', 'view' => 'CJavaScript', '#' => 'quote-detail')); ?></td>
  <td>Quotes a javascript string.</td>
  <td>CJavaScript</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="encode-detail">
encode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>encode</b>(mixed $value, boolean $safe=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">PHP variable to be encoded</td>
</tr>
<tr>
  <td class="paramNameCol">$safe</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">If true, 'js:' will not be allowed. In case of
wrapping code with <?php echo CHtml::link('CJavaScriptExpression', array('/site/doc', 'view' => 'CJavaScriptExpression')); ?> JavaScript expression
will stay as is no matter what value this parameter is set to.
Default is false. This parameter is available since 1.1.11.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the encoded string</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\helpers\CJavaScript.php#L59">yii\web\helpers\CJavaScript.php#L59</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$safe</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #DD0000">'js:'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$safe</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"'"</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">).</span><span style="color: #DD0000">"'"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'null'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_bool</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">?</span><span style="color: #DD0000">'true'</span><span style="color: #007700">:</span><span style="color: #DD0000">'false'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_integer</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$value</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_float</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===-</span><span style="color: #0000BB">INF</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'Number.NEGATIVE_INFINITY'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">INF</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'Number.POSITIVE_INFINITY'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,(float)</span><span style="color: #0000BB">$value</span><span style="color: #007700">);&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;locale-independent&nbsp;representation<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__toString</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">get_object_vars</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">),</span><span style="color: #0000BB">$safe</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$es</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)!==</span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$n</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$es</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"'"</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">).</span><span style="color: #DD0000">"':"</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">,</span><span style="color: #0000BB">$safe</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'{'</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #0000BB">$es</span><span style="color: #007700">).</span><span style="color: #DD0000">'}'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$es</span><span style="color: #007700">[]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">,</span><span style="color: #0000BB">$safe</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'['</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #0000BB">$es</span><span style="color: #007700">).</span><span style="color: #DD0000">']'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Encodes a PHP variable into javascript representation.
<br/><br/>
Example:
<pre>
$options=array('key1'=&gt;true,'key2'=&gt;123,'key3'=&gt;'value');
echo CJavaScript::encode($options);
// The following javascript code would be generated:
// {'key1':true,'key2':123,'key3':'value'}
</pre>
<br/><br/>
For highly complex data structures use <?php echo CHtml::link('jsonEncode', array('/site/doc', 'view' => 'CJavaScript', '#' => 'jsonEncode')); ?> and <?php echo CHtml::link('jsonDecode', array('/site/doc', 'view' => 'CJavaScript', '#' => 'jsonDecode')); ?>
to serialize and unserialize.
<br/><br/>
If you are encoding user input, make sure $safe is set to true.</p>


<div class="detailHeader" id="jsonDecode-detail">
jsonDecode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>jsonDecode</b>(string $data, boolean $useArray=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the data to be decoded</td>
</tr>
<tr>
  <td class="paramNameCol">$useArray</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to use associative array to represent object data</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the decoded PHP data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\helpers\CJavaScript.php#L123">yii\web\helpers\CJavaScript.php#L123</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">jsonDecode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$useArray</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CJSON</span><span style="color: #007700">::</span><span style="color: #0000BB">decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$useArray</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Decodes a JSON string.</p>


<div class="detailHeader" id="jsonEncode-detail">
jsonEncode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>jsonEncode</b>(mixed $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the data to be encoded</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the JSON representation of the PHP data.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\helpers\CJavaScript.php#L112">yii\web\helpers\CJavaScript.php#L112</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">jsonEncode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CJSON</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the JSON representation of the PHP data.</p>


<div class="detailHeader" id="quote-detail">
quote()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>quote</b>(string $js, boolean $forUrl=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$js</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">string to be quoted</td>
</tr>
<tr>
  <td class="paramNameCol">$forUrl</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this string is used as a URL</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the quoted string</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\helpers\CJavaScript.php#L28">yii\web\helpers\CJavaScript.php#L28</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$js</span><span style="color: #007700">,</span><span style="color: #0000BB">$forUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$forUrl</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$js</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'%'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'%25'</span><span style="color: #007700">,</span><span style="color: #DD0000">"\t"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\t'</span><span style="color: #007700">,</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\n'</span><span style="color: #007700">,</span><span style="color: #DD0000">"\r"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\r'</span><span style="color: #007700">,</span><span style="color: #DD0000">'"'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\"'</span><span style="color: #007700">,</span><span style="color: #DD0000">'\''</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\\\''</span><span style="color: #007700">,</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\\\\'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;/'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'&lt;\/'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$js</span><span style="color: #007700">,array(</span><span style="color: #DD0000">"\t"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\t'</span><span style="color: #007700">,</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\n'</span><span style="color: #007700">,</span><span style="color: #DD0000">"\r"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\r'</span><span style="color: #007700">,</span><span style="color: #DD0000">'"'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\"'</span><span style="color: #007700">,</span><span style="color: #DD0000">'\''</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\\\''</span><span style="color: #007700">,</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\\\\'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;/'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'&lt;\/'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Quotes a javascript string.
After processing, the string can be safely enclosed within a pair of
quotation marks and serve as a javascript string.</p>


