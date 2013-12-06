<?php
$this->pageTitle = $this->pageHeading = 'YdBase';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdBase';
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
  <td>class YdBase &raquo;
<?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('Yii', array('/site/doc', 'view' => 'Yii')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdBase.php">dressing/YdBase.php</a></td>
</tr>
</table>

<div id="classDescription">
YdBase is a helper class serving common framework functionalities.
<br/><br/>
Do not use YdBase directly. Instead, use its child class <?php echo CHtml::link('Yii', array('/site/doc', 'view' => 'Yii')); ?> where you can customize methods of YdBase.</div>
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
<tr class="inherited" id="classMap">
  <td><?php echo CHtml::link('classMap', array('/site/doc', 'view' => 'YiiBase', '#' => 'classMap-detail')); ?></td>
  <td>array</td>
  <td>class map used by the Yii autoloading mechanism.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="enableIncludePath">
  <td><?php echo CHtml::link('enableIncludePath', array('/site/doc', 'view' => 'YiiBase', '#' => 'enableIncludePath-detail')); ?></td>
  <td>boolean</td>
  <td>whether to rely on PHP include path to autoload class files.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
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
<tr class="inherited" id="app">
  <td><?php echo CHtml::link('app()', array('/site/doc', 'view' => 'YiiBase', '#' => 'app-detail')); ?></td>
  <td>Returns the application singleton or null if the singleton has not been created yet.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="autoload">
  <td><?php echo CHtml::link('autoload()', array('/site/doc', 'view' => 'YiiBase', '#' => 'autoload-detail')); ?></td>
  <td>Class autoload loader.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="beginProfile">
  <td><?php echo CHtml::link('beginProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'beginProfile-detail')); ?></td>
  <td>Marks the beginning of a code block for profiling.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr id="createApplication">
  <td><?php echo CHtml::link('createApplication()', array('/site/doc', 'view' => 'YdBase', '#' => 'createApplication-detail')); ?></td>
  <td>Merge YdBase default configuration with the given configuration.</td>
  <td>YdBase</td>
</tr>
<tr class="inherited" id="createComponent">
  <td><?php echo CHtml::link('createComponent()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createComponent-detail')); ?></td>
  <td>Creates an object and initializes it based on the given configuration.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr id="createConsoleApplication">
  <td><?php echo CHtml::link('createConsoleApplication()', array('/site/doc', 'view' => 'YdBase', '#' => 'createConsoleApplication-detail')); ?></td>
  <td>Creates a CConsoleApplication, in addition it will configure the command map as well as remove config items that</td>
  <td>YdBase</td>
</tr>
<tr id="createWebApplication">
  <td><?php echo CHtml::link('createWebApplication()', array('/site/doc', 'view' => 'YdBase', '#' => 'createWebApplication-detail')); ?></td>
  <td>Creates a CWebApplication, in addition it will configure the controller map and log routes as well as remove</td>
  <td>YdBase</td>
</tr>
<tr class="inherited" id="endProfile">
  <td><?php echo CHtml::link('endProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'endProfile-detail')); ?></td>
  <td>Marks the end of a code block for profiling.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr id="getCommandMap">
  <td><?php echo CHtml::link('getCommandMap()', array('/site/doc', 'view' => 'YdBase', '#' => 'getCommandMap-detail')); ?></td>
  <td>YdBase Command Map</td>
  <td>YdBase</td>
</tr>
<tr id="getConfig">
  <td><?php echo CHtml::link('getConfig()', array('/site/doc', 'view' => 'YdBase', '#' => 'getConfig-detail')); ?></td>
  <td>YdBase Config</td>
  <td>YdBase</td>
</tr>
<tr id="getControllerMap">
  <td><?php echo CHtml::link('getControllerMap()', array('/site/doc', 'view' => 'YdBase', '#' => 'getControllerMap-detail')); ?></td>
  <td>YdBase Controller Map</td>
  <td>YdBase</td>
</tr>
<tr class="inherited" id="getFrameworkPath">
  <td><?php echo CHtml::link('getFrameworkPath()', array('/site/doc', 'view' => 'YiiBase', '#' => 'getFrameworkPath-detail')); ?></td>
  <td>Returns the path of the framework</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="getLogger">
  <td><?php echo CHtml::link('getLogger()', array('/site/doc', 'view' => 'YiiBase', '#' => 'getLogger-detail')); ?></td>
  <td>Returns message logger</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="getPathOfAlias">
  <td><?php echo CHtml::link('getPathOfAlias()', array('/site/doc', 'view' => 'YiiBase', '#' => 'getPathOfAlias-detail')); ?></td>
  <td>Translates an alias into a file path.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="getVersion">
  <td><?php echo CHtml::link('getVersion()', array('/site/doc', 'view' => 'YiiBase', '#' => 'getVersion-detail')); ?></td>
  <td>Returns the version of Yii framework</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="import">
  <td><?php echo CHtml::link('import()', array('/site/doc', 'view' => 'YiiBase', '#' => 'import-detail')); ?></td>
  <td>Imports a class or a directory.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr id="loadConfig">
  <td><?php echo CHtml::link('loadConfig()', array('/site/doc', 'view' => 'YdBase', '#' => 'loadConfig-detail')); ?></td>
  <td>Config can be a string, in which case a file and optional local file override are loaded.</td>
  <td>YdBase</td>
</tr>
<tr class="inherited" id="log">
  <td><?php echo CHtml::link('log()', array('/site/doc', 'view' => 'YiiBase', '#' => 'log-detail')); ?></td>
  <td>Logs a message.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="powered">
  <td><?php echo CHtml::link('powered()', array('/site/doc', 'view' => 'YiiBase', '#' => 'powered-detail')); ?></td>
  <td>Returns a string that can be displayed on your Web page showing Powered-by-Yii information</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="registerAutoloader">
  <td><?php echo CHtml::link('registerAutoloader()', array('/site/doc', 'view' => 'YiiBase', '#' => 'registerAutoloader-detail')); ?></td>
  <td>Registers a new class autoloader.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="setApplication">
  <td><?php echo CHtml::link('setApplication()', array('/site/doc', 'view' => 'YiiBase', '#' => 'setApplication-detail')); ?></td>
  <td>Stores the application instance in the class static member.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="setLogger">
  <td><?php echo CHtml::link('setLogger()', array('/site/doc', 'view' => 'YiiBase', '#' => 'setLogger-detail')); ?></td>
  <td>Sets the logger object.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="setPathOfAlias">
  <td><?php echo CHtml::link('setPathOfAlias()', array('/site/doc', 'view' => 'YiiBase', '#' => 'setPathOfAlias-detail')); ?></td>
  <td>Create a path alias.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="t">
  <td><?php echo CHtml::link('t()', array('/site/doc', 'view' => 'YiiBase', '#' => 't-detail')); ?></td>
  <td>Translates a message to the specified language.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="trace">
  <td><?php echo CHtml::link('trace()', array('/site/doc', 'view' => 'YiiBase', '#' => 'trace-detail')); ?></td>
  <td>Writes a trace message.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="createApplication-detail">
createApplication()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>createApplication</b>(string $class, mixed $config=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$class</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the application class name</td>
</tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">application configuration.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the application instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdBase.php#L98">dressing/YdBase.php#L98</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p>Merge YdBase default configuration with the given configuration.</p>


<div class="detailHeader" id="createConsoleApplication-detail">
createConsoleApplication()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static <?php echo CHtml::link('CConsoleApplication', array('/site/doc', 'view' => 'CConsoleApplication')); ?> <b>createConsoleApplication</b>(null $config=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleApplication', array('/site/doc', 'view' => 'CConsoleApplication')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdBase.php#L150">dressing/YdBase.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createConsoleApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p>Creates a CConsoleApplication, in addition it will configure the command map as well as remove config items that
are incompatibale with CConsoleApplication.</p>


<div class="detailHeader" id="createWebApplication-detail">
createWebApplication()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static <?php echo CHtml::link('CWebApplication', array('/site/doc', 'view' => 'CWebApplication')); ?> <b>createWebApplication</b>(null $config=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebApplication', array('/site/doc', 'view' => 'CWebApplication')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdBase.php#L110">dressing/YdBase.php#L110</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createWebApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p>Creates a CWebApplication, in addition it will configure the controller map and log routes as well as remove
config items that are incompatibale with CWebApplication.</p>


<div class="detailHeader" id="getCommandMap-detail">
getCommandMap()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>getCommandMap</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdBase.php#L357">dressing/YdBase.php#L357</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getCommandMap</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p>YdBase Command Map</p>


<div class="detailHeader" id="getConfig-detail">
getConfig()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>getConfig</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdBase.php#L213">dressing/YdBase.php#L213</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getConfig</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p>YdBase Config</p>


<div class="detailHeader" id="getControllerMap-detail">
getControllerMap()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>getControllerMap</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdBase.php#L329">dressing/YdBase.php#L329</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getControllerMap</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p>YdBase Controller Map</p>


<div class="detailHeader" id="loadConfig-detail">
loadConfig()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array|mixed <b>loadConfig</b>($config $config)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">$config</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array|mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/YdBase.php#L196">dressing/YdBase.php#L196</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">loadConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p>Config can be a string, in which case a file and optional local file override are loaded.
The files should return arrays.</p>

