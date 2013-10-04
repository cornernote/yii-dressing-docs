<?php
$this->pageTitle = $this->pageHeading = 'YdApiController';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdApiController';
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
  <td>class YdApiController &raquo;
<?php echo CHtml::link('YdController', array('/site/doc', 'view' => 'YdController')); ?> &raquo;
<?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/components/YdApiController.php">dressing/components/YdApiController.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdApiController</div>
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
<tr id="HTTPStatus">
  <td><?php echo CHtml::link('HTTPStatus', array('/site/doc', 'view' => 'YdApiController', '#' => 'HTTPStatus-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdApiController</td>
</tr>
<tr class="inherited" id="action">
  <td><?php echo CHtml::link('action', array('/site/doc', 'view' => 'CController', '#' => 'action-detail')); ?></td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
  <td>the action currently being executed, null if no active action.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="actionParams">
  <td><?php echo CHtml::link('actionParams', array('/site/doc', 'view' => 'CController', '#' => 'actionParams-detail')); ?></td>
  <td>array</td>
  <td>Returns the request parameters that will be used for action parameter binding.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="cachingStack">
  <td><?php echo CHtml::link('cachingStack', array('/site/doc', 'view' => 'CController', '#' => 'cachingStack-detail')); ?></td>
  <td><?php echo CHtml::link('CStack', array('/site/doc', 'view' => 'CStack')); ?></td>
  <td>stack of <?php echo CHtml::link('COutputCache', array('/site/doc', 'view' => 'COutputCache')); ?> objects</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="clips">
  <td><?php echo CHtml::link('clips', array('/site/doc', 'view' => 'CController', '#' => 'clips-detail')); ?></td>
  <td><?php echo CHtml::link('CMap', array('/site/doc', 'view' => 'CMap')); ?></td>
  <td>Returns the list of clips.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="defaultAction">
  <td><?php echo CHtml::link('defaultAction', array('/site/doc', 'view' => 'CController', '#' => 'defaultAction-detail')); ?></td>
  <td>string</td>
  <td>the name of the default action.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CController', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>ID of the controller</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr id="layout">
  <td><?php echo CHtml::link('layout', array('/site/doc', 'view' => 'YdApiController', '#' => 'layout-detail')); ?></td>
  <td>string</td>
  <td>the default layout for the controller view.</td>
  <td>YdApiController</td>
</tr>
<tr class="inherited" id="module">
  <td><?php echo CHtml::link('module', array('/site/doc', 'view' => 'CController', '#' => 'module-detail')); ?></td>
  <td><?php echo CHtml::link('CWebModule', array('/site/doc', 'view' => 'CWebModule')); ?></td>
  <td>the module that this controller belongs to.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="pageTitle">
  <td><?php echo CHtml::link('pageTitle', array('/site/doc', 'view' => 'CController', '#' => 'pageTitle-detail')); ?></td>
  <td>string</td>
  <td>the page title.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="route">
  <td><?php echo CHtml::link('route', array('/site/doc', 'view' => 'CController', '#' => 'route-detail')); ?></td>
  <td>string</td>
  <td>the route (module ID, controller ID and action ID) of the current request.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="uniqueId">
  <td><?php echo CHtml::link('uniqueId', array('/site/doc', 'view' => 'CController', '#' => 'uniqueId-detail')); ?></td>
  <td>string</td>
  <td>the controller ID that is prefixed with the module ID (if any).</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CController', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory containing view files for this controller.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
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
<tr class="inherited" id="loadModel">
  <td><?php echo CHtml::link('loadModel', array('/site/doc', 'view' => 'YdController', '#' => 'loadModel-detail')); ?></td>
  <td></td>
  <td></td>
  <td><?php echo CHtml::link('YdController', array('/site/doc', 'view' => 'YdController')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CController', '#' => '__construct-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
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
<tr class="inherited" id="accessRules">
  <td><?php echo CHtml::link('accessRules()', array('/site/doc', 'view' => 'CController', '#' => 'accessRules-detail')); ?></td>
  <td>Returns the access rules for this controller.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr id="actionError">
  <td><?php echo CHtml::link('actionError()', array('/site/doc', 'view' => 'YdApiController', '#' => 'actionError-detail')); ?></td>
  <td>Custom error handler for restfull Errors</td>
  <td>YdApiController</td>
</tr>
<tr class="inherited" id="actions">
  <td><?php echo CHtml::link('actions()', array('/site/doc', 'view' => 'CController', '#' => 'actions-detail')); ?></td>
  <td>Returns a list of external action classes.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
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
<tr class="inherited" id="beginCache">
  <td><?php echo CHtml::link('beginCache()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginCache-detail')); ?></td>
  <td>Begins fragment caching.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="beginClip">
  <td><?php echo CHtml::link('beginClip()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginClip-detail')); ?></td>
  <td>Begins recording a clip.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="beginContent">
  <td><?php echo CHtml::link('beginContent()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginContent-detail')); ?></td>
  <td>Begins the rendering of content that is to be decorated by the specified view.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="beginWidget">
  <td><?php echo CHtml::link('beginWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginWidget-detail')); ?></td>
  <td>Creates a widget and executes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors()', array('/site/doc', 'view' => 'CController', '#' => 'behaviors-detail')); ?></td>
  <td>Returns a list of behaviors that this controller should behave as.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
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
<tr class="inherited" id="clearPageStates">
  <td><?php echo CHtml::link('clearPageStates()', array('/site/doc', 'view' => 'CController', '#' => 'clearPageStates-detail')); ?></td>
  <td>Removes all page states.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="createAbsoluteUrl">
  <td><?php echo CHtml::link('createAbsoluteUrl()', array('/site/doc', 'view' => 'CController', '#' => 'createAbsoluteUrl-detail')); ?></td>
  <td>Creates an absolute URL for the specified action defined in this controller.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="createAction">
  <td><?php echo CHtml::link('createAction()', array('/site/doc', 'view' => 'CController', '#' => 'createAction-detail')); ?></td>
  <td>Creates the action instance based on the action name.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="createUrl">
  <td><?php echo CHtml::link('createUrl()', array('/site/doc', 'view' => 'CController', '#' => 'createUrl-detail')); ?></td>
  <td>Creates a relative URL for the specified action defined in this controller.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a widget and initializes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
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
<tr class="inherited" id="endCache">
  <td><?php echo CHtml::link('endCache()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endCache-detail')); ?></td>
  <td>Ends fragment caching.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="endClip">
  <td><?php echo CHtml::link('endClip()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endClip-detail')); ?></td>
  <td>Ends recording a clip.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="endContent">
  <td><?php echo CHtml::link('endContent()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endContent-detail')); ?></td>
  <td>Ends the rendering of content.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="endWidget">
  <td><?php echo CHtml::link('endWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endWidget-detail')); ?></td>
  <td>Ends the execution of the named widget.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="filterAccessControl">
  <td><?php echo CHtml::link('filterAccessControl()', array('/site/doc', 'view' => 'CController', '#' => 'filterAccessControl-detail')); ?></td>
  <td>The filter method for 'accessControl' filter.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="filterAjaxOnly">
  <td><?php echo CHtml::link('filterAjaxOnly()', array('/site/doc', 'view' => 'CController', '#' => 'filterAjaxOnly-detail')); ?></td>
  <td>The filter method for 'ajaxOnly' filter.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="filterPostOnly">
  <td><?php echo CHtml::link('filterPostOnly()', array('/site/doc', 'view' => 'CController', '#' => 'filterPostOnly-detail')); ?></td>
  <td>The filter method for 'postOnly' filter.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="filters">
  <td><?php echo CHtml::link('filters()', array('/site/doc', 'view' => 'YdController', '#' => 'filters-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdController', array('/site/doc', 'view' => 'YdController')); ?></td>
</tr>
<tr class="inherited" id="forward">
  <td><?php echo CHtml::link('forward()', array('/site/doc', 'view' => 'CController', '#' => 'forward-detail')); ?></td>
  <td>Processes the request using another controller action.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getAction">
  <td><?php echo CHtml::link('getAction()', array('/site/doc', 'view' => 'CController', '#' => 'getAction-detail')); ?></td>
  <td>Returns the action currently being executed, null if no active action.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getActionParams">
  <td><?php echo CHtml::link('getActionParams()', array('/site/doc', 'view' => 'CController', '#' => 'getActionParams-detail')); ?></td>
  <td>Returns the request parameters that will be used for action parameter binding.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getCachingStack">
  <td><?php echo CHtml::link('getCachingStack()', array('/site/doc', 'view' => 'CController', '#' => 'getCachingStack-detail')); ?></td>
  <td>Returns stack of <?php echo CHtml::link('COutputCache', array('/site/doc', 'view' => 'COutputCache')); ?> objects</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getClips">
  <td><?php echo CHtml::link('getClips()', array('/site/doc', 'view' => 'CController', '#' => 'getClips-detail')); ?></td>
  <td>Returns the list of clips.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getHttpStatus">
  <td><?php echo CHtml::link('getHttpStatus()', array('/site/doc', 'view' => 'YdApiController', '#' => 'getHttpStatus-detail')); ?></td>
  <td>Get HTTP Status Headers From code</td>
  <td>YdApiController</td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CController', '#' => 'getId-detail')); ?></td>
  <td>Returns ID of the controller</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getLayoutFile">
  <td><?php echo CHtml::link('getLayoutFile()', array('/site/doc', 'view' => 'CController', '#' => 'getLayoutFile-detail')); ?></td>
  <td>Looks for the layout view script based on the layout name.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getModule">
  <td><?php echo CHtml::link('getModule()', array('/site/doc', 'view' => 'CController', '#' => 'getModule-detail')); ?></td>
  <td>Returns the module that this controller belongs to. It returns null
if the controller does not belong to any module</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getPageState">
  <td><?php echo CHtml::link('getPageState()', array('/site/doc', 'view' => 'CController', '#' => 'getPageState-detail')); ?></td>
  <td>Returns a persistent page state value.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getPageTitle">
  <td><?php echo CHtml::link('getPageTitle()', array('/site/doc', 'view' => 'CController', '#' => 'getPageTitle-detail')); ?></td>
  <td>Returns the page title. Defaults to the controller name and the action name.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getRoute">
  <td><?php echo CHtml::link('getRoute()', array('/site/doc', 'view' => 'CController', '#' => 'getRoute-detail')); ?></td>
  <td>Returns the route (module ID, controller ID and action ID) of the current request.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getUniqueId">
  <td><?php echo CHtml::link('getUniqueId()', array('/site/doc', 'view' => 'CController', '#' => 'getUniqueId-detail')); ?></td>
  <td>Returns the controller ID that is prefixed with the module ID (if any).</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getViewFile">
  <td><?php echo CHtml::link('getViewFile()', array('/site/doc', 'view' => 'CController', '#' => 'getViewFile-detail')); ?></td>
  <td>Looks for the view file according to the given view name.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="getViewPath">
  <td><?php echo CHtml::link('getViewPath()', array('/site/doc', 'view' => 'CController', '#' => 'getViewPath-detail')); ?></td>
  <td>Returns the directory containing view files for this controller.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdApiController', '#' => 'init-detail')); ?></td>
  <td>Initializes the controller.</td>
  <td>YdApiController</td>
</tr>
<tr class="inherited" id="invalidActionParams">
  <td><?php echo CHtml::link('invalidActionParams()', array('/site/doc', 'view' => 'CController', '#' => 'invalidActionParams-detail')); ?></td>
  <td>This method is invoked when the request parameters do not satisfy the requirement of the specified action.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="isCachingStackEmpty">
  <td><?php echo CHtml::link('isCachingStackEmpty()', array('/site/doc', 'view' => 'CController', '#' => 'isCachingStackEmpty-detail')); ?></td>
  <td>Returns whether the caching stack is empty.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr id="loadModel()">
  <td><?php echo CHtml::link('loadModel()', array('/site/doc', 'view' => 'YdApiController', '#' => 'loadModel()-detail')); ?></td>
  <td></td>
  <td>YdApiController</td>
</tr>
<tr class="inherited" id="missingAction">
  <td><?php echo CHtml::link('missingAction()', array('/site/doc', 'view' => 'CController', '#' => 'missingAction-detail')); ?></td>
  <td>Handles the request whose action is not recognized.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="processDynamicOutput">
  <td><?php echo CHtml::link('processDynamicOutput()', array('/site/doc', 'view' => 'CController', '#' => 'processDynamicOutput-detail')); ?></td>
  <td>Postprocesses the dynamic output.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="processOutput">
  <td><?php echo CHtml::link('processOutput()', array('/site/doc', 'view' => 'CController', '#' => 'processOutput-detail')); ?></td>
  <td>Postprocesses the output generated by <?php echo CHtml::link('render()', array('/site/doc', 'view' => 'YdApiController', '#' => 'render')); ?>.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="recordCachingAction">
  <td><?php echo CHtml::link('recordCachingAction()', array('/site/doc', 'view' => 'CController', '#' => 'recordCachingAction-detail')); ?></td>
  <td>Records a method call when an output cache is in effect.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="redirect">
  <td><?php echo CHtml::link('redirect()', array('/site/doc', 'view' => 'CController', '#' => 'redirect-detail')); ?></td>
  <td>Redirects the browser to the specified URL or route (controller/action).</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="refresh">
  <td><?php echo CHtml::link('refresh()', array('/site/doc', 'view' => 'CController', '#' => 'refresh-detail')); ?></td>
  <td>Refreshes the current page.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CController', '#' => 'render-detail')); ?></td>
  <td>Renders a view with a layout.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="renderClip">
  <td><?php echo CHtml::link('renderClip()', array('/site/doc', 'view' => 'CController', '#' => 'renderClip-detail')); ?></td>
  <td>Renders a named clip with the supplied parameters.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="renderDynamic">
  <td><?php echo CHtml::link('renderDynamic()', array('/site/doc', 'view' => 'CController', '#' => 'renderDynamic-detail')); ?></td>
  <td>Renders dynamic content returned by the specified callback.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="renderDynamicInternal">
  <td><?php echo CHtml::link('renderDynamicInternal()', array('/site/doc', 'view' => 'CController', '#' => 'renderDynamicInternal-detail')); ?></td>
  <td>This method is internally used.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="renderInternal">
  <td><?php echo CHtml::link('renderInternal()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderInternal-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="renderPartial">
  <td><?php echo CHtml::link('renderPartial()', array('/site/doc', 'view' => 'CController', '#' => 'renderPartial-detail')); ?></td>
  <td>Renders a view.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="renderText">
  <td><?php echo CHtml::link('renderText()', array('/site/doc', 'view' => 'CController', '#' => 'renderText-detail')); ?></td>
  <td>Renders a static text string.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="resolveViewFile">
  <td><?php echo CHtml::link('resolveViewFile()', array('/site/doc', 'view' => 'CController', '#' => 'resolveViewFile-detail')); ?></td>
  <td>Finds a view file based on its name.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CController', '#' => 'run-detail')); ?></td>
  <td>Runs the named action.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="runAction">
  <td><?php echo CHtml::link('runAction()', array('/site/doc', 'view' => 'CController', '#' => 'runAction-detail')); ?></td>
  <td>Runs the action after passing through all filters.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="runActionWithFilters">
  <td><?php echo CHtml::link('runActionWithFilters()', array('/site/doc', 'view' => 'CController', '#' => 'runActionWithFilters-detail')); ?></td>
  <td>Runs an action with the specified filters.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="setAction">
  <td><?php echo CHtml::link('setAction()', array('/site/doc', 'view' => 'CController', '#' => 'setAction-detail')); ?></td>
  <td>Sets the action currently being executed.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="setPageState">
  <td><?php echo CHtml::link('setPageState()', array('/site/doc', 'view' => 'CController', '#' => 'setPageState-detail')); ?></td>
  <td>Saves a persistent page state value.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="setPageTitle">
  <td><?php echo CHtml::link('setPageTitle()', array('/site/doc', 'view' => 'CController', '#' => 'setPageTitle-detail')); ?></td>
  <td>Sets the page title.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="widget">
  <td><?php echo CHtml::link('widget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget-detail')); ?></td>
  <td>Creates a widget and executes it.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
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
<tr class="inherited" id="afterAction">
  <td><?php echo CHtml::link('afterAction()', array('/site/doc', 'view' => 'CController', '#' => 'afterAction-detail')); ?></td>
  <td>This method is invoked right after an action is executed.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="afterRender">
  <td><?php echo CHtml::link('afterRender()', array('/site/doc', 'view' => 'CController', '#' => 'afterRender-detail')); ?></td>
  <td>This method is invoked after the specified view is rendered by calling <?php echo CHtml::link('render()', array('/site/doc', 'view' => 'YdApiController', '#' => 'render')); ?>.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="beforeAction">
  <td><?php echo CHtml::link('beforeAction()', array('/site/doc', 'view' => 'CController', '#' => 'beforeAction-detail')); ?></td>
  <td>This method is invoked right before an action is to be executed (after all possible filters.)</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="beforeRender">
  <td><?php echo CHtml::link('beforeRender()', array('/site/doc', 'view' => 'CController', '#' => 'beforeRender-detail')); ?></td>
  <td>This method is invoked at the beginning of <?php echo CHtml::link('render()', array('/site/doc', 'view' => 'YdApiController', '#' => 'render')); ?>.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="createActionFromMap">
  <td><?php echo CHtml::link('createActionFromMap()', array('/site/doc', 'view' => 'CController', '#' => 'createActionFromMap-detail')); ?></td>
  <td>Creates the action instance based on the action map.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="loadPageStates">
  <td><?php echo CHtml::link('loadPageStates()', array('/site/doc', 'view' => 'CController', '#' => 'loadPageStates-detail')); ?></td>
  <td>Loads page states from a hidden input.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="replaceDynamicOutput">
  <td><?php echo CHtml::link('replaceDynamicOutput()', array('/site/doc', 'view' => 'CController', '#' => 'replaceDynamicOutput-detail')); ?></td>
  <td>Replaces the dynamic content placeholders with actual content.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="savePageStates">
  <td><?php echo CHtml::link('savePageStates()', array('/site/doc', 'view' => 'CController', '#' => 'savePageStates-detail')); ?></td>
  <td>Saves page states as a base64 string.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="HTTPStatus-detail">
HTTPStatus<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$HTTPStatus</b>;</div>

<p></p>


<div class="detailHeader" id="layout-detail">
layout<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$layout</b>;</div>

<p>the default layout for the controller view. Defaults to '//layouts/column1',
meaning using a single column layout. See 'protected/views/layouts/column1.php'.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="actionError-detail">
actionError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionError</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/components/YdApiController.php#L62">dressing/components/YdApiController.php#L62</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionError</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">errorHandler</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">error</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAjaxRequest</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">HTTPStatus&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHttpStatus</span><span style="color: #007700">(</span><span style="color: #0000BB">$error</span><span style="color: #007700">[</span><span style="color: #DD0000">'code'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">HTTPStatus&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHttpStatus</span><span style="color: #007700">(</span><span style="color: #0000BB">200</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">HTTPStatus&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHttpStatus</span><span style="color: #007700">(</span><span style="color: #0000BB">500</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderJson</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'success'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'message'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorCode'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">[</span><span style="color: #DD0000">'code'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Custom error handler for restfull Errors</p>


<div class="detailHeader" id="getHttpStatus-detail">
getHttpStatus()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getHttpStatus</b>($statusCode $statusCode)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$statusCode</td>
  <td class="paramTypeCol">$statusCode</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/components/YdApiController.php#L87">dressing/components/YdApiController.php#L87</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHttpStatus</span><span style="color: #007700">(</span><span style="color: #0000BB">$statusCode</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$statusCode</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'200'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'HTTP/1.1&nbsp;200&nbsp;OK'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'201'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'HTTP/1.1&nbsp;201&nbsp;Created'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'401'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'HTTP/1.1&nbsp;401&nbsp;Unauthorized'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'404'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'HTTP/1.1&nbsp;404&nbsp;Not&nbsp;Found'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'406'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'HTTP/1.1&nbsp;406&nbsp;Not&nbsp;Acceptable'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'500'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'HTTP/1.1&nbsp;500&nbsp;Internal&nbsp;Server&nbsp;Error'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'HTTP/1.1&nbsp;200&nbsp;OK'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Get HTTP Status Headers From code</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/components/YdApiController.php#L31">dressing/components/YdApiController.php#L31</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;custom&nbsp;error&nbsp;action<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">errorHandler</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorAction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/error'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;do&nbsp;not&nbsp;redirect&nbsp;when&nbsp;not&nbsp;logged&nbsp;in<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loginUrl&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;allow&nbsp;login&nbsp;from&nbsp;any&nbsp;url<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_USER'</span><span style="color: #007700">])&nbsp;||&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_PW'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$username&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_USER'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$password&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_AUTH_PW'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;allow&nbsp;a&nbsp;secure&nbsp;link&nbsp;to&nbsp;api-login<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$identity&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">UserIdentity</span><span style="color: #007700">(</span><span style="color: #0000BB">$username</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$identity</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">authenticateApi</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">login</span><span style="color: #007700">(</span><span style="color: #0000BB">$identity</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$duration&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;ensure&nbsp;the&nbsp;user&nbsp;is&nbsp;an&nbsp;api&nbsp;login<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isGuest&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #DD0000">'UserIdentity.api'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">403</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Please&nbsp;login&nbsp;to&nbsp;API.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the controller.
This method is called by the application before the controller starts to execute.
You may override this method to perform the needed initialization for the controller.</p>


<div class="detailHeader" id="loadModel()-detail">
loadModel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public ActiveRecord <b>loadModel</b>($id $id, bool|string $model=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">$id</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol">bool|string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">ActiveRecord</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/components/YdApiController.php#L113">dressing/components/YdApiController.php#L113</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">loadModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'ApiController'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadModel&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadModel&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CActiveRecord</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">findbyPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadModel&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">404</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'The&nbsp;requested&nbsp;model&nbsp;does&nbsp;not&nbsp;exist.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadModel</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


