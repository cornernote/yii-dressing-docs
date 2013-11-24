<?php
$this->pageTitle = $this->pageHeading = 'TbJsonButtonColumn';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbJsonButtonColumn';
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
  <td><?php echo CHtml::link('booster.widgets.grids.columns.json', array('/site/doc', '#' => 'booster.widgets.grids.columns.json')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbJsonButtonColumn &raquo;
<?php echo CHtml::link('TbButtonColumn', array('/site/doc', 'view' => 'TbButtonColumn')); ?> &raquo;
<?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?> &raquo;
<?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbJsonButtonColumn.php">booster/widgets/TbJsonButtonColumn.php</a></td>
</tr>
</table>

<div id="classDescription">
## JsonButtomColumn widget
<br/><br/>
Works in conjunction with TbJsonGridView. Renders HTML or returns JSON according to the request to the Grid.</div>
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
<tr class="inherited" id="afterDelete">
  <td><?php echo CHtml::link('afterDelete', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'afterDelete-detail')); ?></td>
  <td>string</td>
  <td>a javascript function that will be invoked after the delete ajax call.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="buttons">
  <td><?php echo CHtml::link('buttons', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'buttons-detail')); ?></td>
  <td>array</td>
  <td>the configuration for buttons.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="cssClassExpression">
  <td><?php echo CHtml::link('cssClassExpression', array('/site/doc', 'view' => 'CGridColumn', '#' => 'cssClassExpression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every data cell and whose result
is used as the CSS class name for the data cell.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="deleteButtonIcon">
  <td><?php echo CHtml::link('deleteButtonIcon', array('/site/doc', 'view' => 'TbButtonColumn', '#' => 'deleteButtonIcon-detail')); ?></td>
  <td>string</td>
  <td>the delete button icon (defaults to 'trash').</td>
  <td><?php echo CHtml::link('TbButtonColumn', array('/site/doc', 'view' => 'TbButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="deleteButtonImageUrl">
  <td><?php echo CHtml::link('deleteButtonImageUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteButtonImageUrl-detail')); ?></td>
  <td>string</td>
  <td>the image URL for the delete button.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="deleteButtonLabel">
  <td><?php echo CHtml::link('deleteButtonLabel', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteButtonLabel-detail')); ?></td>
  <td>string</td>
  <td>the label for the delete button.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="deleteButtonOptions">
  <td><?php echo CHtml::link('deleteButtonOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteButtonOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the delete button tag.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="deleteButtonUrl">
  <td><?php echo CHtml::link('deleteButtonUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteButtonUrl-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every delete button and whose result is used
as the URL for the delete button.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="deleteConfirmation">
  <td><?php echo CHtml::link('deleteConfirmation', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'deleteConfirmation-detail')); ?></td>
  <td>string</td>
  <td>the confirmation message to be displayed when delete button is clicked.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
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
<tr class="inherited" id="footerHtmlOptions">
  <td><?php echo CHtml::link('footerHtmlOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'footerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the footer cell tag.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr id="grid">
  <td><?php echo CHtml::link('grid', array('/site/doc', 'view' => 'TbJsonButtonColumn', '#' => 'grid-detail')); ?></td>
  <td><?php echo CHtml::link('TbJsonGridView', array('/site/doc', 'view' => 'TbJsonGridView')); ?></td>
  <td></td>
  <td>TbJsonButtonColumn</td>
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
  <td><?php echo CHtml::link('headerHtmlOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'headerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the header cell tag.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the data cell tags.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CGridColumn', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>the ID of this column.</td>
  <td><?php echo CHtml::link('CGridColumn', array('/site/doc', 'view' => 'CGridColumn')); ?></td>
</tr>
<tr class="inherited" id="template">
  <td><?php echo CHtml::link('template', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'template-detail')); ?></td>
  <td>string</td>
  <td>the template that is used to render the content in each data cell.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="updateButtonIcon">
  <td><?php echo CHtml::link('updateButtonIcon', array('/site/doc', 'view' => 'TbButtonColumn', '#' => 'updateButtonIcon-detail')); ?></td>
  <td>string</td>
  <td>the update button icon (defaults to 'pencil').</td>
  <td><?php echo CHtml::link('TbButtonColumn', array('/site/doc', 'view' => 'TbButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="updateButtonImageUrl">
  <td><?php echo CHtml::link('updateButtonImageUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'updateButtonImageUrl-detail')); ?></td>
  <td>string</td>
  <td>the image URL for the update button.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="updateButtonLabel">
  <td><?php echo CHtml::link('updateButtonLabel', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'updateButtonLabel-detail')); ?></td>
  <td>string</td>
  <td>the label for the update button.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="updateButtonOptions">
  <td><?php echo CHtml::link('updateButtonOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'updateButtonOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the update button tag.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="updateButtonUrl">
  <td><?php echo CHtml::link('updateButtonUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'updateButtonUrl-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every update button and whose result is used
as the URL for the update button.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="viewButtonIcon">
  <td><?php echo CHtml::link('viewButtonIcon', array('/site/doc', 'view' => 'TbButtonColumn', '#' => 'viewButtonIcon-detail')); ?></td>
  <td>string</td>
  <td>the view button icon (defaults to 'eye-open').</td>
  <td><?php echo CHtml::link('TbButtonColumn', array('/site/doc', 'view' => 'TbButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="viewButtonImageUrl">
  <td><?php echo CHtml::link('viewButtonImageUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'viewButtonImageUrl-detail')); ?></td>
  <td>string</td>
  <td>the image URL for the view button.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="viewButtonLabel">
  <td><?php echo CHtml::link('viewButtonLabel', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'viewButtonLabel-detail')); ?></td>
  <td>string</td>
  <td>the label for the view button.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="viewButtonOptions">
  <td><?php echo CHtml::link('viewButtonOptions', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'viewButtonOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the view button tag.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="viewButtonUrl">
  <td><?php echo CHtml::link('viewButtonUrl', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'viewButtonUrl-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every view button and whose result is used
as the URL for the view button.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
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
This is determined based on whether <?php echo CHtml::link('footer', array('/site/doc', 'view' => 'TbJsonButtonColumn', '#' => 'footer')); ?> is set.</td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'init-detail')); ?></td>
  <td>Initializes the column.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="renderDataCell">
  <td><?php echo CHtml::link('renderDataCell()', array('/site/doc', 'view' => 'TbJsonButtonColumn', '#' => 'renderDataCell-detail')); ?></td>
  <td>Renders|returns the data cell</td>
  <td>TbJsonButtonColumn</td>
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
<tr id="renderHeaderCell">
  <td><?php echo CHtml::link('renderHeaderCell()', array('/site/doc', 'view' => 'TbJsonButtonColumn', '#' => 'renderHeaderCell-detail')); ?></td>
  <td>Renders|returns the header cell.</td>
  <td>TbJsonButtonColumn</td>
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
  <td><?php echo CHtml::link('initDefaultButtons()', array('/site/doc', 'view' => 'TbJsonButtonColumn', '#' => 'initDefaultButtons-detail')); ?></td>
  <td>Initializes the default buttons (view, update and delete).</td>
  <td>TbJsonButtonColumn</td>
</tr>
<tr class="inherited" id="registerClientScript">
  <td><?php echo CHtml::link('registerClientScript()', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'registerClientScript-detail')); ?></td>
  <td>Registers the client scripts for the button column.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="renderButton">
  <td><?php echo CHtml::link('renderButton()', array('/site/doc', 'view' => 'TbButtonColumn', '#' => 'renderButton-detail')); ?></td>
  <td>### .renderButton()</td>
  <td><?php echo CHtml::link('TbButtonColumn', array('/site/doc', 'view' => 'TbButtonColumn')); ?></td>
</tr>
<tr class="inherited" id="renderDataCellContent">
  <td><?php echo CHtml::link('renderDataCellContent()', array('/site/doc', 'view' => 'CButtonColumn', '#' => 'renderDataCellContent-detail')); ?></td>
  <td>Renders the data cell content.</td>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?></td>
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
<div class="detailHeader" id="grid-detail">
grid<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('TbJsonGridView', array('/site/doc', 'view' => 'TbJsonGridView')); ?> <b>grid</b>;</div>

<p></p>


<h2>Method Details</h2>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbJsonButtonColumn.php#L65">booster/widgets/TbJsonButtonColumn.php#L65</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">initDefaultButtons</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">initDefaultButtons</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;add&nbsp;custom&nbsp;with&nbsp;msgbox&nbsp;instead<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #DD0000">'delete'</span><span style="color: #007700">][</span><span style="color: #DD0000">'click'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttons</span><span style="color: #007700">[</span><span style="color: #DD0000">'delete'</span><span style="color: #007700">][</span><span style="color: #DD0000">'click'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'yiiGridView'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'yiiJsonGridView'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the default buttons (view, update and delete).</p>


<div class="detailHeader" id="renderDataCell-detail">
renderDataCell()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array|void <b>renderDataCell</b>(int $row)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$row</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array|void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbJsonButtonColumn.php#L46">booster/widgets/TbJsonButtonColumn.php#L46</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">json</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$col&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCellContent</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$col</span><span style="color: #007700">[</span><span style="color: #DD0000">'content'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">ob_get_contents</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$col</span><span style="color: #007700">[</span><span style="color: #DD0000">'attrs'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$col</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders|returns the data cell</p>


<div class="detailHeader" id="renderHeaderCell-detail">
renderHeaderCell()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderHeaderCell</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbJsonButtonColumn.php#L26">booster/widgets/TbJsonButtonColumn.php#L26</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderHeaderCell</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">json</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderHeaderCellContent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ob_get_contents</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'content'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">renderHeaderCell</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Renders|returns the header cell.</p>


