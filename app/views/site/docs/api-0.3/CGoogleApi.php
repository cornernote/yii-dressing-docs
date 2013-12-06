<?php
$this->pageTitle = $this->pageHeading = 'CGoogleApi';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CGoogleApi';
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
  <td><?php echo CHtml::link('system.web.helpers', array('/site/doc', '#' => 'system.web.helpers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CGoogleApi</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/helpers/CGoogleApi.php">yii/web/helpers/CGoogleApi.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CGoogleApi provides helper methods to easily access the Google API loader.</div>
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
<tr id="bootstrapUrl">
  <td><?php echo CHtml::link('bootstrapUrl', array('/site/doc', 'view' => 'CGoogleApi', '#' => 'bootstrapUrl-detail')); ?></td>
  <td>string</td>
  <td>Protocol relative url to the Google API loader which allows easy access
to most of the Google AJAX APIs</td>
  <td>CGoogleApi</td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CGoogleApi', '#' => 'init-detail')); ?></td>
  <td>Renders the jsapi script file.</td>
  <td>CGoogleApi</td>
</tr>
<tr id="load">
  <td><?php echo CHtml::link('load()', array('/site/doc', 'view' => 'CGoogleApi', '#' => 'load-detail')); ?></td>
  <td>Loads the specified API module.</td>
  <td>CGoogleApi</td>
</tr>
<tr id="register">
  <td><?php echo CHtml::link('register()', array('/site/doc', 'view' => 'CGoogleApi', '#' => 'register-detail')); ?></td>
  <td>Registers the specified API module.</td>
  <td>CGoogleApi</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="bootstrapUrl-detail">
bootstrapUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static string <b>$bootstrapUrl</b>;</div>

<p>Protocol relative url to the Google API loader which allows easy access
to most of the Google AJAX APIs</p>


<h2>Method Details</h2>

<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>init</b>(string $apiKey=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$apiKey</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the API key. Null if you do not have a key.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the script tag that loads Google jsapi.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/helpers/CGoogleApi.php#L30">yii/web/helpers/CGoogleApi.php#L30</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">(</span><span style="color: #0000BB">$apiKey</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$apiKey</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">scriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$bootstrapUrl</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">scriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$bootstrapUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'?key='</span><span style="color: #007700">.</span><span style="color: #0000BB">$apiKey</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders the jsapi script file.</p>


<div class="detailHeader" id="load-detail">
load()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>load</b>(string $name, string $version='1', array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the module name</td>
</tr>
<tr>
  <td class="paramNameCol">$version</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the module version</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional js options that are to be passed to the load() function.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the js code for loading the module. You can use <?php echo CHtml::link('CHtml::script()', array('/site/doc', 'view' => 'CHtml', '#' => 'script')); ?>
to enclose it in a script tag.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/helpers/CGoogleApi.php#L47">yii/web/helpers/CGoogleApi.php#L47</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$version</span><span style="color: #007700">=</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"google.load(\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">\",\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$version</span><span style="color: #007700">}</span><span style="color: #DD0000">\");"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"google.load(\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">\",\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$version</span><span style="color: #007700">}</span><span style="color: #DD0000">\","</span><span style="color: #007700">.</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">).</span><span style="color: #DD0000">");"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Loads the specified API module.
Note that you should call <?php echo CHtml::link('init', array('/site/doc', 'view' => 'CGoogleApi', '#' => 'init')); ?> first.</p>


<div class="detailHeader" id="register-detail">
register()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>register</b>(string $name, string $version='1', array $options=array (
), string $apiKey=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the module name</td>
</tr>
<tr>
  <td class="paramNameCol">$version</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the module version</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional js options that are to be passed to the load() function.</td>
</tr>
<tr>
  <td class="paramNameCol">$apiKey</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the API key. Null if you do not have a key.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/helpers/CGoogleApi.php#L65">yii/web/helpers/CGoogleApi.php#L65</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">register</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$version</span><span style="color: #007700">=</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$apiKey</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$apiKey</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$bootstrapUrl</span><span style="color: #007700">:</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$bootstrapUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'?key='</span><span style="color: #007700">.</span><span style="color: #0000BB">$apiKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$version</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$js</span><span style="color: #007700">,</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_HEAD</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the specified API module.
This is similar to <?php echo CHtml::link('load', array('/site/doc', 'view' => 'CGoogleApi', '#' => 'load')); ?> except that it registers the loading code
with <?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?> instead of returning it.
This method also registers the jsapi script needed by the loading call.</p>


