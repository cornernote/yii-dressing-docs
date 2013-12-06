<?php
$this->pageTitle = $this->pageHeading = 'YdConfig';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdConfig';
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
  <td><?php echo CHtml::link('dressing', array('/site/doc', '#' => 'dressing')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdConfig</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php">dressing/YdConfig.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdConfig implements protocols for configuring the environment before the application is loaded.
<br/><br/>
<br/><br/>
Initializing
<br/><br/>
When initializing, YdConfig will load data from the json file, then define constants, then setup the PHP environment:
<pre>
$config = YdConfig::createInstance('config.json');
</pre>
<br/><br/>
<br/><br/>
Static Access
<br/><br/>
YdConfig can be accessed using a static instance:
<pre>
$config = YdConfig::instance();
</pre>
<br/><br/>
<br/><br/>
Accessing Configuration Data
<br/><br/>
Data can be written using setConfig() and read using getConfig():
<pre>
$config-&gt;setConfig('text','hello world');
$a=$config-&gt;getConfig('text','default text');
</pre>
<br/><br/>
<br/><br/>
Credits
<br/><br/>
This class was written and compiled by Brett O'Donnell and Zain ul abidin.</div>
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
<tr id="file">
  <td><?php echo CHtml::link('file', array('/site/doc', 'view' => 'YdConfig', '#' => 'file-detail')); ?></td>
  <td>string</td>
  <td>full path to the json config file</td>
  <td>YdConfig</td>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'YdConfig', '#' => '__construct-detail')); ?></td>
  <td>Constructs the instance.</td>
  <td>YdConfig</td>
</tr>
<tr id="cleanPath">
  <td><?php echo CHtml::link('cleanPath()', array('/site/doc', 'view' => 'YdConfig', '#' => 'cleanPath-detail')); ?></td>
  <td>Prepares a path for the correct environment by converting back or forwardslashes to the OS prefered slash.</td>
  <td>YdConfig</td>
</tr>
<tr id="createInstance">
  <td><?php echo CHtml::link('createInstance()', array('/site/doc', 'view' => 'YdConfig', '#' => 'createInstance-detail')); ?></td>
  <td>Returns a static instance with the config values assigned to properties.</td>
  <td>YdConfig</td>
</tr>
<tr id="getAppConfig">
  <td><?php echo CHtml::link('getAppConfig()', array('/site/doc', 'view' => 'YdConfig', '#' => 'getAppConfig-detail')); ?></td>
  <td>Returns the Yii Config</td>
  <td>YdConfig</td>
</tr>
<tr id="getValue">
  <td><?php echo CHtml::link('getValue()', array('/site/doc', 'view' => 'YdConfig', '#' => 'getValue-detail')); ?></td>
  <td>Return the value of a config key</td>
  <td>YdConfig</td>
</tr>
<tr id="getValues">
  <td><?php echo CHtml::link('getValues()', array('/site/doc', 'view' => 'YdConfig', '#' => 'getValues-detail')); ?></td>
  <td>Return an array of all config keys and values</td>
  <td>YdConfig</td>
</tr>
<tr id="instance">
  <td><?php echo CHtml::link('instance()', array('/site/doc', 'view' => 'YdConfig', '#' => 'instance-detail')); ?></td>
  <td>Returns a static instance.</td>
  <td>YdConfig</td>
</tr>
<tr id="setValue">
  <td><?php echo CHtml::link('setValue()', array('/site/doc', 'view' => 'YdConfig', '#' => 'setValue-detail')); ?></td>
  <td>Set the value of a value key</td>
  <td>YdConfig</td>
</tr>
<tr id="setValues">
  <td><?php echo CHtml::link('setValues()', array('/site/doc', 'view' => 'YdConfig', '#' => 'setValues-detail')); ?></td>
  <td>Set the value of all config keys and values and writes to the config file</td>
  <td>YdConfig</td>
</tr>
</table>
</div>
<div class="summary docMethod">
<h2>Protected Methods</h2>

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
<tr id="initConstants">
  <td><?php echo CHtml::link('initConstants()', array('/site/doc', 'view' => 'YdConfig', '#' => 'initConstants-detail')); ?></td>
  <td>Defines any constant that has not yet been defined.</td>
  <td>YdConfig</td>
</tr>
<tr id="initEnvironment">
  <td><?php echo CHtml::link('initEnvironment()', array('/site/doc', 'view' => 'YdConfig', '#' => 'initEnvironment-detail')); ?></td>
  <td>Sets up the PHP environment</td>
  <td>YdConfig</td>
</tr>
<tr id="initValues">
  <td><?php echo CHtml::link('initValues()', array('/site/doc', 'view' => 'YdConfig', '#' => 'initValues-detail')); ?></td>
  <td>Load data from config file into the value array.</td>
  <td>YdConfig</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="file-detail">
file<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$file</b>;</div>

<p>full path to the json config file</p>


<h2>Method Details</h2>

<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>(null|string $file=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">null|string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L103">dressing/YdConfig.php#L103</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initValues</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initConstants</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initEnvironment</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_instance&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructs the instance.
Do not call this method.
This is a PHP magic method that we override to allow the following syntax to set initial properties:
<pre>
$config = new Config('config.json');
</pre></p>


<div class="detailHeader" id="cleanPath-detail">
cleanPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>cleanPath</b>($path $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">$path</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L298">dressing/YdConfig.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">cleanPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$path</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Prepares a path for the correct environment by converting back or forwardslashes to the OS prefered slash.</p>


<div class="detailHeader" id="createInstance-detail">
createInstance()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static YdConfig <b>createInstance</b>(null|string $file=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">null|string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">YdConfig</td>
  <td class="paramDescCol">the instantiated object</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L72">dressing/YdConfig.php#L72</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_called_class</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a static instance with the config values assigned to properties.
It is provided for preparing the instance for static instance methods.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('__construct', array('/site/doc', 'view' => 'YdConfig', '#' => '__construct')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getAppConfig-detail">
getAppConfig()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string|array <b>getAppConfig</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string|array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L116">dressing/YdConfig.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAppConfig</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">cleanPath</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">VENDOR_PATH</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">DS&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'app'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DS&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'config'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DS&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'main.php'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the Yii Config</p>


<div class="detailHeader" id="getValue-detail">
getValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getValue</b>(string $name, mixed $default=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$default</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L128">dressing/YdConfig.php#L128</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$default&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$default</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Return the value of a config key</p>


<div class="detailHeader" id="getValues-detail">
getValues()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getValues</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L138">dressing/YdConfig.php#L138</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getValues</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Return an array of all config keys and values</p>


<div class="detailHeader" id="initConstants-detail">
initConstants()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>initConstants</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L202">dressing/YdConfig.php#L202</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initConstants</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$constants&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'DS'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'VENDOR_PATH'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'YII_DEBUG'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'YII_DEBUG_TOOLBAR'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'YII_TRACE_LEVEL'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'YII_ENABLE_EXCEPTION_HANDLER'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'YII_ENABLE_ERROR_HANDLER'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'YII_DRESSING_CLI'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'YII_DRESSING_HASH'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'PUBLIC_PATH'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'PUBLIC_HOST'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'PUBLIC_URL'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$constants&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))&nbsp;!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;bools&nbsp;and&nbsp;strings<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_DEBUG'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_DEBUG'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_DEBUG_TOOLBAR'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_DEBUG_TOOLBAR'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_TRACE_LEVEL'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_TRACE_LEVEL'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_ENABLE_EXCEPTION_HANDLER'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_ENABLE_EXCEPTION_HANDLER'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_ENABLE_ERROR_HANDLER'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_ENABLE_ERROR_HANDLER'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_DRESSING_CLI'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_DRESSING_CLI'</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">php_sapi_name</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #DD0000">'cli'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//defined('YII_DRESSING_LOG_LEVELS')&nbsp;or&nbsp;define('YII_DRESSING_LOG_LEVELS',&nbsp;'error,&nbsp;warning');<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;paths<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'DS'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'DS'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'VENDOR_PATH'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'VENDOR_PATH'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">cleanPath</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">)))))&nbsp;.&nbsp;</span><span style="color: #0000BB">DS&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'vendor'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUBLIC_PATH'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUBLIC_PATH'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">cleanPath</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">VENDOR_PATH</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">DS&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'public'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;public_host&nbsp;and&nbsp;public_url&nbsp;are&nbsp;saved&nbsp;into&nbsp;config&nbsp;when&nbsp;accessed&nbsp;via&nbsp;web&nbsp;so&nbsp;that&nbsp;the&nbsp;value&nbsp;is&nbsp;available&nbsp;for&nbsp;cli<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUBLIC_HOST'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUBLIC_HOST'</span><span style="color: #007700">,&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_HOST'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_HOST'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">YII_DRESSING_CLI</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUBLIC_HOST'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PUBLIC_HOST</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUBLIC_URL'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_NAME'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_NAME'</span><span style="color: #007700">])&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUBLIC_URL'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">YII_DRESSING_CLI</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUBLIC_URL'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PUBLIC_URL</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;hash&nbsp;needs&nbsp;to&nbsp;be&nbsp;defined&nbsp;once&nbsp;and&nbsp;saved&nbsp;into&nbsp;config&nbsp;so&nbsp;that&nbsp;it&nbsp;does&nbsp;not&nbsp;change<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_DRESSING_HASH'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_DRESSING_HASH'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">uniqid</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_DRESSING_HASH'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">YII_DRESSING_HASH</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Defines any constant that has not yet been defined.</p>


<div class="detailHeader" id="initEnvironment-detail">
initEnvironment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>initEnvironment</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L261">dressing/YdConfig.php#L261</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initEnvironment</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;error&nbsp;reporting<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">error_reporting</span><span style="color: #007700">(</span><span style="color: #0000BB">E_ALL</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'display_errors'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'log_errors'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">error_reporting</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'display_errors'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'log_errors'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;timezone<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #DD0000">'default_timezone'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'GMT'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;time&nbsp;and&nbsp;memory&nbsp;limit<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'max_execution_time'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">YII_DRESSING_CLI&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #DD0000">'time_limit'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">60</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'memory_limit'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">(</span><span style="color: #DD0000">'memory_limit'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"128M"</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;cli&nbsp;specific<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">YII_DRESSING_CLI</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;fix&nbsp;for&nbsp;fcgi<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'STDIN'</span><span style="color: #007700">)&nbsp;or&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'STDIN'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://stdin'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'r'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;fix&nbsp;for&nbsp;absolute&nbsp;url<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_NAME'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">PUBLIC_HOST</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />}</span>
</span>
</code></div>
</div>
<p>Sets up the PHP environment</p>


<div class="detailHeader" id="initValues-detail">
initValues()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>initValues</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L172">dressing/YdConfig.php#L172</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initValues</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;return&nbsp;existing&nbsp;object<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;the&nbsp;database&nbsp;name<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'.json'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;create&nbsp;the&nbsp;folder<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">0777</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #DD0000">'Could&nbsp;not&nbsp;create&nbsp;directory&nbsp;for&nbsp;{class}.'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{class}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;create&nbsp;the&nbsp;file<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #DD0000">'Could&nbsp;not&nbsp;create&nbsp;file&nbsp;for&nbsp;{class}.'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{class}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Load data from config file into the value array.</p>


<div class="detailHeader" id="instance-detail">
instance()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static Config <b>instance</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">Config</td>
  <td class="paramDescCol">the instantiated object</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L86">dressing/YdConfig.php#L86</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">instance</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_instance</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_instance</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Instance&nbsp;has&nbsp;not&nbsp;been&nbsp;created.'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a static instance.
It is provided for invoking static instance methods.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('createInstance', array('/site/doc', 'view' => 'YdConfig', '#' => 'createInstance')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setValue-detail">
setValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setValue</b>($name $name, $value $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">$name</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">$value</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L149">dressing/YdConfig.php#L149</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setValues</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Set the value of a value key</p>


<div class="detailHeader" id="setValues-detail">
setValues()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setValues</b>($values $values)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$values</td>
  <td class="paramTypeCol">$values</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/YdConfig.php#L159">dressing/YdConfig.php#L159</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setValues</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_values</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Set the value of all config keys and values and writes to the config file</p>


