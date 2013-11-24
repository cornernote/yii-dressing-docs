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
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/YdBase.php">dressing/YdBase.php</a></td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/YdBase.php#L98">dressing/YdBase.php#L98</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">createApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getConfig</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">loadConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">)));<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/YdBase.php#L150">dressing/YdBase.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createConsoleApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">YII_DRESSING_CLI</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'This&nbsp;script&nbsp;can&nbsp;only&nbsp;run&nbsp;from&nbsp;a&nbsp;CLI.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;load&nbsp;the&nbsp;config&nbsp;array<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">loadConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;remove&nbsp;incompatibale&nbsp;items<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;do&nbsp;not&nbsp;use&nbsp;isset()&nbsp;to&nbsp;check,&nbsp;as&nbsp;it&nbsp;will&nbsp;return&nbsp;false&nbsp;if&nbsp;the&nbsp;key&nbsp;is&nbsp;set&nbsp;to&nbsp;null<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">unset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'theme'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'controllerMap'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;remove&nbsp;things&nbsp;from&nbsp;preload<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'preload'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$excludeConsolePreloads&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'bootstrap'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'preload'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$preload</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$preload</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$excludeConsolePreloads</span><span style="color: #007700">))&nbsp;unset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'preload'</span><span style="color: #007700">][</span><span style="color: #0000BB">$k</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;command&nbsp;map<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'commandMap'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'commandMap'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'commandMap'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getCommandMap</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'commandMap'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;create&nbsp;app<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">createApplication</span><span style="color: #007700">(</span><span style="color: #DD0000">'CConsoleApplication'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;fix&nbsp;for&nbsp;absolute&nbsp;url<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">setBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">PUBLIC_URL</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;Yii&nbsp;commands<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commandRunner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCommands</span><span style="color: #007700">(</span><span style="color: #0000BB">YII_PATH&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/cli/commands'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$env&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">getenv</span><span style="color: #007700">(</span><span style="color: #DD0000">'YII_CONSOLE_COMMANDS'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$env</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commandRunner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCommands</span><span style="color: #007700">(</span><span style="color: #0000BB">$env</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/YdBase.php#L110">dressing/YdBase.php#L110</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createWebApplication</span><span style="color: #007700">(</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">YII_DRESSING_CLI</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'This&nbsp;script&nbsp;cannot&nbsp;be&nbsp;run&nbsp;from&nbsp;a&nbsp;CLI.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;load&nbsp;the&nbsp;config&nbsp;array<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">loadConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;controller&nbsp;map<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'controllerMap'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'controllerMap'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'controllerMap'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getControllerMap</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'controllerMap'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;remove&nbsp;incompatibale&nbsp;items<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;do&nbsp;not&nbsp;use&nbsp;isset()&nbsp;to&nbsp;check,&nbsp;as&nbsp;it&nbsp;will&nbsp;return&nbsp;false&nbsp;if&nbsp;the&nbsp;key&nbsp;is&nbsp;set&nbsp;to&nbsp;null<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">unset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'commandMap'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;log&nbsp;routes&nbsp;(only&nbsp;setup&nbsp;if&nbsp;not&nbsp;already&nbsp;defined)<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'components'</span><span style="color: #007700">][</span><span style="color: #DD0000">'log'</span><span style="color: #007700">][</span><span style="color: #DD0000">'routes'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'components'</span><span style="color: #007700">][</span><span style="color: #DD0000">'log'</span><span style="color: #007700">][</span><span style="color: #DD0000">'routes'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'components'</span><span style="color: #007700">][</span><span style="color: #DD0000">'log'</span><span style="color: #007700">][</span><span style="color: #DD0000">'routes'</span><span style="color: #007700">][]&nbsp;=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">YII_DEBUG&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'CWebLogRoute'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'CFileLogRoute'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'levels'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">YII_DRESSING_LOG_LEVELS</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">YII_DEBUG_TOOLBAR</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'components'</span><span style="color: #007700">][</span><span style="color: #DD0000">'log'</span><span style="color: #007700">][</span><span style="color: #DD0000">'routes'</span><span style="color: #007700">][]&nbsp;=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'vendor.malyshev.yii-debug-toolbar.yii-debug-toolbar.YiiDebugToolbarRoute'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'levels'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'profile'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">createApplication</span><span style="color: #007700">(</span><span style="color: #DD0000">'CWebApplication'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/YdBase.php#L357">dressing/YdBase.php#L357</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getCommandMap</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$commands&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'migrate'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'system.cli.commands.MigrateCommand'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'migrationPath'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'application.migrations'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'migrationTable'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'migration'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'connectionID'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'db'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'templateFile'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.migrations.templates.migrate_template'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'emailSpool'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.commands.YdEmailSpoolCommand'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorEmail'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.commands.YdErrorEmailCommand'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;unset&nbsp;commands&nbsp;that&nbsp;app&nbsp;has&nbsp;defined<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$commands</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">APP_PATH&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DS&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'commands'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DS&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'Command.php'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$commands</span><span style="color: #007700">[</span><span style="color: #0000BB">$command</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$commands</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/YdBase.php#L213">dressing/YdBase.php#L213</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getConfig</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'components'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dressing'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.YdDressing'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorHandler'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.components.YdErrorHandler'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorAction'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'site/error'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fatalErrorCatch'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.components.YdFatalErrorCatch'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'user'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.components.YdWebUser'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'allowAutoLogin'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'loginUrl'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'/account/login'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'returnUrl'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.components.YdReturnUrl'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bootstrap'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bootstrap.components.Bootstrap'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fontAwesomeCss'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'urlManager'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'urlFormat'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'r'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #DD0000">'get'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'path'</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;allow&nbsp;filters&nbsp;in&nbsp;audit/index&nbsp;work<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'showScriptName'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cacheFile'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'CFileCache'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cacheDb'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'CDbCache'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cacheApc'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'CApcCache'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'log'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'CLogRouter'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'clientScript'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'YdClientScript'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'session'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'CCacheHttpSession'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cacheID'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'cacheApc'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'email'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.components.YdEmail'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'swiftMailer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.components.YdSwiftMailer'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'auditTracker'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.components.YdAuditTracker'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'widgetFactory'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'widgets'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'TbMenu'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'activateParents'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'TbCKEditor'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'editorOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'toolbar_Full'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'document'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Source'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Save'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'NewPage'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'DocProps'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Preview'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Print'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Templates'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'clipboard'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Cut'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Copy'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Paste'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'PasteText'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'PasteFromWord'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Undo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Redo'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'editing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Find'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Replace'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'SelectAll'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'SpellChecker'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Scayt'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'forms'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Form'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Checkbox'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Radio'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'TextField'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Textarea'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Select'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'ImageButton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'HiddenField'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'basicstyles'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Bold'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Italic'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Underline'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Strike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Subscript'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Superscript'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'RemoveFormat'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'paragraph'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'NumberedList'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'BulletedList'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Outdent'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Indent'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Blockquote'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'CreateDiv'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'JustifyLeft'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'JustifyCenter'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'JustifyRight'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'JustifyBlock'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'BidiLtr'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'BidiRtl'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'links'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Unlink'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Anchor'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'insert'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Image'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Flash'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'HorizontalRule'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Smiley'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'SpecialChar'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'PageBreak'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Iframe'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'styles'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Styles'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Format'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Font'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'FontSize'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'colors'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'TextColor'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'BGColor'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'tools'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Maximize'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'ShowBlocks'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'About'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'toolbar_Basic'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'Bold'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Italic'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'NumberedList'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'BulletedList'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Unlink'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'About'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'toolbar_DressingFull'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'tools'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Source'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Maximize'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'ShowBlocks'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'clipboard'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Cut'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Copy'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Paste'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'PasteText'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'PasteFromWord'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Undo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Redo'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'basicstyles'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Bold'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Italic'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Underline'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Strike'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Subscript'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Superscript'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'RemoveFormat'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'paragraph'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'NumberedList'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'BulletedList'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Outdent'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Indent'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Blockquote'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'CreateDiv'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'JustifyLeft'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'JustifyCenter'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'JustifyRight'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'JustifyBlock'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'links'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Unlink'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Anchor'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'insert'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Image'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'HorizontalRule'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'SpecialChar'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'styles'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'Format'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'toolbar_DressingBasic'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'Bold'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Italic'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'NumberedList'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'BulletedList'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Unlink'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'toolbar'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'DressingFull'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">YII_DEBUG&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">YII_DRESSING_CLI&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'modules'</span><span style="color: #007700">][</span><span style="color: #DD0000">'gii'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'modules'</span><span style="color: #007700">][</span><span style="color: #DD0000">'gii'</span><span style="color: #007700">]&nbsp;=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'system.gii.GiiModule'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'generatorPaths'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dressing.gii'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'ipFilters'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/YdBase.php#L329">dressing/YdBase.php#L329</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getControllerMap</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controllers&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'account'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdAccountController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attachment'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdAttachmentController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'audit'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdAuditController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'auditTrail'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdAuditTrailController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'contactUs'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdContactUsController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'emailSpool'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdEmailSpoolController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'emailTemplate'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdEmailTemplateController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'error'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdErrorController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lookup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdLookupController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'siteMenu'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdSiteMenuController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdRoleController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'setting'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdSettingController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'user'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dressing.controllers.YdUserController'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;unset&nbsp;controllers&nbsp;that&nbsp;app&nbsp;has&nbsp;defined<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$controllers</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">APP_PATH&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DS&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'controllers'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DS&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'Controller.php'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$controllers</span><span style="color: #007700">[</span><span style="color: #0000BB">$controller</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$controllers</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/YdBase.php#L196">dressing/YdBase.php#L196</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">loadConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$local&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">4</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'.local.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$local</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$local&nbsp;</span><span style="color: #007700">=&nbsp;require(</span><span style="color: #0000BB">$local</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$local</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(require(</span><span style="color: #0000BB">$config</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$local</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;require(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Config can be a string, in which case a file and optional local file override are loaded.
The files should return arrays.</p>


