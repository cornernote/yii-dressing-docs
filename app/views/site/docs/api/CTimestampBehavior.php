<?php
$this->pageTitle = $this->pageHeading = 'CTimestampBehavior';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CTimestampBehavior';
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
  <td><?php echo CHtml::link('zii.behaviors', array('/site/doc', '#' => 'zii.behaviors')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CTimestampBehavior &raquo;
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
  <td><?php echo CHtml::link('YdTimestampBehavior', array('/site/doc', 'view' => 'YdTimestampBehavior')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\zii\behaviors\CTimestampBehavior.php">yii\zii\behaviors\CTimestampBehavior.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Jonah Turnquist &lt;poppitypop@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CTimestampBehavior will automatically fill date and time related attributes.
<br/><br/>
CTimestampBehavior will automatically fill date and time related attributes when the active record
is created and/or updated.
You may specify an active record model to use this behavior like so:
<pre>
public function behaviors(){
	return array(
		'CTimestampBehavior' =&gt; array(
			'class' =&gt; 'zii.behaviors.CTimestampBehavior',
			'createAttribute' =&gt; 'create_time_attribute',
			'updateAttribute' =&gt; 'update_time_attribute',
		)
	);
}
</pre>
The <?php echo CHtml::link('createAttribute', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'createAttribute')); ?> and <?php echo CHtml::link('updateAttribute', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'updateAttribute')); ?> options actually default to 'create_time' and 'update_time'
respectively, so it is not required that you configure them. If you do not wish CTimestampBehavior
to set a timestamp for record update or creation, set the corresponding attribute option to null.
<br/><br/>
By default, the update attribute is only set on record update. If you also wish it to be set on record creation,
set the <?php echo CHtml::link('setUpdateOnCreate', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'setUpdateOnCreate')); ?> option to true.
<br/><br/>
Although CTimestampBehavior attempts to figure out on it's own what value to inject into the timestamp attribute,
you may specify a custom value to use instead via <?php echo CHtml::link('timestampExpression', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'timestampExpression')); ?></div>
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
<tr id="createAttribute">
  <td><?php echo CHtml::link('createAttribute', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'createAttribute-detail')); ?></td>
  <td>mixed</td>
  <td>The name of the attribute to store the creation time.</td>
  <td>CTimestampBehavior</td>
</tr>
<tr class="inherited" id="enabled">
  <td><?php echo CHtml::link('enabled', array('/site/doc', 'view' => 'CBehavior', '#' => 'enabled-detail')); ?></td>
  <td>boolean</td>
  <td>whether this behavior is enabled</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr class="inherited" id="owner">
  <td><?php echo CHtml::link('owner', array('/site/doc', 'view' => 'CBehavior', '#' => 'owner-detail')); ?></td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
  <td>the owner component that this behavior is attached to.</td>
  <td><?php echo CHtml::link('CBehavior', array('/site/doc', 'view' => 'CBehavior')); ?></td>
</tr>
<tr id="setUpdateOnCreate">
  <td><?php echo CHtml::link('setUpdateOnCreate', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'setUpdateOnCreate-detail')); ?></td>
  <td>bool</td>
  <td>Whether to set the update attribute to the creation timestamp upon creation.</td>
  <td>CTimestampBehavior</td>
</tr>
<tr id="timestampExpression">
  <td><?php echo CHtml::link('timestampExpression', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'timestampExpression-detail')); ?></td>
  <td>mixed</td>
  <td>The expression that will be used for generating the timestamp.</td>
  <td>CTimestampBehavior</td>
</tr>
<tr id="updateAttribute">
  <td><?php echo CHtml::link('updateAttribute', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'updateAttribute-detail')); ?></td>
  <td>mixed</td>
  <td>The name of the attribute to store the modification time.</td>
  <td>CTimestampBehavior</td>
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
<tr id="map">
  <td><?php echo CHtml::link('map', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'map-detail')); ?></td>
  <td>array</td>
  <td>Maps column types to database method</td>
  <td>CTimestampBehavior</td>
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
<tr id="beforeSave">
  <td><?php echo CHtml::link('beforeSave()', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'beforeSave-detail')); ?></td>
  <td>Responds to CModel::onBeforeSave event.</td>
  <td>CTimestampBehavior</td>
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
<tr class="inherited" id="beforeValidate">
  <td><?php echo CHtml::link('beforeValidate()', array('/site/doc', 'view' => 'CModelBehavior', '#' => 'beforeValidate-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CModel::onBeforeValidate', array('/site/doc', 'view' => 'CModel', '#' => 'onBeforeValidate')); ?> event.</td>
  <td><?php echo CHtml::link('CModelBehavior', array('/site/doc', 'view' => 'CModelBehavior')); ?></td>
</tr>
<tr id="getTimestampByAttribute">
  <td><?php echo CHtml::link('getTimestampByAttribute()', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'getTimestampByAttribute-detail')); ?></td>
  <td>Gets the appropriate timestamp depending on the column type $attribute is</td>
  <td>CTimestampBehavior</td>
</tr>
<tr id="getTimestampByColumnType">
  <td><?php echo CHtml::link('getTimestampByColumnType()', array('/site/doc', 'view' => 'CTimestampBehavior', '#' => 'getTimestampByColumnType-detail')); ?></td>
  <td>Returns the appropriate timestamp depending on $columnType</td>
  <td>CTimestampBehavior</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="createAttribute-detail">
createAttribute<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$createAttribute</b>;</div>

<p>The name of the attribute to store the creation time.  Set to null to not
use a timestamp for the creation attribute.  Defaults to 'create_time'</p>


<div class="detailHeader" id="map-detail">
map<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected static array <b>$map</b>;</div>

<p>Maps column types to database method</p>


<div class="detailHeader" id="setUpdateOnCreate-detail">
setUpdateOnCreate<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$setUpdateOnCreate</b>;</div>

<p>Whether to set the update attribute to the creation timestamp upon creation.
Otherwise it will be left alone.  Defaults to false.</p>


<div class="detailHeader" id="timestampExpression-detail">
timestampExpression<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$timestampExpression</b>;</div>

<p>The expression that will be used for generating the timestamp.
This can be either a string representing a PHP expression (e.g. 'time()'),
or a <?php echo CHtml::link('CDbExpression', array('/site/doc', 'view' => 'CDbExpression')); ?> object representing a DB expression (e.g. new CDbExpression('NOW()')).
Defaults to null, meaning that we will attempt to figure out the appropriate timestamp
automatically. If we fail at finding the appropriate timestamp, then it will
fall back to using the current UNIX timestamp.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>


<div class="detailHeader" id="updateAttribute-detail">
updateAttribute<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$updateAttribute</b>;</div>

<p>The name of the attribute to store the modification time.  Set to null to not
use a timestamp for the update attribute.  Defaults to 'update_time'</p>


<h2>Method Details</h2>

<div class="detailHeader" id="beforeSave-detail">
beforeSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>beforeSave</b>(<?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?></td>
  <td class="paramDescCol">event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\zii\behaviors\CTimestampBehavior.php#L89">yii\zii\behaviors\CTimestampBehavior.php#L89</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getIsNewRecord</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createAttribute&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createAttribute</span><span style="color: #007700">}&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTimestampByAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createAttribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getIsNewRecord</span><span style="color: #007700">()&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setUpdateOnCreate</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateAttribute&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateAttribute</span><span style="color: #007700">}&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTimestampByAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">updateAttribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Responds to CModel::onBeforeSave event.
Sets the values of the creation or modified attributes as configured</p>


<div class="detailHeader" id="getTimestampByAttribute-detail">
getTimestampByAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>getTimestampByAttribute</b>(string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">$attribute</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">timestamp (eg unix timestamp or a mysql function)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\zii\behaviors\CTimestampBehavior.php#L104">yii\zii\behaviors\CTimestampBehavior.php#L104</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getTimestampByAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestampExpression&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CDbExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestampExpression</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestampExpression&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;@eval(</span><span style="color: #DD0000">'return&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timestampExpression</span><span style="color: #007700">.</span><span style="color: #DD0000">';'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$columnType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOwner</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getTableSchema</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getColumn</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">dbType</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTimestampByColumnType</span><span style="color: #007700">(</span><span style="color: #0000BB">$columnType</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Gets the appropriate timestamp depending on the column type $attribute is</p>


<div class="detailHeader" id="getTimestampByColumnType-detail">
getTimestampByColumnType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>getTimestampByColumnType</b>(string $columnType)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$columnType</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">$columnType</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">timestamp (eg unix timestamp or a mysql function)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\zii\behaviors\CTimestampBehavior.php#L120">yii\zii\behaviors\CTimestampBehavior.php#L120</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getTimestampByColumnType</span><span style="color: #007700">(</span><span style="color: #0000BB">$columnType</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$columnType</span><span style="color: #007700">])&nbsp;?&nbsp;new&nbsp;</span><span style="color: #0000BB">CDbExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$columnType</span><span style="color: #007700">])&nbsp;:&nbsp;</span><span style="color: #0000BB">time</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the appropriate timestamp depending on $columnType</p>


