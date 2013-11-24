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
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdConfig.php">dressing/YdConfig.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain ul abidin &lt;zainengineer@gmail.com&gt;</td>
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
<tr id="getConfig">
  <td><?php echo CHtml::link('getConfig()', array('/site/doc', 'view' => 'YdConfig', '#' => 'getConfig-detail')); ?></td>
  <td>Return the value of a config key</td>
  <td>YdConfig</td>
</tr>
<tr id="getConfigs">
  <td><?php echo CHtml::link('getConfigs()', array('/site/doc', 'view' => 'YdConfig', '#' => 'getConfigs-detail')); ?></td>
  <td>Return an array of all config keys and values</td>
  <td>YdConfig</td>
</tr>
<tr id="instance">
  <td><?php echo CHtml::link('instance()', array('/site/doc', 'view' => 'YdConfig', '#' => 'instance-detail')); ?></td>
  <td>Returns a static instance.</td>
  <td>YdConfig</td>
</tr>
<tr id="setConfig">
  <td><?php echo CHtml::link('setConfig()', array('/site/doc', 'view' => 'YdConfig', '#' => 'setConfig-detail')); ?></td>
  <td>Set the value of a config key</td>
  <td>YdConfig</td>
</tr>
<tr id="setConfigs">
  <td><?php echo CHtml::link('setConfigs()', array('/site/doc', 'view' => 'YdConfig', '#' => 'setConfigs-detail')); ?></td>
  <td>Set the value of all config keys and values and writes to the config file</td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdConfig.php#L103">dressing/YdConfig.php#L103</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initConfig</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initConstants</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initEnvironment</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_instance&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdConfig.php#L300">dressing/YdConfig.php#L300</a> (<b><a href="#" class="show">show</a></b>)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdConfig.php#L72">dressing/YdConfig.php#L72</a> (<b><a href="#" class="show">show</a></b>)
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

<div class="detailHeader" id="getConfig-detail">
getConfig()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getConfig</b>(string $name, mixed $default=NULL)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdConfig.php#L119">dressing/YdConfig.php#L119</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$default&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_configs</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_configs</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$default</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Return the value of a config key</p>


<div class="detailHeader" id="getConfigs-detail">
getConfigs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getConfigs</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdConfig.php#L129">dressing/YdConfig.php#L129</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getConfigs</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_configs</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Return an array of all config keys and values</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdConfig.php#L86">dressing/YdConfig.php#L86</a> (<b><a href="#" class="show">show</a></b>)
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

<div class="detailHeader" id="setConfig-detail">
setConfig()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setConfig</b>($name $name, $value $value)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdConfig.php#L140">dressing/YdConfig.php#L140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setConfigs</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Set the value of a config key</p>


<div class="detailHeader" id="setConfigs-detail">
setConfigs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setConfigs</b>($configs $configs)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$configs</td>
  <td class="paramTypeCol">$configs</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdConfig.php#L150">dressing/YdConfig.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setConfigs</span><span style="color: #007700">(</span><span style="color: #0000BB">$configs</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$configs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_configs</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_configs</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_configs</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_configs</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Set the value of all config keys and values and writes to the config file</p>


