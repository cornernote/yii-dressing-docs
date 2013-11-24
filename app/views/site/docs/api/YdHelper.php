<?php
$this->pageTitle = $this->pageHeading = 'YdHelper';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdHelper';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdHelper</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdHelper.php">dressing\components\YdHelper.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
</div>
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
<tr id="getSubmittedField">
  <td><?php echo CHtml::link('getSubmittedField()', array('/site/doc', 'view' => 'YdHelper', '#' => 'getSubmittedField-detail')); ?></td>
  <td>Gets a submitted field</td>
  <td>YdHelper</td>
</tr>
<tr id="isFrontPage">
  <td><?php echo CHtml::link('isFrontPage()', array('/site/doc', 'view' => 'YdHelper', '#' => 'isFrontPage-detail')); ?></td>
  <td></td>
  <td>YdHelper</td>
</tr>
<tr id="isLinuxServer">
  <td><?php echo CHtml::link('isLinuxServer()', array('/site/doc', 'view' => 'YdHelper', '#' => 'isLinuxServer-detail')); ?></td>
  <td></td>
  <td>YdHelper</td>
</tr>
<tr id="isMobileBrowser">
  <td><?php echo CHtml::link('isMobileBrowser()', array('/site/doc', 'view' => 'YdHelper', '#' => 'isMobileBrowser-detail')); ?></td>
  <td></td>
  <td>YdHelper</td>
</tr>
<tr id="isWindowsServer">
  <td><?php echo CHtml::link('isWindowsServer()', array('/site/doc', 'view' => 'YdHelper', '#' => 'isWindowsServer-detail')); ?></td>
  <td></td>
  <td>YdHelper</td>
</tr>
<tr id="tableExists">
  <td><?php echo CHtml::link('tableExists()', array('/site/doc', 'view' => 'YdHelper', '#' => 'tableExists-detail')); ?></td>
  <td></td>
  <td>YdHelper</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="getSubmittedField-detail">
getSubmittedField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static null <b>getSubmittedField</b>($field $field, null $model=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$field</td>
  <td class="paramTypeCol">$field</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdHelper.php#L23">dressing\components\YdHelper.php#L23</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getSubmittedField</span><span style="color: #007700">(</span><span style="color: #0000BB">$field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p>Gets a submitted field
used to be named getSubmittedField()</p>


<div class="detailHeader" id="isFrontPage-detail">
isFrontPage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>isFrontPage</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdHelper.php#L45">dressing\components\YdHelper.php#L45</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">isFrontPage</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isLinuxServer-detail">
isLinuxServer()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>isLinuxServer</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdHelper.php#L85">dressing\components\YdHelper.php#L85</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">isLinuxServer</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isMobileBrowser-detail">
isMobileBrowser()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>isMobileBrowser</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdHelper.php#L67">dressing\components\YdHelper.php#L67</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">isMobileBrowser</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isWindowsServer-detail">
isWindowsServer()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>isWindowsServer</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdHelper.php#L76">dressing\components\YdHelper.php#L76</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">isWindowsServer</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="tableExists-detail">
tableExists()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>tableExists</b>($table $table, <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> $db=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$table</td>
  <td class="paramTypeCol">$table</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$db</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdHelper.php#L56">dressing\components\YdHelper.php#L56</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">tableExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$db&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>

