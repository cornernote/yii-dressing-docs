<?php
$this->pageTitle = $this->pageHeading = 'YdEavAuditBehavior';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdEavAuditBehavior';
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
  <td>class YdEavAuditBehavior &raquo;
<?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?> &raquo;
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
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavAuditBehavior.php">dressing\behaviors\YdEavAuditBehavior.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdEavAuditBehavior extends YdEavBehavior with support for YdAuditBehavior tracking.</div>
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
<tr class="inherited" id="attributeField">
  <td><?php echo CHtml::link('attributeField', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'attributeField-detail')); ?></td>
  <td>string</td>
  <td>name of the column to store attribute key.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="attributesPrefix">
  <td><?php echo CHtml::link('attributesPrefix', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'attributesPrefix-detail')); ?></td>
  <td>string</td>
  <td>prefix for each attribute.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr id="cacheId">
  <td><?php echo CHtml::link('cacheId', array('/site/doc', 'view' => 'YdEavAuditBehavior', '#' => 'cacheId-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdEavAuditBehavior</td>
</tr>
<tr class="inherited" id="eavAttributes">
  <td><?php echo CHtml::link('eavAttributes', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'eavAttributes-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="enabled">
  <td><?php echo CHtml::link('enabled', array('/site/doc', 'view' => 'CBehavior', '#' => 'enabled-detail')); ?></td>
  <td>boolean</td>
  <td>whether this behavior is enabled</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr class="inherited" id="entityField">
  <td><?php echo CHtml::link('entityField', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'entityField-detail')); ?></td>
  <td>string</td>
  <td>name of the column to store entity name.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CBehavior', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
  <td>the owner component that this behavior is attached to.</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'YdEavAuditBehavior', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
  <td></td>
  <td>YdEavAuditBehavior</td>
</tr>
<tr class="inherited" id="preload">
  <td><?php echo CHtml::link('preload', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'preload-detail')); ?></td>
  <td>boolean</td>
  <td>loaded attributes after find model.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="tableName">
  <td><?php echo CHtml::link('tableName', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'tableName-detail')); ?></td>
  <td>string</td>
  <td>name of the table where data is stored.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="valueField">
  <td><?php echo CHtml::link('valueField', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'valueField-detail')); ?></td>
  <td>string</td>
  <td>name of the column to store value.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
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
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'attributes-detail')); ?></td>
  <td><?php echo CHtml::link('CAttributeCollection', array('/site/doc', 'view' => 'CAttributeCollection')); ?></td>
  <td>attributes store.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="cache">
  <td><?php echo CHtml::link('cache', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'cache-detail')); ?></td>
  <td><?php echo CHtml::link('ICache', array('/site/doc', 'view' => 'ICache')); ?></td>
  <td>cache component object.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="cacheKey">
  <td><?php echo CHtml::link('cacheKey', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'cacheKey-detail')); ?></td>
  <td>string</td>
  <td>Returns key for caching model attributes.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="changedAttributes">
  <td><?php echo CHtml::link('changedAttributes', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'changedAttributes-detail')); ?></td>
  <td><?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?></td>
  <td>changed attributes list.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="deleteCommand">
  <td><?php echo CHtml::link('deleteCommand', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'deleteCommand-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCommand', array('/site/doc', 'view' => 'CDbCommand')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="deleteEavAttributesCriteria">
  <td><?php echo CHtml::link('deleteEavAttributesCriteria', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'deleteEavAttributesCriteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr id="loadEavAttributesCriteria">
  <td><?php echo CHtml::link('loadEavAttributesCriteria', array('/site/doc', 'view' => 'YdEavAuditBehavior', '#' => 'loadEavAttributesCriteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td></td>
  <td>YdEavAuditBehavior</td>
</tr>
<tr class="inherited" id="modelId">
  <td><?php echo CHtml::link('modelId', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'modelId-detail')); ?></td>
  <td>mixed</td>
  <td>Returns owner model id.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="modelTableFk">
  <td><?php echo CHtml::link('modelTableFk', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'modelTableFk-detail')); ?></td>
  <td>string</td>
  <td>Returns owner model FK name.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="safeAttributes">
  <td><?php echo CHtml::link('safeAttributes', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'safeAttributes-detail')); ?></td>
  <td><?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?></td>
  <td>safe attributes list.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="safeAttributesArray">
  <td><?php echo CHtml::link('safeAttributesArray', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'safeAttributesArray-detail')); ?></td>
  <td>array</td>
  <td>Return safe attributes key. If not set returns all keys.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => '__construct-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
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
<tr class="inherited" id="afterDelete">
  <td><?php echo CHtml::link('afterDelete()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'afterDelete-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="afterFind">
  <td><?php echo CHtml::link('afterFind()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'afterFind-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="afterSave">
  <td><?php echo CHtml::link('afterSave()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'afterSave-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="asa">
  <td><?php echo CHtml::link('asa()', array('/site/doc', 'view' => 'CComponent', '#' => 'asa-detail')); ?></td>
  <td>Returns the named behavior object.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="attach">
  <td><?php echo CHtml::link('attach()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'attach-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
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
  <td><?php echo CHtml::link('deleteEavAttributes()', array('/site/doc', 'view' => 'YdEavAuditBehavior', '#' => 'deleteEavAttributes-detail')); ?></td>
  <td></td>
  <td>YdEavAuditBehavior</td>
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
<tr class="inherited" id="getEavAttribute">
  <td><?php echo CHtml::link('getEavAttribute()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'getEavAttribute-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="getEavAttributes">
  <td><?php echo CHtml::link('getEavAttributes()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'getEavAttributes-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
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
  <td><?php echo CHtml::link('loadEavAttributes()', array('/site/doc', 'view' => 'YdEavAuditBehavior', '#' => 'loadEavAttributes-detail')); ?></td>
  <td></td>
  <td>YdEavAuditBehavior</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="saveEavAttributes">
  <td><?php echo CHtml::link('saveEavAttributes()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'saveEavAttributes-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="setEavAttribute">
  <td><?php echo CHtml::link('setEavAttribute()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'setEavAttribute-detail')); ?></td>
  <td>Sets attribute key.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="setEavAttributes">
  <td><?php echo CHtml::link('setEavAttributes()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'setEavAttributes-detail')); ?></td>
  <td>Sets attributes values for change.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="setEnabled">
  <td><?php echo CHtml::link('setEnabled()', array('/site/doc', 'view' => 'CBehavior', '#' => 'setEnabled-detail')); ?></td>
  <td>Sets whether this behavior is enabled</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr class="inherited" id="setModelTableFk">
  <td><?php echo CHtml::link('setModelTableFk()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'setModelTableFk-detail')); ?></td>
  <td>Set owner model FK name.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="setSafeAttributes">
  <td><?php echo CHtml::link('setSafeAttributes()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'setSafeAttributes-detail')); ?></td>
  <td>Set safe attributes array.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="withEavAttributes">
  <td><?php echo CHtml::link('withEavAttributes()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'withEavAttributes-detail')); ?></td>
  <td>Limit current AR query to have all attributes and values specified.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
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
<tr class="inherited" id="getCacheKey">
  <td><?php echo CHtml::link('getCacheKey()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'getCacheKey-detail')); ?></td>
  <td>Returns key for caching model attributes.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="getDeleteCommand">
  <td><?php echo CHtml::link('getDeleteCommand()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'getDeleteCommand-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="getDeleteEavAttributesCriteria">
  <td><?php echo CHtml::link('getDeleteEavAttributesCriteria()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'getDeleteEavAttributesCriteria-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr id="getFindByEavAttributesCriteria">
  <td><?php echo CHtml::link('getFindByEavAttributesCriteria()', array('/site/doc', 'view' => 'YdEavAuditBehavior', '#' => 'getFindByEavAttributesCriteria-detail')); ?></td>
  <td></td>
  <td>YdEavAuditBehavior</td>
</tr>
<tr class="inherited" id="getLoadEavAttributesCommand">
  <td><?php echo CHtml::link('getLoadEavAttributesCommand()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'getLoadEavAttributesCommand-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr id="getLoadEavAttributesCriteria">
  <td><?php echo CHtml::link('getLoadEavAttributesCriteria()', array('/site/doc', 'view' => 'YdEavAuditBehavior', '#' => 'getLoadEavAttributesCriteria-detail')); ?></td>
  <td></td>
  <td>YdEavAuditBehavior</td>
</tr>
<tr class="inherited" id="getModelId">
  <td><?php echo CHtml::link('getModelId()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'getModelId-detail')); ?></td>
  <td>Returns owner model id.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="getModelTableFk">
  <td><?php echo CHtml::link('getModelTableFk()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'getModelTableFk-detail')); ?></td>
  <td>Returns owner model FK name.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="getSafeAttributesArray">
  <td><?php echo CHtml::link('getSafeAttributesArray()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'getSafeAttributesArray-detail')); ?></td>
  <td>Return safe attributes key. If not set returns all keys.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr id="getSaveEavAttributeCommand">
  <td><?php echo CHtml::link('getSaveEavAttributeCommand()', array('/site/doc', 'view' => 'YdEavAuditBehavior', '#' => 'getSaveEavAttributeCommand-detail')); ?></td>
  <td></td>
  <td>YdEavAuditBehavior</td>
</tr>
<tr class="inherited" id="hasSafeAttribute">
  <td><?php echo CHtml::link('hasSafeAttribute()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'hasSafeAttribute-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
<tr class="inherited" id="stripPrefix">
  <td><?php echo CHtml::link('stripPrefix()', array('/site/doc', 'view' => 'YdEavBehavior', '#' => 'stripPrefix-detail')); ?></td>
  <td>Strip prefix from attribute key.</td>
  <td><?php echo CHtml::link('YdEavBehavior', array('/site/doc', 'view' => 'YdEavBehavior')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="cacheId-detail">
cacheId<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cacheId</b>;</div>

<p></p>


<div class="detailHeader" id="loadEavAttributesCriteria-detail">
loadEavAttributesCriteria<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected <?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?> <?php echo CHtml::link('<b>getLoadEavAttributesCriteria</b>', array('/site/doc', 'view' => 'YdEavAuditBehavior', '#' => 'getLoadEavAttributesCriteria')); ?>($attributes $attributes=array (
))</div>

<p></p>


<div class="detailHeader" id="owner-detail">
owner<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
<?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?> <b>owner</b>;</div>

<p></p>


<h2>Method Details</h2>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavAuditBehavior.php#L151">dressing\behaviors\YdEavAuditBehavior.php#L151</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">deleteEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$save&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">deleteEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$save</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">delete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCacheKey</span><span style="color: #007700">());<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavAuditBehavior.php#L88">dressing\behaviors\YdEavAuditBehavior.php#L88</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getFindByEavAttributesCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pk&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModelTableFk</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;search&nbsp;models&nbsp;with&nbsp;attribute&nbsp;name&nbsp;with&nbsp;specified&nbsp;values.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$conn</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$joinTableName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"eav_</span><span style="color: #0000BB">$attribute</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">))&nbsp;</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$values</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$conn</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\nJOIN&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;</span><span style="color: #0000BB">$joinTableName</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\nON&nbsp;t.</span><span style="color: #007700">{</span><span style="color: #0000BB">$pk</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #0000BB">$joinTableName</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">entityField</span><span style="color: #007700">}</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\nAND&nbsp;</span><span style="color: #0000BB">$joinTableName</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeField</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\nAND&nbsp;</span><span style="color: #0000BB">$joinTableName</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">valueField</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;search&nbsp;models&nbsp;with&nbsp;attribute&nbsp;name&nbsp;with&nbsp;anything&nbsp;values.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">elseif&nbsp;(</span><span style="color: #0000BB">is_int</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$joinTableName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"eav_</span><span style="color: #0000BB">$values</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$values&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$conn</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$values</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">join&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\nJOIN&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;</span><span style="color: #0000BB">$joinTableName</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\nON&nbsp;t.</span><span style="color: #007700">{</span><span style="color: #0000BB">$pk</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #0000BB">$joinTableName</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">entityField</span><span style="color: #007700">}</span><span style="color: #DD0000">"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"\nAND&nbsp;</span><span style="color: #0000BB">$joinTableName</span><span style="color: #DD0000">.</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeField</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #0000BB">$values</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">distinct&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">group&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"t.</span><span style="color: #007700">{</span><span style="color: #0000BB">$pk</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">;<br />}</span>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavAuditBehavior.php#L131">dressing\behaviors\YdEavAuditBehavior.php#L131</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getLoadEavAttributesCriteria</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbCriteria</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$conn&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getDbConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getModelId</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_int</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$conn</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quoteValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addCondition</span><span style="color: #007700">(</span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">entityField</span><span style="color: #007700">}</span><span style="color: #DD0000">&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addInCondition</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributeField</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$criteria</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavAuditBehavior.php#L51">dressing\behaviors\YdEavAuditBehavior.php#L51</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSaveEavAttributeCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">asa</span><span style="color: #007700">(</span><span style="color: #DD0000">'AuditBehavior'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$auditId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdAudit</span><span style="color: #007700">::</span><span style="color: #0000BB">findCurrentId</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$userid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch&nbsp;(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{&nbsp;</span><span style="color: #FF8000">//If&nbsp;we&nbsp;have&nbsp;no&nbsp;user&nbsp;object,&nbsp;this&nbsp;must&nbsp;be&nbsp;a&nbsp;command&nbsp;line&nbsp;program<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$userid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$old&nbsp;</span><span style="color: #007700">=&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbAttributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbAttributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;log&nbsp;in&nbsp;the&nbsp;audit&nbsp;trail<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$old&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">$new</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">YdAuditTrail</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">old_value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$old</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">new_value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$new</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">action&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'EAV&nbsp;SAVE'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAuditModel</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model_id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAuditModel</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">field&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableName&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'.'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">created&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Y-m-d&nbsp;H:i:s'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">user_id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$userid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">audit_id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$auditId</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$log</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;return&nbsp;parent<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">getSaveEavAttributeCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />}</span>
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
  <td class="paramDescCol">key for load.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdEavAuditBehavior.php#L37">dressing\behaviors\YdEavAuditBehavior.php#L37</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">loadEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">loadEavAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbAttributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Return&nbsp;model.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


