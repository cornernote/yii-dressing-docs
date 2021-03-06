<?php
$this->pageTitle = $this->pageHeading = 'CNumberFormatter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CNumberFormatter';
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
  <td>class CNumberFormatter &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CNumberFormatter.php">yii/i18n/CNumberFormatter.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Wei Zhuo &lt;weizhuo[at]gmail[dot]com&gt;, Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CNumberFormatter provides number localization functionalities.
<br/><br/>
CNumberFormatter formats a number (integer or float) and outputs a string
based on the specified format. A CNumberFormatter instance is associated with a locale,
and thus generates the string representation of the number in a locale-dependent fashion.
<br/><br/>
CNumberFormatter currently supports currency format, percentage format, decimal format,
and custom format. The first three formats are specified in the locale data, while the custom
format allows you to enter an arbitrary format string.
<br/><br/>
A format string may consist of the following special characters:
<ul>
<li>dot (.): the decimal point. It will be replaced with the localized decimal point.</li>
<li>comma (,): the grouping separator. It will be replaced with the localized grouping separator.</li>
<li>zero (0): required digit. This specifies the places where a digit must appear (will pad 0 if not).</li>
<li>hash (#): optional digit. This is mainly used to specify the location of decimal point and grouping separators.</li>
<li>currency (¤): the currency placeholder. It will be replaced with the localized currency symbol.</li>
<li>percentage (%): the percentage mark. If appearing, the number will be multiplied by 100 before being formatted.</li>
<li>permillage (‰): the permillage mark. If appearing, the number will be multiplied by 1000 before being formatted.</li>
<li>semicolon (;): the character separating positive and negative number sub-patterns.</li>
</ul>
<br/><br/>
Anything surrounding the pattern (or sub-patterns) will be kept.
<br/><br/>
The followings are some examples:
<pre>
Pattern &quot;#,##0.00&quot; will format 12345.678 as &quot;12,345.68&quot;.
Pattern &quot;#,#,#0.00&quot; will format 12345.6 as &quot;1,2,3,45.60&quot;.
</pre>
Note, in the first example, the number is rounded first before applying the formatting.
And in the second example, the pattern specifies two grouping sizes.
<br/><br/>
CNumberFormatter attempts to implement number formatting according to
the <a href="http://www.unicode.org/reports/tr35/">Unicode Technical Standard #35</a>.
The following features are NOT implemented:
<ul>
<li>significant digit</li>
<li>scientific format</li>
<li>arbitrary literal characters</li>
<li>arbitrary padding</li>
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
<tr class="inherited" id="__call">
  <td><?php echo CHtml::link('__call()', array('/site/doc', 'view' => 'CComponent', '#' => '__call-detail')); ?></td>
  <td>Calls the named method which is not a class method.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CNumberFormatter', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CNumberFormatter</td>
</tr>
<tr class="inherited" id="__get">
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CComponent', '#' => '__get-detail')); ?></td>
  <td>Returns a property value, an event handler list or a behavior based on its name.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CComponent', '#' => '__isset-detail')); ?></td>
  <td>Checks if a property value is null.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__set">
  <td><?php echo CHtml::link('__set()', array('/site/doc', 'view' => 'CComponent', '#' => '__set-detail')); ?></td>
  <td>Sets value of a component property.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="__unset">
  <td><?php echo CHtml::link('__unset()', array('/site/doc', 'view' => 'CComponent', '#' => '__unset-detail')); ?></td>
  <td>Sets a component property to be null.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="asa">
  <td><?php echo CHtml::link('asa()', array('/site/doc', 'view' => 'CComponent', '#' => 'asa-detail')); ?></td>
  <td>Returns the named behavior object.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attachBehavior">
  <td><?php echo CHtml::link('attachBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'attachBehavior-detail')); ?></td>
  <td>Attaches a behavior to this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attachBehaviors">
  <td><?php echo CHtml::link('attachBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'attachBehaviors-detail')); ?></td>
  <td>Attaches a list of behaviors to the component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attachEventHandler">
  <td><?php echo CHtml::link('attachEventHandler()', array('/site/doc', 'view' => 'CComponent', '#' => 'attachEventHandler-detail')); ?></td>
  <td>Attaches an event handler to an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="canGetProperty">
  <td><?php echo CHtml::link('canGetProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'canGetProperty-detail')); ?></td>
  <td>Determines whether a property can be read.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="canSetProperty">
  <td><?php echo CHtml::link('canSetProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'canSetProperty-detail')); ?></td>
  <td>Determines whether a property can be set.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="detachBehavior">
  <td><?php echo CHtml::link('detachBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'detachBehavior-detail')); ?></td>
  <td>Detaches a behavior from the component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="detachBehaviors">
  <td><?php echo CHtml::link('detachBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'detachBehaviors-detail')); ?></td>
  <td>Detaches all behaviors from the component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="detachEventHandler">
  <td><?php echo CHtml::link('detachEventHandler()', array('/site/doc', 'view' => 'CComponent', '#' => 'detachEventHandler-detail')); ?></td>
  <td>Detaches an existing event handler.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="disableBehavior">
  <td><?php echo CHtml::link('disableBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'disableBehavior-detail')); ?></td>
  <td>Disables an attached behavior.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="disableBehaviors">
  <td><?php echo CHtml::link('disableBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'disableBehaviors-detail')); ?></td>
  <td>Disables all behaviors attached to this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="enableBehavior">
  <td><?php echo CHtml::link('enableBehavior()', array('/site/doc', 'view' => 'CComponent', '#' => 'enableBehavior-detail')); ?></td>
  <td>Enables an attached behavior.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="enableBehaviors">
  <td><?php echo CHtml::link('enableBehaviors()', array('/site/doc', 'view' => 'CComponent', '#' => 'enableBehaviors-detail')); ?></td>
  <td>Enables all behaviors attached to this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="format">
  <td><?php echo CHtml::link('format()', array('/site/doc', 'view' => 'CNumberFormatter', '#' => 'format-detail')); ?></td>
  <td>Formats a number based on the specified pattern.</td>
  <td>CNumberFormatter</td>
</tr>
<tr id="formatCurrency">
  <td><?php echo CHtml::link('formatCurrency()', array('/site/doc', 'view' => 'CNumberFormatter', '#' => 'formatCurrency-detail')); ?></td>
  <td>Formats a number using the currency format defined in the locale.</td>
  <td>CNumberFormatter</td>
</tr>
<tr id="formatDecimal">
  <td><?php echo CHtml::link('formatDecimal()', array('/site/doc', 'view' => 'CNumberFormatter', '#' => 'formatDecimal-detail')); ?></td>
  <td>Formats a number using the decimal format defined in the locale.</td>
  <td>CNumberFormatter</td>
</tr>
<tr id="formatPercentage">
  <td><?php echo CHtml::link('formatPercentage()', array('/site/doc', 'view' => 'CNumberFormatter', '#' => 'formatPercentage-detail')); ?></td>
  <td>Formats a number using the percentage format defined in the locale.</td>
  <td>CNumberFormatter</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="hasEvent">
  <td><?php echo CHtml::link('hasEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasEvent-detail')); ?></td>
  <td>Determines whether an event is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="hasEventHandler">
  <td><?php echo CHtml::link('hasEventHandler()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasEventHandler-detail')); ?></td>
  <td>Checks whether the named event has attached handlers.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="hasProperty">
  <td><?php echo CHtml::link('hasProperty()', array('/site/doc', 'view' => 'CComponent', '#' => 'hasProperty-detail')); ?></td>
  <td>Determines whether a property is defined.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
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
<tr id="formatNumber">
  <td><?php echo CHtml::link('formatNumber()', array('/site/doc', 'view' => 'CNumberFormatter', '#' => 'formatNumber-detail')); ?></td>
  <td>Formats a number based on a format.</td>
  <td>CNumberFormatter</td>
</tr>
<tr id="parseFormat">
  <td><?php echo CHtml::link('parseFormat()', array('/site/doc', 'view' => 'CNumberFormatter', '#' => 'parseFormat-detail')); ?></td>
  <td>Parses a given string pattern.</td>
  <td>CNumberFormatter</td>
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
public void <b>__construct</b>(mixed $locale)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$locale</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">locale ID (string) or CLocale instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CNumberFormatter.php#L69">yii/i18n/CNumberFormatter.php#L69</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$locale</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$locale</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">=</span><span style="color: #0000BB">CLocale</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$locale</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">=</span><span style="color: #0000BB">$locale</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="format-detail">
format()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>format</b>(string $pattern, mixed $value, string $currency=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">format pattern</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the number to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">$currency</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">3-letter ISO 4217 code. For example, the code "USD" represents the US Dollar and "EUR" represents the Euro currency.
The currency placeholder in the pattern will be replaced with the currency symbol.
If null, no replacement will be done.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatting result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CNumberFormatter.php#L90">yii/i18n/CNumberFormatter.php#L90</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$currency</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parseFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatNumber</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$currency</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$symbol</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCurrencySymbol</span><span style="color: #007700">(</span><span style="color: #0000BB">$currency</span><span style="color: #007700">))===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$symbol</span><span style="color: #007700">=</span><span style="color: #0000BB">$currency</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'¤'</span><span style="color: #007700">,</span><span style="color: #0000BB">$symbol</span><span style="color: #007700">,</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats a number based on the specified pattern.
Note, if the format contains '%', the number will be multiplied by 100 first.
If the format contains '‰', the number will be multiplied by 1000.
If the format contains currency placeholder, it will be replaced by
the specified localized currency symbol.</p>


<div class="detailHeader" id="formatCurrency-detail">
formatCurrency()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatCurrency</b>(mixed $value, string $currency)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the number to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">$currency</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">3-letter ISO 4217 code. For example, the code "USD" represents the US Dollar and "EUR" represents the Euro currency.
The currency placeholder in the pattern will be replaced with the currency symbol.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatting result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CNumberFormatter.php#L108">yii/i18n/CNumberFormatter.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatCurrency</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$currency</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCurrencyFormat</span><span style="color: #007700">(),</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$currency</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats a number using the currency format defined in the locale.</p>


<div class="detailHeader" id="formatDecimal-detail">
formatDecimal()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatDecimal</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the number to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatting result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CNumberFormatter.php#L130">yii/i18n/CNumberFormatter.php#L130</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDecimal</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDecimalFormat</span><span style="color: #007700">(),</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats a number using the decimal format defined in the locale.</p>


<div class="detailHeader" id="formatNumber-detail">
formatNumber()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatNumber</b>(array $format, mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$format</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">format with the following structure:
<pre>
array(
	// number of required digits after the decimal point,
	// will be padded with 0 if not enough digits,
	// -1 means we should drop the decimal point
	'decimalDigits'=&gt;2,
	// maximum number of digits after the decimal point,
	// additional digits will be truncated.
	'maxDecimalDigits'=&gt;3,
	// number of required digits before the decimal point,
	// will be padded with 0 if not enough digits
	'integerDigits'=&gt;1,
	// the primary grouping size, 0 means no grouping
	'groupSize1'=&gt;3,
	// the secondary grouping size, 0 means no secondary grouping
	'groupSize2'=&gt;0,
	'positivePrefix'=&gt;'+',  // prefix to positive number
	'positiveSuffix'=&gt;'',   // suffix to positive number
	'negativePrefix'=&gt;'(',  // prefix to negative number
	'negativeSuffix'=&gt;')',  // suffix to negative number
	'multiplier'=&gt;1,        // 100 for percent, 1000 for per mille
);
</pre></td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the number to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatted result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CNumberFormatter.php#L165">yii/i18n/CNumberFormatter.php#L165</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatNumber</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$negative</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">*</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'multiplier'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxDecimalDigits'</span><span style="color: #007700">]&gt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">number_format</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxDecimalDigits'</span><span style="color: #007700">],</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$value</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$integer</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$integer</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalDigits'</span><span style="color: #007700">]&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">=</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">,</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalDigits'</span><span style="color: #007700">],</span><span style="color: #DD0000">'0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalDigits'</span><span style="color: #007700">]&lt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$decimal_temp</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">--)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]!==</span><span style="color: #DD0000">'0'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$decimal_temp</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$decimal_temp</span><span style="color: #007700">=</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">].</span><span style="color: #0000BB">$decimal_temp</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">=</span><span style="color: #0000BB">$decimal_temp</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNumberSymbol</span><span style="color: #007700">(</span><span style="color: #DD0000">'decimal'</span><span style="color: #007700">).</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$integer</span><span style="color: #007700">=</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$integer</span><span style="color: #007700">,</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'integerDigits'</span><span style="color: #007700">],</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize1'</span><span style="color: #007700">]&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$integer</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize1'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$str1</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$integer</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,-</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize1'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$str2</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$integer</span><span style="color: #007700">,-</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize1'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">=</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize2'</span><span style="color: #007700">]&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">?</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize2'</span><span style="color: #007700">]:</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize1'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$str1</span><span style="color: #007700">=</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$str1</span><span style="color: #007700">,(int)((</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str1</span><span style="color: #007700">)+</span><span style="color: #0000BB">$size</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">)/</span><span style="color: #0000BB">$size</span><span style="color: #007700">)*</span><span style="color: #0000BB">$size</span><span style="color: #007700">,</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$integer</span><span style="color: #007700">=</span><span style="color: #0000BB">ltrim</span><span style="color: #007700">(</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNumberSymbol</span><span style="color: #007700">(</span><span style="color: #DD0000">'group'</span><span style="color: #007700">),</span><span style="color: #0000BB">str_split</span><span style="color: #007700">(</span><span style="color: #0000BB">$str1</span><span style="color: #007700">,</span><span style="color: #0000BB">$size</span><span style="color: #007700">))).</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNumberSymbol</span><span style="color: #007700">(</span><span style="color: #DD0000">'group'</span><span style="color: #007700">).</span><span style="color: #0000BB">$str2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$negative</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$number</span><span style="color: #007700">=</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'negativePrefix'</span><span style="color: #007700">].</span><span style="color: #0000BB">$integer</span><span style="color: #007700">.</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">.</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'negativeSuffix'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$number</span><span style="color: #007700">=</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'positivePrefix'</span><span style="color: #007700">].</span><span style="color: #0000BB">$integer</span><span style="color: #007700">.</span><span style="color: #0000BB">$decimal</span><span style="color: #007700">.</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'positiveSuffix'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'%'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNumberSymbol</span><span style="color: #007700">(</span><span style="color: #DD0000">'percentSign'</span><span style="color: #007700">),</span><span style="color: #DD0000">'‰'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNumberSymbol</span><span style="color: #007700">(</span><span style="color: #DD0000">'perMille'</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Formats a number based on a format.
This is the method that does actual number formatting.</p>


<div class="detailHeader" id="formatPercentage-detail">
formatPercentage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatPercentage</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the number to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatting result.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CNumberFormatter.php#L120">yii/i18n/CNumberFormatter.php#L120</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatPercentage</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPercentFormat</span><span style="color: #007700">(),</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats a number using the percentage format defined in the locale.
Note, if the percentage format contains '%', the number will be multiplied by 100 first.
If the percentage format contains '‰', the number will be multiplied by 1000.</p>


<div class="detailHeader" id="parseFormat-detail">
parseFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>parseFormat</b>(string $pattern)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the pattern to be parsed</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the parsed pattern</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CNumberFormatter.php#L219">yii/i18n/CNumberFormatter.php#L219</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">parseFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_formats</span><span style="color: #007700">[</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_formats</span><span style="color: #007700">[</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">=array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;out&nbsp;prefix&nbsp;and&nbsp;suffix&nbsp;for&nbsp;positive&nbsp;and&nbsp;negative&nbsp;patterns<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$patterns</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">';'</span><span style="color: #007700">,</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'positivePrefix'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'positiveSuffix'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'negativePrefix'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'negativeSuffix'</span><span style="color: #007700">]=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^(.*?)[#,\.0]+(.*?)$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'positivePrefix'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'positiveSuffix'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^(.*?)[#,\.0]+(.*?)$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;with&nbsp;a&nbsp;negative&nbsp;pattern<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'negativePrefix'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'negativeSuffix'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'negativePrefix'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNumberSymbol</span><span style="color: #007700">(</span><span style="color: #DD0000">'minusSign'</span><span style="color: #007700">).</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'positivePrefix'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'negativeSuffix'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'positiveSuffix'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pat</span><span style="color: #007700">=</span><span style="color: #0000BB">$patterns</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;out&nbsp;multiplier<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pat</span><span style="color: #007700">,</span><span style="color: #DD0000">'%'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'multiplier'</span><span style="color: #007700">]=</span><span style="color: #0000BB">100</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pat</span><span style="color: #007700">,</span><span style="color: #DD0000">'‰'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'multiplier'</span><span style="color: #007700">]=</span><span style="color: #0000BB">1000</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'multiplier'</span><span style="color: #007700">]=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;out&nbsp;things&nbsp;about&nbsp;decimal&nbsp;part<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pat</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos2</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pat</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">))&gt;</span><span style="color: #0000BB">$pos</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalDigits'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$pos2</span><span style="color: #007700">-</span><span style="color: #0000BB">$pos</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalDigits'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos3</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pat</span><span style="color: #007700">,</span><span style="color: #DD0000">'#'</span><span style="color: #007700">))&gt;=</span><span style="color: #0000BB">$pos2</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxDecimalDigits'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$pos3</span><span style="color: #007700">-</span><span style="color: #0000BB">$pos</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxDecimalDigits'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalDigits'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pat</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pat</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;no&nbsp;decimal&nbsp;part<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalDigits'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxDecimalDigits'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;out&nbsp;things&nbsp;about&nbsp;integer&nbsp;part<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$p</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$pat</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'integerDigits'</span><span style="color: #007700">]=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">)-</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'integerDigits'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;out&nbsp;group&nbsp;sizes.&nbsp;some&nbsp;patterns&nbsp;may&nbsp;have&nbsp;two&nbsp;different&nbsp;group&nbsp;sizes<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$p</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">$pat</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pat</span><span style="color: #007700">,</span><span style="color: #DD0000">','</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize1'</span><span style="color: #007700">]=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">)-</span><span style="color: #0000BB">$pos</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos2</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$p</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">),</span><span style="color: #DD0000">','</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize2'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$pos</span><span style="color: #007700">-</span><span style="color: #0000BB">$pos2</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize2'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize1'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$format</span><span style="color: #007700">[</span><span style="color: #DD0000">'groupSize2'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_formats</span><span style="color: #007700">[</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">]=</span><span style="color: #0000BB">$format</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Parses a given string pattern.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('formatNumber', array('/site/doc', 'view' => 'CNumberFormatter', '#' => 'formatNumber')); ?></li>
</ul>
</div>

