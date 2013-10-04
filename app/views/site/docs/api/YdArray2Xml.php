<?php
$this->pageTitle = $this->pageHeading = 'YdArray2Xml';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdArray2Xml';
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
  <td><?php echo CHtml::link('dressing.helpers', array('/site/doc', '#' => 'dressing.helpers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdArray2Xml</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdArray2Xml.php">dressing/helpers/YdArray2Xml.php</a></td>
</tr>
</table>

<div id="classDescription">
Array2XML: A class to convert array in PHP to XML
It also takes into account attributes names unlike SimpleXML in PHP
It returns the XML in form of DOMDocument class for further manipulation.
It throws exception if the tag name or attribute name has illegal chars.
<br/><br/>
Author : Lalit Patel
Website: http://www.lalit.org/lab/convert-php-array-to-xml-with-attributes
License: Apache License 2.0
         http://www.apache.org/licenses/LICENSE-2.0
Version: 0.1 (10 July 2011)
Version: 0.2 (16 August 2011)
         - replaced htmlentities() with htmlspecialchars() (Thanks to Liel Dulev)
         - fixed a edge case where root node has a false/null/0 value. (Thanks to Liel Dulev)
Version: 0.3 (22 August 2011)
         - fixed tag sanitize regex which didn't allow tagnames with single character.
Version: 0.4 (18 September 2011)
         - Added support for CDATA section using @cdata instead of @value.
Version: 0.5 (07 December 2011)
         - Changed logic to check numeric array indices not starting from 0.
Version: 0.6 (04 March 2012)
         - Code now doesn't @cdata to be placed in an empty array
Version: 0.7 (24 March 2012)
         - Reverted to version 0.5
Version: 0.8 (02 May 2012)
         - Removed htmlspecialchars() before adding to text node or attributes.
<br/><br/>
Usage:
      $xml = Array2XML::createXML('root_node_name', $php_array);
      echo $xml->saveXML();</div>
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
<tr id="createXML">
  <td><?php echo CHtml::link('createXML()', array('/site/doc', 'view' => 'YdArray2Xml', '#' => 'createXML-detail')); ?></td>
  <td>Convert an Array to XML</td>
  <td>YdArray2Xml</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdArray2Xml', '#' => 'init-detail')); ?></td>
  <td>Initialize the root XML node [optional]</td>
  <td>YdArray2Xml</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="createXML-detail">
createXML()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static DomDocument <b>createXML</b>(string $node_name, array $arr=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$node_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">- name of the root node to be converted</td>
</tr>
<tr>
  <td class="paramNameCol">$arr</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">- aray to be converterd</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">DomDocument</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdArray2Xml.php#L61">dressing/helpers/YdArray2Xml.php#L61</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;&amp;</span><span style="color: #0000BB">createXML</span><span style="color: #007700">(</span><span style="color: #0000BB">$node_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$arr&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$xml&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getXMLRoot</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">convert</span><span style="color: #007700">(</span><span style="color: #0000BB">$node_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$arr</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$xml&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;clear&nbsp;the&nbsp;xml&nbsp;node&nbsp;in&nbsp;the&nbsp;class&nbsp;for&nbsp;2nd&nbsp;time&nbsp;use.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$xml</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Convert an Array to XML</p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>init</b>($version $version='1.0', $encoding $encoding='UTF-8', $format_output $format_output=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$version</td>
  <td class="paramTypeCol">$version</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$encoding</td>
  <td class="paramTypeCol">$encoding</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$format_output</td>
  <td class="paramTypeCol">$format_output</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdArray2Xml.php#L48">dressing/helpers/YdArray2Xml.php#L48</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">(</span><span style="color: #0000BB">$version&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$encoding&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$format_output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$xml&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">DomDocument</span><span style="color: #007700">(</span><span style="color: #0000BB">$version</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatOutput&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$format_output</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$encoding&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Initialize the root XML node [optional]</p>


