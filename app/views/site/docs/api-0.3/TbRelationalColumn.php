<?php
$this->pageTitle = $this->pageHeading = 'TbRelationalColumn';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbRelationalColumn';
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
  <td><?php echo CHtml::link('booster.widgets.grids.columns', array('/site/doc', '#' => 'booster.widgets.grids.columns')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbRelationalColumn &raquo;
<?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?> &raquo;
<?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?> &raquo;
<?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbRelationalColumn.php">booster/widgets/TbRelationalColumn.php</a></td>
</tr>
</table>

<div id="classDescription">
## TbRelationalColumn class
<br/><br/>
Displays a clickable column that will make an ajax request and display its resulting data
into a new row.</div>
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
<tr id="afterAjaxUpdate">
  <td><?php echo CHtml::link('afterAjaxUpdate', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'afterAjaxUpdate-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked if an AJAX call occurs.</td>
  <td>TbRelationalColumn</td>
</tr>
<tr id="ajaxErrorMessage">
  <td><?php echo CHtml::link('ajaxErrorMessage', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'ajaxErrorMessage-detail')); ?></td>
  <td>string</td>
  <td>$ajaxErrorMessage the message that is displayed on the newly created row in case there is an AJAX
error.</td>
  <td>TbRelationalColumn</td>
</tr>
<tr id="cacheData">
  <td><?php echo CHtml::link('cacheData', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'cacheData-detail')); ?></td>
  <td>bool</td>
  <td>$cacheData if set to true, there won't be more than one AJAX request.</td>
  <td>TbRelationalColumn</td>
</tr>
<tr id="cssClass">
  <td><?php echo CHtml::link('cssClass', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'cssClass-detail')); ?></td>
  <td>string</td>
  <td>$cssClass the class name that will wrap up the cell content.</td>
  <td>TbRelationalColumn</td>
</tr>
<tr class="inherited" id="cssClassExpression">
  <td><?php echo CHtml::link('cssClassExpression', array('/site/doc', 'view' => 'CGridColumn', '#' => 'cssClassExpression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every data cell and whose result
is used as the CSS class name for the data cell.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="filter">
  <td><?php echo CHtml::link('filter', array('/site/doc', 'view' => 'CDataColumn', '#' => 'filter-detail')); ?></td>
  <td>mixed</td>
  <td>the HTML code representing a filter input (eg a text field, a dropdown list)
that is used for this data column.</td>
  <td><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
</tr>
<tr class="inherited" id="filterHtmlOptions">
  <td><?php echo CHtml::link('filterHtmlOptions', array('/site/doc', 'view' => 'CGridColumn', '#' => 'filterHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the filter cell tag.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="filterInputOptions">
  <td><?php echo CHtml::link('filterInputOptions', array('/site/doc', 'view' => 'TbDataColumn', '#' => 'filterInputOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML options for filter input</td>
  <td><?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?></td>
</tr>
<tr class="inherited" id="footer">
  <td><?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CGridColumn', '#' => 'footer-detail')); ?></td>
  <td>string</td>
  <td>the footer cell text.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="footerHtmlOptions">
  <td><?php echo CHtml::link('footerHtmlOptions', array('/site/doc', 'view' => 'CGridColumn', '#' => 'footerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the footer cell tag.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="grid">
  <td><?php echo CHtml::link('grid', array('/site/doc', 'view' => 'CGridColumn', '#' => 'grid-detail')); ?></td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
  <td>the grid view object that owns this column.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="hasFooter">
  <td><?php echo CHtml::link('hasFooter', array('/site/doc', 'view' => 'CGridColumn', '#' => 'hasFooter-detail')); ?></td>
  <td>boolean</td>
  <td>whether this column has a footer cell.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="header">
  <td><?php echo CHtml::link('header', array('/site/doc', 'view' => 'CGridColumn', '#' => 'header-detail')); ?></td>
  <td>string</td>
  <td>the header cell text.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="headerHtmlOptions">
  <td><?php echo CHtml::link('headerHtmlOptions', array('/site/doc', 'view' => 'CGridColumn', '#' => 'headerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the header cell tag.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CGridColumn', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the data cell tags.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CGridColumn', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>the ID of this column.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'CDataColumn', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the attribute name of the data model.</td>
  <td><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
</tr>
<tr class="inherited" id="sortable">
  <td><?php echo CHtml::link('sortable', array('/site/doc', 'view' => 'CDataColumn', '#' => 'sortable-detail')); ?></td>
  <td>boolean</td>
  <td>whether the column is sortable.</td>
  <td><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
</tr>
<tr class="inherited" id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'CDataColumn', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>the type of the attribute value.</td>
  <td><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
</tr>
<tr id="url">
  <td><?php echo CHtml::link('url', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'url-detail')); ?></td>
  <td>string</td>
  <td>$url the route to call via AJAX to get the data from</td>
  <td>TbRelationalColumn</td>
</tr>
<tr class="inherited" id="value">
  <td><?php echo CHtml::link('value', array('/site/doc', 'view' => 'CDataColumn', '#' => 'value-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that will be evaluated for every data cell using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'evaluateExpression')); ?> and whose result will be rendered
as the content of the data cell.</td>
  <td><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
</tr>
<tr class="inherited" id="visible">
  <td><?php echo CHtml::link('visible', array('/site/doc', 'view' => 'CGridColumn', '#' => 'visible-detail')); ?></td>
  <td>boolean</td>
  <td>whether this column is visible.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CGridColumn', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
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
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getHasFooter">
  <td><?php echo CHtml::link('getHasFooter()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'getHasFooter-detail')); ?></td>
  <td>Returns whether this column has a footer cell.
This is determined based on whether <?php echo CHtml::link('footer', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'footer')); ?> is set.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'init-detail')); ?></td>
  <td>widget initialization</td>
  <td>TbRelationalColumn</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'registerClientScript-detail')); ?></td>
  <td>Register script that will handle its behavior</td>
  <td>TbRelationalColumn</td>
</tr>
<tr id="renderDataCell">
  <td><?php echo CHtml::link('renderDataCell()', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'renderDataCell-detail')); ?></td>
  <td>Overrides CDataColumn renderDataCell in order to wrap up its content with the object that will be used as a</td>
  <td>TbRelationalColumn</td>
</tr>
<tr class="inherited" id="renderFilterCell">
  <td><?php echo CHtml::link('renderFilterCell()', array('/site/doc', 'view' => 'TbDataColumn', '#' => 'renderFilterCell-detail')); ?></td>
  <td>### .renderFilterCell()</td>
  <td><?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?></td>
</tr>
<tr class="inherited" id="renderFooterCell">
  <td><?php echo CHtml::link('renderFooterCell()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFooterCell-detail')); ?></td>
  <td>Renders the footer cell.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="renderHeaderCell">
  <td><?php echo CHtml::link('renderHeaderCell()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderHeaderCell-detail')); ?></td>
  <td>Renders the header cell.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
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
<tr id="getPrimaryKey">
  <td><?php echo CHtml::link('getPrimaryKey()', array('/site/doc', 'view' => 'TbRelationalColumn', '#' => 'getPrimaryKey-detail')); ?></td>
  <td>Helper function to return the primary key of the $data</td>
  <td>TbRelationalColumn</td>
</tr>
<tr class="inherited" id="renderDataCellContent">
  <td><?php echo CHtml::link('renderDataCellContent()', array('/site/doc', 'view' => 'CDataColumn', '#' => 'renderDataCellContent-detail')); ?></td>
  <td>Renders the data cell content.</td>
  <td><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
</tr>
<tr class="inherited" id="renderFilterCellContent">
  <td><?php echo CHtml::link('renderFilterCellContent()', array('/site/doc', 'view' => 'TbDataColumn', '#' => 'renderFilterCellContent-detail')); ?></td>
  <td>### .renderFilterCellContent()</td>
  <td><?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?></td>
</tr>
<tr class="inherited" id="renderFooterCellContent">
  <td><?php echo CHtml::link('renderFooterCellContent()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFooterCellContent-detail')); ?></td>
  <td>Renders the footer cell content.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="renderHeaderCellContent">
  <td><?php echo CHtml::link('renderHeaderCellContent()', array('/site/doc', 'view' => 'TbDataColumn', '#' => 'renderHeaderCellContent-detail')); ?></td>
  <td>### .renderHeaderCellContent()</td>
  <td><?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?></td>
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

<p>a javascript function that will be invoked if an AJAX call occurs.
<br/><br/>
The function signature is <code>function(tr, rowid, data)</code>
<ul>
<li><code>tr</code> is the newly created TR HTML object that will display the returned server data.</li>
<li><code>rowid</code> the model id of the row.</li>
<li><code>data</code> is the data returned by the server that is already displayed on the row.</li>
</ul>
Note: This handler is not called for JSONP requests.
<br/><br/>
Example (add in a call to TbRelationalColumn):
<pre>
 ...
 'afterAjaxUpdate'=&gt;'js:function(tr,rowid, data){ console.log(rowid); }',
 ...
</pre></p>


<div class="detailHeader" id="ajaxErrorMessage-detail">
ajaxErrorMessage<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$ajaxErrorMessage</b>;</div>

<p>$ajaxErrorMessage the message that is displayed on the newly created row in case there is an AJAX
error.</p>


<div class="detailHeader" id="cacheData-detail">
cacheData<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$cacheData</b>;</div>

<p>$cacheData if set to true, there won't be more than one AJAX request. If set to false, the widget will
continuously make AJAX requests. This is useful if the data could vary. If the data doesn't change then is better
to set it to true. Defaults to true.</p>


<div class="detailHeader" id="cssClass-detail">
cssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cssClass</b>;</div>

<p>$cssClass the class name that will wrap up the cell content.
Important Note: this class will be used as the trigger for the AJAX call, so make sure is unique for the
column.</p>


<div class="detailHeader" id="url-detail">
url<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$url</b>;</div>

<p>$url the route to call via AJAX to get the data from</p>


<h2>Method Details</h2>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbRelationalColumn.php#L114">booster/widgets/TbRelationalColumn.php#L114</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CActiveDataProvider</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyAttribute&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyAttribute</span><span style="color: #007700">};<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'--'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CArrayDataProvider&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CSqlDataProvider</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyField</span><span style="color: #007700">}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keyField</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Helper function to return the primary key of the $data
 * IMPORTANT: composite keys on CActiveDataProviders will return the keys joined by two dashes: `--`</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbRelationalColumn.php#L68">booster/widgets/TbRelationalColumn.php#L68</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">url</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">requestUri</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>widget initialization</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbRelationalColumn.php#L133">booster/widgets/TbRelationalColumn.php#L133</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerAssetCss</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap-relational.css'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;$cs&nbsp;CClientScript&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAjaxUpdate&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAjaxUpdate&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAjaxUpdate</span><span style="color: #007700">,</span><span style="color: #DD0000">'js:'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAjaxUpdate&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAjaxUpdate</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAjaxUpdate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'js:$.noop'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxErrorMessage&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxErrorMessage</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$afterAjaxUpdate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterAjaxUpdate</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$span&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$loadingPic&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAssetsUrl</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'/img/loading.gif'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheData&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'true'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'false'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">submitData</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">submitData</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">submitData&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'js:{}'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavascript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$parentId</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$js&nbsp;</span><span style="color: #007700">=&nbsp;&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">$(document).on('click','#</span><span style="color: #007700">{</span><span style="color: #0000BB">$parentId</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssClass</span><span style="color: #007700">}</span><span style="color: #DD0000">',&nbsp;function(){<br />var&nbsp;span&nbsp;=&nbsp;</span><span style="color: #0000BB">$span</span><span style="color: #DD0000">;<br />var&nbsp;that&nbsp;=&nbsp;$(this);<br />var&nbsp;status&nbsp;=&nbsp;that.data('status');<br />var&nbsp;rowid&nbsp;=&nbsp;that.data('rowid');<br />var&nbsp;tr&nbsp;=&nbsp;$('#relatedinfo'+rowid);<br />var&nbsp;parent&nbsp;=&nbsp;that.parents('tr').eq(0);<br />var&nbsp;afterAjaxUpdate&nbsp;=&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$afterAjaxUpdate</span><span style="color: #007700">}</span><span style="color: #DD0000">;<br /><br />if&nbsp;(status&nbsp;&amp;&amp;&nbsp;status=='on'){return}<br />that.data('status','on');<br /><br />if&nbsp;(tr.length&nbsp;&amp;&amp;&nbsp;!tr.is(':visible')&nbsp;&amp;&amp;&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$cache</span><span style="color: #007700">}</span><span style="color: #DD0000">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;tr.slideDown();<br />&nbsp;&nbsp;&nbsp;&nbsp;that.data('status','off');<br />&nbsp;&nbsp;&nbsp;&nbsp;return;<br />}else&nbsp;if&nbsp;(tr.length&nbsp;&amp;&amp;&nbsp;tr.is(':visible'))<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;tr.slideUp();<br />&nbsp;&nbsp;&nbsp;&nbsp;that.data('status','off');<br />&nbsp;&nbsp;&nbsp;&nbsp;return;<br />}<br />if&nbsp;(tr.length)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;tr.find('td').html('</span><span style="color: #007700">{</span><span style="color: #0000BB">$loadingPic</span><span style="color: #007700">}</span><span style="color: #DD0000">');<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!tr.is(':visible')){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tr.slideDown();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br />else<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;td&nbsp;=&nbsp;$('&lt;td/&gt;').html('</span><span style="color: #007700">{</span><span style="color: #0000BB">$loadingPic</span><span style="color: #007700">}</span><span style="color: #DD0000">').attr({'colspan':</span><span style="color: #0000BB">$span</span><span style="color: #DD0000">});<br />&nbsp;&nbsp;&nbsp;&nbsp;tr&nbsp;=&nbsp;$('&lt;tr/&gt;').prop({'id':'relatedinfo'+rowid}).append(td);<br />&nbsp;&nbsp;&nbsp;&nbsp;/*&nbsp;we&nbsp;need&nbsp;to&nbsp;maintain&nbsp;zebra&nbsp;styles&nbsp;:)&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;fake&nbsp;=&nbsp;$('&lt;tr&nbsp;class="hide"/&gt;').append($('&lt;td/&gt;').attr({'colspan':</span><span style="color: #0000BB">$span</span><span style="color: #DD0000">}));<br />&nbsp;&nbsp;&nbsp;&nbsp;parent.after(tr);<br />&nbsp;&nbsp;&nbsp;&nbsp;tr.after(fake);<br />}<br />var&nbsp;data&nbsp;=&nbsp;$.extend(</span><span style="color: #007700">{</span><span style="color: #0000BB">$data</span><span style="color: #007700">}</span><span style="color: #DD0000">,&nbsp;{id:rowid});<br />$.ajax({<br />&nbsp;&nbsp;&nbsp;&nbsp;url:&nbsp;'</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">url</span><span style="color: #007700">}</span><span style="color: #DD0000">',<br />&nbsp;&nbsp;&nbsp;&nbsp;data:&nbsp;data,<br />&nbsp;&nbsp;&nbsp;&nbsp;success:&nbsp;function(data){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tr.find('td').html(data);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that.data('status','off');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;($.isFunction(afterAjaxUpdate))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;afterAjaxUpdate(tr,rowid,data);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;},<br />&nbsp;&nbsp;&nbsp;&nbsp;error:&nbsp;function()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tr.find('td').html('</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ajaxErrorMessage</span><span style="color: #007700">}</span><span style="color: #DD0000">');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that.data('status','off');<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />});<br />});<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Register script that will handle its behavior</p>


<div class="detailHeader" id="renderDataCell-detail">
renderDataCell()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderDataCell</b>(int $row)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$row</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbRelationalColumn.php#L85">booster/widgets/TbRelationalColumn.php#L85</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssClassExpression&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssClassExpression</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'row'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'td'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'span'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssClass</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'data-rowid'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCellContent</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'span'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'td'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Overrides CDataColumn renderDataCell in order to wrap up its content with the object that will be used as a
trigger.
Important: Making use of links as a content for this of column is an error.</p>


