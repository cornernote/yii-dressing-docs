<?php
$this->pageTitle = $this->pageHeading = 'CGridColumn';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CGridColumn';
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
  <td>abstract class CGridColumn &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CButtonColumn', array('/site/doc', 'view' => 'CButtonColumn')); ?>, <?php echo CHtml::link('CCheckBoxColumn', array('/site/doc', 'view' => 'CCheckBoxColumn')); ?>, <?php echo CHtml::link('CDataColumn', array('/site/doc', 'view' => 'CDataColumn')); ?>, <?php echo CHtml::link('CLinkColumn', array('/site/doc', 'view' => 'CLinkColumn')); ?>, <?php echo CHtml::link('TbImageColumn', array('/site/doc', 'view' => 'TbImageColumn')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php">yii/zii/widgets/grid/CGridColumn.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CGridColumn is the base class for all grid view column classes.
<br/><br/>
A CGridColumn object represents the specification for rendering the cells in
a particular grid view column.
<br/><br/>
In a column, there is one header cell, multiple data cells, and an optional footer cell.
Child classes may override <?php echo CHtml::link('renderHeaderCellContent', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderHeaderCellContent')); ?>, <?php echo CHtml::link('renderDataCellContent', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderDataCellContent')); ?>
and <?php echo CHtml::link('renderFooterCellContent', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFooterCellContent')); ?> to customize how these cells are rendered.</div>
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
<tr id="cssClassExpression">
  <td><?php echo CHtml::link('cssClassExpression', array('/site/doc', 'view' => 'CGridColumn', '#' => 'cssClassExpression-detail')); ?></td>
  <td>string</td>
  <td>a PHP expression that is evaluated for every data cell and whose result
is used as the CSS class name for the data cell.</td>
  <td>CGridColumn</td>
</tr>
<tr id="filterHtmlOptions">
  <td><?php echo CHtml::link('filterHtmlOptions', array('/site/doc', 'view' => 'CGridColumn', '#' => 'filterHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the filter cell tag.</td>
  <td>CGridColumn</td>
</tr>
<tr id="footer">
  <td><?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CGridColumn', '#' => 'footer-detail')); ?></td>
  <td>string</td>
  <td>the footer cell text.</td>
  <td>CGridColumn</td>
</tr>
<tr id="footerHtmlOptions">
  <td><?php echo CHtml::link('footerHtmlOptions', array('/site/doc', 'view' => 'CGridColumn', '#' => 'footerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the footer cell tag.</td>
  <td>CGridColumn</td>
</tr>
<tr id="grid">
  <td><?php echo CHtml::link('grid', array('/site/doc', 'view' => 'CGridColumn', '#' => 'grid-detail')); ?></td>
  <td><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
  <td>the grid view object that owns this column.</td>
  <td>CGridColumn</td>
</tr>
<tr id="hasFooter">
  <td><?php echo CHtml::link('hasFooter', array('/site/doc', 'view' => 'CGridColumn', '#' => 'hasFooter-detail')); ?></td>
  <td>boolean</td>
  <td>whether this column has a footer cell.</td>
  <td>CGridColumn</td>
</tr>
<tr id="header">
  <td><?php echo CHtml::link('header', array('/site/doc', 'view' => 'CGridColumn', '#' => 'header-detail')); ?></td>
  <td>string</td>
  <td>the header cell text.</td>
  <td>CGridColumn</td>
</tr>
<tr id="headerHtmlOptions">
  <td><?php echo CHtml::link('headerHtmlOptions', array('/site/doc', 'view' => 'CGridColumn', '#' => 'headerHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the header cell tag.</td>
  <td>CGridColumn</td>
</tr>
<tr id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CGridColumn', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML options for the data cell tags.</td>
  <td>CGridColumn</td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CGridColumn', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>the ID of this column.</td>
  <td>CGridColumn</td>
</tr>
<tr id="visible">
  <td><?php echo CHtml::link('visible', array('/site/doc', 'view' => 'CGridColumn', '#' => 'visible-detail')); ?></td>
  <td>boolean</td>
  <td>whether this column is visible.</td>
  <td>CGridColumn</td>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CGridColumn', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CGridColumn</td>
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
<tr id="getHasFooter">
  <td><?php echo CHtml::link('getHasFooter()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'getHasFooter-detail')); ?></td>
  <td>Returns whether this column has a footer cell.
This is determined based on whether <?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CGridColumn', '#' => 'footer')); ?> is set.</td>
  <td>CGridColumn</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'init-detail')); ?></td>
  <td>Initializes the column.</td>
  <td>CGridColumn</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="renderDataCell">
  <td><?php echo CHtml::link('renderDataCell()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderDataCell-detail')); ?></td>
  <td>Renders a data cell.</td>
  <td>CGridColumn</td>
</tr>
<tr id="renderFilterCell">
  <td><?php echo CHtml::link('renderFilterCell()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFilterCell-detail')); ?></td>
  <td>Renders the filter cell.</td>
  <td>CGridColumn</td>
</tr>
<tr id="renderFooterCell">
  <td><?php echo CHtml::link('renderFooterCell()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFooterCell-detail')); ?></td>
  <td>Renders the footer cell.</td>
  <td>CGridColumn</td>
</tr>
<tr id="renderHeaderCell">
  <td><?php echo CHtml::link('renderHeaderCell()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderHeaderCell-detail')); ?></td>
  <td>Renders the header cell.</td>
  <td>CGridColumn</td>
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
<tr id="renderDataCellContent">
  <td><?php echo CHtml::link('renderDataCellContent()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderDataCellContent-detail')); ?></td>
  <td>Renders the data cell content.</td>
  <td>CGridColumn</td>
</tr>
<tr id="renderFilterCellContent">
  <td><?php echo CHtml::link('renderFilterCellContent()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFilterCellContent-detail')); ?></td>
  <td>Renders the filter cell content.</td>
  <td>CGridColumn</td>
</tr>
<tr id="renderFooterCellContent">
  <td><?php echo CHtml::link('renderFooterCellContent()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderFooterCellContent-detail')); ?></td>
  <td>Renders the footer cell content.</td>
  <td>CGridColumn</td>
</tr>
<tr id="renderHeaderCellContent">
  <td><?php echo CHtml::link('renderHeaderCellContent()', array('/site/doc', 'view' => 'CGridColumn', '#' => 'renderHeaderCellContent-detail')); ?></td>
  <td>Renders the header cell content.</td>
  <td>CGridColumn</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="cssClassExpression-detail">
cssClassExpression<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cssClassExpression</b>;</div>

<p>a PHP expression that is evaluated for every data cell and whose result
is used as the CSS class name for the data cell. In this expression, you can use the following variables:
<ul>
  <li><code>$row</code> the row number (zero-based)</li>
  <li><code>$data</code> the data model for the row</li>
  <li><code>$this</code> the column object</li>
</ul>
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CGridColumn', '#' => 'evaluateExpression')); ?>.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>


<div class="detailHeader" id="filterHtmlOptions-detail">
filterHtmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$filterHtmlOptions</b>;</div>

<p>the HTML options for the filter cell tag.</p>


<div class="detailHeader" id="footer-detail">
footer<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$footer</b>;</div>

<p>the footer cell text. Note that it will not be HTML-encoded.</p>


<div class="detailHeader" id="footerHtmlOptions-detail">
footerHtmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$footerHtmlOptions</b>;</div>

<p>the HTML options for the footer cell tag.</p>


<div class="detailHeader" id="grid-detail">
grid<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?> <b>$grid</b>;</div>

<p>the grid view object that owns this column.</p>


<div class="detailHeader" id="hasFooter-detail">
hasFooter<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getHasFooter</b>', array('/site/doc', 'view' => 'CGridColumn', '#' => 'getHasFooter')); ?>()</div>

<p>whether this column has a footer cell.
This is determined based on whether <?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CGridColumn', '#' => 'footer')); ?> is set.</p>


<div class="detailHeader" id="header-detail">
header<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$header</b>;</div>

<p>the header cell text. Note that it will not be HTML-encoded.</p>


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


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$id</b>;</div>

<p>the ID of this column. This value should be unique among all grid view columns.
If this is not set, it will be assigned one automatically.</p>


<div class="detailHeader" id="visible-detail">
visible<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$visible</b>;</div>

<p>whether this column is visible. Defaults to true.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>(<?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?> $grid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$grid</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CGridView', array('/site/doc', 'view' => 'CGridView')); ?></td>
  <td class="paramDescCol">the grid view that owns this column.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L86">yii/zii/widgets/grid/CGridColumn.php#L86</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$grid</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">=</span><span style="color: #0000BB">$grid</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


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
  <td class="paramDescCol">whether this column has a footer cell.
This is determined based on whether <?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CGridColumn', '#' => 'footer')); ?> is set.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L104">yii/zii/widgets/grid/CGridColumn.php#L104</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHasFooter</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">footer</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L96">yii/zii/widgets/grid/CGridColumn.php#L96</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the column.
This method is invoked by the grid view when it initializes itself before rendering.
You may override this method to prepare the column for rendering.</p>


<div class="detailHeader" id="renderDataCell-detail">
renderDataCell()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderDataCell</b>(integer $row)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$row</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the row number (zero-based)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L135">yii/zii/widgets/grid/CGridColumn.php#L135</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderDataCell</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dataProvider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssClassExpression</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cssClassExpression</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'row'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$row</span><span style="color: #007700">,</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$class</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">].=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'td'</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderDataCellContent</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/td&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders a data cell.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L191">yii/zii/widgets/grid/CGridColumn.php#L191</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderDataCellContent</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blankDisplay</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the data cell content.
This method SHOULD be overridden to customize the rendering of the data cell.</p>


<div class="detailHeader" id="renderFilterCell-detail">
renderFilterCell()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderFilterCell</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L113">yii/zii/widgets/grid/CGridColumn.php#L113</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderFilterCell</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'td'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterHtmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFilterCellContent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/td&gt;"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the filter cell.</p>


<div class="detailHeader" id="renderFilterCellContent-detail">
renderFilterCellContent()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderFilterCellContent</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L202">yii/zii/widgets/grid/CGridColumn.php#L202</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderFilterCellContent</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blankDisplay</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the filter cell content.
The default implementation simply renders a space.
This method may be overridden to customize the rendering of the filter cell (if any).</p>


<div class="detailHeader" id="renderFooterCell-detail">
renderFooterCell()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderFooterCell</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L158">yii/zii/widgets/grid/CGridColumn.php#L158</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderFooterCell</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'td'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">footerHtmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFooterCellContent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/td&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the footer cell.</p>


<div class="detailHeader" id="renderFooterCellContent-detail">
renderFooterCellContent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderFooterCellContent</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L180">yii/zii/widgets/grid/CGridColumn.php#L180</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderFooterCellContent</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">footer</span><span style="color: #007700">)!==</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">footer&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blankDisplay</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the footer cell content.
The default implementation simply renders <?php echo CHtml::link('footer', array('/site/doc', 'view' => 'CGridColumn', '#' => 'footer')); ?>.
This method may be overridden to customize the rendering of the footer cell.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L123">yii/zii/widgets/grid/CGridColumn.php#L123</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderHeaderCell</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">headerHtmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">headerHtmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderHeaderCellContent</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/th&gt;"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the header cell.</p>


<div class="detailHeader" id="renderHeaderCellContent-detail">
renderHeaderCellContent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderHeaderCellContent</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/grid/CGridColumn.php#L170">yii/zii/widgets/grid/CGridColumn.php#L170</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderHeaderCellContent</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">header</span><span style="color: #007700">)!==</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">header&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">grid</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blankDisplay</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the header cell content.
The default implementation simply renders <?php echo CHtml::link('header', array('/site/doc', 'view' => 'CGridColumn', '#' => 'header')); ?>.
This method may be overridden to customize the rendering of the header cell.</p>


