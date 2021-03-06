<?php
$this->pageTitle = $this->pageHeading = 'TbBaseMenu';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'TbBaseMenu';
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
  <td><?php echo CHtml::link('booster.widgets.navigation', array('/site/doc', '#' => 'booster.widgets.navigation')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>abstract class TbBaseMenu &raquo;
<?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbDropdown', array('/site/doc', 'view' => 'TbDropdown')); ?>, <?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbBaseMenu.php">booster/widgets/TbBaseMenu.php</a></td>
</tr>
</table>

<div id="classDescription">
## Base class for menu in Booster</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'actions')); ?>.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="activateItems">
  <td><?php echo CHtml::link('activateItems', array('/site/doc', 'view' => 'CMenu', '#' => 'activateItems-detail')); ?></td>
  <td>boolean</td>
  <td>whether to automatically activate items according to whether their route setting
matches the currently requested route.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="activateParents">
  <td><?php echo CHtml::link('activateParents', array('/site/doc', 'view' => 'CMenu', '#' => 'activateParents-detail')); ?></td>
  <td>boolean</td>
  <td>whether to activate parent menu items when one of the corresponding child menu items is active.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="activeCssClass">
  <td><?php echo CHtml::link('activeCssClass', array('/site/doc', 'view' => 'CMenu', '#' => 'activeCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class to be appended to the active menu item.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CWidget', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>Returns the controller that this widget belongs to.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr id="dividerCssClass">
  <td><?php echo CHtml::link('dividerCssClass', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'dividerCssClass-detail')); ?></td>
  <td>string</td>
  <td>### .getDividerCssClass()</td>
  <td>TbBaseMenu</td>
</tr>
<tr id="dropdownCssClass">
  <td><?php echo CHtml::link('dropdownCssClass', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'dropdownCssClass-detail')); ?></td>
  <td>string</td>
  <td>### .getDropdownCssClass()</td>
  <td>TbBaseMenu</td>
</tr>
<tr class="inherited" id="encodeLabel">
  <td><?php echo CHtml::link('encodeLabel', array('/site/doc', 'view' => 'CMenu', '#' => 'encodeLabel-detail')); ?></td>
  <td>boolean</td>
  <td>whether the labels for menu items should be HTML-encoded.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="firstItemCssClass">
  <td><?php echo CHtml::link('firstItemCssClass', array('/site/doc', 'view' => 'CMenu', '#' => 'firstItemCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class that will be assigned to the first item in the main menu or each submenu.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="hideEmptyItems">
  <td><?php echo CHtml::link('hideEmptyItems', array('/site/doc', 'view' => 'CMenu', '#' => 'hideEmptyItems-detail')); ?></td>
  <td>boolean</td>
  <td>whether to hide empty menu items.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="htmlOptions">
  <td><?php echo CHtml::link('htmlOptions', array('/site/doc', 'view' => 'CMenu', '#' => 'htmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML attributes for the menu's root container tag</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CWidget', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>Returns the ID of the widget or generates a new one if requested.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="itemCssClass">
  <td><?php echo CHtml::link('itemCssClass', array('/site/doc', 'view' => 'CMenu', '#' => 'itemCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class that will be assigned to every item.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="itemTemplate">
  <td><?php echo CHtml::link('itemTemplate', array('/site/doc', 'view' => 'CMenu', '#' => 'itemTemplate-detail')); ?></td>
  <td>string</td>
  <td>the template used to render an individual menu item.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="items">
  <td><?php echo CHtml::link('items', array('/site/doc', 'view' => 'CMenu', '#' => 'items-detail')); ?></td>
  <td>array</td>
  <td>list of menu items.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="lastItemCssClass">
  <td><?php echo CHtml::link('lastItemCssClass', array('/site/doc', 'view' => 'CMenu', '#' => 'lastItemCssClass-detail')); ?></td>
  <td>string</td>
  <td>the CSS class that will be assigned to the last item in the main menu or each submenu.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="linkLabelWrapper">
  <td><?php echo CHtml::link('linkLabelWrapper', array('/site/doc', 'view' => 'CMenu', '#' => 'linkLabelWrapper-detail')); ?></td>
  <td>string</td>
  <td>the HTML element name that will be used to wrap the label of all menu links.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="linkLabelWrapperHtmlOptions">
  <td><?php echo CHtml::link('linkLabelWrapperHtmlOptions', array('/site/doc', 'view' => 'CMenu', '#' => 'linkLabelWrapperHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML attributes for the links' wrap element specified in
<?php echo CHtml::link('linkLabelWrapper', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'linkLabelWrapper')); ?>.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
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
<tr class="inherited" id="submenuHtmlOptions">
  <td><?php echo CHtml::link('submenuHtmlOptions', array('/site/doc', 'view' => 'CMenu', '#' => 'submenuHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML attributes for the submenu's container tag.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
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
<tr id="getDividerCssClass">
  <td><?php echo CHtml::link('getDividerCssClass()', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'getDividerCssClass-detail')); ?></td>
  <td>### .getDividerCssClass()</td>
  <td>TbBaseMenu</td>
</tr>
<tr id="getDropdownCssClass">
  <td><?php echo CHtml::link('getDropdownCssClass()', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'getDropdownCssClass-detail')); ?></td>
  <td>### .getDropdownCssClass()</td>
  <td>TbBaseMenu</td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CMenu', '#' => 'init-detail')); ?></td>
  <td>Initializes the menu widget.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr id="isVertical">
  <td><?php echo CHtml::link('isVertical()', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'isVertical-detail')); ?></td>
  <td>### .isVertical()</td>
  <td>TbBaseMenu</td>
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
<tr class="inherited" id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CMenu', '#' => 'run-detail')); ?></td>
  <td>Calls <?php echo CHtml::link('renderMenu', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'renderMenu')); ?> to render the menu.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
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
<tr class="inherited" id="isItemActive">
  <td><?php echo CHtml::link('isItemActive()', array('/site/doc', 'view' => 'CMenu', '#' => 'isItemActive-detail')); ?></td>
  <td>Checks whether a menu item is active.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr id="normalizeItems">
  <td><?php echo CHtml::link('normalizeItems()', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'normalizeItems-detail')); ?></td>
  <td>### .normalizeItems()</td>
  <td>TbBaseMenu</td>
</tr>
<tr id="renderMenu">
  <td><?php echo CHtml::link('renderMenu()', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'renderMenu-detail')); ?></td>
  <td>### .renderMenu()</td>
  <td>TbBaseMenu</td>
</tr>
<tr id="renderMenuItem">
  <td><?php echo CHtml::link('renderMenuItem()', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'renderMenuItem-detail')); ?></td>
  <td>### .renderMenuItem()</td>
  <td>TbBaseMenu</td>
</tr>
<tr class="inherited" id="renderMenuRecursive">
  <td><?php echo CHtml::link('renderMenuRecursive()', array('/site/doc', 'view' => 'CMenu', '#' => 'renderMenuRecursive-detail')); ?></td>
  <td>Recursively renders the menu items.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="dividerCssClass-detail">
dividerCssClass<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
abstract public string <?php echo CHtml::link('<b>getDividerCssClass</b>', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'getDividerCssClass')); ?>()</div>

<p>### .getDividerCssClass()
<br/><br/>
Returns the divider css class.</p>


<div class="detailHeader" id="dropdownCssClass-detail">
dropdownCssClass<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
abstract public string <?php echo CHtml::link('<b>getDropdownCssClass</b>', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'getDropdownCssClass')); ?>()</div>

<p>### .getDropdownCssClass()
<br/><br/>
Returns the dropdown css class.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getDividerCssClass-detail">
getDividerCssClass()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public string <b>getDividerCssClass</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the class name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbBaseMenu.php#L25">booster/widgets/TbBaseMenu.php#L25</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">abstract&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDividerCssClass</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>### .getDividerCssClass()
<br/><br/>
Returns the divider css class.</p>


<div class="detailHeader" id="getDropdownCssClass-detail">
getDropdownCssClass()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public string <b>getDropdownCssClass</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the class name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbBaseMenu.php#L33">booster/widgets/TbBaseMenu.php#L33</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">abstract&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDropdownCssClass</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>### .getDropdownCssClass()
<br/><br/>
Returns the dropdown css class.</p>


<div class="detailHeader" id="isVertical-detail">
isVertical()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>isVertical</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">the result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbBaseMenu.php#L41">booster/widgets/TbBaseMenu.php#L41</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">abstract&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">isVertical</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>### .isVertical()
<br/><br/>
Returns whether this is a vertical menu.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbBaseMenu.php#L190">booster/widgets/TbBaseMenu.php#L190</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">normalizeItems</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$active</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'divider'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isVertical</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'header'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'nav-header'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$classes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">$classes</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeItems</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$active</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>### .normalizeItems()
<br/><br/>
Normalizes the <?php echo CHtml::link('items', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'items')); ?> property so that the 'active' state is properly identified for every menu item.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbBaseMenu.php#L51">booster/widgets/TbBaseMenu.php#L51</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'ul'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$items&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">++;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'divider'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;li&nbsp;class="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDividerCssClass</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&gt;&lt;/li&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'itemOptions'</span><span style="color: #007700">]&nbsp;:&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'active'</span><span style="color: #007700">]&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activeCssClass&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">activeCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstItemCssClass&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstItemCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">$n&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastItemCssClass&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastItemCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemCssClass&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemCssClass</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDropdownCssClass</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'disabled'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #DD0000">'disabled'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$classes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$classes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$classes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'li'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$menu&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderMenuItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemTemplate</span><span style="color: #007700">)&nbsp;||&nbsp;isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemTemplate</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'{menu}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$menu</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$menu</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dropdownOptions&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'encodeLabel'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encodeLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'htmlOptions'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'submenuOptions'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'submenuOptions'</span><span style="color: #007700">]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">submenuHtmlOptions</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dropdownOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;=&nbsp;isset(</span><span style="color: #0000BB">$dropdownOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;?&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dropdownOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'htmlOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #DD0000">'bootstrap.widgets.TbDropdown'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dropdownOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/li&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;/ul&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>### .renderMenu()
<br/><br/>
Renders the menu items.</p>


<div class="detailHeader" id="renderMenuItem-detail">
renderMenuItem()
<span class="detailHeaderTag">
method
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
  <td class="paramDescCol">the menu item to be rendered. Please see <?php echo CHtml::link('items', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'items')); ?> on what data might be in the item.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/widgets/TbBaseMenu.php#L142">booster/widgets/TbBaseMenu.php#L142</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderMenuItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pieces&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'icon-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;icon-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pieces</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&lt;i&nbsp;class="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'"&gt;&lt;/i&gt;&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'items'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;dropdown-toggle'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'dropdown-toggle'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'data-toggle'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;.=&nbsp;</span><span style="color: #DD0000">'&nbsp;&lt;span&nbsp;class="caret"&gt;&lt;/span&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>### .renderMenuItem()
<br/><br/>
Renders the content of a menu item.
Note that the container and the sub-menus are not rendered here.</p>


