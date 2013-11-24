<?php
$this->pageTitle = $this->pageHeading = 'CMssqlSqlsrvPdoAdapter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CMssqlSqlsrvPdoAdapter';
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
  <td>class CMssqlSqlsrvPdoAdapter &raquo;
PDO</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.13</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlSqlsrvPdoAdapter.php">yii\db\schema\mssql\CMssqlSqlsrvPdoAdapter.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Timur Ruziev &lt;resurtm@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
This is an extension of default PDO class for MSSQL SQLSRV driver only.
It provides workaround of the improperly implemented functionalities of PDO SQLSRV driver.</div>
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
<tr class="inherited" id="beginTransaction">
  <td>beginTransaction()</td>
  <td></td>
  <td>PDO</td>
</tr>
<tr class="inherited" id="commit">
  <td>commit()</td>
  <td></td>
  <td>PDO</td>
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
  <td><?php echo CHtml::link('lastInsertId()', array('/site/doc', 'view' => 'CMssqlSqlsrvPdoAdapter', '#' => 'lastInsertId-detail')); ?></td>
  <td>Returns last inserted ID value.</td>
  <td>CMssqlSqlsrvPdoAdapter</td>
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
<tr class="inherited" id="rollBack">
  <td>rollBack()</td>
  <td></td>
  <td>PDO</td>
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
  <td class="paramDescCol">the sequence name. Defaults to null.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">last inserted ID value.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\db\schema\mssql\CMssqlSqlsrvPdoAdapter.php#L30">yii\db\schema\mssql\CMssqlSqlsrvPdoAdapter.php#L30</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">lastInsertId</span><span style="color: #007700">(</span><span style="color: #0000BB">$sequence</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$sequence</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">lastInsertId</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">lastInsertId</span><span style="color: #007700">(</span><span style="color: #0000BB">$sequence</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns last inserted ID value.
SQLSRV driver supports PDO::lastInsertId() with one peculiarity: when $sequence's value is null or empty
string it returns empty string. But when parameter is not specified at all it's working as expected
and returns actual last inserted ID (like other PDO drivers).</p>


