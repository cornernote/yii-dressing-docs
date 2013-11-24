<?php
$this->pageTitle = $this->pageHeading = 'YdPager';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdPager';
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
  <td><?php echo CHtml::link('dressing.widgets', array('/site/doc', '#' => 'dressing.widgets')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdPager &raquo;
<?php echo CHtml::link('TbPager', array('/site/doc', 'view' => 'TbPager')); ?> &raquo;
<?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?> &raquo;
<?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\widgets\YdPager.php">dressing\widgets\YdPager.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdPager</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'YdPager', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="alignment">
  <td><?php echo CHtml::link('alignment', array('/site/doc', 'view' => 'TbPager', '#' => 'alignment-detail')); ?></td>
  <td>string</td>
  <td>the pager alignment.</td>
  <td><?php echo CHtml::link('TbPager', array('/site/doc', 'view' => 'TbPager')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="cssFile">
  <td><?php echo CHtml::link('cssFile', array('/site/doc', 'view' => 'TbPager', '#' => 'cssFile-detail')); ?></td>
  <td>string</td>
  <td>the URL of the CSS file used by this pager.</td>
  <td><?php echo CHtml::link('TbPager', array('/site/doc', 'view' => 'TbPager')); ?></td>
</tr>
<tr class="inherited" id="currentPage">
  <td><?php echo CHtml::link('currentPage', array('/site/doc', 'view' => 'CBasePager', '#' => 'currentPage-detail')); ?></td>
  <td>integer</td>
  <td>the zero-based index of the current page.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="displayFirstAndLast">
  <td><?php echo CHtml::link('displayFirstAndLast', array('/site/doc', 'view' => 'TbPager', '#' => 'displayFirstAndLast-detail')); ?></td>
  <td>boolean</td>
  <td>whether to display the first and last items.</td>
  <td><?php echo CHtml::link('TbPager', array('/site/doc', 'view' => 'TbPager')); ?></td>
</tr>
<tr class="inherited" id="firstPageCssClass">
  <td><?php echo CHtml::link('firstPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'firstPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the first page button.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="firstPageLabel">
  <td><?php echo CHtml::link('firstPageLabel', array('/site/doc', 'view' => 'CLinkPager', '#' => 'firstPageLabel-detail')); ?></td>
  <td>string</td>
  <td>the text label for the first page button.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="footer">
  <td><?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CLinkPager', '#' => 'footer-detail')); ?></td>
  <td>string</td>
  <td>the text shown after page buttons.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="header">
  <td><?php echo CHtml::link('header', array('/site/doc', 'view' => 'TbPager', '#' => 'header-detail')); ?></td>
  <td>string</td>
  <td>the text shown before page buttons.</td>
  <td><?php echo CHtml::link('TbPager', array('/site/doc', 'view' => 'TbPager')); ?></td>
</tr>
<tr class="inherited" id="hiddenPageCssClass">
  <td><?php echo CHtml::link('hiddenPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'hiddenPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the hidden page buttons.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CLinkPager', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML attributes for the pager container tag.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="internalPageCssClass">
  <td><?php echo CHtml::link('internalPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'internalPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the internal page buttons.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="itemCount">
  <td><?php echo CHtml::link('itemCount', array('/site/doc', 'view' => 'CBasePager', '#' => 'itemCount-detail')); ?></td>
  <td>integer</td>
  <td>total number of items.</td>
  <td><?php echo CHtml::link('CBasePager', array('/site/doc', 'view' => 'CBasePager')); ?></td>
</tr>
<tr class="inherited" id="lastPageCssClass">
  <td><?php echo CHtml::link('lastPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'lastPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the last page button.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="lastPageLabel">
  <td><?php echo CHtml::link('lastPageLabel', array('/site/doc', 'view' => 'CLinkPager', '#' => 'lastPageLabel-detail')); ?></td>
  <td>string</td>
  <td>the text label for the last page button.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="maxButtonCount">
  <td><?php echo CHtml::link('maxButtonCount', array('/site/doc', 'view' => 'CLinkPager', '#' => 'maxButtonCount-detail')); ?></td>
  <td>integer</td>
  <td>maximum number of page buttons that can be displayed.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="nextPageCssClass">
  <td><?php echo CHtml::link('nextPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'nextPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the next page button.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="nextPageLabel">
  <td><?php echo CHtml::link('nextPageLabel', array('/site/doc', 'view' => 'CLinkPager', '#' => 'nextPageLabel-detail')); ?></td>
  <td>string</td>
  <td>the text label for the next page button.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
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
<tr class="inherited" id="prevPageLabel">
  <td><?php echo CHtml::link('prevPageLabel', array('/site/doc', 'view' => 'CLinkPager', '#' => 'prevPageLabel-detail')); ?></td>
  <td>string</td>
  <td>the text label for the previous page button.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="previousPageCssClass">
  <td><?php echo CHtml::link('previousPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'previousPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the previous page button.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="selectedPageCssClass">
  <td><?php echo CHtml::link('selectedPageCssClass', array('/site/doc', 'view' => 'CLinkPager', '#' => 'selectedPageCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for the selected page buttons.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
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
<tr class="inherited" id="pageRange">
  <td><?php echo CHtml::link('pageRange', array('/site/doc', 'view' => 'CLinkPager', '#' => 'pageRange-detail')); ?></td>
  <td>array</td>
  <td>the begin and end pages that need to be displayed.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbPager', '#' => 'init-detail')); ?></td>
  <td>### .init()</td>
  <td><?php echo CHtml::link('TbPager', array('/site/doc', 'view' => 'TbPager')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers the needed client scripts (mainly CSS file).</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
<tr class="inherited" id="registerCssFile">
  <td><?php echo CHtml::link('registerCssFile()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'registerCssFile-detail')); ?></td>
  <td>Registers the needed CSS file.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
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
<tr class="inherited" id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'run-detail')); ?></td>
  <td>Executes the widget.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
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
<tr class="inherited" id="createPageButton">
  <td><?php echo CHtml::link('createPageButton()', array('/site/doc', 'view' => 'TbPager', '#' => 'createPageButton-detail')); ?></td>
  <td>### .createPageButton()</td>
  <td><?php echo CHtml::link('TbPager', array('/site/doc', 'view' => 'TbPager')); ?></td>
</tr>
<tr id="createPageButtons">
  <td><?php echo CHtml::link('createPageButtons()', array('/site/doc', 'view' => 'YdPager', '#' => 'createPageButtons-detail')); ?></td>
  <td>### .createPageButtons()</td>
  <td>YdPager</td>
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
<tr class="inherited" id="getPageRange">
  <td><?php echo CHtml::link('getPageRange()', array('/site/doc', 'view' => 'CLinkPager', '#' => 'getPageRange-detail')); ?></td>
  <td>Returns the begin and end pages that need to be displayed.</td>
  <td><?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\widgets\YdPager.php#L24">dressing\widgets\YdPager.php#L24</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createPageButtons</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$pageCount&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPageCount</span><span style="color: #007700">())&nbsp;&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;list&nbsp;(</span><span style="color: #0000BB">$beginPage</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$endPage</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPageRange</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$currentPage&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCurrentPage</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;currentPage&nbsp;is&nbsp;calculated&nbsp;in&nbsp;getPageRange()<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;first&nbsp;page<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayFirstAndLast</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstPageLabel</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'first'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$currentPage&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;prev&nbsp;page<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">$page&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$currentPage&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$page&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prevPageLabel</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$page</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'previous'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$currentPage&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;internal&nbsp;pages<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$beginPage</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">$endPage</span><span style="color: #007700">;&nbsp;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$currentPage</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;next&nbsp;page<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">$page&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$currentPage&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;&gt;=&nbsp;</span><span style="color: #0000BB">$pageCount&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$page&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$pageCount&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nextPageLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$page</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'next'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$currentPage&nbsp;</span><span style="color: #007700">&gt;=&nbsp;(</span><span style="color: #0000BB">$pageCount&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">false<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;last&nbsp;page<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayFirstAndLast</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPageButton</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastPageLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pageCount&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'last'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$currentPage&nbsp;</span><span style="color: #007700">&gt;=&nbsp;(</span><span style="color: #0000BB">$pageCount&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">false<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .createPageButtons()
<br/><br/>
Creates the page buttons.</p>


