<?php
$this->pageTitle = $this->pageHeading = 'TbCarousel';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbCarousel';
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
  <td><?php echo CHtml::link('booster.widgets.grouping', array('/site/doc', '#' => 'booster.widgets.grouping')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class TbCarousel &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbCarousel.php">booster/widgets/TbCarousel.php</a></td>
</tr>
</table>

<div id="classDescription">
## Bootstrap carousel widget.</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbCarousel', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="displayPrevAndNext">
  <td><?php echo CHtml::link('displayPrevAndNext', array('/site/doc', 'view' => 'TbCarousel', '#' => 'displayPrevAndNext-detail')); ?></td>
  <td>boolean</td>
  <td>indicates whether to display the previous and next links.</td>
  <td>TbCarousel</td>
</tr>
<tr id="events">
  <td><?php echo CHtml::link('events', array('/site/doc', 'view' => 'TbCarousel', '#' => 'events-detail')); ?></td>
  <td>string[]</td>
  <td>the Javascript event handlers.</td>
  <td>TbCarousel</td>
</tr>
<tr id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'TbCarousel', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>the HTML attributes for the widget container.</td>
  <td>TbCarousel</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="items">
  <td><?php echo CHtml::link('items', array('/site/doc', 'view' => 'TbCarousel', '#' => 'items-detail')); ?></td>
  <td>array</td>
  <td>the carousel items configuration.</td>
  <td>TbCarousel</td>
</tr>
<tr id="nextLabel">
  <td><?php echo CHtml::link('nextLabel', array('/site/doc', 'view' => 'TbCarousel', '#' => 'nextLabel-detail')); ?></td>
  <td>string</td>
  <td>the next button label.</td>
  <td>TbCarousel</td>
</tr>
<tr id="options">
  <td><?php echo CHtml::link('options', array('/site/doc', 'view' => 'TbCarousel', '#' => 'options-detail')); ?></td>
  <td>array</td>
  <td>the options for the Bootstrap Javascript plugin.</td>
  <td>TbCarousel</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="prevLabel">
  <td><?php echo CHtml::link('prevLabel', array('/site/doc', 'view' => 'TbCarousel', '#' => 'prevLabel-detail')); ?></td>
  <td>string</td>
  <td>the previous button label.</td>
  <td>TbCarousel</td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="slide">
  <td><?php echo CHtml::link('slide', array('/site/doc', 'view' => 'TbCarousel', '#' => 'slide-detail')); ?></td>
  <td>boolean</td>
  <td>indicates whether the carousel should slide items.</td>
  <td>TbCarousel</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbCarousel', '#' => 'init-detail')); ?></td>
  <td>### .init()</td>
  <td>TbCarousel</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'CWidget', '#' => 'render-detail')); ?></td>
  <td>Renders a view.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr class="inherited" id="renderInternal">
  <td><?php echo CHtml::link('renderInternal()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderInternal-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'TbCarousel', '#' => 'run-detail')); ?></td>
  <td>### .run()</td>
  <td>TbCarousel</td>
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
<tr id="renderItems">
  <td><?php echo CHtml::link('renderItems()', array('/site/doc', 'view' => 'TbCarousel', '#' => 'renderItems-detail')); ?></td>
  <td>### .renderItems()</td>
  <td>TbCarousel</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="displayPrevAndNext-detail">
displayPrevAndNext<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$displayPrevAndNext</b>;</div>

<p>indicates whether to display the previous and next links.</p>


<div class="detailHeader" id="events-detail">
events<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string[] <b>$events</b>;</div>

<p>the Javascript event handlers.</p>


<div class="detailHeader" id="htmlOptions-detail">
htmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$htmlOptions</b>;</div>

<p>the HTML attributes for the widget container.</p>


<div class="detailHeader" id="items-detail">
items<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$items</b>;</div>

<p>the carousel items configuration.</p>


<div class="detailHeader" id="nextLabel-detail">
nextLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$nextLabel</b>;</div>

<p>the next button label. Defaults to '&rsaquo;'.</p>


<div class="detailHeader" id="options-detail">
options<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$options</b>;</div>

<p>the options for the Bootstrap Javascript plugin.</p>


<div class="detailHeader" id="prevLabel-detail">
prevLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$prevLabel</b>;</div>

<p>the previous button label. Defaults to '&lsaquo;'.</p>


<div class="detailHeader" id="slide-detail">
slide<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$slide</b>;</div>

<p>indicates whether the carousel should slide items.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbCarousel.php#L65">booster/widgets/TbCarousel.php#L65</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'carousel'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">slide&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'slide'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$classes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>### .init()
<br/><br/>
Initializes the widget.</p>


<div class="detailHeader" id="renderItems-detail">
renderItems()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderItems</b>(array $items)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$items</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the item configuration.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbCarousel.php#L126">booster/widgets/TbCarousel.php#L126</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderItems</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'visible'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'visible'</span><span style="color: #007700">]&nbsp;===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'item'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'active'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$classes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'image'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'alt'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'alt'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'imageOptions'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'imageOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'image'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'alt'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'imageOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'caption'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">])&nbsp;||&nbsp;isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'caption'</span><span style="color: #007700">])))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'captionOptions'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'captionOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'captionOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'captionOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;carousel-caption'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'captionOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'carousel-caption'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'captionOptions'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;h4&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h4&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'caption'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'caption'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>### .renderItems()
<br/><br/>
Renders the carousel items.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbCarousel.php#L92">booster/widgets/TbCarousel.php#L92</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="carousel-inner"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderItems</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">items</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">displayPrevAndNext</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;class="carousel-control&nbsp;left"&nbsp;href="#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'"&nbsp;data-slide="prev"&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prevLabel&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;/a&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;class="carousel-control&nbsp;right"&nbsp;href="#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'"&nbsp;data-slide="next"&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nextLabel&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;/a&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@var&nbsp;CClientScript&nbsp;$cs&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">options</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"jQuery('#</span><span style="color: #007700">{</span><span style="color: #0000BB">$id</span><span style="color: #007700">}</span><span style="color: #DD0000">').carousel(</span><span style="color: #007700">{</span><span style="color: #0000BB">$options</span><span style="color: #007700">}</span><span style="color: #DD0000">);"</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">events&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$handler</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handler&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$handler</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'_'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"jQuery('#</span><span style="color: #007700">{</span><span style="color: #0000BB">$id</span><span style="color: #007700">}</span><span style="color: #DD0000">').on('</span><span style="color: #007700">{</span><span style="color: #0000BB">$name</span><span style="color: #007700">}</span><span style="color: #DD0000">',&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$handler</span><span style="color: #007700">}</span><span style="color: #DD0000">);"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>### .run()
<br/><br/>
Runs the widget.</p>


