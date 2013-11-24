<?php
$this->pageTitle = $this->pageHeading = 'CConsoleCommand';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CConsoleCommand';
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
  <td>abstract class CConsoleCommand &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CHelpCommand', array('/site/doc', 'view' => 'CHelpCommand')); ?>, <?php echo CHtml::link('YdConsoleCommand', array('/site/doc', 'view' => 'YdConsoleCommand')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php">yii\console\CConsoleCommand.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CConsoleCommand represents an executable console command.
<br/><br/>
It works like <?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> by parsing command line options and dispatching
the request to a specific action with appropriate option values.
<br/><br/>
Users call a console command via the following command format:
<pre>
yiic CommandName ActionName --Option1=Value1 --Option2=Value2 ...
</pre>
<br/><br/>
Child classes mainly needs to implement various action methods whose name must be
prefixed with "action". The parameters to an action method are considered as options
for that specific action. The action specified as <?php echo CHtml::link('defaultAction', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'defaultAction')); ?> will be invoked
when a user does not specify the action name in his command.
<br/><br/>
Options are bound to action parameters via parameter names. For example, the following
action method will allow us to run a command with <code>yiic sitemap --type=News</code>:
<pre>
class SitemapCommand extends CConsoleCommand {
    public function actionIndex($type) {
        ....
    }
}
</pre>
<br/><br/>
Since version 1.1.11 the return value of action methods will be used as application exit code if it is an integer value.</div>
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
<tr id="commandRunner">
  <td><?php echo CHtml::link('commandRunner', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'commandRunner-detail')); ?></td>
  <td><?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?></td>
  <td>the command runner instance</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="defaultAction">
  <td><?php echo CHtml::link('defaultAction', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'defaultAction-detail')); ?></td>
  <td>string</td>
  <td>the name of the default action.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="help">
  <td><?php echo CHtml::link('help', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'help-detail')); ?></td>
  <td>string</td>
  <td>Provides the command description.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the command name.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="optionHelp">
  <td><?php echo CHtml::link('optionHelp', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'optionHelp-detail')); ?></td>
  <td>array</td>
  <td>Provides the command option help information.</td>
  <td>CConsoleCommand</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CConsoleCommand</td>
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
<tr id="behaviors">
  <td><?php echo CHtml::link('behaviors()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'behaviors-detail')); ?></td>
  <td>Returns a list of behaviors that this command should behave as.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="buildFileList">
  <td><?php echo CHtml::link('buildFileList()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'buildFileList-detail')); ?></td>
  <td>Builds the file list of a directory.</td>
  <td>CConsoleCommand</td>
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
<tr id="confirm">
  <td><?php echo CHtml::link('confirm()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'confirm-detail')); ?></td>
  <td>Asks user to confirm by typing y or n.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="copyFiles">
  <td><?php echo CHtml::link('copyFiles()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'copyFiles-detail')); ?></td>
  <td>Copies a list of files from one place to another.</td>
  <td>CConsoleCommand</td>
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
<tr id="ensureDirectory">
  <td><?php echo CHtml::link('ensureDirectory()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'ensureDirectory-detail')); ?></td>
  <td>Creates all parent directories if they do not exist.</td>
  <td>CConsoleCommand</td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getCommandRunner">
  <td><?php echo CHtml::link('getCommandRunner()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getCommandRunner-detail')); ?></td>
  <td>Returns the command runner instance</td>
  <td>CConsoleCommand</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getHelp">
  <td><?php echo CHtml::link('getHelp()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getHelp-detail')); ?></td>
  <td>Provides the command description.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getName-detail')); ?></td>
  <td>Returns the command name.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="getOptionHelp">
  <td><?php echo CHtml::link('getOptionHelp()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getOptionHelp-detail')); ?></td>
  <td>Provides the command option help information.</td>
  <td>CConsoleCommand</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'init-detail')); ?></td>
  <td>Initializes the command object.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="onAfterAction">
  <td><?php echo CHtml::link('onAfterAction()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'onAfterAction-detail')); ?></td>
  <td>This event is raised after an action finishes execution.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="onBeforeAction">
  <td><?php echo CHtml::link('onBeforeAction()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'onBeforeAction-detail')); ?></td>
  <td>This event is raised before an action is to be executed.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="pluralize">
  <td><?php echo CHtml::link('pluralize()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'pluralize-detail')); ?></td>
  <td>Converts a word to its plural form.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="prompt">
  <td><?php echo CHtml::link('prompt()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'prompt-detail')); ?></td>
  <td>Reads input via the readline PHP extension if that's available, or fgets() if readline is not installed.</td>
  <td>CConsoleCommand</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'run-detail')); ?></td>
  <td>Executes the command.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="usageError">
  <td><?php echo CHtml::link('usageError()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'usageError-detail')); ?></td>
  <td>Displays a usage error.</td>
  <td>CConsoleCommand</td>
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
<tr id="afterAction">
  <td><?php echo CHtml::link('afterAction()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'afterAction-detail')); ?></td>
  <td>This method is invoked right after an action finishes execution.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="beforeAction">
  <td><?php echo CHtml::link('beforeAction()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'beforeAction-detail')); ?></td>
  <td>This method is invoked right before an action is to be executed.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="resolveRequest">
  <td><?php echo CHtml::link('resolveRequest()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'resolveRequest-detail')); ?></td>
  <td>Parses the command line arguments and determines which action to perform.</td>
  <td>CConsoleCommand</td>
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
<tr id="onBeforeAction">
  <td><?php echo CHtml::link('onBeforeAction', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'onBeforeAction-detail')); ?></td>
  <td>This event is raised before an action is to be executed.</td>
  <td>CConsoleCommand</td>
</tr>
<tr id="onAfterAction">
  <td><?php echo CHtml::link('onAfterAction', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'onAfterAction-detail')); ?></td>
  <td>This event is raised after an action finishes execution.</td>
  <td>CConsoleCommand</td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="commandRunner-detail">
commandRunner<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?> <?php echo CHtml::link('<b>getCommandRunner</b>', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getCommandRunner')); ?>()</div>

<p>the command runner instance</p>


<div class="detailHeader" id="defaultAction-detail">
defaultAction<span class="detailHeaderTag">
property
 (available since v1.1.5)
</span>
</div>

<div class="signature">
public string <b>$defaultAction</b>;</div>

<p>the name of the default action. Defaults to 'index'.</p>


<div class="detailHeader" id="help-detail">
help<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getHelp</b>', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getHelp')); ?>()</div>

<p>Provides the command description.
This method may be overridden to return the actual command description.</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getName</b>', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getName')); ?>()</div>

<p>the command name.</p>


<div class="detailHeader" id="optionHelp-detail">
optionHelp<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.5)
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getOptionHelp</b>', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getOptionHelp')); ?>()</div>

<p>Provides the command option help information.
The default implementation will return all available actions together with their
corresponding option information.</p>


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
public void <b>__construct</b>(string $name, <?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?> $runner)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the command</td>
</tr>
<tr>
  <td class="paramNameCol">$runner</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?></td>
  <td class="paramDescCol">the command runner</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L65">yii\console\CConsoleCommand.php#L65</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$runner</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runner</span><span style="color: #007700">=</span><span style="color: #0000BB">$runner</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attachBehaviors</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">behaviors</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="afterAction-detail">
afterAction()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>afterAction</b>(string $action, array $params, integer $exitCode=0)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the action name</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters to be passed to the action method.</td>
</tr>
<tr>
  <td class="paramNameCol">$exitCode</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the application exit code returned by the action method.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">application exit code (return value is available since version 1.1.11)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L207">yii\console\CConsoleCommand.php#L207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">afterAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CConsoleCommandEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">,</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterAction'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onAfterAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exitCode</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked right after an action finishes execution.
You may override this method to do some postprocessing for the action.</p>


<div class="detailHeader" id="beforeAction-detail">
beforeAction()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>beforeAction</b>(string $action, array $params)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the action name</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters to be passed to the action method.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the action should be executed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L185">yii\console\CConsoleCommand.php#L185</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeAction'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$event&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CConsoleCommandEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onBeforeAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;!</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stopCommand</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked right before an action is to be executed.
You may override this method to do last-minute preparation for the action.</p>


<div class="detailHeader" id="behaviors-detail">
behaviors()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>behaviors</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the behavior configurations (behavior name=>behavior configuration)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L103">yii\console\CConsoleCommand.php#L103</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">behaviors</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />}</span>
</span>
</code></div>
</div>
<p>Returns a list of behaviors that this command should behave as.
The return value should be an array of behavior configurations indexed by
behavior names. Each behavior configuration can be either a string specifying
the behavior class or an array of the following structure:
<pre>
'behaviorName'=&gt;array(
    'class'=&gt;'path.to.BehaviorClass',
    'property1'=&gt;'value1',
    'property2'=&gt;'value2',
)
</pre>
<br/><br/>
Note, the behavior classes must implement <?php echo CHtml::link('IBehavior', array('/site/doc', 'view' => 'IBehavior')); ?> or extend from
<?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?>. Behaviors declared in this method will be attached
to the controller when it is instantiated.
<br/><br/>
For more details about behaviors, see <?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?>.</p>


<div class="detailHeader" id="buildFileList-detail">
buildFileList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>buildFileList</b>(string $sourceDir, string $targetDir, string $baseDir='', array $ignoreFiles=array (
), array $renameMap=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sourceDir</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the source directory</td>
</tr>
<tr>
  <td class="paramNameCol">$targetDir</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the target directory</td>
</tr>
<tr>
  <td class="paramNameCol">$baseDir</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">base directory</td>
</tr>
<tr>
  <td class="paramNameCol">$ignoreFiles</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of the names of files that should
be ignored in list building process. Argument available since 1.1.11.</td>
</tr>
<tr>
  <td class="paramNameCol">$renameMap</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">hash array of file names that should be
renamed. Example value: array('1.old.txt'=>'2.new.txt').
Argument available since 1.1.11.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the file list (see <?php echo CHtml::link('copyFiles', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'copyFiles')); ?>)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L434">yii\console\CConsoleCommand.php#L434</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">buildFileList</span><span style="color: #007700">(</span><span style="color: #0000BB">$sourceDir</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$targetDir</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$baseDir</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ignoreFiles</span><span style="color: #007700">=array(),&nbsp;</span><span style="color: #0000BB">$renameMap</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handle</span><span style="color: #007700">=</span><span style="color: #0000BB">opendir</span><span style="color: #007700">(</span><span style="color: #0000BB">$sourceDir</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;while((</span><span style="color: #0000BB">$file</span><span style="color: #007700">=</span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #DD0000">'..'</span><span style="color: #007700">,</span><span style="color: #DD0000">'.svn'</span><span style="color: #007700">,</span><span style="color: #DD0000">'.gitignore'</span><span style="color: #007700">))&nbsp;||&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$ignoreFiles</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sourcePath</span><span style="color: #007700">=</span><span style="color: #0000BB">$sourceDir</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$targetPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$targetDir</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$renameMap</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$baseDir</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">?</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$baseDir</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=array(</span><span style="color: #DD0000">'source'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$sourcePath</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'target'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$targetPath</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$sourcePath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$list</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildFileList</span><span style="color: #007700">(</span><span style="color: #0000BB">$sourcePath</span><span style="color: #007700">,</span><span style="color: #0000BB">$targetPath</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$ignoreFiles</span><span style="color: #007700">,</span><span style="color: #0000BB">$renameMap</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">closedir</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Builds the file list of a directory.
This method traverses through the specified directory and builds
a list of files and subdirectories that the directory contains.
The result of this function can be passed to <?php echo CHtml::link('copyFiles', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'copyFiles')); ?>.</p>


<div class="detailHeader" id="confirm-detail">
confirm()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>confirm</b>(string $message, boolean $default=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">to echo out before waiting for user input</td>
</tr>
<tr>
  <td class="paramNameCol">$default</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">this value is returned if no selection is made. This parameter has been available since version 1.1.11.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether user confirmed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L572">yii\console\CConsoleCommand.php#L572</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">confirm</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$default</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;(yes|no)&nbsp;['&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$default&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'yes'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'no'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">']:'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$input&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">STDIN</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;empty(</span><span style="color: #0000BB">$input</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$default&nbsp;</span><span style="color: #007700">:&nbsp;!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">,</span><span style="color: #DD0000">'y'</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Asks user to confirm by typing y or n.</p>


<div class="detailHeader" id="copyFiles-detail">
copyFiles()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>copyFiles</b>(array $fileList)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fileList</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list of files to be copied (name=>spec).
The array keys are names displayed during the copy process, and array values are specifications
for files to be copied. Each array value must be an array of the following structure:
<ul>
<li>source: required, the full path of the file/directory to be copied from</li>
<li>target: required, the full path of the file/directory to be copied to</li>
<li>callback: optional, the callback to be invoked when copying a file. The callback function
  should be declared as follows:
  <pre>
  function foo($source,$params)
  </pre>
  where $source parameter is the source file path, and the content returned
  by the function will be saved into the target file.</li>
<li>params: optional, the parameters to be passed to the callback</li>
</ul></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L360">yii\console\CConsoleCommand.php#L360</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">copyFiles</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileList</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$overwriteAll</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$fileList&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$source</span><span style="color: #007700">=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">[</span><span style="color: #DD0000">'source'</span><span style="color: #007700">],</span><span style="color: #DD0000">'/\\'</span><span style="color: #007700">,</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$target</span><span style="color: #007700">=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">[</span><span style="color: #DD0000">'target'</span><span style="color: #007700">],</span><span style="color: #DD0000">'/\\'</span><span style="color: #007700">,</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$callback</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$file</span><span style="color: #007700">[</span><span style="color: #DD0000">'callback'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">[</span><span style="color: #DD0000">'callback'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$file</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ensureDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$target</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$callback</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(</span><span style="color: #0000BB">$callback</span><span style="color: #007700">,</span><span style="color: #0000BB">$source</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$target</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$content</span><span style="color: #007700">===</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$target</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;unchanged&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$overwriteAll</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;overwrite&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exist&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...overwrite?&nbsp;[Yes|No|All|Quit]&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$answer</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">STDIN</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$answer</span><span style="color: #007700">,</span><span style="color: #DD0000">'q'</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$answer</span><span style="color: #007700">,</span><span style="color: #DD0000">'y'</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;overwrite&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$answer</span><span style="color: #007700">,</span><span style="color: #DD0000">'a'</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;overwrite&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$overwriteAll</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skip&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ensureDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$target</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;generate&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$target</span><span style="color: #007700">,</span><span style="color: #0000BB">$content</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Copies a list of files from one place to another.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('buildFileList', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'buildFileList')); ?></li>
</ul>
</div>

<div class="detailHeader" id="ensureDirectory-detail">
ensureDirectory()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>ensureDirectory</b>(string $directory)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$directory</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory to be checked</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L457">yii\console\CConsoleCommand.php#L457</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">ensureDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ensureDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mkdir&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">,</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Creates all parent directories if they do not exist.</p>


<div class="detailHeader" id="getCommandRunner-detail">
getCommandRunner()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?> <b>getCommandRunner</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleCommandRunner', array('/site/doc', 'view' => 'CConsoleCommandRunner')); ?></td>
  <td class="paramDescCol">the command runner instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L262">yii\console\CConsoleCommand.php#L262</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCommandRunner</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_runner</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
  <td class="paramDescCol">the command description. Defaults to 'Usage: php entry-script.php command-name'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L272">yii\console\CConsoleCommand.php#L272</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHelp</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$help</span><span style="color: #007700">=</span><span style="color: #DD0000">'Usage:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandRunner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getScriptName</span><span style="color: #007700">().</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOptionHelp</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$help</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)===</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$help</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">].</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$help</span><span style="color: #007700">.=</span><span style="color: #DD0000">"&nbsp;&lt;action&gt;\nActions:\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$help</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;&nbsp;&nbsp;&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$option</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$help</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Provides the command description.
This method may be overridden to return the actual command description.</p>


<div class="detailHeader" id="getName-detail">
getName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the command name.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L254">yii\console\CConsoleCommand.php#L254</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getOptionHelp-detail">
getOptionHelp()
<span class="detailHeaderTag">
method
(available since v1.1.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getOptionHelp</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the command option help information. Each array element describes
the help information for a single action.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L294">yii\console\CConsoleCommand.php#L294</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOptionHelp</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMethods</span><span style="color: #007700">(</span><span style="color: #0000BB">ReflectionMethod</span><span style="color: #007700">::</span><span style="color: #0000BB">IS_PUBLIC</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #DD0000">'action'</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">6</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$help</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParameters</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$param</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$optional</span><span style="color: #007700">=</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isDefaultValueAvailable</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">$optional&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDefaultValue</span><span style="color: #007700">()&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$defaultValue&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(array(</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\r"</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$name</span><span style="color: #007700">===</span><span style="color: #DD0000">'args'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$optional</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$help</span><span style="color: #007700">.=</span><span style="color: #DD0000">"&nbsp;[--</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">=</span><span style="color: #0000BB">$defaultValue</span><span style="color: #DD0000">]"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$help</span><span style="color: #007700">.=</span><span style="color: #DD0000">"&nbsp;--</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">=value"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$help</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Provides the command option help information.
The default implementation will return all available actions together with their
corresponding option information.</p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L78">yii\console\CConsoleCommand.php#L78</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the command object.
This method is invoked after a command object is created and initialized with configurations.
You may override this method to further customize the command before it executes.</p>


<div class="detailHeader" id="onAfterAction-detail">
onAfterAction()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onAfterAction</b>(<?php echo CHtml::link('CConsoleCommandEvent', array('/site/doc', 'view' => 'CConsoleCommandEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleCommandEvent', array('/site/doc', 'view' => 'CConsoleCommandEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L595">yii\console\CConsoleCommand.php#L595</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onAfterAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterAction'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This event is raised after an action finishes execution.</p>


<div class="detailHeader" id="onBeforeAction-detail">
onBeforeAction()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onBeforeAction</b>(<?php echo CHtml::link('CConsoleCommandEvent', array('/site/doc', 'view' => 'CConsoleCommandEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleCommandEvent', array('/site/doc', 'view' => 'CConsoleCommandEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L585">yii\console\CConsoleCommand.php#L585</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onBeforeAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeAction'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>This event is raised before an action is to be executed.</p>


<div class="detailHeader" id="pluralize-detail">
pluralize()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>pluralize</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the word to be pluralized</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the pluralized word</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L496">yii\console\CConsoleCommand.php#L496</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">pluralize</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(m)ove$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1oves'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(f)oot$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1eet'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(c)hild$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1hildren'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(h)uman$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1umans'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(m)an$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1en'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(s)taff$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1taff'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(t)ooth$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1eeth'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(p)erson$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1eople'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/([m|l])ouse$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1ice'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(x|ch|ss|sh|us|as|is|os)$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1es'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/([^aeiouy]|qu)y$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1ies'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(?:([^f])fe|([lr])f)$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1\2ves'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(shea|lea|loa|thie)f$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1ves'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/([ti])um$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1a'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(tomat|potat|ech|her|vet)o$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1oes'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(bu)s$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1ses'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(ax|test)is$/i'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'\1es'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/s$/'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'s'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$rules&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$rule</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$replacement</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">,</span><span style="color: #0000BB">$replacement</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'s'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a word to its plural form.</p>


<div class="detailHeader" id="prompt-detail">
prompt()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>prompt</b>(string $message, string $default=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">to echo out before waiting for user input</td>
</tr>
<tr>
  <td class="paramNameCol">$default</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the default string to be returned when user does not write anything.
Defaults to null, means that default string is disabled. This parameter is available since version 1.1.11.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">line read as a string, or false if input has been closed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L536">yii\console\CConsoleCommand.php#L536</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">prompt</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$default</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$default</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.=</span><span style="color: #DD0000">"&nbsp;[</span><span style="color: #0000BB">$default</span><span style="color: #DD0000">]&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">extension_loaded</span><span style="color: #007700">(</span><span style="color: #DD0000">'readline'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">=</span><span style="color: #0000BB">readline</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$input</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">readline_add_history</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">=</span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">STDIN</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$input</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$input</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$default</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$default&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Reads input via the readline PHP extension if that's available, or fgets() if readline is not installed.</p>


<div class="detailHeader" id="renderFile-detail">
renderFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>renderFile</b>(string $_viewFile_, array $_data_=NULL, boolean $_return_=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$_viewFile_</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">view file path</td>
</tr>
<tr>
  <td class="paramNameCol">$_data_</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">optional data to be extracted as local view variables</td>
</tr>
<tr>
  <td class="paramNameCol">$_return_</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to return the rendering result instead of displaying it</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the rendering result if required. Null otherwise.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L474">yii\console\CConsoleCommand.php#L474</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$_viewFile_</span><span style="color: #007700">,</span><span style="color: #0000BB">$_data_</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$_return_</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$_data_</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #0000BB">$_data_</span><span style="color: #007700">,</span><span style="color: #0000BB">EXTR_PREFIX_SAME</span><span style="color: #007700">,</span><span style="color: #DD0000">'data'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$_data_</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$_return_</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_implicit_flush</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require(</span><span style="color: #0000BB">$_viewFile_</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require(</span><span style="color: #0000BB">$_viewFile_</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a view file.</p>


<div class="detailHeader" id="resolveRequest-detail">
resolveRequest()
<span class="detailHeaderTag">
method
(available since v1.1.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>resolveRequest</b>(array $args)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$args</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">command line arguments</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the action name, named options (name=>value), and unnamed options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L221">yii\console\CConsoleCommand.php#L221</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveRequest</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array();&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;named&nbsp;parameters<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array();&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;unnamed&nbsp;parameters<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(</span><span style="color: #0000BB">$args&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$arg</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^--(\w+)(=(.*))?$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$arg</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;an&nbsp;option<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=array(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">][]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$action</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$arg</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$action</span><span style="color: #007700">=</span><span style="color: #0000BB">$arg</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$action</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$action</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultAction</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Parses the command line arguments and determines which action to perform.</p>


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
  <td class="paramDescCol">command line parameters for this command.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">application exit code, which is returned by the invoked action. 0 if the action did not return anything.
(return value is available since version 1.1.11)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L117">yii\console\CConsoleCommand.php#L117</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">)=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveRequest</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">=</span><span style="color: #DD0000">'action'</span><span style="color: #007700">.</span><span style="color: #0000BB">$action</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^\w+$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">method_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">usageError</span><span style="color: #007700">(</span><span style="color: #DD0000">"Unknown&nbsp;action:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$action</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ReflectionMethod</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;named&nbsp;and&nbsp;unnamed&nbsp;options<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(</span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParameters</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$param</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isArray</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[]=</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;array(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">usageError</span><span style="color: #007700">(</span><span style="color: #DD0000">"Option&nbsp;--</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">&nbsp;requires&nbsp;a&nbsp;scalar.&nbsp;Array&nbsp;is&nbsp;given."</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$name</span><span style="color: #007700">===</span><span style="color: #DD0000">'args'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$args</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isDefaultValueAvailable</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDefaultValue</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">usageError</span><span style="color: #007700">(</span><span style="color: #DD0000">"Missing&nbsp;required&nbsp;option&nbsp;--</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">."</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;try&nbsp;global&nbsp;options<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(!empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasProperty</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$property</span><span style="color: #007700">=</span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProperty</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$property</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isPublic</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$property</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isStatic</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">usageError</span><span style="color: #007700">(</span><span style="color: #DD0000">"Unknown&nbsp;options:&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">=</span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">invokeArgs</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">is_int</span><span style="color: #007700">(</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">)?</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">:</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Executes the command.
The default implementation will parse the input parameters and
dispatch the command request to an appropriate action with the corresponding
option values</p>


<div class="detailHeader" id="usageError-detail">
usageError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>usageError</b>(string $message)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\console\CConsoleCommand.php#L335">yii\console\CConsoleCommand.php#L335</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">usageError</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Error:&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #DD0000">\n\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHelp</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;exit(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Displays a usage error.
This method will then terminate the execution of the current application.</p>


