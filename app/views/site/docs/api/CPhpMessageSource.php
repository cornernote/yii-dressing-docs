<?php
$this->pageTitle = $this->pageHeading = 'CPhpMessageSource';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CPhpMessageSource';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a> | <a href="#events">Events</a></div>

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
  <td>class CPhpMessageSource &raquo;
<?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CPhpMessageSource.php">yii\i18n\CPhpMessageSource.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CPhpMessageSource represents a message source that stores translated messages in PHP scripts.
<br/><br/>
CPhpMessageSource uses PHP files and arrays to keep message translations.
<ul>
<li>All translations are saved under the <?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'basePath')); ?> directory.</li>
<li>Translations in one language are kept as PHP files under an individual subdirectory
  whose name is the same as the language ID. Each PHP file contains messages
  belonging to the same category, and the file name is the same as the category name.</li>
<li>Within a PHP file, an array of (source, translation) pairs is returned.
For example:
<pre>
return array(
    'original message 1' =&gt; 'translated message 1',
    'original message 2' =&gt; 'translated message 2',
);
</pre>
</li>
</ul>
When <?php echo CHtml::link('cachingDuration', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'cachingDuration')); ?> is set as a positive number, message translations will be cached.
<br/><br/>
Messages for an extension class (e.g. a widget, a module) can be specially managed and used.
In particular, if a message belongs to an extension whose class name is Xyz, then the message category
can be specified in the format of 'Xyz.categoryName'. And the corresponding message file
is assumed to be 'BasePath/messages/LanguageID/categoryName.php', where 'BasePath' refers to
the directory that contains the extension class file. When using Yii::t() to translate an extension message,
the category name should be set as 'Xyz.categoryName'.</div>
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
<tr id="basePath">
  <td><?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'basePath-detail')); ?></td>
  <td>string</td>
  <td>the base path for all translated messages.</td>
  <td>CPhpMessageSource</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="cacheID">
  <td><?php echo CHtml::link('cacheID', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'cacheID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the cache application component that is used to cache the messages.</td>
  <td>CPhpMessageSource</td>
</tr>
<tr id="cachingDuration">
  <td><?php echo CHtml::link('cachingDuration', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'cachingDuration-detail')); ?></td>
  <td>integer</td>
  <td>the time in seconds that the messages can remain valid in cache.</td>
  <td>CPhpMessageSource</td>
</tr>
<tr id="extensionPaths">
  <td><?php echo CHtml::link('extensionPaths', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'extensionPaths-detail')); ?></td>
  <td>array</td>
  <td>the message paths for extensions that do not have a base class to use as category prefix.</td>
  <td>CPhpMessageSource</td>
</tr>
<tr class="inherited" id="forceTranslation">
  <td><?php echo CHtml::link('forceTranslation', array('/site/doc', 'view' => 'CMessageSource', '#' => 'forceTranslation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to force message translation when the source and target languages are the same.</td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="language">
  <td><?php echo CHtml::link('language', array('/site/doc', 'view' => 'CMessageSource', '#' => 'language-detail')); ?></td>
  <td>string</td>
  <td>the language that the source messages are written in.</td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
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
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="getLanguage">
  <td><?php echo CHtml::link('getLanguage()', array('/site/doc', 'view' => 'CMessageSource', '#' => 'getLanguage-detail')); ?></td>
  <td>Returns the language that the source messages are written in.
Defaults to <?php echo CHtml::link('application language', array('/site/doc', 'view' => 'CApplication', '#' => 'language')); ?>.</td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>CPhpMessageSource</td>
</tr>
<tr class="inherited" id="onMissingTranslation">
  <td><?php echo CHtml::link('onMissingTranslation()', array('/site/doc', 'view' => 'CMessageSource', '#' => 'onMissingTranslation-detail')); ?></td>
  <td>Raised when a message cannot be translated.</td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="setLanguage">
  <td><?php echo CHtml::link('setLanguage()', array('/site/doc', 'view' => 'CMessageSource', '#' => 'setLanguage-detail')); ?></td>
  <td>Sets the language that the source messages are written in.</td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
</tr>
<tr class="inherited" id="translate">
  <td><?php echo CHtml::link('translate()', array('/site/doc', 'view' => 'CMessageSource', '#' => 'translate-detail')); ?></td>
  <td>Translates a message to the specified language.</td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
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
<tr id="getMessageFile">
  <td><?php echo CHtml::link('getMessageFile()', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'getMessageFile-detail')); ?></td>
  <td>Determines the message file name based on the given category and language.</td>
  <td>CPhpMessageSource</td>
</tr>
<tr id="loadMessages">
  <td><?php echo CHtml::link('loadMessages()', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'loadMessages-detail')); ?></td>
  <td>Loads the message translation for the specified language and category.</td>
  <td>CPhpMessageSource</td>
</tr>
<tr class="inherited" id="translateMessage">
  <td><?php echo CHtml::link('translateMessage()', array('/site/doc', 'view' => 'CMessageSource', '#' => 'translateMessage-detail')); ?></td>
  <td>Translates the specified message.</td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<div class="summary docEvent">
<h2>Events</h2>

<p><a href="#" class="toggle">Hide inherited events</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-event" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Event</th><th>Description</th><th>Defined By</th>
</tr>
<tr class="inherited" id="onMissingTranslation">
  <td><?php echo CHtml::link('onMissingTranslation', array('/site/doc', 'view' => 'CMessageSource', '#' => 'onMissingTranslation-detail')); ?></td>
  <td>Raised when a message cannot be translated.</td>
  <td><?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?></td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="basePath-detail">
basePath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$basePath</b>;</div>

<p>the base path for all translated messages. Defaults to null, meaning
the "messages" subdirectory of the application directory (e.g. "protected/messages").</p>


<div class="detailHeader" id="cacheID-detail">
cacheID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cacheID</b>;</div>

<p>the ID of the cache application component that is used to cache the messages.
Defaults to 'cache' which refers to the primary cache application component.
Set this property to false if you want to disable caching the messages.</p>


<div class="detailHeader" id="cachingDuration-detail">
cachingDuration<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$cachingDuration</b>;</div>

<p>the time in seconds that the messages can remain valid in cache.
Defaults to 0, meaning the caching is disabled.</p>


<div class="detailHeader" id="extensionPaths-detail">
extensionPaths<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public array <b>$extensionPaths</b>;</div>

<p>the message paths for extensions that do not have a base class to use as category prefix.
The format of the array should be:
<pre>
array(
    'ExtensionName' =&gt; 'ext.ExtensionName.messages',
)
</pre>
Where the key is the name of the extension and the value is the alias to the path
of the "messages" subdirectory of the extension.
When using Yii::t() to translate an extension message, the category name should be
set as 'ExtensionName.categoryName'.
Defaults to an empty array, meaning no extensions registered.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getMessageFile-detail">
getMessageFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getMessageFile</b>(string $category, string $language)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$category</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">category name</td>
</tr>
<tr>
  <td class="paramNameCol">$language</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">language ID</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the message file path</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CPhpMessageSource.php#L104">yii\i18n\CPhpMessageSource.php#L104</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getMessageFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$language</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$extensionClass</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$extensionCategory</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;First&nbsp;check&nbsp;if&nbsp;there's&nbsp;an&nbsp;extension&nbsp;registered&nbsp;for&nbsp;this&nbsp;class.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extensionPaths</span><span style="color: #007700">[</span><span style="color: #0000BB">$extensionClass</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$language</span><span style="color: #007700">]=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extensionPaths</span><span style="color: #007700">[</span><span style="color: #0000BB">$extensionClass</span><span style="color: #007700">]).</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$language</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$extensionCategory</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;No&nbsp;extension&nbsp;registered,&nbsp;need&nbsp;to&nbsp;find&nbsp;it.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$extensionClass</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$language</span><span style="color: #007700">]=</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFileName</span><span style="color: #007700">()).</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'messages'</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$language</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$extensionCategory</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$language</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">basePath</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$language</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$category</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_files</span><span style="color: #007700">[</span><span style="color: #0000BB">$category</span><span style="color: #007700">][</span><span style="color: #0000BB">$language</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Determines the message file name based on the given category and language.
If the category name contains a dot, it will be split into the module class name and the category name.
In this case, the message file will be assumed to be located within the 'messages' subdirectory of
the directory containing the module class file.
Otherwise, the message file is assumed to be under the <?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CPhpMessageSource', '#' => 'basePath')); ?>.</p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CPhpMessageSource.php#L87">yii\i18n\CPhpMessageSource.php#L87</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">basePath</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">basePath</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'application.messages'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application component.
This method overrides the parent implementation by preprocessing
the user request data.</p>


<div class="detailHeader" id="loadMessages-detail">
loadMessages()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>loadMessages</b>(string $category, string $language)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$category</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the message category</td>
</tr>
<tr>
  <td class="paramNameCol">$language</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the target language</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the loaded messages</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CPhpMessageSource.php#L134">yii\i18n\CPhpMessageSource.php#L134</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">loadMessages</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$messageFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessageFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cachingDuration</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$cache</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">CACHE_KEY_PREFIX&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$messageFile</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$messageFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">=include(</span><span style="color: #0000BB">$messageFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$messages</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$cache</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dependency</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CFileCacheDependency</span><span style="color: #007700">(</span><span style="color: #0000BB">$messageFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$messages</span><span style="color: #007700">),</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cachingDuration</span><span style="color: #007700">,</span><span style="color: #0000BB">$dependency</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />}</span>
</span>
</code></div>
</div>
<p>Loads the message translation for the specified language and category.</p>


