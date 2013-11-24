<?php
$this->pageTitle = $this->pageHeading = 'IViewRenderer';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IViewRenderer';
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
  <td>interface IViewRenderer</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CPradoViewRenderer', array('/site/doc', 'view' => 'CPradoViewRenderer')); ?>, <?php echo CHtml::link('CViewRenderer', array('/site/doc', 'view' => 'CViewRenderer')); ?></td>
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
IViewRenderer interface is implemented by a view renderer class.
<br/><br/>
A view renderer is <?php echo CHtml::link('viewRenderer', array('/site/doc', 'view' => 'CWebApplication', '#' => 'viewRenderer')); ?>
application component whose wants to replace the default view rendering logic
implemented in <?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?>.</div>
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
<tr id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'IViewRenderer', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td>IViewRenderer</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="renderFile-detail">
renderFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public mixed <b>renderFile</b>(<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> $context, string $file, mixed $data, boolean $return)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$context</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td class="paramDescCol">the controller or widget who is rendering the view file.</td>
</tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the view file path</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the data to be passed to the view</td>
</tr>
<tr>
  <td class="paramNameCol">$return</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the rendering result should be returned</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the rendering result, or null if the rendering result is not needed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L232">yii\base\interfaces.php#L232</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$context</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$return</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Renders a view file.</p>


