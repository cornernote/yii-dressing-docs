<?php
$this->pageTitle = $this->pageHeading = 'CHttpSession';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CHttpSession';
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
  <td>class CHttpSession &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?>, IteratorAggregate, Traversable, ArrayAccess, Countable</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CCacheHttpSession', array('/site/doc', 'view' => 'CCacheHttpSession')); ?>, <?php echo CHtml::link('CDbHttpSession', array('/site/doc', 'view' => 'CDbHttpSession')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php">yii\web\CHttpSession.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CHttpSession provides session-level data management and the related configurations.
<br/><br/>
To start the session, call <?php echo CHtml::link('open()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'open')); ?>; To complete and send out session data, call <?php echo CHtml::link('close()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'close')); ?>;
To destroy the session, call <?php echo CHtml::link('destroy()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'destroy')); ?>.
<br/><br/>
If <?php echo CHtml::link('autoStart', array('/site/doc', 'view' => 'CHttpSession', '#' => 'autoStart')); ?> is set true, the session will be started automatically
when the application component is initialized by the application.
<br/><br/>
CHttpSession can be used like an array to set and get session data. For example,
<pre>
  $session=new CHttpSession;
  $session-&gt;open();
  $value1=$session['name1'];  // get session variable 'name1'
  $value2=$session['name2'];  // get session variable 'name2'
  foreach($session as $name=&gt;$value) // traverse all session variables
  $session['name3']=$value3;  // set session variable 'name3'
</pre>
<br/><br/>
The following configurations are available for session:
<ul>
<li><?php echo CHtml::link('sessionID', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionID')); ?>;</li>
<li><?php echo CHtml::link('sessionName', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionName')); ?>;</li>
<li><?php echo CHtml::link('autoStart', array('/site/doc', 'view' => 'CHttpSession', '#' => 'autoStart')); ?>;</li>
<li><?php echo CHtml::link('savePath', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSavePath')); ?>;</li>
<li><?php echo CHtml::link('cookieParams', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieParams')); ?>;</li>
<li><?php echo CHtml::link('gcProbability', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setGCProbability')); ?>;</li>
<li><?php echo CHtml::link('cookieMode', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieMode')); ?>;</li>
<li><?php echo CHtml::link('useTransparentSessionID', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setUseTransparentSessionID')); ?>;</li>
<li><?php echo CHtml::link('timeout', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setTimeout')); ?>.</li>
</ul>
See the corresponding setter and getter documentation for more information.
Note, these properties must be set before the session is started.
<br/><br/>
CHttpSession can be extended to support customized session storage.
Override <?php echo CHtml::link('openSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'openSession')); ?>, <?php echo CHtml::link('closeSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'closeSession')); ?>, <?php echo CHtml::link('readSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'readSession')); ?>,
<?php echo CHtml::link('writeSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'writeSession')); ?>, <?php echo CHtml::link('destroySession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'destroySession')); ?> and <?php echo CHtml::link('gcSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'gcSession')); ?>
and set <?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useCustomStorage')); ?> to true.
Then, the session data will be stored and retrieved using the above methods.
<br/><br/>
CHttpSession is a Web application component that can be accessed via
<?php echo CHtml::link('CWebApplication::getSession()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getSession')); ?>.</div>
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
<tr id="autoStart">
  <td><?php echo CHtml::link('autoStart', array('/site/doc', 'view' => 'CHttpSession', '#' => 'autoStart-detail')); ?></td>
  <td>boolean</td>
  <td>whether the session should be automatically started when the session application component is initialized, defaults to true.</td>
  <td>CHttpSession</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="cookieMode">
  <td><?php echo CHtml::link('cookieMode', array('/site/doc', 'view' => 'CHttpSession', '#' => 'cookieMode-detail')); ?></td>
  <td>string</td>
  <td>how to use cookie to store session ID.</td>
  <td>CHttpSession</td>
</tr>
<tr id="cookieParams">
  <td><?php echo CHtml::link('cookieParams', array('/site/doc', 'view' => 'CHttpSession', '#' => 'cookieParams-detail')); ?></td>
  <td>array</td>
  <td>the session cookie parameters.</td>
  <td>CHttpSession</td>
</tr>
<tr id="count">
  <td><?php echo CHtml::link('count', array('/site/doc', 'view' => 'CHttpSession', '#' => 'count-detail')); ?></td>
  <td>integer</td>
  <td>Returns the number of items in the session.</td>
  <td>CHttpSession</td>
</tr>
<tr id="gCProbability">
  <td><?php echo CHtml::link('gCProbability', array('/site/doc', 'view' => 'CHttpSession', '#' => 'gCProbability-detail')); ?></td>
  <td>float</td>
  <td>the probability (percentage) that the gc (garbage collection) process is started on every session initialization, defaults to 1 meaning 1% chance.</td>
  <td>CHttpSession</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="isStarted">
  <td><?php echo CHtml::link('isStarted', array('/site/doc', 'view' => 'CHttpSession', '#' => 'isStarted-detail')); ?></td>
  <td>boolean</td>
  <td>whether the session has started</td>
  <td>CHttpSession</td>
</tr>
<tr id="iterator">
  <td><?php echo CHtml::link('iterator', array('/site/doc', 'view' => 'CHttpSession', '#' => 'iterator-detail')); ?></td>
  <td><?php echo CHtml::link('CHttpSessionIterator', array('/site/doc', 'view' => 'CHttpSessionIterator')); ?></td>
  <td>Returns an iterator for traversing the session variables.</td>
  <td>CHttpSession</td>
</tr>
<tr id="keys">
  <td><?php echo CHtml::link('keys', array('/site/doc', 'view' => 'CHttpSession', '#' => 'keys-detail')); ?></td>
  <td>array</td>
  <td>the list of session variable names</td>
  <td>CHttpSession</td>
</tr>
<tr id="savePath">
  <td><?php echo CHtml::link('savePath', array('/site/doc', 'view' => 'CHttpSession', '#' => 'savePath-detail')); ?></td>
  <td>string</td>
  <td>the current session save path, defaults to {@link http://php.</td>
  <td>CHttpSession</td>
</tr>
<tr id="sessionID">
  <td><?php echo CHtml::link('sessionID', array('/site/doc', 'view' => 'CHttpSession', '#' => 'sessionID-detail')); ?></td>
  <td>string</td>
  <td>the current session ID</td>
  <td>CHttpSession</td>
</tr>
<tr id="sessionName">
  <td><?php echo CHtml::link('sessionName', array('/site/doc', 'view' => 'CHttpSession', '#' => 'sessionName-detail')); ?></td>
  <td>string</td>
  <td>the current session name</td>
  <td>CHttpSession</td>
</tr>
<tr id="timeout">
  <td><?php echo CHtml::link('timeout', array('/site/doc', 'view' => 'CHttpSession', '#' => 'timeout-detail')); ?></td>
  <td>integer</td>
  <td>the number of seconds after which data will be seen as 'garbage' and cleaned up, defaults to 1440 seconds.</td>
  <td>CHttpSession</td>
</tr>
<tr id="useCustomStorage">
  <td><?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useCustomStorage-detail')); ?></td>
  <td>boolean</td>
  <td>Returns a value indicating whether to use custom session storage.</td>
  <td>CHttpSession</td>
</tr>
<tr id="useTransparentSessionID">
  <td><?php echo CHtml::link('useTransparentSessionID', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useTransparentSessionID-detail')); ?></td>
  <td>boolean</td>
  <td>whether transparent sid support is enabled or not, defaults to false.</td>
  <td>CHttpSession</td>
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
<tr id="add">
  <td><?php echo CHtml::link('add()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'add-detail')); ?></td>
  <td>Adds a session variable.</td>
  <td>CHttpSession</td>
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
<tr id="clear">
  <td><?php echo CHtml::link('clear()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'clear-detail')); ?></td>
  <td>Removes all session variables</td>
  <td>CHttpSession</td>
</tr>
<tr id="close">
  <td><?php echo CHtml::link('close()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'close-detail')); ?></td>
  <td>Ends the current session and store session data.</td>
  <td>CHttpSession</td>
</tr>
<tr id="closeSession">
  <td><?php echo CHtml::link('closeSession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'closeSession-detail')); ?></td>
  <td>Session close handler.</td>
  <td>CHttpSession</td>
</tr>
<tr id="contains">
  <td><?php echo CHtml::link('contains()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'contains-detail')); ?></td>
  <td></td>
  <td>CHttpSession</td>
</tr>
<tr id="count()">
  <td><?php echo CHtml::link('count()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'count()-detail')); ?></td>
  <td>Returns the number of items in the session.</td>
  <td>CHttpSession</td>
</tr>
<tr id="destroy">
  <td><?php echo CHtml::link('destroy()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'destroy-detail')); ?></td>
  <td>Frees all session variables and destroys all data registered to a session.</td>
  <td>CHttpSession</td>
</tr>
<tr id="destroySession">
  <td><?php echo CHtml::link('destroySession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'destroySession-detail')); ?></td>
  <td>Session destroy handler.</td>
  <td>CHttpSession</td>
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
<tr id="gcSession">
  <td><?php echo CHtml::link('gcSession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'gcSession-detail')); ?></td>
  <td>Session GC (garbage collection) handler.</td>
  <td>CHttpSession</td>
</tr>
<tr id="get">
  <td><?php echo CHtml::link('get()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'get-detail')); ?></td>
  <td>Returns the session variable value with the session variable name.</td>
  <td>CHttpSession</td>
</tr>
<tr id="getCookieMode">
  <td><?php echo CHtml::link('getCookieMode()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCookieMode-detail')); ?></td>
  <td>Returns how to use cookie to store session ID. Defaults to 'Allow'.</td>
  <td>CHttpSession</td>
</tr>
<tr id="getCookieParams">
  <td><?php echo CHtml::link('getCookieParams()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCookieParams-detail')); ?></td>
  <td>Returns the session cookie parameters.</td>
  <td>CHttpSession</td>
</tr>
<tr id="getCount">
  <td><?php echo CHtml::link('getCount()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCount-detail')); ?></td>
  <td>Returns the number of items in the session.</td>
  <td>CHttpSession</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getGCProbability">
  <td><?php echo CHtml::link('getGCProbability()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getGCProbability-detail')); ?></td>
  <td>Returns the probability (percentage) that the gc (garbage collection) process is started on every session initialization, defaults to 1 meaning 1% chance.</td>
  <td>CHttpSession</td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="getIsStarted">
  <td><?php echo CHtml::link('getIsStarted()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getIsStarted-detail')); ?></td>
  <td>Checks whether the session has started</td>
  <td>CHttpSession</td>
</tr>
<tr id="getIterator">
  <td><?php echo CHtml::link('getIterator()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getIterator-detail')); ?></td>
  <td>Returns an iterator for traversing the session variables.</td>
  <td>CHttpSession</td>
</tr>
<tr id="getKeys">
  <td><?php echo CHtml::link('getKeys()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getKeys-detail')); ?></td>
  <td>Returns the list of session variable names</td>
  <td>CHttpSession</td>
</tr>
<tr id="getSavePath">
  <td><?php echo CHtml::link('getSavePath()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSavePath-detail')); ?></td>
  <td>Returns the current session save path, defaults to <a href="http://php.net/session.save_path">http://php.net/session.save_path</a>.</td>
  <td>CHttpSession</td>
</tr>
<tr id="getSessionID">
  <td><?php echo CHtml::link('getSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSessionID-detail')); ?></td>
  <td>Returns the current session ID</td>
  <td>CHttpSession</td>
</tr>
<tr id="getSessionName">
  <td><?php echo CHtml::link('getSessionName()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSessionName-detail')); ?></td>
  <td>Returns the current session name</td>
  <td>CHttpSession</td>
</tr>
<tr id="getTimeout">
  <td><?php echo CHtml::link('getTimeout()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getTimeout-detail')); ?></td>
  <td>Returns the number of seconds after which data will be seen as 'garbage' and cleaned up, defaults to 1440 seconds.</td>
  <td>CHttpSession</td>
</tr>
<tr id="getUseCustomStorage">
  <td><?php echo CHtml::link('getUseCustomStorage()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getUseCustomStorage-detail')); ?></td>
  <td>Returns a value indicating whether to use custom session storage.</td>
  <td>CHttpSession</td>
</tr>
<tr id="getUseTransparentSessionID">
  <td><?php echo CHtml::link('getUseTransparentSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getUseTransparentSessionID-detail')); ?></td>
  <td>Returns whether transparent sid support is enabled or not, defaults to false.</td>
  <td>CHttpSession</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>CHttpSession</td>
</tr>
<tr id="itemAt">
  <td><?php echo CHtml::link('itemAt()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'itemAt-detail')); ?></td>
  <td>Returns the session variable value with the session variable name.</td>
  <td>CHttpSession</td>
</tr>
<tr id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetExists-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td>CHttpSession</td>
</tr>
<tr id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetGet-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td>CHttpSession</td>
</tr>
<tr id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetSet-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td>CHttpSession</td>
</tr>
<tr id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetUnset-detail')); ?></td>
  <td>This method is required by the interface ArrayAccess.</td>
  <td>CHttpSession</td>
</tr>
<tr id="open">
  <td><?php echo CHtml::link('open()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'open-detail')); ?></td>
  <td>Starts the session if it has not started yet.</td>
  <td>CHttpSession</td>
</tr>
<tr id="openSession">
  <td><?php echo CHtml::link('openSession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'openSession-detail')); ?></td>
  <td>Session open handler.</td>
  <td>CHttpSession</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="readSession">
  <td><?php echo CHtml::link('readSession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'readSession-detail')); ?></td>
  <td>Session read handler.</td>
  <td>CHttpSession</td>
</tr>
<tr id="regenerateID">
  <td><?php echo CHtml::link('regenerateID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'regenerateID-detail')); ?></td>
  <td>Updates the current session id with a newly generated one .</td>
  <td>CHttpSession</td>
</tr>
<tr id="remove">
  <td><?php echo CHtml::link('remove()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'remove-detail')); ?></td>
  <td>Removes a session variable.</td>
  <td>CHttpSession</td>
</tr>
<tr id="setCookieMode">
  <td><?php echo CHtml::link('setCookieMode()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieMode-detail')); ?></td>
  <td>Sets how to use cookie to store session ID. Valid values include 'none', 'allow' and 'only'.</td>
  <td>CHttpSession</td>
</tr>
<tr id="setCookieParams">
  <td><?php echo CHtml::link('setCookieParams()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieParams-detail')); ?></td>
  <td>Sets the session cookie parameters.</td>
  <td>CHttpSession</td>
</tr>
<tr id="setGCProbability">
  <td><?php echo CHtml::link('setGCProbability()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setGCProbability-detail')); ?></td>
  <td>Sets the probability (percentage) that the gc (garbage collection) process is started on every session initialization.</td>
  <td>CHttpSession</td>
</tr>
<tr id="setSavePath">
  <td><?php echo CHtml::link('setSavePath()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSavePath-detail')); ?></td>
  <td>Sets the current session save path</td>
  <td>CHttpSession</td>
</tr>
<tr id="setSessionID">
  <td><?php echo CHtml::link('setSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionID-detail')); ?></td>
  <td>Sets the session ID for the current session</td>
  <td>CHttpSession</td>
</tr>
<tr id="setSessionName">
  <td><?php echo CHtml::link('setSessionName()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionName-detail')); ?></td>
  <td>Sets the session name for the current session, must be an alphanumeric string, defaults to PHPSESSID</td>
  <td>CHttpSession</td>
</tr>
<tr id="setTimeout">
  <td><?php echo CHtml::link('setTimeout()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setTimeout-detail')); ?></td>
  <td>Sets the number of seconds after which data will be seen as 'garbage' and cleaned up</td>
  <td>CHttpSession</td>
</tr>
<tr id="setUseTransparentSessionID">
  <td><?php echo CHtml::link('setUseTransparentSessionID()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setUseTransparentSessionID-detail')); ?></td>
  <td>Sets whether transparent sid support is enabled or not.</td>
  <td>CHttpSession</td>
</tr>
<tr id="toArray">
  <td><?php echo CHtml::link('toArray()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'toArray-detail')); ?></td>
  <td></td>
  <td>CHttpSession</td>
</tr>
<tr id="writeSession">
  <td><?php echo CHtml::link('writeSession()', array('/site/doc', 'view' => 'CHttpSession', '#' => 'writeSession-detail')); ?></td>
  <td>Session write handler.</td>
  <td>CHttpSession</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="autoStart-detail">
autoStart<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$autoStart</b>;</div>

<p>whether the session should be automatically started when the session application component is initialized, defaults to true.</p>


<div class="detailHeader" id="cookieMode-detail">
cookieMode<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getCookieMode</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCookieMode')); ?>()<br/>public void <?php echo CHtml::link('<b>setCookieMode</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieMode')); ?>(string $value)</div>

<p>how to use cookie to store session ID. Defaults to 'Allow'.</p>


<div class="detailHeader" id="cookieParams-detail">
cookieParams<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getCookieParams</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCookieParams')); ?>()<br/>public void <?php echo CHtml::link('<b>setCookieParams</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setCookieParams')); ?>(array $value)</div>

<p>the session cookie parameters.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://us2.php.net/manual/en/function.session-get-cookie-params.php">http://us2.php.net/manual/en/function.session-get-cookie-params.php</a></li>
</ul>
</div>

<div class="detailHeader" id="count-detail">
count<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getCount</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getCount')); ?>()</div>

<p>Returns the number of items in the session.</p>


<div class="detailHeader" id="gCProbability-detail">
gCProbability<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public float <?php echo CHtml::link('<b>getGCProbability</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getGCProbability')); ?>()<br/>public void <?php echo CHtml::link('<b>setGCProbability</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setGCProbability')); ?>(float $value)</div>

<p>the probability (percentage) that the gc (garbage collection) process is started on every session initialization, defaults to 1 meaning 1% chance.</p>


<div class="detailHeader" id="isStarted-detail">
isStarted<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsStarted</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getIsStarted')); ?>()</div>

<p>whether the session has started</p>


<div class="detailHeader" id="iterator-detail">
iterator<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CHttpSessionIterator', array('/site/doc', 'view' => 'CHttpSessionIterator')); ?> <?php echo CHtml::link('<b>getIterator</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getIterator')); ?>()</div>

<p>Returns an iterator for traversing the session variables.
This method is required by the interface IteratorAggregate.</p>


<div class="detailHeader" id="keys-detail">
keys<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getKeys</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getKeys')); ?>()</div>

<p>the list of session variable names</p>


<div class="detailHeader" id="savePath-detail">
savePath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getSavePath</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSavePath')); ?>()<br/>public void <?php echo CHtml::link('<b>setSavePath</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSavePath')); ?>(string $value)</div>

<p>the current session save path, defaults to <a href="http://php.net/session.save_path">http://php.net/session.save_path</a>.</p>


<div class="detailHeader" id="sessionID-detail">
sessionID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getSessionID</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSessionID')); ?>()<br/>public void <?php echo CHtml::link('<b>setSessionID</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionID')); ?>(string $value)</div>

<p>the current session ID</p>


<div class="detailHeader" id="sessionName-detail">
sessionName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getSessionName</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getSessionName')); ?>()<br/>public void <?php echo CHtml::link('<b>setSessionName</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setSessionName')); ?>(string $value)</div>

<p>the current session name</p>


<div class="detailHeader" id="timeout-detail">
timeout<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getTimeout</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getTimeout')); ?>()<br/>public void <?php echo CHtml::link('<b>setTimeout</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setTimeout')); ?>(integer $value)</div>

<p>the number of seconds after which data will be seen as 'garbage' and cleaned up, defaults to 1440 seconds.</p>


<div class="detailHeader" id="useCustomStorage-detail">
useCustomStorage<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getUseCustomStorage</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getUseCustomStorage')); ?>()</div>

<p>Returns a value indicating whether to use custom session storage.
This method should be overriden to return true if custom session storage handler should be used.
If returning true, make sure the methods <?php echo CHtml::link('openSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'openSession')); ?>, <?php echo CHtml::link('closeSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'closeSession')); ?>, <?php echo CHtml::link('readSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'readSession')); ?>,
<?php echo CHtml::link('writeSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'writeSession')); ?>, <?php echo CHtml::link('destroySession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'destroySession')); ?>, and <?php echo CHtml::link('gcSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'gcSession')); ?> are overridden in child
class, because they will be used as the callback handlers.
The default implementation always return false.</p>


<div class="detailHeader" id="useTransparentSessionID-detail">
useTransparentSessionID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getUseTransparentSessionID</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'getUseTransparentSessionID')); ?>()<br/>public void <?php echo CHtml::link('<b>setUseTransparentSessionID</b>', array('/site/doc', 'view' => 'CHttpSession', '#' => 'setUseTransparentSessionID')); ?>(boolean $value)</div>

<p>whether transparent sid support is enabled or not, defaults to false.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="add-detail">
add()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>add</b>(mixed $key, mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">session variable name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">session variable value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L486">yii\web\CHttpSession.php#L486</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Adds a session variable.
Note, if the specified name already exists, the old value will be removed first.</p>


<div class="detailHeader" id="clear-detail">
clear()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>clear</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L511">yii\web\CHttpSession.php#L511</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clear</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Removes all session variables</p>


<div class="detailHeader" id="close-detail">
close()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>close</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L131">yii\web\CHttpSession.php#L131</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">close</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">session_id</span><span style="color: #007700">()!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">session_write_close</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Ends the current session and store session data.</p>


<div class="detailHeader" id="closeSession-detail">
closeSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>closeSession</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether session is closed successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L362">yii\web\CHttpSession.php#L362</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">closeSession</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session close handler.
This method should be overridden if <?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useCustomStorage')); ?> is set true.
Do not call this method directly.</p>


<div class="detailHeader" id="contains-detail">
contains()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>contains</b>(mixed $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">session variable name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether there is the named session variable</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L521">yii\web\CHttpSession.php#L521</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">contains</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="count()-detail">
count()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>count</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of items in the session.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L442">yii\web\CHttpSession.php#L442</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCount</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the number of items in the session.
This method is required by Countable interface.</p>


<div class="detailHeader" id="destroy-detail">
destroy()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>destroy</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L140">yii\web\CHttpSession.php#L140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">destroy</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">session_id</span><span style="color: #007700">()!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">session_unset</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">session_destroy</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Frees all session variables and destroys all data registered to a session.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L399">yii\web\CHttpSession.php#L399</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">destroySession</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session destroy handler.
This method should be overridden if <?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useCustomStorage')); ?> is set true.
Do not call this method directly.</p>


<div class="detailHeader" id="gcSession-detail">
gcSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>gcSession</b>(integer $maxLifetime)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$maxLifetime</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds after which data will be seen as 'garbage' and cleaned up.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether session is GCed successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L411">yii\web\CHttpSession.php#L411</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">gcSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$maxLifetime</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session GC (garbage collection) handler.
This method should be overridden if <?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useCustomStorage')); ?> is set true.
Do not call this method directly.</p>


<div class="detailHeader" id="get-detail">
get()
<span class="detailHeaderTag">
method
(available since v1.1.2)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>get</b>(mixed $key, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the session variable name</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default value to be returned when the session variable does not exist.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the session variable value, or $defaultValue if the session variable does not exist.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L464">yii\web\CHttpSession.php#L464</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the session variable value with the session variable name.
This method is very similar to <?php echo CHtml::link('itemAt', array('/site/doc', 'view' => 'CHttpSession', '#' => 'itemAt')); ?> and <?php echo CHtml::link('offsetGet', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetGet')); ?>,
except that it will return $defaultValue if the session variable does not exist.</p>


<div class="detailHeader" id="getCookieMode-detail">
getCookieMode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getCookieMode</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">how to use cookie to store session ID. Defaults to 'Allow'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L252">yii\web\CHttpSession.php#L252</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCookieMode</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_cookies'</span><span style="color: #007700">)===</span><span style="color: #DD0000">'0'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'none'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_only_cookies'</span><span style="color: #007700">)===</span><span style="color: #DD0000">'0'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'allow'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'only'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getCookieParams-detail">
getCookieParams()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getCookieParams</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the session cookie parameters.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L225">yii\web\CHttpSession.php#L225</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCookieParams</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">session_get_cookie_params</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://us2.php.net/manual/en/function.session-get-cookie-params.php">http://us2.php.net/manual/en/function.session-get-cookie-params.php</a></li>
</ul>
</div>

<div class="detailHeader" id="getCount-detail">
getCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getCount</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of session variables</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L432">yii\web\CHttpSession.php#L432</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the number of items in the session.</p>


<div class="detailHeader" id="getGCProbability-detail">
getGCProbability()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public float <b>getGCProbability</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">float</td>
  <td class="paramDescCol">the probability (percentage) that the gc (garbage collection) process is started on every session initialization, defaults to 1 meaning 1% chance.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L289">yii\web\CHttpSession.php#L289</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getGCProbability</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(float)(</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.gc_probability'</span><span style="color: #007700">)/</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.gc_divisor'</span><span style="color: #007700">)*</span><span style="color: #0000BB">100</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getIsStarted-detail">
getIsStarted()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsStarted</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the session has started</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L152">yii\web\CHttpSession.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsStarted</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">session_id</span><span style="color: #007700">()!==</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getIterator-detail">
getIterator()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CHttpSessionIterator', array('/site/doc', 'view' => 'CHttpSessionIterator')); ?> <b>getIterator</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CHttpSessionIterator', array('/site/doc', 'view' => 'CHttpSessionIterator')); ?></td>
  <td class="paramDescCol">an iterator for traversing the session variables.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L423">yii\web\CHttpSession.php#L423</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIterator</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpSessionIterator</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns an iterator for traversing the session variables.
This method is required by the interface IteratorAggregate.</p>


<div class="detailHeader" id="getKeys-detail">
getKeys()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getKeys</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list of session variable names</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L450">yii\web\CHttpSession.php#L450</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getKeys</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSavePath-detail">
getSavePath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSavePath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the current session save path, defaults to <a href="http://php.net/session.save_path">http://php.net/session.save_path</a>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L203">yii\web\CHttpSession.php#L203</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSavePath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">session_save_path</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSessionID-detail">
getSessionID()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSessionID</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the current session ID</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L160">yii\web\CHttpSession.php#L160</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSessionID</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">session_id</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getSessionName-detail">
getSessionName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getSessionName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the current session name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L187">yii\web\CHttpSession.php#L187</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSessionName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">session_name</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getTimeout-detail">
getTimeout()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getTimeout</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds after which data will be seen as 'garbage' and cleaned up, defaults to 1440 seconds.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L330">yii\web\CHttpSession.php#L330</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTimeout</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(int)</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.gc_maxlifetime'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L101">yii\web\CHttpSession.php#L101</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUseCustomStorage</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether to use custom session storage.
This method should be overriden to return true if custom session storage handler should be used.
If returning true, make sure the methods <?php echo CHtml::link('openSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'openSession')); ?>, <?php echo CHtml::link('closeSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'closeSession')); ?>, <?php echo CHtml::link('readSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'readSession')); ?>,
<?php echo CHtml::link('writeSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'writeSession')); ?>, <?php echo CHtml::link('destroySession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'destroySession')); ?>, and <?php echo CHtml::link('gcSession', array('/site/doc', 'view' => 'CHttpSession', '#' => 'gcSession')); ?> are overridden in child
class, because they will be used as the callback handlers.
The default implementation always return false.</p>


<div class="detailHeader" id="getUseTransparentSessionID-detail">
getUseTransparentSessionID()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getUseTransparentSessionID</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether transparent sid support is enabled or not, defaults to false.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L314">yii\web\CHttpSession.php#L314</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUseTransparentSessionID</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_trans_sid'</span><span style="color: #007700">)==</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L83">yii\web\CHttpSession.php#L83</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoStart</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">register_shutdown_function</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'close'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application component.
This method is required by IApplicationComponent and is invoked by application.</p>


<div class="detailHeader" id="itemAt-detail">
itemAt()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>itemAt</b>(mixed $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the session variable name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the session variable value, null if no such variable exists</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L475">yii\web\CHttpSession.php#L475</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the session variable value with the session variable name.
This method is exactly the same as <?php echo CHtml::link('offsetGet', array('/site/doc', 'view' => 'CHttpSession', '#' => 'offsetGet')); ?>.</p>


<div class="detailHeader" id="offsetExists-detail">
offsetExists()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>offsetExists</b>(mixed $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the offset to check on</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L539">yii\web\CHttpSession.php#L539</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="offsetGet-detail">
offsetGet()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>offsetGet</b>(integer $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the offset to retrieve element.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the element at the offset, null if no element is found at the offset</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L549">yii\web\CHttpSession.php#L549</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetGet</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="offsetSet-detail">
offsetSet()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>offsetSet</b>(integer $offset, mixed $item)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the offset to set element</td>
</tr>
<tr>
  <td class="paramNameCol">$item</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the element value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L559">yii\web\CHttpSession.php#L559</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetSet</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">]=</span><span style="color: #0000BB">$item</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="offsetUnset-detail">
offsetUnset()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>offsetUnset</b>(mixed $offset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the offset to unset element</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L568">yii\web\CHttpSession.php#L568</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">offsetUnset</span><span style="color: #007700">(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$offset</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>This method is required by the interface ArrayAccess.</p>


<div class="detailHeader" id="open-detail">
open()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>open</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L109">yii\web\CHttpSession.php#L109</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">open</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUseCustomStorage</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">session_set_save_handler</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'openSession'</span><span style="color: #007700">),array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'closeSession'</span><span style="color: #007700">),array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'readSession'</span><span style="color: #007700">),array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'writeSession'</span><span style="color: #007700">),array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'destroySession'</span><span style="color: #007700">),array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'gcSession'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">session_id</span><span style="color: #007700">()==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;start&nbsp;session.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'error_get_last'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">=</span><span style="color: #0000BB">error_get_last</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$error</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$error</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_WARNING</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'system.web.CHttpSession'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Starts the session if it has not started yet.</p>


<div class="detailHeader" id="openSession-detail">
openSession()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>openSession</b>(string $savePath, string $sessionName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$savePath</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session save path</td>
</tr>
<tr>
  <td class="paramNameCol">$sessionName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">session name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether session is opened successfully</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L351">yii\web\CHttpSession.php#L351</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">openSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$savePath</span><span style="color: #007700">,</span><span style="color: #0000BB">$sessionName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session open handler.
This method should be overridden if <?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useCustomStorage')); ?> is set true.
Do not call this method directly.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L374">yii\web\CHttpSession.php#L374</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">readSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session read handler.
This method should be overridden if <?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useCustomStorage')); ?> is set true.
Do not call this method directly.</p>


<div class="detailHeader" id="regenerateID-detail">
regenerateID()
<span class="detailHeaderTag">
method
(available since v1.1.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>regenerateID</b>(boolean $deleteOldSession=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$deleteOldSession</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">Whether to delete the old associated session file or not.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L179">yii\web\CHttpSession.php#L179</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">regenerateID</span><span style="color: #007700">(</span><span style="color: #0000BB">$deleteOldSession</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">session_regenerate_id</span><span style="color: #007700">(</span><span style="color: #0000BB">$deleteOldSession</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Updates the current session id with a newly generated one .
Please refer to <a href="http://php.net/session_regenerate_id">http://php.net/session_regenerate_id</a> for more details.</p>


<div class="detailHeader" id="remove-detail">
remove()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>remove</b>(mixed $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the name of the session variable to be removed</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the removed value, null if no such session variable.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L496">yii\web\CHttpSession.php#L496</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Removes a session variable.</p>


<div class="detailHeader" id="setCookieMode-detail">
setCookieMode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCookieMode</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">how to use cookie to store session ID. Valid values include 'none', 'allow' and 'only'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L265">yii\web\CHttpSession.php#L265</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCookieMode</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #DD0000">'none'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_cookies'</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_only_cookies'</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #DD0000">'allow'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_cookies'</span><span style="color: #007700">,</span><span style="color: #DD0000">'1'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_only_cookies'</span><span style="color: #007700">,</span><span style="color: #DD0000">'0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #DD0000">'only'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_cookies'</span><span style="color: #007700">,</span><span style="color: #DD0000">'1'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_only_cookies'</span><span style="color: #007700">,</span><span style="color: #DD0000">'1'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CHttpSession.cookieMode&nbsp;can&nbsp;only&nbsp;be&nbsp;"none",&nbsp;"allow"&nbsp;or&nbsp;"only".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setCookieParams-detail">
setCookieParams()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCookieParams</b>(array $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">cookie parameters, valid keys include: lifetime, path,
domain, secure, httponly. Note that httponly is all lowercase.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L238">yii\web\CHttpSession.php#L238</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCookieParams</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">session_get_cookie_params</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$httponly</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">session_set_cookie_params</span><span style="color: #007700">(</span><span style="color: #0000BB">$lifetime</span><span style="color: #007700">,</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$domain</span><span style="color: #007700">,</span><span style="color: #0000BB">$secure</span><span style="color: #007700">,</span><span style="color: #0000BB">$httponly</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">session_set_cookie_params</span><span style="color: #007700">(</span><span style="color: #0000BB">$lifetime</span><span style="color: #007700">,</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$domain</span><span style="color: #007700">,</span><span style="color: #0000BB">$secure</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the session cookie parameters.
The effect of this method only lasts for the duration of the script.
Call this method before the session starts.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://us2.php.net/manual/en/function.session-set-cookie-params.php">http://us2.php.net/manual/en/function.session-set-cookie-params.php</a></li>
</ul>
</div>

<div class="detailHeader" id="setGCProbability-detail">
setGCProbability()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setGCProbability</b>(float $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">float</td>
  <td class="paramDescCol">the probability (percentage) that the gc (garbage collection) process is started on every session initialization.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L298">yii\web\CHttpSession.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setGCProbability</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">&lt;=</span><span style="color: #0000BB">100</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;percent&nbsp;*&nbsp;21474837&nbsp;/&nbsp;2147483647&nbsp;≈&nbsp;percent&nbsp;*&nbsp;0.01<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.gc_probability'</span><span style="color: #007700">,</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">*</span><span style="color: #0000BB">21474836.47</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.gc_divisor'</span><span style="color: #007700">,</span><span style="color: #0000BB">2147483647</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CHttpSession.gcProbability&nbsp;"{value}"&nbsp;is&nbsp;invalid.&nbsp;It&nbsp;must&nbsp;be&nbsp;a&nbsp;float&nbsp;between&nbsp;0&nbsp;and&nbsp;100.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{value}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setSavePath-detail">
setSavePath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSavePath</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the current session save path</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L212">yii\web\CHttpSession.php#L212</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSavePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">session_save_path</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CHttpSession.savePath&nbsp;"{path}"&nbsp;is&nbsp;not&nbsp;a&nbsp;valid&nbsp;directory.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setSessionID-detail">
setSessionID()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSessionID</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the session ID for the current session</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L168">yii\web\CHttpSession.php#L168</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSessionID</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">session_id</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setSessionName-detail">
setSessionName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSessionName</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the session name for the current session, must be an alphanumeric string, defaults to PHPSESSID</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L195">yii\web\CHttpSession.php#L195</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSessionName</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">session_name</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setTimeout-detail">
setTimeout()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setTimeout</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds after which data will be seen as 'garbage' and cleaned up</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L338">yii\web\CHttpSession.php#L338</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setTimeout</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.gc_maxlifetime'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setUseTransparentSessionID-detail">
setUseTransparentSessionID()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setUseTransparentSessionID</b>(boolean $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether transparent sid support is enabled or not.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L322">yii\web\CHttpSession.php#L322</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setUseTransparentSessionID</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.use_trans_sid'</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">?</span><span style="color: #DD0000">'1'</span><span style="color: #007700">:</span><span style="color: #DD0000">'0'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="toArray-detail">
toArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>toArray</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list of all session variables in array</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L529">yii\web\CHttpSession.php#L529</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CHttpSession.php#L387">yii\web\CHttpSession.php#L387</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">writeSession</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Session write handler.
This method should be overridden if <?php echo CHtml::link('useCustomStorage', array('/site/doc', 'view' => 'CHttpSession', '#' => 'useCustomStorage')); ?> is set true.
Do not call this method directly.</p>


