<?php
$this->pageTitle = $this->pageHeading = 'YdHomeMenu';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdHomeMenu';
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
  <td><?php echo CHtml::link('dressing.widgets', array('/site/doc', '#' => 'dressing.widgets')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdHomeMenu &raquo;
<?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?> &raquo;
<?php echo CHtml::link('TbBaseMenu', array('/site/doc', 'view' => 'TbBaseMenu')); ?> &raquo;
<?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?> &raquo;
<?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> &raquo;
<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdHomeMenu.php">dressing/widgets/YdHomeMenu.php</a></td>
</tr>
</table>

<div id="classDescription">
YdHomeMenu</div>
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
  <td>the prefix to the IDs of the <?php echo CHtml::link('actions', array('/site/doc', 'view' => 'YdHomeMenu', '#' => 'actions')); ?>.</td>
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
<tr class="inherited" id="dividerCssClass">
  <td><?php echo CHtml::link('dividerCssClass', array('/site/doc', 'view' => 'TbMenu', '#' => 'dividerCssClass-detail')); ?></td>
  <td>string</td>
  <td>### .getDividerCssClass()</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
</tr>
<tr class="inherited" id="dropdownCssClass">
  <td><?php echo CHtml::link('dropdownCssClass', array('/site/doc', 'view' => 'TbMenu', '#' => 'dropdownCssClass-detail')); ?></td>
  <td>string</td>
  <td>### .getDropdownCssClass()</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
</tr>
<tr class="inherited" id="dropup">
  <td><?php echo CHtml::link('dropup', array('/site/doc', 'view' => 'TbMenu', '#' => 'dropup-detail')); ?></td>
  <td>boolean</td>
  <td>indicates whether dropdowns should be dropups instead.</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
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
<?php echo CHtml::link('linkLabelWrapper', array('/site/doc', 'view' => 'YdHomeMenu', '#' => 'linkLabelWrapper')); ?>.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CWidget', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td>Returns the owner/creator of this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="scrollspy">
  <td><?php echo CHtml::link('scrollspy', array('/site/doc', 'view' => 'TbMenu', '#' => 'scrollspy-detail')); ?></td>
  <td>string|array</td>
  <td>the scrollspy target or configuration.</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
</tr>
<tr class="inherited" id="skin">
  <td><?php echo CHtml::link('skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the skin to be used by this widget.</td>
  <td><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr class="inherited" id="stacked">
  <td><?php echo CHtml::link('stacked', array('/site/doc', 'view' => 'TbMenu', '#' => 'stacked-detail')); ?></td>
  <td>boolean</td>
  <td>indicates whether the menu should appear vertically stacked.</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
</tr>
<tr class="inherited" id="submenuHtmlOptions">
  <td><?php echo CHtml::link('submenuHtmlOptions', array('/site/doc', 'view' => 'CMenu', '#' => 'submenuHtmlOptions-detail')); ?></td>
  <td>array</td>
  <td>HTML attributes for the submenu's container tag.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
<tr class="inherited" id="type">
  <td><?php echo CHtml::link('type', array('/site/doc', 'view' => 'TbMenu', '#' => 'type-detail')); ?></td>
  <td>string</td>
  <td>the menu type.</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
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
<tr class="inherited" id="getDividerCssClass">
  <td><?php echo CHtml::link('getDividerCssClass()', array('/site/doc', 'view' => 'TbMenu', '#' => 'getDividerCssClass-detail')); ?></td>
  <td>### .getDividerCssClass()</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
</tr>
<tr class="inherited" id="getDropdownCssClass">
  <td><?php echo CHtml::link('getDropdownCssClass()', array('/site/doc', 'view' => 'TbMenu', '#' => 'getDropdownCssClass-detail')); ?></td>
  <td>### .getDropdownCssClass()</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'TbMenu', '#' => 'init-detail')); ?></td>
  <td>### .init()</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
</tr>
<tr class="inherited" id="isVertical">
  <td><?php echo CHtml::link('isVertical()', array('/site/doc', 'view' => 'TbMenu', '#' => 'isVertical-detail')); ?></td>
  <td>### .isVertical()</td>
  <td><?php echo CHtml::link('TbMenu', array('/site/doc', 'view' => 'TbMenu')); ?></td>
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
  <td>Calls <?php echo CHtml::link('renderMenu', array('/site/doc', 'view' => 'YdHomeMenu', '#' => 'renderMenu')); ?> to render the menu.</td>
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
<tr class="inherited" id="normalizeItems">
  <td><?php echo CHtml::link('normalizeItems()', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'normalizeItems-detail')); ?></td>
  <td>### .normalizeItems()</td>
  <td><?php echo CHtml::link('TbBaseMenu', array('/site/doc', 'view' => 'TbBaseMenu')); ?></td>
</tr>
<tr id="renderItem">
  <td><?php echo CHtml::link('renderItem()', array('/site/doc', 'view' => 'YdHomeMenu', '#' => 'renderItem-detail')); ?></td>
  <td>Renders a single item in the menu.</td>
  <td>YdHomeMenu</td>
</tr>
<tr class="inherited" id="renderMenu">
  <td><?php echo CHtml::link('renderMenu()', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'renderMenu-detail')); ?></td>
  <td>### .renderMenu()</td>
  <td><?php echo CHtml::link('TbBaseMenu', array('/site/doc', 'view' => 'TbBaseMenu')); ?></td>
</tr>
<tr class="inherited" id="renderMenuItem">
  <td><?php echo CHtml::link('renderMenuItem()', array('/site/doc', 'view' => 'TbBaseMenu', '#' => 'renderMenuItem-detail')); ?></td>
  <td>### .renderMenuItem()</td>
  <td><?php echo CHtml::link('TbBaseMenu', array('/site/doc', 'view' => 'TbBaseMenu')); ?></td>
</tr>
<tr class="inherited" id="renderMenuRecursive">
  <td><?php echo CHtml::link('renderMenuRecursive()', array('/site/doc', 'view' => 'CMenu', '#' => 'renderMenuRecursive-detail')); ?></td>
  <td>Recursively renders the menu items.</td>
  <td><?php echo CHtml::link('CMenu', array('/site/doc', 'view' => 'CMenu')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="renderItem-detail">
renderItem()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>renderItem</b>(array $item)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$item</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the item configuration</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendered item</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/widgets/YdHomeMenu.php#L16">dressing/widgets/YdHomeMenu.php#L16</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">renderItem</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;===&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">][</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'homemenu-item-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[^0-9a-z]/i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&lt;span&nbsp;class="icon-home&nbsp;pull-left"&gt;&lt;img&nbsp;src="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">au</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'/menu.white/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'icon'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'.png"&nbsp;width="25"&nbsp;height="25"&nbsp;/&gt;&lt;/span&gt;&nbsp;&lt;span&nbsp;class="menu-text"&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/span&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'&lt;span&nbsp;class="menu-text"&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/span&gt;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'header'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'linkOptions'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Renders a single item in the menu.</p>


