<?php
$this->pageTitle = $this->pageHeading = 'TbGroupGridView';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbGroupGridView';
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
  <td>class TbGroupGridView &raquo;
<?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?> &raquo;
<?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?> &raquo;
<?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGroupGridView.php">booster/widgets/TbGroupGridView.php</a></td>
</tr>
</table>

<div id="classDescription">
## TbGroupGridView widget
<br/><br/>
A Grid View that groups rows by any column(s)</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'actions')); ?>.</td>
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
<tr id="columns">
  <td><?php echo CHtml::link('columns', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'columns-detail')); ?></td>
  <td><?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?>[]</td>
  <td></td>
  <td>TbGroupGridView</td>
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
<tr class="inherited" id="dataProvider">
  <td><?php echo CHtml::link('dataProvider', array('/site/doc', 'view' => 'CBaseListView', '#' => 'dataProvider-detail')); ?></td>
  <td><?php echo CHtml::link('IDataProvider', array('/site/doc', 'view' => 'IDataProvider')); ?></td>
  <td>the data provider for the view.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="emptyTagName">
  <td><?php echo CHtml::link('emptyTagName', array('/site/doc', 'view' => 'CBaseListView', '#' => 'emptyTagName-detail')); ?></td>
  <td>string</td>
  <td>the HTML tag name for the container of the <?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'emptyText')); ?> property.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="emptyText">
  <td><?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'CBaseListView', '#' => 'emptyText-detail')); ?></td>
  <td>string</td>
  <td>the message to be displayed when <?php echo CHtml::link('dataProvider', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'dataProvider')); ?> does not have any data.</td>
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
<tr class="inherited" id="extraParams">
  <td><?php echo CHtml::link('extraParams', array('/site/doc', 'view' => 'TbGridView', '#' => 'extraParams-detail')); ?></td>
  <td>array</td>
  <td>of additional parameters to pass to values</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
</tr>
<tr id="extraRowColumns">
  <td><?php echo CHtml::link('extraRowColumns', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'extraRowColumns-detail')); ?></td>
  <td>array</td>
  <td>$extraRowColumns the group column names</td>
  <td>TbGroupGridView</td>
</tr>
<tr id="extraRowCssClass">
  <td><?php echo CHtml::link('extraRowCssClass', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'extraRowCssClass-detail')); ?></td>
  <td>string</td>
  <td>$extraRowCssClass the class to be used to be set on the extrarow cell tag.</td>
  <td>TbGroupGridView</td>
</tr>
<tr id="extraRowExpression">
  <td><?php echo CHtml::link('extraRowExpression', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'extraRowExpression-detail')); ?></td>
  <td>string</td>
  <td>$extraRowExpression</td>
  <td>TbGroupGridView</td>
</tr>
<tr id="extraRowHtmlOptions">
  <td><?php echo CHtml::link('extraRowHtmlOptions', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'extraRowHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the extrarow cell tag.</td>
  <td>TbGroupGridView</td>
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
<tr id="mergeCellCss">
  <td><?php echo CHtml::link('mergeCellCss', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'mergeCellCss-detail')); ?></td>
  <td>string</td>
  <td>$mergeCellsCss the styles to apply to merged cells</td>
  <td>TbGroupGridView</td>
</tr>
<tr id="mergeColumns">
  <td><?php echo CHtml::link('mergeColumns', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'mergeColumns-detail')); ?></td>
  <td>array</td>
  <td>$mergeColumns the columns to merge on the grid</td>
  <td>TbGroupGridView</td>
</tr>
<tr id="mergeType">
  <td><?php echo CHtml::link('mergeType', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'mergeType-detail')); ?></td>
  <td>string</td>
  <td>$mergeType the merge type.</td>
  <td>TbGroupGridView</td>
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
This is true if any of the <?php echo CHtml::link('columns', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'columns')); ?> has a true <?php echo CHtml::link('CGridColumn::hasFooter', array('/site/doc', 'view' => 'CGridColumn', '#' => 'hasFooter')); ?> value.</td>
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
<tr id="groupByColumns">
  <td><?php echo CHtml::link('groupByColumns()', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'groupByColumns-detail')); ?></td>
  <td>find and store changing of group columns</td>
  <td>TbGroupGridView</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'init-detail')); ?></td>
  <td>Widget initialization</td>
  <td>TbGroupGridView</td>
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
<tr id="renderTableBody">
  <td><?php echo CHtml::link('renderTableBody()', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'renderTableBody-detail')); ?></td>
  <td>Renders the table body.</td>
  <td>TbGroupGridView</td>
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
<tr id="renderTableRow">
  <td><?php echo CHtml::link('renderTableRow()', array('/site/doc', 'view' => 'TbGroupGridView', '#' => 'renderTableRow-detail')); ?></td>
  <td>Renders a table body row.</td>
  <td>TbGroupGridView</td>
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
<tr class="inherited" id="initColumns">
  <td><?php echo CHtml::link('initColumns()', array('/site/doc', 'view' => 'TbGridView', '#' => 'initColumns-detail')); ?></td>
  <td>### .initColumns()</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
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
<div class="detailHeader" id="columns-detail">
columns<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?>[] <b>columns</b>;</div>

<p></p>


<div class="detailHeader" id="extraRowColumns-detail">
extraRowColumns<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$extraRowColumns</b>;</div>

<p>$extraRowColumns the group column names</p>


<div class="detailHeader" id="extraRowCssClass-detail">
extraRowCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$extraRowCssClass</b>;</div>

<p>$extraRowCssClass the class to be used to be set on the extrarow cell tag.</p>


<div class="detailHeader" id="extraRowExpression-detail">
extraRowExpression<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$extraRowExpression</b>;</div>

<p>$extraRowExpression</p>


<div class="detailHeader" id="extraRowHtmlOptions-detail">
extraRowHtmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$extraRowHtmlOptions</b>;</div>

<p>the HTML options for the extrarow cell tag.</p>


<div class="detailHeader" id="mergeCellCss-detail">
mergeCellCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$mergeCellCss</b>;</div>

<p>$mergeCellsCss the styles to apply to merged cells</p>


<div class="detailHeader" id="mergeColumns-detail">
mergeColumns<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$mergeColumns</b>;</div>

<p>$mergeColumns the columns to merge on the grid</p>


<div class="detailHeader" id="mergeType-detail">
mergeType<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$mergeType</b>;</div>

<p>$mergeType the merge type. Defaults to MERGE_SIMPLE</p>


<h2>Method Details</h2>

<div class="detailHeader" id="groupByColumns-detail">
groupByColumns()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>groupByColumns</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGroupGridView.php#L114">booster/widgets/TbGroupGridView.php#L114</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">groupByColumns</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeColumns</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeColumns&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeColumns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowColumns</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowColumns&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowColumns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//store&nbsp;columns&nbsp;for&nbsp;group.&nbsp;Set&nbsp;object&nbsp;for&nbsp;existing&nbsp;columns&nbsp;in&nbsp;grid&nbsp;and&nbsp;string&nbsp;for&nbsp;attributes<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$groupColumns&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_unique</span><span style="color: #007700">(</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeColumns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowColumns</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$groupColumns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$colName</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$colName</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$groupColumns</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//values&nbsp;for&nbsp;first&nbsp;row<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lastStored&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRowValues</span><span style="color: #007700">(</span><span style="color: #0000BB">$groupColumns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$lastStored&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$colName&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lastStored</span><span style="color: #007700">[</span><span style="color: #0000BB">$colName</span><span style="color: #007700">]&nbsp;=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'count'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'index'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//iterate&nbsp;data<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//save&nbsp;row&nbsp;values&nbsp;in&nbsp;array<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$current&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRowValues</span><span style="color: #007700">(</span><span style="color: #0000BB">$groupColumns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//define&nbsp;is&nbsp;change&nbsp;occured.&nbsp;Need&nbsp;this&nbsp;extra&nbsp;foreach&nbsp;for&nbsp;correctly&nbsp;proceed&nbsp;extraRows<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$changedColumns&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$current&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$colName&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$curValue</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$curValue&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">$lastStored</span><span style="color: #007700">[</span><span style="color: #0000BB">$colName</span><span style="color: #007700">][</span><span style="color: #DD0000">'value'</span><span style="color: #007700">])&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$changedColumns</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$colName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;if&nbsp;this&nbsp;flag&nbsp;=&nbsp;true&nbsp;-&gt;&nbsp;we&nbsp;will&nbsp;write&nbsp;change&nbsp;(to&nbsp;$this-&gt;_changes)&nbsp;for&nbsp;all&nbsp;grouping&nbsp;columns.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;It's&nbsp;required&nbsp;when&nbsp;change&nbsp;of&nbsp;any&nbsp;column&nbsp;from&nbsp;extraRowColumns&nbsp;occurs<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$saveChangeForAllColumns&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">array_intersect</span><span style="color: #007700">(</span><span style="color: #0000BB">$changedColumns</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowColumns</span><span style="color: #007700">))&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;this&nbsp;changeOccurred&nbsp;related&nbsp;to&nbsp;foreach&nbsp;below.&nbsp;It&nbsp;is&nbsp;required&nbsp;only&nbsp;for&nbsp;mergeType&nbsp;==&nbsp;self::MERGE_NESTED,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;to&nbsp;write&nbsp;change&nbsp;for&nbsp;all&nbsp;nested&nbsp;columns&nbsp;when&nbsp;change&nbsp;of&nbsp;previous&nbsp;column&nbsp;occurred<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$changeOccurred&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$current&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$colName&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$curValue</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//value&nbsp;changed<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$valueChanged&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$curValue&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">$lastStored</span><span style="color: #007700">[</span><span style="color: #0000BB">$colName</span><span style="color: #007700">][</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//change&nbsp;already&nbsp;occured&nbsp;in&nbsp;this&nbsp;loop&nbsp;and&nbsp;mergeType&nbsp;set&nbsp;to&nbsp;MERGETYPE_NESTED<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$saveChange&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$valueChanged&nbsp;</span><span style="color: #007700">||&nbsp;(</span><span style="color: #0000BB">$changeOccurred&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeType&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MERGE_NESTED</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$saveChangeForAllColumns&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$saveChange</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$changeOccurred&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//store&nbsp;in&nbsp;class&nbsp;var<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prevIndex&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$lastStored</span><span style="color: #007700">[</span><span style="color: #0000BB">$colName</span><span style="color: #007700">][</span><span style="color: #DD0000">'index'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes</span><span style="color: #007700">[</span><span style="color: #0000BB">$prevIndex</span><span style="color: #007700">][</span><span style="color: #DD0000">'columns'</span><span style="color: #007700">][</span><span style="color: #0000BB">$colName</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$lastStored</span><span style="color: #007700">[</span><span style="color: #0000BB">$colName</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes</span><span style="color: #007700">[</span><span style="color: #0000BB">$prevIndex</span><span style="color: #007700">][</span><span style="color: #DD0000">'count'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes</span><span style="color: #007700">[</span><span style="color: #0000BB">$prevIndex</span><span style="color: #007700">][</span><span style="color: #DD0000">'count'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$lastStored</span><span style="color: #007700">[</span><span style="color: #0000BB">$colName</span><span style="color: #007700">][</span><span style="color: #DD0000">'count'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//update&nbsp;lastStored&nbsp;for&nbsp;particular&nbsp;column<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lastStored</span><span style="color: #007700">[</span><span style="color: #0000BB">$colName</span><span style="color: #007700">]&nbsp;=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$curValue</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'count'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'index'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lastStored</span><span style="color: #007700">[</span><span style="color: #0000BB">$colName</span><span style="color: #007700">][</span><span style="color: #DD0000">'count'</span><span style="color: #007700">]++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//storing&nbsp;for&nbsp;last&nbsp;row<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$lastStored&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$colName&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prevIndex&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">[</span><span style="color: #DD0000">'index'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes</span><span style="color: #007700">[</span><span style="color: #0000BB">$prevIndex</span><span style="color: #007700">][</span><span style="color: #DD0000">'columns'</span><span style="color: #007700">][</span><span style="color: #0000BB">$colName</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes</span><span style="color: #007700">[</span><span style="color: #0000BB">$prevIndex</span><span style="color: #007700">][</span><span style="color: #DD0000">'count'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes</span><span style="color: #007700">[</span><span style="color: #0000BB">$prevIndex</span><span style="color: #007700">][</span><span style="color: #DD0000">'count'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">[</span><span style="color: #DD0000">'count'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>find and store changing of group columns</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGroupGridView.php#L74">booster/widgets/TbGroupGridView.php#L74</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;check&nbsp;whether&nbsp;we&nbsp;have&nbsp;extraRowColumns&nbsp;set,&nbsp;forbid&nbsp;filters<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowColumns</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$column&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDataColumn&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowColumns</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterHtmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'display:none'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;setup&nbsp;extra&nbsp;row&nbsp;options<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowHtmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowCssClass</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowHtmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowHtmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Widget initialization</p>


<div class="detailHeader" id="renderTableBody-detail">
renderTableBody()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderTableBody</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGroupGridView.php#L102">booster/widgets/TbGroupGridView.php#L102</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderTableBody</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeColumns</span><span style="color: #007700">)&nbsp;||&nbsp;!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowColumns</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">groupByColumns</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">renderTableBody</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders the table body.</p>


<div class="detailHeader" id="renderTableRow-detail">
renderTableRow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderTableRow</b>(int $row)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$row</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbGroupGridView.php#L219">booster/widgets/TbGroupGridView.php#L219</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderTableRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$change&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$change&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//if&nbsp;change&nbsp;in&nbsp;extracolumns&nbsp;--&gt;&nbsp;put&nbsp;extra&nbsp;row<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columnsInExtra&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_intersect</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$change</span><span style="color: #007700">[</span><span style="color: #DD0000">'columns'</span><span style="color: #007700">]),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extraRowColumns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$columnsInExtra</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderExtraRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$change</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$columnsInExtra</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;original&nbsp;CGridView&nbsp;code<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClassExpression&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;tr&nbsp;class="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClassExpression</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'row'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClass</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClass</span><span style="color: #007700">))&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;tr&nbsp;class="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClass</span><span style="color: #007700">[</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;tr&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changes</span><span style="color: #007700">)&nbsp;{&nbsp;</span><span style="color: #FF8000">//standart&nbsp;CGridview's&nbsp;render<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{&nbsp;</span><span style="color: #FF8000">//for&nbsp;grouping<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isGroupColumn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">property_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeColumns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$isGroupColumn</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isChangedColumn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$change&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$change</span><span style="color: #007700">[</span><span style="color: #DD0000">'columns'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//for&nbsp;rowspan&nbsp;show&nbsp;only&nbsp;changes&nbsp;(with&nbsp;rowspan)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">switch&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeType</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MERGE_SIMPLE</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MERGE_NESTED</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$isChangedColumn</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'rowspan'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$change</span><span style="color: #007700">[</span><span style="color: #DD0000">'columns'</span><span style="color: #007700">][</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">][</span><span style="color: #DD0000">'count'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'merge'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$style&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'style'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$style&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">';'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeCellCss</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">MERGE_FIRSTROW</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$isChangedColumn</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;td&gt;&lt;/td&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders a table body row.</p>


