<?php
$this->pageTitle = $this->pageHeading = 'CJoinElement';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CJoinElement';
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
  <td>class CJoinElement</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php">yii\db\ar\CActiveFinder.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CJoinElement represents a tree node in the join tree created by <?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?>.</div>
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
<tr id="children">
  <td><?php echo CHtml::link('children', array('/site/doc', 'view' => 'CJoinElement', '#' => 'children-detail')); ?></td>
  <td>array</td>
  <td>list of child join elements</td>
  <td>CJoinElement</td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CJoinElement', '#' => 'id-detail')); ?></td>
  <td>integer</td>
  <td>the unique ID of this tree node</td>
  <td>CJoinElement</td>
</tr>
<tr id="master">
  <td><?php echo CHtml::link('master', array('/site/doc', 'view' => 'CJoinElement', '#' => 'master-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
  <td>the master relation</td>
  <td>CJoinElement</td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'CJoinElement', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td>the model associated with this tree node</td>
  <td>CJoinElement</td>
</tr>
<tr id="rawTableAlias">
  <td><?php echo CHtml::link('rawTableAlias', array('/site/doc', 'view' => 'CJoinElement', '#' => 'rawTableAlias-detail')); ?></td>
  <td>string</td>
  <td>the quoted table alias for this element</td>
  <td>CJoinElement</td>
</tr>
<tr id="records">
  <td><?php echo CHtml::link('records', array('/site/doc', 'view' => 'CJoinElement', '#' => 'records-detail')); ?></td>
  <td>array</td>
  <td>list of active records found by the queries.</td>
  <td>CJoinElement</td>
</tr>
<tr id="relation">
  <td><?php echo CHtml::link('relation', array('/site/doc', 'view' => 'CJoinElement', '#' => 'relation-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
  <td>the relation represented by this tree node</td>
  <td>CJoinElement</td>
</tr>
<tr id="slave">
  <td><?php echo CHtml::link('slave', array('/site/doc', 'view' => 'CJoinElement', '#' => 'slave-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?></td>
  <td>the slave relation</td>
  <td>CJoinElement</td>
</tr>
<tr id="stats">
  <td><?php echo CHtml::link('stats', array('/site/doc', 'view' => 'CJoinElement', '#' => 'stats-detail')); ?></td>
  <td>array</td>
  <td>list of stat elements</td>
  <td>CJoinElement</td>
</tr>
<tr id="tableAlias">
  <td><?php echo CHtml::link('tableAlias', array('/site/doc', 'view' => 'CJoinElement', '#' => 'tableAlias-detail')); ?></td>
  <td>string</td>
  <td>table alias for this join element</td>
  <td>CJoinElement</td>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CJoinElement', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CJoinElement</td>
</tr>
<tr id="afterFind">
  <td><?php echo CHtml::link('afterFind()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'afterFind-detail')); ?></td>
  <td>Calls <?php echo CHtml::link('CActiveRecord::afterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterFind')); ?> of all the records.</td>
  <td>CJoinElement</td>
</tr>
<tr id="buildQuery">
  <td><?php echo CHtml::link('buildQuery()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'buildQuery-detail')); ?></td>
  <td>Builds the join query with all descendant HAS_ONE and BELONGS_TO nodes.</td>
  <td>CJoinElement</td>
</tr>
<tr id="count">
  <td><?php echo CHtml::link('count()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'count-detail')); ?></td>
  <td>Count the number of primary records returned by the join statement.</td>
  <td>CJoinElement</td>
</tr>
<tr id="destroy">
  <td><?php echo CHtml::link('destroy()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'destroy-detail')); ?></td>
  <td>Removes references to child elements and finder to avoid circular references.</td>
  <td>CJoinElement</td>
</tr>
<tr id="find">
  <td><?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'find-detail')); ?></td>
  <td>Performs the recursive finding with the criteria.</td>
  <td>CJoinElement</td>
</tr>
<tr id="findWithBase">
  <td><?php echo CHtml::link('findWithBase()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'findWithBase-detail')); ?></td>
  <td>Performs the eager loading with the base records ready.</td>
  <td>CJoinElement</td>
</tr>
<tr id="getColumnPrefix">
  <td><?php echo CHtml::link('getColumnPrefix()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'getColumnPrefix-detail')); ?></td>
  <td>Returns the column prefix for column reference disambiguation</td>
  <td>CJoinElement</td>
</tr>
<tr id="getColumnSelect">
  <td><?php echo CHtml::link('getColumnSelect()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'getColumnSelect-detail')); ?></td>
  <td>Generates the list of columns to be selected.</td>
  <td>CJoinElement</td>
</tr>
<tr id="getJoinCondition">
  <td><?php echo CHtml::link('getJoinCondition()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'getJoinCondition-detail')); ?></td>
  <td>Returns the join statement (this node joins with its parent)</td>
  <td>CJoinElement</td>
</tr>
<tr id="getPrimaryKeyRange">
  <td><?php echo CHtml::link('getPrimaryKeyRange()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'getPrimaryKeyRange-detail')); ?></td>
  <td>Returns the condition that specifies only the rows with the selected primary key values.</td>
  <td>CJoinElement</td>
</tr>
<tr id="getPrimaryKeySelect">
  <td><?php echo CHtml::link('getPrimaryKeySelect()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'getPrimaryKeySelect-detail')); ?></td>
  <td>Returns the primary key selection</td>
  <td>CJoinElement</td>
</tr>
<tr id="getTableNameWithAlias">
  <td><?php echo CHtml::link('getTableNameWithAlias()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'getTableNameWithAlias-detail')); ?></td>
  <td>Returns the table name and the table alias (if any). This can be used directly in SQL query without escaping.</td>
  <td>CJoinElement</td>
</tr>
<tr id="lazyFind">
  <td><?php echo CHtml::link('lazyFind()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'lazyFind-detail')); ?></td>
  <td>Performs lazy find with the specified base record.</td>
  <td>CJoinElement</td>
</tr>
<tr id="runQuery">
  <td><?php echo CHtml::link('runQuery()', array('/site/doc', 'view' => 'CJoinElement', '#' => 'runQuery-detail')); ?></td>
  <td>Executes the join query and populates the query results.</td>
  <td>CJoinElement</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="children-detail">
children<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$children</b>;</div>

<p>list of child join elements</p>


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$id</b>;</div>

<p>the unique ID of this tree node</p>


<div class="detailHeader" id="master-detail">
master<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> <b>$master</b>;</div>

<p>the master relation</p>


<div class="detailHeader" id="model-detail">
model<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>$model</b>;</div>

<p>the model associated with this tree node</p>


<div class="detailHeader" id="rawTableAlias-detail">
rawTableAlias<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$rawTableAlias</b>;</div>

<p>the quoted table alias for this element</p>


<div class="detailHeader" id="records-detail">
records<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$records</b>;</div>

<p>list of active records found by the queries. They are indexed by primary key values.</p>


<div class="detailHeader" id="relation-detail">
relation<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> <b>$relation</b>;</div>

<p>the relation represented by this tree node</p>


<div class="detailHeader" id="slave-detail">
slave<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveRelation', array('/site/doc', 'view' => 'CActiveRelation')); ?> <b>$slave</b>;</div>

<p>the slave relation</p>


<div class="detailHeader" id="stats-detail">
stats<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$stats</b>;</div>

<p>list of stat elements</p>


<div class="detailHeader" id="tableAlias-detail">
tableAlias<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$tableAlias</b>;</div>

<p>table alias for this join element</p>


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
public void <b>__construct</b>(<?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?> $finder, mixed $relation, CJoinElement $parent=NULL, integer $id=0)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$finder</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?></td>
  <td class="paramDescCol">the finder</td>
</tr>
<tr>
  <td class="paramNameCol">$relation</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the relation (if the third parameter is not null)
or the model (if the third parameter is null) associated with this tree node.</td>
</tr>
<tr>
  <td class="paramNameCol">$parent</td>
  <td class="paramTypeCol">CJoinElement</td>
  <td class="paramDescCol">the parent tree node</td>
</tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the ID of this tree node that is unique among all the tree nodes</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L371">yii\db\ar\CActiveFinder.php#L371</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$finder</span><span style="color: #007700">,</span><span style="color: #0000BB">$relation</span><span style="color: #007700">,</span><span style="color: #0000BB">$parent</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">=</span><span style="color: #0000BB">$finder</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">=</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$parent</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">=</span><span style="color: #0000BB">$relation</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_parent</span><span style="color: #007700">=</span><span style="color: #0000BB">$parent</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">className</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableAlias</span><span style="color: #007700">=</span><span style="color: #0000BB">$relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">?</span><span style="color: #0000BB">$relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">:</span><span style="color: #0000BB">$relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawTableAlias</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableAlias</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;root&nbsp;element,&nbsp;the&nbsp;first&nbsp;parameter&nbsp;is&nbsp;the&nbsp;model.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">=</span><span style="color: #0000BB">$relation</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">=</span><span style="color: #0000BB">$relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">=</span><span style="color: #0000BB">$relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableAlias</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawTableAlias</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableAlias</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;set&nbsp;up&nbsp;column&nbsp;aliases,&nbsp;such&nbsp;as&nbsp;t1_c2<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getDriverName</span><span style="color: #007700">()===</span><span style="color: #DD0000">'oci'</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Issue&nbsp;482<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #DD0000">'T'</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'_C'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #DD0000">'t'</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'_c'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnNames</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_columnAliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">===</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">=</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="afterFind-detail">
afterFind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>afterFind</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L766">yii\db\ar\CActiveFinder.php#L766</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterFind</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterFindInternal</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterFind</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Calls <?php echo CHtml::link('CActiveRecord::afterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterFind')); ?> of all the records.</p>


<div class="detailHeader" id="buildQuery-detail">
buildQuery()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>buildQuery</b>(<?php echo CHtml::link('CJoinQuery', array('/site/doc', 'view' => 'CJoinQuery')); ?> $query)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$query</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CJoinQuery', array('/site/doc', 'view' => 'CJoinQuery')); ?></td>
  <td class="paramDescCol">the query being built up</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L780">yii\db\ar\CActiveFinder.php#L780</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">buildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">master</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_joined</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHasOneRelation&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CBelongsToRelation<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinAll&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">together&nbsp;</span><span style="color: #007700">||&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseLimited&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">together</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_joined</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Builds the join query with all descendant HAS_ONE and BELONGS_TO nodes.</p>


<div class="detailHeader" id="count-detail">
count()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>count</b>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">number of primary records. Note: type is string to keep max. precision.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L722">yii\db\ar\CActiveFinder.php#L722</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CJoinQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;ensure&nbsp;only&nbsp;one&nbsp;big&nbsp;join&nbsp;statement&nbsp;is&nbsp;used<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseLimited</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinAll</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">=</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">=-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">)&nbsp;||&nbsp;!empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">orders&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getText</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=</span><span style="color: #DD0000">"SELECT&nbsp;COUNT(*)&nbsp;FROM&nbsp;(</span><span style="color: #007700">{</span><span style="color: #0000BB">$sql</span><span style="color: #007700">}</span><span style="color: #DD0000">)&nbsp;sq"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setText</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$select</span><span style="color: #007700">=</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$select</span><span style="color: #007700">!==</span><span style="color: #DD0000">'*'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strncasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$select</span><span style="color: #007700">,</span><span style="color: #DD0000">'count'</span><span style="color: #007700">,</span><span style="color: #0000BB">5</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selects</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$select</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnPrefix</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selects</span><span style="color: #007700">=array(</span><span style="color: #DD0000">"COUNT(DISTINCT&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #DD0000">)"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selects</span><span style="color: #007700">=array(</span><span style="color: #DD0000">"COUNT(*)"</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">orders</span><span style="color: #007700">=</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">groups</span><span style="color: #007700">=</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">havings</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryScalar</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Count the number of primary records returned by the join statement.</p>


<div class="detailHeader" id="destroy-detail">
destroy()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>destroy</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L415">yii\db\ar\CActiveFinder.php#L415</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">destroy</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">destroy</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_parent</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">master</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">slave</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stats</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Removes references to child elements and finder to avoid circular references.
This is internally used.</p>


<div class="detailHeader" id="find-detail">
find()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>find</b>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L429">yii\db\ar\CActiveFinder.php#L429</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">find</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_parent</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;root&nbsp;element<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CJoinQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseLimited</span><span style="color: #007700">=(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseLimited</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">runQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_joined&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_parent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//&nbsp;not&nbsp;joined&nbsp;before<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CJoinQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_parent</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_joined</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_parent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">runQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;recursively<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">find</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stats&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$stat</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stat</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Performs the recursive finding with the criteria.</p>


<div class="detailHeader" id="findWithBase-detail">
findWithBase()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>findWithBase</b>(mixed $baseRecords)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$baseRecords</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the available base record(s).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L686">yii\db\ar\CActiveFinder.php#L686</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">findWithBase</span><span style="color: #007700">(</span><span style="color: #0000BB">$baseRecords</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$baseRecords</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseRecords</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$baseRecords</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$baseRecords&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">[</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">}]=</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$baseRecords&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pk</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pk</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">[</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$pk</span><span style="color: #007700">)]=</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CJoinQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joins</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">runQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">find</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stats&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$stat</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stat</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Performs the eager loading with the base records ready.</p>


<div class="detailHeader" id="getColumnPrefix-detail">
getColumnPrefix()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getColumnPrefix</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column prefix for column reference disambiguation</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L1014">yii\db\ar\CActiveFinder.php#L1014</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getColumnPrefix</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableAlias</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawTableAlias</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getColumnSelect-detail">
getColumnSelect()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getColumnSelect</b>(mixed $select='*')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$select</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">columns to be selected. Defaults to '*', indicating all columns.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column selection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L905">yii\db\ar\CActiveFinder.php#L905</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getColumnSelect</span><span style="color: #007700">(</span><span style="color: #0000BB">$select</span><span style="color: #007700">=</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnPrefix</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$select</span><span style="color: #007700">===</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnNames</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">).</span><span style="color: #DD0000">'&nbsp;AS&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_columnAliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$select</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$select</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #0000BB">$select</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selected</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$select&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #DD0000">'\'"`'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$key</span><span style="color: #007700">===</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_columnAliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$selected</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;AS&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selected</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_columnAliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;simple&nbsp;column&nbsp;names<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">).</span><span style="color: #DD0000">'&nbsp;AS&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_columnAliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selected</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_columnAliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]]=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^(.*?)\s+AS\s+(\w+)$/im'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;the&nbsp;column&nbsp;is&nbsp;already&nbsp;aliased<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_columnAliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">])&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_columnAliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]!==</span><span style="color: #0000BB">$alias</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_columnAliases</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">$alias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selected</span><span style="color: #007700">[</span><span style="color: #0000BB">$alias</span><span style="color: #007700">]=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Active&nbsp;record&nbsp;"{class}"&nbsp;is&nbsp;trying&nbsp;to&nbsp;select&nbsp;an&nbsp;invalid&nbsp;column&nbsp;"{column}".&nbsp;Note,&nbsp;the&nbsp;column&nbsp;must&nbsp;exist&nbsp;in&nbsp;the&nbsp;table&nbsp;or&nbsp;be&nbsp;an&nbsp;expression&nbsp;with&nbsp;alias.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{class}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'{column}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;primary&nbsp;key&nbsp;selection&nbsp;if&nbsp;they&nbsp;are&nbsp;not&nbsp;selected<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$selected</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">).</span><span style="color: #DD0000">'&nbsp;AS&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$selected</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">).</span><span style="color: #DD0000">'&nbsp;AS&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$columns</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates the list of columns to be selected.
Columns will be properly aliased and primary keys will be added to selection if they are not specified.</p>


<div class="detailHeader" id="getJoinCondition-detail">
getJoinCondition()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getJoinCondition</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the join statement (this node joins with its parent)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L1026">yii\db\ar\CActiveFinder.php#L1026</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getJoinCondition</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parent</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_parent</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CManyManyRelation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$joinTableName</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getJunctionTableName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$joinTable</span><span style="color: #007700">=</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$joinTableName</span><span style="color: #007700">))===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;relation&nbsp;"{relation}"&nbsp;in&nbsp;active&nbsp;record&nbsp;class&nbsp;"{class}"&nbsp;is&nbsp;not&nbsp;specified&nbsp;correctly:&nbsp;the&nbsp;join&nbsp;table&nbsp;"{joinTable}"&nbsp;given&nbsp;in&nbsp;the&nbsp;foreign&nbsp;key&nbsp;cannot&nbsp;be&nbsp;found&nbsp;in&nbsp;the&nbsp;database.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{class}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$parent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'{relation}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'{joinTable}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$joinTableName</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fks</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getJunctionForeignKeys</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinManyMany</span><span style="color: #007700">(</span><span style="color: #0000BB">$joinTable</span><span style="color: #007700">,</span><span style="color: #0000BB">$fks</span><span style="color: #007700">,</span><span style="color: #0000BB">$parent</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fks</span><span style="color: #007700">=</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreignKey</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreignKey&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foreignKey</span><span style="color: #007700">,-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">slave</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CBelongsToRelation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fks</span><span style="color: #007700">=</span><span style="color: #0000BB">array_flip</span><span style="color: #007700">(</span><span style="color: #0000BB">$fks</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pke</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">slave</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fke</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pke</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fke</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">slave</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CBelongsToRelation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pke</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fke</span><span style="color: #007700">=</span><span style="color: #0000BB">$parent</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pke</span><span style="color: #007700">=</span><span style="color: #0000BB">$parent</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fke</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joinOneMany</span><span style="color: #007700">(</span><span style="color: #0000BB">$fke</span><span style="color: #007700">,</span><span style="color: #0000BB">$fks</span><span style="color: #007700">,</span><span style="color: #0000BB">$pke</span><span style="color: #007700">,</span><span style="color: #0000BB">$parent</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPrimaryKeyRange-detail">
getPrimaryKeyRange()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPrimaryKeyRange</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the condition that specifies only the rows with the selected primary key values.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L998">yii\db\ar\CActiveFinder.php#L998</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrimaryKeyRange</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">=</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;&amp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createInCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">,</span><span style="color: #0000BB">$values</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnPrefix</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPrimaryKeySelect-detail">
getPrimaryKeySelect()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPrimaryKeySelect</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the primary key selection</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L980">yii\db\ar\CActiveFinder.php#L980</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrimaryKeySelect</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnPrefix</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">).</span><span style="color: #DD0000">'&nbsp;AS&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pkAlias&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$alias</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columns</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">).</span><span style="color: #DD0000">'&nbsp;AS&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$alias</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$columns</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getTableNameWithAlias-detail">
getTableNameWithAlias()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getTableNameWithAlias</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the table name and the table alias (if any). This can be used directly in SQL query without escaping.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L890">yii\db\ar\CActiveFinder.php#L890</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTableNameWithAlias</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableAlias</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawTableAlias</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rawName</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="lazyFind-detail">
lazyFind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>lazyFind</b>(<?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> $baseRecord)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$baseRecord</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol">the active record whose related object is to be fetched.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L459">yii\db\ar\CActiveFinder.php#L459</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">lazyFind</span><span style="color: #007700">(</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">[</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">}]=</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pk</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pk</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">[</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$pk</span><span style="color: #007700">)]=</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stats&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$stat</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stat</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CJoinQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selects</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnSelect</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">select</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">conditions</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">condition</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">on</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">groups</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">joins</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">havings</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">having</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">orders</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">=</span><span style="color: #0000BB">$params</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">elements</span><span style="color: #007700">[</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">]=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHasManyRelation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">=</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">=</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">applyLazyCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">,</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_joined</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_joined</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_finder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseLimited</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">runQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">find</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHasOneRelation&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CBelongsToRelation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addRelatedRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,</span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records</span><span style="color: #007700">),</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #FF8000">//&nbsp;has_many&nbsp;and&nbsp;many_many<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">records&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$index</span><span style="color: #007700">=</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$index</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseRecord</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addRelatedRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">$child</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,</span><span style="color: #0000BB">$record</span><span style="color: #007700">,</span><span style="color: #0000BB">$index</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Performs lazy find with the specified base record.</p>


<div class="detailHeader" id="runQuery-detail">
runQuery()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>runQuery</b>(<?php echo CHtml::link('CJoinQuery', array('/site/doc', 'view' => 'CJoinQuery')); ?> $query)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$query</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CJoinQuery', array('/site/doc', 'view' => 'CJoinQuery')); ?></td>
  <td class="paramDescCol">the query to be executed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\ar\CActiveFinder.php#L800">yii\db\ar\CActiveFinder.php#L800</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">runQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_builder</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">populateRecord</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">,</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Executes the join query and populates the query results.</p>


