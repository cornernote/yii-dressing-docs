<?php
$this->pageTitle = $this->pageHeading = 'CSort';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CSort';
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
  <td>class CSort &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php">yii\web\CSort.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CSort represents information relevant to sorting.
<br/><br/>
When data needs to be sorted according to one or several attributes,
we can use CSort to represent the sorting information and generate
appropriate hyperlinks that can lead to sort actions.
<br/><br/>
CSort is designed to be used together with <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?>.
When creating a CSort instance, you need to specify <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CSort', '#' => 'modelClass')); ?>.
You can use CSort to generate hyperlinks by calling <?php echo CHtml::link('link', array('/site/doc', 'view' => 'CSort', '#' => 'link')); ?>.
You can also use CSort to modify a <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> instance by calling <?php echo CHtml::link('applyOrder', array('/site/doc', 'view' => 'CSort', '#' => 'applyOrder')); ?> so that
it can cause the query results to be sorted according to the specified
attributes.
<br/><br/>
In order to prevent SQL injection attacks, CSort ensures that only valid model attributes
can be sorted. This is determined based on <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CSort', '#' => 'modelClass')); ?> and <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?>.
When <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?> is not set, all attributes belonging to <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CSort', '#' => 'modelClass')); ?>
can be sorted. When <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?> is set, only those attributes declared in the property
can be sorted.
<br/><br/>
By configuring <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?>, one can perform more complex sorts that may
consist of things like compound attributes (e.g. sort based on the combination of
first name and last name of users).
<br/><br/>
The property <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?> should be an array of key-value pairs, where the keys
represent the attribute names, while the values represent the virtual attribute definitions.
For more details, please check the documentation about <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?>.</div>
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
<tr id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>list of attributes that are allowed to be sorted.</td>
  <td>CSort</td>
</tr>
<tr id="defaultOrder">
  <td><?php echo CHtml::link('defaultOrder', array('/site/doc', 'view' => 'CSort', '#' => 'defaultOrder-detail')); ?></td>
  <td>mixed</td>
  <td>the default order that should be applied to the query criteria when
the current request does not specify any sort.</td>
  <td>CSort</td>
</tr>
<tr id="descTag">
  <td><?php echo CHtml::link('descTag', array('/site/doc', 'view' => 'CSort', '#' => 'descTag-detail')); ?></td>
  <td>string</td>
  <td>the tag appeared in the GET parameter that indicates the attribute should be sorted
in descending order.</td>
  <td>CSort</td>
</tr>
<tr id="directions">
  <td><?php echo CHtml::link('directions', array('/site/doc', 'view' => 'CSort', '#' => 'directions-detail')); ?></td>
  <td>array</td>
  <td>Returns the currently requested sort information.</td>
  <td>CSort</td>
</tr>
<tr id="modelClass">
  <td><?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CSort', '#' => 'modelClass-detail')); ?></td>
  <td>string</td>
  <td>the name of the model class whose attributes can be sorted.</td>
  <td>CSort</td>
</tr>
<tr id="multiSort">
  <td><?php echo CHtml::link('multiSort', array('/site/doc', 'view' => 'CSort', '#' => 'multiSort-detail')); ?></td>
  <td>boolean</td>
  <td>whether the sorting can be applied to multiple attributes simultaneously.</td>
  <td>CSort</td>
</tr>
<tr id="orderBy">
  <td><?php echo CHtml::link('orderBy', array('/site/doc', 'view' => 'CSort', '#' => 'orderBy-detail')); ?></td>
  <td>string</td>
  <td>the order-by columns represented by this sort object.</td>
  <td>CSort</td>
</tr>
<tr id="params">
  <td><?php echo CHtml::link('params', array('/site/doc', 'view' => 'CSort', '#' => 'params-detail')); ?></td>
  <td>array</td>
  <td>the additional GET parameters (name=>value) that should be used when generating sort URLs.</td>
  <td>CSort</td>
</tr>
<tr id="route">
  <td><?php echo CHtml::link('route', array('/site/doc', 'view' => 'CSort', '#' => 'route-detail')); ?></td>
  <td>string</td>
  <td>the route (controller ID and action ID) for generating the sorted contents.</td>
  <td>CSort</td>
</tr>
<tr id="separators">
  <td><?php echo CHtml::link('separators', array('/site/doc', 'view' => 'CSort', '#' => 'separators-detail')); ?></td>
  <td>array</td>
  <td>separators used in the generated URL.</td>
  <td>CSort</td>
</tr>
<tr id="sortVar">
  <td><?php echo CHtml::link('sortVar', array('/site/doc', 'view' => 'CSort', '#' => 'sortVar-detail')); ?></td>
  <td>string</td>
  <td>the name of the GET parameter that specifies which attributes to be sorted
in which direction.</td>
  <td>CSort</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CSort', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CSort</td>
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
<tr id="applyOrder">
  <td><?php echo CHtml::link('applyOrder()', array('/site/doc', 'view' => 'CSort', '#' => 'applyOrder-detail')); ?></td>
  <td>Modifies the query criteria by changing its <?php echo CHtml::link('CDbCriteria::order', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'order')); ?> property.</td>
  <td>CSort</td>
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
<tr id="createUrl">
  <td><?php echo CHtml::link('createUrl()', array('/site/doc', 'view' => 'CSort', '#' => 'createUrl-detail')); ?></td>
  <td>Creates a URL that can lead to generating sorted data.</td>
  <td>CSort</td>
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
<tr id="getDirection">
  <td><?php echo CHtml::link('getDirection()', array('/site/doc', 'view' => 'CSort', '#' => 'getDirection-detail')); ?></td>
  <td>Returns the sort direction of the specified attribute in the current request.</td>
  <td>CSort</td>
</tr>
<tr id="getDirections">
  <td><?php echo CHtml::link('getDirections()', array('/site/doc', 'view' => 'CSort', '#' => 'getDirections-detail')); ?></td>
  <td>Returns the currently requested sort information.</td>
  <td>CSort</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getOrderBy">
  <td><?php echo CHtml::link('getOrderBy()', array('/site/doc', 'view' => 'CSort', '#' => 'getOrderBy-detail')); ?></td>
  <td>Returns the order-by columns represented by this sort object.
This can be put in the ORDER BY clause of a SQL statement.</td>
  <td>CSort</td>
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
<tr id="link">
  <td><?php echo CHtml::link('link()', array('/site/doc', 'view' => 'CSort', '#' => 'link-detail')); ?></td>
  <td>Generates a hyperlink that can be clicked to cause sorting.</td>
  <td>CSort</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="resolveAttribute">
  <td><?php echo CHtml::link('resolveAttribute()', array('/site/doc', 'view' => 'CSort', '#' => 'resolveAttribute-detail')); ?></td>
  <td>Returns the real definition of an attribute given its name.</td>
  <td>CSort</td>
</tr>
<tr id="resolveLabel">
  <td><?php echo CHtml::link('resolveLabel()', array('/site/doc', 'view' => 'CSort', '#' => 'resolveLabel-detail')); ?></td>
  <td>Resolves the attribute label for the specified attribute.</td>
  <td>CSort</td>
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
<tr id="createLink">
  <td><?php echo CHtml::link('createLink()', array('/site/doc', 'view' => 'CSort', '#' => 'createLink-detail')); ?></td>
  <td>Creates a hyperlink based on the given label and URL.</td>
  <td>CSort</td>
</tr>
<tr id="getModel">
  <td><?php echo CHtml::link('getModel()', array('/site/doc', 'view' => 'CSort', '#' => 'getModel-detail')); ?></td>
  <td>Given active record class name returns new model instance.</td>
  <td>CSort</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="attributes-detail">
attributes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$attributes</b>;</div>

<p>list of attributes that are allowed to be sorted.
For example, array('user_id','create_time') would specify that only 'user_id'
and 'create_time' of the model <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CSort', '#' => 'modelClass')); ?> can be sorted.
By default, this property is an empty array, which means all attributes in
<?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CSort', '#' => 'modelClass')); ?> are allowed to be sorted.
<br/><br/>
This property can also be used to specify complex sorting. To do so,
a virtual attribute can be declared in terms of a key-value pair in the array.
The key refers to the name of the virtual attribute that may appear in the sort request,
while the value specifies the definition of the virtual attribute.
<br/><br/>
In the simple case, a key-value pair can be like <code>'user'=>'user_id'</code>
where 'user' is the name of the virtual attribute while 'user_id' means the virtual
attribute is the 'user_id' attribute in the <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CSort', '#' => 'modelClass')); ?>.
<br/><br/>
A more flexible way is to specify the key-value pair as
<pre>
'user'=&gt;array(
    'asc'=&gt;'first_name, last_name',
    'desc'=&gt;'first_name DESC, last_name DESC',
    'label'=&gt;'Name'
)
</pre>
where 'user' is the name of the virtual attribute that specifies the full name of user
(a compound attribute consisting of first name and last name of user). In this case,
we have to use an array to define the virtual attribute with three elements: 'asc',
'desc' and 'label'.
<br/><br/>
The above approach can also be used to declare virtual attributes that consist of relational
attributes. For example,
<pre>
'price'=&gt;array(
    'asc'=&gt;'item.price',
    'desc'=&gt;'item.price DESC',
    'label'=&gt;'Item Price'
)
</pre>
<br/><br/>
Note, the attribute name should not contain '-' or '.' characters because
they are used as <?php echo CHtml::link('separators', array('/site/doc', 'view' => 'CSort', '#' => 'separators')); ?>.
<br/><br/>
Starting from version 1.1.3, an additional option named 'default' can be used in the virtual attribute
declaration. This option specifies whether an attribute should be sorted in ascending or descending
order upon user clicking the corresponding sort hyperlink if it is not currently sorted. The valid
option values include 'asc' (default) and 'desc'. For example,
<pre>
'price'=&gt;array(
    'asc'=&gt;'item.price',
    'desc'=&gt;'item.price DESC',
    'label'=&gt;'Item Price',
    'default'=&gt;'desc',
)
</pre>
<br/><br/>
Also starting from version 1.1.3, you can include a star ('*') element in this property so that
all model attributes are available for sorting, in addition to those virtual attributes. For example,
<pre>
'attributes'=&gt;array(
    'price'=&gt;array(
        'asc'=&gt;'item.price',
        'desc'=&gt;'item.price DESC',
        'label'=&gt;'Item Price',
        'default'=&gt;'desc',
    ),
    '*',
)
</pre>
Note that when a name appears as both a model attribute and a virtual attribute, the position of
the star element in the array determines which one takes precedence. In particular, if the star
element is the first element in the array, the model attribute takes precedence; and if the star
element is the last one, the virtual attribute takes precedence.</p>


<div class="detailHeader" id="defaultOrder-detail">
defaultOrder<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$defaultOrder</b>;</div>

<p>the default order that should be applied to the query criteria when
the current request does not specify any sort. For example, 'name, create_time DESC' or
'UPPER(name)'.
<br/><br/>
Starting from version 1.1.3, you can also specify the default order using an array.
The array keys could be attribute names or virtual attribute names as declared in <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?>,
and the array values indicate whether the sorting of the corresponding attributes should
be in descending order. For example,
<pre>
'defaultOrder'=&gt;array(
    'price'=&gt;CSort::SORT_DESC,
)
</pre>
`SORT_DESC` and `SORT_ASC` are available since 1.1.10. In earlier Yii versions you should use
`true` and `false` respectively.
<br/><br/>
Please note when using array to specify the default order, the corresponding attributes
will be put into <?php echo CHtml::link('directions', array('/site/doc', 'view' => 'CSort', '#' => 'directions')); ?> and thus affect how the sort links are rendered
(e.g. an arrow may be displayed next to the currently active sort link).</p>


<div class="detailHeader" id="descTag-detail">
descTag<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$descTag</b>;</div>

<p>the tag appeared in the GET parameter that indicates the attribute should be sorted
in descending order. Defaults to 'desc'.</p>


<div class="detailHeader" id="directions-detail">
directions<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getDirections</b>', array('/site/doc', 'view' => 'CSort', '#' => 'getDirections')); ?>()</div>

<p>Returns the currently requested sort information.</p>


<div class="detailHeader" id="modelClass-detail">
modelClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$modelClass</b>;</div>

<p>the name of the model class whose attributes can be sorted.
The model class must be a child class of <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?>.</p>


<div class="detailHeader" id="multiSort-detail">
multiSort<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$multiSort</b>;</div>

<p>whether the sorting can be applied to multiple attributes simultaneously.
Defaults to false, which means each time the data can only be sorted by one attribute.</p>


<div class="detailHeader" id="orderBy-detail">
orderBy<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.0)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getOrderBy</b>', array('/site/doc', 'view' => 'CSort', '#' => 'getOrderBy')); ?>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria=NULL)</div>

<p>the order-by columns represented by this sort object.
This can be put in the ORDER BY clause of a SQL statement.</p>


<div class="detailHeader" id="params-detail">
params<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$params</b>;</div>

<p>the additional GET parameters (name=>value) that should be used when generating sort URLs.
Defaults to null, meaning using the currently available GET parameters.</p>


<div class="detailHeader" id="route-detail">
route<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$route</b>;</div>

<p>the route (controller ID and action ID) for generating the sorted contents.
Defaults to empty string, meaning using the currently requested route.</p>


<div class="detailHeader" id="separators-detail">
separators<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$separators</b>;</div>

<p>separators used in the generated URL. This must be an array consisting of
two elements. The first element specifies the character separating different
attributes, while the second element specifies the character separating attribute name
and the corresponding sort direction. Defaults to array('-','.').</p>


<div class="detailHeader" id="sortVar-detail">
sortVar<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$sortVar</b>;</div>

<p>the name of the GET parameter that specifies which attributes to be sorted
in which direction. Defaults to 'sort'.</p>


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
public void <b>__construct</b>(string $modelClass=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$modelClass</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the class name of data models that need to be sorted.
This should be a child class of <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L203">yii\web\CSort.php#L203</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$modelClass</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">=</span><span style="color: #0000BB">$modelClass</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="applyOrder-detail">
applyOrder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>applyOrder</b>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L215">yii\web\CSort.php#L215</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">applyOrder</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$order</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOrderBy</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$order</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">.=</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">order</span><span style="color: #007700">.=</span><span style="color: #0000BB">$order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Modifies the query criteria by changing its <?php echo CHtml::link('CDbCriteria::order', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'order')); ?> property.
This method will use <?php echo CHtml::link('directions', array('/site/doc', 'view' => 'CSort', '#' => 'directions')); ?> to determine which columns need to be sorted.
They will be put in the ORDER BY clause. If the criteria already has non-empty <?php echo CHtml::link('CDbCriteria::order', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'order')); ?> value,
the new value will be appended to it.</p>


<div class="detailHeader" id="createLink-detail">
createLink()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>createLink</b>(string $attribute, string $label, string $url, array $htmlOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the attribute that this link is for</td>
</tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the label of the hyperlink</td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated hyperlink</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L468">yii\web\CSort.php#L468</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createLink</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a hyperlink based on the given label and URL.
You may override this method to customize the link generation.</p>


<div class="detailHeader" id="createUrl-detail">
createUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>createUrl</b>(<?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> $controller, array $directions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$controller</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td class="paramDescCol">the controller that will be used to create the URL.</td>
</tr>
<tr>
  <td class="paramNameCol">$directions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the sort directions indexed by attribute names.
The sort direction can be either CSort::SORT_ASC for ascending order or
CSort::SORT_DESC for descending order.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL for sorting</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L395">yii\web\CSort.php#L395</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">,</span><span style="color: #0000BB">$directions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sorts</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$directions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sorts</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$descending&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">separators</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">].</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">descTag&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$_GET&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortVar</span><span style="color: #007700">]=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">separators</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$sorts</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a URL that can lead to generating sorted data.</p>


<div class="detailHeader" id="getDirection-detail">
getDirection()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getDirection</b>(string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">Sort direction of the attribute. Can be either CSort::SORT_ASC
for ascending order or CSort::SORT_DESC for descending order. Value is null
if the attribute doesn't need to be sorted.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L381">yii\web\CSort.php#L381</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDirection</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDirections</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_directions</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_directions</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the sort direction of the specified attribute in the current request.</p>


<div class="detailHeader" id="getDirections-detail">
getDirections()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getDirections</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">sort directions indexed by attribute names.
Sort direction can be either CSort::SORT_ASC for ascending order or
CSort::SORT_DESC for descending order.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L341">yii\web\CSort.php#L341</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDirections</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_directions</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_directions</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortVar</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortVar</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">separators</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sortVar</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">separators</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">)===</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">descTag</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$descending</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_directions</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]=</span><span style="color: #0000BB">$descending</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiSort</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_directions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_directions</span><span style="color: #007700">===array()&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultOrder</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_directions</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultOrder</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_directions</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the currently requested sort information.</p>


<div class="detailHeader" id="getModel-detail">
getModel()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>getModel</b>(string $className)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">active record class name.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol">active record model instance.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L454">yii\web\CSort.php#L454</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CActiveRecord</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Given active record class name returns new model instance.</p>


<div class="detailHeader" id="getOrderBy-detail">
getOrderBy()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getOrderBy</b>(<?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> $criteria=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$criteria</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol">the query criteria</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the order-by columns represented by this sort object.
This can be put in the ORDER BY clause of a SQL statement.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L232">yii\web\CSort.php#L232</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getOrderBy</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$directions</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDirections</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$directions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultOrder</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultOrder&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getSchema</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$orders</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$directions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$definition</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$descending</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$orders</span><span style="color: #007700">[]=isset(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">[</span><span style="color: #DD0000">'desc'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$definition</span><span style="color: #007700">[</span><span style="color: #DD0000">'desc'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;DESC'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$orders</span><span style="color: #007700">[]=isset(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">[</span><span style="color: #DD0000">'asc'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$definition</span><span style="color: #007700">[</span><span style="color: #DD0000">'asc'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=</span><span style="color: #0000BB">$definition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #DD0000">'.'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">)).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">getTableAlias</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteTableName</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alias</span><span style="color: #007700">)).</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteColumnName</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$orders</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$descending</span><span style="color: #007700">?</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;DESC'</span><span style="color: #007700">:</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$orders</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="link-detail">
link()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>link</b>(string $attribute, string $label=NULL, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name. This must be the actual attribute name, not alias.
If it is an attribute of a related AR object, the name should be prefixed with
the relation name (e.g. 'author.name', where 'author' is the relation name).</td>
</tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the link label. If null, the label will be determined according
to the attribute (see <?php echo CHtml::link('resolveLabel', array('/site/doc', 'view' => 'CSort', '#' => 'resolveLabel')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes for the hyperlink tag</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated hyperlink</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L279">yii\web\CSort.php#L279</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$label</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$definition</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$directions</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDirections</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$directions</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=</span><span style="color: #0000BB">$directions</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #DD0000">'desc'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'asc'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">].=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$class</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">=!</span><span style="color: #0000BB">$directions</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$directions</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">[</span><span style="color: #DD0000">'default'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">=</span><span style="color: #0000BB">$definition</span><span style="color: #007700">[</span><span style="color: #DD0000">'default'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'desc'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multiSort</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$directions</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">),</span><span style="color: #0000BB">$directions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$directions</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$descending</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">(),</span><span style="color: #0000BB">$directions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createLink</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a hyperlink that can be clicked to cause sorting.</p>


<div class="detailHeader" id="resolveAttribute-detail">
resolveAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>resolveAttribute</b>(string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name that the user requests to sort on</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute name or the virtual attribute definition. False if the attribute cannot be sorted.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L420">yii\web\CSort.php#L420</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">attributeNames</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$definition</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$name</span><span style="color: #007700">===</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$definition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">===</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">hasAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">===</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the real definition of an attribute given its name.
<br/><br/>
The resolution is based on <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?> and <?php echo CHtml::link('CActiveRecord::attributeNames', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'attributeNames')); ?>.
<ul>
<li>When <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?> is an empty array, if the name refers to an attribute of <?php echo CHtml::link('modelClass', array('/site/doc', 'view' => 'CSort', '#' => 'modelClass')); ?>,
then the name is returned back.</li>
<li>When <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?> is not empty, if the name refers to an attribute declared in <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?>,
then the corresponding virtual attribute definition is returned. Starting from version 1.1.3, if <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?>
contains a star ('*') element, the name will also be used to match against all model attributes.</li>
<li>In all other cases, false is returned, meaning the name does not refer to a valid attribute.</li>
</ul></p>


<div class="detailHeader" id="resolveLabel-detail">
resolveLabel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>resolveLabel</b>(string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute label</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CSort.php#L319">yii\web\CSort.php#L319</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$definition</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resolveAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$definition</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$definition</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=</span><span style="color: #0000BB">$definition</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModel</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelClass</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Resolves the attribute label for the specified attribute.
This will invoke <?php echo CHtml::link('CActiveRecord::getAttributeLabel', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getAttributeLabel')); ?> to determine what label to use.
If the attribute refers to a virtual attribute declared in <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?>,
then the label given in the <?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CSort', '#' => 'attributes')); ?> will be returned instead.</p>


