<?php
$this->pageTitle = $this->pageHeading = 'YdGifCreator';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdGifCreator';
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
  <td>class YdGifCreator</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdGifCreator.php">dressing/components/YdGifCreator.php</a></td>
</tr>
</table>

<div id="classDescription">
Revision History
<br/><br/>
0.1    First release, mainly replicating GIFEncoder functionality rewritten and optimised for PHP 5,
       usage restructured to be more practical (e.g. removed interal looping as majority of usage
       would require external looping of same arrays/data). Rely on external script to provide image
       data as string as content will almost certainly be dynamically generated. Including optional
       GD features such as resample and image conversion to allow support for JPEG, PNG, BMP, etc
       (depending on GD version).
0.2    Added the ability to position frames. Added imageistruecolor check when resampling as in some
       cases colour pallets were messed up on final image.
0.3    Simplified constructor params, changed RGB values to an array and removed GD on/off setting
       in favour of check for gd_info. Added per-frame based override settings for disposal and
       transparency settings.</div>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'YdGifCreator', '#' => '__construct-detail')); ?></td>
  <td>Constructor - Setup global settings</td>
  <td>YdGifCreator</td>
</tr>
<tr id="addFrame">
  <td><?php echo CHtml::link('addFrame()', array('/site/doc', 'view' => 'YdGifCreator', '#' => 'addFrame-detail')); ?></td>
  <td>Add a frame to the animation</td>
  <td>YdGifCreator</td>
</tr>
<tr id="getAnimation">
  <td><?php echo CHtml::link('getAnimation()', array('/site/doc', 'view' => 'YdGifCreator', '#' => 'getAnimation-detail')); ?></td>
  <td>Get the animation</td>
  <td>YdGifCreator</td>
</tr>
</table>
</div>
<a name="events"></a>

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
public void <b>__construct</b>(int $loops=0, int $disposal=2, int $transparency=array (
  0 => -1,
  1 => -1,
  2 => -1,
), int $width=NULL, int $height=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$loops</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">Number of times the animation is repeated (or 0 for infinite)</td>
</tr>
<tr>
  <td class="paramNameCol">$disposal</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">The global frame disposal method (A value from 0 to 3)</td>
</tr>
<tr>
  <td class="paramNameCol">$transparency</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">The colour to use for transparency (array containing RGB values or -1 to ignore)</td>
</tr>
<tr>
  <td class="paramNameCol">$width</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">Width of the output image (requires GD, leave null to disable)</td>
</tr>
<tr>
  <td class="paramNameCol">$height</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">Height of the output image (requires GD, leave null to disable)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdGifCreator.php#L105">dressing/components/YdGifCreator.php#L105</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$loops&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$disposal&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$transparency&nbsp;</span><span style="color: #007700">=&nbsp;array(-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$width&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$height&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p>Constructor - Setup global settings</p>


<div class="detailHeader" id="addFrame-detail">
addFrame()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addFrame</b>(string $data, int $duration, bool $resize=false, int $xpos=0, int $ypos=0, bool|int $orDisposal=false, array|bool $orTransparency=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The frame data which can be any image supported by GD provided GD is installed</td>
</tr>
<tr>
  <td class="paramNameCol">$duration</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">The duration of the frame</td>
</tr>
<tr>
  <td class="paramNameCol">$resize</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">Resize the frame to the output width/height</td>
</tr>
<tr>
  <td class="paramNameCol">$xpos</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">The horizontal offset for the frame</td>
</tr>
<tr>
  <td class="paramNameCol">$ypos</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">The vertical offset for the frame</td>
</tr>
<tr>
  <td class="paramNameCol">$orDisposal</td>
  <td class="paramTypeCol">bool|int</td>
  <td class="paramDescCol">Override the global disposal setting for this frame</td>
</tr>
<tr>
  <td class="paramNameCol">$orTransparency</td>
  <td class="paramTypeCol">array|bool</td>
  <td class="paramDescCol">Override the global transparency setting for this frame</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdGifCreator.php#L127">dressing/components/YdGifCreator.php#L127</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addFrame</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$duration</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$resize&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$xpos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ypos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$orDisposal&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$orTransparency&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p>Add a frame to the animation</p>


<div class="detailHeader" id="getAnimation-detail">
getAnimation()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getAnimation</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdGifCreator.php#L247">dressing/components/YdGifCreator.php#L247</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAnimation</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p>Get the animation</p>

