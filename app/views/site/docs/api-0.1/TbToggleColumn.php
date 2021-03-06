<?php
$this->pageTitle = $this->pageHeading = 'TbToggleColumn';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbToggleColumn';
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
  <td>class TbToggleColumn &raquo;
<?php echo CHtml::link('TbDataColumn', array('/site/doc', 'view' => 'TbDataColumn')); ?> &raquo;
<?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?> &raquo;
<?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbJsonToggleColumn', array('/site/doc', 'view' => 'TbJsonToggleColumn')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbToggleColumn.php">booster/widgets/TbToggleColumn.php</a></td>
</tr>
</table>

<div id="classDescription">
## TbToggleColumn widget
<br/><br/>
Renders a button to toggle values of a column
<br/><br/>
Modified version of jToggle column of Nikola Trifunović <http://www.trifunovic.me/></div>
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
<tr id="afterToggle">
  <td><?php echo CHtml::link('afterToggle', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'afterToggle-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after the toggle ajax call.</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="checkedButtonLabel">
  <td><?php echo CHtml::link('checkedButtonLabel', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'checkedButtonLabel-detail')); ?></td>
  <td>string</td>
  <td>the label for the toggle button.</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="checkedIcon">
  <td><?php echo CHtml::link('checkedIcon', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'checkedIcon-detail')); ?></td>
  <td>string</td>
  <td>the glyph icon toggle button "checked" state.</td>
  <td>TbToggleColumn</td>
</tr>
<tr class="inherited" id="cssClassExpression">
  <td><?php echo CHtml::link('cssClassExpression', array('/site/doc', 'view' => 'CGridColumn', '#' => 'cssClassExpression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every data cell and whose result
is used as the CSS class name for the data cell.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr id="displayText">
  <td><?php echo CHtml::link('displayText', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'displayText-detail')); ?></td>
  <td>boolean</td>
  <td>display button with text or only icon with label tooltip</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="emptyButtonLabel">
  <td><?php echo CHtml::link('emptyButtonLabel', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'emptyButtonLabel-detail')); ?></td>
  <td>string</td>
  <td>the label for the NULL value toggle button.</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="emptyIcon">
  <td><?php echo CHtml::link('emptyIcon', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'emptyIcon-detail')); ?></td>
  <td>string</td>
  <td>the glyph icon toggle button "empty" state (example for null value)</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="filter">
  <td><?php echo CHtml::link('filter', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'filter-detail')); ?></td>
  <td>mixed</td>
  <td>the HTML code representing a filter input (eg a text field, a dropdown list)
that is used for this data column.</td>
  <td>TbToggleColumn</td>
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
<tr id="footerHtmlOptions">
  <td><?php echo CHtml::link('footerHtmlOptions', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'footerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the footer cell tag.</td>
  <td>TbToggleColumn</td>
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
<tr id="headerHtmlOptions">
  <td><?php echo CHtml::link('headerHtmlOptions', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'headerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the header cell tag.</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the data cell tags.</td>
  <td>TbToggleColumn</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CGridColumn', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>the ID of this column.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>the attribute name of the data model.</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="sortable">
  <td><?php echo CHtml::link('sortable', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'sortable-detail')); ?></td>
  <td>boolean</td>
  <td>whether the column is sortable.</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="toggleAction">
  <td><?php echo CHtml::link('toggleAction', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'toggleAction-detail')); ?></td>
  <td>string</td>
  <td>Name of the action to call and toggle values</td>
  <td>TbToggleColumn</td>
</tr>
<tr class="inherited" id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'CDataColumn', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>the type of the attribute value.</td>
  <td><?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?></td>
</tr>
<tr id="uncheckedButtonLabel">
  <td><?php echo CHtml::link('uncheckedButtonLabel', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'uncheckedButtonLabel-detail')); ?></td>
  <td>string</td>
  <td>the label for the toggle button.</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="uncheckedIcon">
  <td><?php echo CHtml::link('uncheckedIcon', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'uncheckedIcon-detail')); ?></td>
  <td>string</td>
  <td>the glyph icon toggle button "unchecked" state.</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="uniqueClassSuffix">
  <td><?php echo CHtml::link('uniqueClassSuffix', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'uniqueClassSuffix-detail')); ?></td>
  <td>string</td>
  <td>suffix substituted to a name class of the tag <a></td>
  <td>TbToggleColumn</td>
</tr>
<tr id="value">
  <td><?php echo CHtml::link('value', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'value-detail')); ?></td>
  <td></td>
  <td></td>
  <td>TbToggleColumn</td>
</tr>
<tr class="inherited" id="visible">
  <td><?php echo CHtml::link('visible', array('/site/doc', 'view' => 'CGridColumn', '#' => 'visible-detail')); ?></td>
  <td>boolean</td>
  <td>whether this column is visible.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
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
<tr id="button">
  <td><?php echo CHtml::link('button', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'button-detail')); ?></td>
  <td>array</td>
  <td>the configuration for toggle button.</td>
  <td>TbToggleColumn</td>
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
This is determined based on whether <?php echo CHtml::link('footer', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'footer')); ?> is set.</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'init-detail')); ?></td>
  <td>Initializes the column.</td>
  <td>TbToggleColumn</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="renderDataCell">
  <td><?php echo CHtml::link('renderDataCell()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderDataCell-detail')); ?></td>
  <td>Renders a data cell.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
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
<tr id="initButton">
  <td><?php echo CHtml::link('initButton()', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'initButton-detail')); ?></td>
  <td>Initializes the default buttons (toggle).</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers the client scripts for the button column.</td>
  <td>TbToggleColumn</td>
</tr>
<tr id="renderDataCellContent">
  <td><?php echo CHtml::link('renderDataCellContent()', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'renderDataCellContent-detail')); ?></td>
  <td>Renders the data cell content.</td>
  <td>TbToggleColumn</td>
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
<div class="detailHeader" id="afterToggle-detail">
afterToggle<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$afterToggle</b>;</div>

<p>a javascript function that will be invoked after the toggle ajax call.
<br/><br/>
The function signature is <code>function(data)</code>
<ul>
<li><code>success</code> status of the ajax call, true if the ajax call was successful, false if the ajax call failed.
<li><code>data</code> the data returned by the server in case of a successful call or XHR object in case of error.
</ul>
Note that if success is true it does not mean that the delete was successful, it only means that the ajax call was successful.
<br/><br/>
Example:
<pre>
 array(
    class'=&gt;'TbToggleColumn',
    'afterToggle'=&gt;'function(success,data){ if (success) alert(&quot;Toggled successfuly&quot;); }',
 ),
</pre></p>


<div class="detailHeader" id="button-detail">
button<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$button</b>;</div>

<p>the configuration for toggle button.</p>


<div class="detailHeader" id="checkedButtonLabel-detail">
checkedButtonLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$checkedButtonLabel</b>;</div>

<p>the label for the toggle button. Defaults to "Check".
Note that the label will not be HTML-encoded when rendering.</p>


<div class="detailHeader" id="checkedIcon-detail">
checkedIcon<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$checkedIcon</b>;</div>

<p>the glyph icon toggle button "checked" state.
You may set this property to be false to render a text link instead.</p>


<div class="detailHeader" id="displayText-detail">
displayText<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$displayText</b>;</div>

<p>display button with text or only icon with label tooltip</p>


<div class="detailHeader" id="emptyButtonLabel-detail">
emptyButtonLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$emptyButtonLabel</b>;</div>

<p>the label for the NULL value toggle button. Defaults to "Not Set".
Note that the label will not be HTML-encoded when rendering.</p>


<div class="detailHeader" id="emptyIcon-detail">
emptyIcon<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$emptyIcon</b>;</div>

<p>the glyph icon toggle button "empty" state (example for null value)</p>


<div class="detailHeader" id="filter-detail">
filter<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public mixed <b>$filter</b>;</div>

<p>the HTML code representing a filter input (eg a text field, a dropdown list)
that is used for this data column. This property is effective only when
<?php echo CHtml::link('CGridView::filter', array('/site/doc', 'view' => 'CGridView', '#' => 'filter')); ?> is set.
If this property is not set, a text field will be generated as the filter input;
If this property is an array, a dropdown list will be generated that uses this property value as
the list options.
If you don't want a filter for this data column, set this value to false.</p>


<div class="detailHeader" id="footerHtmlOptions-detail">
footerHtmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$footerHtmlOptions</b>;</div>

<p>the HTML options for the footer cell tag.</p>


<div class="detailHeader" id="headerHtmlOptions-detail">
headerHtmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$headerHtmlOptions</b>;</div>

<p>the HTML options for the header cell tag.</p>


<div class="detailHeader" id="htmlOptions-detail">
htmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$htmlOptions</b>;</div>

<p>the HTML options for the data cell tags.</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$name</b>;</div>

<p>the attribute name of the data model. Used for column sorting, filtering and to render the corresponding
attribute value in each data cell. If <?php echo CHtml::link('value', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'value')); ?> is specified it will be used to rendered the data cell instead of the attribute value.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('value', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'value')); ?></li>
	<li><?php echo CHtml::link('sortable', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'sortable')); ?></li>
</ul>
</div>

<div class="detailHeader" id="sortable-detail">
sortable<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$sortable</b>;</div>

<p>whether the column is sortable. If so, the header cell will contain a link that may trigger the sorting.
Defaults to true. Note that if <?php echo CHtml::link('name', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'name')); ?> is not set, or if <?php echo CHtml::link('name', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'name')); ?> is not allowed by <?php echo CHtml::link('CSort', array('/site/doc', 'view' => 'CSort')); ?>,
this property will be treated as false.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('name', array('/site/doc', 'view' => 'TbToggleColumn', '#' => 'name')); ?></li>
</ul>
</div>

<div class="detailHeader" id="toggleAction-detail">
toggleAction<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$toggleAction</b>;</div>

<p>Name of the action to call and toggle values</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>for an easy way to use with your controller</li>
</ul>
</div>

<div class="detailHeader" id="uncheckedButtonLabel-detail">
uncheckedButtonLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$uncheckedButtonLabel</b>;</div>

<p>the label for the toggle button. Defaults to "Uncheck".
Note that the label will not be HTML-encoded when rendering.</p>


<div class="detailHeader" id="uncheckedIcon-detail">
uncheckedIcon<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$uncheckedIcon</b>;</div>

<p>the glyph icon toggle button "unchecked" state.
You may set this property to be false to render a text link instead.</p>


<div class="detailHeader" id="uniqueClassSuffix-detail">
uniqueClassSuffix<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$uniqueClassSuffix</b>;</div>

<p>suffix substituted to a name class of the tag <a></p>


<div class="detailHeader" id="value-detail">
value<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$value</b>;</div>

<p></p>


<h2>Method Details</h2>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbToggleColumn.php#L145">booster/widgets/TbToggleColumn.php#L145</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'"{attribute}"&nbsp;attribute&nbsp;cannot&nbsp;be&nbsp;empty.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{attribute}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"name"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initButton</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the column.
This method registers necessary client script for the button column.</p>


<div class="detailHeader" id="initButton-detail">
initButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>initButton</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbToggleColumn.php#L162">booster/widgets/TbToggleColumn.php#L162</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initButton</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkedButtonLabel&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkedButtonLabel&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Uncheck'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">uncheckedButtonLabel&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">uncheckedButtonLabel&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Check'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">emptyButtonLabel&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">emptyButtonLabel&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Not&nbsp;set'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">button&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'url'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Yii::app()-&gt;controller-&gt;createUrl("'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toggleAction&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'",array("id"=&gt;$data-&gt;primaryKey,"attribute"=&gt;"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'"))'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'_toggle'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">uniqueClassSuffix</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableCsrfValidation</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrfTokenName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrfToken&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfToken</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrf&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"\n\t\tdata:{&nbsp;'</span><span style="color: #0000BB">$csrfTokenName</span><span style="color: #DD0000">':'</span><span style="color: #0000BB">$csrfToken</span><span style="color: #DD0000">'&nbsp;},"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrf&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterToggle&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterToggle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'function(){}'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">button</span><span style="color: #007700">[</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"js:<br />function()&nbsp;{<br />var&nbsp;th=this;<br />var&nbsp;afterToggle=</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterToggle</span><span style="color: #007700">}</span><span style="color: #DD0000">;<br />$.fn.yiiGridView.update('</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">',&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;type:'POST',<br />&nbsp;&nbsp;&nbsp;&nbsp;url:$(this).attr('href'),</span><span style="color: #007700">{</span><span style="color: #0000BB">$csrf</span><span style="color: #007700">}</span><span style="color: #DD0000"><br />&nbsp;&nbsp;&nbsp;&nbsp;success:function(data)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$.fn.yiiGridView.update('</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;afterToggle(true,&nbsp;data);<br />&nbsp;&nbsp;&nbsp;&nbsp;},<br />&nbsp;&nbsp;&nbsp;&nbsp;error:function(XHR){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;afterToggle(false,XHR);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />});<br />return&nbsp;false;<br />}"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the default buttons (toggle).</p>


<div class="detailHeader" id="registerClientScript-detail">
registerClientScript()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>registerClientScript</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbToggleColumn.php#L213">booster/widgets/TbToggleColumn.php#L213</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$js&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$function&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">button</span><span style="color: #007700">[</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">button</span><span style="color: #007700">[</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s+/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">button</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"$(document).on('click','#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;a.</span><span style="color: #007700">{</span><span style="color: #0000BB">$class</span><span style="color: #007700">}</span><span style="color: #DD0000">',</span><span style="color: #0000BB">$function</span><span style="color: #DD0000">);"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$js&nbsp;</span><span style="color: #007700">!==&nbsp;array())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Registers the client scripts for the button column.</p>


<div class="detailHeader" id="renderDataCellContent-detail">
renderDataCellContent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderDataCellContent</b>(integer $row, mixed $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$row</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the row number (zero-based)</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the data associated with the row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbToggleColumn.php#L234">booster/widgets/TbToggleColumn.php#L234</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderDataCellContent</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checked&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">value</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'row'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">button</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$checked&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">emptyIcon&nbsp;</span><span style="color: #007700">:&nbsp;(</span><span style="color: #0000BB">$checked&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkedIcon&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">uncheckedIcon</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]&nbsp;=&nbsp;isset(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'row'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;:&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayText</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'title'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getButtonLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$checked</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'rel'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'tooltip'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;i&nbsp;class="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&gt;&lt;/i&gt;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getButtonLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$checked</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'bootstrap.widgets.TbButton'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the data cell content.
This method renders the view, update and toggle buttons in the data cell.</p>


