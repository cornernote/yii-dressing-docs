<?php
$this->pageTitle = $this->pageHeading = 'CChoiceFormat';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CChoiceFormat';
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
  <td><?php echo CHtml::link('system.i18n', array('/site/doc', '#' => 'system.i18n')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CChoiceFormat</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CChoiceFormat.php">yii\i18n\CChoiceFormat.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CChoiceFormat is a helper that chooses an appropriate message based on the specified number value.
The candidate messages are given as a string in the following format:
<pre>
'expr1#message1|expr2#message2|expr3#message3'
</pre>
where each expression should be a valid PHP expression with <code>'n'</code> as the only variable.
For example, <code>'n==1'</code> and <code>'n%10==2 && n>10'</code> are both valid expressions.
The variable <code>'n'</code> will take the given number value, and if an expression evaluates true,
the corresponding message will be returned.
<br/><br/>
For example, given the candidate messages <code>'n==1#one|n==2#two|n>2#others'</code> and
the number value 2, the resulting message will be <code>'two'</code>.
<br/><br/>
For expressions like <code>'n==1'</code>, we can also use a shortcut <code>'1'</code>. So the above example
candidate messages can be simplified as <code>'1#one|2#two|n>2#others'</code>.
<br/><br/>
In case the given number doesn't select any message, the last candidate message
will be returned.
<br/><br/>
The PHP expressions will be evaluated using <?php echo CHtml::link('evaluate', array('/site/doc', 'view' => 'CChoiceFormat', '#' => 'evaluate')); ?>.</div>
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
<tr id="format">
  <td><?php echo CHtml::link('format()', array('/site/doc', 'view' => 'CChoiceFormat', '#' => 'format-detail')); ?></td>
  <td>Formats a message according to the specified number value.</td>
  <td>CChoiceFormat</td>
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
<tr id="evaluate">
  <td><?php echo CHtml::link('evaluate()', array('/site/doc', 'view' => 'CChoiceFormat', '#' => 'evaluate-detail')); ?></td>
  <td>Evaluates a PHP expression with the given number value.</td>
  <td>CChoiceFormat</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="evaluate-detail">
evaluate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static boolean <b>evaluate</b>(string $expression, mixed $n)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$expression</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the PHP expression</td>
</tr>
<tr>
  <td class="paramNameCol">$n</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the number value</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">the expression result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CChoiceFormat.php#L72">yii\i18n\CChoiceFormat.php#L72</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">evaluate</span><span style="color: #007700">(</span><span style="color: #0000BB">$expression</span><span style="color: #007700">,</span><span style="color: #0000BB">$n</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;@eval(</span><span style="color: #DD0000">"return&nbsp;</span><span style="color: #0000BB">$expression</span><span style="color: #DD0000">;"</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Evaluates a PHP expression with the given number value.</p>


<div class="detailHeader" id="format-detail">
format()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>format</b>(string $messages, mixed $number)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$messages</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the candidate messages in the format of 'expr1#message1|expr2#message2|expr3#message3'.
See <?php echo CHtml::link('CChoiceFormat', array('/site/doc', 'view' => 'CChoiceFormat')); ?> for more details.</td>
</tr>
<tr>
  <td class="paramNameCol">$number</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the number value</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the selected message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CChoiceFormat.php#L46">yii\i18n\CChoiceFormat.php#L46</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$messages</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$number</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*([^#]*)\s*#([^\|]*)\|/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$messages</span><span style="color: #007700">.</span><span style="color: #DD0000">'|'</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$n</span><span style="color: #007700">===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$expression</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$expression</span><span style="color: #007700">===(string)(int)</span><span style="color: #0000BB">$expression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$expression</span><span style="color: #007700">==</span><span style="color: #0000BB">$number</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">evaluate</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'n'</span><span style="color: #007700">,</span><span style="color: #DD0000">'$n'</span><span style="color: #007700">,</span><span style="color: #0000BB">$expression</span><span style="color: #007700">),</span><span style="color: #0000BB">$number</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;return&nbsp;the&nbsp;last&nbsp;choice<br /></span><span style="color: #007700">}</span>
</span>
</code></div>
</div>
<p>Formats a message according to the specified number value.</p>


