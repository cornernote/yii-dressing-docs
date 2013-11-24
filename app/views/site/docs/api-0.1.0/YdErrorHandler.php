<?php
$this->pageTitle = $this->pageHeading = 'YdErrorHandler';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdErrorHandler';
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
  <td>class YdErrorHandler &raquo;
<?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdErrorHandler.php">dressing/components/YdErrorHandler.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdErrorHandler</div>
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
<tr class="inherited" id="adminInfo">
  <td><?php echo CHtml::link('adminInfo', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'adminInfo-detail')); ?></td>
  <td>string</td>
  <td>the application administrator information (could be a name or email link).</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="discardOutput">
  <td><?php echo CHtml::link('discardOutput', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'discardOutput-detail')); ?></td>
  <td>boolean</td>
  <td>whether to discard any existing page output before error display.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="error">
  <td><?php echo CHtml::link('error', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'error-detail')); ?></td>
  <td>array</td>
  <td>Returns the details about the error that is currently being handled.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="errorAction">
  <td><?php echo CHtml::link('errorAction', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'errorAction-detail')); ?></td>
  <td>string</td>
  <td>the route (eg 'site/error') to the controller action that will be used to display external errors.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="maxSourceLines">
  <td><?php echo CHtml::link('maxSourceLines', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'maxSourceLines-detail')); ?></td>
  <td>integer</td>
  <td>maximum number of source code lines to be displayed.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="maxTraceSourceLines">
  <td><?php echo CHtml::link('maxTraceSourceLines', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'maxTraceSourceLines-detail')); ?></td>
  <td>integer</td>
  <td>maximum number of trace source code lines to be displayed.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
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
<tr class="inherited" id="versionInfo">
  <td><?php echo CHtml::link('versionInfo', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'versionInfo-detail')); ?></td>
  <td>string</td>
  <td>Returns server version information.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
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
<tr class="inherited" id="getError">
  <td><?php echo CHtml::link('getError()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getError-detail')); ?></td>
  <td>Returns the details about the error that is currently being handled.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr id="getErrorHtml">
  <td><?php echo CHtml::link('getErrorHtml()', array('/site/doc', 'view' => 'YdErrorHandler', '#' => 'getErrorHtml-detail')); ?></td>
  <td></td>
  <td>YdErrorHandler</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getExceptionHtml">
  <td><?php echo CHtml::link('getExceptionHtml()', array('/site/doc', 'view' => 'YdErrorHandler', '#' => 'getExceptionHtml-detail')); ?></td>
  <td></td>
  <td>YdErrorHandler</td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="handle">
  <td><?php echo CHtml::link('handle()', array('/site/doc', 'view' => 'YdErrorHandler', '#' => 'handle-detail')); ?></td>
  <td></td>
  <td>YdErrorHandler</td>
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
<tr id="logError">
  <td><?php echo CHtml::link('logError()', array('/site/doc', 'view' => 'YdErrorHandler', '#' => 'logError-detail')); ?></td>
  <td></td>
  <td>YdErrorHandler</td>
</tr>
<tr id="logException">
  <td><?php echo CHtml::link('logException()', array('/site/doc', 'view' => 'YdErrorHandler', '#' => 'logException-detail')); ?></td>
  <td></td>
  <td>YdErrorHandler</td>
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
<tr class="inherited" id="argumentsToString">
  <td><?php echo CHtml::link('argumentsToString()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'argumentsToString-detail')); ?></td>
  <td>Converts arguments array to its string representation</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="getExactTrace">
  <td><?php echo CHtml::link('getExactTrace()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getExactTrace-detail')); ?></td>
  <td>Returns the exact trace where the problem occurs.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="getHttpHeader">
  <td><?php echo CHtml::link('getHttpHeader()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getHttpHeader-detail')); ?></td>
  <td>Return correct message for each known http error code</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="getVersionInfo">
  <td><?php echo CHtml::link('getVersionInfo()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getVersionInfo-detail')); ?></td>
  <td>Returns server version information.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="getViewFile">
  <td><?php echo CHtml::link('getViewFile()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getViewFile-detail')); ?></td>
  <td>Determines which view file should be used.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="getViewFileInternal">
  <td><?php echo CHtml::link('getViewFileInternal()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'getViewFileInternal-detail')); ?></td>
  <td>Looks for the view under the specified directory.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="handleError">
  <td><?php echo CHtml::link('handleError()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'handleError-detail')); ?></td>
  <td>Handles the PHP error.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="handleException">
  <td><?php echo CHtml::link('handleException()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'handleException-detail')); ?></td>
  <td>Handles the exception.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="isAjaxRequest">
  <td><?php echo CHtml::link('isAjaxRequest()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'isAjaxRequest-detail')); ?></td>
  <td>whether the current request is an AJAX (XMLHttpRequest) request.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="isCoreCode">
  <td><?php echo CHtml::link('isCoreCode()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'isCoreCode-detail')); ?></td>
  <td>Returns a value indicating whether the call stack is from application code.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'render-detail')); ?></td>
  <td>Renders the view.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
<tr class="inherited" id="renderSourceCode">
  <td><?php echo CHtml::link('renderSourceCode()', array('/site/doc', 'view' => 'CErrorHandler', '#' => 'renderSourceCode-detail')); ?></td>
  <td>Renders the source code around the error line.</td>
  <td><?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="getErrorHtml-detail">
getErrorHtml()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getErrorHtml</b>($event $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol">$event</td>
  <td class="paramDescCol">CEvent|CErrorEvent</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdErrorHandler.php#L57">dressing/components/YdErrorHandler.php#L57</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getErrorHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getExceptionHtml-detail">
getExceptionHtml()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getExceptionHtml</b>($exception $exception)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$exception</td>
  <td class="paramTypeCol">$exception</td>
  <td class="paramDescCol">CEvent|CException</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdErrorHandler.php#L130">dressing/components/YdErrorHandler.php#L130</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getExceptionHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


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
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdErrorHandler.php#L18">dressing/components/YdErrorHandler.php#L18</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">handle</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="logError-detail">
logError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>logError</b>($event $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol">$event</td>
  <td class="paramDescCol">CEvent|CErrorEvent</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdErrorHandler.php#L30">dressing/components/YdErrorHandler.php#L30</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">logError</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="logException-detail">
logException()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>logException</b>($event $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol">$event</td>
  <td class="paramDescCol">CEvent|CExceptionEvent</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/components/YdErrorHandler.php#L43">dressing/components/YdErrorHandler.php#L43</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">logException</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>

