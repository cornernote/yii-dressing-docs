<?php
$this->pageTitle = $this->pageHeading = 'CDbCriteria';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbCriteria';
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
  <td><?php echo CHtml::link('system.db.schema', array('/site/doc', '#' => 'system.db.schema')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CDbCriteria &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php">yii/db/schema/CDbCriteria.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbCriteria represents a query criteria, such as conditions, ordering by, limit/offset.
<br/><br/>
It can be used in AR query methods such as CActiveRecord::find and CActiveRecord::findAll.
<br/><br/>
$criteria=new CDbCriteria();
$criteria->compare('status',Post::STATUS_ACTIVE);
$criteria->addInCondition('id',array(1,2,3,4,5,6));
<br/><br/>
$posts = Post::model()->findAll($criteria);</div>
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
  <td><?php echo CHtml::link('alias', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'alias-detail')); ?></td>
  <td>string</td>
  <td>the alias name of the table.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="condition">
  <td><?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition-detail')); ?></td>
  <td>string</td>
  <td>query condition.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="distinct">
  <td><?php echo CHtml::link('distinct', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'distinct-detail')); ?></td>
  <td>boolean</td>
  <td>whether to select distinct rows of data only.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="group">
  <td><?php echo CHtml::link('group', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'group-detail')); ?></td>
  <td>string</td>
  <td>how to group the query results.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="having">
  <td><?php echo CHtml::link('having', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'having-detail')); ?></td>
  <td>string</td>
  <td>the condition to be applied with GROUP-BY clause.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="index">
  <td><?php echo CHtml::link('index', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'index-detail')); ?></td>
  <td>string</td>
  <td>the name of the AR attribute whose value should be used as index of the query result array.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="join">
  <td><?php echo CHtml::link('join', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'join-detail')); ?></td>
  <td>string</td>
  <td>how to join with other tables.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="limit">
  <td><?php echo CHtml::link('limit', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'limit-detail')); ?></td>
  <td>integer</td>
  <td>maximum number of records to be returned.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="offset">
  <td><?php echo CHtml::link('offset', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'offset-detail')); ?></td>
  <td>integer</td>
  <td>zero-based offset from where the records are to be returned.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="order">
  <td><?php echo CHtml::link('order', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'order-detail')); ?></td>
  <td>string</td>
  <td>how to sort the query results.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="paramCount">
  <td><?php echo CHtml::link('paramCount', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'paramCount-detail')); ?></td>
  <td>integer</td>
  <td>the global counter for anonymous binding parameters.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'params-detail')); ?></td>
  <td>array</td>
  <td>list of query parameter values indexed by parameter placeholders.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="scopes">
  <td><?php echo CHtml::link('scopes', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'scopes-detail')); ?></td>
  <td>mixed</td>
  <td>scopes to apply
<br/><br/>
This property is effective only when passing criteria to
the one of the following methods:
<ul>
<li><?php echo CHtml::link('CActiveRecord::find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findAll()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAll')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByPk')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findAllByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByPk')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByAttributes')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findAllByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByAttributes')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::count()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'count')); ?></li>
</ul>
<br/><br/>
Can be set to one of the following:
<ul>
<li>One scope: $criteria->scopes='scopeName';</li>
<li>Multiple scopes: $criteria->scopes=array('scopeName1','scopeName2');</li>
<li>Scope with parameters: $criteria->scopes=array('scopeName'=>array($params));</li>
<li>Multiple scopes with parameters: $criteria->scopes=array('scopeName1'=>array($params1),'scopeName2'=>array($params2));</li>
<li>Multiple scopes with the same name: array(array('scopeName'=>array($params1)),array('scopeName'=>array($params2)));</li>
</ul></td>
  <td>CDbCriteria</td>
</tr>
<tr id="select">
  <td><?php echo CHtml::link('select', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'select-detail')); ?></td>
  <td>mixed</td>
  <td>the columns being selected.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="together">
  <td><?php echo CHtml::link('together', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'together-detail')); ?></td>
  <td>boolean</td>
  <td>whether the foreign tables should be joined with the primary table in a single SQL.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="with">
  <td><?php echo CHtml::link('with', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'with-detail')); ?></td>
  <td>mixed</td>
  <td>the relational query criteria.</td>
  <td>CDbCriteria</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CDbCriteria', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CDbCriteria</td>
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
<tr id="__wakeup">
  <td><?php echo CHtml::link('__wakeup()', array('/site/doc', 'view' => 'CDbCriteria', '#' => '__wakeup-detail')); ?></td>
  <td>Remaps criteria parameters on unserialize to prevent name collisions.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="addBetweenCondition">
  <td><?php echo CHtml::link('addBetweenCondition()', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'addBetweenCondition-detail')); ?></td>
  <td>Adds a between condition to the <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?> property.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="addColumnCondition">
  <td><?php echo CHtml::link('addColumnCondition()', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'addColumnCondition-detail')); ?></td>
  <td>Appends a condition for matching the given list of column values.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="addCondition">
  <td><?php echo CHtml::link('addCondition()', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'addCondition-detail')); ?></td>
  <td>Appends a condition to the existing <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?>.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="addInCondition">
  <td><?php echo CHtml::link('addInCondition()', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'addInCondition-detail')); ?></td>
  <td>Appends an IN condition to the existing <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?>.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="addNotInCondition">
  <td><?php echo CHtml::link('addNotInCondition()', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'addNotInCondition-detail')); ?></td>
  <td>Appends an NOT IN condition to the existing <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?>.</td>
  <td>CDbCriteria</td>
</tr>
<tr id="addSearchCondition">
  <td><?php echo CHtml::link('addSearchCondition()', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'addSearchCondition-detail')); ?></td>
  <td>Appends a search condition to the existing <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?>.</td>
  <td>CDbCriteria</td>
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
<tr id="compare">
  <td><?php echo CHtml::link('compare()', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'compare-detail')); ?></td>
  <td>Adds a comparison expression to the <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?> property.</td>
  <td>CDbCriteria</td>
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
  <td><?php echo CHtml::link('mergeWith()', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'mergeWith-detail')); ?></td>
  <td>Merges with another criteria.</td>
  <td>CDbCriteria</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="toArray">
  <td><?php echo CHtml::link('toArray()', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'toArray-detail')); ?></td>
  <td></td>
  <td>CDbCriteria</td>
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

<p>the alias name of the table. If not set, it means the alias is 't'.</p>


<div class="detailHeader" id="condition-detail">
condition<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$condition</b>;</div>

<p>query condition. This refers to the WHERE clause in an SQL statement.
For example, <code>age>31 AND team=1</code>.</p>


<div class="detailHeader" id="distinct-detail">
distinct<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$distinct</b>;</div>

<p>whether to select distinct rows of data only. If this is set true,
the SELECT clause would be changed to SELECT DISTINCT.</p>


<div class="detailHeader" id="group-detail">
group<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$group</b>;</div>

<p>how to group the query results. This refers to the GROUP BY clause in an SQL statement.
For example, <code>'projectID, teamID'</code>.</p>


<div class="detailHeader" id="having-detail">
having<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$having</b>;</div>

<p>the condition to be applied with GROUP-BY clause.
For example, <code>'SUM(revenue)<50000'</code>.</p>


<div class="detailHeader" id="index-detail">
index<span class="detailHeaderTag">
property
 (available since v1.1.5)
</span>
</div>

<div class="signature">
public string <b>$index</b>;</div>

<p>the name of the AR attribute whose value should be used as index of the query result array.
Defaults to null, meaning the result array will be zero-based integers.</p>


<div class="detailHeader" id="join-detail">
join<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$join</b>;</div>

<p>how to join with other tables. This refers to the JOIN clause in an SQL statement.
For example, <code>'LEFT JOIN users ON users.id=authorID'</code>.</p>


<div class="detailHeader" id="limit-detail">
limit<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$limit</b>;</div>

<p>maximum number of records to be returned. If less than 0, it means no limit.</p>


<div class="detailHeader" id="offset-detail">
offset<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$offset</b>;</div>

<p>zero-based offset from where the records are to be returned. If less than 0, it means starting from the beginning.</p>


<div class="detailHeader" id="order-detail">
order<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$order</b>;</div>

<p>how to sort the query results. This refers to the ORDER BY clause in an SQL statement.</p>


<div class="detailHeader" id="paramCount-detail">
paramCount<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static integer <b>$paramCount</b>;</div>

<p>the global counter for anonymous binding parameters.
This counter is used for generating the name for the anonymous parameters.</p>


<div class="detailHeader" id="params-detail">
params<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$params</b>;</div>

<p>list of query parameter values indexed by parameter placeholders.
For example, <code>array(':name'=>'Dan', ':age'=>31)</code>.</p>


<div class="detailHeader" id="scopes-detail">
scopes<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public mixed <b>$scopes</b>;</div>

<p>scopes to apply
<br/><br/>
This property is effective only when passing criteria to
the one of the following methods:
<ul>
<li><?php echo CHtml::link('CActiveRecord::find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findAll()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAll')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByPk')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findAllByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByPk')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByAttributes')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findAllByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByAttributes')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::count()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'count')); ?></li>
</ul>
<br/><br/>
Can be set to one of the following:
<ul>
<li>One scope: $criteria->scopes='scopeName';</li>
<li>Multiple scopes: $criteria->scopes=array('scopeName1','scopeName2');</li>
<li>Scope with parameters: $criteria->scopes=array('scopeName'=>array($params));</li>
<li>Multiple scopes with parameters: $criteria->scopes=array('scopeName1'=>array($params1),'scopeName2'=>array($params2));</li>
<li>Multiple scopes with the same name: array(array('scopeName'=>array($params1)),array('scopeName'=>array($params2)));</li>
</ul></p>


<div class="detailHeader" id="select-detail">
select<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$select</b>;</div>

<p>the columns being selected. This refers to the SELECT clause in an SQL
statement. The property can be either a string (column names separated by commas)
or an array of column names. Defaults to '*', meaning all columns.</p>


<div class="detailHeader" id="together-detail">
together<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public boolean <b>$together</b>;</div>

<p>whether the foreign tables should be joined with the primary table in a single SQL.
This property is only used in relational AR queries for HAS_MANY and MANY_MANY relations.
<br/><br/>
When this property is set true, only a single SQL will be executed for a relational AR query,
even if the primary table is limited and the relationship between a foreign table and the primary
table is many-to-one.
<br/><br/>
When this property is set false, a SQL statement will be executed for each HAS_MANY relation.
<br/><br/>
When this property is not set, if the primary table is limited or paginated,
a SQL statement will be executed for each HAS_MANY relation.
Otherwise, a single SQL statement will be executed for all.</p>


<div class="detailHeader" id="with-detail">
with<span class="detailHeaderTag">
property
 (available since v1.1.0)
</span>
</div>

<div class="signature">
public mixed <b>$with</b>;</div>

<p>the relational query criteria. This is used for fetching related objects in eager loading fashion.
This property is effective only when the criteria is passed as a parameter to the following methods of CActiveRecord:
<ul>
<li><?php echo CHtml::link('CActiveRecord::find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findAll()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAll')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByPk')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findAllByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByPk')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByAttributes')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::findAllByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByAttributes')); ?></li>
<li><?php echo CHtml::link('CActiveRecord::count()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'count')); ?></li>
</ul>
The property value will be used as the parameter to the <?php echo CHtml::link('CActiveRecord::with()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'with')); ?> method
to perform the eager loading. Please refer to <?php echo CHtml::link('CActiveRecord::with()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'with')); ?> on how to specify this parameter.</p>


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
public void <b>__construct</b>(array $data=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">criteria initial property values (indexed by property name)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L157">yii/db/schema/CDbCriteria.php#L157</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="__wakeup-detail">
__wakeup()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__wakeup</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L167">yii/db/schema/CDbCriteria.php#L167</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__wakeup</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$map</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$newName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newName</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$newName</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$map</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sqlContentFieldNames</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'order'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'group'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'join'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'having'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$sqlContentFieldNames&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$field</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$field&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$field</span><span style="color: #007700">}[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">,</span><span style="color: #0000BB">$map</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$field</span><span style="color: #007700">=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$field</span><span style="color: #007700">,</span><span style="color: #0000BB">$map</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=</span><span style="color: #0000BB">$params</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Remaps criteria parameters on unserialize to prevent name collisions.</p>


<div class="detailHeader" id="addBetweenCondition-detail">
addBetweenCondition()
<span class="detailHeaderTag">
method
(available since v1.1.2)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCriteria <b>addBetweenCondition</b>(string $column, string $valueStart, string $valueEnd, string $operator='AND')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the column to search between.</td>
</tr>
<tr>
  <td class="paramNameCol">$valueStart</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the beginning value to start the between search.</td>
</tr>
<tr>
  <td class="paramNameCol">$valueEnd</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the ending value to end the between search.</td>
</tr>
<tr>
  <td class="paramNameCol">$operator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the operator used to concatenate the new condition with the existing one.
Defaults to 'AND'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCriteria</td>
  <td class="paramDescCol">the criteria object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L468">yii/db/schema/CDbCriteria.php#L468</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addBetweenCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$valueStart</span><span style="color: #007700">,</span><span style="color: #0000BB">$valueEnd</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$valueStart</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$valueEnd</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$paramStart</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$paramEnd</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">$paramStart</span><span style="color: #007700">]=</span><span style="color: #0000BB">$valueStart</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">$paramEnd</span><span style="color: #007700">]=</span><span style="color: #0000BB">$valueEnd</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$column</span><span style="color: #DD0000">&nbsp;BETWEEN&nbsp;</span><span style="color: #0000BB">$paramStart</span><span style="color: #DD0000">&nbsp;AND&nbsp;</span><span style="color: #0000BB">$paramEnd</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Adds a between condition to the <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?> property.
<br/><br/>
The new between condition and the existing condition will be concatenated via
the specified operator which defaults to 'AND'.
If one or both values are empty then the condition is not added to the existing condition.
This method handles the case when the existing condition is empty.
After calling this method, the <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?> property will be modified.</p>


<div class="detailHeader" id="addColumnCondition-detail">
addColumnCondition()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCriteria <b>addColumnCondition</b>(array $columns, string $columnOperator='AND', string $operator='AND')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$columns</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of column names and values to be matched (name=>value)</td>
</tr>
<tr>
  <td class="paramNameCol">$columnOperator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the operator to concatenate multiple column matching condition. Defaults to 'AND'.</td>
</tr>
<tr>
  <td class="paramNameCol">$operator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the operator used to concatenate the new condition with the existing one.
Defaults to 'AND'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCriteria</td>
  <td class="paramDescCol">the criteria object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L354">yii/db/schema/CDbCriteria.php#L354</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addColumnCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$columns</span><span style="color: #007700">,</span><span style="color: #0000BB">$columnOperator</span><span style="color: #007700">=</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;IS&nbsp;NULL'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'='</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"&nbsp;</span><span style="color: #0000BB">$columnOperator</span><span style="color: #DD0000">&nbsp;"</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Appends a condition for matching the given list of column values.
The generated condition will be concatenated to the existing <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?>
via the specified operator which defaults to 'AND'.
The condition is generated by matching each column and the corresponding value.</p>


<div class="detailHeader" id="addCondition-detail">
addCondition()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCriteria <b>addCondition</b>(mixed $condition, string $operator='AND')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$condition</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the new condition. It can be either a string or an array of strings.</td>
</tr>
<tr>
  <td class="paramNameCol">$operator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the operator to join different conditions. Defaults to 'AND'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCriteria</td>
  <td class="paramDescCol">the criteria object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L218">yii/db/schema/CDbCriteria.php#L218</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">'('</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">')&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$operator</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">,</span><span style="color: #0000BB">$condition</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$condition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">=</span><span style="color: #DD0000">'('</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">.</span><span style="color: #DD0000">')&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$operator</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$condition</span><span style="color: #007700">.</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Appends a condition to the existing <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?>.
The new condition and the existing condition will be concatenated via the specified operator
which defaults to 'AND'.
The new condition can also be an array. In this case, all elements in the array
will be concatenated together via the operator.
This method handles the case when the existing condition is empty.
After calling this method, the <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?> property will be modified.</p>


<div class="detailHeader" id="addInCondition-detail">
addInCondition()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCriteria <b>addInCondition</b>(string $column, array $values, string $operator='AND')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column name (or a valid SQL expression)</td>
</tr>
<tr>
  <td class="paramNameCol">$values</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of values that the column value should be in</td>
</tr>
<tr>
  <td class="paramNameCol">$operator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the operator used to concatenate the new condition with the existing one.
Defaults to 'AND'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCriteria</td>
  <td class="paramDescCol">the criteria object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L274">yii/db/schema/CDbCriteria.php#L274</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addInCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$values</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">))&lt;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #DD0000">'0=1'</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;0=1&nbsp;is&nbsp;used&nbsp;because&nbsp;in&nbsp;MSSQL&nbsp;value&nbsp;alone&nbsp;can't&nbsp;be&nbsp;used&nbsp;in&nbsp;WHERE<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">elseif(</span><span style="color: #0000BB">$n</span><span style="color: #007700">===</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;IS&nbsp;NULL'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">.</span><span style="color: #DD0000">'='</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;IN&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Appends an IN condition to the existing <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?>.
The IN condition and the existing condition will be concatenated via the specified operator
which defaults to 'AND'.
The IN condition is generated by using the SQL IN operator which requires the specified
column value to be among the given list of values.</p>


<div class="detailHeader" id="addNotInCondition-detail">
addNotInCondition()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCriteria <b>addNotInCondition</b>(string $column, array $values, string $operator='AND')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column name (or a valid SQL expression)</td>
</tr>
<tr>
  <td class="paramNameCol">$values</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of values that the column value should not be in</td>
</tr>
<tr>
  <td class="paramNameCol">$operator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the operator used to concatenate the new condition with the existing one.
Defaults to 'AND'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCriteria</td>
  <td class="paramDescCol">the criteria object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L315">yii/db/schema/CDbCriteria.php#L315</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addNotInCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$values</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">))&lt;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$n</span><span style="color: #007700">===</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;IS&nbsp;NOT&nbsp;NULL'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">.</span><span style="color: #DD0000">'!='</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;NOT&nbsp;IN&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Appends an NOT IN condition to the existing <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?>.
The NOT IN condition and the existing condition will be concatenated via the specified operator
which defaults to 'AND'.
The NOT IN condition is generated by using the SQL NOT IN operator which requires the specified
column value to be among the given list of values.</p>


<div class="detailHeader" id="addSearchCondition-detail">
addSearchCondition()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCriteria <b>addSearchCondition</b>(string $column, string $keyword, boolean $escape=true, string $operator='AND', string $like='LIKE')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column name (or a valid SQL expression)</td>
</tr>
<tr>
  <td class="paramNameCol">$keyword</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the search keyword. This interpretation of the keyword is affected by the next parameter.</td>
</tr>
<tr>
  <td class="paramNameCol">$escape</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the keyword should be escaped if it contains characters % or _.
When this parameter is true (default), the special characters % (matches 0 or more characters)
and _ (matches a single character) will be escaped, and the keyword will be surrounded with a %
character on both ends. When this parameter is false, the keyword will be directly used for
matching without any change.</td>
</tr>
<tr>
  <td class="paramNameCol">$operator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the operator used to concatenate the new condition with the existing one.
Defaults to 'AND'.</td>
</tr>
<tr>
  <td class="paramNameCol">$like</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the LIKE operator. Defaults to 'LIKE'. You may also set this to be 'NOT LIKE'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCriteria</td>
  <td class="paramDescCol">the criteria object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L251">yii/db/schema/CDbCriteria.php#L251</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addSearchCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$keyword</span><span style="color: #007700">,</span><span style="color: #0000BB">$escape</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">,</span><span style="color: #0000BB">$like</span><span style="color: #007700">=</span><span style="color: #DD0000">'LIKE'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$keyword</span><span style="color: #007700">==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$escape</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keyword</span><span style="color: #007700">=</span><span style="color: #DD0000">'%'</span><span style="color: #007700">.</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$keyword</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'%'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\%'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\_'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\\\\'</span><span style="color: #007700">)).</span><span style="color: #DD0000">'%'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$column</span><span style="color: #007700">.</span><span style="color: #DD0000">"&nbsp;</span><span style="color: #0000BB">$like</span><span style="color: #DD0000">&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++]=</span><span style="color: #0000BB">$keyword</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$condition</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Appends a search condition to the existing <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?>.
The search condition and the existing condition will be concatenated via the specified operator
which defaults to 'AND'.
The search condition is generated using the SQL LIKE operator with the given column name and
search keyword.</p>


<div class="detailHeader" id="compare-detail">
compare()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public CDbCriteria <b>compare</b>(string $column, mixed $value, boolean $partialMatch=false, string $operator='AND', boolean $escape=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the column to be searched</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the column value to be compared with. If the value is a string, the aforementioned
intelligent comparison will be conducted. If the value is an array, the comparison is done
by exact match of any of the value in the array. If the string or the array is empty,
the existing search condition will not be modified.</td>
</tr>
<tr>
  <td class="paramNameCol">$partialMatch</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the value should consider partial text match (using LIKE and NOT LIKE operators).
Defaults to false, meaning exact comparison.</td>
</tr>
<tr>
  <td class="paramNameCol">$operator</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the operator used to concatenate the new condition with the existing one.
Defaults to 'AND'.</td>
</tr>
<tr>
  <td class="paramNameCol">$escape</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the value should be escaped if $partialMatch is true and
the value contains characters % or _. When this parameter is true (default),
the special characters % (matches 0 or more characters)
and _ (matches a single character) will be escaped, and the value will be surrounded with a %
character on both ends. When this parameter is false, the value will be directly used for
matching without any change.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDbCriteria</td>
  <td class="paramDescCol">the criteria object itself</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L414">yii/db/schema/CDbCriteria.php#L414</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">compare</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$partialMatch</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$escape</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addInCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$value</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^(?:\s*(&lt;&gt;|&lt;=|&gt;=|&lt;|&gt;|=))?(.*)$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$op</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$op</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$partialMatch</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$op</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addSearchCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$escape</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$op</span><span style="color: #007700">===</span><span style="color: #DD0000">'&lt;&gt;'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addSearchCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$escape</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">,</span><span style="color: #DD0000">'NOT&nbsp;LIKE'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$op</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$op</span><span style="color: #007700">=</span><span style="color: #DD0000">'='</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">.</span><span style="color: #0000BB">$op</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$paramCount</span><span style="color: #007700">++]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Adds a comparison expression to the <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?> property.
<br/><br/>
This method is a helper that appends to the <?php echo CHtml::link('condition', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'condition')); ?> property
with a new comparison expression. The comparison is done by comparing a column
with the given value using some comparison operator.
<br/><br/>
The comparison operator is intelligently determined based on the first few
characters in the given value. In particular, it recognizes the following operators
if they appear as the leading characters in the given value:
<ul>
<li><code>&lt;</code>: the column must be less than the given value.</li>
<li><code>&gt;</code>: the column must be greater than the given value.</li>
<li><code>&lt;=</code>: the column must be less than or equal to the given value.</li>
<li><code>&gt;=</code>: the column must be greater than or equal to the given value.</li>
<li><code>&lt;&gt;</code>: the column must not be the same as the given value.
Note that when $partialMatch is true, this would mean the value must not be a substring
of the column.</li>
<li><code>=</code>: the column must be equal to the given value.</li>
<li>none of the above: the column must be equal to the given value. Note that when $partialMatch
is true, this would mean the value must be the same as the given value or be a substring of it.</li>
</ul>
<br/><br/>
Note that any surrounding white spaces will be removed from the value before comparison.
When the value is empty, no comparison expression will be added to the search condition.</p>


<div class="detailHeader" id="mergeWith-detail">
mergeWith()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>mergeWith</b>(mixed $criteria, string|boolean $operator='AND')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the criteria to be merged with. Either an array or CDbCriteria.</td>
</tr>
<tr>
  <td class="paramNameCol">$operator</td>
  <td class="paramTypeCol">string|boolean</td>
  <td class="paramDescCol">the operator used to concatenate where and having conditions. Defaults to 'AND'.
For backwards compatibility a boolean value can be passed:
- 'false' for 'OR'
- 'true' for 'AND'</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L494">yii/db/schema/CDbCriteria.php#L494</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">'AND'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_bool</span><span style="color: #007700">(</span><span style="color: #0000BB">$operator</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #0000BB">$operator&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'AND'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'OR'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">===</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">!==</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$select1</span><span style="color: #007700">=</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">)?</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">):</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$select2</span><span style="color: #007700">=</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">)?</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">),-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">):</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$select1</span><span style="color: #007700">,</span><span style="color: #0000BB">array_diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$select2</span><span style="color: #007700">,</span><span style="color: #0000BB">$select1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">=</span><span style="color: #DD0000">"(</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">}</span><span style="color: #DD0000">)&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #DD0000">&nbsp;(</span><span style="color: #007700">{</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">}</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">.</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">.=</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">!==</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">=</span><span style="color: #DD0000">"(</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">}</span><span style="color: #DD0000">)&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #DD0000">&nbsp;(</span><span style="color: #007700">{</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">}</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">distinct</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">distinct</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">distinct</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">together</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">together</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">together</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(!empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scopes1</span><span style="color: #007700">=(array)</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scopes2</span><span style="color: #007700">=(array)</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$scopes1&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_integer</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$scopes2</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">[]=array(</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$scopes2&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_integer</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$scopes1</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">[]=array(</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scopes</span><span style="color: #007700">=</span><span style="color: #0000BB">$scopes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">=</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(!empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">=(array)</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach((array)</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_integer</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$excludes</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(array(</span><span style="color: #DD0000">'joinType'</span><span style="color: #007700">,</span><span style="color: #DD0000">'on'</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$opt</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #0000BB">$opt</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$excludes</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #0000BB">$opt</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$v</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$excludes</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">]=&nbsp;(</span><span style="color: #0000BB">$opt</span><span style="color: #007700">===</span><span style="color: #DD0000">'on'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$excludes</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">]!==</span><span style="color: #0000BB">$excludes</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">])&nbsp;?<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"(</span><span style="color: #0000BB">$excludes</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">]</span><span style="color: #DD0000">)&nbsp;AND&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">]</span><span style="color: #DD0000">"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">][</span><span style="color: #0000BB">$opt</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$v</span><span style="color: #007700">[</span><span style="color: #0000BB">$opt</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">,</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$excludes</span><span style="color: #007700">)!==</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">],</span><span style="color: #0000BB">$excludes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">with</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]=</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Merges with another criteria.
In general, the merging makes the resulting criteria more restrictive.
For example, if both criterias have conditions, they will be 'AND' together.
Also, the criteria passed as the parameter takes precedence in case
two options cannot be merged (e.g. LIMIT, OFFSET).</p>


<div class="detailHeader" id="toArray-detail">
toArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>toArray</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the array representation of the criteria</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbCriteria.php#L637">yii/db/schema/CDbCriteria.php#L637</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(array(</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'condition'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'params'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'limit'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'offset'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'order'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'group'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'join'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'having'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'distinct'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'scopes'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'with'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alias'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'index'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'together'</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


