<?php
$this->pageTitle = $this->pageHeading = 'CLinkPager';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CLinkPager';
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
  <td><?php echo CHtml::link('system.web.widgets.pagers', array('/site/doc', '#' => 'system.web.widgets.pagers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CLinkPager &raquo;
<?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbPager', array('/site/doc', 'view' => 'TbPager')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\widgets\pagers\CLinkPager.php">yii\web\widgets\pagers\CLinkPager.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CLinkPager displays a list of hyperlinks that lead to different pages of target.</div>
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
<tr class="inherited" id="actionPrefix">
  <td><?php echo CHtml::link('actionPrefix', array('/site/doc', 'view' => 'CWidget', '#' => 'actionPrefix-detail')); ?></td>
  <td>string</td>
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'CLinkPager', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="cssFile">
  <td><?php echo CHtml::link('cssFile', array('/site/doc', 'view' => 'CLinkPager', '#' => 'cssFile-detail')); ?></td>
  <td>mixed</td>
  <td>the CSS file used for the widget.</td>
  <td>CLinkPager</td>
</tr>
<tr class="inherited" id="currentPage">
  <td><?php echo CHtml::link('currentPage', array('/site/doc', 'view' => 'CBasePager', '#' => 'currentPage-detail')); ?></td>
  <td>integer</td>
  <td>the zero-based index of the current page.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr id="firstPageCssClass">
  <td><?php echo CHtml::link('firstPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'firstPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the first page button.</td>
  <td>CLinkPager</td>
</tr>
<tr id="firstPageLabel">
  <td><?php echo CHtml::link('firstPageLabel', array('/site/doc', 'view' => 'CLinkPager', '#' => 'firstPageLabel-detail')); ?></td>
  <td>string</td>
  <td>the text label for the first page button.</td>
  <td>CLinkPager</td>
</tr>
<tr id="footer">
  <td><?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CLinkPager', '#' => 'footer-detail')); ?></td>
  <td>string</td>
  <td>the text shown after page buttons.</td>
  <td>CLinkPager</td>
</tr>
<tr id="header">
  <td><?php echo CHtml::link('header', array('/site/doc', 'view' => 'CLinkPager', '#' => 'header-detail')); ?></td>
  <td>string</td>
  <td>the text shown before page buttons.</td>
  <td>CLinkPager</td>
</tr>
<tr id="hiddenPageCssClass">
  <td><?php echo CHtml::link('hiddenPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'hiddenPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the hidden page buttons.</td>
  <td>CLinkPager</td>
</tr>
<tr id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CLinkPager', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML attributes for the pager container tag.</td>
  <td>CLinkPager</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="internalPageCssClass">
  <td><?php echo CHtml::link('internalPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'internalPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the internal page buttons.</td>
  <td>CLinkPager</td>
</tr>
<tr class="inherited" id="itemCount">
  <td><?php echo CHtml::link('itemCount', array('/site/doc', 'view' => 'CBasePager', '#' => 'itemCount-detail')); ?></td>
  <td>integer</td>
  <td>total number of items.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr id="lastPageCssClass">
  <td><?php echo CHtml::link('lastPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'lastPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the last page button.</td>
  <td>CLinkPager</td>
</tr>
<tr id="lastPageLabel">
  <td><?php echo CHtml::link('lastPageLabel', array('/site/doc', 'view' => 'CLinkPager', '#' => 'lastPageLabel-detail')); ?></td>
  <td>string</td>
  <td>the text label for the last page button.</td>
  <td>CLinkPager</td>
</tr>
<tr id="maxButtonCount">
  <td><?php echo CHtml::link('maxButtonCount', array('/site/doc', 'view' => 'CLinkPager', '#' => 'maxButtonCount-detail')); ?></td>
  <td>integer</td>
  <td>maximum number of page buttons that can be displayed.</td>
  <td>CLinkPager</td>
</tr>
<tr id="nextPageCssClass">
  <td><?php echo CHtml::link('nextPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'nextPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the next page button.</td>
  <td>CLinkPager</td>
</tr>
<tr id="nextPageLabel">
  <td><?php echo CHtml::link('nextPageLabel', array('/site/doc', 'view' => 'CLinkPager', '#' => 'nextPageLabel-detail')); ?></td>
  <td>string</td>
  <td>the text label for the next page button.</td>
  <td>CLinkPager</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="pageCount">
  <td><?php echo CHtml::link('pageCount', array('/site/doc', 'view' => 'CBasePager', '#' => 'pageCount-detail')); ?></td>
  <td>integer</td>
  <td>number of pages</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="pageSize">
  <td><?php echo CHtml::link('pageSize', array('/site/doc', 'view' => 'CBasePager', '#' => 'pageSize-detail')); ?></td>
  <td>integer</td>
  <td>number of items in each page.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="pages">
  <td><?php echo CHtml::link('pages', array('/site/doc', 'view' => 'CBasePager', '#' => 'pages-detail')); ?></td>
  <td><?php echo CHtml::link('CPagination', array('/site/doc', 'view' => 'CPagination')); ?></td>
  <td>Returns the pagination information used by this pager.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr id="prevPageLabel">
  <td><?php echo CHtml::link('prevPageLabel', array('/site/doc', 'view' => 'CLinkPager', '#' => 'prevPageLabel-detail')); ?></td>
  <td>string</td>
  <td>the text label for the previous page button.</td>
  <td>CLinkPager</td>
</tr>
<tr id="previousPageCssClass">
  <td><?php echo CHtml::link('previousPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'previousPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the previous page button.</td>
  <td>CLinkPager</td>
</tr>
<tr id="selectedPageCssClass">
  <td><?php echo CHtml::link('selectedPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'selectedPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the selected page buttons.</td>
  <td>CLinkPager</td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CWidget', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr id="pageRange">
  <td><?php echo CHtml::link('pageRange', array('/site/doc', 'view' => 'CLinkPager', '#' => 'pageRange-detail')); ?></td>
  <td>array</td>
  <td>the begin and end pages that need to be displayed.</td>
  <td>CLinkPager</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CWidget', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="actions">
  <td><?php echo CHtml::link('actions()', array('/site/doc', 'view' => 'CWidget', '#' => 'actions-detail')); ?></td>
  <td>Returns a list of actions that are used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CWidget', '#' => 'getController-detail')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getCurrentPage">
  <td><?php echo CHtml::link('getCurrentPage()', array('/site/doc', 'view' => 'CBasePager', '#' => 'getCurrentPage-detail')); ?></td>
  <td>Returns the zero-based index of the current page. Defaults to 0.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CWidget', '#' => 'getId-detail')); ?></td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getItemCount">
  <td><?php echo CHtml::link('getItemCount()', array('/site/doc', 'view' => 'CBasePager', '#' => 'getItemCount-detail')); ?></td>
  <td>Returns total number of items.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="getOwner">
  <td><?php echo CHtml::link('getOwner()', array('/site/doc', 'view' => 'CWidget', '#' => 'getOwner-detail')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getPageCount">
  <td><?php echo CHtml::link('getPageCount()', array('/site/doc', 'view' => 'CBasePager', '#' => 'getPageCount-detail')); ?></td>
  <td>Returns number of pages</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="getPageSize">
  <td><?php echo CHtml::link('getPageSize()', array('/site/doc', 'view' => 'CBasePager', '#' => 'getPageSize-detail')); ?></td>
  <td>Returns number of items in each page.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="getPages">
  <td><?php echo CHtml::link('getPages()', array('/site/doc', 'view' => 'CBasePager', '#' => 'getPages-detail')); ?></td>
  <td>Returns the pagination information used by this pager.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="getViewFile">
  <td><?php echo CHtml::link('getViewFile()', array('/site/doc', 'view' => 'CWidget', '#' => 'getViewFile-detail')); ?></td>
  <td>Looks for the view script file according to the view name.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getViewPath">
  <td><?php echo CHtml::link('getViewPath()', array('/site/doc', 'view' => 'CWidget', '#' => 'getViewPath-detail')); ?></td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'init-detail')); ?></td>
  <td>Initializes the pager by setting some default property values.</td>
  <td>CLinkPager</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers the needed client scripts (mainly CSS file).</td>
  <td>CLinkPager</td>
</tr>
<tr id="registerCssFile">
  <td><?php echo CHtml::link('registerCssFile()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'registerCssFile-detail')); ?></td>
  <td>Registers the needed CSS file.</td>
  <td>CLinkPager</td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CWidget', '#' => 'render-detail')); ?></td>
  <td>Renders a view.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'run-detail')); ?></td>
  <td>Executes the widget.</td>
  <td>CLinkPager</td>
</tr>
<tr class="inherited" id="setCurrentPage">
  <td><?php echo CHtml::link('setCurrentPage()', array('/site/doc', 'view' => 'CBasePager', '#' => 'setCurrentPage-detail')); ?></td>
  <td>Sets the zero-based index of the current page.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CWidget', '#' => 'setId-detail')); ?></td>
  <td>Sets the ID of the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="setItemCount">
  <td><?php echo CHtml::link('setItemCount()', array('/site/doc', 'view' => 'CBasePager', '#' => 'setItemCount-detail')); ?></td>
  <td>Sets total number of items.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="setPageSize">
  <td><?php echo CHtml::link('setPageSize()', array('/site/doc', 'view' => 'CBasePager', '#' => 'setPageSize-detail')); ?></td>
  <td>Sets number of items in each page</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="setPages">
  <td><?php echo CHtml::link('setPages()', array('/site/doc', 'view' => 'CBasePager', '#' => 'setPages-detail')); ?></td>
  <td>Sets the pagination information used by this pager.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
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
<tr id="createPageButton">
  <td><?php echo CHtml::link('createPageButton()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'createPageButton-detail')); ?></td>
  <td>Creates a page button.</td>
  <td>CLinkPager</td>
</tr>
<tr id="createPageButtons">
  <td><?php echo CHtml::link('createPageButtons()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'createPageButtons-detail')); ?></td>
  <td>Creates the page buttons.</td>
  <td>CLinkPager</td>
</tr>
<tr class="inherited" id="createPageUrl">
  <td><?php echo CHtml::link('createPageUrl()', array('/site/doc', 'view' => 'CBasePager', '#' => 'createPageUrl-detail')); ?></td>
  <td>Creates the URL suitable for pagination.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="createPages">
  <td><?php echo CHtml::link('createPages()', array('/site/doc', 'view' => 'CBasePager', '#' => 'createPages-detail')); ?></td>
  <td>Creates the default pagination.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr id="getPageRange">
  <td><?php echo CHtml::link('getPageRange()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'getPageRange-detail')); ?></td>
  <td>Returns the begin and end pages that need to be displayed.</td>
  <td>CLinkPager</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="cssFile-detail">
cssFile<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$cssFile</b>;</div>

<p>the CSS file used for the widget. Defaults to null, meaning
using the default CSS file included together with the widget.
If false, no CSS file will be used. Otherwise, the specified CSS file
will be included when using this widget.</p>


<div class="detailHeader" id="firstPageCssClass-detail">
firstPageCssClass<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public string <b>$firstPageCssClass</b>;</div>

<p>the CSS class for the first page button. Defaults to 'first'.</p>


<div class="detailHeader" id="firstPageLabel-detail">
firstPageLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$firstPageLabel</b>;</div>

<p>the text label for the first page button. Defaults to '&lt;&lt; First'.</p>


<div class="detailHeader" id="footer-detail">
footer<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$footer</b>;</div>

<p>the text shown after page buttons.</p>


<div class="detailHeader" id="header-detail">
header<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$header</b>;</div>

<p>the text shown before page buttons. Defaults to 'Go to page: '.</p>


<div class="detailHeader" id="hiddenPageCssClass-detail">
hiddenPageCssClass<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public string <b>$hiddenPageCssClass</b>;</div>

<p>the CSS class for the hidden page buttons. Defaults to 'hidden'.</p>


<div class="detailHeader" id="htmlOptions-detail">
htmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$htmlOptions</b>;</div>

<p>HTML attributes for the pager container tag.</p>


<div class="detailHeader" id="internalPageCssClass-detail">
internalPageCssClass<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public string <b>$internalPageCssClass</b>;</div>

<p>the CSS class for the internal page buttons. Defaults to 'page'.</p>


<div class="detailHeader" id="lastPageCssClass-detail">
lastPageCssClass<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public string <b>$lastPageCssClass</b>;</div>

<p>the CSS class for the last page button. Defaults to 'last'.</p>


<div class="detailHeader" id="lastPageLabel-detail">
lastPageLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$lastPageLabel</b>;</div>

<p>the text label for the last page button. Defaults to 'Last &gt;&gt;'.</p>


<div class="detailHeader" id="maxButtonCount-detail">
maxButtonCount<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$maxButtonCount</b>;</div>

<p>maximum number of page buttons that can be displayed. Defaults to 10.</p>


<div class="detailHeader" id="nextPageCssClass-detail">
nextPageCssClass<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public string <b>$nextPageCssClass</b>;</div>

<p>the CSS class for the next page button. Defaults to 'next'.</p>


<div class="detailHeader" id="nextPageLabel-detail">
nextPageLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$nextPageLabel</b>;</div>

<p>the text label for the next page button. Defaults to 'Next &gt;'.</p>


<div class="detailHeader" id="pageRange-detail">
pageRange<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected array <?php echo CHtml::link('<b>getPageRange</b>', array('/site/doc', 'view' => 'CLinkPager', '#' => 'getPageRange')); ?>()</div>

<p>the begin and end pages that need to be displayed.</p>


<div class="detailHeader" id="prevPageLabel-detail">
prevPageLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$prevPageLabel</b>;</div>

<p>the text label for the previous page button. Defaults to '&lt; Previous'.</p>


<div class="detailHeader" id="previousPageCssClass-detail">
previousPageCssClass<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public string <b>$previousPageCssClass</b>;</div>

<p>the CSS class for the previous page button. Defaults to 'previous'.</p>


<div class="detailHeader" id="selectedPageCssClass-detail">
selectedPageCssClass<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public string <b>$selectedPageCssClass</b>;</div>

<p>the CSS class for the selected page buttons. Defaults to 'selected'.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="createPageButton-detail">
createPageButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>createPageButton</b>(string $label, integer $page, string $class, boolean $hidden, boolean $selected)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the text label for the button</td>
</tr>
<tr>
  <td class="paramNameCol">$page</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the page number</td>
</tr>
<tr>
  <td class="paramNameCol">$class</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS class for the page button.</td>
</tr>
<tr>
  <td class="paramNameCol">$hidden</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this page button is visible</td>
</tr>
<tr>
  <td class="paramNameCol">$selected</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this page button is selected</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated button</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\widgets\pagers\CLinkPager.php#L186">yii\web\widgets\pagers\CLinkPager.php#L186</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$page</span><span style="color: #007700">,</span><span style="color: #0000BB">$class</span><span style="color: #007700">,</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">,</span><span style="color: #0000BB">$selected</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$selected</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.(</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hiddenPageCssClass&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selectedPageCssClass</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'&lt;li&nbsp;class="'</span><span style="color: #007700">.</span><span style="color: #0000BB">$class</span><span style="color: #007700">.</span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$page</span><span style="color: #007700">)).</span><span style="color: #DD0000">'&lt;/li&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a page button.
You may override this method to customize the page buttons.</p>


<div class="detailHeader" id="createPageButtons-detail">
createPageButtons()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>createPageButtons</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">a list of page buttons (in HTML code).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\widgets\pagers\CLinkPager.php#L144">yii\web\widgets\pagers\CLinkPager.php#L144</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createPageButtons</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPageCount</span><span style="color: #007700">())&lt;=</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$beginPage</span><span style="color: #007700">,</span><span style="color: #0000BB">$endPage</span><span style="color: #007700">)=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPageRange</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCurrentPage</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;currentPage&nbsp;is&nbsp;calculated&nbsp;in&nbsp;getPageRange()<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">=array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;first&nbsp;page<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstPageLabel</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstPageCssClass</span><span style="color: #007700">,</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">&lt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;prev&nbsp;page<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if((</span><span style="color: #0000BB">$page</span><span style="color: #007700">=</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&lt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$page</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prevPageLabel</span><span style="color: #007700">,</span><span style="color: #0000BB">$page</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">previousPageCssClass</span><span style="color: #007700">,</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">&lt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;internal&nbsp;pages<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">$beginPage</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;=</span><span style="color: #0000BB">$endPage</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$i</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">internalPageCssClass</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$i</span><span style="color: #007700">==</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;next&nbsp;page<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if((</span><span style="color: #0000BB">$page</span><span style="color: #007700">=</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">)&gt;=</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$page</span><span style="color: #007700">=</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nextPageLabel</span><span style="color: #007700">,</span><span style="color: #0000BB">$page</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nextPageCssClass</span><span style="color: #007700">,</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;last&nbsp;page<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastPageLabel</span><span style="color: #007700">,</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastPageCssClass</span><span style="color: #007700">,</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates the page buttons.</p>


<div class="detailHeader" id="getPageRange-detail">
getPageRange()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>getPageRange</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the begin and end pages that need to be displayed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\widgets\pagers\CLinkPager.php#L196">yii\web\widgets\pagers\CLinkPager.php#L196</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getPageRange</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCurrentPage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPageCount</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$beginPage</span><span style="color: #007700">=</span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">-(int)(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxButtonCount</span><span style="color: #007700">/</span><span style="color: #0000BB">2</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$endPage</span><span style="color: #007700">=</span><span style="color: #0000BB">$beginPage</span><span style="color: #007700">+</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxButtonCount</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&gt;=</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$endPage</span><span style="color: #007700">=</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$beginPage</span><span style="color: #007700">=</span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$endPage</span><span style="color: #007700">-</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">maxButtonCount</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #0000BB">$beginPage</span><span style="color: #007700">,</span><span style="color: #0000BB">$endPage</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\widgets\pagers\CLinkPager.php#L106">yii\web\widgets\pagers\CLinkPager.php#L106</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nextPageLabel</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nextPageLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Next&nbsp;&amp;gt;'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prevPageLabel</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prevPageLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&amp;lt;&nbsp;Previous'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstPageLabel</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstPageLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&amp;lt;&amp;lt;&nbsp;First'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastPageLabel</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastPageLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Last&nbsp;&amp;gt;&amp;gt;'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">header</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">header</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Go&nbsp;to&nbsp;page:&nbsp;'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'yiiPager'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the pager by setting some default property values.</p>


<div class="detailHeader" id="registerClientScript-detail">
registerClientScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerClientScript</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\widgets\pagers\CLinkPager.php#L213">yii\web\widgets\pagers\CLinkPager.php#L213</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the needed client scripts (mainly CSS file).</p>


<div class="detailHeader" id="registerCssFile-detail">
registerCssFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>registerCssFile</b>(string $url=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS URL. If null, a default CSS URL will be used.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\widgets\pagers\CLinkPager.php#L223">yii\web\widgets\pagers\CLinkPager.php#L223</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$url</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">asset</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'system.web.widgets.pagers.pager'</span><span style="color: #007700">).</span><span style="color: #DD0000">'.css'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers the needed CSS file.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\widgets\pagers\CLinkPager.php#L129">yii\web\widgets\pagers\CLinkPager.php#L129</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButtons</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">header</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'ul'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">footer</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Executes the widget.
This overrides the parent implementation by displaying the generated page buttons.</p>


