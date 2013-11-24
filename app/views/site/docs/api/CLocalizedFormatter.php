<?php
$this->pageTitle = $this->pageHeading = 'CLocalizedFormatter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CLocalizedFormatter';
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
  <td><?php echo CHtml::link('system.utils', array('/site/doc', '#' => 'system.utils')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CLocalizedFormatter &raquo;
<?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.14</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CLocalizedFormatter.php">yii\utils\CLocalizedFormatter.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Carsten Brandt &lt;mail@cebe.cc&gt;</td>
</tr>
</table>

<div id="classDescription">
CLocalizedFormatter provides a set of commonly used data formatting methods based on the current locale settings.
<br/><br/>
It provides the same functionality as <?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?>, but overrides all the settings for
<?php echo CHtml::link('booleanFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'booleanFormat')); ?>, <?php echo CHtml::link('datetimeFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'datetimeFormat')); ?> and <?php echo CHtml::link('numberFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'numberFormat')); ?> with the values for the
current locale. Because of this you are not able to configure these properties for CLocalizedFormatter directly.
Date and time format can be adjsuted by setting <?php echo CHtml::link('dateFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'dateFormat')); ?> and <?php echo CHtml::link('timeFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'timeFormat')); ?>.
<br/><br/>
It uses <?php echo CHtml::link('CApplication::locale', array('/site/doc', 'view' => 'CApplication', '#' => 'locale')); ?> by default but you can set a custom locale by using <?php echo CHtml::link('setLocale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'setLocale')); ?>-method.
<br/><br/>
For a list of recognizable format types, and details on how to call the formatter methods,
see <?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?> documentation.
<br/><br/>
To replace the application component 'format', which is registered by <?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?> by default, you can
put this in your application 'components' config:
<code>
'format' => array(
    'class' => 'CLocalizedFormatter',
),
</code></div>
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
<tr id="dateFormat">
  <td><?php echo CHtml::link('dateFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'dateFormat-detail')); ?></td>
  <td>string</td>
  <td>the width of the date pattern.</td>
  <td>CLocalizedFormatter</td>
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
<tr id="locale">
  <td><?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'locale-detail')); ?></td>
  <td><?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?></td>
  <td>$locale the locale currently used for formatting values</td>
  <td>CLocalizedFormatter</td>
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
<tr id="timeFormat">
  <td><?php echo CHtml::link('timeFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'timeFormat-detail')); ?></td>
  <td>string</td>
  <td>the width of the time pattern.</td>
  <td>CLocalizedFormatter</td>
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
<tr class="inherited" id="format">
  <td><?php echo CHtml::link('format()', array('/site/doc', 'view' => 'CFormatter', '#' => 'format-detail')); ?></td>
  <td>Formats a value based on the given type.</td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
</tr>
<tr id="formatBoolean">
  <td><?php echo CHtml::link('formatBoolean()', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'formatBoolean-detail')); ?></td>
  <td>Formats the value as a boolean.</td>
  <td>CLocalizedFormatter</td>
</tr>
<tr id="formatDate">
  <td><?php echo CHtml::link('formatDate()', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'formatDate-detail')); ?></td>
  <td>Formats the value as a date using the <?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'locale')); ?>s date formatter.</td>
  <td>CLocalizedFormatter</td>
</tr>
<tr id="formatDatetime">
  <td><?php echo CHtml::link('formatDatetime()', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'formatDatetime-detail')); ?></td>
  <td>Formats the value as a date and time using the <?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'locale')); ?>s date formatter.</td>
  <td>CLocalizedFormatter</td>
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
<tr id="formatNumber">
  <td><?php echo CHtml::link('formatNumber()', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'formatNumber-detail')); ?></td>
  <td>Formats the value as a number using the <?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'locale')); ?>s number formatter.</td>
  <td>CLocalizedFormatter</td>
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
<tr id="formatTime">
  <td><?php echo CHtml::link('formatTime()', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'formatTime-detail')); ?></td>
  <td>Formats the value as a time using the <?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'locale')); ?>s date formatter.</td>
  <td>CLocalizedFormatter</td>
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
<tr id="getLocale">
  <td><?php echo CHtml::link('getLocale()', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'getLocale-detail')); ?></td>
  <td>Returns $locale the locale currently used for formatting values</td>
  <td>CLocalizedFormatter</td>
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
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setLocale">
  <td><?php echo CHtml::link('setLocale()', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'setLocale-detail')); ?></td>
  <td>Set the locale to use for formatting values.</td>
  <td>CLocalizedFormatter</td>
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
<div class="detailHeader" id="dateFormat-detail">
dateFormat<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$dateFormat</b>;</div>

<p>the width of the date pattern. It can be 'full', 'long', 'medium' and 'short'. Defaults to 'medium'.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CDateFormatter::formatDateTime()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatDateTime')); ?></li>
</ul>
</div>

<div class="detailHeader" id="locale-detail">
locale<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?> <?php echo CHtml::link('<b>getLocale</b>', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'getLocale')); ?>()<br/>public void <?php echo CHtml::link('<b>setLocale</b>', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'setLocale')); ?>(CLocale|string $locale)</div>

<p>$locale the locale currently used for formatting values</p>


<div class="detailHeader" id="timeFormat-detail">
timeFormat<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$timeFormat</b>;</div>

<p>the width of the time pattern. It can be 'full', 'long', 'medium' and 'short'. Defaults to 'medium'.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CDateFormatter::formatDateTime()', array('/site/doc', 'view' => 'CDateFormatter', '#' => 'formatDateTime')); ?></li>
</ul>
</div>

<h2>Method Details</h2>

<div class="detailHeader" id="formatBoolean-detail">
formatBoolean()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatBoolean</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatted result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CLocalizedFormatter.php#L79">yii\utils\CLocalizedFormatter.php#L79</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatBoolean</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Yes'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'No'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a boolean.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('booleanFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'booleanFormat')); ?></li>
</ul>
</div>

<div class="detailHeader" id="formatDate-detail">
formatDate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatDate</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatted result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CLocalizedFormatter.php#L91">yii\utils\CLocalizedFormatter.php#L91</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDate</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocale</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dateFormatter</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatDateTime</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">normalizeDateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dateFormat</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a date using the <?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'locale')); ?>s date formatter.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('dateFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'dateFormat')); ?></li>
	<li><?php echo CHtml::link('CLocale::getDateFormatter()', array('/site/doc', 'view' => 'CLocale', '#' => 'getDateFormatter')); ?></li>
</ul>
</div>

<div class="detailHeader" id="formatDatetime-detail">
formatDatetime()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatDatetime</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatted result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CLocalizedFormatter.php#L116">yii\utils\CLocalizedFormatter.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDatetime</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocale</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dateFormatter</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatDateTime</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">normalizeDateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dateFormat</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeFormat</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a date and time using the <?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'locale')); ?>s date formatter.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('dateFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'dateFormat')); ?></li>
	<li><?php echo CHtml::link('timeFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'timeFormat')); ?></li>
	<li><?php echo CHtml::link('CLocale::getDateFormatter()', array('/site/doc', 'view' => 'CLocale', '#' => 'getDateFormatter')); ?></li>
</ul>
</div>

<div class="detailHeader" id="formatNumber-detail">
formatNumber()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatNumber</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatted result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CLocalizedFormatter.php#L127">yii\utils\CLocalizedFormatter.php#L127</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatNumber</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocale</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">numberFormatter</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatDecimal</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a number using the <?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'locale')); ?>s number formatter.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CLocale::getNumberFormatter()', array('/site/doc', 'view' => 'CLocale', '#' => 'getNumberFormatter')); ?></li>
</ul>
</div>

<div class="detailHeader" id="formatTime-detail">
formatTime()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatTime</b>(mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatted result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CLocalizedFormatter.php#L103">yii\utils\CLocalizedFormatter.php#L103</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatTime</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocale</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dateFormatter</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatDateTime</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">normalizeDateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeFormat</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a time using the <?php echo CHtml::link('locale', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'locale')); ?>s date formatter.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('timeFormat', array('/site/doc', 'view' => 'CLocalizedFormatter', '#' => 'timeFormat')); ?></li>
	<li><?php echo CHtml::link('CLocale::getDateFormatter()', array('/site/doc', 'view' => 'CLocale', '#' => 'getDateFormatter')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getLocale-detail">
getLocale()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?> <b>getLocale</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CLocale', array('/site/doc', 'view' => 'CLocale')); ?></td>
  <td class="paramDescCol">$locale the locale currently used for formatting values</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CLocalizedFormatter.php#L65">yii\utils\CLocalizedFormatter.php#L65</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLocale</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setLocale</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">locale</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setLocale-detail">
setLocale()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setLocale</b>(CLocale|string $locale)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$locale</td>
  <td class="paramTypeCol">CLocale|string</td>
  <td class="paramDescCol">an instance of CLocale or a locale ID</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\utils\CLocalizedFormatter.php#L54">yii\utils\CLocalizedFormatter.php#L54</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setLocale</span><span style="color: #007700">(</span><span style="color: #0000BB">$locale</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$locale</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$locale</span><span style="color: #007700">=</span><span style="color: #0000BB">CLocale</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$locale</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sizeFormat</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalSeparator'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$locale</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getNumberSymbol</span><span style="color: #007700">(</span><span style="color: #DD0000">'decimal'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_locale</span><span style="color: #007700">=</span><span style="color: #0000BB">$locale</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Set the locale to use for formatting values.</p>


