<?php
$this->pageTitle = $this->pageHeading = 'CBaseUserIdentity';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CBaseUserIdentity';
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
  <td>abstract class CBaseUserIdentity &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CUserIdentity', array('/site/doc', 'view' => 'CUserIdentity')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CBaseUserIdentity.php">yii\web\auth\CBaseUserIdentity.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CBaseUserIdentity is a base class implementing <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.
<br/><br/>
CBaseUserIdentity implements the scheme for representing identity
information that needs to be persisted. It also provides the way
to represent the authentication errors.
<br/><br/>
Derived classes should implement <?php echo CHtml::link('IUserIdentity::authenticate', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'authenticate')); ?>
and <?php echo CHtml::link('IUserIdentity::getId', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'getId')); ?> that are required by the <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>
interface.</div>
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
<tr id="errorCode">
  <td><?php echo CHtml::link('errorCode', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'errorCode-detail')); ?></td>
  <td>integer</td>
  <td>the authentication error code.</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="errorMessage">
  <td><?php echo CHtml::link('errorMessage', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'errorMessage-detail')); ?></td>
  <td>string</td>
  <td>the authentication error message.</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'id-detail')); ?></td>
  <td>mixed</td>
  <td>Returns a value that uniquely represents the identity.</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="isAuthenticated">
  <td><?php echo CHtml::link('isAuthenticated', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'isAuthenticated-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether the identity is authenticated.</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>Returns the display name for the identity (e.g. username).</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="persistentStates">
  <td><?php echo CHtml::link('persistentStates', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'persistentStates-detail')); ?></td>
  <td>array</td>
  <td>Returns the identity states that should be persisted.</td>
  <td>CBaseUserIdentity</td>
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
<tr class="inherited" id="authenticate">
  <td><?php echo CHtml::link('authenticate()', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'authenticate-detail')); ?></td>
  <td>Authenticates the user.</td>
  <td><?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?></td>
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
<tr id="clearState">
  <td><?php echo CHtml::link('clearState()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'clearState-detail')); ?></td>
  <td>Removes the specified state.</td>
  <td>CBaseUserIdentity</td>
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
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getId-detail')); ?></td>
  <td>Returns a value that uniquely represents the identity.</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="getIsAuthenticated">
  <td><?php echo CHtml::link('getIsAuthenticated()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getIsAuthenticated-detail')); ?></td>
  <td>Returns a value indicating whether the identity is authenticated.</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getName-detail')); ?></td>
  <td>Returns the display name for the identity (e.g. username).</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="getPersistentStates">
  <td><?php echo CHtml::link('getPersistentStates()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getPersistentStates-detail')); ?></td>
  <td>Returns the identity states that should be persisted.</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="getState">
  <td><?php echo CHtml::link('getState()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getState-detail')); ?></td>
  <td>Gets the persisted state by the specified name.</td>
  <td>CBaseUserIdentity</td>
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
<tr id="setPersistentStates">
  <td><?php echo CHtml::link('setPersistentStates()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'setPersistentStates-detail')); ?></td>
  <td>Sets an array of persistent states.</td>
  <td>CBaseUserIdentity</td>
</tr>
<tr id="setState">
  <td><?php echo CHtml::link('setState()', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'setState-detail')); ?></td>
  <td>Sets the named state with a given value.</td>
  <td>CBaseUserIdentity</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="errorCode-detail">
errorCode<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$errorCode</b>;</div>

<p>the authentication error code. If there is an error, the error code will be non-zero.
Defaults to 100, meaning unknown identity. Calling <?php echo CHtml::link('authenticate', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'authenticate')); ?> will change this value.</p>


<div class="detailHeader" id="errorMessage-detail">
errorMessage<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$errorMessage</b>;</div>

<p>the authentication error message. Defaults to empty.</p>


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public mixed <?php echo CHtml::link('<b>getId</b>', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getId')); ?>()</div>

<p>Returns a value that uniquely represents the identity.</p>


<div class="detailHeader" id="isAuthenticated-detail">
isAuthenticated<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsAuthenticated</b>', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getIsAuthenticated')); ?>()</div>

<p>Returns a value indicating whether the identity is authenticated.
This method is required by <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getName</b>', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getName')); ?>()</div>

<p>Returns the display name for the identity (e.g. username).</p>


<div class="detailHeader" id="persistentStates-detail">
persistentStates<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getPersistentStates</b>', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'getPersistentStates')); ?>()<br/>public void <?php echo CHtml::link('<b>setPersistentStates</b>', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'setPersistentStates')); ?>(array $states)</div>

<p>Returns the identity states that should be persisted.
This method is required by <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="clearState-detail">
clearState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>clearState</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the state</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CBaseUserIdentity.php#L127">yii\web\auth\CBaseUserIdentity.php#L127</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clearState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_state</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Removes the specified state.</p>


<div class="detailHeader" id="getId-detail">
getId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">a value that uniquely represents the identity (e.g. primary key value).
The default implementation simply returns <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CBaseUserIdentity', '#' => 'name')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CBaseUserIdentity.php#L57">yii\web\auth\CBaseUserIdentity.php#L57</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value that uniquely represents the identity.</p>


<div class="detailHeader" id="getIsAuthenticated-detail">
getIsAuthenticated()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsAuthenticated</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the authentication is successful.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CBaseUserIdentity.php#L97">yii\web\auth\CBaseUserIdentity.php#L97</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsAuthenticated</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorCode</span><span style="color: #007700">==</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ERROR_NONE</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the identity is authenticated.
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
  <td class="paramDescCol">the display name for the identity.
The default implementation simply returns empty string.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CBaseUserIdentity.php#L67">yii\web\auth\CBaseUserIdentity.php#L67</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the display name for the identity (e.g. username).</p>


<div class="detailHeader" id="getPersistentStates-detail">
getPersistentStates()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getPersistentStates</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the identity states that should be persisted.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CBaseUserIdentity.php#L77">yii\web\auth\CBaseUserIdentity.php#L77</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPersistentStates</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_state</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the identity states that should be persisted.
This method is required by <?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?>.</p>


<div class="detailHeader" id="getState-detail">
getState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getState</b>(string $name, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the state</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default value to be returned if the named state does not exist</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value of the named state</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CBaseUserIdentity.php#L108">yii\web\auth\CBaseUserIdentity.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_state</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_state</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]:</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Gets the persisted state by the specified name.</p>


<div class="detailHeader" id="setPersistentStates-detail">
setPersistentStates()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setPersistentStates</b>(array $states)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$states</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the identity states that should be persisted.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CBaseUserIdentity.php#L87">yii\web\auth\CBaseUserIdentity.php#L87</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setPersistentStates</span><span style="color: #007700">(</span><span style="color: #0000BB">$states</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_state&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$states</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets an array of persistent states.</p>


<div class="detailHeader" id="setState-detail">
setState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setState</b>(string $name, mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the state</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value of the named state</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CBaseUserIdentity.php#L118">yii\web\auth\CBaseUserIdentity.php#L118</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_state</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the named state with a given value.</p>


