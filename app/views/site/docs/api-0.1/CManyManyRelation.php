<?php
$this->pageTitle = $this->pageHeading = 'CManyManyRelation';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CManyManyRelation';
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
  <td><?php echo CHtml::link('system.db.ar', array('/site/doc', '#' => 'system.db.ar')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CManyManyRelation &raquo;
<?php echo CHtml::link('CHasManyRelation', array('/site/doc', 'view' => 'CHasManyRelation')); ?> &raquo;
<?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> &raquo;
<?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php">yii/db/ar/CActiveRecord.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CManyManyRelation represents the parameters specifying a MANY_MANY relation.</div>
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
<tr class="inherited" id="alias">
  <td><?php echo CHtml::link('alias', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'alias-detail')); ?></td>
  <td>string</td>
  <td>the alias for the table that this relation refers to.</td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="className">
  <td><?php echo CHtml::link('className', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'className-detail')); ?></td>
  <td>string</td>
  <td>name of the related active record class</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="condition">
  <td><?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'condition-detail')); ?></td>
  <td>string</td>
  <td>WHERE clause.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="foreignKey">
  <td><?php echo CHtml::link('foreignKey', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'foreignKey-detail')); ?></td>
  <td>mixed</td>
  <td>the foreign key in this relation</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="group">
  <td><?php echo CHtml::link('group', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'group-detail')); ?></td>
  <td>string</td>
  <td>GROUP BY clause.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="having">
  <td><?php echo CHtml::link('having', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'having-detail')); ?></td>
  <td>string</td>
  <td>HAVING clause.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="index">
  <td><?php echo CHtml::link('index', array('/site/doc', 'view' => 'CHasManyRelation', '#' => 'index-detail')); ?></td>
  <td>string</td>
  <td>the name of the column that should be used as the key for storing related objects.</td>
  <td><?php echo CHtml::link('CHasManyRelation', array('/site/doc', 'view' => 'CHasManyRelation')); ?></td>
</tr>
<tr class="inherited" id="join">
  <td><?php echo CHtml::link('join', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'join-detail')); ?></td>
  <td>string</td>
  <td>how to join with other tables.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="joinType">
  <td><?php echo CHtml::link('joinType', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'joinType-detail')); ?></td>
  <td>string</td>
  <td>join type.</td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
</tr>
<tr id="junctionForeignKeys">
  <td><?php echo CHtml::link('junctionForeignKeys', array('/site/doc', 'view' => 'CManyManyRelation', '#' => 'junctionForeignKeys-detail')); ?></td>
  <td>array</td>
  <td>list of junction table foreign keys.</td>
  <td>CManyManyRelation</td>
</tr>
<tr id="junctionTableName">
  <td><?php echo CHtml::link('junctionTableName', array('/site/doc', 'view' => 'CManyManyRelation', '#' => 'junctionTableName-detail')); ?></td>
  <td>string</td>
  <td>junction table name.</td>
  <td>CManyManyRelation</td>
</tr>
<tr class="inherited" id="limit">
  <td><?php echo CHtml::link('limit', array('/site/doc', 'view' => 'CHasManyRelation', '#' => 'limit-detail')); ?></td>
  <td>integer</td>
  <td>limit of the rows to be selected.</td>
  <td><?php echo CHtml::link('CHasManyRelation', array('/site/doc', 'view' => 'CHasManyRelation')); ?></td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>name of the related object</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="offset">
  <td><?php echo CHtml::link('offset', array('/site/doc', 'view' => 'CHasManyRelation', '#' => 'offset-detail')); ?></td>
  <td>integer</td>
  <td>offset of the rows to be selected.</td>
  <td><?php echo CHtml::link('CHasManyRelation', array('/site/doc', 'view' => 'CHasManyRelation')); ?></td>
</tr>
<tr class="inherited" id="on">
  <td><?php echo CHtml::link('on', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'on-detail')); ?></td>
  <td>string</td>
  <td>ON clause.</td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="order">
  <td><?php echo CHtml::link('order', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'order-detail')); ?></td>
  <td>string</td>
  <td>ORDER BY clause.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'params-detail')); ?></td>
  <td>array</td>
  <td>the parameters that are to be bound to the condition.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="scopes">
  <td><?php echo CHtml::link('scopes', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'scopes-detail')); ?></td>
  <td>mixed</td>
  <td>scopes to apply
Can be set to the one of the following:
<ul>
<li>Single scope: 'scopes'=>'scopeName'.</td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="select">
  <td><?php echo CHtml::link('select', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'select-detail')); ?></td>
  <td>mixed</td>
  <td>list of column names (an array, or a string of names separated by commas) to be selected.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="through">
  <td><?php echo CHtml::link('through', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'through-detail')); ?></td>
  <td>string</td>
  <td>the name of the relation that should be used as the bridge to this relation.</td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="together">
  <td><?php echo CHtml::link('together', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'together-detail')); ?></td>
  <td>boolean</td>
  <td>whether this table should be joined with the primary table.</td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
</tr>
<tr class="inherited" id="with">
  <td><?php echo CHtml::link('with', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'with-detail')); ?></td>
  <td>string|array</td>
  <td>specifies which related objects should be eagerly loaded when this related object is lazily loaded.</td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
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
<tr class="inherited" id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
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
<tr id="getJunctionForeignKeys">
  <td><?php echo CHtml::link('getJunctionForeignKeys()', array('/site/doc', 'view' => 'CManyManyRelation', '#' => 'getJunctionForeignKeys-detail')); ?></td>
  <td>Returns list of junction table foreign keys.</td>
  <td>CManyManyRelation</td>
</tr>
<tr id="getJunctionTableName">
  <td><?php echo CHtml::link('getJunctionTableName()', array('/site/doc', 'view' => 'CManyManyRelation', '#' => 'getJunctionTableName-detail')); ?></td>
  <td>Returns junction table name.</td>
  <td>CManyManyRelation</td>
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
<tr class="inherited" id="mergeWith">
  <td><?php echo CHtml::link('mergeWith()', array('/site/doc', 'view' => 'CHasManyRelation', '#' => 'mergeWith-detail')); ?></td>
  <td>Merges this relation with a criteria specified dynamically.</td>
  <td><?php echo CHtml::link('CHasManyRelation', array('/site/doc', 'view' => 'CHasManyRelation')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="junctionForeignKeys-detail">
junctionForeignKeys<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.12)
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getJunctionForeignKeys</b>', array('/site/doc', 'view' => 'CManyManyRelation', '#' => 'getJunctionForeignKeys')); ?>()</div>

<p>list of junction table foreign keys.</p>


<div class="detailHeader" id="junctionTableName-detail">
junctionTableName<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.12)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getJunctionTableName</b>', array('/site/doc', 'view' => 'CManyManyRelation', '#' => 'getJunctionTableName')); ?>()</div>

<p>junction table name.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getJunctionForeignKeys-detail">
getJunctionForeignKeys()
<span class="detailHeaderTag">
method
(available since v1.1.12)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getJunctionForeignKeys</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of junction table foreign keys.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php#L2300">yii/db/ar/CActiveRecord.php#L2300</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getJunctionForeignKeys</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_junctionForeignKeys</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initJunctionData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_junctionForeignKeys</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getJunctionTableName-detail">
getJunctionTableName()
<span class="detailHeaderTag">
method
(available since v1.1.12)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getJunctionTableName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">junction table name.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php#L2289">yii/db/ar/CActiveRecord.php#L2289</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getJunctionTableName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_junctionTableName</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initJunctionData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_junctionTableName</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


