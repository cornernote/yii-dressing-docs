<?php
$this->pageTitle = $this->pageHeading = 'CActiveRelation';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CActiveRelation';
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
  <td>class CActiveRelation &raquo;
<?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CBelongsToRelation', array('/site/doc', 'view' => 'CBelongsToRelation')); ?>, <?php echo CHtml::link('CHasManyRelation', array('/site/doc', 'view' => 'CHasManyRelation')); ?>, <?php echo CHtml::link('CHasOneRelation', array('/site/doc', 'view' => 'CHasOneRelation')); ?></td>
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
CActiveRelation is the base class for representing active relations that bring back related objects.</div>
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
<tr id="alias">
  <td><?php echo CHtml::link('alias', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'alias-detail')); ?></td>
  <td>string</td>
  <td>the alias for the table that this relation refers to.</td>
  <td>CActiveRelation</td>
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
<tr class="inherited" id="join">
  <td><?php echo CHtml::link('join', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'join-detail')); ?></td>
  <td>string</td>
  <td>how to join with other tables.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr id="joinType">
  <td><?php echo CHtml::link('joinType', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'joinType-detail')); ?></td>
  <td>string</td>
  <td>join type.</td>
  <td>CActiveRelation</td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>name of the related object</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr id="on">
  <td><?php echo CHtml::link('on', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'on-detail')); ?></td>
  <td>string</td>
  <td>ON clause.</td>
  <td>CActiveRelation</td>
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
<tr id="scopes">
  <td><?php echo CHtml::link('scopes', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'scopes-detail')); ?></td>
  <td>mixed</td>
  <td>scopes to apply
Can be set to the one of the following:
<ul>
<li>Single scope: 'scopes'=>'scopeName'.</td>
  <td>CActiveRelation</td>
</tr>
<tr class="inherited" id="select">
  <td><?php echo CHtml::link('select', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'select-detail')); ?></td>
  <td>mixed</td>
  <td>list of column names (an array, or a string of names separated by commas) to be selected.</td>
  <td><?php echo CHtml::link('CBaseActiveRelation', array('/site/doc', 'view' => 'CBaseActiveRelation')); ?></td>
</tr>
<tr id="through">
  <td><?php echo CHtml::link('through', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'through-detail')); ?></td>
  <td>string</td>
  <td>the name of the relation that should be used as the bridge to this relation.</td>
  <td>CActiveRelation</td>
</tr>
<tr id="together">
  <td><?php echo CHtml::link('together', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'together-detail')); ?></td>
  <td>boolean</td>
  <td>whether this table should be joined with the primary table.</td>
  <td>CActiveRelation</td>
</tr>
<tr id="with">
  <td><?php echo CHtml::link('with', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'with-detail')); ?></td>
  <td>string|array</td>
  <td>specifies which related objects should be eagerly loaded when this related object is lazily loaded.</td>
  <td>CActiveRelation</td>
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
<tr id="mergeWith">
  <td><?php echo CHtml::link('mergeWith()', array('/site/doc', 'view' => 'CActiveRelation', '#' => 'mergeWith-detail')); ?></td>
  <td>Merges this relation with a criteria specified dynamically.</td>
  <td>CActiveRelation</td>
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
<div class="detailHeader" id="alias-detail">
alias<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$alias</b>;</div>

<p>the alias for the table that this relation refers to. Defaults to null, meaning
the alias will be the same as the relation name.</p>


<div class="detailHeader" id="joinType-detail">
joinType<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$joinType</b>;</div>

<p>join type. Defaults to 'LEFT OUTER JOIN'.</p>


<div class="detailHeader" id="on-detail">
on<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$on</b>;</div>

<p>ON clause. The condition specified here will be appended to the joining condition using AND operator.</p>


<div class="detailHeader" id="scopes-detail">
scopes<span class="detailHeaderTag">
property
 (available since v1.1.9)
</span>
</div>

<div class="signature">
public mixed <b>$scopes</b>;</div>

<p>scopes to apply
Can be set to the one of the following:
<ul>
<li>Single scope: 'scopes'=>'scopeName'.</li>
<li>Multiple scopes: 'scopes'=>array('scopeName1','scopeName2').</li>
</ul></p>


<div class="detailHeader" id="through-detail">
through<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public string <b>$through</b>;</div>

<p>the name of the relation that should be used as the bridge to this relation.
Defaults to null, meaning don't use any bridge.</p>


<div class="detailHeader" id="together-detail">
together<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$together</b>;</div>

<p>whether this table should be joined with the primary table.
When setting this property to be false, the table associated with this relation will
appear in a separate JOIN statement.
If this property is set true, then the corresponding table will ALWAYS be joined together
with the primary table, no matter the primary table is limited or not.
If this property is not set, the corresponding table will be joined with the primary table
only when the primary table is not limited.</p>


<div class="detailHeader" id="with-detail">
with<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string|array <b>$with</b>;</div>

<p>specifies which related objects should be eagerly loaded when this related object is lazily loaded.
For more details about this property, see <?php echo CHtml::link('CActiveRecord::with()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'with')); ?>.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="mergeWith-detail">
mergeWith()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>mergeWith</b>(array $criteria, boolean $fromScope=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the dynamically specified criteria</td>
</tr>
<tr>
  <td class="paramNameCol">$fromScope</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the criteria to be merged is from scopes</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php#L2161">yii/db/ar/CActiveRecord.php#L2161</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$fromScope</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$criteria&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$fromScope</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">=</span><span style="color: #DD0000">"(</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">}</span><span style="color: #DD0000">)&nbsp;AND&nbsp;(</span><span style="color: #007700">{</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">]}</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'joinType'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinType</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'joinType'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">=</span><span style="color: #DD0000">"(</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">}</span><span style="color: #DD0000">)&nbsp;AND&nbsp;(</span><span style="color: #007700">{</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">]}</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'with'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'with'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'alias'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'alias'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'together'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">together</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'together'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Merges this relation with a criteria specified dynamically.</p>


