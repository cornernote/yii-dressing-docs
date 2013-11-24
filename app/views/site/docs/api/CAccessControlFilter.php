<?php
$this->pageTitle = $this->pageHeading = 'CAccessControlFilter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CAccessControlFilter';
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
  <td>class CAccessControlFilter &raquo;
<?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IFilter', array('/site/doc', 'view' => 'IFilter')); ?></td>
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
CAccessControlFilter performs authorization checks for the specified actions.
<br/><br/>
By enabling this filter, controller actions can be checked for access permissions.
When the user is not denied by one of the security rules or allowed by a rule explicitly,
he will be able to access the action.
<br/><br/>
For maximum security consider adding
<pre>array('deny')</pre>
as a last rule in a list so all actions will be denied by default.
<br/><br/>
To specify the access rules, set the <?php echo CHtml::link('rules', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'setRules')); ?> property, which should
be an array of the rules. Each rule is specified as an array of the following structure:
<pre>
array(
  'allow',  // or 'deny'

  // optional, list of action IDs (case insensitive) that this rule applies to
  // if not specified or empty, rule applies to all actions
  'actions'=&gt;array('edit', 'delete'),

  // optional, list of controller IDs (case insensitive) that this rule applies to
  'controllers'=&gt;array('post', 'admin/user'),

  // optional, list of usernames (case insensitive) that this rule applies to
  // Use * to represent all users, ? guest users, and @ authenticated users
  'users'=&gt;array('thomas', 'kevin'),

  // optional, list of roles (case sensitive!) that this rule applies to.
  'roles'=&gt;array('admin', 'editor'),

  // since version 1.1.11 you can pass parameters for RBAC bizRules
  'roles'=&gt;array('updateTopic'=&gt;array('topic'=&gt;$topic))

  // optional, list of IP address/patterns that this rule applies to
  // e.g. 127.0.0.1, 127.0.0.*
  'ips'=&gt;array('127.0.0.1'),

  // optional, list of request types (case insensitive) that this rule applies to
  'verbs'=&gt;array('GET', 'POST'),

  // optional, a PHP expression whose value indicates whether this rule applies
  // The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'evaluateExpression')); ?>.
  // A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
  // please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.
  'expression'=&gt;'!$user-&gt;isGuest &amp;&amp; $user-&gt;level==2',

  // optional, the customized error message to be displayed
  // This option is available since version 1.1.1.
  'message'=&gt;'Access Denied.',

  // optional, the denied method callback name, that will be called once the
  // access is denied, instead of showing the customized error message. It can also be
  // a valid PHP callback, including class method name (array(ClassName/Object, MethodName)),
  // or anonymous function (PHP 5.3.0+). The function/method signature should be as follows:
  // function foo($user, $rule) { ... }
  // where $user is the current application user object and $rule is this access rule.
  // This option is available since version 1.1.11.
  'deniedCallback'=&gt;'redirectToDeniedMethod',
)
</pre></div>
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
<tr id="message">
  <td><?php echo CHtml::link('message', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'message-detail')); ?></td>
  <td>string</td>
  <td>the error message to be displayed when authorization fails.</td>
  <td>CAccessControlFilter</td>
</tr>
<tr id="rules">
  <td><?php echo CHtml::link('rules', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'rules-detail')); ?></td>
  <td>array</td>
  <td>list of access rules.</td>
  <td>CAccessControlFilter</td>
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
<tr class="inherited" id="filter">
  <td><?php echo CHtml::link('filter()', array('/site/doc', 'view' => 'CFilter', '#' => 'filter-detail')); ?></td>
  <td>Performs the filtering.</td>
  <td><?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getRules">
  <td><?php echo CHtml::link('getRules()', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'getRules-detail')); ?></td>
  <td>Returns list of access rules.</td>
  <td>CAccessControlFilter</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CFilter', '#' => 'init-detail')); ?></td>
  <td>Initializes the filter.</td>
  <td><?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setRules">
  <td><?php echo CHtml::link('setRules()', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'setRules-detail')); ?></td>
  <td>Sets list of access rules.</td>
  <td>CAccessControlFilter</td>
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
<tr id="accessDenied">
  <td><?php echo CHtml::link('accessDenied()', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'accessDenied-detail')); ?></td>
  <td>Denies the access of the user.</td>
  <td>CAccessControlFilter</td>
</tr>
<tr class="inherited" id="postFilter">
  <td><?php echo CHtml::link('postFilter()', array('/site/doc', 'view' => 'CFilter', '#' => 'postFilter-detail')); ?></td>
  <td>Performs the post-action filtering.</td>
  <td><?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?></td>
</tr>
<tr id="preFilter">
  <td><?php echo CHtml::link('preFilter()', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'preFilter-detail')); ?></td>
  <td>Performs the pre-action filtering.</td>
  <td>CAccessControlFilter</td>
</tr>
<tr id="resolveErrorMessage">
  <td><?php echo CHtml::link('resolveErrorMessage()', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'resolveErrorMessage-detail')); ?></td>
  <td>Resolves the error message to be displayed.</td>
  <td>CAccessControlFilter</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="message-detail">
message<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public string <b>$message</b>;</div>

<p>the error message to be displayed when authorization fails.
This property can be overridden by individual access rule via <?php echo CHtml::link('CAccessRule::message', array('/site/doc', 'view' => 'CAccessRule', '#' => 'message')); ?>.
If this property is not set, a default error message will be displayed.</p>


<div class="detailHeader" id="rules-detail">
rules<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getRules</b>', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'getRules')); ?>()<br/>public void <?php echo CHtml::link('<b>setRules</b>', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'setRules')); ?>(array $rules)</div>

<p>list of access rules.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="accessDenied-detail">
accessDenied()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>accessDenied</b>(<?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?> $user, string $message)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$user</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?></td>
  <td class="paramDescCol">the current user</td>
</tr>
<tr>
  <td class="paramNameCol">$message</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error message to be displayed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L177">yii/web/auth/CAccessControlFilter.php#L177</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">accessDenied</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsGuest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loginRequired</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">403</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Denies the access of the user.
This method is invoked when access check fails.</p>


<div class="detailHeader" id="getRules-detail">
getRules()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getRules</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of access rules.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L94">yii/web/auth/CAccessControlFilter.php#L94</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRules</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="preFilter-detail">
preFilter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>preFilter</b>(<?php echo CHtml::link('CFilterChain', array('/site/doc', 'view' => 'CFilterChain')); ?> $filterChain)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$filterChain</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CFilterChain', array('/site/doc', 'view' => 'CFilterChain')); ?></td>
  <td class="paramDescCol">the filter chain that the filter is on.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the filtering process should continue and the action
should be executed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L128">yii/web/auth/CAccessControlFilter.php#L128</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">preFilter</span><span style="color: #007700">(</span><span style="color: #0000BB">$filterChain</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUser</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$verb</span><span style="color: #007700">=</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequestType</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ip</span><span style="color: #007700">=</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUserHostAddress</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRules</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$rule</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$allow</span><span style="color: #007700">=</span><span style="color: #0000BB">$rule</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isUserAllowed</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">,</span><span style="color: #0000BB">$filterChain</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$filterChain</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">action</span><span style="color: #007700">,</span><span style="color: #0000BB">$ip</span><span style="color: #007700">,</span><span style="color: #0000BB">$verb</span><span style="color: #007700">))&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;allowed<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$allow</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;denied<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deniedCallback</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deniedCallback</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rule</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">accessDenied</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveErrorMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Performs the pre-action filtering.</p>


<div class="detailHeader" id="resolveErrorMessage-detail">
resolveErrorMessage()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>resolveErrorMessage</b>(<?php echo CHtml::link('CAccessRule', array('/site/doc', 'view' => 'CAccessRule')); ?> $rule)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$rule</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAccessRule', array('/site/doc', 'view' => 'CAccessRule')); ?></td>
  <td class="paramDescCol">the access rule</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L161">yii/web/auth/CAccessControlFilter.php#L161</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveErrorMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rule</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'You&nbsp;are&nbsp;not&nbsp;authorized&nbsp;to&nbsp;perform&nbsp;this&nbsp;action.'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Resolves the error message to be displayed.
This method will check <?php echo CHtml::link('message', array('/site/doc', 'view' => 'CAccessControlFilter', '#' => 'message')); ?> and <?php echo CHtml::link('CAccessRule::message', array('/site/doc', 'view' => 'CAccessRule', '#' => 'message')); ?> to see
what error message should be displayed.</p>


<div class="detailHeader" id="setRules-detail">
setRules()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setRules</b>(array $rules)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$rules</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of access rules.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/auth/CAccessControlFilter.php#L102">yii/web/auth/CAccessControlFilter.php#L102</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setRules</span><span style="color: #007700">(</span><span style="color: #0000BB">$rules</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$rules&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$rule</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CAccessRule</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allow</span><span style="color: #007700">=</span><span style="color: #0000BB">$rule</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]===</span><span style="color: #DD0000">'allow'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$name</span><span style="color: #007700">===</span><span style="color: #DD0000">'expression'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">===</span><span style="color: #DD0000">'roles'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">===</span><span style="color: #DD0000">'message'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">===</span><span style="color: #DD0000">'deniedCallback'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'strtolower'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$r</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


