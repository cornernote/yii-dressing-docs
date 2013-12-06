<?php
$this->pageTitle = $this->pageHeading = 'JSONStorage';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'JSONStorage';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a> | <a href="#events">Events</a></div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>Package</th>
  <td><?php echo CHtml::link('booster.components', array('/site/doc', '#' => 'booster.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class JSONStorage &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php">booster/components/JSONStorage.php</a></td>
</tr>
</table>

<div id="classDescription">
## JSON Storage
<br/><br/>
Provides a very simple way to persistent JSON storage. Acts as a registry key saver.
<br/><br/>
Example of use:
<br/><br/>
$j = new JSONStorage();
<br/><br/>
$j->addRegistry('custom');
echo $j->registryExists('custom');
$j->setData('mydata','super','custom');
$j->save();
$j->load();
<br/><br/>
echo $j->getData('super','custom');</div>
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
<tr id="file">
  <td><?php echo CHtml::link('file', array('/site/doc', 'view' => 'JSONStorage', '#' => 'file-detail')); ?></td>
  <td>string</td>
  <td>Property get file</td>
  <td>JSONStorage</td>
</tr>
<tr id="length">
  <td><?php echo CHtml::link('length', array('/site/doc', 'view' => 'JSONStorage', '#' => 'length-detail')); ?></td>
  <td>int</td>
  <td>Retrieves the number of keys in registry</td>
  <td>JSONStorage</td>
</tr>
<tr id="path">
  <td><?php echo CHtml::link('path', array('/site/doc', 'view' => 'JSONStorage', '#' => 'path-detail')); ?></td>
  <td>string</td>
  <td>Property get path</td>
  <td>JSONStorage</td>
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
<tr id="data">
  <td><?php echo CHtml::link('data', array('/site/doc', 'view' => 'JSONStorage', '#' => 'data-detail')); ?></td>
  <td>array</td>
  <td>the data of the registry</td>
  <td>JSONStorage</td>
</tr>
<tr id="default">
  <td><?php echo CHtml::link('default', array('/site/doc', 'view' => 'JSONStorage', '#' => 'default-detail')); ?></td>
  <td>null|string</td>
  <td>the name of the default registry</td>
  <td>JSONStorage</td>
</tr>
<tr id="dirty">
  <td><?php echo CHtml::link('dirty', array('/site/doc', 'view' => 'JSONStorage', '#' => 'dirty-detail')); ?></td>
  <td>bool</td>
  <td>whether the registry has changed or not</td>
  <td>JSONStorage</td>
</tr>
<tr id="filename">
  <td><?php echo CHtml::link('filename', array('/site/doc', 'view' => 'JSONStorage', '#' => 'filename-detail')); ?></td>
  <td>string</td>
  <td>the filename to save the values to</td>
  <td>JSONStorage</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'JSONStorage', '#' => '__construct-detail')); ?></td>
  <td>class constructor</td>
  <td>JSONStorage</td>
</tr>
<tr id="__destruct">
  <td><?php echo CHtml::link('__destruct()', array('/site/doc', 'view' => 'JSONStorage', '#' => '__destruct-detail')); ?></td>
  <td>class destructor - flush data</td>
  <td>JSONStorage</td>
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
<tr id="addRegistry">
  <td><?php echo CHtml::link('addRegistry()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'addRegistry-detail')); ?></td>
  <td>Add new collection name</td>
  <td>JSONStorage</td>
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
<tr id="getData">
  <td><?php echo CHtml::link('getData()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'getData-detail')); ?></td>
  <td>Retrieves a data value from the registry</td>
  <td>JSONStorage</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getFile">
  <td><?php echo CHtml::link('getFile()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'getFile-detail')); ?></td>
  <td>Property get file</td>
  <td>JSONStorage</td>
</tr>
<tr id="getLength">
  <td><?php echo CHtml::link('getLength()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'getLength-detail')); ?></td>
  <td>Retrieves the number of keys in registry</td>
  <td>JSONStorage</td>
</tr>
<tr id="getPath">
  <td><?php echo CHtml::link('getPath()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'getPath-detail')); ?></td>
  <td>Property get path</td>
  <td>JSONStorage</td>
</tr>
<tr id="getRegistry">
  <td><?php echo CHtml::link('getRegistry()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'getRegistry-detail')); ?></td>
  <td>Retrieves a registry collection based on its name</td>
  <td>JSONStorage</td>
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
<tr id="load">
  <td><?php echo CHtml::link('load()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'load-detail')); ?></td>
  <td>Loads registry data into memory</td>
  <td>JSONStorage</td>
</tr>
<tr id="onAfterSave">
  <td><?php echo CHtml::link('onAfterSave()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'onAfterSave-detail')); ?></td>
  <td>Fires after the registry has been saved</td>
  <td>JSONStorage</td>
</tr>
<tr id="onBeforeSave">
  <td><?php echo CHtml::link('onBeforeSave()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'onBeforeSave-detail')); ?></td>
  <td>Fires before registry has been saved</td>
  <td>JSONStorage</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="registryExists">
  <td><?php echo CHtml::link('registryExists()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'registryExists-detail')); ?></td>
  <td>Checkes whether a collection exists (registry)</td>
  <td>JSONStorage</td>
</tr>
<tr id="removeData">
  <td><?php echo CHtml::link('removeData()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'removeData-detail')); ?></td>
  <td>Removes data from a key in the registry</td>
  <td>JSONStorage</td>
</tr>
<tr id="removeRegistry">
  <td><?php echo CHtml::link('removeRegistry()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'removeRegistry-detail')); ?></td>
  <td>Remove an existing collection and all associated data</td>
  <td>JSONStorage</td>
</tr>
<tr id="save">
  <td><?php echo CHtml::link('save()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'save-detail')); ?></td>
  <td>Saves registry data to the file</td>
  <td>JSONStorage</td>
</tr>
<tr id="setData">
  <td><?php echo CHtml::link('setData()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'setData-detail')); ?></td>
  <td>Saves data to the registry</td>
  <td>JSONStorage</td>
</tr>
<tr id="setFile">
  <td><?php echo CHtml::link('setFile()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'setFile-detail')); ?></td>
  <td>Property set file</td>
  <td>JSONStorage</td>
</tr>
<tr id="setPath">
  <td><?php echo CHtml::link('setPath()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'setPath-detail')); ?></td>
  <td>Property set path</td>
  <td>JSONStorage</td>
</tr>
<tr id="verify">
  <td><?php echo CHtml::link('verify()', array('/site/doc', 'view' => 'JSONStorage', '#' => 'verify-detail')); ?></td>
  <td>Verifies data integrity</td>
  <td>JSONStorage</td>
</tr>
</table>
</div>
<a name="events"></a>

<div class="summary docEvent">
<h2>Events</h2>

<p><a href="#" class="toggle">Hide inherited events</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-event" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Event</th><th>Description</th><th>Defined By</th>
</tr>
<tr id="onBeforeSave">
  <td><?php echo CHtml::link('onBeforeSave', array('/site/doc', 'view' => 'JSONStorage', '#' => 'onBeforeSave-detail')); ?></td>
  <td>Fires before registry has been saved</td>
  <td>JSONStorage</td>
</tr>
<tr id="onAfterSave">
  <td><?php echo CHtml::link('onAfterSave', array('/site/doc', 'view' => 'JSONStorage', '#' => 'onAfterSave-detail')); ?></td>
  <td>Fires after the registry has been saved</td>
  <td>JSONStorage</td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="data-detail">
data<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$data</b>;</div>

<p>the data of the registry</p>


<div class="detailHeader" id="default-detail">
default<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected null|string <b>$default</b>;</div>

<p>the name of the default registry</p>


<div class="detailHeader" id="dirty-detail">
dirty<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected bool <b>$dirty</b>;</div>

<p>whether the registry has changed or not</p>


<div class="detailHeader" id="file-detail">
file<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getFile</b>', array('/site/doc', 'view' => 'JSONStorage', '#' => 'getFile')); ?>()<br/>public void <?php echo CHtml::link('<b>setFile</b>', array('/site/doc', 'view' => 'JSONStorage', '#' => 'setFile')); ?>(string $file)</div>

<p>Property get file</p>


<div class="detailHeader" id="filename-detail">
filename<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected string <b>$filename</b>;</div>

<p>the filename to save the values to</p>


<div class="detailHeader" id="length-detail">
length<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public int <?php echo CHtml::link('<b>getLength</b>', array('/site/doc', 'view' => 'JSONStorage', '#' => 'getLength')); ?>(null $registry=NULL)</div>

<p>Retrieves the number of keys in registry</p>


<div class="detailHeader" id="path-detail">
path<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getPath</b>', array('/site/doc', 'view' => 'JSONStorage', '#' => 'getPath')); ?>()<br/>public bool <?php echo CHtml::link('<b>setPath</b>', array('/site/doc', 'view' => 'JSONStorage', '#' => 'setPath')); ?>(string $path)</div>

<p>Property get path</p>


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
public void <b>__construct</b>(null $registry=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$registry</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L81">booster/components/JSONStorage.php#L81</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">path</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPath</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRuntimePath</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;</span><span style="color: #FF8000">//&nbsp;JSON&nbsp;storage&nbsp;will&nbsp;be&nbsp;at&nbsp;the&nbsp;app&nbsp;runtime&nbsp;path<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;setup&nbsp;domain<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addRegistry</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">default&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$registry</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>class constructor</p>


<div class="detailHeader" id="__destruct-detail">
__destruct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__destruct</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L102">booster/components/JSONStorage.php#L102</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__destruct</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flush</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>class destructor - flush data</p>


<div class="detailHeader" id="addRegistry-detail">
addRegistry()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>addRegistry</b>(string $registry)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$registry</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the registry (collection) to create</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L341">booster/components/JSONStorage.php#L341</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addRegistry</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">][</span><span style="color: #0000BB">$registry</span><span style="color: #007700">]&nbsp;=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dirty&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Add new collection name</p>


<div class="detailHeader" id="getData-detail">
getData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getData</b>(string $key, null $registry=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the key that holds the data</td>
</tr>
<tr>
  <td class="paramNameCol">$registry</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol">the registry name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the data in the key value, null otherwise</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L255">booster/components/JSONStorage.php#L255</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getData</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">default</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">][</span><span style="color: #0000BB">$registry</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">][</span><span style="color: #0000BB">$registry</span><span style="color: #007700">][</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves a data value from the registry</p>


<div class="detailHeader" id="getFile-detail">
getFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getFile</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">filename</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L167">booster/components/JSONStorage.php#L167</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Property get file</p>


<div class="detailHeader" id="getLength-detail">
getLength()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public int <b>getLength</b>(null $registry=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$registry</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol">the registry name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">int</td>
  <td class="paramDescCol">the data length</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L299">booster/components/JSONStorage.php#L299</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLength</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">default</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">][</span><span style="color: #0000BB">$registry</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves the number of keys in registry</p>


<div class="detailHeader" id="getPath-detail">
getPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L148">booster/components/JSONStorage.php#L148</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">path</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Property get path</p>


<div class="detailHeader" id="getRegistry-detail">
getRegistry()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed|null <b>getRegistry</b>(string $registry)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$registry</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the registry to retrieve</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed|null</td>
  <td class="paramDescCol">the registry, null if none found</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L317">booster/components/JSONStorage.php#L317</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRegistry</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">][</span><span style="color: #0000BB">$registry</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves a registry collection based on its name</p>


<div class="detailHeader" id="load-detail">
load()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>load</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L190">booster/components/JSONStorage.php#L190</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">load</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;load&nbsp;data<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">()))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$json&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Error&nbsp;while&nbsp;trying&nbsp;to&nbsp;decode&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">verify</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;failed&nbsp;checksum&nbsp;validation.'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Loads registry data into memory</p>


<div class="detailHeader" id="onAfterSave-detail">
onAfterSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onAfterSave</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L122">booster/components/JSONStorage.php#L122</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onAfterSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterSave'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Fires after the registry has been saved</p>


<div class="detailHeader" id="onBeforeSave-detail">
onBeforeSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>onBeforeSave</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L112">booster/components/JSONStorage.php#L112</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">onBeforeSave</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">raiseEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeSave'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Fires before registry has been saved</p>


<div class="detailHeader" id="registryExists-detail">
registryExists()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>registryExists</b>(string $registry)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$registry</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the registry to check existence</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L329">booster/components/JSONStorage.php#L329</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">registryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Checkes whether a collection exists (registry)</p>


<div class="detailHeader" id="removeData-detail">
removeData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>removeData</b>(string $key, null $registry=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the key name that holds the data to remove</td>
</tr>
<tr>
  <td class="paramNameCol">$registry</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol">the registry name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">true if successful, false otherwise</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L276">booster/components/JSONStorage.php#L276</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removeData</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">default</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">][</span><span style="color: #0000BB">$registry</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">][</span><span style="color: #0000BB">$registry</span><span style="color: #007700">][</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dirty&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Removes data from a key in the registry</p>


<div class="detailHeader" id="removeRegistry-detail">
removeRegistry()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>removeRegistry</b>(string $registry)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$registry</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the registry to remove</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L358">booster/components/JSONStorage.php#L358</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removeRegistry</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">][</span><span style="color: #0000BB">$registry</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dirty&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Remove an existing collection and all associated data</p>


<div class="detailHeader" id="save-detail">
save()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>save</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L214">booster/components/JSONStorage.php#L214</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">save</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeforeSave'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onBeforeSave</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flush</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onAfterSave'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onAfterSave</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Saves registry data to the file</p>


<div class="detailHeader" id="setData-detail">
setData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>setData</b>(string $key, array $data, null $registry=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the name of the key that will hold the data</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the data to save</td>
</tr>
<tr>
  <td class="paramNameCol">$registry</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol">the name of the registry</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L234">booster/components/JSONStorage.php#L234</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setData</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">default</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$registry</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">][</span><span style="color: #0000BB">$registry</span><span style="color: #007700">][</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dirty&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Saves data to the registry</p>


<div class="detailHeader" id="setFile-detail">
setFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setFile</b>(string $file)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the filename to save the registry to</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L158">booster/components/JSONStorage.php#L158</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">path&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Property set file</p>


<div class="detailHeader" id="setPath-detail">
setPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>setPath</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the full path of the directory with read/write access to save the registry file to</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L135">booster/components/JSONStorage.php#L135</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_writable</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">path&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$path&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$path&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'"Path"&nbsp;must&nbsp;be&nbsp;a&nbsp;writable&nbsp;directory.'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Property set path</p>


<div class="detailHeader" id="verify-detail">
verify()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>verify</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/clevertech/YiiBooster/blob/master/src/components/JSONStorage.php#L176">booster/components/JSONStorage.php#L176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">verify</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$registry&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'json_encode'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span><span style="color: #0000BB">CJSON</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">REGISTRY</span><span style="color: #007700">]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">[</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">META</span><span style="color: #007700">][</span><span style="color: #DD0000">"hash"</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$registry</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Verifies data integrity</p>


