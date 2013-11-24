<?php
$this->pageTitle = $this->pageHeading = 'IUserIdentity';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IUserIdentity';
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
  <td><?php echo CHtml::link('system.base', array('/site/doc', '#' => 'system.base')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>interface IUserIdentity</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CBaseUserIdentity', array('/site/doc', 'view' => 'CBaseUserIdentity')); ?>, <?php echo CHtml::link('CUserIdentity', array('/site/doc', 'view' => 'CUserIdentity')); ?>, <?php echo CHtml::link('YdUserIdentity', array('/site/doc', 'view' => 'YdUserIdentity')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php">yii\base\interfaces.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
IUserIdentity interface is implemented by a user identity class.
<br/><br/>
An identity represents a way to authenticate a user and retrieve
information needed to uniquely identity the user. It is normally
used with the <?php echo CHtml::link('user application component', array('/site/doc', 'view' => 'CWebApplication', '#' => 'user')); ?>.</div>
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
<tr id="authenticate">
  <td><?php echo CHtml::link('authenticate()', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'authenticate-detail')); ?></td>
  <td>Authenticates the user.</td>
  <td>IUserIdentity</td>
</tr>
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'getId-detail')); ?></td>
  <td>Returns a value that uniquely represents the identity.</td>
  <td>IUserIdentity</td>
</tr>
<tr id="getIsAuthenticated">
  <td><?php echo CHtml::link('getIsAuthenticated()', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'getIsAuthenticated-detail')); ?></td>
  <td>Returns a value indicating whether the identity is authenticated.</td>
  <td>IUserIdentity</td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'getName-detail')); ?></td>
  <td>Returns the display name for the identity (e.g. username).</td>
  <td>IUserIdentity</td>
</tr>
<tr id="getPersistentStates">
  <td><?php echo CHtml::link('getPersistentStates()', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'getPersistentStates-detail')); ?></td>
  <td>Returns the additional identity information that needs to be persistent during the user session.</td>
  <td>IUserIdentity</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="authenticate-detail">
authenticate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>authenticate</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether authentication succeeds.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L255">yii\base\interfaces.php#L255</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">authenticate</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Authenticates the user.
The information needed to authenticate the user
are usually provided in the constructor.</p>


<div class="detailHeader" id="getId-detail">
getId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public mixed <b>getId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">a value that uniquely represents the identity (e.g. primary key value).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L265">yii\base\interfaces.php#L265</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Returns a value that uniquely represents the identity.</p>


<div class="detailHeader" id="getIsAuthenticated-detail">
getIsAuthenticated()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>getIsAuthenticated</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the identity is valid.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L260">yii\base\interfaces.php#L260</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsAuthenticated</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the identity is authenticated.</p>


<div class="detailHeader" id="getName-detail">
getName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public string <b>getName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the display name for the identity.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L270">yii\base\interfaces.php#L270</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Returns the display name for the identity (e.g. username).</p>


<div class="detailHeader" id="getPersistentStates-detail">
getPersistentStates()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public array <b>getPersistentStates</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional identity information that needs to be persistent during the user session (excluding <?php echo CHtml::link('id', array('/site/doc', 'view' => 'IUserIdentity', '#' => 'id')); ?>).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L275">yii\base\interfaces.php#L275</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPersistentStates</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Returns the additional identity information that needs to be persistent during the user session.</p>


