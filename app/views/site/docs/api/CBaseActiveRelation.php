<?php
$this->pageTitle = $this->pageHeading = 'CBaseActiveRelation';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CBaseActiveRelation';
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
  <td>class CBaseActiveRelation &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?>, <?php echo CHtml::link('CStatRelation', array('/site/doc', 'view' => 'CStatRelation')); ?></td>
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
CBaseActiveRelation is the base class for all active relations.</div>
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
<tr id="className">
  <td><?php echo CHtml::link('className', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'className-detail')); ?></td>
  <td>string</td>
  <td>name of the related active record class</td>
  <td>CBaseActiveRelation</td>
</tr>
<tr id="condition">
  <td><?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'condition-detail')); ?></td>
  <td>string</td>
  <td>WHERE clause.</td>
  <td>CBaseActiveRelation</td>
</tr>
<tr id="foreignKey">
  <td><?php echo CHtml::link('foreignKey', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'foreignKey-detail')); ?></td>
  <td>mixed</td>
  <td>the foreign key in this relation</td>
  <td>CBaseActiveRelation</td>
</tr>
<tr id="group">
  <td><?php echo CHtml::link('group', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'group-detail')); ?></td>
  <td>string</td>
  <td>GROUP BY clause.</td>
  <td>CBaseActiveRelation</td>
</tr>
<tr id="having">
  <td><?php echo CHtml::link('having', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'having-detail')); ?></td>
  <td>string</td>
  <td>HAVING clause.</td>
  <td>CBaseActiveRelation</td>
</tr>
<tr id="join">
  <td><?php echo CHtml::link('join', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'join-detail')); ?></td>
  <td>string</td>
  <td>how to join with other tables.</td>
  <td>CBaseActiveRelation</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>name of the related object</td>
  <td>CBaseActiveRelation</td>
</tr>
<tr id="order">
  <td><?php echo CHtml::link('order', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'order-detail')); ?></td>
  <td>string</td>
  <td>ORDER BY clause.</td>
  <td>CBaseActiveRelation</td>
</tr>
<tr id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'params-detail')); ?></td>
  <td>array</td>
  <td>the parameters that are to be bound to the condition.</td>
  <td>CBaseActiveRelation</td>
</tr>
<tr id="select">
  <td><?php echo CHtml::link('select', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'select-detail')); ?></td>
  <td>mixed</td>
  <td>list of column names (an array, or a string of names separated by commas) to be selected.</td>
  <td>CBaseActiveRelation</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CBaseActiveRelation</td>
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
  <td><?php echo CHtml::link('mergeWith()', array('/site/doc', 'view' => 'CBaseActiveRelation', '#' => 'mergeWith-detail')); ?></td>
  <td>Merges this relation with a criteria specified dynamically.</td>
  <td>CBaseActiveRelation</td>
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
<div class="detailHeader" id="className-detail">
className<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$className</b>;</div>

<p>name of the related active record class</p>


<div class="detailHeader" id="condition-detail">
condition<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$condition</b>;</div>

<p>WHERE clause. For <?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> descendant classes, column names
referenced in the condition should be disambiguated with prefix 'relationName.'.</p>


<div class="detailHeader" id="foreignKey-detail">
foreignKey<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$foreignKey</b>;</div>

<p>the foreign key in this relation</p>


<div class="detailHeader" id="group-detail">
group<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$group</b>;</div>

<p>GROUP BY clause. For <?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> descendant classes, column names
referenced in this property should be disambiguated with prefix 'relationName.'.</p>


<div class="detailHeader" id="having-detail">
having<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$having</b>;</div>

<p>HAVING clause. For <?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> descendant classes, column names
referenced in this property should be disambiguated with prefix 'relationName.'.</p>


<div class="detailHeader" id="join-detail">
join<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public string <b>$join</b>;</div>

<p>how to join with other tables. This refers to the JOIN clause in an SQL statement.
For example, <code>'LEFT JOIN users ON users.id=authorID'</code>.</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$name</b>;</div>

<p>name of the related object</p>


<div class="detailHeader" id="order-detail">
order<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$order</b>;</div>

<p>ORDER BY clause. For <?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> descendant classes, column names
referenced in this property should be disambiguated with prefix 'relationName.'.</p>


<div class="detailHeader" id="params-detail">
params<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$params</b>;</div>

<p>the parameters that are to be bound to the condition.
The keys are parameter placeholder names, and the values are parameter values.</p>


<div class="detailHeader" id="select-detail">
select<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$select</b>;</div>

<p>list of column names (an array, or a string of names separated by commas) to be selected.
Do not quote or prefix the column names unless they are used in an expression.
In that case, you should prefix the column names with 'relationName.'.</p>


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
public void <b>__construct</b>(string $name, string $className, string $foreignKey, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the relation</td>
</tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the related active record class</td>
</tr>
<tr>
  <td class="paramNameCol">$foreignKey</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">foreign key for this relation</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional options (name=>value). The keys must be the property names of this class.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php#L1992">yii/db/ar/CActiveRecord.php#L1992</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$foreignKey</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">className</span><span style="color: #007700">=</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreignKey</span><span style="color: #007700">=</span><span style="color: #0000BB">$foreignKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php#L2006">yii/db/ar/CActiveRecord.php#L2006</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$fromScope</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$criteria&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">===</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">]!==</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$select1</span><span style="color: #007700">=</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">)?</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">):</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$select2</span><span style="color: #007700">=</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">])?</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">]),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">):</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'select'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$select1</span><span style="color: #007700">,</span><span style="color: #0000BB">array_diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$select2</span><span style="color: #007700">,</span><span style="color: #0000BB">$select1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">=</span><span style="color: #DD0000">"(</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">}</span><span style="color: #DD0000">)&nbsp;AND&nbsp;(</span><span style="color: #007700">{</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">]}</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'order'</span><span style="color: #007700">].</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">.=</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'group'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'join'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">=</span><span style="color: #DD0000">"(</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">}</span><span style="color: #DD0000">)&nbsp;AND&nbsp;(</span><span style="color: #007700">{</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">[</span><span style="color: #DD0000">'having'</span><span style="color: #007700">]}</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Merges this relation with a criteria specified dynamically.</p>


