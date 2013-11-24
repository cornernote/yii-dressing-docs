<?php
$this->pageTitle = $this->pageHeading = 'YdFormatter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdFormatter';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a></div>

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
  <td>class YdFormatter &raquo;
<?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php">dressing\components\YdFormatter.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdFormatter</div>
<a name="properties"></a>

<div class="summary docProperty">
<h2>Public Properties</h2>

<p><a href="#" class="toggle">Hide inherited properties</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-property" />
	<col class="col-type" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Property</th><th>Type</th><th>Description</th><th>Defined By</th>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="booleanFormat">
  <td><?php echo CHtml::link('booleanFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'booleanFormat-detail')); ?></td>
  <td>array</td>
  <td>the text to be displayed when formatting a boolean value.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="dateFormat">
  <td><?php echo CHtml::link('dateFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'dateFormat-detail')); ?></td>
  <td>string</td>
  <td>the format string to be used to format a date using PHP date() function.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="datetimeFormat">
  <td><?php echo CHtml::link('datetimeFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'datetimeFormat-detail')); ?></td>
  <td>string</td>
  <td>the format string to be used to format a date and time using PHP date() function.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="htmlPurifier">
  <td><?php echo CHtml::link('htmlPurifier', array('/site/doc', 'view' => 'CFormatter', '#' => 'htmlPurifier-detail')); ?></td>
  <td><?php echo CHtml::link('CHtmlPurifier', array('/site/doc', 'view' => 'CHtmlPurifier')); ?></td>
  <td>the HTML purifier instance</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="htmlPurifierOptions">
  <td><?php echo CHtml::link('htmlPurifierOptions', array('/site/doc', 'view' => 'CFormatter', '#' => 'htmlPurifierOptions-detail')); ?></td>
  <td>array</td>
  <td>the options to be passed to CHtmlPurifier instance used in this class.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="numberFormat">
  <td><?php echo CHtml::link('numberFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'numberFormat-detail')); ?></td>
  <td>array</td>
  <td>the format used to format a number with PHP number_format() function.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="sizeFormat">
  <td><?php echo CHtml::link('sizeFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'sizeFormat-detail')); ?></td>
  <td>array</td>
  <td>the format used to format size (bytes).</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="timeFormat">
  <td><?php echo CHtml::link('timeFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'timeFormat-detail')); ?></td>
  <td>string</td>
  <td>the format string to be used to format a time using PHP date() function.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr id="victoriaHolidays">
  <td><?php echo CHtml::link('victoriaHolidays', array('/site/doc', 'view' => 'YdFormatter', '#' => 'victoriaHolidays-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdFormatter</td>
</tr>
</table>
</div>
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
  <td><?php echo CHtml::link('__call()', array('/site/doc', 'view' => 'CFormatter', '#' => '__call-detail')); ?></td>
  <td>Calls the format method when its shortcut is invoked.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
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
<tr id="ago">
  <td><?php echo CHtml::link('ago()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'ago-detail')); ?></td>
  <td></td>
  <td>YdFormatter</td>
</tr>
<tr id="agoIcon">
  <td><?php echo CHtml::link('agoIcon()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'agoIcon-detail')); ?></td>
  <td></td>
  <td>YdFormatter</td>
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
<tr id="date">
  <td><?php echo CHtml::link('date()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'date-detail')); ?></td>
  <td></td>
  <td>YdFormatter</td>
</tr>
<tr id="datetime">
  <td><?php echo CHtml::link('datetime()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'datetime-detail')); ?></td>
  <td></td>
  <td>YdFormatter</td>
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
<tr id="differentInDays">
  <td><?php echo CHtml::link('differentInDays()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'differentInDays-detail')); ?></td>
  <td></td>
  <td>YdFormatter</td>
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
<tr class="inherited" id="format">
  <td><?php echo CHtml::link('format()', array('/site/doc', 'view' => 'CFormatter', '#' => 'format-detail')); ?></td>
  <td>Formats a value based on the given type.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatBoolean">
  <td><?php echo CHtml::link('formatBoolean()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatBoolean-detail')); ?></td>
  <td>Formats the value as a boolean.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatDate">
  <td><?php echo CHtml::link('formatDate()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatDate-detail')); ?></td>
  <td>Formats the value as a date.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatDatetime">
  <td><?php echo CHtml::link('formatDatetime()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatDatetime-detail')); ?></td>
  <td>Formats the value as a date and time.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatEmail">
  <td><?php echo CHtml::link('formatEmail()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatEmail-detail')); ?></td>
  <td>Formats the value as a mailto link.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatHtml">
  <td><?php echo CHtml::link('formatHtml()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatHtml-detail')); ?></td>
  <td>Formats the value as HTML text without any encoding.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatImage">
  <td><?php echo CHtml::link('formatImage()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatImage-detail')); ?></td>
  <td>Formats the value as an image tag.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatNtext">
  <td><?php echo CHtml::link('formatNtext()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatNtext-detail')); ?></td>
  <td>Formats the value as a HTML-encoded plain text and converts newlines with HTML &lt;br /&gt; or</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatNumber">
  <td><?php echo CHtml::link('formatNumber()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatNumber-detail')); ?></td>
  <td>Formats the value as a number using PHP number_format() function.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatRaw">
  <td><?php echo CHtml::link('formatRaw()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatRaw-detail')); ?></td>
  <td>Formats the value as is without any formatting.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatSize">
  <td><?php echo CHtml::link('formatSize()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatSize-detail')); ?></td>
  <td>Formats the value in bytes as a size in human readable form.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatText">
  <td><?php echo CHtml::link('formatText()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatText-detail')); ?></td>
  <td>Formats the value as a HTML-encoded plain text.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatTime">
  <td><?php echo CHtml::link('formatTime()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatTime-detail')); ?></td>
  <td>Formats the value as a time.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="formatUrl">
  <td><?php echo CHtml::link('formatUrl()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatUrl-detail')); ?></td>
  <td>Formats the value as a hyperlink.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getHtmlPurifier">
  <td><?php echo CHtml::link('getHtmlPurifier()', array('/site/doc', 'view' => 'CFormatter', '#' => 'getHtmlPurifier-detail')); ?></td>
  <td>Returns the HTML purifier instance</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="getRelativeDate">
  <td><?php echo CHtml::link('getRelativeDate()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'getRelativeDate-detail')); ?></td>
  <td></td>
  <td>YdFormatter</td>
</tr>
<tr id="getVictoriaHolidays">
  <td><?php echo CHtml::link('getVictoriaHolidays()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'getVictoriaHolidays-detail')); ?></td>
  <td></td>
  <td>YdFormatter</td>
</tr>
<tr id="getWorkingDays">
  <td><?php echo CHtml::link('getWorkingDays()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'getWorkingDays-detail')); ?></td>
  <td>The function returns the no. of business days between two dates and it skips the holidays</td>
  <td>YdFormatter</td>
</tr>
<tr id="gmDateToDate">
  <td><?php echo CHtml::link('gmDateToDate()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'gmDateToDate-detail')); ?></td>
  <td></td>
  <td>YdFormatter</td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="isThisMonth">
  <td><?php echo CHtml::link('isThisMonth()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'isThisMonth-detail')); ?></td>
  <td>Returns true if given date is in this month</td>
  <td>YdFormatter</td>
</tr>
<tr id="isThisWeek">
  <td><?php echo CHtml::link('isThisWeek()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'isThisWeek-detail')); ?></td>
  <td>Returns true if given date is in this week</td>
  <td>YdFormatter</td>
</tr>
<tr id="isThisYear">
  <td><?php echo CHtml::link('isThisYear()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'isThisYear-detail')); ?></td>
  <td>Returns true if given date is in this year</td>
  <td>YdFormatter</td>
</tr>
<tr id="isToday">
  <td><?php echo CHtml::link('isToday()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'isToday-detail')); ?></td>
  <td>Returns true if given date is today.</td>
  <td>YdFormatter</td>
</tr>
<tr id="nice">
  <td><?php echo CHtml::link('nice()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'nice-detail')); ?></td>
  <td>Returns a nicely formatted date string for given Datetime string.</td>
  <td>YdFormatter</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="short">
  <td><?php echo CHtml::link('short()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'short-detail')); ?></td>
  <td>Returns a formatted descriptive date string for given datetime string.</td>
  <td>YdFormatter</td>
</tr>
<tr id="timeAgoInWords">
  <td><?php echo CHtml::link('timeAgoInWords()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'timeAgoInWords-detail')); ?></td>
  <td>Returns either a relative date or a formatted date depending</td>
  <td>YdFormatter</td>
</tr>
<tr id="timestamp">
  <td><?php echo CHtml::link('timestamp()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'timestamp-detail')); ?></td>
  <td></td>
  <td>YdFormatter</td>
</tr>
<tr id="wasYesterday">
  <td><?php echo CHtml::link('wasYesterday()', array('/site/doc', 'view' => 'YdFormatter', '#' => 'wasYesterday-detail')); ?></td>
  <td>Returns true if given date was yesterday</td>
  <td>YdFormatter</td>
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
<tr class="inherited" id="normalizeDateValue">
  <td><?php echo CHtml::link('normalizeDateValue()', array('/site/doc', 'view' => 'CFormatter', '#' => 'normalizeDateValue-detail')); ?></td>
  <td>Normalizes an expression as a timestamp.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="victoriaHolidays-detail">
victoriaHolidays<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getVictoriaHolidays</b>', array('/site/doc', 'view' => 'YdFormatter', '#' => 'getVictoriaHolidays')); ?>()</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="ago-detail">
ago()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>ago</b>($dtGiven $dtGiven, int $rcs=0, null $_ago=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">$dtGiven</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$rcs</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$_ago</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L370">dressing\components\YdFormatter.php#L370</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">ago</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rcs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$_ago&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tm&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$tm</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cur_tm&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dif&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$cur_tm&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$tm</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$cur_tm&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$tm</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dif&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$dif&nbsp;</span><span style="color: #007700">*&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_ago&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'away'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pds&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'second'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'minute'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'hour'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'day'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'week'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'month'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'year'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'decade'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$l&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">60</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">3600</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">86400</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">604800</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2630880</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">31570560</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">315705600</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$no&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$v&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">$l</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;(</span><span style="color: #0000BB">$v&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;((</span><span style="color: #0000BB">$no&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$dif&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">$l</span><span style="color: #007700">[</span><span style="color: #0000BB">$v</span><span style="color: #007700">])&nbsp;&lt;=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">--)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$v&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$v&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_tm&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$cur_tm&nbsp;</span><span style="color: #007700">-&nbsp;(</span><span style="color: #0000BB">$dif&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">$l</span><span style="color: #007700">[</span><span style="color: #0000BB">$v</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$no&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$no</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$no&nbsp;</span><span style="color: #007700">&lt;&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pds</span><span style="color: #007700">[</span><span style="color: #0000BB">$v</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'s'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%d&nbsp;%s&nbsp;"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$no</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pds</span><span style="color: #007700">[</span><span style="color: #0000BB">$v</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$rcs&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$v&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;((</span><span style="color: #0000BB">$cur_tm&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$_tm</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ago</span><span style="color: #007700">(</span><span style="color: #0000BB">$_tm</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$_ago</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ago&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$rcs</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$_ago</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ago&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$_ago</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ago&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'&nbsp;ago'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$ago</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="agoIcon-detail">
agoIcon()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool|string <b>agoIcon</b>($dtGiven $dtGiven, string $format='d-M-Y H:i:s')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">$dtGiven</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$format</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool|string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L332">dressing\components\YdFormatter.php#L332</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">agoIcon</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$format&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'d-M-Y&nbsp;H:i:s'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dtStamp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ago&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ago</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtStamp</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dtStamp</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$icon&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;i&nbsp;class="icon-time"&gt;&lt;/i&gt;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'javascript:void();'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$agoWithIcon&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$icon&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&amp;nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$ago</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$agoWithIcon</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="date-detail">
date()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public null|string <b>date</b>($dtGiven $dtGiven, string $format='Y-m-d')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">$dtGiven</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$format</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">null|string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L34">dressing\components\YdFormatter.php#L34</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$format&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Y-m-d'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="datetime-detail">
datetime()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public null|string <b>datetime</b>($dtGiven $dtGiven, string $format='Y-m-d H:i:s')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">$dtGiven</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$format</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">null|string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L45">dressing\components\YdFormatter.php#L45</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">datetime</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$format&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Y-m-d&nbsp;H:i:s'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="differentInDays-detail">
differentInDays()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public int <b>differentInDays</b>(string $date1, string $date2, bool $round=true, bool|array $holidays=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$date1</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">bigger date value</td>
</tr>
<tr>
  <td class="paramNameCol">$date2</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">smaller date value</td>
</tr>
<tr>
  <td class="paramNameCol">$round</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$holidays</td>
  <td class="paramTypeCol">bool|array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L95">dressing\components\YdFormatter.php#L95</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">differentInDays</span><span style="color: #007700">(</span><span style="color: #0000BB">$date1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$round&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$holidays&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$date1</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$date2</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">/&nbsp;(</span><span style="color: #0000BB">60&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">60&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">24</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$holidays</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$holidays</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #DD0000">'victoria'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$holidays&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getVictoriaHolidays</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWorkingDays</span><span style="color: #007700">(</span><span style="color: #0000BB">$date2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$holidays</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$round</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$diff</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$diff</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getRelativeDate-detail">
getRelativeDate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getRelativeDate</b>($dtGiven $dtGiven, $strToTimeString $strToTimeString, string $dtFormat='Y-m-d')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">$dtGiven</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$strToTimeString</td>
  <td class="paramTypeCol">$strToTimeString</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$dtFormat</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L79">dressing\components\YdFormatter.php#L79</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRelativeDate</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$strToTimeString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dtFormat&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Y-m-d'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//use&nbsp;like&nbsp;Time::getRelativeDate('01-Jan-1990',&nbsp;'+2&nbsp;days')<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stamp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDateStamp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$strToTimeString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$stamp</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtFormat</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$relativeDateStamp</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$relativeDate</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getVictoriaHolidays-detail">
getVictoriaHolidays()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getVictoriaHolidays</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L115">dressing\components\YdFormatter.php#L115</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getVictoriaHolidays</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'1-January-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'26-January-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'8-March-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'2-April-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'3-April-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'5-April-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'25-April-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'14-June-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'2-November-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'25-December-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'26-December-2010'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'1-January-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'26-January-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'14-March-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'22-April-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'23-April-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'25-April-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'26-April-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'13-June-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'1-November-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'27-December-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'26-Decembe-2011'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'1-January-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'26-January-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'12-March-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'6-April-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'7-April-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'9-April-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'25-April-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'11-June-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'6-November-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'25-December-2012'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'1-January-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'26-January-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'11-March-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'29-March-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'30-March-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'1-April-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'25-April-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'10-June-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'5-November-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'25-December-2013'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getWorkingDays-detail">
getWorkingDays()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public float|int <b>getWorkingDays</b>(string $startDate, string $endDate, array $holidays)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$startDate</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$endDate</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$holidays</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">float|int</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L171">dressing\components\YdFormatter.php#L171</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getWorkingDays</span><span style="color: #007700">(</span><span style="color: #0000BB">$startDate</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$endDate</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$holidays</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;do&nbsp;strtotime&nbsp;calculations&nbsp;just&nbsp;once<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$endDate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$endDate</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$startDate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$startDate</span><span style="color: #007700">);<br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//The&nbsp;total&nbsp;number&nbsp;of&nbsp;days&nbsp;between&nbsp;the&nbsp;two&nbsp;dates.&nbsp;We&nbsp;compute&nbsp;the&nbsp;no.&nbsp;of&nbsp;seconds&nbsp;and&nbsp;divide&nbsp;it&nbsp;to&nbsp;60*60*24<br />&nbsp;&nbsp;&nbsp;&nbsp;//We&nbsp;add&nbsp;one&nbsp;to&nbsp;inlude&nbsp;both&nbsp;dates&nbsp;in&nbsp;the&nbsp;interval.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$endDate&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$startDate</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">86400&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$no_full_weeks&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$no_remaining_days&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fmod</span><span style="color: #007700">(</span><span style="color: #0000BB">$days</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//It&nbsp;will&nbsp;return&nbsp;1&nbsp;if&nbsp;it's&nbsp;Monday,..&nbsp;,7&nbsp;for&nbsp;Sunday<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$the_first_day_of_week&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"N"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$startDate</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$the_last_day_of_week&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"N"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$endDate</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//----&gt;The&nbsp;two&nbsp;can&nbsp;be&nbsp;equal&nbsp;in&nbsp;leap&nbsp;years&nbsp;when&nbsp;february&nbsp;has&nbsp;29&nbsp;days,&nbsp;the&nbsp;equal&nbsp;sign&nbsp;is&nbsp;added&nbsp;here<br />&nbsp;&nbsp;&nbsp;&nbsp;//In&nbsp;the&nbsp;first&nbsp;case&nbsp;the&nbsp;whole&nbsp;interval&nbsp;is&nbsp;within&nbsp;a&nbsp;week,&nbsp;in&nbsp;the&nbsp;second&nbsp;case&nbsp;the&nbsp;interval&nbsp;falls&nbsp;in&nbsp;two&nbsp;weeks.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$the_first_day_of_week&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">$the_last_day_of_week</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$the_first_day_of_week&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">6&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">6&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">$the_last_day_of_week</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$no_remaining_days</span><span style="color: #007700">--;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$the_first_day_of_week&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">7&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">7&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">$the_last_day_of_week</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$no_remaining_days</span><span style="color: #007700">--;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;(edit&nbsp;by&nbsp;Tokes&nbsp;to&nbsp;fix&nbsp;an&nbsp;edge&nbsp;case&nbsp;where&nbsp;the&nbsp;start&nbsp;day&nbsp;was&nbsp;a&nbsp;Sunday<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;and&nbsp;the&nbsp;end&nbsp;day&nbsp;was&nbsp;NOT&nbsp;a&nbsp;Saturday)<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;the&nbsp;day&nbsp;of&nbsp;the&nbsp;week&nbsp;for&nbsp;start&nbsp;is&nbsp;later&nbsp;than&nbsp;the&nbsp;day&nbsp;of&nbsp;the&nbsp;week&nbsp;for&nbsp;end<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$the_first_day_of_week&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;the&nbsp;start&nbsp;date&nbsp;is&nbsp;a&nbsp;Sunday,&nbsp;then&nbsp;we&nbsp;definitely&nbsp;subtract&nbsp;1&nbsp;day<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$no_remaining_days</span><span style="color: #007700">--;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$the_last_day_of_week&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;the&nbsp;end&nbsp;date&nbsp;is&nbsp;a&nbsp;Saturday,&nbsp;then&nbsp;we&nbsp;subtract&nbsp;another&nbsp;day<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$no_remaining_days</span><span style="color: #007700">--;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;the&nbsp;start&nbsp;date&nbsp;was&nbsp;a&nbsp;Saturday&nbsp;(or&nbsp;earlier),&nbsp;and&nbsp;the&nbsp;end&nbsp;date&nbsp;was&nbsp;(Mon..Fri)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;so&nbsp;we&nbsp;skip&nbsp;an&nbsp;entire&nbsp;weekend&nbsp;and&nbsp;subtract&nbsp;2&nbsp;days<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$no_remaining_days&nbsp;</span><span style="color: #007700">-=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//The&nbsp;no.&nbsp;of&nbsp;business&nbsp;days&nbsp;is:&nbsp;(number&nbsp;of&nbsp;weeks&nbsp;between&nbsp;the&nbsp;two&nbsp;dates)&nbsp;*&nbsp;(5&nbsp;working&nbsp;days)&nbsp;+&nbsp;the&nbsp;remainder<br />&nbsp;&nbsp;&nbsp;&nbsp;//----&gt;february&nbsp;in&nbsp;none&nbsp;leap&nbsp;years&nbsp;gave&nbsp;a&nbsp;remainder&nbsp;of&nbsp;0&nbsp;but&nbsp;still&nbsp;calculated&nbsp;weekends&nbsp;between&nbsp;first&nbsp;and&nbsp;last&nbsp;day,&nbsp;this&nbsp;is&nbsp;one&nbsp;way&nbsp;to&nbsp;fix&nbsp;it<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$workingDays&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$no_full_weeks&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$no_remaining_days&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$workingDays&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$no_remaining_days</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//We&nbsp;subtract&nbsp;the&nbsp;holidays<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$holidays&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$holiday</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time_stamp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$holiday</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//If&nbsp;the&nbsp;holiday&nbsp;doesn't&nbsp;fall&nbsp;in&nbsp;weekend<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$startDate&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">$time_stamp&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$time_stamp&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">$endDate&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"N"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$time_stamp</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #0000BB">6&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"N"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$time_stamp</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$workingDays</span><span style="color: #007700">--;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$workingDays</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>The function returns the no. of business days between two dates and it skips the holidays</p>


<div class="detailHeader" id="gmDateToDate-detail">
gmDateToDate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>gmDateToDate</b>($gmDateGiven $gmDateGiven)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$gmDateGiven</td>
  <td class="paramTypeCol">$gmDateGiven</td>
  <td class="paramDescCol">string</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L349">dressing\components\YdFormatter.php#L349</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">gmDateToDate</span><span style="color: #007700">(</span><span style="color: #0000BB">$gmDateGiven</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Y-m-d&nbsp;H:i:s'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gmDate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">gmdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$date</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$gmDate</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$gmDateGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$time&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">10&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$diff</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$time</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">;<br /><br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="isThisMonth-detail">
isThisMonth()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isThisMonth</b>(string $dtGiven)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">True if date is in this month</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L321">dressing\components\YdFormatter.php#L321</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isThisMonth</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'m&nbsp;Y'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'m&nbsp;Y'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Returns true if given date is in this month</p>


<div class="detailHeader" id="isThisWeek-detail">
isThisWeek()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isThisWeek</b>(string $dtGiven)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">True if date is in this week</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L309">dressing\components\YdFormatter.php#L309</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isThisWeek</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'W&nbsp;Y'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'W&nbsp;Y'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Returns true if given date is in this week</p>


<div class="detailHeader" id="isThisYear-detail">
isThisYear()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isThisYear</b>(string $dtGiven)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">True if date is in this year</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L297">dressing\components\YdFormatter.php#L297</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isThisYear</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Returns true if given date is in this year</p>


<div class="detailHeader" id="isToday-detail">
isToday()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>isToday</b>(string $dtGiven)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">True if date is today</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L273">dressing\components\YdFormatter.php#L273</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">isToday</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Returns true if given date is today.</p>


<div class="detailHeader" id="nice-detail">
nice()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>nice</b>(string $dtGiven=NULL, int|string $format='dateTimeFormat')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$format</td>
  <td class="paramTypeCol">int|string</td>
  <td class="paramDescCol">Format of returned date</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Formatted date string</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L60">dressing\components\YdFormatter.php#L60</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">nice</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$format&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'dateTimeFormat'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$date</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$paramFormat&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #0000BB">$format</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$paramFormat</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$paramFormat&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #DD0000">'dateTimeFormat'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$paramFormat</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a nicely formatted date string for given Datetime string.</p>


<div class="detailHeader" id="short-detail">
short()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>short</b>(string $dtGiven=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Described, relative date string</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L248">dressing\components\YdFormatter.php#L248</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">short</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$dtGiven&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">()&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isThisYear</span><span style="color: #007700">(</span><span style="color: #0000BB">$date</span><span style="color: #007700">))&nbsp;?&nbsp;</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'&nbsp;Y'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isToday</span><span style="color: #007700">(</span><span style="color: #0000BB">$date</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'Today,&nbsp;%s'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"g:i&nbsp;a"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wasYesterday</span><span style="color: #007700">(</span><span style="color: #0000BB">$date</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'Yesterday,&nbsp;%s'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"g:i&nbsp;a"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"M&nbsp;jS</span><span style="color: #007700">{</span><span style="color: #0000BB">$y</span><span style="color: #007700">}</span><span style="color: #DD0000">,&nbsp;H:i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a formatted descriptive date string for given datetime string.
<br/><br/>
If the given date is today, the returned string could be "Today, 6:54 pm".
If the given date was yesterday, the returned string could be "Yesterday, 6:54 pm".
If $dtGiven's year is the current year, the returned string does not
include mention of the year.</p>


<div class="detailHeader" id="timeAgoInWords-detail">
timeAgoInWords()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>timeAgoInWords</b>($dtGiven $dtGiven, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">$dtGiven</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Default format if timestamp is used in $dateString</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Relative time string.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L429">dressing\components\YdFormatter.php#L429</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">timeAgoInWords</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dateTime&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$now&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$inSeconds&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$dateTime</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$backwards&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$inSeconds&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">$now</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'j/n/y'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$end&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'+1&nbsp;month'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'format'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'format'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'format'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'end'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$end&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'end'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'end'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$format&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$backwards</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$futureTime&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$inSeconds</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pastTime&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$now</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$futureTime&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$now</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pastTime&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$inSeconds</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$futureTime&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$pastTime</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;more&nbsp;than&nbsp;a&nbsp;week,&nbsp;then&nbsp;take&nbsp;into&nbsp;account&nbsp;the&nbsp;length&nbsp;of&nbsp;months<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">604800</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$current&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'H'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'i'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'s'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">])&nbsp;=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'H/i/s/d/m/Y'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$futureTime</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'H'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'i'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'s'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">])&nbsp;=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'H/i/s/d/m/Y'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pastTime</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$hours&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$minutes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$seconds&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">]&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">])&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">])&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">]&nbsp;-&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">]&nbsp;-&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">]&nbsp;+&nbsp;((</span><span style="color: #0000BB">12&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">$years</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">-&nbsp;(</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">]&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">]&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">]&nbsp;-&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$years</span><span style="color: #007700">--;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">]&nbsp;&gt;=&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">])&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">]&nbsp;-&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$daysInPastMonth&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'t'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pastTime</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$daysInFutureMonth&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'t'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">mktime</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">]&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'Y'</span><span style="color: #007700">]));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$backwards</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$daysInPastMonth&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">])&nbsp;+&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$daysInFutureMonth&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">])&nbsp;+&nbsp;</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'d'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$future</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">]&nbsp;!=&nbsp;</span><span style="color: #0000BB">$past</span><span style="color: #007700">[</span><span style="color: #DD0000">'m'</span><span style="color: #007700">])&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$months</span><span style="color: #007700">--;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">&lt;&nbsp;(</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">31536000</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">11</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$years</span><span style="color: #007700">--;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">-&nbsp;(</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">86400</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">-&nbsp;(</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">86400</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hours&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">3600</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">-&nbsp;(</span><span style="color: #0000BB">$hours&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">3600</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$minutes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">60</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">-&nbsp;(</span><span style="color: #0000BB">$minutes&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">60</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$seconds&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$diff</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$futureTime&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$pastTime</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$now&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$end</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'on&nbsp;%s'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$format</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$inSeconds</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;years&nbsp;and&nbsp;months&nbsp;and&nbsp;days<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$years&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'year'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'years'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'month'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'months'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'week'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'weeks'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'day'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'days'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$months</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;months,&nbsp;weeks&nbsp;and&nbsp;days<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$months&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'month'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'months'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'week'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'weeks'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'day'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'days'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$weeks</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;weeks&nbsp;and&nbsp;days<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$weeks&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'week'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'weeks'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'day'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'days'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$days</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;days&nbsp;and&nbsp;hours<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$days&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'day'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'days'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$hours&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$hours&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$hours&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'hour'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$hours</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;hours&nbsp;and&nbsp;minutes<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$hours&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$hours&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'hour'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'hours'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$minutes&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$minutes&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$minutes&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'minute'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'minutes'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$minutes</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;minutes&nbsp;only<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$minutes&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$minutes&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'minute'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'minutes'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;seconds&nbsp;only<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">',&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$seconds&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$seconds&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'second'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'seconds'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$backwards</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relativeDate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%s&nbsp;ago'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$relativeDate</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$relativeDate</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns either a relative date or a formatted date depending
on the difference between the current time and given datetime.
$datetime should be in a <i>strtotime</i>-parsable format, like MySQL's datetime datatype.
<br/><br/>
Options:
 'format' => a fall back format if the relative time is longer than the duration specified by end
 'end' =>  The end of relative time telling
<br/><br/>
Relative dates look something like this:
   3 weeks, 4 days ago
   15 seconds ago
Formatted dates look like this:
   on 02/18/2004
<br/><br/>
The returned string includes 'ago' or 'on' and assumes you'll properly add a word
like 'Posted ' before the function output.</p>


<div class="detailHeader" id="timestamp-detail">
timestamp()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public int|null <b>timestamp</b>($dtGiven $dtGiven)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">$dtGiven</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">int|null</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L20">dressing\components\YdFormatter.php#L20</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="wasYesterday-detail">
wasYesterday()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>wasYesterday</b>(string $dtGiven)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dtGiven</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">True if date was yesterday</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\components\YdFormatter.php#L285">dressing\components\YdFormatter.php#L285</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">wasYesterday</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">$dtGiven</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">'yesterday'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Returns true if given date was yesterday</p>


