<?php
$this->pageTitle = $this->pageHeading = 'CFileHelper';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CFileHelper';
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
  <td><?php echo CHtml::link('system.utils', array('/site/doc', '#' => 'system.utils')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CFileHelper</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdFileHelper', array('/site/doc', 'view' => 'YdFileHelper')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php">yii\utils\CFileHelper.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CFileHelper provides a set of helper methods for common file system operations.</div>
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
<tr id="copyDirectory">
  <td><?php echo CHtml::link('copyDirectory()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'copyDirectory-detail')); ?></td>
  <td>Copies a directory recursively as another.</td>
  <td>CFileHelper</td>
</tr>
<tr id="findFiles">
  <td><?php echo CHtml::link('findFiles()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'findFiles-detail')); ?></td>
  <td>Returns the files found under the specified directory and subdirectories.</td>
  <td>CFileHelper</td>
</tr>
<tr id="getExtension">
  <td><?php echo CHtml::link('getExtension()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getExtension-detail')); ?></td>
  <td>Returns the extension name of a file path.</td>
  <td>CFileHelper</td>
</tr>
<tr id="getMimeType">
  <td><?php echo CHtml::link('getMimeType()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getMimeType-detail')); ?></td>
  <td>Determines the MIME type of the specified file.</td>
  <td>CFileHelper</td>
</tr>
<tr id="getMimeTypeByExtension">
  <td><?php echo CHtml::link('getMimeTypeByExtension()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getMimeTypeByExtension-detail')); ?></td>
  <td>Determines the MIME type based on the extension name of the specified file.</td>
  <td>CFileHelper</td>
</tr>
<tr id="removeDirectory">
  <td><?php echo CHtml::link('removeDirectory()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'removeDirectory-detail')); ?></td>
  <td>Removes a directory recursively.</td>
  <td>CFileHelper</td>
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
<tr id="copyDirectoryRecursive">
  <td><?php echo CHtml::link('copyDirectoryRecursive()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'copyDirectoryRecursive-detail')); ?></td>
  <td>Copies a directory.</td>
  <td>CFileHelper</td>
</tr>
<tr id="findFilesRecursive">
  <td><?php echo CHtml::link('findFilesRecursive()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'findFilesRecursive-detail')); ?></td>
  <td>Returns the files found under the specified directory and subdirectories.</td>
  <td>CFileHelper</td>
</tr>
<tr id="validatePath">
  <td><?php echo CHtml::link('validatePath()', array('/site/doc', 'view' => 'CFileHelper', '#' => 'validatePath-detail')); ?></td>
  <td>Validates a file or directory.</td>
  <td>CFileHelper</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="copyDirectory-detail">
copyDirectory()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>copyDirectory</b>(string $src, string $dst, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$src</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the source directory</td>
</tr>
<tr>
  <td class="paramNameCol">$dst</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the destination directory</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">options for directory copy. Valid options are:
<ul>
<li>fileTypes: array, list of file name suffix (without dot). Only files with these suffixes will be copied.</li>
<li>exclude: array, list of directory and file exclusions. Each exclusion can be either a name or a path.
If a file or directory name or path matches the exclusion, it will not be copied. For example, an exclusion of
'.svn' will exclude all files and directories whose name is '.svn'. And an exclusion of '/a/b' will exclude
file or directory '$src/a/b'. Note, that '/' should be used as separator regardless of the value of the DIRECTORY_SEPARATOR constant.
</li>
<li>level: integer, recursion depth, default=-1.
Level -1 means copying all directories and files under the directory;
Level 0 means copying only the files DIRECTLY under the directory;
level N means copying those directories that are within N levels.
</li>
<li>newDirMode - the permission to be set for newly copied directories (defaults to 0777);</li>
<li>newFileMode - the permission to be set for newly copied files (defaults to the current environment setting).</li>
</ul></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php#L54">yii\utils\CFileHelper.php#L54</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">copyDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$dst</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$level</span><span style="color: #007700">=-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dst</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dst</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">copyDirectoryRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$dst</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">,</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Copies a directory recursively as another.
If the destination directory does not exist, it will be created recursively.</p>


<div class="detailHeader" id="copyDirectoryRecursive-detail">
copyDirectoryRecursive()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static void <b>copyDirectoryRecursive</b>(string $src, string $dst, string $base, array $fileTypes, array $exclude, integer $level, array $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$src</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the source directory</td>
</tr>
<tr>
  <td class="paramNameCol">$dst</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the destination directory</td>
</tr>
<tr>
  <td class="paramNameCol">$base</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the path relative to the original source directory</td>
</tr>
<tr>
  <td class="paramNameCol">$fileTypes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of file name suffix (without dot). Only files with these suffixes will be copied.</td>
</tr>
<tr>
  <td class="paramNameCol">$exclude</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of directory and file exclusions. Each exclusion can be either a name or a path.
If a file or directory name or path matches the exclusion, it will not be copied. For example, an exclusion of
'.svn' will exclude all files and directories whose name is '.svn'. And an exclusion of '/a/b' will exclude
file or directory '$src/a/b'. Note, that '/' should be used as separator regardless of the value of the DIRECTORY_SEPARATOR constant.</td>
</tr>
<tr>
  <td class="paramNameCol">$level</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">recursion depth. It defaults to -1.
Level -1 means copying all directories and files under the directory;
Level 0 means copying only the files DIRECTLY under the directory;
level N means copying those directories that are within N levels.</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional options. The following options are supported:
newDirMode - the permission to be set for newly copied directories (defaults to 0777);
newFileMode - the permission to be set for newly copied files (defaults to the current environment setting).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php#L136">yii\utils\CFileHelper.php#L136</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">copyDirectoryRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$dst</span><span style="color: #007700">,</span><span style="color: #0000BB">$base</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">,</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dst</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dst</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$folder</span><span style="color: #007700">=</span><span style="color: #0000BB">opendir</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;while((</span><span style="color: #0000BB">$file</span><span style="color: #007700">=</span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$folder</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$file</span><span style="color: #007700">===</span><span style="color: #DD0000">'.'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">===</span><span style="color: #DD0000">'..'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$path</span><span style="color: #007700">=</span><span style="color: #0000BB">$src</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isFile</span><span style="color: #007700">=</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">validatePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$base</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$isFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">,</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$isFile</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">copy</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$dst</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'newFileMode'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #0000BB">$dst</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'newFileMode'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$level</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">copyDirectoryRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$dst</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$base</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">,</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">closedir</span><span style="color: #007700">(</span><span style="color: #0000BB">$folder</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Copies a directory.
This method is mainly used by <?php echo CHtml::link('copyDirectory', array('/site/doc', 'view' => 'CFileHelper', '#' => 'copyDirectory')); ?>.</p>


<div class="detailHeader" id="findFiles-detail">
findFiles()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>findFiles</b>(string $dir, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dir</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory under which the files will be looked for</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">options for file searching. Valid options are:
<ul>
<li>fileTypes: array, list of file name suffix (without dot). Only files with these suffixes will be returned.</li>
<li>exclude: array, list of directory and file exclusions. Each exclusion can be either a name or a path.
If a file or directory name or path matches the exclusion, it will not be copied. For example, an exclusion of
'.svn' will exclude all files and directories whose name is '.svn'. And an exclusion of '/a/b' will exclude
file or directory '$src/a/b'. Note, that '/' should be used as separator regardless of the value of the DIRECTORY_SEPARATOR constant.
</li>
<li>level: integer, recursion depth, default=-1.
Level -1 means searching for all directories and files under the directory;
Level 0 means searching for only the files DIRECTLY under the directory;
level N means searching for those directories that are within N levels.
</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">files found under the directory. The file list is sorted.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php#L106">yii\utils\CFileHelper.php#L106</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">findFiles</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$level</span><span style="color: #007700">=-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">findFilesRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">,</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$list</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the files found under the specified directory and subdirectories.</p>


<div class="detailHeader" id="findFilesRecursive-detail">
findFilesRecursive()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static array <b>findFilesRecursive</b>(string $dir, string $base, array $fileTypes, array $exclude, integer $level)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dir</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the source directory</td>
</tr>
<tr>
  <td class="paramNameCol">$base</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the path relative to the original source directory</td>
</tr>
<tr>
  <td class="paramNameCol">$fileTypes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of file name suffix (without dot). Only files with these suffixes will be returned.</td>
</tr>
<tr>
  <td class="paramNameCol">$exclude</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of directory and file exclusions. Each exclusion can be either a name or a path.
If a file or directory name or path matches the exclusion, it will not be copied. For example, an exclusion of
'.svn' will exclude all files and directories whose name is '.svn'. And an exclusion of '/a/b' will exclude
file or directory '$src/a/b'. Note, that '/' should be used as separator regardless of the value of the DIRECTORY_SEPARATOR constant.</td>
</tr>
<tr>
  <td class="paramNameCol">$level</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">recursion depth. It defaults to -1.
Level -1 means searching for all directories and files under the directory;
Level 0 means searching for only the files DIRECTLY under the directory;
level N means searching for those directories that are within N levels.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">files found under the directory.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php#L179">yii\utils\CFileHelper.php#L179</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">findFilesRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">,</span><span style="color: #0000BB">$base</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">,</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handle</span><span style="color: #007700">=</span><span style="color: #0000BB">opendir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;while((</span><span style="color: #0000BB">$file</span><span style="color: #007700">=</span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$file</span><span style="color: #007700">===</span><span style="color: #DD0000">'.'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">===</span><span style="color: #DD0000">'..'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$path</span><span style="color: #007700">=</span><span style="color: #0000BB">$dir</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isFile</span><span style="color: #007700">=</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">validatePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$base</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$isFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">,</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$isFile</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$path</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$level</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$list</span><span style="color: #007700">,</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">findFilesRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$base</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">,</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">closedir</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$list</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the files found under the specified directory and subdirectories.
This method is mainly used by <?php echo CHtml::link('findFiles', array('/site/doc', 'view' => 'CFileHelper', '#' => 'findFiles')); ?>.</p>


<div class="detailHeader" id="getExtension-detail">
getExtension()
<span class="detailHeaderTag">
method
(available since v1.1.2)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getExtension</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the file path</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the extension name without the dot character.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php#L27">yii\utils\CFileHelper.php#L27</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getExtension</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">pathinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">PATHINFO_EXTENSION</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the extension name of a file path.
For example, the path "path/to/something.php" would return "php".</p>


<div class="detailHeader" id="getMimeType-detail">
getMimeType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getMimeType</b>(string $file, string $magicFile=NULL, boolean $checkExtension=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the file name.</td>
</tr>
<tr>
  <td class="paramNameCol">$magicFile</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of a magic database file, usually something like /path/to/magic.mime.
This will be passed as the second parameter to <a href="http://php.net/manual/en/function.finfo-open.php">finfo_open</a>.
Magic file format described in <a href="http://linux.die.net/man/5/magic">man 5 magic</a>, note that this file does not
contain a standard PHP array as you might suppose. Specified magic file will be used only when fileinfo
PHP extension is available. This parameter has been available since version 1.1.3.</td>
</tr>
<tr>
  <td class="paramNameCol">$checkExtension</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to check the file extension in case the MIME type cannot be determined
based on finfo and mime_content_type. Defaults to true. This parameter has been available since version 1.1.4.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the MIME type. Null is returned if the MIME type cannot be determined.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php#L246">yii\utils\CFileHelper.php#L246</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getMimeType</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$checkExtension</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'finfo_open'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'FILEINFO_MIME_TYPE'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">FILEINFO_MIME_TYPE&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">FILEINFO_MIME</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$info</span><span style="color: #007700">=</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">finfo_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">finfo_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">,</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$info&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$result</span><span style="color: #007700">=</span><span style="color: #0000BB">finfo_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$info</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'mime_content_type'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$result</span><span style="color: #007700">=</span><span style="color: #0000BB">mime_content_type</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$checkExtension&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getMimeTypeByExtension</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Determines the MIME type of the specified file.
This method will attempt the following approaches in order:
<ol>
<li>finfo</li>
<li>mime_content_type</li>
<li><?php echo CHtml::link('getMimeTypeByExtension', array('/site/doc', 'view' => 'CFileHelper', '#' => 'getMimeTypeByExtension')); ?>, when $checkExtension is set true.</li>
</ol></p>


<div class="detailHeader" id="getMimeTypeByExtension-detail">
getMimeTypeByExtension()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getMimeTypeByExtension</b>(string $file, string $magicFile=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the file name.</td>
</tr>
<tr>
  <td class="paramNameCol">$magicFile</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the path of the file that contains all available MIME type information.
If this is not set, the default 'system.utils.mimeTypes' file will be used.
This parameter has been available since version 1.1.3.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the MIME type. Null is returned if the MIME type cannot be determined.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php#L272">yii\utils\CFileHelper.php#L272</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getMimeTypeByExtension</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$extensions</span><span style="color: #007700">,</span><span style="color: #0000BB">$customExtensions</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$extensions</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$extensions</span><span style="color: #007700">=require(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'system.utils.mimeTypes'</span><span style="color: #007700">).</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$customExtensions</span><span style="color: #007700">[</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$customExtensions</span><span style="color: #007700">[</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">]=require(</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$ext</span><span style="color: #007700">=</span><span style="color: #0000BB">pathinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">PATHINFO_EXTENSION</span><span style="color: #007700">))!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ext</span><span style="color: #007700">=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$ext</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$extensions</span><span style="color: #007700">[</span><span style="color: #0000BB">$ext</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$extensions</span><span style="color: #007700">[</span><span style="color: #0000BB">$ext</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$customExtensions</span><span style="color: #007700">[</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">][</span><span style="color: #0000BB">$ext</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$customExtensions</span><span style="color: #007700">[</span><span style="color: #0000BB">$magicFile</span><span style="color: #007700">][</span><span style="color: #0000BB">$ext</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Determines the MIME type based on the extension name of the specified file.
This method will use a local map between extension name and MIME type.</p>


<div class="detailHeader" id="removeDirectory-detail">
removeDirectory()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>removeDirectory</b>(string $directory)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$directory</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">to be deleted recursively.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php#L71">yii\utils\CFileHelper.php#L71</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">removeDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">=</span><span style="color: #0000BB">glob</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'{,.}*'</span><span style="color: #007700">,</span><span style="color: #0000BB">GLOB_MARK&nbsp;</span><span style="color: #007700">|&nbsp;</span><span style="color: #0000BB">GLOB_BRACE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">)==</span><span style="color: #DD0000">'.'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">)==</span><span style="color: #DD0000">'..'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">,-</span><span style="color: #0000BB">1</span><span style="color: #007700">)==</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">removeDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">rmdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Removes a directory recursively.</p>


<div class="detailHeader" id="validatePath-detail">
validatePath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static boolean <b>validatePath</b>(string $base, string $file, boolean $isFile, array $fileTypes, array $exclude)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$base</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the path relative to the original source directory</td>
</tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the file or directory name</td>
</tr>
<tr>
  <td class="paramNameCol">$isFile</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is a file</td>
</tr>
<tr>
  <td class="paramNameCol">$fileTypes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of valid file name suffixes (without dot).</td>
</tr>
<tr>
  <td class="paramNameCol">$exclude</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of directory and file exclusions. Each exclusion can be either a name or a path.
If a file or directory name or path matches the exclusion, false will be returned. For example, an exclusion of
'.svn' will return false for all files and directories whose name is '.svn'. And an exclusion of '/a/b' will return false for
file or directory '$src/a/b'. Note, that '/' should be used as separator regardless of the value of the DIRECTORY_SEPARATOR constant.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the file or directory is valid</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CFileHelper.php#L213">yii\utils\CFileHelper.php#L213</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">validatePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$base</span><span style="color: #007700">,</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$isFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">,</span><span style="color: #0000BB">$exclude</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$exclude&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$file</span><span style="color: #007700">===</span><span style="color: #0000BB">$e&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$base</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$e</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$isFile&nbsp;</span><span style="color: #007700">||&nbsp;empty(</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">pathinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">PATHINFO_EXTENSION</span><span style="color: #007700">))!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$fileTypes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Validates a file or directory.</p>


