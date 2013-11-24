<?php
$this->pageTitle = $this->pageHeading = 'YdFileHelper';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdFileHelper';
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
  <td>class YdFileHelper &raquo;
<?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdFileHelper.php">dressing/components/YdFileHelper.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdFileHelper</div>
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
<tr class="inherited" id="copyDirectory">
  <td><?php echo CHtml::link('copyDirectory()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'copyDirectory-detail')); ?></td>
  <td>Copies a directory recursively as another.</td>
  <td><?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
</tr>
<tr id="createDirectory">
  <td><?php echo CHtml::link('createDirectory()', array('/site/doc', 'view' => 'YdFileHelper', '#' => 'createDirectory-detail')); ?></td>
  <td></td>
  <td>YdFileHelper</td>
</tr>
<tr class="inherited" id="findFiles">
  <td><?php echo CHtml::link('findFiles()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'findFiles-detail')); ?></td>
  <td>Returns the files found under the specified directory and subdirectories.</td>
  <td><?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
</tr>
<tr class="inherited" id="getExtension">
  <td><?php echo CHtml::link('getExtension()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getExtension-detail')); ?></td>
  <td>Returns the extension name of a file path.</td>
  <td><?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
</tr>
<tr class="inherited" id="getMimeType">
  <td><?php echo CHtml::link('getMimeType()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getMimeType-detail')); ?></td>
  <td>Determines the MIME type of the specified file.</td>
  <td><?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
</tr>
<tr class="inherited" id="getMimeTypeByExtension">
  <td><?php echo CHtml::link('getMimeTypeByExtension()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getMimeTypeByExtension-detail')); ?></td>
  <td>Determines the MIME type based on the extension name of the specified file.</td>
  <td><?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
</tr>
<tr id="removeDirectory">
  <td><?php echo CHtml::link('removeDirectory()', array('/site/doc', 'view' => 'YdFileHelper', '#' => 'removeDirectory-detail')); ?></td>
  <td></td>
  <td>YdFileHelper</td>
</tr>
<tr id="zip">
  <td><?php echo CHtml::link('zip()', array('/site/doc', 'view' => 'YdFileHelper', '#' => 'zip-detail')); ?></td>
  <td></td>
  <td>YdFileHelper</td>
</tr>
</table>
</div>
<div class="summary docMethod">
<h2>Protected Methods</h2>

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
<tr class="inherited" id="copyDirectoryRecursive">
  <td><?php echo CHtml::link('copyDirectoryRecursive()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'copyDirectoryRecursive-detail')); ?></td>
  <td>Copies a directory.</td>
  <td><?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
</tr>
<tr class="inherited" id="findFilesRecursive">
  <td><?php echo CHtml::link('findFilesRecursive()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'findFilesRecursive-detail')); ?></td>
  <td>Returns the files found under the specified directory and subdirectories.</td>
  <td><?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
</tr>
<tr class="inherited" id="validatePath">
  <td><?php echo CHtml::link('validatePath()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'validatePath-detail')); ?></td>
  <td>Validates a file or directory.</td>
  <td><?php echo CHtml::link('CFileHelper', array('/site/doc', 'view' => 'CFileHelper')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="createDirectory-detail">
createDirectory()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>createDirectory</b>(string $dir, int $mode=493, bool $recursive=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dir</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$mode</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$recursive</td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdFileHelper.php#L23">dressing/components/YdFileHelper.php#L23</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">createDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$mode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0755</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recursive&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$dir</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$created&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$mode</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recursive</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$created</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Error&nbsp;occurred&nbsp;when&nbsp;trying&nbsp;to&nbsp;create&nbsp;directory&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$dir</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$dir</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="removeDirectory-detail">
removeDirectory()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>removeDirectory</b>($dir $dir, $removeSelf $removeSelf=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dir</td>
  <td class="paramTypeCol">$dir</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$removeSelf</td>
  <td class="paramTypeCol">$removeSelf</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdFileHelper.php#L39">dressing/components/YdFileHelper.php#L39</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">removeDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$removeSelf&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$objects&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">scandir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$objects&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$object&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #DD0000">"."&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$object&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #DD0000">".."</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">filetype</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"/"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #DD0000">"dir"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">removeDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"/"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"/"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">reset</span><span style="color: #007700">(</span><span style="color: #0000BB">$objects</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$removeSelf</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">rmdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="zip-detail">
zip()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool <b>zip</b>($source $source, $destination $destination)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$source</td>
  <td class="paramTypeCol">$source</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$destination</td>
  <td class="paramTypeCol">$destination</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdFileHelper.php#L62">dressing/components/YdFileHelper.php#L62</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">zip</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$destination</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">extension_loaded</span><span style="color: #007700">(</span><span style="color: #DD0000">'zip'</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$zip&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #0000BB">$destination</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ZIPARCHIVE</span><span style="color: #007700">::</span><span style="color: #0000BB">CREATE</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$source&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$files&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">RecursiveIteratorIterator</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">RecursiveDirectoryIterator</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">RecursiveIteratorIterator</span><span style="color: #007700">::</span><span style="color: #0000BB">SELF_FIRST</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$files&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addEmptyDir</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$source&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFromString</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$source&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFromString</span><span style="color: #007700">(</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


