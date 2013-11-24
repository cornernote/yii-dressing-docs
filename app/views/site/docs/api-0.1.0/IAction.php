<?php
$this->pageTitle = $this->pageHeading = 'IAction';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IAction';
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
  <td>interface IAction</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?>, <?php echo CHtml::link('CCaptchaAction', array('/site/doc', 'view' => 'CCaptchaAction')); ?>, <?php echo CHtml::link('CInlineAction', array('/site/doc', 'view' => 'CInlineAction')); ?>, <?php echo CHtml::link('CViewAction', array('/site/doc', 'view' => 'CViewAction')); ?>, <?php echo CHtml::link('CWebServiceAction', array('/site/doc', 'view' => 'CWebServiceAction')); ?>, <?php echo CHtml::link('TbExtendedTooltipAction', array('/site/doc', 'view' => 'TbExtendedTooltipAction')); ?>, <?php echo CHtml::link('TbSortableAction', array('/site/doc', 'view' => 'TbSortableAction')); ?>, <?php echo CHtml::link('TbToggleAction', array('/site/doc', 'view' => 'TbToggleAction')); ?>, <?php echo CHtml::link('YdGeneratePropertiesAction', array('/site/doc', 'view' => 'YdGeneratePropertiesAction')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php">yii/base/interfaces.php</a></td>
</tr>
</table>

<div id="classDescription">
IAction is the interface that must be implemented by controller actions.</div>
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
<tr id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'IAction', '#' => 'getController-detail')); ?></td>
  <td>Returns the controller instance</td>
  <td>IAction</td>
</tr>
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'IAction', '#' => 'getId-detail')); ?></td>
  <td>Returns id of the action</td>
  <td>IAction</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="getController-detail">
getController()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public <?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> <b>getController</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td class="paramDescCol">the controller instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L182">yii/base/interfaces.php#L182</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getController</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getId-detail">
getId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public string <b>getId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">id of the action</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L178">yii/base/interfaces.php#L178</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p></p>


