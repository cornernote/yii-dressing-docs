<?php
$this->pageTitle = $this->pageHeading = 'CHelpCommand';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CHelpCommand';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a> | <a href="#events">Events</a></div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>Package</th>
  <td><?php echo CHtml::link('system.console', array('/site/doc', '#' => 'system.console')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CHelpCommand &raquo;
<?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CHelpCommand.php">yii/console/CHelpCommand.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CHelpCommand represents a console help command.
<br/><br/>
CHelpCommand displays the available command list or the help instructions
about a specific command.
<br/><br/>
To use this command, enter the following on the command line:
<pre>
php path/to/entry_script.php help [command name]
</pre>
In the above, if the command name is not provided, it will display all
available commands.</div>
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
<tr class="inherited" id="commandRunner">
  <td><?php echo CHtml::link('commandRunner', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'commandRunner-detail')); ?></td>
  <td><?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?></td>
  <td>the command runner instance</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="defaultAction">
  <td><?php echo CHtml::link('defaultAction', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'defaultAction-detail')); ?></td>
  <td>string</td>
  <td>the name of the default action.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr id="help">
  <td><?php echo CHtml::link('help', array('/site/doc', 'view' => 'CHelpCommand', '#' => 'help-detail')); ?></td>
  <td>string</td>
  <td>Provides the command description.</td>
  <td>CHelpCommand</td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the command name.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="optionHelp">
  <td><?php echo CHtml::link('optionHelp', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'optionHelp-detail')); ?></td>
  <td>array</td>
  <td>Provides the command option help information.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
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
<tr class="inherited" id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
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
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'behaviors-detail')); ?></td>
  <td>Returns a list of behaviors that this command should behave as.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="buildFileList">
  <td><?php echo CHtml::link('buildFileList()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'buildFileList-detail')); ?></td>
  <td>Builds the file list of a directory.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
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
<tr class="inherited" id="confirm">
  <td><?php echo CHtml::link('confirm()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'confirm-detail')); ?></td>
  <td>Asks user to confirm by typing y or n.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="copyFiles">
  <td><?php echo CHtml::link('copyFiles()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'copyFiles-detail')); ?></td>
  <td>Copies a list of files from one place to another.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
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
<tr class="inherited" id="ensureDirectory">
  <td><?php echo CHtml::link('ensureDirectory()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'ensureDirectory-detail')); ?></td>
  <td>Creates all parent directories if they do not exist.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getCommandRunner">
  <td><?php echo CHtml::link('getCommandRunner()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getCommandRunner-detail')); ?></td>
  <td>Returns the command runner instance</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getHelp">
  <td><?php echo CHtml::link('getHelp()', array('/site/doc', 'view' => 'CHelpCommand', '#' => 'getHelp-detail')); ?></td>
  <td>Provides the command description.</td>
  <td>CHelpCommand</td>
</tr>
<tr class="inherited" id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getName-detail')); ?></td>
  <td>Returns the command name.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="getOptionHelp">
  <td><?php echo CHtml::link('getOptionHelp()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getOptionHelp-detail')); ?></td>
  <td>Provides the command option help information.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'init-detail')); ?></td>
  <td>Initializes the command object.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="onAfterAction">
  <td><?php echo CHtml::link('onAfterAction()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'onAfterAction-detail')); ?></td>
  <td>This event is raised after an action finishes execution.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="onBeforeAction">
  <td><?php echo CHtml::link('onBeforeAction()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'onBeforeAction-detail')); ?></td>
  <td>This event is raised before an action is to be executed.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="pluralize">
  <td><?php echo CHtml::link('pluralize()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'pluralize-detail')); ?></td>
  <td>Converts a word to its plural form.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="prompt">
  <td><?php echo CHtml::link('prompt()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'prompt-detail')); ?></td>
  <td>Reads input via the readline PHP extension if that's available, or fgets() if readline is not installed.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CHelpCommand', '#' => 'run-detail')); ?></td>
  <td>Execute the action.</td>
  <td>CHelpCommand</td>
</tr>
<tr class="inherited" id="usageError">
  <td><?php echo CHtml::link('usageError()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'usageError-detail')); ?></td>
  <td>Displays a usage error.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
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
<tr class="inherited" id="afterAction">
  <td><?php echo CHtml::link('afterAction()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'afterAction-detail')); ?></td>
  <td>This method is invoked right after an action finishes execution.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="beforeAction">
  <td><?php echo CHtml::link('beforeAction()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'beforeAction-detail')); ?></td>
  <td>This method is invoked right before an action is to be executed.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="resolveRequest">
  <td><?php echo CHtml::link('resolveRequest()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'resolveRequest-detail')); ?></td>
  <td>Parses the command line arguments and determines which action to perform.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<div class="summary docEvent">
<h2>Events</h2>

<p><a href="#" class="toggle">Hide inherited events</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-event" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Event</th><th>Description</th><th>Defined By</th>
</tr>
<tr class="inherited" id="onBeforeAction">
  <td><?php echo CHtml::link('onBeforeAction', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'onBeforeAction-detail')); ?></td>
  <td>This event is raised before an action is to be executed.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
<tr class="inherited" id="onAfterAction">
  <td><?php echo CHtml::link('onAfterAction', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'onAfterAction-detail')); ?></td>
  <td>This event is raised after an action finishes execution.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="help-detail">
help<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getHelp</b>', array('/site/doc', 'view' => 'CHelpCommand', '#' => 'getHelp')); ?>()</div>

<p>Provides the command description.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getHelp-detail">
getHelp()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getHelp</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the command description.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CHelpCommand.php#L72">yii/console/CHelpCommand.php#L72</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHelp</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">getHelp</span><span style="color: #007700">().</span><span style="color: #DD0000">'&nbsp;[command-name]'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Provides the command description.</p>


<div class="detailHeader" id="run-detail">
run()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>run</b>(array $args)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$args</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">command line parameters specific for this command</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">non zero application exit code after printing help</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CHelpCommand.php#L37">yii/console/CHelpCommand.php#L37</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$runner</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandRunner</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$commands</span><span style="color: #007700">=</span><span style="color: #0000BB">$runner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commands</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])&nbsp;||&nbsp;!isset(</span><span style="color: #0000BB">$commands</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$commands</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Yii&nbsp;command&nbsp;runner&nbsp;(based&nbsp;on&nbsp;Yii&nbsp;v"</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getVersion</span><span style="color: #007700">().</span><span style="color: #DD0000">")\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Usage:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$runner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getScriptName</span><span style="color: #007700">().</span><span style="color: #DD0000">"&nbsp;&lt;command-name&gt;&nbsp;[parameters...]\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"\nThe&nbsp;following&nbsp;commands&nbsp;are&nbsp;available:\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$commandNames</span><span style="color: #007700">=</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$commands</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$commandNames</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&nbsp;-&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n&nbsp;-&nbsp;"</span><span style="color: #007700">,</span><span style="color: #0000BB">$commandNames</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"\n\nTo&nbsp;see&nbsp;individual&nbsp;command&nbsp;help,&nbsp;use&nbsp;the&nbsp;following:\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$runner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getScriptName</span><span style="color: #007700">().</span><span style="color: #DD0000">"&nbsp;help&nbsp;&lt;command-name&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"No&nbsp;available&nbsp;commands.\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Please&nbsp;define&nbsp;them&nbsp;under&nbsp;the&nbsp;following&nbsp;directory:\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"\t"</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getCommandPath</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$runner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">getHelp</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Execute the action.</p>


