<?php
$this->pageTitle = $this->pageHeading = 'CUserIdentity';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CUserIdentity';
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
  <td>class CUserIdentity &raquo;
<?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdUserIdentity', array('/site/doc', 'view' => 'YdUserIdentity')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CUserIdentity.php">yii\web\auth\CUserIdentity.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CUserIdentity is a base class for representing identities that are authenticated based on a username and a password.
<br/><br/>
Derived classes should implement <?php echo CHtml::link('authenticate', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'authenticate')); ?> with the actual
authentication scheme (e.g. checking username and password against a DB table).
<br/><br/>
By default, CUserIdentity assumes the <?php echo CHtml::link('username', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'username')); ?> is a unique identifier
and thus use it as the <?php echo CHtml::link('ID', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'id')); ?> of the identity.</div>
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
<tr class="inherited" id="errorCode">
  <td><?php echo CHtml::link('errorCode', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'errorCode-detail')); ?></td>
  <td>integer</td>
  <td>the authentication error code.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
</tr>
<tr class="inherited" id="errorMessage">
  <td><?php echo CHtml::link('errorMessage', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'errorMessage-detail')); ?></td>
  <td>string</td>
  <td>the authentication error message.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the unique identifier for the identity.</td>
  <td>CUserIdentity</td>
</tr>
<tr class="inherited" id="isAuthenticated">
  <td><?php echo CHtml::link('isAuthenticated', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'isAuthenticated-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether the identity is authenticated.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>Returns the display name for the identity.</td>
  <td>CUserIdentity</td>
</tr>
<tr id="password">
  <td><?php echo CHtml::link('password', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'password-detail')); ?></td>
  <td>string</td>
  <td>password</td>
  <td>CUserIdentity</td>
</tr>
<tr class="inherited" id="persistentStates">
  <td><?php echo CHtml::link('persistentStates', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'persistentStates-detail')); ?></td>
  <td>array</td>
  <td>Returns the identity states that should be persisted.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
</tr>
<tr id="username">
  <td><?php echo CHtml::link('username', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'username-detail')); ?></td>
  <td>string</td>
  <td>username</td>
  <td>CUserIdentity</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CUserIdentity', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CUserIdentity</td>
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
<tr id="authenticate">
  <td><?php echo CHtml::link('authenticate()', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'authenticate-detail')); ?></td>
  <td>Authenticates a user based on <?php echo CHtml::link('username', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'username')); ?> and <?php echo CHtml::link('password', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'password')); ?>.</td>
  <td>CUserIdentity</td>
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
<tr class="inherited" id="clearState">
  <td><?php echo CHtml::link('clearState()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'clearState-detail')); ?></td>
  <td>Removes the specified state.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
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
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'getId-detail')); ?></td>
  <td>Returns the unique identifier for the identity.</td>
  <td>CUserIdentity</td>
</tr>
<tr class="inherited" id="getIsAuthenticated">
  <td><?php echo CHtml::link('getIsAuthenticated()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getIsAuthenticated-detail')); ?></td>
  <td>Returns a value indicating whether the identity is authenticated.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'getName-detail')); ?></td>
  <td>Returns the display name for the identity.</td>
  <td>CUserIdentity</td>
</tr>
<tr class="inherited" id="getPersistentStates">
  <td><?php echo CHtml::link('getPersistentStates()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getPersistentStates-detail')); ?></td>
  <td>Returns the identity states that should be persisted.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
</tr>
<tr class="inherited" id="getState">
  <td><?php echo CHtml::link('getState()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getState-detail')); ?></td>
  <td>Gets the persisted state by the specified name.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
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
<tr class="inherited" id="setPersistentStates">
  <td><?php echo CHtml::link('setPersistentStates()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'setPersistentStates-detail')); ?></td>
  <td>Sets an array of persistent states.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
</tr>
<tr class="inherited" id="setState">
  <td><?php echo CHtml::link('setState()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'setState-detail')); ?></td>
  <td>Sets the named state with a given value.</td>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getId</b>', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'getId')); ?>()</div>

<p>Returns the unique identifier for the identity.
The default implementation simply returns <?php echo CHtml::link('username', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'username')); ?>.
This method is required by <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getName</b>', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'getName')); ?>()</div>

<p>Returns the display name for the identity.
The default implementation simply returns <?php echo CHtml::link('username', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'username')); ?>.
This method is required by <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.</p>


<div class="detailHeader" id="password-detail">
password<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$password</b>;</div>

<p>password</p>


<div class="detailHeader" id="username-detail">
username<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$username</b>;</div>

<p>username</p>


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
public void <b>__construct</b>(string $username, string $password)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$username</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">username</td>
</tr>
<tr>
  <td class="paramNameCol">$password</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">password</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CUserIdentity.php#L43">yii\web\auth\CUserIdentity.php#L43</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$username</span><span style="color: #007700">,</span><span style="color: #0000BB">$password</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">=</span><span style="color: #0000BB">$username</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">password</span><span style="color: #007700">=</span><span style="color: #0000BB">$password</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="authenticate-detail">
authenticate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>authenticate</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether authentication succeeds.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CUserIdentity.php#L55">yii\web\auth\CUserIdentity.php#L55</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">authenticate</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{class}::authenticate()&nbsp;must&nbsp;be&nbsp;implemented.'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{class}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">))));<br />}</span>
</span>
</code></div>
</div>
<p>Authenticates a user based on <?php echo CHtml::link('username', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'username')); ?> and <?php echo CHtml::link('password', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'password')); ?>.
Derived classes should override this method, or an exception will be thrown.
This method is required by <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.</p>


<div class="detailHeader" id="getId-detail">
getId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the unique identifier for the identity.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CUserIdentity.php#L66">yii\web\auth\CUserIdentity.php#L66</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the unique identifier for the identity.
The default implementation simply returns <?php echo CHtml::link('username', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'username')); ?>.
This method is required by <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.</p>


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
  <td class="paramDescCol">the display name for the identity.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CUserIdentity.php#L77">yii\web\auth\CUserIdentity.php#L77</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the display name for the identity.
The default implementation simply returns <?php echo CHtml::link('username', array('/site/doc', 'view' => 'CUserIdentity', '#' => 'username')); ?>.
This method is required by <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.</p>


