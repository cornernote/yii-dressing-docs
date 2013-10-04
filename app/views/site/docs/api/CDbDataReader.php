<?php
$this->pageTitle = $this->pageHeading = 'CDbDataReader';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbDataReader';
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
  <td><?php echo CHtml::link('system.db', array('/site/doc', '#' => 'system.db')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CDbDataReader &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>Iterator, Traversable, Countable</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php">yii/db/CDbDataReader.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbDataReader represents a forward-only stream of rows from a query result set.
<br/><br/>
To read the current row of data, call <?php echo CHtml::link('read', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'read')); ?>. The method <?php echo CHtml::link('readAll', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'readAll')); ?>
returns all the rows in a single array.
<br/><br/>
One can also retrieve the rows of data in CDbDataReader by using foreach:
<pre>
foreach($reader as $row)
    // $row represents a row of data
</pre>
Since CDbDataReader is a forward-only stream, you can only traverse it once.
<br/><br/>
It is possible to use a specific mode of data fetching by setting
<?php echo CHtml::link('FetchMode', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'setFetchMode')); ?>. See <a href="http://www.php.net/manual/en/function.PDOStatement-setFetchMode.php">http://www.php.net/manual/en/function.PDOStatement-setFetchMode.php</a>
for more details.</div>
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
<tr id="columnCount">
  <td><?php echo CHtml::link('columnCount', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'columnCount-detail')); ?></td>
  <td>integer</td>
  <td>Returns the number of columns in the result set.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="fetchMode">
  <td><?php echo CHtml::link('fetchMode', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'fetchMode-detail')); ?></td>
  <td>mixed</td>
  <td>Fetch mode.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="isClosed">
  <td><?php echo CHtml::link('isClosed', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'isClosed-detail')); ?></td>
  <td>boolean</td>
  <td>whether the reader is closed or not.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="rowCount">
  <td><?php echo CHtml::link('rowCount', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'rowCount-detail')); ?></td>
  <td>integer</td>
  <td>Returns the number of rows in the result set.</td>
  <td>CDbDataReader</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CDbDataReader', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CDbDataReader</td>
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
<tr id="bindColumn">
  <td><?php echo CHtml::link('bindColumn()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'bindColumn-detail')); ?></td>
  <td>Binds a column to a PHP variable.</td>
  <td>CDbDataReader</td>
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
<tr id="close">
  <td><?php echo CHtml::link('close()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'close-detail')); ?></td>
  <td>Closes the reader.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="count">
  <td><?php echo CHtml::link('count()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'count-detail')); ?></td>
  <td>Returns the number of rows in the result set.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="current">
  <td><?php echo CHtml::link('current()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'current-detail')); ?></td>
  <td>Returns the current row.</td>
  <td>CDbDataReader</td>
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
<tr id="getColumnCount">
  <td><?php echo CHtml::link('getColumnCount()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'getColumnCount-detail')); ?></td>
  <td>Returns the number of columns in the result set.</td>
  <td>CDbDataReader</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getIsClosed">
  <td><?php echo CHtml::link('getIsClosed()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'getIsClosed-detail')); ?></td>
  <td>whether the reader is closed or not.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="getRowCount">
  <td><?php echo CHtml::link('getRowCount()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'getRowCount-detail')); ?></td>
  <td>Returns the number of rows in the result set.</td>
  <td>CDbDataReader</td>
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
<tr id="key">
  <td><?php echo CHtml::link('key()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'key-detail')); ?></td>
  <td>Returns the index of the current row.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="next">
  <td><?php echo CHtml::link('next()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'next-detail')); ?></td>
  <td>Moves the internal pointer to the next row.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="nextResult">
  <td><?php echo CHtml::link('nextResult()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'nextResult-detail')); ?></td>
  <td>Advances the reader to the next result when reading the results of a batch of statements.</td>
  <td>CDbDataReader</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="read">
  <td><?php echo CHtml::link('read()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'read-detail')); ?></td>
  <td>Advances the reader to the next row in a result set.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="readAll">
  <td><?php echo CHtml::link('readAll()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'readAll-detail')); ?></td>
  <td>Reads the whole result set into an array.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="readColumn">
  <td><?php echo CHtml::link('readColumn()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'readColumn-detail')); ?></td>
  <td>Returns a single column from the next row of a result set.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="readObject">
  <td><?php echo CHtml::link('readObject()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'readObject-detail')); ?></td>
  <td>Returns an object populated with the next row of data.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="rewind">
  <td><?php echo CHtml::link('rewind()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'rewind-detail')); ?></td>
  <td>Resets the iterator to the initial state.</td>
  <td>CDbDataReader</td>
</tr>
<tr id="setFetchMode">
  <td><?php echo CHtml::link('setFetchMode()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'setFetchMode-detail')); ?></td>
  <td>Set the default fetch mode for this statement</td>
  <td>CDbDataReader</td>
</tr>
<tr id="valid">
  <td><?php echo CHtml::link('valid()', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'valid-detail')); ?></td>
  <td>Returns whether there is a row of data at current position.</td>
  <td>CDbDataReader</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="columnCount-detail">
columnCount<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getColumnCount</b>', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'getColumnCount')); ?>()</div>

<p>Returns the number of columns in the result set.
Note, even there's no row in the reader, this still gives correct column number.</p>


<div class="detailHeader" id="fetchMode-detail">
fetchMode<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
mixed <b>fetchMode</b>;</div>

<p>Fetch mode.</p>


<div class="detailHeader" id="isClosed-detail">
isClosed<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsClosed</b>', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'getIsClosed')); ?>()</div>

<p>whether the reader is closed or not.</p>


<div class="detailHeader" id="rowCount-detail">
rowCount<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getRowCount</b>', array('/site/doc', 'view' => 'CDbDataReader', '#' => 'getRowCount')); ?>()</div>

<p>Returns the number of rows in the result set.
Note, most DBMS may not give a meaningful count.
In this case, use "SELECT COUNT(*) FROM tableName" to obtain the number of rows.</p>


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
public void <b>__construct</b>(<?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> $command)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$command</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol">the command generating the query result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L48">yii/db/CDbDataReader.php#L48</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">CDbCommand&nbsp;$command</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">=</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPdoStatement</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFetchMode</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_ASSOC</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="bindColumn-detail">
bindColumn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>bindColumn</b>(mixed $column, mixed &$value, integer $dataType=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">Number of the column (1-indexed) or name of the column
in the result set. If using the column name, be aware that the name
should match the case of the column, as returned by the driver.</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">Name of the PHP variable to which the column will be bound.</td>
</tr>
<tr>
  <td class="paramNameCol">$dataType</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">Data type of the parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L65">yii/db/CDbDataReader.php#L65</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">bindColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$dataType</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Binds a column to a PHP variable.
When rows of data are being fetched, the corresponding column value
will be set in the variable. Note, the fetch mode must include PDO::FETCH_BOUND.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDOStatement-bindColumn.php">http://www.php.net/manual/en/function.PDOStatement-bindColumn.php</a></li>
</ul>
</div>

<div class="detailHeader" id="close-detail">
close()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>close</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L142">yii/db/CDbDataReader.php#L142</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">close</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">closeCursor</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_closed</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Closes the reader.
This frees up the resources allocated for executing this SQL statement.
Read attempts after this method call are unpredictable.</p>


<div class="detailHeader" id="count-detail">
count()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>count</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows contained in the result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L175">yii/db/CDbDataReader.php#L175</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRowCount</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the number of rows in the result set.
This method is required by the Countable interface.
Note, most DBMS may not give a meaningful count.
In this case, use "SELECT COUNT(*) FROM tableName" to obtain the number of rows.</p>


<div class="detailHeader" id="current-detail">
current()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>current</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the current row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L221">yii/db/CDbDataReader.php#L221</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">current</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_row</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the current row.
This method is required by the interface Iterator.</p>


<div class="detailHeader" id="getColumnCount-detail">
getColumnCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getColumnCount</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of columns in the result set.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L185">yii/db/CDbDataReader.php#L185</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getColumnCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columnCount</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the number of columns in the result set.
Note, even there's no row in the reader, this still gives correct column number.</p>


<div class="detailHeader" id="getIsClosed-detail">
getIsClosed()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsClosed</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the reader is closed or not.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L152">yii/db/CDbDataReader.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsClosed</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_closed</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>whether the reader is closed or not.</p>


<div class="detailHeader" id="getRowCount-detail">
getRowCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getRowCount</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of rows contained in the result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L163">yii/db/CDbDataReader.php#L163</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRowCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCount</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the number of rows in the result set.
Note, most DBMS may not give a meaningful count.
In this case, use "SELECT COUNT(*) FROM tableName" to obtain the number of rows.</p>


<div class="detailHeader" id="key-detail">
key()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>key</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the index of the current row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L211">yii/db/CDbDataReader.php#L211</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">key</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_index</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the index of the current row.
This method is required by the interface Iterator.</p>


<div class="detailHeader" id="next-detail">
next()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>next</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L230">yii/db/CDbDataReader.php#L230</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">next</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_row</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_index</span><span style="color: #007700">++;<br />}</span>
</span>
</code></div>
</div>
<p>Moves the internal pointer to the next row.
This method is required by the interface Iterator.</p>


<div class="detailHeader" id="nextResult-detail">
nextResult()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>nextResult</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">Returns true on success or false on failure.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L130">yii/db/CDbDataReader.php#L130</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">nextResult</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$result</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nextRowset</span><span style="color: #007700">())!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_index</span><span style="color: #007700">=-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Advances the reader to the next result when reading the results of a batch of statements.
This method is only useful when there are multiple result sets
returned by the query. Not all DBMS support this feature.</p>


<div class="detailHeader" id="read-detail">
read()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array|false <b>read</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array|false</td>
  <td class="paramDescCol">the current row, false if no more row available</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L88">yii/db/CDbDataReader.php#L88</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">read</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Advances the reader to the next row in a result set.</p>


<div class="detailHeader" id="readAll-detail">
readAll()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>readAll</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the result set (each array element represents a row of data).
An empty array will be returned if the result contains no row.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L119">yii/db/CDbDataReader.php#L119</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">readAll</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Reads the whole result set into an array.</p>


<div class="detailHeader" id="readColumn-detail">
readColumn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed|false <b>readColumn</b>(integer $columnIndex)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$columnIndex</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">zero-based column index</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed|false</td>
  <td class="paramDescCol">the column of the current row, false if no more row available</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L98">yii/db/CDbDataReader.php#L98</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">readColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$columnIndex</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$columnIndex</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a single column from the next row of a result set.</p>


<div class="detailHeader" id="readObject-detail">
readObject()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed|false <b>readObject</b>(string $className, array $fields)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">class name of the object to be created and populated</td>
</tr>
<tr>
  <td class="paramNameCol">$fields</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Elements of this array are passed to the constructor</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed|false</td>
  <td class="paramDescCol">the populated object, false if no more row of data available</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L109">yii/db/CDbDataReader.php#L109</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">readObject</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$fields</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchObject</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$fields</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns an object populated with the next row of data.</p>


<div class="detailHeader" id="rewind-detail">
rewind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>rewind</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L195">yii/db/CDbDataReader.php#L195</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">rewind</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_index</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_row</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_index</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbDataReader&nbsp;cannot&nbsp;rewind.&nbsp;It&nbsp;is&nbsp;a&nbsp;forward-only&nbsp;reader.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Resets the iterator to the initial state.
This method is required by the interface Iterator.</p>


<div class="detailHeader" id="setFetchMode-detail">
setFetchMode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setFetchMode</b>(mixed $mode)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$mode</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">fetch mode</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L78">yii/db/CDbDataReader.php#L78</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setFetchMode</span><span style="color: #007700">(</span><span style="color: #0000BB">$mode</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_statement</span><span style="color: #007700">,</span><span style="color: #DD0000">'setFetchMode'</span><span style="color: #007700">),</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Set the default fetch mode for this statement</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.PDOStatement-setFetchMode.php">http://www.php.net/manual/en/function.PDOStatement-setFetchMode.php</a></li>
</ul>
</div>

<div class="detailHeader" id="valid-detail">
valid()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>valid</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether there is a row of data at current position.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/CDbDataReader.php#L241">yii/db/CDbDataReader.php#L241</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">valid</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_row</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether there is a row of data at current position.
This method is required by the interface Iterator.</p>


