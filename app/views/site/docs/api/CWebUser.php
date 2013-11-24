<?php
$this->pageTitle = $this->pageHeading = 'CWebUser';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CWebUser';
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
  <td>class CWebUser &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?>, <?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdWebUser', array('/site/doc', 'view' => 'YdWebUser')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php">yii\web\auth\CWebUser.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CWebUser represents the persistent state for a Web application user.
<br/><br/>
CWebUser is used as an application component whose ID is 'user'.
Therefore, at any place one can access the user state via
<code>Yii::app()->user</code>.
<br/><br/>
CWebUser should be used together with an <?php echo CHtml::link('identity', array('/site/doc', 'view' => 'IUserIdentity')); ?>
which implements the actual authentication algorithm.
<br/><br/>
A typical authentication process using CWebUser is as follows:
<ol>
<li>The user provides information needed for authentication.</li>
<li>An <?php echo CHtml::link('identity instance', array('/site/doc', 'view' => 'IUserIdentity')); ?> is created with the user-provided information.</li>
<li>Call <?php echo CHtml::link('IUserIdentity::authenticate', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'authenticate')); ?> to check if the identity is valid.</li>
<li>If valid, call <?php echo CHtml::link('CWebUser::login', array('/site/doc', 'view' => 'CWebUser', '#' => 'login')); ?> to login the user, and
    Redirect the user browser to <?php echo CHtml::link('returnUrl', array('/site/doc', 'view' => 'CWebUser', '#' => 'returnUrl')); ?>.</li>
<li>If not valid, retrieve the error code or message from the identity
instance and display it.</li>
</ol>
<br/><br/>
The property <?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWebUser', '#' => 'id')); ?> and <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CWebUser', '#' => 'name')); ?> are both identifiers
for the user. The former is mainly used internally (e.g. primary key), while
the latter is for display purpose (e.g. username). The <?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWebUser', '#' => 'id')); ?> property
is a unique identifier for a user that is persistent
during the whole user session. It can be a username, or something else,
depending on the implementation of the <?php echo CHtml::link('identity class', array('/site/doc', 'view' => 'IUserIdentity')); ?>.
<br/><br/>
Both <?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWebUser', '#' => 'id')); ?> and <?php echo CHtml::link('name', array('/site/doc', 'view' => 'CWebUser', '#' => 'name')); ?> are persistent during the user session.
Besides, an identity may have additional persistent data which can
be accessed by calling <?php echo CHtml::link('getState', array('/site/doc', 'view' => 'CWebUser', '#' => 'getState')); ?>.
Note, when <?php echo CHtml::link('cookie-based authentication', array('/site/doc', 'view' => 'CWebUser', '#' => 'allowAutoLogin')); ?> is enabled,
all these persistent data will be stored in cookie. Therefore, do not
store password or other sensitive data in the persistent storage. Instead,
you should store them directly in session on the server side if needed.</div>
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
<tr id="absoluteAuthTimeout">
  <td><?php echo CHtml::link('absoluteAuthTimeout', array('/site/doc', 'view' => 'CWebUser', '#' => 'absoluteAuthTimeout-detail')); ?></td>
  <td>integer</td>
  <td>timeout in seconds after which user is logged out regardless of activity.</td>
  <td>CWebUser</td>
</tr>
<tr id="allowAutoLogin">
  <td><?php echo CHtml::link('allowAutoLogin', array('/site/doc', 'view' => 'CWebUser', '#' => 'allowAutoLogin-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable cookie-based login.</td>
  <td>CWebUser</td>
</tr>
<tr id="authTimeout">
  <td><?php echo CHtml::link('authTimeout', array('/site/doc', 'view' => 'CWebUser', '#' => 'authTimeout-detail')); ?></td>
  <td>integer</td>
  <td>timeout in seconds after which user is logged out if inactive.</td>
  <td>CWebUser</td>
</tr>
<tr id="autoRenewCookie">
  <td><?php echo CHtml::link('autoRenewCookie', array('/site/doc', 'view' => 'CWebUser', '#' => 'autoRenewCookie-detail')); ?></td>
  <td>boolean</td>
  <td>whether to automatically renew the identity cookie each time a page is requested.</td>
  <td>CWebUser</td>
</tr>
<tr id="autoUpdateFlash">
  <td><?php echo CHtml::link('autoUpdateFlash', array('/site/doc', 'view' => 'CWebUser', '#' => 'autoUpdateFlash-detail')); ?></td>
  <td>boolean</td>
  <td>whether to automatically update the validity of flash messages.</td>
  <td>CWebUser</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="flashes">
  <td><?php echo CHtml::link('flashes', array('/site/doc', 'view' => 'CWebUser', '#' => 'flashes-detail')); ?></td>
  <td>array</td>
  <td>Returns all flash messages.</td>
  <td>CWebUser</td>
</tr>
<tr id="guestName">
  <td><?php echo CHtml::link('guestName', array('/site/doc', 'view' => 'CWebUser', '#' => 'guestName-detail')); ?></td>
  <td>string</td>
  <td>the name for a guest user.</td>
  <td>CWebUser</td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWebUser', '#' => 'id-detail')); ?></td>
  <td>mixed</td>
  <td>Returns a value that uniquely represents the user.</td>
  <td>CWebUser</td>
</tr>
<tr id="identityCookie">
  <td><?php echo CHtml::link('identityCookie', array('/site/doc', 'view' => 'CWebUser', '#' => 'identityCookie-detail')); ?></td>
  <td>array</td>
  <td>the property values (in name-value pairs) used to initialize the identity cookie.</td>
  <td>CWebUser</td>
</tr>
<tr id="isGuest">
  <td><?php echo CHtml::link('isGuest', array('/site/doc', 'view' => 'CWebUser', '#' => 'isGuest-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether the user is a guest (not authenticated).</td>
  <td>CWebUser</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="loginRequiredAjaxResponse">
  <td><?php echo CHtml::link('loginRequiredAjaxResponse', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginRequiredAjaxResponse-detail')); ?></td>
  <td>string</td>
  <td>value that will be echoed in case that user session has expired during an ajax call.</td>
  <td>CWebUser</td>
</tr>
<tr id="loginUrl">
  <td><?php echo CHtml::link('loginUrl', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginUrl-detail')); ?></td>
  <td>string|array</td>
  <td>the URL for login.</td>
  <td>CWebUser</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CWebUser', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>Returns the unique identifier for the user (e.g. username).</td>
  <td>CWebUser</td>
</tr>
<tr id="returnUrl">
  <td><?php echo CHtml::link('returnUrl', array('/site/doc', 'view' => 'CWebUser', '#' => 'returnUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the URL that the user should be redirected to after successful login.</td>
  <td>CWebUser</td>
</tr>
<tr id="stateKeyPrefix">
  <td><?php echo CHtml::link('stateKeyPrefix', array('/site/doc', 'view' => 'CWebUser', '#' => 'stateKeyPrefix-detail')); ?></td>
  <td>string</td>
  <td>a prefix for the name of the session variables storing user session data.</td>
  <td>CWebUser</td>
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
<tr id="__get">
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CWebUser', '#' => '__get-detail')); ?></td>
  <td>PHP magic method.</td>
  <td>CWebUser</td>
</tr>
<tr id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CWebUser', '#' => '__isset-detail')); ?></td>
  <td>PHP magic method.</td>
  <td>CWebUser</td>
</tr>
<tr id="__set">
  <td><?php echo CHtml::link('__set()', array('/site/doc', 'view' => 'CWebUser', '#' => '__set-detail')); ?></td>
  <td>PHP magic method.</td>
  <td>CWebUser</td>
</tr>
<tr id="__unset">
  <td><?php echo CHtml::link('__unset()', array('/site/doc', 'view' => 'CWebUser', '#' => '__unset-detail')); ?></td>
  <td>PHP magic method.</td>
  <td>CWebUser</td>
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
<tr id="checkAccess">
  <td><?php echo CHtml::link('checkAccess()', array('/site/doc', 'view' => 'CWebUser', '#' => 'checkAccess-detail')); ?></td>
  <td>Performs access check for this user.</td>
  <td>CWebUser</td>
</tr>
<tr id="clearStates">
  <td><?php echo CHtml::link('clearStates()', array('/site/doc', 'view' => 'CWebUser', '#' => 'clearStates-detail')); ?></td>
  <td>Clears all user identity information from persistent storage.</td>
  <td>CWebUser</td>
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
<tr id="getFlash">
  <td><?php echo CHtml::link('getFlash()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getFlash-detail')); ?></td>
  <td>Returns a flash message.</td>
  <td>CWebUser</td>
</tr>
<tr id="getFlashes">
  <td><?php echo CHtml::link('getFlashes()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getFlashes-detail')); ?></td>
  <td>Returns all flash messages.</td>
  <td>CWebUser</td>
</tr>
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getId-detail')); ?></td>
  <td>Returns a value that uniquely represents the user.</td>
  <td>CWebUser</td>
</tr>
<tr id="getIsGuest">
  <td><?php echo CHtml::link('getIsGuest()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getIsGuest-detail')); ?></td>
  <td>Returns a value indicating whether the user is a guest (not authenticated).</td>
  <td>CWebUser</td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getName-detail')); ?></td>
  <td>Returns the unique identifier for the user (e.g. username).</td>
  <td>CWebUser</td>
</tr>
<tr id="getReturnUrl">
  <td><?php echo CHtml::link('getReturnUrl()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getReturnUrl-detail')); ?></td>
  <td>Returns the URL that the user should be redirected to after successful login.</td>
  <td>CWebUser</td>
</tr>
<tr id="getState">
  <td><?php echo CHtml::link('getState()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getState-detail')); ?></td>
  <td>Returns the value of a variable that is stored in user session.</td>
  <td>CWebUser</td>
</tr>
<tr id="getStateKeyPrefix">
  <td><?php echo CHtml::link('getStateKeyPrefix()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getStateKeyPrefix-detail')); ?></td>
  <td>Returns a prefix for the name of the session variables storing user session data.</td>
  <td>CWebUser</td>
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
<tr id="hasFlash">
  <td><?php echo CHtml::link('hasFlash()', array('/site/doc', 'view' => 'CWebUser', '#' => 'hasFlash-detail')); ?></td>
  <td>Determines whether the specified flash message exists</td>
  <td>CWebUser</td>
</tr>
<tr class="inherited" id="hasProperty">
  <td><?php echo CHtml::link('hasProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasProperty-detail')); ?></td>
  <td>Determines whether a property is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="hasState">
  <td><?php echo CHtml::link('hasState()', array('/site/doc', 'view' => 'CWebUser', '#' => 'hasState-detail')); ?></td>
  <td>Returns a value indicating whether there is a state of the specified name.</td>
  <td>CWebUser</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CWebUser', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>CWebUser</td>
</tr>
<tr id="login">
  <td><?php echo CHtml::link('login()', array('/site/doc', 'view' => 'CWebUser', '#' => 'login-detail')); ?></td>
  <td>Logs in a user.</td>
  <td>CWebUser</td>
</tr>
<tr id="loginRequired">
  <td><?php echo CHtml::link('loginRequired()', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginRequired-detail')); ?></td>
  <td>Redirects the user browser to the login page.</td>
  <td>CWebUser</td>
</tr>
<tr id="logout">
  <td><?php echo CHtml::link('logout()', array('/site/doc', 'view' => 'CWebUser', '#' => 'logout-detail')); ?></td>
  <td>Logs out the current user.</td>
  <td>CWebUser</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setFlash">
  <td><?php echo CHtml::link('setFlash()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setFlash-detail')); ?></td>
  <td>Stores a flash message.</td>
  <td>CWebUser</td>
</tr>
<tr id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setId-detail')); ?></td>
  <td>Sets the unique identifier for the user. If null, it means the user is a guest.</td>
  <td>CWebUser</td>
</tr>
<tr id="setName">
  <td><?php echo CHtml::link('setName()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setName-detail')); ?></td>
  <td>Sets the unique identifier for the user (e.g. username).</td>
  <td>CWebUser</td>
</tr>
<tr id="setReturnUrl">
  <td><?php echo CHtml::link('setReturnUrl()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setReturnUrl-detail')); ?></td>
  <td>Sets the URL that the user should be redirected to after login.</td>
  <td>CWebUser</td>
</tr>
<tr id="setState">
  <td><?php echo CHtml::link('setState()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setState-detail')); ?></td>
  <td>Stores a variable in user session.</td>
  <td>CWebUser</td>
</tr>
<tr id="setStateKeyPrefix">
  <td><?php echo CHtml::link('setStateKeyPrefix()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setStateKeyPrefix-detail')); ?></td>
  <td>Sets a prefix for the name of the session variables storing user session data.</td>
  <td>CWebUser</td>
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
<tr id="afterLogin">
  <td><?php echo CHtml::link('afterLogin()', array('/site/doc', 'view' => 'CWebUser', '#' => 'afterLogin-detail')); ?></td>
  <td>This method is called after the user is successfully logged in.</td>
  <td>CWebUser</td>
</tr>
<tr id="afterLogout">
  <td><?php echo CHtml::link('afterLogout()', array('/site/doc', 'view' => 'CWebUser', '#' => 'afterLogout-detail')); ?></td>
  <td>This method is invoked right after a user is logged out.</td>
  <td>CWebUser</td>
</tr>
<tr id="beforeLogin">
  <td><?php echo CHtml::link('beforeLogin()', array('/site/doc', 'view' => 'CWebUser', '#' => 'beforeLogin-detail')); ?></td>
  <td>This method is called before logging in a user.</td>
  <td>CWebUser</td>
</tr>
<tr id="beforeLogout">
  <td><?php echo CHtml::link('beforeLogout()', array('/site/doc', 'view' => 'CWebUser', '#' => 'beforeLogout-detail')); ?></td>
  <td>This method is invoked when calling <?php echo CHtml::link('logout', array('/site/doc', 'view' => 'CWebUser', '#' => 'logout')); ?> to log out a user.</td>
  <td>CWebUser</td>
</tr>
<tr id="changeIdentity">
  <td><?php echo CHtml::link('changeIdentity()', array('/site/doc', 'view' => 'CWebUser', '#' => 'changeIdentity-detail')); ?></td>
  <td>Changes the current user with the specified identity information.</td>
  <td>CWebUser</td>
</tr>
<tr id="createIdentityCookie">
  <td><?php echo CHtml::link('createIdentityCookie()', array('/site/doc', 'view' => 'CWebUser', '#' => 'createIdentityCookie-detail')); ?></td>
  <td>Creates a cookie to store identity information.</td>
  <td>CWebUser</td>
</tr>
<tr id="loadIdentityStates">
  <td><?php echo CHtml::link('loadIdentityStates()', array('/site/doc', 'view' => 'CWebUser', '#' => 'loadIdentityStates-detail')); ?></td>
  <td>Loads identity states from an array and saves them to persistent storage.</td>
  <td>CWebUser</td>
</tr>
<tr id="renewCookie">
  <td><?php echo CHtml::link('renewCookie()', array('/site/doc', 'view' => 'CWebUser', '#' => 'renewCookie-detail')); ?></td>
  <td>Renews the identity cookie.</td>
  <td>CWebUser</td>
</tr>
<tr id="restoreFromCookie">
  <td><?php echo CHtml::link('restoreFromCookie()', array('/site/doc', 'view' => 'CWebUser', '#' => 'restoreFromCookie-detail')); ?></td>
  <td>Populates the current user object with the information obtained from cookie.</td>
  <td>CWebUser</td>
</tr>
<tr id="saveIdentityStates">
  <td><?php echo CHtml::link('saveIdentityStates()', array('/site/doc', 'view' => 'CWebUser', '#' => 'saveIdentityStates-detail')); ?></td>
  <td>Retrieves identity states from persistent storage and saves them as an array.</td>
  <td>CWebUser</td>
</tr>
<tr id="saveToCookie">
  <td><?php echo CHtml::link('saveToCookie()', array('/site/doc', 'view' => 'CWebUser', '#' => 'saveToCookie-detail')); ?></td>
  <td>Saves necessary user data into a cookie.</td>
  <td>CWebUser</td>
</tr>
<tr id="updateAuthStatus">
  <td><?php echo CHtml::link('updateAuthStatus()', array('/site/doc', 'view' => 'CWebUser', '#' => 'updateAuthStatus-detail')); ?></td>
  <td>Updates the authentication status according to <?php echo CHtml::link('authTimeout', array('/site/doc', 'view' => 'CWebUser', '#' => 'authTimeout')); ?>.</td>
  <td>CWebUser</td>
</tr>
<tr id="updateFlash">
  <td><?php echo CHtml::link('updateFlash()', array('/site/doc', 'view' => 'CWebUser', '#' => 'updateFlash-detail')); ?></td>
  <td>Updates the internal counters for flash messages.</td>
  <td>CWebUser</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="absoluteAuthTimeout-detail">
absoluteAuthTimeout<span class="detailHeaderTag">
property
 (available since v1.1.14)
</span>
</div>

<div class="signature">
public integer <b>$absoluteAuthTimeout</b>;</div>

<p>timeout in seconds after which user is logged out regardless of activity.</p>


<div class="detailHeader" id="allowAutoLogin-detail">
allowAutoLogin<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$allowAutoLogin</b>;</div>

<p>whether to enable cookie-based login. Defaults to false.</p>


<div class="detailHeader" id="authTimeout-detail">
authTimeout<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public integer <b>$authTimeout</b>;</div>

<p>timeout in seconds after which user is logged out if inactive.
If this property is not set, the user will be logged out after the current session expires
(c.f. <?php echo CHtml::link('CHttpSession::timeout', array('/site/doc', 'view' => 'CHttpSession', '#' => 'timeout')); ?>).</p>


<div class="detailHeader" id="autoRenewCookie-detail">
autoRenewCookie<span class="detailHeaderTag">
property
 (available since v1.1.0)
</span>
</div>

<div class="signature">
public boolean <b>$autoRenewCookie</b>;</div>

<p>whether to automatically renew the identity cookie each time a page is requested.
Defaults to false. This property is effective only when <?php echo CHtml::link('allowAutoLogin', array('/site/doc', 'view' => 'CWebUser', '#' => 'allowAutoLogin')); ?> is true.
When this is false, the identity cookie will expire after the specified duration since the user
is initially logged in. When this is true, the identity cookie will expire after the specified duration
since the user visits the site the last time.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('allowAutoLogin', array('/site/doc', 'view' => 'CWebUser', '#' => 'allowAutoLogin')); ?></li>
</ul>
</div>

<div class="detailHeader" id="autoUpdateFlash-detail">
autoUpdateFlash<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public boolean <b>$autoUpdateFlash</b>;</div>

<p>whether to automatically update the validity of flash messages.
Defaults to true, meaning flash messages will be valid only in the current and the next requests.
If this is set false, you will be responsible for ensuring a flash message is deleted after usage.
(This can be achieved by calling <?php echo CHtml::link('getFlash', array('/site/doc', 'view' => 'CWebUser', '#' => 'getFlash')); ?> with the 3rd parameter being true).</p>


<div class="detailHeader" id="flashes-detail">
flashes<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.3)
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getFlashes</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'getFlashes')); ?>(boolean $delete=true)</div>

<p>Returns all flash messages.
This method is similar to <?php echo CHtml::link('getFlash', array('/site/doc', 'view' => 'CWebUser', '#' => 'getFlash')); ?> except that it returns all
currently available flash messages.</p>


<div class="detailHeader" id="guestName-detail">
guestName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$guestName</b>;</div>

<p>the name for a guest user. Defaults to 'Guest'.
This is used by <?php echo CHtml::link('getName', array('/site/doc', 'view' => 'CWebUser', '#' => 'getName')); ?> when the current user is a guest (not authenticated).</p>


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <?php echo CHtml::link('<b>getId</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'getId')); ?>()<br/>public void <?php echo CHtml::link('<b>setId</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'setId')); ?>(mixed $value)</div>

<p>Returns a value that uniquely represents the user.</p>


<div class="detailHeader" id="identityCookie-detail">
identityCookie<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$identityCookie</b>;</div>

<p>the property values (in name-value pairs) used to initialize the identity cookie.
Any property of <?php echo CHtml::link('CHttpCookie', array('/site/doc', 'view' => 'CHttpCookie')); ?> may be initialized.
This property is effective only when <?php echo CHtml::link('allowAutoLogin', array('/site/doc', 'view' => 'CWebUser', '#' => 'allowAutoLogin')); ?> is true.</p>


<div class="detailHeader" id="isGuest-detail">
isGuest<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsGuest</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'getIsGuest')); ?>()</div>

<p>Returns a value indicating whether the user is a guest (not authenticated).</p>


<div class="detailHeader" id="loginRequiredAjaxResponse-detail">
loginRequiredAjaxResponse<span class="detailHeaderTag">
property
 (available since v1.1.9)
</span>
</div>

<div class="signature">
public string <b>$loginRequiredAjaxResponse</b>;</div>

<p>value that will be echoed in case that user session has expired during an ajax call.
When a request is made and user session has expired, <?php echo CHtml::link('loginRequired', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginRequired')); ?> redirects to <?php echo CHtml::link('loginUrl', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginUrl')); ?> for login.
If that happens during an ajax call, the complete HTML login page is returned as the result of that ajax call. That could be
a problem if the ajax call expects the result to be a json array or a predefined string, as the login page is ignored in that case.
To solve this, set this property to the desired return value.
<br/><br/>
If this property is set, this value will be returned as the result of the ajax call in case that the user session has expired.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('loginRequired', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginRequired')); ?></li>
</ul>
</div>

<div class="detailHeader" id="loginUrl-detail">
loginUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string|array <b>$loginUrl</b>;</div>

<p>the URL for login. If using array, the first element should be
the route to the login action, and the rest name-value pairs are GET parameters
to construct the login URL (e.g. array('/site/login')). If this property is null,
a 403 HTTP exception will be raised instead.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CController::createUrl', array('/site/doc', 'view' => 'CController', '#' => 'createUrl')); ?></li>
</ul>
</div>

<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getName</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'getName')); ?>()<br/>public void <?php echo CHtml::link('<b>setName</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'setName')); ?>(string $value)</div>

<p>Returns the unique identifier for the user (e.g. username).
This is the unique identifier that is mainly used for display purpose.</p>


<div class="detailHeader" id="returnUrl-detail">
returnUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getReturnUrl</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'getReturnUrl')); ?>(string $defaultUrl=NULL)<br/>public void <?php echo CHtml::link('<b>setReturnUrl</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'setReturnUrl')); ?>(string $value)</div>

<p>Returns the URL that the user should be redirected to after successful login.
This property is usually used by the login action. If the login is successful,
the action should read this property and use it to redirect the user browser.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('loginRequired', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginRequired')); ?></li>
</ul>
</div>

<div class="detailHeader" id="stateKeyPrefix-detail">
stateKeyPrefix<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getStateKeyPrefix</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'getStateKeyPrefix')); ?>()<br/>public void <?php echo CHtml::link('<b>setStateKeyPrefix</b>', array('/site/doc', 'view' => 'CWebUser', '#' => 'setStateKeyPrefix')); ?>(string $value)</div>

<p>a prefix for the name of the session variables storing user session data.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="__get-detail">
__get()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>__get</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">property name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">property value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L141">yii\web\auth\CWebUser.php#L141</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__get</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__get</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>PHP magic method.
This method is overriden so that persistent states can be accessed like properties.</p>


<div class="detailHeader" id="__isset-detail">
__isset()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>__isset</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">property name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L169">yii\web\auth\CWebUser.php#L169</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__isset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)!==</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__isset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>PHP magic method.
This method is overriden so that persistent states can also be checked for null value.</p>


<div class="detailHeader" id="__set-detail">
__set()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__set</b>(string $name, mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">property name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">property value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L155">yii\web\auth\CWebUser.php#L155</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__set</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__set</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>PHP magic method.
This method is overriden so that persistent states can be set like properties.</p>


<div class="detailHeader" id="__unset-detail">
__unset()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__unset</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">property name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L183">yii\web\auth\CWebUser.php#L183</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__unset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__unset</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>PHP magic method.
This method is overriden so that persistent states can also be unset.</p>


<div class="detailHeader" id="afterLogin-detail">
afterLogin()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>afterLogin</b>(boolean $fromCookie)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fromCookie</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the login is based on cookie.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L422">yii\web\auth\CWebUser.php#L422</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">afterLogin</span><span style="color: #007700">(</span><span style="color: #0000BB">$fromCookie</span><span style="color: #007700">)<br />{<br />}</span>
</span>
</code></div>
</div>
<p>This method is called after the user is successfully logged in.
You may override this method to do some postprocessing (e.g. log the user
login IP and time; load the user permission information).</p>


<div class="detailHeader" id="afterLogout-detail">
afterLogout()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>afterLogout</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L444">yii\web\auth\CWebUser.php#L444</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">afterLogout</span><span style="color: #007700">()<br />{<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked right after a user is logged out.
You may override this method to do some extra cleanup work for the user.</p>


<div class="detailHeader" id="beforeLogin-detail">
beforeLogin()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>beforeLogin</b>(mixed $id, array $states, boolean $fromCookie)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID. This is the same as returned by <?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getId')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$states</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">a set of name-value pairs that are provided by the user identity.</td>
</tr>
<tr>
  <td class="paramNameCol">$fromCookie</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the login is based on cookie</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the user should be logged in</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L410">yii\web\auth\CWebUser.php#L410</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeLogin</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$states</span><span style="color: #007700">,</span><span style="color: #0000BB">$fromCookie</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This method is called before logging in a user.
You may override this method to provide additional security check.
For example, when the login is cookie-based, you may want to verify
that the user ID together with a random token in the states can be found
in the database. This will prevent hackers from faking arbitrary
identity cookies even if they crack down the server private key.</p>


<div class="detailHeader" id="beforeLogout-detail">
beforeLogout()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>beforeLogout</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to log out the user</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L434">yii\web\auth\CWebUser.php#L434</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeLogout</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This method is invoked when calling <?php echo CHtml::link('logout', array('/site/doc', 'view' => 'CWebUser', '#' => 'logout')); ?> to log out a user.
If this method return false, the logout action will be cancelled.
You may override this method to provide additional check before
logging out a user.</p>


<div class="detailHeader" id="changeIdentity-detail">
changeIdentity()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>changeIdentity</b>(mixed $id, string $name, array $states)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">a unique identifier for the user</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the display name for the user</td>
</tr>
<tr>
  <td class="paramNameCol">$states</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">identity states</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L713">yii\web\auth\CWebUser.php#L713</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">changeIdentity</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$states</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSession</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">regenerateID</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setId</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadIdentityStates</span><span style="color: #007700">(</span><span style="color: #0000BB">$states</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Changes the current user with the specified identity information.
This method is called by <?php echo CHtml::link('login', array('/site/doc', 'view' => 'CWebUser', '#' => 'login')); ?> and <?php echo CHtml::link('restoreFromCookie', array('/site/doc', 'view' => 'CWebUser', '#' => 'restoreFromCookie')); ?>
when the current user needs to be populated with the corresponding
identity information. Derived classes may override this method
by retrieving additional user-related information. Make sure the
parent implementation is called first.</p>


<div class="detailHeader" id="checkAccess-detail">
checkAccess()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>checkAccess</b>(string $operation, array $params=array (
), boolean $allowCaching=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$operation</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the operation that need access check.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">name-value pairs that would be passed to business rules associated
with the tasks and roles assigned to the user.
Since version 1.1.11 a param with name 'userId' is added to this array, which holds the value of
<?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getId')); ?> when <?php echo CHtml::link('CDbAuthManager', array('/site/doc', 'view' => 'CDbAuthManager')); ?> or <?php echo CHtml::link('CPhpAuthManager', array('/site/doc', 'view' => 'CPhpAuthManager')); ?> is used.</td>
</tr>
<tr>
  <td class="paramNameCol">$allowCaching</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to allow caching the result of access check.
When this parameter
is true (default), if the access check of an operation was performed before,
its result will be directly returned when calling this method to check the same operation.
If this parameter is false, this method will always call <?php echo CHtml::link('CAuthManager::checkAccess', array('/site/doc', 'view' => 'CAuthManager', '#' => 'checkAccess')); ?>
to obtain the up-to-date access result. Note that this caching is effective
only within the same request and only works when <code>$params=array()</code>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the operations can be performed by this user.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L810">yii\web\auth\CWebUser.php#L810</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$operation</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$allowCaching</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$allowCaching&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">===array()&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_access</span><span style="color: #007700">[</span><span style="color: #0000BB">$operation</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_access</span><span style="color: #007700">[</span><span style="color: #0000BB">$operation</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$access</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getAuthManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$operation</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">(),</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$allowCaching&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_access</span><span style="color: #007700">[</span><span style="color: #0000BB">$operation</span><span style="color: #007700">]=</span><span style="color: #0000BB">$access</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$access</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Performs access check for this user.</p>


<div class="detailHeader" id="clearStates-detail">
clearStates()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>clearStates</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L617">yii\web\auth\CWebUser.php#L617</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clearStates</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">=</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">strncmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">,</span><span style="color: #0000BB">$n</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Clears all user identity information from persistent storage.
This will remove the data stored via <?php echo CHtml::link('setState', array('/site/doc', 'view' => 'CWebUser', '#' => 'setState')); ?>.</p>


<div class="detailHeader" id="createIdentityCookie-detail">
createIdentityCookie()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CHttpCookie', array('/site/doc', 'view' => 'CHttpCookie')); ?> <b>createIdentityCookie</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the cookie name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CHttpCookie', array('/site/doc', 'view' => 'CHttpCookie')); ?></td>
  <td class="paramDescCol">the cookie used to store identity information</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L528">yii\web\auth\CWebUser.php#L528</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createIdentityCookie</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CHttpCookie</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">identityCookie</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">identityCookie&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a cookie to store identity information.</p>


<div class="detailHeader" id="getFlash-detail">
getFlash()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getFlash</b>(string $key, mixed $defaultValue=NULL, boolean $delete=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">key identifying the flash message</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">value to be returned if the flash message is not available.</td>
</tr>
<tr>
  <td class="paramNameCol">$delete</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to delete this flash message after accessing it.
Defaults to true.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the message message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L666">yii\web\auth\CWebUser.php#L666</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$delete</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_KEY_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$delete</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a flash message.
A flash message is available only in the current and the next requests.</p>


<div class="detailHeader" id="getFlashes-detail">
getFlashes()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getFlashes</b>(boolean $delete=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$delete</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to delete the flash messages after calling this method.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">flash messages (key => message).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L637">yii\web\auth\CWebUser.php#L637</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getFlashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$delete</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$flashes</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">().</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_KEY_PREFIX</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">=</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">strncmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">,</span><span style="color: #0000BB">$n</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$flashes</span><span style="color: #007700">[</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$n</span><span style="color: #007700">)]=</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$delete</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$delete</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_COUNTERS</span><span style="color: #007700">,array());<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$flashes</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns all flash messages.
This method is similar to <?php echo CHtml::link('getFlash', array('/site/doc', 'view' => 'CWebUser', '#' => 'getFlash')); ?> except that it returns all
currently available flash messages.</p>


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
  <td class="paramDescCol">the unique identifier for the user. If null, it means the user is a guest.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L295">yii\web\auth\CWebUser.php#L295</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #DD0000">'__id'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value that uniquely represents the user.</p>


<div class="detailHeader" id="getIsGuest-detail">
getIsGuest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsGuest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the current application user is a guest.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L286">yii\web\auth\CWebUser.php#L286</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsGuest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #DD0000">'__id'</span><span style="color: #007700">)===</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the user is a guest (not authenticated).</p>


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
  <td class="paramDescCol">the user name. If the user is not logged in, this will be <?php echo CHtml::link('guestName', array('/site/doc', 'view' => 'CWebUser', '#' => 'guestName')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L313">yii\web\auth\CWebUser.php#L313</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #DD0000">'__name'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">guestName</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the unique identifier for the user (e.g. username).
This is the unique identifier that is mainly used for display purpose.</p>


<div class="detailHeader" id="getReturnUrl-detail">
getReturnUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getReturnUrl</b>(string $defaultUrl=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$defaultUrl</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the default return URL in case it was not set previously. If this is null,
the application entry URL will be considered as the default return URL.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL that the user should be redirected to after login.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L340">yii\web\auth\CWebUser.php#L340</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getReturnUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$defaultUrl</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$defaultReturnUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getUrlManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">showScriptName&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getScriptUrl</span><span style="color: #007700">()&nbsp;:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">'/'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$defaultReturnUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultUrl</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #DD0000">'__returnUrl'</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultReturnUrl</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the URL that the user should be redirected to after successful login.
This property is usually used by the login action. If the login is successful,
the action should read this property and use it to redirect the user browser.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('loginRequired', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginRequired')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getState-detail">
getState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getState</b>(string $key, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">variable name</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">default value</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value of the variable. If it doesn't exist in the session,
the provided default value will be returned</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L572">yii\web\auth\CWebUser.php#L572</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">().</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the value of a variable that is stored in user session.
<br/><br/>
This function is designed to be used by CWebUser descendant classes
who want to store additional user information in user session.
A variable, if stored in user session using <?php echo CHtml::link('setState', array('/site/doc', 'view' => 'CWebUser', '#' => 'setState')); ?> can be
retrieved back using this function.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setState', array('/site/doc', 'view' => 'CWebUser', '#' => 'setState')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getStateKeyPrefix-detail">
getStateKeyPrefix()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getStateKeyPrefix</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a prefix for the name of the session variables storing user session data.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L542">yii\web\auth\CWebUser.php#L542</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keyPrefix</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keyPrefix</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keyPrefix</span><span style="color: #007700">=</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #DD0000">'Yii.'</span><span style="color: #007700">.</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="hasFlash-detail">
hasFlash()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>hasFlash</b>(string $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">key identifying the flash message</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the specified flash message exists</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L697">yii\web\auth\CWebUser.php#L697</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hasFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)!==</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="hasState-detail">
hasState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>hasState</b>(string $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">state name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether there is a state of the specified name.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L607">yii\web\auth\CWebUser.php#L607</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hasState</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">().</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether there is a state of the specified name.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L196">yii\web\auth\CWebUser.php#L196</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSession</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsGuest</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowAutoLogin</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">restoreFromCookie</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoRenewCookie&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowAutoLogin</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renewCookie</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoUpdateFlash</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateFlash</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateAuthStatus</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application component.
This method overrides the parent implementation by starting session,
performing cookie-based authentication if enabled, and updating the flash variables.</p>


<div class="detailHeader" id="loadIdentityStates-detail">
loadIdentityStates()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>loadIdentityStates</b>(array $states)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$states</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the identity states</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L737">yii\web\auth\CWebUser.php#L737</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">loadIdentityStates</span><span style="color: #007700">(</span><span style="color: #0000BB">$states</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$states</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$states&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$names</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">STATES_VAR</span><span style="color: #007700">,</span><span style="color: #0000BB">$names</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Loads identity states from an array and saves them to persistent storage.</p>


<div class="detailHeader" id="login-detail">
login()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>login</b>(<?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?> $identity, integer $duration=0)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$identity</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IUserIdentity', array('/site/doc', 'view' => 'IUserIdentity')); ?></td>
  <td class="paramDescCol">the user identity (which should already be authenticated)</td>
</tr>
<tr>
  <td class="paramNameCol">$duration</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of seconds that the user can remain in logged-in status. Defaults to 0, meaning login till the user closes the browser.
If greater than 0, cookie-based login will be used. In this case, <?php echo CHtml::link('allowAutoLogin', array('/site/doc', 'view' => 'CWebUser', '#' => 'allowAutoLogin')); ?>
must be set true, otherwise an exception will be thrown.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the user is logged in</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L227">yii\web\auth\CWebUser.php#L227</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">login</span><span style="color: #007700">(</span><span style="color: #0000BB">$identity</span><span style="color: #007700">,</span><span style="color: #0000BB">$duration</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$identity</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$states</span><span style="color: #007700">=</span><span style="color: #0000BB">$identity</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPersistentStates</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeLogin</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$states</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">changeIdentity</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$identity</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">(),</span><span style="color: #0000BB">$states</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$duration</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowAutoLogin</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveToCookie</span><span style="color: #007700">(</span><span style="color: #0000BB">$duration</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{class}.allowAutoLogin&nbsp;must&nbsp;be&nbsp;set&nbsp;true&nbsp;in&nbsp;order&nbsp;to&nbsp;use&nbsp;cookie-based&nbsp;authentication.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{class}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">))));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">absoluteAuthTimeout</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">AUTH_ABSOLUTE_TIMEOUT_VAR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">absoluteAuthTimeout</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterLogin</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsGuest</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Logs in a user.
<br/><br/>
The user identity information will be saved in storage that is
persistent during the user session. By default, the storage is simply
the session storage. If the duration parameter is greater than 0,
a cookie will be sent to prepare for cookie-based login in future.
<br/><br/>
Note, you have to set <?php echo CHtml::link('allowAutoLogin', array('/site/doc', 'view' => 'CWebUser', '#' => 'allowAutoLogin')); ?> to true
if you want to allow user to be authenticated based on the cookie information.</p>


<div class="detailHeader" id="loginRequired-detail">
loginRequired()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>loginRequired</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L370">yii\web\auth\CWebUser.php#L370</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">loginRequired</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsAjaxRequest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setReturnUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loginUrl</span><span style="color: #007700">)!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultController</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">redirect</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loginRequiredAjaxResponse</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loginRequiredAjaxResponse</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">403</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Login&nbsp;Required'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Redirects the user browser to the login page.
Before the redirection, the current URL (if it's not an AJAX url) will be
kept in <?php echo CHtml::link('returnUrl', array('/site/doc', 'view' => 'CWebUser', '#' => 'returnUrl')); ?> so that the user browser may be redirected back
to the current page after successful login. Make sure you set <?php echo CHtml::link('loginUrl', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginUrl')); ?>
so that the user browser can be redirected to the specified login URL after
calling this method.
After calling this method, the current request processing will be terminated.</p>


<div class="detailHeader" id="logout-detail">
logout()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>logout</b>(boolean $destroySession=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$destroySession</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to destroy the whole session. Defaults to true. If false,
then <?php echo CHtml::link('clearStates', array('/site/doc', 'view' => 'CWebUser', '#' => 'clearStates')); ?> will be called, which removes only the data stored via <?php echo CHtml::link('setState', array('/site/doc', 'view' => 'CWebUser', '#' => 'setState')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L258">yii\web\auth\CWebUser.php#L258</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">logout</span><span style="color: #007700">(</span><span style="color: #0000BB">$destroySession</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeLogout</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowAutoLogin</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getCookies</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">identityCookie</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createIdentityCookie</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">expire</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getCookies</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$destroySession</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSession</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">destroy</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clearStates</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_access</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterLogout</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Logs out the current user.
This will remove authentication-related session data.
If the parameter is true, the whole session will be destroyed as well.</p>


<div class="detailHeader" id="renewCookie-detail">
renewCookie()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renewCookie</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L485">yii\web\auth\CWebUser.php#L485</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renewCookie</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookies</span><span style="color: #007700">=</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCookies</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">=</span><span style="color: #0000BB">$cookies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$cookie&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSecurityManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">validateData</span><span style="color: #007700">(</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=@</span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">],</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveToCookie</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renews the identity cookie.
This method will set the expiration time of the identity cookie to be the current time
plus the originally specified cookie duration.</p>


<div class="detailHeader" id="restoreFromCookie-detail">
restoreFromCookie()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>restoreFromCookie</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L455">yii\web\auth\CWebUser.php#L455</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">restoreFromCookie</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">=</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCookies</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$cookie&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSecurityManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">validateData</span><span style="color: #007700">(</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=@</span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">],</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$duration</span><span style="color: #007700">,</span><span style="color: #0000BB">$states</span><span style="color: #007700">)=</span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeLogin</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$states</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">changeIdentity</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$states</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoRenewCookie</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveToCookie</span><span style="color: #007700">(</span><span style="color: #0000BB">$duration</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterLogin</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Populates the current user object with the information obtained from cookie.
This method is used when automatic login (<?php echo CHtml::link('allowAutoLogin', array('/site/doc', 'view' => 'CWebUser', '#' => 'allowAutoLogin')); ?>) is enabled.
The user identity information is recovered from cookie.
Sufficient security measures are used to prevent cookie data from being tampered.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('saveToCookie', array('/site/doc', 'view' => 'CWebUser', '#' => 'saveToCookie')); ?></li>
</ul>
</div>

<div class="detailHeader" id="saveIdentityStates-detail">
saveIdentityStates()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>saveIdentityStates</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the identity states</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L725">yii\web\auth\CWebUser.php#L725</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">saveIdentityStates</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$states</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">STATES_VAR</span><span style="color: #007700">,array())&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$dummy</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$states</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$states</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves identity states from persistent storage and saves them as an array.</p>


<div class="detailHeader" id="saveToCookie-detail">
saveToCookie()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>saveToCookie</b>(integer $duration)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$duration</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of seconds that the user can remain in logged-in status. Defaults to 0, meaning login till the user closes the browser.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L508">yii\web\auth\CWebUser.php#L508</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">saveToCookie</span><span style="color: #007700">(</span><span style="color: #0000BB">$duration</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createIdentityCookie</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">expire</span><span style="color: #007700">=</span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">$duration</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$duration</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveIdentityStates</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSecurityManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">hashData</span><span style="color: #007700">(</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getCookies</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Saves necessary user data into a cookie.
This method is used when automatic login (<?php echo CHtml::link('allowAutoLogin', array('/site/doc', 'view' => 'CWebUser', '#' => 'allowAutoLogin')); ?>) is enabled.
This method saves user ID, username, other identity states and a validation key to cookie.
These information are used to do authentication next time when user visits the application.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('restoreFromCookie', array('/site/doc', 'view' => 'CWebUser', '#' => 'restoreFromCookie')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setFlash-detail">
setFlash()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setFlash</b>(string $key, mixed $value, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">key identifying the flash message</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">flash message</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">if this value is the same as the flash message, the flash message
will be removed. (Therefore, you can use setFlash('key',null) to remove a flash message.)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L682">yii\web\auth\CWebUser.php#L682</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_KEY_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$counters</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_COUNTERS</span><span style="color: #007700">,array());<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$counters</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$counters</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_COUNTERS</span><span style="color: #007700">,</span><span style="color: #0000BB">$counters</span><span style="color: #007700">,array());<br />}</span>
</span>
</code></div>
</div>
<p>Stores a flash message.
A flash message is available only in the current and the next requests.</p>


<div class="detailHeader" id="setId-detail">
setId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setId</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the unique identifier for the user. If null, it means the user is a guest.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L303">yii\web\auth\CWebUser.php#L303</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setId</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #DD0000">'__id'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setName-detail">
setName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setName</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the user name.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L326">yii\web\auth\CWebUser.php#L326</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setName</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #DD0000">'__name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the unique identifier for the user (e.g. username).</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getName', array('/site/doc', 'view' => 'CWebUser', '#' => 'getName')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setReturnUrl-detail">
setReturnUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setReturnUrl</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL that the user should be redirected to after login.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L356">yii\web\auth\CWebUser.php#L356</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setReturnUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #DD0000">'__returnUrl'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setState-detail">
setState()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setState</b>(string $key, mixed $value, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">variable name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">variable value</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">default value. If $value===$defaultValue, the variable will be
removed from the session</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L593">yii\web\auth\CWebUser.php#L593</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStateKeyPrefix</span><span style="color: #007700">().</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Stores a variable in user session.
<br/><br/>
This function is designed to be used by CWebUser descendant classes
who want to store additional user information in user session.
By storing a variable using this function, the variable may be retrieved
back later using <?php echo CHtml::link('getState', array('/site/doc', 'view' => 'CWebUser', '#' => 'getState')); ?>. The variable will be persistent
across page requests during a user session.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getState', array('/site/doc', 'view' => 'CWebUser', '#' => 'getState')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setStateKeyPrefix-detail">
setStateKeyPrefix()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setStateKeyPrefix</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a prefix for the name of the session variables storing user session data.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L553">yii\web\auth\CWebUser.php#L553</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setStateKeyPrefix</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_keyPrefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="updateAuthStatus-detail">
updateAuthStatus()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>updateAuthStatus</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L780">yii\web\auth\CWebUser.php#L780</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">updateAuthStatus</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">authTimeout</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">absoluteAuthTimeout</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsGuest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expires</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">AUTH_TIMEOUT_VAR</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expiresAbsolute</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">AUTH_ABSOLUTE_TIMEOUT_VAR</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$expires</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$expires&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">()&nbsp;||&nbsp;</span><span style="color: #0000BB">$expiresAbsolute</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$expiresAbsolute&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">logout</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">AUTH_TIMEOUT_VAR</span><span style="color: #007700">,</span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">authTimeout</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Updates the authentication status according to <?php echo CHtml::link('authTimeout', array('/site/doc', 'view' => 'CWebUser', '#' => 'authTimeout')); ?>.
If the user has been inactive for <?php echo CHtml::link('authTimeout', array('/site/doc', 'view' => 'CWebUser', '#' => 'authTimeout')); ?> seconds, or {link absoluteAuthTimeout} has passed,
he will be automatically logged out.</p>


<div class="detailHeader" id="updateFlash-detail">
updateFlash()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>updateFlash</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CWebUser.php#L756">yii\web\auth\CWebUser.php#L756</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">updateFlash</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$counters</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_COUNTERS</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$counters</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$counters&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$counters</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_KEY_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$counters</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]++;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_COUNTERS</span><span style="color: #007700">,</span><span style="color: #0000BB">$counters</span><span style="color: #007700">,array());<br />}</span>
</span>
</code></div>
</div>
<p>Updates the internal counters for flash messages.
This method is internally used by <?php echo CHtml::link('CWebApplication', array('/site/doc', 'view' => 'CWebApplication')); ?>
to maintain the availability of flash messages.</p>


