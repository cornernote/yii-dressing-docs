<?php
$this->pageTitle = $this->pageHeading = 'Yii';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'Yii';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a></div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>Inheritance</th>
  <td>class Yii &raquo;
<?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?> &raquo;
<?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td>app\yii.php</td>
</tr>
</table>

<div id="classDescription">
Yii is a helper class serving common framework functionalities.
<br/><br/>
It encapsulates <?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?> which provides the actual implementation.
By writing your own Yii class, you can customize some functionalities of YdBase.</div>
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
<tr id="app">
  <td><?php echo CHtml::link('app()', array('/site/doc', 'view' => 'Yii', '#' => 'app-detail')); ?></td>
  <td></td>
  <td>Yii</td>
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
<tr class="inherited" id="createApplication">
  <td><?php echo CHtml::link('createApplication()', array('/site/doc', 'view' => 'YdBase', '#' => 'createApplication-detail')); ?></td>
  <td>Starts an Audit before returning an Application.</td>
  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
</tr>
<tr class="inherited" id="createComponent">
  <td><?php echo CHtml::link('createComponent()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createComponent-detail')); ?></td>
  <td>Creates an object and initializes it based on the given configuration.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="createConsoleApplication">
  <td><?php echo CHtml::link('createConsoleApplication()', array('/site/doc', 'view' => 'YdBase', '#' => 'createConsoleApplication-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
</tr>
<tr class="inherited" id="createWebApplication">
  <td><?php echo CHtml::link('createWebApplication()', array('/site/doc', 'view' => 'YdBase', '#' => 'createWebApplication-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
</tr>
<tr class="inherited" id="endProfile">
  <td><?php echo CHtml::link('endProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'endProfile-detail')); ?></td>
  <td>Marks the end of a code block for profiling.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="getCommandMap">
  <td><?php echo CHtml::link('getCommandMap()', array('/site/doc', 'view' => 'YdBase', '#' => 'getCommandMap-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
</tr>
<tr class="inherited" id="getComponentsConfig">
  <td><?php echo CHtml::link('getComponentsConfig()', array('/site/doc', 'view' => 'YdBase', '#' => 'getComponentsConfig-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
</tr>
<tr class="inherited" id="getControllerMap">
  <td><?php echo CHtml::link('getControllerMap()', array('/site/doc', 'view' => 'YdBase', '#' => 'getControllerMap-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
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
<tr class="inherited" id="getModulesConfig">
  <td><?php echo CHtml::link('getModulesConfig()', array('/site/doc', 'view' => 'YdBase', '#' => 'getModulesConfig-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
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
<tr class="inherited" id="loadConfig">
  <td><?php echo CHtml::link('loadConfig()', array('/site/doc', 'view' => 'YdBase', '#' => 'loadConfig-detail')); ?></td>
  <td>Config can be a string, in which case a file and optional local file override are loaded.</td>
  <td><?php echo CHtml::link('YdBase', array('/site/doc', 'view' => 'YdBase')); ?></td>
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

<div class="detailHeader" id="app-detail">
app()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static Application <b>app</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">Application</td>
  <td class="paramDescCol">this method exists so phpStorm will code complete correctly for Yii::app().</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> app\yii.php#L16 (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">app</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


