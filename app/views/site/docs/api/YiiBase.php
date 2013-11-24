<?php
$this->pageTitle = $this->pageHeading = 'YiiBase';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YiiBase';
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
  <td><?php echo CHtml::link('system', array('/site/doc', '#' => 'system')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YiiBase</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php">yii\YiiBase.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YiiBase is a helper class serving common framework functionalities.
<br/><br/>
Do not use YiiBase directly. Instead, use its child class <?php echo CHtml::link('Yii', array('/site/doc', 'view' => 'Yii')); ?> where
you can customize methods of YiiBase.</div>
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
<tr id="classMap">
  <td><?php echo CHtml::link('classMap', array('/site/doc', 'view' => 'YiiBase', '#' => 'classMap-detail')); ?></td>
  <td>array</td>
  <td>class map used by the Yii autoloading mechanism.</td>
  <td>YiiBase</td>
</tr>
<tr id="enableIncludePath">
  <td><?php echo CHtml::link('enableIncludePath', array('/site/doc', 'view' => 'YiiBase', '#' => 'enableIncludePath-detail')); ?></td>
  <td>boolean</td>
  <td>whether to rely on PHP include path to autoload class files.</td>
  <td>YiiBase</td>
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
<tr id="app">
  <td><?php echo CHtml::link('app()', array('/site/doc', 'view' => 'YiiBase', '#' => 'app-detail')); ?></td>
  <td>Returns the application singleton or null if the singleton has not been created yet.</td>
  <td>YiiBase</td>
</tr>
<tr id="autoload">
  <td><?php echo CHtml::link('autoload()', array('/site/doc', 'view' => 'YiiBase', '#' => 'autoload-detail')); ?></td>
  <td>Class autoload loader.</td>
  <td>YiiBase</td>
</tr>
<tr id="beginProfile">
  <td><?php echo CHtml::link('beginProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'beginProfile-detail')); ?></td>
  <td>Marks the beginning of a code block for profiling.</td>
  <td>YiiBase</td>
</tr>
<tr id="createApplication">
  <td><?php echo CHtml::link('createApplication()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createApplication-detail')); ?></td>
  <td>Creates an application of the specified class.</td>
  <td>YiiBase</td>
</tr>
<tr id="createComponent">
  <td><?php echo CHtml::link('createComponent()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createComponent-detail')); ?></td>
  <td>Creates an object and initializes it based on the given configuration.</td>
  <td>YiiBase</td>
</tr>
<tr id="createConsoleApplication">
  <td><?php echo CHtml::link('createConsoleApplication()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createConsoleApplication-detail')); ?></td>
  <td>Creates a console application instance.</td>
  <td>YiiBase</td>
</tr>
<tr id="createWebApplication">
  <td><?php echo CHtml::link('createWebApplication()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createWebApplication-detail')); ?></td>
  <td>Creates a Web application instance.</td>
  <td>YiiBase</td>
</tr>
<tr id="endProfile">
  <td><?php echo CHtml::link('endProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'endProfile-detail')); ?></td>
  <td>Marks the end of a code block for profiling.</td>
  <td>YiiBase</td>
</tr>
<tr id="getFrameworkPath">
  <td><?php echo CHtml::link('getFrameworkPath()', array('/site/doc', 'view' => 'YiiBase', '#' => 'getFrameworkPath-detail')); ?></td>
  <td>Returns the path of the framework</td>
  <td>YiiBase</td>
</tr>
<tr id="getLogger">
  <td><?php echo CHtml::link('getLogger()', array('/site/doc', 'view' => 'YiiBase', '#' => 'getLogger-detail')); ?></td>
  <td>Returns message logger</td>
  <td>YiiBase</td>
</tr>
<tr id="getPathOfAlias">
  <td><?php echo CHtml::link('getPathOfAlias()', array('/site/doc', 'view' => 'YiiBase', '#' => 'getPathOfAlias-detail')); ?></td>
  <td>Translates an alias into a file path.</td>
  <td>YiiBase</td>
</tr>
<tr id="getVersion">
  <td><?php echo CHtml::link('getVersion()', array('/site/doc', 'view' => 'YiiBase', '#' => 'getVersion-detail')); ?></td>
  <td>Returns the version of Yii framework</td>
  <td>YiiBase</td>
</tr>
<tr id="import">
  <td><?php echo CHtml::link('import()', array('/site/doc', 'view' => 'YiiBase', '#' => 'import-detail')); ?></td>
  <td>Imports a class or a directory.</td>
  <td>YiiBase</td>
</tr>
<tr id="log">
  <td><?php echo CHtml::link('log()', array('/site/doc', 'view' => 'YiiBase', '#' => 'log-detail')); ?></td>
  <td>Logs a message.</td>
  <td>YiiBase</td>
</tr>
<tr id="powered">
  <td><?php echo CHtml::link('powered()', array('/site/doc', 'view' => 'YiiBase', '#' => 'powered-detail')); ?></td>
  <td>Returns a string that can be displayed on your Web page showing Powered-by-Yii information</td>
  <td>YiiBase</td>
</tr>
<tr id="registerAutoloader">
  <td><?php echo CHtml::link('registerAutoloader()', array('/site/doc', 'view' => 'YiiBase', '#' => 'registerAutoloader-detail')); ?></td>
  <td>Registers a new class autoloader.</td>
  <td>YiiBase</td>
</tr>
<tr id="setApplication">
  <td><?php echo CHtml::link('setApplication()', array('/site/doc', 'view' => 'YiiBase', '#' => 'setApplication-detail')); ?></td>
  <td>Stores the application instance in the class static member.</td>
  <td>YiiBase</td>
</tr>
<tr id="setLogger">
  <td><?php echo CHtml::link('setLogger()', array('/site/doc', 'view' => 'YiiBase', '#' => 'setLogger-detail')); ?></td>
  <td>Sets the logger object.</td>
  <td>YiiBase</td>
</tr>
<tr id="setPathOfAlias">
  <td><?php echo CHtml::link('setPathOfAlias()', array('/site/doc', 'view' => 'YiiBase', '#' => 'setPathOfAlias-detail')); ?></td>
  <td>Create a path alias.</td>
  <td>YiiBase</td>
</tr>
<tr id="t">
  <td><?php echo CHtml::link('t()', array('/site/doc', 'view' => 'YiiBase', '#' => 't-detail')); ?></td>
  <td>Translates a message to the specified language.</td>
  <td>YiiBase</td>
</tr>
<tr id="trace">
  <td><?php echo CHtml::link('trace()', array('/site/doc', 'view' => 'YiiBase', '#' => 'trace-detail')); ?></td>
  <td>Writes a trace message.</td>
  <td>YiiBase</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="classMap-detail">
classMap<span class="detailHeaderTag">
property
 (available since v1.1.5)
</span>
</div>

<div class="signature">
public static array <b>$classMap</b>;</div>

<p>class map used by the Yii autoloading mechanism.
The array keys are the class names and the array values are the corresponding class file paths.</p>


<div class="detailHeader" id="enableIncludePath-detail">
enableIncludePath<span class="detailHeaderTag">
property
 (available since v1.1.8)
</span>
</div>

<div class="signature">
public static boolean <b>$enableIncludePath</b>;</div>

<p>whether to rely on PHP include path to autoload class files. Defaults to true.
You may set this to be false if your hosting environment doesn't allow changing the PHP
include path, or if you want to append additional autoloaders to the default Yii autoloader.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="app-detail">
app()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static <?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?> <b>app</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
  <td class="paramDescCol">the application singleton, null if the singleton has not been created yet.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L132">yii\YiiBase.php#L132</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">app</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_app</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the application singleton or null if the singleton has not been created yet.</p>


<div class="detailHeader" id="autoload-detail">
autoload()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static boolean <b>autoload</b>(string $className)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">class name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the class has been loaded successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L397">yii\YiiBase.php#L397</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">autoload</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;use&nbsp;include&nbsp;so&nbsp;that&nbsp;the&nbsp;error&nbsp;PHP&nbsp;file&nbsp;may&nbsp;appear<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$classMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$classMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_coreClasses</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include(</span><span style="color: #0000BB">YII_PATH</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_coreClasses</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;include&nbsp;class&nbsp;file&nbsp;relying&nbsp;on&nbsp;include_path<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;class&nbsp;without&nbsp;namespace<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$enableIncludePath</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_includePaths&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$path</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$className</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include(</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">))!==</span><span style="color: #0000BB">$className</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Class&nbsp;name&nbsp;"{class}"&nbsp;does&nbsp;not&nbsp;match&nbsp;class&nbsp;file&nbsp;"{file}".'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{class}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$className</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include(</span><span style="color: #0000BB">$className</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;class&nbsp;name&nbsp;with&nbsp;namespace&nbsp;in&nbsp;PHP&nbsp;5.3<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$namespace</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">ltrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$path</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$namespace</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include(</span><span style="color: #0000BB">$path</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">interface_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Class autoload loader.
This method is provided to be invoked within an __autoload() magic method.</p>


<div class="detailHeader" id="beginProfile-detail">
beginProfile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>beginProfile</b>(string $token, string $category='application')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$token</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">token for the code block</td>
</tr>
<tr>
  <td class="paramNameCol">$category</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the category of this log message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L506">yii\YiiBase.php#L506</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">beginProfile</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">=</span><span style="color: #DD0000">'application'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #DD0000">'begin:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$token</span><span style="color: #007700">,</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_PROFILE</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Marks the beginning of a code block for profiling.
This has to be matched with a call to <?php echo CHtml::link('endProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'endProfile')); ?> with the same token.
The begin- and end- calls must also be properly nested, e.g.,
<pre>
Yii::beginProfile('block1');
Yii::beginProfile('block2');
Yii::endProfile('block2');
Yii::endProfile('block1');
</pre>
The following sequence is not valid:
<pre>
Yii::beginProfile('block1');
Yii::beginProfile('block2');
Yii::endProfile('block1');
Yii::endProfile('block2');
</pre></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('endProfile', array('/site/doc', 'view' => 'YiiBase', '#' => 'endProfile')); ?></li>
</ul>
</div>

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
  <td class="paramDescCol">application configuration. This parameter will be passed as the parameter
to the constructor of the application class.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the application instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L123">yii\YiiBase.php#L123</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates an application of the specified class.</p>


<div class="detailHeader" id="createComponent-detail">
createComponent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>createComponent</b>(mixed $config)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the configuration. It can be either a string or an array.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the created object</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L180">yii\YiiBase.php#L180</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">$config</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Object&nbsp;configuration&nbsp;must&nbsp;be&nbsp;an&nbsp;array&nbsp;containing&nbsp;a&nbsp;"class"&nbsp;element.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">func_num_args</span><span style="color: #007700">())&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$n</span><span style="color: #007700">===</span><span style="color: #0000BB">2</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$n</span><span style="color: #007700">===</span><span style="color: #0000BB">3</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$n</span><span style="color: #007700">===</span><span style="color: #0000BB">4</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">],</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Note:&nbsp;ReflectionClass::newInstanceArgs()&nbsp;is&nbsp;available&nbsp;for&nbsp;PHP&nbsp;5.1.3+<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;$object=$class-&gt;newInstanceArgs($args);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">=</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,</span><span style="color: #DD0000">'newInstance'</span><span style="color: #007700">),</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates an object and initializes it based on the given configuration.
<br/><br/>
The specified configuration can be either a string or an array.
If the former, the string is treated as the object type which can
be either the class name or <?php echo CHtml::link('class path alias', array('/site/doc', 'view' => 'YiiBase', '#' => 'getPathOfAlias')); ?>.
If the latter, the 'class' element is treated as the object type,
and the rest of the name-value pairs in the array are used to initialize
the corresponding object properties.
<br/><br/>
Any additional parameters passed to this method will be
passed to the constructor of the object being created.</p>


<div class="detailHeader" id="createConsoleApplication-detail">
createConsoleApplication()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static <?php echo CHtml::link('CConsoleApplication', array('/site/doc', 'view' => 'CConsoleApplication')); ?> <b>createConsoleApplication</b>(mixed $config=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">application configuration.
If a string, it is treated as the path of the file that contains the configuration;
If an array, it is the actual configuration information.
Please make sure you specify the <?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CApplication', '#' => 'basePath')); ?> property in the configuration,
which should point to the directory containing all application logic, template and data.
If not, the directory will be defaulted to 'protected'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleApplication', array('/site/doc', 'view' => 'CConsoleApplication')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L111">yii\YiiBase.php#L111</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createConsoleApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">createApplication</span><span style="color: #007700">(</span><span style="color: #DD0000">'CConsoleApplication'</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a console application instance.</p>


<div class="detailHeader" id="createWebApplication-detail">
createWebApplication()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static <?php echo CHtml::link('CWebApplication', array('/site/doc', 'view' => 'CWebApplication')); ?> <b>createWebApplication</b>(mixed $config=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">application configuration.
If a string, it is treated as the path of the file that contains the configuration;
If an array, it is the actual configuration information.
Please make sure you specify the <?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CApplication', '#' => 'basePath')); ?> property in the configuration,
which should point to the directory containing all application logic, template and data.
If not, the directory will be defaulted to 'protected'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebApplication', array('/site/doc', 'view' => 'CWebApplication')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L96">yii\YiiBase.php#L96</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createWebApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">createApplication</span><span style="color: #007700">(</span><span style="color: #DD0000">'CWebApplication'</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a Web application instance.</p>


<div class="detailHeader" id="endProfile-detail">
endProfile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>endProfile</b>(string $token, string $category='application')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$token</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">token for the code block</td>
</tr>
<tr>
  <td class="paramNameCol">$category</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the category of this log message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L518">yii\YiiBase.php#L518</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">endProfile</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">=</span><span style="color: #DD0000">'application'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #DD0000">'end:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$token</span><span style="color: #007700">,</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_PROFILE</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Marks the end of a code block for profiling.
This has to be matched with a previous call to <?php echo CHtml::link('beginProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'beginProfile')); ?> with the same token.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('beginProfile', array('/site/doc', 'view' => 'YiiBase', '#' => 'beginProfile')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getFrameworkPath-detail">
getFrameworkPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getFrameworkPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the path of the framework</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L158">yii\YiiBase.php#L158</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getFrameworkPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">YII_PATH</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getLogger-detail">
getLogger()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static <?php echo CHtml::link('CLogger', array('/site/doc', 'view' => 'CLogger')); ?> <b>getLogger</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CLogger', array('/site/doc', 'view' => 'CLogger')); ?></td>
  <td class="paramDescCol">message logger</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L526">yii\YiiBase.php#L526</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getLogger</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_logger</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_logger</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_logger</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPathOfAlias-detail">
getPathOfAlias()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>getPathOfAlias</b>(string $alias)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$alias</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">alias (e.g. system.web.CController)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">file path corresponding to the alias, false if the alias is invalid.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L358">yii\YiiBase.php#L358</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_aliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_aliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rootAlias</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_aliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$rootAlias</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_aliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_aliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$rootAlias</span><span style="color: #007700">].</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">,</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">)),</span><span style="color: #DD0000">'*'</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_app&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CWebApplication</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findModule</span><span style="color: #007700">(</span><span style="color: #0000BB">$rootAlias</span><span style="color: #007700">)!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Translates an alias into a file path.
Note, this method does not ensure the existence of the resulting file path.
It only checks if the root alias is valid or not.</p>


<div class="detailHeader" id="getVersion-detail">
getVersion()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getVersion</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the version of Yii framework</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L81">yii\YiiBase.php#L81</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getVersion</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'1.1.14'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="import-detail">
import()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>import</b>(string $alias, boolean $forceInclude=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$alias</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">path alias to be imported</td>
</tr>
<tr>
  <td class="paramNameCol">$forceInclude</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to include the class file immediately. If false, the class file
will be included only when the class is being used. This parameter is used only when
the path alias refers to a class.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the class name or the directory that this alias refers to</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L263">yii\YiiBase.php#L263</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">$forceInclude</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_imports</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;previously&nbsp;imported<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_imports</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">interface_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_imports</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;a&nbsp;class&nbsp;name&nbsp;in&nbsp;PHP&nbsp;5.3&nbsp;namespace&nbsp;format<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$namespace</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">ltrim</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">),</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$path</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$namespace</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$path</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">).</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$forceInclude</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require(</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Alias&nbsp;"{alias}"&nbsp;is&nbsp;invalid.&nbsp;Make&nbsp;sure&nbsp;it&nbsp;points&nbsp;to&nbsp;an&nbsp;existing&nbsp;PHP&nbsp;file&nbsp;and&nbsp;the&nbsp;file&nbsp;is&nbsp;readable.'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{alias}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_imports</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$classMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">$classFile</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;try&nbsp;to&nbsp;autoload&nbsp;the&nbsp;class&nbsp;with&nbsp;an&nbsp;autoloader<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_imports</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Alias&nbsp;"{alias}"&nbsp;is&nbsp;invalid.&nbsp;Make&nbsp;sure&nbsp;it&nbsp;points&nbsp;to&nbsp;an&nbsp;existing&nbsp;directory&nbsp;or&nbsp;file.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{alias}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$namespace</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;a&nbsp;simple&nbsp;class&nbsp;name<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$forceInclude&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">autoload</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_imports</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=(string)</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isClass</span><span style="color: #007700">=</span><span style="color: #0000BB">$className</span><span style="color: #007700">!==</span><span style="color: #DD0000">'*'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$isClass&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">interface_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_imports</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$path</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$isClass</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$forceInclude</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require(</span><span style="color: #0000BB">$path</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Alias&nbsp;"{alias}"&nbsp;is&nbsp;invalid.&nbsp;Make&nbsp;sure&nbsp;it&nbsp;points&nbsp;to&nbsp;an&nbsp;existing&nbsp;PHP&nbsp;file&nbsp;and&nbsp;the&nbsp;file&nbsp;is&nbsp;readable.'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{alias}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_imports</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$classMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]=</span><span style="color: #0000BB">$path</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;a&nbsp;directory<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_includePaths</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_includePaths</span><span style="color: #007700">=</span><span style="color: #0000BB">array_unique</span><span style="color: #007700">(</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #0000BB">PATH_SEPARATOR</span><span style="color: #007700">,</span><span style="color: #0000BB">get_include_path</span><span style="color: #007700">()));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">array_search</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_includePaths</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_includePaths</span><span style="color: #007700">[</span><span style="color: #0000BB">$pos</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_unshift</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_includePaths</span><span style="color: #007700">,</span><span style="color: #0000BB">$path</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$enableIncludePath&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">set_include_path</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">PATH_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">PATH_SEPARATOR</span><span style="color: #007700">,</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_includePaths</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$enableIncludePath</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_imports</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">$path</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Alias&nbsp;"{alias}"&nbsp;is&nbsp;invalid.&nbsp;Make&nbsp;sure&nbsp;it&nbsp;points&nbsp;to&nbsp;an&nbsp;existing&nbsp;directory&nbsp;or&nbsp;file.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{alias}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Imports a class or a directory.
<br/><br/>
Importing a class is like including the corresponding class file.
The main difference is that importing a class is much lighter because it only
includes the class file when the class is referenced the first time.
<br/><br/>
Importing a directory is equivalent to adding a directory into the PHP include path.
If multiple directories are imported, the directories imported later will take
precedence in class file searching (i.e., they are added to the front of the PHP include path).
<br/><br/>
Path aliases are used to import a class or directory. For example,
<ul>
  <li><code>application.components.GoogleMap</code>: import the <code>GoogleMap</code> class.</li>
  <li><code>application.components.*</code>: import the <code>components</code> directory.</li>
</ul>
<br/><br/>
The same path alias can be imported multiple times, but only the first time is effective.
Importing a directory does not import any of its subdirectories.
<br/><br/>
Starting from version 1.1.5, this method can also be used to import a class in namespace format
(available for PHP 5.3 or above only). It is similar to importing a class in path alias format,
except that the dot separator is replaced by the backslash separator. For example, importing
<code>application\components\GoogleMap</code> is similar to importing <code>application.components.GoogleMap</code>.
The difference is that the former class is using qualified name, while the latter unqualified.
<br/><br/>
Note, importing a class in namespace format requires that the namespace corresponds to
a valid path alias once backslash characters are replaced with dot characters.
For example, the namespace <code>application\components</code> must correspond to a valid
path alias <code>application.components</code>.</p>


<div class="detailHeader" id="log-detail">
log()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>log</b>(string $msg, string $level='info', string $category='application')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$msg</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">message to be logged</td>
</tr>
<tr>
  <td class="paramNameCol">$level</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">level of the message (e.g. 'trace', 'warning', 'error'). It is case-insensitive.</td>
</tr>
<tr>
  <td class="paramNameCol">$category</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">category of the message (e.g. 'system.web'). It is case-insensitive.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L464">yii\YiiBase.php#L464</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">=</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_INFO</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">=</span><span style="color: #DD0000">'application'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_logger</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_logger</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">YII_TRACE_LEVEL</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$level</span><span style="color: #007700">!==</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_PROFILE</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$traces</span><span style="color: #007700">=</span><span style="color: #0000BB">debug_backtrace</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$traces&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">],</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">],</span><span style="color: #0000BB">YII_PATH</span><span style="color: #007700">)!==</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$msg</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\nin&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">].</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">].</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(++</span><span style="color: #0000BB">$count</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">YII_TRACE_LEVEL</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_logger</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Logs a message.
Messages logged by this method may be retrieved via <?php echo CHtml::link('CLogger::getLogs', array('/site/doc', 'view' => 'CLogger', '#' => 'getLogs')); ?>
and may be recorded in different media, such as file, email, database, using
<?php echo CHtml::link('CLogRouter', array('/site/doc', 'view' => 'CLogRouter')); ?>.</p>


<div class="detailHeader" id="powered-detail">
powered()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>powered</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a string that can be displayed on your Web page showing Powered-by-Yii information</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L548">yii\YiiBase.php#L548</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">powered</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Powered&nbsp;by&nbsp;{yii}.'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'{yii}'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'&lt;a&nbsp;href="http://www.yiiframework.com/"&nbsp;rel="external"&gt;Yii&nbsp;Framework&lt;/a&gt;'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Returns a string that can be displayed on your Web page showing Powered-by-Yii information</p>


<div class="detailHeader" id="registerAutoloader-detail">
registerAutoloader()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>registerAutoloader</b>(callback $callback, boolean $append=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$callback</td>
  <td class="paramTypeCol">callback</td>
  <td class="paramDescCol">a valid PHP callback (function name or array($className,$methodName)).</td>
</tr>
<tr>
  <td class="paramNameCol">$append</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to append the new autoloader after the default Yii autoloader.
Be careful using this option as it will disable <?php echo CHtml::link('autoloading via include path', array('/site/doc', 'view' => 'YiiBase', '#' => 'enableIncludePath')); ?>
when set to true. After this the Yii autoloader can not rely on loading classes via simple include anymore
and you have to <?php echo CHtml::link('import', array('/site/doc', 'view' => 'YiiBase', '#' => 'import')); ?> all classes explicitly.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L625">yii\YiiBase.php#L625</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">registerAutoloader</span><span style="color: #007700">(</span><span style="color: #0000BB">$callback</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$append</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$append</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$enableIncludePath</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">spl_autoload_register</span><span style="color: #007700">(</span><span style="color: #0000BB">$callback</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">spl_autoload_unregister</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'YiiBase'</span><span style="color: #007700">,</span><span style="color: #DD0000">'autoload'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">spl_autoload_register</span><span style="color: #007700">(</span><span style="color: #0000BB">$callback</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">spl_autoload_register</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'YiiBase'</span><span style="color: #007700">,</span><span style="color: #DD0000">'autoload'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Registers a new class autoloader.
The new autoloader will be placed before <?php echo CHtml::link('autoload', array('/site/doc', 'view' => 'YiiBase', '#' => 'autoload')); ?> and after
any other existing autoloaders.</p>


<div class="detailHeader" id="setApplication-detail">
setApplication()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>setApplication</b>(<?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?> $app)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$app</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?></td>
  <td class="paramDescCol">the application instance. If this is null, the existing
application singleton will be removed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L147">yii\YiiBase.php#L147</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">setApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$app</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_app</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_app</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Yii&nbsp;application&nbsp;can&nbsp;only&nbsp;be&nbsp;created&nbsp;once.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Stores the application instance in the class static member.
This method helps implement a singleton pattern for CApplication.
Repeated invocation of this method or the CApplication constructor
will cause the throw of an exception.
To retrieve the application instance, use <?php echo CHtml::link('app()', array('/site/doc', 'view' => 'YiiBase', '#' => 'app')); ?>.</p>


<div class="detailHeader" id="setLogger-detail">
setLogger()
<span class="detailHeaderTag">
method
(available since v1.1.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>setLogger</b>(<?php echo CHtml::link('CLogger', array('/site/doc', 'view' => 'CLogger')); ?> $logger)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$logger</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CLogger', array('/site/doc', 'view' => 'CLogger')); ?></td>
  <td class="paramDescCol">the logger object.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L539">yii\YiiBase.php#L539</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">setLogger</span><span style="color: #007700">(</span><span style="color: #0000BB">$logger</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_logger</span><span style="color: #007700">=</span><span style="color: #0000BB">$logger</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the logger object.</p>


<div class="detailHeader" id="setPathOfAlias-detail">
setPathOfAlias()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>setPathOfAlias</b>(string $alias, string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$alias</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">alias to the path</td>
</tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the path corresponding to the alias. If this is null, the corresponding
path alias will be removed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L383">yii\YiiBase.php#L383</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">setPathOfAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">,</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_aliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_aliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #DD0000">'\\/'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Create a path alias.
Note, this method neither checks the existence of the path nor normalizes the path.</p>


<div class="detailHeader" id="t-detail">
t()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>t</b>(string $category, string $message, array $params=array (
), string $source=NULL, string $language=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$category</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">message category. Please use only word letters. Note, category 'yii' is
reserved for Yii framework core code use. See <?php echo CHtml::link('CPhpMessageSource', array('/site/doc', 'view' => 'CPhpMessageSource')); ?> for
more interpretation about message category.</td>
</tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the original message</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters to be applied to the message using <code>strtr</code>.
The first parameter can be a number without key.
And in this case, the method will call <?php echo CHtml::link('CChoiceFormat::format', array('/site/doc', 'view' => 'CChoiceFormat', '#' => 'format')); ?> to choose
an appropriate message translation.
Starting from version 1.1.6 you can pass parameter for <?php echo CHtml::link('CChoiceFormat::format', array('/site/doc', 'view' => 'CChoiceFormat', '#' => 'format')); ?>
or plural forms format without wrapping it with array.
This parameter is then available as <code>{n}</code> in the message translation string.</td>
</tr>
<tr>
  <td class="paramNameCol">$source</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">which message source application component to use.
Defaults to null, meaning using 'coreMessages' for messages belonging to
the 'yii' category and using 'messages' for the rest messages.</td>
</tr>
<tr>
  <td class="paramNameCol">$language</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the target language. If null (default), the <?php echo CHtml::link('application language', array('/site/doc', 'view' => 'CApplication', '#' => 'getLanguage')); ?> will be used.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the translated message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L577">yii\YiiBase.php#L577</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$source</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_app</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$source</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$source</span><span style="color: #007700">=(</span><span style="color: #0000BB">$category</span><span style="color: #007700">===</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">||</span><span style="color: #0000BB">$category</span><span style="color: #007700">===</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">)?</span><span style="color: #DD0000">'coreMessages'</span><span style="color: #007700">:</span><span style="color: #DD0000">'messages'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$source</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$source</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">translate</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$params</span><span style="color: #007700">===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]))&nbsp;</span><span style="color: #FF8000">//&nbsp;number&nbsp;choice<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #DD0000">'|'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #DD0000">'#'</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chunks</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'|'</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expressions</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocale</span><span style="color: #007700">(</span><span style="color: #0000BB">$language</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">getPluralRules</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$chunks</span><span style="color: #007700">),</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$expressions</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chunks</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$expressions</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">].</span><span style="color: #DD0000">'#'</span><span style="color: #007700">.</span><span style="color: #0000BB">$chunks</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'|'</span><span style="color: #007700">,</span><span style="color: #0000BB">$chunks</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">CChoiceFormat</span><span style="color: #007700">::</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'{n}'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'{n}'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">!==array()&nbsp;?&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Translates a message to the specified language.
This method supports choice format (see <?php echo CHtml::link('CChoiceFormat', array('/site/doc', 'view' => 'CChoiceFormat')); ?>),
i.e., the message returned will be chosen from a few candidates according to the given
number value. This feature is mainly used to solve plural format issue in case
a message has different plural forms in some languages.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></li>
</ul>
</div>

<div class="detailHeader" id="trace-detail">
trace()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>trace</b>(string $msg, string $category='application')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$msg</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">message to be logged</td>
</tr>
<tr>
  <td class="paramNameCol">$category</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">category of the message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\YiiBase.php#L449">yii\YiiBase.php#L449</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">=</span><span style="color: #DD0000">'application'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">,</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_TRACE</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Writes a trace message.
This method will only log a message when the application is in debug mode.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('log', array('/site/doc', 'view' => 'YiiBase', '#' => 'log')); ?></li>
</ul>
</div>

