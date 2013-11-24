<?php
$this->pageTitle = $this->pageHeading = 'YdGridView';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdGridView';
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
  <td>class YdGridView &raquo;
<?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?> &raquo;
<?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?> &raquo;
<?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php">dressing/widgets/YdGridView.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdGridView</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'YdGridView', '#' => 'actions')); ?>.</td>
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
<tr id="defaultPageSize">
  <td><?php echo CHtml::link('defaultPageSize', array('/site/doc', 'view' => 'YdGridView', '#' => 'defaultPageSize-detail')); ?></td>
  <td>int</td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr class="inherited" id="emptyTagName">
  <td><?php echo CHtml::link('emptyTagName', array('/site/doc', 'view' => 'CBaseListView', '#' => 'emptyTagName-detail')); ?></td>
  <td>string</td>
  <td>the HTML tag name for the container of the <?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'YdGridView', '#' => 'emptyText')); ?> property.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="emptyText">
  <td><?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'CBaseListView', '#' => 'emptyText-detail')); ?></td>
  <td>string</td>
  <td>the message to be displayed when <?php echo CHtml::link('dataProvider', array('/site/doc', 'view' => 'YdGridView', '#' => 'dataProvider')); ?> does not have any data.</td>
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
<tr id="gridActions">
  <td><?php echo CHtml::link('gridActions', array('/site/doc', 'view' => 'YdGridView', '#' => 'gridActions-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr id="gridButtons">
  <td><?php echo CHtml::link('gridButtons', array('/site/doc', 'view' => 'YdGridView', '#' => 'gridButtons-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdGridView</td>
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
<tr id="multiActions">
  <td><?php echo CHtml::link('multiActions', array('/site/doc', 'view' => 'YdGridView', '#' => 'multiActions-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdGridView</td>
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
<tr id="pageSizeOptions">
  <td><?php echo CHtml::link('pageSizeOptions', array('/site/doc', 'view' => 'YdGridView', '#' => 'pageSizeOptions-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr id="pager">
  <td><?php echo CHtml::link('pager', array('/site/doc', 'view' => 'YdGridView', '#' => 'pager-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr class="inherited" id="pagerCssClass">
  <td><?php echo CHtml::link('pagerCssClass', array('/site/doc', 'view' => 'TbGridView', '#' => 'pagerCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for the pager container.</td>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
</tr>
<tr id="pagination">
  <td><?php echo CHtml::link('pagination', array('/site/doc', 'view' => 'YdGridView', '#' => 'pagination-detail')); ?></td>
  <td><?php echo CHtml::link('CPagination', array('/site/doc', 'view' => 'CPagination')); ?></td>
  <td></td>
  <td>YdGridView</td>
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
<tr id="selectableRows">
  <td><?php echo CHtml::link('selectableRows', array('/site/doc', 'view' => 'YdGridView', '#' => 'selectableRows-detail')); ?></td>
  <td>int</td>
  <td></td>
  <td>YdGridView</td>
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
<tr id="template">
  <td><?php echo CHtml::link('template', array('/site/doc', 'view' => 'YdGridView', '#' => 'template-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr id="templateLong">
  <td><?php echo CHtml::link('templateLong', array('/site/doc', 'view' => 'YdGridView', '#' => 'templateLong-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'YdGridView', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdGridView</td>
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
This is true if any of the <?php echo CHtml::link('columns', array('/site/doc', 'view' => 'YdGridView', '#' => 'columns')); ?> has a true <?php echo CHtml::link('CGridColumn::hasFooter', array('/site/doc', 'view' => 'CGridColumn', '#' => 'hasFooter')); ?> value.</td>
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
<tr id="getPagination">
  <td><?php echo CHtml::link('getPagination()', array('/site/doc', 'view' => 'YdGridView', '#' => 'getPagination-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdGridView', '#' => 'init-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'YdGridView', '#' => 'registerClientScript-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CWidget', '#' => 'render-detail')); ?></td>
  <td>Renders a view.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="renderClear">
  <td><?php echo CHtml::link('renderClear()', array('/site/doc', 'view' => 'YdGridView', '#' => 'renderClear-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
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
<tr id="renderGridActions">
  <td><?php echo CHtml::link('renderGridActions()', array('/site/doc', 'view' => 'YdGridView', '#' => 'renderGridActions-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr id="renderGridButtons">
  <td><?php echo CHtml::link('renderGridButtons()', array('/site/doc', 'view' => 'YdGridView', '#' => 'renderGridButtons-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
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
<tr id="renderMultiActions">
  <td><?php echo CHtml::link('renderMultiActions()', array('/site/doc', 'view' => 'YdGridView', '#' => 'renderMultiActions-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr id="renderPageSelect">
  <td><?php echo CHtml::link('renderPageSelect()', array('/site/doc', 'view' => 'YdGridView', '#' => 'renderPageSelect-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr id="renderPager">
  <td><?php echo CHtml::link('renderPager()', array('/site/doc', 'view' => 'YdGridView', '#' => 'renderPager-detail')); ?></td>
  <td>Renders the pager.</td>
  <td>YdGridView</td>
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
<tr id="renderToggleFilters">
  <td><?php echo CHtml::link('renderToggleFilters()', array('/site/doc', 'view' => 'YdGridView', '#' => 'renderToggleFilters-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'YdGridView', '#' => 'run-detail')); ?></td>
  <td></td>
  <td>YdGridView</td>
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
<div class="detailHeader" id="defaultPageSize-detail">
defaultPageSize<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public int <b>$defaultPageSize</b>;</div>

<p></p>


<div class="detailHeader" id="gridActions-detail">
gridActions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$gridActions</b>;</div>

<p></p>


<div class="detailHeader" id="gridButtons-detail">
gridButtons<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$gridButtons</b>;</div>

<p></p>


<div class="detailHeader" id="multiActions-detail">
multiActions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$multiActions</b>;</div>

<p></p>


<div class="detailHeader" id="pageSizeOptions-detail">
pageSizeOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$pageSizeOptions</b>;</div>

<p></p>


<div class="detailHeader" id="pager-detail">
pager<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$pager</b>;</div>

<p></p>


<div class="detailHeader" id="pagination-detail">
pagination<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CPagination', array('/site/doc', 'view' => 'CPagination')); ?> <?php echo CHtml::link('<b>getPagination</b>', array('/site/doc', 'view' => 'YdGridView', '#' => 'getPagination')); ?>()</div>

<p></p>


<div class="detailHeader" id="selectableRows-detail">
selectableRows<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public int <b>$selectableRows</b>;</div>

<p></p>


<div class="detailHeader" id="template-detail">
template<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$template</b>;</div>

<p></p>


<div class="detailHeader" id="templateLong-detail">
templateLong<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$templateLong</b>;</div>

<p></p>


<div class="detailHeader" id="type-detail">
type<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$type</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="getPagination-detail">
getPagination()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CPagination', array('/site/doc', 'view' => 'CPagination')); ?> <b>getPagination</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CPagination', array('/site/doc', 'view' => 'CPagination')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L106">dressing/widgets/YdGridView.php#L106</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pagination&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">()&nbsp;:&nbsp;new&nbsp;</span><span style="color: #0000BB">CPagination</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pageSize&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUserPageSize</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$pagination</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L71">dressing/widgets/YdGridView.php#L71</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;pager&nbsp;labels<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'firstPageLabel'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'firstPageLabel'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&lt;i&nbsp;class="icon-fast-backward"&gt;&lt;/i&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'lastPageLabel'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'lastPageLabel'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&lt;i&nbsp;class="icon-fast-forward"&gt;&lt;/i&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'nextPageLabel'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'nextPageLabel'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&lt;i&nbsp;class="icon-forward"&gt;&lt;/i&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'prevPageLabel'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'prevPageLabel'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&lt;i&nbsp;class="icon-backward"&gt;&lt;/i&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxButtonCount'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxButtonCount'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'displayFirstAndLast'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'displayFirstAndLast'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;userPageSize&nbsp;drop&nbsp;down&nbsp;changed<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setUserPageSize</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;set&nbsp;pagination<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPagination</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">());<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;checkbox&nbsp;when&nbsp;we&nbsp;have&nbsp;multiactions<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiActions</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(array(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'CCheckBoxColumn'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L116">dressing/widgets/YdGridView.php#L116</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiActions&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridActions&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridButtons</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dressing</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAssetsUrl</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'/jquery-form/jquery.form.js'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;put&nbsp;the&nbsp;url&nbsp;from&nbsp;the&nbsp;button&nbsp;into&nbsp;the&nbsp;form&nbsp;action<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;handle&nbsp;submit&nbsp;form&nbsp;to&nbsp;capture&nbsp;the&nbsp;response&nbsp;into&nbsp;a&nbsp;modal<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beginWidget</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing.widgets.YdJavaScriptWidget'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'position'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">?&gt;<br /></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&nbsp;type="text/javascript"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;modalRemote&nbsp;=&nbsp;$('#modal-remote');<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;handle&nbsp;multiActions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').on('change',&nbsp;'.multi-actions',&nbsp;function&nbsp;()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;checked&nbsp;=&nbsp;false;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;action&nbsp;=&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').attr('action');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;url&nbsp;=&nbsp;$(this).val();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(this).val('');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(url)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('.select-on-check').each(function&nbsp;()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;($(this).attr('checked'))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checked&nbsp;=&nbsp;true;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(checked)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setupGridViewAjaxForm();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').attr('action',&nbsp;url).submit();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alert('<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'No&nbsp;rows&nbsp;selected.'</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">?&gt;</span>');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;handle&nbsp;gridActions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').on('change',&nbsp;'.grid-actions',&nbsp;function&nbsp;()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;action&nbsp;=&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').attr('action');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;url&nbsp;=&nbsp;$(this).val();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(this).val('');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(url)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setupGridViewAjaxForm();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').attr('action',&nbsp;url).submit();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;handle&nbsp;gridButtons<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').on('click',&nbsp;'.gridButton',&nbsp;function&nbsp;()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;action&nbsp;=&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').attr('action');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;url&nbsp;=&nbsp;$(this).val();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(this).val('');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(url)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').attr('action',&nbsp;url).submit();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;handle&nbsp;form&nbsp;submission<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;setupGridViewAjaxForm()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>-form').ajaxForm({<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;beforeSubmit:&nbsp;function&nbsp;(response)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!modalRemote.length)&nbsp;modalRemote&nbsp;=&nbsp;$('&lt;div&nbsp;class="modal&nbsp;hide&nbsp;fade"&nbsp;id="modal-remote"&gt;&lt;/div&gt;');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modalRemote.modalResponsiveFix();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modalRemote.touchScroll();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modalRemote.html('&lt;div&nbsp;class="modal-header"&gt;&lt;h3&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Loading...'</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/h3&gt;&lt;/div&gt;&lt;div&nbsp;class="modal-body"&gt;&lt;div&nbsp;class="modal-remote-indicator"&gt;&lt;/div&gt;').modal();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;success:&nbsp;function&nbsp;(response)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modalRemote.html(response);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(window).resize();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#modal-remote&nbsp;input:text:visible:first').focus();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error:&nbsp;function&nbsp;(response)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modalRemote.children('.modal-header').html('&lt;button&nbsp;type="button"&nbsp;class="close"&nbsp;data-dismiss="modal"&gt;&lt;i&nbsp;class="icon-remove"&gt;&lt;/i&gt;&lt;/button&gt;&lt;h3&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Error!'</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/h3&gt;');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modalRemote.children('.modal-body').html(response);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/script&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">endWidget</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderClear-detail">
renderClear()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderClear</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L303">dressing/widgets/YdGridView.php#L303</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderClear</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="clear"&gt;&lt;/div&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderGridActions-detail">
renderGridActions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderGridActions</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L271">dressing/widgets/YdGridView.php#L271</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderGridActions</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridActions</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="form-grid-actions"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">dropDownList</span><span style="color: #007700">(</span><span style="color: #DD0000">"gridAction[</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">listData</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridActions</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'url'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">),&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'with&nbsp;all&nbsp;matching&nbsp;rows...'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'grid-actions'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderGridButtons-detail">
renderGridButtons()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderGridButtons</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L289">dressing/widgets/YdGridView.php#L289</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderGridButtons</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridButtons</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="form-grid-buttons"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridButtons&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$gridButton</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;button&nbsp;class="btn&nbsp;gridButton"&nbsp;value="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$gridButton</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$gridButton</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/button&gt;&nbsp;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderMultiActions-detail">
renderMultiActions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderMultiActions</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L253">dressing/widgets/YdGridView.php#L253</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderMultiActions</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiActions</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="form-multi-actions"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">dropDownList</span><span style="color: #007700">(</span><span style="color: #DD0000">"multiAction[</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">listData</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiActions</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'url'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">),&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'with&nbsp;selected...'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'multi-actions'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderPageSelect-detail">
renderPageSelect()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderPageSelect</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L234">dressing/widgets/YdGridView.php#L234</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderPageSelect</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'per&nbsp;page'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pageSizeOptions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$option</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$option&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">dropDownList</span><span style="color: #007700">(</span><span style="color: #DD0000">"userPageSize[</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUserPageSize</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'onchange'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"$.fn.yiiGridView.update('</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">',{data:{userPageSize:{"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">":$(this).val()}}})"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'page-size'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderPager-detail">
renderPager()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderPager</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L337">dressing/widgets/YdGridView.php#L337</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderPager</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enablePagination</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pager&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'CLinkPager'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pager&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pager</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'pages'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$pager</span><span style="color: #007700">[</span><span style="color: #DD0000">'pages'</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getPageCount</span><span style="color: #007700">()&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pagerCssClass&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pager</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pager</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders the pager.</p>


<div class="detailHeader" id="renderToggleFilters-detail">
renderToggleFilters()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderToggleFilters</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L224">dressing/widgets/YdGridView.php#L224</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderToggleFilters</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$js&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"jQuery(document).on('click','.toggle-filters',function(){&nbsp;jQuery(this).closest('.grid-view').find('.filters').toggle();&nbsp;});"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'_toggle-filters'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;i&nbsp;class="icon-search&nbsp;toggle-filters"&nbsp;title="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Show&nbsp;Filters'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&gt;&lt;/i&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/0.1.0/yii-dressing/widgets/YdGridView.php#L200">dressing/widgets/YdGridView.php#L200</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiActions&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridActions&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridButtons</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'-multi-checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'multi-checkbox-table'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;))&nbsp;.&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">beginForm</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'POST'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'-form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #DD0000">'returnUrl'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">returnUrl</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFormValue</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiActions&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridActions&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gridButtons</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">endForm</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


