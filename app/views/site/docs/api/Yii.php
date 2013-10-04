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
  <th>Package</th>
  <td><?php echo CHtml::link('system', array('/site/doc', '#' => 'system')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class Yii &raquo;
<?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/yii.php">yii/yii.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Yii is a helper class serving common framework functionalities.
<br/><br/>
It encapsulates <?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?> which provides the actual implementation.
By writing your own Yii class, you can customize some functionalities of YiiBase.</div>
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
<tr class="inherited" id="createApplication">
  <td><?php echo CHtml::link('createApplication()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createApplication-detail')); ?></td>
  <td>Creates an application of the specified class.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="createComponent">
  <td><?php echo CHtml::link('createComponent()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createComponent-detail')); ?></td>
  <td>Creates an object and initializes it based on the given configuration.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="createConsoleApplication">
  <td><?php echo CHtml::link('createConsoleApplication()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createConsoleApplication-detail')); ?></td>
  <td>Creates a console application instance.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="createWebApplication">
  <td><?php echo CHtml::link('createWebApplication()', array('/site/doc', 'view' => 'YiiBase', '#' => 'createWebApplication-detail')); ?></td>
  <td>Creates a Web application instance.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
</tr>
<tr class="inherited" id="endProfile">
  <td><?php echo CHtml::link('endProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'endProfile-detail')); ?></td>
  <td>Marks the end of a code block for profiling.</td>
  <td><?php echo CHtml::link('YiiBase', array('/site/doc', 'view' => 'YiiBase')); ?></td>
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

