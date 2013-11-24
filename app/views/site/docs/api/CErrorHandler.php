<?php
$this->pageTitle = $this->pageHeading = 'CErrorHandler';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CErrorHandler';
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
  <td><?php echo CHtml::link('system.base', array('/site/doc', '#' => 'system.base')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CErrorHandler &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdErrorHandler', array('/site/doc', 'view' => 'YdErrorHandler')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php">yii\base\CErrorHandler.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CErrorHandler handles uncaught PHP errors and exceptions.
<br/><br/>
It displays these errors using appropriate views based on the
nature of the error and the mode the application runs at.
It also chooses the most preferred language for displaying the error.
<br/><br/>
CErrorHandler uses two sets of views:
<ul>
<li>development views, named as <code>exception.php</code>;
<li>production views, named as <code>error&lt;StatusCode&gt;.php</code>;
</ul>
where &lt;StatusCode&gt; stands for the HTTP error code (e.g. error500.php).
Localized views are named similarly but located under a subdirectory
whose name is the language code (e.g. zh_cn/error500.php).
<br/><br/>
Development views are displayed when the application is in debug mode
(i.e. YII_DEBUG is defined as true). Detailed error information with source code
are displayed in these views. Production views are meant to be shown
to end-users and are used when the application is in production mode.
For security reasons, they only display the error message without any
sensitive information.
<br/><br/>
CErrorHandler looks for the view templates from the following locations in order:
<ol>
<li><code>themes/ThemeName/views/system</code>: when a theme is active.</li>
<li><code>protected/views/system</code></li>
<li><code>framework/views</code></li>
</ol>
If the view is not found in a directory, it will be looked for in the next directory.
<br/><br/>
The property <?php echo CHtml::link('maxSourceLines', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'maxSourceLines')); ?> can be changed to specify the number
of source code lines to be displayed in development views.
<br/><br/>
CErrorHandler is a core application component that can be accessed via
<?php echo CHtml::link('CApplication::getErrorHandler()', array('/site/doc', 'view' => 'CApplication', '#' => 'getErrorHandler')); ?>.</div>
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
<tr id="adminInfo">
  <td><?php echo CHtml::link('adminInfo', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'adminInfo-detail')); ?></td>
  <td>string</td>
  <td>the application administrator information (could be a name or email link).</td>
  <td>CErrorHandler</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="discardOutput">
  <td><?php echo CHtml::link('discardOutput', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'discardOutput-detail')); ?></td>
  <td>boolean</td>
  <td>whether to discard any existing page output before error display.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="error">
  <td><?php echo CHtml::link('error', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'error-detail')); ?></td>
  <td>array</td>
  <td>Returns the details about the error that is currently being handled.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="errorAction">
  <td><?php echo CHtml::link('errorAction', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'errorAction-detail')); ?></td>
  <td>string</td>
  <td>the route (eg 'site/error') to the controller action that will be used to display external errors.</td>
  <td>CErrorHandler</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="maxSourceLines">
  <td><?php echo CHtml::link('maxSourceLines', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'maxSourceLines-detail')); ?></td>
  <td>integer</td>
  <td>maximum number of source code lines to be displayed.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="maxTraceSourceLines">
  <td><?php echo CHtml::link('maxTraceSourceLines', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'maxTraceSourceLines-detail')); ?></td>
  <td>integer</td>
  <td>maximum number of trace source code lines to be displayed.</td>
  <td>CErrorHandler</td>
</tr>
</table>
</div>
<div class="summary docProperty">
<h2>Protected Properties</h2>

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
<tr id="versionInfo">
  <td><?php echo CHtml::link('versionInfo', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'versionInfo-detail')); ?></td>
  <td>string</td>
  <td>Returns server version information.</td>
  <td>CErrorHandler</td>
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
<tr id="getError">
  <td><?php echo CHtml::link('getError()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getError-detail')); ?></td>
  <td>Returns the details about the error that is currently being handled.</td>
  <td>CErrorHandler</td>
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
<tr id="handle">
  <td><?php echo CHtml::link('handle()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'handle-detail')); ?></td>
  <td>Handles the exception/error event.</td>
  <td>CErrorHandler</td>
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
<tr id="argumentsToString">
  <td><?php echo CHtml::link('argumentsToString()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'argumentsToString-detail')); ?></td>
  <td>Converts arguments array to its string representation</td>
  <td>CErrorHandler</td>
</tr>
<tr id="getExactTrace">
  <td><?php echo CHtml::link('getExactTrace()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getExactTrace-detail')); ?></td>
  <td>Returns the exact trace where the problem occurs.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="getHttpHeader">
  <td><?php echo CHtml::link('getHttpHeader()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getHttpHeader-detail')); ?></td>
  <td>Return correct message for each known http error code</td>
  <td>CErrorHandler</td>
</tr>
<tr id="getVersionInfo">
  <td><?php echo CHtml::link('getVersionInfo()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getVersionInfo-detail')); ?></td>
  <td>Returns server version information.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="getViewFile">
  <td><?php echo CHtml::link('getViewFile()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getViewFile-detail')); ?></td>
  <td>Determines which view file should be used.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="getViewFileInternal">
  <td><?php echo CHtml::link('getViewFileInternal()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getViewFileInternal-detail')); ?></td>
  <td>Looks for the view under the specified directory.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="handleError">
  <td><?php echo CHtml::link('handleError()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'handleError-detail')); ?></td>
  <td>Handles the PHP error.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="handleException">
  <td><?php echo CHtml::link('handleException()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'handleException-detail')); ?></td>
  <td>Handles the exception.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="isAjaxRequest">
  <td><?php echo CHtml::link('isAjaxRequest()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'isAjaxRequest-detail')); ?></td>
  <td>whether the current request is an AJAX (XMLHttpRequest) request.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="isCoreCode">
  <td><?php echo CHtml::link('isCoreCode()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'isCoreCode-detail')); ?></td>
  <td>Returns a value indicating whether the call stack is from application code.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'render-detail')); ?></td>
  <td>Renders the view.</td>
  <td>CErrorHandler</td>
</tr>
<tr id="renderSourceCode">
  <td><?php echo CHtml::link('renderSourceCode()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'renderSourceCode-detail')); ?></td>
  <td>Renders the source code around the error line.</td>
  <td>CErrorHandler</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="adminInfo-detail">
adminInfo<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$adminInfo</b>;</div>

<p>the application administrator information (could be a name or email link). It is displayed in error pages to end users. Defaults to 'the webmaster'.</p>


<div class="detailHeader" id="discardOutput-detail">
discardOutput<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$discardOutput</b>;</div>

<p>whether to discard any existing page output before error display. Defaults to true.</p>


<div class="detailHeader" id="error-detail">
error<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getError</b>', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getError')); ?>()</div>

<p>Returns the details about the error that is currently being handled.
The error is returned in terms of an array, with the following information:
<ul>
<li>code - the HTTP status code (e.g. 403, 500)</li>
<li>type - the error type (e.g. 'CHttpException', 'PHP Error')</li>
<li>message - the error message</li>
<li>file - the name of the PHP script file where the error occurs</li>
<li>line - the line number of the code where the error occurs</li>
<li>trace - the call stack of the error</li>
<li>source - the context source code where the error occurs</li>
</ul></p>


<div class="detailHeader" id="errorAction-detail">
errorAction<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$errorAction</b>;</div>

<p>the route (eg 'site/error') to the controller action that will be used to display external errors.
Inside the action, it can retrieve the error information by Yii::app()->errorHandler->error.
This property defaults to null, meaning CErrorHandler will handle the error display.</p>


<div class="detailHeader" id="maxSourceLines-detail">
maxSourceLines<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$maxSourceLines</b>;</div>

<p>maximum number of source code lines to be displayed. Defaults to 25.</p>


<div class="detailHeader" id="maxTraceSourceLines-detail">
maxTraceSourceLines<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public integer <b>$maxTraceSourceLines</b>;</div>

<p>maximum number of trace source code lines to be displayed. Defaults to 10.</p>


<div class="detailHeader" id="versionInfo-detail">
versionInfo<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected string <?php echo CHtml::link('<b>getVersionInfo</b>', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getVersionInfo')); ?>()</div>

<p>Returns server version information.
If the application is in production mode, empty string is returned.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="argumentsToString-detail">
argumentsToString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>argumentsToString</b>(array $args)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$args</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">arguments array to be converted</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">string representation of the arguments array</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L413">yii\base\CErrorHandler.php#L413</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">argumentsToString</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isAssoc</span><span style="color: #007700">=</span><span style="color: #0000BB">$args</span><span style="color: #007700">!==</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$args&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$count</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">5</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$count</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">5</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #DD0000">'...'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_bool</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'true'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'false'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">64</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">64</span><span style="color: #007700">).</span><span style="color: #DD0000">'..."'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$value</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'array('</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">argumentsToString</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">).</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'null'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_resource</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'resource'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$key</span><span style="color: #007700">.</span><span style="color: #DD0000">'"&nbsp;=&gt;&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$isAssoc</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;=&gt;&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$args</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">",&nbsp;"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$args</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$out</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Converts arguments array to its string representation</p>


<div class="detailHeader" id="getError-detail">
getError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getError</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the error details. Null if there is no error.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L148">yii\base\CErrorHandler.php#L148</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getError</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_error</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the details about the error that is currently being handled.
The error is returned in terms of an array, with the following information:
<ul>
<li>code - the HTTP status code (e.g. 403, 500)</li>
<li>type - the error type (e.g. 'CHttpException', 'PHP Error')</li>
<li>message - the error message</li>
<li>file - the name of the PHP script file where the error occurs</li>
<li>line - the line number of the code where the error occurs</li>
<li>trace - the call stack of the error</li>
<li>source - the context source code where the error occurs</li>
</ul></p>


<div class="detailHeader" id="getExactTrace-detail">
getExactTrace()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>getExactTrace</b>(Exception $exception)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$exception</td>
  <td class="paramTypeCol">Exception</td>
  <td class="paramDescCol">the uncaught exception</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the exact trace where the problem occurs</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L309">yii\base\CErrorHandler.php#L309</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getExactTrace</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$traces</span><span style="color: #007700">=</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTrace</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$traces&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;property&nbsp;access&nbsp;exception<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(isset(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'__get'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'__set'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the exact trace where the problem occurs.</p>


<div class="detailHeader" id="getHttpHeader-detail">
getHttpHeader()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getHttpHeader</b>(integer $httpCode, string $replacement='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$httpCode</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">error code to map</td>
</tr>
<tr>
  <td class="paramNameCol">$replacement</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">replacement error string that is returned if code is unknown</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the textual representation of the given error code or the replacement string if the error code is unknown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L514">yii\base\CErrorHandler.php#L514</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getHttpHeader</span><span style="color: #007700">(</span><span style="color: #0000BB">$httpCode</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$replacement</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$httpCodes&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">100&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Continue'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">101&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Switching&nbsp;Protocols'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">102&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Processing'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">118&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Connection&nbsp;timed&nbsp;out'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">200&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'OK'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">201&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Created'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">202&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Accepted'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">203&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Non-Authoritative'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">204&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'No&nbsp;Content'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">205&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Reset&nbsp;Content'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">206&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Partial&nbsp;Content'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">207&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Multi-Status'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">210&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Content&nbsp;Different'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">300&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Multiple&nbsp;Choices'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">301&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Moved&nbsp;Permanently'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">302&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Found'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">303&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'See&nbsp;Other'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">304&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Not&nbsp;Modified'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">305&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Use&nbsp;Proxy'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">307&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Temporary&nbsp;Redirect'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">310&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Too&nbsp;many&nbsp;Redirect'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">400&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Bad&nbsp;Request'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">401&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Unauthorized'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">402&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Payment&nbsp;Required'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">403&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Forbidden'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">404&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Not&nbsp;Found'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">405&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Method&nbsp;Not&nbsp;Allowed'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">406&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Not&nbsp;Acceptable'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">407&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Proxy&nbsp;Authentication&nbsp;Required'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">408&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Request&nbsp;Time-out'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">409&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Conflict'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">410&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Gone'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">411&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Length&nbsp;Required'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">412&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Precondition&nbsp;Failed'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">413&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Request&nbsp;Entity&nbsp;Too&nbsp;Large'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">414&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Request-URI&nbsp;Too&nbsp;Long'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">415&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Unsupported&nbsp;Media&nbsp;Type'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">416&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Requested&nbsp;range&nbsp;unsatisfiable'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">417&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Expectation&nbsp;failed'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">418&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'I’m&nbsp;a&nbsp;teapot'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">422&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Unprocessable&nbsp;entity'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">423&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Locked'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">424&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Method&nbsp;failure'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">425&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Unordered&nbsp;Collection'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">426&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Upgrade&nbsp;Required'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">449&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Retry&nbsp;With'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">450&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Blocked&nbsp;by&nbsp;Windows&nbsp;Parental&nbsp;Controls'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">500&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Internal&nbsp;Server&nbsp;Error'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">501&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Not&nbsp;Implemented'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">502&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Bad&nbsp;Gateway&nbsp;ou&nbsp;Proxy&nbsp;Error'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">503&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Service&nbsp;Unavailable'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">504&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Gateway&nbsp;Time-out'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">505&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'HTTP&nbsp;Version&nbsp;not&nbsp;supported'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">507&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Insufficient&nbsp;storage'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">509&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Bandwidth&nbsp;Limit&nbsp;Exceeded'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$httpCodes</span><span style="color: #007700">[</span><span style="color: #0000BB">$httpCode</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$httpCodes</span><span style="color: #007700">[</span><span style="color: #0000BB">$httpCode</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$replacement</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Return correct message for each known http error code</p>


<div class="detailHeader" id="getVersionInfo-detail">
getVersionInfo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getVersionInfo</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">server version information. Empty if in production mode.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L394">yii\base\CErrorHandler.php#L394</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getVersionInfo</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version</span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;a&nbsp;href="http://www.yiiframework.com/"&gt;Yii&nbsp;Framework&lt;/a&gt;/'</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getVersion</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_SOFTWARE'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version</span><span style="color: #007700">=</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_SOFTWARE'</span><span style="color: #007700">].</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$version</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$version</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns server version information.
If the application is in production mode, empty string is returned.</p>


<div class="detailHeader" id="getViewFile-detail">
getViewFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getViewFile</b>(string $view, integer $code)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$view</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">view name (either 'exception' or 'error')</td>
</tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">HTTP status code</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">view file path</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L348">yii\base\CErrorHandler.php#L348</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getViewFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewPaths</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getTheme</span><span style="color: #007700">()===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">:&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getTheme</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSystemViewPath</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">CWebApplication&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSystemViewPath</span><span style="color: #007700">()&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">YII_PATH</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'views'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$viewPaths&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getViewFileInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">,</span><span style="color: #0000BB">$view</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">,</span><span style="color: #0000BB">$i</span><span style="color: #007700">===</span><span style="color: #0000BB">2</span><span style="color: #007700">?</span><span style="color: #DD0000">'en_us'</span><span style="color: #007700">:</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Determines which view file should be used.</p>


<div class="detailHeader" id="getViewFileInternal-detail">
getViewFileInternal()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getViewFileInternal</b>(string $viewPath, string $view, integer $code, string $srcLanguage=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$viewPath</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the directory containing the views</td>
</tr>
<tr>
  <td class="paramNameCol">$view</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">view name (either 'exception' or 'error')</td>
</tr>
<tr>
  <td class="paramNameCol">$code</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">HTTP status code</td>
</tr>
<tr>
  <td class="paramNameCol">$srcLanguage</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the language that the view file is in</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">view file path</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L375">yii\base\CErrorHandler.php#L375</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getViewFileInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">,</span><span style="color: #0000BB">$view</span><span style="color: #007700">,</span><span style="color: #0000BB">$code</span><span style="color: #007700">,</span><span style="color: #0000BB">$srcLanguage</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$view</span><span style="color: #007700">===</span><span style="color: #DD0000">'error'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findLocalizedFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">"error</span><span style="color: #007700">{</span><span style="color: #0000BB">$code</span><span style="color: #007700">}</span><span style="color: #DD0000">.php"</span><span style="color: #007700">,</span><span style="color: #0000BB">$srcLanguage</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">findLocalizedFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'error.php'</span><span style="color: #007700">,</span><span style="color: #0000BB">$srcLanguage</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">"exception.php"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Looks for the view under the specified directory.</p>


<div class="detailHeader" id="handle-detail">
handle()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>handle</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">the event containing the exception/error information</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L92">yii\base\CErrorHandler.php#L92</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">handle</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;set&nbsp;event&nbsp;as&nbsp;handled&nbsp;to&nbsp;prevent&nbsp;it&nbsp;from&nbsp;being&nbsp;handled&nbsp;by&nbsp;other&nbsp;event&nbsp;handlers<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handled</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">discardOutput</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gzHandler</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">ob_list_handlers</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$h</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$h</span><span style="color: #007700">,</span><span style="color: #DD0000">'gzhandler'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gzHandler</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;the&nbsp;following&nbsp;manual&nbsp;level&nbsp;counting&nbsp;is&nbsp;to&nbsp;deal&nbsp;with&nbsp;zlib.output_compression&nbsp;set&nbsp;to&nbsp;On<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;for&nbsp;an&nbsp;output&nbsp;buffer&nbsp;created&nbsp;by&nbsp;zlib.output_compression&nbsp;set&nbsp;to&nbsp;On&nbsp;ob_end_clean&nbsp;will&nbsp;fail<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">for(</span><span style="color: #0000BB">$level</span><span style="color: #007700">=</span><span style="color: #0000BB">ob_get_level</span><span style="color: #007700">();</span><span style="color: #0000BB">$level</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">;--</span><span style="color: #0000BB">$level</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!@</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;reset&nbsp;headers&nbsp;in&nbsp;case&nbsp;there&nbsp;was&nbsp;an&nbsp;ob_start("ob_gzhandler")&nbsp;before<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$gzHandler&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">headers_sent</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">ob_list_handlers</span><span style="color: #007700">()===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'header_remove'</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//&nbsp;php&nbsp;&gt;=&nbsp;5.3<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header_remove</span><span style="color: #007700">(</span><span style="color: #DD0000">'Vary'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header_remove</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Encoding'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Vary:'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Encoding:'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$event&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CExceptionEvent</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handleException</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exception</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;</span><span style="color: #FF8000">//&nbsp;CErrorEvent<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handleError</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Handles the exception/error event.
This method is invoked by the application whenever it captures
an exception or PHP error.</p>


<div class="detailHeader" id="handleError-detail">
handleError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>handleError</b>(<?php echo CHtml::link('CErrorEvent', array('/site/doc', 'view' => 'CErrorEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CErrorEvent', array('/site/doc', 'view' => 'CErrorEvent')); ?></td>
  <td class="paramDescCol">the PHP error event</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L221">yii\base\CErrorHandler.php#L221</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">handleError</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">debug_backtrace</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;skip&nbsp;the&nbsp;first&nbsp;3&nbsp;stacks&nbsp;as&nbsp;they&nbsp;do&nbsp;not&nbsp;tell&nbsp;the&nbsp;error&nbsp;position<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">3</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$traceString</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$trace&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$t</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$traceString</span><span style="color: #007700">.=</span><span style="color: #DD0000">"#</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]}</span><span style="color: #DD0000">(</span><span style="color: #007700">{</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]}</span><span style="color: #DD0000">):&nbsp;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$traceString</span><span style="color: #007700">.=</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]).</span><span style="color: #DD0000">'-&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$traceString</span><span style="color: #007700">.=</span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]}</span><span style="color: #DD0000">()\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CWebApplication</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">code</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">E_WARNING</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'PHP&nbsp;warning'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">E_NOTICE</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'PHP&nbsp;notice'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'User&nbsp;error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">E_USER_WARNING</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'User&nbsp;warning'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">E_USER_NOTICE</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'User&nbsp;notice'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">E_RECOVERABLE_ERROR</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Recoverable&nbsp;error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'PHP&nbsp;error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_error</span><span style="color: #007700">=</span><span style="color: #0000BB">$data</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'code'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">500</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$type</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'message'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'file'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'line'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">line</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'trace'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$traceString</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'traces'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">headers_sent</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"HTTP/1.0&nbsp;500&nbsp;Internal&nbsp;Server&nbsp;Error"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayError</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">code</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">line</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'exception'</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'error'</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayError</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">code</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">file</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">line</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Handles the PHP error.</p>


<div class="detailHeader" id="handleException-detail">
handleException()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>handleException</b>(Exception $exception)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$exception</td>
  <td class="paramTypeCol">Exception</td>
  <td class="paramDescCol">the exception captured</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L157">yii\base\CErrorHandler.php#L157</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">handleException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CWebApplication</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getExactTrace</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">))===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">=</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">=</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLine</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">=</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">=</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTrace</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$trace&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$t</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$t</span><span style="color: #007700">[</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'function'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'object'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_error</span><span style="color: #007700">=</span><span style="color: #0000BB">$data</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'code'</span><span style="color: #007700">=&gt;(</span><span style="color: #0000BB">$exception&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">)?</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">statusCode</span><span style="color: #007700">:</span><span style="color: #0000BB">500</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorCode'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCode</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'message'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'file'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'line'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'trace'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'traces'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">headers_sent</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"HTTP/1.0&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'code'</span><span style="color: #007700">]}</span><span style="color: #DD0000">&nbsp;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHttpHeader</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'code'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$exception&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CHttpException&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'error'</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'exception'</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Handles the exception.</p>


<div class="detailHeader" id="isAjaxRequest-detail">
isAjaxRequest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isAjaxRequest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the current request is an AJAX request.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L299">yii\base\CErrorHandler.php#L299</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_X_REQUESTED_WITH'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_X_REQUESTED_WITH'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'XMLHttpRequest'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>whether the current request is an AJAX (XMLHttpRequest) request.</p>


<div class="detailHeader" id="isCoreCode-detail">
isCoreCode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isCoreCode</b>(array $trace)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$trace</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the trace data</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the call stack is from application code.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L468">yii\base\CErrorHandler.php#L468</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isCoreCode</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$systemPath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">).</span><span style="color: #DD0000">'/..'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'unknown'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #DD0000">'file'</span><span style="color: #007700">]),</span><span style="color: #0000BB">$systemPath</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns a value indicating whether the call stack is from application code.</p>


<div class="detailHeader" id="render-detail">
render()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>render</b>(string $view, array $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$view</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the view name (file name without extension).
See <?php echo CHtml::link('getViewFile', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getViewFile')); ?> for how a view file is located given its name.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data to be passed to the view</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L328">yii\base\CErrorHandler.php#L328</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$view</span><span style="color: #007700">===</span><span style="color: #DD0000">'error'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorAction</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">runController</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorAction</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;additional&nbsp;information&nbsp;to&nbsp;be&nbsp;passed&nbsp;to&nbsp;view<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'version'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getVersionInfo</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'time'</span><span style="color: #007700">]=</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">adminInfo</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getViewFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #DD0000">'code'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the view.</p>


<div class="detailHeader" id="renderSourceCode-detail">
renderSourceCode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>renderSourceCode</b>(string $file, integer $errorLine, integer $maxLines)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">source file path</td>
</tr>
<tr>
  <td class="paramNameCol">$errorLine</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the error line number</td>
</tr>
<tr>
  <td class="paramNameCol">$maxLines</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">maximum number of lines to display</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CErrorHandler.php#L485">yii\base\CErrorHandler.php#L485</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderSourceCode</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">,</span><span style="color: #0000BB">$maxLines</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">--;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;adjust&nbsp;line&nbsp;number&nbsp;to&nbsp;0-based&nbsp;from&nbsp;1-based<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">||&nbsp;(</span><span style="color: #0000BB">$lines</span><span style="color: #007700">=@</span><span style="color: #0000BB">file</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))===</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;(</span><span style="color: #0000BB">$lineCount</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$lines</span><span style="color: #007700">))&lt;=</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$halfLines</span><span style="color: #007700">=(int)(</span><span style="color: #0000BB">$maxLines</span><span style="color: #007700">/</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$beginLine</span><span style="color: #007700">=</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">-</span><span style="color: #0000BB">$halfLines</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">-</span><span style="color: #0000BB">$halfLines</span><span style="color: #007700">:</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$endLine</span><span style="color: #007700">=</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">+</span><span style="color: #0000BB">$halfLines</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$lineCount</span><span style="color: #007700">?</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">+</span><span style="color: #0000BB">$halfLines</span><span style="color: #007700">:</span><span style="color: #0000BB">$lineCount</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lineNumberWidth</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$endLine</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">$beginLine</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;=</span><span style="color: #0000BB">$endLine</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isErrorLine&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">===</span><span style="color: #0000BB">$errorLine</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$code</span><span style="color: #007700">=</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"&lt;span&nbsp;class=\"ln"</span><span style="color: #007700">.(</span><span style="color: #0000BB">$isErrorLine</span><span style="color: #007700">?</span><span style="color: #DD0000">'&nbsp;error-ln'</span><span style="color: #007700">:</span><span style="color: #DD0000">''</span><span style="color: #007700">).</span><span style="color: #DD0000">"\"&gt;%0</span><span style="color: #007700">{</span><span style="color: #0000BB">$lineNumberWidth</span><span style="color: #007700">}</span><span style="color: #DD0000">d&lt;/span&gt;&nbsp;%s"</span><span style="color: #007700">,</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">"\t"</span><span style="color: #007700">,</span><span style="color: #DD0000">'&nbsp;&nbsp;&nbsp;&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$lines</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">])));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$isErrorLine</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$code</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;span&nbsp;class="error"&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$code</span><span style="color: #007700">.</span><span style="color: #DD0000">'&lt;/span&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="code"&gt;&lt;pre&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$output</span><span style="color: #007700">.</span><span style="color: #DD0000">'&lt;/pre&gt;&lt;/div&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the source code around the error line.</p>


