<?php
$this->pageTitle = $this->pageHeading = 'CGridView';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CGridView';
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
  <td><?php echo CHtml::link('zii.widgets.grid', array('/site/doc', '#' => 'zii.widgets.grid')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CGridView &raquo;
<?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbGridView', array('/site/doc', 'view' => 'TbGridView')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php">yii/zii/widgets/grid/CGridView.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CGridView displays a list of data items in terms of a table.
<br/><br/>
Each row of the table represents the data of a single data item, and a column usually represents
an attribute of the item (some columns may correspond to complex expression of attributes or static text).
<br/><br/>
CGridView supports both sorting and pagination of the data items. The sorting
and pagination can be done in AJAX mode or normal page request. A benefit of using CGridView is that
when the user browser disables JavaScript, the sorting and pagination automatically degenerate
to normal page requests and are still functioning as expected.
<br/><br/>
CGridView should be used together with a <?php echo CHtml::link('data provider', array('/site/doc', 'view' => 'IDataProvider')); ?>, preferrably a
<?php echo CHtml::link('CActiveDataProvider', array('/site/doc', 'view' => 'CActiveDataProvider')); ?>.
<br/><br/>
The minimal code needed to use CGridView is as follows:
<br/><br/>
<pre>
$dataProvider=new CActiveDataProvider('Post');

$this-&gt;widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=&gt;$dataProvider,
));
</pre>
<br/><br/>
The above code first creates a data provider for the <code>Post</code> ActiveRecord class.
It then uses CGridView to display every attribute in every <code>Post</code> instance.
The displayed table is equiped with sorting and pagination functionality.
<br/><br/>
In order to selectively display attributes with different formats, we may configure the
<?php echo CHtml::link('CGridView::columns', array('/site/doc', 'view' => 'CGridView', '#' => 'columns')); ?> property. For example, we may specify only the <code>title</code>
and <code>create_time</code> attributes to be displayed, and the <code>create_time</code>
should be properly formatted to show as a time. We may also display the attributes of the related
objects using the dot-syntax as shown below:
<br/><br/>
<pre>
$this-&gt;widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=&gt;$dataProvider,
    'columns'=&gt;array(
        'title',          // display the 'title' attribute
        'category.name',  // display the 'name' attribute of the 'category' relation
        'content:html',   // display the 'content' attribute as purified HTML
        array(            // display 'create_time' using an expression
            'name'=&gt;'create_time',
            'value'=&gt;'date(&quot;M j, Y&quot;, $data-&gt;create_time)',
        ),
        array(            // display 'author.username' using an expression
            'name'=&gt;'authorName',
            'value'=&gt;'$data-&gt;author-&gt;username',
        ),
        array(            // display a column with &quot;view&quot;, &quot;update&quot; and &quot;delete&quot; buttons
            'class'=&gt;'CButtonColumn',
        ),
    ),
));
</pre>
<br/><br/>
Please refer to <?php echo CHtml::link('columns', array('/site/doc', 'view' => 'CGridView', '#' => 'columns')); ?> for more details about how to configure this property.</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'CGridView', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="afterAjaxUpdate">
  <td><?php echo CHtml::link('afterAjaxUpdate', array('/site/doc', 'view' => 'CGridView', '#' => 'afterAjaxUpdate-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after a successful AJAX response is received.</td>
  <td>CGridView</td>
</tr>
<tr id="ajaxType">
  <td><?php echo CHtml::link('ajaxType', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxType-detail')); ?></td>
  <td>string</td>
  <td>the type ('GET' or 'POST') of the AJAX requests.</td>
  <td>CGridView</td>
</tr>
<tr id="ajaxUpdate">
  <td><?php echo CHtml::link('ajaxUpdate', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxUpdate-detail')); ?></td>
  <td>mixed</td>
  <td>the ID of the container whose content may be updated with an AJAX response.</td>
  <td>CGridView</td>
</tr>
<tr id="ajaxUpdateError">
  <td><?php echo CHtml::link('ajaxUpdateError', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxUpdateError-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked if an AJAX update error occurs.</td>
  <td>CGridView</td>
</tr>
<tr id="ajaxUrl">
  <td><?php echo CHtml::link('ajaxUrl', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxUrl-detail')); ?></td>
  <td>mixed</td>
  <td>the URL for the AJAX requests should be sent to.</td>
  <td>CGridView</td>
</tr>
<tr id="ajaxVar">
  <td><?php echo CHtml::link('ajaxVar', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxVar-detail')); ?></td>
  <td>string</td>
  <td>the name of the GET variable that indicates the request is an AJAX request triggered
by this widget.</td>
  <td>CGridView</td>
</tr>
<tr id="baseScriptUrl">
  <td><?php echo CHtml::link('baseScriptUrl', array('/site/doc', 'view' => 'CGridView', '#' => 'baseScriptUrl-detail')); ?></td>
  <td>string</td>
  <td>the base script URL for all grid view resources (eg javascript, CSS file, images).</td>
  <td>CGridView</td>
</tr>
<tr id="beforeAjaxUpdate">
  <td><?php echo CHtml::link('beforeAjaxUpdate', array('/site/doc', 'view' => 'CGridView', '#' => 'beforeAjaxUpdate-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked before an AJAX update occurs.</td>
  <td>CGridView</td>
</tr>
<tr id="blankDisplay">
  <td><?php echo CHtml::link('blankDisplay', array('/site/doc', 'view' => 'CGridView', '#' => 'blankDisplay-detail')); ?></td>
  <td>string</td>
  <td>the text to be displayed in an empty grid cell.</td>
  <td>CGridView</td>
</tr>
<tr id="columns">
  <td><?php echo CHtml::link('columns', array('/site/doc', 'view' => 'CGridView', '#' => 'columns-detail')); ?></td>
  <td>array</td>
  <td>grid column configuration.</td>
  <td>CGridView</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="cssFile">
  <td><?php echo CHtml::link('cssFile', array('/site/doc', 'view' => 'CGridView', '#' => 'cssFile-detail')); ?></td>
  <td>string</td>
  <td>the URL of the CSS file used by this grid view.</td>
  <td>CGridView</td>
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
  <td>the HTML tag name for the container of the <?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'CGridView', '#' => 'emptyText')); ?> property.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="emptyText">
  <td><?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'CBaseListView', '#' => 'emptyText-detail')); ?></td>
  <td>string</td>
  <td>the message to be displayed when <?php echo CHtml::link('dataProvider', array('/site/doc', 'view' => 'CGridView', '#' => 'dataProvider')); ?> does not have any data.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr id="enableHistory">
  <td><?php echo CHtml::link('enableHistory', array('/site/doc', 'view' => 'CGridView', '#' => 'enableHistory-detail')); ?></td>
  <td>boolean</td>
  <td>whether to leverage the {@link https://developer.</td>
  <td>CGridView</td>
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
<tr id="filter">
  <td><?php echo CHtml::link('filter', array('/site/doc', 'view' => 'CGridView', '#' => 'filter-detail')); ?></td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td>the model instance that keeps the user-entered filter data.</td>
  <td>CGridView</td>
</tr>
<tr id="filterCssClass">
  <td><?php echo CHtml::link('filterCssClass', array('/site/doc', 'view' => 'CGridView', '#' => 'filterCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for the table row element containing all filter input fields.</td>
  <td>CGridView</td>
</tr>
<tr id="filterPosition">
  <td><?php echo CHtml::link('filterPosition', array('/site/doc', 'view' => 'CGridView', '#' => 'filterPosition-detail')); ?></td>
  <td>string</td>
  <td>whether the filters should be displayed in the grid view.</td>
  <td>CGridView</td>
</tr>
<tr id="filterSelector">
  <td><?php echo CHtml::link('filterSelector', array('/site/doc', 'view' => 'CGridView', '#' => 'filterSelector-detail')); ?></td>
  <td>string</td>
  <td>the jQuery selector of filter input fields.</td>
  <td>CGridView</td>
</tr>
<tr id="formatter">
  <td><?php echo CHtml::link('formatter', array('/site/doc', 'view' => 'CGridView', '#' => 'formatter-detail')); ?></td>
  <td><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
  <td>the formatter instance.</td>
  <td>CGridView</td>
</tr>
<tr id="hasFooter">
  <td><?php echo CHtml::link('hasFooter', array('/site/doc', 'view' => 'CGridView', '#' => 'hasFooter-detail')); ?></td>
  <td>boolean</td>
  <td>whether the table should render a footer.</td>
  <td>CGridView</td>
</tr>
<tr id="hideHeader">
  <td><?php echo CHtml::link('hideHeader', array('/site/doc', 'view' => 'CGridView', '#' => 'hideHeader-detail')); ?></td>
  <td>boolean</td>
  <td>whether to hide the header cells of the grid.</td>
  <td>CGridView</td>
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
<tr id="loadingCssClass">
  <td><?php echo CHtml::link('loadingCssClass', array('/site/doc', 'view' => 'CGridView', '#' => 'loadingCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name that will be assigned to the widget container element
when the widget is updating its content via AJAX.</td>
  <td>CGridView</td>
</tr>
<tr id="nullDisplay">
  <td><?php echo CHtml::link('nullDisplay', array('/site/doc', 'view' => 'CGridView', '#' => 'nullDisplay-detail')); ?></td>
  <td>string</td>
  <td>the text to be displayed in a data cell when a data value is null.</td>
  <td>CGridView</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="pager">
  <td><?php echo CHtml::link('pager', array('/site/doc', 'view' => 'CBaseListView', '#' => 'pager-detail')); ?></td>
  <td>array|string</td>
  <td>the configuration for the pager.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr class="inherited" id="pagerCssClass">
  <td><?php echo CHtml::link('pagerCssClass', array('/site/doc', 'view' => 'CBaseListView', '#' => 'pagerCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class name for the pager container.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr id="rowCssClass">
  <td><?php echo CHtml::link('rowCssClass', array('/site/doc', 'view' => 'CGridView', '#' => 'rowCssClass-detail')); ?></td>
  <td>array</td>
  <td>the CSS class names for the table body rows.</td>
  <td>CGridView</td>
</tr>
<tr id="rowCssClassExpression">
  <td><?php echo CHtml::link('rowCssClassExpression', array('/site/doc', 'view' => 'CGridView', '#' => 'rowCssClassExpression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every table body row and whose result
is used as the CSS class name for the row.</td>
  <td>CGridView</td>
</tr>
<tr id="rowHtmlOptionsExpression">
  <td><?php echo CHtml::link('rowHtmlOptionsExpression', array('/site/doc', 'view' => 'CGridView', '#' => 'rowHtmlOptionsExpression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every table body row and whose result
is used as additional HTML attributes for the row.</td>
  <td>CGridView</td>
</tr>
<tr id="selectableRows">
  <td><?php echo CHtml::link('selectableRows', array('/site/doc', 'view' => 'CGridView', '#' => 'selectableRows-detail')); ?></td>
  <td>integer</td>
  <td>the number of table body rows that can be selected.</td>
  <td>CGridView</td>
</tr>
<tr id="selectionChanged">
  <td><?php echo CHtml::link('selectionChanged', array('/site/doc', 'view' => 'CGridView', '#' => 'selectionChanged-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after the row selection is changed.</td>
  <td>CGridView</td>
</tr>
<tr id="showTableOnEmpty">
  <td><?php echo CHtml::link('showTableOnEmpty', array('/site/doc', 'view' => 'CGridView', '#' => 'showTableOnEmpty-detail')); ?></td>
  <td>boolean</td>
  <td>whether to display the table even when there is no data.</td>
  <td>CGridView</td>
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
<tr id="updateSelector">
  <td><?php echo CHtml::link('updateSelector', array('/site/doc', 'view' => 'CGridView', '#' => 'updateSelector-detail')); ?></td>
  <td>string</td>
  <td>the jQuery selector of the HTML elements that may trigger AJAX updates when they are clicked.</td>
  <td>CGridView</td>
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
<tr id="getFormatter">
  <td><?php echo CHtml::link('getFormatter()', array('/site/doc', 'view' => 'CGridView', '#' => 'getFormatter-detail')); ?></td>
  <td>Returns the formatter instance. Defaults to the 'format' application component.</td>
  <td>CGridView</td>
</tr>
<tr id="getHasFooter">
  <td><?php echo CHtml::link('getHasFooter()', array('/site/doc', 'view' => 'CGridView', '#' => 'getHasFooter-detail')); ?></td>
  <td>Returns whether the table should render a footer.
This is true if any of the <?php echo CHtml::link('columns', array('/site/doc', 'view' => 'CGridView', '#' => 'columns')); ?> has a true <?php echo CHtml::link('CGridColumn::hasFooter', array('/site/doc', 'view' => 'CGridColumn', '#' => 'hasFooter')); ?> value.</td>
  <td>CGridView</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CGridView', '#' => 'init-detail')); ?></td>
  <td>Initializes the grid view.</td>
  <td>CGridView</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'CGridView', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers necessary client scripts.</td>
  <td>CGridView</td>
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
<tr id="renderFilter">
  <td><?php echo CHtml::link('renderFilter()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderFilter-detail')); ?></td>
  <td>Renders the filter.</td>
  <td>CGridView</td>
</tr>
<tr class="inherited" id="renderInternal">
  <td><?php echo CHtml::link('renderInternal()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderInternal-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr id="renderItems">
  <td><?php echo CHtml::link('renderItems()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderItems-detail')); ?></td>
  <td>Renders the data items for the grid view.</td>
  <td>CGridView</td>
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
  <td><?php echo CHtml::link('renderTableBody()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderTableBody-detail')); ?></td>
  <td>Renders the table body.</td>
  <td>CGridView</td>
</tr>
<tr id="renderTableFooter">
  <td><?php echo CHtml::link('renderTableFooter()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderTableFooter-detail')); ?></td>
  <td>Renders the table footer.</td>
  <td>CGridView</td>
</tr>
<tr id="renderTableHeader">
  <td><?php echo CHtml::link('renderTableHeader()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderTableHeader-detail')); ?></td>
  <td>Renders the table header.</td>
  <td>CGridView</td>
</tr>
<tr id="renderTableRow">
  <td><?php echo CHtml::link('renderTableRow()', array('/site/doc', 'view' => 'CGridView', '#' => 'renderTableRow-detail')); ?></td>
  <td>Renders a table body row.</td>
  <td>CGridView</td>
</tr>
<tr class="inherited" id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'run-detail')); ?></td>
  <td>Renders the view.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
<tr id="setFormatter">
  <td><?php echo CHtml::link('setFormatter()', array('/site/doc', 'view' => 'CGridView', '#' => 'setFormatter-detail')); ?></td>
  <td>Sets the formatter instance</td>
  <td>CGridView</td>
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
  <td><?php echo CHtml::link('createDataColumn()', array('/site/doc', 'view' => 'CGridView', '#' => 'createDataColumn-detail')); ?></td>
  <td>Creates a <?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?> based on a shortcut column specification string.</td>
  <td>CGridView</td>
</tr>
<tr id="initColumns">
  <td><?php echo CHtml::link('initColumns()', array('/site/doc', 'view' => 'CGridView', '#' => 'initColumns-detail')); ?></td>
  <td>Creates column objects and initializes them.</td>
  <td>CGridView</td>
</tr>
<tr class="inherited" id="renderSection">
  <td><?php echo CHtml::link('renderSection()', array('/site/doc', 'view' => 'CBaseListView', '#' => 'renderSection-detail')); ?></td>
  <td>Renders a section.</td>
  <td><?php echo CHtml::link('CBaseListView', array('/site/doc', 'view' => 'CBaseListView')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="afterAjaxUpdate-detail">
afterAjaxUpdate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$afterAjaxUpdate</b>;</div>

<p>a javascript function that will be invoked after a successful AJAX response is received.
The function signature is <code>function(id, data)</code> where 'id' refers to the ID of the grid view,
'data' the received ajax response data.</p>


<div class="detailHeader" id="ajaxType-detail">
ajaxType<span class="detailHeaderTag">
property
 (available since v1.1.14)
</span>
</div>

<div class="signature">
public string <b>$ajaxType</b>;</div>

<p>the type ('GET' or 'POST') of the AJAX requests. If not set, 'GET' will be used.
You can set this to 'POST' if you are filtering by many fields at once and have a problem with GET query string length.
Note that in POST mode direct links and <?php echo CHtml::link('enableHistory', array('/site/doc', 'view' => 'CGridView', '#' => 'enableHistory')); ?> feature may not work correctly!</p>


<div class="detailHeader" id="ajaxUpdate-detail">
ajaxUpdate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$ajaxUpdate</b>;</div>

<p>the ID of the container whose content may be updated with an AJAX response.
Defaults to null, meaning the container for this grid view instance.
If it is set false, it means sorting and pagination will be performed in normal page requests
instead of AJAX requests. If the sorting and pagination should trigger the update of multiple
containers' content in AJAX fashion, these container IDs may be listed here (separated with comma).</p>


<div class="detailHeader" id="ajaxUpdateError-detail">
ajaxUpdateError<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$ajaxUpdateError</b>;</div>

<p>a javascript function that will be invoked if an AJAX update error occurs.
<br/><br/>
The function signature is <code>function(xhr, textStatus, errorThrown, errorMessage)</code>
<ul>
<li><code>xhr</code> is the XMLHttpRequest object.</li>
<li><code>textStatus</code> is a string describing the type of error that occurred.
Possible values (besides null) are "timeout", "error", "notmodified" and "parsererror"</li>
<li><code>errorThrown</code> is an optional exception object, if one occurred.</li>
<li><code>errorMessage</code> is the CGridView default error message derived from xhr and errorThrown.
Usefull if you just want to display this error differently. CGridView by default displays this error with an javascript.alert()</li>
</ul>
Note: This handler is not called for JSONP requests, because they do not use an XMLHttpRequest.
<br/><br/>
Example (add in a call to CGridView):
<pre>
 ...
 'ajaxUpdateError'=&gt;'function(xhr,ts,et,err){ $(&quot;#myerrordiv&quot;).text(err); }',
 ...
</pre></p>


<div class="detailHeader" id="ajaxUrl-detail">
ajaxUrl<span class="detailHeaderTag">
property
 (available since v1.1.8)
</span>
</div>

<div class="signature">
public mixed <b>$ajaxUrl</b>;</div>

<p>the URL for the AJAX requests should be sent to. <?php echo CHtml::link('CHtml::normalizeUrl()', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> will be
called on this property. If not set, the current page URL will be used for AJAX requests.</p>


<div class="detailHeader" id="ajaxVar-detail">
ajaxVar<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$ajaxVar</b>;</div>

<p>the name of the GET variable that indicates the request is an AJAX request triggered
by this widget. Defaults to 'ajax'. This is effective only when <?php echo CHtml::link('ajaxUpdate', array('/site/doc', 'view' => 'CGridView', '#' => 'ajaxUpdate')); ?> is not false.</p>


<div class="detailHeader" id="baseScriptUrl-detail">
baseScriptUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$baseScriptUrl</b>;</div>

<p>the base script URL for all grid view resources (eg javascript, CSS file, images).
Defaults to null, meaning using the integrated grid view resources (which are published as assets).</p>


<div class="detailHeader" id="beforeAjaxUpdate-detail">
beforeAjaxUpdate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$beforeAjaxUpdate</b>;</div>

<p>a javascript function that will be invoked before an AJAX update occurs.
The function signature is <code>function(id,options)</code> where 'id' refers to the ID of the grid view,
'options' the AJAX request options  (see jQuery.ajax api manual).</p>


<div class="detailHeader" id="blankDisplay-detail">
blankDisplay<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public string <b>$blankDisplay</b>;</div>

<p>the text to be displayed in an empty grid cell. This property will NOT be HTML-encoded when rendering. Defaults to an HTML blank.
This differs from <?php echo CHtml::link('nullDisplay', array('/site/doc', 'view' => 'CGridView', '#' => 'nullDisplay')); ?> in that <?php echo CHtml::link('nullDisplay', array('/site/doc', 'view' => 'CGridView', '#' => 'nullDisplay')); ?> is only used by <?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?> to render
null data values.</p>


<div class="detailHeader" id="columns-detail">
columns<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$columns</b>;</div>

<p>grid column configuration. Each array element represents the configuration
for one particular grid column which can be either a string or an array.
<br/><br/>
When a column is specified as a string, it should be in the format of "name:type:header",
where "type" and "header" are optional. A <?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?> instance will be created in this case,
whose <?php echo CHtml::link('CDataColumn::name', array('/site/doc', 'view' => 'CDataColumn', '#' => 'name')); ?>, <?php echo CHtml::link('CDataColumn::type', array('/site/doc', 'view' => 'CDataColumn', '#' => 'type')); ?> and <?php echo CHtml::link('CDataColumn::header', array('/site/doc', 'view' => 'CDataColumn', '#' => 'header')); ?>
properties will be initialized accordingly.
<br/><br/>
When a column is specified as an array, it will be used to create a grid column instance, where
the 'class' element specifies the column class name (defaults to <?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?> if absent).
Currently, these official column classes are provided: <?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?>,
<?php echo CHtml::link('CLinkColumn', array('/site/doc', 'view' => 'CLinkColumn')); ?>, <?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?> and <?php echo CHtml::link('CCheckBoxColumn', array('/site/doc', 'view' => 'CCheckBoxColumn')); ?>.</p>


<div class="detailHeader" id="cssFile-detail">
cssFile<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cssFile</b>;</div>

<p>the URL of the CSS file used by this grid view. Defaults to null, meaning using the integrated
CSS file. If this is set false, you are responsible to explicitly include the necessary CSS file in your page.</p>


<div class="detailHeader" id="enableHistory-detail">
enableHistory<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public boolean <b>$enableHistory</b>;</div>

<p>whether to leverage the DOM history object.  Set this property to true
to persist state of grid across page revisits.  Note, there are two limitations for this feature:
<ul>
   <li>this feature is only compatible with browsers that support HTML5.</li>
   <li>expect unexpected functionality (e.g. multiple ajax calls) if there is more than one grid/list on a single page with enableHistory turned on.</li>
</ul></p>


<div class="detailHeader" id="filter-detail">
filter<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> <b>$filter</b>;</div>

<p>the model instance that keeps the user-entered filter data. When this property is set,
the grid view will enable column-based filtering. Each data column by default will display a text field
at the top that users can fill in to filter the data.
Note that in order to show an input field for filtering, a column must have its <?php echo CHtml::link('CDataColumn::name', array('/site/doc', 'view' => 'CDataColumn', '#' => 'name')); ?>
property set or have <?php echo CHtml::link('CDataColumn::filter', array('/site/doc', 'view' => 'CDataColumn', '#' => 'filter')); ?> as the HTML code for the input field.
When this property is not set (null) the filtering is disabled.</p>


<div class="detailHeader" id="filterCssClass-detail">
filterCssClass<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public string <b>$filterCssClass</b>;</div>

<p>the CSS class name for the table row element containing all filter input fields. Defaults to 'filters'.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('filter', array('/site/doc', 'view' => 'CGridView', '#' => 'filter')); ?></li>
</ul>
</div>

<div class="detailHeader" id="filterPosition-detail">
filterPosition<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public string <b>$filterPosition</b>;</div>

<p>whether the filters should be displayed in the grid view. Valid values include:
<ul>
   <li>header: the filters will be displayed on top of each column's header cell.</li>
   <li>body: the filters will be displayed right below each column's header cell.</li>
   <li>footer: the filters will be displayed below each column's footer cell.</li>
</ul></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('filter', array('/site/doc', 'view' => 'CGridView', '#' => 'filter')); ?></li>
</ul>
</div>

<div class="detailHeader" id="filterSelector-detail">
filterSelector<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public string <b>$filterSelector</b>;</div>

<p>the jQuery selector of filter input fields.
The token '{filter}' is recognized and it will be replaced with the grid filters selector.
Defaults to '{filter}'.
<br/><br/>
Note: if this value is empty an exception will be thrown.
<br/><br/>
Example (adding a custom selector to the default one):
<pre>
 ...
 'filterSelector'=&gt;'{filter}, #myfilter',
 ...
</pre></p>


<div class="detailHeader" id="formatter-detail">
formatter<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?> <?php echo CHtml::link('<b>getFormatter</b>', array('/site/doc', 'view' => 'CGridView', '#' => 'getFormatter')); ?>()<br/>public void <?php echo CHtml::link('<b>setFormatter</b>', array('/site/doc', 'view' => 'CGridView', '#' => 'setFormatter')); ?>(<?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?> $value)</div>

<p>the formatter instance. Defaults to the 'format' application component.</p>


<div class="detailHeader" id="hasFooter-detail">
hasFooter<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getHasFooter</b>', array('/site/doc', 'view' => 'CGridView', '#' => 'getHasFooter')); ?>()</div>

<p>whether the table should render a footer.
This is true if any of the <?php echo CHtml::link('columns', array('/site/doc', 'view' => 'CGridView', '#' => 'columns')); ?> has a true <?php echo CHtml::link('CGridColumn::hasFooter', array('/site/doc', 'view' => 'CGridColumn', '#' => 'hasFooter')); ?> value.</p>


<div class="detailHeader" id="hideHeader-detail">
hideHeader<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public boolean <b>$hideHeader</b>;</div>

<p>whether to hide the header cells of the grid. When this is true, header cells
will not be rendered, which means the grid cannot be sorted anymore since the sort links are located
in the header. Defaults to false.</p>


<div class="detailHeader" id="loadingCssClass-detail">
loadingCssClass<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public string <b>$loadingCssClass</b>;</div>

<p>the CSS class name that will be assigned to the widget container element
when the widget is updating its content via AJAX. Defaults to 'grid-view-loading'.</p>


<div class="detailHeader" id="nullDisplay-detail">
nullDisplay<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$nullDisplay</b>;</div>

<p>the text to be displayed in a data cell when a data value is null. This property will NOT be HTML-encoded
when rendering. Defaults to an HTML blank.</p>


<div class="detailHeader" id="rowCssClass-detail">
rowCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$rowCssClass</b>;</div>

<p>the CSS class names for the table body rows. If multiple CSS class names are given,
they will be assigned to the rows sequentially and repeatedly. This property is ignored
if <?php echo CHtml::link('rowCssClassExpression', array('/site/doc', 'view' => 'CGridView', '#' => 'rowCssClassExpression')); ?> is set. Defaults to <code>array('odd', 'even')</code>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('rowCssClassExpression', array('/site/doc', 'view' => 'CGridView', '#' => 'rowCssClassExpression')); ?></li>
</ul>
</div>

<div class="detailHeader" id="rowCssClassExpression-detail">
rowCssClassExpression<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$rowCssClassExpression</b>;</div>

<p>a PHP expression that is evaluated for every table body row and whose result
is used as the CSS class name for the row. In this expression, you can use the following variables:
<ul>
  <li><code>$row</code> the row number (zero-based)</li>
  <li><code>$data</code> the data model for the row</li>
  <li><code>$this</code> the grid view object</li>
</ul>
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CGridView', '#' => 'evaluateExpression')); ?>.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('rowCssClass', array('/site/doc', 'view' => 'CGridView', '#' => 'rowCssClass')); ?></li>
</ul>
</div>

<div class="detailHeader" id="rowHtmlOptionsExpression-detail">
rowHtmlOptionsExpression<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public string <b>$rowHtmlOptionsExpression</b>;</div>

<p>a PHP expression that is evaluated for every table body row and whose result
is used as additional HTML attributes for the row. The expression should return an
array whose key value pairs correspond to html attribute and value.
In this expression, you can use the following variables:
<ul>
  <li><code>$row</code> the row number (zero-based)</li>
  <li><code>$data</code> the data model for the row</li>
  <li><code>$this</code> the grid view object</li>
</ul>
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CGridView', '#' => 'evaluateExpression')); ?>.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>


<div class="detailHeader" id="selectableRows-detail">
selectableRows<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$selectableRows</b>;</div>

<p>the number of table body rows that can be selected. If 0, it means rows cannot be selected.
If 1, only one row can be selected. If 2 or any other number, it means multiple rows can be selected.
A selected row will have a CSS class named 'selected'. You may also call the JavaScript function
<code>$(gridID).yiiGridView('getSelection')</code> to retrieve the key values of the currently selected
rows (gridID is the DOM selector of the grid).</p>


<div class="detailHeader" id="selectionChanged-detail">
selectionChanged<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$selectionChanged</b>;</div>

<p>a javascript function that will be invoked after the row selection is changed.
The function signature is <code>function(id)</code> where 'id' refers to the ID of the grid view.
In this function, you may use <code>$(gridID).yiiGridView('getSelection')</code> to get the key values
of the currently selected rows (gridID is the DOM selector of the grid).</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('selectableRows', array('/site/doc', 'view' => 'CGridView', '#' => 'selectableRows')); ?></li>
</ul>
</div>

<div class="detailHeader" id="showTableOnEmpty-detail">
showTableOnEmpty<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$showTableOnEmpty</b>;</div>

<p>whether to display the table even when there is no data. Defaults to true.
The <?php echo CHtml::link('emptyText', array('/site/doc', 'view' => 'CGridView', '#' => 'emptyText')); ?> will be displayed to indicate there is no data.</p>


<div class="detailHeader" id="updateSelector-detail">
updateSelector<span class="detailHeaderTag">
property
 (available since v1.1.7)
</span>
</div>

<div class="signature">
public string <b>$updateSelector</b>;</div>

<p>the jQuery selector of the HTML elements that may trigger AJAX updates when they are clicked.
These tokens are recognized: {page} and {sort}. They will be replaced with the pagination and sorting links selectors.
Defaults to '{page}, {sort}', that means that the pagination links and the sorting links will trigger AJAX updates.
Tokens are available from 1.1.11
<br/><br/>
Note: if this value is empty an exception will be thrown.
<br/><br/>
Example (adding a custom selector to the default ones):
<pre>
 ...
 'updateSelector'=&gt;'{page}, {sort}, #mybutton',
 ...
</pre></p>


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
protected <?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?> <b>createDataColumn</b>(string $text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the column specification string</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
  <td class="paramDescCol">the column instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L409">yii/zii/widgets/grid/CGridView.php#L409</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createDataColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^([\w\.]+)(:(\w*))?(:(.*))?$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$text</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;column&nbsp;must&nbsp;be&nbsp;specified&nbsp;in&nbsp;the&nbsp;format&nbsp;of&nbsp;"Name:Type:Label",&nbsp;where&nbsp;"Type"&nbsp;and&nbsp;"Label"&nbsp;are&nbsp;optional.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CDataColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">header</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a <?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?> based on a shortcut column specification string.</p>


<div class="detailHeader" id="getFormatter-detail">
getFormatter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?> <b>getFormatter</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
  <td class="paramDescCol">the formatter instance. Defaults to the 'format' application component.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L635">yii/zii/widgets/grid/CGridView.php#L635</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getFormatter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_formatter</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_formatter</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_formatter</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getHasFooter-detail">
getHasFooter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getHasFooter</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the table should render a footer.
This is true if any of the <?php echo CHtml::link('columns', array('/site/doc', 'view' => 'CGridView', '#' => 'columns')); ?> has a true <?php echo CHtml::link('CGridColumn::hasFooter', array('/site/doc', 'view' => 'CGridColumn', '#' => 'hasFooter')); ?> value.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L624">yii/zii/widgets/grid/CGridView.php#L624</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHasFooter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHasFooter</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L337">yii/zii/widgets/grid/CGridView.php#L337</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateSelector</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;property&nbsp;updateSelector&nbsp;should&nbsp;be&nbsp;defined.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterSelector</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;property&nbsp;filterSelector&nbsp;should&nbsp;be&nbsp;defined.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'grid-view'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseScriptUrl</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseScriptUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getAssetManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">publish</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii.widgets.assets'</span><span style="color: #007700">)).</span><span style="color: #DD0000">'/gridview'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseScriptUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'/styles.css'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">registerCssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initColumns</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the grid view.
This method will initialize required property values and instantiate <?php echo CHtml::link('columns', array('/site/doc', 'view' => 'CGridView', '#' => 'columns')); ?> objects.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L365">yii/zii/widgets/grid/CGridView.php#L365</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initColumns</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CActiveDataProvider</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeNames</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">IDataProvider</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;use&nbsp;the&nbsp;keys&nbsp;of&nbsp;the&nbsp;first&nbsp;row&nbsp;of&nbsp;data&nbsp;as&nbsp;the&nbsp;default&nbsp;columns<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">=</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createDataColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'CDataColumn'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">visible</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">=</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'_c'</span><span style="color: #007700">.</span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$column</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Creates column objects and initializes them.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L425">yii/zii/widgets/grid/CGridView.php#L425</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUpdate</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ajaxUpdate</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ajaxUpdate</span><span style="color: #007700">=</span><span style="color: #0000BB">array_unique</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s*,\s*/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUpdate</span><span style="color: #007700">.</span><span style="color: #DD0000">','</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">,-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'ajaxUpdate'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$ajaxUpdate</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'ajaxVar'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxVar</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'pagerClass'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pagerCssClass</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'loadingClass'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadingCssClass</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'filterClass'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterCssClass</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tableClass'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemsCssClass</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'selectableRows'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">selectableRows</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'enableHistory'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableHistory</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'updateSelector'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateSelector</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'filterSelector'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterSelector<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUrl</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxUrl</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxType</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'ajaxType'</span><span style="color: #007700">]=</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enablePagination</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'pageVar'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPagination</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">pageVar</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(array(</span><span style="color: #DD0000">'beforeAjaxUpdate'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'afterAjaxUpdate'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'ajaxUpdateError'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'selectionChanged'</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$event</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$event&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$event</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$event</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$event</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'bbq'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableHistory</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'history'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseScriptUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'/jquery.yiigridview.js'</span><span style="color: #007700">,</span><span style="color: #0000BB">CClientScript</span><span style="color: #007700">::</span><span style="color: #0000BB">POS_END</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">.</span><span style="color: #DD0000">'#'</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #DD0000">"jQuery('#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">').yiiGridView(</span><span style="color: #0000BB">$options</span><span style="color: #DD0000">);"</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers necessary client scripts.</p>


<div class="detailHeader" id="renderFilter-detail">
renderFilter()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderFilter</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L526">yii/zii/widgets/grid/CGridView.php#L526</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderFilter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filter</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;tr&nbsp;class=\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterCssClass</span><span style="color: #007700">}</span><span style="color: #DD0000">\"&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFilterCell</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the filter.</p>


<div class="detailHeader" id="renderItems-detail">
renderItems()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderItems</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L475">yii/zii/widgets/grid/CGridView.php#L475</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderItems</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">()&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showTableOnEmpty</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;table&nbsp;class=\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemsCssClass</span><span style="color: #007700">}</span><span style="color: #DD0000">\"&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderTableHeader</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderTableBody</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$body</span><span style="color: #007700">=</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderTableFooter</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$body</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;TFOOT&nbsp;must&nbsp;appear&nbsp;before&nbsp;TBODY&nbsp;according&nbsp;to&nbsp;the&nbsp;standard.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;/table&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderEmptyText</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders the data items for the grid view.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L563">yii/zii/widgets/grid/CGridView.php#L563</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderTableBody</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getData</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;tbody&gt;\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$n</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$row</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$row</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;++</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderTableRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;tr&gt;&lt;td&nbsp;colspan="'</span><span style="color: #007700">.</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">).</span><span style="color: #DD0000">'"&nbsp;class="empty"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderEmptyText</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/td&gt;&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tbody&gt;\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the table body.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L540">yii/zii/widgets/grid/CGridView.php#L540</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderTableFooter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hasFilter</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filter</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterPosition</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FILTER_POS_FOOTER</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hasFooter</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHasFooter</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$hasFilter&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$hasFooter</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;tfoot&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$hasFooter</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;tr&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFooterCell</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$hasFilter</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFilter</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tfoot&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the table footer.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L495">yii/zii/widgets/grid/CGridView.php#L495</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderTableHeader</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hideHeader</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;thead&gt;\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterPosition</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FILTER_POS_HEADER</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFilter</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;tr&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderHeaderCell</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterPosition</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FILTER_POS_BODY</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFilter</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/thead&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filter</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterPosition</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FILTER_POS_HEADER&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterPosition</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">FILTER_POS_BODY</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;thead&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFilter</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/thead&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the table header.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L587">yii/zii/widgets/grid/CGridView.php#L587</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderTableRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowHtmlOptionsExpression</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowHtmlOptionsExpression</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'row'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$row</span><span style="color: #007700">,</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClassExpression</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClassExpression</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'row'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$row</span><span style="color: #007700">,</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClass</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClass</span><span style="color: #007700">))&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCssClass</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">%</span><span style="color: #0000BB">$n</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$class</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">].=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'tr'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tr&gt;\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders a table body row.</p>


<div class="detailHeader" id="setFormatter-detail">
setFormatter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setFormatter</b>(<?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?> $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?></td>
  <td class="paramDescCol">the formatter instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridView.php#L645">yii/zii/widgets/grid/CGridView.php#L645</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setFormatter</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_formatter</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


