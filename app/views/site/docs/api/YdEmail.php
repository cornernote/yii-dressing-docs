<?php
$this->pageTitle = $this->pageHeading = 'YdEmail';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdEmail';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdEmail &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdEmail.php">dressing\components\YdEmail.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdEmail</div>
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
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="enableUserFlash">
  <td><?php echo CHtml::link('enableUserFlash', array('/site/doc', 'view' => 'YdEmail', '#' => 'enableUserFlash-detail')); ?></td>
  <td>bool</td>
  <td>True if sent emails should be displayed as flash messages</td>
  <td>YdEmail</td>
</tr>
<tr id="fromEmail">
  <td><?php echo CHtml::link('fromEmail', array('/site/doc', 'view' => 'YdEmail', '#' => 'fromEmail-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdEmail</td>
</tr>
<tr id="fromName">
  <td><?php echo CHtml::link('fromName', array('/site/doc', 'view' => 'YdEmail', '#' => 'fromName-detail')); ?></td>
  <td>string</td>
  <td>defaults to the application name</td>
  <td>YdEmail</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="renderMethod">
  <td><?php echo CHtml::link('renderMethod', array('/site/doc', 'view' => 'YdEmail', '#' => 'renderMethod-detail')); ?></td>
  <td>string</td>
  <td>Render method, can be one of: php, database</td>
  <td>YdEmail</td>
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
<tr id="getEmailSpool">
  <td><?php echo CHtml::link('getEmailSpool()', array('/site/doc', 'view' => 'YdEmail', '#' => 'getEmailSpool-detail')); ?></td>
  <td></td>
  <td>YdEmail</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdEmail', '#' => 'init-detail')); ?></td>
  <td></td>
  <td>YdEmail</td>
</tr>
<tr id="processSpool">
  <td><?php echo CHtml::link('processSpool()', array('/site/doc', 'view' => 'YdEmail', '#' => 'processSpool-detail')); ?></td>
  <td>Find pending emails and attempt to deliver them</td>
  <td>YdEmail</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="renderEmailTemplate">
  <td><?php echo CHtml::link('renderEmailTemplate()', array('/site/doc', 'view' => 'YdEmail', '#' => 'renderEmailTemplate-detail')); ?></td>
  <td></td>
  <td>YdEmail</td>
</tr>
<tr id="sendEmail">
  <td><?php echo CHtml::link('sendEmail()', array('/site/doc', 'view' => 'YdEmail', '#' => 'sendEmail-detail')); ?></td>
  <td>Allows sending a quick email.</td>
  <td>YdEmail</td>
</tr>
<tr id="sendUserRecover">
  <td><?php echo CHtml::link('sendUserRecover()', array('/site/doc', 'view' => 'YdEmail', '#' => 'sendUserRecover-detail')); ?></td>
  <td></td>
  <td>YdEmail</td>
</tr>
<tr id="sendUserWelcome">
  <td><?php echo CHtml::link('sendUserWelcome()', array('/site/doc', 'view' => 'YdEmail', '#' => 'sendUserWelcome-detail')); ?></td>
  <td></td>
  <td>YdEmail</td>
</tr>
<tr id="userFlash">
  <td><?php echo CHtml::link('userFlash()', array('/site/doc', 'view' => 'YdEmail', '#' => 'userFlash-detail')); ?></td>
  <td></td>
  <td>YdEmail</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="enableUserFlash-detail">
enableUserFlash<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$enableUserFlash</b>;</div>

<p>True if sent emails should be displayed as flash messages</p>


<div class="detailHeader" id="fromEmail-detail">
fromEmail<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$fromEmail</b>;</div>

<p></p>


<div class="detailHeader" id="fromName-detail">
fromName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$fromName</b>;</div>

<p>defaults to the application name</p>


<div class="detailHeader" id="renderMethod-detail">
renderMethod<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$renderMethod</b>;</div>

<p>Render method, can be one of: php, database</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getEmailSpool-detail">
getEmailSpool()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('YdEmailSpool', array('/site/doc', 'view' => 'YdEmailSpool')); ?> <b>getEmailSpool</b>(array $message)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('YdEmailSpool', array('/site/doc', 'view' => 'YdEmailSpool')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdEmail.php#L133">dressing\components\YdEmail.php#L133</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getEmailSpool</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">YdEmailSpool</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">status&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'pending'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">template&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">vd</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message_subject&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">[</span><span style="color: #DD0000">'message_subject'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message_text&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">[</span><span style="color: #DD0000">'message_text'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message_html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">[</span><span style="color: #DD0000">'message_html'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdEmail.php#L39">dressing\components\YdEmail.php#L39</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fromName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fromName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="processSpool-detail">
processSpool()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>processSpool</b>(bool $mailinator=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$mailinator</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdEmail.php#L231">dressing\components\YdEmail.php#L231</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">processSpool</span><span style="color: #007700">(</span><span style="color: #0000BB">$mailinator&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;all&nbsp;the&nbsp;spooled&nbsp;emails<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$spools&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdEmailSpool</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">findAll</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'condition'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'t.status=:status'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'params'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">':status'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'pending'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'order'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'t.priority&nbsp;DESC,&nbsp;t.id&nbsp;ASC'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'limit'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$spools&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">)&nbsp;{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;update&nbsp;status&nbsp;to&nbsp;emailing<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">status&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'processing'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;the&nbsp;to_email<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$to_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mailinator&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'@'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_email</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'@mailinator.com'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_email</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;build&nbsp;the&nbsp;message<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$SM&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">swiftMailer</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$SM</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message_subject</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFrom</span><span style="color: #007700">(</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_name&nbsp;</span><span style="color: #007700">?&nbsp;array(</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_email&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_name</span><span style="color: #007700">)&nbsp;:&nbsp;array(</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_email</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTo</span><span style="color: #007700">(</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_name&nbsp;</span><span style="color: #007700">?&nbsp;array(</span><span style="color: #0000BB">$to_email&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_name</span><span style="color: #007700">)&nbsp;:&nbsp;array(</span><span style="color: #0000BB">$to_email</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setBody</span><span style="color: #007700">(</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message_text</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addPart</span><span style="color: #007700">(</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message_html</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'text/html'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attachment&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attachment</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attach</span><span style="color: #007700">(</span><span style="color: #0000BB">Swift_Attachment</span><span style="color: #007700">::</span><span style="color: #0000BB">fromPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$attachment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;send&nbsp;the&nbsp;email&nbsp;and&nbsp;update&nbsp;status<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Transport&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$SM</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mailTransport</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Mailer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$SM</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mailer</span><span style="color: #007700">(</span><span style="color: #0000BB">$Transport</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$Mailer</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">send</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">status&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'emailed'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sent&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d&nbsp;H:i:s'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">status&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$spool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Find pending emails and attempt to deliver them</p>


<div class="detailHeader" id="renderEmailTemplate-detail">
renderEmailTemplate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>renderEmailTemplate</b>($template $template, $viewParams $viewParams=array (
), $layout='layout.default')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$template</td>
  <td class="paramTypeCol">$template</td>
  <td class="paramDescCol">string</td>
</tr>
<tr>
  <td class="paramNameCol">$viewParams</td>
  <td class="paramTypeCol">$viewParams</td>
  <td class="paramDescCol">array</td>
</tr>
<tr>
  <td class="paramNameCol">$layout</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdEmail.php#L149">dressing\components\YdEmail.php#L149</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderEmailTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$viewParams&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$layout&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'layout.default'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">method_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'renderEmailTemplate_'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderMethod</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderMethod&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'renderEmailTemplate_'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderMethod</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$layout</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="sendEmail-detail">
sendEmail()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>sendEmail</b>($to_email $to_email, $subject $subject, $message_text $message_text, $filename $filename=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$to_email</td>
  <td class="paramTypeCol">$to_email</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$subject</td>
  <td class="paramTypeCol">$subject</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$message_text</td>
  <td class="paramTypeCol">$message_text</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$filename</td>
  <td class="paramTypeCol">$filename</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdEmail.php#L56">dressing\components\YdEmail.php#L56</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">sendEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$to_email</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$subject</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$message_text</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEmailSpool</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'message_subject'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$subject</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'message_text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$message_text</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'message_html'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatNtext</span><span style="color: #007700">(</span><span style="color: #0000BB">$message_text</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">status&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'attaching'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'pending'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fromEmail</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fromName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$to_email</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attachment&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">YdAttachment</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attachment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'EmailSpool'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attachment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model_id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attachment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$filename</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attachment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handleFileUpload&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">status&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'pending'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Allows sending a quick email.
<br/><br/>
Eg:
Yii::app()->email->sendEmail('webmaster@localhost', 'test', 'hello world');</p>


<div class="detailHeader" id="sendUserRecover-detail">
sendUserRecover()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>sendUserRecover</b>($user $user)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$user</td>
  <td class="paramTypeCol">$user</td>
  <td class="paramDescCol">User</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdEmail.php#L84">dressing\components\YdEmail.php#L84</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">sendUserRecover</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;recovery&nbsp;temp&nbsp;login&nbsp;link<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$token&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdToken</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #DD0000">'+1day'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createAbsoluteUrl</span><span style="color: #007700">(</span><span style="color: #DD0000">'/account/passwordReset'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'token'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;save&nbsp;EmailSpool<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEmailSpool</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderEmailTemplate</span><span style="color: #007700">(</span><span style="color: #DD0000">'user.recover'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'user'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'url'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">priority&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">email</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fromEmail</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fromName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model_id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="sendUserWelcome-detail">
sendUserWelcome()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>sendUserWelcome</b>($user $user)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$user</td>
  <td class="paramTypeCol">$user</td>
  <td class="paramDescCol">User</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdEmail.php#L108">dressing\components\YdEmail.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">sendUserWelcome</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;activation&nbsp;token<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$token&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdToken</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #DD0000">'+30days'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createAbsoluteUrl</span><span style="color: #007700">(</span><span style="color: #DD0000">'/account/activate'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'token'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;save&nbsp;EmailSpool<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEmailSpool</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderEmailTemplate</span><span style="color: #007700">(</span><span style="color: #DD0000">'user.welcome'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'user'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'url'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">priority&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">email</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fromEmail</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fromName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model_id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="userFlash-detail">
userFlash()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>userFlash</b>($emailSpool $emailSpool)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$emailSpool</td>
  <td class="paramTypeCol">$emailSpool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdEmail.php#L213">dressing\components\YdEmail.php#L213</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">userFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableUserFlash</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$debug&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderPartial</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing.views.email.debug'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$debug</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


