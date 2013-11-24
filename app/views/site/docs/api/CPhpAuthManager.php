<?php
$this->pageTitle = $this->pageHeading = 'CPhpAuthManager';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CPhpAuthManager';
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
  <td>class CPhpAuthManager &raquo;
<?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?>, <?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php">yii\web\auth\CPhpAuthManager.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CPhpAuthManager represents an authorization manager that stores authorization information in terms of a PHP script file.
<br/><br/>
The authorization data will be saved to and loaded from a file
specified by <?php echo CHtml::link('authFile', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'authFile')); ?>, which defaults to 'protected/data/auth.php'.
<br/><br/>
CPhpAuthManager is mainly suitable for authorization data that is not too big
(for example, the authorization data for a personal blog system).
Use <?php echo CHtml::link('CDbAuthManager', array('/site/doc', 'view' => 'CDbAuthManager')); ?> for more complex authorization data.</div>
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
<tr id="authFile">
  <td><?php echo CHtml::link('authFile', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'authFile-detail')); ?></td>
  <td>string</td>
  <td>the path of the PHP script that contains the authorization data.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="authItems">
  <td><?php echo CHtml::link('authItems', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'authItems-detail')); ?></td>
  <td>array</td>
  <td>Returns the authorization items of the specific type and user.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="defaultRoles">
  <td><?php echo CHtml::link('defaultRoles', array('/site/doc', 'view' => 'CAuthManager', '#' => 'defaultRoles-detail')); ?></td>
  <td>array</td>
  <td>list of role names that are assigned to all users implicitly.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="operations">
  <td><?php echo CHtml::link('operations', array('/site/doc', 'view' => 'CAuthManager', '#' => 'operations-detail')); ?></td>
  <td>array</td>
  <td>Returns operations.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr class="inherited" id="roles">
  <td><?php echo CHtml::link('roles', array('/site/doc', 'view' => 'CAuthManager', '#' => 'roles-detail')); ?></td>
  <td>array</td>
  <td>Returns roles.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr class="inherited" id="showErrors">
  <td><?php echo CHtml::link('showErrors', array('/site/doc', 'view' => 'CAuthManager', '#' => 'showErrors-detail')); ?></td>
  <td>boolean</td>
  <td>Enable error reporting for bizRules.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr class="inherited" id="tasks">
  <td><?php echo CHtml::link('tasks', array('/site/doc', 'view' => 'CAuthManager', '#' => 'tasks-detail')); ?></td>
  <td>array</td>
  <td>Returns tasks.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
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
<tr id="addItemChild">
  <td><?php echo CHtml::link('addItemChild()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'addItemChild-detail')); ?></td>
  <td>Adds an item as a child of another item.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr class="inherited" id="asa">
  <td><?php echo CHtml::link('asa()', array('/site/doc', 'view' => 'CComponent', '#' => 'asa-detail')); ?></td>
  <td>Returns the named behavior object.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="assign">
  <td><?php echo CHtml::link('assign()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'assign-detail')); ?></td>
  <td>Assigns an authorization item to a user.</td>
  <td>CPhpAuthManager</td>
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
  <td><?php echo CHtml::link('checkAccess()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'checkAccess-detail')); ?></td>
  <td>Performs access check for the specified user.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="clearAll">
  <td><?php echo CHtml::link('clearAll()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'clearAll-detail')); ?></td>
  <td>Removes all authorization data.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="clearAuthAssignments">
  <td><?php echo CHtml::link('clearAuthAssignments()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'clearAuthAssignments-detail')); ?></td>
  <td>Removes all authorization assignments.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="createAuthItem">
  <td><?php echo CHtml::link('createAuthItem()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'createAuthItem-detail')); ?></td>
  <td>Creates an authorization item.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr class="inherited" id="createOperation">
  <td><?php echo CHtml::link('createOperation()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'createOperation-detail')); ?></td>
  <td>Creates an operation.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr class="inherited" id="createRole">
  <td><?php echo CHtml::link('createRole()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'createRole-detail')); ?></td>
  <td>Creates a role.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr class="inherited" id="createTask">
  <td><?php echo CHtml::link('createTask()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'createTask-detail')); ?></td>
  <td>Creates a task.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
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
<tr class="inherited" id="executeBizRule">
  <td><?php echo CHtml::link('executeBizRule()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'executeBizRule-detail')); ?></td>
  <td>Executes the specified business rule.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr id="getAuthAssignment">
  <td><?php echo CHtml::link('getAuthAssignment()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'getAuthAssignment-detail')); ?></td>
  <td>Returns the item assignment information.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="getAuthAssignments">
  <td><?php echo CHtml::link('getAuthAssignments()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'getAuthAssignments-detail')); ?></td>
  <td>Returns the item assignments for the specified user.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="getAuthItem">
  <td><?php echo CHtml::link('getAuthItem()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'getAuthItem-detail')); ?></td>
  <td>Returns the authorization item with the specified name.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="getAuthItems">
  <td><?php echo CHtml::link('getAuthItems()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'getAuthItems-detail')); ?></td>
  <td>Returns the authorization items of the specific type and user.</td>
  <td>CPhpAuthManager</td>
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
<tr id="getItemChildren">
  <td><?php echo CHtml::link('getItemChildren()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'getItemChildren-detail')); ?></td>
  <td>Returns the children of the specified item.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr class="inherited" id="getOperations">
  <td><?php echo CHtml::link('getOperations()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'getOperations-detail')); ?></td>
  <td>Returns operations.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr class="inherited" id="getRoles">
  <td><?php echo CHtml::link('getRoles()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'getRoles-detail')); ?></td>
  <td>Returns roles.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr class="inherited" id="getTasks">
  <td><?php echo CHtml::link('getTasks()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'getTasks-detail')); ?></td>
  <td>Returns tasks.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
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
<tr id="hasItemChild">
  <td><?php echo CHtml::link('hasItemChild()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'hasItemChild-detail')); ?></td>
  <td>Returns a value indicating whether a child exists within a parent.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr class="inherited" id="hasProperty">
  <td><?php echo CHtml::link('hasProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasProperty-detail')); ?></td>
  <td>Determines whether a property is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="isAssigned">
  <td><?php echo CHtml::link('isAssigned()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'isAssigned-detail')); ?></td>
  <td>Returns a value indicating whether the item has been assigned to the user.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="load">
  <td><?php echo CHtml::link('load()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'load-detail')); ?></td>
  <td>Loads authorization data.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="removeAuthItem">
  <td><?php echo CHtml::link('removeAuthItem()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'removeAuthItem-detail')); ?></td>
  <td>Removes the specified authorization item.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="removeItemChild">
  <td><?php echo CHtml::link('removeItemChild()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'removeItemChild-detail')); ?></td>
  <td>Removes a child from its parent.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="revoke">
  <td><?php echo CHtml::link('revoke()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'revoke-detail')); ?></td>
  <td>Revokes an authorization assignment from a user.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="save">
  <td><?php echo CHtml::link('save()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'save-detail')); ?></td>
  <td>Saves authorization data into persistent storage.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="saveAuthAssignment">
  <td><?php echo CHtml::link('saveAuthAssignment()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'saveAuthAssignment-detail')); ?></td>
  <td>Saves the changes to an authorization assignment.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="saveAuthItem">
  <td><?php echo CHtml::link('saveAuthItem()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'saveAuthItem-detail')); ?></td>
  <td>Saves an authorization item to persistent storage.</td>
  <td>CPhpAuthManager</td>
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
<tr class="inherited" id="checkItemChildType">
  <td><?php echo CHtml::link('checkItemChildType()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'checkItemChildType-detail')); ?></td>
  <td>Checks the item types to make sure a child can be added to a parent.</td>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?></td>
</tr>
<tr id="detectLoop">
  <td><?php echo CHtml::link('detectLoop()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'detectLoop-detail')); ?></td>
  <td>Checks whether there is a loop in the authorization item hierarchy.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="loadFromFile">
  <td><?php echo CHtml::link('loadFromFile()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'loadFromFile-detail')); ?></td>
  <td>Loads the authorization data from a PHP script file.</td>
  <td>CPhpAuthManager</td>
</tr>
<tr id="saveToFile">
  <td><?php echo CHtml::link('saveToFile()', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'saveToFile-detail')); ?></td>
  <td>Saves the authorization data to a PHP script file.</td>
  <td>CPhpAuthManager</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="authFile-detail">
authFile<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$authFile</b>;</div>

<p>the path of the PHP script that contains the authorization data.
If not set, it will be using 'protected/data/auth.php' as the data file.
Make sure this file is writable by the Web server process if the authorization
needs to be changed.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('loadFromFile', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'loadFromFile')); ?></li>
	<li><?php echo CHtml::link('saveToFile', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'saveToFile')); ?></li>
</ul>
</div>

<div class="detailHeader" id="authItems-detail">
authItems<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getAuthItems</b>', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'getAuthItems')); ?>(integer $type=NULL, mixed $userId=NULL)</div>

<p>Returns the authorization items of the specific type and user.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addItemChild-detail">
addItemChild()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>addItemChild</b>(string $itemName, string $childName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the parent item name</td>
</tr>
<tr>
  <td class="paramNameCol">$childName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the child item name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the item is added successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L100">yii\web\auth\CPhpAuthManager.php#L100</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addItemChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$childName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$childName</span><span style="color: #007700">],</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Either&nbsp;"{parent}"&nbsp;or&nbsp;"{child}"&nbsp;does&nbsp;not&nbsp;exist.'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{child}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$childName</span><span style="color: #007700">,</span><span style="color: #DD0000">'{name}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$childName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkItemChildType</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getType</span><span style="color: #007700">(),</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getType</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">detectLoop</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$childName</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Cannot&nbsp;add&nbsp;"{child}"&nbsp;as&nbsp;a&nbsp;child&nbsp;of&nbsp;"{parent}".&nbsp;A&nbsp;loop&nbsp;has&nbsp;been&nbsp;detected.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{child}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$childName</span><span style="color: #007700">,</span><span style="color: #DD0000">'{parent}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">][</span><span style="color: #0000BB">$childName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;item&nbsp;"{parent}"&nbsp;already&nbsp;has&nbsp;a&nbsp;child&nbsp;"{child}".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{child}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$childName</span><span style="color: #007700">,</span><span style="color: #DD0000">'{parent}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">][</span><span style="color: #0000BB">$childName</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$childName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Adds an item as a child of another item.</p>


<div class="detailHeader" id="assign-detail">
assign()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?> <b>assign</b>(string $itemName, mixed $userId, string $bizRule=NULL, mixed $data=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item name</td>
</tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID (see <?php echo CHtml::link('IWebUser::getId', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">$bizRule</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule to be executed when <?php echo CHtml::link('checkAccess', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'checkAccess')); ?> is called
for this particular authorization item.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">additional data associated with this assignment</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?></td>
  <td class="paramDescCol">the authorization assignment information.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L176">yii\web\auth\CPhpAuthManager.php#L176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unknown&nbsp;authorization&nbsp;item&nbsp;"{name}".'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{name}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Authorization&nbsp;item&nbsp;"{item}"&nbsp;has&nbsp;already&nbsp;been&nbsp;assigned&nbsp;to&nbsp;user&nbsp;"{user}".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{item}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #DD0000">'{user}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$userId</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CAuthAssignment</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Assigns an authorization item to a user.</p>


<div class="detailHeader" id="checkAccess-detail">
checkAccess()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>checkAccess</b>(string $itemName, mixed $userId, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the operation that need access check</td>
</tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID. This can be either an integer or a string representing
the unique identifier of a user. See <?php echo CHtml::link('IWebUser::getId', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">name-value pairs that would be passed to biz rules associated
with the tasks and roles assigned to the user.
Since version 1.1.11 a param with name 'userId' is added to this array, which holds the value of <code>$userId</code>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the operations can be performed by the user.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L66">yii\web\auth\CPhpAuthManager.php#L66</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #DD0000">'Checking&nbsp;permission&nbsp;"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">().</span><span style="color: #DD0000">'"'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.web.auth.CPhpAuthManager'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'userId'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'userId'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$userId</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeBizRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBizRule</span><span style="color: #007700">(),</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">()))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultRoles</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeBizRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBizRule</span><span style="color: #007700">(),</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">()))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$parentName</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$children</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$parentName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Performs access check for the specified user.</p>


<div class="detailHeader" id="clearAll-detail">
clearAll()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>clearAll</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L446">yii\web\auth\CPhpAuthManager.php#L446</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clearAll</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clearAuthAssignments</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">=array();<br />}</span>
</span>
</code></div>
</div>
<p>Removes all authorization data.</p>


<div class="detailHeader" id="clearAuthAssignments-detail">
clearAuthAssignments()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>clearAuthAssignments</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L456">yii\web\auth\CPhpAuthManager.php#L456</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clearAuthAssignments</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">=array();<br />}</span>
</span>
</code></div>
</div>
<p>Removes all authorization assignments.</p>


<div class="detailHeader" id="createAuthItem-detail">
createAuthItem()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?> <b>createAuthItem</b>(string $name, integer $type, string $description='', string $bizRule=NULL, mixed $data=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item name. This must be a unique identifier.</td>
</tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the item type (0: operation, 1: task, 2: role).</td>
</tr>
<tr>
  <td class="paramNameCol">$description</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">description of the item</td>
</tr>
<tr>
  <td class="paramNameCol">$bizRule</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">business rule associated with the item. This is a piece of
PHP code that will be executed when <?php echo CHtml::link('checkAccess', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'checkAccess')); ?> is called for the item.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">additional data associated with the item.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?></td>
  <td class="paramDescCol">the authorization item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L286">yii\web\auth\CPhpAuthManager.php#L286</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unable&nbsp;to&nbsp;add&nbsp;an&nbsp;item&nbsp;whose&nbsp;name&nbsp;is&nbsp;the&nbsp;same&nbsp;as&nbsp;an&nbsp;existing&nbsp;item.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates an authorization item.
An authorization item represents an action permission (e.g. creating a post).
It has three types: operation, task and role.
Authorization items form a hierarchy. Higher level items inheirt permissions representing
by lower level items.</p>


<div class="detailHeader" id="detectLoop-detail">
detectLoop()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>detectLoop</b>(string $itemName, string $childName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">parent item name</td>
</tr>
<tr>
  <td class="paramNameCol">$childName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the child item that is to be added to the hierarchy</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether a loop exists</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L467">yii\web\auth\CPhpAuthManager.php#L467</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">detectLoop</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$childName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$childName</span><span style="color: #007700">===</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$childName</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$childName</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">detectLoop</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks whether there is a loop in the authorization item hierarchy.</p>


<div class="detailHeader" id="getAuthAssignment-detail">
getAuthAssignment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?> <b>getAuthAssignment</b>(string $itemName, mixed $userId)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item name</td>
</tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID (see <?php echo CHtml::link('IWebUser::getId', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?></td>
  <td class="paramDescCol">the item assignment information. Null is returned if
the item is not assigned to the user.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L222">yii\web\auth\CPhpAuthManager.php#L222</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthAssignment</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">])?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]:</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the item assignment information.</p>


<div class="detailHeader" id="getAuthAssignments-detail">
getAuthAssignments()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getAuthAssignments</b>(mixed $userId)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID (see <?php echo CHtml::link('IWebUser::getId', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the item assignment information for the user. An empty array will be
returned if there is no item assigned to the user.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L233">yii\web\auth\CPhpAuthManager.php#L233</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthAssignments</span><span style="color: #007700">(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">])?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">]:array();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the item assignments for the specified user.</p>


<div class="detailHeader" id="getAuthItem-detail">
getAuthItem()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?> <b>getAuthItem</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the item</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?></td>
  <td class="paramDescCol">the authorization item. Null if the item cannot be found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L318">yii\web\auth\CPhpAuthManager.php#L318</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])?</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]:</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the authorization item with the specified name.</p>


<div class="detailHeader" id="getAuthItems-detail">
getAuthItems()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getAuthItems</b>(integer $type=NULL, mixed $userId=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the item type (0: operation, 1: task, 2: role). Defaults to null,
meaning returning all items regardless of their type.</td>
</tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID. Defaults to null, meaning returning all items even if
they are not assigned to a user.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the authorization items of the specific type.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L246">yii\web\auth\CPhpAuthManager.php#L246</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthItems</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$type</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$userId</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getType</span><span style="color: #007700">()==</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$item</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$type</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getType</span><span style="color: #007700">()==</span><span style="color: #0000BB">$type</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the authorization items of the specific type and user.</p>


<div class="detailHeader" id="getItemChildren-detail">
getItemChildren()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getItemChildren</b>(mixed $names)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$names</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the parent item name. This can be either a string or an array.
The latter represents a list of item names.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">all child items of the parent</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L152">yii\web\auth\CPhpAuthManager.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getItemChildren</span><span style="color: #007700">(</span><span style="color: #0000BB">$names</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$names</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$names</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$names</span><span style="color: #007700">]&nbsp;:&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$names&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$children</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the children of the specified item.</p>


<div class="detailHeader" id="hasItemChild-detail">
hasItemChild()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>hasItemChild</b>(string $itemName, string $childName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the parent item name</td>
</tr>
<tr>
  <td class="paramNameCol">$childName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the child item name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the child exists</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L141">yii\web\auth\CPhpAuthManager.php#L141</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hasItemChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$childName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">][</span><span style="color: #0000BB">$childName</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether a child exists within a parent.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L48">yii\web\auth\CPhpAuthManager.php#L48</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">authFile</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">authFile</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'application.data.auth'</span><span style="color: #007700">).</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application component.
This method overrides parent implementation by loading the authorization data
from PHP script.</p>


<div class="detailHeader" id="isAssigned-detail">
isAssigned()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isAssigned</b>(string $itemName, mixed $userId)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item name</td>
</tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID (see <?php echo CHtml::link('IWebUser::getId', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the item has been assigned to the user.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L210">yii\web\auth\CPhpAuthManager.php#L210</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isAssigned</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the item has been assigned to the user.</p>


<div class="detailHeader" id="load-detail">
load()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>load</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L414">yii\web\auth\CPhpAuthManager.php#L414</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">load</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clearAll</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadFromFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">authFile</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">],</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'description'</span><span style="color: #007700">],</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'bizRule'</span><span style="color: #007700">],</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'data'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'children'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'children'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$childName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$childName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">][</span><span style="color: #0000BB">$childName</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$childName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'assignments'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'assignments'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$userId</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CAuthAssignment</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">,</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">[</span><span style="color: #DD0000">'bizRule'</span><span style="color: #007700">],</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">[</span><span style="color: #DD0000">'data'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Loads authorization data.</p>


<div class="detailHeader" id="loadFromFile-detail">
loadFromFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>loadFromFile</b>(string $file)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the file path.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the authorization data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L488">yii\web\auth\CPhpAuthManager.php#L488</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">loadFromFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;require(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />}</span>
</span>
</code></div>
</div>
<p>Loads the authorization data from a PHP script file.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('saveToFile', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'saveToFile')); ?></li>
</ul>
</div>

<div class="detailHeader" id="removeAuthItem-detail">
removeAuthItem()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>removeAuthItem</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the item to be removed</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the item exists in the storage and has been removed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L298">yii\web\auth\CPhpAuthManager.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removeAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children&nbsp;</span><span style="color: #007700">as&nbsp;&amp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments&nbsp;</span><span style="color: #007700">as&nbsp;&amp;</span><span style="color: #0000BB">$assignments</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Removes the specified authorization item.</p>


<div class="detailHeader" id="removeItemChild-detail">
removeItemChild()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>removeItemChild</b>(string $itemName, string $childName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the parent item name</td>
</tr>
<tr>
  <td class="paramNameCol">$childName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the child item name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the removal is successful</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L124">yii\web\auth\CPhpAuthManager.php#L124</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removeItemChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$childName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">][</span><span style="color: #0000BB">$childName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">][</span><span style="color: #0000BB">$childName</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Removes a child from its parent.
Note, the child item is not deleted. Only the parent-child relationship is removed.</p>


<div class="detailHeader" id="revoke-detail">
revoke()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>revoke</b>(string $itemName, mixed $userId)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item name</td>
</tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID (see <?php echo CHtml::link('IWebUser::getId', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether removal is successful</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L193">yii\web\auth\CPhpAuthManager.php#L193</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">revoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$userId</span><span style="color: #007700">][</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Revokes an authorization assignment from a user.</p>


<div class="detailHeader" id="save-detail">
save()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>save</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L376">yii\web\auth\CPhpAuthManager.php#L376</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">save</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getType</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'description'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDescription</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bizRule'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBizRule</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">][</span><span style="color: #DD0000">'children'</span><span style="color: #007700">][]=</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$userId</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$assignments</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$assignments&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">][</span><span style="color: #DD0000">'assignments'</span><span style="color: #007700">][</span><span style="color: #0000BB">$userId</span><span style="color: #007700">]=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bizRule'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBizRule</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveToFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">authFile</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Saves authorization data into persistent storage.
If any change is made to the authorization data, please make
sure you call this method to save the changed data into persistent storage.</p>


<div class="detailHeader" id="saveAuthAssignment-detail">
saveAuthAssignment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>saveAuthAssignment</b>(<?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?> $assignment)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$assignment</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?></td>
  <td class="paramDescCol">the assignment that has been changed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L367">yii\web\auth\CPhpAuthManager.php#L367</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">saveAuthAssignment</span><span style="color: #007700">(</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">)<br />{<br />}</span>
</span>
</code></div>
</div>
<p>Saves the changes to an authorization assignment.</p>


<div class="detailHeader" id="saveAuthItem-detail">
saveAuthItem()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>saveAuthItem</b>(<?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?> $item, string $oldName=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$item</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?></td>
  <td class="paramDescCol">the item to be saved.</td>
</tr>
<tr>
  <td class="paramNameCol">$oldName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the old item name. If null, it means the item name is not changed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L328">yii\web\auth\CPhpAuthManager.php#L328</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">saveAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">,</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$newName</span><span style="color: #007700">=</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">())!==</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;name&nbsp;changed<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$newName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unable&nbsp;to&nbsp;change&nbsp;the&nbsp;item&nbsp;name.&nbsp;The&nbsp;name&nbsp;"{name}"&nbsp;is&nbsp;already&nbsp;used&nbsp;by&nbsp;another&nbsp;item.'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{name}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">]===</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_items</span><span style="color: #007700">[</span><span style="color: #0000BB">$newName</span><span style="color: #007700">]=</span><span style="color: #0000BB">$item</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$newName</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_children&nbsp;</span><span style="color: #007700">as&nbsp;&amp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$newName</span><span style="color: #007700">]=</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$children</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_assignments&nbsp;</span><span style="color: #007700">as&nbsp;&amp;</span><span style="color: #0000BB">$assignments</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$newName</span><span style="color: #007700">]=</span><span style="color: #0000BB">$assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$assignments</span><span style="color: #007700">[</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Saves an authorization item to persistent storage.</p>


<div class="detailHeader" id="saveToFile-detail">
saveToFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>saveToFile</b>(array $data, string $file)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the authorization data</td>
</tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the file path.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CPhpAuthManager.php#L502">yii\web\auth\CPhpAuthManager.php#L502</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">saveToFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #DD0000">"&lt;?php\nreturn&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">).</span><span style="color: #DD0000">";\n"</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Saves the authorization data to a PHP script file.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('loadFromFile', array('/site/doc', 'view' => 'CPhpAuthManager', '#' => 'loadFromFile')); ?></li>
</ul>
</div>

