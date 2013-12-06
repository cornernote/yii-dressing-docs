<?php
$this->pageTitle = $this->pageHeading = 'CDirectoryCacheDependency';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDirectoryCacheDependency';
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
  <td><?php echo CHtml::link('system.caching.dependencies', array('/site/doc', '#' => 'system.caching.dependencies')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CDirectoryCacheDependency &raquo;
<?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('ICacheDependency', array('/site/doc', 'view' => 'ICacheDependency')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/dependencies/CDirectoryCacheDependency.php">yii/caching/dependencies/CDirectoryCacheDependency.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDirectoryCacheDependency represents a dependency based on change of a directory.
<br/><br/>
CDirectoryCacheDependency performs dependency checking based on the
modification time of the files contained in the specified directory.
The directory being checked is specified via <?php echo CHtml::link('directory', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'directory')); ?>.
<br/><br/>
By default, all files under the specified directory and subdirectories
will be checked. If the last modification time of any of them is changed
or if different number of files are contained in a directory, the dependency
is reported as changed. By specifying <?php echo CHtml::link('recursiveLevel', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'recursiveLevel')); ?>,
one can limit the checking to a certain depth of the directory.
<br/><br/>
Note, dependency checking for a directory is expensive because it involves
accessing modification time of multiple files under the directory.</div>
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
<tr class="inherited" id="dependentData">
  <td><?php echo CHtml::link('dependentData', array('/site/doc', 'view' => 'CCacheDependency', '#' => 'dependentData-detail')); ?></td>
  <td>mixed</td>
  <td>the data used to determine if dependency has been changed.</td>
  <td><?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?></td>
</tr>
<tr id="directory">
  <td><?php echo CHtml::link('directory', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'directory-detail')); ?></td>
  <td>string</td>
  <td>the directory whose change is used to determine if the dependency has been changed.</td>
  <td>CDirectoryCacheDependency</td>
</tr>
<tr class="inherited" id="hasChanged">
  <td><?php echo CHtml::link('hasChanged', array('/site/doc', 'view' => 'CCacheDependency', '#' => 'hasChanged-detail')); ?></td>
  <td>boolean</td>
  <td>whether the dependency has changed.</td>
  <td><?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?></td>
</tr>
<tr id="namePattern">
  <td><?php echo CHtml::link('namePattern', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'namePattern-detail')); ?></td>
  <td>string</td>
  <td>the regular expression matching valid file/directory names.</td>
  <td>CDirectoryCacheDependency</td>
</tr>
<tr id="recursiveLevel">
  <td><?php echo CHtml::link('recursiveLevel', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'recursiveLevel-detail')); ?></td>
  <td>integer</td>
  <td>the depth of the subdirectories to be recursively checked.</td>
  <td>CDirectoryCacheDependency</td>
</tr>
<tr class="inherited" id="reuseDependentData">
  <td><?php echo CHtml::link('reuseDependentData', array('/site/doc', 'view' => 'CCacheDependency', '#' => 'reuseDependentData-detail')); ?></td>
  <td>boolean</td>
  <td>Whether this dependency is reusable or not.</td>
  <td><?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?></td>
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
<tr class="inherited" id="__call">
  <td><?php echo CHtml::link('__call()', array('/site/doc', 'view' => 'CComponent', '#' => '__call-detail')); ?></td>
  <td>Calls the named method which is not a class method.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CDirectoryCacheDependency</td>
</tr>
<tr class="inherited" id="__get">
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CComponent', '#' => '__get-detail')); ?></td>
  <td>Returns a property value, an event handler list or a behavior based on its name.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CComponent', '#' => '__isset-detail')); ?></td>
  <td>Checks if a property value is null.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__set">
  <td><?php echo CHtml::link('__set()', array('/site/doc', 'view' => 'CComponent', '#' => '__set-detail')); ?></td>
  <td>Sets value of a component property.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__unset">
  <td><?php echo CHtml::link('__unset()', array('/site/doc', 'view' => 'CComponent', '#' => '__unset-detail')); ?></td>
  <td>Sets a component property to be null.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="asa">
  <td><?php echo CHtml::link('asa()', array('/site/doc', 'view' => 'CComponent', '#' => 'asa-detail')); ?></td>
  <td>Returns the named behavior object.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attachBehavior">
  <td><?php echo CHtml::link('attachBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'attachBehavior-detail')); ?></td>
  <td>Attaches a behavior to this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attachBehaviors">
  <td><?php echo CHtml::link('attachBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'attachBehaviors-detail')); ?></td>
  <td>Attaches a list of behaviors to the component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attachEventHandler">
  <td><?php echo CHtml::link('attachEventHandler()', array('/site/doc', 'view' => 'CComponent', '#' => 'attachEventHandler-detail')); ?></td>
  <td>Attaches an event handler to an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="canGetProperty">
  <td><?php echo CHtml::link('canGetProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'canGetProperty-detail')); ?></td>
  <td>Determines whether a property can be read.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="canSetProperty">
  <td><?php echo CHtml::link('canSetProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'canSetProperty-detail')); ?></td>
  <td>Determines whether a property can be set.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="detachBehavior">
  <td><?php echo CHtml::link('detachBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'detachBehavior-detail')); ?></td>
  <td>Detaches a behavior from the component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="detachBehaviors">
  <td><?php echo CHtml::link('detachBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'detachBehaviors-detail')); ?></td>
  <td>Detaches all behaviors from the component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="detachEventHandler">
  <td><?php echo CHtml::link('detachEventHandler()', array('/site/doc', 'view' => 'CComponent', '#' => 'detachEventHandler-detail')); ?></td>
  <td>Detaches an existing event handler.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="disableBehavior">
  <td><?php echo CHtml::link('disableBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'disableBehavior-detail')); ?></td>
  <td>Disables an attached behavior.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="disableBehaviors">
  <td><?php echo CHtml::link('disableBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'disableBehaviors-detail')); ?></td>
  <td>Disables all behaviors attached to this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="enableBehavior">
  <td><?php echo CHtml::link('enableBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'enableBehavior-detail')); ?></td>
  <td>Enables an attached behavior.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="enableBehaviors">
  <td><?php echo CHtml::link('enableBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'enableBehaviors-detail')); ?></td>
  <td>Enables all behaviors attached to this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="evaluateDependency">
  <td><?php echo CHtml::link('evaluateDependency()', array('/site/doc', 'view' => 'CCacheDependency', '#' => 'evaluateDependency-detail')); ?></td>
  <td>Evaluates the dependency by generating and saving the data related with dependency.</td>
  <td><?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?></td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getDependentData">
  <td><?php echo CHtml::link('getDependentData()', array('/site/doc', 'view' => 'CCacheDependency', '#' => 'getDependentData-detail')); ?></td>
  <td>Returns the data used to determine if dependency has been changed.
This data is available after <?php echo CHtml::link('evaluateDependency', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'evaluateDependency')); ?> is called.</td>
  <td><?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getHasChanged">
  <td><?php echo CHtml::link('getHasChanged()', array('/site/doc', 'view' => 'CCacheDependency', '#' => 'getHasChanged-detail')); ?></td>
  <td>Returns whether the dependency has changed.</td>
  <td><?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?></td>
</tr>
<tr class="inherited" id="hasEvent">
  <td><?php echo CHtml::link('hasEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasEvent-detail')); ?></td>
  <td>Determines whether an event is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="hasEventHandler">
  <td><?php echo CHtml::link('hasEventHandler()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasEventHandler-detail')); ?></td>
  <td>Checks whether the named event has attached handlers.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="hasProperty">
  <td><?php echo CHtml::link('hasProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasProperty-detail')); ?></td>
  <td>Determines whether a property is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="resetReusableData">
  <td><?php echo CHtml::link('resetReusableData()', array('/site/doc', 'view' => 'CCacheDependency', '#' => 'resetReusableData-detail')); ?></td>
  <td>Resets cached data for reusable dependencies.</td>
  <td><?php echo CHtml::link('CCacheDependency', array('/site/doc', 'view' => 'CCacheDependency')); ?></td>
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
<tr id="generateDependentData">
  <td><?php echo CHtml::link('generateDependentData()', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'generateDependentData-detail')); ?></td>
  <td>Generates the data needed to determine if dependency has been changed.</td>
  <td>CDirectoryCacheDependency</td>
</tr>
<tr id="generateTimestamps">
  <td><?php echo CHtml::link('generateTimestamps()', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'generateTimestamps-detail')); ?></td>
  <td>Determines the last modification time for files under the directory.</td>
  <td>CDirectoryCacheDependency</td>
</tr>
<tr id="validateDirectory">
  <td><?php echo CHtml::link('validateDirectory()', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'validateDirectory-detail')); ?></td>
  <td>Checks to see if the specified subdirectory should be checked for dependency.</td>
  <td>CDirectoryCacheDependency</td>
</tr>
<tr id="validateFile">
  <td><?php echo CHtml::link('validateFile()', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'validateFile-detail')); ?></td>
  <td>Checks to see if the file should be checked for dependency.</td>
  <td>CDirectoryCacheDependency</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="directory-detail">
directory<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$directory</b>;</div>

<p>the directory whose change is used to determine if the dependency has been changed.
If any of the files under the directory is changed, the dependency is considered as changed.</p>


<div class="detailHeader" id="namePattern-detail">
namePattern<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$namePattern</b>;</div>

<p>the regular expression matching valid file/directory names.
Only the matching files or directories will be checked for changes.
Defaults to null, meaning all files/directories will qualify.</p>


<div class="detailHeader" id="recursiveLevel-detail">
recursiveLevel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$recursiveLevel</b>;</div>

<p>the depth of the subdirectories to be recursively checked.
If the value is less than 0, it means unlimited depth.
If the value is 0, it means checking the files directly under the specified directory.</p>


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
public void <b>__construct</b>(string $directory=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$directory</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory to be checked</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/dependencies/CDirectoryCacheDependency.php#L55">yii/caching/dependencies/CDirectoryCacheDependency.php#L55</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">directory</span><span style="color: #007700">=</span><span style="color: #0000BB">$directory</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="generateDependentData-detail">
generateDependentData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>generateDependentData</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the data needed to determine if dependency has been changed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/dependencies/CDirectoryCacheDependency.php#L66">yii/caching/dependencies/CDirectoryCacheDependency.php#L66</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">generateDependentData</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">directory</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateTimestamps</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">directory</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDirectoryCacheDependency.directory&nbsp;cannot&nbsp;be&nbsp;empty.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Generates the data needed to determine if dependency has been changed.
This method returns the modification timestamps for files under the directory.</p>


<div class="detailHeader" id="generateTimestamps-detail">
generateTimestamps()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>generateTimestamps</b>(string $directory, integer $level=0)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$directory</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory name</td>
</tr>
<tr>
  <td class="paramNameCol">$level</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">level of the recursion</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of file modification time indexed by the file path</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/dependencies/CDirectoryCacheDependency.php#L82">yii/caching/dependencies/CDirectoryCacheDependency.php#L82</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">generateTimestamps</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$dir</span><span style="color: #007700">=@</span><span style="color: #0000BB">opendir</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$directory</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$timestamps</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;while((</span><span style="color: #0000BB">$file</span><span style="color: #007700">=</span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$path</span><span style="color: #007700">=</span><span style="color: #0000BB">$directory</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$file</span><span style="color: #007700">===</span><span style="color: #DD0000">'.'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">===</span><span style="color: #DD0000">'..'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">namePattern</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">namePattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$timestamps</span><span style="color: #007700">[</span><span style="color: #0000BB">$path</span><span style="color: #007700">]=</span><span style="color: #0000BB">filemtime</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recursiveLevel</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$level</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recursiveLevel</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$timestamps</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$timestamps</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateTimestamps</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">closedir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$timestamps</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Determines the last modification time for files under the directory.
This method may go recursively into subdirectories if <?php echo CHtml::link('recursiveLevel', array('/site/doc', 'view' => 'CDirectoryCacheDependency', '#' => 'recursiveLevel')); ?> is not 0.</p>


<div class="detailHeader" id="validateDirectory-detail">
validateDirectory()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>validateDirectory</b>(string $directory)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$directory</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the subdirectory that may be checked for dependency.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this subdirectory should be checked.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/dependencies/CDirectoryCacheDependency.php#L131">yii/caching/dependencies/CDirectoryCacheDependency.php#L131</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">validateDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks to see if the specified subdirectory should be checked for dependency.
This method is invoked when dependency of the whole directory is being checked.
By default, it always returns true, meaning the subdirectory should be checked.
You may override this method to check only certain subdirectories.</p>


<div class="detailHeader" id="validateFile-detail">
validateFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>validateFile</b>(string $fileName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fileName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the file that may be checked for dependency.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this file should be checked.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/caching/dependencies/CDirectoryCacheDependency.php#L118">yii/caching/dependencies/CDirectoryCacheDependency.php#L118</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">validateFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks to see if the file should be checked for dependency.
This method is invoked when dependency of the whole directory is being checked.
By default, it always returns true, meaning the file should be checked.
You may override this method to check only certain files.</p>


