<?php
$this->pageTitle = $this->pageHeading = 'YdErrorEmailCommand';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdErrorEmailCommand';
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
  <td><?php echo CHtml::link('dressing.commands', array('/site/doc', '#' => 'dressing.commands')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdErrorEmailCommand &raquo;
<?php echo CHtml::link('YdConsoleCommand', array('/site/doc', 'view' => 'YdConsoleCommand')); ?> &raquo;
<?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/commands/YdErrorEmailCommand.php">dressing/commands/YdErrorEmailCommand.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdErrorEmailCommand will email errors that have been generated into the error runtime folder.</div>
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
<tr id="email">
  <td><?php echo CHtml::link('email', array('/site/doc', 'view' => 'YdErrorEmailCommand', '#' => 'email-detail')); ?></td>
  <td>string</td>
  <td>comma separated list of email addresses</td>
  <td>YdErrorEmailCommand</td>
</tr>
<tr class="inherited" id="help">
  <td><?php echo CHtml::link('help', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'help-detail')); ?></td>
  <td>string</td>
  <td>Provides the command description.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
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
<tr id="actionIndex">
  <td><?php echo CHtml::link('actionIndex()', array('/site/doc', 'view' => 'YdErrorEmailCommand', '#' => 'actionIndex-detail')); ?></td>
  <td></td>
  <td>YdErrorEmailCommand</td>
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
<tr class="inherited" id="getHelp">
  <td><?php echo CHtml::link('getHelp()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'getHelp-detail')); ?></td>
  <td>Provides the command description.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdConsoleCommand', '#' => 'init-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdConsoleCommand', array('/site/doc', 'view' => 'YdConsoleCommand')); ?></td>
</tr>
<tr id="instance">
  <td><?php echo CHtml::link('instance()', array('/site/doc', 'view' => 'YdErrorEmailCommand', '#' => 'instance-detail')); ?></td>
  <td></td>
  <td>YdErrorEmailCommand</td>
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
<tr class="inherited" id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CConsoleCommand', '#' => 'run-detail')); ?></td>
  <td>Executes the command.</td>
  <td><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
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
<tr class="inherited" id="runStats">
  <td><?php echo CHtml::link('runStats()', array('/site/doc', 'view' => 'YdConsoleCommand', '#' => 'runStats-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdConsoleCommand', array('/site/doc', 'view' => 'YdConsoleCommand')); ?></td>
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
<div class="detailHeader" id="email-detail">
email<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$email</b>;</div>

<p>comma separated list of email addresses</p>


<h2>Method Details</h2>

<div class="detailHeader" id="actionIndex-detail">
actionIndex()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionIndex</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/commands/YdErrorEmailCommand.php#L33">dressing/commands/YdErrorEmailCommand.php#L33</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionIndex</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$archived&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dir&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRuntimePath</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'/errors'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">glob</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'*.html'</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$archive&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'runtime/errors/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'runtime/errors/archive/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$archive</span><span style="color: #007700">)))&nbsp;</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$archive</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">0777</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">rename</span><span style="color: #007700">(</span><span style="color: #0000BB">$error</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$archive</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$archived</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$archived&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">email</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">email</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$to</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">email</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sendEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'errors&nbsp;have&nbsp;been&nbsp;archived'</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createAbsoluteUrl</span><span style="color: #007700">(</span><span style="color: #DD0000">'/error/index'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="instance-detail">
instance()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static ErrorEmailCommand <b>instance</b>(string $class='YdErrorEmailCommand')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$class</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">ErrorEmailCommand</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/commands/YdErrorEmailCommand.php#L25">dressing/commands/YdErrorEmailCommand.php#L25</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">instance</span><span style="color: #007700">(</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">instance</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


