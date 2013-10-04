<?php
$this->pageTitle = $this->pageHeading = 'IAuthManager';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IAuthManager';
?>
<div id="nav">
<a href="#methods">Methods</a></div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>Package</th>
  <td><?php echo CHtml::link('system.base', array('/site/doc', '#' => 'system.base')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>interface IAuthManager</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?>, <?php echo CHtml::link('CDbAuthManager', array('/site/doc', 'view' => 'CDbAuthManager')); ?>, <?php echo CHtml::link('CPhpAuthManager', array('/site/doc', 'view' => 'CPhpAuthManager')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php">yii/base/interfaces.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
IAuthManager interface is implemented by an auth manager application component.
<br/><br/>
An auth manager is mainly responsible for providing role-based access control (RBAC) service.</div>
<a name="properties"></a>

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
<tr id="addItemChild">
  <td><?php echo CHtml::link('addItemChild()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'addItemChild-detail')); ?></td>
  <td>Adds an item as a child of another item.</td>
  <td>IAuthManager</td>
</tr>
<tr id="assign">
  <td><?php echo CHtml::link('assign()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'assign-detail')); ?></td>
  <td>Assigns an authorization item to a user.</td>
  <td>IAuthManager</td>
</tr>
<tr id="checkAccess">
  <td><?php echo CHtml::link('checkAccess()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'checkAccess-detail')); ?></td>
  <td>Performs access check for the specified user.</td>
  <td>IAuthManager</td>
</tr>
<tr id="clearAll">
  <td><?php echo CHtml::link('clearAll()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'clearAll-detail')); ?></td>
  <td>Removes all authorization data.</td>
  <td>IAuthManager</td>
</tr>
<tr id="clearAuthAssignments">
  <td><?php echo CHtml::link('clearAuthAssignments()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'clearAuthAssignments-detail')); ?></td>
  <td>Removes all authorization assignments.</td>
  <td>IAuthManager</td>
</tr>
<tr id="createAuthItem">
  <td><?php echo CHtml::link('createAuthItem()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'createAuthItem-detail')); ?></td>
  <td>Creates an authorization item.</td>
  <td>IAuthManager</td>
</tr>
<tr id="executeBizRule">
  <td><?php echo CHtml::link('executeBizRule()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'executeBizRule-detail')); ?></td>
  <td>Executes a business rule.</td>
  <td>IAuthManager</td>
</tr>
<tr id="getAuthAssignment">
  <td><?php echo CHtml::link('getAuthAssignment()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthAssignment-detail')); ?></td>
  <td>Returns the item assignment information.</td>
  <td>IAuthManager</td>
</tr>
<tr id="getAuthAssignments">
  <td><?php echo CHtml::link('getAuthAssignments()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthAssignments-detail')); ?></td>
  <td>Returns the item assignments for the specified user.</td>
  <td>IAuthManager</td>
</tr>
<tr id="getAuthItem">
  <td><?php echo CHtml::link('getAuthItem()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItem-detail')); ?></td>
  <td>Returns the authorization item with the specified name.</td>
  <td>IAuthManager</td>
</tr>
<tr id="getAuthItems">
  <td><?php echo CHtml::link('getAuthItems()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthItems-detail')); ?></td>
  <td>Returns the authorization items of the specific type and user.</td>
  <td>IAuthManager</td>
</tr>
<tr id="getItemChildren">
  <td><?php echo CHtml::link('getItemChildren()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getItemChildren-detail')); ?></td>
  <td>Returns the children of the specified item.</td>
  <td>IAuthManager</td>
</tr>
<tr id="hasItemChild">
  <td><?php echo CHtml::link('hasItemChild()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'hasItemChild-detail')); ?></td>
  <td>Returns a value indicating whether a child exists within a parent.</td>
  <td>IAuthManager</td>
</tr>
<tr id="isAssigned">
  <td><?php echo CHtml::link('isAssigned()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'isAssigned-detail')); ?></td>
  <td>Returns a value indicating whether the item has been assigned to the user.</td>
  <td>IAuthManager</td>
</tr>
<tr id="removeAuthItem">
  <td><?php echo CHtml::link('removeAuthItem()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'removeAuthItem-detail')); ?></td>
  <td>Removes the specified authorization item.</td>
  <td>IAuthManager</td>
</tr>
<tr id="removeItemChild">
  <td><?php echo CHtml::link('removeItemChild()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'removeItemChild-detail')); ?></td>
  <td>Removes a child from its parent.</td>
  <td>IAuthManager</td>
</tr>
<tr id="revoke">
  <td><?php echo CHtml::link('revoke()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'revoke-detail')); ?></td>
  <td>Revokes an authorization assignment from a user.</td>
  <td>IAuthManager</td>
</tr>
<tr id="save">
  <td><?php echo CHtml::link('save()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'save-detail')); ?></td>
  <td>Saves authorization data into persistent storage.</td>
  <td>IAuthManager</td>
</tr>
<tr id="saveAuthAssignment">
  <td><?php echo CHtml::link('saveAuthAssignment()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'saveAuthAssignment-detail')); ?></td>
  <td>Saves the changes to an authorization assignment.</td>
  <td>IAuthManager</td>
</tr>
<tr id="saveAuthItem">
  <td><?php echo CHtml::link('saveAuthItem()', array('/site/doc', 'view' => 'IAuthManager', '#' => 'saveAuthItem-detail')); ?></td>
  <td>Saves an authorization item to persistent storage.</td>
  <td>IAuthManager</td>
</tr>
</table>
</div>
<a name="events"></a>

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
abstract public void <b>addItemChild</b>(string $itemName, string $childName)</div>
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
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L399">yii/base/interfaces.php#L399</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addItemChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$childName</span><span style="color: #007700">);</span>
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
abstract public <?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?> <b>assign</b>(string $itemName, mixed $userId, string $bizRule=NULL, mixed $data=NULL)</div>
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
  <td class="paramDescCol">the business rule to be executed when <?php echo CHtml::link('checkAccess', array('/site/doc', 'view' => 'IAuthManager', '#' => 'checkAccess')); ?> is called
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L433">yii/base/interfaces.php#L433</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">);</span>
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
abstract public boolean <b>checkAccess</b>(string $itemName, mixed $userId, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the operation that we are checking access to</td>
</tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID. This should be either an integer or a string representing
the unique identifier of a user. See <?php echo CHtml::link('IWebUser::getId', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">name-value pairs that would be passed to biz rules associated
with the tasks and roles assigned to the user.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the operations can be performed by the user.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L347">yii/base/interfaces.php#L347</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array());</span>
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
abstract public void <b>clearAll</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L472">yii/base/interfaces.php#L472</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clearAll</span><span style="color: #007700">();</span>
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
abstract public void <b>clearAuthAssignments</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L476">yii/base/interfaces.php#L476</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clearAuthAssignments</span><span style="color: #007700">();</span>
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
abstract public <?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?> <b>createAuthItem</b>(string $name, integer $type, string $description='', string $bizRule=NULL, mixed $data=NULL)</div>
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
PHP code that will be executed when <?php echo CHtml::link('checkAccess', array('/site/doc', 'view' => 'IAuthManager', '#' => 'checkAccess')); ?> is called for the item.</td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L364">yii/base/interfaces.php#L364</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Creates an authorization item.
An authorization item represents an action permission (e.g. creating a post).
It has three types: operation, task and role.
Authorization items form a hierarchy. Higher level items inheirt permissions representing
by lower level items.</p>


<div class="detailHeader" id="executeBizRule-detail">
executeBizRule()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>executeBizRule</b>(string $bizRule, array $params, mixed $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$bizRule</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule to be executed.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional parameters to be passed to the business rule when being executed.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">additional data that is associated with the corresponding authorization item or assignment</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the execution returns a true value.
If the business rule is empty, it will also return true.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L494">yii/base/interfaces.php#L494</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">executeBizRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Executes a business rule.
A business rule is a piece of PHP code that will be executed when <?php echo CHtml::link('checkAccess', array('/site/doc', 'view' => 'IAuthManager', '#' => 'checkAccess')); ?> is called.</p>


<div class="detailHeader" id="getAuthAssignment-detail">
getAuthAssignment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public <?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?> <b>getAuthAssignment</b>(string $itemName, mixed $userId)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L455">yii/base/interfaces.php#L455</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthAssignment</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);</span>
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
abstract public array <b>getAuthAssignments</b>(mixed $userId)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L462">yii/base/interfaces.php#L462</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthAssignments</span><span style="color: #007700">(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);</span>
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
abstract public <?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?> <b>getAuthItem</b>(string $name)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L385">yii/base/interfaces.php#L385</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);</span>
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
abstract public array <b>getAuthItems</b>(integer $type=NULL, mixed $userId=NULL)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L379">yii/base/interfaces.php#L379</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthItems</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">);</span>
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
abstract public array <b>getItemChildren</b>(mixed $itemName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L421">yii/base/interfaces.php#L421</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getItemChildren</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">);</span>
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
abstract public boolean <b>hasItemChild</b>(string $itemName, string $childName)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L414">yii/base/interfaces.php#L414</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hasItemChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$childName</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether a child exists within a parent.</p>


<div class="detailHeader" id="isAssigned-detail">
isAssigned()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>isAssigned</b>(string $itemName, mixed $userId)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L447">yii/base/interfaces.php#L447</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isAssigned</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the item has been assigned to the user.</p>


<div class="detailHeader" id="removeAuthItem-detail">
removeAuthItem()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>removeAuthItem</b>(string $name)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L370">yii/base/interfaces.php#L370</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removeAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);</span>
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
abstract public boolean <b>removeItemChild</b>(string $itemName, string $childName)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L407">yii/base/interfaces.php#L407</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removeItemChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$childName</span><span style="color: #007700">);</span>
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
abstract public boolean <b>revoke</b>(string $itemName, mixed $userId)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L440">yii/base/interfaces.php#L440</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">revoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);</span>
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
abstract public void <b>save</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L483">yii/base/interfaces.php#L483</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">save</span><span style="color: #007700">();</span>
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
abstract public void <b>saveAuthAssignment</b>(<?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?> $assignment)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$assignment</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?></td>
  <td class="paramDescCol">the assignment that has been changed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L467">yii/base/interfaces.php#L467</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">saveAuthAssignment</span><span style="color: #007700">(</span><span style="color: #0000BB">$assignment</span><span style="color: #007700">);</span>
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
abstract public void <b>saveAuthItem</b>(<?php echo CHtml::link('CAuthItem', array('/site/doc', 'view' => 'CAuthItem')); ?> $item, string $oldName=NULL)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L391">yii/base/interfaces.php#L391</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">saveAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">,</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Saves an authorization item to persistent storage.</p>


