<?php
$this->pageTitle = $this->pageHeading = 'YdXml2Array';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdXml2Array';
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
  <td>class YdXml2Array</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdXml2Array.php">dressing/components/YdXml2Array.php</a></td>
</tr>
</table>

<div id="classDescription">
XML2Array: A class to convert XML to array in PHP
It returns the array which can be converted back to XML using the Array2XML script
It takes an XML string or a DOMDocument object as an input.
<br/><br/>
See Array2XML: http://www.lalit.org/lab/convert-php-array-to-xml-with-attributes
<br/><br/>
Author : Lalit Patel
Website: http://www.lalit.org/lab/convert-xml-to-array-in-php-xml2array
License: Apache License 2.0
         http://www.apache.org/licenses/LICENSE-2.0
Version: 0.1 (07 Dec 2011)
Version: 0.2 (04 Mar 2012)
           Fixed typo 'DomDocument' to 'DOMDocument'
<br/><br/>
Usage:
      $array = XML2Array::createArray($xml);</div>
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
<tr id="createArray">
  <td><?php echo CHtml::link('createArray()', array('/site/doc', 'view' => 'YdXml2Array', '#' => 'createArray-detail')); ?></td>
  <td>Convert an XML to Array</td>
  <td>YdXml2Array</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdXml2Array', '#' => 'init-detail')); ?></td>
  <td>Initialize the root XML node [optional]</td>
  <td>YdXml2Array</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="createArray-detail">
createArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static DOMDocument <b>createArray</b>($input_xml $input_xml)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$input_xml</td>
  <td class="paramTypeCol">$input_xml</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">DOMDocument</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdXml2Array.php#L50">dressing/components/YdXml2Array.php#L50</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;&amp;</span><span style="color: #0000BB">createArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$input_xml</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$xml&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getXMLRoot</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$input_xml</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parsed&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadXML</span><span style="color: #007700">(</span><span style="color: #0000BB">$input_xml</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$parsed</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'[XML2Array]&nbsp;Error&nbsp;parsing&nbsp;the&nbsp;XML&nbsp;string.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$input_xml</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #DD0000">'DOMDocument'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'[XML2Array]&nbsp;The&nbsp;input&nbsp;XML&nbsp;object&nbsp;should&nbsp;be&nbsp;of&nbsp;type:&nbsp;DOMDocument.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$xml&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$xml&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$input_xml</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">documentElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tagName</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">convert</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">documentElement</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$xml&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;clear&nbsp;the&nbsp;xml&nbsp;node&nbsp;in&nbsp;the&nbsp;class&nbsp;for&nbsp;2nd&nbsp;time&nbsp;use.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$array</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Convert an XML to Array</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/components/YdXml2Array.php#L35">dressing/components/YdXml2Array.php#L35</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">(</span><span style="color: #0000BB">$version&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$encoding&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$format_output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$xml&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">(</span><span style="color: #0000BB">$version</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatOutput&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$format_output</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$encoding&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Initialize the root XML node [optional]</p>


