<?php
$this->pageTitle = $this->pageHeading = 'CEnumerable';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CEnumerable';
?>
<div id="nav">
</div>

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
  <td>class CEnumerable</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\base\CComponent.php">yii\base\CComponent.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CEnumerable is the base class for all enumerable types.
<br/><br/>
To define an enumerable type, extend CEnumberable and define string constants.
Each constant represents an enumerable value.
The constant name must be the same as the constant value.
For example,
<pre>
class TextAlign extends CEnumerable
{
    const Left='Left';
    const Right='Right';
}
</pre>
Then, one can use the enumerable values such as TextAlign::Left and
TextAlign::Right.</div>
<a name="properties"></a>

<a name="methods"></a>

<a name="events"></a>

