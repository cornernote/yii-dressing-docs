<?php
$this->pageTitle = $this->pageHeading = 'CFormatter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CFormatter';
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
  <td>class CFormatter &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CLocalizedFormatter', array('/site/doc', 'view' => 'CLocalizedFormatter')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php">yii/utils/CFormatter.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CFormatter provides a set of commonly used data formatting methods.
<br/><br/>
The formatting methods provided by CFormatter are all named in the form of <code>formatXyz</code>.
The behavior of some of them may be configured via the properties of CFormatter. For example,
by configuring <?php echo CHtml::link('dateFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'dateFormat')); ?>, one may control how <?php echo CHtml::link('formatDate', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatDate')); ?> formats the value into a date string.
<br/><br/>
For convenience, CFormatter also implements the mechanism of calling formatting methods with their shortcuts (called types).
In particular, if a formatting method is named <code>formatXyz</code>, then its shortcut method is <code>xyz</code>
(case-insensitive). For example, calling <code>$formatter->date($value)</code> is equivalent to calling
<code>$formatter->formatDate($value)</code>.
<br/><br/>
Currently, the following types are recognizable:
<ul>
<li>raw: the attribute value will not be changed at all.</li>
<li>text: the attribute value will be HTML-encoded when rendering.</li>
<li>ntext: the <?php echo CHtml::link('formatNtext', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatNtext')); ?> method will be called to format the attribute value as a HTML-encoded plain text with newlines converted as the HTML &lt;br /&gt; or &lt;p&gt;&lt;/p&gt; tags.</li>
<li>html: the attribute value will be purified and then returned.</li>
<li>date: the <?php echo CHtml::link('formatDate', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatDate')); ?> method will be called to format the attribute value as a date.</li>
<li>time: the <?php echo CHtml::link('formatTime', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatTime')); ?> method will be called to format the attribute value as a time.</li>
<li>datetime: the <?php echo CHtml::link('formatDatetime', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatDatetime')); ?> method will be called to format the attribute value as a date with time.</li>
<li>boolean: the <?php echo CHtml::link('formatBoolean', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatBoolean')); ?> method will be called to format the attribute value as a boolean display.</li>
<li>number: the <?php echo CHtml::link('formatNumber', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatNumber')); ?> method will be called to format the attribute value as a number display.</li>
<li>email: the <?php echo CHtml::link('formatEmail', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatEmail')); ?> method will be called to format the attribute value as a mailto link.</li>
<li>image: the <?php echo CHtml::link('formatImage', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatImage')); ?> method will be called to format the attribute value as an image tag where the attribute value is the image URL.</li>
<li>url: the <?php echo CHtml::link('formatUrl', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatUrl')); ?> method will be called to format the attribute value as a hyperlink where the attribute value is the URL.</li>
<li>size: the <?php echo CHtml::link('formatSize', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatSize')); ?> method will be called to format the attribute value, interpreted as a number of bytes, as a size in human readable form.</li>
</ul>
<br/><br/>
By default, <?php echo CHtml::link('CApplication', array('/site/doc', 'view' => 'CApplication')); ?> registers <?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?> as an application component whose ID is 'format'.
Therefore, one may call <code>Yii::app()->format->boolean(1)</code>.
You might want to replace this component with <?php echo CHtml::link('CLocalizedFormatter', array('/site/doc', 'view' => 'CLocalizedFormatter')); ?> to enable formatting based on the
current locale settings.</div>
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
<tr id="booleanFormat">
  <td><?php echo CHtml::link('booleanFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'booleanFormat-detail')); ?></td>
  <td>array</td>
  <td>the text to be displayed when formatting a boolean value.</td>
  <td>CFormatter</td>
</tr>
<tr id="dateFormat">
  <td><?php echo CHtml::link('dateFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'dateFormat-detail')); ?></td>
  <td>string</td>
  <td>the format string to be used to format a date using PHP date() function.</td>
  <td>CFormatter</td>
</tr>
<tr id="datetimeFormat">
  <td><?php echo CHtml::link('datetimeFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'datetimeFormat-detail')); ?></td>
  <td>string</td>
  <td>the format string to be used to format a date and time using PHP date() function.</td>
  <td>CFormatter</td>
</tr>
<tr id="htmlPurifier">
  <td><?php echo CHtml::link('htmlPurifier', array('/site/doc', 'view' => 'CFormatter', '#' => 'htmlPurifier-detail')); ?></td>
  <td><?php echo CHtml::link('CHtmlPurifier', array('/site/doc', 'view' => 'CHtmlPurifier')); ?></td>
  <td>the HTML purifier instance</td>
  <td>CFormatter</td>
</tr>
<tr id="htmlPurifierOptions">
  <td><?php echo CHtml::link('htmlPurifierOptions', array('/site/doc', 'view' => 'CFormatter', '#' => 'htmlPurifierOptions-detail')); ?></td>
  <td>array</td>
  <td>the options to be passed to CHtmlPurifier instance used in this class.</td>
  <td>CFormatter</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="numberFormat">
  <td><?php echo CHtml::link('numberFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'numberFormat-detail')); ?></td>
  <td>array</td>
  <td>the format used to format a number with PHP number_format() function.</td>
  <td>CFormatter</td>
</tr>
<tr id="sizeFormat">
  <td><?php echo CHtml::link('sizeFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'sizeFormat-detail')); ?></td>
  <td>array</td>
  <td>the format used to format size (bytes).</td>
  <td>CFormatter</td>
</tr>
<tr id="timeFormat">
  <td><?php echo CHtml::link('timeFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'timeFormat-detail')); ?></td>
  <td>string</td>
  <td>the format string to be used to format a time using PHP date() function.</td>
  <td>CFormatter</td>
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
<tr id="__call">
  <td><?php echo CHtml::link('__call()', array('/site/doc', 'view' => 'CFormatter', '#' => '__call-detail')); ?></td>
  <td>Calls the format method when its shortcut is invoked.</td>
  <td>CFormatter</td>
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
  <td><?php echo CHtml::link('format()', array('/site/doc', 'view' => 'CFormatter', '#' => 'format-detail')); ?></td>
  <td>Formats a value based on the given type.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatBoolean">
  <td><?php echo CHtml::link('formatBoolean()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatBoolean-detail')); ?></td>
  <td>Formats the value as a boolean.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatDate">
  <td><?php echo CHtml::link('formatDate()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatDate-detail')); ?></td>
  <td>Formats the value as a date.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatDatetime">
  <td><?php echo CHtml::link('formatDatetime()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatDatetime-detail')); ?></td>
  <td>Formats the value as a date and time.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatEmail">
  <td><?php echo CHtml::link('formatEmail()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatEmail-detail')); ?></td>
  <td>Formats the value as a mailto link.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatHtml">
  <td><?php echo CHtml::link('formatHtml()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatHtml-detail')); ?></td>
  <td>Formats the value as HTML text without any encoding.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatImage">
  <td><?php echo CHtml::link('formatImage()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatImage-detail')); ?></td>
  <td>Formats the value as an image tag.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatNtext">
  <td><?php echo CHtml::link('formatNtext()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatNtext-detail')); ?></td>
  <td>Formats the value as a HTML-encoded plain text and converts newlines with HTML &lt;br /&gt; or</td>
  <td>CFormatter</td>
</tr>
<tr id="formatNumber">
  <td><?php echo CHtml::link('formatNumber()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatNumber-detail')); ?></td>
  <td>Formats the value as a number using PHP number_format() function.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatRaw">
  <td><?php echo CHtml::link('formatRaw()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatRaw-detail')); ?></td>
  <td>Formats the value as is without any formatting.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatSize">
  <td><?php echo CHtml::link('formatSize()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatSize-detail')); ?></td>
  <td>Formats the value in bytes as a size in human readable form.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatText">
  <td><?php echo CHtml::link('formatText()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatText-detail')); ?></td>
  <td>Formats the value as a HTML-encoded plain text.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatTime">
  <td><?php echo CHtml::link('formatTime()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatTime-detail')); ?></td>
  <td>Formats the value as a time.</td>
  <td>CFormatter</td>
</tr>
<tr id="formatUrl">
  <td><?php echo CHtml::link('formatUrl()', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatUrl-detail')); ?></td>
  <td>Formats the value as a hyperlink.</td>
  <td>CFormatter</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getHtmlPurifier">
  <td><?php echo CHtml::link('getHtmlPurifier()', array('/site/doc', 'view' => 'CFormatter', '#' => 'getHtmlPurifier-detail')); ?></td>
  <td>Returns the HTML purifier instance</td>
  <td>CFormatter</td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
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
<tr id="normalizeDateValue">
  <td><?php echo CHtml::link('normalizeDateValue()', array('/site/doc', 'view' => 'CFormatter', '#' => 'normalizeDateValue-detail')); ?></td>
  <td>Normalizes an expression as a timestamp.</td>
  <td>CFormatter</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="booleanFormat-detail">
booleanFormat<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$booleanFormat</b>;</div>

<p>the text to be displayed when formatting a boolean value. The first element corresponds
to the text display for false, the second element for true. Defaults to <code>array('No', 'Yes')</code>.</p>


<div class="detailHeader" id="dateFormat-detail">
dateFormat<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$dateFormat</b>;</div>

<p>the format string to be used to format a date using PHP date() function. Defaults to 'Y/m/d'.</p>


<div class="detailHeader" id="datetimeFormat-detail">
datetimeFormat<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$datetimeFormat</b>;</div>

<p>the format string to be used to format a date and time using PHP date() function. Defaults to 'Y/m/d h:i:s A'.</p>


<div class="detailHeader" id="htmlPurifier-detail">
htmlPurifier<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CHtmlPurifier', array('/site/doc', 'view' => 'CHtmlPurifier')); ?> <?php echo CHtml::link('<b>getHtmlPurifier</b>', array('/site/doc', 'view' => 'CFormatter', '#' => 'getHtmlPurifier')); ?>()</div>

<p>the HTML purifier instance</p>


<div class="detailHeader" id="htmlPurifierOptions-detail">
htmlPurifierOptions<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public array <b>$htmlPurifierOptions</b>;</div>

<p>the options to be passed to CHtmlPurifier instance used in this class. CHtmlPurifier is used
in <?php echo CHtml::link('formatHtml', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatHtml')); ?> method, so this property could be useful to customize HTML filtering behavior.</p>


<div class="detailHeader" id="numberFormat-detail">
numberFormat<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$numberFormat</b>;</div>

<p>the format used to format a number with PHP number_format() function.
Three elements may be specified: "decimals", "decimalSeparator" and "thousandSeparator".
They correspond to the number of digits after the decimal point, the character displayed as the decimal point
and the thousands separator character.</p>


<div class="detailHeader" id="sizeFormat-detail">
sizeFormat<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public array <b>$sizeFormat</b>;</div>

<p>the format used to format size (bytes). Three elements may be specified: "base", "decimals" and "decimalSeparator".
They correspond to the base at which a kilobyte is calculated (1000 or 1024 bytes per kilobyte, defaults to 1024),
the number of digits after the decimal point (defaults to 2) and the character displayed as the decimal point.
"decimalSeparator" is available since version 1.1.13</p>


<div class="detailHeader" id="timeFormat-detail">
timeFormat<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$timeFormat</b>;</div>

<p>the format string to be used to format a time using PHP date() function. Defaults to 'h:i:s A'.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="__call-detail">
__call()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>__call</b>(string $name, array $parameters)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the method name</td>
</tr>
<tr>
  <td class="paramNameCol">$parameters</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">method parameters</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the method return value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L108">yii/utils/CFormatter.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__call</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$parameters</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">method_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'format'</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'format'</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">),</span><span style="color: #0000BB">$parameters</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__call</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$parameters</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Calls the format method when its shortcut is invoked.
This is a PHP magic method that we override to implement the shortcut format methods.</p>


<div class="detailHeader" id="format-detail">
format()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>format</b>(mixed $value, string $type)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the data type. This must correspond to a format method available in CFormatter.
For example, we can use 'text' here because there is method named <?php echo CHtml::link('formatText', array('/site/doc', 'view' => 'CFormatter', '#' => 'formatText')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatted data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L124">yii/utils/CFormatter.php#L124</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">=</span><span style="color: #DD0000">'format'</span><span style="color: #007700">.</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">method_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$method</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$method</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unknown&nbsp;type&nbsp;"{type}".'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{type}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Formats a value based on the given type.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L246">yii/utils/CFormatter.php#L246</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatBoolean</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">booleanFormat</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">booleanFormat</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a boolean.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('booleanFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'booleanFormat')); ?></li>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L196">yii/utils/CFormatter.php#L196</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDate</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dateFormat</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">normalizeDateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a date.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('dateFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'dateFormat')); ?></li>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L218">yii/utils/CFormatter.php#L218</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatDatetime</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">datetimeFormat</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">normalizeDateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a date and time.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('datetimeFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'datetimeFormat')); ?></li>
</ul>
</div>

<div class="detailHeader" id="formatEmail-detail">
formatEmail()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatEmail</b>(mixed $value)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L256">yii/utils/CFormatter.php#L256</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">mailto</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a mailto link.</p>


<div class="detailHeader" id="formatHtml-detail">
formatHtml()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatHtml</b>(mixed $value)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L185">yii/utils/CFormatter.php#L185</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHtmlPurifier</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">purify</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as HTML text without any encoding.</p>


<div class="detailHeader" id="formatImage-detail">
formatImage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatImage</b>(mixed $value)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L266">yii/utils/CFormatter.php#L266</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as an image tag.</p>


<div class="detailHeader" id="formatNtext-detail">
formatNtext()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatNtext</b>(mixed $value, boolean $paragraphs=false, boolean $removeEmptyParagraphs=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the value to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">$paragraphs</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether newlines should be converted to HTML &lt;p&gt;&lt;/p&gt; tags,
false by default meaning that HTML &lt;br /&gt; tags will be used</td>
</tr>
<tr>
  <td class="paramNameCol">$removeEmptyParagraphs</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether empty paragraphs should be removed, defaults to true;
makes sense only when $paragraphs parameter is true</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatted result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L164">yii/utils/CFormatter.php#L164</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatNtext</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$paragraphs</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$removeEmptyParagraphs</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$paragraphs</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;p&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(array(</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\r"</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'&lt;/p&gt;&lt;p&gt;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$removeEmptyParagraphs</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(&lt;\/p&gt;&lt;p&gt;){2,}/i'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;/p&gt;&lt;p&gt;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">nl2br</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a HTML-encoded plain text and converts newlines with HTML &lt;br /&gt; or
&lt;p&gt;&lt;/p&gt; tags.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L290">yii/utils/CFormatter.php#L290</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatNumber</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">number_format</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">numberFormat</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimals'</span><span style="color: #007700">],</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">numberFormat</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalSeparator'</span><span style="color: #007700">],</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">numberFormat</span><span style="color: #007700">[</span><span style="color: #DD0000">'thousandSeparator'</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a number using PHP number_format() function.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('numberFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'numberFormat')); ?></li>
</ul>
</div>

<div class="detailHeader" id="formatRaw-detail">
formatRaw()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatRaw</b>(mixed $value)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L139">yii/utils/CFormatter.php#L139</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatRaw</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as is without any formatting.
This method simply returns back the parameter without any format.</p>


<div class="detailHeader" id="formatSize-detail">
formatSize()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatSize</b>(integer $value, boolean $verbose=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">value in bytes to be formatted</td>
</tr>
<tr>
  <td class="paramNameCol">$verbose</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">if full names should be used (e.g. bytes, kilobytes, ...).
Defaults to false meaning that short names will be used (e.g. B, KB, ...).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the formatted result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L315">yii/utils/CFormatter.php#L315</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatSize</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$verbose</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$base</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sizeFormat</span><span style="color: #007700">[</span><span style="color: #DD0000">'base'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$base</span><span style="color: #007700">&lt;=</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">5</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">/</span><span style="color: #0000BB">$base</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sizeFormat</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimals'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$formattedValue</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sizeFormat</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalSeparator'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sizeFormat</span><span style="color: #007700">[</span><span style="color: #DD0000">'decimalSeparator'</span><span style="color: #007700">],</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$formattedValue</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$verbose&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}&nbsp;byte|{n}&nbsp;bytes'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'{n}&nbsp;B'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$verbose&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}&nbsp;kilobyte|{n}&nbsp;kilobytes'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}&nbsp;KB'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$verbose&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}&nbsp;megabyte|{n}&nbsp;megabytes'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}&nbsp;MB'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$verbose&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}&nbsp;gigabyte|{n}&nbsp;gigabytes'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}&nbsp;GB'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$verbose&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}&nbsp;terabyte|{n}&nbsp;terabytes'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{n}&nbsp;TB'</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value in bytes as a size in human readable form.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('sizeFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'sizeFormat')); ?></li>
</ul>
</div>

<div class="detailHeader" id="formatText-detail">
formatText()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatText</b>(mixed $value)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L149">yii/utils/CFormatter.php#L149</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatText</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a HTML-encoded plain text.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L207">yii/utils/CFormatter.php#L207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatTime</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeFormat</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">normalizeDateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a time.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('timeFormat', array('/site/doc', 'view' => 'CFormatter', '#' => 'timeFormat')); ?></li>
</ul>
</div>

<div class="detailHeader" id="formatUrl-detail">
formatUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>formatUrl</b>(mixed $value)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L276">yii/utils/CFormatter.php#L276</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">formatUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #DD0000">'http://'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #DD0000">'https://'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #DD0000">'http://'</span><span style="color: #007700">.</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">),</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Formats the value as a hyperlink.</p>


<div class="detailHeader" id="getHtmlPurifier-detail">
getHtmlPurifier()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CHtmlPurifier', array('/site/doc', 'view' => 'CHtmlPurifier')); ?> <b>getHtmlPurifier</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CHtmlPurifier', array('/site/doc', 'view' => 'CHtmlPurifier')); ?></td>
  <td class="paramDescCol">the HTML purifier instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L298">yii/utils/CFormatter.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHtmlPurifier</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_htmlPurifier</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_htmlPurifier</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CHtmlPurifier</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_htmlPurifier</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlPurifierOptions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_htmlPurifier</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="normalizeDateValue-detail">
normalizeDateValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected int <b>normalizeDateValue</b>(mixed $time)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$time</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the time expression to be normalized</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">the normalized result as a UNIX timestamp</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CFormatter.php#L228">yii/utils/CFormatter.php#L228</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">normalizeDateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">ctype_digit</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$time</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">}==</span><span style="color: #DD0000">'-'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">ctype_digit</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(int)</span><span style="color: #0000BB">$time</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$time</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(int)</span><span style="color: #0000BB">$time</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Normalizes an expression as a timestamp.</p>


