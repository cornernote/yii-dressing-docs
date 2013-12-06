<?php
$this->pageTitle = $this->pageHeading = 'CActiveRecordMetaData';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CActiveRecordMetaData';
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
  <td>class CActiveRecordMetaData</td>
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
CActiveRecordMetaData represents the meta-data for an Active Record class.</div>
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
<tr id="attributeDefaults">
  <td><?php echo CHtml::link('attributeDefaults', array('/site/doc', 'view' => 'CActiveRecordMetaData', '#' => 'attributeDefaults-detail')); ?></td>
  <td>array</td>
  <td>attribute default values</td>
  <td>CActiveRecordMetaData</td>
</tr>
<tr id="columns">
  <td><?php echo CHtml::link('columns', array('/site/doc', 'view' => 'CActiveRecordMetaData', '#' => 'columns-detail')); ?></td>
  <td>array</td>
  <td>table columns</td>
  <td>CActiveRecordMetaData</td>
</tr>
<tr id="relations">
  <td><?php echo CHtml::link('relations', array('/site/doc', 'view' => 'CActiveRecordMetaData', '#' => 'relations-detail')); ?></td>
  <td>array</td>
  <td>list of relations</td>
  <td>CActiveRecordMetaData</td>
</tr>
<tr id="tableSchema">
  <td><?php echo CHtml::link('tableSchema', array('/site/doc', 'view' => 'CActiveRecordMetaData', '#' => 'tableSchema-detail')); ?></td>
  <td><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td>the table schema information</td>
  <td>CActiveRecordMetaData</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CActiveRecordMetaData', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CActiveRecordMetaData</td>
</tr>
<tr id="addRelation">
  <td><?php echo CHtml::link('addRelation()', array('/site/doc', 'view' => 'CActiveRecordMetaData', '#' => 'addRelation-detail')); ?></td>
  <td>Adds a relation.</td>
  <td>CActiveRecordMetaData</td>
</tr>
<tr id="hasRelation">
  <td><?php echo CHtml::link('hasRelation()', array('/site/doc', 'view' => 'CActiveRecordMetaData', '#' => 'hasRelation-detail')); ?></td>
  <td>Checks if there is a relation with specified name defined.</td>
  <td>CActiveRecordMetaData</td>
</tr>
<tr id="removeRelation">
  <td><?php echo CHtml::link('removeRelation()', array('/site/doc', 'view' => 'CActiveRecordMetaData', '#' => 'removeRelation-detail')); ?></td>
  <td>Deletes a relation with specified name.</td>
  <td>CActiveRecordMetaData</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="attributeDefaults-detail">
attributeDefaults<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$attributeDefaults</b>;</div>

<p>attribute default values</p>


<div class="detailHeader" id="columns-detail">
columns<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$columns</b>;</div>

<p>table columns</p>


<div class="detailHeader" id="relations-detail">
relations<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$relations</b>;</div>

<p>list of relations</p>


<div class="detailHeader" id="tableSchema-detail">
tableSchema<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?> <b>$tableSchema</b>;</div>

<p>the table schema information</p>


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
public void <b>__construct</b>(<?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> $model)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol">the model instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php#L2356">yii/db/ar/CActiveRecord.php#L2356</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_modelClassName</span><span style="color: #007700">=</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$table</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getTable</span><span style="color: #007700">(</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">))===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;table&nbsp;"{table}"&nbsp;for&nbsp;active&nbsp;record&nbsp;class&nbsp;"{class}"&nbsp;cannot&nbsp;be&nbsp;found&nbsp;in&nbsp;the&nbsp;database.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{class}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_modelClassName</span><span style="color: #007700">,</span><span style="color: #DD0000">'{table}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$tableName</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">isPrimaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">isPrimaryKey</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">=</span><span style="color: #0000BB">$table</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">=</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isPrimaryKey&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultValue</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeDefaults</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultValue</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$config</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addRelation</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="addRelation-detail">
addRelation()
<span class="detailHeaderTag">
method
(available since v1.1.2)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addRelation</b>(string $name, array $config)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">$name Name of the relation.</td>
</tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">$config Relation parameters.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php#L2405">yii/db/ar/CActiveRecord.php#L2405</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addRelation</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;relation&nbsp;class,&nbsp;AR&nbsp;class,&nbsp;FK<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">](</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">],</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Active&nbsp;record&nbsp;"{class}"&nbsp;has&nbsp;an&nbsp;invalid&nbsp;configuration&nbsp;for&nbsp;relation&nbsp;"{relation}".&nbsp;It&nbsp;must&nbsp;specify&nbsp;the&nbsp;relation&nbsp;type,&nbsp;the&nbsp;related&nbsp;active&nbsp;record&nbsp;class&nbsp;and&nbsp;the&nbsp;foreign&nbsp;key.'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'{class}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_modelClassName</span><span style="color: #007700">,</span><span style="color: #DD0000">'{relation}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Adds a relation.
<br/><br/>
$config is an array with three elements:
relation type, the related active record class and the foreign key.</p>


<div class="detailHeader" id="hasRelation-detail">
hasRelation()
<span class="detailHeaderTag">
method
(available since v1.1.2)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>hasRelation</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">$name Name of the relation.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php#L2420">yii/db/ar/CActiveRecord.php#L2420</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hasRelation</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Checks if there is a relation with specified name defined.</p>


<div class="detailHeader" id="removeRelation-detail">
removeRelation()
<span class="detailHeaderTag">
method
(available since v1.1.2)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>removeRelation</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">$name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/ar/CActiveRecord.php#L2432">yii/db/ar/CActiveRecord.php#L2432</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removeRelation</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Deletes a relation with specified name.</p>


