<?php
$this->pageTitle = $this->pageHeading = 'YdEavBaseBehavior';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdEavBaseBehavior';
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
  <td>class YdEavBaseBehavior &raquo;
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
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr>
  <th>Version</th>
  <td>0.5</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php">dressing\behaviors\YdEavBaseBehavior.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Veaceslav Medvedev &lt;slavcopost@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdEavBaseBehavior class file.
<br/><br/>
Entity-Attribute-Value behavior.
Allows model to work with custom fields on the fly (EAV pattern).</div>
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
<tr id="attributeField">
  <td><?php echo CHtml::link('attributeField', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'attributeField-detail')); ?></td>
  <td>string</td>
  <td>name of the column to store attribute key.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="attributesPrefix">
  <td><?php echo CHtml::link('attributesPrefix', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'attributesPrefix-detail')); ?></td>
  <td>string</td>
  <td>prefix for each attribute.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="cacheId">
  <td><?php echo CHtml::link('cacheId', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'cacheId-detail')); ?></td>
  <td>string</td>
  <td>caching component Id.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="eavAttributes">
  <td><?php echo CHtml::link('eavAttributes', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'eavAttributes-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr class="inherited" id="enabled">
  <td><?php echo CHtml::link('enabled', array('/site/doc', 'view' => 'CBehavior', '#' => 'enabled-detail')); ?></td>
  <td>boolean</td>
  <td>whether this behavior is enabled</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr id="entityField">
  <td><?php echo CHtml::link('entityField', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'entityField-detail')); ?></td>
  <td>string</td>
  <td>name of the column to store entity name.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CBehavior', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
  <td>the owner component that this behavior is attached to.</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr id="preload">
  <td><?php echo CHtml::link('preload', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'preload-detail')); ?></td>
  <td>boolean</td>
  <td>loaded attributes after find model.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="tableName">
  <td><?php echo CHtml::link('tableName', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'tableName-detail')); ?></td>
  <td>string</td>
  <td>name of the table where data is stored.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="valueField">
  <td><?php echo CHtml::link('valueField', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'valueField-detail')); ?></td>
  <td>string</td>
  <td>name of the column to store value.</td>
  <td>YdEavBaseBehavior</td>
</tr>
</table>
</div>
<div class="summary docProperty">
<h2>Protected Properties</h2>

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
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'attributes-detail')); ?></td>
  <td><?php echo CHtml::link('CAttributeCollection', array('/site/doc', 'view' => 'CAttributeCollection')); ?></td>
  <td>attributes store.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="cache">
  <td><?php echo CHtml::link('cache', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'cache-detail')); ?></td>
  <td><?php echo CHtml::link('ICache', array('/site/doc', 'view' => 'ICache')); ?></td>
  <td>cache component object.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="cacheKey">
  <td><?php echo CHtml::link('cacheKey', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'cacheKey-detail')); ?></td>
  <td>string</td>
  <td>Returns key for caching model attributes.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="changedAttributes">
  <td><?php echo CHtml::link('changedAttributes', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'changedAttributes-detail')); ?></td>
  <td><?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?></td>
  <td>changed attributes list.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="deleteCommand">
  <td><?php echo CHtml::link('deleteCommand', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'deleteCommand-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="deleteEavAttributesCriteria">
  <td><?php echo CHtml::link('deleteEavAttributesCriteria', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'deleteEavAttributesCriteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="loadEavAttributesCriteria">
  <td><?php echo CHtml::link('loadEavAttributesCriteria', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'loadEavAttributesCriteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="modelId">
  <td><?php echo CHtml::link('modelId', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'modelId-detail')); ?></td>
  <td>mixed</td>
  <td>Returns owner model id.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="modelTableFk">
  <td><?php echo CHtml::link('modelTableFk', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'modelTableFk-detail')); ?></td>
  <td>string</td>
  <td>Returns owner model FK name.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="safeAttributes">
  <td><?php echo CHtml::link('safeAttributes', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'safeAttributes-detail')); ?></td>
  <td><?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?></td>
  <td>safe attributes list.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="safeAttributesArray">
  <td><?php echo CHtml::link('safeAttributesArray', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'safeAttributesArray-detail')); ?></td>
  <td>array</td>
  <td>Return safe attributes key. If not set returns all keys.</td>
  <td>YdEavBaseBehavior</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => '__construct-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
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
<tr id="afterDelete">
  <td><?php echo CHtml::link('afterDelete()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'afterDelete-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="afterFind">
  <td><?php echo CHtml::link('afterFind()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'afterFind-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="afterSave">
  <td><?php echo CHtml::link('afterSave()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'afterSave-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr class="inherited" id="asa">
  <td><?php echo CHtml::link('asa()', array('/site/doc', 'view' => 'CComponent', '#' => 'asa-detail')); ?></td>
  <td>Returns the named behavior object.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="attach">
  <td><?php echo CHtml::link('attach()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'attach-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
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
<tr id="deleteEavAttributes">
  <td><?php echo CHtml::link('deleteEavAttributes()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'deleteEavAttributes-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
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
<tr id="getEavAttribute">
  <td><?php echo CHtml::link('getEavAttribute()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getEavAttribute-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getEavAttributes">
  <td><?php echo CHtml::link('getEavAttributes()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getEavAttributes-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
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
<tr class="inherited" id="getOwner">
  <td><?php echo CHtml::link('getOwner()', array('/site/doc', 'view' => 'CBehavior', '#' => 'getOwner-detail')); ?></td>
  <td>Returns the owner component that this behavior is attached to.</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
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
<tr id="loadEavAttributes">
  <td><?php echo CHtml::link('loadEavAttributes()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'loadEavAttributes-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="saveEavAttributes">
  <td><?php echo CHtml::link('saveEavAttributes()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'saveEavAttributes-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="setEavAttribute">
  <td><?php echo CHtml::link('setEavAttribute()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'setEavAttribute-detail')); ?></td>
  <td>Sets attribute key.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="setEavAttributes">
  <td><?php echo CHtml::link('setEavAttributes()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'setEavAttributes-detail')); ?></td>
  <td>Sets attributes values for change.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr class="inherited" id="setEnabled">
  <td><?php echo CHtml::link('setEnabled()', array('/site/doc', 'view' => 'CBehavior', '#' => 'setEnabled-detail')); ?></td>
  <td>Sets whether this behavior is enabled</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr id="setModelTableFk">
  <td><?php echo CHtml::link('setModelTableFk()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'setModelTableFk-detail')); ?></td>
  <td>Set owner model FK name.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="setSafeAttributes">
  <td><?php echo CHtml::link('setSafeAttributes()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'setSafeAttributes-detail')); ?></td>
  <td>Set safe attributes array.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="withEavAttributes">
  <td><?php echo CHtml::link('withEavAttributes()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'withEavAttributes-detail')); ?></td>
  <td>Limit current AR query to have all attributes and values specified.</td>
  <td>YdEavBaseBehavior</td>
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
<tr id="getCacheKey">
  <td><?php echo CHtml::link('getCacheKey()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getCacheKey-detail')); ?></td>
  <td>Returns key for caching model attributes.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getDeleteCommand">
  <td><?php echo CHtml::link('getDeleteCommand()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getDeleteCommand-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getDeleteEavAttributesCriteria">
  <td><?php echo CHtml::link('getDeleteEavAttributesCriteria()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getDeleteEavAttributesCriteria-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getFindByEavAttributesCriteria">
  <td><?php echo CHtml::link('getFindByEavAttributesCriteria()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getFindByEavAttributesCriteria-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getLoadEavAttributesCommand">
  <td><?php echo CHtml::link('getLoadEavAttributesCommand()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getLoadEavAttributesCommand-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getLoadEavAttributesCriteria">
  <td><?php echo CHtml::link('getLoadEavAttributesCriteria()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getLoadEavAttributesCriteria-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getModelId">
  <td><?php echo CHtml::link('getModelId()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getModelId-detail')); ?></td>
  <td>Returns owner model id.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getModelTableFk">
  <td><?php echo CHtml::link('getModelTableFk()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getModelTableFk-detail')); ?></td>
  <td>Returns owner model FK name.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getSafeAttributesArray">
  <td><?php echo CHtml::link('getSafeAttributesArray()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getSafeAttributesArray-detail')); ?></td>
  <td>Return safe attributes key. If not set returns all keys.</td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="getSaveEavAttributeCommand">
  <td><?php echo CHtml::link('getSaveEavAttributeCommand()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getSaveEavAttributeCommand-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="hasSafeAttribute">
  <td><?php echo CHtml::link('hasSafeAttribute()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'hasSafeAttribute-detail')); ?></td>
  <td></td>
  <td>YdEavBaseBehavior</td>
</tr>
<tr id="stripPrefix">
  <td><?php echo CHtml::link('stripPrefix()', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'stripPrefix-detail')); ?></td>
  <td>Strip prefix from attribute key.</td>
  <td>YdEavBaseBehavior</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="attributeField-detail">
attributeField<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$attributeField</b>;</div>

<p>name of the column to store attribute key.</p>


<div class="detailHeader" id="attributes-detail">
attributes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <?php echo CHtml::link('CAttributeCollection', array('/site/doc', 'view' => 'CAttributeCollection')); ?> <b>$attributes</b>;</div>

<p>attributes store.</p>


<div class="detailHeader" id="attributesPrefix-detail">
attributesPrefix<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$attributesPrefix</b>;</div>

<p>prefix for each attribute.</p>


<div class="detailHeader" id="cache-detail">
cache<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <?php echo CHtml::link('ICache', array('/site/doc', 'view' => 'ICache')); ?> <b>$cache</b>;</div>

<p>cache component object.</p>


<div class="detailHeader" id="cacheId-detail">
cacheId<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cacheId</b>;</div>

<p>caching component Id.</p>


<div class="detailHeader" id="cacheKey-detail">
cacheKey<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected string <?php echo CHtml::link('<b>getCacheKey</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getCacheKey')); ?>()</div>

<p>Returns key for caching model attributes.</p>


<div class="detailHeader" id="changedAttributes-detail">
changedAttributes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?> <b>$changedAttributes</b>;</div>

<p>changed attributes list.</p>


<div class="detailHeader" id="deleteCommand-detail">
deleteCommand<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <?php echo CHtml::link('<b>getDeleteCommand</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getDeleteCommand')); ?>($attributes $attributes=array (
))</div>

<p></p>


<div class="detailHeader" id="deleteEavAttributesCriteria-detail">
deleteEavAttributesCriteria<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <?php echo CHtml::link('<b>getDeleteEavAttributesCriteria</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getDeleteEavAttributesCriteria')); ?>($attributes $attributes=array (
))</div>

<p></p>


<div class="detailHeader" id="eavAttributes-detail">
eavAttributes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getEavAttributes</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getEavAttributes')); ?>(array $attributes=array (
))<br/>public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <?php echo CHtml::link('<b>setEavAttributes</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'setEavAttributes')); ?>(array $attributes, boolean $save=false)</div>

<p></p>


<div class="detailHeader" id="entityField-detail">
entityField<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$entityField</b>;</div>

<p>name of the column to store entity name.</p>


<div class="detailHeader" id="loadEavAttributesCriteria-detail">
loadEavAttributesCriteria<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <?php echo CHtml::link('<b>getLoadEavAttributesCriteria</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getLoadEavAttributesCriteria')); ?>($attributes $attributes=array (
))</div>

<p></p>


<div class="detailHeader" id="modelId-detail">
modelId<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected mixed <?php echo CHtml::link('<b>getModelId</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getModelId')); ?>()</div>

<p>Returns owner model id.</p>


<div class="detailHeader" id="modelTableFk-detail">
modelTableFk<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected string <?php echo CHtml::link('<b>getModelTableFk</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getModelTableFk')); ?>()<br/>public void <?php echo CHtml::link('<b>setModelTableFk</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'setModelTableFk')); ?>(string $modelTableFk)</div>

<p>Returns owner model FK name.</p>


<div class="detailHeader" id="preload-detail">
preload<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$preload</b>;</div>

<p>loaded attributes after find model.</p>


<div class="detailHeader" id="safeAttributes-detail">
safeAttributes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?> <b>$safeAttributes</b>;</div>

<p>safe attributes list.</p>


<div class="detailHeader" id="safeAttributesArray-detail">
safeAttributesArray<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected array <?php echo CHtml::link('<b>getSafeAttributesArray</b>', array('/site/doc', 'view' => 'YdEavBaseBehavior', '#' => 'getSafeAttributesArray')); ?>()</div>

<p>Return safe attributes key. If not set returns all keys.</p>


<div class="detailHeader" id="tableName-detail">
tableName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$tableName</b>;</div>

<p>name of the table where data is stored. Required to be set on init behavior.</p>


<div class="detailHeader" id="valueField-detail">
valueField<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$valueField</b>;</div>

<p>name of the column to store value.</p>


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
public void <b>__construct</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L194">dressing\behaviors\YdEavBaseBehavior.php#L194</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Prepare&nbsp;attributes&nbsp;collection.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CAttributeCollection</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">caseSensitive&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Prepare&nbsp;safe&nbsp;attributes&nbsp;list.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">safeAttributes&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CList</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Prepare&nbsp;changed&nbsp;attributes&nbsp;list.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">changedAttributes&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CList</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="afterDelete-detail">
afterDelete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>afterDelete</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L253">dressing\behaviors\YdEavBaseBehavior.php#L253</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Delete&nbsp;all&nbsp;attributes.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deleteEavAttributes</span><span style="color: #007700">(array(),&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Call&nbsp;parent&nbsp;method&nbsp;for&nbsp;convenience.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">afterDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="afterFind-detail">
afterFind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>afterFind</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L264">dressing\behaviors\YdEavBaseBehavior.php#L264</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterFind</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Load&nbsp;attributes&nbsp;for&nbsp;model.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">preload</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSafeAttributesArray</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Call&nbsp;parent&nbsp;method&nbsp;for&nbsp;convenience.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">afterFind</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="afterSave-detail">
afterSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>afterSave</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L238">dressing\behaviors\YdEavBaseBehavior.php#L238</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;TODO&nbsp;afterSave&nbsp;не&nbsp;срабатывает&nbsp;если&nbsp;модель&nbsp;не&nbsp;была&nbsp;изменена<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Save&nbsp;changed&nbsp;attributes.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">changedAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">changedAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Call&nbsp;parent&nbsp;method&nbsp;for&nbsp;convenience.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="attach-detail">
attach()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>attach</b>(<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?> $owner)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$owner</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L209">dressing\behaviors\YdEavBaseBehavior.php#L209</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">attach</span><span style="color: #007700">(</span><span style="color: #0000BB">$owner</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Check&nbsp;required&nbsp;property&nbsp;tableName.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">)&nbsp;||&nbsp;empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Property&nbsp;"{class}.{property}"&nbsp;is&nbsp;not&nbsp;defined.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{class}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'{property}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'tableName'</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Prepare&nbsp;translate&nbsp;component&nbsp;for&nbsp;behavior&nbsp;messages.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">hasComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'Messages'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">setComponents</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'Messages'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'CPhpMessageSource'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'basePath'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'messages'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Prepare&nbsp;cache&nbsp;component.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cache&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheId</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cache&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">ICache</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;not&nbsp;set&nbsp;cache&nbsp;component,&nbsp;use&nbsp;dummy&nbsp;cache.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cache&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CDummyCache</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Call&nbsp;parent&nbsp;method&nbsp;for&nbsp;convenience.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">attach</span><span style="color: #007700">(</span><span style="color: #0000BB">$owner</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="deleteEavAttributes-detail">
deleteEavAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>deleteEavAttributes</b>(array $attributes=array (
), boolean $save=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes key for delete.</td>
</tr>
<tr>
  <td class="paramNameCol">$save</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether auto save attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L342">dressing\behaviors\YdEavBaseBehavior.php#L342</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">deleteEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$save&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;not&nbsp;set&nbsp;attributes&nbsp;for&nbsp;deleting,&nbsp;delete&nbsp;all.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(empty(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keys</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Delete&nbsp;each&nbsp;attributes.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">changedAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Auto&nbsp;save&nbsp;if&nbsp;set.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$save</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Return&nbsp;model.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getCacheKey-detail">
getCacheKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getCacheKey</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L113">dressing\behaviors\YdEavBaseBehavior.php#L113</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getCacheKey</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributesPrefix&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModelId</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns key for caching model attributes.</p>


<div class="detailHeader" id="getDeleteCommand-detail">
getDeleteCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>getDeleteCommand</b>($attributes $attributes=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">$attributes</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L484">dressing\behaviors\YdEavBaseBehavior.php#L484</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getDeleteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;array())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">createDeleteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDeleteEavAttributesCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getDeleteEavAttributesCriteria-detail">
getDeleteEavAttributesCriteria()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <b>getDeleteEavAttributesCriteria</b>($attributes $attributes=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">$attributes</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L509">dressing\behaviors\YdEavBaseBehavior.php#L509</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getDeleteEavAttributesCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;array())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLoadEavAttributesCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getEavAttribute-detail">
getEavAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getEavAttribute</b>(string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">attribute for get.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L428">dressing\behaviors\YdEavBaseBehavior.php#L428</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getEavAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEavAttributes</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getEavAttributes-detail">
getEavAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getEavAttributes</b>(array $attributes=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes key for get.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L392">dressing\behaviors\YdEavBaseBehavior.php#L392</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;array())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Get&nbsp;all&nbsp;attributes&nbsp;if&nbsp;not&nbsp;specified.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(empty(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSafeAttributesArray</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Values&nbsp;array.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Queue&nbsp;for&nbsp;load.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$loadQueue&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CList</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Check&nbsp;is&nbsp;safe.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasSafeAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;attribute&nbsp;not&nbsp;set&nbsp;and&nbsp;not&nbsp;load,&nbsp;prepare&nbsp;array&nbsp;for&nbsp;loaded.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">preload&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]&nbsp;===&nbsp;</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$loadQueue</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;array&nbsp;for&nbsp;loaded&nbsp;not&nbsp;empty,&nbsp;load&nbsp;attributes.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">preload&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$loadQueue</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count</span><span style="color: #007700">()&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$loadQueue</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$loadQueue&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Delete&nbsp;load&nbsp;queue.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">unset(</span><span style="color: #0000BB">$loadQueue</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Return&nbsp;values.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getFindByEavAttributesCriteria-detail">
getFindByEavAttributesCriteria()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <b>getFindByEavAttributesCriteria</b>($attributes $attributes)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">$attributes</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L518">dressing\behaviors\YdEavBaseBehavior.php#L518</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getFindByEavAttributesCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pk&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModelTableFk</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;search&nbsp;models&nbsp;with&nbsp;attribute&nbsp;name&nbsp;with&nbsp;specified&nbsp;values.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$conn</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">))&nbsp;</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$values</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$conn</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\nJOIN&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;eavb</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;&nbsp;</span><span style="color: #DD0000">"\nON&nbsp;t.</span><span style="color: #007700">{</span><span style="color: #0000BB">$pk</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;eavb</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">entityField</span><span style="color: #007700">}</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;&nbsp;</span><span style="color: #DD0000">"\nAND&nbsp;eavb</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeField</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;&nbsp;</span><span style="color: #DD0000">"\nAND&nbsp;eavb</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">valueField</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;search&nbsp;models&nbsp;with&nbsp;attribute&nbsp;name&nbsp;with&nbsp;anything&nbsp;values.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">elseif&nbsp;(</span><span style="color: #0000BB">is_int</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$conn</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\nJOIN&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;eavb</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;&nbsp;</span><span style="color: #DD0000">"\nON&nbsp;t.</span><span style="color: #007700">{</span><span style="color: #0000BB">$pk</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;eavb</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">entityField</span><span style="color: #007700">}</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;&nbsp;</span><span style="color: #DD0000">"\nAND&nbsp;eavb</span><span style="color: #0000BB">$i</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeField</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">distinct&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"t.</span><span style="color: #007700">{</span><span style="color: #0000BB">$pk</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getLoadEavAttributesCommand-detail">
getLoadEavAttributesCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>getLoadEavAttributesCommand</b>($attributes $attributes)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">$attributes</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L473">dressing\behaviors\YdEavBaseBehavior.php#L473</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getLoadEavAttributesCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">createFindCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLoadEavAttributesCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getLoadEavAttributesCriteria-detail">
getLoadEavAttributesCriteria()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <b>getLoadEavAttributesCriteria</b>($attributes $attributes=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">$attributes</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L495">dressing\behaviors\YdEavBaseBehavior.php#L495</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getLoadEavAttributesCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;array())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCondition</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">entityField</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModelId</span><span style="color: #007700">()}</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addInCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeField</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getModelId-detail">
getModelId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>getModelId</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L104">dressing\behaviors\YdEavBaseBehavior.php#L104</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getModelId</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModelTableFk</span><span style="color: #007700">()};<br />}</span>
</span>
</code></div>
</div>
<p>Returns owner model id.</p>


<div class="detailHeader" id="getModelTableFk-detail">
getModelTableFk()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getModelTableFk</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L134">dressing\behaviors\YdEavBaseBehavior.php#L134</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getModelTableFk</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Check&nbsp;required&nbsp;property&nbsp;modelTableFk.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelTableFk</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">hasAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelTableFk</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;property&nbsp;modelTableFk&nbsp;not&nbsp;set,&nbsp;trying&nbsp;to&nbsp;get&nbsp;a&nbsp;primary&nbsp;key&nbsp;from&nbsp;model&nbsp;table.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelTableFk&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelTableFk</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yiiext'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;"{table}"&nbsp;does&nbsp;not&nbsp;have&nbsp;a&nbsp;primary&nbsp;key&nbsp;defined.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{table}'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">())));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelTableFk</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns owner model FK name.</p>


<div class="detailHeader" id="getSafeAttributesArray-detail">
getSafeAttributesArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>getSafeAttributesArray</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L175">dressing\behaviors\YdEavBaseBehavior.php#L175</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSafeAttributesArray</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">safeAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count</span><span style="color: #007700">()&nbsp;==&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">keys&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">safeAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Return safe attributes key. If not set returns all keys.</p>


<div class="detailHeader" id="getSaveEavAttributeCommand-detail">
getSaveEavAttributeCommand()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?> <b>getSaveEavAttributeCommand</b>($attribute $attribute, $value $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">$attribute</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">$value</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L457">dressing\behaviors\YdEavBaseBehavior.php#L457</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSaveEavAttributeCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">entityField&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModelId</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeField&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">valueField&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">getCommandBuilder</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">createInsertCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="hasSafeAttribute-detail">
hasSafeAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>hasSafeAttribute</b>(string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">attribute key</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L184">dressing\behaviors\YdEavBaseBehavior.php#L184</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">hasSafeAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">safeAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count</span><span style="color: #007700">()&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">safeAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">contains</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="loadEavAttributes-detail">
loadEavAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>loadEavAttributes</b>(array $attributes)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes key for load.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L313">dressing\behaviors\YdEavBaseBehavior.php#L313</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">loadEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;exists&nbsp;cache,&nbsp;return&nbsp;it.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCacheKey</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Query&nbsp;DB.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLoadEavAttributesCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stripPrefix</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeField</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">valueField</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Check&nbsp;if&nbsp;value&nbsp;exists.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$current&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$current&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$current</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$current</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">:&nbsp;array(</span><span style="color: #0000BB">$current</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Save&nbsp;loaded&nbsp;attributes&nbsp;to&nbsp;cache.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCacheKey</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Return&nbsp;model.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="saveEavAttributes-detail">
saveEavAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>saveEavAttributes</b>(array $attributes)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes key for save.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L277">dressing\behaviors\YdEavBaseBehavior.php#L277</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">saveEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Delete&nbsp;old&nbsp;attributes&nbsp;values&nbsp;from&nbsp;DB.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDeleteCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Process&nbsp;each&nbsp;attributes.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Skip&nbsp;if&nbsp;null&nbsp;attributes.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Create&nbsp;array&nbsp;of&nbsp;values&nbsp;for&nbsp;convenience.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$values</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Save&nbsp;each&nbsp;value&nbsp;of&nbsp;attribute&nbsp;into&nbsp;DB.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSaveEavAttributeCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributesPrefix&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Remove&nbsp;from&nbsp;changed&nbsp;list.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">changedAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">remove</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Save&nbsp;attributes&nbsp;to&nbsp;cache.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCacheKey</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Or&nbsp;delete&nbsp;cache&nbsp;is&nbsp;attributes&nbsp;not&nbsp;exists.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCacheKey</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Return&nbsp;model.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setEavAttribute-detail">
setEavAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>setEavAttribute</b>(string $attribute, mixed $value, boolean $save=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">attribute key.</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">attribute value.</td>
</tr>
<tr>
  <td class="paramNameCol">$save</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether auto save attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L384">dressing\behaviors\YdEavBaseBehavior.php#L384</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setEavAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$save&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setEavAttributes</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$save</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setEavAttributes-detail">
setEavAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>setEavAttributes</b>(array $attributes, boolean $save=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes values for change.</td>
</tr>
<tr>
  <td class="paramNameCol">$save</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether auto save attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L365">dressing\behaviors\YdEavBaseBehavior.php#L365</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$save&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">changedAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Auto&nbsp;save&nbsp;if&nbsp;set.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$save</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Return&nbsp;model.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setModelTableFk-detail">
setModelTableFk()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setModelTableFk</b>(string $modelTableFk)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$modelTableFk</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">owner model FK name.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L122">dressing\behaviors\YdEavBaseBehavior.php#L122</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setModelTableFk</span><span style="color: #007700">(</span><span style="color: #0000BB">$modelTableFk</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$modelTableFk</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$modelTableFk</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelTableFk&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$modelTableFk</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Set owner model FK name.</p>


<div class="detailHeader" id="setSafeAttributes-detail">
setSafeAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSafeAttributes</b>(array $safeAttributes)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$safeAttributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">safe attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L166">dressing\behaviors\YdEavBaseBehavior.php#L166</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSafeAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$safeAttributes</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">safeAttributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">copyFrom</span><span style="color: #007700">(</span><span style="color: #0000BB">$safeAttributes</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Set safe attributes array.</p>


<div class="detailHeader" id="stripPrefix-detail">
stripPrefix()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>stripPrefix</b>(string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">attribute key</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L153">dressing\behaviors\YdEavBaseBehavior.php#L153</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">stripPrefix</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Remove&nbsp;prefix&nbsp;if&nbsp;exists.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributesPrefix</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributesPrefix</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributesPrefix</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Strip prefix from attribute key.</p>


<div class="detailHeader" id="withEavAttributes-detail">
withEavAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> <b>withEavAttributes</b>(array $attributes=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attributes</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes values or key for filter models.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavBaseBehavior.php#L438">dressing\behaviors\YdEavBaseBehavior.php#L438</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">withEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;array())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;not&nbsp;set&nbsp;attributes,&nbsp;search&nbsp;models&nbsp;with&nbsp;anything&nbsp;attributes&nbsp;exists.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(empty(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSafeAttributesArray</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$attributes&nbsp;be&nbsp;array&nbsp;of&nbsp;elements:&nbsp;$attribute&nbsp;=&gt;&nbsp;$values<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFindByEavAttributesCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Merge&nbsp;model&nbsp;criteria.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getDbCriteria</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">mergeWith</span><span style="color: #007700">(</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Return&nbsp;model.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Limit current AR query to have all attributes and values specified.</p>


