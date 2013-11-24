<?php
$this->pageTitle = $this->pageHeading = 'CDbMessageSource';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CDbMessageSource';
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
  <td>class CDbMessageSource &raquo;
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
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CDbMessageSource.php">yii\i18n\CDbMessageSource.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CDbMessageSource represents a message source that stores translated messages in database.
<br/><br/>
The database must contain the following two tables:
<pre>
CREATE TABLE SourceMessage
(
    id INTEGER PRIMARY KEY,
    category VARCHAR(32),
    message TEXT
);
CREATE TABLE Message
(
    id INTEGER,
    language VARCHAR(16),
    translation TEXT,
    PRIMARY KEY (id, language),
    CONSTRAINT FK_Message_SourceMessage FOREIGN KEY (id)
         REFERENCES SourceMessage (id) ON DELETE CASCADE ON UPDATE RESTRICT
);
</pre>
The 'SourceMessage' table stores the messages to be translated, and the 'Message' table
stores the translated messages. The name of these two tables can be customized by setting
<?php echo CHtml::link('sourceMessageTable', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'sourceMessageTable')); ?> and <?php echo CHtml::link('translatedMessageTable', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'translatedMessageTable')); ?>, respectively.
<br/><br/>
When <?php echo CHtml::link('cachingDuration', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'cachingDuration')); ?> is set as a positive number, message translations will be cached.</div>
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
<tr id="cacheID">
  <td><?php echo CHtml::link('cacheID', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'cacheID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the cache application component that is used to cache the messages.</td>
  <td>CDbMessageSource</td>
</tr>
<tr id="cachingDuration">
  <td><?php echo CHtml::link('cachingDuration', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'cachingDuration-detail')); ?></td>
  <td>integer</td>
  <td>the time in seconds that the messages can remain valid in cache.</td>
  <td>CDbMessageSource</td>
</tr>
<tr id="connectionID">
  <td><?php echo CHtml::link('connectionID', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'connectionID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the database connection application component.</td>
  <td>CDbMessageSource</td>
</tr>
<tr id="dbConnection">
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>Returns the DB connection used for the message source.</td>
  <td>CDbMessageSource</td>
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
<tr id="sourceMessageTable">
  <td><?php echo CHtml::link('sourceMessageTable', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'sourceMessageTable-detail')); ?></td>
  <td>string</td>
  <td>the name of the source message table.</td>
  <td>CDbMessageSource</td>
</tr>
<tr id="translatedMessageTable">
  <td><?php echo CHtml::link('translatedMessageTable', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'translatedMessageTable-detail')); ?></td>
  <td>string</td>
  <td>the name of the translated message table.</td>
  <td>CDbMessageSource</td>
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
<tr id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns the DB connection used for the message source.</td>
  <td>CDbMessageSource</td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
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
<tr id="loadMessages">
  <td><?php echo CHtml::link('loadMessages()', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'loadMessages-detail')); ?></td>
  <td>Loads the message translation for the specified language and category.</td>
  <td>CDbMessageSource</td>
</tr>
<tr id="loadMessagesFromDb">
  <td><?php echo CHtml::link('loadMessagesFromDb()', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'loadMessagesFromDb-detail')); ?></td>
  <td>Loads the messages from database.</td>
  <td>CDbMessageSource</td>
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


<div class="detailHeader" id="connectionID-detail">
connectionID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$connectionID</b>;</div>

<p>the ID of the database connection application component. Defaults to 'db'.</p>


<div class="detailHeader" id="dbConnection-detail">
dbConnection<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.5)
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <?php echo CHtml::link('<b>getDbConnection</b>', array('/site/doc', 'view' => 'CDbMessageSource', '#' => 'getDbConnection')); ?>()</div>

<p>Returns the DB connection used for the message source.</p>


<div class="detailHeader" id="sourceMessageTable-detail">
sourceMessageTable<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$sourceMessageTable</b>;</div>

<p>the name of the source message table. Defaults to 'SourceMessage'.</p>


<div class="detailHeader" id="translatedMessageTable-detail">
translatedMessageTable<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$translatedMessageTable</b>;</div>

<p>the name of the translated message table. Defaults to 'Message'.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getDbConnection-detail">
getDbConnection()
<span class="detailHeaderTag">
method
(available since v1.1.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?> <b>getDbConnection</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td class="paramDescCol">the DB connection used for the message source.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CDbMessageSource.php#L102">yii\i18n\CDbMessageSource.php#L102</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionID</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbConnection</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CDbMessageSource.connectionID&nbsp;is&nbsp;invalid.&nbsp;Please&nbsp;make&nbsp;sure&nbsp;"{id}"&nbsp;refers&nbsp;to&nbsp;a&nbsp;valid&nbsp;database&nbsp;application&nbsp;component.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{id}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connectionID</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_db</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the DB connection used for the message source.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CDbMessageSource.php#L77">yii\i18n\CDbMessageSource.php#L77</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">loadMessages</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cachingDuration</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$cache</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">CACHE_KEY_PREFIX</span><span style="color: #007700">.</span><span style="color: #DD0000">'.messages.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$category</span><span style="color: #007700">.</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$language</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadMessagesFromDb</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$cache</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$messages</span><span style="color: #007700">),</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cachingDuration</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Loads the message translation for the specified language and category.</p>


<div class="detailHeader" id="loadMessagesFromDb-detail">
loadMessagesFromDb()
<span class="detailHeaderTag">
method
(available since v1.1.5)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>loadMessagesFromDb</b>(string $category, string $language)</div>
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
  <td class="paramDescCol">the messages loaded from database</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\i18n\CDbMessageSource.php#L122">yii\i18n\CDbMessageSource.php#L122</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">loadMessagesFromDb</span><span style="color: #007700">(</span><span style="color: #0000BB">$category</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">SELECT&nbsp;t1.message&nbsp;AS&nbsp;message,&nbsp;t2.translation&nbsp;AS&nbsp;translation<br />FROM&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sourceMessageTable</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;t1,&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">translatedMessageTable</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;t2<br />WHERE&nbsp;t1.id=t2.id&nbsp;AND&nbsp;t1.category=:category&nbsp;AND&nbsp;t2.language=:language<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':category'</span><span style="color: #007700">,</span><span style="color: #0000BB">$category</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':language'</span><span style="color: #007700">,</span><span style="color: #0000BB">$language</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$command</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">queryAll</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]]=</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'translation'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Loads the messages from database.
You may override this method to customize the message storage in the database.</p>


