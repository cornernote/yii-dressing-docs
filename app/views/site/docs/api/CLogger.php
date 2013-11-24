<?php
$this->pageTitle = $this->pageHeading = 'CLogger';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CLogger';
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
  <td><?php echo CHtml::link('system.logging', array('/site/doc', '#' => 'system.logging')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CLogger &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CLogger.php">yii\logging\CLogger.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CLogger records log messages in memory.
<br/><br/>
CLogger implements the methods to retrieve the messages with
various filter conditions, including log levels and log categories.</div>
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
<tr id="autoDump">
  <td><?php echo CHtml::link('autoDump', array('/site/doc', 'view' => 'CLogger', '#' => 'autoDump-detail')); ?></td>
  <td>boolean</td>
  <td>this property will be passed as the parameter to <?php echo CHtml::link('flush()', array('/site/doc', 'view' => 'CLogger', '#' => 'flush')); ?> when it is
called in <?php echo CHtml::link('log()', array('/site/doc', 'view' => 'CLogger', '#' => 'log')); ?> due to the limit of <?php echo CHtml::link('autoFlush', array('/site/doc', 'view' => 'CLogger', '#' => 'autoFlush')); ?> being reached.</td>
  <td>CLogger</td>
</tr>
<tr id="autoFlush">
  <td><?php echo CHtml::link('autoFlush', array('/site/doc', 'view' => 'CLogger', '#' => 'autoFlush-detail')); ?></td>
  <td>integer</td>
  <td>how many messages should be logged before they are flushed to destinations.</td>
  <td>CLogger</td>
</tr>
<tr id="executionTime">
  <td><?php echo CHtml::link('executionTime', array('/site/doc', 'view' => 'CLogger', '#' => 'executionTime-detail')); ?></td>
  <td>float</td>
  <td>Returns the total time for serving the current request.</td>
  <td>CLogger</td>
</tr>
<tr id="logs">
  <td><?php echo CHtml::link('logs', array('/site/doc', 'view' => 'CLogger', '#' => 'logs-detail')); ?></td>
  <td>array</td>
  <td>Retrieves log messages.</td>
  <td>CLogger</td>
</tr>
<tr id="memoryUsage">
  <td><?php echo CHtml::link('memoryUsage', array('/site/doc', 'view' => 'CLogger', '#' => 'memoryUsage-detail')); ?></td>
  <td>integer</td>
  <td>Returns the memory usage of the current application.</td>
  <td>CLogger</td>
</tr>
<tr id="profilingResults">
  <td><?php echo CHtml::link('profilingResults', array('/site/doc', 'view' => 'CLogger', '#' => 'profilingResults-detail')); ?></td>
  <td>array</td>
  <td>Returns the profiling results.</td>
  <td>CLogger</td>
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
<tr id="flush">
  <td><?php echo CHtml::link('flush()', array('/site/doc', 'view' => 'CLogger', '#' => 'flush-detail')); ?></td>
  <td>Removes all recorded messages from the memory.</td>
  <td>CLogger</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getExecutionTime">
  <td><?php echo CHtml::link('getExecutionTime()', array('/site/doc', 'view' => 'CLogger', '#' => 'getExecutionTime-detail')); ?></td>
  <td>Returns the total time for serving the current request.</td>
  <td>CLogger</td>
</tr>
<tr id="getLogs">
  <td><?php echo CHtml::link('getLogs()', array('/site/doc', 'view' => 'CLogger', '#' => 'getLogs-detail')); ?></td>
  <td>Retrieves log messages.</td>
  <td>CLogger</td>
</tr>
<tr id="getMemoryUsage">
  <td><?php echo CHtml::link('getMemoryUsage()', array('/site/doc', 'view' => 'CLogger', '#' => 'getMemoryUsage-detail')); ?></td>
  <td>Returns the memory usage of the current application.</td>
  <td>CLogger</td>
</tr>
<tr id="getProfilingResults">
  <td><?php echo CHtml::link('getProfilingResults()', array('/site/doc', 'view' => 'CLogger', '#' => 'getProfilingResults-detail')); ?></td>
  <td>Returns the profiling results.</td>
  <td>CLogger</td>
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
<tr id="log">
  <td><?php echo CHtml::link('log()', array('/site/doc', 'view' => 'CLogger', '#' => 'log-detail')); ?></td>
  <td>Logs a message.</td>
  <td>CLogger</td>
</tr>
<tr id="onFlush">
  <td><?php echo CHtml::link('onFlush()', array('/site/doc', 'view' => 'CLogger', '#' => 'onFlush-detail')); ?></td>
  <td>Raises an <code>onFlush</code> event.</td>
  <td>CLogger</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
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
<tr id="onFlush">
  <td><?php echo CHtml::link('onFlush', array('/site/doc', 'view' => 'CLogger', '#' => 'onFlush-detail')); ?></td>
  <td>Raises an <code>onFlush</code> event.</td>
  <td>CLogger</td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="autoDump-detail">
autoDump<span class="detailHeaderTag">
property
 (available since v1.1.8)
</span>
</div>

<div class="signature">
public boolean <b>$autoDump</b>;</div>

<p>this property will be passed as the parameter to <?php echo CHtml::link('flush()', array('/site/doc', 'view' => 'CLogger', '#' => 'flush')); ?> when it is
called in <?php echo CHtml::link('log()', array('/site/doc', 'view' => 'CLogger', '#' => 'log')); ?> due to the limit of <?php echo CHtml::link('autoFlush', array('/site/doc', 'view' => 'CLogger', '#' => 'autoFlush')); ?> being reached.
By default, this property is false, meaning the filtered messages are still kept in the memory
by each log route after calling <?php echo CHtml::link('flush()', array('/site/doc', 'view' => 'CLogger', '#' => 'flush')); ?>. If this is true, the filtered messages
will be written to the actual medium each time <?php echo CHtml::link('flush()', array('/site/doc', 'view' => 'CLogger', '#' => 'flush')); ?> is called within <?php echo CHtml::link('log()', array('/site/doc', 'view' => 'CLogger', '#' => 'log')); ?>.</p>


<div class="detailHeader" id="autoFlush-detail">
autoFlush<span class="detailHeaderTag">
property
 (available since v1.1.0)
</span>
</div>

<div class="signature">
public integer <b>$autoFlush</b>;</div>

<p>how many messages should be logged before they are flushed to destinations.
Defaults to 10,000, meaning for every 10,000 messages, the <?php echo CHtml::link('flush', array('/site/doc', 'view' => 'CLogger', '#' => 'flush')); ?> method will be
automatically invoked once. If this is 0, it means messages will never be flushed automatically.</p>


<div class="detailHeader" id="executionTime-detail">
executionTime<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public float <?php echo CHtml::link('<b>getExecutionTime</b>', array('/site/doc', 'view' => 'CLogger', '#' => 'getExecutionTime')); ?>()</div>

<p>Returns the total time for serving the current request.
This method calculates the difference between now and the timestamp
defined by constant YII_BEGIN_TIME.
To estimate the execution time more accurately, the constant should
be defined as early as possible (best at the beginning of the entry script.)</p>


<div class="detailHeader" id="logs-detail">
logs<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getLogs</b>', array('/site/doc', 'view' => 'CLogger', '#' => 'getLogs')); ?>(string $levels='', array|string $categories=array (
), array|string $except=array (
))</div>

<p>Retrieves log messages.
<br/><br/>
Messages may be filtered by log levels and/or categories.
A level filter is specified by a list of levels separated by comma or space
(e.g. 'trace, error'). A category filter is similar to level filter
(e.g. 'system, system.web'). A difference is that in category filter
you can use pattern like 'system.*' to indicate all categories starting
with 'system'.
<br/><br/>
If you do not specify level filter, it will bring back logs at all levels.
The same applies to category filter.
<br/><br/>
Level filter and category filter are combinational, i.e., only messages
satisfying both filter conditions will be returned.</p>


<div class="detailHeader" id="memoryUsage-detail">
memoryUsage<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getMemoryUsage</b>', array('/site/doc', 'view' => 'CLogger', '#' => 'getMemoryUsage')); ?>()</div>

<p>Returns the memory usage of the current application.
This method relies on the PHP function memory_get_usage().
If it is not available, the method will attempt to use OS programs
to determine the memory usage. A value 0 will be returned if the
memory usage can still not be determined.</p>


<div class="detailHeader" id="profilingResults-detail">
profilingResults<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getProfilingResults</b>', array('/site/doc', 'view' => 'CLogger', '#' => 'getProfilingResults')); ?>(string $token=NULL, string $categories=NULL, boolean $refresh=false)</div>

<p>Returns the profiling results.
The results may be filtered by token and/or category.
If no filter is specified, the returned results would be an array with each element
being array($token,$category,$time).
If a filter is specified, the results would be an array of timings.
<br/><br/>
Since 1.1.11, filtering results by category supports the same format used for filtering logs in
<?php echo CHtml::link('getLogs', array('/site/doc', 'view' => 'CLogger', '#' => 'getLogs')); ?>, and similarly supports filtering by multiple categories and wildcard.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="flush-detail">
flush()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>flush</b>(boolean $dumpLogs=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dumpLogs</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to process the logs immediately as they are passed to log route</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CLogger.php#L338">yii\logging\CLogger.php#L338</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">flush</span><span style="color: #007700">(</span><span style="color: #0000BB">$dumpLogs</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onFlush</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'dumpLogs'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$dumpLogs</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logs</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logCount</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Removes all recorded messages from the memory.
This method will raise an <?php echo CHtml::link('onFlush', array('/site/doc', 'view' => 'CLogger', '#' => 'onFlush')); ?> event.
The attached event handlers can process the log messages before they are removed.</p>


<div class="detailHeader" id="getExecutionTime-detail">
getExecutionTime()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public float <b>getExecutionTime</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">float</td>
  <td class="paramDescCol">the total time for serving the current request.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CLogger.php#L222">yii\logging\CLogger.php#L222</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getExecutionTime</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)-</span><span style="color: #0000BB">YII_BEGIN_TIME</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the total time for serving the current request.
This method calculates the difference between now and the timestamp
defined by constant YII_BEGIN_TIME.
To estimate the execution time more accurately, the constant should
be defined as early as possible (best at the beginning of the entry script.)</p>


<div class="detailHeader" id="getLogs-detail">
getLogs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getLogs</b>(string $levels='', array|string $categories=array (
), array|string $except=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$levels</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">level filter</td>
</tr>
<tr>
  <td class="paramNameCol">$categories</td>
  <td class="paramTypeCol">array|string</td>
  <td class="paramDescCol">category filter</td>
</tr>
<tr>
  <td class="paramNameCol">$except</td>
  <td class="paramTypeCol">array|string</td>
  <td class="paramDescCol">list of log categories to ignore</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of messages. Each array element represents one message
with the following structure:
array(
  [0] => message (string)
  [1] => level (string)
  [2] => category (string)
  [3] => timestamp (float, obtained by microtime(true));</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CLogger.php#L133">yii\logging\CLogger.php#L133</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLogs</span><span style="color: #007700">(</span><span style="color: #0000BB">$levels</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$categories</span><span style="color: #007700">=array(),&nbsp;</span><span style="color: #0000BB">$except</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_levels</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$levels</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$categories</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_categories</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$categories</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_categories</span><span style="color: #007700">=</span><span style="color: #0000BB">array_filter</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'strtolower'</span><span style="color: #007700">,</span><span style="color: #0000BB">$categories</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$except</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_except</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$except</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_except</span><span style="color: #007700">=</span><span style="color: #0000BB">array_filter</span><span style="color: #007700">(</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'strtolower'</span><span style="color: #007700">,</span><span style="color: #0000BB">$except</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logs</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$levels</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">=</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">array_filter</span><span style="color: #007700">(</span><span style="color: #0000BB">$ret</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'filterByLevel'</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_categories</span><span style="color: #007700">)&nbsp;||&nbsp;!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_except</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">=</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">array_filter</span><span style="color: #007700">(</span><span style="color: #0000BB">$ret</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'filterByCategory'</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves log messages.
<br/><br/>
Messages may be filtered by log levels and/or categories.
A level filter is specified by a list of levels separated by comma or space
(e.g. 'trace, error'). A category filter is similar to level filter
(e.g. 'system, system.web'). A difference is that in category filter
you can use pattern like 'system.*' to indicate all categories starting
with 'system'.
<br/><br/>
If you do not specify level filter, it will bring back logs at all levels.
The same applies to category filter.
<br/><br/>
Level filter and category filter are combinational, i.e., only messages
satisfying both filter conditions will be returned.</p>


<div class="detailHeader" id="getMemoryUsage-detail">
getMemoryUsage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getMemoryUsage</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">memory usage of the application (in bytes).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CLogger.php#L235">yii\logging\CLogger.php#L235</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMemoryUsage</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'memory_get_usage'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">memory_get_usage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strncmp</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_OS</span><span style="color: #007700">,</span><span style="color: #DD0000">'WIN'</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">'tasklist&nbsp;/FI&nbsp;"PID&nbsp;eq&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">getmypid</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&nbsp;/FO&nbsp;LIST'</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$output</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">])?</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\D]/'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">])*</span><span style="color: #0000BB">1024&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pid</span><span style="color: #007700">=</span><span style="color: #0000BB">getmypid</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"ps&nbsp;-eo%mem,rss,pid&nbsp;|&nbsp;grep&nbsp;</span><span style="color: #0000BB">$pid</span><span style="color: #DD0000">"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"&nbsp;&nbsp;"</span><span style="color: #007700">,</span><span style="color: #0000BB">$output</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$output</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]*</span><span style="color: #0000BB">1024&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Returns the memory usage of the current application.
This method relies on the PHP function memory_get_usage().
If it is not available, the method will attempt to use OS programs
to determine the memory usage. A value 0 will be returned if the
memory usage can still not be determined.</p>


<div class="detailHeader" id="getProfilingResults-detail">
getProfilingResults()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getProfilingResults</b>(string $token=NULL, string $categories=NULL, boolean $refresh=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$token</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">token filter. Defaults to null, meaning not filtered by token.</td>
</tr>
<tr>
  <td class="paramNameCol">$categories</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">category filter. Defaults to null, meaning not filtered by category.</td>
</tr>
<tr>
  <td class="paramNameCol">$refresh</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to refresh the internal timing calculations. If false,
only the first time calling this method will the timings be calculated internally.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the profiling results.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CLogger.php#L272">yii\logging\CLogger.php#L272</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getProfilingResults</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$categories</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_timings</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$refresh</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">calculateTimings</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$token</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$categories</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_timings</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$timings&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_timings</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$categories</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_categories</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$categories</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$timings</span><span style="color: #007700">=</span><span style="color: #0000BB">array_filter</span><span style="color: #007700">(</span><span style="color: #0000BB">$timings</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'filterTimingByCategory'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$timings&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$timing</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$token</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$timing</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]===</span><span style="color: #0000BB">$token</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$timing</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$results</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the profiling results.
The results may be filtered by token and/or category.
If no filter is specified, the returned results would be an array with each element
being array($token,$category,$time).
If a filter is specified, the results would be an array of timings.
<br/><br/>
Since 1.1.11, filtering results by category supports the same format used for filtering logs in
<?php echo CHtml::link('getLogs', array('/site/doc', 'view' => 'CLogger', '#' => 'getLogs')); ?>, and similarly supports filtering by multiple categories and wildcard.</p>


<div class="detailHeader" id="log-detail">
log()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>log</b>(string $message, string $level='info', string $category='application')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">message to be logged</td>
</tr>
<tr>
  <td class="paramNameCol">$level</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">level of the message (e.g. 'Trace', 'Warning', 'Error'). It is case-insensitive.</td>
</tr>
<tr>
  <td class="paramNameCol">$category</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">category of the message (e.g. 'system.web'). It is case-insensitive.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CLogger.php#L94">yii\logging\CLogger.php#L94</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">=</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">=</span><span style="color: #DD0000">'application'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logs</span><span style="color: #007700">[]=array(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logCount</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoFlush</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_logCount</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoFlush&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_processing</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_processing</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flush</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoDump</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_processing</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Logs a message.
Messages logged by this method may be retrieved back via <?php echo CHtml::link('getLogs', array('/site/doc', 'view' => 'CLogger', '#' => 'getLogs')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getLogs', array('/site/doc', 'view' => 'CLogger', '#' => 'getLogs')); ?></li>
</ul>
</div>

<div class="detailHeader" id="onFlush-detail">
onFlush()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onFlush</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">the event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CLogger.php#L350">yii\logging\CLogger.php#L350</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onFlush</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onFlush'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Raises an <code>onFlush</code> event.</p>


