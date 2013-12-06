<?php
$this->pageTitle = $this->pageHeading = 'CFileLogRoute';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CFileLogRoute';
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
  <td><?php echo CHtml::link('system.logging', array('/site/doc', '#' => 'system.logging')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CFileLogRoute &raquo;
<?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php">yii/logging/CFileLogRoute.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CFileLogRoute records log messages in files.
<br/><br/>
The log files are stored under <?php echo CHtml::link('logPath', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setLogPath')); ?> and the file name
is specified by <?php echo CHtml::link('logFile', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setLogFile')); ?>. If the size of the log file is
greater than <?php echo CHtml::link('maxFileSize', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setMaxFileSize')); ?> (in kilo-bytes), a rotation
is performed, which renames the current log file by suffixing the file name
with '.1'. All existing log files are moved backwards one place, i.e., '.2'
to '.3', '.1' to '.2'. The property <?php echo CHtml::link('maxLogFiles', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setMaxLogFiles')); ?>
specifies how many files to be kept.
If the property <?php echo CHtml::link('rotateByCopy', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'rotateByCopy')); ?> is true, the primary log file will be
rotated by a copy and truncated (to be more compatible with log tailers)
otherwise it will be rotated by being renamed.</div>
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
<tr class="inherited" id="categories">
  <td><?php echo CHtml::link('categories', array('/site/doc', 'view' => 'CLogRoute', '#' => 'categories-detail')); ?></td>
  <td>mixed</td>
  <td>array of categories, or string list separated by comma or space.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="enabled">
  <td><?php echo CHtml::link('enabled', array('/site/doc', 'view' => 'CLogRoute', '#' => 'enabled-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable this log route.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="except">
  <td><?php echo CHtml::link('except', array('/site/doc', 'view' => 'CLogRoute', '#' => 'except-detail')); ?></td>
  <td>mixed</td>
  <td>array of categories, or string list separated by comma or space, to EXCLUDE from logs.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="filter">
  <td><?php echo CHtml::link('filter', array('/site/doc', 'view' => 'CLogRoute', '#' => 'filter-detail')); ?></td>
  <td>mixed</td>
  <td>the additional filter (eg <?php echo CHtml::link('CLogFilter', array('/site/doc', 'view' => 'CLogFilter')); ?>) that can be applied to the log messages.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="levels">
  <td><?php echo CHtml::link('levels', array('/site/doc', 'view' => 'CLogRoute', '#' => 'levels-detail')); ?></td>
  <td>string</td>
  <td>list of levels separated by comma or space.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr id="logFile">
  <td><?php echo CHtml::link('logFile', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'logFile-detail')); ?></td>
  <td>string</td>
  <td>log file name.</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="logPath">
  <td><?php echo CHtml::link('logPath', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'logPath-detail')); ?></td>
  <td>string</td>
  <td>directory storing log files.</td>
  <td>CFileLogRoute</td>
</tr>
<tr class="inherited" id="logs">
  <td><?php echo CHtml::link('logs', array('/site/doc', 'view' => 'CLogRoute', '#' => 'logs-detail')); ?></td>
  <td>array</td>
  <td>the logs that are collected so far by this log route.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr id="maxFileSize">
  <td><?php echo CHtml::link('maxFileSize', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'maxFileSize-detail')); ?></td>
  <td>integer</td>
  <td>maximum log file size in kilo-bytes (KB).</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="maxLogFiles">
  <td><?php echo CHtml::link('maxLogFiles', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'maxLogFiles-detail')); ?></td>
  <td>integer</td>
  <td>number of files used for rotation.</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="rotateByCopy">
  <td><?php echo CHtml::link('rotateByCopy', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'rotateByCopy-detail')); ?></td>
  <td>boolean</td>
  <td>Whether to rotate primary log by copy and truncate
which is more compatible with log tailers.</td>
  <td>CFileLogRoute</td>
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
<tr class="inherited" id="collectLogs">
  <td><?php echo CHtml::link('collectLogs()', array('/site/doc', 'view' => 'CLogRoute', '#' => 'collectLogs-detail')); ?></td>
  <td>Retrieves filtered log messages from logger for further processing.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
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
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getLogFile">
  <td><?php echo CHtml::link('getLogFile()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'getLogFile-detail')); ?></td>
  <td>Returns log file name. Defaults to 'application.log'.</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="getLogPath">
  <td><?php echo CHtml::link('getLogPath()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'getLogPath-detail')); ?></td>
  <td>Returns directory storing log files. Defaults to application runtime path.</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="getMaxFileSize">
  <td><?php echo CHtml::link('getMaxFileSize()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'getMaxFileSize-detail')); ?></td>
  <td>Returns maximum log file size in kilo-bytes (KB). Defaults to 1024 (1MB).</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="getMaxLogFiles">
  <td><?php echo CHtml::link('getMaxLogFiles()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'getMaxLogFiles-detail')); ?></td>
  <td>Returns number of files used for rotation. Defaults to 5.</td>
  <td>CFileLogRoute</td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'init-detail')); ?></td>
  <td>Initializes the route.</td>
  <td>CFileLogRoute</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setLogFile">
  <td><?php echo CHtml::link('setLogFile()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setLogFile-detail')); ?></td>
  <td>Sets log file name</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="setLogPath">
  <td><?php echo CHtml::link('setLogPath()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setLogPath-detail')); ?></td>
  <td>Sets directory for storing log files.</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="setMaxFileSize">
  <td><?php echo CHtml::link('setMaxFileSize()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setMaxFileSize-detail')); ?></td>
  <td>Sets maximum log file size in kilo-bytes (KB).</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="setMaxLogFiles">
  <td><?php echo CHtml::link('setMaxLogFiles()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setMaxLogFiles-detail')); ?></td>
  <td>Sets number of files used for rotation.</td>
  <td>CFileLogRoute</td>
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
<tr class="inherited" id="formatLogMessage">
  <td><?php echo CHtml::link('formatLogMessage()', array('/site/doc', 'view' => 'CLogRoute', '#' => 'formatLogMessage-detail')); ?></td>
  <td>Formats a log message given different fields.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr id="processLogs">
  <td><?php echo CHtml::link('processLogs()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'processLogs-detail')); ?></td>
  <td>Saves log messages in files.</td>
  <td>CFileLogRoute</td>
</tr>
<tr id="rotateFiles">
  <td><?php echo CHtml::link('rotateFiles()', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'rotateFiles-detail')); ?></td>
  <td>Rotates log files.</td>
  <td>CFileLogRoute</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="logFile-detail">
logFile<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLogFile</b>', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'getLogFile')); ?>()<br/>public void <?php echo CHtml::link('<b>setLogFile</b>', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setLogFile')); ?>(string $value)</div>

<p>log file name. Defaults to 'application.log'.</p>


<div class="detailHeader" id="logPath-detail">
logPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLogPath</b>', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'getLogPath')); ?>()<br/>public void <?php echo CHtml::link('<b>setLogPath</b>', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setLogPath')); ?>(string $value)</div>

<p>directory storing log files. Defaults to application runtime path.</p>


<div class="detailHeader" id="maxFileSize-detail">
maxFileSize<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getMaxFileSize</b>', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'getMaxFileSize')); ?>()<br/>public void <?php echo CHtml::link('<b>setMaxFileSize</b>', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setMaxFileSize')); ?>(integer $value)</div>

<p>maximum log file size in kilo-bytes (KB). Defaults to 1024 (1MB).</p>


<div class="detailHeader" id="maxLogFiles-detail">
maxLogFiles<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getMaxLogFiles</b>', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'getMaxLogFiles')); ?>()<br/>public void <?php echo CHtml::link('<b>setMaxLogFiles</b>', array('/site/doc', 'view' => 'CFileLogRoute', '#' => 'setMaxLogFiles')); ?>(integer $value)</div>

<p>number of files used for rotation. Defaults to 5.</p>


<div class="detailHeader" id="rotateByCopy-detail">
rotateByCopy<span class="detailHeaderTag">
property
 (available since v1.1.14)
</span>
</div>

<div class="signature">
public boolean <b>$rotateByCopy</b>;</div>

<p>Whether to rotate primary log by copy and truncate
which is more compatible with log tailers. Defaults to false.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getLogFile-detail">
getLogFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLogFile</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">log file name. Defaults to 'application.log'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L93">yii/logging/CFileLogRoute.php#L93</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLogFile</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logFile</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getLogPath-detail">
getLogPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLogPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">directory storing log files. Defaults to application runtime path.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L73">yii/logging/CFileLogRoute.php#L73</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLogPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logPath</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getMaxFileSize-detail">
getMaxFileSize()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getMaxFileSize</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">maximum log file size in kilo-bytes (KB). Defaults to 1024 (1MB).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L109">yii/logging/CFileLogRoute.php#L109</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMaxFileSize</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_maxFileSize</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getMaxLogFiles-detail">
getMaxLogFiles()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getMaxLogFiles</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of files used for rotation. Defaults to 5.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L126">yii/logging/CFileLogRoute.php#L126</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMaxLogFiles</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_maxLogFiles</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L63">yii/logging/CFileLogRoute.php#L63</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLogPath</span><span style="color: #007700">()===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setLogPath</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRuntimePath</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the route.
This method is invoked after the route is created by the route manager.</p>


<div class="detailHeader" id="processLogs-detail">
processLogs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>processLogs</b>(array $logs)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$logs</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of log messages</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L144">yii/logging/CFileLogRoute.php#L144</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">processLogs</span><span style="color: #007700">(</span><span style="color: #0000BB">$logs</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$logs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatLogMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">],</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$logFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLogPath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLogFile</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fp</span><span style="color: #007700">=@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$logFile</span><span style="color: #007700">,</span><span style="color: #DD0000">'a'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">flock</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,</span><span style="color: #0000BB">LOCK_EX</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(@</span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$logFile</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMaxFileSize</span><span style="color: #007700">()*</span><span style="color: #0000BB">1024</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rotateFiles</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">flock</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,</span><span style="color: #0000BB">LOCK_UN</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$logFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$text</span><span style="color: #007700">,</span><span style="color: #0000BB">FILE_APPEND</span><span style="color: #007700">|</span><span style="color: #0000BB">LOCK_EX</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">flock</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,</span><span style="color: #0000BB">LOCK_UN</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Saves log messages in files.</p>


<div class="detailHeader" id="rotateFiles-detail">
rotateFiles()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>rotateFiles</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L171">yii/logging/CFileLogRoute.php#L171</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">rotateFiles</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLogPath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLogFile</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$max</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMaxLogFiles</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">$max</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">;--</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rotateFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$file</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$rotateFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;suppress&nbsp;errors&nbsp;because&nbsp;it's&nbsp;possible&nbsp;multiple&nbsp;processes&nbsp;enter&nbsp;into&nbsp;this&nbsp;section<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$i</span><span style="color: #007700">===</span><span style="color: #0000BB">$max</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$rotateFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">rename</span><span style="color: #007700">(</span><span style="color: #0000BB">$rotateFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.(</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;suppress&nbsp;errors&nbsp;because&nbsp;it's&nbsp;possible&nbsp;multiple&nbsp;processes&nbsp;enter&nbsp;into&nbsp;this&nbsp;section<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rotateByCopy</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">copy</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">.</span><span style="color: #DD0000">'.1'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">=@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #DD0000">'a'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">ftruncate</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">rename</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">.</span><span style="color: #DD0000">'.1'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Rotates log files.</p>


<div class="detailHeader" id="setLogFile-detail">
setLogFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setLogFile</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">log file name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L101">yii/logging/CFileLogRoute.php#L101</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setLogFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setLogPath-detail">
setLogPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setLogPath</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">directory for storing log files.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L82">yii/logging/CFileLogRoute.php#L82</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setLogPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logPath</span><span style="color: #007700">===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logPath</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">is_writable</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CFileLogRoute.logPath&nbsp;"{path}"&nbsp;does&nbsp;not&nbsp;point&nbsp;to&nbsp;a&nbsp;valid&nbsp;directory.&nbsp;Make&nbsp;sure&nbsp;the&nbsp;directory&nbsp;exists&nbsp;and&nbsp;is&nbsp;writable&nbsp;by&nbsp;the&nbsp;Web&nbsp;server&nbsp;process.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setMaxFileSize-detail">
setMaxFileSize()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setMaxFileSize</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">maximum log file size in kilo-bytes (KB).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L117">yii/logging/CFileLogRoute.php#L117</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setMaxFileSize</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_maxFileSize</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&lt;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_maxFileSize</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setMaxLogFiles-detail">
setMaxLogFiles()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setMaxLogFiles</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of files used for rotation.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/logging/CFileLogRoute.php#L134">yii/logging/CFileLogRoute.php#L134</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setMaxLogFiles</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_maxLogFiles</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&lt;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_maxLogFiles</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


