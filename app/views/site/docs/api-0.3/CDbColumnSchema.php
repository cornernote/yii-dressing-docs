<?php
$this->pageTitle = $this->pageHeading = 'CDbColumnSchema';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbColumnSchema';
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
  <td>class CDbColumnSchema &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CMssqlColumnSchema', array('/site/doc', 'view' => 'CMssqlColumnSchema')); ?>, <?php echo CHtml::link('CMysqlColumnSchema', array('/site/doc', 'view' => 'CMysqlColumnSchema')); ?>, <?php echo CHtml::link('COciColumnSchema', array('/site/doc', 'view' => 'COciColumnSchema')); ?>, <?php echo CHtml::link('CPgsqlColumnSchema', array('/site/doc', 'view' => 'CPgsqlColumnSchema')); ?>, <?php echo CHtml::link('CSqliteColumnSchema', array('/site/doc', 'view' => 'CSqliteColumnSchema')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbColumnSchema.php">yii/db/schema/CDbColumnSchema.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbColumnSchema class describes the column meta data of a database table.</div>
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
<tr id="allowNull">
  <td><?php echo CHtml::link('allowNull', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'allowNull-detail')); ?></td>
  <td>boolean</td>
  <td>whether this column can be null.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="autoIncrement">
  <td><?php echo CHtml::link('autoIncrement', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'autoIncrement-detail')); ?></td>
  <td>boolean</td>
  <td>whether this column is auto-incremental</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="comment">
  <td><?php echo CHtml::link('comment', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'comment-detail')); ?></td>
  <td>string</td>
  <td>comment of this column.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="dbType">
  <td><?php echo CHtml::link('dbType', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'dbType-detail')); ?></td>
  <td>string</td>
  <td>the DB type of this column.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="defaultValue">
  <td><?php echo CHtml::link('defaultValue', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'defaultValue-detail')); ?></td>
  <td>mixed</td>
  <td>default value of this column</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="isForeignKey">
  <td><?php echo CHtml::link('isForeignKey', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'isForeignKey-detail')); ?></td>
  <td>boolean</td>
  <td>whether this column is a foreign key</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="isPrimaryKey">
  <td><?php echo CHtml::link('isPrimaryKey', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'isPrimaryKey-detail')); ?></td>
  <td>boolean</td>
  <td>whether this column is a primary key</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>name of this column (without quotes).</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="precision">
  <td><?php echo CHtml::link('precision', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'precision-detail')); ?></td>
  <td>integer</td>
  <td>precision of the column data, if it is numeric.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="rawName">
  <td><?php echo CHtml::link('rawName', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'rawName-detail')); ?></td>
  <td>string</td>
  <td>raw name of this column.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="scale">
  <td><?php echo CHtml::link('scale', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'scale-detail')); ?></td>
  <td>integer</td>
  <td>scale of the column data, if it is numeric.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="size">
  <td><?php echo CHtml::link('size', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'size-detail')); ?></td>
  <td>integer</td>
  <td>size of the column.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>the PHP type of this column.</td>
  <td>CDbColumnSchema</td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'init-detail')); ?></td>
  <td>Initializes the column with its DB type and default value.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="typecast">
  <td><?php echo CHtml::link('typecast()', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'typecast-detail')); ?></td>
  <td>Converts the input value to the type that this column is of.</td>
  <td>CDbColumnSchema</td>
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
<tr id="extractDefault">
  <td><?php echo CHtml::link('extractDefault()', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'extractDefault-detail')); ?></td>
  <td>Extracts the default value for the column.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="extractLimit">
  <td><?php echo CHtml::link('extractLimit()', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'extractLimit-detail')); ?></td>
  <td>Extracts size, precision and scale information from column's DB type.</td>
  <td>CDbColumnSchema</td>
</tr>
<tr id="extractType">
  <td><?php echo CHtml::link('extractType()', array('/site/doc', 'view' => 'CDbColumnSchema', '#' => 'extractType-detail')); ?></td>
  <td>Extracts the PHP type from DB type.</td>
  <td>CDbColumnSchema</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="allowNull-detail">
allowNull<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$allowNull</b>;</div>

<p>whether this column can be null.</p>


<div class="detailHeader" id="autoIncrement-detail">
autoIncrement<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public boolean <b>$autoIncrement</b>;</div>

<p>whether this column is auto-incremental</p>


<div class="detailHeader" id="comment-detail">
comment<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public string <b>$comment</b>;</div>

<p>comment of this column. Default value is empty string which means that no comment
has been set for the column. Null value means that RDBMS does not support column comments
at all (SQLite) or comment retrieval for the active RDBMS is not yet supported by the framework.</p>


<div class="detailHeader" id="dbType-detail">
dbType<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$dbType</b>;</div>

<p>the DB type of this column.</p>


<div class="detailHeader" id="defaultValue-detail">
defaultValue<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$defaultValue</b>;</div>

<p>default value of this column</p>


<div class="detailHeader" id="isForeignKey-detail">
isForeignKey<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$isForeignKey</b>;</div>

<p>whether this column is a foreign key</p>


<div class="detailHeader" id="isPrimaryKey-detail">
isPrimaryKey<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$isPrimaryKey</b>;</div>

<p>whether this column is a primary key</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$name</b>;</div>

<p>name of this column (without quotes).</p>


<div class="detailHeader" id="precision-detail">
precision<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$precision</b>;</div>

<p>precision of the column data, if it is numeric.</p>


<div class="detailHeader" id="rawName-detail">
rawName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$rawName</b>;</div>

<p>raw name of this column. This is the quoted name that can be used in SQL queries.</p>


<div class="detailHeader" id="scale-detail">
scale<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$scale</b>;</div>

<p>scale of the column data, if it is numeric.</p>


<div class="detailHeader" id="size-detail">
size<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$size</b>;</div>

<p>size of the column.</p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$type</b>;</div>

<p>the PHP type of this column.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="extractDefault-detail">
extractDefault()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>extractDefault</b>(mixed $defaultValue)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default value obtained from metadata</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbColumnSchema.php#L128">yii/db/schema/CDbColumnSchema.php#L128</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">extractDefault</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">typecast</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Extracts the default value for the column.
The value is typecasted to correct PHP type.</p>


<div class="detailHeader" id="extractLimit-detail">
extractLimit()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>extractLimit</b>(string $dbType)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dbType</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column's DB type</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbColumnSchema.php#L112">yii/db/schema/CDbColumnSchema.php#L112</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">extractLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">,</span><span style="color: #DD0000">'('</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\((.*)\)/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">size</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">precision</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">scale</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Extracts size, precision and scale information from column's DB type.</p>


<div class="detailHeader" id="extractType-detail">
extractType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>extractType</b>(string $dbType)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dbType</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">DB type</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbColumnSchema.php#L96">yii/db/schema/CDbColumnSchema.php#L96</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">extractType</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">stripos</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">,</span><span style="color: #DD0000">'int'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">stripos</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">,</span><span style="color: #DD0000">'unsigned&nbsp;int'</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">=</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">stripos</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">,</span><span style="color: #DD0000">'bool'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">=</span><span style="color: #DD0000">'boolean'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(real|floa|doub)/i'</span><span style="color: #007700">,</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">=</span><span style="color: #DD0000">'double'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">=</span><span style="color: #DD0000">'string'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Extracts the PHP type from DB type.</p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>init</b>(string $dbType, mixed $defaultValue)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dbType</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column's DB type</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbColumnSchema.php#L83">yii/db/schema/CDbColumnSchema.php#L83</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbType</span><span style="color: #007700">=</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extractType</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extractLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extractDefault</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the column with its DB type and default value.
This sets up the column's PHP type, size, precision, scale as well as default value.</p>


<div class="detailHeader" id="typecast-detail">
typecast()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>typecast</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">input value</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">converted value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/CDbColumnSchema.php#L138">yii/db/schema/CDbColumnSchema.php#L138</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">typecast</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">gettype</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)===</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">allowNull</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">===</span><span style="color: #DD0000">'string'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'string'</span><span style="color: #007700">:&nbsp;return&nbsp;(string)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">:&nbsp;return&nbsp;(integer)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'boolean'</span><span style="color: #007700">:&nbsp;return&nbsp;(boolean)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'double'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Converts the input value to the type that this column is of.</p>


