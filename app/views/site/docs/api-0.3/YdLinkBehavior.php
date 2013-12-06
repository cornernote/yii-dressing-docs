<?php
$this->pageTitle = $this->pageHeading = 'YdLinkBehavior';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdLinkBehavior';
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
  <td><?php echo CHtml::link('dressing.behaviors', array('/site/doc', '#' => 'dressing.behaviors')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdLinkBehavior &raquo;
<?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?> &raquo;
<?php echo CHtml::link('CModelBehavior', array('/site/doc', 'view' => 'CModelBehavior')); ?> &raquo;
<?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IBehavior', array('/site/doc', 'view' => 'IBehavior')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php">dressing/behaviors/YdLinkBehavior.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdLinkBehavior gives models a url() and link() method.</div>
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
<tr id="controllerName">
  <td><?php echo CHtml::link('controllerName', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'controllerName-detail')); ?></td>
  <td>string</td>
  <td>Returns the name of the controller to be used in links</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="defaultAction">
  <td><?php echo CHtml::link('defaultAction', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'defaultAction-detail')); ?></td>
  <td>string</td>
  <td>The name of default action for the model, usually view</td>
  <td>YdLinkBehavior</td>
</tr>
<tr class="inherited" id="enabled">
  <td><?php echo CHtml::link('enabled', array('/site/doc', 'view' => 'CBehavior', '#' => 'enabled-detail')); ?></td>
  <td>boolean</td>
  <td>whether this behavior is enabled</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr id="idString">
  <td><?php echo CHtml::link('idString', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'idString-detail')); ?></td>
  <td>string</td>
  <td>The name and id of the model</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="link">
  <td><?php echo CHtml::link('link', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'link-detail')); ?></td>
  <td>string</td>
  <td>Returns a Link to the model</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="menuLinks">
  <td><?php echo CHtml::link('menuLinks', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'menuLinks-detail')); ?></td>
  <td>array</td>
  <td>Override this in your model to return an array of links to be used in a menu</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>The name of this model to be used in titles</td>
  <td>YdLinkBehavior</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CBehavior', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
  <td>the owner component that this behavior is attached to.</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
  <td></td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="primaryKeySchemaString">
  <td><?php echo CHtml::link('primaryKeySchemaString', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'primaryKeySchemaString-detail')); ?></td>
  <td>string</td>
  <td>Returns Primary Key Schema as a string</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="primaryKeyString">
  <td><?php echo CHtml::link('primaryKeyString', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'primaryKeyString-detail')); ?></td>
  <td>string</td>
  <td>Returns Primary Key as a string</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="url">
  <td><?php echo CHtml::link('url', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'url-detail')); ?></td>
  <td>array</td>
  <td>Returns a URL Array to the model</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="urlString">
  <td><?php echo CHtml::link('urlString', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'urlString-detail')); ?></td>
  <td>string</td>
  <td>Returns a URL String to the model</td>
  <td>YdLinkBehavior</td>
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
<tr class="inherited" id="attach">
  <td><?php echo CHtml::link('attach()', array('/site/doc', 'view' => 'CBehavior', '#' => 'attach-detail')); ?></td>
  <td>Attaches the behavior object to the component.</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
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
<tr class="inherited" id="detach">
  <td><?php echo CHtml::link('detach()', array('/site/doc', 'view' => 'CBehavior', '#' => 'detach-detail')); ?></td>
  <td>Detaches the behavior object from the component.</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
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
<tr class="inherited" id="events">
  <td><?php echo CHtml::link('events()', array('/site/doc', 'view' => 'CActiveRecordBehavior', '#' => 'events-detail')); ?></td>
  <td>Declares events and the corresponding event handler methods.</td>
  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?></td>
</tr>
<tr id="getControllerName">
  <td><?php echo CHtml::link('getControllerName()', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getControllerName-detail')); ?></td>
  <td>Returns the name of the controller to be used in links</td>
  <td>YdLinkBehavior</td>
</tr>
<tr class="inherited" id="getEnabled">
  <td><?php echo CHtml::link('getEnabled()', array('/site/doc', 'view' => 'CBehavior', '#' => 'getEnabled-detail')); ?></td>
  <td>Returns whether this behavior is enabled</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getIdString">
  <td><?php echo CHtml::link('getIdString()', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getIdString-detail')); ?></td>
  <td>The name and id of the model</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="getLink">
  <td><?php echo CHtml::link('getLink()', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getLink-detail')); ?></td>
  <td>Returns a Link to the model</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="getMenuLinks">
  <td><?php echo CHtml::link('getMenuLinks()', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getMenuLinks-detail')); ?></td>
  <td>Override this in your model to return an array of links to be used in a menu</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getName-detail')); ?></td>
  <td>The name of this model to be used in titles</td>
  <td>YdLinkBehavior</td>
</tr>
<tr class="inherited" id="getOwner">
  <td><?php echo CHtml::link('getOwner()', array('/site/doc', 'view' => 'CBehavior', '#' => 'getOwner-detail')); ?></td>
  <td>Returns the owner component that this behavior is attached to.</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr id="getPrimaryKeySchemaString">
  <td><?php echo CHtml::link('getPrimaryKeySchemaString()', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getPrimaryKeySchemaString-detail')); ?></td>
  <td>Returns Primary Key Schema as a string</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="getPrimaryKeyString">
  <td><?php echo CHtml::link('getPrimaryKeyString()', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getPrimaryKeyString-detail')); ?></td>
  <td>Returns Primary Key as a string</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="getUrl">
  <td><?php echo CHtml::link('getUrl()', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getUrl-detail')); ?></td>
  <td>Returns a URL Array to the model</td>
  <td>YdLinkBehavior</td>
</tr>
<tr id="getUrlString">
  <td><?php echo CHtml::link('getUrlString()', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getUrlString-detail')); ?></td>
  <td>Returns a URL String to the model</td>
  <td>YdLinkBehavior</td>
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
<tr class="inherited" id="setEnabled">
  <td><?php echo CHtml::link('setEnabled()', array('/site/doc', 'view' => 'CBehavior', '#' => 'setEnabled-detail')); ?></td>
  <td>Sets whether this behavior is enabled</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
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
<tr class="inherited" id="afterConstruct">
  <td><?php echo CHtml::link('afterConstruct()', array('/site/doc', 'view' => 'CModelBehavior', '#' => 'afterConstruct-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CModel::onAfterConstruct', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterConstruct')); ?> event.</td>
  <td><?php echo CHtml::link('CModelBehavior', array('/site/doc', 'view' => 'CModelBehavior')); ?></td>
</tr>
<tr class="inherited" id="afterDelete">
  <td><?php echo CHtml::link('afterDelete()', array('/site/doc', 'view' => 'CActiveRecordBehavior', '#' => 'afterDelete-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CActiveRecord::onAfterDelete', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterDelete')); ?> event.</td>
  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?></td>
</tr>
<tr class="inherited" id="afterFind">
  <td><?php echo CHtml::link('afterFind()', array('/site/doc', 'view' => 'CActiveRecordBehavior', '#' => 'afterFind-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CActiveRecord::onAfterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterFind')); ?> event.</td>
  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?></td>
</tr>
<tr class="inherited" id="afterSave">
  <td><?php echo CHtml::link('afterSave()', array('/site/doc', 'view' => 'CActiveRecordBehavior', '#' => 'afterSave-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CActiveRecord::onAfterSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterSave')); ?> event.</td>
  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?></td>
</tr>
<tr class="inherited" id="afterValidate">
  <td><?php echo CHtml::link('afterValidate()', array('/site/doc', 'view' => 'CModelBehavior', '#' => 'afterValidate-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CModel::onAfterValidate', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterValidate')); ?> event.</td>
  <td><?php echo CHtml::link('CModelBehavior', array('/site/doc', 'view' => 'CModelBehavior')); ?></td>
</tr>
<tr class="inherited" id="beforeCount">
  <td><?php echo CHtml::link('beforeCount()', array('/site/doc', 'view' => 'CActiveRecordBehavior', '#' => 'beforeCount-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CActiveRecord::onBeforeCount', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeCount')); ?> event.</td>
  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?></td>
</tr>
<tr class="inherited" id="beforeDelete">
  <td><?php echo CHtml::link('beforeDelete()', array('/site/doc', 'view' => 'CActiveRecordBehavior', '#' => 'beforeDelete-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CActiveRecord::onBeforeDelete', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeDelete')); ?> event.</td>
  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?></td>
</tr>
<tr class="inherited" id="beforeFind">
  <td><?php echo CHtml::link('beforeFind()', array('/site/doc', 'view' => 'CActiveRecordBehavior', '#' => 'beforeFind-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CActiveRecord::onBeforeFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeFind')); ?> event.</td>
  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?></td>
</tr>
<tr class="inherited" id="beforeSave">
  <td><?php echo CHtml::link('beforeSave()', array('/site/doc', 'view' => 'CActiveRecordBehavior', '#' => 'beforeSave-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CActiveRecord::onBeforeSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeSave')); ?> event.</td>
  <td><?php echo CHtml::link('CActiveRecordBehavior', array('/site/doc', 'view' => 'CActiveRecordBehavior')); ?></td>
</tr>
<tr class="inherited" id="beforeValidate">
  <td><?php echo CHtml::link('beforeValidate()', array('/site/doc', 'view' => 'CModelBehavior', '#' => 'beforeValidate-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CModel::onBeforeValidate', array('/site/doc', 'view' => 'CModel', '#' => 'onBeforeValidate')); ?> event.</td>
  <td><?php echo CHtml::link('CModelBehavior', array('/site/doc', 'view' => 'CModelBehavior')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="controllerName-detail">
controllerName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getControllerName</b>', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getControllerName')); ?>()</div>

<p>Returns the name of the controller to be used in links</p>


<div class="detailHeader" id="defaultAction-detail">
defaultAction<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$defaultAction</b>;</div>

<p>The name of default action for the model, usually view</p>


<div class="detailHeader" id="idString-detail">
idString<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getIdString</b>', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getIdString')); ?>()</div>

<p>The name and id of the model
eg: ActiveRecord-123</p>


<div class="detailHeader" id="link-detail">
link<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLink</b>', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getLink')); ?>(string $title=NULL, string $urlAction=NULL, array $urlParams=array (
), array $htmlOptions=array (
))</div>

<p>Returns a Link to the model</p>


<div class="detailHeader" id="menuLinks-detail">
menuLinks<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getMenuLinks</b>', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getMenuLinks')); ?>(bool $extra=false)</div>

<p>Override this in your model to return an array of links to be used in a menu</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getName</b>', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getName')); ?>()</div>

<p>The name of this model to be used in titles</p>


<div class="detailHeader" id="owner-detail">
owner<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?> <b>owner</b>;</div>

<p></p>


<div class="detailHeader" id="primaryKeySchemaString-detail">
primaryKeySchemaString<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getPrimaryKeySchemaString</b>', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getPrimaryKeySchemaString')); ?>()</div>

<p>Returns Primary Key Schema as a string</p>


<div class="detailHeader" id="primaryKeyString-detail">
primaryKeyString<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getPrimaryKeyString</b>', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getPrimaryKeyString')); ?>()</div>

<p>Returns Primary Key as a string</p>


<div class="detailHeader" id="url-detail">
url<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getUrl</b>', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getUrl')); ?>(string $action=NULL, array $params=array (
))</div>

<p>Returns a URL Array to the model</p>


<div class="detailHeader" id="urlString-detail">
urlString<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getUrlString</b>', array('/site/doc', 'view' => 'YdLinkBehavior', '#' => 'getUrlString')); ?>(string $action=NULL, array $params=array (
))</div>

<p>Returns a URL String to the model</p>


<h2>Method Details</h2>

<div class="detailHeader" id="getControllerName-detail">
getControllerName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getControllerName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php#L33">dressing/behaviors/YdLinkBehavior.php#L33</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getControllerName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controllerName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controllerName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">controllerName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">lcfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Returns the name of the controller to be used in links</p>


<div class="detailHeader" id="getIdString-detail">
getIdString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getIdString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php#L56">dressing/behaviors/YdLinkBehavior.php#L56</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIdString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKeyString</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>The name and id of the model
eg: ActiveRecord-123</p>


<div class="detailHeader" id="getLink-detail">
getLink()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLink</b>(string $title=NULL, string $urlAction=NULL, array $urlParams=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$title</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$urlAction</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$urlParams</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php#L101">dressing/behaviors/YdLinkBehavior.php#L101</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLink</span><span style="color: #007700">(</span><span style="color: #0000BB">$title&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$urlAction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$urlParams&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$title&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$title&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$title</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$urlAction</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$urlParams</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a Link to the model</p>


<div class="detailHeader" id="getMenuLinks-detail">
getMenuLinks()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getMenuLinks</b>(bool $extra=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$extra</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php#L114">dressing/behaviors/YdLinkBehavior.php#L114</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMenuLinks</span><span style="color: #007700">(</span><span style="color: #0000BB">$extra&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$links&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;eg:<br />&nbsp;&nbsp;&nbsp;&nbsp;//$links[]&nbsp;=&nbsp;array('label'&nbsp;=&gt;&nbsp;Yii::t('dressing',&nbsp;'Update'),&nbsp;'url'&nbsp;=&gt;&nbsp;$this-&gt;owner-&gt;getUrl('update'));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$links</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Override this in your model to return an array of links to be used in a menu</p>


<div class="detailHeader" id="getName-detail">
getName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php#L45">dressing/behaviors/YdLinkBehavior.php#L45</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIdString</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>The name of this model to be used in titles</p>


<div class="detailHeader" id="getPrimaryKeySchemaString-detail">
getPrimaryKeySchemaString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPrimaryKeySchemaString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php#L127">dressing/behaviors/YdLinkBehavior.php#L127</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrimaryKeySchemaString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns Primary Key Schema as a string</p>


<div class="detailHeader" id="getPrimaryKeyString-detail">
getPrimaryKeyString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPrimaryKeyString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php#L139">dressing/behaviors/YdLinkBehavior.php#L139</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrimaryKeyString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">()))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns Primary Key as a string</p>


<div class="detailHeader" id="getUrl-detail">
getUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getUrl</b>(string $action=NULL, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php#L68">dressing/behaviors/YdLinkBehavior.php#L68</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$action&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$action</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$action&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">defaultAction</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getControllerName</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$action</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKeyString</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;(array)</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a URL Array to the model</p>


<div class="detailHeader" id="getUrlString-detail">
getUrlString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getUrlString</b>(string $action=NULL, array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/behaviors/YdLinkBehavior.php#L85">dressing/behaviors/YdLinkBehavior.php#L85</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrlString</span><span style="color: #007700">(</span><span style="color: #0000BB">$action&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a URL String to the model</p>


