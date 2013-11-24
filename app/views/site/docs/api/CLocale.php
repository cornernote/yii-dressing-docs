<?php
$this->pageTitle = $this->pageHeading = 'CLocale';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CLocale';
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
  <td><?php echo CHtml::link('system.i18n', array('/site/doc', '#' => 'system.i18n')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CLocale &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php">yii\i18n\CLocale.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CLocale represents the data relevant to a locale.
<br/><br/>
The data includes the number formatting information and date formatting information.</div>
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
<tr id="aMName">
  <td><?php echo CHtml::link('aMName', array('/site/doc', 'view' => 'CLocale', '#' => 'aMName-detail')); ?></td>
  <td>string</td>
  <td>the AM name</td>
  <td>CLocale</td>
</tr>
<tr id="currencyFormat">
  <td><?php echo CHtml::link('currencyFormat', array('/site/doc', 'view' => 'CLocale', '#' => 'currencyFormat-detail')); ?></td>
  <td>string</td>
  <td>the currency format</td>
  <td>CLocale</td>
</tr>
<tr id="dataPath">
  <td><?php echo CHtml::link('dataPath', array('/site/doc', 'view' => 'CLocale', '#' => 'dataPath-detail')); ?></td>
  <td>string</td>
  <td>the directory that contains the locale data.</td>
  <td>CLocale</td>
</tr>
<tr id="dateFormat">
  <td><?php echo CHtml::link('dateFormat', array('/site/doc', 'view' => 'CLocale', '#' => 'dateFormat-detail')); ?></td>
  <td>string</td>
  <td>date format</td>
  <td>CLocale</td>
</tr>
<tr id="dateFormatter">
  <td><?php echo CHtml::link('dateFormatter', array('/site/doc', 'view' => 'CLocale', '#' => 'dateFormatter-detail')); ?></td>
  <td><?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?></td>
  <td>the date formatter for this locale</td>
  <td>CLocale</td>
</tr>
<tr id="dateTimeFormat">
  <td><?php echo CHtml::link('dateTimeFormat', array('/site/doc', 'view' => 'CLocale', '#' => 'dateTimeFormat-detail')); ?></td>
  <td>string</td>
  <td>datetime format, i.</td>
  <td>CLocale</td>
</tr>
<tr id="decimalFormat">
  <td><?php echo CHtml::link('decimalFormat', array('/site/doc', 'view' => 'CLocale', '#' => 'decimalFormat-detail')); ?></td>
  <td>string</td>
  <td>the decimal format</td>
  <td>CLocale</td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CLocale', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>the locale ID (in canonical form)</td>
  <td>CLocale</td>
</tr>
<tr id="localeDisplayName">
  <td><?php echo CHtml::link('localeDisplayName', array('/site/doc', 'view' => 'CLocale', '#' => 'localeDisplayName-detail')); ?></td>
  <td>string</td>
  <td>Gets a localized name from i18n data file (one of framework/i18n/data/ files).</td>
  <td>CLocale</td>
</tr>
<tr id="monthNames">
  <td><?php echo CHtml::link('monthNames', array('/site/doc', 'view' => 'CLocale', '#' => 'monthNames-detail')); ?></td>
  <td>array</td>
  <td>Returns the month names in the specified width.</td>
  <td>CLocale</td>
</tr>
<tr id="numberFormatter">
  <td><?php echo CHtml::link('numberFormatter', array('/site/doc', 'view' => 'CLocale', '#' => 'numberFormatter-detail')); ?></td>
  <td><?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?></td>
  <td>the number formatter for this locale</td>
  <td>CLocale</td>
</tr>
<tr id="orientation">
  <td><?php echo CHtml::link('orientation', array('/site/doc', 'view' => 'CLocale', '#' => 'orientation-detail')); ?></td>
  <td>string</td>
  <td>the character orientation, which is either 'ltr' (left-to-right) or 'rtl' (right-to-left)</td>
  <td>CLocale</td>
</tr>
<tr id="pMName">
  <td><?php echo CHtml::link('pMName', array('/site/doc', 'view' => 'CLocale', '#' => 'pMName-detail')); ?></td>
  <td>string</td>
  <td>the PM name</td>
  <td>CLocale</td>
</tr>
<tr id="percentFormat">
  <td><?php echo CHtml::link('percentFormat', array('/site/doc', 'view' => 'CLocale', '#' => 'percentFormat-detail')); ?></td>
  <td>string</td>
  <td>the percent format</td>
  <td>CLocale</td>
</tr>
<tr id="pluralRules">
  <td><?php echo CHtml::link('pluralRules', array('/site/doc', 'view' => 'CLocale', '#' => 'pluralRules-detail')); ?></td>
  <td>array</td>
  <td>plural forms expressions</td>
  <td>CLocale</td>
</tr>
<tr id="scientificFormat">
  <td><?php echo CHtml::link('scientificFormat', array('/site/doc', 'view' => 'CLocale', '#' => 'scientificFormat-detail')); ?></td>
  <td>string</td>
  <td>the scientific format</td>
  <td>CLocale</td>
</tr>
<tr id="timeFormat">
  <td><?php echo CHtml::link('timeFormat', array('/site/doc', 'view' => 'CLocale', '#' => 'timeFormat-detail')); ?></td>
  <td>string</td>
  <td>date format</td>
  <td>CLocale</td>
</tr>
<tr id="weekDayNames">
  <td><?php echo CHtml::link('weekDayNames', array('/site/doc', 'view' => 'CLocale', '#' => 'weekDayNames-detail')); ?></td>
  <td>array</td>
  <td>Returns the week day names in the specified width.</td>
  <td>CLocale</td>
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
  <td><?php echo CHtml::link('__call()', array('/site/doc', 'view' => 'CComponent', '#' => '__call-detail')); ?></td>
  <td>Calls the named method which is not a class method.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
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
<tr id="getAMName">
  <td><?php echo CHtml::link('getAMName()', array('/site/doc', 'view' => 'CLocale', '#' => 'getAMName-detail')); ?></td>
  <td>Returns the AM name</td>
  <td>CLocale</td>
</tr>
<tr id="getCanonicalID">
  <td><?php echo CHtml::link('getCanonicalID()', array('/site/doc', 'view' => 'CLocale', '#' => 'getCanonicalID-detail')); ?></td>
  <td>Converts a locale ID to its canonical form.</td>
  <td>CLocale</td>
</tr>
<tr id="getCurrencyFormat">
  <td><?php echo CHtml::link('getCurrencyFormat()', array('/site/doc', 'view' => 'CLocale', '#' => 'getCurrencyFormat-detail')); ?></td>
  <td>Returns the currency format</td>
  <td>CLocale</td>
</tr>
<tr id="getCurrencySymbol">
  <td><?php echo CHtml::link('getCurrencySymbol()', array('/site/doc', 'view' => 'CLocale', '#' => 'getCurrencySymbol-detail')); ?></td>
  <td>Returns the localized currency symbol. Null if the symbol does not exist.</td>
  <td>CLocale</td>
</tr>
<tr id="getDateFormat">
  <td><?php echo CHtml::link('getDateFormat()', array('/site/doc', 'view' => 'CLocale', '#' => 'getDateFormat-detail')); ?></td>
  <td>Returns date format</td>
  <td>CLocale</td>
</tr>
<tr id="getDateFormatter">
  <td><?php echo CHtml::link('getDateFormatter()', array('/site/doc', 'view' => 'CLocale', '#' => 'getDateFormatter-detail')); ?></td>
  <td>Returns the date formatter for this locale</td>
  <td>CLocale</td>
</tr>
<tr id="getDateTimeFormat">
  <td><?php echo CHtml::link('getDateTimeFormat()', array('/site/doc', 'view' => 'CLocale', '#' => 'getDateTimeFormat-detail')); ?></td>
  <td>Returns datetime format, i.e., the order of date and time.</td>
  <td>CLocale</td>
</tr>
<tr id="getDecimalFormat">
  <td><?php echo CHtml::link('getDecimalFormat()', array('/site/doc', 'view' => 'CLocale', '#' => 'getDecimalFormat-detail')); ?></td>
  <td>Returns the decimal format</td>
  <td>CLocale</td>
</tr>
<tr id="getEraName">
  <td><?php echo CHtml::link('getEraName()', array('/site/doc', 'view' => 'CLocale', '#' => 'getEraName-detail')); ?></td>
  <td>Returns the era name</td>
  <td>CLocale</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CLocale', '#' => 'getId-detail')); ?></td>
  <td>Returns the locale ID (in canonical form)</td>
  <td>CLocale</td>
</tr>
<tr id="getInstance">
  <td><?php echo CHtml::link('getInstance()', array('/site/doc', 'view' => 'CLocale', '#' => 'getInstance-detail')); ?></td>
  <td>Returns the instance of the specified locale.</td>
  <td>CLocale</td>
</tr>
<tr id="getLanguage">
  <td><?php echo CHtml::link('getLanguage()', array('/site/doc', 'view' => 'CLocale', '#' => 'getLanguage-detail')); ?></td>
  <td>Returns the local display name for the language. Null if the language code does not exist.</td>
  <td>CLocale</td>
</tr>
<tr id="getLanguageID">
  <td><?php echo CHtml::link('getLanguageID()', array('/site/doc', 'view' => 'CLocale', '#' => 'getLanguageID-detail')); ?></td>
  <td>Converts a locale ID to a language ID.</td>
  <td>CLocale</td>
</tr>
<tr id="getLocaleDisplayName">
  <td><?php echo CHtml::link('getLocaleDisplayName()', array('/site/doc', 'view' => 'CLocale', '#' => 'getLocaleDisplayName-detail')); ?></td>
  <td>Gets a localized name from i18n data file (one of framework/i18n/data/ files).</td>
  <td>CLocale</td>
</tr>
<tr id="getLocaleIDs">
  <td><?php echo CHtml::link('getLocaleIDs()', array('/site/doc', 'view' => 'CLocale', '#' => 'getLocaleIDs-detail')); ?></td>
  <td>Returns IDs of the locales which the framework can recognize</td>
  <td>CLocale</td>
</tr>
<tr id="getMonthName">
  <td><?php echo CHtml::link('getMonthName()', array('/site/doc', 'view' => 'CLocale', '#' => 'getMonthName-detail')); ?></td>
  <td>Returns the month name</td>
  <td>CLocale</td>
</tr>
<tr id="getMonthNames">
  <td><?php echo CHtml::link('getMonthNames()', array('/site/doc', 'view' => 'CLocale', '#' => 'getMonthNames-detail')); ?></td>
  <td>Returns the month names in the specified width.</td>
  <td>CLocale</td>
</tr>
<tr id="getNumberFormatter">
  <td><?php echo CHtml::link('getNumberFormatter()', array('/site/doc', 'view' => 'CLocale', '#' => 'getNumberFormatter-detail')); ?></td>
  <td>Returns the number formatter for this locale</td>
  <td>CLocale</td>
</tr>
<tr id="getNumberSymbol">
  <td><?php echo CHtml::link('getNumberSymbol()', array('/site/doc', 'view' => 'CLocale', '#' => 'getNumberSymbol-detail')); ?></td>
  <td>Returns symbol</td>
  <td>CLocale</td>
</tr>
<tr id="getOrientation">
  <td><?php echo CHtml::link('getOrientation()', array('/site/doc', 'view' => 'CLocale', '#' => 'getOrientation-detail')); ?></td>
  <td>Returns the character orientation, which is either 'ltr' (left-to-right) or 'rtl' (right-to-left)</td>
  <td>CLocale</td>
</tr>
<tr id="getPMName">
  <td><?php echo CHtml::link('getPMName()', array('/site/doc', 'view' => 'CLocale', '#' => 'getPMName-detail')); ?></td>
  <td>Returns the PM name</td>
  <td>CLocale</td>
</tr>
<tr id="getPercentFormat">
  <td><?php echo CHtml::link('getPercentFormat()', array('/site/doc', 'view' => 'CLocale', '#' => 'getPercentFormat-detail')); ?></td>
  <td>Returns the percent format</td>
  <td>CLocale</td>
</tr>
<tr id="getPluralRules">
  <td><?php echo CHtml::link('getPluralRules()', array('/site/doc', 'view' => 'CLocale', '#' => 'getPluralRules-detail')); ?></td>
  <td>Returns plural forms expressions</td>
  <td>CLocale</td>
</tr>
<tr id="getScientificFormat">
  <td><?php echo CHtml::link('getScientificFormat()', array('/site/doc', 'view' => 'CLocale', '#' => 'getScientificFormat-detail')); ?></td>
  <td>Returns the scientific format</td>
  <td>CLocale</td>
</tr>
<tr id="getScript">
  <td><?php echo CHtml::link('getScript()', array('/site/doc', 'view' => 'CLocale', '#' => 'getScript-detail')); ?></td>
  <td>Returns the local display name for the script. Null if the script code does not exist.</td>
  <td>CLocale</td>
</tr>
<tr id="getScriptID">
  <td><?php echo CHtml::link('getScriptID()', array('/site/doc', 'view' => 'CLocale', '#' => 'getScriptID-detail')); ?></td>
  <td>Converts a locale ID to a script ID.</td>
  <td>CLocale</td>
</tr>
<tr id="getTerritory">
  <td><?php echo CHtml::link('getTerritory()', array('/site/doc', 'view' => 'CLocale', '#' => 'getTerritory-detail')); ?></td>
  <td>Returns the local display name for the territory. Null if the territory code does not exist.</td>
  <td>CLocale</td>
</tr>
<tr id="getTerritoryID">
  <td><?php echo CHtml::link('getTerritoryID()', array('/site/doc', 'view' => 'CLocale', '#' => 'getTerritoryID-detail')); ?></td>
  <td>Converts a locale ID to a territory ID.</td>
  <td>CLocale</td>
</tr>
<tr id="getTimeFormat">
  <td><?php echo CHtml::link('getTimeFormat()', array('/site/doc', 'view' => 'CLocale', '#' => 'getTimeFormat-detail')); ?></td>
  <td>Returns date format</td>
  <td>CLocale</td>
</tr>
<tr id="getWeekDayName">
  <td><?php echo CHtml::link('getWeekDayName()', array('/site/doc', 'view' => 'CLocale', '#' => 'getWeekDayName-detail')); ?></td>
  <td>Returns the weekday name</td>
  <td>CLocale</td>
</tr>
<tr id="getWeekDayNames">
  <td><?php echo CHtml::link('getWeekDayNames()', array('/site/doc', 'view' => 'CLocale', '#' => 'getWeekDayNames-detail')); ?></td>
  <td>Returns the week day names in the specified width.</td>
  <td>CLocale</td>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CLocale', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CLocale</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="aMName-detail">
aMName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getAMName</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getAMName')); ?>()</div>

<p>the AM name</p>


<div class="detailHeader" id="currencyFormat-detail">
currencyFormat<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getCurrencyFormat</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getCurrencyFormat')); ?>()</div>

<p>the currency format</p>


<div class="detailHeader" id="dataPath-detail">
dataPath<span class="detailHeaderTag">
property
 (available since v1.1.0)
</span>
</div>

<div class="signature">
public static string <b>$dataPath</b>;</div>

<p>the directory that contains the locale data. If this property is not set,
the locale data will be loaded from 'framework/i18n/data'.</p>


<div class="detailHeader" id="dateFormat-detail">
dateFormat<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getDateFormat</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getDateFormat')); ?>(string $width='medium')</div>

<p>date format</p>


<div class="detailHeader" id="dateFormatter-detail">
dateFormatter<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?> <?php echo CHtml::link('<b>getDateFormatter</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getDateFormatter')); ?>()</div>

<p>the date formatter for this locale</p>


<div class="detailHeader" id="dateTimeFormat-detail">
dateTimeFormat<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getDateTimeFormat</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getDateTimeFormat')); ?>()</div>

<p>datetime format, i.e., the order of date and time.</p>


<div class="detailHeader" id="decimalFormat-detail">
decimalFormat<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getDecimalFormat</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getDecimalFormat')); ?>()</div>

<p>the decimal format</p>


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getId</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getId')); ?>()</div>

<p>the locale ID (in canonical form)</p>


<div class="detailHeader" id="localeDisplayName-detail">
localeDisplayName<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.9)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLocaleDisplayName</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getLocaleDisplayName')); ?>(string $id=NULL, string $category='languages')</div>

<p>Gets a localized name from i18n data file (one of framework/i18n/data/ files).</p>


<div class="detailHeader" id="monthNames-detail">
monthNames<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getMonthNames</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getMonthNames')); ?>(string $width='wide', boolean $standAlone=false)</div>

<p>Returns the month names in the specified width.</p>


<div class="detailHeader" id="numberFormatter-detail">
numberFormatter<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?> <?php echo CHtml::link('<b>getNumberFormatter</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getNumberFormatter')); ?>()</div>

<p>the number formatter for this locale</p>


<div class="detailHeader" id="orientation-detail">
orientation<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.2)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getOrientation</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getOrientation')); ?>()</div>

<p>the character orientation, which is either 'ltr' (left-to-right) or 'rtl' (right-to-left)</p>


<div class="detailHeader" id="pMName-detail">
pMName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getPMName</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getPMName')); ?>()</div>

<p>the PM name</p>


<div class="detailHeader" id="percentFormat-detail">
percentFormat<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getPercentFormat</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getPercentFormat')); ?>()</div>

<p>the percent format</p>


<div class="detailHeader" id="pluralRules-detail">
pluralRules<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getPluralRules</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getPluralRules')); ?>()</div>

<p>plural forms expressions</p>


<div class="detailHeader" id="scientificFormat-detail">
scientificFormat<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getScientificFormat</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getScientificFormat')); ?>()</div>

<p>the scientific format</p>


<div class="detailHeader" id="timeFormat-detail">
timeFormat<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getTimeFormat</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getTimeFormat')); ?>(string $width='medium')</div>

<p>date format</p>


<div class="detailHeader" id="weekDayNames-detail">
weekDayNames<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getWeekDayNames</b>', array('/site/doc', 'view' => 'CLocale', '#' => 'getWeekDayNames')); ?>(string $width='wide', boolean $standAlone=false)</div>

<p>Returns the week day names in the specified width.</p>


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
protected void <b>__construct</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the locale ID (e.g. en_US)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L97">yii\i18n\CLocale.php#L97</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_id</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getCanonicalID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">).</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dataFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_id</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$dataFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">=require(</span><span style="color: #0000BB">$dataFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unrecognized&nbsp;locale&nbsp;"{locale}".'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{locale}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.
Since the constructor is protected, please use <?php echo CHtml::link('getInstance', array('/site/doc', 'view' => 'CLocale', '#' => 'getInstance')); ?>
to obtain an instance of the specified locale.</p>


<div class="detailHeader" id="getAMName-detail">
getAMName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getAMName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the AM name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L267">yii\i18n\CLocale.php#L267</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAMName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'amName'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getCanonicalID-detail">
getCanonicalID()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getCanonicalID</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the locale ID to be converted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the locale ID in canonical form</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L114">yii\i18n\CLocale.php#L114</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getCanonicalID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,</span><span style="color: #0000BB">$id</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Converts a locale ID to its canonical form.
In canonical form, a locale ID consists of only underscores and lower-case letters.</p>


<div class="detailHeader" id="getCurrencyFormat-detail">
getCurrencyFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getCurrencyFormat</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the currency format</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L176">yii\i18n\CLocale.php#L176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCurrencyFormat</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'currencyFormat'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getCurrencySymbol-detail">
getCurrencySymbol()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getCurrencySymbol</b>(string $currency)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$currency</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">3-letter ISO 4217 code. For example, the code "USD" represents the US Dollar and "EUR" represents the Euro currency.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the localized currency symbol. Null if the symbol does not exist.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L151">yii\i18n\CLocale.php#L151</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCurrencySymbol</span><span style="color: #007700">(</span><span style="color: #0000BB">$currency</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'currencySymbols'</span><span style="color: #007700">][</span><span style="color: #0000BB">$currency</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'currencySymbols'</span><span style="color: #007700">][</span><span style="color: #0000BB">$currency</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getDateFormat-detail">
getDateFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getDateFormat</b>(string $width='medium')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$width</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">date format width. It can be 'full', 'long', 'medium' or 'short'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">date format</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L284">yii\i18n\CLocale.php#L284</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDateFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">=</span><span style="color: #DD0000">'medium'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'dateFormats'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getDateFormatter-detail">
getDateFormatter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?> <b>getDateFormatter</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDateFormatter', array('/site/doc', 'view' => 'CDateFormatter')); ?></td>
  <td class="paramDescCol">the date formatter for this locale</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L140">yii\i18n\CLocale.php#L140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDateFormatter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_dateFormatter</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_dateFormatter</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDateFormatter</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_dateFormatter</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getDateTimeFormat-detail">
getDateTimeFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getDateTimeFormat</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">datetime format, i.e., the order of date and time.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L301">yii\i18n\CLocale.php#L301</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDateTimeFormat</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'dateTimeFormat'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getDecimalFormat-detail">
getDecimalFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getDecimalFormat</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the decimal format</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L168">yii\i18n\CLocale.php#L168</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDecimalFormat</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalFormat'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getEraName-detail">
getEraName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getEraName</b>(integer $era, string $width='wide')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$era</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">era (0,1)</td>
</tr>
<tr>
  <td class="paramNameCol">$width</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">era name width.  It can be 'wide', 'abbreviated' or 'narrow'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the era name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L259">yii\i18n\CLocale.php#L259</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getEraName</span><span style="color: #007700">(</span><span style="color: #0000BB">$era</span><span style="color: #007700">,</span><span style="color: #0000BB">$width</span><span style="color: #007700">=</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'eraNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$era</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getId-detail">
getId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the locale ID (in canonical form)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L122">yii\i18n\CLocale.php#L122</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_id</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getInstance-detail">
getInstance()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static CLocale <b>getInstance</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the locale ID (e.g. en_US)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CLocale</td>
  <td class="paramDescCol">the locale instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L58">yii\i18n\CLocale.php#L58</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$locales</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$locales</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$locales</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$locales</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CLocale</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the instance of the specified locale.
Since the constructor of CLocale is protected, you can only use
this method to obtain an instance of the specified locale.</p>


<div class="detailHeader" id="getLanguage-detail">
getLanguage()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLanguage</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Unicode language identifier from IETF BCP 47. For example, the code "en_US" represents U.S. English and "en_GB" represents British English.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the local display name for the language. Null if the language code does not exist.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L447">yii\i18n\CLocale.php#L447</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLanguage</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLanguageID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocaleDisplayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'languages'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getLanguageID-detail">
getLanguageID()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLanguageID</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the locale ID to be converted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the language ID</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L330">yii\i18n\CLocale.php#L330</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLanguageID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;normalize&nbsp;id<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCanonicalID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;remove&nbsp;sub&nbsp;tags<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if((</span><span style="color: #0000BB">$underscorePosition</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_'</span><span style="color: #007700">))!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$underscorePosition</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a locale ID to a language ID.
A language ID consists of only the first group of letters before an underscore or dash.</p>


<div class="detailHeader" id="getLocaleDisplayName-detail">
getLocaleDisplayName()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLocaleDisplayName</b>(string $id=NULL, string $category='languages')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">array key from an array named by $category.</td>
</tr>
<tr>
  <td class="paramNameCol">$category</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">data category. One of 'languages', 'scripts' or 'territories'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the localized name for the id specified. Null if data does not exist.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L418">yii\i18n\CLocale.php#L418</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLocaleDisplayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$category</span><span style="color: #007700">=</span><span style="color: #DD0000">'languages'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCanonicalID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$category&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'languages'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$id</span><span style="color: #007700">])))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$id</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;((</span><span style="color: #0000BB">$category&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'scripts'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$val</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getScriptID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">))&nbsp;&amp;&amp;&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$val</span><span style="color: #007700">])))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$val</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;((</span><span style="color: #0000BB">$category&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'territories'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$val</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTerritoryID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">))&nbsp;&amp;&amp;&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$val</span><span style="color: #007700">])))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$val</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$id</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$id</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Gets a localized name from i18n data file (one of framework/i18n/data/ files).</p>


<div class="detailHeader" id="getLocaleIDs-detail">
getLocaleIDs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>getLocaleIDs</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">IDs of the locales which the framework can recognize</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L70">yii\i18n\CLocale.php#L70</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getLocaleIDs</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$locales</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$locales</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$locales</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">).</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$folder</span><span style="color: #007700">=@</span><span style="color: #0000BB">opendir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while((</span><span style="color: #0000BB">$file</span><span style="color: #007700">=@</span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$folder</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fullPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$dataPath</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,-</span><span style="color: #0000BB">4</span><span style="color: #007700">)===</span><span style="color: #DD0000">'.php'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$locales</span><span style="color: #007700">[]=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,-</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">closedir</span><span style="color: #007700">(</span><span style="color: #0000BB">$folder</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$locales</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$locales</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getMonthName-detail">
getMonthName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getMonthName</b>(integer $month, string $width='wide', boolean $standAlone=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$month</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">month (1-12)</td>
</tr>
<tr>
  <td class="paramNameCol">$width</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">month name width. It can be 'wide', 'abbreviated' or 'narrow'.</td>
</tr>
<tr>
  <td class="paramNameCol">$standAlone</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the month name should be returned in stand-alone format</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the month name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L203">yii\i18n\CLocale.php#L203</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMonthName</span><span style="color: #007700">(</span><span style="color: #0000BB">$month</span><span style="color: #007700">,</span><span style="color: #0000BB">$width</span><span style="color: #007700">=</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">,</span><span style="color: #0000BB">$standAlone</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$standAlone</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$month</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$month</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$month</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$month</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$month</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$month</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getMonthNames-detail">
getMonthNames()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getMonthNames</b>(string $width='wide', boolean $standAlone=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$width</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">month name width. It can be 'wide', 'abbreviated' or 'narrow'.</td>
</tr>
<tr>
  <td class="paramNameCol">$standAlone</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the month names should be returned in stand-alone format</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">month names indexed by month values (1-12)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L217">yii\i18n\CLocale.php#L217</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMonthNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">=</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">,</span><span style="color: #0000BB">$standAlone</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$standAlone</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'monthNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the month names in the specified width.</p>


<div class="detailHeader" id="getNumberFormatter-detail">
getNumberFormatter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?> <b>getNumberFormatter</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CNumberFormatter', array('/site/doc', 'view' => 'CNumberFormatter')); ?></td>
  <td class="paramDescCol">the number formatter for this locale</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L130">yii\i18n\CLocale.php#L130</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getNumberFormatter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_numberFormatter</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_numberFormatter</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CNumberFormatter</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_numberFormatter</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getNumberSymbol-detail">
getNumberSymbol()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getNumberSymbol</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">symbol name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">symbol</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L160">yii\i18n\CLocale.php#L160</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getNumberSymbol</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'numberSymbols'</span><span style="color: #007700">][</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'numberSymbols'</span><span style="color: #007700">][</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getOrientation-detail">
getOrientation()
<span class="detailHeaderTag">
method
(available since v1.1.2)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getOrientation</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the character orientation, which is either 'ltr' (left-to-right) or 'rtl' (right-to-left)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L310">yii\i18n\CLocale.php#L310</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOrientation</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'orientation'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'orientation'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">'ltr'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPMName-detail">
getPMName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPMName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the PM name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L275">yii\i18n\CLocale.php#L275</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPMName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'pmName'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPercentFormat-detail">
getPercentFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPercentFormat</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the percent format</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L184">yii\i18n\CLocale.php#L184</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPercentFormat</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'percentFormat'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPluralRules-detail">
getPluralRules()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getPluralRules</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">plural forms expressions</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L318">yii\i18n\CLocale.php#L318</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPluralRules</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'pluralRules'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'pluralRules'</span><span style="color: #007700">]&nbsp;:&nbsp;array(</span><span style="color: #0000BB">0</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'true'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getScientificFormat-detail">
getScientificFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getScientificFormat</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the scientific format</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L192">yii\i18n\CLocale.php#L192</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getScientificFormat</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'scientificFormat'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getScript-detail">
getScript()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getScript</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Unicode script identifier from IETF BCP 47. For example, the code "en_US" represents U.S. English and "en_GB" represents British English.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the local display name for the script. Null if the script code does not exist.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L458">yii\i18n\CLocale.php#L458</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocaleDisplayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'scripts'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getScriptID-detail">
getScriptID()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getScriptID</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the locale ID to be converted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the script ID</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L349">yii\i18n\CLocale.php#L349</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getScriptID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;normalize&nbsp;id<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCanonicalID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;sub&nbsp;tags<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if((</span><span style="color: #0000BB">$underscorePosition</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$subTag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;script&nbsp;sub&nbsp;tags&nbsp;can&nbsp;be&nbsp;distigused&nbsp;from&nbsp;territory&nbsp;sub&nbsp;tags&nbsp;by&nbsp;length<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$subTag</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])===</span><span style="color: #0000BB">4</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$subTag</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a locale ID to a script ID.
A script ID consists of only the last four characters after an underscore or dash.</p>


<div class="detailHeader" id="getTerritory-detail">
getTerritory()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getTerritory</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Unicode territory identifier from IETF BCP 47. For example, the code "en_US" represents U.S. English and "en_GB" represents British English.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the local display name for the territory. Null if the territory code does not exist.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L468">yii\i18n\CLocale.php#L468</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTerritory</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLocaleDisplayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'territories'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getTerritoryID-detail">
getTerritoryID()
<span class="detailHeaderTag">
method
(available since v1.1.9)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getTerritoryID</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the locale ID to be converted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the territory ID</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L381">yii\i18n\CLocale.php#L381</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTerritoryID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;normalize&nbsp;id<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCanonicalID</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;sub&nbsp;tags<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">$underscorePosition</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_'</span><span style="color: #007700">))!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$subTag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;territory&nbsp;sub&nbsp;tags&nbsp;can&nbsp;be&nbsp;distigused&nbsp;from&nbsp;script&nbsp;sub&nbsp;tags&nbsp;by&nbsp;length<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(isset(</span><span style="color: #0000BB">$subTag</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$subTag</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">])&lt;</span><span style="color: #0000BB">4</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$subTag</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$subTag</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])&lt;</span><span style="color: #0000BB">4</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$subTag</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts a locale ID to a territory ID.
A territory ID consists of only the last two to three letter or digits after an underscore or dash.</p>


<div class="detailHeader" id="getTimeFormat-detail">
getTimeFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getTimeFormat</b>(string $width='medium')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$width</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">time format width. It can be 'full', 'long', 'medium' or 'short'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">date format</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L293">yii\i18n\CLocale.php#L293</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTimeFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">=</span><span style="color: #DD0000">'medium'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'timeFormats'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getWeekDayName-detail">
getWeekDayName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getWeekDayName</b>(integer $day, string $width='wide', boolean $standAlone=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$day</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">weekday (0-7, 0 and 7 means Sunday)</td>
</tr>
<tr>
  <td class="paramNameCol">$width</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">weekday name width.  It can be 'wide', 'abbreviated' or 'narrow'.</td>
</tr>
<tr>
  <td class="paramNameCol">$standAlone</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the week day name should be returned in stand-alone format</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the weekday name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L231">yii\i18n\CLocale.php#L231</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getWeekDayName</span><span style="color: #007700">(</span><span style="color: #0000BB">$day</span><span style="color: #007700">,</span><span style="color: #0000BB">$width</span><span style="color: #007700">=</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">,</span><span style="color: #0000BB">$standAlone</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$day</span><span style="color: #007700">=</span><span style="color: #0000BB">$day</span><span style="color: #007700">%</span><span style="color: #0000BB">7</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$standAlone</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$day</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$day</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$day</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$day</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$day</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">][</span><span style="color: #0000BB">$day</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getWeekDayNames-detail">
getWeekDayNames()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getWeekDayNames</b>(string $width='wide', boolean $standAlone=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$width</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">weekday name width.  It can be 'wide', 'abbreviated' or 'narrow'.</td>
</tr>
<tr>
  <td class="paramNameCol">$standAlone</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the week day name should be returned in stand-alone format</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the weekday names indexed by weekday values (0-6, 0 means Sunday, 1 Monday, etc.)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\CLocale.php#L246">yii\i18n\CLocale.php#L246</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getWeekDayNames</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">=</span><span style="color: #DD0000">'wide'</span><span style="color: #007700">,</span><span style="color: #0000BB">$standAlone</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$standAlone</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNames'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'weekDayNamesSA'</span><span style="color: #007700">][</span><span style="color: #0000BB">$width</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the week day names in the specified width.</p>


