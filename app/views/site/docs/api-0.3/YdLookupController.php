<?php
$this->pageTitle = $this->pageHeading = 'YdLookupController';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdLookupController';
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
  <td><?php echo CHtml::link('dressing.controllers', array('/site/doc', '#' => 'dressing.controllers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdLookupController &raquo;
<?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?> &raquo;
<?php echo CHtml::link('YdController', array('/site/doc', 'view' => 'YdController')); ?> &raquo;
<?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php">dressing/controllers/YdLookupController.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdLookupController</div>
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
<tr class="inherited" id="breadcrumbs">
  <td><?php echo CHtml::link('breadcrumbs', array('/site/doc', 'view' => 'YdWebController', '#' => 'breadcrumbs-detail')); ?></td>
  <td>array</td>
  <td>the breadcrumbs of the current page.</td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
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
<tr class="inherited" id="gridIds">
  <td><?php echo CHtml::link('gridIds', array('/site/doc', 'view' => 'YdWebController', '#' => 'gridIds-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CController', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>ID of the controller</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="isModal">
  <td><?php echo CHtml::link('isModal', array('/site/doc', 'view' => 'YdWebController', '#' => 'isModal-detail')); ?></td>
  <td>bool</td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
</tr>
<tr class="inherited" id="layout">
  <td><?php echo CHtml::link('layout', array('/site/doc', 'view' => 'YdWebController', '#' => 'layout-detail')); ?></td>
  <td>string</td>
  <td>the default layout for the controller view.</td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
</tr>
<tr class="inherited" id="menu">
  <td><?php echo CHtml::link('menu', array('/site/doc', 'view' => 'YdWebController', '#' => 'menu-detail')); ?></td>
  <td>array</td>
  <td>context menu items.</td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
</tr>
<tr class="inherited" id="module">
  <td><?php echo CHtml::link('module', array('/site/doc', 'view' => 'CController', '#' => 'module-detail')); ?></td>
  <td><?php echo CHtml::link('CWebModule', array('/site/doc', 'view' => 'CWebModule')); ?></td>
  <td>the module that this controller belongs to.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'YdWebController', '#' => 'name-detail')); ?></td>
  <td>mixed</td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
</tr>
<tr class="inherited" id="pageHeading">
  <td><?php echo CHtml::link('pageHeading', array('/site/doc', 'view' => 'YdWebController', '#' => 'pageHeading-detail')); ?></td>
  <td></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
</tr>
<tr class="inherited" id="pageIcon">
  <td><?php echo CHtml::link('pageIcon', array('/site/doc', 'view' => 'YdWebController', '#' => 'pageIcon-detail')); ?></td>
  <td></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
</tr>
<tr class="inherited" id="pageSubheading">
  <td><?php echo CHtml::link('pageSubheading', array('/site/doc', 'view' => 'YdWebController', '#' => 'pageSubheading-detail')); ?></td>
  <td></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
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
<tr class="inherited" id="showNavBar">
  <td><?php echo CHtml::link('showNavBar', array('/site/doc', 'view' => 'YdWebController', '#' => 'showNavBar-detail')); ?></td>
  <td></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
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
  <td><?php echo CHtml::link('loadModel', array('/site/doc', 'view' => 'YdWebController', '#' => 'loadModel-detail')); ?></td>
  <td></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
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
<tr id="accessRules">
  <td><?php echo CHtml::link('accessRules()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'accessRules-detail')); ?></td>
  <td>Access Control</td>
  <td>YdLookupController</td>
</tr>
<tr id="actionCreate">
  <td><?php echo CHtml::link('actionCreate()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'actionCreate-detail')); ?></td>
  <td>Create</td>
  <td>YdLookupController</td>
</tr>
<tr id="actionDelete">
  <td><?php echo CHtml::link('actionDelete()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'actionDelete-detail')); ?></td>
  <td>Delete</td>
  <td>YdLookupController</td>
</tr>
<tr id="actionIndex">
  <td><?php echo CHtml::link('actionIndex()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'actionIndex-detail')); ?></td>
  <td>Index</td>
  <td>YdLookupController</td>
</tr>
<tr id="actionLog">
  <td><?php echo CHtml::link('actionLog()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'actionLog-detail')); ?></td>
  <td>Log</td>
  <td>YdLookupController</td>
</tr>
<tr id="actionOrder">
  <td><?php echo CHtml::link('actionOrder()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'actionOrder-detail')); ?></td>
  <td>Handles the ordering of lookups.</td>
  <td>YdLookupController</td>
</tr>
<tr id="actionType">
  <td><?php echo CHtml::link('actionType()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'actionType-detail')); ?></td>
  <td>Displays a particular group of lookups.</td>
  <td>YdLookupController</td>
</tr>
<tr id="actionUpdate">
  <td><?php echo CHtml::link('actionUpdate()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'actionUpdate-detail')); ?></td>
  <td>Update</td>
  <td>YdLookupController</td>
</tr>
<tr id="actionView">
  <td><?php echo CHtml::link('actionView()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'actionView-detail')); ?></td>
  <td>View</td>
  <td>YdLookupController</td>
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
<tr class="inherited" id="getGridIds">
  <td><?php echo CHtml::link('getGridIds()', array('/site/doc', 'view' => 'YdWebController', '#' => 'getGridIds-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
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
<tr class="inherited" id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'YdWebController', '#' => 'getName-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdWebController', '#' => 'init-detail')); ?></td>
  <td>Initializes the controller.</td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
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
<tr class="inherited" id="loadModel()">
  <td><?php echo CHtml::link('loadModel()', array('/site/doc', 'view' => 'YdWebController', '#' => 'loadModel()-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
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
  <td>Postprocesses the output generated by <?php echo CHtml::link('render()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'render')); ?>.</td>
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
  <td><?php echo CHtml::link('resolveViewFile()', array('/site/doc', 'view' => 'YdController', '#' => 'resolveViewFile-detail')); ?></td>
  <td>Allows loading view from dressing.views when application, theme and module views are unavailable.</td>
  <td><?php echo CHtml::link('YdController', array('/site/doc', 'view' => 'YdController')); ?></td>
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
  <td>This method is invoked after the specified view is rendered by calling <?php echo CHtml::link('render()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'render')); ?>.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="beforeAction">
  <td><?php echo CHtml::link('beforeAction()', array('/site/doc', 'view' => 'CController', '#' => 'beforeAction-detail')); ?></td>
  <td>This method is invoked right before an action is to be executed (after all possible filters.)</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="beforeRender">
  <td><?php echo CHtml::link('beforeRender()', array('/site/doc', 'view' => 'CController', '#' => 'beforeRender-detail')); ?></td>
  <td>This method is invoked at the beginning of <?php echo CHtml::link('render()', array('/site/doc', 'view' => 'YdLookupController', '#' => 'render')); ?>.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="createActionFromMap">
  <td><?php echo CHtml::link('createActionFromMap()', array('/site/doc', 'view' => 'CController', '#' => 'createActionFromMap-detail')); ?></td>
  <td>Creates the action instance based on the action map.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="flashRedirect">
  <td><?php echo CHtml::link('flashRedirect()', array('/site/doc', 'view' => 'YdWebController', '#' => 'flashRedirect-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
</tr>
<tr class="inherited" id="loadPageStates">
  <td><?php echo CHtml::link('loadPageStates()', array('/site/doc', 'view' => 'CController', '#' => 'loadPageStates-detail')); ?></td>
  <td>Loads page states from a hidden input.</td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
</tr>
<tr class="inherited" id="performAjaxValidation">
  <td><?php echo CHtml::link('performAjaxValidation()', array('/site/doc', 'view' => 'YdWebController', '#' => 'performAjaxValidation-detail')); ?></td>
  <td>Performs the AJAX validation.</td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
</tr>
<tr class="inherited" id="performValidation">
  <td><?php echo CHtml::link('performValidation()', array('/site/doc', 'view' => 'YdWebController', '#' => 'performValidation-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdWebController', array('/site/doc', 'view' => 'YdWebController')); ?></td>
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

<h2>Method Details</h2>

<div class="detailHeader" id="accessRules-detail">
accessRules()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>accessRules</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php#L20">dressing/controllers/YdLookupController.php#L20</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">accessRules</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'allow'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'actions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'index'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'view'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'log'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'create'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'update'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'delete'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'order'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'roles'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'deny'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'users'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />}</span>
</span>
</code></div>
</div>
<p>Access Control</p>


<div class="detailHeader" id="actionCreate-detail">
actionCreate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionCreate</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php#L81">dressing/controllers/YdLookupController.php#L81</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionCreate</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">YdLookup</span><span style="color: #007700">(</span><span style="color: #DD0000">'create'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">performAjaxValidation</span><span style="color: #007700">(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'lookup-form'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFlash</span><span style="color: #007700">(</span><span style="color: #DD0000">'Lookup&nbsp;has&nbsp;been&nbsp;created.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">redirect</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">returnUrl</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">()));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'create'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lookup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>Create</p>


<div class="detailHeader" id="actionDelete-detail">
actionDelete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionDelete</b>($id $id=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">$id</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php#L131">dressing/controllers/YdLookupController.php#L131</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$task&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">getSubmittedField</span><span style="color: #007700">(</span><span style="color: #DD0000">'task'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #DD0000">'undelete'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'undelete'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'delete'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">YdHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">getSubmittedField</span><span style="color: #007700">(</span><span style="color: #DD0000">'confirm'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getGridIds</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$_id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdLookup</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">findByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$_id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$task</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #DD0000">'Lookup&nbsp;:name&nbsp;has&nbsp;been&nbsp;:tasked.'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">':name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">':tasked'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$task&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'d'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)),&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">redirect</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">returnUrl</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getState</span><span style="color: #007700">(</span><span style="color: #DD0000">'index.lookup'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'/lookup/index'</span><span style="color: #007700">))));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'delete'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'task'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$task</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>Delete</p>


<div class="detailHeader" id="actionIndex-detail">
actionIndex()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionIndex</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php#L34">dressing/controllers/YdLookupController.php#L34</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionIndex</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">YdLookup</span><span style="color: #007700">(</span><span style="color: #DD0000">'search'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'index'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lookup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>Index</p>


<div class="detailHeader" id="actionLog-detail">
actionLog()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionLog</b>($id $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">$id</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php#L68">dressing/controllers/YdLookupController.php#L68</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionLog</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;$lookup&nbsp;YdLookup&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'log'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lookup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>Log</p>


<div class="detailHeader" id="actionOrder-detail">
actionOrder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionOrder</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php#L158">dressing/controllers/YdLookupController.php#L158</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionOrder</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'Order'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookups&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'Order'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$lookups&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$lookup_id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$lookup&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdLookup</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">findbyPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$lookup_id</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">position&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Handles the ordering of lookups.</p>


<div class="detailHeader" id="actionType-detail">
actionType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionType</b>($type $type, integer $id=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">$type</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the ID of the lookup to be displayed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php#L176">dressing/controllers/YdLookupController.php#L176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;types<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$types&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdLookup</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;lookups&nbsp;for&nbsp;sortable<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookups&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdLookup</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">findAll</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'condition'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'type=:type&nbsp;AND&nbsp;deleted&nbsp;IS&nbsp;NULL'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'params'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">':type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'order'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'t.position'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;lookup&nbsp;for&nbsp;form<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">)&nbsp;:&nbsp;new&nbsp;</span><span style="color: #0000BB">YdLookup</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">performAjaxValidation</span><span style="color: #007700">(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'lookup-form'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Lookup&nbsp;has&nbsp;been&nbsp;saved.'</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">redirect</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'lookup/view'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;render&nbsp;view<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'view'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'types'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lookups'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$lookups</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lookup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>Displays a particular group of lookups.</p>


<div class="detailHeader" id="actionUpdate-detail">
actionUpdate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionUpdate</b>($id $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">$id</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php#L108">dressing/controllers/YdLookupController.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionUpdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;$lookup&nbsp;YdLookup&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">performAjaxValidation</span><span style="color: #007700">(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'lookup-form'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Lookup&nbsp;has&nbsp;been&nbsp;updated'</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">redirect</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">returnUrl</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">()));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'update'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lookup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>Update</p>


<div class="detailHeader" id="actionView-detail">
actionView()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>actionView</b>($id $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">$id</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/controllers/YdLookupController.php#L49">dressing/controllers/YdLookupController.php#L49</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">actionView</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;$lookup&nbsp;YdLookup&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lookup&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'YdLookup'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;for&nbsp;deleted&nbsp;YdLookup<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleted</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFlash</span><span style="color: #007700">(</span><span style="color: #DD0000">'THIS&nbsp;RECORD&nbsp;IS&nbsp;DELETED'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">'view'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lookup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$lookup</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p>View</p>


