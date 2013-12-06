<?php
$this->pageTitle = $this->pageHeading = 'CMenu';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CMenu';
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
  <td><?php echo CHtml::link('zii.widgets', array('/site/doc', '#' => 'zii.widgets')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CMenu &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbBaseMenu', array('/site/doc', 'view' => 'TbBaseMenu')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/CMenu.php">yii/zii/widgets/CMenu.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Jonah Turnquist &lt;poppitypop@gmail.com&gt;, Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CMenu displays a multi-level menu using nested HTML lists.
<br/><br/>
The main property of CMenu is <?php echo CHtml::link('items', array('/site/doc', 'view' => 'CMenu', '#' => 'items')); ?>, which specifies the possible items in the menu.
A menu item has three main properties: visible, active and items. The "visible" property
specifies whether the menu item is currently visible. The "active" property specifies whether
the menu item is currently selected. And the "items" property specifies the child menu items.
<br/><br/>
The following example shows how to use CMenu:
<pre>
$this-&gt;widget('zii.widgets.CMenu', array(
    'items'=&gt;array(
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default acion is used.
        array('label'=&gt;'Home', 'url'=&gt;array('site/index')),
        // 'Products' menu item will be selected no matter which tag parameter value is since it's not specified.
        array('label'=&gt;'Products', 'url'=&gt;array('product/index'), 'items'=&gt;array(
            array('label'=&gt;'New Arrivals', 'url'=&gt;array('product/new', 'tag'=&gt;'new')),
            array('label'=&gt;'Most Popular', 'url'=&gt;array('product/index', 'tag'=&gt;'popular')),
        )),
        array('label'=&gt;'Login', 'url'=&gt;array('site/login'), 'visible'=&gt;Yii::app()-&gt;user-&gt;isGuest),
    ),
));
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
<tr class="inherited" id="actionPrefix">
  <td><?php echo CHtml::link('actionPrefix', array('/site/doc', 'view' => 'CWidget', '#' => 'actionPrefix-detail')); ?></td>
  <td>string</td>
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'CMenu', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="activateItems">
  <td><?php echo CHtml::link('activateItems', array('/site/doc', 'view' => 'CMenu', '#' => 'activateItems-detail')); ?></td>
  <td>boolean</td>
  <td>whether to automatically activate items according to whether their route setting
matches the currently requested route.</td>
  <td>CMenu</td>
</tr>
<tr id="activateParents">
  <td><?php echo CHtml::link('activateParents', array('/site/doc', 'view' => 'CMenu', '#' => 'activateParents-detail')); ?></td>
  <td>boolean</td>
  <td>whether to activate parent menu items when one of the corresponding child menu items is active.</td>
  <td>CMenu</td>
</tr>
<tr id="activeCssClass">
  <td><?php echo CHtml::link('activeCssClass', array('/site/doc', 'view' => 'CMenu', '#' => 'activeCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class to be appended to the active menu item.</td>
  <td>CMenu</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="encodeLabel">
  <td><?php echo CHtml::link('encodeLabel', array('/site/doc', 'view' => 'CMenu', '#' => 'encodeLabel-detail')); ?></td>
  <td>boolean</td>
  <td>whether the labels for menu items should be HTML-encoded.</td>
  <td>CMenu</td>
</tr>
<tr id="firstItemCssClass">
  <td><?php echo CHtml::link('firstItemCssClass', array('/site/doc', 'view' => 'CMenu', '#' => 'firstItemCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class that will be assigned to the first item in the main menu or each submenu.</td>
  <td>CMenu</td>
</tr>
<tr id="hideEmptyItems">
  <td><?php echo CHtml::link('hideEmptyItems', array('/site/doc', 'view' => 'CMenu', '#' => 'hideEmptyItems-detail')); ?></td>
  <td>boolean</td>
  <td>whether to hide empty menu items.</td>
  <td>CMenu</td>
</tr>
<tr id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CMenu', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML attributes for the menu's root container tag</td>
  <td>CMenu</td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="itemCssClass">
  <td><?php echo CHtml::link('itemCssClass', array('/site/doc', 'view' => 'CMenu', '#' => 'itemCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class that will be assigned to every item.</td>
  <td>CMenu</td>
</tr>
<tr id="itemTemplate">
  <td><?php echo CHtml::link('itemTemplate', array('/site/doc', 'view' => 'CMenu', '#' => 'itemTemplate-detail')); ?></td>
  <td>string</td>
  <td>the template used to render an individual menu item.</td>
  <td>CMenu</td>
</tr>
<tr id="items">
  <td><?php echo CHtml::link('items', array('/site/doc', 'view' => 'CMenu', '#' => 'items-detail')); ?></td>
  <td>array</td>
  <td>list of menu items.</td>
  <td>CMenu</td>
</tr>
<tr id="lastItemCssClass">
  <td><?php echo CHtml::link('lastItemCssClass', array('/site/doc', 'view' => 'CMenu', '#' => 'lastItemCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class that will be assigned to the last item in the main menu or each submenu.</td>
  <td>CMenu</td>
</tr>
<tr id="linkLabelWrapper">
  <td><?php echo CHtml::link('linkLabelWrapper', array('/site/doc', 'view' => 'CMenu', '#' => 'linkLabelWrapper-detail')); ?></td>
  <td>string</td>
  <td>the HTML element name that will be used to wrap the label of all menu links.</td>
  <td>CMenu</td>
</tr>
<tr id="linkLabelWrapperHtmlOptions">
  <td><?php echo CHtml::link('linkLabelWrapperHtmlOptions', array('/site/doc', 'view' => 'CMenu', '#' => 'linkLabelWrapperHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML attributes for the links' wrap element specified in
<?php echo CHtml::link('linkLabelWrapper', array('/site/doc', 'view' => 'CMenu', '#' => 'linkLabelWrapper')); ?>.</td>
  <td>CMenu</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="submenuHtmlOptions">
  <td><?php echo CHtml::link('submenuHtmlOptions', array('/site/doc', 'view' => 'CMenu', '#' => 'submenuHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML attributes for the submenu's container tag.</td>
  <td>CMenu</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CMenu', '#' => 'init-detail')); ?></td>
  <td>Initializes the menu widget.</td>
  <td>CMenu</td>
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
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CMenu', '#' => 'run-detail')); ?></td>
  <td>Calls <?php echo CHtml::link('renderMenu', array('/site/doc', 'view' => 'CMenu', '#' => 'renderMenu')); ?> to render the menu.</td>
  <td>CMenu</td>
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
<tr id="isItemActive">
  <td><?php echo CHtml::link('isItemActive()', array('/site/doc', 'view' => 'CMenu', '#' => 'isItemActive-detail')); ?></td>
  <td>Checks whether a menu item is active.</td>
  <td>CMenu</td>
</tr>
<tr id="normalizeItems">
  <td><?php echo CHtml::link('normalizeItems()', array('/site/doc', 'view' => 'CMenu', '#' => 'normalizeItems-detail')); ?></td>
  <td>Normalizes the <?php echo CHtml::link('items', array('/site/doc', 'view' => 'CMenu', '#' => 'items')); ?> property so that the 'active' state is properly identified for every menu item.</td>
  <td>CMenu</td>
</tr>
<tr id="renderMenu">
  <td><?php echo CHtml::link('renderMenu()', array('/site/doc', 'view' => 'CMenu', '#' => 'renderMenu-detail')); ?></td>
  <td>Renders the menu items.</td>
  <td>CMenu</td>
</tr>
<tr id="renderMenuItem">
  <td><?php echo CHtml::link('renderMenuItem()', array('/site/doc', 'view' => 'CMenu', '#' => 'renderMenuItem-detail')); ?></td>
  <td>Renders the content of a menu item.</td>
  <td>CMenu</td>
</tr>
<tr id="renderMenuRecursive">
  <td><?php echo CHtml::link('renderMenuRecursive()', array('/site/doc', 'view' => 'CMenu', '#' => 'renderMenuRecursive-detail')); ?></td>
  <td>Recursively renders the menu items.</td>
  <td>CMenu</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="activateItems-detail">
activateItems<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public boolean <b>$activateItems</b>;</div>

<p>whether to automatically activate items according to whether their route setting
matches the currently requested route. Defaults to true.</p>


<div class="detailHeader" id="activateParents-detail">
activateParents<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$activateParents</b>;</div>

<p>whether to activate parent menu items when one of the corresponding child menu items is active.
The activated parent menu items will also have its CSS classes appended with <?php echo CHtml::link('activeCssClass', array('/site/doc', 'view' => 'CMenu', '#' => 'activeCssClass')); ?>.
Defaults to false.</p>


<div class="detailHeader" id="activeCssClass-detail">
activeCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$activeCssClass</b>;</div>

<p>the CSS class to be appended to the active menu item. Defaults to 'active'.
If empty, the CSS class of menu items will not be changed.</p>


<div class="detailHeader" id="encodeLabel-detail">
encodeLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$encodeLabel</b>;</div>

<p>whether the labels for menu items should be HTML-encoded. Defaults to true.</p>


<div class="detailHeader" id="firstItemCssClass-detail">
firstItemCssClass<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public string <b>$firstItemCssClass</b>;</div>

<p>the CSS class that will be assigned to the first item in the main menu or each submenu.
Defaults to null, meaning no such CSS class will be assigned.</p>


<div class="detailHeader" id="hideEmptyItems-detail">
hideEmptyItems<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$hideEmptyItems</b>;</div>

<p>whether to hide empty menu items. An empty menu item is one whose 'url' option is not
set and which doesn't contain visible child menu items. Defaults to true.</p>


<div class="detailHeader" id="htmlOptions-detail">
htmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$htmlOptions</b>;</div>

<p>HTML attributes for the menu's root container tag</p>


<div class="detailHeader" id="itemCssClass-detail">
itemCssClass<span class="detailHeaderTag">
property
 (available since v1.1.9)
</span>
</div>

<div class="signature">
public string <b>$itemCssClass</b>;</div>

<p>the CSS class that will be assigned to every item.
Defaults to null, meaning no such CSS class will be assigned.</p>


<div class="detailHeader" id="itemTemplate-detail">
itemTemplate<span class="detailHeaderTag">
property
 (available since v1.1.1)
</span>
</div>

<div class="signature">
public string <b>$itemTemplate</b>;</div>

<p>the template used to render an individual menu item. In this template,
the token "{menu}" will be replaced with the corresponding menu link or text.
If this property is not set, each menu will be rendered without any decoration.
This property will be overridden by the 'template' option set in individual menu items via {@items}.</p>


<div class="detailHeader" id="items-detail">
items<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$items</b>;</div>

<p>list of menu items. Each menu item is specified as an array of name-value pairs.
Possible option names include the following:
<ul>
<li>label: string, optional, specifies the menu item label. When <?php echo CHtml::link('encodeLabel', array('/site/doc', 'view' => 'CMenu', '#' => 'encodeLabel')); ?> is true, the label
will be HTML-encoded. If the label is not specified, it defaults to an empty string.</li>
<li>url: string or array, optional, specifies the URL of the menu item. It is passed to <?php echo CHtml::link('CHtml::normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?>
to generate a valid URL. If this is not set, the menu item will be rendered as a span text.</li>
<li>visible: boolean, optional, whether this menu item is visible. Defaults to true.
This can be used to control the visibility of menu items based on user permissions.</li>
<li>items: array, optional, specifies the sub-menu items. Its format is the same as the parent items.</li>
<li>active: boolean, optional, whether this menu item is in active state (currently selected).
If a menu item is active and activeClass is not empty, its CSS class will be appended with activeClass.
If this option is not set, the menu item will be set active automatically when the current request
is triggered by url. Note that the GET parameters not specified in the 'url' option will be ignored.</li>
<li>template: string, optional, the template used to render this menu item.
When this option is set, it will override the global setting <?php echo CHtml::link('itemTemplate', array('/site/doc', 'view' => 'CMenu', '#' => 'itemTemplate')); ?>.
Please see <?php echo CHtml::link('itemTemplate', array('/site/doc', 'view' => 'CMenu', '#' => 'itemTemplate')); ?> for more details. This option has been available since version 1.1.1.</li>
<li>linkOptions: array, optional, additional HTML attributes to be rendered for the link or span tag of the menu item.</li>
<li>itemOptions: array, optional, additional HTML attributes to be rendered for the container tag of the menu item.</li>
<li>submenuOptions: array, optional, additional HTML attributes to be rendered for the container of the submenu if this menu item has one.
When this option is set, the <?php echo CHtml::link('submenuHtmlOptions', array('/site/doc', 'view' => 'CMenu', '#' => 'submenuHtmlOptions')); ?> property will be ignored for this particular submenu.
This option has been available since version 1.1.6.</li>
</ul></p>


<div class="detailHeader" id="lastItemCssClass-detail">
lastItemCssClass<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public string <b>$lastItemCssClass</b>;</div>

<p>the CSS class that will be assigned to the last item in the main menu or each submenu.
Defaults to null, meaning no such CSS class will be assigned.</p>


<div class="detailHeader" id="linkLabelWrapper-detail">
linkLabelWrapper<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public string <b>$linkLabelWrapper</b>;</div>

<p>the HTML element name that will be used to wrap the label of all menu links.
For example, if this property is set as 'span', a menu item may be rendered as
&lt;li&gt;&lt;a href="url"&gt;&lt;span&gt;label&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
This is useful when implementing menu items using the sliding window technique.
Defaults to null, meaning no wrapper tag will be generated.</p>


<div class="detailHeader" id="linkLabelWrapperHtmlOptions-detail">
linkLabelWrapperHtmlOptions<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public array <b>$linkLabelWrapperHtmlOptions</b>;</div>

<p>HTML attributes for the links' wrap element specified in
<?php echo CHtml::link('linkLabelWrapper', array('/site/doc', 'view' => 'CMenu', '#' => 'linkLabelWrapper')); ?>.</p>


<div class="detailHeader" id="submenuHtmlOptions-detail">
submenuHtmlOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$submenuHtmlOptions</b>;</div>

<p>HTML attributes for the submenu's container tag.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/CMenu.php#L152">yii/zii/widgets/CMenu.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRoute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">items</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">normalizeItems</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">items</span><span style="color: #007700">,</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$hasActiveChild</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the menu widget.
This method mainly normalizes the <?php echo CHtml::link('items', array('/site/doc', 'view' => 'CMenu', '#' => 'items')); ?> property.
If this method is overridden, make sure the parent implementation is invoked.</p>


<div class="detailHeader" id="isItemActive-detail">
isItemActive()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>isItemActive</b>(array $item, string $route)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$item</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the menu item to be checked</td>
</tr>
<tr>
  <td class="paramNameCol">$route</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the route of the current request</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the menu item is active</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/CMenu.php#L309">yii/zii/widgets/CMenu.php#L309</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">isItemActive</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">,</span><span style="color: #0000BB">$route</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #DD0000">'/'</span><span style="color: #007700">),</span><span style="color: #0000BB">$route</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">][</span><span style="color: #DD0000">'#'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">])&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">],</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;||&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]!=</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks whether a menu item is active.
This is done by checking if the currently requested URL is generated by the 'url' option
of the menu item. Note that the GET parameters not specified in the 'url' option will be ignored.</p>


<div class="detailHeader" id="normalizeItems-detail">
normalizeItems()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>normalizeItems</b>(array $items, string $route, boolean &$active)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$items</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the items to be normalized.</td>
</tr>
<tr>
  <td class="paramNameCol">$route</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the route of the current request.</td>
</tr>
<tr>
  <td class="paramNameCol">$active</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether there is an active child menu item.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the normalized menu items</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/CMenu.php#L261">yii/zii/widgets/CMenu.php#L261</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">normalizeItems</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">,</span><span style="color: #0000BB">$route</span><span style="color: #007700">,&amp;</span><span style="color: #0000BB">$active</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'visible'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'visible'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encodeLabel</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]=</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hasActiveChild</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'items'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">normalizeItems</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">],</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$hasActiveChild</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'items'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hideEmptyItems</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'items'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'active'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activateParents&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$hasActiveChild&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activateItems&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isItemActive</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">,</span><span style="color: #0000BB">$route</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$active</span><span style="color: #007700">=</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'active'</span><span style="color: #007700">]=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #DD0000">'active'</span><span style="color: #007700">]=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'active'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$active</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Normalizes the <?php echo CHtml::link('items', array('/site/doc', 'view' => 'CMenu', '#' => 'items')); ?> property so that the 'active' state is properly identified for every menu item.</p>


<div class="detailHeader" id="renderMenu-detail">
renderMenu()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderMenu</b>(array $items)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$items</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">menu items. Each menu item will be an array with at least two elements: 'label' and 'active'.
It may have three other optional elements: 'items', 'linkOptions' and 'itemOptions'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/CMenu.php#L175">yii/zii/widgets/CMenu.php#L175</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'ul'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderMenuRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'ul'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders the menu items.</p>


<div class="detailHeader" id="renderMenuItem-detail">
renderMenuItem()
<span class="detailHeaderTag">
method
(available since v1.1.6)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>renderMenuItem</b>(array $item)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$item</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the menu item to be rendered. Please see <?php echo CHtml::link('items', array('/site/doc', 'view' => 'CMenu', '#' => 'items')); ?> on what data might be in the item.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/CMenu.php#L243">yii/zii/widgets/CMenu.php#L243</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderMenuItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">linkLabelWrapper</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">linkLabelWrapper</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">linkLabelWrapperHtmlOptions</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">],isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">]&nbsp;:&nbsp;array());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'span'</span><span style="color: #007700">,isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">]&nbsp;:&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Renders the content of a menu item.
Note that the container and the sub-menus are not rendered here.</p>


<div class="detailHeader" id="renderMenuRecursive-detail">
renderMenuRecursive()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>renderMenuRecursive</b>(array $items)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$items</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the menu items to be rendered recursively</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/CMenu.php#L189">yii/zii/widgets/CMenu.php#L189</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderMenuRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">]&nbsp;:&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'active'</span><span style="color: #007700">]&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activeCssClass</span><span style="color: #007700">!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activeCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$count</span><span style="color: #007700">===</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstItemCssClass</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstItemCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$count</span><span style="color: #007700">===</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastItemCssClass</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastItemCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemCssClass</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$class</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$class</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">].=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">$class</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'li'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$menu</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderMenuItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemTemplate</span><span style="color: #007700">)&nbsp;||&nbsp;isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemTemplate</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'{menu}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$menu</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$menu</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'ul'</span><span style="color: #007700">,isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'submenuOptions'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'submenuOptions'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">submenuHtmlOptions</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderMenuRecursive</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'ul'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'li'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Recursively renders the menu items.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/zii/widgets/CMenu.php#L165">yii/zii/widgets/CMenu.php#L165</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">items</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Calls <?php echo CHtml::link('renderMenu', array('/site/doc', 'view' => 'CMenu', '#' => 'renderMenu')); ?> to render the menu.</p>


