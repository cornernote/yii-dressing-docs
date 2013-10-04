<?php
$this->pageTitle = $this->pageHeading = 'TbExtendedGridView';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbExtendedGridView';
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
  <td>class TbExtendedGridView &raquo;
<?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?> &raquo;
<?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?> &raquo;
<?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php">booster/widgets/TbExtendedGridView.php</a></td>
</tr>
</table>

<div id="classDescription">
## TbExtendedGridView is an extended version of TbGridView.
<br/><br/>
Features are:
 - Display an extended summary of the records shown. The extended summary can be configured to any of the
 <?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?> type of widgets.
 - Automatic chart display (using TbHighCharts widget), where user can 'switch' between views.
 - Selectable cells
 - Sortable rows</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="afterAjaxUpdate">
  <td><?php echo CHtml::link('afterAjaxUpdate', array('/site/doc', 'view' => 'CGridView', '#' => 'afterAjaxUpdate-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after a successful AJAX response is received.</td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
</tr>
<tr id="afterSelectableCells">
  <td><?php echo CHtml::link('afterSelectableCells', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'afterSelectableCells-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after a selection is done.</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="afterSortableUpdate">
  <td><?php echo CHtml::link('afterSortableUpdate', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'afterSortableUpdate-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after a successful sorting is done.</td>
  <td>TbExtendedGridView</td>
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
<tr id="bulkActionAlign">
  <td><?php echo CHtml::link('bulkActionAlign', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'bulkActionAlign-detail')); ?></td>
  <td>string</td>
  <td>the aligment of the bulk actions.</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="bulkActions">
  <td><?php echo CHtml::link('bulkActions', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'bulkActions-detail')); ?></td>
  <td>array</td>
  <td>the configuration options to display a TbBulkActions widget</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="chartOptions">
  <td><?php echo CHtml::link('chartOptions', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'chartOptions-detail')); ?></td>
  <td>array</td>
  <td>$chartOptions if configured, the extended view will display a highcharts chart.</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="columns">
  <td><?php echo CHtml::link('columns', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'columns-detail')); ?></td>
  <td><?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?>[]</td>
  <td></td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="componentsAfterAjaxUpdate">
  <td><?php echo CHtml::link('componentsAfterAjaxUpdate', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'componentsAfterAjaxUpdate-detail')); ?></td>
  <td>array</td>
  <td>$componentsAfterAjaxUpdate has scripts that will be executed after components have updated.</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="componentsReadyScripts">
  <td><?php echo CHtml::link('componentsReadyScripts', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'componentsReadyScripts-detail')); ?></td>
  <td>array</td>
  <td>$componentsReadyScripts hold scripts that will be executed on document ready.</td>
  <td>TbExtendedGridView</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="cssFile">
  <td><?php echo CHtml::link('cssFile', array('/site/doc', 'view' => 'TbGridView', '#' => 'cssFile-detail')); ?></td>
  <td>string</td>
  <td>the URL of the CSS file used by this grid view.</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
</tr>
<tr id="dataProvider">
  <td><?php echo CHtml::link('dataProvider', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'dataProvider-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?></td>
  <td>the data provider for the view.</td>
  <td>TbExtendedGridView</td>
</tr>
<tr class="inherited" id="emptyTagName">
  <td><?php echo CHtml::link('emptyTagName', array('/site/doc', 'view' => 'CBaseListView', '#' => 'emptyTagName-detail')); ?></td>
  <td>string</td>
  <td>the HTML tag name for the container of the <?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'emptyText')); ?> property.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="emptyText">
  <td><?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'CBaseListView', '#' => 'emptyText-detail')); ?></td>
  <td>string</td>
  <td>the message to be displayed when <?php echo CHtml::link('dataProvider', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'dataProvider')); ?> does not have any data.</td>
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
<tr id="extendedSummary">
  <td><?php echo CHtml::link('extendedSummary', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'extendedSummary-detail')); ?></td>
  <td>array</td>
  <td>$extendedSummary displays an extended summary version.</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="extendedSummaryCssClass">
  <td><?php echo CHtml::link('extendedSummaryCssClass', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'extendedSummaryCssClass-detail')); ?></td>
  <td>string</td>
  <td>$extendedSummaryCssClass is the class name of the layer containing the extended summary</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="extendedSummaryOptions">
  <td><?php echo CHtml::link('extendedSummaryOptions', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'extendedSummaryOptions-detail')); ?></td>
  <td>array</td>
  <td>$extendedSummaryOptions the HTML attributes of the layer containing the extended summary</td>
  <td>TbExtendedGridView</td>
</tr>
<tr class="inherited" id="extraParams">
  <td><?php echo CHtml::link('extraParams', array('/site/doc', 'view' => 'TbGridView', '#' => 'extraParams-detail')); ?></td>
  <td>array</td>
  <td>of additional parameters to pass to values</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
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
<tr id="fixedHeader">
  <td><?php echo CHtml::link('fixedHeader', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'fixedHeader-detail')); ?></td>
  <td>bool</td>
  <td>$fixedHeader if set to true will keep the header fixed  position</td>
  <td>TbExtendedGridView</td>
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
<tr id="headerOffset">
  <td><?php echo CHtml::link('headerOffset', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'headerOffset-detail')); ?></td>
  <td>integer</td>
  <td>$headerOffset, when $fixedHeader is set to true, headerOffset will position table header top position
at $headerOffset.</td>
  <td>TbExtendedGridView</td>
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
<tr class="inherited" id="pager">
  <td><?php echo CHtml::link('pager', array('/site/doc', 'view' => 'TbGridView', '#' => 'pager-detail')); ?></td>
  <td>array</td>
  <td>the configuration for the pager.</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
</tr>
<tr class="inherited" id="pagerCssClass">
  <td><?php echo CHtml::link('pagerCssClass', array('/site/doc', 'view' => 'TbGridView', '#' => 'pagerCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for the pager container.</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
</tr>
<tr class="inherited" id="responsiveTable">
  <td><?php echo CHtml::link('responsiveTable', array('/site/doc', 'view' => 'TbGridView', '#' => 'responsiveTable-detail')); ?></td>
  <td>bool</td>
  <td>whether to make the grid responsive</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
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
<tr id="selectableCells">
  <td><?php echo CHtml::link('selectableCells', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'selectableCells-detail')); ?></td>
  <td>bool</td>
  <td>whether to allow selecting of cells</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="selectableCellsFilter">
  <td><?php echo CHtml::link('selectableCellsFilter', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'selectableCellsFilter-detail')); ?></td>
  <td>string</td>
  <td>the filter to use to allow selection.</td>
  <td>TbExtendedGridView</td>
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
<tr id="sortableAction">
  <td><?php echo CHtml::link('sortableAction', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'sortableAction-detail')); ?></td>
  <td>string</td>
  <td>Name of the action to call and sort values</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="sortableAjaxSave">
  <td><?php echo CHtml::link('sortableAjaxSave', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'sortableAjaxSave-detail')); ?></td>
  <td>boolean</td>
  <td>Save sort order by ajax defaults to false</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="sortableAttribute">
  <td><?php echo CHtml::link('sortableAttribute', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'sortableAttribute-detail')); ?></td>
  <td>string</td>
  <td>Database field name for row sorting</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="sortableRows">
  <td><?php echo CHtml::link('sortableRows', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'sortableRows-detail')); ?></td>
  <td>bool</td>
  <td>$sortableRows.</td>
  <td>TbExtendedGridView</td>
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
<tr id="template">
  <td><?php echo CHtml::link('template', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'template-detail')); ?></td>
  <td>string</td>
  <td>the template to be used to control the layout of various sections in the view.</td>
  <td>TbExtendedGridView</td>
</tr>
<tr class="inherited" id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'TbGridView', '#' => 'type-detail')); ?></td>
  <td>string|array</td>
  <td>the table type.</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
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
<tr id="bulk">
  <td><?php echo CHtml::link('bulk', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'bulk-detail')); ?></td>
  <td><?php echo CHtml::link('TbBulkActions', array('/site/doc', 'view' => 'TbBulkActions')); ?></td>
  <td>component that will display the bulk actions to the grid</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="displayChart">
  <td><?php echo CHtml::link('displayChart', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'displayChart-detail')); ?></td>
  <td>boolean</td>
  <td>$displayChart a helper property that is set to true if we have to render a chart.</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="displayExtendedSummary">
  <td><?php echo CHtml::link('displayExtendedSummary', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'displayExtendedSummary-detail')); ?></td>
  <td>boolean</td>
  <td>$displayExtendedSummary a helper property that is set to true if we have to render the
extended summary</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="extendedSummaryOperations">
  <td><?php echo CHtml::link('extendedSummaryOperations', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'extendedSummaryOperations-detail')); ?></td>
  <td>array</td>
  <td>$extendedSummaryOperations hold the supported operation types</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="extendedSummaryTypes">
  <td><?php echo CHtml::link('extendedSummaryTypes', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'extendedSummaryTypes-detail')); ?></td>
  <td><?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?>[]</td>
  <td>$extendedSummaryTypes hold the current configured TbOperation that will process column values.</td>
  <td>TbExtendedGridView</td>
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
This is true if any of the <?php echo CHtml::link('columns', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'columns')); ?> has a true <?php echo CHtml::link('CGridColumn::hasFooter', array('/site/doc', 'view' => 'CGridColumn', '#' => 'hasFooter')); ?> value.</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'init-detail')); ?></td>
  <td>### .init()</td>
  <td>TbExtendedGridView</td>
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
<tr id="registerCustomClientScript">
  <td><?php echo CHtml::link('registerCustomClientScript()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'registerCustomClientScript-detail')); ?></td>
  <td>### .registerCustomClientScript()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CWidget', '#' => 'render-detail')); ?></td>
  <td>Renders a view.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="renderBulkActions">
  <td><?php echo CHtml::link('renderBulkActions()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'renderBulkActions-detail')); ?></td>
  <td>### .renderBulkActions()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="renderChart">
  <td><?php echo CHtml::link('renderChart()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'renderChart-detail')); ?></td>
  <td>### .renderChart()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="renderContent">
  <td><?php echo CHtml::link('renderContent()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'renderContent-detail')); ?></td>
  <td>### .renderContent()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr class="inherited" id="renderEmptyText">
  <td><?php echo CHtml::link('renderEmptyText()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'renderEmptyText-detail')); ?></td>
  <td>Renders the empty message when there is no data.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr id="renderExtendedSummary">
  <td><?php echo CHtml::link('renderExtendedSummary()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'renderExtendedSummary-detail')); ?></td>
  <td>### .renderExtendedSummary()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="renderExtendedSummaryContent">
  <td><?php echo CHtml::link('renderExtendedSummaryContent()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'renderExtendedSummaryContent-detail')); ?></td>
  <td>### .renderExtendedSummaryContent()</td>
  <td>TbExtendedGridView</td>
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
<tr id="renderKeys">
  <td><?php echo CHtml::link('renderKeys()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'renderKeys-detail')); ?></td>
  <td>### .renderKeys()</td>
  <td>TbExtendedGridView</td>
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
<tr id="renderTableFooter">
  <td><?php echo CHtml::link('renderTableFooter()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'renderTableFooter-detail')); ?></td>
  <td>### .renderTableFooter()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="renderTableHeader">
  <td><?php echo CHtml::link('renderTableHeader()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'renderTableHeader-detail')); ?></td>
  <td>### .renderTableHeader()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="renderTableRow">
  <td><?php echo CHtml::link('renderTableRow()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'renderTableRow-detail')); ?></td>
  <td>### .renderTableRow()</td>
  <td>TbExtendedGridView</td>
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
<tr class="inherited" id="createDataColumn">
  <td><?php echo CHtml::link('createDataColumn()', array('/site/doc', 'view' => 'TbGridView', '#' => 'createDataColumn-detail')); ?></td>
  <td>### .createDataColumn()</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
</tr>
<tr id="getAttribute">
  <td><?php echo CHtml::link('getAttribute()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'getAttribute-detail')); ?></td>
  <td>### .getAttribute()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="getColumnByName">
  <td><?php echo CHtml::link('getColumnByName()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'getColumnByName-detail')); ?></td>
  <td>### .getColumnByName()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="getPrimaryKey">
  <td><?php echo CHtml::link('getPrimaryKey()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'getPrimaryKey-detail')); ?></td>
  <td>### .getPrimaryKey()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr id="getSummaryOperationInstance">
  <td><?php echo CHtml::link('getSummaryOperationInstance()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'getSummaryOperationInstance-detail')); ?></td>
  <td>### .getSummaryOperationInstance()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr class="inherited" id="initColumns">
  <td><?php echo CHtml::link('initColumns()', array('/site/doc', 'view' => 'TbGridView', '#' => 'initColumns-detail')); ?></td>
  <td>### .initColumns()</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
</tr>
<tr id="parseColumnValue">
  <td><?php echo CHtml::link('parseColumnValue()', array('/site/doc', 'view' => 'TbExtendedGridView', '#' => 'parseColumnValue-detail')); ?></td>
  <td>### .parseColumnValue()</td>
  <td>TbExtendedGridView</td>
</tr>
<tr class="inherited" id="renderSection">
  <td><?php echo CHtml::link('renderSection()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'renderSection-detail')); ?></td>
  <td>Renders a section.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="writeResponsiveCss">
  <td><?php echo CHtml::link('writeResponsiveCss()', array('/site/doc', 'view' => 'TbGridView', '#' => 'writeResponsiveCss-detail')); ?></td>
  <td>### .writeResponsiveCss()</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="afterSelectableCells-detail">
afterSelectableCells<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$afterSelectableCells</b>;</div>

<p>a javascript function that will be invoked after a selection is done.
The function signature is <code>function(selected)</code> where 'selected' refers to the selected columns.</p>


<div class="detailHeader" id="afterSortableUpdate-detail">
afterSortableUpdate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$afterSortableUpdate</b>;</div>

<p>a javascript function that will be invoked after a successful sorting is done.
The function signature is <code>function(id, position)</code> where 'id' refers to the ID of the model id key,
'position' the new position in the list.</p>


<div class="detailHeader" id="bulk-detail">
bulk<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <?php echo CHtml::link('TbBulkActions', array('/site/doc', 'view' => 'TbBulkActions')); ?> <b>$bulk</b>;</div>

<p>component that will display the bulk actions to the grid</p>


<div class="detailHeader" id="bulkActionAlign-detail">
bulkActionAlign<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$bulkActionAlign</b>;</div>

<p>the aligment of the bulk actions. It can be 'left' or 'right'.</p>


<div class="detailHeader" id="bulkActions-detail">
bulkActions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$bulkActions</b>;</div>

<p>the configuration options to display a TbBulkActions widget</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('widget for its configuration', array('/site/doc', 'view' => 'TbBulkActions')); ?></li>
</ul>
</div>

<div class="detailHeader" id="chartOptions-detail">
chartOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$chartOptions</b>;</div>

<p>$chartOptions if configured, the extended view will display a highcharts chart.</p>


<div class="detailHeader" id="columns-detail">
columns<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?>[] <b>columns</b>;</div>

<p></p>


<div class="detailHeader" id="componentsAfterAjaxUpdate-detail">
componentsAfterAjaxUpdate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$componentsAfterAjaxUpdate</b>;</div>

<p>$componentsAfterAjaxUpdate has scripts that will be executed after components have updated.
It is used internally to render scripts required for components to work correctly.  You may use it for your own
scripts, just make sure it is of type array.</p>


<div class="detailHeader" id="componentsReadyScripts-detail">
componentsReadyScripts<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$componentsReadyScripts</b>;</div>

<p>$componentsReadyScripts hold scripts that will be executed on document ready.
It is used internally to render scripts required for components to work correctly. You may use it for your own
scripts, just make sure it is of type array.</p>


<div class="detailHeader" id="dataProvider-detail">
dataProvider<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?> <b>dataProvider</b>;</div>

<p>the data provider for the view.</p>


<div class="detailHeader" id="displayChart-detail">
displayChart<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected boolean <b>$displayChart</b>;</div>

<p>$displayChart a helper property that is set to true if we have to render a chart.</p>


<div class="detailHeader" id="displayExtendedSummary-detail">
displayExtendedSummary<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected boolean <b>$displayExtendedSummary</b>;</div>

<p>$displayExtendedSummary a helper property that is set to true if we have to render the
extended summary</p>


<div class="detailHeader" id="extendedSummary-detail">
extendedSummary<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$extendedSummary</b>;</div>

<p>$extendedSummary displays an extended summary version.
There are different types of summary types,
please, see <?php echo CHtml::link('TbSumOperation', array('/site/doc', 'view' => 'TbSumOperation')); ?>, TbSumOfTypeOperation,<?php echo CHtml::link('TbPercentOfTypeGooglePieOperation', array('/site/doc', 'view' => 'TbPercentOfTypeGooglePieOperation')); ?>
<?php echo CHtml::link('TbPercentOfTypeOperation', array('/site/doc', 'view' => 'TbPercentOfTypeOperation')); ?> and <?php echo CHtml::link('TbPercentOfTypeEasyPieOperation', array('/site/doc', 'view' => 'TbPercentOfTypeEasyPieOperation')); ?>.
<br/><br/>
The following is an example, please review the different types of TbOperation classes to find out more about
its configuration parameters.
<br/><br/>
<pre>
 'extendedSummary' =&gt; array(
     'title' =&gt; '',      // the extended summary title
     'columns' =&gt; array( // the 'columns' that will be displayed at the extended summary
         'id' =&gt; array(  // column name &quot;id&quot;
             'class' =&gt; 'TbSumOperation', // what is the type of TbOperation we are going to display
             'label' =&gt; 'Sum of Ids'     // label is name of label of the resulted value (ie Sum of Ids:)
         ),
         'results' =&gt; array(   // column name &quot;results&quot;
             'class' =&gt; 'TbPercentOfTypeGooglePieOperation', // the type of TbOperation
             'label' =&gt; 'How Many Of Each? ', // the label of the operation
             'types' =&gt; array(               // TbPercentOfTypeGooglePieOperation &quot;types&quot; attributes
                 '0' =&gt; array('label' =&gt; 'zeros'),   // a value of &quot;0&quot; will be labelled &quot;zeros&quot;
                 '1' =&gt; array('label' =&gt; 'ones'),    // a value of &quot;1&quot; will be labelled &quot;ones&quot;
                 '2' =&gt; array('label' =&gt; 'twos'))    // a value of &quot;2&quot; will be labelled &quot;twos&quot;
         )
     )
),
</pre></p>


<div class="detailHeader" id="extendedSummaryCssClass-detail">
extendedSummaryCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$extendedSummaryCssClass</b>;</div>

<p>$extendedSummaryCssClass is the class name of the layer containing the extended summary</p>


<div class="detailHeader" id="extendedSummaryOperations-detail">
extendedSummaryOperations<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$extendedSummaryOperations</b>;</div>

<p>$extendedSummaryOperations hold the supported operation types</p>


<div class="detailHeader" id="extendedSummaryOptions-detail">
extendedSummaryOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$extendedSummaryOptions</b>;</div>

<p>$extendedSummaryOptions the HTML attributes of the layer containing the extended summary</p>


<div class="detailHeader" id="extendedSummaryTypes-detail">
extendedSummaryTypes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <?php echo CHtml::link('TbOperation', array('/site/doc', 'view' => 'TbOperation')); ?>[] <b>$extendedSummaryTypes</b>;</div>

<p>$extendedSummaryTypes hold the current configured TbOperation that will process column values.</p>


<div class="detailHeader" id="fixedHeader-detail">
fixedHeader<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$fixedHeader</b>;</div>

<p>$fixedHeader if set to true will keep the header fixed  position</p>


<div class="detailHeader" id="headerOffset-detail">
headerOffset<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$headerOffset</b>;</div>

<p>$headerOffset, when $fixedHeader is set to true, headerOffset will position table header top position
at $headerOffset. If you are using bootstrap and has navigation top fixed, its height is 40px, so it is recommended
to use $headerOffset=40;</p>


<div class="detailHeader" id="selectableCells-detail">
selectableCells<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$selectableCells</b>;</div>

<p>whether to allow selecting of cells</p>


<div class="detailHeader" id="selectableCellsFilter-detail">
selectableCellsFilter<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$selectableCellsFilter</b>;</div>

<p>the filter to use to allow selection. For example, if you set the "htmlOptions" property of a column to have a
"class" of "tobeselected", you could set this property as: "td.tobeselected" in order to allow  selection to
those columns with that class only.</p>


<div class="detailHeader" id="sortableAction-detail">
sortableAction<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$sortableAction</b>;</div>

<p>Name of the action to call and sort values</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>for an easy way to use with your controller

<pre>
 'sortableAction' => 'module/controller/sortable' | 'controller/sortable'
</pre>

The widget will make use of the string to create the URL and then append $sortableAttribute</li>
	<li>$sortableAttribute</li>
</ul>
</div>

<div class="detailHeader" id="sortableAjaxSave-detail">
sortableAjaxSave<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$sortableAjaxSave</b>;</div>

<p>Save sort order by ajax defaults to false</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>for an easy way to use with your controller</li>
</ul>
</div>

<div class="detailHeader" id="sortableAttribute-detail">
sortableAttribute<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$sortableAttribute</b>;</div>

<p>Database field name for row sorting</p>


<div class="detailHeader" id="sortableRows-detail">
sortableRows<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$sortableRows</b>;</div>

<p>$sortableRows. If true the rows at the table will be sortable.</p>


<div class="detailHeader" id="template-detail">
template<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$template</b>;</div>

<p>the template to be used to control the layout of various sections in the view.
These tokens are recognized: {extendedSummary}, {summary}, {items} and {pager}. They will be replaced with the
extended summary, summary text, the items, and the pager.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getAttribute-detail">
getAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>getAttribute</b>(<?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> $data, string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute to get</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute value null if none found</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L286">booster/widgets/TbExtendedGridView.php#L286</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CActiveDataProvider&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CArrayDataProvider&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CSqlDataProvider</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">}))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .getAttribute()
<br/><br/>
Helper function to get an attribute from the data</p>


<div class="detailHeader" id="getColumnByName-detail">
getColumnByName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected CDataColumn|null <b>getColumnByName</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">CDataColumn|null</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L796">booster/widgets/TbExtendedGridView.php#L796</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getColumnByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .getColumnByName()
<br/><br/>
Helper function to get a column by its name</p>


<div class="detailHeader" id="getPrimaryKey-detail">
getPrimaryKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected null|string <b>getPrimaryKey</b>(<?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">null|string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L313">booster/widgets/TbExtendedGridView.php#L313</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CActiveDataProvider</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyAttribute&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">()&nbsp;:&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyAttribute</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CArrayDataProvider&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CSqlDataProvider</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyField</span><span style="color: #007700">}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyField</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .getPrimaryKey()
<br/><br/>
Helper function to return the primary key of the $data
IMPORTANT: composite keys on CActiveDataProviders will return the keys joined by comma</p>


<div class="detailHeader" id="getSummaryOperationInstance-detail">
getSummaryOperationInstance()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>getSummaryOperationInstance</b>(string $name, array $config)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the column</td>
</tr>
<tr>
  <td class="paramNameCol">$config</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the configuration of the column at the extendedSummary</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L762">booster/widgets/TbExtendedGridView.php#L762</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSummaryOperationInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Column&nbsp;summary&nbsp;configuration&nbsp;must&nbsp;be&nbsp;an&nbsp;array&nbsp;containing&nbsp;a&nbsp;"type"&nbsp;element.'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryOperations</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'"{operation}"&nbsp;is&nbsp;an&nbsp;unsupported&nbsp;class&nbsp;operation.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{operation}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;name&nbsp;of&nbsp;the&nbsp;column&nbsp;should&nbsp;be&nbsp;unique<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>### .getSummaryOperationInstance()
<br/><br/>
Each type of 'extended' summary</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L208">booster/widgets/TbExtendedGridView.php#L208</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/extendedsummary/i'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">template<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummary</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummary</span><span style="color: #007700">[</span><span style="color: #DD0000">'columns'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">template&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\n{extendedSummaryContent}"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayExtendedSummary&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;@</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'data'</span><span style="color: #007700">]&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayChart&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulkActions&nbsp;</span><span style="color: #007700">!==&nbsp;array()&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulkActions</span><span style="color: #007700">[</span><span style="color: #DD0000">'actionButtons'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulkActions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulkActions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbBulkActions'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulk&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulkActions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>### .init()
<br/><br/>
Widget initialization</p>


<div class="detailHeader" id="parseColumnValue-detail">
parseColumnValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>parseColumnValue</b>(<?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?> $column, integer $row)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$column</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$row</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the current row number</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L732">booster/widgets/TbExtendedGridView.php#L732</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">parseColumnValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$column&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDataColumn&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummary</span><span style="color: #007700">[</span><span style="color: #DD0000">'columns'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;lets&nbsp;get&nbsp;the&nbsp;configuration<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummary</span><span style="color: #007700">[</span><span style="color: #DD0000">'columns'</span><span style="color: #007700">][</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;the&nbsp;required&nbsp;column&nbsp;object&nbsp;in<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'column'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;build&nbsp;the&nbsp;summary&nbsp;operation&nbsp;object<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$op&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSummaryOperationInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;process&nbsp;the&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$op</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .parseColumnValue()</p>


<div class="detailHeader" id="registerCustomClientScript-detail">
registerCustomClientScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>registerCustomClientScript</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L615">booster/widgets/TbExtendedGridView.php#L615</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerCustomClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;$cs&nbsp;CClientScript&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fixedHeaderJs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fixedHeader</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery.stickytableheaders'&nbsp;</span><span style="color: #007700">.&nbsp;(!</span><span style="color: #0000BB">YII_DEBUG&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'.min'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'.js'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fixedHeaderJs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"$('#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;table.items').stickyTableHeaders({fixedOffset:</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">headerOffset</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsAfterAjaxUpdate</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$fixedHeaderJs</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortableRows</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterSortableUpdate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSortableUpdate&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSortableUpdate&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSortableUpdate</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'js:'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">0<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterSortableUpdate&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSortableUpdate</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterSortableUpdate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSortableUpdate</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selectableRows&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery.ui'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery.sortable.gridview.js'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortableAjaxSave&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortableAction&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sortableAction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortableAction</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'sortableAttribute'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortableAttribute</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sortableAction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterSortableUpdate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$afterSortableUpdate</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableCsrfValidation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrfTokenName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrfToken&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfToken</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrf&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"{'</span><span style="color: #0000BB">$csrfTokenName</span><span style="color: #DD0000">':'</span><span style="color: #0000BB">$csrfToken</span><span style="color: #DD0000">'&nbsp;}"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrf&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'{}'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsReadyScripts</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"$.fn.yiiGridView.sortable('</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">{</span><span style="color: #0000BB">$sortableAction</span><span style="color: #007700">}</span><span style="color: #DD0000">',&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$afterSortableUpdate</span><span style="color: #007700">}</span><span style="color: #DD0000">,&nbsp;</span><span style="color: #0000BB">$csrf</span><span style="color: #DD0000">);"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsAfterAjaxUpdate</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"$.fn.yiiGridView.sortable('</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">{</span><span style="color: #0000BB">$sortableAction</span><span style="color: #007700">}</span><span style="color: #DD0000">',&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$afterSortableUpdate</span><span style="color: #007700">}</span><span style="color: #DD0000">,&nbsp;</span><span style="color: #0000BB">$csrf</span><span style="color: #DD0000">);"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selectableCells</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterSelectableCells&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSelectableCells&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSelectableCells</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'js:'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSelectableCells&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSelectableCells</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'js:'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">0<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterSelectableCells&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSelectableCells</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterSelectableCells&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterSelectableCells</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery.ui'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetJs</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery.selectable.gridview.js'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterSelectableCells&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$afterSelectableCells</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsReadyScripts</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"$.fn.yiiGridView.selectable('</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">','</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selectableCellsFilter</span><span style="color: #007700">}</span><span style="color: #DD0000">',</span><span style="color: #007700">{</span><span style="color: #0000BB">$afterSelectableCells</span><span style="color: #007700">}</span><span style="color: #DD0000">);"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsAfterAjaxUpdate</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"$.fn.yiiGridView.selectable('</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">','</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selectableCellsFilter</span><span style="color: #007700">}</span><span style="color: #DD0000">',&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$afterSelectableCells</span><span style="color: #007700">}</span><span style="color: #DD0000">);"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'Ex'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grid&nbsp;=&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'");<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$fixedHeaderJs&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;($(".'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryCssClass&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",&nbsp;$grid).length)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(".'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryCssClass&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",&nbsp;$grid).html($("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'-extended-summary",&nbsp;$grid).html());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsReadyScripts</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsReadyScripts</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.ajaxPrefilter(function&nbsp;(options,&nbsp;originalOptions,&nbsp;jqXHR)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;qs&nbsp;=&nbsp;$.deparam.querystring(options.url);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(qs.hasOwnProperty("ajax")&nbsp;&amp;&amp;&nbsp;qs.ajax&nbsp;==&nbsp;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'")<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;options.realsuccess&nbsp;=&nbsp;options.success;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;options.success&nbsp;=&nbsp;function(data)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(options.realsuccess)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;options.realsuccess(data);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;$data&nbsp;=&nbsp;$("&lt;div&gt;"&nbsp;+&nbsp;data&nbsp;+&nbsp;"&lt;/div&gt;");<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;we&nbsp;need&nbsp;to&nbsp;get&nbsp;the&nbsp;grid&nbsp;again...&nbsp;as&nbsp;it&nbsp;has&nbsp;been&nbsp;updated<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;($(".'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryCssClass&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'")))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(".'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryCssClass&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'")).html($("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'-extended-summary",&nbsp;$data).html());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsAfterAjaxUpdate</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsAfterAjaxUpdate<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});'<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .registerCustomClientScript()
<br/><br/>
This script must be run at the end of content rendering not at the beginning as it is common with normal CGridViews</p>


<div class="detailHeader" id="renderBulkActions-detail">
renderBulkActions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderBulkActions</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L372">booster/widgets/TbExtendedGridView.php#L372</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderBulkActions</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;tr&gt;&lt;td&nbsp;colspan="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulk</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderButtons</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/td&gt;&lt;/tr&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .renderBulkActions()</p>


<div class="detailHeader" id="renderChart-detail">
renderChart()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderChart</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L386">booster/widgets/TbExtendedGridView.php#L386</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderChart</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayChart&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">()&nbsp;&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'data'</span><span style="color: #007700">][</span><span style="color: #DD0000">'series'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'You&nbsp;need&nbsp;to&nbsp;set&nbsp;the&nbsp;"series"&nbsp;attribute&nbsp;in&nbsp;order&nbsp;to&nbsp;render&nbsp;a&nbsp;chart'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$configSeries&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'data'</span><span style="color: #007700">][</span><span style="color: #DD0000">'series'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$configSeries</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'"chartOptions.series"&nbsp;is&nbsp;expected&nbsp;to&nbsp;be&nbsp;an&nbsp;array.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'config'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'config'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;****************************************<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;render&nbsp;switch&nbsp;buttons<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbButtonGroup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'toggle'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttons'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Grid'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'url'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'active&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'-grid-control&nbsp;grid'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Chart'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'url'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'-grid-control&nbsp;chart'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'margin-bottom:5px'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="row"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buttons</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chartId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'[-\\&nbsp;?]'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'exgvwChart'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">());&nbsp;</span><span style="color: #FF8000">//&nbsp;cleaning&nbsp;out&nbsp;most&nbsp;possible&nbsp;characters&nbsp;invalid&nbsp;as&nbsp;javascript&nbsp;variable&nbsp;identifiers.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsReadyScripts</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'$(document).on("click",".'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'-grid-control",&nbsp;function(){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;($(this).hasClass("grid")&nbsp;&amp;&amp;&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$chartId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'").is(":visible"))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$chartId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'").hide();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;table.items").show();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;($(this).hasClass("chart")&nbsp;&amp;&amp;&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;table.items").is(":visible"))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;table.items").hide();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$("#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$chartId&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'").show();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;false;<br />&nbsp;&nbsp;&nbsp;&nbsp;});'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;end&nbsp;switch&nbsp;buttons<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;****************************************<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;render&nbsp;Chart<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;chart&nbsp;options<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$seriesData&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cnt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$configSeries&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$set</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$seriesData</span><span style="color: #007700">[</span><span style="color: #0000BB">$cnt</span><span style="color: #007700">]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;isset(</span><span style="color: #0000BB">$set</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$set</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array());<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">;&nbsp;++</span><span style="color: #0000BB">$row</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getColumnByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$set</span><span style="color: #007700">[</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$seriesData</span><span style="color: #007700">[</span><span style="color: #0000BB">$cnt</span><span style="color: #007700">][</span><span style="color: #DD0000">'data'</span><span style="color: #007700">][]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'row'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">value</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$set</span><span style="color: #007700">[</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$seriesData</span><span style="color: #007700">[</span><span style="color: #0000BB">$cnt</span><span style="color: #007700">][</span><span style="color: #DD0000">'data'</span><span style="color: #007700">][]&nbsp;=&nbsp;</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;?&nbsp;(float)</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++</span><span style="color: #0000BB">$cnt</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;****************************************<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;render&nbsp;chart<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'config'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'series'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$seriesData</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]&nbsp;:&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'display:none'</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;sorry&nbsp;but&nbsp;use&nbsp;a&nbsp;class&nbsp;to&nbsp;provide&nbsp;styles,&nbsp;we&nbsp;need&nbsp;this<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;build&nbsp;unique&nbsp;ID<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;important!<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="row"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUpdate&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'chart'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'chart'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'chart'</span><span style="color: #007700">][</span><span style="color: #DD0000">'renderTo'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$chartId</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'chart'</span><span style="color: #007700">]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'renderTo'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$chartId</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$jsOptions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJSON</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'data-config'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'data-config'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;id='</span><span style="color: #007700">{</span><span style="color: #0000BB">$chartId</span><span style="color: #007700">}</span><span style="color: #DD0000">'&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">renderAttributes</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;.&nbsp;</span><span style="color: #DD0000">"&nbsp;data-config='</span><span style="color: #007700">{</span><span style="color: #0000BB">$jsOptions</span><span style="color: #007700">}</span><span style="color: #DD0000">'&gt;&lt;/div&gt;"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">componentsAfterAjaxUpdate</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"highchart</span><span style="color: #007700">{</span><span style="color: #0000BB">$chartId</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;new&nbsp;Highcharts.Chart($('#</span><span style="color: #007700">{</span><span style="color: #0000BB">$chartId</span><span style="color: #007700">}</span><span style="color: #DD0000">').data('config'));"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$configChart&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbHighCharts'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$chartId</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chartOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chart&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$configChart</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chart</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;end&nbsp;chart&nbsp;display<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;****************************************<br /></span><span style="color: #007700">}</span>
</span>
</code></div>
</div>
<p>### .renderChart()
<br/><br/>
Renders chart</p>


<div class="detailHeader" id="renderContent-detail">
renderContent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderContent</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L238">booster/widgets/TbExtendedGridView.php#L238</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderContent</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">renderContent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCustomClientScript</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>### .renderContent()
<br/><br/>
Renders grid content</p>


<div class="detailHeader" id="renderExtendedSummary-detail">
renderExtendedSummary()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderExtendedSummary</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L574">booster/widgets/TbExtendedGridView.php#L574</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderExtendedSummary</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">renderAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryOptions</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&gt;&lt;/div&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .renderExtendedSummary()
<br/><br/>
Renders summary</p>


<div class="detailHeader" id="renderExtendedSummaryContent-detail">
renderExtendedSummaryContent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderExtendedSummaryContent</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L590">booster/widgets/TbExtendedGridView.php#L590</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderExtendedSummaryContent</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">())&nbsp;&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryTypes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;id="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'-extended-summary"&nbsp;style="display:none"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummary</span><span style="color: #007700">[</span><span style="color: #DD0000">'title'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;h3&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummary</span><span style="color: #007700">[</span><span style="color: #DD0000">'title'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h3&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummaryTypes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$summaryType</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;$summaryType&nbsp;TbOperation&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$summaryType</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;br/&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>### .renderExtendedSummaryContent()
<br/><br/>
Renders summary content. Will be appended to</p>


<div class="detailHeader" id="renderKeys-detail">
renderKeys()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderKeys</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L249">booster/widgets/TbExtendedGridView.php#L249</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderKeys</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortableRows&nbsp;</span><span style="color: #007700">||&nbsp;(isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;(string)</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortableAttribute</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">renderKeys</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'keys'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'display:none'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'span'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'data-order'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortableAttribute</span><span style="color: #007700">)),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$d</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/div&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>### .renderKeys()
<br/><br/>
Renders the key values of the data in a hidden tag.</p>


<div class="detailHeader" id="renderTableFooter-detail">
renderTableFooter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderTableFooter</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L343">booster/widgets/TbExtendedGridView.php#L343</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderTableFooter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hasFilter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filter&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterPosition&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FILTER_POS_FOOTER</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hasFooter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHasFooter</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulk&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$hasFilter&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$hasFooter</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;tfoot&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hasFooter</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;tr&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;$column&nbsp;CDataColumn&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFooterCell</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hasFilter</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFilter</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bulk&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderBulkActions</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tfoot&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>### .renderTableFooter()
<br/><br/>
Renders the table footer.</p>


<div class="detailHeader" id="renderTableHeader-detail">
renderTableHeader()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderTableHeader</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L332">booster/widgets/TbExtendedGridView.php#L332</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderTableHeader</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderChart</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">renderTableHeader</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>### .renderTableHeader()
<br/><br/>
Renders grid header</p>


<div class="detailHeader" id="renderTableRow-detail">
renderTableRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderTableRow</b>(integer $row)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$row</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the row number (zero-based).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbExtendedGridView.php#L529">booster/widgets/TbExtendedGridView.php#L529</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderTableRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowHtmlOptionsExpression&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowHtmlOptionsExpression</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'row'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClassExpression&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClassExpression</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'row'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClass</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClass</span><span style="color: #007700">))&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClass</span><span style="color: #007700">[</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$class</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'tr'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayExtendedSummary&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extendedSummary</span><span style="color: #007700">[</span><span style="color: #DD0000">'columns'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parseColumnValue</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$row<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'tr'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .renderTableRow()
<br/><br/>
Renders a table body row.</p>


