<?php
$this->pageTitle = $this->pageHeading = 'CEmailLogRoute';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CEmailLogRoute';
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
  <td>class CEmailLogRoute &raquo;
<?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php">yii\logging\CEmailLogRoute.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CEmailLogRoute sends selected log messages to email addresses.
<br/><br/>
The target email addresses may be specified via <?php echo CHtml::link('emails', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setEmails')); ?> property.
Optionally, you may set the email <?php echo CHtml::link('subject', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setSubject')); ?>, the
<?php echo CHtml::link('sentFrom', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setSentFrom')); ?> address and any additional <?php echo CHtml::link('headers', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setHeaders')); ?>.</div>
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
<tr id="emails">
  <td><?php echo CHtml::link('emails', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'emails-detail')); ?></td>
  <td>array</td>
  <td>list of destination email addresses</td>
  <td>CEmailLogRoute</td>
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
<tr id="headers">
  <td><?php echo CHtml::link('headers', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'headers-detail')); ?></td>
  <td>array</td>
  <td>additional headers to use when sending an email.</td>
  <td>CEmailLogRoute</td>
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
<tr id="sentFrom">
  <td><?php echo CHtml::link('sentFrom', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'sentFrom-detail')); ?></td>
  <td>string</td>
  <td>send from address of the email</td>
  <td>CEmailLogRoute</td>
</tr>
<tr id="subject">
  <td><?php echo CHtml::link('subject', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'subject-detail')); ?></td>
  <td>string</td>
  <td>email subject.</td>
  <td>CEmailLogRoute</td>
</tr>
<tr id="utf8">
  <td><?php echo CHtml::link('utf8', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'utf8-detail')); ?></td>
  <td>boolean</td>
  <td>set this property to true value in case log data you're going to send through emails contains
non-latin or UTF-8 characters.</td>
  <td>CEmailLogRoute</td>
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
<tr id="getEmails">
  <td><?php echo CHtml::link('getEmails()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'getEmails-detail')); ?></td>
  <td>Returns list of destination email addresses</td>
  <td>CEmailLogRoute</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getHeaders">
  <td><?php echo CHtml::link('getHeaders()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'getHeaders-detail')); ?></td>
  <td>Returns additional headers to use when sending an email.</td>
  <td>CEmailLogRoute</td>
</tr>
<tr id="getSentFrom">
  <td><?php echo CHtml::link('getSentFrom()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'getSentFrom-detail')); ?></td>
  <td>Returns send from address of the email</td>
  <td>CEmailLogRoute</td>
</tr>
<tr id="getSubject">
  <td><?php echo CHtml::link('getSubject()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'getSubject-detail')); ?></td>
  <td>Returns email subject. Defaults to CEmailLogRoute::DEFAULT_SUBJECT</td>
  <td>CEmailLogRoute</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CLogRoute', '#' => 'init-detail')); ?></td>
  <td>Initializes the route.</td>
  <td><?php echo CHtml::link('CLogRoute', array('/site/doc', 'view' => 'CLogRoute')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setEmails">
  <td><?php echo CHtml::link('setEmails()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setEmails-detail')); ?></td>
  <td>Sets list of destination email addresses. If the value is
a string, it is assumed to be comma-separated email addresses.</td>
  <td>CEmailLogRoute</td>
</tr>
<tr id="setHeaders">
  <td><?php echo CHtml::link('setHeaders()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setHeaders-detail')); ?></td>
  <td>Sets list of additional headers to use when sending an email.
If the value is a string, it is assumed to be line break separated headers.</td>
  <td>CEmailLogRoute</td>
</tr>
<tr id="setSentFrom">
  <td><?php echo CHtml::link('setSentFrom()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setSentFrom-detail')); ?></td>
  <td>Sets send from address of the email</td>
  <td>CEmailLogRoute</td>
</tr>
<tr id="setSubject">
  <td><?php echo CHtml::link('setSubject()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setSubject-detail')); ?></td>
  <td>Sets email subject.</td>
  <td>CEmailLogRoute</td>
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
  <td><?php echo CHtml::link('processLogs()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'processLogs-detail')); ?></td>
  <td>Sends log messages to specified email addresses.</td>
  <td>CEmailLogRoute</td>
</tr>
<tr id="sendEmail">
  <td><?php echo CHtml::link('sendEmail()', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'sendEmail-detail')); ?></td>
  <td>Sends an email.</td>
  <td>CEmailLogRoute</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="emails-detail">
emails<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getEmails</b>', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'getEmails')); ?>()<br/>public void <?php echo CHtml::link('<b>setEmails</b>', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setEmails')); ?>(mixed $value)</div>

<p>list of destination email addresses</p>


<div class="detailHeader" id="headers-detail">
headers<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getHeaders</b>', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'getHeaders')); ?>()<br/>public void <?php echo CHtml::link('<b>setHeaders</b>', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setHeaders')); ?>(mixed $value)</div>

<p>additional headers to use when sending an email.</p>


<div class="detailHeader" id="sentFrom-detail">
sentFrom<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getSentFrom</b>', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'getSentFrom')); ?>()<br/>public void <?php echo CHtml::link('<b>setSentFrom</b>', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setSentFrom')); ?>(string $value)</div>

<p>send from address of the email</p>


<div class="detailHeader" id="subject-detail">
subject<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getSubject</b>', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'getSubject')); ?>()<br/>public void <?php echo CHtml::link('<b>setSubject</b>', array('/site/doc', 'view' => 'CEmailLogRoute', '#' => 'setSubject')); ?>(string $value)</div>

<p>email subject. Defaults to CEmailLogRoute::DEFAULT_SUBJECT</p>


<div class="detailHeader" id="utf8-detail">
utf8<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public boolean <b>$utf8</b>;</div>

<p>set this property to true value in case log data you're going to send through emails contains
non-latin or UTF-8 characters. Emails would be UTF-8 encoded.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getEmails-detail">
getEmails()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getEmails</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of destination email addresses</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L104">yii\logging\CEmailLogRoute.php#L104</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getEmails</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_email</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getHeaders-detail">
getHeaders()
<span class="detailHeaderTag">
method
(available since v1.1.4)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getHeaders</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional headers to use when sending an email.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L157">yii\logging\CEmailLogRoute.php#L157</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHeaders</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_headers</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSentFrom-detail">
getSentFrom()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSentFrom</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">send from address of the email</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L140">yii\logging\CEmailLogRoute.php#L140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSentFrom</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_from</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSubject-detail">
getSubject()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSubject</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">email subject. Defaults to CEmailLogRoute::DEFAULT_SUBJECT</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L124">yii\logging\CEmailLogRoute.php#L124</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSubject</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_subject</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L56">yii\logging\CEmailLogRoute.php#L56</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">processLogs</span><span style="color: #007700">(</span><span style="color: #0000BB">$logs</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$logs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatLogMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">],</span><span style="color: #0000BB">$log</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">wordwrap</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">70</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$subject</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSubject</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$subject</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$subject</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Application&nbsp;Log'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEmails</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$email</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sendEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$email</span><span style="color: #007700">,</span><span style="color: #0000BB">$subject</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sends log messages to specified email addresses.</p>


<div class="detailHeader" id="sendEmail-detail">
sendEmail()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>sendEmail</b>(string $email, string $subject, string $message)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$email</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">single email address</td>
</tr>
<tr>
  <td class="paramNameCol">$subject</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">email subject</td>
</tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">email content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L75">yii\logging\CEmailLogRoute.php#L75</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">sendEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$email</span><span style="color: #007700">,</span><span style="color: #0000BB">$subject</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$headers</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHeaders</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">utf8</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$headers</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"MIME-Version:&nbsp;1.0"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$headers</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"Content-Type:&nbsp;text/plain;&nbsp;charset=UTF-8"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$subject</span><span style="color: #007700">=</span><span style="color: #DD0000">'=?UTF-8?B?'</span><span style="color: #007700">.</span><span style="color: #0000BB">base64_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$subject</span><span style="color: #007700">).</span><span style="color: #DD0000">'?='</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$from</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSentFrom</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/([^&lt;]*)&lt;([^&gt;]*)&gt;/iu'</span><span style="color: #007700">,</span><span style="color: #0000BB">$from</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">utf8&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'=?UTF-8?B?'</span><span style="color: #007700">.</span><span style="color: #0000BB">base64_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">])).</span><span style="color: #DD0000">'?='&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$from</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$headers</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"From:&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;&lt;</span><span style="color: #007700">{</span><span style="color: #0000BB">$from</span><span style="color: #007700">}</span><span style="color: #DD0000">&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$headers</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"From:&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$from</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$headers</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"Reply-To:&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$from</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mail</span><span style="color: #007700">(</span><span style="color: #0000BB">$email</span><span style="color: #007700">,</span><span style="color: #0000BB">$subject</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$headers</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Sends an email.</p>


<div class="detailHeader" id="setEmails-detail">
setEmails()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setEmails</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">list of destination email addresses. If the value is
a string, it is assumed to be comma-separated email addresses.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L113">yii\logging\CEmailLogRoute.php#L113</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setEmails</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_email</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_email</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[\s,]+/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setHeaders-detail">
setHeaders()
<span class="detailHeaderTag">
method
(available since v1.1.4)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setHeaders</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">list of additional headers to use when sending an email.
If the value is a string, it is assumed to be line break separated headers.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L167">yii\logging\CEmailLogRoute.php#L167</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setHeaders</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_headers</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_headers</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\r\n|\n/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setSentFrom-detail">
setSentFrom()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSentFrom</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">send from address of the email</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L148">yii\logging\CEmailLogRoute.php#L148</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSentFrom</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_from</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setSubject-detail">
setSubject()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSubject</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">email subject.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\logging\CEmailLogRoute.php#L132">yii\logging\CEmailLogRoute.php#L132</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSubject</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_subject</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


