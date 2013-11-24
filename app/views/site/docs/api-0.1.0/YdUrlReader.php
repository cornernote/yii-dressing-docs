<?php
$this->pageTitle = $this->pageHeading = 'YdUrlReader';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdUrlReader';
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
  <td>class YdUrlReader</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdUrlReader.php">dressing/components/YdUrlReader.php</a></td>
</tr>
</table>

<div id="classDescription">
Class YdUrlReader</div>
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
<tr id="getUrl">
  <td><?php echo CHtml::link('getUrl()', array('/site/doc', 'view' => 'YdUrlReader', '#' => 'getUrl-detail')); ?></td>
  <td></td>
  <td>YdUrlReader</td>
</tr>
<tr id="postUrl">
  <td><?php echo CHtml::link('postUrl()', array('/site/doc', 'view' => 'YdUrlReader', '#' => 'postUrl-detail')); ?></td>
  <td></td>
  <td>YdUrlReader</td>
</tr>
<tr id="preparePostFields">
  <td><?php echo CHtml::link('preparePostFields()', array('/site/doc', 'view' => 'YdUrlReader', '#' => 'preparePostFields-detail')); ?></td>
  <td></td>
  <td>YdUrlReader</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="getUrl-detail">
getUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool|mixed <b>getUrl</b>($url $url, null $referer=NULL, bool $follow=true, bool $return=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">$url</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$referer</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$follow</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$return</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool|mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdUrlReader.php#L16">dressing/components/YdUrlReader.php#L16</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$referer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$follow&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$return&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="postUrl-detail">
postUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>postUrl</b>($url $url, $params $params)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">$url</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">$params</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdUrlReader.php#L52">dressing/components/YdUrlReader.php#L52</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">postUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="preparePostFields-detail">
preparePostFields()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>preparePostFields</b>($array $array)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$array</td>
  <td class="paramTypeCol">$array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdUrlReader.php#L86">dressing/components/YdUrlReader.php#L86</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">preparePostFields</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>

