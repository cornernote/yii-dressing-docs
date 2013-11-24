<?php
$this->pageTitle = $this->pageHeading = 'CCacheHttpSession';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CCacheHttpSession';
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
  <td><?php echo CHtml::link('system.web', array('/site/doc', '#' => 'system.web')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CCacheHttpSession &raquo;
<?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>Countable, ArrayAccess, Traversable, IteratorAggregate, <?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CCacheHttpSession.php">yii\web\CCacheHttpSession.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CCacheHttpSession implements a session component using cache as storage medium.
<br/><br/>
The cache being used can be any cache application component implementing <?php echo CHtml::link('ICache', array('/site/doc', 'view' => 'ICache')); ?> interface.
The ID of the cache application component is specified via <?php echo CHtml::link('cacheID', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'cacheID')); ?>, which defaults to 'cache'.
<br/><br/>
Beware, by definition cache storage are volatile, which means the data stored on them
may be swapped out and get lost. Therefore, you must make sure the cache used by this component
is NOT volatile. If you want to use <?php echo CHtml::link('CDbCache', array('/site/doc', 'view' => 'CDbCache')); ?> as storage medium, use <?php echo CHtml::link('CDbHttpSession', array('/site/doc', 'view' => 'CDbHttpSession')); ?>
is a better choice.</div>
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
<tr class="inherited" id="autoStart">
  <td><?php echo CHtml::link('autoStart', array('/site/doc', 'view' => 'CHttpSession', '#' => 'autoStart-detail')); ?></td>
  <td>boolean</td>
  <td>whether the session should be automatically started when the session application component is initialized, defaults to true.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="cacheID">
  <td><?php echo CHtml::link('cacheID', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'cacheID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the cache application component.</td>
  <td>CCacheHttpSession</td>
</tr>
<tr class="inherited" id="cookieMode">
  <td><?php echo CHtml::link('cookieMode', array('/site/doc', 'view' => 'CHttpSession', '#' => 'cookieMode-detail')); ?></td>
  <td>string</td>
  <td>how to use cookie to store session ID.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="cookieParams">
  <td><?php echo CHtml::link('cookieParams', array('/site/doc', 'view' => 'CHttpSession', '#' => 'cookieParams-detail')); ?></td>
  <td>array</td>
  <td>the session cookie parameters.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="count">
  <td><?php echo CHtml::link('count', array('/site/doc', 'view' => 'CHttpSession', '#' => 'count-detail')); ?></td>
  <td>integer</td>
  <td>Returns the number of items in the session.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="gCProbability">
  <td><?php echo CHtml::link('gCProbability', array('/site/doc', 'view' => 'CHttpSession', '#' => 'gCProbability-detail')); ?></td>
  <td>float</td>
  <td>the probability (percentage) that the gc (garbage collection) process is started on every session initialization, defaults to 1 meaning 1% chance.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="isStarted">
  <td><?php echo CHtml::link('isStarted', array('/site/doc', 'view' => 'CHttpSession', '#' => 'isStarted-detail')); ?></td>
  <td>boolean</td>
  <td>whether the session has started</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="iterator">
  <td><?php echo CHtml::link('iterator', array('/site/doc', 'view' => 'CHttpSession', '#' => 'iterator-detail')); ?></td>
  <td><?php echo CHtml::link('CHttpSessionIterator', array('/site/doc', 'view' => 'CHttpSessionIterator')); ?></td>
  <td>Returns an iterator for traversing the session variables.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="keys">
  <td><?php echo CHtml::link('keys', array('/site/doc', 'view' => 'CHttpSession', '#' => 'keys-detail')); ?></td>
  <td>array</td>
  <td>the list of session variable names</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="savePath">
  <td><?php echo CHtml::link('savePath', array('/site/doc', 'view' => 'CHttpSession', '#' => 'savePath-detail')); ?></td>
  <td>string</td>
  <td>the current session save path, defaults to {@link http://php.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="sessionID">
  <td><?php echo CHtml::link('sessionID', array('/site/doc', 'view' => 'CHttpSession', '#' => 'sessionID-detail')); ?></td>
  <td>string</td>
  <td>the current session ID</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="sessionName">
  <td><?php echo CHtml::link('sessionName', array('/site/doc', 'view' => 'CHttpSession', '#' => 'sessionName-detail')); ?></td>
  <td>string</td>
  <td>the current session name</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="timeout">
  <td><?php echo CHtml::link('timeout', array('/site/doc', 'view' => 'CHttpSession', '#' => 'timeout-detail')); ?></td>
  <td>integer</td>
  <td>the number of seconds after which data will be seen as 'garbage' and cleaned up, defaults to 1440 seconds.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="useCustomStorage">
  <td><?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'useCustomStorage-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether to use custom session storage.</td>
  <td>CCacheHttpSession</td>
</tr>
<tr class="inherited" id="useTransparentSessionID">
  <td><?php echo CHtml::link('useTransparentSessionID', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useTransparentSessionID-detail')); ?></td>
  <td>boolean</td>
  <td>whether transparent sid support is enabled or not, defaults to false.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
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
<tr class="inherited" id="add">
  <td><?php echo CHtml::link('add()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'add-detail')); ?></td>
  <td>Adds a session variable.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
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
<tr class="inherited" id="clear">
  <td><?php echo CHtml::link('clear()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'clear-detail')); ?></td>
  <td>Removes all session variables</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="close">
  <td><?php echo CHtml::link('close()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'close-detail')); ?></td>
  <td>Ends the current session and store session data.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="closeSession">
  <td><?php echo CHtml::link('closeSession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'closeSession-detail')); ?></td>
  <td>Session close handler.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="contains">
  <td><?php echo CHtml::link('contains()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'contains-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="count()">
  <td><?php echo CHtml::link('count()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'count()-detail')); ?></td>
  <td>Returns the number of items in the session.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="destroy">
  <td><?php echo CHtml::link('destroy()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'destroy-detail')); ?></td>
  <td>Frees all session variables and destroys all data registered to a session.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="destroySession">
  <td><?php echo CHtml::link('destroySession()', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'destroySession-detail')); ?></td>
  <td>Session destroy handler.</td>
  <td>CCacheHttpSession</td>
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
<tr class="inherited" id="gcSession">
  <td><?php echo CHtml::link('gcSession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'gcSession-detail')); ?></td>
  <td>Session GC (garbage collection) handler.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="get">
  <td><?php echo CHtml::link('get()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'get-detail')); ?></td>
  <td>Returns the session variable value with the session variable name.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getCookieMode">
  <td><?php echo CHtml::link('getCookieMode()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCookieMode-detail')); ?></td>
  <td>Returns how to use cookie to store session ID. Defaults to 'Allow'.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getCookieParams">
  <td><?php echo CHtml::link('getCookieParams()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCookieParams-detail')); ?></td>
  <td>Returns the session cookie parameters.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getCount">
  <td><?php echo CHtml::link('getCount()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCount-detail')); ?></td>
  <td>Returns the number of items in the session.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getGCProbability">
  <td><?php echo CHtml::link('getGCProbability()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getGCProbability-detail')); ?></td>
  <td>Returns the probability (percentage) that the gc (garbage collection) process is started on every session initialization, defaults to 1 meaning 1% chance.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="getIsStarted">
  <td><?php echo CHtml::link('getIsStarted()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getIsStarted-detail')); ?></td>
  <td>Checks whether the session has started</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getIterator">
  <td><?php echo CHtml::link('getIterator()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getIterator-detail')); ?></td>
  <td>Returns an iterator for traversing the session variables.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getKeys">
  <td><?php echo CHtml::link('getKeys()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getKeys-detail')); ?></td>
  <td>Returns the list of session variable names</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getSavePath">
  <td><?php echo CHtml::link('getSavePath()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSavePath-detail')); ?></td>
  <td>Returns the current session save path, defaults to <a href="http://php.net/session.save_path">http://php.net/session.save_path</a>.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getSessionID">
  <td><?php echo CHtml::link('getSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSessionID-detail')); ?></td>
  <td>Returns the current session ID</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getSessionName">
  <td><?php echo CHtml::link('getSessionName()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSessionName-detail')); ?></td>
  <td>Returns the current session name</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="getTimeout">
  <td><?php echo CHtml::link('getTimeout()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getTimeout-detail')); ?></td>
  <td>Returns the number of seconds after which data will be seen as 'garbage' and cleaned up, defaults to 1440 seconds.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="getUseCustomStorage">
  <td><?php echo CHtml::link('getUseCustomStorage()', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'getUseCustomStorage-detail')); ?></td>
  <td>Returns a value indicating whether to use custom session storage.</td>
  <td>CCacheHttpSession</td>
</tr>
<tr class="inherited" id="getUseTransparentSessionID">
  <td><?php echo CHtml::link('getUseTransparentSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getUseTransparentSessionID-detail')); ?></td>
  <td>Returns whether transparent sid support is enabled or not, defaults to false.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>CCacheHttpSession</td>
</tr>
<tr class="inherited" id="itemAt">
  <td><?php echo CHtml::link('itemAt()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'itemAt-detail')); ?></td>
  <td>Returns the session variable value with the session variable name.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetExists-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetGet-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetSet-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetUnset-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="open">
  <td><?php echo CHtml::link('open()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'open-detail')); ?></td>
  <td>Starts the session if it has not started yet.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="openSession">
  <td><?php echo CHtml::link('openSession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'openSession-detail')); ?></td>
  <td>Session open handler.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="readSession">
  <td><?php echo CHtml::link('readSession()', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'readSession-detail')); ?></td>
  <td>Session read handler.</td>
  <td>CCacheHttpSession</td>
</tr>
<tr class="inherited" id="regenerateID">
  <td><?php echo CHtml::link('regenerateID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'regenerateID-detail')); ?></td>
  <td>Updates the current session id with a newly generated one .</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="remove">
  <td><?php echo CHtml::link('remove()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'remove-detail')); ?></td>
  <td>Removes a session variable.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setCookieMode">
  <td><?php echo CHtml::link('setCookieMode()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieMode-detail')); ?></td>
  <td>Sets how to use cookie to store session ID. Valid values include 'none', 'allow' and 'only'.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setCookieParams">
  <td><?php echo CHtml::link('setCookieParams()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieParams-detail')); ?></td>
  <td>Sets the session cookie parameters.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setGCProbability">
  <td><?php echo CHtml::link('setGCProbability()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setGCProbability-detail')); ?></td>
  <td>Sets the probability (percentage) that the gc (garbage collection) process is started on every session initialization.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setSavePath">
  <td><?php echo CHtml::link('setSavePath()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSavePath-detail')); ?></td>
  <td>Sets the current session save path</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setSessionID">
  <td><?php echo CHtml::link('setSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionID-detail')); ?></td>
  <td>Sets the session ID for the current session</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setSessionName">
  <td><?php echo CHtml::link('setSessionName()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionName-detail')); ?></td>
  <td>Sets the session name for the current session, must be an alphanumeric string, defaults to PHPSESSID</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setTimeout">
  <td><?php echo CHtml::link('setTimeout()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setTimeout-detail')); ?></td>
  <td>Sets the number of seconds after which data will be seen as 'garbage' and cleaned up</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="setUseTransparentSessionID">
  <td><?php echo CHtml::link('setUseTransparentSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setUseTransparentSessionID-detail')); ?></td>
  <td>Sets whether transparent sid support is enabled or not.</td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr class="inherited" id="toArray">
  <td><?php echo CHtml::link('toArray()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'toArray-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?></td>
</tr>
<tr id="writeSession">
  <td><?php echo CHtml::link('writeSession()', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'writeSession-detail')); ?></td>
  <td>Session write handler.</td>
  <td>CCacheHttpSession</td>
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
<tr id="calculateKey">
  <td><?php echo CHtml::link('calculateKey()', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'calculateKey-detail')); ?></td>
  <td>Generates a unique key used for storing session data in cache.</td>
  <td>CCacheHttpSession</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="cacheID-detail">
cacheID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cacheID</b>;</div>

<p>the ID of the cache application component. Defaults to 'cache' (the primary cache application component.)</p>


<div class="detailHeader" id="useCustomStorage-detail">
useCustomStorage<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getUseCustomStorage</b>', array('/site/doc', 'view' => 'CCacheHttpSession', '#' => 'getUseCustomStorage')); ?>()</div>

<p>Returns a value indicating whether to use custom session storage.
This method overrides the parent implementation and always returns true.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="calculateKey-detail">
calculateKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>calculateKey</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session variable name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a safe cache key associated with the session variable name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CCacheHttpSession.php#L108">yii\web\CCacheHttpSession.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">calculateKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">CACHE_KEY_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates a unique key used for storing session data in cache.</p>


<div class="detailHeader" id="destroySession-detail">
destroySession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>destroySession</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session ID</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether session is destroyed successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CCacheHttpSession.php#L98">yii\web\CCacheHttpSession.php#L98</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">destroySession</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">calculateKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Session destroy handler.
Do not call this method directly.</p>


<div class="detailHeader" id="getUseCustomStorage-detail">
getUseCustomStorage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getUseCustomStorage</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to use custom storage.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CCacheHttpSession.php#L63">yii\web\CCacheHttpSession.php#L63</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUseCustomStorage</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether to use custom session storage.
This method overrides the parent implementation and always returns true.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CCacheHttpSession.php#L49">yii\web\CCacheHttpSession.php#L49</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">ICache</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CCacheHttpSession.cacheID&nbsp;is&nbsp;invalid.&nbsp;Please&nbsp;make&nbsp;sure&nbsp;"{id}"&nbsp;refers&nbsp;to&nbsp;a&nbsp;valid&nbsp;cache&nbsp;application&nbsp;component.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{id}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application component.
This method overrides the parent implementation by checking if cache is available.</p>


<div class="detailHeader" id="readSession-detail">
readSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>readSession</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session ID</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the session data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CCacheHttpSession.php#L74">yii\web\CCacheHttpSession.php#L74</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">readSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">calculateKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">?</span><span style="color: #DD0000">''</span><span style="color: #007700">:</span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session read handler.
Do not call this method directly.</p>


<div class="detailHeader" id="writeSession-detail">
writeSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>writeSession</b>(string $id, string $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session ID</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session data</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether session write is successful</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CCacheHttpSession.php#L87">yii\web\CCacheHttpSession.php#L87</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">writeSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">calculateKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">),</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTimeout</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Session write handler.
Do not call this method directly.</p>


