<?php
$this->pageTitle = $this->pageHeading = 'CPagination';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CPagination';
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
  <td><?php echo CHtml::link('system.web', array('/site/doc', '#' => 'system.web')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CPagination &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php">yii/web/CPagination.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CPagination represents information relevant to pagination.
<br/><br/>
When data needs to be rendered in multiple pages, we can use CPagination to
represent information such as <?php echo CHtml::link('total item count', array('/site/doc', 'view' => 'CPagination', '#' => 'getItemCount')); ?>,
<?php echo CHtml::link('page size', array('/site/doc', 'view' => 'CPagination', '#' => 'getPageSize')); ?>, <?php echo CHtml::link('current page', array('/site/doc', 'view' => 'CPagination', '#' => 'getCurrentPage')); ?>, etc.
These information can be passed to <?php echo CHtml::link('pagers', array('/site/doc', 'view' => 'CBasePager')); ?> to render
pagination buttons or links.
<br/><br/>
Example:
<br/><br/>
Controller action:
<pre>
function actionIndex(){
    $criteria=new CDbCriteria();
    $count=Article::model()-&gt;count($criteria);
    $pages=new CPagination($count);

    // results per page
    $pages-&gt;pageSize=10;
    $pages-&gt;applyLimit($criteria);
    $models=Article::model()-&gt;findAll($criteria);

    $this-&gt;render('index', array(
    'models' =&gt; $models,
         'pages' =&gt; $pages
    ));
}
</pre>
<br/><br/>
View:
<pre>
&lt;?php foreach($models as $model): ?&gt;
    // display a model
&lt;?php endforeach; ?&gt;

// display pagination
&lt;?php $this-&gt;widget('CLinkPager', array(
    'pages' =&gt; $pages,
)) ?&gt;
</pre></div>
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
<tr id="currentPage">
  <td><?php echo CHtml::link('currentPage', array('/site/doc', 'view' => 'CPagination', '#' => 'currentPage-detail')); ?></td>
  <td>integer</td>
  <td>the zero-based index of the current page.</td>
  <td>CPagination</td>
</tr>
<tr id="itemCount">
  <td><?php echo CHtml::link('itemCount', array('/site/doc', 'view' => 'CPagination', '#' => 'itemCount-detail')); ?></td>
  <td>integer</td>
  <td>total number of items.</td>
  <td>CPagination</td>
</tr>
<tr id="limit">
  <td><?php echo CHtml::link('limit', array('/site/doc', 'view' => 'CPagination', '#' => 'limit-detail')); ?></td>
  <td>integer</td>
  <td>the limit of the data.</td>
  <td>CPagination</td>
</tr>
<tr id="offset">
  <td><?php echo CHtml::link('offset', array('/site/doc', 'view' => 'CPagination', '#' => 'offset-detail')); ?></td>
  <td>integer</td>
  <td>the offset of the data.</td>
  <td>CPagination</td>
</tr>
<tr id="pageCount">
  <td><?php echo CHtml::link('pageCount', array('/site/doc', 'view' => 'CPagination', '#' => 'pageCount-detail')); ?></td>
  <td>integer</td>
  <td>number of pages</td>
  <td>CPagination</td>
</tr>
<tr id="pageSize">
  <td><?php echo CHtml::link('pageSize', array('/site/doc', 'view' => 'CPagination', '#' => 'pageSize-detail')); ?></td>
  <td>integer</td>
  <td>number of items in each page.</td>
  <td>CPagination</td>
</tr>
<tr id="pageVar">
  <td><?php echo CHtml::link('pageVar', array('/site/doc', 'view' => 'CPagination', '#' => 'pageVar-detail')); ?></td>
  <td>string</td>
  <td>name of the GET variable storing the current page index.</td>
  <td>CPagination</td>
</tr>
<tr id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'CPagination', '#' => 'params-detail')); ?></td>
  <td>array</td>
  <td>of parameters (name=>value) that should be used instead of GET when generating pagination URLs.</td>
  <td>CPagination</td>
</tr>
<tr id="route">
  <td><?php echo CHtml::link('route', array('/site/doc', 'view' => 'CPagination', '#' => 'route-detail')); ?></td>
  <td>string</td>
  <td>the route (controller ID and action ID) for displaying the paged contents.</td>
  <td>CPagination</td>
</tr>
<tr id="validateCurrentPage">
  <td><?php echo CHtml::link('validateCurrentPage', array('/site/doc', 'view' => 'CPagination', '#' => 'validateCurrentPage-detail')); ?></td>
  <td>boolean</td>
  <td>whether to ensure <?php echo CHtml::link('currentPage', array('/site/doc', 'view' => 'CPagination', '#' => 'currentPage')); ?> is returning a valid page number.</td>
  <td>CPagination</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CPagination', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CPagination</td>
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
<tr id="applyLimit">
  <td><?php echo CHtml::link('applyLimit()', array('/site/doc', 'view' => 'CPagination', '#' => 'applyLimit-detail')); ?></td>
  <td>Applies LIMIT and OFFSET to the specified query criteria.</td>
  <td>CPagination</td>
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
<tr id="createPageUrl">
  <td><?php echo CHtml::link('createPageUrl()', array('/site/doc', 'view' => 'CPagination', '#' => 'createPageUrl-detail')); ?></td>
  <td>Creates the URL suitable for pagination.</td>
  <td>CPagination</td>
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
<tr id="getCurrentPage">
  <td><?php echo CHtml::link('getCurrentPage()', array('/site/doc', 'view' => 'CPagination', '#' => 'getCurrentPage-detail')); ?></td>
  <td>Returns the zero-based index of the current page. Defaults to 0.</td>
  <td>CPagination</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getItemCount">
  <td><?php echo CHtml::link('getItemCount()', array('/site/doc', 'view' => 'CPagination', '#' => 'getItemCount-detail')); ?></td>
  <td>Returns total number of items. Defaults to 0.</td>
  <td>CPagination</td>
</tr>
<tr id="getLimit">
  <td><?php echo CHtml::link('getLimit()', array('/site/doc', 'view' => 'CPagination', '#' => 'getLimit-detail')); ?></td>
  <td>Returns the limit of the data. This may be used to set the
LIMIT value for a SQL statement for fetching the current page of data.
This returns the same value as <?php echo CHtml::link('pageSize', array('/site/doc', 'view' => 'CPagination', '#' => 'pageSize')); ?>.</td>
  <td>CPagination</td>
</tr>
<tr id="getOffset">
  <td><?php echo CHtml::link('getOffset()', array('/site/doc', 'view' => 'CPagination', '#' => 'getOffset-detail')); ?></td>
  <td>Returns the offset of the data. This may be used to set the
OFFSET value for a SQL statement for fetching the current page of data.</td>
  <td>CPagination</td>
</tr>
<tr id="getPageCount">
  <td><?php echo CHtml::link('getPageCount()', array('/site/doc', 'view' => 'CPagination', '#' => 'getPageCount-detail')); ?></td>
  <td>Returns number of pages</td>
  <td>CPagination</td>
</tr>
<tr id="getPageSize">
  <td><?php echo CHtml::link('getPageSize()', array('/site/doc', 'view' => 'CPagination', '#' => 'getPageSize-detail')); ?></td>
  <td>Returns number of items in each page. Defaults to 10.</td>
  <td>CPagination</td>
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
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setCurrentPage">
  <td><?php echo CHtml::link('setCurrentPage()', array('/site/doc', 'view' => 'CPagination', '#' => 'setCurrentPage-detail')); ?></td>
  <td>Sets the zero-based index of the current page.</td>
  <td>CPagination</td>
</tr>
<tr id="setItemCount">
  <td><?php echo CHtml::link('setItemCount()', array('/site/doc', 'view' => 'CPagination', '#' => 'setItemCount-detail')); ?></td>
  <td>Sets total number of items.</td>
  <td>CPagination</td>
</tr>
<tr id="setPageSize">
  <td><?php echo CHtml::link('setPageSize()', array('/site/doc', 'view' => 'CPagination', '#' => 'setPageSize-detail')); ?></td>
  <td>Sets number of items in each page</td>
  <td>CPagination</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="currentPage-detail">
currentPage<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getCurrentPage</b>', array('/site/doc', 'view' => 'CPagination', '#' => 'getCurrentPage')); ?>(boolean $recalculate=true)<br/>public void <?php echo CHtml::link('<b>setCurrentPage</b>', array('/site/doc', 'view' => 'CPagination', '#' => 'setCurrentPage')); ?>(integer $value)</div>

<p>the zero-based index of the current page. Defaults to 0.</p>


<div class="detailHeader" id="itemCount-detail">
itemCount<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getItemCount</b>', array('/site/doc', 'view' => 'CPagination', '#' => 'getItemCount')); ?>()<br/>public void <?php echo CHtml::link('<b>setItemCount</b>', array('/site/doc', 'view' => 'CPagination', '#' => 'setItemCount')); ?>(integer $value)</div>

<p>total number of items. Defaults to 0.</p>


<div class="detailHeader" id="limit-detail">
limit<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.0)
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getLimit</b>', array('/site/doc', 'view' => 'CPagination', '#' => 'getLimit')); ?>()</div>

<p>the limit of the data. This may be used to set the
LIMIT value for a SQL statement for fetching the current page of data.
This returns the same value as <?php echo CHtml::link('pageSize', array('/site/doc', 'view' => 'CPagination', '#' => 'pageSize')); ?>.</p>


<div class="detailHeader" id="offset-detail">
offset<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.0)
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getOffset</b>', array('/site/doc', 'view' => 'CPagination', '#' => 'getOffset')); ?>()</div>

<p>the offset of the data. This may be used to set the
OFFSET value for a SQL statement for fetching the current page of data.</p>


<div class="detailHeader" id="pageCount-detail">
pageCount<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getPageCount</b>', array('/site/doc', 'view' => 'CPagination', '#' => 'getPageCount')); ?>()</div>

<p>number of pages</p>


<div class="detailHeader" id="pageSize-detail">
pageSize<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getPageSize</b>', array('/site/doc', 'view' => 'CPagination', '#' => 'getPageSize')); ?>()<br/>public void <?php echo CHtml::link('<b>setPageSize</b>', array('/site/doc', 'view' => 'CPagination', '#' => 'setPageSize')); ?>(integer $value)</div>

<p>number of items in each page. Defaults to 10.</p>


<div class="detailHeader" id="pageVar-detail">
pageVar<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$pageVar</b>;</div>

<p>name of the GET variable storing the current page index. Defaults to 'page'.</p>


<div class="detailHeader" id="params-detail">
params<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$params</b>;</div>

<p>of parameters (name=>value) that should be used instead of GET when generating pagination URLs.
Defaults to null, meaning using the currently available GET parameters.</p>


<div class="detailHeader" id="route-detail">
route<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$route</b>;</div>

<p>the route (controller ID and action ID) for displaying the paged contents.
Defaults to empty string, meaning using the current route.</p>


<div class="detailHeader" id="validateCurrentPage-detail">
validateCurrentPage<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public boolean <b>$validateCurrentPage</b>;</div>

<p>whether to ensure <?php echo CHtml::link('currentPage', array('/site/doc', 'view' => 'CPagination', '#' => 'currentPage')); ?> is returning a valid page number.
When this property is true, the value returned by <?php echo CHtml::link('currentPage', array('/site/doc', 'view' => 'CPagination', '#' => 'currentPage')); ?> will always be between
0 and (<?php echo CHtml::link('pageCount', array('/site/doc', 'view' => 'CPagination', '#' => 'pageCount')); ?>-1). Because <?php echo CHtml::link('pageCount', array('/site/doc', 'view' => 'CPagination', '#' => 'pageCount')); ?> relies on the correct value of <?php echo CHtml::link('itemCount', array('/site/doc', 'view' => 'CPagination', '#' => 'itemCount')); ?>,
it means you must have knowledge about the total number of data items when you want to access <?php echo CHtml::link('currentPage', array('/site/doc', 'view' => 'CPagination', '#' => 'currentPage')); ?>.
This is fine for SQL-based queries, but may not be feasible for other kinds of queries (e.g. MongoDB).
In those cases, you may set this property to be false to skip the validation (you may need to validate yourself then).
Defaults to true.</p>


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
public void <b>__construct</b>(integer $itemCount=0)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$itemCount</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">total number of items.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L107">yii/web/CPagination.php#L107</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemCount</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$itemCount</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="applyLimit-detail">
applyLimit()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>applyLimit</b>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria that should be applied with the limit</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L214">yii/web/CPagination.php#L214</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">applyLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">limit</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLimit</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">offset</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOffset</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Applies LIMIT and OFFSET to the specified query criteria.</p>


<div class="detailHeader" id="createPageUrl-detail">
createPageUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>createPageUrl</b>(<?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> $controller, integer $page)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$controller</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td class="paramDescCol">the controller that will create the actual URL</td>
</tr>
<tr>
  <td class="paramNameCol">$page</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the page that the URL should point to. This is a zero-based index.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the created URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L200">yii/web/CPagination.php#L200</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createPageUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$page</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$_GET&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$page</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;page&nbsp;0&nbsp;is&nbsp;the&nbsp;default<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pageVar</span><span style="color: #007700">]=</span><span style="color: #0000BB">$page</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pageVar</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates the URL suitable for pagination.
This method is mainly called by pagers when creating URLs used to
perform pagination. The default implementation is to call
the controller's createUrl method with the page information.
You may override this method if your URL scheme is not the same as
the one supported by the controller's createUrl method.</p>


<div class="detailHeader" id="getCurrentPage-detail">
getCurrentPage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getCurrentPage</b>(boolean $recalculate=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$recalculate</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to recalculate the current page based on the page size and item count.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the zero-based index of the current page. Defaults to 0.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L158">yii/web/CPagination.php#L158</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCurrentPage</span><span style="color: #007700">(</span><span style="color: #0000BB">$recalculate</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentPage</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$recalculate</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pageVar</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentPage</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pageVar</span><span style="color: #007700">]-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">validateCurrentPage</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPageCount</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentPage</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentPage</span><span style="color: #007700">=</span><span style="color: #0000BB">$pageCount</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentPage</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentPage</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentPage</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentPage</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getItemCount-detail">
getItemCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getItemCount</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">total number of items. Defaults to 0.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L132">yii/web/CPagination.php#L132</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getItemCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_itemCount</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getLimit-detail">
getLimit()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getLimit</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the limit of the data. This may be used to set the
LIMIT value for a SQL statement for fetching the current page of data.
This returns the same value as <?php echo CHtml::link('pageSize', array('/site/doc', 'view' => 'CPagination', '#' => 'pageSize')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L236">yii/web/CPagination.php#L236</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLimit</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPageSize</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getOffset-detail">
getOffset()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getOffset</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the offset of the data. This may be used to set the
OFFSET value for a SQL statement for fetching the current page of data.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L225">yii/web/CPagination.php#L225</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOffset</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCurrentPage</span><span style="color: #007700">()*</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPageSize</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPageCount-detail">
getPageCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getPageCount</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of pages</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L149">yii/web/CPagination.php#L149</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPageCount</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(int)((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_itemCount</span><span style="color: #007700">+</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pageSize</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">)/</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pageSize</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPageSize-detail">
getPageSize()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getPageSize</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of items in each page. Defaults to 10.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L115">yii/web/CPagination.php#L115</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPageSize</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pageSize</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setCurrentPage-detail">
setCurrentPage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCurrentPage</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the zero-based index of the current page.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L183">yii/web/CPagination.php#L183</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCurrentPage</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentPage</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">pageVar</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setItemCount-detail">
setItemCount()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setItemCount</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">total number of items.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L140">yii/web/CPagination.php#L140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setItemCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_itemCount</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&lt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_itemCount</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setPageSize-detail">
setPageSize()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setPageSize</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of items in each page</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CPagination.php#L123">yii/web/CPagination.php#L123</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setPageSize</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pageSize</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&lt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pageSize</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">DEFAULT_PAGE_SIZE</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


