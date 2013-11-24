<?php
$this->pageTitle = $this->pageHeading = 'CConsoleCommandRunner';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CConsoleCommandRunner';
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
  <td><?php echo CHtml::link('system.console', array('/site/doc', '#' => 'system.console')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CConsoleCommandRunner &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleCommandRunner.php">yii/console/CConsoleCommandRunner.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CConsoleCommandRunner manages commands and executes the requested command.</div>
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
<tr id="command">
  <td><?php echo CHtml::link('command', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'command-detail')); ?></td>
  <td>CConsoleCommand|null</td>
  <td>Returns the currently running command.</td>
  <td>CConsoleCommandRunner</td>
</tr>
<tr id="commands">
  <td><?php echo CHtml::link('commands', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'commands-detail')); ?></td>
  <td>array</td>
  <td>list of all available commands (command name=>command configuration).</td>
  <td>CConsoleCommandRunner</td>
</tr>
<tr id="scriptName">
  <td><?php echo CHtml::link('scriptName', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'scriptName-detail')); ?></td>
  <td>string</td>
  <td>the entry script name</td>
  <td>CConsoleCommandRunner</td>
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
<tr id="addCommands">
  <td><?php echo CHtml::link('addCommands()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'addCommands-detail')); ?></td>
  <td>Adds commands from the specified command path.</td>
  <td>CConsoleCommandRunner</td>
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
<tr id="createCommand">
  <td><?php echo CHtml::link('createCommand()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'createCommand-detail')); ?></td>
  <td></td>
  <td>CConsoleCommandRunner</td>
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
<tr id="findCommands">
  <td><?php echo CHtml::link('findCommands()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'findCommands-detail')); ?></td>
  <td>Searches for commands under the specified directory.</td>
  <td>CConsoleCommandRunner</td>
</tr>
<tr id="getCommand">
  <td><?php echo CHtml::link('getCommand()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'getCommand-detail')); ?></td>
  <td>Returns the currently running command.</td>
  <td>CConsoleCommandRunner</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getScriptName">
  <td><?php echo CHtml::link('getScriptName()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'getScriptName-detail')); ?></td>
  <td>Returns the entry script name</td>
  <td>CConsoleCommandRunner</td>
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
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'run-detail')); ?></td>
  <td>Executes the requested command.</td>
  <td>CConsoleCommandRunner</td>
</tr>
<tr id="setCommand">
  <td><?php echo CHtml::link('setCommand()', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'setCommand-detail')); ?></td>
  <td>Sets the currently active command.</td>
  <td>CConsoleCommandRunner</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="command-detail">
command<span class="detailHeaderTag">
property
 (available since v1.1.14)
</span>
</div>

<div class="signature">
public CConsoleCommand|null <?php echo CHtml::link('<b>getCommand</b>', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'getCommand')); ?>()<br/>public void <?php echo CHtml::link('<b>setCommand</b>', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'setCommand')); ?>(<?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?> $value)</div>

<p>Returns the currently running command.</p>


<div class="detailHeader" id="commands-detail">
commands<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$commands</b>;</div>

<p>list of all available commands (command name=>command configuration).
Each command configuration can be either a string or an array.
If the former, the string should be the class name or
<?php echo CHtml::link('class path alias', array('/site/doc', 'view' => 'YiiBase', '#' => 'getPathOfAlias')); ?> of the command.
If the latter, the array must contain a 'class' element which specifies
the command's class name or <?php echo CHtml::link('class path alias', array('/site/doc', 'view' => 'YiiBase', '#' => 'getPathOfAlias')); ?>.
The rest name-value pairs in the array are used to initialize
the corresponding command properties. For example,
<pre>
array(
  'email'=&gt;array(
     'class'=&gt;'path.to.Mailer',
     'interval'=&gt;3600,
  ),
  'log'=&gt;'path.to.LoggerCommand',
)
</pre></p>


<div class="detailHeader" id="scriptName-detail">
scriptName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getScriptName</b>', array('/site/doc', 'view' => 'CConsoleCommandRunner', '#' => 'getScriptName')); ?>()</div>

<p>the entry script name</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addCommands-detail">
addCommands()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addCommands</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the alias of the directory containing the command class files.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleCommandRunner.php#L128">yii/console/CConsoleCommandRunner.php#L128</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addCommands</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$commands</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findCommands</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$commands&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commands</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commands</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Adds commands from the specified command path.
If a command already exists, the new one will be ignored.</p>


<div class="detailHeader" id="createCommand-detail">
createCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?> <b>createCommand</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">command name (case-insensitive)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
  <td class="paramDescCol">the command object. Null if the name is invalid.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleCommandRunner.php#L144">yii/console/CConsoleCommandRunner.php#L144</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commands</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commands</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$commands</span><span style="color: #007700">=</span><span style="color: #0000BB">array_change_key_case</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">commands</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$commands</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$commands</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$command</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//&nbsp;class&nbsp;file&nbsp;path&nbsp;or&nbsp;alias<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">,</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">),</span><span style="color: #0000BB">0</span><span style="color: #007700">,-</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require_once(</span><span style="color: #0000BB">$command</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #FF8000">//&nbsp;an&nbsp;alias<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #FF8000">//&nbsp;an&nbsp;array&nbsp;configuration<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$name</span><span style="color: #007700">===</span><span style="color: #DD0000">'help'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">CHelpCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'help'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="findCommands-detail">
findCommands()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>findCommands</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory containing the command class files.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of commands (command name=>command class file)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleCommandRunner.php#L108">yii/console/CConsoleCommandRunner.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findCommands</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$dir</span><span style="color: #007700">=@</span><span style="color: #0000BB">opendir</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$commands</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;while((</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">=</span><span style="color: #0000BB">$path</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,-</span><span style="color: #0000BB">11</span><span style="color: #007700">),</span><span style="color: #DD0000">'Command.php'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$commands</span><span style="color: #007700">[</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,-</span><span style="color: #0000BB">11</span><span style="color: #007700">))]=</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">closedir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$commands</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Searches for commands under the specified directory.</p>


<div class="detailHeader" id="getCommand-detail">
getCommand()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CConsoleCommand|null <b>getCommand</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CConsoleCommand|null</td>
  <td class="paramDescCol">the currently active command.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleCommandRunner.php#L89">yii/console/CConsoleCommandRunner.php#L89</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCommand</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_command</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the currently running command.</p>


<div class="detailHeader" id="getScriptName-detail">
getScriptName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getScriptName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the entry script name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleCommandRunner.php#L79">yii/console/CConsoleCommandRunner.php#L79</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getScriptName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptName</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="run-detail">
run()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer|null <b>run</b>(array $args)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$args</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of user supplied parameters (including the entry script name and the command name).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer|null</td>
  <td class="paramDescCol">application exit code returned by the command.
if null is returned, application will not exit explicitly. See also <?php echo CHtml::link('CConsoleApplication::processRequest()', array('/site/doc', 'view' => 'CConsoleApplication', '#' => 'processRequest')); ?>.
(return value is available since version 1.1.11)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleCommandRunner.php#L54">yii/console/CConsoleCommandRunner.php#L54</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptName</span><span style="color: #007700">=</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #DD0000">'help'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oldCommand</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_command</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'help'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_command</span><span style="color: #007700">=</span><span style="color: #0000BB">$command</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">=</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_command</span><span style="color: #007700">=</span><span style="color: #0000BB">$oldCommand</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$exitCode</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Executes the requested command.</p>


<div class="detailHeader" id="setCommand-detail">
setCommand()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCommand</b>(<?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?> $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CConsoleCommand', array('/site/doc', 'view' => 'CConsoleCommand')); ?></td>
  <td class="paramDescCol">the currently active command.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/console/CConsoleCommandRunner.php#L98">yii/console/CConsoleCommandRunner.php#L98</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_command</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


