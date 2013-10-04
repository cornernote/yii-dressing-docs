<?php
$this->pageTitle = $this->pageHeading = 'YdGeneratePropertiesAction';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdGeneratePropertiesAction';
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
  <td><?php echo CHtml::link('dressing.actions', array('/site/doc', '#' => 'dressing.actions')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdGeneratePropertiesAction &raquo;
<?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IAction', array('/site/doc', 'view' => 'IAction')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/actions/YdGeneratePropertiesAction.php">dressing/actions/YdGeneratePropertiesAction.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Class YdGeneratePropertiesAction</div>
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
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CAction', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>the controller who owns this action.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CAction', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>id of this action</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'model-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr id="modelList">
  <td><?php echo CHtml::link('modelList', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'modelList-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr id="modelName">
  <td><?php echo CHtml::link('modelName', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'modelName-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr id="modelProperties">
  <td><?php echo CHtml::link('modelProperties', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'modelProperties-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CAction', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
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
<tr id="filterDocType">
  <td><?php echo CHtml::link('filterDocType()', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'filterDocType-detail')); ?></td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr class="inherited" id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CAction', '#' => 'getController-detail')); ?></td>
  <td>Returns the controller who owns this action.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="getDocComment">
  <td><?php echo CHtml::link('getDocComment()', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'getDocComment-detail')); ?></td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CAction', '#' => 'getId-detail')); ?></td>
  <td>Returns id of this action</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="getModelList">
  <td><?php echo CHtml::link('getModelList()', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'getModelList-detail')); ?></td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr id="getModelProperties">
  <td><?php echo CHtml::link('getModelProperties()', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'getModelProperties-detail')); ?></td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr id="getTypeFromDocComment">
  <td><?php echo CHtml::link('getTypeFromDocComment()', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'getTypeFromDocComment-detail')); ?></td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
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
<tr id="renderModelList">
  <td><?php echo CHtml::link('renderModelList()', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'renderModelList-detail')); ?></td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr id="renderModelProperties">
  <td><?php echo CHtml::link('renderModelProperties()', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'renderModelProperties-detail')); ?></td>
  <td></td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'run-detail')); ?></td>
  <td>Runs the action.</td>
  <td>YdGeneratePropertiesAction</td>
</tr>
<tr class="inherited" id="runWithParams">
  <td><?php echo CHtml::link('runWithParams()', array('/site/doc', 'view' => 'CAction', '#' => 'runWithParams-detail')); ?></td>
  <td>Runs the action with the supplied request parameters.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
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
<tr class="inherited" id="runWithParamsInternal">
  <td><?php echo CHtml::link('runWithParamsInternal()', array('/site/doc', 'view' => 'CAction', '#' => 'runWithParamsInternal-detail')); ?></td>
  <td>Executes a method of an object with the supplied named parameters.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="model-detail">
model<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>$model</b>;</div>

<p></p>


<div class="detailHeader" id="modelList-detail">
modelList<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getModelList</b>', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'getModelList')); ?>()</div>

<p></p>


<div class="detailHeader" id="modelName-detail">
modelName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public  <b>$modelName</b>;</div>

<p></p>


<div class="detailHeader" id="modelProperties-detail">
modelProperties<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getModelProperties</b>', array('/site/doc', 'view' => 'YdGeneratePropertiesAction', '#' => 'getModelProperties')); ?>()</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="filterDocType-detail">
filterDocType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed|string <b>filterDocType</b>($type $type)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">$type</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed|string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/actions/YdGeneratePropertiesAction.php#L312">dressing/actions/YdGeneratePropertiesAction.php#L312</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">filterDocType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ignoreTypes&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'void'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'mixed'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'null'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$replace&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bool'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'boolean'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'integer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'int'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filteredType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'|'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$multiType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'|'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$multiTypeSafe&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$multiType&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$singleType</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$singleType</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ignoreTypes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$replace</span><span style="color: #007700">[</span><span style="color: #0000BB">$singleType</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$singleType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$replace</span><span style="color: #007700">[</span><span style="color: #0000BB">$singleType</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$multiTypeSafe</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$singleType</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filteredType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'|'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$multiTypeSafe</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ignoreTypes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filteredType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$replace</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filteredType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$replace</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$filteredType</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filteredType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filteredType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filteredType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$filteredType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filteredType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdStringHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">getBetweenString</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$filteredType</span><span style="color: #007700">;<br /><br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getDocComment-detail">
getDocComment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array|string <b>getDocComment</b>($class $class, $method $method, string $tag='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$class</td>
  <td class="paramTypeCol">$class</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$method</td>
  <td class="paramTypeCol">$method</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$tag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array|string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/actions/YdGeneratePropertiesAction.php#L258">dressing/actions/YdGeneratePropertiesAction.php#L258</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDocComment</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$reflection&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">ReflectionMethod</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$comment&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$reflection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDocComment</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$tag</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">"/"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$tag&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"&nbsp;(.*)(\\r\\n|\\r|\\n)/U"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$returns&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$match</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$match&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$match</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'$'</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name_&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$name_</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'$'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$returns</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$returns</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getModelList-detail">
getModelList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getModelList</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/actions/YdGeneratePropertiesAction.php#L73">dressing/actions/YdGeneratePropertiesAction.php#L73</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getModelList</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathList&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CFileHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">findFiles</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">"application.models"</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #DD0000">'fileTypes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'php'</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$modelList&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$pathList&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$modelName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_subclass_of</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'CActiveRecord'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$modelList</span><span style="color: #007700">[]&nbsp;=&nbsp;array(</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'url'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'/tool/generateProperties'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'modelName'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$modelList</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getModelProperties-detail">
getModelProperties()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getModelProperties</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/actions/YdGeneratePropertiesAction.php#L127">dressing/actions/YdGeneratePropertiesAction.php#L127</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getModelProperties</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;intro<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;This&nbsp;is&nbsp;the&nbsp;model&nbsp;class&nbsp;for&nbsp;table&nbsp;'"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">"'"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;table<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;with()&nbsp;with()"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;find()&nbsp;find(\$condition,&nbsp;array&nbsp;\$params&nbsp;=&nbsp;array())"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">}</span><span style="color: #DD0000">[]&nbsp;findAll()&nbsp;findAll(\$condition&nbsp;=&nbsp;'',&nbsp;array&nbsp;\$params&nbsp;=&nbsp;array())"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;findByPk()&nbsp;findByPk(\$pk,&nbsp;\$condition&nbsp;=&nbsp;'',&nbsp;array&nbsp;\$params&nbsp;=&nbsp;array())"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">}</span><span style="color: #DD0000">[]&nbsp;findAllByPk()&nbsp;findAllByPk(\$pk,&nbsp;\$condition&nbsp;=&nbsp;'',&nbsp;array&nbsp;\$params&nbsp;=&nbsp;array())"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;findByAttributes()&nbsp;findByAttributes(array&nbsp;\$attributes,&nbsp;\$condition&nbsp;=&nbsp;'',&nbsp;array&nbsp;\$params&nbsp;=&nbsp;array())"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">}</span><span style="color: #DD0000">[]&nbsp;findAllByAttributes()&nbsp;findAllByAttributes(array&nbsp;\$attributes,&nbsp;\$condition&nbsp;=&nbsp;'',&nbsp;array&nbsp;\$params&nbsp;=&nbsp;array())"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;findBySql()&nbsp;findBySql(\$sql,&nbsp;array&nbsp;\$params&nbsp;=&nbsp;array())"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">}</span><span style="color: #DD0000">[]&nbsp;findAllBySql()&nbsp;findAllBySql(\$sql,&nbsp;array&nbsp;\$params&nbsp;=&nbsp;array())"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;behaviors<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$behaviors&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">behaviors</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$inheritedMethods&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">get_class_methods</span><span style="color: #007700">(</span><span style="color: #DD0000">'CActiveRecordBehavior'</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$inheritedMethods</span><span style="color: #007700">[</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$reflection&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">ReflectionClass&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selfMethods&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">listData</span><span style="color: #007700">(</span><span style="color: #0000BB">$reflection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMethods</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$behaviors&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$behavior</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$behavior</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$behavior</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$behavior</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">[</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$methods&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_class_methods</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$header&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$methods&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$inheritedMethods</span><span style="color: #007700">[</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">])&nbsp;||&nbsp;isset(</span><span style="color: #0000BB">$selfMethods</span><span style="color: #007700">[</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$header</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;Methods&nbsp;from&nbsp;behavior&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$header&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$methodReturn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTypeFromDocComment</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'return'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$paramTypes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDocComment</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'param'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$methodReturn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$methodReturn&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$methodReturn</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$property&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;@method&nbsp;</span><span style="color: #0000BB">$methodReturn$methodName</span><span style="color: #DD0000">()&nbsp;</span><span style="color: #0000BB">$methodName</span><span style="color: #DD0000">("</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">ReflectionMethod</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParameters</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$separator&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$param</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//$param&nbsp;is&nbsp;an&nbsp;instance&nbsp;of&nbsp;ReflectionParameter<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*&nbsp;@var&nbsp;$param&nbsp;ReflectionParameter&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$paramTypes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filterType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'$'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$typeString&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdStringHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">getBetweenString</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'$'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$typeString&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$typeString</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filterType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterDocType</span><span style="color: #007700">(</span><span style="color: #0000BB">$typeString</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filterType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$filterType&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$filterType</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">next</span><span style="color: #007700">(</span><span style="color: #0000BB">$paramTypes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$property&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$separator&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$filterType&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'$'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isOptional</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$property&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&nbsp;=&nbsp;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$property&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$param</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDefaultValue</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)),&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'array&nbsp;('&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'array('</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$separator&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$property&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">")"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$property</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$header</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;relations<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relations&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">relations</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$relations</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*&nbsp;Properties&nbsp;from&nbsp;relation'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$relations&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$relationName&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;array(</span><span style="color: #DD0000">'CBelongsToRelation'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'CHasOneRelation'</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*&nbsp;@property&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;$'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$relationName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;array(</span><span style="color: #DD0000">'CHasManyRelation'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'CManyManyRelation'</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*&nbsp;@property&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'[]&nbsp;$'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$relationName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;array(</span><span style="color: #DD0000">'CStatRelation'</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*&nbsp;@property&nbsp;integer&nbsp;$'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$relationName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*&nbsp;@property&nbsp;unknown&nbsp;$'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$relationName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;table&nbsp;fields<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*&nbsp;Properties&nbsp;from&nbsp;table&nbsp;fields'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">columns&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbType&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'datetime'</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbType&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">'date'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'string'</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;$column-&gt;dbType;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbType</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'decimal'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'number'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*&nbsp;@property&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;$'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$column</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&nbsp;*'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;all&nbsp;done...<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getTypeFromDocComment-detail">
getTypeFromDocComment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getTypeFromDocComment</b>($class $class, $method $method, $tag $tag)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$class</td>
  <td class="paramTypeCol">$class</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$method</td>
  <td class="paramTypeCol">$method</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$tag</td>
  <td class="paramTypeCol">$tag</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/actions/YdGeneratePropertiesAction.php#L294">dressing/actions/YdGeneratePropertiesAction.php#L294</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTypeFromDocComment</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$types&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDocComment</span><span style="color: #007700">(</span><span style="color: #0000BB">$class</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$returnTypes&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$types&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filteredType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filterDocType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$filteredType</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$returnTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">$k</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$filteredType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$returnTypes</span><span style="color: #007700">;<br /><br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderModelList-detail">
renderModelList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderModelList</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/actions/YdGeneratePropertiesAction.php#L58">dressing/actions/YdGeneratePropertiesAction.php#L58</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderModelList</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbMenu'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'pills'</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;'',&nbsp;'tabs',&nbsp;'pills'&nbsp;(or&nbsp;'list')<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'stacked'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;whether&nbsp;this&nbsp;is&nbsp;a&nbsp;stacked&nbsp;menu<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModelList</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$contents&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderText</span><span style="color: #007700">(</span><span style="color: #0000BB">$contents</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="renderModelProperties-detail">
renderModelProperties()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderModelProperties</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/actions/YdGeneratePropertiesAction.php#L90">dressing/actions/YdGeneratePropertiesAction.php#L90</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderModelProperties</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$begin&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;---&nbsp;BEGIN&nbsp;GenerateProperties&nbsp;---"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$end&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"&nbsp;*&nbsp;---&nbsp;END&nbsp;GenerateProperties&nbsp;---"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$contents&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$begin&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\n"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModelProperties</span><span style="color: #007700">())&nbsp;.&nbsp;</span><span style="color: #DD0000">"\n"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$end</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">"application.models"</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileContents&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileContents&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileContents</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&nbsp;*&nbsp;---&nbsp;BEGIN&nbsp;AutoGenerated&nbsp;by&nbsp;tool/generateProperties&nbsp;---'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$begin</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&nbsp;*&nbsp;---&nbsp;END&nbsp;AutoGenerated&nbsp;by&nbsp;tool/generateProperties&nbsp;---'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$end</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$firstPos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileContents</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$begin</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lastPos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileContents</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$end</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$firstPos&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$lastPos&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$lastPos&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">$firstPos</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oldDoc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdStringHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">getBetweenString</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileContents</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$begin</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$end</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$contents&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">$oldDoc</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$oldDoc</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$contents</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$fileContents</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'overwrote&nbsp;file:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'contents&nbsp;matches&nbsp;file:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">breadcrumbs&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Generate&nbsp;Properties'</span><span style="color: #007700">)&nbsp;=&gt;&nbsp;array(</span><span style="color: #DD0000">'/tool/generateProperties'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Model'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderText</span><span style="color: #007700">(</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;pre&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$contents&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;/pre&gt;'</span><span style="color: #007700">);<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/actions/YdGeneratePropertiesAction.php#L34">dressing/actions/YdGeneratePropertiesAction.php#L34</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;try&nbsp;get&nbsp;the&nbsp;model&nbsp;name<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">getSubmittedField</span><span style="color: #007700">(</span><span style="color: #DD0000">'modelName'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;show&nbsp;a&nbsp;list<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderModelList</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;load&nbsp;the&nbsp;model<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CActiveRecord</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'No&nbsp;CActiveRecord&nbsp;Class&nbsp;with&nbsp;name&nbsp;:modelName&nbsp;was&nbsp;not&nbsp;found.'</span><span style="color: #007700">),&nbsp;array(</span><span style="color: #DD0000">':modelName'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;render&nbsp;the&nbsp;properties<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderModelProperties</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Runs the action.
This method displays the view requested by the user.</p>


