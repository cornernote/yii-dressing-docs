<?php
$this->pageTitle = $this->pageHeading = 'CWebService';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CWebService';
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
  <td>class CWebService &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\services\CWebService.php">yii\web\services\CWebService.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CWebService encapsulates SoapServer and provides a WSDL-based web service.
<br/><br/>
PHP SOAP extension is required.
<br/><br/>
CWebService makes use of <?php echo CHtml::link('CWsdlGenerator', array('/site/doc', 'view' => 'CWsdlGenerator')); ?> and can generate the WSDL
on-the-fly without requiring you to write complex WSDL. However WSDL generator
could be customized through <?php echo CHtml::link('generatorConfig', array('/site/doc', 'view' => 'CWebService', '#' => 'generatorConfig')); ?> property.
<br/><br/>
To generate the WSDL based on doc comment blocks in the service provider class,
call <?php echo CHtml::link('generateWsdl', array('/site/doc', 'view' => 'CWebService', '#' => 'generateWsdl')); ?> or <?php echo CHtml::link('renderWsdl', array('/site/doc', 'view' => 'CWebService', '#' => 'renderWsdl')); ?>. To process the web service
requests, call <?php echo CHtml::link('run', array('/site/doc', 'view' => 'CWebService', '#' => 'run')); ?>.</div>
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
<tr id="actor">
  <td><?php echo CHtml::link('actor', array('/site/doc', 'view' => 'CWebService', '#' => 'actor-detail')); ?></td>
  <td>string</td>
  <td>actor of the SOAP service.</td>
  <td>CWebService</td>
</tr>
<tr id="cacheID">
  <td><?php echo CHtml::link('cacheID', array('/site/doc', 'view' => 'CWebService', '#' => 'cacheID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the cache application component that is used to cache the generated WSDL.</td>
  <td>CWebService</td>
</tr>
<tr id="classMap">
  <td><?php echo CHtml::link('classMap', array('/site/doc', 'view' => 'CWebService', '#' => 'classMap-detail')); ?></td>
  <td>array</td>
  <td>a list of classes that are declared as complex types in WSDL.</td>
  <td>CWebService</td>
</tr>
<tr id="encoding">
  <td><?php echo CHtml::link('encoding', array('/site/doc', 'view' => 'CWebService', '#' => 'encoding-detail')); ?></td>
  <td>string</td>
  <td>encoding of the Web service.</td>
  <td>CWebService</td>
</tr>
<tr id="generatorConfig">
  <td><?php echo CHtml::link('generatorConfig', array('/site/doc', 'view' => 'CWebService', '#' => 'generatorConfig-detail')); ?></td>
  <td>string|array</td>
  <td>WSDL generator configuration.</td>
  <td>CWebService</td>
</tr>
<tr id="methodName">
  <td><?php echo CHtml::link('methodName', array('/site/doc', 'view' => 'CWebService', '#' => 'methodName-detail')); ?></td>
  <td>string</td>
  <td>the currently requested method name.</td>
  <td>CWebService</td>
</tr>
<tr id="persistence">
  <td><?php echo CHtml::link('persistence', array('/site/doc', 'view' => 'CWebService', '#' => 'persistence-detail')); ?></td>
  <td>integer</td>
  <td>the persistence mode of the SOAP server.</td>
  <td>CWebService</td>
</tr>
<tr id="provider">
  <td><?php echo CHtml::link('provider', array('/site/doc', 'view' => 'CWebService', '#' => 'provider-detail')); ?></td>
  <td>string|object</td>
  <td>the web service provider class or object.</td>
  <td>CWebService</td>
</tr>
<tr id="serviceUrl">
  <td><?php echo CHtml::link('serviceUrl', array('/site/doc', 'view' => 'CWebService', '#' => 'serviceUrl-detail')); ?></td>
  <td>string</td>
  <td>the URL for the Web service.</td>
  <td>CWebService</td>
</tr>
<tr id="soapVersion">
  <td><?php echo CHtml::link('soapVersion', array('/site/doc', 'view' => 'CWebService', '#' => 'soapVersion-detail')); ?></td>
  <td>string</td>
  <td>SOAP version (e.</td>
  <td>CWebService</td>
</tr>
<tr id="wsdlCacheDuration">
  <td><?php echo CHtml::link('wsdlCacheDuration', array('/site/doc', 'view' => 'CWebService', '#' => 'wsdlCacheDuration-detail')); ?></td>
  <td>integer</td>
  <td>number of seconds that the generated WSDL can remain valid in cache.</td>
  <td>CWebService</td>
</tr>
<tr id="wsdlUrl">
  <td><?php echo CHtml::link('wsdlUrl', array('/site/doc', 'view' => 'CWebService', '#' => 'wsdlUrl-detail')); ?></td>
  <td>string</td>
  <td>the URL for WSDL.</td>
  <td>CWebService</td>
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
<tr id="options">
  <td><?php echo CHtml::link('options', array('/site/doc', 'view' => 'CWebService', '#' => 'options-detail')); ?></td>
  <td>array</td>
  <td>options for creating SoapServer instance</td>
  <td>CWebService</td>
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
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CWebService', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CWebService</td>
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
<tr id="generateWsdl">
  <td><?php echo CHtml::link('generateWsdl()', array('/site/doc', 'view' => 'CWebService', '#' => 'generateWsdl-detail')); ?></td>
  <td>Generates the WSDL as defined by the provider.</td>
  <td>CWebService</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getMethodName">
  <td><?php echo CHtml::link('getMethodName()', array('/site/doc', 'view' => 'CWebService', '#' => 'getMethodName-detail')); ?></td>
  <td>Returns the currently requested method name. Empty if no method is being requested.</td>
  <td>CWebService</td>
</tr>
<tr id="handleError">
  <td><?php echo CHtml::link('handleError()', array('/site/doc', 'view' => 'CWebService', '#' => 'handleError-detail')); ?></td>
  <td>The PHP error handler.</td>
  <td>CWebService</td>
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
<tr id="renderWsdl">
  <td><?php echo CHtml::link('renderWsdl()', array('/site/doc', 'view' => 'CWebService', '#' => 'renderWsdl-detail')); ?></td>
  <td>Generates and displays the WSDL as defined by the provider.</td>
  <td>CWebService</td>
</tr>
<tr id="run">
  <td><?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CWebService', '#' => 'run-detail')); ?></td>
  <td>Handles the web service request.</td>
  <td>CWebService</td>
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
<tr id="getOptions">
  <td><?php echo CHtml::link('getOptions()', array('/site/doc', 'view' => 'CWebService', '#' => 'getOptions-detail')); ?></td>
  <td>Returns options for creating SoapServer instance</td>
  <td>CWebService</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="actor-detail">
actor<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$actor</b>;</div>

<p>actor of the SOAP service. Defaults to null, meaning not set.</p>


<div class="detailHeader" id="cacheID-detail">
cacheID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cacheID</b>;</div>

<p>the ID of the cache application component that is used to cache the generated WSDL.
Defaults to 'cache' which refers to the primary cache application component.
Set this property to false if you want to disable caching WSDL.</p>


<div class="detailHeader" id="classMap-detail">
classMap<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$classMap</b>;</div>

<p>a list of classes that are declared as complex types in WSDL.
This should be an array with WSDL types as keys and names of PHP classes as values.
A PHP class can also be specified as a path alias.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/soapserver.soapserver.php">http://www.php.net/manual/en/soapserver.soapserver.php</a></li>
</ul>
</div>

<div class="detailHeader" id="encoding-detail">
encoding<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$encoding</b>;</div>

<p>encoding of the Web service. Defaults to 'UTF-8'.</p>


<div class="detailHeader" id="generatorConfig-detail">
generatorConfig<span class="detailHeaderTag">
property
 (available since v1.1.12)
</span>
</div>

<div class="signature">
public string|array <b>$generatorConfig</b>;</div>

<p>WSDL generator configuration. This property may be useful in purpose of enhancing features
of the standard <?php echo CHtml::link('CWsdlGenerator', array('/site/doc', 'view' => 'CWsdlGenerator')); ?> class by extending it. For example, some developers may need support
of the <code>xsd:xsd:base64Binary</code> elements. Another use case is to change initial values
at instantiation of the default <?php echo CHtml::link('CWsdlGenerator', array('/site/doc', 'view' => 'CWsdlGenerator')); ?>. The value of this property will be passed
to <?php echo CHtml::link('Yii::createComponent', array('/site/doc', 'view' => 'Yii', '#' => 'createComponent')); ?> to create the generator object. Default value is 'CWsdlGenerator'.</p>


<div class="detailHeader" id="methodName-detail">
methodName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getMethodName</b>', array('/site/doc', 'view' => 'CWebService', '#' => 'getMethodName')); ?>()</div>

<p>the currently requested method name. Empty if no method is being requested.</p>


<div class="detailHeader" id="options-detail">
options<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected array <?php echo CHtml::link('<b>getOptions</b>', array('/site/doc', 'view' => 'CWebService', '#' => 'getOptions')); ?>()</div>

<p>options for creating SoapServer instance</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/soapserver.soapserver.php">http://www.php.net/manual/en/soapserver.soapserver.php</a></li>
</ul>
</div>

<div class="detailHeader" id="persistence-detail">
persistence<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$persistence</b>;</div>

<p>the persistence mode of the SOAP server.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/soapserver.setpersistence.php">http://www.php.net/manual/en/soapserver.setpersistence.php</a></li>
</ul>
</div>

<div class="detailHeader" id="provider-detail">
provider<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string|object <b>$provider</b>;</div>

<p>the web service provider class or object.
If specified as a class name, it can be a path alias.</p>


<div class="detailHeader" id="serviceUrl-detail">
serviceUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$serviceUrl</b>;</div>

<p>the URL for the Web service. This is required by <?php echo CHtml::link('generateWsdl()', array('/site/doc', 'view' => 'CWebService', '#' => 'generateWsdl')); ?> and <?php echo CHtml::link('renderWsdl()', array('/site/doc', 'view' => 'CWebService', '#' => 'renderWsdl')); ?>.</p>


<div class="detailHeader" id="soapVersion-detail">
soapVersion<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$soapVersion</b>;</div>

<p>SOAP version (e.g. '1.1' or '1.2'). Defaults to null, meaning not set.</p>


<div class="detailHeader" id="wsdlCacheDuration-detail">
wsdlCacheDuration<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public integer <b>$wsdlCacheDuration</b>;</div>

<p>number of seconds that the generated WSDL can remain valid in cache. Defaults to 0, meaning no caching.</p>


<div class="detailHeader" id="wsdlUrl-detail">
wsdlUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$wsdlUrl</b>;</div>

<p>the URL for WSDL. This is required by <?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CWebService', '#' => 'run')); ?>.</p>


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
public void <b>__construct</b>(mixed $provider, string $wsdlUrl, string $serviceUrl)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$provider</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the web service provider class name or object</td>
</tr>
<tr>
  <td class="paramNameCol">$wsdlUrl</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL for WSDL. This is required by <?php echo CHtml::link('run()', array('/site/doc', 'view' => 'CWebService', '#' => 'run')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$serviceUrl</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL for the Web service. This is required by <?php echo CHtml::link('generateWsdl()', array('/site/doc', 'view' => 'CWebService', '#' => 'generateWsdl')); ?> and <?php echo CHtml::link('renderWsdl()', array('/site/doc', 'view' => 'CWebService', '#' => 'renderWsdl')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\services\CWebService.php#L99">yii\web\services\CWebService.php#L99</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$provider</span><span style="color: #007700">,</span><span style="color: #0000BB">$wsdlUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">provider</span><span style="color: #007700">=</span><span style="color: #0000BB">$provider</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wsdlUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$wsdlUrl</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="generateWsdl-detail">
generateWsdl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>generateWsdl</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated WSDL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\services\CWebService.php#L141">yii\web\services\CWebService.php#L141</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">generateWsdl</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$providerClass</span><span style="color: #007700">=</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">provider</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">provider</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">provider</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wsdlCacheDuration</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$cache</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #DD0000">'Yii.CWebService.'</span><span style="color: #007700">.</span><span style="color: #0000BB">$providerClass</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceUrl</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encoding</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">=</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$generator</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generatorConfig</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">=</span><span style="color: #0000BB">$generator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateWsdl</span><span style="color: #007700">(</span><span style="color: #0000BB">$providerClass</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encoding</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wsdlCacheDuration</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates the WSDL as defined by the provider.
The cached version may be used if the WSDL is found valid in cache.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('wsdlCacheDuration', array('/site/doc', 'view' => 'CWebService', '#' => 'wsdlCacheDuration')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getMethodName-detail">
getMethodName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getMethodName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the currently requested method name. Empty if no method is being requested.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\services\CWebService.php#L215">yii\web\services\CWebService.php#L215</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMethodName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_method</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$HTTP_RAW_POST_DATA</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">$HTTP_RAW_POST_DATA</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://input'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/&lt;.*?:Body[^&gt;]*&gt;\s*&lt;.*?:(\w+)/mi'</span><span style="color: #007700">,</span><span style="color: #0000BB">$request</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_method</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_method</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_method</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getOptions-detail">
getOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>getOptions</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">options for creating SoapServer instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\services\CWebService.php#L235">yii\web\services\CWebService.php#L235</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getOptions</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">soapVersion</span><span style="color: #007700">===</span><span style="color: #DD0000">'1.1'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'soap_version'</span><span style="color: #007700">]=</span><span style="color: #0000BB">SOAP_1_1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">soapVersion</span><span style="color: #007700">===</span><span style="color: #DD0000">'1.2'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'soap_version'</span><span style="color: #007700">]=</span><span style="color: #0000BB">SOAP_1_2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">actor</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'actor'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">actor</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'encoding'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encoding</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">classMap&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$className</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_int</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'classmap'</span><span style="color: #007700">][</span><span style="color: #0000BB">$type</span><span style="color: #007700">]=</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/soapserver.soapserver.php">http://www.php.net/manual/en/soapserver.soapserver.php</a></li>
</ul>
</div>

<div class="detailHeader" id="handleError-detail">
handleError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>handleError</b>(<?php echo CHtml::link('CErrorEvent', array('/site/doc', 'view' => 'CErrorEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CErrorEvent', array('/site/doc', 'view' => 'CErrorEvent')); ?></td>
  <td class="paramDescCol">the PHP error event</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\services\CWebService.php#L110">yii\web\services\CWebService.php#L110</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">handleError</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handled</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$event</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trace</span><span style="color: #007700">=</span><span style="color: #0000BB">debug_backtrace</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #DD0000">'file'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #DD0000">'line'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #DD0000">'file'</span><span style="color: #007700">].</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$trace</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #DD0000">'line'</span><span style="color: #007700">].</span><span style="color: #DD0000">')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">,</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">SOAP_ERROR</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>The PHP error handler.</p>


<div class="detailHeader" id="renderWsdl-detail">
renderWsdl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>renderWsdl</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\services\CWebService.php#L127">yii\web\services\CWebService.php#L127</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderWsdl</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateWsdl</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type:&nbsp;text/xml;charset='</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encoding</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Length:&nbsp;'</span><span style="color: #007700">.(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'mb_strlen'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">mb_strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">,</span><span style="color: #DD0000">'8bit'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates and displays the WSDL as defined by the provider.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('generateWsdl', array('/site/doc', 'view' => 'CWebService', '#' => 'generateWsdl')); ?></li>
</ul>
</div>

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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\services\CWebService.php#L160">yii\web\services\CWebService.php#L160</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">run</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type:&nbsp;text/xml;charset='</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encoding</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">"soap.wsdl_cache_enabled"</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$server</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">SoapServer</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">wsdlUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getOptions</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">attachEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onError'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'handleError'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;try<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">persistence</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setPersistence</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">persistence</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">provider</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$provider</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">provider</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$provider</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">provider</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">method_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$server</span><span style="color: #007700">,</span><span style="color: #DD0000">'setObject'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setObject</span><span style="color: #007700">(</span><span style="color: #0000BB">$provider</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setClass</span><span style="color: #007700">(</span><span style="color: #DD0000">'CSoapObjectWrapper'</span><span style="color: #007700">,</span><span style="color: #0000BB">$provider</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$provider&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">IWebServiceProvider</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$provider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beforeWebMethod</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handle</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$provider</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">afterWebMethod</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handle</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;catch(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCode</span><span style="color: #007700">()!==</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">SOAP_ERROR</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;non-PHP&nbsp;error<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;only&nbsp;log&nbsp;for&nbsp;non-PHP-error&nbsp;case&nbsp;because&nbsp;application's&nbsp;error&nbsp;handler&nbsp;already&nbsp;logs&nbsp;it<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;php&nbsp;&lt;5.2&nbsp;doesn't&nbsp;support&nbsp;string&nbsp;conversion&nbsp;auto-magically<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__toString</span><span style="color: #007700">(),</span><span style="color: #0000BB">CLogger</span><span style="color: #007700">::</span><span style="color: #0000BB">LEVEL_ERROR</span><span style="color: #007700">,</span><span style="color: #DD0000">'application'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getFile</span><span style="color: #007700">().</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLine</span><span style="color: #007700">().</span><span style="color: #DD0000">")\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getTraceAsString</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;We&nbsp;need&nbsp;to&nbsp;end&nbsp;application&nbsp;explicitly&nbsp;because&nbsp;of<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;http://bugs.php.net/bug.php?id=49513<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">onEndRequest</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">CEvent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fault</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">),</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Handles the web service request.</p>


