<?php
$this->pageTitle = $this->pageHeading = 'YdStringHelper';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdStringHelper';
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
  <td>class YdStringHelper</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php">dressing/components/YdStringHelper.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdStringHelper</div>
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
<tr id="endsWith">
  <td><?php echo CHtml::link('endsWith()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'endsWith-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="getBetweenString">
  <td><?php echo CHtml::link('getBetweenString()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'getBetweenString-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="getFirstLineWithIcon">
  <td><?php echo CHtml::link('getFirstLineWithIcon()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'getFirstLineWithIcon-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="getTextWithIcon">
  <td><?php echo CHtml::link('getTextWithIcon()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'getTextWithIcon-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="getValidFileName">
  <td><?php echo CHtml::link('getValidFileName()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'getValidFileName-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="humanize">
  <td><?php echo CHtml::link('humanize()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'humanize-detail')); ?></td>
  <td>Humanize</td>
  <td>YdStringHelper</td>
</tr>
<tr id="isSerialized">
  <td><?php echo CHtml::link('isSerialized()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'isSerialized-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="randomWord">
  <td><?php echo CHtml::link('randomWord()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'randomWord-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="serialize">
  <td><?php echo CHtml::link('serialize()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'serialize-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="slug">
  <td><?php echo CHtml::link('slug()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'slug-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="startsWith">
  <td><?php echo CHtml::link('startsWith()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'startsWith-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
<tr id="unserialize">
  <td><?php echo CHtml::link('unserialize()', array('/site/doc', 'view' => 'YdStringHelper', '#' => 'unserialize-detail')); ?></td>
  <td></td>
  <td>YdStringHelper</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="endsWith-detail">
endsWith()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>endsWith</b>($haystack $haystack, $needle $needle)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$haystack</td>
  <td class="paramTypeCol">$haystack</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$needle</td>
  <td class="paramTypeCol">$needle</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L110">dressing/components/YdStringHelper.php#L110</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">endsWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$haystack</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$needle</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getBetweenString-detail">
getBetweenString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getBetweenString</b>($contents $contents, $start $start, $end $end, bool $removeStart=true, bool $removeEnd=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$contents</td>
  <td class="paramTypeCol">$contents</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">$start</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$end</td>
  <td class="paramTypeCol">$end</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$removeStart</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$removeEnd</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L24">dressing/components/YdStringHelper.php#L24</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getBetweenString</span><span style="color: #007700">(</span><span style="color: #0000BB">$contents</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$end</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$removeStart&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$removeEnd&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getFirstLineWithIcon-detail">
getFirstLineWithIcon()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getFirstLineWithIcon</b>($contents $contents, int $limit=50)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$contents</td>
  <td class="paramTypeCol">$contents</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L178">dressing/components/YdStringHelper.php#L178</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getFirstLineWithIcon</span><span style="color: #007700">(</span><span style="color: #0000BB">$contents</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">50</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getTextWithIcon-detail">
getTextWithIcon()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getTextWithIcon</b>($short $short, $long $long)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$short</td>
  <td class="paramTypeCol">$short</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$long</td>
  <td class="paramTypeCol">$long</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L204">dressing/components/YdStringHelper.php#L204</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTextWithIcon</span><span style="color: #007700">(</span><span style="color: #0000BB">$short</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$long</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getValidFileName-detail">
getValidFileName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>getValidFileName</b>($fileName $fileName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fileName</td>
  <td class="paramTypeCol">$fileName</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L63">dressing/components/YdStringHelper.php#L63</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getValidFileName</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="humanize-detail">
humanize()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>humanize</b>($string $string)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$string</td>
  <td class="paramTypeCol">$string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L89">dressing/components/YdStringHelper.php#L89</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">humanize</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p>Humanize
converts "some_string" or "someString" to "Some String"</p>


<div class="detailHeader" id="isSerialized-detail">
isSerialized()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>isSerialized</b>($data $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">$data</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L146">dressing/components/YdStringHelper.php#L146</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">isSerialized</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="randomWord-detail">
randomWord()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>randomWord</b>(int $length=7)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$length</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L213">dressing/components/YdStringHelper.php#L213</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">randomWord</span><span style="color: #007700">(</span><span style="color: #0000BB">$length&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="serialize-detail">
serialize()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>serialize</b>($string $string)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$string</td>
  <td class="paramTypeCol">$string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L124">dressing/components/YdStringHelper.php#L124</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="slug-detail">
slug()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed|string <b>slug</b>($string $string)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$string</td>
  <td class="paramTypeCol">$string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed|string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L74">dressing/components/YdStringHelper.php#L74</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">slug</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="startsWith-detail">
startsWith()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>startsWith</b>($haystack $haystack, $needle $needle)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$haystack</td>
  <td class="paramTypeCol">$haystack</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$needle</td>
  <td class="paramTypeCol">$needle</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L99">dressing/components/YdStringHelper.php#L99</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">startsWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$haystack</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$needle</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="unserialize-detail">
unserialize()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>unserialize</b>($string $string)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$string</td>
  <td class="paramTypeCol">$string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdStringHelper.php#L133">dressing/components/YdStringHelper.php#L133</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>

