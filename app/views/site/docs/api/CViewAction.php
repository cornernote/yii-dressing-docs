<?php
$this->pageTitle = $this->pageHeading = 'CViewAction';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CViewAction';
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
  <td><?php echo CHtml::link('system.web.actions', array('/site/doc', '#' => 'system.web.actions')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CViewAction &raquo;
<?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IAction', array('/site/doc', 'view' => 'IAction')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\actions\CViewAction.php">yii\web\actions\CViewAction.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CViewAction represents an action that displays a view according to a user-specified parameter.
<br/><br/>
By default, the view being displayed is specified via the <code>view</code> GET parameter.
The name of the GET parameter can be customized via <?php echo CHtml::link('viewParam', array('/site/doc', 'view' => 'CViewAction', '#' => 'viewParam')); ?>.
If the user doesn't provide the GET parameter, the default view specified by <?php echo CHtml::link('defaultView', array('/site/doc', 'view' => 'CViewAction', '#' => 'defaultView')); ?>
will be displayed.
<br/><br/>
Users specify a view in the format of <code>path.to.view</code>, which translates to the view name
<code>BasePath/path/to/view</code> where <code>BasePath</code> is given by <?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CViewAction', '#' => 'basePath')); ?>.
<br/><br/>
Note, the user specified view can only contain word characters, dots and dashes and
the first letter must be a word letter.</div>
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
  <td><?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CViewAction', '#' => 'basePath-detail')); ?></td>
  <td>string</td>
  <td>the base path for the views.</td>
  <td>CViewAction</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CAction', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>the controller who owns this action.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="defaultView">
  <td><?php echo CHtml::link('defaultView', array('/site/doc', 'view' => 'CViewAction', '#' => 'defaultView-detail')); ?></td>
  <td>string</td>
  <td>the name of the default view when <?php echo CHtml::link('viewParam', array('/site/doc', 'view' => 'CViewAction', '#' => 'viewParam')); ?> GET parameter is not provided by user.</td>
  <td>CViewAction</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CAction', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>id of this action</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="layout">
  <td><?php echo CHtml::link('layout', array('/site/doc', 'view' => 'CViewAction', '#' => 'layout-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the layout to be applied to the views.</td>
  <td>CViewAction</td>
</tr>
<tr id="renderAsText">
  <td><?php echo CHtml::link('renderAsText', array('/site/doc', 'view' => 'CViewAction', '#' => 'renderAsText-detail')); ?></td>
  <td>boolean</td>
  <td>whether the view should be rendered as PHP script or static text.</td>
  <td>CViewAction</td>
</tr>
<tr id="requestedView">
  <td><?php echo CHtml::link('requestedView', array('/site/doc', 'view' => 'CViewAction', '#' => 'requestedView-detail')); ?></td>
  <td>string</td>
  <td>Returns the name of the view requested by the user.</td>
  <td>CViewAction</td>
</tr>
<tr id="view">
  <td><?php echo CHtml::link('view', array('/site/doc', 'view' => 'CViewAction', '#' => 'view-detail')); ?></td>
  <td>string</td>
  <td>the name of the view to be rendered.</td>
  <td>CViewAction</td>
</tr>
<tr id="viewParam">
  <td><?php echo CHtml::link('viewParam', array('/site/doc', 'view' => 'CViewAction', '#' => 'viewParam-detail')); ?></td>
  <td>string</td>
  <td>the name of the GET parameter that contains the requested view name.</td>
  <td>CViewAction</td>
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
<tr class="inherited" id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CAction', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
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
<tr class="inherited" id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CAction', '#' => 'getController-detail')); ?></td>
  <td>Returns the controller who owns this action.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CAction', '#' => 'getId-detail')); ?></td>
  <td>Returns id of this action</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="getRequestedView">
  <td><?php echo CHtml::link('getRequestedView()', array('/site/doc', 'view' => 'CViewAction', '#' => 'getRequestedView-detail')); ?></td>
  <td>Returns the name of the view requested by the user.</td>
  <td>CViewAction</td>
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
<tr id="onAfterRender">
  <td><?php echo CHtml::link('onAfterRender()', array('/site/doc', 'view' => 'CViewAction', '#' => 'onAfterRender-detail')); ?></td>
  <td>Raised right after the action invokes the render method.</td>
  <td>CViewAction</td>
</tr>
<tr id="onBeforeRender">
  <td><?php echo CHtml::link('onBeforeRender()', array('/site/doc', 'view' => 'CViewAction', '#' => 'onBeforeRender-detail')); ?></td>
  <td>Raised right before the action invokes the render method.</td>
  <td>CViewAction</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CViewAction', '#' => 'run-detail')); ?></td>
  <td>Runs the action.</td>
  <td>CViewAction</td>
</tr>
<tr class="inherited" id="runWithParams">
  <td><?php echo CHtml::link('runWithParams()', array('/site/doc', 'view' => 'CAction', '#' => 'runWithParams-detail')); ?></td>
  <td>Runs the action with the supplied request parameters.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
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
<tr id="resolveView">
  <td><?php echo CHtml::link('resolveView()', array('/site/doc', 'view' => 'CViewAction', '#' => 'resolveView-detail')); ?></td>
  <td>Resolves the user-specified view into a valid view name.</td>
  <td>CViewAction</td>
</tr>
<tr class="inherited" id="runWithParamsInternal">
  <td><?php echo CHtml::link('runWithParamsInternal()', array('/site/doc', 'view' => 'CAction', '#' => 'runWithParamsInternal-detail')); ?></td>
  <td>Executes a method of an object with the supplied named parameters.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
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
<tr id="onBeforeRender">
  <td><?php echo CHtml::link('onBeforeRender', array('/site/doc', 'view' => 'CViewAction', '#' => 'onBeforeRender-detail')); ?></td>
  <td>Raised right before the action invokes the render method.</td>
  <td>CViewAction</td>
</tr>
<tr id="onAfterRender">
  <td><?php echo CHtml::link('onAfterRender', array('/site/doc', 'view' => 'CViewAction', '#' => 'onAfterRender-detail')); ?></td>
  <td>Raised right after the action invokes the render method.</td>
  <td>CViewAction</td>
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

<p>the base path for the views. Defaults to 'pages'.
The base path will be prefixed to any user-specified page view.
For example, if a user requests for <code>tutorial.chap1</code>, the corresponding view name will
be <code>pages/tutorial/chap1</code>, assuming the base path is <code>pages</code>.
The actual view file is determined by <?php echo CHtml::link('CController::getViewFile', array('/site/doc', 'view' => 'CController', '#' => 'getViewFile')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CController::getViewFile', array('/site/doc', 'view' => 'CController', '#' => 'getViewFile')); ?></li>
</ul>
</div>

<div class="detailHeader" id="defaultView-detail">
defaultView<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$defaultView</b>;</div>

<p>the name of the default view when <?php echo CHtml::link('viewParam', array('/site/doc', 'view' => 'CViewAction', '#' => 'viewParam')); ?> GET parameter is not provided by user. Defaults to 'index'.
This should be in the format of 'path.to.view', similar to that given in
the GET parameter.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CViewAction', '#' => 'basePath')); ?></li>
</ul>
</div>

<div class="detailHeader" id="layout-detail">
layout<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$layout</b>;</div>

<p>the name of the layout to be applied to the views.
This will be assigned to <?php echo CHtml::link('CController::layout', array('/site/doc', 'view' => 'CController', '#' => 'layout')); ?> before the view is rendered.
Defaults to null, meaning the controller's layout will be used.
If false, no layout will be applied.</p>


<div class="detailHeader" id="renderAsText-detail">
renderAsText<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$renderAsText</b>;</div>

<p>whether the view should be rendered as PHP script or static text. Defaults to false.</p>


<div class="detailHeader" id="requestedView-detail">
requestedView<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getRequestedView</b>', array('/site/doc', 'view' => 'CViewAction', '#' => 'getRequestedView')); ?>()</div>

<p>Returns the name of the view requested by the user.
If the user doesn't specify any view, the <?php echo CHtml::link('defaultView', array('/site/doc', 'view' => 'CViewAction', '#' => 'defaultView')); ?> will be returned.</p>


<div class="detailHeader" id="view-detail">
view<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$view</b>;</div>

<p>the name of the view to be rendered. This property will be set
once the user requested view is resolved.</p>


<div class="detailHeader" id="viewParam-detail">
viewParam<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$viewParam</b>;</div>

<p>the name of the GET parameter that contains the requested view name. Defaults to 'view'.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getRequestedView-detail">
getRequestedView()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getRequestedView</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the view requested by the user.
This is in the format of 'path.to.view'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\actions\CViewAction.php#L80">yii\web\actions\CViewAction.php#L80</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRequestedView</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">viewParam</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">viewParam</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">viewParam</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultView</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_viewPath</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the name of the view requested by the user.
If the user doesn't specify any view, the <?php echo CHtml::link('defaultView', array('/site/doc', 'view' => 'CViewAction', '#' => 'defaultView')); ?> will be returned.</p>


<div class="detailHeader" id="onAfterRender-detail">
onAfterRender()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onAfterRender</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\actions\CViewAction.php#L163">yii\web\actions\CViewAction.php#L163</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onAfterRender</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterRender'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Raised right after the action invokes the render method.</p>


<div class="detailHeader" id="onBeforeRender-detail">
onBeforeRender()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onBeforeRender</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\actions\CViewAction.php#L154">yii\web\actions\CViewAction.php#L154</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onBeforeRender</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeRender'</span><span style="color: #007700">,</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Raised right before the action invokes the render method.
Event handlers can set the <?php echo CHtml::link('CEvent::handled', array('/site/doc', 'view' => 'CEvent', '#' => 'handled')); ?> property
to be true to stop further view rendering.</p>


<div class="detailHeader" id="resolveView-detail">
resolveView()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>resolveView</b>(string $viewPath)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$viewPath</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">user-specified view in the format of 'path.to.view'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">fully resolved view in the format of 'path/to/view'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\actions\CViewAction.php#L98">yii\web\actions\CViewAction.php#L98</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveView</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;start&nbsp;with&nbsp;a&nbsp;word&nbsp;char&nbsp;and&nbsp;have&nbsp;word&nbsp;chars,&nbsp;dots&nbsp;and&nbsp;dashes&nbsp;only<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^\w[\w\.\-]*$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$view</span><span style="color: #007700">=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">basePath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$view</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">basePath</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$view</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getViewFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">view</span><span style="color: #007700">=</span><span style="color: #0000BB">$view</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">404</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;requested&nbsp;view&nbsp;"{name}"&nbsp;was&nbsp;not&nbsp;found.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{name}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$viewPath</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Resolves the user-specified view into a valid view name.</p>


<div class="detailHeader" id="run-detail">
run()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>run</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\actions\CViewAction.php#L121">yii\web\actions\CViewAction.php#L121</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveView</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequestedView</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layout</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$layout</span><span style="color: #007700">=</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layout</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layout</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layout</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onBeforeRender</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handled</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderAsText</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">=</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getViewFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">view</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderText</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">view</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onAfterRender</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layout</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layout</span><span style="color: #007700">=</span><span style="color: #0000BB">$layout</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Runs the action.
This method displays the view requested by the user.</p>


