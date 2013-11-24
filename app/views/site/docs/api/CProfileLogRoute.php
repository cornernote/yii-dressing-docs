<?php
$this->pageTitle = $this->pageHeading = 'CProfileLogRoute';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CProfileLogRoute';
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
  <td>class CProfileLogRoute &raquo;
<?php echo CHtml::link('CWebLogRoute', array('/site/doc', 'view' => 'CWebLogRoute')); ?> &raquo;
<?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdProfileLogRoute', array('/site/doc', 'view' => 'YdProfileLogRoute')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\logging\CProfileLogRoute.php">yii\logging\CProfileLogRoute.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CProfileLogRoute displays the profiling results in Web page.
<br/><br/>
The profiling is done by calling <?php echo CHtml::link('YiiBase::beginProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'beginProfile')); ?> and <?php echo CHtml::link('YiiBase::endProfile()', array('/site/doc', 'view' => 'YiiBase', '#' => 'endProfile')); ?>,
which marks the begin and end of a code block.
<br/><br/>
CProfileLogRoute supports two types of report by setting the <?php echo CHtml::link('report', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'setReport')); ?> property:
<ul>
<li>summary: list the execution time of every marked code block</li>
<li>callstack: list the mark code blocks in a hierarchical view reflecting their calling sequence.</li>
</ul></div>
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
<tr class="inherited" id="collapsedInFireBug">
  <td><?php echo CHtml::link('collapsedInFireBug', array('/site/doc', 'view' => 'CWebLogRoute', '#' => 'collapsedInFireBug-detail')); ?></td>
  <td>boolean</td>
  <td>whether the log should be collapsed by default in Firebug.</td>
  <td><?php echo CHtml::link('CWebLogRoute', array('/site/doc', 'view' => 'CWebLogRoute')); ?></td>
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
<tr id="groupByToken">
  <td><?php echo CHtml::link('groupByToken', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'groupByToken-detail')); ?></td>
  <td>boolean</td>
  <td>whether to aggregate results according to profiling tokens.</td>
  <td>CProfileLogRoute</td>
</tr>
<tr class="inherited" id="ignoreAjaxInFireBug">
  <td><?php echo CHtml::link('ignoreAjaxInFireBug', array('/site/doc', 'view' => 'CWebLogRoute', '#' => 'ignoreAjaxInFireBug-detail')); ?></td>
  <td>boolean</td>
  <td>whether the log should be ignored in FireBug for ajax calls.</td>
  <td><?php echo CHtml::link('CWebLogRoute', array('/site/doc', 'view' => 'CWebLogRoute')); ?></td>
</tr>
<tr class="inherited" id="ignoreFlashInFireBug">
  <td><?php echo CHtml::link('ignoreFlashInFireBug', array('/site/doc', 'view' => 'CWebLogRoute', '#' => 'ignoreFlashInFireBug-detail')); ?></td>
  <td>boolean</td>
  <td>whether the log should be ignored in FireBug for Flash/Flex calls.</td>
  <td><?php echo CHtml::link('CWebLogRoute', array('/site/doc', 'view' => 'CWebLogRoute')); ?></td>
</tr>
<tr class="inherited" id="levels">
  <td><?php echo CHtml::link('levels', array('/site/doc', 'view' => 'CLogRoute', '#' => 'levels-detail')); ?></td>
  <td>string</td>
  <td>list of levels separated by comma or space.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="logs">
  <td><?php echo CHtml::link('logs', array('/site/doc', 'view' => 'CLogRoute', '#' => 'logs-detail')); ?></td>
  <td>array</td>
  <td>the logs that are collected so far by this log route.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr id="report">
  <td><?php echo CHtml::link('report', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'report-detail')); ?></td>
  <td>string</td>
  <td>the type of the profiling report to display.</td>
  <td>CProfileLogRoute</td>
</tr>
<tr class="inherited" id="showInFireBug">
  <td><?php echo CHtml::link('showInFireBug', array('/site/doc', 'view' => 'CWebLogRoute', '#' => 'showInFireBug-detail')); ?></td>
  <td>boolean</td>
  <td>whether the log should be displayed in FireBug instead of browser window.</td>
  <td><?php echo CHtml::link('CWebLogRoute', array('/site/doc', 'view' => 'CWebLogRoute')); ?></td>
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
<tr id="getReport">
  <td><?php echo CHtml::link('getReport()', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'getReport-detail')); ?></td>
  <td>Returns the type of the profiling report to display. Defaults to 'summary'.</td>
  <td>CProfileLogRoute</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'init-detail')); ?></td>
  <td>Initializes the route.</td>
  <td>CProfileLogRoute</td>
</tr>
<tr id="processLogs">
  <td><?php echo CHtml::link('processLogs()', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'processLogs-detail')); ?></td>
  <td>Displays the log messages.</td>
  <td>CProfileLogRoute</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setReport">
  <td><?php echo CHtml::link('setReport()', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'setReport-detail')); ?></td>
  <td>Sets the type of the profiling report to display. Valid values include 'summary' and 'callstack'.</td>
  <td>CProfileLogRoute</td>
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
<tr id="aggregateResult">
  <td><?php echo CHtml::link('aggregateResult()', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'aggregateResult-detail')); ?></td>
  <td>Aggregates the report result.</td>
  <td>CProfileLogRoute</td>
</tr>
<tr id="displayCallstack">
  <td><?php echo CHtml::link('displayCallstack()', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'displayCallstack-detail')); ?></td>
  <td>Displays the callstack of the profiling procedures for display.</td>
  <td>CProfileLogRoute</td>
</tr>
<tr id="displaySummary">
  <td><?php echo CHtml::link('displaySummary()', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'displaySummary-detail')); ?></td>
  <td>Displays the summary report of the profiling result.</td>
  <td>CProfileLogRoute</td>
</tr>
<tr class="inherited" id="formatLogMessage">
  <td><?php echo CHtml::link('formatLogMessage()', array('/site/doc', 'view' => 'CLogRoute', '#' => 'formatLogMessage-detail')); ?></td>
  <td>Formats a log message given different fields.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CWebLogRoute', '#' => 'render-detail')); ?></td>
  <td>Renders the view.</td>
  <td><?php echo CHtml::link('CWebLogRoute', array('/site/doc', 'view' => 'CWebLogRoute')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="groupByToken-detail">
groupByToken<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$groupByToken</b>;</div>

<p>whether to aggregate results according to profiling tokens.
If false, the results will be aggregated by categories.
Defaults to true. Note that this property only affects the summary report
that is enabled when <?php echo CHtml::link('report', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'report')); ?> is 'summary'.</p>


<div class="detailHeader" id="report-detail">
report<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getReport</b>', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'getReport')); ?>()<br/>public void <?php echo CHtml::link('<b>setReport</b>', array('/site/doc', 'view' => 'CProfileLogRoute', '#' => 'setReport')); ?>(string $value)</div>

<p>the type of the profiling report to display. Defaults to 'summary'.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="aggregateResult-detail">
aggregateResult()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>aggregateResult</b>(array $result, float $delta)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$result</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">log result for this code block</td>
</tr>
<tr>
  <td class="paramNameCol">$delta</td>
  <td class="paramTypeCol">float</td>
  <td class="paramDescCol">time spent for this code block</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\logging\CProfileLogRoute.php#L194">yii\logging\CProfileLogRoute.php#L194</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">aggregateResult</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">,</span><span style="color: #0000BB">$delta</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$token</span><span style="color: #007700">,</span><span style="color: #0000BB">$calls</span><span style="color: #007700">,</span><span style="color: #0000BB">$min</span><span style="color: #007700">,</span><span style="color: #0000BB">$max</span><span style="color: #007700">,</span><span style="color: #0000BB">$total</span><span style="color: #007700">)=</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$delta</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$min</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$min</span><span style="color: #007700">=</span><span style="color: #0000BB">$delta</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$delta</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">$max</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$max</span><span style="color: #007700">=</span><span style="color: #0000BB">$delta</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$calls</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$total</span><span style="color: #007700">+=</span><span style="color: #0000BB">$delta</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #0000BB">$token</span><span style="color: #007700">,</span><span style="color: #0000BB">$calls</span><span style="color: #007700">,</span><span style="color: #0000BB">$min</span><span style="color: #007700">,</span><span style="color: #0000BB">$max</span><span style="color: #007700">,</span><span style="color: #0000BB">$total</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Aggregates the report result.</p>


<div class="detailHeader" id="displayCallstack-detail">
displayCallstack()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>displayCallstack</b>(array $logs)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$logs</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of logs</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\logging\CProfileLogRoute.php#L94">yii\logging\CProfileLogRoute.php#L94</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">displayCallstack</span><span style="color: #007700">(</span><span style="color: #0000BB">$logs</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stack</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$logs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]!==</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_PROFILE</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #DD0000">'begin:'</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]=</span><span style="color: #0000BB">$n</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stack</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$log</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #DD0000">'end:'</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$last</span><span style="color: #007700">=</span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]===</span><span style="color: #0000BB">$token</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$delta</span><span style="color: #007700">=</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]-</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]]=array(</span><span style="color: #0000BB">$token</span><span style="color: #007700">,</span><span style="color: #0000BB">$delta</span><span style="color: #007700">,</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CProfileLogRoute&nbsp;found&nbsp;a&nbsp;mismatching&nbsp;code&nbsp;block&nbsp;"{token}".&nbsp;Make&nbsp;sure&nbsp;the&nbsp;calls&nbsp;to&nbsp;Yii::beginProfile()&nbsp;and&nbsp;Yii::endProfile()&nbsp;be&nbsp;properly&nbsp;nested.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{token}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$token</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;remaining&nbsp;entries&nbsp;should&nbsp;be&nbsp;closed&nbsp;here<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$now</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;while((</span><span style="color: #0000BB">$last</span><span style="color: #007700">=</span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]]=array(</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$now</span><span style="color: #007700">-</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">],</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ksort</span><span style="color: #007700">(</span><span style="color: #0000BB">$results</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'profile-callstack'</span><span style="color: #007700">,</span><span style="color: #0000BB">$results</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Displays the callstack of the profiling procedures for display.</p>


<div class="detailHeader" id="displaySummary-detail">
displaySummary()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>displaySummary</b>(array $logs)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$logs</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of logs</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\logging\CProfileLogRoute.php#L137">yii\logging\CProfileLogRoute.php#L137</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">displaySummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$logs</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stack</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$logs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]!==</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_PROFILE</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #DD0000">'begin:'</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stack</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$log</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #DD0000">'end:'</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$last</span><span style="color: #007700">=</span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]===</span><span style="color: #0000BB">$token</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$delta</span><span style="color: #007700">=</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]-</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">groupByToken</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">=</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$token</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$token</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">aggregateResult</span><span style="color: #007700">(</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$token</span><span style="color: #007700">],</span><span style="color: #0000BB">$delta</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$token</span><span style="color: #007700">]=array(</span><span style="color: #0000BB">$token</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$delta</span><span style="color: #007700">,</span><span style="color: #0000BB">$delta</span><span style="color: #007700">,</span><span style="color: #0000BB">$delta</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CProfileLogRoute&nbsp;found&nbsp;a&nbsp;mismatching&nbsp;code&nbsp;block&nbsp;"{token}".&nbsp;Make&nbsp;sure&nbsp;the&nbsp;calls&nbsp;to&nbsp;Yii::beginProfile()&nbsp;and&nbsp;Yii::endProfile()&nbsp;be&nbsp;properly&nbsp;nested.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{token}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$token</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$now</span><span style="color: #007700">=</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;while((</span><span style="color: #0000BB">$last</span><span style="color: #007700">=</span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$delta</span><span style="color: #007700">=</span><span style="color: #0000BB">$now</span><span style="color: #007700">-</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">groupByToken&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$last</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$token</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$token</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">aggregateResult</span><span style="color: #007700">(</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$token</span><span style="color: #007700">],</span><span style="color: #0000BB">$delta</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[</span><span style="color: #0000BB">$token</span><span style="color: #007700">]=array(</span><span style="color: #0000BB">$token</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$delta</span><span style="color: #007700">,</span><span style="color: #0000BB">$delta</span><span style="color: #007700">,</span><span style="color: #0000BB">$delta</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$entries</span><span style="color: #007700">=</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">$results</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$func</span><span style="color: #007700">=</span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$a,$b'</span><span style="color: #007700">,</span><span style="color: #DD0000">'return&nbsp;$a[4]&lt;$b[4]?1:0;'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$entries</span><span style="color: #007700">,</span><span style="color: #0000BB">$func</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'profile-summary'</span><span style="color: #007700">,</span><span style="color: #0000BB">$entries</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Displays the summary report of the profiling result.</p>


<div class="detailHeader" id="getReport-detail">
getReport()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getReport</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the type of the profiling report to display. Defaults to 'summary'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\logging\CProfileLogRoute.php#L55">yii\logging\CProfileLogRoute.php#L55</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getReport</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_report</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\logging\CProfileLogRoute.php#L47">yii\logging\CProfileLogRoute.php#L47</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">levels</span><span style="color: #007700">=</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_PROFILE</span><span style="color: #007700">;<br />}</span>
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
public void <b>processLogs</b>(array $logs)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$logs</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of log messages</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\logging\CProfileLogRoute.php#L77">yii\logging\CProfileLogRoute.php#L77</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">processLogs</span><span style="color: #007700">(</span><span style="color: #0000BB">$logs</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!(</span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CWebApplication</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getIsAjaxRequest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getReport</span><span style="color: #007700">()===</span><span style="color: #DD0000">'summary'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displaySummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$logs</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayCallstack</span><span style="color: #007700">(</span><span style="color: #0000BB">$logs</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Displays the log messages.</p>


<div class="detailHeader" id="setReport-detail">
setReport()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setReport</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the type of the profiling report to display. Valid values include 'summary' and 'callstack'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\logging\CProfileLogRoute.php#L64">yii\logging\CProfileLogRoute.php#L64</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setReport</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #DD0000">'summary'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #DD0000">'callstack'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_report</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CProfileLogRoute.report&nbsp;"{report}"&nbsp;is&nbsp;invalid.&nbsp;Valid&nbsp;values&nbsp;include&nbsp;"summary"&nbsp;and&nbsp;"callstack".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{report}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


