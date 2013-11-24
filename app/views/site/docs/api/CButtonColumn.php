<?php
$this->pageTitle = $this->pageHeading = 'CButtonColumn';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CButtonColumn';
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
  <td>class CButtonColumn &raquo;
<?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbButtonColumn', array('/site/doc', 'view' => 'TbButtonColumn')); ?>, <?php echo CHtml::link('TbGroupButtonColumn', array('/site/doc', 'view' => 'TbGroupButtonColumn')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\zii\widgets\grid\CButtonColumn.php">yii\zii\widgets\grid\CButtonColumn.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CButtonColumn represents a grid view column that renders one or several buttons.
<br/><br/>
By default, it will display three buttons, "view", "update" and "delete", which triggers the corresponding
actions on the model of the row.
<br/><br/>
By configuring <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'buttons')); ?> and <?php echo CHtml::link('template', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'template')); ?> properties, the column can display other buttons
and customize the display order of the buttons.</div>
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
<tr id="afterDelete">
  <td><?php echo CHtml::link('afterDelete', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'afterDelete-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after the delete ajax call.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="buttons">
  <td><?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'buttons-detail')); ?></td>
  <td>array</td>
  <td>the configuration for buttons.</td>
  <td>CButtonColumn</td>
</tr>
<tr class="inherited" id="cssClassExpression">
  <td><?php echo CHtml::link('cssClassExpression', array('/site/doc', 'view' => 'CGridColumn', '#' => 'cssClassExpression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every data cell and whose result
is used as the CSS class name for the data cell.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr id="deleteButtonImageUrl">
  <td><?php echo CHtml::link('deleteButtonImageUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteButtonImageUrl-detail')); ?></td>
  <td>string</td>
  <td>the image URL for the delete button.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="deleteButtonLabel">
  <td><?php echo CHtml::link('deleteButtonLabel', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteButtonLabel-detail')); ?></td>
  <td>string</td>
  <td>the label for the delete button.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="deleteButtonOptions">
  <td><?php echo CHtml::link('deleteButtonOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteButtonOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the delete button tag.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="deleteButtonUrl">
  <td><?php echo CHtml::link('deleteButtonUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteButtonUrl-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every delete button and whose result is used
as the URL for the delete button.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="deleteConfirmation">
  <td><?php echo CHtml::link('deleteConfirmation', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteConfirmation-detail')); ?></td>
  <td>string</td>
  <td>the confirmation message to be displayed when delete button is clicked.</td>
  <td>CButtonColumn</td>
</tr>
<tr class="inherited" id="filterHtmlOptions">
  <td><?php echo CHtml::link('filterHtmlOptions', array('/site/doc', 'view' => 'CGridColumn', '#' => 'filterHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the filter cell tag.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="footer">
  <td><?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CGridColumn', '#' => 'footer-detail')); ?></td>
  <td>string</td>
  <td>the footer cell text.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr id="footerHtmlOptions">
  <td><?php echo CHtml::link('footerHtmlOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'footerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the footer cell tag.</td>
  <td>CButtonColumn</td>
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
  <td><?php echo CHtml::link('headerHtmlOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'headerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the header cell tag.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the data cell tags.</td>
  <td>CButtonColumn</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CGridColumn', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>the ID of this column.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr id="template">
  <td><?php echo CHtml::link('template', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'template-detail')); ?></td>
  <td>string</td>
  <td>the template that is used to render the content in each data cell.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="updateButtonImageUrl">
  <td><?php echo CHtml::link('updateButtonImageUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'updateButtonImageUrl-detail')); ?></td>
  <td>string</td>
  <td>the image URL for the update button.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="updateButtonLabel">
  <td><?php echo CHtml::link('updateButtonLabel', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'updateButtonLabel-detail')); ?></td>
  <td>string</td>
  <td>the label for the update button.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="updateButtonOptions">
  <td><?php echo CHtml::link('updateButtonOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'updateButtonOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the update button tag.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="updateButtonUrl">
  <td><?php echo CHtml::link('updateButtonUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'updateButtonUrl-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every update button and whose result is used
as the URL for the update button.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="viewButtonImageUrl">
  <td><?php echo CHtml::link('viewButtonImageUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'viewButtonImageUrl-detail')); ?></td>
  <td>string</td>
  <td>the image URL for the view button.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="viewButtonLabel">
  <td><?php echo CHtml::link('viewButtonLabel', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'viewButtonLabel-detail')); ?></td>
  <td>string</td>
  <td>the label for the view button.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="viewButtonOptions">
  <td><?php echo CHtml::link('viewButtonOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'viewButtonOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the view button tag.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="viewButtonUrl">
  <td><?php echo CHtml::link('viewButtonUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'viewButtonUrl-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every view button and whose result is used
as the URL for the view button.</td>
  <td>CButtonColumn</td>
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
This is determined based on whether <?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'footer')); ?> is set.</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'init-detail')); ?></td>
  <td>Initializes the column.</td>
  <td>CButtonColumn</td>
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
  <td><?php echo CHtml::link('renderFilterCell()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFilterCell-detail')); ?></td>
  <td>Renders the filter cell.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
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
<tr id="initDefaultButtons">
  <td><?php echo CHtml::link('initDefaultButtons()', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'initDefaultButtons-detail')); ?></td>
  <td>Initializes the default buttons (view, update and delete).</td>
  <td>CButtonColumn</td>
</tr>
<tr id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers the client scripts for the button column.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="renderButton">
  <td><?php echo CHtml::link('renderButton()', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'renderButton-detail')); ?></td>
  <td>Renders a link button.</td>
  <td>CButtonColumn</td>
</tr>
<tr id="renderDataCellContent">
  <td><?php echo CHtml::link('renderDataCellContent()', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'renderDataCellContent-detail')); ?></td>
  <td>Renders the data cell content.</td>
  <td>CButtonColumn</td>
</tr>
<tr class="inherited" id="renderFilterCellContent">
  <td><?php echo CHtml::link('renderFilterCellContent()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFilterCellContent-detail')); ?></td>
  <td>Renders the filter cell content.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="renderFooterCellContent">
  <td><?php echo CHtml::link('renderFooterCellContent()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFooterCellContent-detail')); ?></td>
  <td>Renders the footer cell content.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="renderHeaderCellContent">
  <td><?php echo CHtml::link('renderHeaderCellContent()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderHeaderCellContent-detail')); ?></td>
  <td>Renders the header cell content.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="afterDelete-detail">
afterDelete<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$afterDelete</b>;</div>

<p>a javascript function that will be invoked after the delete ajax call.
This property is used only if <code>$this->buttons['delete']['click']</code> is not set.
<br/><br/>
The function signature is <code>function(link, success, data)</code>
<ul>
<li><code>link</code> references the delete link.</li>
<li><code>success</code> status of the ajax call, true if the ajax call was successful, false if the ajax call failed.
<li><code>data</code> the data returned by the server in case of a successful call or XHR object in case of error.
</ul>
Note that if success is true it does not mean that the delete was successful, it only means that the ajax call was successful.
<br/><br/>
Example:
<pre>
 array(
    class'=&gt;'CButtonColumn',
    'afterDelete'=&gt;'function(link,success,data){ if(success) alert(&quot;Delete completed successfuly&quot;); }',
 ),
</pre></p>


<div class="detailHeader" id="buttons-detail">
buttons<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$buttons</b>;</div>

<p>the configuration for buttons. Each array element specifies a single button
which has the following format:
<pre>
'buttonID' =&gt; array(
    'label'=&gt;'...',     // text label of the button
    'url'=&gt;'...',       // a PHP expression for generating the URL of the button
    'imageUrl'=&gt;'...',  // image URL of the button. If not set or false, a text link is used
    'options'=&gt;array(...), // HTML options for the button tag
    'click'=&gt;'...',     // a JS function to be invoked when the button is clicked
    'visible'=&gt;'...',   // a PHP expression for determining whether the button is visible
)
</pre>
<br/><br/>
In the PHP expression for the 'url' option and/or 'visible' option, the variable <code>$row</code>
refers to the current row number (zero-based), and <code>$data</code> refers to the data model for
the row.
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'evaluateExpression')); ?>.
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.
<br/><br/>
If the 'buttonID' is 'view', 'update' or 'delete' the options will be applied to the default buttons.
<br/><br/>
Note that in order to display non-default buttons, the <?php echo CHtml::link('template', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'template')); ?> property needs to
be configured so that the corresponding button IDs appear as tokens in the template.</p>


<div class="detailHeader" id="deleteButtonImageUrl-detail">
deleteButtonImageUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$deleteButtonImageUrl</b>;</div>

<p>the image URL for the delete button. If not set, an integrated image will be used.
You may set this property to be false to render a text link instead.</p>


<div class="detailHeader" id="deleteButtonLabel-detail">
deleteButtonLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$deleteButtonLabel</b>;</div>

<p>the label for the delete button. Defaults to "Delete".
Note that the label will not be HTML-encoded when rendering.</p>


<div class="detailHeader" id="deleteButtonOptions-detail">
deleteButtonOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$deleteButtonOptions</b>;</div>

<p>the HTML options for the delete button tag.</p>


<div class="detailHeader" id="deleteButtonUrl-detail">
deleteButtonUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$deleteButtonUrl</b>;</div>

<p>a PHP expression that is evaluated for every delete button and whose result is used
as the URL for the delete button. In this expression, you can use the following variables:
<ul>
  <li><code>$row</code> the row number (zero-based)</li>
  <li><code>$data</code> the data model for the row</li>
  <li><code>$this</code> the column object</li>
</ul>
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'evaluateExpression')); ?>.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>


<div class="detailHeader" id="deleteConfirmation-detail">
deleteConfirmation<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$deleteConfirmation</b>;</div>

<p>the confirmation message to be displayed when delete button is clicked.
By setting this property to be false, no confirmation message will be displayed.
This property is used only if <code>$this->buttons['delete']['click']</code> is not set.</p>


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


<div class="detailHeader" id="template-detail">
template<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$template</b>;</div>

<p>the template that is used to render the content in each data cell.
These default tokens are recognized: {view}, {update} and {delete}. If the <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'buttons')); ?> property
defines additional buttons, their IDs are also recognized here. For example, if a button named 'preview'
is declared in <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'buttons')); ?>, we can use the token '{preview}' here to specify where to display the button.</p>


<div class="detailHeader" id="updateButtonImageUrl-detail">
updateButtonImageUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$updateButtonImageUrl</b>;</div>

<p>the image URL for the update button. If not set, an integrated image will be used.
You may set this property to be false to render a text link instead.</p>


<div class="detailHeader" id="updateButtonLabel-detail">
updateButtonLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$updateButtonLabel</b>;</div>

<p>the label for the update button. Defaults to "Update".
Note that the label will not be HTML-encoded when rendering.</p>


<div class="detailHeader" id="updateButtonOptions-detail">
updateButtonOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$updateButtonOptions</b>;</div>

<p>the HTML options for the update button tag.</p>


<div class="detailHeader" id="updateButtonUrl-detail">
updateButtonUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$updateButtonUrl</b>;</div>

<p>a PHP expression that is evaluated for every update button and whose result is used
as the URL for the update button. In this expression, you can use the following variables:
<ul>
  <li><code>$row</code> the row number (zero-based)</li>
  <li><code>$data</code> the data model for the row</li>
  <li><code>$this</code> the column object</li>
</ul>
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'evaluateExpression')); ?>.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>


<div class="detailHeader" id="viewButtonImageUrl-detail">
viewButtonImageUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$viewButtonImageUrl</b>;</div>

<p>the image URL for the view button. If not set, an integrated image will be used.
You may set this property to be false to render a text link instead.</p>


<div class="detailHeader" id="viewButtonLabel-detail">
viewButtonLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$viewButtonLabel</b>;</div>

<p>the label for the view button. Defaults to "View".
Note that the label will not be HTML-encoded when rendering.</p>


<div class="detailHeader" id="viewButtonOptions-detail">
viewButtonOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$viewButtonOptions</b>;</div>

<p>the HTML options for the view button tag.</p>


<div class="detailHeader" id="viewButtonUrl-detail">
viewButtonUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$viewButtonUrl</b>;</div>

<p>a PHP expression that is evaluated for every view button and whose result is used
as the URL for the view button. In this expression, you can use the following variables:
<ul>
  <li><code>$row</code> the row number (zero-based)</li>
  <li><code>$data</code> the data model for the row</li>
  <li><code>$this</code> the column object</li>
</ul>
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'evaluateExpression')); ?>.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\zii\widgets\grid\CButtonColumn.php#L192">yii\zii\widgets\grid\CButtonColumn.php#L192</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initDefaultButtons</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$button</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">template</span><span style="color: #007700">,</span><span style="color: #DD0000">'{'</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'}'</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">][</span><span style="color: #DD0000">'options'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">][</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the column.
This method registers necessary client script for the button column.</p>


<div class="detailHeader" id="initDefaultButtons-detail">
initDefaultButtons()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>initDefaultButtons</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\zii\widgets\grid\CButtonColumn.php#L215">yii\zii\widgets\grid\CButtonColumn.php#L215</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initDefaultButtons</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">viewButtonLabel</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">viewButtonLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'View'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateButtonLabel</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateButtonLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Update'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteButtonLabel</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteButtonLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Delete'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">viewButtonImageUrl</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">viewButtonImageUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseScriptUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'/view.png'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateButtonImageUrl</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateButtonImageUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseScriptUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'/update.png'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteButtonImageUrl</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteButtonImageUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseScriptUrl</span><span style="color: #007700">.</span><span style="color: #DD0000">'/delete.png'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteConfirmation</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteConfirmation</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'zii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Are&nbsp;you&nbsp;sure&nbsp;you&nbsp;want&nbsp;to&nbsp;delete&nbsp;this&nbsp;item?'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(array(</span><span style="color: #DD0000">'view'</span><span style="color: #007700">,</span><span style="color: #DD0000">'update'</span><span style="color: #007700">,</span><span style="color: #DD0000">'delete'</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'ButtonLabel'</span><span style="color: #007700">},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'url'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'ButtonUrl'</span><span style="color: #007700">},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imageUrl'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'ButtonImageUrl'</span><span style="color: #007700">},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'ButtonOptions'</span><span style="color: #007700">},<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]=</span><span style="color: #0000BB">$button</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #DD0000">'delete'</span><span style="color: #007700">][</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteConfirmation</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$confirmation</span><span style="color: #007700">=</span><span style="color: #DD0000">"if(!confirm("</span><span style="color: #007700">.</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteConfirmation</span><span style="color: #007700">).</span><span style="color: #DD0000">"))&nbsp;return&nbsp;false;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$confirmation</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableCsrfValidation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrfTokenName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrfToken&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfToken</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrf&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"\n\t\tdata:{&nbsp;'</span><span style="color: #0000BB">$csrfTokenName</span><span style="color: #DD0000">':'</span><span style="color: #0000BB">$csrfToken</span><span style="color: #DD0000">'&nbsp;},"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$csrf&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterDelete</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterDelete</span><span style="color: #007700">=</span><span style="color: #DD0000">'function(){}'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #DD0000">'delete'</span><span style="color: #007700">][</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">function()&nbsp;{<br /></span><span style="color: #0000BB">$confirmation</span><span style="color: #DD0000"><br />var&nbsp;th&nbsp;=&nbsp;this,<br />&nbsp;&nbsp;&nbsp;&nbsp;afterDelete&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterDelete</span><span style="color: #DD0000">;<br />jQuery('#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">').yiiGridView('update',&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;type:&nbsp;'POST',<br />&nbsp;&nbsp;&nbsp;&nbsp;url:&nbsp;jQuery(this).attr('href'),</span><span style="color: #0000BB">$csrf</span><span style="color: #DD0000"><br />&nbsp;&nbsp;&nbsp;&nbsp;success:&nbsp;function(data)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jQuery('#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">').yiiGridView('update');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;afterDelete(th,&nbsp;true,&nbsp;data);<br />&nbsp;&nbsp;&nbsp;&nbsp;},<br />&nbsp;&nbsp;&nbsp;&nbsp;error:&nbsp;function(XHR)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;afterDelete(th,&nbsp;false,&nbsp;XHR);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />});<br />return&nbsp;false;<br />}<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the default buttons (view, update and delete).</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\zii\widgets\grid\CButtonColumn.php#L290">yii\zii\widgets\grid\CButtonColumn.php#L290</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">registerClientScript</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$button</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$function</span><span style="color: #007700">=</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s+/'</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">[]=</span><span style="color: #DD0000">"jQuery(document).on('click','#</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;a.</span><span style="color: #007700">{</span><span style="color: #0000BB">$class</span><span style="color: #007700">}</span><span style="color: #DD0000">',</span><span style="color: #0000BB">$function</span><span style="color: #DD0000">);"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$js</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">.</span><span style="color: #DD0000">'#'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$js</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Registers the client scripts for the button column.</p>


<div class="detailHeader" id="renderButton-detail">
renderButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderButton</b>(string $id, array $button, integer $row, mixed $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the ID of the button</td>
</tr>
<tr>
  <td class="paramNameCol">$button</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the button configuration which may contain 'label', 'url', 'imageUrl' and 'options' elements.
See <?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'buttons')); ?> for more details.</td>
</tr>
<tr>
  <td class="paramNameCol">$row</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the row number (zero-based)</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the data object associated with the row</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\zii\widgets\grid\CButtonColumn.php#L335">yii\zii\widgets\grid\CButtonColumn.php#L335</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$button</span><span style="color: #007700">,</span><span style="color: #0000BB">$row</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'visible'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'visible'</span><span style="color: #007700">],array(</span><span style="color: #DD0000">'row'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$row</span><span style="color: #007700">,</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">],array(</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #DD0000">'row'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$row</span><span style="color: #007700">))&nbsp;:&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">]&nbsp;:&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'title'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'title'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$label</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'imageUrl'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'imageUrl'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #0000BB">$button</span><span style="color: #007700">[</span><span style="color: #DD0000">'imageUrl'</span><span style="color: #007700">],</span><span style="color: #0000BB">$label</span><span style="color: #007700">),</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a link button.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\zii\widgets\grid\CButtonColumn.php#L313">yii\zii\widgets\grid\CButtonColumn.php#L313</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderDataCellContent</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tr</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$button</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$button</span><span style="color: #007700">,</span><span style="color: #0000BB">$row</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tr</span><span style="color: #007700">[</span><span style="color: #DD0000">'{'</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">.</span><span style="color: #DD0000">'}'</span><span style="color: #007700">]=</span><span style="color: #0000BB">ob_get_contents</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">template</span><span style="color: #007700">,</span><span style="color: #0000BB">$tr</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders the data cell content.
This method renders the view, update and delete buttons in the data cell.</p>


