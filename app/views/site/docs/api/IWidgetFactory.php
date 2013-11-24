<?php
$this->pageTitle = $this->pageHeading = 'IWidgetFactory';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IWidgetFactory';
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
  <td><?php echo CHtml::link('system.web', array('/site/doc', '#' => 'system.web')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>interface IWidgetFactory</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CWidgetFactory', array('/site/doc', 'view' => 'CWidgetFactory')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
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
IWidgetFactory is the interface that must be implemented by a widget factory class.
<br/><br/>
When calling <?php echo CHtml::link('CBaseController::createWidget', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget')); ?>, if a widget factory is available,
it will be used for creating the requested widget.</div>
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
<tr id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'IWidgetFactory', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a new widget based on the given class name and initial properties.</td>
  <td>IWidgetFactory</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="createWidget-detail">
createWidget()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public <?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> <b>createWidget</b>(<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> $owner, string $className, array $properties=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$owner</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td class="paramDescCol">the owner of the new widget</td>
</tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the class name of the widget. This can also be a path alias (e.g. system.web.widgets.COutputCache)</td>
</tr>
<tr>
  <td class="paramNameCol">$properties</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the initial property values (name=>value) of the widget.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
  <td class="paramDescCol">the newly created widget whose properties have been initialized with the given values.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\interfaces.php#L548">yii\base\interfaces.php#L548</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$owner</span><span style="color: #007700">,</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=array());</span>
</span>
</code></div>
</div>
<p>Creates a new widget based on the given class name and initial properties.</p>


