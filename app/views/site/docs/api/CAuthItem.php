<?php
$this->pageTitle = $this->pageHeading = 'CAuthItem';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CAuthItem';
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
  <td>class CAuthItem &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php">yii\web\auth\CAuthItem.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CAuthItem represents an authorization item.
An authorization item can be an operation, a task or a role.
They form an authorization hierarchy. Items on higher levels of the hierarchy
inherit the permissions represented by items on lower levels.
A user may be assigned one or several authorization items (called <?php echo CHtml::link('assignments', array('/site/doc', 'view' => 'CAuthAssignment')); ?>.
He can perform an operation only when it is among his assigned items.</div>
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
<tr id="authManager">
  <td><?php echo CHtml::link('authManager', array('/site/doc', 'view' => 'CAuthItem', '#' => 'authManager-detail')); ?></td>
  <td><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
  <td>the authorization manager</td>
  <td>CAuthItem</td>
</tr>
<tr id="bizRule">
  <td><?php echo CHtml::link('bizRule', array('/site/doc', 'view' => 'CAuthItem', '#' => 'bizRule-detail')); ?></td>
  <td>string</td>
  <td>the business rule associated with this item</td>
  <td>CAuthItem</td>
</tr>
<tr id="children">
  <td><?php echo CHtml::link('children', array('/site/doc', 'view' => 'CAuthItem', '#' => 'children-detail')); ?></td>
  <td>array</td>
  <td>Returns the children of this item.</td>
  <td>CAuthItem</td>
</tr>
<tr id="data">
  <td><?php echo CHtml::link('data', array('/site/doc', 'view' => 'CAuthItem', '#' => 'data-detail')); ?></td>
  <td>mixed</td>
  <td>the additional data associated with this item</td>
  <td>CAuthItem</td>
</tr>
<tr id="description">
  <td><?php echo CHtml::link('description', array('/site/doc', 'view' => 'CAuthItem', '#' => 'description-detail')); ?></td>
  <td>string</td>
  <td>the item description</td>
  <td>CAuthItem</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CAuthItem', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the item name</td>
  <td>CAuthItem</td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'CAuthItem', '#' => 'type-detail')); ?></td>
  <td>integer</td>
  <td>the authorization item type.</td>
  <td>CAuthItem</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CAuthItem', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CAuthItem</td>
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
<tr id="addChild">
  <td><?php echo CHtml::link('addChild()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'addChild-detail')); ?></td>
  <td>Adds a child item.</td>
  <td>CAuthItem</td>
</tr>
<tr class="inherited" id="asa">
  <td><?php echo CHtml::link('asa()', array('/site/doc', 'view' => 'CComponent', '#' => 'asa-detail')); ?></td>
  <td>Returns the named behavior object.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="assign">
  <td><?php echo CHtml::link('assign()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'assign-detail')); ?></td>
  <td>Assigns this item to a user.</td>
  <td>CAuthItem</td>
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
  <td><?php echo CHtml::link('checkAccess()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'checkAccess-detail')); ?></td>
  <td>Checks to see if the specified item is within the hierarchy starting from this item.</td>
  <td>CAuthItem</td>
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
<tr id="getAssignment">
  <td><?php echo CHtml::link('getAssignment()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getAssignment-detail')); ?></td>
  <td>Returns the item assignment information.</td>
  <td>CAuthItem</td>
</tr>
<tr id="getAuthManager">
  <td><?php echo CHtml::link('getAuthManager()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getAuthManager-detail')); ?></td>
  <td>Returns the authorization manager</td>
  <td>CAuthItem</td>
</tr>
<tr id="getBizRule">
  <td><?php echo CHtml::link('getBizRule()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getBizRule-detail')); ?></td>
  <td>Returns the business rule associated with this item</td>
  <td>CAuthItem</td>
</tr>
<tr id="getChildren">
  <td><?php echo CHtml::link('getChildren()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getChildren-detail')); ?></td>
  <td>Returns the children of this item.</td>
  <td>CAuthItem</td>
</tr>
<tr id="getData">
  <td><?php echo CHtml::link('getData()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getData-detail')); ?></td>
  <td>Returns the additional data associated with this item</td>
  <td>CAuthItem</td>
</tr>
<tr id="getDescription">
  <td><?php echo CHtml::link('getDescription()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getDescription-detail')); ?></td>
  <td>Returns the item description</td>
  <td>CAuthItem</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getName-detail')); ?></td>
  <td>Returns the item name</td>
  <td>CAuthItem</td>
</tr>
<tr id="getType">
  <td><?php echo CHtml::link('getType()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getType-detail')); ?></td>
  <td>Returns the authorization item type. This could be 0 (operation), 1 (task) or 2 (role).</td>
  <td>CAuthItem</td>
</tr>
<tr id="hasChild">
  <td><?php echo CHtml::link('hasChild()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'hasChild-detail')); ?></td>
  <td>Returns a value indicating whether a child exists</td>
  <td>CAuthItem</td>
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
<tr id="isAssigned">
  <td><?php echo CHtml::link('isAssigned()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'isAssigned-detail')); ?></td>
  <td>Returns a value indicating whether this item has been assigned to the user.</td>
  <td>CAuthItem</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="removeChild">
  <td><?php echo CHtml::link('removeChild()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'removeChild-detail')); ?></td>
  <td>Removes a child item.</td>
  <td>CAuthItem</td>
</tr>
<tr id="revoke">
  <td><?php echo CHtml::link('revoke()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'revoke-detail')); ?></td>
  <td>Revokes an authorization assignment from a user.</td>
  <td>CAuthItem</td>
</tr>
<tr id="setBizRule">
  <td><?php echo CHtml::link('setBizRule()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'setBizRule-detail')); ?></td>
  <td>Sets the business rule associated with this item</td>
  <td>CAuthItem</td>
</tr>
<tr id="setData">
  <td><?php echo CHtml::link('setData()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'setData-detail')); ?></td>
  <td>Sets the additional data associated with this item</td>
  <td>CAuthItem</td>
</tr>
<tr id="setDescription">
  <td><?php echo CHtml::link('setDescription()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'setDescription-detail')); ?></td>
  <td>Sets the item description</td>
  <td>CAuthItem</td>
</tr>
<tr id="setName">
  <td><?php echo CHtml::link('setName()', array('/site/doc', 'view' => 'CAuthItem', '#' => 'setName-detail')); ?></td>
  <td>Sets the item name</td>
  <td>CAuthItem</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="authManager-detail">
authManager<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?> <?php echo CHtml::link('<b>getAuthManager</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getAuthManager')); ?>()</div>

<p>the authorization manager</p>


<div class="detailHeader" id="bizRule-detail">
bizRule<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getBizRule</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getBizRule')); ?>()<br/>public void <?php echo CHtml::link('<b>setBizRule</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'setBizRule')); ?>(string $value)</div>

<p>the business rule associated with this item</p>


<div class="detailHeader" id="children-detail">
children<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getChildren</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getChildren')); ?>()</div>

<p>Returns the children of this item.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('IAuthManager::getItemChildren', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getItemChildren')); ?></li>
</ul>
</div>

<div class="detailHeader" id="data-detail">
data<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <?php echo CHtml::link('<b>getData</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getData')); ?>()<br/>public void <?php echo CHtml::link('<b>setData</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'setData')); ?>(mixed $value)</div>

<p>the additional data associated with this item</p>


<div class="detailHeader" id="description-detail">
description<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getDescription</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getDescription')); ?>()<br/>public void <?php echo CHtml::link('<b>setDescription</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'setDescription')); ?>(string $value)</div>

<p>the item description</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getName</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getName')); ?>()<br/>public void <?php echo CHtml::link('<b>setName</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'setName')); ?>(string $value)</div>

<p>the item name</p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getType</b>', array('/site/doc', 'view' => 'CAuthItem', '#' => 'getType')); ?>()</div>

<p>the authorization item type. This could be 0 (operation), 1 (task) or 2 (role).</p>


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
public void <b>__construct</b>(<?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?> $auth, string $name, integer $type, string $description='', string $bizRule=NULL, mixed $data=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$auth</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
  <td class="paramDescCol">authorization manager</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">authorization item name</td>
</tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">authorization item type. This can be 0 (operation), 1 (task) or 2 (role).</td>
</tr>
<tr>
  <td class="paramNameCol">$description</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the description</td>
</tr>
<tr>
  <td class="paramNameCol">$bizRule</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule associated with this item</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">additional data for this item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L53">yii\web\auth\CAuthItem.php#L53</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$auth</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$description</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_type</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">=</span><span style="color: #0000BB">$auth</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_description</span><span style="color: #007700">=</span><span style="color: #0000BB">$description</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">=</span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="addChild-detail">
addChild()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>addChild</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the child item</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the item is added successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L191">yii\web\auth\CAuthItem.php#L191</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addItemChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Adds a child item.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('IAuthManager::addItemChild', array('/site/doc', 'view' => 'IAuthManager', '#' => 'addItemChild')); ?></li>
</ul>
</div>

<div class="detailHeader" id="assign-detail">
assign()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?> <b>assign</b>(mixed $userId, string $bizRule=NULL, mixed $data=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID (see <?php echo CHtml::link('IWebUser::getId', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">$bizRule</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule to be executed when <?php echo CHtml::link('checkAccess', array('/site/doc', 'view' => 'CAuthItem', '#' => 'checkAccess')); ?> is called
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L239">yii\web\auth\CAuthItem.php#L239</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">,</span><span style="color: #0000BB">$bizRule</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Assigns this item to a user.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('IAuthManager::assign', array('/site/doc', 'view' => 'IAuthManager', '#' => 'assign')); ?></li>
</ul>
</div>

<div class="detailHeader" id="checkAccess-detail">
checkAccess()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>checkAccess</b>(string $itemName, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the item to be checked</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parameters to be passed to business rule evaluation</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the specified item is within the hierarchy starting from this item.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L71">yii\web\auth\CAuthItem.php#L71</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">trace</span><span style="color: #007700">(</span><span style="color: #DD0000">'Checking&nbsp;permission&nbsp;"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">,</span><span style="color: #DD0000">'system.web.auth.CAuthItem'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">executeBizRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_bizRule</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">==</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemChildren</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemName</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks to see if the specified item is within the hierarchy starting from this item.
This method is expected to be internally used by the actual implementations
of the <?php echo CHtml::link('IAuthManager::checkAccess', array('/site/doc', 'view' => 'IAuthManager', '#' => 'checkAccess')); ?>.</p>


<div class="detailHeader" id="getAssignment-detail">
getAssignment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?> <b>getAssignment</b>(mixed $userId)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$userId</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the user ID (see <?php echo CHtml::link('IWebUser::getId', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CAuthAssignment', array('/site/doc', 'view' => 'CAuthAssignment')); ?></td>
  <td class="paramDescCol">the item assignment information. Null is returned if
this item is not assigned to the user.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L273">yii\web\auth\CAuthItem.php#L273</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAssignment</span><span style="color: #007700">(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAuthAssignment</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the item assignment information.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('IAuthManager::getAuthAssignment', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getAuthAssignment')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getAuthManager-detail">
getAuthManager()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?> <b>getAuthManager</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('IAuthManager', array('/site/doc', 'view' => 'IAuthManager')); ?></td>
  <td class="paramDescCol">the authorization manager</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L90">yii\web\auth\CAuthItem.php#L90</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAuthManager</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getBizRule-detail">
getBizRule()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getBizRule</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule associated with this item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L147">yii\web\auth\CAuthItem.php#L147</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getBizRule</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_bizRule</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getChildren-detail">
getChildren()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getChildren</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">all child items of this item.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L224">yii\web\auth\CAuthItem.php#L224</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getChildren</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemChildren</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the children of this item.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('IAuthManager::getItemChildren', array('/site/doc', 'view' => 'IAuthManager', '#' => 'getItemChildren')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getData-detail">
getData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getData</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the additional data associated with this item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L167">yii\web\auth\CAuthItem.php#L167</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getData</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getDescription-detail">
getDescription()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getDescription</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item description</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L127">yii\web\auth\CAuthItem.php#L127</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDescription</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_description</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
  <td class="paramDescCol">the item name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L106">yii\web\auth\CAuthItem.php#L106</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getType-detail">
getType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getType</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the authorization item type. This could be 0 (operation), 1 (task) or 2 (role).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L98">yii\web\auth\CAuthItem.php#L98</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getType</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_type</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="hasChild-detail">
hasChild()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>hasChild</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L214">yii\web\auth\CAuthItem.php#L214</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hasChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasItemChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether a child exists</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('IAuthManager::hasItemChild', array('/site/doc', 'view' => 'IAuthManager', '#' => 'hasItemChild')); ?></li>
</ul>
</div>

<div class="detailHeader" id="isAssigned-detail">
isAssigned()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isAssigned</b>(mixed $userId)</div>
</td></tr>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L261">yii\web\auth\CAuthItem.php#L261</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isAssigned</span><span style="color: #007700">(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAssigned</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether this item has been assigned to the user.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('IAuthManager::isAssigned', array('/site/doc', 'view' => 'IAuthManager', '#' => 'isAssigned')); ?></li>
</ul>
</div>

<div class="detailHeader" id="removeChild-detail">
removeChild()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>removeChild</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L203">yii\web\auth\CAuthItem.php#L203</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removeChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">removeItemChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Removes a child item.
Note, the child item is not deleted. Only the parent-child relationship is removed.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('IAuthManager::removeItemChild', array('/site/doc', 'view' => 'IAuthManager', '#' => 'removeItemChild')); ?></li>
</ul>
</div>

<div class="detailHeader" id="revoke-detail">
revoke()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>revoke</b>(mixed $userId)</div>
</td></tr>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L250">yii\web\auth\CAuthItem.php#L250</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">revoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$userId</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">revoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">,</span><span style="color: #0000BB">$userId</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Revokes an authorization assignment from a user.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('IAuthManager::revoke', array('/site/doc', 'view' => 'IAuthManager', '#' => 'revoke')); ?></li>
</ul>
</div>

<div class="detailHeader" id="setBizRule-detail">
setBizRule()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setBizRule</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the business rule associated with this item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L155">yii\web\auth\CAuthItem.php#L155</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setBizRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_bizRule</span><span style="color: #007700">!==</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_bizRule</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setData-detail">
setData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setData</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the additional data associated with this item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L175">yii\web\auth\CAuthItem.php#L175</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setData</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">!==</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setDescription-detail">
setDescription()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setDescription</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the item description</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L135">yii\web\auth\CAuthItem.php#L135</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setDescription</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_description</span><span style="color: #007700">!==</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_description</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
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
  <td class="paramDescCol">the item name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\auth\CAuthItem.php#L114">yii\web\auth\CAuthItem.php#L114</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setName</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">!==</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_auth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveAuthItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$oldName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


