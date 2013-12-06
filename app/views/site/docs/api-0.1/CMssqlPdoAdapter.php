<?php
$this->pageTitle = $this->pageHeading = 'CMssqlPdoAdapter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CMssqlPdoAdapter';
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
  <td><?php echo CHtml::link('system.db.schema.mssql', array('/site/doc', '#' => 'system.db.schema.mssql')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CMssqlPdoAdapter &raquo;
PDO</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/mssql/CMssqlPdoAdapter.php">yii/db/schema/mssql/CMssqlPdoAdapter.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Christophe Boulain &lt;Christophe.Boulain@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
This is an extension of default PDO class for mssql driver only
It provides some missing functionalities of pdo driver</div>
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
<tr class="inherited" id="__construct">
  <td>__construct()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="__sleep">
  <td>__sleep()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="__wakeup">
  <td>__wakeup()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr id="beginTransaction">
  <td><?php echo CHtml::link('beginTransaction()', array('/site/doc', 'view' => 'CMssqlPdoAdapter', '#' => 'beginTransaction-detail')); ?></td>
  <td>Begin a transaction</td>
  <td>CMssqlPdoAdapter</td>
</tr>
<tr id="commit">
  <td><?php echo CHtml::link('commit()', array('/site/doc', 'view' => 'CMssqlPdoAdapter', '#' => 'commit-detail')); ?></td>
  <td>Commit a transaction</td>
  <td>CMssqlPdoAdapter</td>
</tr>
<tr class="inherited" id="errorCode">
  <td>errorCode()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="errorInfo">
  <td>errorInfo()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="exec">
  <td>exec()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="getAttribute">
  <td>getAttribute()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="getAvailableDrivers">
  <td>getAvailableDrivers()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="inTransaction">
  <td>inTransaction()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr id="lastInsertId">
  <td><?php echo CHtml::link('lastInsertId()', array('/site/doc', 'view' => 'CMssqlPdoAdapter', '#' => 'lastInsertId-detail')); ?></td>
  <td>Get the last inserted id value</td>
  <td>CMssqlPdoAdapter</td>
</tr>
<tr class="inherited" id="prepare">
  <td>prepare()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="query">
  <td>query()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="quote">
  <td>quote()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr id="rollBack">
  <td><?php echo CHtml::link('rollBack()', array('/site/doc', 'view' => 'CMssqlPdoAdapter', '#' => 'rollBack-detail')); ?></td>
  <td>Rollback a transaction</td>
  <td>CMssqlPdoAdapter</td>
</tr>
<tr class="inherited" id="setAttribute">
  <td>setAttribute()</td>
  <td></td>
  <td>PDO</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="beginTransaction-detail">
beginTransaction()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>beginTransaction</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/mssql/CMssqlPdoAdapter.php#L39">yii/db/schema/mssql/CMssqlPdoAdapter.php#L39</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beginTransaction&nbsp;</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">'BEGIN&nbsp;TRANSACTION'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Begin a transaction
<br/><br/>
Is is necessary to override pdo's method, as mssql pdo drivers
does not support transaction</p>


<div class="detailHeader" id="commit-detail">
commit()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>commit</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/mssql/CMssqlPdoAdapter.php#L53">yii/db/schema/mssql/CMssqlPdoAdapter.php#L53</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">commit&nbsp;</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">'COMMIT&nbsp;TRANSACTION'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Commit a transaction
<br/><br/>
Is is necessary to override pdo's method, as mssql pdo drivers
does not support transaction</p>


<div class="detailHeader" id="lastInsertId-detail">
lastInsertId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>lastInsertId</b>(string|null $sequence=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sequence</td>
  <td class="paramTypeCol">string|null</td>
  <td class="paramDescCol">sequence name. Defaults to null</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">last inserted id</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/mssql/CMssqlPdoAdapter.php#L26">yii/db/schema/mssql/CMssqlPdoAdapter.php#L26</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">lastInsertId&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">$sequence</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT&nbsp;CAST(COALESCE(SCOPE_IDENTITY(),&nbsp;@@IDENTITY)&nbsp;AS&nbsp;bigint)'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">fetchColumn</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Get the last inserted id value
MSSQL doesn't support sequence, so, argument is ignored</p>


<div class="detailHeader" id="rollBack-detail">
rollBack()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>rollBack</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/db/schema/mssql/CMssqlPdoAdapter.php#L67">yii/db/schema/mssql/CMssqlPdoAdapter.php#L67</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">rollBack&nbsp;</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">'ROLLBACK&nbsp;TRANSACTION'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Rollback a transaction
<br/><br/>
Is is necessary to override pdo's method, ac mssql pdo drivers
does not support transaction</p>


