<?php
$this->pageTitle = $this->pageHeading = 'IWebUser';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IWebUser';
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
  <td>interface IWebUser</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?>, <?php echo CHtml::link('YdWebUser', array('/site/doc', 'view' => 'YdWebUser')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\interfaces.php">yii\base\interfaces.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
IWebUser interface is implemented by a <?php echo CHtml::link('user application component', array('/site/doc', 'view' => 'CWebApplication', '#' => 'user')); ?>.
<br/><br/>
A user application component represents the identity information
for the current user.</div>
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
<tr id="checkAccess">
  <td><?php echo CHtml::link('checkAccess()', array('/site/doc', 'view' => 'IWebUser', '#' => 'checkAccess-detail')); ?></td>
  <td>Performs access check for this user.</td>
  <td>IWebUser</td>
</tr>
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'IWebUser', '#' => 'getId-detail')); ?></td>
  <td>Returns a value that uniquely represents the identity.</td>
  <td>IWebUser</td>
</tr>
<tr id="getIsGuest">
  <td><?php echo CHtml::link('getIsGuest()', array('/site/doc', 'view' => 'IWebUser', '#' => 'getIsGuest-detail')); ?></td>
  <td>Returns a value indicating whether the user is a guest (not authenticated).</td>
  <td>IWebUser</td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'IWebUser', '#' => 'getName-detail')); ?></td>
  <td>Returns the display name for the identity (e.g. username).</td>
  <td>IWebUser</td>
</tr>
<tr id="loginRequired">
  <td><?php echo CHtml::link('loginRequired()', array('/site/doc', 'view' => 'IWebUser', '#' => 'loginRequired-detail')); ?></td>
  <td>Redirects the user browser to the login page.</td>
  <td>IWebUser</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="checkAccess-detail">
checkAccess()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>checkAccess</b>(string $operation, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$operation</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the operation that need access check.</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">name-value pairs that would be passed to business rules associated
with the tasks and roles assigned to the user.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the operations can be performed by this user.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\interfaces.php#L313">yii\base\interfaces.php#L313</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #0000BB">$operation</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array());</span>
</span>
</code></div>
</div>
<p>Performs access check for this user.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\interfaces.php#L295">yii\base\interfaces.php#L295</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Returns a value that uniquely represents the identity.</p>


<div class="detailHeader" id="getIsGuest-detail">
getIsGuest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>getIsGuest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the user is a guest (not authenticated)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\interfaces.php#L305">yii\base\interfaces.php#L305</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsGuest</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the user is a guest (not authenticated).</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\interfaces.php#L300">yii\base\interfaces.php#L300</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Returns the display name for the identity (e.g. username).</p>


<div class="detailHeader" id="loginRequired-detail">
loginRequired()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public void <b>loginRequired</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\interfaces.php#L323">yii\base\interfaces.php#L323</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">loginRequired</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Redirects the user browser to the login page.
Before the redirection, the current URL (if it's not an AJAX url) will be
kept in returnUrl so that the user browser may be redirected back
to the current page after successful login. Make sure you set loginUrl
so that the user browser can be redirected to the specified login URL after
calling this method.
After calling this method, the current request processing will be terminated.</p>


