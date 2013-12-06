<?php
$this->pageTitle = $this->pageHeading = 'CDateFormatter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDateFormatter';
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
  <td>class CDateFormatter &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php">yii/i18n/CDateFormatter.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Wei Zhuo &lt;weizhuo[at]gmail[dot]com&gt;, Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDateFormatter provides date/time localization functionalities.
<br/><br/>
CDateFormatter allows you to format dates and times in a locale-sensitive manner.
Patterns are interpreted in the locale that the CDateFormatter instance
is associated with. For example, month names and weekday names may vary
under different locales, which yields different formatting results.
The patterns that CDateFormatter recognizes are as defined in
<a href="http://www.unicode.org/reports/tr35/tr35-dates.html#Date_Format_Patterns">CLDR</a>.
<br/><br/>
CDateFormatter supports predefined patterns as well as customized ones:
<ul>
<li>The method <?php echo CHtml::link('formatDateTime()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatDateTime')); ?> formats date or time or both using
  predefined patterns which include 'full', 'long', 'medium' (default) and 'short'.</li>
<li>The method <?php echo CHtml::link('format()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'format')); ?> formats datetime using the specified pattern.
  See <a href="http://www.unicode.org/reports/tr35/#Date_Format_Patterns">http://www.unicode.org/reports/tr35/#Date_Format_Patterns</a> for
  details about the recognized pattern characters.</li>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CDateFormatter', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CDateFormatter</td>
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
  <td><?php echo CHtml::link('format()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'format-detail')); ?></td>
  <td>Formats a date according to a customized pattern.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatDateTime">
  <td><?php echo CHtml::link('formatDateTime()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatDateTime-detail')); ?></td>
  <td>Formats a date according to a predefined pattern.</td>
  <td>CDateFormatter</td>
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
<tr id="formatDay">
  <td><?php echo CHtml::link('formatDay()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatDay-detail')); ?></td>
  <td>Get the day of the month.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatDayInMonth">
  <td><?php echo CHtml::link('formatDayInMonth()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatDayInMonth-detail')); ?></td>
  <td>Get day of week in the month, e.g. 2nd Wed in July.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatDayInWeek">
  <td><?php echo CHtml::link('formatDayInWeek()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatDayInWeek-detail')); ?></td>
  <td>Get the day of the week.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatDayInYear">
  <td><?php echo CHtml::link('formatDayInYear()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatDayInYear-detail')); ?></td>
  <td>Get the day in the year, e.g. [1-366]</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatEra">
  <td><?php echo CHtml::link('formatEra()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatEra-detail')); ?></td>
  <td>Get the era. i.e. in gregorian, year > 0 is AD, else BC.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatHour12">
  <td><?php echo CHtml::link('formatHour12()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatHour12-detail')); ?></td>
  <td>Get the hours in 12 hour format, i.e., [1-12]</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatHour24">
  <td><?php echo CHtml::link('formatHour24()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatHour24-detail')); ?></td>
  <td>Get the hours in 24 hour format, i.e. [0-23].</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatHourInDay">
  <td><?php echo CHtml::link('formatHourInDay()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatHourInDay-detail')); ?></td>
  <td>Get the hours [1-24].</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatHourInPeriod">
  <td><?php echo CHtml::link('formatHourInPeriod()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatHourInPeriod-detail')); ?></td>
  <td>Get the hours in AM/PM format, e.g [0-11]</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatMinutes">
  <td><?php echo CHtml::link('formatMinutes()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatMinutes-detail')); ?></td>
  <td>Get the minutes.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatMonth">
  <td><?php echo CHtml::link('formatMonth()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatMonth-detail')); ?></td>
  <td>Get the month.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatPeriod">
  <td><?php echo CHtml::link('formatPeriod()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatPeriod-detail')); ?></td>
  <td>Get the AM/PM designator, 12 noon is PM, 12 midnight is AM.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatSeconds">
  <td><?php echo CHtml::link('formatSeconds()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatSeconds-detail')); ?></td>
  <td>Get the seconds.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatTimeZone">
  <td><?php echo CHtml::link('formatTimeZone()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatTimeZone-detail')); ?></td>
  <td>Get the timezone of the server machine.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatWeekInMonth">
  <td><?php echo CHtml::link('formatWeekInMonth()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatWeekInMonth-detail')); ?></td>
  <td>Get week in the month.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatWeekInYear">
  <td><?php echo CHtml::link('formatWeekInYear()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatWeekInYear-detail')); ?></td>
  <td>Get the week in the year.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="formatYear">
  <td><?php echo CHtml::link('formatYear()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatYear-detail')); ?></td>
  <td>Get the year.</td>
  <td>CDateFormatter</td>
</tr>
<tr id="parseFormat">
  <td><?php echo CHtml::link('parseFormat()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'parseFormat-detail')); ?></td>
  <td>Parses the datetime format pattern.</td>
  <td>CDateFormatter</td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L72">yii/i18n/CDateFormatter.php#L72</a> (<b><a href="#" class="show">show</a></b>)
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
public string <b>format</b>(string $pattern, mixed $time)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the pattern (See <a href="http://www.unicode.org/reports/tr35/tr35-dates.html#Date_Format_Patterns">http://www.unicode.org/reports/tr35/tr35-dates.html#Date_Format_Patterns</a>)</td>
</tr>
<tr>
  <td class="paramNameCol">$time</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">UNIX timestamp or a string in strtotime format</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">formatted date time. Null if $time is null. (the null value check is available since Yii 1.1.11)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L86">yii/i18n/CDateFormatter.php#L86</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$time</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$time</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">ctype_digit</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$time</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">}==</span><span style="color: #DD0000">'-'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">ctype_digit</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$time</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">=</span><span style="color: #0000BB">CTimestamp</span><span style="color: #007700">::</span><span style="color: #0000BB">getDate</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tokens</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parseFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$tokens&nbsp;</span><span style="color: #007700">as&nbsp;&amp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$token</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//&nbsp;a&nbsp;callback:&nbsp;method&nbsp;name,&nbsp;sub-pattern<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$token</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]}(</span><span style="color: #0000BB">$token</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$date</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$tokens</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats a date according to a customized pattern.</p>


<div class="detailHeader" id="formatDateTime-detail">
formatDateTime()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatDateTime</b>(mixed $timestamp, string $dateWidth='medium', string $timeWidth='medium')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$timestamp</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">UNIX timestamp or a string in strtotime format</td>
</tr>
<tr>
  <td class="paramNameCol">$dateWidth</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">width of the date pattern. It can be 'full', 'long', 'medium' and 'short'.
If null, it means the date portion will NOT appear in the formatting result</td>
</tr>
<tr>
  <td class="paramNameCol">$timeWidth</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">width of the time pattern. It can be 'full', 'long', 'medium' and 'short'.
If null, it means the time portion will NOT appear in the formatting result</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">formatted date time.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L118">yii/i18n/CDateFormatter.php#L118</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDateTime</span><span style="color: #007700">(</span><span style="color: #0000BB">$timestamp</span><span style="color: #007700">,</span><span style="color: #0000BB">$dateWidth</span><span style="color: #007700">=</span><span style="color: #DD0000">'medium'</span><span style="color: #007700">,</span><span style="color: #0000BB">$timeWidth</span><span style="color: #007700">=</span><span style="color: #DD0000">'medium'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$dateWidth</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDateFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$dateWidth</span><span style="color: #007700">),</span><span style="color: #0000BB">$timestamp</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$timeWidth</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTimeFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$timeWidth</span><span style="color: #007700">),</span><span style="color: #0000BB">$timestamp</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$date</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$time</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dateTimePattern</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDateTimeFormat</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$dateTimePattern</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{0}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$time</span><span style="color: #007700">,</span><span style="color: #DD0000">'{1}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$date</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$date</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$time</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Formats a date according to a predefined pattern.
The predefined pattern is determined based on the date pattern width and time pattern width.</p>


<div class="detailHeader" id="formatDay-detail">
formatDay()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatDay</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">day of the month</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L263">yii/i18n/CDateFormatter.php#L263</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDay</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$day</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mday'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'d'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$day</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'dd'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;day&nbsp;of&nbsp;the&nbsp;month&nbsp;must&nbsp;be&nbsp;"d"&nbsp;or&nbsp;"dd".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the day of the month.
"d" for non-padding, "dd" will always return 2 digits day numbers, e.g. 05.</p>


<div class="detailHeader" id="formatDayInMonth-detail">
formatDayInMonth()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>formatDayInMonth</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">day in month</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L298">yii/i18n/CDateFormatter.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDayInMonth</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'F'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(int)((</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mday'</span><span style="color: #007700">]+</span><span style="color: #0000BB">6</span><span style="color: #007700">)/</span><span style="color: #0000BB">7</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;day&nbsp;in&nbsp;month&nbsp;must&nbsp;be&nbsp;"F".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get day of week in the month, e.g. 2nd Wed in July.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.unicode.org/reports/tr35/#Date_Format_Patterns">http://www.unicode.org/reports/tr35/#Date_Format_Patterns</a></li>
</ul>
</div>

<div class="detailHeader" id="formatDayInWeek-detail">
formatDayInWeek()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatDayInWeek</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">day of the week.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L317">yii/i18n/CDateFormatter.php#L317</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDayInWeek</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$day</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'wday'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'E'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'EE'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'EEE'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'eee'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWeekDayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #DD0000">'abbreviated'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'EEEE'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'eeee'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWeekDayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'EEEEE'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'eeeee'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWeekDayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #DD0000">'narrow'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'e'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'ee'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'c'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$day&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'ccc'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWeekDayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #DD0000">'abbreviated'</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'cccc'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWeekDayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'ccccc'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWeekDayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #DD0000">'narrow'</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;day&nbsp;of&nbsp;the&nbsp;week&nbsp;must&nbsp;be&nbsp;"E",&nbsp;"EE",&nbsp;"EEE",&nbsp;"EEEE",&nbsp;"EEEEE",&nbsp;"e",&nbsp;"ee",&nbsp;"eee",&nbsp;"eeee",&nbsp;"eeeee",&nbsp;"c",&nbsp;"cccc"&nbsp;or&nbsp;"ccccc".'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Get the day of the week.
"E", "EE", "EEE" will return abbreviated week day name, e.g. "Tues";
"EEEE" will return full week day name;
"EEEEE" will return the narrow week day name, e.g. "T";</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.unicode.org/reports/tr35/#Date_Format_Patterns">http://www.unicode.org/reports/tr35/#Date_Format_Patterns</a></li>
</ul>
</div>

<div class="detailHeader" id="formatDayInYear-detail">
formatDayInYear()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>formatDayInYear</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">hours in AM/PM format.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L281">yii/i18n/CDateFormatter.php#L281</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDayInYear</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$day</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'yday'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">))&lt;=</span><span style="color: #0000BB">3</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #0000BB">$n</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;day&nbsp;in&nbsp;year&nbsp;must&nbsp;be&nbsp;"D",&nbsp;"DD"&nbsp;or&nbsp;"DDD".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the day in the year, e.g. [1-366]</p>


<div class="detailHeader" id="formatEra-detail">
formatEra()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatEra</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">era</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L542">yii/i18n/CDateFormatter.php#L542</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatEra</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$era</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'year'</span><span style="color: #007700">]&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'G'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'GG'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'GGG'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEraName</span><span style="color: #007700">(</span><span style="color: #0000BB">$era</span><span style="color: #007700">,</span><span style="color: #DD0000">'abbreviated'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'GGGG'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEraName</span><span style="color: #007700">(</span><span style="color: #0000BB">$era</span><span style="color: #007700">,</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'GGGGG'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEraName</span><span style="color: #007700">(</span><span style="color: #0000BB">$era</span><span style="color: #007700">,</span><span style="color: #DD0000">'narrow'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;era&nbsp;must&nbsp;be&nbsp;"G",&nbsp;"GG",&nbsp;"GGG",&nbsp;"GGGG"&nbsp;or&nbsp;"GGGGG".'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Get the era. i.e. in gregorian, year > 0 is AD, else BC.</p>


<div class="detailHeader" id="formatHour12-detail">
formatHour12()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatHour12</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">hours in 12 hour format.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L395">yii/i18n/CDateFormatter.php#L395</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatHour12</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">=(</span><span style="color: #0000BB">$hour</span><span style="color: #007700">==</span><span style="color: #0000BB">12</span><span style="color: #007700">|</span><span style="color: #0000BB">$hour</span><span style="color: #007700">==</span><span style="color: #0000BB">0</span><span style="color: #007700">)?</span><span style="color: #0000BB">12</span><span style="color: #007700">:(</span><span style="color: #0000BB">$hour</span><span style="color: #007700">)%</span><span style="color: #0000BB">12</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'h'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'hh'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$hour</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;12&nbsp;hour&nbsp;format&nbsp;must&nbsp;be&nbsp;"h"&nbsp;or&nbsp;"hh".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the hours in 12 hour format, i.e., [1-12]
"h" for non-padding, "hh" will always return 2 characters.</p>


<div class="detailHeader" id="formatHour24-detail">
formatHour24()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatHour24</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">hours in 24 hour format.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L376">yii/i18n/CDateFormatter.php#L376</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatHour24</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'H'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'HH'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$hour</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;24&nbsp;hour&nbsp;format&nbsp;must&nbsp;be&nbsp;"H"&nbsp;or&nbsp;"HH".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the hours in 24 hour format, i.e. [0-23].
"H" for non-padding, "HH" will always return 2 characters.</p>


<div class="detailHeader" id="formatHourInDay-detail">
formatHourInDay()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>formatHourInDay</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">hours [1-24]</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L415">yii/i18n/CDateFormatter.php#L415</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatHourInDay</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">]==</span><span style="color: #0000BB">0</span><span style="color: #007700">?</span><span style="color: #0000BB">24</span><span style="color: #007700">:</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'k'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'kk'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$hour</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;hour&nbsp;in&nbsp;day&nbsp;must&nbsp;be&nbsp;"k"&nbsp;or&nbsp;"kk".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the hours [1-24].
'k' for non-padding, and 'kk' with 2 characters padding.</p>


<div class="detailHeader" id="formatHourInPeriod-detail">
formatHourInPeriod()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>formatHourInPeriod</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">hours in AM/PM format.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L434">yii/i18n/CDateFormatter.php#L434</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatHourInPeriod</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">]%</span><span style="color: #0000BB">12</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'K'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hour</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'KK'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$hour</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;hour&nbsp;in&nbsp;AM/PM&nbsp;must&nbsp;be&nbsp;"K"&nbsp;or&nbsp;"KK".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the hours in AM/PM format, e.g [0-11]
"K" for non-padding, "KK" will always return 2 characters.</p>


<div class="detailHeader" id="formatMinutes-detail">
formatMinutes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatMinutes</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">minutes.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L453">yii/i18n/CDateFormatter.php#L453</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatMinutes</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$minutes</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'minutes'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'m'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$minutes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'mm'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$minutes</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;minutes&nbsp;must&nbsp;be&nbsp;"m"&nbsp;or&nbsp;"mm".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the minutes.
"m" for non-padding, "mm" will always return 2 characters.</p>


<div class="detailHeader" id="formatMonth-detail">
formatMonth()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatMonth</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">month name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L225">yii/i18n/CDateFormatter.php#L225</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatMonth</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$month</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mon'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'M'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$month</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'MM'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'MMM'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMonthName</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #DD0000">'abbreviated'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'MMMM'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMonthName</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'MMMMM'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMonthName</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #DD0000">'narrow'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'L'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$month</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'LL'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'LLL'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMonthName</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #DD0000">'abbreviated'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'LLLL'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMonthName</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'LLLLL'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMonthName</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #DD0000">'narrow'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;month&nbsp;must&nbsp;be&nbsp;"M",&nbsp;"MM",&nbsp;"MMM",&nbsp;"MMMM",&nbsp;"L",&nbsp;"LL",&nbsp;"LLL"&nbsp;or&nbsp;"LLLL".'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Get the month.
"M" will return integer 1 through 12;
"MM" will return two digits month number with necessary zero padding, e.g. 05;
"MMM" will return the abrreviated month name, e.g. "Jan";
"MMMM" will return the full month name, e.g. "January";
"MMMMM" will return the narrow month name, e.g. "J";</p>


<div class="detailHeader" id="formatPeriod-detail">
formatPeriod()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatPeriod</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">AM or PM designator</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L355">yii/i18n/CDateFormatter.php#L355</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatPeriod</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'a'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">]/</span><span style="color: #0000BB">12</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPMName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAMName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;AM/PM&nbsp;marker&nbsp;must&nbsp;be&nbsp;"a".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the AM/PM designator, 12 noon is PM, 12 midnight is AM.</p>


<div class="detailHeader" id="formatSeconds-detail">
formatSeconds()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatSeconds</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">seconds</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L472">yii/i18n/CDateFormatter.php#L472</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatSeconds</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$seconds</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'seconds'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'s'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$seconds</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'ss'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$seconds</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;seconds&nbsp;must&nbsp;be&nbsp;"s"&nbsp;or&nbsp;"ss".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the seconds.
"s" for non-padding, "ss" will always return 2 characters.</p>


<div class="detailHeader" id="formatTimeZone-detail">
formatTimeZone()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatTimeZone</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">time zone</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L524">yii/i18n/CDateFormatter.php#L524</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatTimeZone</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]===</span><span style="color: #DD0000">'z'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]===</span><span style="color: #DD0000">'v'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;@</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'T'</span><span style="color: #007700">,&nbsp;@</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'minutes'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'seconds'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mon'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mday'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'year'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]===</span><span style="color: #DD0000">'Z'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;@</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'O'</span><span style="color: #007700">,&nbsp;@</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'minutes'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'seconds'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mon'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mday'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'year'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;time&nbsp;zone&nbsp;must&nbsp;be&nbsp;"z"&nbsp;or&nbsp;"v".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the timezone of the server machine.</p>


<div class="detailHeader" id="formatWeekInMonth-detail">
formatWeekInMonth()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>formatWeekInMonth</b>(array $pattern, string $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">week in month</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L505">yii/i18n/CDateFormatter.php#L505</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatWeekInMonth</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'W'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$weekDay</span><span style="color: #007700">=</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'N'</span><span style="color: #007700">,</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mon'</span><span style="color: #007700">],</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'year'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">((</span><span style="color: #0000BB">$weekDay</span><span style="color: #007700">+</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mday'</span><span style="color: #007700">]-</span><span style="color: #0000BB">2</span><span style="color: #007700">)/</span><span style="color: #0000BB">7</span><span style="color: #007700">)+</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;week&nbsp;in&nbsp;month&nbsp;must&nbsp;be&nbsp;"W".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get week in the month.</p>


<div class="detailHeader" id="formatWeekInYear-detail">
formatWeekInYear()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>formatWeekInYear</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">week in year</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L490">yii/i18n/CDateFormatter.php#L490</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatWeekInYear</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'w'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;@</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'W'</span><span style="color: #007700">,@</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mon'</span><span style="color: #007700">],</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'mday'</span><span style="color: #007700">],</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'year'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;pattern&nbsp;for&nbsp;week&nbsp;in&nbsp;year&nbsp;must&nbsp;be&nbsp;"w".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Get the week in the year.</p>


<div class="detailHeader" id="formatYear-detail">
formatYear()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>formatYear</b>(string $pattern, array $date)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a pattern.</td>
</tr>
<tr>
  <td class="paramNameCol">$date</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">result of <?php echo CHtml::link('CTimestamp::getdate', array('/site/doc', 'view' => 'CTimestamp', '#' => 'getdate')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">formatted year</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L204">yii/i18n/CDateFormatter.php#L204</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">formatYear</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">,</span><span style="color: #0000BB">$date</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$year</span><span style="color: #007700">=</span><span style="color: #0000BB">$date</span><span style="color: #007700">[</span><span style="color: #DD0000">'year'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">===</span><span style="color: #DD0000">'yy'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">%</span><span style="color: #0000BB">100</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$year</span><span style="color: #007700">,</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">),</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get the year.
"yy" will return the last two digits of year.
"y...y" will pad the year with 0 in the front, e.g. "yyyyy" will generate "02008" for year 2008.</p>


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
  <td class="paramDescCol">tokenized parsing result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/i18n/CDateFormatter.php#L142">yii/i18n/CDateFormatter.php#L142</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">parseFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$formats</span><span style="color: #007700">=array();&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;cache<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(isset(</span><span style="color: #0000BB">$formats</span><span style="color: #007700">[</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$formats</span><span style="color: #007700">[</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tokens</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isLiteral</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$literal</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">=</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$c</span><span style="color: #007700">===</span><span style="color: #DD0000">"'"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">-</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">]===</span><span style="color: #DD0000">"'"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tokens</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"'"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$isLiteral</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tokens</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$literal</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$literal</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isLiteral</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isLiteral</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$literal</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$isLiteral</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$literal</span><span style="color: #007700">.=</span><span style="color: #0000BB">$c</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$j</span><span style="color: #007700">=</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #0000BB">$j</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;++</span><span style="color: #0000BB">$j</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">[</span><span style="color: #0000BB">$j</span><span style="color: #007700">]!==</span><span style="color: #0000BB">$c</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$p</span><span style="color: #007700">=</span><span style="color: #0000BB">str_repeat</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">,</span><span style="color: #0000BB">$j</span><span style="color: #007700">-</span><span style="color: #0000BB">$i</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_formatters</span><span style="color: #007700">[</span><span style="color: #0000BB">$c</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tokens</span><span style="color: #007700">[]=array(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_formatters</span><span style="color: #007700">[</span><span style="color: #0000BB">$c</span><span style="color: #007700">],</span><span style="color: #0000BB">$p</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tokens</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$p</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">$j</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$literal</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tokens</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$literal</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$formats</span><span style="color: #007700">[</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">]=</span><span style="color: #0000BB">$tokens</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Parses the datetime format pattern.</p>


