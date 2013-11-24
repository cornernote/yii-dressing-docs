<?php
$this->pageTitle = $this->pageHeading = 'CAuthManager';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CAuthManager';
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
  <td>abstract class CAuthManager &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?>, <?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CDbAuthManager', array('/site/doc', 'view' => 'CDbAuthManager')); ?>, <?php echo CHtml::link('CPhpAuthManager', array('/site/doc', 'view' => 'CPhpAuthManager')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CAuthManager.php">yii\web\auth\CAuthManager.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CAuthManager is the base class for authorization manager classes.
<br/><br/>
CAuthManager extends <?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> and implements some methods
that are common among authorization manager classes.
<br/><br/>
CAuthManager together with its concrete child classes implement the Role-Based
Access Control (RBAC).
<br/><br/>
The main idea is that permissions are organized as a hierarchy of
<?php echo CHtml::link('authorization items', array('/site/doc', 'view' => 'CAuthItem')); ?>. Items on higer level inherit the permissions
represented by items on lower level. And roles are simply top-level authorization items
that may be assigned to individual users. A user is said to have a permission
to do something if the corresponding authorization item is inherited by one of his roles.
<br/><br/>
Using authorization manager consists of two aspects. First, the authorization hierarchy
and assignments have to be established. CAuthManager and its child classes
provides APIs to accomplish this task. Developers may need to develop some GUI
so that it is more intuitive to end-users. Second, developers call <?php echo CHtml::link('IAuthManager::checkAccess', array('/site/doc', 'view' => 'IAuthManager', '#' => 'checkAccess')); ?>
at appropriate places in the application code to check if the current user
has the needed permission for an operation.</div>
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
<tr class="inherited" id="authItems">
  <td><?php echo CHtml::link('authItems', array('/site/doc', 'view' => 'IAuthManager', '#' => 'authItems-detail')); ?></td>
  <td>array</td>
  <td>Returns the authorization items of the specific type and user.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="defaultRoles">
  <td><?php echo CHtml::link('defaultRoles', array('/site/doc', 'view' => 'CAuthManager', '#' => 'defaultRoles-detail')); ?></td>
  <td>array</td>
  <td>list of role names that are assigned to all users implicitly.</td>
  <td>CAuthManager</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="operations">
  <td><?php echo CHtml::link('operations', array('/site/doc', 'view' => 'CAuthManager', '#' => 'operations-detail')); ?></td>
  <td>array</td>
  <td>Returns operations.</td>
  <td>CAuthManager</td>
</tr>
<tr id="roles">
  <td><?php echo CHtml::link('roles', array('/site/doc', 'view' => 'CAuthManager', '#' => 'roles-detail')); ?></td>
  <td>array</td>
  <td>Returns roles.</td>
  <td>CAuthManager</td>
</tr>
<tr id="showErrors">
  <td><?php echo CHtml::link('showErrors', array('/site/doc', 'view' => 'CAuthManager', '#' => 'showErrors-detail')); ?></td>
  <td>boolean</td>
  <td>Enable error reporting for bizRules.</td>
  <td>CAuthManager</td>
</tr>
<tr id="tasks">
  <td><?php echo CHtml::link('tasks', array('/site/doc', 'view' => 'CAuthManager', '#' => 'tasks-detail')); ?></td>
  <td>array</td>
  <td>Returns tasks.</td>
  <td>CAuthManager</td>
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
<tr class="inherited" id="addItemChild">
  <td><?php echo CHtml::link('addItemChild()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'addItemChild-detail')); ?></td>
  <td>Adds an item as a child of another item.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="asa">
  <td><?php echo CHtml::link('asa()', array('/site/doc', 'view' => 'CComponent', '#' => 'asa-detail')); ?></td>
  <td>Returns the named behavior object.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="assign">
  <td><?php echo CHtml::link('assign()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'assign-detail')); ?></td>
  <td>Assigns an authorization item to a user.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
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
<tr class="inherited" id="checkAccess">
  <td><?php echo CHtml::link('checkAccess()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'checkAccess-detail')); ?></td>
  <td>Performs access check for the specified user.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="clearAll">
  <td><?php echo CHtml::link('clearAll()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'clearAll-detail')); ?></td>
  <td>Removes all authorization data.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="clearAuthAssignments">
  <td><?php echo CHtml::link('clearAuthAssignments()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'clearAuthAssignments-detail')); ?></td>
  <td>Removes all authorization assignments.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="createAuthItem">
  <td><?php echo CHtml::link('createAuthItem()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'createAuthItem-detail')); ?></td>
  <td>Creates an authorization item.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr id="createOperation">
  <td><?php echo CHtml::link('createOperation()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'createOperation-detail')); ?></td>
  <td>Creates an operation.</td>
  <td>CAuthManager</td>
</tr>
<tr id="createRole">
  <td><?php echo CHtml::link('createRole()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'createRole-detail')); ?></td>
  <td>Creates a role.</td>
  <td>CAuthManager</td>
</tr>
<tr id="createTask">
  <td><?php echo CHtml::link('createTask()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'createTask-detail')); ?></td>
  <td>Creates a task.</td>
  <td>CAuthManager</td>
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
<tr id="executeBizRule">
  <td><?php echo CHtml::link('executeBizRule()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'executeBizRule-detail')); ?></td>
  <td>Executes the specified business rule.</td>
  <td>CAuthManager</td>
</tr>
<tr class="inherited" id="getAuthAssignment">
  <td><?php echo CHtml::link('getAuthAssignment()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthAssignment-detail')); ?></td>
  <td>Returns the item assignment information.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="getAuthAssignments">
  <td><?php echo CHtml::link('getAuthAssignments()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthAssignments-detail')); ?></td>
  <td>Returns the item assignments for the specified user.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="getAuthItem">
  <td><?php echo CHtml::link('getAuthItem()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItem-detail')); ?></td>
  <td>Returns the authorization item with the specified name.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="getAuthItems">
  <td><?php echo CHtml::link('getAuthItems()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItems-detail')); ?></td>
  <td>Returns the authorization items of the specific type and user.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
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
<tr class="inherited" id="getItemChildren">
  <td><?php echo CHtml::link('getItemChildren()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getItemChildren-detail')); ?></td>
  <td>Returns the children of the specified item.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr id="getOperations">
  <td><?php echo CHtml::link('getOperations()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'getOperations-detail')); ?></td>
  <td>Returns operations.</td>
  <td>CAuthManager</td>
</tr>
<tr id="getRoles">
  <td><?php echo CHtml::link('getRoles()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'getRoles-detail')); ?></td>
  <td>Returns roles.</td>
  <td>CAuthManager</td>
</tr>
<tr id="getTasks">
  <td><?php echo CHtml::link('getTasks()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'getTasks-detail')); ?></td>
  <td>Returns tasks.</td>
  <td>CAuthManager</td>
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
<tr class="inherited" id="hasItemChild">
  <td><?php echo CHtml::link('hasItemChild()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'hasItemChild-detail')); ?></td>
  <td>Returns a value indicating whether a child exists within a parent.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="hasProperty">
  <td><?php echo CHtml::link('hasProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasProperty-detail')); ?></td>
  <td>Determines whether a property is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="isAssigned">
  <td><?php echo CHtml::link('isAssigned()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'isAssigned-detail')); ?></td>
  <td>Returns a value indicating whether the item has been assigned to the user.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="removeAuthItem">
  <td><?php echo CHtml::link('removeAuthItem()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'removeAuthItem-detail')); ?></td>
  <td>Removes the specified authorization item.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="removeItemChild">
  <td><?php echo CHtml::link('removeItemChild()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'removeItemChild-detail')); ?></td>
  <td>Removes a child from its parent.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="revoke">
  <td><?php echo CHtml::link('revoke()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'revoke-detail')); ?></td>
  <td>Revokes an authorization assignment from a user.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="save">
  <td><?php echo CHtml::link('save()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'save-detail')); ?></td>
  <td>Saves authorization data into persistent storage.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="saveAuthAssignment">
  <td><?php echo CHtml::link('saveAuthAssignment()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'saveAuthAssignment-detail')); ?></td>
  <td>Saves the changes to an authorization assignment.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
</tr>
<tr class="inherited" id="saveAuthItem">
  <td><?php echo CHtml::link('saveAuthItem()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'saveAuthItem-detail')); ?></td>
  <td>Saves an authorization item to persistent storage.</td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
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
<tr id="checkItemChildType">
  <td><?php echo CHtml::link('checkItemChildType()', array('/site/doc', 'view' => 'CAuthManager', '#' => 'checkItemChildType-detail')); ?></td>
  <td>Checks the item types to make sure a child can be added to a parent.</td>
  <td>CAuthManager</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="defaultRoles-detail">
defaultRoles<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$defaultRoles</b>;</div>

<p>list of role names that are assigned to all users implicitly.
These roles do not need to be explicitly assigned to any user.
When calling <?php echo CHtml::link('checkAccess', array('/site/doc', 'view' => 'CAuthManager', '#' => 'checkAccess')); ?>, these roles will be checked first.
For performance reason, you should minimize the number of such roles.
A typical usage of such roles is to define an 'authenticated' role and associate
it with a biz rule which checks if the current user is authenticated.
And then declare 'authenticated' in this property so that it can be applied to
every authenticated user.</p>


<div class="detailHeader" id="operations-detail">
operations<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getOperations</b>', array('/site/doc', 'view' => 'CAuthManager', '#' => 'getOperations')); ?>(mixed $userId=NULL)</div>

<p>Returns operations.
This is a shortcut method to <?php echo CHtml::link('IAuthManager::getAuthItems', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItems')); ?>.</p>


<div class="detailHeader" id="roles-detail">
roles<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getRoles</b>', array('/site/doc', 'view' => 'CAuthManager', '#' => 'getRoles')); ?>(mixed $userId=NULL)</div>

<p>Returns roles.
This is a shortcut method to <?php echo CHtml::link('IAuthManager::getAuthItems', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItems')); ?>.</p>


<div class="detailHeader" id="showErrors-detail">
showErrors<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public boolean <b>$showErrors</b>;</div>

<p>Enable error reporting for bizRules.</p>


<div class="detailHeader" id="tasks-detail">
tasks<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getTasks</b>', array('/site/doc', 'view' => 'CAuthManager', '#' => 'getTasks')); ?>(mixed $userId=NULL)</div>

<p>Returns tasks.
This is a shortcut method to <?php echo CHtml::link('IAuthManager::getAuthItems', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItems')); ?>.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="checkItemChildType-detail">
checkItemChildType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>checkItemChildType</b>(integer $parentType, integer $childType)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$parentType</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">parent item type</td>
</tr>
<tr>
  <td class="paramNameCol">$childType</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">child item type</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CAuthManager.php#L158">yii\web\auth\CAuthManager.php#L158</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">checkItemChildType</span><span style="color: #007700">(</span><span style="color: #0000BB">$parentType</span><span style="color: #007700">,</span><span style="color: #0000BB">$childType</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">=array(</span><span style="color: #DD0000">'operation'</span><span style="color: #007700">,</span><span style="color: #DD0000">'task'</span><span style="color: #007700">,</span><span style="color: #DD0000">'role'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$parentType&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$childType</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Cannot&nbsp;add&nbsp;an&nbsp;item&nbsp;of&nbsp;type&nbsp;"{child}"&nbsp;to&nbsp;an&nbsp;item&nbsp;of&nbsp;type&nbsp;"{parent}".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{child}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$types</span><span style="color: #007700">[</span><span style="color: #0000BB">$childType</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'{parent}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$types</span><span style="color: #007700">[</span><span style="color: #0000BB">$parentType</span><span style="color: #007700">])));<br />}</span>
</span>
</code></div>
</div>
<p>Checks the item types to make sure a child can be added to a parent.</p>


<div class="detailHeader" id="createOperation-detail">
createOperation()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?> <b>createOperation</b>(string $name, string $description='', string $bizRule=NULL, mixed $data=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item name</td>
</tr>
<tr>
  <td class="paramNameCol">$description</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item description.</td>
</tr>
<tr>
  <td class="paramNameCol">$bizRule</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule associated with this item</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">additional data to be passed when evaluating the business rule</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?></td>
  <td class="paramDescCol">the authorization item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CAuthManager.php#L98">yii\web\auth\CAuthManager.php#L98</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createOperation</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">CAuthItem</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_OPERATION</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates an operation.
This is a shortcut method to <?php echo CHtml::link('IAuthManager::createAuthItem', array('/site/doc', 'view' => 'IAuthManager', '#' => 'createAuthItem')); ?>.</p>


<div class="detailHeader" id="createRole-detail">
createRole()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?> <b>createRole</b>(string $name, string $description='', string $bizRule=NULL, mixed $data=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item name</td>
</tr>
<tr>
  <td class="paramNameCol">$description</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item description.</td>
</tr>
<tr>
  <td class="paramNameCol">$bizRule</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule associated with this item</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">additional data to be passed when evaluating the business rule</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?></td>
  <td class="paramDescCol">the authorization item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CAuthManager.php#L70">yii\web\auth\CAuthManager.php#L70</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createRole</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">CAuthItem</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_ROLE</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a role.
This is a shortcut method to <?php echo CHtml::link('IAuthManager::createAuthItem', array('/site/doc', 'view' => 'IAuthManager', '#' => 'createAuthItem')); ?>.</p>


<div class="detailHeader" id="createTask-detail">
createTask()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?> <b>createTask</b>(string $name, string $description='', string $bizRule=NULL, mixed $data=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item name</td>
</tr>
<tr>
  <td class="paramNameCol">$description</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item description.</td>
</tr>
<tr>
  <td class="paramNameCol">$bizRule</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule associated with this item</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">additional data to be passed when evaluating the business rule</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?></td>
  <td class="paramDescCol">the authorization item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CAuthManager.php#L84">yii\web\auth\CAuthManager.php#L84</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createTask</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">CAuthItem</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_TASK</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a task.
This is a shortcut method to <?php echo CHtml::link('IAuthManager::createAuthItem', array('/site/doc', 'view' => 'IAuthManager', '#' => 'createAuthItem')); ?>.</p>


<div class="detailHeader" id="executeBizRule-detail">
executeBizRule()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>executeBizRule</b>(string $bizRule, array $params, mixed $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$bizRule</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule to be executed.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">parameters passed to <?php echo CHtml::link('IAuthManager::checkAccess', array('/site/doc', 'view' => 'IAuthManager', '#' => 'checkAccess')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">additional data associated with the authorization item or assignment.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the business rule returns true.
If the business rule is empty, it will still return true.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CAuthManager.php#L147">yii\web\auth\CAuthManager.php#L147</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">executeBizRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showErrors&nbsp;</span><span style="color: #007700">?&nbsp;eval(</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">)!=</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">:&nbsp;@eval(</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">)!=</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Executes the specified business rule.</p>


<div class="detailHeader" id="getOperations-detail">
getOperations()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getOperations</b>(mixed $userId=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID. If not null, only the operations directly assigned to the user
will be returned. Otherwise, all operations will be returned.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">operations (name=>CAuthItem)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CAuthManager.php#L134">yii\web\auth\CAuthManager.php#L134</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOperations</span><span style="color: #007700">(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAuthItems</span><span style="color: #007700">(</span><span style="color: #0000BB">CAuthItem</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_OPERATION</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns operations.
This is a shortcut method to <?php echo CHtml::link('IAuthManager::getAuthItems', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItems')); ?>.</p>


<div class="detailHeader" id="getRoles-detail">
getRoles()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getRoles</b>(mixed $userId=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID. If not null, only the roles directly assigned to the user
will be returned. Otherwise, all roles will be returned.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">roles (name=>CAuthItem)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CAuthManager.php#L110">yii\web\auth\CAuthManager.php#L110</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRoles</span><span style="color: #007700">(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAuthItems</span><span style="color: #007700">(</span><span style="color: #0000BB">CAuthItem</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_ROLE</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns roles.
This is a shortcut method to <?php echo CHtml::link('IAuthManager::getAuthItems', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItems')); ?>.</p>


<div class="detailHeader" id="getTasks-detail">
getTasks()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getTasks</b>(mixed $userId=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID. If not null, only the tasks directly assigned to the user
will be returned. Otherwise, all tasks will be returned.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">tasks (name=>CAuthItem)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\auth\CAuthManager.php#L122">yii\web\auth\CAuthManager.php#L122</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTasks</span><span style="color: #007700">(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAuthItems</span><span style="color: #007700">(</span><span style="color: #0000BB">CAuthItem</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_TASK</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns tasks.
This is a shortcut method to <?php echo CHtml::link('IAuthManager::getAuthItems', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItems')); ?>.</p>


