<?php
$this->pageTitle = $this->pageHeading = 'YdWebUser';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdWebUser';
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
  <td>class YdWebUser &raquo;
<?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IWebUser', array('/site/doc', 'view' => 'IWebUser')); ?>, <?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdWebUser.php">dressing/components/YdWebUser.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
</div>
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
<tr class="inherited" id="absoluteAuthTimeout">
  <td><?php echo CHtml::link('absoluteAuthTimeout', array('/site/doc', 'view' => 'CWebUser', '#' => 'absoluteAuthTimeout-detail')); ?></td>
  <td>integer</td>
  <td>timeout in seconds after which user is logged out regardless of activity.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="allowAutoLogin">
  <td><?php echo CHtml::link('allowAutoLogin', array('/site/doc', 'view' => 'YdWebUser', '#' => 'allowAutoLogin-detail')); ?></td>
  <td>bool</td>
  <td></td>
  <td>YdWebUser</td>
</tr>
<tr id="api">
  <td><?php echo CHtml::link('api', array('/site/doc', 'view' => 'YdWebUser', '#' => 'api-detail')); ?></td>
  <td>bool</td>
  <td></td>
  <td>YdWebUser</td>
</tr>
<tr class="inherited" id="authTimeout">
  <td><?php echo CHtml::link('authTimeout', array('/site/doc', 'view' => 'CWebUser', '#' => 'authTimeout-detail')); ?></td>
  <td>integer</td>
  <td>timeout in seconds after which user is logged out if inactive.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="autoRenewCookie">
  <td><?php echo CHtml::link('autoRenewCookie', array('/site/doc', 'view' => 'CWebUser', '#' => 'autoRenewCookie-detail')); ?></td>
  <td>boolean</td>
  <td>whether to automatically renew the identity cookie each time a page is requested.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="autoUpdateFlash">
  <td><?php echo CHtml::link('autoUpdateFlash', array('/site/doc', 'view' => 'CWebUser', '#' => 'autoUpdateFlash-detail')); ?></td>
  <td>boolean</td>
  <td>whether to automatically update the validity of flash messages.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="flashes">
  <td><?php echo CHtml::link('flashes', array('/site/doc', 'view' => 'CWebUser', '#' => 'flashes-detail')); ?></td>
  <td>array</td>
  <td>Returns all flash messages.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="guestName">
  <td><?php echo CHtml::link('guestName', array('/site/doc', 'view' => 'CWebUser', '#' => 'guestName-detail')); ?></td>
  <td>string</td>
  <td>the name for a guest user.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWebUser', '#' => 'id-detail')); ?></td>
  <td>mixed</td>
  <td>Returns a value that uniquely represents the user.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'YdWebUser', '#' => 'id-detail')); ?></td>
  <td>integer</td>
  <td></td>
  <td>YdWebUser</td>
</tr>
<tr class="inherited" id="identityCookie">
  <td><?php echo CHtml::link('identityCookie', array('/site/doc', 'view' => 'CWebUser', '#' => 'identityCookie-detail')); ?></td>
  <td>array</td>
  <td>the property values (in name-value pairs) used to initialize the identity cookie.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="isGuest">
  <td><?php echo CHtml::link('isGuest', array('/site/doc', 'view' => 'CWebUser', '#' => 'isGuest-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether the user is a guest (not authenticated).</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="loginRequiredAjaxResponse">
  <td><?php echo CHtml::link('loginRequiredAjaxResponse', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginRequiredAjaxResponse-detail')); ?></td>
  <td>string</td>
  <td>value that will be echoed in case that user session has expired during an ajax call.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="loginUrl">
  <td><?php echo CHtml::link('loginUrl', array('/site/doc', 'view' => 'YdWebUser', '#' => 'loginUrl-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdWebUser</td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CWebUser', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>Returns the unique identifier for the user (e.g. username).</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="returnUrl">
  <td><?php echo CHtml::link('returnUrl', array('/site/doc', 'view' => 'CWebUser', '#' => 'returnUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the URL that the user should be redirected to after successful login.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="stateKeyPrefix">
  <td><?php echo CHtml::link('stateKeyPrefix', array('/site/doc', 'view' => 'CWebUser', '#' => 'stateKeyPrefix-detail')); ?></td>
  <td>string</td>
  <td>a prefix for the name of the session variables storing user session data.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="user">
  <td><?php echo CHtml::link('user', array('/site/doc', 'view' => 'YdWebUser', '#' => 'user-detail')); ?></td>
  <td><?php echo CHtml::link('YdUser', array('/site/doc', 'view' => 'YdUser')); ?></td>
  <td>Load user model</td>
  <td>YdWebUser</td>
</tr>
<tr id="user">
  <td><?php echo CHtml::link('user', array('/site/doc', 'view' => 'YdWebUser', '#' => 'user-detail')); ?></td>
  <td><?php echo CHtml::link('YdUser', array('/site/doc', 'view' => 'YdUser')); ?></td>
  <td></td>
  <td>YdWebUser</td>
</tr>
</table>
</div>
<div class="summary docProperty">
<h2>Protected Properties</h2>

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
<tr id="nexMultiFlashKey">
  <td><?php echo CHtml::link('nexMultiFlashKey', array('/site/doc', 'view' => 'YdWebUser', '#' => 'nexMultiFlashKey-detail')); ?></td>
  <td>mixed</td>
  <td>Returns next flash key for addFlash function.</td>
  <td>YdWebUser</td>
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
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CWebUser', '#' => '__get-detail')); ?></td>
  <td>PHP magic method.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CWebUser', '#' => '__isset-detail')); ?></td>
  <td>PHP magic method.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="__set">
  <td><?php echo CHtml::link('__set()', array('/site/doc', 'view' => 'CWebUser', '#' => '__set-detail')); ?></td>
  <td>PHP magic method.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="__unset">
  <td><?php echo CHtml::link('__unset()', array('/site/doc', 'view' => 'CWebUser', '#' => '__unset-detail')); ?></td>
  <td>PHP magic method.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="addFlash">
  <td><?php echo CHtml::link('addFlash()', array('/site/doc', 'view' => 'YdWebUser', '#' => 'addFlash-detail')); ?></td>
  <td>Add flash to the stack.</td>
  <td>YdWebUser</td>
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
  <td><?php echo CHtml::link('checkAccess()', array('/site/doc', 'view' => 'YdWebUser', '#' => 'checkAccess-detail')); ?></td>
  <td>Performs access check for this user.</td>
  <td>YdWebUser</td>
</tr>
<tr class="inherited" id="clearStates">
  <td><?php echo CHtml::link('clearStates()', array('/site/doc', 'view' => 'CWebUser', '#' => 'clearStates-detail')); ?></td>
  <td>Clears all user identity information from persistent storage.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
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
<tr class="inherited" id="getFlash">
  <td><?php echo CHtml::link('getFlash()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getFlash-detail')); ?></td>
  <td>Returns a flash message.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="getFlashes">
  <td><?php echo CHtml::link('getFlashes()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getFlashes-detail')); ?></td>
  <td>Returns all flash messages.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getId-detail')); ?></td>
  <td>Returns a value that uniquely represents the user.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="getIsGuest">
  <td><?php echo CHtml::link('getIsGuest()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getIsGuest-detail')); ?></td>
  <td>Returns a value indicating whether the user is a guest (not authenticated).</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getName-detail')); ?></td>
  <td>Returns the unique identifier for the user (e.g. username).</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="getReturnUrl">
  <td><?php echo CHtml::link('getReturnUrl()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getReturnUrl-detail')); ?></td>
  <td>Returns the URL that the user should be redirected to after successful login.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="getState">
  <td><?php echo CHtml::link('getState()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getState-detail')); ?></td>
  <td>Returns the value of a variable that is stored in user session.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="getStateKeyPrefix">
  <td><?php echo CHtml::link('getStateKeyPrefix()', array('/site/doc', 'view' => 'CWebUser', '#' => 'getStateKeyPrefix-detail')); ?></td>
  <td>Returns a prefix for the name of the session variables storing user session data.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="getUser">
  <td><?php echo CHtml::link('getUser()', array('/site/doc', 'view' => 'YdWebUser', '#' => 'getUser-detail')); ?></td>
  <td>Load user model</td>
  <td>YdWebUser</td>
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
<tr class="inherited" id="hasFlash">
  <td><?php echo CHtml::link('hasFlash()', array('/site/doc', 'view' => 'CWebUser', '#' => 'hasFlash-detail')); ?></td>
  <td>Determines whether the specified flash message exists</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="hasProperty">
  <td><?php echo CHtml::link('hasProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasProperty-detail')); ?></td>
  <td>Determines whether a property is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="hasState">
  <td><?php echo CHtml::link('hasState()', array('/site/doc', 'view' => 'CWebUser', '#' => 'hasState-detail')); ?></td>
  <td>Returns a value indicating whether there is a state of the specified name.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdWebUser', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>YdWebUser</td>
</tr>
<tr class="inherited" id="login">
  <td><?php echo CHtml::link('login()', array('/site/doc', 'view' => 'CWebUser', '#' => 'login-detail')); ?></td>
  <td>Logs in a user.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="loginRequired">
  <td><?php echo CHtml::link('loginRequired()', array('/site/doc', 'view' => 'CWebUser', '#' => 'loginRequired-detail')); ?></td>
  <td>Redirects the user browser to the login page.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="logout">
  <td><?php echo CHtml::link('logout()', array('/site/doc', 'view' => 'CWebUser', '#' => 'logout-detail')); ?></td>
  <td>Logs out the current user.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="multiFlash">
  <td><?php echo CHtml::link('multiFlash()', array('/site/doc', 'view' => 'YdWebUser', '#' => 'multiFlash-detail')); ?></td>
  <td>Gets all flashes and shows them to the user.</td>
  <td>YdWebUser</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="setFlash">
  <td><?php echo CHtml::link('setFlash()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setFlash-detail')); ?></td>
  <td>Stores a flash message.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setId-detail')); ?></td>
  <td>Sets the unique identifier for the user. If null, it means the user is a guest.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="setName">
  <td><?php echo CHtml::link('setName()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setName-detail')); ?></td>
  <td>Sets the unique identifier for the user (e.g. username).</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="setReturnUrl">
  <td><?php echo CHtml::link('setReturnUrl()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setReturnUrl-detail')); ?></td>
  <td>Sets the URL that the user should be redirected to after login.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="setState">
  <td><?php echo CHtml::link('setState()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setState-detail')); ?></td>
  <td>Stores a variable in user session.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="setStateKeyPrefix">
  <td><?php echo CHtml::link('setStateKeyPrefix()', array('/site/doc', 'view' => 'CWebUser', '#' => 'setStateKeyPrefix-detail')); ?></td>
  <td>Sets a prefix for the name of the session variables storing user session data.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="setting">
  <td><?php echo CHtml::link('setting()', array('/site/doc', 'view' => 'YdWebUser', '#' => 'setting-detail')); ?></td>
  <td>Load user setting</td>
  <td>YdWebUser</td>
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
<tr class="inherited" id="afterLogin">
  <td><?php echo CHtml::link('afterLogin()', array('/site/doc', 'view' => 'CWebUser', '#' => 'afterLogin-detail')); ?></td>
  <td>This method is called after the user is successfully logged in.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="afterLogout">
  <td><?php echo CHtml::link('afterLogout()', array('/site/doc', 'view' => 'CWebUser', '#' => 'afterLogout-detail')); ?></td>
  <td>This method is invoked right after a user is logged out.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="beforeLogin">
  <td><?php echo CHtml::link('beforeLogin()', array('/site/doc', 'view' => 'CWebUser', '#' => 'beforeLogin-detail')); ?></td>
  <td>This method is called before logging in a user.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="beforeLogout">
  <td><?php echo CHtml::link('beforeLogout()', array('/site/doc', 'view' => 'CWebUser', '#' => 'beforeLogout-detail')); ?></td>
  <td>This method is invoked when calling <?php echo CHtml::link('logout', array('/site/doc', 'view' => 'YdWebUser', '#' => 'logout')); ?> to log out a user.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="changeIdentity">
  <td><?php echo CHtml::link('changeIdentity()', array('/site/doc', 'view' => 'CWebUser', '#' => 'changeIdentity-detail')); ?></td>
  <td>Changes the current user with the specified identity information.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="createIdentityCookie">
  <td><?php echo CHtml::link('createIdentityCookie()', array('/site/doc', 'view' => 'CWebUser', '#' => 'createIdentityCookie-detail')); ?></td>
  <td>Creates a cookie to store identity information.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr id="getNexMultiFlashKey">
  <td><?php echo CHtml::link('getNexMultiFlashKey()', array('/site/doc', 'view' => 'YdWebUser', '#' => 'getNexMultiFlashKey-detail')); ?></td>
  <td>Returns next flash key for addFlash function.</td>
  <td>YdWebUser</td>
</tr>
<tr class="inherited" id="loadIdentityStates">
  <td><?php echo CHtml::link('loadIdentityStates()', array('/site/doc', 'view' => 'CWebUser', '#' => 'loadIdentityStates-detail')); ?></td>
  <td>Loads identity states from an array and saves them to persistent storage.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="renewCookie">
  <td><?php echo CHtml::link('renewCookie()', array('/site/doc', 'view' => 'CWebUser', '#' => 'renewCookie-detail')); ?></td>
  <td>Renews the identity cookie.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="restoreFromCookie">
  <td><?php echo CHtml::link('restoreFromCookie()', array('/site/doc', 'view' => 'CWebUser', '#' => 'restoreFromCookie-detail')); ?></td>
  <td>Populates the current user object with the information obtained from cookie.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="saveIdentityStates">
  <td><?php echo CHtml::link('saveIdentityStates()', array('/site/doc', 'view' => 'CWebUser', '#' => 'saveIdentityStates-detail')); ?></td>
  <td>Retrieves identity states from persistent storage and saves them as an array.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="saveToCookie">
  <td><?php echo CHtml::link('saveToCookie()', array('/site/doc', 'view' => 'CWebUser', '#' => 'saveToCookie-detail')); ?></td>
  <td>Saves necessary user data into a cookie.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="updateAuthStatus">
  <td><?php echo CHtml::link('updateAuthStatus()', array('/site/doc', 'view' => 'CWebUser', '#' => 'updateAuthStatus-detail')); ?></td>
  <td>Updates the authentication status according to <?php echo CHtml::link('authTimeout', array('/site/doc', 'view' => 'YdWebUser', '#' => 'authTimeout')); ?>.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
<tr class="inherited" id="updateFlash">
  <td><?php echo CHtml::link('updateFlash()', array('/site/doc', 'view' => 'CWebUser', '#' => 'updateFlash-detail')); ?></td>
  <td>Updates the internal counters for flash messages.</td>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="allowAutoLogin-detail">
allowAutoLogin<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$allowAutoLogin</b>;</div>

<p></p>


<div class="detailHeader" id="api-detail">
api<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
bool <b>api</b>;</div>

<p></p>


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
integer <b>id</b>;</div>

<p></p>


<div class="detailHeader" id="loginUrl-detail">
loginUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$loginUrl</b>;</div>

<p></p>


<div class="detailHeader" id="nexMultiFlashKey-detail">
nexMultiFlashKey<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected mixed <?php echo CHtml::link('<b>getNexMultiFlashKey</b>', array('/site/doc', 'view' => 'YdWebUser', '#' => 'getNexMultiFlashKey')); ?>()</div>

<p>Returns next flash key for addFlash function.</p>


<div class="detailHeader" id="user-detail">
user<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('YdUser', array('/site/doc', 'view' => 'YdUser')); ?> <?php echo CHtml::link('<b>getUser</b>', array('/site/doc', 'view' => 'YdWebUser', '#' => 'getUser')); ?>(null $id=NULL)</div>

<p>Load user model</p>


<div class="detailHeader" id="user-detail">
user<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('YdUser', array('/site/doc', 'view' => 'YdUser')); ?> <b>user</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="addFlash-detail">
addFlash()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addFlash</b>(string $msg='', string $class='info')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$msg</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$class</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdWebUser.php#L83">dressing/components/YdWebUser.php#L83</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNexMultiFlashKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #DD0000">"Stack&nbsp;overflow&nbsp;in&nbsp;addFlash"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dressing.YdWebUser.addFlash()'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Add flash to the stack.</p>


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
with the tasks and roles assigned to the user.</td>
</tr>
<tr>
  <td class="paramNameCol">$allowCaching</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to allow caching the result of access check.
This parameter has been available since version 1.0.5. When this parameter
is true (default), if the access check of an operation was performed before,
its result will be directly returned when calling this method to check the same operation.
If this parameter is false, this method will always call <?php echo CHtml::link('CAuthManager::checkAccess', array('/site/doc', 'view' => 'CAuthManager', '#' => 'checkAccess')); ?>
to obtain the up-to-date access result. Note that this caching is effective
only within the same request.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the operations can be performed by this user.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdWebUser.php#L70">dressing/components/YdWebUser.php#L70</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$operation</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$allowCaching&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$operation</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Performs access check for this user.</p>


<div class="detailHeader" id="getNexMultiFlashKey-detail">
getNexMultiFlashKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>getNexMultiFlashKey</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">string if ok or bool false if there was stack overflow.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdWebUser.php#L96">dressing/components/YdWebUser.php#L96</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getNexMultiFlashKey</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$counters&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FLASH_COUNTERS</span><span style="color: #007700">,&nbsp;array());<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$counters</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MF_KEY_PREFIX&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"1"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MF_MAX</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MF_KEY_PREFIX&nbsp;</span><span style="color: #007700">.&nbsp;(string)</span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$counters</span><span style="color: #007700">))&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns next flash key for addFlash function.</p>


<div class="detailHeader" id="getUser-detail">
getUser()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('YdUser', array('/site/doc', 'view' => 'YdUser')); ?> <b>getUser</b>(null $id=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('YdUser', array('/site/doc', 'view' => 'YdUser')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdWebUser.php#L135">dressing/components/YdWebUser.php#L135</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getUser</span><span style="color: #007700">(</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_userModel&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">YdHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">tableExists</span><span style="color: #007700">(</span><span style="color: #0000BB">YdUser</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">()))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_userModel&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdUser</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">findByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_userModel&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdUser</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">findByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_userModel</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Load user model</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdWebUser.php#L49">dressing/components/YdWebUser.php#L49</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">())&nbsp;!=&nbsp;</span><span style="color: #DD0000">'CConsoleApplication'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application component.
This method overrides the parent implementation by starting session,
performing cookie-based authentication if enabled, and updating the flash variables.</p>


<div class="detailHeader" id="multiFlash-detail">
multiFlash()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>multiFlash</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdWebUser.php#L118">dressing/components/YdWebUser.php#L118</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">multiFlash</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MF_MAX</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MF_KEY_PREFIX&nbsp;</span><span style="color: #007700">.&nbsp;(string)</span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$msg</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;class=\"alert&nbsp;alert-</span><span style="color: #0000BB">$class</span><span style="color: #DD0000">\"&gt;</span><span style="color: #0000BB">$msg</span><span style="color: #DD0000">&lt;/div&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Gets all flashes and shows them to the user.
Every flash is div with css class 'flash' and another 'flash_xxx' where xxx is the $class
parameter set in addFlash function.
Examples:
Yii::app()->user->addFlash('My text, something important!', 'warning');
Yii::app()->multiFlash();
Output is <div class="flash flash_warning">My text, something important!<div></p>


<div class="detailHeader" id="setting-detail">
setting()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>setting</b>($name $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">$name</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdWebUser.php#L151">dressing/components/YdWebUser.php#L151</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">setting</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$setting&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">user&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">method_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'getEavAttribute'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEavAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$setting</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$setting</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Load user setting</p>


