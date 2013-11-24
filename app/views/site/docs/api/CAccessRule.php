<?php
$this->pageTitle = $this->pageHeading = 'CAccessRule';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CAccessRule';
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
  <td><?php echo CHtml::link('system.web.auth', array('/site/doc', '#' => 'system.web.auth')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CAccessRule &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php">yii/web/auth/CAccessControlFilter.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CAccessRule represents an access rule that is managed by <?php echo CHtml::link('CAccessControlFilter', array('/site/doc', 'view' => 'CAccessControlFilter')); ?>.</div>
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
<tr id="actions">
  <td><?php echo CHtml::link('actions', array('/site/doc', 'view' => 'CAccessRule', '#' => 'actions-detail')); ?></td>
  <td>array</td>
  <td>list of action IDs that this rule applies to.</td>
  <td>CAccessRule</td>
</tr>
<tr id="allow">
  <td><?php echo CHtml::link('allow', array('/site/doc', 'view' => 'CAccessRule', '#' => 'allow-detail')); ?></td>
  <td>boolean</td>
  <td>whether this is an 'allow' rule or 'deny' rule.</td>
  <td>CAccessRule</td>
</tr>
<tr id="controllers">
  <td><?php echo CHtml::link('controllers', array('/site/doc', 'view' => 'CAccessRule', '#' => 'controllers-detail')); ?></td>
  <td>array</td>
  <td>list of controller IDs that this rule applies to.</td>
  <td>CAccessRule</td>
</tr>
<tr id="deniedCallback">
  <td><?php echo CHtml::link('deniedCallback', array('/site/doc', 'view' => 'CAccessRule', '#' => 'deniedCallback-detail')); ?></td>
  <td>mixed</td>
  <td>the denied method callback that will be called once the
access is denied.</td>
  <td>CAccessRule</td>
</tr>
<tr id="expression">
  <td><?php echo CHtml::link('expression', array('/site/doc', 'view' => 'CAccessRule', '#' => 'expression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression whose value indicates whether this rule should be applied.</td>
  <td>CAccessRule</td>
</tr>
<tr id="ips">
  <td><?php echo CHtml::link('ips', array('/site/doc', 'view' => 'CAccessRule', '#' => 'ips-detail')); ?></td>
  <td>array</td>
  <td>IP patterns.</td>
  <td>CAccessRule</td>
</tr>
<tr id="message">
  <td><?php echo CHtml::link('message', array('/site/doc', 'view' => 'CAccessRule', '#' => 'message-detail')); ?></td>
  <td>string</td>
  <td>the error message to be displayed when authorization is denied by this rule.</td>
  <td>CAccessRule</td>
</tr>
<tr id="roles">
  <td><?php echo CHtml::link('roles', array('/site/doc', 'view' => 'CAccessRule', '#' => 'roles-detail')); ?></td>
  <td>array</td>
  <td>list of roles this rule applies to.</td>
  <td>CAccessRule</td>
</tr>
<tr id="users">
  <td><?php echo CHtml::link('users', array('/site/doc', 'view' => 'CAccessRule', '#' => 'users-detail')); ?></td>
  <td>array</td>
  <td>list of user names that this rule applies to.</td>
  <td>CAccessRule</td>
</tr>
<tr id="verbs">
  <td><?php echo CHtml::link('verbs', array('/site/doc', 'view' => 'CAccessRule', '#' => 'verbs-detail')); ?></td>
  <td>array</td>
  <td>list of request types (e.</td>
  <td>CAccessRule</td>
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
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
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
<tr id="isUserAllowed">
  <td><?php echo CHtml::link('isUserAllowed()', array('/site/doc', 'view' => 'CAccessRule', '#' => 'isUserAllowed-detail')); ?></td>
  <td>Checks whether the Web user is allowed to perform the specified action.</td>
  <td>CAccessRule</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
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
<tr id="isActionMatched">
  <td><?php echo CHtml::link('isActionMatched()', array('/site/doc', 'view' => 'CAccessRule', '#' => 'isActionMatched-detail')); ?></td>
  <td></td>
  <td>CAccessRule</td>
</tr>
<tr id="isControllerMatched">
  <td><?php echo CHtml::link('isControllerMatched()', array('/site/doc', 'view' => 'CAccessRule', '#' => 'isControllerMatched-detail')); ?></td>
  <td></td>
  <td>CAccessRule</td>
</tr>
<tr id="isExpressionMatched">
  <td><?php echo CHtml::link('isExpressionMatched()', array('/site/doc', 'view' => 'CAccessRule', '#' => 'isExpressionMatched-detail')); ?></td>
  <td></td>
  <td>CAccessRule</td>
</tr>
<tr id="isIpMatched">
  <td><?php echo CHtml::link('isIpMatched()', array('/site/doc', 'view' => 'CAccessRule', '#' => 'isIpMatched-detail')); ?></td>
  <td></td>
  <td>CAccessRule</td>
</tr>
<tr id="isRoleMatched">
  <td><?php echo CHtml::link('isRoleMatched()', array('/site/doc', 'view' => 'CAccessRule', '#' => 'isRoleMatched-detail')); ?></td>
  <td></td>
  <td>CAccessRule</td>
</tr>
<tr id="isUserMatched">
  <td><?php echo CHtml::link('isUserMatched()', array('/site/doc', 'view' => 'CAccessRule', '#' => 'isUserMatched-detail')); ?></td>
  <td></td>
  <td>CAccessRule</td>
</tr>
<tr id="isVerbMatched">
  <td><?php echo CHtml::link('isVerbMatched()', array('/site/doc', 'view' => 'CAccessRule', '#' => 'isVerbMatched-detail')); ?></td>
  <td></td>
  <td>CAccessRule</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="actions-detail">
actions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$actions</b>;</div>

<p>list of action IDs that this rule applies to. The comparison is case-insensitive.
If no actions are specified, rule applies to all actions.</p>


<div class="detailHeader" id="allow-detail">
allow<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$allow</b>;</div>

<p>whether this is an 'allow' rule or 'deny' rule.</p>


<div class="detailHeader" id="controllers-detail">
controllers<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$controllers</b>;</div>

<p>list of controller IDs that this rule applies to. The comparison is case-insensitive.</p>


<div class="detailHeader" id="deniedCallback-detail">
deniedCallback<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public mixed <b>$deniedCallback</b>;</div>

<p>the denied method callback that will be called once the
access is denied. It replaces the behavior that shows an error message.
It can be a valid PHP callback including class method name (array(ClassName/Object, MethodName)),
or anonymous function (PHP 5.3.0+). For more information, on different options, check</p>


<div class="detailHeader" id="expression-detail">
expression<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$expression</b>;</div>

<p>a PHP expression whose value indicates whether this rule should be applied.
In this expression, you can use <code>$user</code> which refers to <code>Yii::app()->user</code>.
The expression can also be a valid PHP callback,
including class method name (array(ClassName/Object, MethodName)),
or anonymous function (PHP 5.3.0+). The function/method signature should be as follows:
<pre>
function foo($user, $rule) { ... }
</pre>
where $user is the current application user object and $rule is this access rule.
<br/><br/>
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CAccessRule', '#' => 'evaluateExpression')); ?>.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>


<div class="detailHeader" id="ips-detail">
ips<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$ips</b>;</div>

<p>IP patterns.</p>


<div class="detailHeader" id="message-detail">
message<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public string <b>$message</b>;</div>

<p>the error message to be displayed when authorization is denied by this rule.
If not set, a default error message will be displayed.</p>


<div class="detailHeader" id="roles-detail">
roles<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$roles</b>;</div>

<p>list of roles this rule applies to. For each role, the current user's
<?php echo CHtml::link('CWebUser::checkAccess', array('/site/doc', 'view' => 'CWebUser', '#' => 'checkAccess')); ?> method will be invoked. If one of the invocations
returns true, the rule will be applied.
Note, you should mainly use roles in an "allow" rule because by definition,
a role represents a permission collection.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></li>
</ul>
</div>

<div class="detailHeader" id="users-detail">
users<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$users</b>;</div>

<p>list of user names that this rule applies to. The comparison is case-insensitive.
If no user names are specified, rule applies to all users.</p>


<div class="detailHeader" id="verbs-detail">
verbs<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$verbs</b>;</div>

<p>list of request types (e.g. GET, POST) that this rule applies to.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="isActionMatched-detail">
isActionMatched()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isActionMatched</b>(<?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?> $action)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
  <td class="paramDescCol">the action</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the rule applies to the action</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L298">yii/web/auth/CAccessControlFilter.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isActionMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">actions</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()),</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">actions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isControllerMatched-detail">
isControllerMatched()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isControllerMatched</b>(<?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> $controller)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$controller</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td class="paramDescCol">the controller</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the rule applies to the controller</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L307">yii/web/auth/CAccessControlFilter.php#L307</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isControllerMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controllers</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUniqueId</span><span style="color: #007700">()),</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controllers</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isExpressionMatched-detail">
isExpressionMatched()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isExpressionMatched</b>(<?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?> $user)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$user</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?></td>
  <td class="paramDescCol">the user</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">the expression value. True if the expression is not specified.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L387">yii/web/auth/CAccessControlFilter.php#L387</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isExpressionMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">expression</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">expression</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'user'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$user</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isIpMatched-detail">
isIpMatched()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isIpMatched</b>(string $ip)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$ip</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the IP address</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the rule applies to the IP address</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L362">yii/web/auth/CAccessControlFilter.php#L362</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isIpMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$ip</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ips</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ips&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$rule</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">===</span><span style="color: #DD0000">'*'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$rule</span><span style="color: #007700">===</span><span style="color: #0000BB">$ip&nbsp;</span><span style="color: #007700">||&nbsp;((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">,</span><span style="color: #DD0000">'*'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strncmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$ip</span><span style="color: #007700">,</span><span style="color: #0000BB">$rule</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isRoleMatched-detail">
isRoleMatched()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isRoleMatched</b>(<?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?> $user)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$user</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?></td>
  <td class="paramDescCol">the user object</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the rule applies to the role</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L338">yii/web/auth/CAccessControlFilter.php#L338</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isRoleMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">roles</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">roles&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$role</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$role</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$role</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isUserAllowed-detail">
isUserAllowed()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>isUserAllowed</b>(<?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?> $user, <?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> $controller, <?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?> $action, string $ip, string $verb)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$user</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
  <td class="paramDescCol">the user object</td>
</tr>
<tr>
  <td class="paramNameCol">$controller</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td class="paramDescCol">the controller currently being executed</td>
</tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
  <td class="paramDescCol">the action to be performed</td>
</tr>
<tr>
  <td class="paramNameCol">$ip</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the request IP address</td>
</tr>
<tr>
  <td class="paramNameCol">$verb</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the request verb (GET, POST, etc.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">1 if the user is allowed, -1 if the user is denied, 0 if the rule does not apply to the user</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L280">yii/web/auth/CAccessControlFilter.php#L280</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isUserAllowed</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">,</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$action</span><span style="color: #007700">,</span><span style="color: #0000BB">$ip</span><span style="color: #007700">,</span><span style="color: #0000BB">$verb</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isActionMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isUserMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isRoleMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isIpMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$ip</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isVerbMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$verb</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isControllerMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isExpressionMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allow&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks whether the Web user is allowed to perform the specified action.</p>


<div class="detailHeader" id="isUserMatched-detail">
isUserMatched()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isUserMatched</b>(<?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?> $user)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$user</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?></td>
  <td class="paramDescCol">the user</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the rule applies to the user</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L316">yii/web/auth/CAccessControlFilter.php#L316</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isUserMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">users</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">users&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$u</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$u</span><span style="color: #007700">===</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$u</span><span style="color: #007700">===</span><span style="color: #DD0000">'?'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsGuest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$u</span><span style="color: #007700">===</span><span style="color: #DD0000">'@'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsGuest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$u</span><span style="color: #007700">,</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isVerbMatched-detail">
isVerbMatched()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isVerbMatched</b>(string $verb)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$verb</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the request method</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the rule applies to the request</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L378">yii/web/auth/CAccessControlFilter.php#L378</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isVerbMatched</span><span style="color: #007700">(</span><span style="color: #0000BB">$verb</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">verbs</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$verb</span><span style="color: #007700">),</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">verbs</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


