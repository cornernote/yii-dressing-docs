<?php
$this->pageTitle = $this->pageHeading = 'YdCacheBehavior';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdCacheBehavior';
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
  <td>class YdCacheBehavior &raquo;
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
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdCacheBehavior.php">dressing\behaviors\YdCacheBehavior.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdCacheBehavior allows simple assignment of cached data to a model which is automatically cleared when the model
is saved.  It can also automatically clear the cache of related models.</div>
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
<tr id="cacheRelations">
  <td><?php echo CHtml::link('cacheRelations', array('/site/doc', 'view' => 'YdCacheBehavior', '#' => 'cacheRelations-detail')); ?></td>
  <td>array</td>
  <td>An array of the models to clear cache when this models cache is cleared</td>
  <td>YdCacheBehavior</td>
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
<tr id="afterDelete">
  <td><?php echo CHtml::link('afterDelete()', array('/site/doc', 'view' => 'YdCacheBehavior', '#' => 'afterDelete-detail')); ?></td>
  <td></td>
  <td>YdCacheBehavior</td>
</tr>
<tr id="afterSave">
  <td><?php echo CHtml::link('afterSave()', array('/site/doc', 'view' => 'YdCacheBehavior', '#' => 'afterSave-detail')); ?></td>
  <td></td>
  <td>YdCacheBehavior</td>
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
<tr id="beforeDelete">
  <td><?php echo CHtml::link('beforeDelete()', array('/site/doc', 'view' => 'YdCacheBehavior', '#' => 'beforeDelete-detail')); ?></td>
  <td></td>
  <td>YdCacheBehavior</td>
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
<tr id="clearCache">
  <td><?php echo CHtml::link('clearCache()', array('/site/doc', 'view' => 'YdCacheBehavior', '#' => 'clearCache-detail')); ?></td>
  <td>Clear cache for this model</td>
  <td>YdCacheBehavior</td>
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
<tr id="getCache">
  <td><?php echo CHtml::link('getCache()', array('/site/doc', 'view' => 'YdCacheBehavior', '#' => 'getCache-detail')); ?></td>
  <td>Get a cached element</td>
  <td>YdCacheBehavior</td>
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
<tr id="setCache">
  <td><?php echo CHtml::link('setCache()', array('/site/doc', 'view' => 'YdCacheBehavior', '#' => 'setCache-detail')); ?></td>
  <td>Set a cached element</td>
  <td>YdCacheBehavior</td>
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
<tr class="inherited" id="afterFind">
  <td><?php echo CHtml::link('afterFind()', array('/site/doc', 'view' => 'CActiveRecordBehavior', '#' => 'afterFind-detail')); ?></td>
  <td>Responds to <?php echo CHtml::link('CActiveRecord::onAfterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterFind')); ?> event.</td>
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
<div class="detailHeader" id="cacheRelations-detail">
cacheRelations<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$cacheRelations</b>;</div>

<p>An array of the models to clear cache when this models cache is cleared</p>


<h2>Method Details</h2>

<div class="detailHeader" id="afterDelete-detail">
afterDelete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>afterDelete</b>(<?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdCacheBehavior.php#L118">dressing\behaviors\YdCacheBehavior.php#L118</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clearCache</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">afterDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
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
public void <b>afterSave</b>(<?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdCacheBehavior.php#L98">dressing\behaviors\YdCacheBehavior.php#L98</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clearCache</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="beforeDelete-detail">
beforeDelete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>beforeDelete</b>(<?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModelEvent', array('/site/doc', 'view' => 'CModelEvent')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdCacheBehavior.php#L107">dressing\behaviors\YdCacheBehavior.php#L107</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;touch&nbsp;to&nbsp;allow&nbsp;afterDelete()&nbsp;to&nbsp;clearCache()<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheRelations&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$cacheRelation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$cacheRelation</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">beforeDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="clearCache-detail">
clearCache()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>clearCache</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdCacheBehavior.php#L63">dressing\behaviors\YdCacheBehavior.php#L63</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clearCache</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;clear&nbsp;related&nbsp;cache<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheRelations&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$cacheRelation</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$models&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$cacheRelation</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$cacheRelation&nbsp;</span><span style="color: #007700">:&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">owner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$cacheRelation</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$models&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$cacheRelationModel</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$cacheRelationModel&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CActiveRecord</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cacheRelationModel</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clearCache</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;clear&nbsp;own&nbsp;cache<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCacheKeyPrefix</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Clear cache for this model</p>


<div class="detailHeader" id="getCache-detail">
getCache()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getCache</b>($key $key)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">$key</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdCacheBehavior.php#L32">dressing\behaviors\YdCacheBehavior.php#L32</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCache</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fullKey&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCacheKeyPrefix</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$return&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullKey</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//attempt&nbsp;to&nbsp;get&nbsp;it&nbsp;from&nbsp;database&nbsp;keyvalue<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$return&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">cacheDb</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$return&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">cacheDb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullKey</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$return</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Get a cached element</p>


<div class="detailHeader" id="setCache-detail">
setCache()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setCache</b>($key $key, $value $value, bool $allowDbCache=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">$key</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">$value</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$allowDbCache</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/master/src\behaviors\YdCacheBehavior.php#L50">dressing\behaviors\YdCacheBehavior.php#L50</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setCache</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$allowDbCache&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fullKey&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCacheKeyPrefix</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullKey</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$allowDbCache&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">cacheDb</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">cacheDb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullKey</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />}</span>
</span>
</code></div>
</div>
<p>Set a cached element</p>


