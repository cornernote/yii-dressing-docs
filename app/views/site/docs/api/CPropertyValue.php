<?php
$this->pageTitle = $this->pageHeading = 'CPropertyValue';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CPropertyValue';
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
  <td>class CPropertyValue</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CPropertyValue.php">yii\utils\CPropertyValue.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CPropertyValue is a helper class that provides static methods to convert component property values to specific types.
<br/><br/>
CPropertyValue is commonly used in component setter methods to ensure
the new property value is of the specific type.
For example, a boolean-typed property setter method would be as follows,
<pre>
public function setPropertyName($value)
{
    $value=CPropertyValue::ensureBoolean($value);
    // $value is now of boolean type
}
</pre>
<br/><br/>
Properties can be of the following types with specific type conversion rules:
<ul>
<li>string: a boolean value will be converted to 'true' or 'false'.</li>
<li>boolean: string 'true' (case-insensitive) will be converted to true,
           string 'false' (case-insensitive) will be converted to false.</li>
<li>integer</li>
<li>float</li>
<li>array: string starting with '(' and ending with ')' will be considered as
         as an array expression and will be evaluated. Otherwise, an array
         with the value to be ensured is returned.</li>
<li>object</li>
<li>enum: enumerable type, represented by an array of strings.</li>
</ul></div>
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
<tr id="ensureArray">
  <td><?php echo CHtml::link('ensureArray()', array('/site/doc', 'view' => 'CPropertyValue', '#' => 'ensureArray-detail')); ?></td>
  <td>Converts a value to array type. If the value is a string and it is</td>
  <td>CPropertyValue</td>
</tr>
<tr id="ensureBoolean">
  <td><?php echo CHtml::link('ensureBoolean()', array('/site/doc', 'view' => 'CPropertyValue', '#' => 'ensureBoolean-detail')); ?></td>
  <td>Converts a value to boolean type.</td>
  <td>CPropertyValue</td>
</tr>
<tr id="ensureEnum">
  <td><?php echo CHtml::link('ensureEnum()', array('/site/doc', 'view' => 'CPropertyValue', '#' => 'ensureEnum-detail')); ?></td>
  <td>Converts a value to enum type.</td>
  <td>CPropertyValue</td>
</tr>
<tr id="ensureFloat">
  <td><?php echo CHtml::link('ensureFloat()', array('/site/doc', 'view' => 'CPropertyValue', '#' => 'ensureFloat-detail')); ?></td>
  <td>Converts a value to float type.</td>
  <td>CPropertyValue</td>
</tr>
<tr id="ensureInteger">
  <td><?php echo CHtml::link('ensureInteger()', array('/site/doc', 'view' => 'CPropertyValue', '#' => 'ensureInteger-detail')); ?></td>
  <td>Converts a value to integer type.</td>
  <td>CPropertyValue</td>
</tr>
<tr id="ensureObject">
  <td><?php echo CHtml::link('ensureObject()', array('/site/doc', 'view' => 'CPropertyValue', '#' => 'ensureObject-detail')); ?></td>
  <td>Converts a value to object type.</td>
  <td>CPropertyValue</td>
</tr>
<tr id="ensureString">
  <td><?php echo CHtml::link('ensureString()', array('/site/doc', 'view' => 'CPropertyValue', '#' => 'ensureString-detail')); ?></td>
  <td>Converts a value to string type.</td>
  <td>CPropertyValue</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="ensureArray-detail">
ensureArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>ensureArray</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be converted.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CPropertyValue.php#L105">yii\utils\CPropertyValue.php#L105</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ensureArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #DD0000">'('&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #0000BB">$len</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #DD0000">')'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eval(</span><span style="color: #DD0000">'$array=array'</span><span style="color: #007700">.</span><span style="color: #0000BB">$value</span><span style="color: #007700">.</span><span style="color: #DD0000">';'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$array</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">?array(</span><span style="color: #0000BB">$value</span><span style="color: #007700">):array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(array)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a value to array type. If the value is a string and it is
in the form (a,b,c) then an array consisting of each of the elements
will be returned. If the value is a string and it is not in this form
then an array consisting of just the string will be returned. If the value
is not a string then</p>


<div class="detailHeader" id="ensureBoolean-detail">
ensureBoolean()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static boolean <b>ensureBoolean</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be converted.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CPropertyValue.php#L53">yii\utils\CPropertyValue.php#L53</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ensureBoolean</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #DD0000">'true'</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">!=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(boolean)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a value to boolean type.
Note, string 'true' (case-insensitive) will be converted to true,
string 'false' (case-insensitive) will be converted to false.
If a string represents a non-zero number, it will be treated as true.</p>


<div class="detailHeader" id="ensureEnum-detail">
ensureEnum()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>ensureEnum</b>(string $value, string $enumType)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the enumerable value to be checked.</td>
</tr>
<tr>
  <td class="paramNameCol">$enumType</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the enumerable class name (make sure it is included before calling this function).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the valid enumeration value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CPropertyValue.php#L146">yii\utils\CPropertyValue.php#L146</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ensureEnum</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$enumType</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$types</span><span style="color: #007700">[</span><span style="color: #0000BB">$enumType</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">[</span><span style="color: #0000BB">$enumType</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$enumType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$types</span><span style="color: #007700">[</span><span style="color: #0000BB">$enumType</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">hasConstant</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Invalid&nbsp;enumerable&nbsp;value&nbsp;"{value}".&nbsp;Please&nbsp;make&nbsp;sure&nbsp;it&nbsp;is&nbsp;among&nbsp;({enum}).'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{value}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'{enum}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$types</span><span style="color: #007700">[</span><span style="color: #0000BB">$enumType</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getConstants</span><span style="color: #007700">()))));<br />}</span>
</span>
</code></div>
</div>
<p>Converts a value to enum type.
<br/><br/>
This method checks if the value is of the specified enumerable type.
A value is a valid enumerable value if it is equal to the name of a constant
in the specified enumerable type (class).
For more details about enumerable, see <?php echo CHtml::link('CEnumerable', array('/site/doc', 'view' => 'CEnumerable')); ?>.</p>


<div class="detailHeader" id="ensureFloat-detail">
ensureFloat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static float <b>ensureFloat</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be converted.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">float</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CPropertyValue.php#L91">yii\utils\CPropertyValue.php#L91</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ensureFloat</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(float)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a value to float type.</p>


<div class="detailHeader" id="ensureInteger-detail">
ensureInteger()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static integer <b>ensureInteger</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be converted.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CPropertyValue.php#L81">yii\utils\CPropertyValue.php#L81</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ensureInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(integer)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a value to integer type.</p>


<div class="detailHeader" id="ensureObject-detail">
ensureObject()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static object <b>ensureObject</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be converted.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">object</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CPropertyValue.php#L128">yii\utils\CPropertyValue.php#L128</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ensureObject</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(object)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a value to object type.</p>


<div class="detailHeader" id="ensureString-detail">
ensureString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>ensureString</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be converted.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\utils\CPropertyValue.php#L68">yii\utils\CPropertyValue.php#L68</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ensureString</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_bool</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">?</span><span style="color: #DD0000">'true'</span><span style="color: #007700">:</span><span style="color: #DD0000">'false'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(string)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a value to string type.
Note, a boolean value will be converted to 'true' if it is true
and 'false' if it is false.</p>


