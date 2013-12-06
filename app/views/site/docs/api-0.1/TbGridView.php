<?php
$this->pageTitle = $this->pageHeading = 'TbGridView';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbGridView';
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
  <td><?php echo CHtml::link('booster.widgets.grids', array('/site/doc', '#' => 'booster.widgets.grids')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbGridView &raquo;
<?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?> &raquo;
<?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbExtendedGridView', array('/site/doc', 'view' => 'TbExtendedGridView')); ?>, <?php echo CHtml::link('TbGroupGridView', array('/site/doc', 'view' => 'TbGroupGridView')); ?>, <?php echo CHtml::link('TbJsonGridView', array('/site/doc', 'view' => 'TbJsonGridView')); ?>, <?php echo CHtml::link('YdGridView', array('/site/doc', 'view' => 'YdGridView')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGridView.php">booster/widgets/TbGridView.php</a></td>
</tr>
</table>

<div id="classDescription">
## Bootstrap Zii grid view.</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbGridView', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="afterAjaxUpdate">
  <td><?php echo CHtml::link('afterAjaxUpdate', array('/site/doc', 'view' => 'CGridView', '#' => 'afterAjaxUpdate-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after a successful AJAX response is received.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="ajaxType">
  <td><?php echo CHtml::link('ajaxType', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxType-detail')); ?></td>
  <td>string</td>
  <td>the type ('GET' or 'POST') of the AJAX requests.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="ajaxUpdate">
  <td><?php echo CHtml::link('ajaxUpdate', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxUpdate-detail')); ?></td>
  <td>mixed</td>
  <td>the ID of the container whose content may be updated with an AJAX response.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="ajaxUpdateError">
  <td><?php echo CHtml::link('ajaxUpdateError', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxUpdateError-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked if an AJAX update error occurs.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="ajaxUrl">
  <td><?php echo CHtml::link('ajaxUrl', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxUrl-detail')); ?></td>
  <td>mixed</td>
  <td>the URL for the AJAX requests should be sent to.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="ajaxVar">
  <td><?php echo CHtml::link('ajaxVar', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxVar-detail')); ?></td>
  <td>string</td>
  <td>the name of the GET variable that indicates the request is an AJAX request triggered
by this widget.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="baseScriptUrl">
  <td><?php echo CHtml::link('baseScriptUrl', array('/site/doc', 'view' => 'CGridView', '#' => 'baseScriptUrl-detail')); ?></td>
  <td>string</td>
  <td>the base script URL for all grid view resources (eg javascript, CSS file, images).</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="beforeAjaxUpdate">
  <td><?php echo CHtml::link('beforeAjaxUpdate', array('/site/doc', 'view' => 'CGridView', '#' => 'beforeAjaxUpdate-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked before an AJAX update occurs.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="blankDisplay">
  <td><?php echo CHtml::link('blankDisplay', array('/site/doc', 'view' => 'CGridView', '#' => 'blankDisplay-detail')); ?></td>
  <td>string</td>
  <td>the text to be displayed in an empty grid cell.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="columns">
  <td><?php echo CHtml::link('columns', array('/site/doc', 'view' => 'CGridView', '#' => 'columns-detail')); ?></td>
  <td>array</td>
  <td>grid column configuration.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="cssFile">
  <td><?php echo CHtml::link('cssFile', array('/site/doc', 'view' => 'TbGridView', '#' => 'cssFile-detail')); ?></td>
  <td>string</td>
  <td>the URL of the CSS file used by this grid view.</td>
  <td>TbGridView</td>
</tr>
<tr id="dataProvider">
  <td><?php echo CHtml::link('dataProvider', array('/site/doc', 'view' => 'TbGridView', '#' => 'dataProvider-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
  <td>the data provider for the view.</td>
  <td>TbGridView</td>
</tr>
<tr class="inherited" id="emptyTagName">
  <td><?php echo CHtml::link('emptyTagName', array('/site/doc', 'view' => 'CBaseListView', '#' => 'emptyTagName-detail')); ?></td>
  <td>string</td>
  <td>the HTML tag name for the container of the <?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'TbGridView', '#' => 'emptyText')); ?> property.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="emptyText">
  <td><?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'CBaseListView', '#' => 'emptyText-detail')); ?></td>
  <td>string</td>
  <td>the message to be displayed when <?php echo CHtml::link('dataProvider', array('/site/doc', 'view' => 'TbGridView', '#' => 'dataProvider')); ?> does not have any data.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="enableHistory">
  <td><?php echo CHtml::link('enableHistory', array('/site/doc', 'view' => 'CGridView', '#' => 'enableHistory-detail')); ?></td>
  <td>boolean</td>
  <td>whether to leverage the {@link https://developer.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="enablePagination">
  <td><?php echo CHtml::link('enablePagination', array('/site/doc', 'view' => 'CBaseListView', '#' => 'enablePagination-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable pagination.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="enableSorting">
  <td><?php echo CHtml::link('enableSorting', array('/site/doc', 'view' => 'CBaseListView', '#' => 'enableSorting-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable sorting.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr id="extraParams">
  <td><?php echo CHtml::link('extraParams', array('/site/doc', 'view' => 'TbGridView', '#' => 'extraParams-detail')); ?></td>
  <td>array</td>
  <td>of additional parameters to pass to values</td>
  <td>TbGridView</td>
</tr>
<tr class="inherited" id="filter">
  <td><?php echo CHtml::link('filter', array('/site/doc', 'view' => 'CGridView', '#' => 'filter-detail')); ?></td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td>the model instance that keeps the user-entered filter data.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="filterCssClass">
  <td><?php echo CHtml::link('filterCssClass', array('/site/doc', 'view' => 'CGridView', '#' => 'filterCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for the table row element containing all filter input fields.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="filterPosition">
  <td><?php echo CHtml::link('filterPosition', array('/site/doc', 'view' => 'CGridView', '#' => 'filterPosition-detail')); ?></td>
  <td>string</td>
  <td>whether the filters should be displayed in the grid view.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="filterSelector">
  <td><?php echo CHtml::link('filterSelector', array('/site/doc', 'view' => 'CGridView', '#' => 'filterSelector-detail')); ?></td>
  <td>string</td>
  <td>the jQuery selector of filter input fields.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="formatter">
  <td><?php echo CHtml::link('formatter', array('/site/doc', 'view' => 'CGridView', '#' => 'formatter-detail')); ?></td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
  <td>the formatter instance.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="hasFooter">
  <td><?php echo CHtml::link('hasFooter', array('/site/doc', 'view' => 'CGridView', '#' => 'hasFooter-detail')); ?></td>
  <td>boolean</td>
  <td>whether the table should render a footer.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="hideHeader">
  <td><?php echo CHtml::link('hideHeader', array('/site/doc', 'view' => 'CGridView', '#' => 'hideHeader-detail')); ?></td>
  <td>boolean</td>
  <td>whether to hide the header cells of the grid.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CBaseListView', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the view container tag.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="itemsCssClass">
  <td><?php echo CHtml::link('itemsCssClass', array('/site/doc', 'view' => 'CBaseListView', '#' => 'itemsCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for the container of all data item display.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="loadingCssClass">
  <td><?php echo CHtml::link('loadingCssClass', array('/site/doc', 'view' => 'CGridView', '#' => 'loadingCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name that will be assigned to the widget container element
when the widget is updating its content via AJAX.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="nullDisplay">
  <td><?php echo CHtml::link('nullDisplay', array('/site/doc', 'view' => 'CGridView', '#' => 'nullDisplay-detail')); ?></td>
  <td>string</td>
  <td>the text to be displayed in a data cell when a data value is null.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="pager">
  <td><?php echo CHtml::link('pager', array('/site/doc', 'view' => 'TbGridView', '#' => 'pager-detail')); ?></td>
  <td>array</td>
  <td>the configuration for the pager.</td>
  <td>TbGridView</td>
</tr>
<tr id="pagerCssClass">
  <td><?php echo CHtml::link('pagerCssClass', array('/site/doc', 'view' => 'TbGridView', '#' => 'pagerCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for the pager container.</td>
  <td>TbGridView</td>
</tr>
<tr id="responsiveTable">
  <td><?php echo CHtml::link('responsiveTable', array('/site/doc', 'view' => 'TbGridView', '#' => 'responsiveTable-detail')); ?></td>
  <td>bool</td>
  <td>whether to make the grid responsive</td>
  <td>TbGridView</td>
</tr>
<tr class="inherited" id="rowCssClass">
  <td><?php echo CHtml::link('rowCssClass', array('/site/doc', 'view' => 'CGridView', '#' => 'rowCssClass-detail')); ?></td>
  <td>array</td>
  <td>the CSS class names for the table body rows.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="rowCssClassExpression">
  <td><?php echo CHtml::link('rowCssClassExpression', array('/site/doc', 'view' => 'CGridView', '#' => 'rowCssClassExpression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every table body row and whose result
is used as the CSS class name for the row.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="rowHtmlOptionsExpression">
  <td><?php echo CHtml::link('rowHtmlOptionsExpression', array('/site/doc', 'view' => 'CGridView', '#' => 'rowHtmlOptionsExpression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every table body row and whose result
is used as additional HTML attributes for the row.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="selectableRows">
  <td><?php echo CHtml::link('selectableRows', array('/site/doc', 'view' => 'CGridView', '#' => 'selectableRows-detail')); ?></td>
  <td>integer</td>
  <td>the number of table body rows that can be selected.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="selectionChanged">
  <td><?php echo CHtml::link('selectionChanged', array('/site/doc', 'view' => 'CGridView', '#' => 'selectionChanged-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after the row selection is changed.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="showTableOnEmpty">
  <td><?php echo CHtml::link('showTableOnEmpty', array('/site/doc', 'view' => 'CGridView', '#' => 'showTableOnEmpty-detail')); ?></td>
  <td>boolean</td>
  <td>whether to display the table even when there is no data.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="summaryCssClass">
  <td><?php echo CHtml::link('summaryCssClass', array('/site/doc', 'view' => 'CBaseListView', '#' => 'summaryCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for the summary text container.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="summaryText">
  <td><?php echo CHtml::link('summaryText', array('/site/doc', 'view' => 'CBaseListView', '#' => 'summaryText-detail')); ?></td>
  <td>string</td>
  <td>the summary text template for the view.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="tagName">
  <td><?php echo CHtml::link('tagName', array('/site/doc', 'view' => 'CBaseListView', '#' => 'tagName-detail')); ?></td>
  <td>string</td>
  <td>the tag name for the view container.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="template">
  <td><?php echo CHtml::link('template', array('/site/doc', 'view' => 'CBaseListView', '#' => 'template-detail')); ?></td>
  <td>string</td>
  <td>the template to be used to control the layout of various sections in the view.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'TbGridView', '#' => 'type-detail')); ?></td>
  <td>string|array</td>
  <td>the table type.</td>
  <td>TbGridView</td>
</tr>
<tr class="inherited" id="updateSelector">
  <td><?php echo CHtml::link('updateSelector', array('/site/doc', 'view' => 'CGridView', '#' => 'updateSelector-detail')); ?></td>
  <td>string</td>
  <td>the jQuery selector of the HTML elements that may trigger AJAX updates when they are clicked.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="viewPath">
  <td><?php echo CHtml::link('viewPath', array('/site/doc', 'view' => 'CWidget', '#' => 'viewPath-detail')); ?></td>
  <td>string</td>
  <td>Returns the directory containing the view files for this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getFormatter">
  <td><?php echo CHtml::link('getFormatter()', array('/site/doc', 'view' => 'CGridView', '#' => 'getFormatter-detail')); ?></td>
  <td>Returns the formatter instance. Defaults to the 'format' application component.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="getHasFooter">
  <td><?php echo CHtml::link('getHasFooter()', array('/site/doc', 'view' => 'CGridView', '#' => 'getHasFooter-detail')); ?></td>
  <td>Returns whether the table should render a footer.
This is true if any of the <?php echo CHtml::link('columns', array('/site/doc', 'view' => 'TbGridView', '#' => 'columns')); ?> has a true <?php echo CHtml::link('CGridColumn::hasFooter', array('/site/doc', 'view' => 'CGridColumn', '#' => 'hasFooter')); ?> value.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CWidget', '#' => 'getId-detail')); ?></td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="getOwner">
  <td><?php echo CHtml::link('getOwner()', array('/site/doc', 'view' => 'CWidget', '#' => 'getOwner-detail')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbGridView', '#' => 'init-detail')); ?></td>
  <td>### .init()</td>
  <td>TbGridView</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'CGridView', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers necessary client scripts.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CWidget', '#' => 'render-detail')); ?></td>
  <td>Renders a view.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="renderContent">
  <td><?php echo CHtml::link('renderContent()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'renderContent-detail')); ?></td>
  <td>Renders the main content of the view.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="renderEmptyText">
  <td><?php echo CHtml::link('renderEmptyText()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'renderEmptyText-detail')); ?></td>
  <td>Renders the empty message when there is no data.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="renderFilter">
  <td><?php echo CHtml::link('renderFilter()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderFilter-detail')); ?></td>
  <td>Renders the filter.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="renderInternal">
  <td><?php echo CHtml::link('renderInternal()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderInternal-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="renderItems">
  <td><?php echo CHtml::link('renderItems()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderItems-detail')); ?></td>
  <td>Renders the data items for the grid view.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="renderKeys">
  <td><?php echo CHtml::link('renderKeys()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'renderKeys-detail')); ?></td>
  <td>Renders the key values of the data in a hidden tag.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="renderPager">
  <td><?php echo CHtml::link('renderPager()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'renderPager-detail')); ?></td>
  <td>Renders the pager.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="renderSummary">
  <td><?php echo CHtml::link('renderSummary()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'renderSummary-detail')); ?></td>
  <td>Renders the summary text.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="renderTableBody">
  <td><?php echo CHtml::link('renderTableBody()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderTableBody-detail')); ?></td>
  <td>Renders the table body.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="renderTableFooter">
  <td><?php echo CHtml::link('renderTableFooter()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderTableFooter-detail')); ?></td>
  <td>Renders the table footer.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="renderTableHeader">
  <td><?php echo CHtml::link('renderTableHeader()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderTableHeader-detail')); ?></td>
  <td>Renders the table header.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="renderTableRow">
  <td><?php echo CHtml::link('renderTableRow()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderTableRow-detail')); ?></td>
  <td>Renders a table body row.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'run-detail')); ?></td>
  <td>Renders the view.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="setFormatter">
  <td><?php echo CHtml::link('setFormatter()', array('/site/doc', 'view' => 'CGridView', '#' => 'setFormatter-detail')); ?></td>
  <td>Sets the formatter instance</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr class="inherited" id="setId">
  <td><?php echo CHtml::link('setId()', array('/site/doc', 'view' => 'CWidget', '#' => 'setId-detail')); ?></td>
  <td>Sets the ID of the widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
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
<tr id="createDataColumn">
  <td><?php echo CHtml::link('createDataColumn()', array('/site/doc', 'view' => 'TbGridView', '#' => 'createDataColumn-detail')); ?></td>
  <td>### .createDataColumn()</td>
  <td>TbGridView</td>
</tr>
<tr id="initColumns">
  <td><?php echo CHtml::link('initColumns()', array('/site/doc', 'view' => 'TbGridView', '#' => 'initColumns-detail')); ?></td>
  <td>### .initColumns()</td>
  <td>TbGridView</td>
</tr>
<tr class="inherited" id="renderSection">
  <td><?php echo CHtml::link('renderSection()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'renderSection-detail')); ?></td>
  <td>Renders a section.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr id="writeResponsiveCss">
  <td><?php echo CHtml::link('writeResponsiveCss()', array('/site/doc', 'view' => 'TbGridView', '#' => 'writeResponsiveCss-detail')); ?></td>
  <td>### .writeResponsiveCss()</td>
  <td>TbGridView</td>
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
public string <b>$cssFile</b>;</div>

<p>the URL of the CSS file used by this grid view.
Defaults to false, meaning that no CSS will be included.</p>


<div class="detailHeader" id="dataProvider-detail">
dataProvider<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?> <b>dataProvider</b>;</div>

<p>the data provider for the view.</p>


<div class="detailHeader" id="extraParams-detail">
extraParams<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$extraParams</b>;</div>

<p>of additional parameters to pass to values</p>


<div class="detailHeader" id="pager-detail">
pager<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$pager</b>;</div>

<p>the configuration for the pager.
Defaults to <code>array('class'=>'ext.bootstrap.widgets.TbPager')</code>.</p>


<div class="detailHeader" id="pagerCssClass-detail">
pagerCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$pagerCssClass</b>;</div>

<p>the CSS class name for the pager container. Defaults to 'pagination'.</p>


<div class="detailHeader" id="responsiveTable-detail">
responsiveTable<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$responsiveTable</b>;</div>

<p>whether to make the grid responsive</p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string|array <b>$type</b>;</div>

<p>the table type.
Valid values are 'striped', 'bordered', 'condensed' and/or 'hover'.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="createDataColumn-detail">
createDataColumn()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected \TbDataColumn|\CDataColumn <b>createDataColumn</b>(mixed $text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the column specification string</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">\TbDataColumn|\CDataColumn</td>
  <td class="paramDescCol">the column instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGridView.php#L141">booster/widgets/TbGridView.php#L141</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createDataColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^([\w\.]+)(:(\w*))?(:(.*))?$/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'The&nbsp;column&nbsp;must&nbsp;be&nbsp;specified&nbsp;in&nbsp;the&nbsp;format&nbsp;of&nbsp;"Name:Type:Label",&nbsp;where&nbsp;"Type"&nbsp;and&nbsp;"Label"&nbsp;are&nbsp;optional.'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">TbDataColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]&nbsp;!==&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">header&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .createDataColumn()
<br/><br/>
Creates a column based on a shortcut column specification string.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGridView.php#L66">booster/widgets/TbGridView.php#L66</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'table'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$validTypes&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_STRIPED</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_BORDERED</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_CONDENSED</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_HOVER</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$validTypes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'table-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$classes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemsCssClass</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemsCssClass&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemsCssClass&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$popover&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">popoverSelector</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tooltip&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tooltipSelector</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterAjaxUpdate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"js:function()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jQuery('.popover').remove();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jQuery('</span><span style="color: #007700">{</span><span style="color: #0000BB">$popover</span><span style="color: #007700">}</span><span style="color: #DD0000">').popover();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jQuery('.tooltip').remove();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jQuery('</span><span style="color: #007700">{</span><span style="color: #0000BB">$tooltip</span><span style="color: #007700">}</span><span style="color: #DD0000">').tooltip();<br />&nbsp;&nbsp;&nbsp;&nbsp;}"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAjaxUpdate</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAjaxUpdate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$afterAjaxUpdate</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>### .init()
<br/><br/>
Initializes the widget.</p>


<div class="detailHeader" id="initColumns-detail">
initColumns()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>initColumns</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGridView.php#L116">booster/widgets/TbGridView.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initColumns</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbDataColumn'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">initColumns</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">responsiveTable</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeResponsiveCss</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>### .initColumns()
<br/><br/>
Creates column objects and initializes them.</p>


<div class="detailHeader" id="writeResponsiveCss-detail">
writeResponsiveCss()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>writeResponsiveCss</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGridView.php#L169">booster/widgets/TbGridView.php#L169</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">writeResponsiveCss</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cnt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$labels&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;TbDataColumn&nbsp;$column&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderHeaderCell</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strip_tags</span><span style="color: #007700">(</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">());<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$labels&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"#</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #DD0000">&nbsp;td:nth-of-type(</span><span style="color: #0000BB">$cnt</span><span style="color: #DD0000">):before&nbsp;{&nbsp;content:&nbsp;'</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">';&nbsp;}\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cnt</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$css&nbsp;</span><span style="color: #007700">=&nbsp;&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">@media<br />only&nbsp;screen&nbsp;and&nbsp;(max-width:&nbsp;760px),<br />(min-device-width:&nbsp;768px)&nbsp;and&nbsp;(max-device-width:&nbsp;1024px)&nbsp;&nbsp;{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;/*&nbsp;Force&nbsp;table&nbsp;to&nbsp;not&nbsp;be&nbsp;like&nbsp;tables&nbsp;anymore&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;table,#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;thead,#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;tbody,#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;th,#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;td,#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;tr&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display:&nbsp;block;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;/*&nbsp;Hide&nbsp;table&nbsp;headers&nbsp;(but&nbsp;not&nbsp;display:&nbsp;none;,&nbsp;for&nbsp;accessibility)&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;thead&nbsp;tr&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position:&nbsp;absolute;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top:&nbsp;-9999px;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left:&nbsp;-9999px;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;tr&nbsp;{&nbsp;border:&nbsp;1px&nbsp;solid&nbsp;#ccc;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;td&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*&nbsp;Behave&nbsp;&nbsp;like&nbsp;a&nbsp;"row"&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border:&nbsp;none;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-bottom:&nbsp;1px&nbsp;solid&nbsp;#eee;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position:&nbsp;relative;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding-left:&nbsp;50%;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;td:before&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*&nbsp;Now&nbsp;like&nbsp;a&nbsp;table&nbsp;header&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position:&nbsp;absolute;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*&nbsp;Top/left&nbsp;values&nbsp;mimic&nbsp;padding&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top:&nbsp;6px;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left:&nbsp;6px;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width:&nbsp;45%;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding-right:&nbsp;10px;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;white-space:&nbsp;nowrap;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;.grid-view&nbsp;.button-column&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align:&nbsp;left;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width:auto;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;/*<br />&nbsp;&nbsp;&nbsp;&nbsp;Label&nbsp;the&nbsp;data<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$labels</span><span style="color: #007700">}</span><span style="color: #DD0000"><br />}<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCss</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$css</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .writeResponsiveCss()
<br/><br/>
Writes responsiveCSS</p>


