<?php
$this->pageTitle = $this->pageHeading = 'CWebServiceAction';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CWebServiceAction';
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
  <td><?php echo CHtml::link('system.web.services', array('/site/doc', '#' => 'system.web.services')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CWebServiceAction &raquo;
<?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IAction', array('/site/doc', 'view' => 'IAction')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWebServiceAction.php">yii\web\services\CWebServiceAction.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CWebServiceAction implements an action that provides Web services.
<br/><br/>
CWebServiceAction serves for two purposes. On the one hand, it displays
the WSDL content specifying the Web service APIs. On the other hand, it
invokes the requested Web service API. A GET parameter named <code>ws</code>
is used to differentiate these two aspects: the existence of the GET parameter
indicates performing the latter action.
<br/><br/>
By default, CWebServiceAction will use the current controller as
the Web service provider. See <?php echo CHtml::link('CWsdlGenerator', array('/site/doc', 'view' => 'CWsdlGenerator')); ?> on how to declare
methods that can be remotely invoked.
<br/><br/>
Note, PHP SOAP extension is required for this action.</div>
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
<tr id="classMap">
  <td><?php echo CHtml::link('classMap', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'classMap-detail')); ?></td>
  <td>array</td>
  <td>a list of PHP classes that are declared as complex types in WSDL.</td>
  <td>CWebServiceAction</td>
</tr>
<tr class="inherited" id="controller">
  <td><?php echo CHtml::link('controller', array('/site/doc', 'view' => 'CAction', '#' => 'controller-detail')); ?></td>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?></td>
  <td>the controller who owns this action.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr class="inherited" id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'CAction', '#' => 'id-detail')); ?></td>
  <td>string</td>
  <td>id of this action</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="provider">
  <td><?php echo CHtml::link('provider', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'provider-detail')); ?></td>
  <td>mixed</td>
  <td>the Web service provider object or class name.</td>
  <td>CWebServiceAction</td>
</tr>
<tr id="service">
  <td><?php echo CHtml::link('service', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'service-detail')); ?></td>
  <td><?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?></td>
  <td>Returns the Web service instance currently being used.</td>
  <td>CWebServiceAction</td>
</tr>
<tr id="serviceOptions">
  <td><?php echo CHtml::link('serviceOptions', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'serviceOptions-detail')); ?></td>
  <td>array</td>
  <td>the initial property values for the <?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> object.</td>
  <td>CWebServiceAction</td>
</tr>
<tr id="serviceUrl">
  <td><?php echo CHtml::link('serviceUrl', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'serviceUrl-detail')); ?></td>
  <td>string</td>
  <td>the URL for the Web service.</td>
  <td>CWebServiceAction</td>
</tr>
<tr id="serviceVar">
  <td><?php echo CHtml::link('serviceVar', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'serviceVar-detail')); ?></td>
  <td>string</td>
  <td>the name of the GET parameter that differentiates a WSDL request
from a Web service request.</td>
  <td>CWebServiceAction</td>
</tr>
<tr id="wsdlUrl">
  <td><?php echo CHtml::link('wsdlUrl', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'wsdlUrl-detail')); ?></td>
  <td>string</td>
  <td>the URL for WSDL.</td>
  <td>CWebServiceAction</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CAction', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
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
<tr class="inherited" id="getController">
  <td><?php echo CHtml::link('getController()', array('/site/doc', 'view' => 'CAction', '#' => 'getController-detail')); ?></td>
  <td>Returns the controller who owns this action.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getId">
  <td><?php echo CHtml::link('getId()', array('/site/doc', 'view' => 'CAction', '#' => 'getId-detail')); ?></td>
  <td>Returns id of this action</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
<tr id="getService">
  <td><?php echo CHtml::link('getService()', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'getService-detail')); ?></td>
  <td>Returns the Web service instance currently being used.</td>
  <td>CWebServiceAction</td>
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
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'run-detail')); ?></td>
  <td>Runs the action.</td>
  <td>CWebServiceAction</td>
</tr>
<tr class="inherited" id="runWithParams">
  <td><?php echo CHtml::link('runWithParams()', array('/site/doc', 'view' => 'CAction', '#' => 'runWithParams-detail')); ?></td>
  <td>Runs the action with the supplied request parameters.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
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
<tr id="createWebService">
  <td><?php echo CHtml::link('createWebService()', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'createWebService-detail')); ?></td>
  <td>Creates a <?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> instance.</td>
  <td>CWebServiceAction</td>
</tr>
<tr class="inherited" id="runWithParamsInternal">
  <td><?php echo CHtml::link('runWithParamsInternal()', array('/site/doc', 'view' => 'CAction', '#' => 'runWithParamsInternal-detail')); ?></td>
  <td>Executes a method of an object with the supplied named parameters.</td>
  <td><?php echo CHtml::link('CAction', array('/site/doc', 'view' => 'CAction')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="classMap-detail">
classMap<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$classMap</b>;</div>

<p>a list of PHP classes that are declared as complex types in WSDL.
This should be an array with WSDL types as keys and names of PHP classes as values.
A PHP class can also be specified as a path alias.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/soapclient.soapclient.php">http://www.php.net/manual/en/soapclient.soapclient.php</a></li>
</ul>
</div>

<div class="detailHeader" id="provider-detail">
provider<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$provider</b>;</div>

<p>the Web service provider object or class name.
If specified as a class name, it can be a path alias.
Defaults to null, meaning the current controller is used as the service provider.
If the provider implements the interface <?php echo CHtml::link('IWebServiceProvider', array('/site/doc', 'view' => 'IWebServiceProvider')); ?>,
it will be able to intercept the remote method invocation and perform
additional tasks (e.g. authentication, logging).</p>


<div class="detailHeader" id="service-detail">
service<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> <?php echo CHtml::link('<b>getService</b>', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'getService')); ?>()</div>

<p>Returns the Web service instance currently being used.</p>


<div class="detailHeader" id="serviceOptions-detail">
serviceOptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$serviceOptions</b>;</div>

<p>the initial property values for the <?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> object.
The array keys are property names of <?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> and the array values
are the corresponding property initial values.</p>


<div class="detailHeader" id="serviceUrl-detail">
serviceUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$serviceUrl</b>;</div>

<p>the URL for the Web service. Defaults to null, meaning
the URL for this action is used to provide Web services.
In this case, a GET parameter named <?php echo CHtml::link('serviceVar', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'serviceVar')); ?> will be used to
deteremine whether the current request is for WSDL or Web service.</p>


<div class="detailHeader" id="serviceVar-detail">
serviceVar<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$serviceVar</b>;</div>

<p>the name of the GET parameter that differentiates a WSDL request
from a Web service request. If this GET parameter exists, the request is considered
as a Web service request; otherwise, it is a WSDL request.  Defaults to 'ws'.</p>


<div class="detailHeader" id="wsdlUrl-detail">
wsdlUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$wsdlUrl</b>;</div>

<p>the URL for WSDL. Defaults to null, meaning
the URL for this action is used to serve WSDL document.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="createWebService-detail">
createWebService()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> <b>createWebService</b>(mixed $provider, string $wsdlUrl, string $serviceUrl)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$provider</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the web service provider class name or object</td>
</tr>
<tr>
  <td class="paramNameCol">$wsdlUrl</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL for WSDL.</td>
</tr>
<tr>
  <td class="paramNameCol">$serviceUrl</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL for the Web service.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?></td>
  <td class="paramDescCol">the Web service instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWebServiceAction.php#L127">yii\web\services\CWebServiceAction.php#L127</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createWebService</span><span style="color: #007700">(</span><span style="color: #0000BB">$provider</span><span style="color: #007700">,</span><span style="color: #0000BB">$wsdlUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">CWebService</span><span style="color: #007700">(</span><span style="color: #0000BB">$provider</span><span style="color: #007700">,</span><span style="color: #0000BB">$wsdlUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a <?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> instance.
You may override this method to customize the created instance.</p>


<div class="detailHeader" id="getService-detail">
getService()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?> <b>getService</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWebService', array('/site/doc', 'view' => 'CWebService')); ?></td>
  <td class="paramDescCol">the Web service instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWebServiceAction.php#L114">yii\web\services\CWebServiceAction.php#L114</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getService</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_service</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the Web service instance currently being used.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWebServiceAction.php#L83">yii\web\services\CWebServiceAction.php#L83</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hostInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getHostInfo</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceUrl</span><span style="color: #007700">)===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$hostInfo</span><span style="color: #007700">.</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">(),array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceVar</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$wsdlUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wsdlUrl</span><span style="color: #007700">)===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$wsdlUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$hostInfo</span><span style="color: #007700">.</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$provider</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">provider</span><span style="color: #007700">)===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$provider</span><span style="color: #007700">=</span><span style="color: #0000BB">$controller</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_service</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createWebService</span><span style="color: #007700">(</span><span style="color: #0000BB">$provider</span><span style="color: #007700">,</span><span style="color: #0000BB">$wsdlUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">classMap</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_service</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">classMap</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">classMap</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceOptions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_service</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceVar</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_service</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_service</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderWsdl</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Runs the action.
If the GET parameter <?php echo CHtml::link('serviceVar', array('/site/doc', 'view' => 'CWebServiceAction', '#' => 'serviceVar')); ?> exists, the action handle the remote method invocation.
If not, the action will serve WSDL content;</p>


