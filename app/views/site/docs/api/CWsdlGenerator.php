<?php
$this->pageTitle = $this->pageHeading = 'CWsdlGenerator';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CWsdlGenerator';
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
  <td>class CWsdlGenerator &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php">yii\web\services\CWsdlGenerator.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CWsdlGenerator generates the WSDL for a given service class.
<br/><br/>
The WSDL generation is based on the doc comments found in the service class file.
In particular, it recognizes the '@soap' tag in the comment and extracts
API method and type definitions.
<br/><br/>
In a service class, a remote invokable method must be a public method with a doc
comment block containing the '@soap' tag. In the doc comment, the type and name
of every input parameter and the type of the return value should be declared using
the standard phpdoc format.
<br/><br/>
CWsdlGenerator recognizes the following primitive types (case-sensitive) in
the parameter and return type declarations:
<ul>
<li>str/string: maps to xsd:string;</li>
<li>int/integer: maps to xsd:int;</li>
<li>float/double: maps to xsd:float;</li>
<li>bool/boolean: maps to xsd:boolean;</li>
<li>date: maps to xsd:date;</li>
<li>time: maps to xsd:time;</li>
<li>datetime: maps to xsd:dateTime;</li>
<li>array: maps to xsd:string;</li>
<li>object: maps to xsd:struct;</li>
<li>mixed: maps to xsd:anyType.</li>
</ul>
<br/><br/>
If a type is not a primitive type, it is considered as a class type, and
CWsdlGenerator will look for its property declarations. Only public properties
are considered, and they each must be associated with a doc comment block containg
the '@soap' tag. The doc comment block should declare the type of the property.
<br/><br/>
CWsdlGenerator recognizes the array type with the following format:
<pre>
typeName[]: maps to tns:typeNameArray
</pre>
<br/><br/>
The following is an example declaring a remote invokable method:
<pre>
/ **
  * A foo method.
  * @param string name of something
  * @param string value of something
  * @return string[] some array
  * @soap
  * /
public function foo($name,$value) {...}
</pre>
<br/><br/>
And the following is an example declaring a class with remote accessible properties:
<pre>
class Foo {
    / **
      * @var string name of foo {nillable=1, minOccurs=0, maxOccurs=2}
      * @soap
      * /
    public $name;
    / **
      * @var Member[] members of foo
      * @soap
      * /
    public $members;
}
</pre>
In the above, the 'members' property is an array of 'Member' objects. Since 'Member' is not
a primitive type, CWsdlGenerator will look further to find the definition of 'Member'.
<br/><br/>
Optionally, extra attributes (nillable, minOccurs, maxOccurs) can be defined for each
property by enclosing definitions into curly brackets and separated by comma like so:
<br/><br/>
{[attribute1 = value1][, attribute2 = value2], ...}
<br/><br/>
where the attribute can be one of following:
<ul>
<li>nillable = [0|1|true|false]</li>
<li>minOccurs = n; where n>=0</li>
<li>maxOccurs = n; where [n>=0|unbounded]</li>
</ul>
<br/><br/>
Additionally, each complex data type can have assigned a soap indicator flag declaring special usage for such a data type.
A soap indicator must be declared in the doc comment block with the '@soap-indicator' tag.
Following soap indicators are currently supported:
<ul>
<li>all - (default) allows any sorting order of child nodes</li>
<li>sequence - all child nodes in WSDL XML file will be expected in predefined order</li>
<li>choice - supplied can be either of the child elements</li>
</ul>
The Group indicators can be also injected via custom soap definitions as XML node into WSDL structure.
<br/><br/>
In the following example, class Foo will create a XML node <xsd:Foo><xsd:sequence> ... </xsd:sequence></xsd:Foo> with children attributes expected in pre-defined order.
<pre>
/ *
  * @soap-indicator sequence
  * /
class Foo {
    ...
}
</pre>
For more on soap indicators, see See <a href="http://www.w3schools.com/schema/schema_complex_indicators.asp">http://www.w3schools.com/schema/schema_complex_indicators.asp</a>.
<br/><br/>
Since the variability of WSDL definitions is virtually unlimited, a special doc comment tag '@soap-wsdl' can be used in order to inject any custom XML string into generated WSDL file.
If such a block of the code is found in class's comment block, then it will be used instead of parsing and generating standard attributes within the class.
This gives virtually unlimited flexibility in defining data structures of any complexity.
Following is an example of defining custom piece of WSDL XML node:
<pre>
/ *
  * @soap-wsdl &lt;xsd:sequence&gt;
  * @soap-wsdl 	&lt;xsd:element minOccurs=&quot;1&quot; maxOccurs=&quot;1&quot; nillable=&quot;false&quot; name=&quot;name&quot; type=&quot;xsd:string&quot;/&gt;
  * @soap-wsdl 	&lt;xsd:choice minOccurs=&quot;1&quot; maxOccurs=&quot;1&quot; nillable=&quot;false&quot;&gt;
  * @soap-wsdl 		&lt;xsd:element minOccurs=&quot;1&quot; maxOccurs=&quot;1&quot; nillable=&quot;false&quot; name=&quot;age&quot; type=&quot;xsd:integer&quot;/&gt;
  * @soap-wsdl 		&lt;xsd:element minOccurs=&quot;1&quot; maxOccurs=&quot;1&quot; nillable=&quot;false&quot; name=&quot;date_of_birth&quot; type=&quot;xsd:date&quot;/&gt;
  * @soap-wsdl 	&lt;/xsd:choice&gt;
  * @soap-wsdl &lt;/xsd:sequence&gt;
  * /
class User {
    / **
      * @var string User name {minOccurs=1, maxOccurs=1}
      * @soap
      * /
    public $name;
    / **
      * @var integer User age {nillable=0, minOccurs=1, maxOccurs=1}
      * @example 35
      * @soap
      * /
    public $age;
    / **
      * @var date User's birthday {nillable=0, minOccurs=1, maxOccurs=1}
      * @example 1980-05-27
      * @soap
      * /
    public $date_of_birth;
}
</pre>
In the example above, WSDL generator would inject under XML node <xsd:User> the code block defined by @soap-wsdl lines.
<br/><br/>
By inserting into SOAP URL link the parameter "?makedoc", WSDL generator will output human-friendly overview of all complex data types rather than XML WSDL file.
Each complex type is described in a separate HTML table and recognizes also the '@example' PHPDoc tag. See <?php echo CHtml::link('buildHtmlDocs()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'buildHtmlDocs')); ?>.</div>
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
<tr id="namespace">
  <td><?php echo CHtml::link('namespace', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'namespace-detail')); ?></td>
  <td>string</td>
  <td>the namespace to be used in the generated WSDL.</td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="serviceName">
  <td><?php echo CHtml::link('serviceName', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'serviceName-detail')); ?></td>
  <td>string</td>
  <td>the name of the generated WSDL.</td>
  <td>CWsdlGenerator</td>
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
<tr id="messages">
  <td><?php echo CHtml::link('messages', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'messages-detail')); ?></td>
  <td>array</td>
  <td>Map of request and response types for all operations.</td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="operations">
  <td><?php echo CHtml::link('operations', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'operations-detail')); ?></td>
  <td>array</td>
  <td>List of recognized SOAP operations that will become remotely available.</td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="typeMap">
  <td><?php echo CHtml::link('typeMap', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'typeMap-detail')); ?></td>
  <td></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="types">
  <td><?php echo CHtml::link('types', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'types-detail')); ?></td>
  <td>array</td>
  <td>List of complex types used by operations.</td>
  <td>CWsdlGenerator</td>
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
<tr id="buildHtmlDocs">
  <td><?php echo CHtml::link('buildHtmlDocs()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'buildHtmlDocs-detail')); ?></td>
  <td>Generate human friendly HTML documentation for complex data types.</td>
  <td>CWsdlGenerator</td>
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
  <td><?php echo CHtml::link('generateWsdl()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'generateWsdl-detail')); ?></td>
  <td>Generates the WSDL for the given class.</td>
  <td>CWsdlGenerator</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
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
<tr id="addBindings">
  <td><?php echo CHtml::link('addBindings()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'addBindings-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="addMessages">
  <td><?php echo CHtml::link('addMessages()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'addMessages-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="addPortTypes">
  <td><?php echo CHtml::link('addPortTypes()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'addPortTypes-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="addService">
  <td><?php echo CHtml::link('addService()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'addService-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="addTypes">
  <td><?php echo CHtml::link('addTypes()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'addTypes-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="buildDOM">
  <td><?php echo CHtml::link('buildDOM()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'buildDOM-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="createOperationElement">
  <td><?php echo CHtml::link('createOperationElement()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'createOperationElement-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="createPortElement">
  <td><?php echo CHtml::link('createPortElement()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'createPortElement-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="getWsdlElementAttributes">
  <td><?php echo CHtml::link('getWsdlElementAttributes()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'getWsdlElementAttributes-detail')); ?></td>
  <td>Parse attributes nillable, minOccurs, maxOccurs</td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="injectDom">
  <td><?php echo CHtml::link('injectDom()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'injectDom-detail')); ?></td>
  <td>Import custom XML source node into WSDL document under specified target node</td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="processMethod">
  <td><?php echo CHtml::link('processMethod()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'processMethod-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
<tr id="processType">
  <td><?php echo CHtml::link('processType()', array('/site/doc', 'view' => 'CWsdlGenerator', '#' => 'processType-detail')); ?></td>
  <td></td>
  <td>CWsdlGenerator</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="messages-detail">
messages<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$messages</b>;</div>

<p>Map of request and response types for all operations.</p>


<div class="detailHeader" id="namespace-detail">
namespace<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$namespace</b>;</div>

<p>the namespace to be used in the generated WSDL.
If not set, it defaults to the name of the class that WSDL is generated upon.</p>


<div class="detailHeader" id="operations-detail">
operations<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$operations</b>;</div>

<p>List of recognized SOAP operations that will become remotely available.
All methods with declared @soap parameter will be included here in the format operation1 => description1, operation2 => description2, ..</p>


<div class="detailHeader" id="serviceName-detail">
serviceName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$serviceName</b>;</div>

<p>the name of the generated WSDL.
If not set, it defaults to "urn:{$className}wsdl".</p>


<div class="detailHeader" id="typeMap-detail">
typeMap<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected static <b>$typeMap</b>;</div>

<p></p>


<div class="detailHeader" id="types-detail">
types<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected array <b>$types</b>;</div>

<p>List of complex types used by operations.
If an SOAP operation defines complex input or output type, all objects are included here containing all sub-parameters.
For instance, if an SOAP operation "createUser" requires complex input object "User", then the object "User" will be included here with declared subparameters such as "firstname", "lastname", etc..</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addBindings-detail">
addBindings()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>addBindings</b>(DOMDocument $dom)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dom</td>
  <td class="paramTypeCol">DOMDocument</td>
  <td class="paramDescCol">Represents an entire HTML or XML document; serves as the root of the document tree</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L571">yii\web\services\CWsdlGenerator.php#L571</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addBindings</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$binding</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:binding'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$binding</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">.</span><span style="color: #DD0000">'Binding'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$binding</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'type'</span><span style="color: #007700">,</span><span style="color: #DD0000">'tns:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">.</span><span style="color: #DD0000">'PortType'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapBinding</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'soap:binding'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapBinding</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'style'</span><span style="color: #007700">,</span><span style="color: #DD0000">'rpc'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapBinding</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'transport'</span><span style="color: #007700">,</span><span style="color: #DD0000">'http://schemas.xmlsoap.org/soap/http'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$binding</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$soapBinding</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">documentElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$binding</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">operations&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$doc</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$binding</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createOperationElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="addMessages-detail">
addMessages()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>addMessages</b>(DOMDocument $dom)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dom</td>
  <td class="paramTypeCol">DOMDocument</td>
  <td class="paramDescCol">Represents an entire HTML or XML document; serves as the root of the document tree</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L514">yii\web\services\CWsdlGenerator.php#L514</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addMessages</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">messages&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$message</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:message'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">messages</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$partName</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$part</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$part</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$partElement</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:part'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$partElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$partName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$partElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'type'</span><span style="color: #007700">,</span><span style="color: #0000BB">$part</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$partElement</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">documentElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="addPortTypes-detail">
addPortTypes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>addPortTypes</b>(DOMDocument $dom)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dom</td>
  <td class="paramTypeCol">DOMDocument</td>
  <td class="paramDescCol">Represents an entire HTML or XML document; serves as the root of the document tree</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L537">yii\web\services\CWsdlGenerator.php#L537</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addPortTypes</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$portType</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:portType'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$portType</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">.</span><span style="color: #DD0000">'PortType'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">documentElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$portType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">operations&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$doc</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$portType</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPortElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$doc</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="addService-detail">
addService()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>addService</b>(DOMDocument $dom, string $serviceUrl)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dom</td>
  <td class="paramTypeCol">DOMDocument</td>
  <td class="paramDescCol">Represents an entire HTML or XML document; serves as the root of the document tree</td>
</tr>
<tr>
  <td class="paramNameCol">$serviceUrl</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Web service URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L621">yii\web\services\CWsdlGenerator.php#L621</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addService</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">,</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$service</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:service'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$service</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">.</span><span style="color: #DD0000">'Service'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:port'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">.</span><span style="color: #DD0000">'Port'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'binding'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'tns:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">.</span><span style="color: #DD0000">'Binding'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapAddress</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'soap:address'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapAddress</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'location'</span><span style="color: #007700">,</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$soapAddress</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$service</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$port</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">documentElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$service</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="addTypes-detail">
addTypes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>addTypes</b>(DOMDocument $dom)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dom</td>
  <td class="paramTypeCol">DOMDocument</td>
  <td class="paramDescCol">Represents an entire HTML or XML document; serves as the root of the document tree</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L436">yii\web\services\CWsdlGenerator.php#L436</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">addTypes</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:types'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'xsd:schema'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'targetNamespace'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">namespace</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$phpType</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">,</span><span style="color: #DD0000">'Array'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">)-</span><span style="color: #0000BB">5</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;simple&nbsp;type<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$complexType</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'xsd:complexType'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">,</span><span style="color: #DD0000">'tns:'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$complexType</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$complexType</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$complexContent</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'xsd:complexContent'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$restriction</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'xsd:restriction'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$restriction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'base'</span><span style="color: #007700">,</span><span style="color: #DD0000">'soap-enc:Array'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'xsd:attribute'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'ref'</span><span style="color: #007700">,</span><span style="color: #DD0000">'soap-enc:arrayType'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:arrayType'</span><span style="color: #007700">,</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">)-</span><span style="color: #0000BB">5</span><span style="color: #007700">).</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$arrayType</span><span style="color: #007700">=(</span><span style="color: #0000BB">$dppos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">,</span><span style="color: #DD0000">':'</span><span style="color: #007700">))&nbsp;!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">,</span><span style="color: #0000BB">$dppos&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;strip&nbsp;namespace,&nbsp;if&nbsp;any<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$arrayType</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$arrayType</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,-</span><span style="color: #0000BB">5</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;strip&nbsp;'Array'&nbsp;from&nbsp;name<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$arrayType</span><span style="color: #007700">=(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$typeMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$arrayType</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #DD0000">'xsd:'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'tns:'</span><span style="color: #007700">)&nbsp;.</span><span style="color: #0000BB">$arrayType</span><span style="color: #007700">.</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:arrayType'</span><span style="color: #007700">,</span><span style="color: #0000BB">$arrayType</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$restriction</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$complexContent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$restriction</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$complexType</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$complexContent</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$complexType</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$phpType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'custom_wsdl'</span><span style="color: #007700">]!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$custom_dom</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$custom_dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadXML</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;root&nbsp;xmlns:xsd="http://www.w3.org/2001/XMLSchema"&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'custom_wsdl'</span><span style="color: #007700">].</span><span style="color: #DD0000">'&lt;/root&gt;'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$custom_dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">documentElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">childNodes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$el</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">injectDom</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">,</span><span style="color: #0000BB">$complexType</span><span style="color: #007700">,</span><span style="color: #0000BB">$el</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$all</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'xsd:'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'indicator'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'minOccurs'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$all</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'minOccurs'</span><span style="color: #007700">,</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'minOccurs'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxOccurs'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$all</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'maxOccurs'</span><span style="color: #007700">,</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxOccurs'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'nillable'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$all</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'nillable'</span><span style="color: #007700">,</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'nillable'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$xmlType</span><span style="color: #007700">[</span><span style="color: #DD0000">'properties'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'xsd:element'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'minOccurs'</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'maxOccurs'</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'nillable'</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$element</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'type'</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$all</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$element</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$complexType</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$all</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$complexType</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$types</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">documentElement</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$types</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="buildDOM-detail">
buildDOM()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>buildDOM</b>(string $serviceUrl, string $encoding)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$serviceUrl</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Web service URL</td>
</tr>
<tr>
  <td class="paramNameCol">$encoding</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">encoding of the WSDL. Defaults to 'UTF-8'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L409">yii\web\services\CWsdlGenerator.php#L409</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">buildDOM</span><span style="color: #007700">(</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$xml</span><span style="color: #007700">=</span><span style="color: #DD0000">"&lt;?xml&nbsp;version=\"1.0\"&nbsp;encoding=\"</span><span style="color: #0000BB">$encoding</span><span style="color: #DD0000">\"?&gt;<br />&lt;definitions&nbsp;name=\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">}</span><span style="color: #DD0000">\"&nbsp;targetNamespace=\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">namespace</span><span style="color: #007700">}</span><span style="color: #DD0000">\"<br />&nbsp;xmlns=\"http://schemas.xmlsoap.org/wsdl/\"<br />&nbsp;xmlns:tns=\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">namespace</span><span style="color: #007700">}</span><span style="color: #DD0000">\"<br />&nbsp;xmlns:soap=\"http://schemas.xmlsoap.org/wsdl/soap/\"<br />&nbsp;xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"<br />&nbsp;xmlns:wsdl=\"http://schemas.xmlsoap.org/wsdl/\"<br />&nbsp;xmlns:soap-enc=\"http://schemas.xmlsoap.org/soap/encoding/\"&gt;&lt;/definitions&gt;"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dom</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatOutput</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadXml</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addTypes</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addMessages</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addPortTypes</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addBindings</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addService</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">,</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$dom</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="buildHtmlDocs-detail">
buildHtmlDocs()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>buildHtmlDocs</b>(bool $return=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$return</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">If true, generated HTML output will be returned rather than directly sent to output buffer</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L655">yii\web\services\CWsdlGenerator.php#L655</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">buildHtmlDocs</span><span style="color: #007700">(</span><span style="color: #0000BB">$return</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;html&gt;&lt;head&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;meta&nbsp;http-equiv="Content-Type"&nbsp;content="text/html;&nbsp;charset=utf-8"&nbsp;/&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;style&nbsp;type="text/css"&gt;<br />table{border-collapse:&nbsp;collapse;background-color:&nbsp;#DDDDDD;}<br />tr{background-color:&nbsp;#FFFFFF;}<br />th{background-color:&nbsp;#EEEEEE;}<br />th,&nbsp;td{font-size:&nbsp;12px;font-family:&nbsp;courier;padding:&nbsp;3px;}<br />&lt;/style&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;/head&gt;&lt;body&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;h2&gt;WSDL&nbsp;documentation&nbsp;for&nbsp;service&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">.</span><span style="color: #DD0000">'&lt;/h2&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;p&gt;Generated&nbsp;on&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'d.m.Y&nbsp;H:i:s'</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;table&nbsp;border="0"&nbsp;cellspacing="1"&nbsp;cellpadding="1"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;tr&gt;&lt;td&gt;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$object</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$options</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)&nbsp;||&nbsp;empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'properties'</span><span style="color: #007700">])&nbsp;||&nbsp;empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'properties'</span><span style="color: #007700">])){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'properties'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\n\n&lt;h3&gt;Object:&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$object</span><span style="color: #007700">}</span><span style="color: #DD0000">&lt;/h3&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;table&nbsp;border="1"&nbsp;cellspacing="1"&nbsp;cellpadding="1"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;tr&gt;&lt;th&gt;#&lt;/th&gt;&lt;th&gt;Attribute&lt;/th&gt;&lt;th&gt;Type&lt;/th&gt;&lt;th&gt;Nill&lt;/th&gt;&lt;th&gt;Min&lt;/th&gt;&lt;th&gt;Max&lt;/th&gt;&lt;th&gt;Description&lt;/th&gt;&lt;th&gt;Example&lt;/th&gt;&lt;/tr&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$param</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++</span><span style="color: #0000BB">$c</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\n&lt;tr&gt;"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\t&lt;td&gt;</span><span style="color: #007700">{</span><span style="color: #0000BB">$c</span><span style="color: #007700">}</span><span style="color: #DD0000">&lt;/td&gt;"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\t&lt;td&gt;</span><span style="color: #007700">{</span><span style="color: #0000BB">$param</span><span style="color: #007700">}</span><span style="color: #DD0000">&lt;/td&gt;"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\t&lt;td&gt;"</span><span style="color: #007700">.(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'xsd:'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$prop</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])).</span><span style="color: #DD0000">"&lt;/td&gt;"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\t&lt;td&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$prop</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">].</span><span style="color: #DD0000">"&lt;/td&gt;"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\t&lt;td&gt;"</span><span style="color: #007700">.(</span><span style="color: #0000BB">$prop</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'&amp;nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]).</span><span style="color: #DD0000">"&lt;/td&gt;"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\t&lt;td&gt;"</span><span style="color: #007700">.(</span><span style="color: #0000BB">$prop</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'&amp;nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">]).</span><span style="color: #DD0000">"&lt;/td&gt;"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\t&lt;td&gt;</span><span style="color: #007700">{</span><span style="color: #0000BB">$prop</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">&lt;/td&gt;"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\t&lt;td&gt;"</span><span style="color: #007700">.(</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$prop</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">])==</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'&amp;nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">]).</span><span style="color: #DD0000">"&lt;/td&gt;"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n&lt;/tr&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\n&lt;/table&gt;&lt;br/&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'No&nbsp;complex&nbsp;data&nbsp;type&nbsp;found!'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/body&gt;&lt;/html&gt;'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$return</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//&nbsp;end&nbsp;the&nbsp;app&nbsp;to&nbsp;avoid&nbsp;conflict&nbsp;with&nbsp;text/xml&nbsp;header<br /></span><span style="color: #007700">}</span>
</span>
</code></div>
</div>
<p>Generate human friendly HTML documentation for complex data types.
This method can be invoked either by inserting URL parameter "&makedoc" into URL link, e.g. "http://www.mydomain.com/soap/create?makedoc", or simply by calling from another script with argument $return=true.
<br/><br/>
Each complex data type is described in a separate HTML table containing following columns:
<ul>
<li># - attribute ID</li>
<li>Attribute - attribute name, e.g. firstname</li>
<li>Type - attribute type, e.g. integer, date, tns:SoapPovCalculationResultArray</li>
<li>Nill - true|false - whether the attribute is nillable</li>
<li>Min - minimum number of occurrences</li>
<li>Max - maximum number of occurrences</li>
<li>Description - Detailed description of the attribute.</li>
<li>Example - Attribute example value if provided via PHPDoc property @example.</li>
<ul></p>


<div class="detailHeader" id="createOperationElement-detail">
createOperationElement()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>createOperationElement</b>(DOMDocument $dom, string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dom</td>
  <td class="paramTypeCol">DOMDocument</td>
  <td class="paramDescCol">Represents an entire HTML or XML document; serves as the root of the document tree</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">method name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L592">yii\web\services\CWsdlGenerator.php#L592</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createOperationElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:operation'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapOperation</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'soap:operation'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapOperation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'soapAction'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">namespace</span><span style="color: #007700">.</span><span style="color: #DD0000">'#'</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapOperation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'style'</span><span style="color: #007700">,</span><span style="color: #DD0000">'rpc'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:input'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:output'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapBody</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'soap:body'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapBody</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'use'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'encoded'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapBody</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'namespace'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">namespace</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$soapBody</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'encodingStyle'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'http://schemas.xmlsoap.org/soap/encoding/'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$soapBody</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(clone&nbsp;</span><span style="color: #0000BB">$soapBody</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$soapOperation</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="createPortElement-detail">
createPortElement()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>createPortElement</b>(DOMDocument $dom, string $name, string $doc)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dom</td>
  <td class="paramTypeCol">DOMDocument</td>
  <td class="paramDescCol">Represents an entire HTML or XML document; serves as the root of the document tree</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">method name</td>
</tr>
<tr>
  <td class="paramNameCol">$doc</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">doc</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L551">yii\web\services\CWsdlGenerator.php#L551</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createPortElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$doc</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:operation'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:input'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$input</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'message'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'tns:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'Request'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:output'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'message'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'tns:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'Response'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'wsdl:documentation'</span><span style="color: #007700">,</span><span style="color: #0000BB">$doc</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$operation</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="generateWsdl-detail">
generateWsdl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>generateWsdl</b>(string $className, string $serviceUrl, string $encoding='UTF-8')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">class name</td>
</tr>
<tr>
  <td class="paramNameCol">$serviceUrl</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Web service URL</td>
</tr>
<tr>
  <td class="paramNameCol">$encoding</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">encoding of the WSDL. Defaults to 'UTF-8'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated WSDL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L209">yii\web\services\CWsdlGenerator.php#L209</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">generateWsdl</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">=</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">operations</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">messages</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">serviceName</span><span style="color: #007700">=</span><span style="color: #0000BB">$className</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">namespace</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">namespace</span><span style="color: #007700">=</span><span style="color: #DD0000">'urn:'</span><span style="color: #007700">.</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$className</span><span style="color: #007700">).</span><span style="color: #DD0000">'wsdl'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$reflection</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$reflection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMethods</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isPublic</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processMethod</span><span style="color: #007700">(</span><span style="color: #0000BB">$method</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildDOM</span><span style="color: #007700">(</span><span style="color: #0000BB">$serviceUrl</span><span style="color: #007700">,</span><span style="color: #0000BB">$encoding</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'makedoc'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buildHtmlDocs</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$wsdl</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates the WSDL for the given class.</p>


<div class="detailHeader" id="getWsdlElementAttributes-detail">
getWsdlElementAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>getWsdlElementAttributes</b>(string $comment)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$comment</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Extracted PHPDoc comment</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L354">yii\web\services\CWsdlGenerator.php#L354</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getWsdlElementAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$comment</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nillable</span><span style="color: #007700">=</span><span style="color: #0000BB">$minOccurs</span><span style="color: #007700">=</span><span style="color: #0000BB">$maxOccurs</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/{(.+)}/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #0000BB">$attr</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/((\w+)\s*=\s*(\w+))/mi'</span><span style="color: #007700">,</span><span style="color: #0000BB">$attr</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB">$attr</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$attr</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$prop</span><span style="color: #007700">=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$prop</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$val</span><span style="color: #007700">=</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$attr</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">$id</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$prop</span><span style="color: #007700">==</span><span style="color: #DD0000">'nillable'</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$val</span><span style="color: #007700">==</span><span style="color: #DD0000">'false'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$val</span><span style="color: #007700">==</span><span style="color: #DD0000">'true'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nillable</span><span style="color: #007700">=</span><span style="color: #0000BB">$val</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nillable</span><span style="color: #007700">=</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'true'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'false'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}elseif(</span><span style="color: #0000BB">$prop</span><span style="color: #007700">==</span><span style="color: #DD0000">'minoccurs'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$minOccurs</span><span style="color: #007700">=</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$prop</span><span style="color: #007700">==</span><span style="color: #DD0000">'maxoccurs'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$maxOccurs</span><span style="color: #007700">=(</span><span style="color: #0000BB">$val</span><span style="color: #007700">==</span><span style="color: #DD0000">'unbounded'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #DD0000">'unbounded'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'nillable'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$nillable</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'minOccurs'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$minOccurs</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'maxOccurs'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$maxOccurs<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Parse attributes nillable, minOccurs, maxOccurs</p>


<div class="detailHeader" id="injectDom-detail">
injectDom()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>injectDom</b>(DOMDocument $dom, DOMElement $target, DOMNode $source)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$dom</td>
  <td class="paramTypeCol">DOMDocument</td>
  <td class="paramDescCol">XML WSDL document being generated</td>
</tr>
<tr>
  <td class="paramNameCol">$target</td>
  <td class="paramTypeCol">DOMElement</td>
  <td class="paramDescCol">XML node, to which will be appended $source node</td>
</tr>
<tr>
  <td class="paramNameCol">$source</td>
  <td class="paramTypeCol">DOMNode</td>
  <td class="paramDescCol">Source XML node to be imported</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L389">yii\web\services\CWsdlGenerator.php#L389</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">injectDom</span><span style="color: #007700">(</span><span style="color: #0000BB">DOMDocument&nbsp;$dom</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">DOMElement&nbsp;$target</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">DOMNode&nbsp;$source</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$source</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nodeType</span><span style="color: #007700">!=</span><span style="color: #0000BB">XML_ELEMENT_NODE</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$import</span><span style="color: #007700">=</span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">nodeName</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$source</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$attr</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$import</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attr</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,</span><span style="color: #0000BB">$attr</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$source</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">childNodes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$child</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">injectDom</span><span style="color: #007700">(</span><span style="color: #0000BB">$dom</span><span style="color: #007700">,</span><span style="color: #0000BB">$import</span><span style="color: #007700">,</span><span style="color: #0000BB">$child</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$target</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$import</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Import custom XML source node into WSDL document under specified target node</p>


<div class="detailHeader" id="processMethod-detail">
processMethod()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>processMethod</b>(ReflectionMethod $method)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$method</td>
  <td class="paramTypeCol">ReflectionMethod</td>
  <td class="paramDescCol">method</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L237">yii\web\services\CWsdlGenerator.php#L237</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">processMethod</span><span style="color: #007700">(</span><span style="color: #0000BB">$method</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">=</span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDocComment</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #DD0000">'@soap'</span><span style="color: #007700">)===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,array(</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #DD0000">"\r"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;line&nbsp;endings&nbsp;consistent:&nbsp;win&nbsp;-&gt;&nbsp;unix,&nbsp;mac&nbsp;-&gt;&nbsp;unix<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">=</span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^\s*\**(\s*?$|\s*)/m'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">$method</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParameters</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^@param\s+([\w\.]+(\[\s*\])?)\s*?(.*)$/im'</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$n</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">[</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()]=array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processType</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]),&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]));&nbsp;</span><span style="color: #FF8000">//&nbsp;name&nbsp;=&gt;&nbsp;type,&nbsp;doc<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">messages</span><span style="color: #007700">[</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">.</span><span style="color: #DD0000">'Request'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$message</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^@return\s+([\w\.]+(\[\s*\])?)\s*?(.*)$/im'</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$return</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processType</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]),</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]));&nbsp;</span><span style="color: #FF8000">//&nbsp;type,&nbsp;doc<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$return</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">messages</span><span style="color: #007700">[</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">.</span><span style="color: #DD0000">'Response'</span><span style="color: #007700">]=array(</span><span style="color: #DD0000">'return'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$return</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^\/\*+\s*([^@]*?)\n@/s'</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$doc</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$doc</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">operations</span><span style="color: #007700">[</span><span style="color: #0000BB">$methodName</span><span style="color: #007700">]=</span><span style="color: #0000BB">$doc</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="processType-detail">
processType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>processType</b>(string $type)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">PHP variable type</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\services\CWsdlGenerator.php#L272">yii\web\services\CWsdlGenerator.php#L272</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">processType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$typeMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$typeMap</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #DD0000">'tns:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;array&nbsp;of&nbsp;types<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">.</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'tns:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$type</span><span style="color: #007700">.</span><span style="color: #DD0000">'Array'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processType</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">.</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;process&nbsp;class&nbsp;/&nbsp;complex&nbsp;type<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$class</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">=</span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDocComment</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,array(</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #DD0000">"\r"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;line&nbsp;endings&nbsp;consistent:&nbsp;win&nbsp;-&gt;&nbsp;unix,&nbsp;mac&nbsp;-&gt;&nbsp;unix<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^\s*\**(\s*?$|\s*)/m'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;extract&nbsp;soap&nbsp;indicator&nbsp;flag,&nbsp;if&nbsp;defined,&nbsp;e.g.&nbsp;@soap-indicator&nbsp;sequence<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;see&nbsp;http://www.w3schools.com/schema/schema_complex_indicators.asp<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^@soap-indicator\s+(\w+)\s*?(.*)$/im'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$indicator</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWsdlElementAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$indicator</span><span style="color: #007700">=</span><span style="color: #DD0000">'all'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWsdlElementAttributes</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$custom_wsdl</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^@soap-wsdl\s+(\S.*)$/im'</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$custom_wsdl</span><span style="color: #007700">=</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">]=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'indicator'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$indicator</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'nillable'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'nillable'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'minOccurs'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'minOccurs'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'maxOccurs'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxOccurs'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom_wsdl'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$custom_wsdl</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'properties'</span><span style="color: #007700">=&gt;array()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$class</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getProperties</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$property</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$comment</span><span style="color: #007700">=</span><span style="color: #0000BB">$property</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDocComment</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$property</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isPublic</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #DD0000">'@soap'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/@var\s+([\w\.]+(\[\s*\])?)\s*?(.*)$/mi'</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getWsdlElementAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/{(.+)}/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #0000BB">$attr</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$attr</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;extract&nbsp;PHPDoc&nbsp;@example<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$example</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">"/@example[:]?(.+)/mi"</span><span style="color: #007700">,</span><span style="color: #0000BB">$comment</span><span style="color: #007700">,</span><span style="color: #0000BB">$match</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$example</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">types</span><span style="color: #007700">[</span><span style="color: #0000BB">$type</span><span style="color: #007700">][</span><span style="color: #DD0000">'properties'</span><span style="color: #007700">][</span><span style="color: #0000BB">$property</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()]=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processType</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'nillable'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'minOccurs'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxOccurs'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$example<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;name&nbsp;=&gt;&nbsp;type,&nbsp;doc,&nbsp;nillable,&nbsp;minOccurs,&nbsp;maxOccurs,&nbsp;example<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'tns:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


